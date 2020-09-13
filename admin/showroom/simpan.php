<?php

include "../koneksi.php";

$urutan = mysqli_real_escape_string$con, ($_POST['urutan']);
$file = $_FILES["image"]["name"];
$tmpfile = $_FILES["image"]["tmp_name"];
$nama = mysqli_real_escape_string($con, $_POST['nama']);
$harga = mysqli_real_escape_string($con, $_POST['harga']);
$tipe = mysqli_real_escape_string($con, $_POST['tipe']);
$daftar = mysqli_real_escape_string($con, $_POST['ckeditor']);

$location = "../../IMAGES/";

if(!empty($file)){
	$sql = "insert into tbshowroom
		(gambar, nama, harga, tipe, daftar)
		values('$file','$nama','$harga','$tipe','$daftar')";
	$query = mysqli_query($con,$sql);
	move_uploaded_file($tmpfile, $location.$file);
}else if($file == 0){
	$sql = "insert into tbshowroom
		(nama, harga, tipe, daftar)
		values('$nama','$harga','$tipe','$daftar')";
	$query = mysqli_query($con,$sql);
	move_uploaded_file($tmpfile, $location.$file);
}

header("location: showroom.php");
?>