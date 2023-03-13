<?php
require 'connection.php';

$email = $_POST['email'];
$password = md5 ($_POST['password']);

$sql="select * from user where (email='$email' and password ='$password')";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $response ['status_code'] = "200";
    $response ['message'] = "login sucessful";
}
else{
    $response ['status_code'] = "409";
    $response ['message'] = "login failed";
}
echo json_encode($response);
?>