<?php
include "../koneksi.php";

session_start();
if(!isset($_SESSION['username'])) {
   header('location: ../login.php'); 
} else { 
   $username = $_SESSION['username'];
   $username = $username['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Article</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<style>

</style>

<script>
function del(ida)
{ 
  if(confirm("Apakah Anda yakin menghapus ini?")==true)
           window.location="delete.php?ida="+ida;
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
<script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>

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
                    <a href="tambah.php" class="text-decoration-none">
                        <button class="btn btn-success btn-block"><i class="fa fa-plus-circle"></i></button>
                    </a>
                </div>
            </div>


        <div class="row">
          <div class="col-sm-12">
            <table class="table table-striped" border="1">

              <tr>
                <td>ID</td>
                <td>TGL</td>
                <td>TGL EDIT</td>
                <td>JUDUL</td>
                <td>THUMBNAIL</td>
                <td width="20px">ISI</td>
                <td>ACTION</td>
              </tr>

              <?php
              $sql = "select left(isi, 100) as isi, tgl, tglubah, judul, thumbnail, ida from tbarticle";
              $query = mysqli_query($con,$sql);
              $num = mysqli_num_rows($query);

              for($x=0;$x<$num;$x++){
              $hasil = mysqli_fetch_assoc($query);
              ?>

              <tr>
                <td name="ida" id="ida"><?php echo $hasil['ida']; ?></td>
                <td><?php echo $hasil['tgl']; ?></td>
                <td><?php echo $hasil['tglubah']; ?></td>
                <td><?php echo $hasil['judul']; ?></td>
                <td style="width:20%"><img src="../../IMAGES/<?php echo $hasil['thumbnail']; ?>" width="90%"></td>
                <td style="width:20%">
                  <span><?php echo $hasil['isi']; ?></span>
                </td>
                <td>
                  <button style="width:40px" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $hasil['ida']; ?>">
                    <i class="fa fa-pencil"></i>
                  </button>
                  <button style="width:40px" class="btn btn-danger" name="del" id="del" onclick="return del(<?php echo $hasil['ida']; ?>)">
                    <i class="fa fa-trash-o"></i>
                  </button>
                </td>
              </tr>


          </div>
        </div>

        <div class="modal fade" id="myModal<?php echo $hasil['ida']; ?>" role="dialog">
          <div class="modal-dialog" style="max-width: 80%">
            <div class="modal-content">
              <div class="modal-header">
                <h5>Edit Item</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <div class="modal-body">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                  <?php
                  $tglubah = date("l, d F Y");

                  $kodeitem = $hasil['ida'];
                  $query_edit = mysqli_query($con,"SELECT * FROM tbarticle WHERE ida='$kodeitem'");
                  while ($b = mysqli_fetch_assoc($query_edit)) {
                  ?>

                    <input type="text" name="tglubah" id="tglubah" value="<?php echo $tglubah; ?>" hidden>

                    <input type="text" name="ida" id="ida" value="<?php echo $b['ida']; ?>" hidden>

                    <div class="form-group">
                      <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail" onchange="previewImage();">
                      <label class="custom-file-label m-3" for="thumbnail">Pilih thumbnail</label>
                      <img id="image-preview" src="../../IMAGES/<?php echo $hasil['thumbnail']; ?>" class="mt-4" width="150px" height="150px" />
                    </div>

                    <div class="form-group">
                      <input class="form-control" type="text" name="judul" id="judul" placeholder="Judul" value="<?php echo $b['judul']; ?>">
                    </div>

                    <div class="form-group">
                      <label for="isi">Isi</label>
                      <textarea class="ckeditor" id="ckeditor" name="ckeditor"><?php echo $b['isi']; ?></textarea>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Update</button>
                    </div>
                  <?php } ?>
                </form>
              </div>
              <?php } ?>
            </table>
            
            </div>
          </div>
        </div>
      </div>
    </div>

<script>
 CKEDITOR.replace( 'ckeditor', {
  height: 300,
  filebrowserUploadUrl: "upload.php"
 });

if(CKEDITOR.instances["ckeditor"])
CKEDITOR.instances["ckeditor"].destroy();

 $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>
</html>
