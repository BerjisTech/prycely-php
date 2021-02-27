<?php

namespace App\Controllers;

class Settings extends BaseController
{
    public function index()
    {
        $data['page_title'] = 'Settings';
		return view('pryce', $data);
    }
}
