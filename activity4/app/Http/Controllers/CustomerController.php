<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data\CustomerDAO;

class CustomerController extends Controller
{
    //
    public function addCustomer(Request $request) {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');

        // Throw for invalid inputs
        if(!isset($firstName) or !isset($lastName)) throw new ErrorException("Input was invalid!");

        $dao = new CustomerDAO();
        $res = $dao->addCustomer($firstName, $lastName);
        return $res;
    }
}
