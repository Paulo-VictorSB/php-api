<?php

/* 
As APIs REST, por padrão, não devem guardados de sessão, cookies ou outro
tipo de mecanismo de persistência de sessão. A cada pedido efetuado, a API
deve entendê-lo como sendo um pedido novo, sem conhecer quem é que faz o pedido.
Fundamentalmente deve considerar que cada pedido é como se fosse o primeiro
pedido alguma vez já feito.

O que vimos anteriormente foram exemplos de uma API completamente livre.
Qualquer cliente, com conhecimento da URL e da assinatura dos pedidos,
pode interagir com essa API.

Mas uma boa prática é limitar o acesso à API.
Essa limitação concretiza-se através de mecanismos de autenticação.
E existem vários que iremos explorar neste e nos próximos vídeos.

Neste vídeo vamos ver como usar HTTP basic authentication (Basic Auth)
*/

// este é um pedido a um endpoint sem qualquer tipo de autenticação necessária
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/test_api_2/01_endpoint_without_auth/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET'
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
