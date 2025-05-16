<?php

// set the content type for the API response
header("Content-Type:application/json; charset=utf-8");

// check if there request method is post
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    $response['status'] = 'error';
    $response['message'] = 'Invalid method request.';
    $response['time_response'] = time();
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    exit;
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

$response['status'] = 'success';
$response['params'] = [
    'valor1' => $valor1,
    'valor2' => $valor2
];

$response['addition'] = $valor1 + $valor2;
$response['subtraction'] = $valor1 - $valor2;
$response['multiplication'] = $valor1 * $valor2;
$response['division'] = $valor1 / $valor2;

$response['time_response'] = time();
echo json_encode($response, JSON_UNESCAPED_UNICODE);