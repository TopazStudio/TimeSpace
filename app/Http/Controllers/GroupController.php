<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 23/06/18
 * Time: 11:53 AM
 */

namespace App\Http\Controllers;


use App\Service\GroupService;
use App\Util\CRUD\HandlesCRUDRequest;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    use HandlesCRUDRequest;

    public function __construct(GroupService $CRUDService)
    {
        $this->CRUDService = $CRUDService;
    }

    function joinGroup(Request $request){
        $this->validate($request,[
            'user_id' => 'required|integer',
            'group_id' => 'required|integer'
        ]);

        if($this->CRUDService->joinGroup($request)){
            return $this->successResponse($this->CRUDService->data,$this->CRUDService->status);
        }else{
            return $this->errorResponse($this->CRUDService->errors,$this->CRUDService->data,$this->CRUDService->status);
        }
    }

    function leaveGroup(Request $request){
        $this->validate($request,[
            'user_id' => 'required|integer',
            'group_id' => 'required|integer'
        ]);

        if($this->CRUDService->leaveGroup($request)){
            return $this->successResponse($this->CRUDService->data,$this->CRUDService->status);
        }else{
            return $this->errorResponse($this->CRUDService->errors,$this->CRUDService->data,$this->CRUDService->status);
        }
    }
}