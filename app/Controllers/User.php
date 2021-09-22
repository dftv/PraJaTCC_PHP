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
			if($this->userModel->login($data)) {
				return redirect()->to(base_url('Home'));
			} else{
				return redirect()->to(base_url('Join'));
			}
			return redirect()->to(base_url('Home'));
		}
	}

	public function login() {
		$data = [
			'email_ds' => $this->request->getPost('email_login'),
			'password_ds' => md5($this->request->getPost('password_login')),
		];

		if($this->userModel->login($data)) {
			return redirect()->to(base_url('Home'));
		} else{
			return redirect()->to(base_url('Join?error=Email ou senha incorretos'));
		}
	}

	public function leave() {
		$session = session();
		$session->destroy();

		return redirect()->to(base_url('Home'));
	}
}
