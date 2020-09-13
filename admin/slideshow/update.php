<?php
include "../koneksi.php";

$kodeitem = mysqli_real_escape_string($con, $_POST["kodeitem"]);
$file = $_FILES["image"]["name"];
$tmp_file = $_FILES["image"]["tmp_name"];
$urutan = mysqli_real_escape_string($con, $_POST['urutan']);

$location = "../../IMAGES/";

if(!empty($file)){
	$sql = "update tbslideshow set gambar='$file', urutan='$urutan' where idss='$kodeitem'";
	$query = mysqli_query($con,$sql);
}else{
	$sql = "update tbslideshow set urutan='$urutan' where idss='$kodeitem'";
	$query = mysqli_query($con,$sql);
}

move_uploaded_file($tmp_file, $location.$file);

header("location: slideshow.php");
?>