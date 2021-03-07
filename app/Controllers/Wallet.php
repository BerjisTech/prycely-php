<?php

namespace App\Controllers;

class Wallet extends BaseController
{
	public function __construct()
	{
		if (!isset($_SESSION['sombo'])) {
			header("location: https://radio.garden");
		}
	}
	public function index()
	{
		$data['page_name'] = 'wallet/index';
		$data['page_title'] = 'Wallet';
		return view('index', $data);
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
