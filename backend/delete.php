<?php
include "config.php";
$input = file_put_contents('php://input');
$message = array();

$id = $_GET['id'];
$q = mysqli_querry($con, "DELETE FROM 'student' WHERE 'id' = '{$id}' LIMIT 1");

if($q){
    http_response_code(201);
    $message['status'] = "Error";
}else{
    http_response_code(422);
    $message['status'] = "Error";
}

echo json_encode($message);
echo mysqli_error($con);