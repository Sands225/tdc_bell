<?php

require_once "user-data.php";

$timestamp = microtime(true);
// $milisecond = microtime();
$query_sendto_waktu = "INSERT INTO waktu VALUES 
					('', '$id', '$nama', '$email', '$timestamp', 'false')
					";
mysqli_query($conn, $query_sendto_waktu);
// return "berhasil";

?>