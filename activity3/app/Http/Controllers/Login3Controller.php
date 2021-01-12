<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;
use App\Models\UserModel;

class Login3Controller extends Controller
{
    public function index(Request $request)
    	{
				$this->validateForm($request);
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
				private function validateForm(Request $request)
    		{
        // Setup Data Validation Rules for Login Form
        $rules = ['username' => 'Required | Between:4,10 | Alpha',
                  'password' => 'Required | Between:4,10'];

        // Run Data Validation Rules
        $this->validate($request, $rules);
    		}
}
