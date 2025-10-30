<?php


header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

include_once '../../core/initialize.php';

$users = new User($db);

$data = json_decode(file_get_contents('php://input'));

$users->firstname = $data->firstname;
$users->lastname = $data->lastname;
$users->email = $data->email;
$users->password = $data->password;

if ($users->create($users)) {
    echo json_encode(array('data' => $data, 'message' => 'success', 'error'=>false));
} else {
    echo json_encode(array('error' => true));
}

