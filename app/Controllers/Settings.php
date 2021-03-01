<?php

namespace App\Controllers;

class Settings extends BaseController
{
    public function index()
    {
        $data['page_name'] = 'settings/index';
        $data['page_title'] = 'Settings';
		return view('index', $data);
    }
}
