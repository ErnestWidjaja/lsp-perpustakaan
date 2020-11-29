<?php 
include 'index.php';
$model = new Model();
$data = $model->dataPetugas();
$no = 1;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Petugas</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<a href="tambahPetugas.php" class="btn btn-outline-primary">Tambah</a>
						<h1 class="card-title">Data Petugas</h1>
						<table class="table">
							<tr>
								<td>No</td>
								<td>Nama Petugas</td>
								<td>Alamat</td>
								<td colspan="2">Action</td>
							</tr>
						<?php foreach ($data as $r) {	?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $r->nama_petugas ?></td>
								<td><?php echo $r->alamat ?></td>
								<td><a href="editPetugas.php?id=<?php echo $r->kd_petugas ?>">Edit</a></td>
								<td><a href="proses.php?hapusPetugas&id=<?php echo $r->kd_petugas ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a></td>
							</tr>
						<?php } ?>
						</table>
					</div>
				</div>
			</div>				
		</div>
	</div>
</body>
</html>