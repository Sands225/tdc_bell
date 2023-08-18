<?php

require_once "user-data.php";

	$timestamp = microtime(true);
	// $milisecond = microtime();

	$query_check = mysqli_query($conn, "SELECT * FROM waktu WHERE hide = 'false' AND user_id = '$user_id'");
	// var_dump(mysqli_num_rows($query_check));

	if (mysqli_num_rows($query_check) < 1) {
		// var_dump($query_check['user_id']);
		// echo "berhasil masuk";
		$query_sendto_waktu = "INSERT INTO waktu VALUES 
							('', '$id', '$nama', '$email', '$timestamp', 'false')
							";
		mysqli_query($conn, $query_sendto_waktu);
		// return "berhasil";
	}
	else {
		$query_sendto_waktu = "INSERT INTO waktu VALUES 
							('', '$id', '$nama', '$email', '$timestamp', 'true')
							";
		mysqli_query($conn, $query_sendto_waktu);
		// return "berhasil";
	}
	// sesssion succes 
?>