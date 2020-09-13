<?php
include "../koneksi.php";
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
  <script src="../../js/croppie.js"></script>
  <link rel="stylesheet" href="croppie.css" />
</head>

<script>
function del(idss)
{ 
  if(confirm("Apakah Anda yakin menghapus ini?")==true)
           window.location="delete.php?idss="+idss;
    return true;
}
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
						<a href="slideshow.php" class="text-decoration-none">
							<button class="btn btn-danger btn-block"><i class="fa fa-arrow-circle-left"></i></button>
						</a>
					</div>
          <div class="col-sm-3 mb-3 p-2">
            <span>Size : 1349 x 600</span>
          </div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="justify-content-between mt-3 mb-3">
							<form method="POST" action="simpan.php" enctype="multipart/form-data">

								<div class="custom-file">
									<img id="image-preview" class="mt-5" width="80%" />
									<input type="file" class="custom-file-input" id="image" name="image">
                  <label class="custom-file-label" for="image">Pilih foto item</label>
                  
								</div>



                <?php
                $sql = "select urutan from tbslideshow";
                $query = mysqli_query($con,$sql);
                $num = mysqli_num_rows($query);
                $urutan = $num+1;
                ?>

                <div class="form-group">
                  <label for="urutan">Urutan</label>
                  <input type="text" name="urutan" id="urutan" value="<?php echo $urutan; ?>" class="form-control" placeholder="Urutan">
                </div>

								<div class="form-group">
								<input type="submit" value="Tambahkan" class="btn btn-block btn-primary">
								</div>
							</form>
				</div>
			</div>
		</div>

<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});


</script>
	
</body>
</html>