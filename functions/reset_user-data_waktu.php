<?php

require 'connect.php';

$delete_all_query = "DELETE FROM waktu";
mysqli_query($conn, $delete_all_query);

header("Location: ../juri.php");

?>