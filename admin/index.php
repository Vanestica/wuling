<?php
include "koneksi.php";

session_start();
if(!isset($_SESSION['username'])) {
   header('location: login.php'); 
} else { 
   $username = $_SESSION['username'];
   $tipe = $username['tipe'];

   if($tipe == 'admin'){
    header("location: admin.php");
   }
}
?>
