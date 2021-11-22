<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contactus extends BaseController
{
	public function index()
	{
		return view('contactus');
	}
}
