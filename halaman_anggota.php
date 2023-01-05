<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM anggota ORDER BY id DESC");
?>

<html>
<head>
	<title>Halaman Anggota</title>
</head>

<body>

<table width='80%' border=1>
<tr>
	<th>Id</th>
	<th>Nama</th>
	<th>NIM</th>
</tr>

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