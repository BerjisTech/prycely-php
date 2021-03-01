<?php

namespace App\Controllers;

class Overview extends BaseController
{
    public function index()
    {
        $data['page_name'] = 'overview/index';
        $data['page_title'] = 'Overview';
        return view('index', $data);
    }
}
