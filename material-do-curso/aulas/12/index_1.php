<?php

/*
Uma outra forma de autenticação numa API, para que possamos fazer requests à mesma,
é através do recurso a API Key.
Uma API Key (ou chave de API) é um código que é enviado nos headers do pedido
que, do lado da API, vai ser verificado se corresponde a um cliente autorizado a usar
a API.

O fluxo normal passa pelos seguintes passos:

NECESSIDADE:

Vais desenvolver uma aplicação que necessita consumir dados de uma API desenvolvida
por uma outra empresa.
Essa empresa requer que, para usares a API deles, tenhas que fazer um registo de utilizador
numa plataforma dessa empresa e, depois de registado, podes gerar uma API Key que depois
vais usar na tua aplicação.
Essa API key, que está associada à tua conta de utilizador da API da empresa,
vai ter que ser sempre enviada em todos os pedidos que fazes à API.

CREDENCIAIS VÁLIDAS:
cliente_um      -> 4KPd2BEqPteIQrrxoY9TPtnVhsarhKk6
cliente_dois    -> Eg4gDy8zH9D0dpPeN2pAm9kLYhyKEiS9
cliente_três    -> JYaDgZyHnHHy40CUGrtNI6Ckf9AILY9Y

*/

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/test_api_2/03_endpoint_api_key/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array('api_key: 4KPd2BEqPteIQrrxoY9TPtnVhsarhKk6'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
