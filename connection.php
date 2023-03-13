<?php

$hostName = 'localhost';
$userName = 'root';
$userPass = '';
$dbName = 'userdata';

$conn=  mysqli_connect($hostName,$userName,$userPass,$dbName);
if(!$conn)
{
    echo"not connected";
}else{
    echo " connected";
}
// if(!$conn)
// {
//     echo"not connected";
// }else{
//     echo " connected";
   
// }
// Annu First Commit
?>