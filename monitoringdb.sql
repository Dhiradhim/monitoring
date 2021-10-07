-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 09:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
  `no_batch` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `nama_produk`, `no_batch`) VALUES
(1, 'a', 1),
(2, 'a', 2),
(3, 'b', 11),
(4, 'c', 111),
(5, 'c', 222),
(6, 'c', 333),
(7, 'd', 1111),
(8, 'd', 2222);

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
(1, 'a', 1, 1, '09:00:00', '12', '2021-10-07'),
(2, 'a', 2, 2, '10:00:00', '13', '2021-10-07'),
(3, 'a', 1, 1, '10:30:00', '121', '2021-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_cetak`
--

CREATE TABLE `hasil_cetak` (
  `id_hasil_cetak` varchar(50) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `shift` int(1) NOT NULL,
  `jam_hasil_cetak` time NOT NULL,
  `tanggal_hasil_cetak` date NOT NULL,
  `standar` varchar(20) NOT NULL,
  `actual` varchar(20) NOT NULL,
  `varian` varchar(20) NOT NULL,
  `persentase` varchar(4) NOT NULL,
  `start_downtime` time NOT NULL,
  `stop_downtime` time NOT NULL,
  `total_downtime` time NOT NULL,
  `deskripsi_downtime` varchar(50) NOT NULL,
  `tindakan_dilakukan` varchar(50) NOT NULL,
  `tindakan_pencegahan` varchar(50) NOT NULL,
  `nama_operator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `nik`, `jabatan`, `password`) VALUES
('admin', '123456789', 'administrator', 'e10adc3949ba59abbe56e057f20f883e'),
('op1', '111111111111', 'operator1', 'e10adc3949ba59abbe56e057f20f883e'),
('op2', '2222222222', 'operator2', 'e10adc3949ba59abbe56e057f20f883e'),
('formen', '3333333333', 'Formen', 'e10adc3949ba59abbe56e057f20f883e'),
('supervisor', '4444444444', 'Supervisor', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `metal_detector`
--

CREATE TABLE `metal_detector` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `shift` int(1) NOT NULL,
  `tanggal_metal_detector` date NOT NULL,
  `jam_metal_detector` time NOT NULL,
  `test_pieces` varchar(20) NOT NULL,
  `awal` varchar(1) NOT NULL,
  `tengah` varchar(1) NOT NULL,
  `akhir` varchar(1) NOT NULL,
  `jumlah_oke` varchar(10) NOT NULL,
  `jumlah_not_oke` varchar(10) NOT NULL,
  `nama_operator` varchar(50) NOT NULL,
  `nama_formen` varchar(50) NOT NULL,
  `nama_supervisor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'b', 11, 1, '4 x 1 Kg', 4, 31, 31, 31, '2021-10-07', '09:11:39'),
(2, 'b', 11, 2, '4 x 1 Kg', 2, 31, 31, 31, '2021-10-07', '09:11:53'),
(3, 'd', 2222, 3, '3 x 1 Kg', 2, 31, 31, 31, '2021-10-07', '09:12:05');

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
(4, 'd');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `berat_timbangan`
--
ALTER TABLE `berat_timbangan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `metal_detector`
--
ALTER TABLE `metal_detector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaturan_suhu`
--
ALTER TABLE `pengaturan_suhu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
