<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 15/06/18
 * Time: 10:03 PM
 */

namespace App\Http\Controllers;


use App\Service\AuthService;
use App\Traits\DoesResponses;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * @var $authService \App\Service\AuthService
    */
    private $authService;

    public function __construct(AuthService $authService){
        $this->authService = $authService;
    }

    /**
     * Token that should be sent on authentication of user
     *
     * */
    protected $token;

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        if ($request->fromUser){
            try {
                if (! $this->token = JWTAuth::fromUser($request->user)) {
                    return false;
                }
            } catch (JWTException $e) {
                return false;
            }
            return true;
        }else{
            try {
                if (! $this->token = JWTAuth::attempt($this->credentials($request))) {
                    return false;
                }
            } catch (JWTException $e) {
                return false;
            }
            return true;
        }
    }

    public function signInWithGoogle(Request $request){
        $this->validate($request,[
            "token" => "required|string"
        ]);

        return $this->authService->signInWithGoogle($request,$this);
    }

    public function signInWithFacebook(Request $request,\SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb){
        $this->validate($request,[
            "token" => "required|string"
        ]);

        return $this->authService->signInWithFacebook($request,$this,$fb);
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if (!$user){//FROM USER AUTHENTICATION
            $user = $request->user; //FIND A WAY TO ADD THE USER INTO THE SESSION
        }
        return $this->successResponse(['token'=>$this->token,'user'=>$user]);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->successResponse('logged_out');
    }
}