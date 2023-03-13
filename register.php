<?php
require 'connection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES (NULL,'$username','$email','$password')";

$result= mysqli_query($conn, $sql) or die("Query Failed");
if($result){
    echo "done ";
}else{
    echo 'faild';
}

?>
