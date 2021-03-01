<?php

namespace App\Controllers;

class Group extends BaseController
{

    public function index()
    {
        $data['page_name'] = 'group/index';
        $data['page_title'] = 'Group';
		return view('index', $data);
    }
}
