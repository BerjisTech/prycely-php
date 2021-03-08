<?php

namespace App\Controllers;

class Overview extends BaseController
{
    public function __construct()
    {
        if ($this->session->get('sombo') != true) {
            echo '<script>window.location.href="http://radio.garden/visit/nairobi/xKaC0mlq"</script>';
        }
    }
    public function index()
    {
        $data['page_name'] = 'overview/index';
        $data['page_title'] = 'Overview';
        return view('index', $data);
    }
}
