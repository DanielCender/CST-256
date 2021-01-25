<?php

namespace App\Services\Business;

use Illuminate\Support\Facades\DB;

use App\Services\Data\OrderDAO;
use App\Services\Data\CustomerDAO;

class OrderService
{
	public function createOrder($firstName, $lastName, $product)
	{
		DB::beginTransaction();
		try {
			$orderDao = new OrderDAO();
			$customerDao = new CustomerDAO();
			$userId = $customerDao->addCustomer($firstName, $lastName);
			$orderDao->addOrder($product, $userId);
		} catch(Exception $e) {
			DB::rollback();
			return $e;
		}
		DB::commit();

		return true;
	}
}
