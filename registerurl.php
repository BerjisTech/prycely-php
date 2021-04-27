<?php 
	date_default_timezone_set('Africa/Nairobi');
    $now = date('Y-m-d H:i:s');

    //include 'functions.php';

    $accessVals = json_decode(generateAccessToken(),true);
    if($accessVals['status'] == 1)
    {
        $accessToken = "Bearer ".$accessVals['token'];

        // The data to send to the API
        $postData = array(
            'ValidationURL' => "https://prycely.com/validation",//VALIDATING TRANSACTIONS KA ZINAEXIST 
            'ConfirmationURL' => "https://prycely.com/c2b", //PAYBILL PAYMENT DATA HITS HERE
            'ResponseType' => "Completed",
            'ShortCode' => '4072015'//PAYBILL
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
                'Authorization: '.$accessToken
            ),
            CURLOPT_POSTFIELDS => $requestBody
        ));

        // Send the request
        $response = curl_exec($ch);

        // Check for errors
        if($response === FALSE){
            die(curl_error($ch));
        }
        else
        {
            $requestVals = json_decode($response,true);

            echo $response."<br/><br/><br/>";
        }
    }
    else
    {
    	echo "Could not generate access token";
    }

function generateAccessToken()
    {
        $accessToken = "";
        $status = 0;
        $description = "";

        $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode('a0rdeuPwoSqGv0HIlGBqZeMEocwIfjha:GC2ScUskImTOSaVR');// consumer Secret na key
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials)); //setting a custom header
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);

        $curl_response = curl_exec($curl);

        if ($curl_response != FALSE) {
            $responseVals = json_decode($curl_response, TRUE);

            $responseVals = json_decode($curl_response, TRUE);

            $accessToken = $responseVals['access_token'];
            $status = 1;
        } else {
            $description = "Curl Failed: " . curl_error($curl);
        }

        $array = array('status' => $status, 'token' => $accessToken, 'description' => $description);

        return json_encode($array);
    }


?>
