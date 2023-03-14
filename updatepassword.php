<?php
require 'connection.php';

$current = md5($_POST['current']);
$new= md5($_POST['new']);
$email= $_POST['email'];

$sql = "SELECT * FROM user WHERE email='$email' and password= '$current'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $updatepass = mysqli_query($conn, "UPDATE user SET password ='$new' WHERE email = '$email'");
    
    if($updatepass>0){
        $response ['status_code'] = "200";
        $response ['message'] = "password update sucessful";
    }
    else{
        $response ['status_code'] = "400";
        $response ['message'] = "password update failed";
    }
}
else{
    $response ['status_code'] = "400";
    $response ['message'] = "user doesn't exist";
}

echo json_encode($response);