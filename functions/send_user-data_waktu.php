<?php

require_once "user-data.php";

$timestamp = time();
$query_sendto_waktu = "INSERT INTO waktu VALUES 
					('$id', '$nama', '$email', '$timestamp')
					";
mysqli_query($conn, $query_sendto_waktu);
// return "berhasil";

?>