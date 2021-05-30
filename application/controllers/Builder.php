<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Builder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /* cache control */


        if (!isset($this->session->builder_user) || !isset($this->session->the_person_id)) {
            die('<script>location.replace("https://youtu.be/dQw4w9WgXcQ")</script>');
        }
    }

    public function index()
    {
    }

    private function checkers()
    {
    }

    private function file_creator()
    {
    }
}
