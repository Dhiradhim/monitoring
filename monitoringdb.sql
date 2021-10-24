-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 09:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoringdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `no_batch` int(20) NOT NULL,
  `tanggal_batch` date NOT NULL,
  `shift` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `nama_produk`, `no_batch`, `tanggal_batch`, `shift`) VALUES
(1, 'a', 1, '2021-10-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `berat_timbangan`
--

CREATE TABLE `berat_timbangan` (
  `id` int(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `shift` int(1) NOT NULL,
  `jam_timbangan` time NOT NULL DEFAULT current_timestamp(),
  `berat` varchar(20) NOT NULL,
  `tanggal_berat_timbangan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berat_timbangan`
--

INSERT INTO `berat_timbangan` (`id`, `nama_produk`, `id_produk`, `shift`, `jam_timbangan`, `berat`, `tanggal_berat_timbangan`) VALUES
(2, 'a', 1, 1, '20:25:00', '122', '2021-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_cetak`
--

CREATE TABLE `hasil_cetak` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `shift` int(1) NOT NULL,
  `jam_hasil_cetak` time NOT NULL DEFAULT current_timestamp(),
  `tanggal_hasil_cetak` date NOT NULL DEFAULT current_timestamp(),
  `standar` varchar(20) NOT NULL,
  `actual` varchar(20) NOT NULL,
  `varian` varchar(20) NOT NULL,
  `persentase` varchar(4) NOT NULL,
  `start_downtime` time NOT NULL,
  `stop_downtime` time NOT NULL,
  `total_downtime` varchar(10) NOT NULL,
  `deskripsi_downtime` varchar(50) NOT NULL,
  `tindakan_dilakukan` varchar(50) NOT NULL,
  `tindakan_pencegahan` varchar(50) NOT NULL,
  `nama_operator` varchar(50) NOT NULL,
  `nama_formen` varchar(100) NOT NULL,
  `nama_supervisor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_cetak`
--

INSERT INTO `hasil_cetak` (`id`, `nama_produk`, `id_produk`, `shift`, `jam_hasil_cetak`, `tanggal_hasil_cetak`, `standar`, `actual`, `varian`, `persentase`, `start_downtime`, `stop_downtime`, `total_downtime`, `deskripsi_downtime`, `tindakan_dilakukan`, `tindakan_pencegahan`, `nama_operator`, `nama_formen`, `nama_supervisor`) VALUES
(2, 'a', 1, 1, '23:18:00', '2021-10-11', '100', '2', '98', '98', '23:08:00', '23:20:00', '12', 'a', 'a', 'a', 'op1', 'formen', 'supervisor2'),
(5, 'a', 1, 2, '15:46:01', '2021-10-24', '13', '12', '1', '7.69', '11:11:00', '11:16:00', '5', 'a', 'a', 'a', 'admin', 'formen', 'supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `nik`, `jabatan`, `password`) VALUES
(1, 'admin', '123456789', 'administrator', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'op1', '111111111111', 'operator', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'op2', '2222222222', 'operator', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'formen', '3333333333', 'formen', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'supervisor', '4444444444', 'supervisor', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'formen2', '555555555', 'formen', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'supervisor2', '666666666666', 'supervisor', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'op3', '12431243123', 'operator', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `metal_detector`
--

CREATE TABLE `metal_detector` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `shift` int(1) NOT NULL,
  `tanggal_metal_detector` date NOT NULL DEFAULT current_timestamp(),
  `jam_metal_detector` time NOT NULL DEFAULT current_timestamp(),
  `feawal` varchar(1) NOT NULL,
  `fetengah` varchar(1) NOT NULL,
  `feakhir` varchar(1) NOT NULL,
  `nonfeawal` varchar(1) NOT NULL,
  `nonfetengah` varchar(1) NOT NULL,
  `nonfeakhir` varchar(1) NOT NULL,
  `ssawal` varchar(1) NOT NULL,
  `sstengah` varchar(1) NOT NULL,
  `ssakhir` varchar(1) NOT NULL,
  `jumlah_oke` varchar(10) NOT NULL,
  `jumlah_not_oke` varchar(10) NOT NULL,
  `nama_operator` varchar(50) NOT NULL,
  `nama_formen` varchar(50) NOT NULL,
  `nama_supervisor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metal_detector`
--

INSERT INTO `metal_detector` (`id`, `nama_produk`, `id_produk`, `shift`, `tanggal_metal_detector`, `jam_metal_detector`, `feawal`, `fetengah`, `feakhir`, `nonfeawal`, `nonfetengah`, `nonfeakhir`, `ssawal`, `sstengah`, `ssakhir`, `jumlah_oke`, `jumlah_not_oke`, `nama_operator`, `nama_formen`, `nama_supervisor`) VALUES
(3, 'a', 1, 1, '2021-10-11', '22:35:00', 'y', 'y', 'y', 'y', '', 'y', 'y', 'y', 'y', '122', '131', 'admin', 'formen', 'supervisor2'),
(5, 'a', 1, 0, '2021-10-24', '15:46:49', 'y', 'y', '', 'y', '', 'y', '', 'y', 'y', '12', '11', 'admin', 'formen', 'supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan_suhu`
--

CREATE TABLE `pengaturan_suhu` (
  `id` int(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `shift` int(1) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `zona_1` int(2) NOT NULL,
  `zona_2` int(2) NOT NULL,
  `zona_3` int(2) NOT NULL,
  `zona_4` int(2) NOT NULL,
  `tanggal_pengaturan_suhu` date NOT NULL DEFAULT current_timestamp(),
  `jam_pengaturan_suhu` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaturan_suhu`
--

INSERT INTO `pengaturan_suhu` (`id`, `nama_produk`, `id_produk`, `shift`, `ukuran`, `zona_1`, `zona_2`, `zona_3`, `zona_4`, `tanggal_pengaturan_suhu`, `jam_pengaturan_suhu`) VALUES
(3, 'a', 1, 1, '12 x 250 gr', 5, 14, 3, 10, '2021-10-11', '22:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`) VALUES
(1, 'a'),
(2, 'b'),
(3, 'c'),
(6, 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berat_timbangan`
--
ALTER TABLE `berat_timbangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_cetak`
--
ALTER TABLE `hasil_cetak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metal_detector`
--
ALTER TABLE `metal_detector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan_suhu`
--
ALTER TABLE `pengaturan_suhu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berat_timbangan`
--
ALTER TABLE `berat_timbangan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hasil_cetak`
--
ALTER TABLE `hasil_cetak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `metal_detector`
--
ALTER TABLE `metal_detector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengaturan_suhu`
--
ALTER TABLE `pengaturan_suhu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
