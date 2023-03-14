<?php
require 'connection.php';

$id = $_REQUEST ['id'];
$userName = $_POST['username'];
$email = $_POST ['email'];

$update = "UPDATE user SET username ='$userName', email= '$email' WHERE id= '$id' ";
$result = mysqli_query($conn, $update);

if($result>0){
    $response ['status_code'] = "200";
    $response ['message'] = "update sucessful";
}
else{
    $response ['status_code'] = "400";
    $response ['message'] = "update failed";
}
echo json_encode($response);
?>