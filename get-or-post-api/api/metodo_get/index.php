<?php

// set the content type for the API response
header("Content-Type:application/json; charset=utf-8");

if (!isset($_GET['valor1']) || !isset($_GET['valor2'])) {
    $response['status'] = 'error';
    $response['message'] = 'invalid or not set parameters';
    $response['params'] = [
        'valor1' => $_GET['valor1'] ?? null,
        'valor2' => $_GET['valor2'] ?? null
    ];
    $response['use'] = 'URL/?valor1=x&valor2=y';
    $response['time_response'] = time();
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    exit();
}

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];

$response['status'] = 'success';
$response['params'] = [
    'valor1' => $valor1,
    'valor2' => $valor2
];
$response['multiplication'] = $valor1 * $valor2;
$response['time_response'] = time();

// sends the request in JSON format
echo json_encode($response, JSON_UNESCAPED_UNICODE);
