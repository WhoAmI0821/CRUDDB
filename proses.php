<?php
session_start();

include_once("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($result);

if($cek>0){
$data = mysqli_fetch_assoc($result);

if($data['level']=="admin"){
	$_SESSION['username']= $username;
	$_SESSION['level']= "admin";

	header("location:halaman_admin.php");

}else if($data['level']=="anggota"){
	$_SESSION['username']= $username;
	$_SESSION['level']= "anggota";

	header("location:halaman_anggota.php");

}else{
	header("location:index.php?pesan=gagal");
	}

}else{
	header("location:index.php?pesan=gagal");
}
?>
