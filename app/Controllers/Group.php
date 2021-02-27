<?php

namespace App\Controllers;

class Group extends BaseController
{

    public function index()
    {
        $data['page_name'] = 'group';
        $data['page_title'] = 'Group';
		return view('pryce', $data);
    }
}
