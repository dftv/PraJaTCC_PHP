<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use DateTime;

class User extends BaseController
{
	private $userModel;

	public function __construct() {
		$this->userModel = new UserModel();
	}

	public function register() {

		$date = new DateTime();

		echo '<script> alert('. $this->request->getPost('email_singup') .'); </script>';

		$data = [
			'email_ds' => $this->request->getPost('email_singup'),
			'password_ds' => md5($this->request->getPost('password_singup')),
			'user_nm' => $this->request->getPost('name_singup'),
			'birthDate_dt' => $this->request->getPost('birthDate_singup'),
			'phoneNumber_ds' => $this->request->getPost('phone_singup'),
			'cpf_ds' => md5($this->request->getPost('CPF_singup')),
			'accountStatus_dt' => $date->format('Y-m-d H:i:s'),
		];

		if($this->userModel->save($data)) {
			return redirect()->to(base_url('Home'));
		}
	}
}
