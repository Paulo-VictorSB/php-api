<?php

// em formato de JSON

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/test_api_1/add_new_client_json/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"new_client":"João"}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

/* 
CURLOPT_POSTFIELDS
----------------------------------
No caso do HTTPHEADER Content-Type: applicetion/json, estamos a indicar que os dados
vão ser enviados nesse formato, logo, o valor de POSTFIELDS passa a ser um JSON com as propriedades
e respetivos valores a enviar no pedido.
*/