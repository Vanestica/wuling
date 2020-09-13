<?php
include "../koneksi.php";
$tgl = date("l, d F Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Slideshow</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<script>
function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("thumbnail").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
    };
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 px-1 bg-dark position-fixed h-100" id="sticky-sidebar">
            <div class="row">
            	<div class="col-sm-12 text-light pt-4 pb-4"><center>Admin Wuling</center></div>
            </div>

            <a href="../admin.php" class="text-decoration-none">
            <div class="row">
            	<div class="col-sm-12 text-light offset-1 pb-3 pt-3">Dashboard</div>
            </div>
        	</a>

           	<a href="../slideshow/slideshow.php" class="text-decoration-none">
            <div class="row">
            	<div class="col-sm-12 text-light offset-1 pb-3 pt-3">Slideshow</div>
            </div>
            </a>

			      <a href="../tentang/tentang.php" class="text-decoration-none">
            <div class="row">
            	<div class="col-sm-12 text-light offset-1 pb-3 pt-3">About</div>
            </div>
            </a>

            <a href="../article/article.php" class="text-decoration-none">
            <div class="row">
              <div class="col-sm-12 text-light offset-1 pb-3 pt-3">Article</div>
            </div>
            </a>

            <a href="../showroom/showroom.php" class="text-decoration-none">
            <div class="row">
            	<div class="col-sm-12 text-light offset-1 pb-3 pt-3">Showroom</div>
            </div>
            </a>
        </div>
        <div class="col offset-2" id="main">
			<div class="mt-3 mb-3 mb-3">
				<div class="row">
          <div class="col-sm-1 mb-3">
            <a href="article.php" class="text-decoration-none">
              <button class="btn btn-danger btn-block"><i class="fa fa-arrow-circle-left"></i></button>
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <form method="post" action="simpan.php" enctype="multipart/form-data">

              <input type="text" value="<?php echo $tgl; ?>" name="tgl" id="tgl" hidden>

              <div class="form-group">
                <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail" onchange="previewImage();">
                <label class="custom-file-label m-3" for="thumbnail">Pilih thumbnail</label>
                <img id="image-preview" class="mt-4" width="150px" height="150px" />
              </div>

              <div class="form-group">
                <input class="form-control" type="text" name="judul" id="judul" placeholder="Judul">
              </div>

              <textarea class="ckeditor" id="ckeditor" name="ckeditor"></textarea>
              <input class="form-control mt-2 bg-primary text-white" type="submit" value="Tambahkan" name="kirim" id="kirim">
            </form>
          </div>
        </div>

	</div>
	
<script>
 CKEDITOR.replace( 'ckeditor', {
  height: 300,
  filebrowserUploadUrl: "upload.php"
 });

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
  
</body>
</html>
