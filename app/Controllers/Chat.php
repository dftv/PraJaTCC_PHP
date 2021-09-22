<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Chat extends BaseController
{
	public function index()
	{
		return view('chat');
	}
}
