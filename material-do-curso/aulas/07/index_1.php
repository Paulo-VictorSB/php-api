<?php

/*
Neste execício vamos chamar um endpoint da API através do cURL (Client URL)
com o protocolo HTTP e o método (verb) GET
*/
echo '<pre>';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/test_api_1/get_all_clients/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

/*
CURLOPT_URL 
------------------------------------
A URL relativamente à qual pretendemos obter informaçáo

CURLOPT_RETURNTRANSFER
------------------------------------
Retorna o valor em formato de string

CURLOPT_ENCODING
------------------------------------
Define o conteúde do valor do header relacionado com Accept-Encoding.
Pode ter valores como identity, deflate e gzip. Se for passada uma string
é enviado um header com todos os sistemas de encoding suportados.

CURLOPT_MAXREDIRS
------------------------------------
O máximo de redirecionamentos permitidos.
Se tiver o valor -1 permite redirecionamentos infinitos.
Se tiver o valor 0, não permite redirecionamentos.

CURLOPT_TIMEOUT
------------------------------------
O tempo máximo que as funções do curl vão ser executadas até
acontecer um resultado.
O valor aceita inteiros que são equivalentes a segundos.
Quando o valor é zero, o tempo de execução só termina quando todas as
funções do curl terminarem.

CURLOPT_FOLLOWLOCATION
------------------------------------
Se for true, segue sempre o valor do header Location 

CURLOPT_HTTP_VERSION
------------------------------------
A versão do protocolo HTTP a usar.

CURLOPT_CUSTOMREQUEST
------------------------------------
O método HTTP que vai caracterizar o pedido.
*/