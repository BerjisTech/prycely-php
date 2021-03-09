<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpesamodel extends Model
{
    public function generate_token()
    {
        $accessToken = "";
        $status = 0;
        $description = "";
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode(env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET'));
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
