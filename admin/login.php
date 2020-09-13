<?php

include "koneksi.php";
//perbaiki , kalau misalnya lagi login admin, pas ke halaman login ini tetap kedirect ke halaman admin ..
   session_start();
   if(isset($_SESSION['username'])) {
   header('location: index.php'); }
   require_once("koneksi.php");

?>

<!-- <title>Form Login</title>
<div align='center'>
  <form action="proseslogin.php" method="post">
  <h1>Masuk</h1>
  <table>
  <tbody>
  <tr><td>username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Masuk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body class="bg-light">

<!-- Halaman Daftar -->

  <div class="container px-4 py-4">

    <center><h1>LOGIN ADMIN</h1></center>

    <div class="row">
      <div class="col-sm-5 mx-auto shadow bg-white py-3 my-4">
        <form action="proseslogin.php" method="POST">

          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Khusus Admin" name="username"  >
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Khusus Admin" name="password"  >
          </div>

          <input value="Masuk" type="submit" class="btn btn-primary btn-block"><center>

        </form>
      </div>
    </div>

    <h6 class="text-center" style="font-size:12px">
    Copyright &copy; 2019 &mdash; Eshia Digital Solution <BR>
    </h6>
  </div>

</body>
</html>
