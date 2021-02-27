<?php

namespace App\Controllers;

class Overview extends BaseController
{
    public function index()
    {
        $data['page_name'] = 'overview';
        $data['page_title'] = 'Overview';
        return view('pryce', $data);
    }
}
