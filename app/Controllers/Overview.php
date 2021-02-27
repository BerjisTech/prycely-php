<?php

namespace App\Controllers;

class Overview extends BaseController
{
    public function index()
    {
        $data['page_name'] = 'overview';
        return view('pryce', $data);
    }
}
