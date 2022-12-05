-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 08:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop_charmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(6) NOT NULL,
  `usn_adm` varchar(200) NOT NULL,
  `pass_adm` varchar(200) NOT NULL,
  `tgl_akun_admin` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `usn_adm`, `pass_adm`, `tgl_akun_admin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2022-10-26'),
(2, 'kiadmin', 'ae155496ba80b4f840033effd85e5714', '2022-12-04'),
(3, 'kiaadmin', 'f9f1b9e374d255b3013936e06d2b86de', '2022-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(6) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `nama_artis` varchar(50) NOT NULL,
  `harga_brg` varchar(50) NOT NULL,
  `stok_brg` int(5) NOT NULL,
  `img_brg` varchar(200) NOT NULL,
  `id_kategori` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `nama_artis`, `harga_brg`, `stok_brg`, `img_brg`, `id_kategori`) VALUES
(4, 'DANCE ON 1st Single Album', 'ALICE', '300', 1, 'po1.jpg', 5),
(5, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', 'YOUNITE', '25', 55, 'po2.jpg', 5),
(6, 'VILLAIN: THE END 1st Album (Limited Ver.)', 'DRIPPIN', '30', 50, 'po4.jpg', 5),
(8, 'QUEENZ TABLE 1st Single Album', 'QUEENZ EYE', '20', 50, 'po3.jpg', 5),
(9, 'I (Part.1) 2nd Mini Album', 'NINE.i', '25', 50, 'po7.jpg', 5),
(10, 'ME ANOTHER ME Photo Essay', 'SF9', '25', 50, 'po5.jpg', 5),
(15, 'Light Stick NCT', 'NCT', '20', 50, 'bs1.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id_buyer` int(6) NOT NULL,
  `usn_buyer` varchar(50) NOT NULL,
  `pass_buyer` varchar(200) NOT NULL,
  `tgl_akun_buyer` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id_buyer`, `usn_buyer`, `pass_buyer`, `tgl_akun_buyer`) VALUES
(14, 'leejeno', '9c48c4b1b36bc0a7e4538f21115f18e5', '2022-10-26'),
(13, 'kiacoba', 'e28611980b0fa242a570f68ec3032bf9', '2022-10-26'),
(15, 'zhongchenle', '04c0b6d4fc38fc48bc55fe0c4780bbc6', '2022-10-26'),
(16, 'najaemin', '757440a56df9daab370c86cfe8fc2ad8', '2022-10-26'),
(17, 'kiakia', 'kiakia', '2022-10-26'),
(18, 'kiacharmer', '131fdfdd8bfe24b29a16daf6bab09724', '2022-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(6) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `nama_artis` varchar(50) NOT NULL,
  `harga_brg` varchar(50) NOT NULL,
  `qyt_brg` int(5) NOT NULL,
  `img_brg` varchar(200) NOT NULL,
  `id_buyer` int(6) NOT NULL,
  `id_brg` int(6) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `nama_brg`, `nama_artis`, `harga_brg`, `qyt_brg`, `img_brg`, `id_buyer`, `id_brg`, `status`, `id_transaksi`) VALUES
(39, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', '', '25', 1, 'po2.jpg', 16, 5, 2, 22),
(38, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', '', '25', 1, 'po2.jpg', 15, 5, 2, 21),
(40, 'NATURE WORLD CODE W 3rd Mini Album', '', '32', 1, 'po8.jpg', 16, 13, 2, 22),
(36, 'NATURE WORLD CODE W 3rd Mini Album', '', '32', 1, 'po8.jpg', 15, 13, 2, 21),
(35, 'ME ANOTHER ME Photo Essay', '', '25', 1, 'po5.jpg', 15, 10, 2, 21),
(34, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', '', '25', 1, 'po2.jpg', 14, 5, 2, 20),
(33, 'VILLAIN: THE END 1st Album (Limited Ver.)', '', '30', 1, 'po4.jpg', 14, 6, 2, 20),
(32, 'I (Part.1) 2nd Mini Album', '', '25', 1, 'po7.jpg', 14, 9, 2, 20),
(41, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', '', '25', 1, 'po2.jpg', 16, 5, 2, 22),
(55, 'VILLAIN: THE END 1st Album (Limited Ver.)', 'DRIPPIN', '30', 1, 'po4.jpg', 13, 6, 2, 23),
(61, 'DANCE ON 1st Single Album', 'ALICE', '300', 1, 'po1.jpg', 13, 4, 2, 23),
(66, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', 'YOUNITE', '25', 1, 'po2.jpg', 13, 5, 2, 24),
(56, 'I (Part.1) 2nd Mini Album', 'NINE.i', '25', 1, 'po7.jpg', 13, 9, 2, 23),
(59, 'QUEENZ TABLE 1st Single Album', 'QUEENZ EYE', '20', 1, 'po3.jpg', 13, 8, 2, 23),
(64, 'Light Stick NCT', 'NCT', '20', 1, 'bs1.png', 13, 15, 2, 24),
(65, 'Light Stick NCT', 'NCT', '20', 1, 'bs1.png', 13, 15, 2, 24),
(67, 'QUEENZ TABLE 1st Single Album', 'QUEENZ EYE', '20', 1, 'po3.jpg', 13, 8, 2, 24),
(68, 'ME ANOTHER ME Photo Essay', 'SF9', '25', 1, 'po5.jpg', 13, 10, 2, 24),
(69, 'Light Stick NCT', 'NCT', '20', 1, 'bs1.png', 13, 15, 2, 25),
(70, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', 'YOUNITE', '25', 1, 'po2.jpg', 13, 5, 2, 25),
(71, 'QUEENZ TABLE 1st Single Album', 'QUEENZ EYE', '20', 1, 'po3.jpg', 13, 8, 2, 25),
(72, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', 'YOUNITE', '25', 1, 'po2.jpg', 13, 5, 2, 27),
(73, 'VILLAIN: THE END 1st Album (Limited Ver.)', 'DRIPPIN', '30', 1, 'po4.jpg', 13, 6, 2, 27),
(74, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', 'YOUNITE', '25', 1, 'po2.jpg', 13, 5, 2, 27),
(75, 'DANCE ON 1st Single Album', 'ALICE', '300', 1, 'po1.jpg', 13, 4, 2, 28),
(76, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', 'YOUNITE', '25', 1, 'po2.jpg', 13, 5, 2, 28),
(77, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', 'YOUNITE', '25', 1, 'po2.jpg', 13, 5, 2, 29),
(78, 'DANCE ON 1st Single Album', 'ALICE', '300', 1, 'po1.jpg', 13, 4, 2, 29),
(79, 'VILLAIN: THE END 1st Album (Limited Ver.)', 'DRIPPIN', '30', 1, 'po4.jpg', 13, 6, 2, 29),
(80, 'DANCE ON 1st Single Album', 'ALICE', '300', 1, 'po1.jpg', 13, 4, 2, 30),
(81, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', 'YOUNITE', '25', 1, 'po2.jpg', 13, 5, 2, 30),
(82, 'QUEENZ TABLE 1st Single Album', 'QUEENZ EYE', '20', 1, 'po3.jpg', 13, 8, 2, 30),
(83, 'Light Stick NCT', 'NCT', '20', 1, 'bs1.png', 13, 15, 2, 31),
(84, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', 'YOUNITE', '25', 1, 'po2.jpg', 13, 5, 2, 31),
(85, 'VILLAIN: THE END 1st Album (Limited Ver.)', 'DRIPPIN', '30', 1, 'po4.jpg', 13, 6, 2, 31),
(86, 'VILLAIN: THE END 1st Album (Limited Ver.)', 'DRIPPIN', '30', 1, 'po4.jpg', 13, 6, 2, 31),
(87, 'DANCE ON 1st Single Album', 'ALICE', '300', 1, 'po1.jpg', 13, 4, 2, 32),
(88, 'DANCE ON 1st Single Album', 'ALICE', '300', 1, 'po1.jpg', 13, 4, 2, 33),
(89, 'YOUNI-ON 3rd EP Album (Photobook Ver.)', 'YOUNITE', '25', 1, 'po2.jpg', 13, 5, 2, 33),
(90, 'Light Stick NCT', 'NCT', '20', 1, 'bs1.png', 13, 15, 2, 34),
(91, 'ME ANOTHER ME Photo Essay', 'SF9', '25', 1, 'po5.jpg', 13, 10, 2, 35),
(92, 'VILLAIN: THE END 1st Album (Limited Ver.)', 'DRIPPIN', '30', 1, 'po4.jpg', 13, 6, 2, 35);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(6) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(5, 'Album'),
(9, 'Light Stick'),
(10, 'Merchandise'),
(12, 'Clothing'),
(13, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(6) NOT NULL,
  `total_transaksi` int(10) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `norek_buyer` bigint(20) NOT NULL,
  `namarek_buyer` varchar(50) NOT NULL,
  `bank_buyer` varchar(50) NOT NULL,
  `id_buyer` int(6) NOT NULL,
  `nama_buyer` varchar(50) NOT NULL,
  `alamat_buyer` text NOT NULL,
  `telp_buyer` bigint(20) NOT NULL,
  `order` varchar(2555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `total_transaksi`, `tgl_transaksi`, `norek_buyer`, `namarek_buyer`, `bank_buyer`, `id_buyer`, `nama_buyer`, `alamat_buyer`, `telp_buyer`, `order`) VALUES
(20, 80, '2022-10-26 10:57:15', 123456789, 'Lee Jeno', 'BCA-BA', 14, 'Lee Jeno', 'Seoul, Korea', 82208238182, NULL),
(21, 82, '2022-10-26 10:57:29', 1234567890, 'Zhong Chenle', 'PMT-BA', 15, 'Zhong Chenle', 'Seoul, Korea', 82208220822, NULL),
(22, 82, '2022-12-04 16:43:22', 2147483647, 'Na Jaemin', 'BCA-BA', 16, 'Na Jaemin', 'Seoul, Korea', 82308230823, NULL),
(31, 105, '2022-12-04 19:01:35', 87654324567, 'Zakia Noorardini', 'MDR-BA', 13, 'Zakia Noorardini', 'Perumahan Graha Indah', 82208238182, NULL),
(32, 300, '2022-12-04 19:01:37', 235467854, 'Zakia Noorardini', 'CMB-BA', 13, 'Zakia Noorardini', 'Perumahan Graha Indah', 82208238182, NULL),
(33, 325, '2022-12-04 19:01:41', 987654567, 'Zhong Chenle', 'JBR-BA', 13, 'Zakia Noorardini', 'Perumahan Graha Indah', 82208238182, NULL),
(34, 20, '2022-12-04 19:01:44', 98765456789, 'Zhong Chenle', 'DNM-BA', 13, 'Zakia Noorardini', 'Perumahan Graha Indah', 82208238182, NULL),
(35, 55, '2022-12-04 19:01:47', 34567543456, 'Zakia Noorardini', 'CMB-BA', 13, 'Zakia Noorardini', 'Perumahan Graha Indah', 82208238182, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id_buyer`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id_buyer` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
