-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 03:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nis` int(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `kelas`) VALUES
(564783, 'Koko', 'Jakarta', '2010-05-28', 'L', '9e'),
(765344, 'Putri', 'Kuningan', '2021-11-23', 'P', '9b'),
(1234513, 'Kaka', 'Jakarta', '2021-11-23', 'L', '8e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `jumlah_buku` int(10) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3','rak4','rak5','rak6','rak7','rak8','rak9') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(12345679, 'Belajar Pemrograman Web', 'Ahmad', 'Media', '2016', 'cvb', 5, 'rak3', '2021-11-23'),
(12345680, 'Adobe', 'Zidan', 'Media', '1991', 'abcd123', 2, 'rak2', '2021-11-23'),
(12345681, 'Pemrograman PHP', 'Zidan', 'Media', '2013', 'abcd123', 0, 'rak1', '2021-11-23'),
(12345682, 'Matematika', 'Budi', 'Media', '1920', '1234', 4, 'rak3', '2021-12-02'),
(12345683, 'Teknologi Informasi', 'Budi', 'Media', '1920', '1234', 4, 'rak1', '2021-12-02'),
(12345684, 'Belajar HTML', 'Budi', 'Media', '1937', '1234', 5, 'rak3', '2021-12-02'),
(12345685, 'CorelDraw', 'Budi', 'Media', '1957', '1234', 5, 'rak7', '2021-12-02'),
(12345686, 'Desain Grafis', 'Budi', 'Media', '1958', '1234', 5, 'rak9', '2021-12-02'),
(12345687, 'C++', 'Budi', 'Media', '1939', '1234', 1, 'rak9', '2021-12-02'),
(12345688, 'Java', 'Budi', 'Media', '1940', '1234', 7, 'rak6', '2021-12-02'),
(12345689, 'Javascript', 'Budi', 'Media', '1947', '1234', 6, 'rak5', '2021-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(50) NOT NULL,
  `tgl_kembali` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `nis`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(11, 'Belajar Pemrograman Web', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(12, 'Adobe', '1234513', 'Kaka', '24-11-2021', '01-12-2021', 'kembali'),
(13, 'Belajar Pemrograman Web', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(14, 'Belajar Pemrograman Web', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(15, 'Adobe', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(16, 'Belajar Pemrograman Web', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(17, 'Adobe', '1234513', 'Kaka', '24-11-2021', '01-12-2021', 'kembali'),
(18, 'Belajar Pemrograman Web', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(19, 'Belajar Pemrograman Web', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(20, 'Belajar Pemrograman Web', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(21, 'Adobe', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(22, 'Belajar Pemrograman Web', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(23, 'Adobe', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(24, 'Belajar Pemrograman Web', '765344', 'Laras Putri', '24-11-2021', '01-12-2021', 'kembali'),
(25, 'Belajar Pemrograman Web', '1234513', 'Kaka', '24-11-2021', '08-12-21', 'kembali'),
(26, 'Belajar Pemrograman Web', '765344', 'Putri', '24-11-2021', '08-12-21', 'kembali'),
(27, 'Belajar Pemrograman Web', '1130020', 'Budi', '23-11-2021', '15-11-2021', 'Pinjam'),
(28, 'Belajar Pemrograman Web', '1234513', 'Kaka', '25-11-2021', '02-12-2021', 'kembali'),
(29, 'Belajar Pemrograman Web', '564783', 'Koko', '29-11-2021', '06-12-2021', 'kembali'),
(30, 'Desain Grafis', '765344', 'Putri', '13-12-2021', '20-12-2021', 'pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `jabatan`) VALUES
(5, 'putri', '123', 'Putri', 'admin', 'Kepala Perpustakaan'),
(6, 'budi', '123', 'Budi', 'admin', 'Wakil Perpustakaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `nis` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234516;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345690;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
