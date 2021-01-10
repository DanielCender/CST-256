<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;
use App\Models\UserModel;

class LoginController extends Controller
{
    public function index(Request $request)
    	{
        $service = new SecurityService();
        $username = $request->input('username');
        $password = $request->input('password');

        $user = new UserModel($username, $password);
        $result = $service->login($user);
        if($result) {
            // Successful login attempt
            return view('loginPassed2')->with('user', $user);
        }
        return view('loginFailed');
        }
}
