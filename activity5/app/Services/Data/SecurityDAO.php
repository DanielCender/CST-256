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
	public function findAllUsers() {
		$response = DB::table('users')->get();
		$users = array_map(function ($user) {
			$model = new UserModel($user->USERNAME, $user->PASSWORD);
			return $model;
		}, $response->toArray());
		return $users;
	}
	public function findUserByID($id) {
		$response = DB::table('users')->where('ID', $id)->get();
		$rec = $response->toArray()[0];
		$user = new UserModel($rec->USERNAME, $rec->PASSWORD);
		return $user;
	}
}
