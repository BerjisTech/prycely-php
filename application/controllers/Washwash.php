<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Washwash extends CI_Controller
{

    private $api_url = 'https://api.flutterwave.com/v3';
    private $sec = 'FLWSECK-cb7865b2d6edb7e0812f0dfab7ae3f31-X';
    private $pub = 'FLWPUBK-fcb7dfbc9987323c81b9650d02b5aec7-X';
    private $enc = 'cb7865b2d6edda72690cb107';

    public function __construct()
    {
        parent::__construct();
        /* cache control */

        // if (!isset($this->session->builder_user) || !isset($this->session->the_person_id)) {
        //     die('<script>location.replace("https://youtu.be/dQw4w9WgXcQ")</script>');
        // }
    }

    public function index()
    {
    }

    public function getbanks($country)
    {
        header('Content-type: application/json');

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "$this->api_url/banks/$country",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $this->sec"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function getbranches($code)
    {
        header('Content-type: application/json');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "$this->api_url/banks/$code/branches",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $this->sec"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    private function incoming()
    {
    }

    private function outgoing()
    {
    }

    private function verifyuser()
    {
    }
}
