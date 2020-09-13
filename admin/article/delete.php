<?php
include "../koneksi.php";

$ida = mysqli_real_escape_string($con, $_GET['ida']);
$sql = "delete from tbarticle where ida='$ida'";
$query = mysqli_query($con,$sql);
header("location: article.php");
?>