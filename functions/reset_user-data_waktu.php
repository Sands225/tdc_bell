<?php

require 'connect.php';

$delete_all_query = "UPDATE waktu SET 
                    hide = 'true'
                    WHERE hide = 'false'";
mysqli_query($conn, $delete_all_query);

header("Location: ../juri.php");

?>