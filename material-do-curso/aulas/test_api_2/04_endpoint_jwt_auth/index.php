<?php

header("Content-Type: application/json; charset=UTF-8");

// simulates the user login
$users = [
    'aminhaaplicacao' => 'aminhasenha',
    'outraaplicacao' => 'outrasenha'
    // ...
];

// check request data
if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST['usuario']) || empty($_POST['senha'])) {
    $res['status'] = 'error';
    $res['message'] = 'Access denied.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

// check valid login
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if (!key_exists($usuario, $users) || $users[$usuario] != $senha) {
    $res['status'] = 'error';
    $res['message'] = 'Access denied.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

$res['status'] = 'success';
$res['jwt_token'] = JWT($_POST['usuario'], $_POST['senha']);
$res['time_response'] = time();
echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
exit;

// check if the user is valid and returns de JWT token
function JWT($usuario, $senha)
{

    // JWT Key
    $jwt_key = "dVIns6oTyVvsnYzmaTyh3YPS7alsyCFt";

    // JWT Header
    $header = base64_encode(json_encode([
        'typ' => 'JWT',
        'alg' => 'HS256'
    ]));

    $payload = base64_encode(json_encode([
        'usuario' => $usuario,
        'senha' => $senha
    ]));

    $signature = base64_encode(hash_hmac('sha256', "$header.$payload", $jwt_key, true));
    $jwt_token = "$header.$payload.$signature";

    return $jwt_token;
}
