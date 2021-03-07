<?php

namespace App\Controllers;

class Overview extends BaseController
{
    public function __construct()
    {
        if (!isset($_SESSION['sombo'])) {
            header("location: https://radio.garden");
        }
    }
    public function index()
    {
        $data['page_name'] = 'overview/index';
        $data['page_title'] = 'Overview';
        return view('index', $data);
    }
}
