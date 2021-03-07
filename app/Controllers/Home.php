<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		echo 'chieth';
		if (!isset($_SESSION['sombo'])) {
			echo "no";
			header("location: https://radio.garden");
		} else {
			echo 'yes';
			echo '<h1>' . $this->session->get('sombo') . '</h1>';
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
