<?php

namespace App\Controllers;

class Onboarding extends BaseController
{
    public function index()
    {
        return view('auth/onboarding');
    }
}
