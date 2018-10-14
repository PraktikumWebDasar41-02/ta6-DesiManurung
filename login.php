<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td><input type="submit" name="login"></td>
		</tr>
	</table>
	</form>
</body>
</html>


<?php 

$koneksi = mysqli_connect("localhost","root","","d_mod6");

if (isset($_POST["login"])) {
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];



	$query = ("SELECT * from t_mod6 where nama='$nama' and nim='$nim'");
	$save = mysqli_query($koneksi, $query);
	$masuk = mysqli_num_rows($save);

	if($masuk > 0){
	session_start();
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
		header("location:tampil.php");
	}else{
	 echo "<script>
			alert('Gagal Login');
		</script>";	
	}
}


 ?>