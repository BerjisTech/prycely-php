<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		if (!isset($_SESSION['sombo'])) {
			header("location: https://radio.garden");
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
		$db = db_connect();
		print_r($db->query('SELECT * FROM shops'));
	}
}
