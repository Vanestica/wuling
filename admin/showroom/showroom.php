<?php
include "../koneksi.php";

session_start();
if(!isset($_SESSION['username'])) {
   header('location: ../login.php'); 
} else { 
   $username = $_SESSION['username'];
   $username = $username['username'];
}

$sql = "select * from tbshowroom";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Showroom</title>
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
function del(idsr)
{ 
  if(confirm("Apakah Anda yakin menghapus ini?")==true)
           window.location="delete.php?idsr="+idsr;
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
                <td>GAMBAR</td>
                <td>NAMA</td>
                <td>HARGA</td>
                <td>TIPE</td>
                <td>DAFTAR</td>
                <td>ACTION</td>
            </tr>

            <?php
            for($x=0;$x<$num;$x++){
            $hasil = mysqli_fetch_assoc($query);
            $idsr = $hasil['idsr'];
            $nama = $hasil['nama'];
            $harga = $hasil['harga'];
            $tipe = $hasil['tipe'];
            $daftar = $hasil['daftar'];
            $gambar = $hasil['gambar'];
            ?>

            <tr>
                <td name="idsr" id="idsr"><?php echo $idsr; ?></td>
                <td>
                    <img class="mx-auto d-block img-fluid" width="400px" height="400px" src="../../IMAGES/<?php echo $hasil['gambar']; ?>" id="foto" name="foto">
                </td>
                <td><?php echo $hasil['nama']; ?></td>
                <td><?php echo $hasil['harga']; ?></td>
                <td><?php echo $hasil['tipe']; ?></td>
                <td><?php echo $hasil['daftar']; ?></td>
                <td>
                    <button style="width:40px" class="btn btn-warning" data-toggle="modal" data-target="#myModal1<?php echo $idsr; ?>">
                        <i class="fa fa-pencil"></i>
                    </button>
                    <button style="width:40px" class="btn btn-danger" name="del" id="del" onclick="return del(<?php echo $hasil['idsr']; ?>)">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </td>
            </tr>

        <div class="modal fade" id="myModal1<?php echo $idsr; ?>" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Edit Item</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="update.php" method="POST" enctype="multipart/form-data">
                            <?php
                            $kodeitem = $idsr;
                            $query_edit = mysqli_query($con,"SELECT * FROM tbshowroom WHERE idsr='$kodeitem'");
                            while ($b = mysqli_fetch_assoc($query_edit)) {
                            ?>

                                <input type="text" name="kodeitem" value="<?php echo $b['idsr']; ?>" hidden>
                                <div class="form-group">
                                     <img class="mx-auto d-block img-fluid" width="200px" height="200px" src="../../IMAGES/$hasil['gambar']; ?>" id="foto" name="foto">
                                    <input type="file" name="image" id="image" onchange="previewImage();">
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $b['nama']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input class="form-control" type="text" name="harga" id="harga" value="<?php echo $b['harga']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="tipe">Judul Tipe</label>
                                    <input type="text" class="form-control" rows=6 name="tipe" id="tipe" value="<?php echo $b['tipe']; ?>">
                                </div>

                                 <div class="form-group">
                                    <label for="daftar">Daftar Tipe</label>
                                    <textarea class="ckeditor" id="ckeditor" name="ckeditor"><?php echo $b['daftar']; ?></textarea>
                                </div>


                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        </table>
                    </div>
                </div>

            </div>
        </div>
</body>
</html>
