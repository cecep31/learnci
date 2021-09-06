<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class NewsController extends BaseController
{
	public function index()
	{
		return view('pages/news');
	}
	public function read()
	{
		# code...
	}
}
