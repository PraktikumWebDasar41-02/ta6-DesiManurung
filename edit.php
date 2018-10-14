<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","d_mod6");


?>
<form method="post" action="">
	<table border="0">
		<tr>
				
				<td>NAMA : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				
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
					<input type="checkbox" name="hobi" value="DENGAR MUSIK">DENGAR MUSIK<br>
					<input type="checkbox" name="hobi" value="BADMINTON">BADMINTON<br>
					<input type="checkbox" name="hobi" value="BERENANG">BERENANG<br>
					<input type="checkbox" name="hobi" value="MEMBACA">MEMBACA<br>
					<input type="checkbox" name="hobi" value="TIDUR">TIDUR<br>
				</td>
			</tr>
			
			<tr>
				<td>FAKULTAS</td>
				<td>
					<select name="fakultas">
						<option>-----PILIH FAKULTAS-----</option>
						<option value="FAKULTAS ILMU TERAPAN">FAKULTAS ILMU TERAPAN</option>
						<option value="FAKULTAS TEKNIK ELEKTRO">FAKULTAS TEKNIK ELEKTRO</option>
						<option value="FAKULTAS INFORMATIKA">FAKULTAS INFORMATIKA</option>
						<option value="FAKULTAS REKAYASA INDUSTRI">FAKULTAS REKAYASA INDUSTRI</option>
						<option value="FAKULTAS EKONOMI BISNIS">FAKULTAS EKONOMI BISNIS</option>
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

<?php
if(isset($_POST['edit'])){
	$nama= $_POST['nama'];
	$nim= $_POST['nim'];
	$jenis_kelamin= $_POST['jenis_kelamin'];
	$hobi= $_POST['hobi'];
	$fakultas= $_POST['fakultas'];
	$alamat= $_POST['alamat'];
	$kelas= $_POST['kelas'];
	$ukurannim=starlen($_POST['nim']);
	$ukurannama=starlen($_POST['nama']);


	$cek=true;
	if(empty($_POST['nim'])){
		echo " Nim harus diisi ya";
		$cek=false;
	}else if($ukurannim>20){
		echo"nim max 20 digit ya";
		$cek=false;
	}else {
		$nim=$_POST['nim'];
	}
	if(empty($_POST['nama'])){
		echo " Nama harus diisi ya";
		$cek=false;
	}else if($ukurannim>20){
		echo"nim max 20 digit ya";
		$cek=false;
	}else {
		$nama=$_POST['nama'];
	}
	if($cek){
		$koneksi=mysqli_connect('localhost','root','','d_mod6');
		$sql="UPDATE t_mod6 set nama='$nama',kelas='$kelas',jenis_kelamin='$jenis_kelamin',hobi='$hobi',fakultas='$fakultas',alamat='$alamat,' WHERE nim='$nim'";
		
		echo "Terimakasih data anda berhasil di ubah....";
	}
	header("location:tampil.php");


}