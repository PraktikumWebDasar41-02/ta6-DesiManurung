<?php 

$koneksi = mysqli_connect("localhost","root","","d_mod6");

session_start();
 
if($_SESSION['status'] !="login"){
	header("location:login.php");
}

$data = mysqli_query($koneksi, "SELECT * FROM t_mod6");
 
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<center><h2> DATA ANDA TELAH TERSIMPAN </h2>
</head>
<body>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jenis Kelamin</th>
			<th>Hobi</th>
			<th>fakultas</th>
			<th>Alamat</th>
			<th>Kelas</th>

		</tr>

		<?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <tr>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["nim"]; ?></td>
      <td><?= $row["jenis_kelamin"]; ?></td>
      <td><?= $row["hobi"]; ?></td>
      <td><?= $row["fakultas"]; ?></td>
      <td><?= $row["alamat"]; ?></td>
      <td><?= $row["kelas"]; ?></td>
    </tr>

    <?php 
    endwhile; 
    ?>
	</table>
</center>

</body>
</html>


