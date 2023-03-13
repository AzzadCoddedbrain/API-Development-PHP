<?php
require 'connection.php';

$sql = "SELECT username, email FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0){

    while($row = $result -> fetch_assoc()){ 
        $response ['user'][]= $row; 
        }

    }
else{
    $response ['status_code'] = "400";
}
echo json_encode($response);
