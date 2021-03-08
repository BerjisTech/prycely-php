<?php

namespace App\Controllers;

class Settings extends BaseController
{
    public function __construct()
    {
        if ($this->session->get('sombo') != true) {
            echo '<script>window.location.href="http://radio.garden/visit/nairobi/xKaC0mlq"</script>';
        }
    }
    public function index()
    {
        $data['page_name'] = 'settings/index';
        $data['page_title'] = 'Settings';
        return view('index', $data);
    }
}
