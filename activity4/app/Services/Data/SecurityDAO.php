<?php

namespace App\Services\Data;

use Illuminate\Support\Facades\DB;
use App\Models\UserModel;
use App\Services\Utility\MyLogger1;

class SecurityDAO
{
	public function findByUser(UserModel $user)
	{
		$logger = new MyLogger1();
		try {
		$logger->info("Entering SecurityDAO::index()" . ' ' . $user->getUsername() . ' ' . $user->getPassword());
		$response = DB::table('users')->where('USERNAME', $user->getUsername())->where('PASSWORD', $user->getPassword())
						->first();
		$logger->info("Exit SecurityDAO::index()");
		return $response;
		} catch(Exception $e) {
			 $logger->error("Exception SecurityDAO::index()" . $e->getMessage());
		}
	}
}
