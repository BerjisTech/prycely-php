<?php
defined('BASEPATH') or exit('No direct script access allowed');


class P extends CI_Controller
{

    public function index()
    {
    }

    public function mail($template)
    {
        $data['code'] = '234567';
        $view = 'email_templates/' . $template;
        $this->load->view($view, $data);
    }

    public function wrong_turn()
    {
        $this->load->view('errors/html/wrong_turn');
    }
}
