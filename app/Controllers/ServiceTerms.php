<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ServiceTerms extends BaseController
{
	public function index()
	{
		return view('serviceterms');
	}
}
