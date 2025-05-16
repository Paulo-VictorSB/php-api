<?php

// update client's name
require_once('../_inc/init.php');

// get JSON data
$data = json_decode(file_get_contents("php://input"), true);

// check if request method is valid
check_request_method($request_method, 'PUT');

// check for required fields
$required_fields = ['id'];
if (!check_required_fields_in_json($data, $required_fields)) {
    $res->set_status('error');
    $res->set_error_message('Missing fields.');
    check_integration_key_json($data);
    $res->response();
}

// check for what input fields were given
$sql = "UPDATE clientes SET ";

$params = [
    'id' => $data['id']
];

if (key_exists('email', $data)) {
    $params['email'] = $data['email'];
    $sql .= "email = :email, ";
}

if (key_exists('phone', $data)) {
    $params['phone'] = $data['phone'];
    $sql .= "telefone = :phone, ";
}

// if params have only one record, throw error
if (count($params) == 1) {
    $res->set_status('error');
    $res->set_error_message('Email and/or phone is required.');
    check_integration_key_json($data);
    $res->response();
}

// removes the last comma from the sql expression
$sql = substr($sql, 0, strlen($sql) - 2);

// close sql expression
$sql .= " WHERE id = :id";

// integration key
check_integration_key_json($data);

$db->execute_non_query($sql, $params);
$res->response();
