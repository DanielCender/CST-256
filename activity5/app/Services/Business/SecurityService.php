<?php

namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;
use App\Services\Utility\MyLogger1;

class SecurityService
{
	public function login(UserModel $user)
	{
		$logger = new MyLogger1();
		try {
		$logger->info("Entering SecurityService::index()");
		$dao = new SecurityDAO();
		$queryRes = $dao->findByUser($user);
		$logger->info("Exit SecurityService::index()");
		return (isset($queryRes->ID));
		} catch(Exception $e) {
      $logger->error("Exception SecurityService::index()" . $e->getMessage());
    }
	}
	public function getAllUsers() {
		$dao = new SecurityDAO();
		return $dao->findAllUsers();
	}
	public function getUser($id) {
		$dao = new SecurityDAO();
		return $dao->findUserById($id);
	}
}
