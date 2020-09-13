<?php
include "admin/koneksi.php";


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wuling Motor</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="pngFix/jquery.pngFix.js"></script>
<script type="text/javascript" src="mopSlider/mopSlider-2.4.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>

<style>

body {
  padding-top: 50px;
}


  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #878787;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
 
   .container2-fluid {
    padding: 10px  10px;
    background-color: #000;
    color: #aaa;
  }
  .bg-grey {
    background-color: #fff;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  

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
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }

    .mySlides {display: none;}

    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
      max-width: 100%;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 13px;
      width: 13px;
      margin: 0 5px;
      background-color: #FFF;
      box-shadow: 0px 0px 10px black;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 2s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 2.5s;
      animation-name: fade;
      animation-duration: 2.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .7} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .7} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }

    .about h2 {
      text-align: center;
      margin-bottom: -15px;
    }
    .about h4 {
      text-align: center;
      font-size: 15px;
    }

.top-left {
  position: absolute;
  top: 15px;
  left: 20px;
  font-size: 25px;
  color: white;
  font-family: arial;
  font-weight: bold;
  text-shadow: -2px 2px 2px black;
}

.top-left2 {
  position: absolute;
  top: 50px;
  left: 20px;
  font-size: 18px;
  color: white;
  font-family: arial;
  text-shadow: -2px 2px 2px black;
  background-color: rgba(0,0,0, 0.5);
  padding: 3px 10px;
  border-radius: 0 20px;
}

.bottom-left {
  position: absolute;
  top: 185px;
  left: 25px;
}

.btn-wuling {
  background-color: #F61E1E;
  border-radius: 0 90px;
  color: white;
  width: 250px;
  font-family: Tw Cen MT;
  font-size: 18px;
  box-shadow: 0 0 10px black;
}

.btn-article {
  background-color: #F61E1E;
  border-radius: 200px 0px;
  color: white;
  width: 180px;
  font-family: Tw Cen MT;
  font-size: 18px;
  box-shadow: 0 0 10px black;
}

.bottom-right {
  position: absolute;
  bottom: 65px;
  right: 40px;
}

.btn-jenis {
  background-color: #F61E1E;
  border-radius: 100%;
  color: white;
  width: 40px;
  font-family: Tw Cen MT;
  font-size: 18px;
  box-shadow: 0 0 10px black;
}

.bottom-center {
  position: absolute;
  bottom: 0%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.center-left {
  position: absolute;
  top: 90px;
  left: 35px;
  font-size: 25px;
  color: red;
  font-family: arial;
  font-weight: bold;
  text-shadow: -2px 2px 2px black;
}

.thumbarticle {
  display:relative;
  width:100%;
  height:260px;
  overflow:hidden;
  box-shadow: 0px 3px 10px #888888;
  object-fit:cover;
}

@media screen and (max-width: 1024px) {
    .gmbr {
      width: 100%;
      height: 500px;
    }
    .bottom-left {
      position: absolute;
      top: 390px;
      left: 35px;
    }
    .product {
      width: 92%;
      margin: 0 3%;
    }
    .productz {
      width: 100%;
    }
    .nonehp {
      display: none !important;
    }
    .btn-wuling {
      background-color: #F61E1E;
      border-radius: 0 100px;
      color: white;
      width: 500px;
      height: 80px;
      font-family: Tw Cen MT;
      font-size: 30px;
      box-shadow: 0 0 10px black;
    }
    .top-left {
      position: absolute;
      top: 20px;
      left: 35px;
      font-size: 60px;
      color: white;
      font-family: arial;
      font-weight: bold;
      text-shadow: -2px 2px 2px black;
    }

    .top-left2 {
      position: absolute;
      top: 100px;
      left: 40px;
      font-size: 35px;
      color: white;
      font-family: arial;
      text-shadow: -2px 2px 2px black;
      background-color: rgba(0,0,0, 0.5);
      padding: 5px 30px;
      border-radius: 0 40px;
    }
    .thumbarticle {
      display:relative;
      width:100%;
      height:500px;
      overflow:hidden;
      box-shadow: 0px 3px 10px #888888;
      object-fit:cover;
    }
    .ukuranut {
      font-size:50pt;
    }

    .container2-fluid {
      padding: 10px 10px;
      background-color: #000;
      color: #aaa;
      font-size:30px;
      padding-top:30px;
    }

    .inputtype {
      height:100px;
      font-size:50px;
      border-radius:15px;
      padding: 10px 20px;
    }
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}

    body {
      padding-top: 100px;
    }

    .artk {
      padding-top: 150px;
    }
}

@media screen and (min-width: 1024px) {
    .textweb {
      width: 430px;
    }
    .noneweb {
      display: none !important;
    }
    .thumbarticle {
      display:relative;
      width:100%;
      height:260px;
      overflow:hidden;
      box-shadow: 0px 3px 10px #888888;
      object-fit:cover;
    }
    .ukuranut {
      font-size:35px;
    }
    .artk {
      padding-top: 70px;
    }
}

.bar {
  width: 35px;
  height: 5px;
  background-color: white;
  margin: 6px 0;
}

.bar1, .bar2, .bar3 {
  width: 90px;
  height: 10px;
  background-color: white;
  margin: 14px 25px;
  transition: 0.4s;
}

