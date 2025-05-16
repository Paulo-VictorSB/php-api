<?php

// set the content type for the API response
header("Content-Type:application/json; charset=utf-8");

// get all data;
$data = require_once('../_data/data.php');

// check if there is e max value on $_GET
if (!isset($_GET['max']) || $_GET['max'] < 1 || $_GET['max'] > count($data)) {
    $response['status'] = 'error';
    $response['message'] = 'Max animals is not correctly defined.';
    $response['time_response'] = time();
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    exit();
}

// defines the maximum number os animals to return
$max = $_GET['max'];

// sets the collection of data to insert in the response
$response['status'] = 'success';
$response['animals'] = array_slice($data, 0, $max);
$response['time_response'] = time();

// sends the response in JSON format
echo json_encode($response, JSON_UNESCAPED_UNICODE);
