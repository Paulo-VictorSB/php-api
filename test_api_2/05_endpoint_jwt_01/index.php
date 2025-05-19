<?php

header("Content-Type: application/json; charset=UTF-8");

// check if is valid token
$headers = getallheaders();

// check if the Authentication header is preset
if(!key_exists('Authorization', $headers)){
    die('Acesso inválido 1');
}

// prepara Authorization header
$authorization = $headers['Authorization'];
$bearer = explode(' ', $authorization);
$jwt_token = explode('.', $bearer[1]);  // bearer[0] é a própria palavra 'bearer'

$header = $jwt_token[0];
$payload = $jwt_token[1];
$signature = $jwt_token[2];

$jwt_key = "dVIns6oTyVvsnYzmaTyh3YPS7alsyCFt";
$validate = base64_encode(hash_hmac('sha256', "$header.$payload", $jwt_key, true));
if($signature !== $validate){
    die('Invalid token.');
}

$res['status'] = 'success';
$res['message'] = 'Acesso efetuado com sucesso à API.';
$res['time_response'] = time();
echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


/* 
Portanto:

1. É efetuado um pedido em 13-index_4.php para fazer o login
2. se o login é válido, o sistema devolve um token
3. em 13-index_5.php é feito um pedido onde é enviado o token
4. o 05_endpoint_jwt_01 recebe o pedido, analisa o token e as assinaturas e dá a resposta
*/