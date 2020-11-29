<?php 
include 'index.php';
$model = new Model();
$id = $_GET['id'];
$data = $model->editAnggota($id);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Anggota</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<script type="text/javascript" href="asset/js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title">Edit Anggota</h1>
						<form action="proses.php" method="post">
							<div class="form-group">
								<input type="hidden" name="id" value="<?php echo $data->kd_anggota ?>">
								<input type="text" name="nama_anggota" class="form-control" required="" placeholder="Nama Anggota" value="<?php echo $data->nama_anggota ?>">
							</div>
							<div class="form-group">
								<textarea name="alamat" class="form-control" required="" placeholder="Alamat"><?php echo $data->alamat ?></textarea>
							</div>
							<div class="form-group">
								<input type="submit" name="updateAnggota" class="btn btn-primary" value="Update">
							</div>
						</form>
					</div>
				</div>
			</div>				
		</div>
	</div>
</body>
</html>