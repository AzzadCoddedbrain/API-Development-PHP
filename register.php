<?php
require 'connection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5 ($_POST['password']);


// check email id is exit into database 
    $sql="select * from user where (email='$email')";
    $res=mysqli_query($conn,$sql);

if (mysqli_num_rows($res) > 0) {
// check email in database
    $response ['status_code'] = 409;
    $response ['message'] = "email already exists";
		}
else{
    // SignUP User 
        $sql = "INSERT INTO `user` (`username`, `email`, `password`) VALUES ('$username','$email','$password')";  // query 
        $result= mysqli_query($conn, $sql) or die("Query Failed");  // hit query 
       
        if($result){
            $response ['status_code'] = 200;
            $response ['message'] = "Register Successful!";
        }
        else{
            $response ['status_code'] = 401;
            $response ['message'] = "Register Failed!"; 
        }

}

echo json_encode($response);
?>