.change .bar1 {
  -webkit-transform: rotate(-45deg) translate(-30px, 10px);
  transform: rotate(-45deg) translate(-30px, 10px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  -webkit-transform: rotate(45deg) translate(-22px, -4px);
  transform: rotate(45deg) translate(-22px, -4px);
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  overflow-x: hidden;
  padding-top: 120px;
  padding-left: 20px;
  background-color:#DA0404;
  width:520px;
}

.sidenav a {
  padding: 8px 8px 8px 20px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
}

.sidenav a:hover {
  color: #007bff;
}

.sidenav .closebtn {
  position: absolute;
  top: -10px;
  right: 10px;
  font-size: 16px;
  margin-left: 50px;
}

.closebtn {
  top:100px;
  right:50px;
}
</style>

<script>
function buka() {
  var x = document.getElementById("mySidenav");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function tutup() {
  document.getElementById("mySidenav").style.display = "none";
}
</script>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="overflow-x:hidden">

<nav class="navbar navbar-default navbar-fixed-top nonehp">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="index.php"><img src="IMAGES/logo icon.png" style="max-width: 90px; margin-top: -20px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#pricing">PRICES AND DETAILS</a></li>
        <li><a href="#article">ARTICLE</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Navbar Mobile -->

<nav class="navbar navbar-default navbar-fixed-top noneweb">
  <div class="container-fluid" style="padding: 30px 30px">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php"><img src="IMAGES/logo icon.png" style="max-width: 260px; margin-top: -86px;margin-left:-20px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!-- <ul class="nav navbar-nav navbar-right" style="font-size:24px">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#pricing">PRICES AND DETAILS</a></li>
        <li><a href="#article">ARTICLE</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul> -->
      <div class="nav navbar-nav navbar-right noneweb" id="barmenu" onclick="buka()">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
    </div>
  </div>
</nav>


  <div id="mySidenav" style="margin-right:0px;display:none;" class="sidenav noneweb">
    
    <a href="#abouts" onclick="tutup()">
    <div class="row text-white" style="font-size:60px">
      About
    </div>
    </a>

    <a href="#pricings" onclick="tutup()">
    <div class="row text-white" style="font-size:60px">
      Prices and Details
    </div>
    </a>

    <a href="#article" onclick="tutup()">
    <div class="row text-white" style="font-size:60px">
      Article
    </div>
    </a>

    <a href="#contacts" onclick="tutup()">
    <div class="row text-white" style="font-size:60px">
      Contact
    </div>
    </a>

</div>

<!-- Slideshow -->

<div class="text-center" style="background-color:white">
    <div class="slideshow-container">
      
      <?php
      $sql = "select * from tbslideshow order by urutan asc";
      $query = mysqli_query($con,$sql);
      $num = mysqli_num_rows($query);

      for($x=0;$x<$num;$x++){
        $result = mysqli_fetch_assoc($query);
      ?>

      <div class="mySlides fade">
        <img class="mx-auto d-block img-fluid" width="100%" height="620px" src="IMAGES/<?php echo $result['gambar']; ?>" style="object-fit:cover;">
      </div>

    <?php } ?>

    </div>
    
      <div class="bottom-center nonehp noneweb">
        <?php
        $sql = "select * from tbslideshow";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_assoc($query)){
        ?>
        <span class="dot" id="about"></span>
        <?php } ?>
      </div>
</div>


<!-- Container (About Section) -->

<div class="container-fluid nonehp" style="padding-top:50px">
  <div class="container">
    <div class="row">

      <?php
      $sql8 = "select * from tbtentang";
      $query8 = mysqli_query($con,$sql8);
      while($hasil8 = mysqli_fetch_assoc($query8)){

      ?>

      <center>
        <h1 style="font-weight:bold"><?php echo $hasil8['judul']; ?></h1>

        <p style="font-size:18px">
          <?php echo $hasil8['isi']; ?>
        </p>
      </center>

      <?php } ?>

    </div>
  </div>
</div>

<!-- About Mobile -->

<div class="container-fluid noneweb" id="abouts" style="padding-top:160px;padding-bottom:100px">
  <div class="container-fluid">
    <div class="row">

      <?php
      $sql8 = "select * from tbtentang";
      $query8 = mysqli_query($con,$sql8);
      while($hasil8 = mysqli_fetch_assoc($query8)){

      ?>

      <center>
        <span style="font-weight:bold;font-size:60px;line-height: 1.2"><?php echo $hasil8['judul']; ?></span>

        <p style="font-size:32px;margin:0px 30px;margin-top:30px" id="pricings">
          <?php echo $hasil8['isi']; ?>
        </p>
      </center>

      <?php } ?>

    </div>
  </div>
</div>

<!-- Container (Pricing Section) -->

<?php

$sqlku = "select * from tbshowroom";
$queryku = mysqli_query($con,$sqlku);

$products='';

while($reku = mysqli_fetch_assoc($queryku))
{
  $products.= '
    <div class="product nonehp" style="position:relative;">

      <div class="row">
        <img class="mx-auto d-block img-fluid gmbr" src="IMAGES/'.$reku['gambar'].'" width="430px" height="242px" style="border-radius: 0 70px;box-shadow: 0px 3px 10px #888888;margin: 0 15px">
      </div>

      <div class="top-left" style="text-transform: uppercase;">'. $reku['nama'] .'</div>

      <div class="top-left2">
        <sup style="font-size:12px;">start from</sup> <span> Rp '. number_format($reku["harga"]) .'</span>
      </div>
    
      <div class="bottom-left">
          <a href="GALLERY '. $reku['nama'] .'.php">
            <button class="btn-wuling btn">Click for Details</button>
          </a>
      </div>

      <div class="row" style="margin-top:30px;padding:0 15px">
        <div class="product">
          <center>
            <p><b> ' . $reku['tipe'] . ' </b></p>
          
              ' . $reku['daftar']
.
           '

           </center>
        </div>
      </div>

    </div>

    
  ';
}

?>

<div class="container-fluid nonehp" id="pricing" style="padding-left: 0px;padding-right:0px">
    
  <div id="slider" style="padding-top:70px">
  <?=$products?>
  </div>
  <div class="clear"></div>

</div>

<!-- Container (Pricing Section Mobile) -->

<?php

$sqlku = "select * from tbshowroom";
$queryku = mysqli_query($con,$sqlku);

$products='';

while($reku = mysqli_fetch_assoc($queryku))
{
  $products.= '
    <div class="product noneweb" style="position:relative;margin-top:40px">

      <div class="row">
        <img class="mx-auto d-block img-fluid gmbr" src="IMAGES/'.$reku['gambar'].'" width="430px" height="242px" style="border-radius: 0 120px;box-shadow: 0px 3px 10px #888888;margin: 0 15px">
      </div>

      <div class="top-left" style="text-transform: uppercase;">'. $reku['nama'] .'</div>

      <div class="top-left2">
        <sup style="font-size:20px;">start from</sup> <span> Rp '. number_format($reku["harga"]) .'</span>
      </div>
    
      <div class="bottom-left">
          <a href="GALLERY '. $reku['nama'] .'.php">
            <button class="btn-wuling btn">Click for Details</button>
          </a>
      </div>

      <div class="row" style="margin-top:30px">
        <div class="productz" style="font-size:30px">
          <center>
            <p><b> ' . $reku['tipe'] . ' </b></p>
          
              ' . $reku['daftar']
.
           '

           </center>
        </div>
      </div>

    </div>

    
  ';
}

?>

<div class="container-fluid noneweb" style="padding-left: 0px;padding-right:0px;margin-bottom:20px">
    
  <div id="slider">
  <?=$products?>
  </div>
  <div class="clear"></div>

</div>

<!-- Container (Article Section) -->

<div id="article" class="container-fluid artk" style="background-color:#f9f9f9;padding-bottom:30px">

  <p class="text-center ukuranut" style="font-family:arial"><b>Updates Terbaru</b></p>

  <div class="row" style="padding:0 10px;padding-top: 20px">
    <?php
    $sql5 = "select * from tbarticle order by ida desc limit 3"; // urutkan dari yang terbaru dan cuma 3 data yang ditampilkan
    $query5 = mysqli_query($con,$sql5);
    while($result5 = mysqli_fetch_assoc($query5)){
    $isi = $result5['isi'];
    ?>
      <a class="nonehp" style="text-decoration: none;color:#888" href="article.php?ida=<?php echo $result5['ida']; ?>">
        <div class="col-sm-4" style="padding: 0px 5px">
            <img src="IMAGES/<?php echo $result5['thumbnail']; ?>" class="thumbarticle">
            
            <div style="padding:30px 25px">
              <span style="font-family:arial; font-size:18px"><b><?php echo $result5['judul']; ?></b></span>
        
              <p style="font-size:14px;margin-top:10px">
                -<?php echo $result5['tgl']; ?>
              </p>
            </div>
        </div>
      </a>

      <!-- Article Mobile -->

      <a class="noneweb" style="text-decoration: none;color:#888" href="article.php?ida=<?php echo $result5['ida']; ?>">
        <div class="col-4" style="padding: 0px 5px">
            <img src="IMAGES/<?php echo $result5['thumbnail']; ?>" class="thumbarticle">
            
            <div style="padding:30px 25px">
              <span style="font-family:arial; font-size:42px"><b><?php echo $result5['judul']; ?></b></span>
        
              <p style="font-size:24px;margin-top:10px">
                -<?php echo $result5['tgl']; ?>
              </p>
            </div>
        </div>
      </a>
    <?php } ?>
  </div>
</div>

<!-- Container (Contact Section) -->

<div class="row nonehp">
  <div id="contact" class="container-fluid bg-grey" style="margin-top:15px;">
      <p class="text-center ukuranut" style="font-family:arial;margin-bottom: 20px"><b>Contact</b></p>
   <div class="col-sm-3">
      <div class="row text-center">
        <div class="col-sm-12">
          <img class="rounded" src="IMAGES/foto profil.jpg" width="100%">
        </div>
        <div class="col-sm-12 form-group">
          <label>Hendi Se</label>
          <label>(Senior Sales Executive)</label>
          <h5 style="margin-top: 0">085252009654</h5>
        </div>
      </div>
    </div>
    
    <div class="col-sm-9">
      <form method="POST" action="">
        <div class="row">
          <div class="col-sm-4 form-group">
            <input class="form-control" id="nama" name="nama" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>

        <textarea class="form-control" id="pesan" name="pesan" placeholder="Message" rows="5"></textarea>
        <br>
        <div class="row">
          <div class="col-sm-10"></div>
          <div class="col-sm-2">
            <button class="btn btn-primary btn-block" type="submit" name="submit" id="submit">Send</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Contact Mobile -->

<div class="row noneweb">
  <div id="contacts" class="container-fluid bg-grey" style="margin-top:15px;">
      <p class="text-center ukuranut" style="font-family:arial;margin-bottom: 50px;color:white"><b>.</b></p>
      <p class="text-center ukuranut" style="font-family:arial;margin-bottom: 20px"><b>Contact</b></p>
   <div class="col-sm-12">
      <div class="row text-center">
        <div class="col-sm-12">
          <img class="rounded" src="IMAGES/foto profil.jpg" width="100%">
        </div>
        <div class="col-sm-12 form-group" style="font-size:40px">
          <label>Hendi Se</label>
          <label>(Senior Sales Executive)</label>
          <p style="margin-top: 0">085252009654</p>
        </div>
      </div>
    </div>
    
    <div class="col-sm-12">
      <form method="POST" action="">
        <div class="row">
          <div class="col-sm-12 form-group">
            <input class="form-control inputtype" id="nama" name="nama" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-12 form-group">
            <input class="form-control inputtype" id="phone" name="phone" placeholder="Phone" type="text" required>
          </div>
          <div class="col-sm-12 form-group">
            <input class="form-control inputtype" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>

        <textarea class="form-control inputtype" id="pesan" name="pesan" placeholder="Message" rows="5"></textarea>
        <br>
        <div class="row">
          <div class="col-sm-12">
            <button class="btn btn-primary btn-block" style="height:90px;font-size:40px;margin-bottom:30px" type="submit" name="submit" id="submit">Send</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];
  $phone = $_POST['phone'];
  $nama = $_POST['nama'];

