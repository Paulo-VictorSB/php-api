<?php

$cURL = curl_init();

curl_setopt_array($cURL, array(
    CURLOPT_URL => "http://localhost/php-api/basic-auth/test_api_2/01_endpoint_without_auth/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET'
));

$response = curl_exec($cURL);

curl_close($cURL);
echo $response;