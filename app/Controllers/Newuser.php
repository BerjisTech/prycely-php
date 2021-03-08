<?php

namespace App\Controllers;

class Newuser extends BaseController
{
	public function __construct()
	{
		if (session()->get('sombo') != true) {
			return redirect()->to('http://radio.garden/visit/nairobi/xKaC0mlq');
		}
	}
	public function index()
	{
		return view('auth/onboarding');
	}

	public function company()
	{
	}

	public function individual()
	{
	}

	public function freelancer()
	{
	}
}