$sqle = "insert into tbcontact
        (nama, nohp, email, pesan)
        values('$nama','$phone','$email','$pesan')";
$querye = mysqli_query($con,$sqle);

$message = "Berhasil mengirim.";
echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<!-- Footer -->

<footer class="container2-fluid text-center">
  <div class="col-sm-12">
	<p>Contact us and we'll get back to you within 24 hours.</p>

	<span class="glyphicon glyphicon-map-marker"></span> Pontianak, Indonesia
	<span class="glyphicon glyphicon-phone"></span> 085252009654
	<span class="glyphicon glyphicon-envelope"></span> hendise0412@gmail.com</p>

	<a href="https://api.whatsapp.com/send?phone=6285249667717">
	Click me to contact via WhatsApp
	</a>
   </div>
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

</body>


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>

// $(document).ready(function(){
//   // Add smooth scrolling to all links in navbar + footer link
//   $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
//     // Make sure this.hash has a value before overriding default behavior
//     if (this.hash !== "") {
//       // Prevent default anchor click behavior
//       event.preventDefault();

//       // Store hash
//       var hash = this.hash;

//       // Using jQuery's animate() method to add smooth page scroll
//       // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
//       $('html, body').animate({
//         scrollTop: $(hash).offset().top
//       }, 900, function(){
   
