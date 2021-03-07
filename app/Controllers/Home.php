<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		if (!isset($_SESSION['sombo'])) {
			echo '<script>window.location.href="http://radio.garden/visit/nairobi/xKaC0mlq"</script>';
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
