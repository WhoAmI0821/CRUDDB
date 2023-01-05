<html>
<head>
	<title>Tambah Data</title>
</head>

<body>
	<form action="add.php" method="post" name="form1">
	<table width="50%" border="0">
		<tr>
			<td>Id</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="number" name="nim"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Tambahkan" a href='index.php'></td>
		</tr>
		
		</table>

		<?php
		if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		
		include_once("config.php");

		$result = mysqli_query($mysqli, "INSERT INTO anggota(id,nama,nim) VALUES ('$id','$nama','$nim')");
		
		echo "Berhasil Ditambahkan <a href='halaman_admin.php'><br/>Kembali Ke Halaman Admin</a>";
		}
		?>
</body>
</html>