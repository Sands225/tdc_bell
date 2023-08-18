<?php
require 'functions/connect.php';

if ( isset ($_POST["login"])) {
    
    $check_user = $_POST["check-user"];
    // $check_pass = $_POST["check-pass"];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE nama = '$check_user'");
    
    // var_dump($query);
    
    if (mysqli_num_rows($query) === 1) {
        $user_data = mysqli_fetch_assoc($query);
        $user_id = $user_data['id'];
        $sebagai = $user_data['sebagai']; 
        // var_dump($nama, $pass);

        setcookie('id', $user_id, time() + 3600);
        if ($sebagai == "peserta") {
            header("Location: index.php");
        }
        else {
            header("Location: juri.php");
        }
        exit;
    }
    else {
        //  create
        $create_new_user = "INSERT INTO user VALUES ('', '$check_user', '', 'peserta', '')";
        mysqli_query($conn, $create_new_user);

        $query_new_user = mysqli_query($conn, "SELECT * FROM user WHERE nama = '$check_user'");

        $user_data = mysqli_fetch_assoc($query_new_user);
        $user_id = $user_data['id'];
        $sebagai = $user_data['sebagai'];

        setcookie('id', $user_id, time() + 3600);
        header("Location: index.php");
    }
}

if (isset($_COOKIE['id'])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>TDC XII - MathLog Bell</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
		<link rel="stylesheet" href="css/login-style.css" />
	</head>
	<body>
		<!-- USER INFO -->
		<div class="user-info">
			<h2>USER LOGIN</h2>
		</div>
		<div class="login-form">
			<form action="" method="post">
				<label 
                for="check-user">
                    Nama/Email
                </label>
				<br />
				<input
                    type="text" 
                    name="check-user" 
                    id="check-user" />
				<br />
				<br />
				<!-- <label for="">Password</label>
				<br />
				<input 
                    type="password" 
                    name="check-pass" 
                    id="check-pass" />
				<br />
				<br /> -->
				<button 
                    type="submit"
                    name="login"
                    id="login">
                    login
                </button>
			</form>
		</div>
	</body>
</html>
