<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

include_once '../../core/initialize.php';

$users = new User($db);

$result = $users->getAllUsers();

$num = $result->rowCount();

$post_arr = array();
$post_arr['data'] = array();

if($num > 0) {

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $post_item = array(
            'userid' => $userid,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $password,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        );
        array_push($post_arr['data'], $post_item);    
    }
    $post_arr['error']=false;
    $post_arr['message']='success';
    echo json_encode($post_arr);
} else {
    $post_arr['error']=true;
    $post_arr['message']='keine Daten vorhanden!';
    echo json_encode($post_arr);
}
