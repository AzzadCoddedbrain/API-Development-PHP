<?php
require 'connection.php';

$email = $_POST['email'];
$password = md5 ($_POST['password']);

//get all details of user
// $sql="select id, username,email from user where (email='$email' and password ='$password')"; //check email & password

$sql="select  username,email from user where (email='$email' and password ='$password')"; //check email & password
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    
    while($row = $result -> fetch_assoc()){ 
        $response ['user']= $row;  //fetch email or password
        }
    $response ['status_code'] = "200";
    $response ['message'] = "login sucessful";
}
else{
    $response ['status_code'] = "409";
    $response ['message'] = "login failed";
}
echo json_encode($response);
?>