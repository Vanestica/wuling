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
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  

  <style>

  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
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
  .jumbotron {
    background-color: #F61E1E ;
    color: #fff;
    padding: 50px 0 0;
    font-family: Montserrat, sans-serif;
    text-shadow: 2px 2px 4px #000000;
    box-shadow: 0px 0px 20px #888;
  }
  .container-fluid {
    padding: 30px  10px;
/*    text-align: justify;*/
  }
   .container2-fluid {
    padding: 10px  10px;
    background-color: #000;
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
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #F61E1E !important;
    border-bottom: 0px;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-body {
    min-height: 330px;
  }
  .panel-footer {
    background-color: #454241 !important;
  }
  .panel-footer h3 {
    font-size: 32px;
    color:#fff;
  }
  .panel-footer h4 {
    color: #fff;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #DA0404;
    color: #fff;
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
      background-color: ;
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
  top: 10px;
  left: 35px;
  font-size: 25px;
  color: white;
  font-family: arial;
  font-weight: bold;
  text-shadow: -2px 2px 2px black;
}

.top-left2 {
  position: absolute;
  top: 50px;
  left: 35px;
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
  left: 40px;
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






.multi-item-carousel{
  .carousel-inner{
    > .item{
      transition: 500ms ease-in-out left;
    }
    .active{
      &.left{
        left:-33%;
      }
      &.right{
        left:33%;
      }
    }
    .next{
      left: 33%;
    }
    .prev{
      left: -33%;
    }
    @media all and (transform-3d), (-webkit-transform-3d) {
      > .item{
        // use your favourite prefixer here
        transition: 500ms ease-in-out left;
        transition: 500ms ease-in-out all;
        backface-visibility: visible;
        transform: none!important;
      }
    }
  }
  .carouse-control{
    &.left, &.right{
      background-image: none;
    }
  }
}

// non-related styling:
body{
  background: #333;
  color: #ddd;
}

</style>


</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
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

<!-- Slideshow -->

<div class="jumbotron text-center">
    <div class="slideshow-container">
      
      <?php
      $sql = "select * from tbslideshow order by urutan asc";
      $query = mysqli_query($con,$sql);
      $num = mysqli_num_rows($query);

      for($x=0;$x<$num;$x++){
        $result = mysqli_fetch_assoc($query);
      ?>

      <div class="mySlides fade">
        <img class="mx-auto d-block img-fluid" width="100%" height="600px" src="IMAGES/<?php echo $result['gambar']; ?>" style="object-fit:cover;">
      </div>

    <?php } ?>

    </div>
    
      <div class="bottom-center">
        <?php
        $sql = "select * from tbslideshow";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_assoc($query)){
        ?>
        <span class="dot"></span>
        <?php } ?>
      </div>
</div>


<!-- Container (About Section) -->

<div class="container-fluid">
  <div class="container">
    <div class="row" id="about">

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

<!-- Container (Pricing Section) -->

<div class="container-fluid slideanim carousel slide multi-item-carousel" id="pricing">
  <div class="row carousel-inner">

    <?php
    $sql4 = "select * from tbshowroom";
    $query4 = mysqli_query($con,$sql4);
    while($result4 = mysqli_fetch_assoc($query4)){
    ?>
    <div class="col-sm-4 active item slidePrice">
      <center>
        <div class="row">
          <img class="mx-auto d-block img-fluid" style="border-radius: 0 70px;box-shadow: 0px 3px 10px #888888;" width="95%" height="100%" src="IMAGES/<?php echo $result4['gambar']; ?>" id="foto" name="foto">
          <div class="top-left" style='text-transform: uppercase'>
            <?php echo $result4['nama']; ?>
          </div>

          <div class="top-left2">
            <sup style="font-size:12px;">start from</sup> <span> Rp <?php echo number_format($result4['harga']); ?></span>
          </div>

          <div class="bottom-left">
            <a href="gallery <?php echo $result4['nama']; ?>.php"><button class="btn-wuling btn">Click for Details</button></a>
          </div> 
        </div>

          <div class="row" style="margin-top:20px">
            <b><center>
            <p style="font-family:Arial">
            <?php echo $result4['tipe']; ?>
            </p>
            </center></b>

            <?php
            $daftar = $result4['daftar'];
            $daftars = explode(", ", $daftar);
            for($y = 0;$y<count($daftars); $y++){

            ?>

              <p class='text-center' style='font-family: arial'>
              <?php echo $daftars[$y]; ?>
              </p>

            <?php } ?>

          </div>
      </center>
    </div>
    <?php } ?>

</div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
  </div>

  <span class="dots123"></span>


</div>

<!-- Container (Article Section) -->

<div id="article" class="container-fluid" style="padding-top:40px;background-color:#f9f9f9">

  <p class="text-center" style="font-family:arial;font-size:35px"><b>Updates Terbaru</b></p>

  <div class="row slideanim" style="padding:0 10px;padding-top: 20px">
    <?php
    $sql5 = "select * from tbarticle order by ida desc limit 3"; // urutkan dari yang terbaru dan cuma 3 data yang ditampilkan
    $query5 = mysqli_query($con,$sql5);
    while($result5 = mysqli_fetch_assoc($query5)){
    $isi = $result5['isi'];
    ?>
      <a style="text-decoration: none;color:#888" href="article.php?ida=<?php echo $result5['ida']; ?>">
        <div class="col-sm-4" style="padding: 0px 5px">
            <img src="IMAGES/<?php echo $result5['thumbnail']; ?>" class="thumbarticle">
            
            <div style="padding:30px 25px">
              <span style="font-family:arial; font-size:18px"><b><?php echo $result5['judul']; ?></b></span>
        
              <p style="font-size:14px;margin-top:10px">
                —<?php echo $result5['tgl']; ?>
              </p>
            </div>
        </div>
      </a>
    <?php } ?>
  </div>
</div>

<!-- Container (Contact Section) -->

<?php
if(isset($_POST['submit'])){
  $to = "virelinez@gmail.com";
  $from = $_POST['email'];
  $nama = $_POST['nama'];
  $phone = $_POST['phone'];
  $subject = "Form Submission";
  $subject2 = "Copy of your submission";
  $pesan = $_POST['pesan'];
  $pesans = $nama . " ( " . $phone . " ) " . $pesan . "\n\n";

  $headers =  'MIME-Version: 1.0' . "\r\n"; 
  $headers .= 'From: ' . $nama .' <' . $from . '>' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
  mail($to, $subject, $pesans, $headers);

  $sqlc = "insert into tbcontact
            (nama, nohp, email, pesan)
            values('$nama','$phone','$from','$pesan')";
  $queryc = mysqli_query($con,$sqlc);
}
?>

<div class="row">
  <div id="contact" class="container-fluid bg-grey" style="margin-top:15px;">
      <p class="text-center" style="font-family:arial;font-size:35px;margin-bottom: 20px"><b>Contact</b></p>
   <div class="col-sm-3 slideanim">
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
    
    <div class="col-sm-9 slideanim">
      <form method="POST">
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

<!-- Footer -->

<footer class="container2-fluid text-center">
  <div class="col-sm-12">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p></p><span class="glyphicon glyphicon-map-marker"></span> Pontianak, Indonesia
        <span class="glyphicon glyphicon-phone"></span> 085252009654
        <span class="glyphicon glyphicon-envelope"></span> hendise0412@gmail.com</p>
    </div>
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

</body>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

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


  var priceIndex = 0;
  showSlideP();

  function showSlideP() {
    var j;
    var slideP = document.getElementsByClassName("slidePrice");
    var dotz = document.getElementsByClassName("dots123");
    for (j = 0; j < slideP.length; j++) {
      slideP[j].style.display = "none";  
    }
    priceIndex++;
    if (priceIndex > slideP.length) {priceIndex = 1}    
    for (j = 0; j < dotz.length; j++) {
      dotz[j].className = dotz[j].className.replace(" active", "");
    }
    slideP[priceIndex-1].style.display = "block";  
    // dotz[priceIndex-1].className += " active";
    // setTimeout(showSlideP, 2000); // Change image every 2 seconds
  }

// Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: true
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
</script>
</html>
