<?php

namespace App\Controllers;

class Wallet extends BaseController
{
	public function index()
	{
		$data['page_name'] = 'wallet';
		return view('pryce', $data);
	}

	public function personal()
	{
	}

	public function group($group_id = "")
	{
	}

	public function add()
	{
		echo 'add wallet';
	}

	public function delete($wallet_id = "")
	{
		echo 'delete wallet';
	}

	public function edit($wallet_id = "")
	{
		echo 'edit wallet';
	}
}
