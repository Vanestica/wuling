<?php
include "../koneksi.php";

$isi = mysqli_real_escape_string($con, $_POST['ckeditor']);
$judul = mysqli_real_escape_string($con, $_POST['judul']);
$thumbnail = $_FILES['thumbnail']['name'];
$tmpthumbnail = $_FILES['thumbnail']['tmp_name'];
$tgl = mysqli_real_escape_string($con, $_POST['tgl']);

$location = "../../IMAGES/";

$sql = "insert into tbarticle
		(judul, thumbnail, isi, tgl) values('$judul','$thumbnail','$isi', '$tgl')";
$query = mysqli_query($con,$sql);

move_uploaded_file($tmpthumbnail, $location.$thumbnail);

header("location: article.php");
?>