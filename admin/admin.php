<?php
include "koneksi.php";

session_start();
if(!isset($_SESSION['username'])) {
   header('location: login.php'); 
} else { 
   $username = $_SESSION['username'];
   $username = $username['username'];
}

// $sqlid = "select * from tbuser where username='$username'";
// $queryid = mysqli_query($con,$sqlid);
// $hasilid = mysqli_fetch_assoc($queryid);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Admin Wuling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<script>
function del(no)
{ 
  if(confirm("Apakah Anda yakin menghapus ini?")==true)
           window.location="delete.php?no="+no;
    return true;
}
</script>

<style>
.w-24 {
  width: 24%;
}
</style>

<body class="bg-light">

<div class="container-fluid">
    <div class="row">
        <div class="col-2 px-1 bg-dark position-fixed h-100" id="sticky-sidebar">
            <div class="row">
            	<div class="col-sm-12 text-light pt-4 pb-4"><center>Admin Wuling</center></div>
            </div>

            <a href="admin.php" class="text-decoration-none">
            <div class="row">
            	<div class="col-sm-12 text-light offset-1 pb-3 pt-3">Dashboard</div>
            </div>
    	    </a>

           	<a href="slideshow/slideshow.php" class="text-decoration-none">
            <div class="row">
            	<div class="col-sm-12 text-light offset-1 pb-3 pt-3">Slideshow</div>
            </div>
            </a>

			<a href="tentang/tentang.php" class="text-decoration-none">
            <div class="row">
            	<div class="col-sm-12 text-light offset-1 pb-3 pt-3">About</div>
            </div>
            </a>

            <a href="article/article.php" class="text-decoration-none">
            <div class="row">
              <div class="col-sm-12 text-light offset-1 pb-3 pt-3">Article</div>
            </div>
            </a>

            <a href="showroom/showroom.php" class="text-decoration-none">
            <div class="row">
            	<div class="col-sm-12 text-light offset-1 pb-3 pt-3">Showroom</div>
            </div>
            </a>
        </div>
        <div class="col offset-2" id="main">
      			<div class="d-flex mt-3 mb-3 justify-content-between mb-3">
      				<div class="p-3 w-24 bg-info rounded">Laporan 1</div>
      				<div class="p-3 w-24 bg-warning rounded">Laporan 2</div>
      				<div class="p-3 w-24 bg-primary rounded">Laporan 3</div>
      				<div class="p-3 w-24 bg-primary rounded">Laporan 4</div>
      			</div>
        </div>
    </div>

    <div class="row">
      <div class="col offset-2">
        <h2>EMAIL MASUK</h2>
      </div>
    </div>


    <div class="row">
      <div class="table-responsive col offset-2">
        <table class="table table-striped">
          <tr style="font-weight:bold">
            <td>Nama</td>
            <td>No HP</td>
            <td>Email</td>
            <td>Pesan</td>
            <td>Action</td>
          </tr>

          <?php
          $sql = "select * from tbcontact order by no desc";
          $query = mysqli_query($con,$sql);
          while($re = mysqli_fetch_assoc($query)){
            $no = $re['no'];
            $nama = $re['nama'];
            $nohp = $re['nohp'];
            $email = $re['email'];
            $pesan = $re['pesan'];
          ?>
            <tr>
              <td><?php echo $nama; ?></td>
              <td><?php echo $nohp; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $pesan; ?></td>
              <td>
                <button style="width:40px" class="btn btn-danger" name="del" id="del" onclick="return del(<?php echo $no; ?>)">
                  <i class="fa fa-trash-o"></i>
                </button>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
</div>
</body>
</html>
