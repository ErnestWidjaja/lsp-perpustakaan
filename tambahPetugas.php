<?php 
include 'index.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Petugas</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<script type="text/javascript" href="asset/js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title">Tambah Petugas</h1>
						<form action="proses.php" method="post">
							<div class="form-group">
								<input type="text" name="nama_petugas" class="form-control" required="" placeholder="Nama Petugas">
							</div>
							<div class="form-group">
								<textarea name="alamat" class="form-control" required="" placeholder="Alamat"></textarea>
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" required="" placeholder="Password">
							</div>
							<div class="form-group">
								<input type="submit" name="tambahPetugas" class="btn btn-primary" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div>				
		</div>
	</div>
</body>
</html>