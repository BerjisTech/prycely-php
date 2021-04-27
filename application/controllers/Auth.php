<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        /* cache control */
        
    }

    public function index()
    {
        $this->session->set_userdata('sombo', true);
        redirect('overview');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }

    public function recover()
    {
        $this->load->view('auth/recover');
    }

    public function send_code()
    {
        $email = $this->input->post('the_email');

        $where = array('the_person_email' => $email);
        if ($this->Database->count($where, 'the_people') > 0) {
            echo 'This email has already been used';
        } else {
            $the_create_account_code = mt_rand(100000, 999999);
            $data['code'] = $the_create_account_code;
            $view = 'email_templates/verify_code';
            $message = $this->load->view($view, $data, TRUE);

            $this->Email->do_email($message, 'Prycely Verification Code', $email, 'support@sleekupsell.com');
            $this->session->the_create_account_code = $the_create_account_code;

            print_r('the_proceed');
        }
    }

    public function check_code($code)
    {
        if ($code != $this->session->the_create_account_code) {
            echo 'the_fuck_you';
        } else {
            echo 'the_proceed';
        }
    }

    public function create_account()
    {
        $data = $this->input->post();
        $data['the_person_password'] = $this->hash_password($data['the_person_password']);
        $data['the_person_join'] = time();
        $data['the_person_verified'] = 1;
        if ($this->Database->insert($data, 'the_people') == true) {
            $this->session->the_person_password = $data['the_person_password'];
            $this->session->the_person_email = $data['the_person_email'];
            $this->session->the_person_type = $data['the_person_type'];
            echo 'the_proceed';
        } else {
            echo 'Something went wrong';
        }
    }

    public function recover_code()
    {
        $email = $this->input->post('the_email');

        $where = array('the_person_email' => $email);
        if ($this->Database->count($where, 'the_people') == 0) {
            echo 'Check that the email is correct';
        } else {
            $the_create_account_code = mt_rand(100000, 999999);
            $data['code'] = $the_create_account_code;
            $view = 'email_templates/recover_code';
            $message = $this->load->view($view, $data, TRUE);

            $this->Email->do_email($message, 'Password Recovery Code', $email, 'support@sleekupsell.com');
            $this->session->the_create_account_code = $the_create_account_code;
            $this->session->the_person_temp_email = $email;

            print_r('the_proceed');
        }
    }

    public function check_recovery_code()
    {
        if ($this->input->post('the_code') != $this->session->the_create_account_code) {
            echo 'the_fuck_you';
        } else {
            echo 'the_proceed';
        }
    }

    public function change_password()
    {
        $this->Database->update(
            array(
                'the_person_email' => $this->session->the_person_temp_email
            ),
            array(
                'the_person_password' => $this->hash_password($this->input->post('the_password'))
            ),
            'the_people'
        );

        echo 'the_proceed';
    }

    public function kuingia()
    {
        $select_single = $this->Database->select_single('the_person_password, the_person_type, the_person_id', array('the_person_email' => $this->input->post('the_person_email')),  NULL, 'the_people');

        if ($select_single !== NULL) {
            if ($this->check_pass($this->input->post('the_person_password'), $select_single->the_person_password) === true) {
                $this->session->the_person_password = $select_single->the_person_password;
                $this->session->the_person_email = $this->input->post('the_person_email');
                $this->session->the_person_type = $select_single->the_person_type;
                $this->session->the_person_id = $select_single->the_person_id;
                $this->Database->insert(
                    array(
                        'the_login_user' => $select_single->the_person_id,
                        'the_login_time' => time(),
                        'the_login_ip' => $this->getIPAddress(),
                        'the_login_success' => 'yes',
                        'the_login_password_attempt' => 'user_' . $select_single->the_person_id . '_correct_password'
                    ),
                    'the_logins'
                );
                echo 'the_login';
            } else {
                $this->Database->insert(
                    array(
                        'the_login_user' => $select_single->the_person_id,
                        'the_login_time' => time(),
                        'the_login_ip' => $this->getIPAddress(),
                        'the_login_success' => 'no',
                        'the_login_password_attempt' => $this->input->post('the_person_password')
                    ),
                    'the_logins'
                );
                echo 'Very very wrong password 😂';
            }
        } else {
            echo 'Check you if the email is correct';
        }
    }

    public function kwenda()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    private function check_pass($fromForm, $fromDB)
    {
        if (password_verify($fromForm, $fromDB)) {
            return true;
        } else {
            return false;
        }
    }

    private function getIPAddress()
    {
        $ip = $this->input->ip_address();
        return $ip;
    }
}
