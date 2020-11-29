-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 05:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `kd_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`kd_anggota`, `nama_anggota`, `alamat`) VALUES
(1, 'Anggota 1', 'Bogor'),
(3, 'Anggota 2', 'Bogor'),
(4, 'Anggota 3', 'Bandung'),
(5, 'Anggota 4', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `kd_buku` int(11) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`kd_buku`, `isbn`, `judul`, `penulis`, `penerbit`, `tahun`, `jumlah`) VALUES
(1, '1234567891234', 'Buku 1', 'Penulis 1', 'Penerbit 1', '2019', 3),
(3, '1234123412341', 'Buku 3', 'Penulis 2', 'Penerbit 2', '2020', 6),
(4, '1234123412342', 'Buku 2', 'Penulis 2', 'Penerbit 2', '2018', 3),
(5, '1234123412341', 'Buku 4', 'Penulis 2', 'Penerbit 2', '2017', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pinjam`
--

CREATE TABLE `tbl_detail_pinjam` (
  `kd_pinjam` int(11) NOT NULL,
  `kd_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_pinjam`
--

INSERT INTO `tbl_detail_pinjam` (`kd_pinjam`, `kd_buku`) VALUES
(3, 3),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `kd_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`kd_petugas`, `nama_petugas`, `alamat`, `password`) VALUES
(3, 'Petugas 1', 'Jakarta', '7815696ecbf1c96e6894b779456d330e'),
(5, 'Petugas 2', 'Jakarta', '7815696ecbf1c96e6894b779456d330e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `kd_pinjam` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `kd_anggota` int(11) NOT NULL,
  `kd_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`kd_pinjam`, `tgl_pinjam`, `tgl_kembali`, `kd_anggota`, `kd_petugas`) VALUES
(3, '2020-11-12', '2020-11-19', 1, 3),
(5, '2020-11-12', '2020-11-19', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`kd_anggota`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`kd_petugas`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`kd_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `kd_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `kd_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `kd_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `kd_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
