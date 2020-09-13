<?php
include "../koneksi.php";

$kodeitem = mysqli_real_escape_string($con, $_POST["kodeitem"]);
$nama = mysqli_real_escape_string($con, $_POST['nama']);
$harga = mysqli_real_escape_string($con, $_POST['harga']);
$tipe = mysqli_real_escape_string($con, $_POST['tipe']);
$daftar = mysqli_real_escape_string($con, $_POST['ckeditor']);

$file = $_FILES["image"]["name"];
$tmpfile = $_FILES["image"]["tmp_name"];

$location = "../../IMAGES";

if(!empty($file)){
	$sql = "update tbshowroom set gambar='$file', daftar='$daftar', nama='$nama', harga='$harga', tipe='$tipe' where idsr='$kodeitem'";
	$query = mysqli_query($con,$sql);
}else{
	$sql = "update tbshowroom set nama='$nama', harga='$harga', daftar='$daftar', tipe='$tipe' where idsr='$kodeitem'";
	$query = mysqli_query($con,$sql);
}

move_uploaded_file($tmpfile, $location.$file);

header("location: showroom.php");
?>