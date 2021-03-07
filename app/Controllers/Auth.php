<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $_SESSION['sombo'] = true;
    }

    public function login()
    {
    }
}
