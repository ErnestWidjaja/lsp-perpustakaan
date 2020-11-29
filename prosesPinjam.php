<?php 
include 'index.php';
$model = new Model();
$id = $_GET['id'];
$data = $model->prosesPinjam($id);
$anggota = $model->dataAnggota();
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
								<td><?php echo $data->isbn ?></td>
								<td><?php echo $data->judul ?></td>
								<td><?php echo $data->penulis ?></td>
								<td><?php echo $data->penerbit ?></td>
								<td><?php echo $data->tahun ?></td>
								<td><?php echo $data->jumlah ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-7 mt-4">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title">Data Pinjam</h1>
						<form action="proses.php" method="post">
							<input type="hidden" name="kd_petugas" value="<?php echo $_SESSION['petugas'] ?>">
							<input type="hidden" name="kd_buku" value="<?php echo $data->kd_buku ?>">
							<div class="form-group">
								<label>Tanggal Peminjaman</label>
								<input type="text" readonly="" class="form-control" name="tgl_pinjam" value="<?php echo date('Y-m-d'); ?>">
							</div>
							<div class="form-group">
								<label>Tanggal Kembali</label>
								<input type="text" readonly="" class="form-control" name="tgl_kembali" value="<?php echo date('Y-m-d', strtotime('+7 days')); ?>">
							</div>
							<div class="form-group">
								<select class="form-control" name="kd_anggota">
									<?php foreach ($anggota as $r): ?>
									<option value="<?php echo $r->kd_anggota ?>"><?php echo $r->nama_anggota ?></option>	
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<input type="submit" name="tambahPeminjaman" class="btn btn-primary" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div>			
		</div>
	</div>
</body>
</html>