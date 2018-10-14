<?php  

$koneksi = mysqli_connect("localhost","root","","d_mod6");

$errorNma = "";
$errorNim = "";


if (isset($_POST["kirim"])) {
	
	$nama = $_POST["nama"];

	if (strlen($_POST['nama']) > 35) {
		$errorNma = "Nama Tidak Boleh lebih dari 20 ya......";
	}

	$nim = $_POST["nim"];

	if (!is_numeric($nim)) {
		$errorNim = "NIM harus berupa angka";
	}

	$jenis_kelamin = $_POST["jenis_kelamin"];
	$hobi = $_POST["hobi"];
	$fakultas = $_POST["fakultas"];
	$alamat = $_POST ["alamat"];
	$kelas = $_POST["kelas"];



	if ($errorNma === "" && $errorNim === "") {
		$query =  ("INSERT INTO t_mod6 VALUES('$nama', '$nim','$jenis_kelamin','$hobi','$fakultas','$alamat','$kelas')");

	$simpan = mysqli_query($koneksi, $query);

	if ($simpan) {
		echo "<script>
			alert('Data Berhasil Disimpan, silahkan buka halaman login ya gaissss......!, UNTUK MELIHAT DATA ANDA. DAN LOGIN SESUAI DENGAN NAMA DAN NIM YANG ANDA INPUTKAN DI AWAL');
		</script>";
	}

	
	} 

	
}




?>




<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>



<body>



	<table>
		<form method="post" >
			<tr>
				<div style="color:red"><?php echo $errorNma; ?></div>
				<td>NAMA : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<div style="color:red"><?php echo $errorNim; ?></div>
				<td>NIM : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				
			</tr>
			<tr>
				<td>KELAS</td>
				<td>
					<input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01<br>
				<input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02<br>
				<input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03<br>
				<input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04<br>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin : </td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki Laki<br>
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
				</td>
			</tr>

				<tr>
				<td>Hobi : </td>
				<td>
					<input type="checkbox" name="hobi" value="BASKET">BASKET<br>
					<input type="checkbox" name="hobi" value="SEPAKBOLA">SEPAKBOLA<br>
					<input type="checkbox" name="hobi" value="BOLA">BOLA VOLI<br>
					<input type="checkbox" name="hobi" value="RENANG">RENANG<br>
					<input type="checkbox" name="hobi" value="DENGAR MUSIK">DENGAR MUSIK<br>
					<input type="checkbox" name="hobi" value="TIDUR">TIDUR<br>

				</td>
			</tr>
			
			<tr>
				<td>FAKULTAS</td>
				<td>
					<select name="fakultas">
						<option>-----PILIH FAKULTAS-----</option>
						<option value="FAKULTAS ILMU TERAPAN">FAKULTAS ILMU TERAPAN</option>
						<option value="FAKULTAS INFORMATIKA">FAKULTAS INFORMATIKA</option>
						<option value="FAKULTAS TEKNIK ELEKTRO">FAKULTAS TEKNIK ELEKTRO</option>
						<option value="FAKULTAS REKAYASA INDUSTRI">FAKULTAS REKAYASA INDUSTRI</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>ALAMAT</td>
				<td><input type="textarea" name="alamat"></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim"></td>
			</tr>
			
		</form>
	</table><br><br>


	
</body>
</html>


