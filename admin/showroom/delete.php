<?php
include "../koneksi.php";

$idsr = mysqli_real_escape_string($con, $_GET['idsr']);
$sql = "delete from tbshowroom where idsr='$idsr'";
$query = mysqli_query($con,$sql);
header("location: showroom.php");
?>