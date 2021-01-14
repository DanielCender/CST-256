<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data\OrderDAO;
use App\Services\Business\OrderService;

class OrderController extends Controller
{
    //
    public function addOrder(Request $request) {
        // $product = $request->input('product');
        // $customerId = $request->input('customerId');

        // // Throw for invalid inputs
        // if(!isset($product) or !isset($customerId)) throw new ErrorException("Input was invalid!");

        // $dao = new OrderDAO();
        // $res = $dao->addOrder($product, $customerId);
        // return $res;

        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $product = $request->input('product');
        $service = new OrderService();
        return $service->createOrder($firstName, $lastName, $product);
    }
}
