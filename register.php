<?php
require 'connection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


// check email id is exit into my database 
    $sql="select * from user where (email='$email')";
    $res=mysqli_query($conn,$sql);

if (mysqli_num_rows($res) > 0) {
    $resposne['error'] = "409";
    $resposne['message'] = "Email Already is exits in database";

    // echo "email already exists";
        //  $row = mysqli_fetch_assoc($res);
        // if($email==isset($row['email']))
        // {
        //     //	echo "email already exists";
        // }
		// if($username==isset($row['username']))
		// {
		// 	echo "username  already exists";
		// }
		}
else{
    // SignUP User 
        $sql = "INSERT INTO `user` (`username`, `email`, `password`) VALUES ('$username','$email','$password')";  // query 
        $result= mysqli_query($conn, $sql) or die("Query Failed");  // hit query 
       
        if($result){
            $resposne['error'] = "200";
            $resposne['message'] = "Reginter Succefully";
        }else{
            $resposne['error'] = "001";
            $resposne['message'] = "Reginter Succefully";
        }

}

echo json_encode($resposne);

?>
