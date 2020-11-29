<?php 

include 'model.php';
$model = new Model();

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$model->login($username,$password);
}

if (isset($_POST['logout'])) {
	session_destroy();
	session_unset();
	header('location:login.php');
}

if (isset($_POST['tambahAnggota'])) {
	$nama_anggota = $_POST['nama_anggota'];
	$alamat = $_POST['alamat'];
	$model->tambahAnggota($nama_anggota,$alamat);
}

if (isset($_POST['updateAnggota'])) {
	$id = $_POST['id'];
	$nama_anggota = $_POST['nama_anggota'];
	$alamat = $_POST['alamat'];
	$model->updateAnggota($nama_anggota,$alamat,$id);
}

if (isset($_GET['hapusAnggota'])) {
	$id = $_GET['id'];
	$model->hapusAnggota($id);
}

if (isset($_POST['tambahBuku'])) {
	$isbn = $_POST['isbn'];
	$judul = $_POST['judul'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];
	$jumlah = $_POST['jumlah'];
	$model->tambahBuku($isbn,$judul,$penulis,$penerbit,$tahun,$jumlah);
}

if (isset($_POST['updateBuku'])) {
	$id = $_POST['id'];
	$isbn = $_POST['isbn'];
	$judul = $_POST['judul'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];
	$jumlah = $_POST['jumlah'];
	$model->updateBuku($isbn,$judul,$penulis,$penerbit,$tahun,$jumlah,$id);
}

if (isset($_GET['hapusBuku'])) {
	$id = $_GET['id'];
	$model->hapusBuku($id);
}

if (isset($_POST['tambahPetugas'])) {
	$nama_petugas = $_POST['nama_petugas'];
	$alamat = $_POST['alamat'];
	$password = $_POST['password'];
	$model->tambahPetugas($nama_petugas,$alamat,$password);
}

if (isset($_POST['updatePetugas'])) {
	$id = $_POST['id'];
	$nama_petugas = $_POST['nama_petugas'];
	$alamat = $_POST['alamat'];
	$model->updatePetugas($nama_petugas,$alamat,$id);
}

if (isset($_GET['hapusPetugas'])) {
	$id = $_GET['id'];
	$model->hapuspetugas($id);
}

if (isset($_POST['tambahPeminjaman'])) {
	$kd_petugas = $_POST['kd_petugas'];
	$kd_buku = $_POST['kd_buku'];
	$tgl_pinjam = $_POST['tgl_pinjam'];
	$tgl_kembali = $_POST['tgl_kembali'];
	$kd_anggota = $_POST['kd_anggota'];
	$model->tambahPeminjaman($kd_petugas,$tgl_pinjam,$tgl_kembali,$kd_anggota,$kd_buku);
}

if (isset($_GET['kembali'])) {
	$id = $_GET['id'];
	$kd_buku = $_GET['kd_buku'];
	$model->kembali($id,$kd_buku);
}

 ?>