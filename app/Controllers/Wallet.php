<?php

namespace App\Controllers;

class Wallet extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function add(){
		echo 'add wallet';
	}

	public function delete(){
		echo 'delete wallet';
	}

	public function edit(){
		echo 'edit wallet';
	}
}
