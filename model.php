<?php 

include 'config/db.php';

class Model extends Koneksi
{
	
	function __construct()
	{
		$this->conn = $this->koneksi();
		session_start();
	}

	public function login($username,$password)
	{
		$sql = "SELECT * FROM tbl_petugas WHERE nama_petugas = '$username' AND password = md5('$password')";
		$query = $this->conn->query($sql);
		$petugas = $query->fetch_object();
		$cek = $query->num_rows;
		if ($cek > 0) {
			$_SESSION['petugas'] = $petugas->kd_petugas;
			$_SESSION['isLogin'] = TRUE;
			header('location:peminjaman.php');
		}else{
			header('location:login.php');
		}
	}

	public function isLogin()
	{
		if (!isset($_SESSION['isLogin'])) {
			header('location:login.php');
		}
	}

	public function dataAnggota()
	{
		$sql = "SELECT * FROM tbl_anggota";
		$query = $this->conn->query($sql);
		while ($obj = $query->fetch_object()) {
			$data[] = $obj;
		}
		return $data;
	}

	public function tambahAnggota($nama_anggota,$alamat)
	{
		$sql = "INSERT INTO tbl_anggota VALUES('','$nama_anggota','$alamat')";
		$this->conn->query($sql);
		header('location:anggota.php');
	}

	public function editAnggota($id)
	{
		$sql = "SELECT * FROM tbl_anggota WHERE kd_anggota = '$id'";
		$query = $this->conn->query($sql);
		$data = $query->fetch_object();
		return $data;
	}

	public function updateAnggota($nama_anggota,$alamat,$id)
	{
		$sql = "UPDATE tbl_anggota SET nama_anggota = '$nama_anggota', alamat = '$alamat' WHERE kd_anggota = '$id'";
		$this->conn->query($sql);
		header('location:anggota.php');
	}

	public function hapusAnggota($id)
	{
		$sql = "DELETE FROM tbl_anggota WHERE kd_anggota = '$id'";
		$this->conn->query($sql);
		header('location:anggota.php');
	}

	public function dataBuku()
	{
		$sql = "SELECT * FROM tbl_buku";
		$query = $this->conn->query($sql);
		while ($obj = $query->fetch_object()) {
			$data[] = $obj;
		}
		return $data;
	}

	public function tambahBuku($isbn,$judul,$penulis,$penerbit,$tahun,$jumlah)
	{
		$sql = "INSERT INTO tbl_buku VALUES('','$isbn','$judul','$penulis','$penerbit','$tahun','$jumlah')";
		$this->conn->query($sql);
		header('location:buku.php');
	}

	public function editBuku($id)
	{
		$sql = "SELECT * FROM tbl_buku WHERE kd_buku = '$id'";
		$query = $this->conn->query($sql);
		$data = $query->fetch_object();
		return $data;
	}

	public function updateBuku($isbn,$judul,$penulis,$penerbit,$tahun,$jumlah,$id)
	{
		$sql = "UPDATE tbl_buku SET isbn = '$isbn',judul = '$judul',penulis = '$penulis',penerbit = '$penerbit',tahun = '$tahun',jumlah = '$jumlah' WHERE kd_buku = '$id'";
		$this->conn->query($sql);
		header('location:buku.php');
	}

	public function hapusBuku($id)
	{
		$sql = "DELETE FROM tbl_buku WHERE kd_buku = '$id'";
		$this->conn->query($sql);
		header('location:buku.php');
	}

	public function dataPetugas()
	{
		$sql = "SELECT * FROM tbl_petugas";
		$query = $this->conn->query($sql);
		while ($obj = $query->fetch_object()) {
			$data[] = $obj;
		}
		return $data;
	}

	public function tambahPetugas($nama_petugas,$alamat,$password)
	{
		$sql = "INSERT INTO tbl_petugas VALUES('','$nama_petugas','$alamat',md5('$password'))";
		$this->conn->query($sql);
		header('location:petugas.php');
	}

	public function editPetugas($id)
	{
		$sql = "SELECT * FROM tbl_petugas WHERE kd_petugas = '$id'";
		$query = $this->conn->query($sql);
		$data = $query->fetch_object();
		return $data;
	}

	public function updatePetugas($nama_petugas,$alamat,$id)
	{
		$sql = "UPDATE tbl_petugas SET nama_petugas = '$nama_petugas', alamat = '$alamat' WHERE kd_petugas = '$id'";
		$this->conn->query($sql);
		header('location:petugas.php');
	}

	public function hapusPetugas($id)
	{
		$sql = "DELETE FROM tbl_petugas WHERE kd_petugas = '$id'";
		$this->conn->query($sql);
		header('location:petugas.php');
	}

	public function prosesPinjam($id)
	{
		$sql = "SELECT * FROM tbl_buku WHERE kd_buku = '$id'";
		$query = $this->conn->query($sql);
		$data = $query->fetch_object();
		return $data;
	}

	public function tambahPeminjaman($kd_petugas,$tgl_pinjam,$tgl_kembali,$kd_anggota,$kd_buku)
	{
		$sql = "INSERT INTO tbl_pinjam VALUES('','$tgl_pinjam','$tgl_kembali','$kd_anggota','$kd_petugas')";
		$this->conn->query($sql);
		$kd_pinjam = $this->conn->insert_id;
		$sql2 = "INSERT INTO tbl_detail_pinjam VALUES('$kd_pinjam','$kd_buku')";
		$this->conn->query($sql2);
		$sql3 = "UPDATE tbl_buku SET jumlah = jumlah-1 WHERE kd_buku = '$kd_buku'";
		$this->conn->query($sql3);
		header('location:peminjaman.php');
	}

	public function detailPinjam($id)
	{
		$sql = "SELECT * FROM tbl_detail_pinjam 
		INNER JOIN tbl_pinjam ON tbl_detail_pinjam.kd_pinjam = tbl_pinjam.kd_pinjam 
		INNER JOIN tbl_buku ON tbl_detail_pinjam.kd_buku = tbl_buku.kd_buku 
		INNER JOIN tbl_anggota ON tbl_pinjam.kd_anggota = tbl_anggota.kd_anggota 
		INNER JOIN tbl_petugas ON tbl_pinjam.kd_petugas = tbl_petugas.kd_petugas
		WHERE tbl_detail_pinjam.kd_buku = '$id'";
		$query = $this->conn->query($sql);
		while ($obj = $query->fetch_object()) {
			$data[] = $obj;
		}
		return $data;
	}

	public function kembali($id,$kd_buku)
	{
		$sql = "DELETE FROM tbl_detail_pinjam WHERE kd_pinjam = '$id'";
		$this->conn->query($sql);
		$sql2 = "DELETE FROM tbl_pinjam WHERE kd_pinjam = '$id'";
		$this->conn->query($sql2);
		$sql3 = "UPDATE tbl_buku SET jumlah = jumlah + 1 WHERE kd_buku = '$kd_buku'";
		$this->conn->query($sql3);
		header('location:peminjaman.php');
	}

}


 ?>