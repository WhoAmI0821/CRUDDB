<?php
include_once("config.php");

if(isset($_POST['id'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];

$result = mysqli_query($mysqli, "UPDATE anggota SET id='$id', nama='$nama', nim='$nim' WHERE id=$id");

header("location:halaman_admin.php");
}
?>

<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM anggota WHERE id=$id");

while($user_data = mysqli_fetch_array($result)){
	$id = $user_data['id'];
	$nama = $user_data['nama'];
	$nim = $user_data['nim'];
}
?>

<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<form action="edit.php" method="post" name="update_anggota">
		<table width="50%" border="0">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" value=<?php echo $id;?>></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim" value=<?php echo $nim;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>	
</body>
</html>