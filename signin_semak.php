<?php
require 'connect.php';
session_start();
if (isset($_POST['username'])){
	$user = mysqli_real_escape_string($conn, $_POST['username']);
	$pass = mysqli_real_escape_string($conn, $_POST['password']);
	
	$query = mysqli_query($conn, "SELECT * from pengguna WHERE idPengguna = '$user' and password = '$pass'");
	$row = mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query) == 0 || $row['password'] != $pass)
	{
		echo "<script> alert('ID Pengguna atau Password salah');
		window.location = 'index1.php'</script>";
	} else {
		$_SESSION ['username'] = $row ['idPengguna'];
		$_SESSION ['nama'] = $row ['nama'];
		$_SESSION ['level'] = $row ['aras'];
		header("location: index1.php");
	}
}
?>