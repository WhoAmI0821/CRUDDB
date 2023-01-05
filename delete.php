<?php
include_once("config.php");
$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM anggota WHERE id=$id");
header("location:halaman_admin.php");
?>