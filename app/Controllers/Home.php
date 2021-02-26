<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function __construct()
	{
		$db      = \Config\Database::connect();
		$builder = $db->table('users');
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
		print_r($this->builder->query('SELECT * FROM shops'));
	}
}
