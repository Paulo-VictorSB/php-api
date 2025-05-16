<?php

/*
Com o método post, vamos fazer o pedido recorrendo ao cURL.
O cURL está presente no PHP e é tradicionalmente usado para efetuar requests
em APIs.

Esta é uma das formas mais simples de execução de um pedido via POST a um
endpoint da nossa API.
*/

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => 'http://localhost/05/api/metodo_post/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('valor1' => '10','valor2' => '20'),
]);

$response = curl_exec($curl);
curl_close($curl);

// apresentar os resultados
$dados = json_decode($response);
echo '<pre>';
print_r($dados);