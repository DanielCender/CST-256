<?php

namespace App\Services\Data;

use Illuminate\Support\Facades\DB;

class OrderDAO
{
	public function addOrder($product, $customerId) {
		return DB::table('orders')->insert([
			'Product' => $product,
			'Customer_Id' => $customerId
		]);
	}
}
