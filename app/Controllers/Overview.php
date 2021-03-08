<?php

namespace App\Controllers;

class Overview extends BaseController
{
    public function __construct()
    {
        if (session()->get('sombo') != true) {
            return redirect()->to('http://radio.garden/visit/nairobi/xKaC0mlq');
        }
    }
    public function index()
    {
        print_r(session()->get('sombo'));
        $data['page_name'] = 'overview/index';
        $data['page_title'] = 'Overview';
        return view('index', $data);
    }
}
