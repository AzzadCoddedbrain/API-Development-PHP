<?php
require 'connection.php';
$reqData = file_get_contents("php://input");
$reqData = json_decode( $reqData );
if( json_last_error() === JSON_ERROR_NONE ){
    $conn->query("DELETE FROM user WHERE id = '{$reqData->id}' ");

    $deleted = (int) $conn->affected_rows;
    if( $deleted ){
        http_response_code( 200 );
        header('Content-Type: Application/json; charset=utf-8');
        $response ['status_code'] = "200";
        $response ['message'] = "account has be deleted";
    }
    else{
        http_response_code( 400 );
        header('Content-Type: Application/json; charset=utf-8');
        $response ['status_code'] = "400";
        $response ['message'] = "account has not be deleted";
    }
    echo json_encode($response);
}

else{

    echo json_encode([
        "status" => false
    ]);
}