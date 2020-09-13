<?php
include "../koneksi.php";

$ida = mysqli_real_escape_string($con, $_POST['ida']);
$isi = mysqli_real_escape_string($con, $_POST['ckeditor']);
$thumbnail = $_FILES['thumbnail']['name'];
$tmpthumbnail = $_FILES['thumbnail']['tmp_image'];
$judul = mysqli_real_escape_string($con, $_POST['judul']);
$tglubah = mysqli_real_escape_string($con, $_POST['tglubah']);

$location = "../../IMAGES/";

if(!empty($thumbnail)){
	$sql = "update tbarticle set isi='$isi', judul='$judul', tglubah='$tglubah', thumbnail='$thumbnail' where ida='$ida'";
	$query = mysqli_query($con,$sql);
}else if($thumbnail == 0){
	$sql = "update tbarticle set isi='$isi', judul='$judul', tglubah='$tglubah' where ida='$ida'";
	$query = mysqli_query($con,$sql);
}

move_uploaded_file($tmpthumbnail, $location.$thumbnail);

header("location: article.php");
?>