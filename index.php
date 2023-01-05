<html>
<head>
	<title>Login</title>
<head>
<body>
<?php
if(isset($_GET['pesan'])){
	if($_GET['pesan']=="gagal"){
		echo "Username dan Password tidak sesuai!";
	}
}
?>

<form action="proses.php" method="post">
	<label>Username</label>
	<input type="text" name="username">
	
	<label>Password</label>
	<input type="password" name="password">
	
	<input type="submit" name="Submit" value="LOGIN">
</form>
</body>
</html>