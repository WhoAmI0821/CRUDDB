<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM anggota ORDER BY id DESC");
?>

<html>
<head>
	<title>Halaman Anggota</title>
</head>

<body>
<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
	?>
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

<table width='80%' border=1>
<tr>
	<th>Id</th>
	<th>Nama</th>
	<th>NIM</th>
</tr>
<a href="logout.php">Logout</a>

<?php
while($user_data = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$user_data['id']."</td>";
	echo "<td>".$user_data['nama']."</td>";
	echo "<td>".$user_data['nim']."</td>";
}
?>
</table>
</body>
</html>