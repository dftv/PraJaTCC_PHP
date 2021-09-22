<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
	private $userModel;

	public function __construct() {
		$this->userModel = new UserModel();
	}

	public function register() {
		$data = [
			
		];

		if(this->userModel->save($data)) {
			return redirect()->to(base_url('Home'));
		}
	}
}
