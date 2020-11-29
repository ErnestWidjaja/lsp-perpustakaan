<?php 
include 'index.php';
$model = new Model();
$id = $_GET['id'];
$data = $model->editBuku($id);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Buku</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<script type="text/javascript" href="asset/js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title">Edit Buku</h1>
						<form action="proses.php" method="post">
							<input type="hidden" name="id" value="<?php echo $data->kd_buku ?>">
							<div class="form-group">
								<input type="text" name="isbn" class="form-control" required="" placeholder="ISBN" value="<?php echo $data->isbn ?>">
							</div>
							<div class="form-group">
								<input type="text" name="judul" class="form-control" required="" placeholder="Judul" value="<?php echo $data->judul ?>">
							</div>
							<div class="form-group">
								<input type="text" name="penulis" class="form-control" required="" placeholder="Penulis" value="<?php echo $data->penulis ?>">
							</div>
							<div class="form-group">
								<input type="text" name="penerbit" class="form-control" required="" placeholder="Penerbit" value="<?php echo $data->penerbit ?>">
							</div>
							<div class="form-group">
								<input type="number" name="tahun" class="form-control" required="" placeholder="Tahun" value="<?php echo $data->tahun ?>">
							</div>
							<div class="form-group">
								<input type="number" name="jumlah" class="form-control" required="" placeholder="Jumlah" value="<?php echo $data->jumlah ?>">
							</div>
							<div class="form-group">
								<input type="submit" name="updateBuku" class="btn btn-primary" value="Update">
							</div>
						</form>
					</div>
				</div>
			</div>				
		</div>
	</div>
</body>
</html>