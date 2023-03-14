<?php
require 'connection.php';
$userName = $_POST['username'];
$delete = mysqli_query($conn, "DELETE FROM user WHERE username   = '$userName' ");

if($delete > 0){
    $response ['status_code'] = "200";
    $response ['message'] = "account has be deleted";
}
else{
    $response ['status_code'] = "400";
    $response ['message'] = "account has not be deleted";
}

echo json_encode($response);