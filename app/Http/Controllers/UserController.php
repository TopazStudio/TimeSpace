<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\UserService;
use App\Http\Controllers\Controller;
use App\Util\CRUD\HandlesCRUDRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{
    use HandlesCRUDRequest;

    /**
     * Create a new controller instance.
     *
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
//        $this->middleware('guest');
        $this->CRUDService = $userService;

        $this->addValidationRules = [
            'role' => 'required|string|max:191',
            'full_name' => 'required|string|max:255',
            'name_prefix' => 'required|string|max:50',
            'name_abbrev' => 'required|string|max:50',
            'status' => 'required|integer|max:2',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'tel' => 'required|string|min:10',
            'identification_no' => 'required|string|min:6',
        ];

        $this->updateValidationRules = [
            'status' => 'required|integer|max:2',
        ];
    }
}
