-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 01:46 PM
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
-- Database: `db_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(3) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `kode_surat` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_masuk_keluar` date NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `dispos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `no_surat`, `kode_surat`, `tgl_surat`, `tgl_masuk_keluar`, `nama_pengirim`, `perihal`, `dispos`) VALUES
(2, 'kel/009/kel-sus/2020', 'kel', '2020-12-06', '2020-12-30', 'Rahmadi Santoso', 'Pembaharuan Kartu Keluarga', '4'),
(3, 'kel/009/kel-pid/2020', 'kel', '2021-01-13', '2021-01-27', 'Nurfadillah', 'Daftar Anak', '6'),
(4, 'kel/009/kel-sus/2021', 'kel', '2021-01-06', '2021-01-27', 'Rahmadi Santoso', 'Daftar Tanah', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `desa_id` int(3) NOT NULL,
  `desa_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`desa_id`, `desa_nama`) VALUES
(1, 'Punggulan'),
(2, 'Pasar Lembu'),
(3, 'Lubuk Palas'),
(4, 'Kampung Subur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dusun`
--

CREATE TABLE `tb_dusun` (
  `dusun_id` int(3) NOT NULL,
  `dusun_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dusun`
--

INSERT INTO `tb_dusun` (`dusun_id`, `dusun_nama`) VALUES
(1, 'Banjar'),
(2, 'Binjai Serbangan'),
(3, 'Lubuk Amat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(3) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `Tempat` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `hari`, `tanggal`, `Tempat`, `ket`) VALUES
(7, 'senin', '2021-01-25', 'Air Joman', 'Mengontrol pembangunan'),
(8, 'selasa', '2021-02-03', 'Sei Rengges', 'Perkumpulan Camat Asahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk_tetap`
--

CREATE TABLE `tb_penduduk_tetap` (
  `id` int(5) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `tt_lahir` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `dusun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penduduk_tetap`
--

INSERT INTO `tb_penduduk_tetap` (`id`, `NIK`, `nama_lengkap`, `tt_lahir`, `jenis_kelamin`, `desa`, `dusun`) VALUES
(3, '12090903011990', 'Faisal Ahmad', 'Mutiara, 02 April 1999', 'Laki-Laki', '3', '1'),
(6, '12090903011978', 'Sinta amnada', 'Simpang Empat, 07 Januari 1997', 'Perempuan', '1', '2'),
(7, '12090903011986', 'Suyanti Astuti', 'Bunut, 08 September 1998', 'Perempuan', '2', '1'),
(9, '12090903011994', 'Ramana Kindanda', 'Mutiara, 02 April 1997', 'Laki-Laki', '4', '3'),
(16, '12090903011998', 'Putri Wulandari', 'Prapat Janji, 23 Januari 1997', 'Laki-Laki', '1', '1'),
(17, '12090902041999', 'Nurfadillah', 'Prapat Janji, 23 Januari 1997', 'Perempuan', '1', '2'),
(20, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('ali', '827ccb0eea8a706c4c34a16891f84e7b', 'Ali@gmail.com', 'Ali Alfani Syahfitra', 2, 'Camat '),
('dillah', '827ccb0eea8a706c4c34a16891f84e7b', 'dilla@gmail.com', 'Nurfadillah', 3, 'Sekretaris'),
('wulan', '827ccb0eea8a706c4c34a16891f84e7b', 'wulan@gmail.com', 'Putri Wulandari', 1, 'Bagian Pemerintah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`desa_id`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penduduk_tetap`
--
ALTER TABLE `tb_penduduk_tetap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_penduduk_tetap`
--
ALTER TABLE `tb_penduduk_tetap`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
