<?php
include "admin/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WULING INDONESIA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

</head>

<style>
.navbar {
    margin-bottom: 0;
    background-color: #DA0404;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-brand {
    margin: 0;
    padding: 0;

  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }


@media screen and (max-width: 1024px) {
    .nonehp {
      display: none !important;
    }
    .mp0 {
      margin: -65px;
      margin-top:-30px;
    }
    .mp1 {
      margin: 0px 30px;
    }
    .fs0 {
      font-size: 20px;
    }
    .fs1 {
      font-size: 12px;
    }
    .fs2 {
      font-size: 20px;
    }
}

@media screen and (min-width: 1024px) {
    .noneweb {
      display: none !important;
    }
    .fs0 {
      font-size: 40px;
    }
    .fs1 {
      font-size: 14px;
    }
    .fs2 {
      font-size: 30px;
    }
}
</style>

<body data-spy="scroll" data-target=".navbar" data-offset="60" style="overflow-x:hidden">

<nav class="navbar navbar-default navbar-fixed-top nonehp">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      </button>
        <a class="navbar-brand" href="index.php"><img src="IMAGES/logo icon.png" style="max-width: 90px; margin-top: -20px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Navbar Mobile -->

<nav class="navbar navbar-default navbar-fixed-top noneweb">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php"><img src="IMAGES/logo icon.png" style="max-width: 90px; margin-top: -20px"></a>
    </div>

  </div>
</nav>

<!-- ISI ARTIKEL -->

<div class="container-fluid mp0" style="background-color:#f8f8f8">

  <?php
  $ida = $_GET['ida'];

  $sql = "select * from tbarticle where ida='$ida'";
  $query = mysqli_query($con,$sql);
  while($result = mysqli_fetch_assoc($query)){
  $isi = $result['isi'];

  $sql2 = "select isi, replace('$isi','upload/','Admin/Article/upload/') as berubah from tbarticle where ida='$ida'";
  $query2 = mysqli_query($con,$sql2);
  $result2 = mysqli_fetch_assoc($query2);

  ?>

  <div class="row" style="margin:90px 20px">

    <!-- Sisi Kiri -->

    <div class="col-sm-7 text-justify" style="margin:0 30px;margin-right:60px">

      <!-- Judul -->

      <div class="row fs0" style="font-family:arial;color:#a7120a">
        <div class="col-sm-12">
          <b><?php echo $result['judul']; ?></b>
        </div>
      </div>

      <!-- Tanggal Pembuatan -->

      <div class="row fs1" style="color:#999">
        <div class="col-sm-12">
          <p>-<?php echo $result['tgl']; ?></p>
        </div>
      </div>

      <!-- Thumbnail -->

      <div class="row" style="padding: 25px 0">
        <div class="col-sm-12">
          <img src="IMAGES/<?php echo $result['thumbnail']; ?>" style="width:100%">
        </div>
      </div>

      <!-- Isi -->
     

      <div class="row" style="font-size:18px;font-family:gadugi;color:#999">
        <div class="col-sm-12">
          <p><?php echo $result2['berubah']; ?></p>
        </div>
      </div>


<?php } ?>

    </div>

    <!-- Sisi Kanan -->

      <div class="col-sm-4 mp1">

        <div class="row text-center fs2" style="font-family:arial;color:#a7120a;margin-bottom:20px;">
          <p>
            <b>Artikel Lainnya</b>
          </p>
        </div>

        <?php
        $sql3 = "select * from tbarticle where ida!='$ida'";
        $query3 = mysqli_query($con,$sql3);
        while($result3 = mysqli_fetch_assoc($query3)){
        ?>

        <a style="text-decoration: none;color:#888" href="article.php?ida=<?php echo $result3['ida']; ?>">

        <div class="row" style="margin-bottom:35px">

          <!-- Thumbnail -->

          <div class="col-sm-12">
            <img src="IMAGES/<?php echo $result3['thumbnail']; ?>" style="width:100%;margin-bottom:10px">
          </div>

           <!-- Judul -->

          <div class="col-sm-12" style="padding: 0px 25px">
            <span style="font-size:20px;font-family:arial;">
              <b><?php echo $result3['judul']; ?></b>
            </span>
          </div>
        </div>

        </a>

        <?php } ?>

      </div>

  </div>

</div>

</body>
</html>