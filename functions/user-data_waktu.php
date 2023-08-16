<?php

require 'user-data.php';
$query = mysqli_query($conn, "SELECT * FROM waktu WHERE hide = 'false'");
$response = array();
$json = [];


foreach($query as $data){
    array_push($response, $data);
}

$json['data'] = $response;


echo json_encode($json);

?>