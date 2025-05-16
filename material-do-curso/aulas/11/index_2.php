<?php

/*
Vejamos agora o que é necessário para aceder a um endpoint que
requer HTTP Basic Auth.

O pedido ao endpoint vai requerer que seja enviado como usuário
os seguintes dados:
username: omeuusuario
password: aminhasenha

*/

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
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic b21ldXVzdWFyaW86YW1pbmhhc2VuaGE='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

/* 
Repara na presenção do HTTPHEADER 'Authorization'.
O valor apresentado trata-se de uma encriptação efetuada a partir dos
dados de autenticação fornecidos.

O exemplo apresentado acima mostra um HEADER que já está calculado, mas
como é que inserimos os dados de usuário no pedido?
*/