<?php

require 'connect.php';

if (isset($_COOKIE['id'])) {

    $id = $_COOKIE['id'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");

    if (mysqli_num_rows($query) === 1) {
        $user_data = mysqli_fetch_assoc($query);
        $user_id = $user_data['id']; 
        $nama = $user_data['nama'];
        $email = $user_data['email'];
        $pass = $user_data['password'];
        $sebagai = $user_data['sebagai'];
        // var_dump($nama, $pass);
    }
}


?>