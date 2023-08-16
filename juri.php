<?php

if (!isset($_COOKIE['id'])) {
    header("Location: login.php");
    exit;
}

require 'functions/user-data.php';

if (isset($_POST['reset'])) {
	echo '<script> 
		var confirmDelete = confirm("Anda yakin menghapus waktu peserta saat ini?");

		if (confirmDelete) {
			alert("Data berhasil di-reset");
			window.location.href = "functions/reset_user-data_waktu.php";
		}
		else {
			alert("Reset dibatalkan");
		}

	</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>TDC XII - MathLog Bell</title>
		<link rel="stylesheet" href="css/juri-style.css" />
	</head>
	<body>
		<!-- USER INFO -->
		<div class="user-info">
			<h2>
				<?php echo $nama ?>
			</h2>
			<p><?php echo "sebagai ", $sebagai?></p>
		</div>
		<div class="action-button">
			<div class="reset-waktu">
				<form action="" method="post">
					<button
						name="reset"
						id="reset">
						Reset waktu
					</button>
				</form>
			</div>
			<!-- <div class="refresh">
				<button>Refresh</button>
			</div> -->
		</div>
		<br />
		<hr>
		<div id="user-data_waktu">
			<!-- <table border="1">
				<thead>
					<tr>
						<th>Urutan</th>
						<th>Nama</th>
						<th>Waktu</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Cokorda Bagus Cahya Patrisadewa</td>
						<td>06.00</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Darma</td>
						<td>07.00</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Sariz</td>
						<td>07.01</td>
					</tr>
				</tbody>
			</table> -->
		</div>
		<script src="js/jquery.js"></script>
		<script>
			function newData() {

                $.ajax({
                    method: "POST",
                    url: "functions/user-data_waktu.php",
                    }).done(function( res ) {
						let respon = JSON.parse( res );
                        console.log(respon);

                        var data_waktu ='<table border="1"><thead><tr><th class="tabel-urutan">Urutan</th><th class="tabel-nama">Nama</th><th class="tabel-waktu">Waktu</th></tr></thead><tbody>';

                        for (let i = 0, j = 1; i < respon['data'].length; i++, j++) {
								// console.log("hi");
								if ( i == 0) {
									data_waktu += '<tr> <td class="tabel-urutan winner">' 
										+j+  
									'</td> <td class="tabel-nama winner">'
										+respon['data'][i].nama+
									'</td> <td class="tabel-waktu winner">'
										+getTime(respon['data'][i].timestamp)+
									'</td> </tr> ';
								}
								else {
									data_waktu += '<tr> <td class="tabel-urutan">' 
											+j+  
										'</td> <td class="tabel-nama">'
											+respon['data'][i].nama+
										'</td> <td class="tabel-waktu">'
											+getTime(respon['data'][i].timestamp)+
										'</td> </tr> ';
								}
                        }

						data_waktu += '</tbody></table><br>';

                    $('#user-data_waktu').html(data_waktu);
                });
            }

			newData();

			// Refresh the function newData() every 0.5 seconds (500 milliseconds)
			// setInterval(newData, 500);

			// $(document).ready(function() {
			// 		$(document).on('click', '.refresh', function(event) {
			// 			// alert('HI');
			// 			newData();
			// 		});
			// 	});

			function getTime(timeStamp) {
				timeStamp = Number(timeStamp);
				const date = new Date(timeStamp * 1000);
				const time = date.toLocaleTimeString();
				const milisecond = (Math.round(timeStamp * 10000)) % 10000;
				// console.log(milisecond);
				// console.log(time);

				const userTime = time + '.' + milisecond;
				console.log(userTime);
				return userTime;
			}
			// function getMilisecond(timeStamp) {
			// 	timeStamp = Number(timeStamp);
			// 	const miliseconds = Math.floor((timeStamp % 1000) / 100);
			// 	console.log(miliseconds);
			// 	return miliseconds;
			// }
		</script>
	</body>
</html>
