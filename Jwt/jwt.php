<?php

echo JWT();

function JWT() {
    $jwt_key = '3b107e08ad205f821a8f0af5400862d86492b3eabc2942ef5a92ca7621505fea';

    $header = base64url_encode(json_encode([
        'typ' => 'JWT',
        'alg' => 'HS256'
    ]));

    $payload = base64url_encode(json_encode([
        'usuario' => 'nome',
        'senha' => 'senha'
    ]));

    $signature = base64url_encode(hash_hmac('sha256', "$header.$payload", $jwt_key, true));

    return "$header.$payload.$signature";
}

function base64url_encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}
