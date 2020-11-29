<?php 
include 'index.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<script type="text/javascript" href="asset/js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title">Tambah Buku</h1>
						<form action="proses.php" method="post">
							<div class="form-group">
								<input type="text" name="isbn" class="form-control" required="" placeholder="ISBN">
							</div>
							<div class="form-group">
								<input type="text" name="judul" class="form-control" required="" placeholder="Judul">
							</div>
							<div class="form-group">
								<input type="text" name="penulis" class="form-control" required="" placeholder="Penulis">
							</div>
							<div class="form-group">
								<input type="text" name="penerbit" class="form-control" required="" placeholder="Penerbit">
							</div>
							<div class="form-group">
								<input type="number" name="tahun" class="form-control" required="" placeholder="Tahun">
							</div>
							<div class="form-group">
								<input type="number" name="jumlah" class="form-control" required="" placeholder="Jumlah">
							</div>
							<div class="form-group">
								<input type="submit" name="tambahBuku" class="btn btn-primary" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div>				
		</div>
	</div>
</body>
</html>