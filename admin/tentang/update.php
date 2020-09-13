<?php
include "../koneksi.php";

$kodeitem = mysqli_real_escape_string($con, $_POST["kodeitem"]);
$judul = mysqli_real_escape_string($con, $_POST["judul"]);
$isi = mysqli_real_escape_string($con, $_POST["isi"]);

	$sql = "update tbtentang set
			judul='$judul', isi='$isi'
			where idttg='$kodeitem'";
	$query = mysqli_query($con,$sql);

header("location: tentang.php");
?>