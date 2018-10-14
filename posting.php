<?php 

$koneksi = mysqli_connect("localhost","root","","d_mod6");

session_start();
 
if($_SESSION['status'] !="login"){
	header("location:tampil.php");
}

$data = mysqli_query($koneksi, "SELECT * FROM cerita");
 
?>



<!DOCTYPE html>
<html>
<head>
	<title>CERITA SAYA</title>
</head>
<body>
	<h2> TULIS CERITA ANDA DI SINI </h2>
	<form method="POST" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td><h3 style="margin:0 " > JUDUL CERITA </h3></td>
			</tr>
			<tr>
				<td><input type="text" name="judul" ></td>
			</tr>
			<tr>
				<td><cite><H3> SILAHKAN ISI CERITA ANDA DIBAWAH INI....!!</cite></H3></td>
			</tr>
			<tr>
				<td><textarea name="data" id="" cols="80" rows="30"></textarea></td>
			</tr>
			<tr>
				<input type="hidden" name="nim" value="<?php echo $_SESSION['user_nim'] ?>">
				<td><input type="submit" name="send" value="posting"></td>
			</tr>
			
		</table>

</body>
</html>