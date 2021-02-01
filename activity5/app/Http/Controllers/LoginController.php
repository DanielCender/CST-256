<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;
use App\Models\UserModel;
use Illuminate\Support\Facades\Log;
use App\Services\Utility\MyLogger1;

class LoginController extends Controller
{
    public function index(Request $request)
    	{
        $logger = new MyLogger1();
        try {
        $logger->info("Entering LoginController::index()");
        $service = new SecurityService();
        $username = $request->input('username');
        $password = $request->input('password');
        $logger->info("Parameters are: ",array("username" => $username, "password" => $password));

        $user = new UserModel($username, $password);
        $result = $service->login($user);
        if($result) {
            $logger->info("Exit LoginController::index() with login passing");
            // Successful login attempt
            return view('loginPassed2')->with('user', $user);
        }
        $logger->info("Exit LoginController::index() with login failing");
        return view('loginFailed');
        } catch(Exception $e) {
            $logger->error("Exception LoginController::index()" . $e->getMessage());
        }
        }
}
