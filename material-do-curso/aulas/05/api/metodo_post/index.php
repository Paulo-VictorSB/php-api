<?php

header("Content-Type:application/json; charset=utf-8");

// verifica se foi um post
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    $response['status'] = 'error';
    $response['message'] = 'Invalid request.';
    $response['time_response'] = time();
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    exit;
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

$response['status'] = 'success';
$response['valor1'] = $valor1;
$response['valor2'] = $valor2;

$response['adicao'] = $valor1 + $valor2;
$response['subtracao'] = $valor1 - $valor2;
$response['multiplicacao'] = $valor1 * $valor2;
$response['divisao'] = $valor1 / $valor2;

$response['time_response'] = time();
echo json_encode($response, JSON_UNESCAPED_UNICODE);