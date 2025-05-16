<?php

/*
Vamos efetuar um pedido de login à API para perceber se vamos
receber um token que depois vamos usar nos restantes pedidos.
*/
session_start();

// check if the user is logged in
if(empty($_SESSION['jwt_token'])){
    die('Pedido inválido.');
}

// make the request to the api

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/test_api_2/05_endpoint_jwt_01/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('new_client' => 'Nome do novo cliente'),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer ' . $_SESSION['jwt_token']
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

