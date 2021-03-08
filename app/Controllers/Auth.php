<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        helper('url');
        $_SESSION['sombo'] = 'true';
        redirect()->to('overview');
    }

    public function login()
    {
    }
}
