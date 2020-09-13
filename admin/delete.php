<?php
include "koneksi.php";

$no = $_GET['no'];
$sql = "delete from tbcontact where no='$no'";
$query = mysqli_query($con,$sql);
header("location: admin.php");
?>