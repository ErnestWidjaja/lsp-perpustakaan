<?php 
include 'index.php';
$model = new Model();
$data = $model->dataBuku();
$no = 1;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-10">
				<div class="card">
					<div class="card-body">
						<a href="tambahBuku.php" class="btn btn-outline-primary">Tambah</a>
						<h1 class="card-title">Data Buku</h1>
						<table class="table">
							<tr>
								<td>No</td>
								<td>ISBN</td>
								<td>Judul</td>
								<td>Penulis</td>
								<td>Penerbit</td>
								<td>Tahun</td>
								<td>Jumlah</td>
								<td colspan="2">Action</td>
							</tr>
						<?php foreach ($data as $r) {	?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $r->isbn ?></td>
								<td><?php echo $r->judul ?></td>
								<td><?php echo $r->penulis ?></td>
								<td><?php echo $r->penerbit ?></td>
								<td><?php echo $r->tahun ?></td>
								<td><?php echo $r->jumlah ?></td>
								<td><a href="editBuku.php?id=<?php echo $r->kd_buku ?>">Edit</a></td>
								<td><a href="proses.php?hapusBuku&id=<?php echo $r->kd_buku ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a></td>
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