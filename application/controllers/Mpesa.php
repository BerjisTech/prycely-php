<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Mpesa extends CI_Controller
{
    public function index()
    {
        print_r($this->generateAccessToken());
    }

    public function register_url()
    {
        date_default_timezone_set('Africa/Nairobi');
        $now = date('Y-m-d H:i:s');
        //include 'functions.php';
        $accessVals = $this->generateAccessToken();
        if ($accessVals['status'] == 1) {
            $accessToken = "Bearer " . $accessVals['token'];
            // The data to send to the API
            $postData = array(
                'ValidationURL' => "https://prycely.com/thecalls/validation", //VALIDATING TRANSACTIONS KA ZINAEXIST 
                'ConfirmationURL' => "https://prycely.com/thecalls/c2b", //PAYBILL PAYMENT DATA HITS HERE
                'ResponseType' => "Completed",
                'ShortCode' => '4072015' //PAYBILL
            );
            $requestBody = json_encode($postData);
            // Setup cURL
            $ch = curl_init('https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl');
            curl_setopt_array($ch, array(
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: ' . $accessToken
                ),
                CURLOPT_POSTFIELDS => $requestBody
            ));
            // Send the request
            $response = curl_exec($ch);
            // Check for errors
            if ($response === FALSE) {
                die(curl_error($ch));
            } else {
                $requestVals = json_decode($response, true);
                echo $response . "<br/><br/><br/>";
            }
        } else {
            echo "Could not generate access token";
        }
    }

    private function generateAccessToken()
    {
        $key = $this->db->where('the_app ', '2')->get('the_privates')->row()->the_key;
        $secret = $this->db->select('the_secret')->where('the_app ', '2')->get('the_privates')->row()->the_secret;

        $accessToken = "";
        $status = 0;
        $description = "";
        $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode($key . ':' . $secret);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials)); //setting a custom header
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        $curl_response = curl_exec($curl);

        $responseVals = json_decode($curl_response, TRUE);

        $accessToken = $responseVals['access_token'];
        $status = 1;

        // if ($curl_response != FALSE) {
        //     $responseVals = json_decode($curl_response, TRUE);
        //     $accessToken = $responseVals['access_token'];
        //     $status = 1;
        // } else {
        //     $description = "Curl Failed: " . curl_error($curl);
        // }

        $array = array('status' => $status, 'token' => $accessToken, 'description' => $description);
        return $array;
    }
}
