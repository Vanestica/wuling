<?php

include "../koneksi.php";

$urutan = mysqli_real_escape_string($con, $_POST['urutan']);
$file = $_FILES["image"]["name"];
$tmpfile = $_FILES["image"]["tmp_name"];

$location = "../../IMAGES/";

if(!empty($file)){
	$sql = "insert into tbslideshow
		(gambar, urutan)
		values('$file','$urutan')";
	$query = mysqli_query($con,$sql);
	move_uploaded_file($tmpfile, $location.$file);
}else if($file == 0){
	$sql = "insert into tbslideshow
		(urutan)
		values('$urutan')";
	$query = mysqli_query($con,$sql);
	move_uploaded_file($tmpfile, $location.$file);
}



header("location: slideshow.php");
?>