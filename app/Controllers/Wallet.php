<?php

namespace App\Controllers;

class Wallet extends BaseController
{
	public function index()
	{
        $data['page_name'] = 'page name';
		return view('welcome_message', $data);
	}

	public function add(){
		echo 'add wallet';
	}

	public function delete($wallet_id = ""){
		echo 'delete wallet';
	}

	public function edit($wallet_id = ""){
		echo 'edit wallet';
	}
}
