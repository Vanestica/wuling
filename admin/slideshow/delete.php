<?php
include "../koneksi.php";

$idss = mysqli_real_escape_string($con, $_GET['idss']);
$sql = "delete from tbslideshow where idss='$idss'";
$query = mysqli_query($con,$sql);
header("location: slideshow.php");
?>