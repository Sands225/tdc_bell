<?php

if (!isset($_COOKIE['id'])) {
    header("Location: login.php");
    exit;
}

require 'functions/user-data.php';

if (isset($_POST['press'])) {
    $timestamp = time();
    $query_sendto_waktu = "INSERT INTO waktu VALUES 
						('$id', '$nama', '$email', '$timestamp')
						";
	mysqli_query($conn, $query_sendto_waktu);
} 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>TDC XII - MathLog Bell</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<!-- USER INFO -->
		<div class="user-info">
			<h2>
                <?php echo $nama ?>
            </h2>
			<p><?php echo "sebagai ", $sebagai, " ", $id ?></p>
		</div>
		<div class="button">
			<form action="" method="post">
				<button 
                    type="submit"
                    name="press"
                    id="press">
                    Press
                </button>
			</form>
		</div>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            
        </script>
	</body>
</html>