<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		if (session()->get('sombo') != true) {
			return redirect()->to('http://radio.garden/visit/nairobi/xKaC0mlq');
		}
	}
	public function index()
	{
		return view('welcome_message');
	}

	public function wallet()
	{
		echo 'wallet';
	}

	public function dbtest()
	{
		print_r(session()->get('sombo'));
	}
}
