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

    public function currency()
    {
        $result = $this->db
            ->like('currency', $this->input->get('get_wallet_currency'))
            ->or_like('code', $this->input->get('get_wallet_currency'))
            ->or_like('country', $this->input->get('get_wallet_currency'))
            ->get('currency')->result_array();
        foreach ($result as $currency) {
            echo '<span class="currency_list" onclick="logCurrency(\'' . $currency['country'] . '\', \'' . $currency['code'] . '\', \'' . $currency['currency'] . '\')">
                    <img src="' . base_url('assets/images/flags/') . strtolower(substr($currency['code'], 0, 2)) . '.svg" style="width: 50px;" />
                    ' . $currency['currency'] . ' (' . $currency['code'] . ') ' . $currency['country'] .
                '</span>';
        }
    }

    public function wrong_turn()
    {
        $this->load->view('errors/html/wrong_turn');
    }
}
