<?php
require 'connection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql="select * from user where (email='$email')";
$res=mysqli_query($conn,$sql);

if (mysqli_num_rows($res)>0){
    echo "user already exist";
}

else{
        $sql = "INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')";

        $result= mysqli_query($conn, $sql) or die("Query Failed");
        if($result){
            echo "done ";
        }else{
            echo 'faild';
        }
    }
?>
