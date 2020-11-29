<?php 
include 'index.php';
$model = new Model();
$data = $model->dataBuku();
$no = 1;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Peminjaman</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-10">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title">Peminjaman</h1>
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
								<td><a href="prosesPinjam.php?id=<?php echo $r->kd_buku ?>">Pinjam</a></td>
								<td><a href="detailPinjam.php?id=<?php echo $r->kd_buku ?>">Detail</a></td>
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