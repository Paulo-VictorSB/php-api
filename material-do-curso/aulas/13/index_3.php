<?php

/* 
Vamos usar uma função para criar o JWT.
Vamos ver o output desta nossa função e vamos testar em 
https://jwt.io/

IMPORTANTE: O token deve ser colado na área Encoded e a
assinatura vai surgir inicialmente como não validada.
Para validar, vamos ter que colocar o jwt_key na área do Decode.

Tudo o que fizemos aqui vai ser para colocar do lado da API.
1. test_api_2 -> 04_endpoint_jwt_auth
2. efetuar o pedido no index_4.php. Login válido recebe token e guarda na sessao
3. fazer os pedidos usando o token

*/

echo JWT();

function JWT(){
    
    // JWT Key
    $jwt_key = "dVIns6oTyVvsnYzmaTyh3YPS7alsyCFt";

    // JWT Header
    $header = base64_encode(json_encode([
        'typ' => 'JWT',
        'alg' => 'HS256'
    ]));

    $payload = base64_encode(json_encode([
        'usuario' => 'aminhaaplicacao',
        'senha' => 'aminhasenha'
    ]));

    $signature = base64_encode(hash_hmac('sha256', "$header.$payload", $jwt_key, true));
    $jwt_token = "$header.$payload.$signature";

    return $jwt_token;
}