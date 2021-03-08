<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $_SESSION['sombo'] = 'true';
        redirect('overview');
    }

    public function login()
    {
    }
}
