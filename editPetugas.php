<?php 
include 'index.php';
$model = new Model();
$id = $_GET['id'];
$data = $model->editPetugas($id);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Petugas</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<script type="text/javascript" href="asset/js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title">Edit Petugas</h1>
						<form action="proses.php" method="post">
							<input type="hidden" name="id" value="<?php echo $data->kd_petugas ?>">
							<div class="form-group">
								<input type="text" name="nama_petugas" class="form-control" required="" placeholder="Nama Petugas" value="<?php echo $data->nama_petugas ?>">
							</div>
							<div class="form-group">
								<textarea name="alamat" class="form-control" required="" placeholder="Alamat"><?php echo $data->alamat ?></textarea>
							</div>
							<div class="form-group">
								<input type="submit" name="updatePetugas" class="btn btn-primary" value="Update">
							</div>
						</form>
					</div>
				</div>
			</div>				
		</div>
	</div>
</body>
</html>