//         // Add hash (#) to URL when done scrolling (default click behavior)
//         window.location.hash = hash;
//       });
//     } // End if
//   });
  
//   $(window).scroll(function() {
//     $(".slideanim").each(function(){
//       var pos = $(this).offset().top;

//       var winTop = $(window).scrollTop();
//         if (pos < winTop + 600) {
//           $(this).addClass("slide");
//         }
//     });
//   });
// })

  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }

  
</script>
</html>


<script>
jQuery.fn.extend({
  mopSlider:function(setting){
    var ua=navigator.userAgent,browser,os,ie67=false;
    var px="px"
    var btnPosi,boxPosi,btnPast,boxPast,whitchDrag="";
    var btnMoveNum,btnMoveTo,boxMoveNum,boxMoveTo;
    var timeCheck1,timeCheck2,DragCheck1,DragCheck2,finalTime1,finalTime2;
    var mopSliderName;
    var nextMov=[];
    var scrollMax,scrollNum,caseW,itemNum,sliderNum,checkNum,movNum;
    var mopSliderMotion;
    var boxW,itemMgnAll;
    var finalCount=0;
    var indication=setting.indi
    var mopSliderW=setting.w;
    var mopSliderH=setting.h;
    var sldW=setting.sldW;
    var btnW=setting.btnW;
    var itemMgn=setting.itemMgn;
    var shuffle=setting.shuffle;
    var mopSliderNo=setting.no;
    var mopSliderType=setting.type;
    /*path to image*/
    var btnLeft=new Image();
    var btnLeftF=new Image();
    var btnRight=new Image();
    var btnRightF=new Image();
    var btnCenter=new Image();
    var btnChange=new Image();
    var btnChangeF=new Image();
    var backImg=new Image();
    var sldcLeftImg=new Image();
    var sldcRightImg=new Image();
    var sldBackLeft=new Image();
    var sldBackCenter=new Image();
    var sldBackRight=new Image();
    if(mopSliderType=="paper"){
      btnLeft.src="mopSlider/sliderBtnLeftW.png";
      btnLeftF.src="mopSlider/sliderBtnLeftW_f.png";
      btnRight.src="mopSlider/sliderBtnRightW.png";
      btnRightF.src="mopSlider/sliderBtnRightW_f.png";
      btnCenter.src="mopSlider/sliderBtnW.png";
      btnChange.src="mopSlider/sliderBackRightRightW.png";
      btnChangeF.src="mopSlider/sliderBackRightRightW_f.png";
      backImg.src="mopSlider/paperBack.gif";
      sldcLeftImg.src="mopSlider/sliderBackLeftLeftW.png";
      sldcRightImg.src="mopSlider/sliderBackRightRightW.png";
      sldBackLeft.src="mopSlider/sliderBackLeftW.png";
      sldBackCenter.src="mopSlider/sliderBackW.png";
      sldBackRight.src="mopSlider/sliderBackRightW.png";
    }else if(mopSliderType=="black"){
      btnLeft.src="mopSlider/sliderBtnLeft.png";
      btnLeftF.src="mopSlider/sliderBtnLeft_f.png";
      btnRight.src="mopSlider/sliderBtnRight.png";
      btnRightF.src="mopSlider/sliderBtnRight_f.png";
      btnCenter.src="mopSlider/sliderBtn.png";
      btnChange.src="mopSlider/sliderBackRightRight.png";
      btnChangeF.src="mopSlider/sliderBackRightRight_f.png";
      backImg.src="mopSlider/monoBack.gif";
      sldcLeftImg.src="mopSlider/sliderBackLeftLeft.png";
      sldcRightImg.src="mopSlider/sliderBackRightRight.png";
      sldBackLeft.src="mopSlider/sliderBackLeft.png";
      sldBackCenter.src="mopSlider/sliderBack.png";
      sldBackRight.src="mopSlider/sliderBackRight.png";
    }
    
    /* Modifed for tutorialzine */
    else if(mopSliderType=="tutorialzine"){
      btnLeft.src="mopSlider/sliderBtnLeftW.png";
      btnLeftF.src="mopSlider/sliderBtnLeftW_f.png";
      btnRight.src="mopSlider/sliderBtnRightW.png";
      btnRightF.src="mopSlider/sliderBtnRightW_f.png";
      btnCenter.src="mopSlider/sliderBtnW.png";
      btnChange.src="mopSlider/sliderBackRightRightW.png";
      btnChangeF.src="mopSlider/sliderBackRightRightW_f.png";
/*      backImg.src="mopSlider/paperBack.gif";*/
      sldcLeftImg.src="mopSlider/sliderBackLeftLeftW.png";
      sldcRightImg.src="mopSlider/sliderBackRightRightW.png";
      sldBackLeft.src="mopSlider/sliderBackLeftW.png";
      sldBackCenter.src="mopSlider/sliderBackW.png";
      sldBackRight.src="mopSlider/sliderBackRightW.png";

    }
    
    if(setting.itemMgn==null){itemMgn=20};
    if(setting.shuffle==null){shuffle=1};
  
    if((mopSliderNo==null)||(mopSliderNo=="01")){
      mopSliderName="#mopSlider01";
      mopSliderNo="01";
    }else{
      mopSliderName="#mopSlider"+setting.no;
    }
    var noSharp=mopSliderName.split("#")[1];
    $(mopSliderName).hide();
    /*shuffle*/
    var arr=jQuery.makeArray($(this).children());
    Array.prototype.shuffle = function() {
    var i = this.length;
    while(i){
      var j = Math.floor(Math.random()*i);
      var t = this[--i];
      this[i] = this[j];
      this[j] = t;
    };
    return this;
    };
    if(shuffle==1){
      arr.shuffle();
      $(arr).appendTo(this);
    };
    if(ua.indexOf("Mac",0)>=0){
      os="mac";
    }else if(ua.indexOf("Win",0)>=0){
      os="win";
    };
    if(ua.indexOf("MSIE 6")>-1){
      browser="ie6";
    };
    if(ua.indexOf("MSIE 7")>-1){
      browser="ie7";
    };
    if((browser=="ie6")||(browser=="ie7")){
      ie67=true;
    };
    $(this).css({position:"absolute",overflow: "hidden",left: "0px",display: "block"});
    /*items number*/
    itemNum=$(this).children().length;
    var allW=0;
    var num=0;
    for (i=1; i<(itemNum+1); i++){
      var itemW=eval($(this).children().eq(num).css("width").split("px")[0]);
      nextMov.push(itemW);
      var itemH=eval($(this).children().eq(num).css("height").split("px")[0]);
      var mgn=(mopSliderH-itemH)/2;
      $(this).children().eq(num).css({marginTop:"0px"}); //biar mopSlidernya ga ada margin-top
      num+=1;
      allW+=itemW;
    };
    /*width of all content & margin*/
    itemMgnAll=itemMgn*itemNum;
    boxW=allW+itemMgnAll+itemMgn;
    /*put mopSlider*/
    $(this).wrap('<div id="mopSlider"><div id="'+noSharp+'"><div class="holder"></div></div></div>');
    $(this).parent().after(
    '<div class="sliderCase" hidden>'+ // slider nya hidden
      '<div class="sliderCaseLeft"></div>'+
      '<div class="sliderCaseRight"></div>'+
      '<div class="slider">'+
        '<div class="sldLeft"></div>'+
        '<div class="sldCenter"></div>'+
        '<div class="sldRight"></div>'+
        '<div class="sliderBtn">'+
          '<div class="sldBtnLeft"></div>'+
          '<div class="sldBtnCenter"><div class="indi"></div></div>'+
          '<div class="sldBtnRight"></div>'+
        '</div>'+
      '</div>'+
    '</div>'+
    '<div class="leftTop"><div class="leftTopIn"></div></div>'+
    '<div class="rightTop"><div class="rightTopIn"></div></div>'+
    '<div class="leftBottom"><div class="leftBottomIn"></div></div>'+
    '<div class="rightBottom"><div class="rightBottomIn"></div></div>'+
    '<div class="logo"><div class="logoIn"></div></div>'
    );
    /*set css*/
    $(mopSliderName+" .sliderCase").css({height:"22px",position:"relative",top:"0px"});
    $(mopSliderName+" .sliderCaseLeft").css({height:"22px",width:"25px",position:"absolute",top:"0px",left:"0px",backgroundImage:"url("+sldcLeftImg.src+")",backgroundRepeat:"no-repeat"});
    $(mopSliderName+" .sliderCaseRight").css({height:"22px",width:"25px",position:"absolute",top:"0px",right:"0px",backgroundImage:"url("+sldcRightImg.src+")",cursor:"",backgroundRepeat:"no-repeat"});
    $(mopSliderName+" .slider").css({height:"22px",position:"relative",top:"0px",left:"25px"});
    $(mopSliderName+" .sldLeft").css({left:"0px",position:"absolute",height:"22px",width:"20px",backgroundImage:"url("+sldBackLeft.src+")",backgroundRepeat:"no-repeat"});
    $(mopSliderName+" .sldCenter").css({left:"20px",width:sldW-40+px,position:"absolute",height:"22px",backgroundImage:"url("+sldBackCenter.src+")",backgroundRepeat:"repeat-x"});
    $(mopSliderName+" .sldRight").css({right:"0px",position:"absolute",height:"22px",width:"20px",backgroundImage:"url("+sldBackRight.src+")",backgroundRepeat:"no-repeat"});
    $(mopSliderName+" .sliderBtn").css({position:"absolute",height:"22px",left:"0px",cursor:"default"});
    $(mopSliderName+" .sldBtnLeft").css({left:"0px",position:"absolute",height:"22px",width:"20px",backgroundImage:"url("+btnLeft.src+")",backgroundRepeat:"no-repeat"});
    $(mopSliderName+" .sldBtnCenter").css({left:"20px",width:btnW-40+px,position:"absolute",height:"22px",backgroundImage:"url("+btnCenter.src+")",backgroundRepeat:"repeat-x"});
    $(mopSliderName+" .sldBtnRight").css({right:"0px",position:"absolute",height:"22px",width:"20px",backgroundImage:"url("+btnRight.src+")",backgroundRepeat:"no-repeat"});
    $(mopSliderName+" .indi").css({paddingTop:"5px",fontSize: "10px",textAlign:"center",fontFamily:"Arial, Helvetica, sans-serif",letterSpacing:"0.05em",color:"#2b313e"});
    $(mopSliderName).css({width:"100%",height:"580px"}); // width nya utk atur panjang tampilan mopslider nya
    $(mopSliderName).css({position:"relative",overflow:"hidden",margin:"0 0 0 0",backgroundImage:"url("+backImg.src+")"});


    if(mopSliderType=="black"){
      $(mopSliderName).css({backgroundColor:"#484848",backgroundRepeat:"repeat-x",backgroundPosition:"bottom"});
    }
    
    
    if(mopSliderType!="tutorialzine")
    {
      $(mopSliderName+" .leftTop").css({height:"10px",width:"10px",position:"absolute",top:"0px",left:"0px"});
      $(mopSliderName+" .leftTopIn").css({height:"10px",width:"10px",backgroundImage:"url(mopSlider/sliderCorner_leftTop.png)",backgroundRepeat:"no-repeat"});
      $(mopSliderName+" .rightTop").css({height:"10px",width:"10px",position:"absolute",top:"0px",right:"0px"});
      $(mopSliderName+" .rightTopIn").css({height:"10px",width:"10px",backgroundImage:"url(mopSlider/sliderCorner_rightTop.png)",backgroundRepeat:"no-repeat"});
      $(mopSliderName+" .leftBottom").css({height:"10px",width:"10px",position:"absolute",bottom:"0px",left:"0px"});
      $(mopSliderName+" .leftBottomIn").css({height:"10px",width:"10px",backgroundImage:"url(mopSlider/sliderCorner_leftBottom.png)",backgroundRepeat:"no-repeat",backgroundPosition:"bottom"});
      $(mopSliderName+" .rightBottom").css({height:"10px",width:"10px",position:"absolute",bottom:"0px",right:"0px"});
      $(mopSliderName+" .rightBottomIn").css({height:"10px",width:"10px",backgroundImage:"url(mopSlider/sliderCorner_rightBottom.png)",backgroundRepeat:"no-repeat",backgroundPosition:"bottom"});
  
      /*logo*/
      $(mopSliderName+" .logo").css({height:"50px",width:"80px",position:"absolute",top:"0px",left:"0px"});
      $(mopSliderName+" .logoIn").css({height:"50px",width:"80px",backgroundImage:"url(mopSlider/logo.png)",backgroundRepeat:"no-repeat"});
    }
    
    if(os=="mac"){$(mopSliderName+" .indi").css({letterSpacing:"0.1em"})};/*foe mac*/
    scrollMax=boxW-mopSliderW;
    scrollNum=scrollMax*0.01;/*0 to100 (box)*/
    sliderNum=(sldW-btnW)*0.01;/*0 to100 (slider)*/
    var holderWidth=(mopSliderW+scrollMax*2);
    $(mopSliderName+" .holder").css({width:holderWidth+"px",height:mopSliderH+px,position:"relative",left:-(scrollMax)+px,cursor:'move'});
    $(mopSliderName+" .holder").children().css({width:boxW+px,left:scrollMax+px});
    $(mopSliderName+" .holder").children().children().css({marginLeft:itemMgn+"px",float:"left",position:"relative"});
    $(mopSliderName+" .sliderCase").css({width:sldW+50+px});
    var sldCaseW=eval($(mopSliderName+" .sliderCase").css("width").split("px")[0]);
    var sliderLeftMgn=(mopSliderW-sldCaseW)/2;
    $(mopSliderName+" .sliderCase").css({left:sliderLeftMgn+px});
    $(mopSliderName+" .slider").css({width:sldW+px});
    $(mopSliderName+" .sliderBtn").css({width:btnW+px});
    /*pngFix*/
    $(this).pngFix();
    $("#mopSlider .sliderCase,#mopSlider .leftTop,#mopSlider .rightTop").pngFix();
    $("#mopSlider .leftBottom,#mopSlider .rightBottom,#mopSlider .logo").pngFix();
    $(mopSliderName+" .indi").html(indication);
    $(mopSliderName).show();
    /*draggable*/
    $(mopSliderName+" .sliderBtn").draggable({
      axis:"x",
      containment:"parent",
      start:function(){
        whitchDrag="btn";
        btnMoveNum=0;
        if(mopSliderNo=="01"){
          DragCheck1=setInterval("mopSliderFunc.DragCheckItv('"+mopSliderNo+"','"+mopSliderName+"','"+whitchDrag+"','"+scrollNum+"','"+boxW+"','"+mopSliderW+"','"+sldW+"','"+btnW+"')",20);
          timeCheck1=setInterval("mopSliderFunc.timeCheckItv('"+mopSliderName+"','"+whitchDrag+"')",50);/*finalMove speed*/
        }
        else if(mopSliderNo=="02"){
          timeCheck2=setInterval("mopSliderFunc.timeCheckItv('"+mopSliderName+"','"+whitchDrag+"')",50);/*finalMove speed*/
          DragCheck2=setInterval("mopSliderFunc.DragCheckItv('"+mopSliderNo+"','"+mopSliderName+"','"+whitchDrag+"','"+scrollNum+"','"+boxW+"','"+mopSliderW+"','"+sldW+"','"+btnW+"')",20);
        }
      },
      drag:function(){},
      stop:function(){
        clearInterval(DragCheck1);
        clearInterval(DragCheck2);
        mopSliderFunc.finalMove(mopSliderName,whitchDrag,sldW,btnW,scrollNum,boxW,mopSliderW);
      }
    });
    $(mopSliderName+" .holder").children().draggable({
      axis:"x",
      containment:"parent",
      start:function(){
        whitchDrag="holder";
        boxMoveNum=0;
        if(mopSliderNo=="01"){
          timeCheck1=setInterval("mopSliderFunc.timeCheckItv()",50);
          DragCheck1=setInterval("mopSliderFunc.DragCheckItv('"+mopSliderNo+"','"+mopSliderName+"','"+whitchDrag+"','"+scrollNum+"','"+boxW+"','"+mopSliderW+"','"+sldW+"','"+btnW+"')",20);
        }
        else if(mopSliderNo=="02"){
          timeCheck2=setInterval("mopSliderFunc.timeCheckItv()",50);
          DragCheck2=setInterval("mopSliderFunc.DragCheckItv('"+mopSliderNo+"','"+mopSliderName+"','"+whitchDrag+"','"+scrollNum+"','"+boxW+"','"+mopSliderW+"','"+sldW+"','"+btnW+"')",20);
        }
        
      },
      drag:function(){},
      stop:function(){
        clearInterval(DragCheck1);
        clearInterval(DragCheck2);
        mopSliderFunc.finalMove(mopSliderName,whitchDrag,sldW,btnW,scrollNum,boxW,mopSliderW);
      }
    });
    $("#mopSlider .sliderBtn").mousedown(
      function(){
        clearInterval(timeCheck1);
        clearInterval(timeCheck2);
        clearInterval(finalTime1);
        clearInterval(finalTime2);
      }
    );
    $("#mopSlider .holder").children().mousedown(
      function(){
        clearInterval(timeCheck1);
        clearInterval(timeCheck2);
        clearInterval(finalTime1);
        clearInterval(finalTime2);
      }
    );
    $(mopSliderName+" .sliderCaseRight").mouseover(
      function(){
        btnPosi=eval($(mopSliderName+" .sliderBtn").css("left").split("px")[0]);
        if(btnPosi!=0){
          $(mopSliderName+" .sliderCaseRight").css({cursor:"pointer"});
          if(browser!="ie6"){
            $(mopSliderName+" .sliderCaseRight").css({backgroundImage:"url("+btnChangeF.src+")"});
          }
        }else{
          $(mopSliderName+" .sliderCaseRight").css({cursor:""});
        }
      }
    );
    $(mopSliderName+" .sliderCaseRight").mouseout(
      function(){
        if(browser!="ie6"){
          $(mopSliderName+" .sliderCaseRight").css({backgroundImage:"url("+btnChange.src+")"});
        }
      }
    );                         
    $(mopSliderName+" .sliderCaseRight").click(
      function(){
        btnPosi=eval($(mopSliderName+" .sliderBtn").css("left").split("px")[0]);
        if(btnPosi!=0){
          if(browser!="ie6"){
            $(mopSliderName+" .sldBtnLeft").css({backgroundImage:"url("+btnLeftF.src+")"});
            $(mopSliderName+" .sldBtnRight").css({backgroundImage:"url("+btnRightF.src+")"});
          }
        }
        $(mopSliderName+" .sliderBtn").animate({left:"0px"},{duration:"1000",easing:"linear",complete:function (){complate()}});
        $(mopSliderName+" .holder").children().animate({left:scrollMax+px},{duration:"1000",easing:"linear",complete:function (){complate()}});
      }
    );
    var complate=function(){
      if(browser!="ie6"){
        $(mopSliderName+" .sldBtnLeft").css({backgroundImage:"url("+btnLeft.src+")"});
        $(mopSliderName+" .sldBtnRight").css({backgroundImage:"url("+btnRight.src+")"});
        $(mopSliderName+" .sliderCaseRight").css({backgroundImage:"url("+btnChange.src+")"});
      }
    }
    mopSliderFunc={
      DragCheckItv:function(mopSliderNo,mopSliderName,whitchDrag,scrollNum,boxW,mopSliderW,sldW,btnW){
        scrollMax=boxW-mopSliderW;
        sliderNum=(sldW-btnW)*0.01;
        var btnPosiPx=$(mopSliderName+" .sliderBtn").css("left");
        var boxPosiPx=$(mopSliderName+" .holder").children().css("left");
        btnPosi=eval(btnPosiPx.split("px")[0]);
        boxPosi=eval(boxPosiPx.split("px")[0]);
        var sliderNum100=btnPosi/sliderNum;
        var boxPosi0=-(boxPosi-scrollMax);
        var boxNum=-(boxPosi0/scrollNum);
        if(whitchDrag=="btn"){
          $(mopSliderName+" .holder").children().css({left:-(sliderNum100*scrollNum)+scrollMax+px});
        }else if(whitchDrag=="holder"){
          $(mopSliderName+" .sliderBtn").css({left:-(boxNum*sliderNum)+px});
        };
      },
      timeCheckItv:function(mopSliderName,whitchDrag){
        btnPast=btnPosi;
        boxPast=boxPosi;
      },
      finalMove:function(mopSliderName,whitchDrag,sldW,btnW,scrollNum,boxW,mopSliderW){
        finalCount=0;
        if((btnPosi!=undefined)&&(btnPast!=undefined)){
          btnMoveNumStart=btnPosi-btnPast;
          boxMoveNumStart=boxPosi-boxPast;
          if(mopSliderName=="#mopSlider01"){
            finalTime1=setInterval("mopSliderFunc.finalTimeItv('"+mopSliderName+"','"+whitchDrag+"','"+btnMoveNumStart+"','"+boxMoveNumStart+"','"+sldW+"','"+btnW+"','"+scrollNum+"','"+boxW+"','"+mopSliderW+"')",50);/*last slip move*/
          }
          if(mopSliderName=="#mopSlider02"){
            finalTime2=setInterval("mopSliderFunc.finalTimeItv('"+mopSliderName+"','"+whitchDrag+"','"+btnMoveNumStart+"','"+boxMoveNumStart+"','"+sldW+"','"+btnW+"','"+scrollNum+"','"+boxW+"','"+mopSliderW+"')",50);/*last slip move*/
          }
        }
      },
      finalTimeItv:function(mopSliderName,whitchDrag,btnMoveNumStart,boxMoveNumStart,sldW,btnW,scrollNum,boxW,mopSliderW){
        finalCount+=1;
        if(finalCount==1){
          btnMoveNum=btnMoveNumStart;
          boxMoveNum=boxMoveNumStart;
          mopSliderNameTemp=mopSliderName;
        }
        btnPosi=eval($(mopSliderNameTemp+" .sliderBtn").css("left").split("px")[0]);
        boxPosi=eval($(mopSliderNameTemp+" .holder").children().css("left").split("px")[0]);
        if(whitchDrag=="btn"){
          if((btnMoveNum<0.1)&&(btnMoveNum>-0.1)){
            btnMoveNum=0;
          }else{
            if(browser=="ie6"){
              btnMoveNum=btnMoveNum/1.75;
            }else{
              btnMoveNum=btnMoveNum/1.5;
            }
          }
          btnMoveTo=btnMoveNum+btnPosi;
          if(btnMoveTo>(sldW-btnW)){
            btnMoveTo=sldW-btnW;
          }else if(btnMoveTo<0){
            btnMoveTo=0;
          };
          $(mopSliderNameTemp+" .sliderBtn").css({left:btnMoveTo+px});
          /*set btnPast*/
          btnPast=btnMoveTo;
          
          if(btnMoveNum==0){
            clearInterval(finalTime1);
            clearInterval(finalTime2);
          }
          mopSliderFunc.checkFinal(mopSliderName,whitchDrag,sldW,btnW,scrollNum,boxW,mopSliderW);
        }
        else if(whitchDrag=="holder"){
          if((boxMoveNum<1)&&(boxMoveNum>-1)){
            boxMoveNum=0;
          }else{
            if(browser=="ie6"){
              boxMoveNum=boxMoveNum/1.75;
            }else{
              boxMoveNum=boxMoveNum/1.5;
            }
          }
          boxMoveTo=boxMoveNum+boxPosi;
          if(boxMoveTo>scrollMax){
            boxMoveTo=scrollMax;
          }else if(boxMoveTo<0){
            boxMoveTo=0;
          };
          $(mopSliderNameTemp+" .holder").children().css({left:boxMoveTo+px});
          /*set boxPast*/
          boxPast=boxMoveTo;
          if(boxMoveNum==0){
            clearInterval(finalTime1);
            clearInterval(finalTime2);
          }
          mopSliderFunc.checkFinal(mopSliderName,whitchDrag,sldW,btnW,scrollNum,boxW,mopSliderW);
        }
      },
      checkFinal:function(mopSliderName,whitchDrag,sldW,btnW,scrollNum,boxW,mopSliderW){
        btnPosi=eval($(mopSliderName+" .sliderBtn").css("left").split("px")[0]);
        boxPosi=eval($(mopSliderName+" .holder").children().css("left").split("px")[0]);
        var sliderNum100=btnPosi/sliderNum;
        var boxPosi0=-(boxPosi-scrollMax);
        var boxNum=-(boxPosi0/scrollNum);
        if(whitchDrag=="btn"){
          $(mopSliderName+" .holder").children().css({left:-(sliderNum100*scrollNum)+scrollMax+px});
        }else if(whitchDrag=="holder"){
          $(mopSliderName+" .sliderBtn").css({left:-(boxNum*sliderNum)+px});
        };
      }/*end mopSliderFunc*/
    }
  }
});
  </script>