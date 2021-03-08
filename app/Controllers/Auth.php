<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $this->session->set('sombo', true);
        return redirect()->to('overview');
    }

    public function login()
    {
    }
}
