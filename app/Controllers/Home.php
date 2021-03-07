<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		if (!isset($_SESSION['sombo'])) {
			redirect()->to(site_url("https://radio.garden"));
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
		print_r($this->session->get('sombo'));
	}
}
