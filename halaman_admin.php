<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM anggota ORDER BY id DESC");
?>

<html>
<head>
	<title>Halaman Admin</title>
</head>

<body>
	<?php 
	session_start();

	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
	?>
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

<a href="add.php">Tambah Data</a> &nbsp|&nbsp <a href="logout.php">Logout</a>

<table width='80%' border=1>
<tr>
	<th>Id</th>
	<th>Nama</th>
	<th>NIM</th>
	<th>Perintah</th>
</tr>


<?php
while($user_data = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$user_data['id']."</td>";
	echo "<td>".$user_data['nama']."</td>";
	echo "<td>".$user_data['nim']."</td>";
	echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></tr>";
}
?>
</table>
</body>
</html>