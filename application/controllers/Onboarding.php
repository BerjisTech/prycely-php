<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Onboarding extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2020 05:00:00 GMT");
        date_default_timezone_set("Africa/Nairobi");

        if (!isset($this->session->the_person_email)) {
            redirect(base_url('p/wrong_turn'));
        }
    }

    public function index()
    {
        $data['page_title'] = 'On Boarding';

        $this->load->view('auth/onboarding', $data);
    }

    public function personal()
    {
        $this->updateUser($this->input->get());
    }

    public function photo()
    {
        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => 'gif|jpg|png',
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => SHA1($this->session->the_person_id)
        );

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('the_person_photo')) {
            $image = $this->upload->data();
            $data = array('the_person_photo' => $image['file_name']);
            $this->updateUser($data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
    }

    public function address()
    {
        echo 'the_proceed';
    }

    private function updateUser($data)
    {

        $where = array(
            'the_person_email' => $this->session->the_person_email
        );

        // $this->Database->update($where, $data, 'the_people');

        echo 'the_proceed';
    }
}
