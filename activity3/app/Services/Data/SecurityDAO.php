<?php

namespace App\Services\Data;

use Illuminate\Support\Facades\DB;
use App\Models\UserModel;

class SecurityDAO
{
	public function findByUser(UserModel $user)
	{
		$response = DB::table('users')->where('USERNAME', $user->getUsername())->where('PASSWORD', $user->getPassword())
            ->first();
		return $response;
	}
}
