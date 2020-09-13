<?php
include "../koneksi.php";

session_start();
if(!isset($_SESSION['username'])) {
   header('location: ../login.php'); 
} else { 
   $username = $_SESSION['username'];
   $username = $username['username'];
}

$sql = "select * from tbtentang";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tentang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

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
					<div class="col-sm-12">
						<table class="table table-striped" border="1">
			<tr>
				<td>ID</td>
				<td>JUDUL</td>
				<td>ISI</td>
				<td>ACTION</td>
			</tr>

			<?php
			for($x=0;$x<$num;$x++){
			$hasil = mysqli_fetch_assoc($query);
			?>

			<tr>
				<td name="idttg" id="idttg"><?php echo $hasil['idttg']; ?></td>
				<td><?php echo $hasil['judul']; ?></td>
				<td><?php echo $hasil['isi']; ?></td>
				<td>
					<button style="width:40px" class="btn btn-warning" data-toggle="modal" data-target="#myModal1<?php echo $hasil['idttg']; ?>">
						<i class="fa fa-pencil"></i>
					</button>
				</td>
			</tr>

		<div class="modal fade" id="myModal1<?php echo $hasil['idttg']; ?>" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5>Edit Item</h5>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<form action="update.php" method="POST" enctype="multipart/form-data">
							<?php
							$kodeitem = $hasil['idttg'];
							$query_edit = mysqli_query($con,"SELECT * FROM tbtentang WHERE idttg='$kodeitem'");
							while ($b = mysqli_fetch_assoc($query_edit)) {
							?>

								<input type="text" name="kodeitem" value="<?php echo $b['idttg']; ?>" hidden>
								
								<div class="form-group">
									<label for="judul">Judul</label>
									<input type="text" class="form-control" name="judul" id="judul" value="<?php echo $b['judul']; ?>">
								</div>

								<div class="form-group">
									<label for="isi">Isi</label>
									<textarea class="form-control" rows=8 name="isi" id="isi"><?php echo $b['isi']; ?></textarea>
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
