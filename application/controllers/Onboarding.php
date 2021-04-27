<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Onboarding extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /* cache control */
        

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
        $_GET['the_person_details_date'] = time();
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
            $data = array(
                'the_person_photo' => $image['file_name'],
                'the_person_details_date' => time()
            );
            $this->updateUser($data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }
    }

    public function address()
    {
        $_GET['the_person_details_date'] = time();
        $this->updateUser($this->input->get());
    }

    private function updateUser($data)
    {

        $where = array(
            'the_person_email' => $this->session->the_person_email
        );

        $this->Database->update($where, $data, 'the_people');

        echo 'the_proceed';
    }
}
