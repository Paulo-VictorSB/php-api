<?php

$cURL = curl_init();

$username = "omeuusuario";
$password = "aminhasenha";

curl_setopt_array($cURL, array(
    CURLOPT_URL => "http://localhost/php-api/basic-auth/test_api_2/02_endpoint_http_basic_auth/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => "$username:$password"
));

$response = curl_exec($cURL);
curl_close($cURL);

echo $response;