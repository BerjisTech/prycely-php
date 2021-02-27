<?php

namespace App\Controllers;

class Home extends BaseController
{
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
		print_r($this->db->query('SELECT * FROM shops'));
	}
}
