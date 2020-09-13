<?php
include "../koneksi.php";

$sqla = "select * from tbslideshow";
$querya = mysqli_query($con,$sqla);
$numa = mysqli_num_rows($querya);

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
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
</head>

<script>
function previewImage() {
		document.getElementById("image-preview").style.display = "block";
		var oFReader = new FileReader();
		 oFReader.readAsDataURL(document.getElementById("image").files[0]);

		oFReader.onload = function(oFREvent) {
		  document.getElementById("image-preview").src = oFREvent.target.result;
		};
	  };
</script>

<body class="bg-light">

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
            <a href="showroom.php" class="text-decoration-none">
              <button class="btn btn-danger btn-block"><i class="fa fa-arrow-circle-left"></i></button>
            </a>
          </div>
        </div>

				<div class="row">
					<div class="col-sm-12">
						<div class="justify-content-between mt-3 mb-3">
							<form method="POST" action="simpan.php" enctype="multipart/form-data">

								<div class="custom-file">
									<img id="image-preview" class="mt-5" width="300px" height="150px" />
									<input type="file" class="custom-file-input" id="image" name="image" onchange="previewImage();">
								<label class="custom-file-label" for="image">Pilih foto item</label>
								</div>

                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input style="text-transform:uppercase;" class="form-control" type="text" name="nama" id="nama">
                </div>

                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input class="form-control" type="text" name="harga" id="harga">
                </div>

                <div class="form-group">
                  <label for="tipe">Judul Tipe</label>
                  <input class="form-control" type="text" name="tipe" id="tipe">
                </div>

                <label>Daftar Tipe</label>
                <textarea class="ckeditor" id="ckeditor" name="ckeditor"></textarea>

								<div class="form-group">
								<input type="submit" value="Tambahkan" class="btn btn-block btn-primary">
								</div>
							</form>
				</div>
			</div>
		</div>

	
</body>
</html>

<script>
CKEDITOR.replace( 'ckeditor', {
  height: 300,
  filebrowserUploadUrl: "upload.php"
 });
</script>