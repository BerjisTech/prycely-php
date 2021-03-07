<?php

namespace App\Controllers;

class Newuser extends BaseController
{
	public function __construct()
	{
		if (!isset($_SESSION['sombo'])) {
			header("location: https://radio.garden");
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
