<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Model
{
    function do_email($msg = NULL, $sub = NULL, $to = NULL, $from = NULL)
    {

        //Load email library
        $this->load->library('email');

        //SMTP & mail configuration
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => '587',
            'smtp_user' => 'prycely@gmail.com',
            'smtp_pass' => 'Fankulo26@^',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

        $this->email->to($to);
        $this->email->from($from, 'Prycely');
        $this->email->subject($sub);
        $this->email->message($msg);

        //Send email
        $this->email->send();

        echo $this->email->print_debugger();
    }
}
