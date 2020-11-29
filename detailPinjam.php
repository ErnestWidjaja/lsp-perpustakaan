<?php 
include 'index.php';
$model = new Model();
$id = $_GET['id'];
$data = $model->detailPinjam($id);
// $anggota = $model->dataAnggota();
$no = 1;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Proses Peminjaman</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-10">
				<a href="export.php?id=<?php echo $data[0]->kd_buku ?>" target="_blank" class="btn btn-primary mb-4">Export</a>
				<div class="card">
					<div class="card-body">
						<h1 class="card-title">Proses Peminjaman</h1>
						<table class="table">
							<tr>
								<td>No</td>
								<td>ISBN</td>
								<td>Judul</td>
								<td>Penulis</td>
								<td>Penerbit</td>
								<td>Tahun</td>
								<td>Jumlah</td>							
							</tr>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $data[0]->isbn ?></td>
								<td><?php echo $data[0]->judul ?></td>
								<td><?php echo $data[0]->penulis ?></td>
								<td><?php echo $data[0]->penerbit ?></td>
								<td><?php echo $data[0]->tahun ?></td>
								<td><?php echo $data[0]->jumlah ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-10 mt-4">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title">Dipinjam Oleh</h1>
						<table class="table">
							<tr>
								<td>No</td>
								<td>Nama Anggota</td>
								<td>Tanggal Pinjam</td>
								<td>Tanggal Kembali</td>
								<td>Nama Petugas</td>
								<td>Action</td>					
							</tr>
							<?php $noo = 1; foreach ($data as $r): ?>
								<tr>
								<td><?php echo $noo++ ?></td>
								<td><?php echo $r->nama_anggota ?></td>
								<td><?php echo $r->tgl_pinjam ?></td>
								<td><?php echo $r->tgl_kembali ?></td>
								<td><?php echo $r->nama_petugas ?></td>
								<td><a href="proses.php?kembali&id=<?php echo $r->kd_pinjam ?>&kd_buku=<?php echo $data[0]->kd_buku ?>">Kembali</a></td>
							</tr>
							<?php endforeach ?>
						</table>
					</div>
				</div>
			</div>				
		</div>
	</div>
</body>
</html>