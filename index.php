<?php

if (!isset($_COOKIE['id'])) {
	header("Location: login.php");
    exit;
}

require 'functions/user-data.php';

if ($sebagai == "juri") {
	header("Location: juri.php");
}
// if (isset($_POST['press'])) {
//     $timestamp = time();
//     $query_sendto_waktu = "INSERT INTO waktu VALUES 
// 						('$id', '$nama', '$email', '$timestamp')
// 						";
// 	mysqli_query($conn, $query_sendto_waktu);
// } 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>TDC XII - MathLog Bell</title>
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>

		<audio class="bell-sound">
			<source src="src/bell_sound_pressed.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
		</audio>

		<!-- USER INFO -->
		<div class="user-info">
			<h2>
                <?php echo $nama ?>
            </h2>
			<p><?php echo "sebagai ", $sebagai?></p>
		</div>
		<div class="button">
			<button 
				name="press"
				id="press"
				onclick="sendTime()">
					<div>
						<h3>PRESS</h3>
					</div>
            </button>
		</div>
		<div class="toggle"></div>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function sendTime() {

				var bell_audio = document.getElementsByClassName("bell-sound")[0];
				bell_audio.play();

                $.ajax({
                    method: "POST",
                    url: "functions/send_user-data_waktu.php",
                    }).done(function( res ) {
						let respon = res;
                        console.log(res);
                });
            }

			// sendTime();
        </script>
	</body>
</html>