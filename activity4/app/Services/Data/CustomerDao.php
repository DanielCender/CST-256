<?php

namespace App\Services\Data;

use Illuminate\Support\Facades\DB;

class CustomerDAO
{
	public function addCustomer($firstName, $lastName) {
		return DB::table('customers')->insertGetId([
			'First_Name' => $firstName,
			'Last_Name' => $lastName
		]);
	}
}
