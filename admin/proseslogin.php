<?php

session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$password = md5($_POST['password']);

	$sql = "SELECT * FROM tbuser WHERE username='$username' AND password='$password'";
	$results = mysqli_query($con, $sql);

	if (mysqli_num_rows($results) == 1) { // user found
		// check if user is admin or user
		$logged_in_user = mysqli_fetch_assoc($results);

		if ($logged_in_user['tipe'] == 'admin') {
			$_SESSION['username'] = $logged_in_user;
			header('location: index.php');
			$iduser = $_SESSION['iduser'];
		}

	} else { 
		echo "<center>Username atau Password salah. Silahkan <a href='login.php'>coba lagi.</a></center>";
	}
		?>

