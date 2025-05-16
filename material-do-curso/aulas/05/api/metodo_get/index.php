<?php

header("Content-Type:application/json; charset=utf-8");

// endpoint que está à espera de um pedido do tipo GET

// verifica se o pedido vem acompanhado dos valores requeridos
if(!isset($_GET['valor1']) || !isset($_GET['valor2'])){
    $response['status'] = 'error';
    $response['message'] = 'Ausência dos parâmetros obrigatórios valor1 e valor2.';
    $response['time_response'] = time();
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    exit;
}

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];

$response['status'] = 'success';
$response['valor_1'] = $valor1;
$response['valor_2'] = $valor2;
$response['multiplicacao'] = $valor1 * $valor2;
$response['time_response'] = time();
echo json_encode($response, JSON_UNESCAPED_UNICODE);