<?php

// set the content type for the API response
header("Content-Type:application/json; charset=utf-8");

// sets the collection of data to insert in the response
$response['status'] = 'Animals API is Running';
$response['time_response'] = time();

// sends the request in JSON format
echo json_encode($response, JSON_UNESCAPED_UNICODE);