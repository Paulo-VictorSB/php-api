<?php

// username: omeuusuario
// password: aminhasenha

$username = "omeuusuario";
$password = "aminhasenha";

// password errada
// $password = "abc123";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/test_api_2/02_endpoint_http_basic_auth/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_USERPWD => "$username:$password"
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;