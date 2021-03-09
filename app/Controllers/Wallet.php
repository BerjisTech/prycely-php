<?php

namespace App\Controllers;

class Wallet extends BaseController
{
	public function __construct()
	{
		if (session()->get('sombo') != true) {
			return redirect()->to('http://radio.garden/visit/nairobi/xKaC0mlq');
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

	public function test_mpesa()
	{
		// echo env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET');
		$mpesa = new \App\Models\Mpesamodel();
		echo $mpesa->generate_token()['token'];
	}
}
