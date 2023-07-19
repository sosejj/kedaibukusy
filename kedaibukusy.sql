-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 04:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedaibukusy`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenama`
--

CREATE TABLE `jenama` (
  `idJenama` int(11) NOT NULL,
  `namaJenama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenama`
--

INSERT INTO `jenama` (`idJenama`, `namaJenama`) VALUES
(1, 'Gemilang'),
(2, 'Sasbadi'),
(3, 'PAN Asia Publications'),
(5, 'Popular');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPengguna` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `aras` varchar(10) DEFAULT NULL,
  `nomhp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idPengguna`, `password`, `nama`, `aras`, `nomhp`) VALUES
('012345678910', '12345', 'shiyang', 'ADMIN', '0124118296'),
('060109070817', 'hello', 'shiyangdummy', 'PENGGUNA', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `idPilihan` int(11) NOT NULL,
  `idPengguna` varchar(30) DEFAULT NULL,
  `idProduk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`idPilihan`, `idPengguna`, `idProduk`) VALUES
(1, '060109070817', 10),
(18, '060109070817', 12),
(19, '060109070817', 11),
(20, '060109070817', 10),
(22, '060109070817', 12),
(23, '060109070817', 11),
(24, '060109070817', 10),
(25, '060109070817', 11),
(26, '060109070817', 12),
(27, '060109070817', 10),
(28, '060109070817', 12),
(29, '060109070817', 11),
(30, '060109070817', 10),
(31, '060109070817', 10);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `namaProduk` varchar(50) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `idJenama` int(11) DEFAULT NULL,
  `harga` decimal(15,2) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `namaProduk`, `deskripsi`, `idJenama`, `harga`, `gambar`) VALUES
(10, 'Modul SPM Biologi', '                            Hello', 2, '14.99', '87eb2622fe02f55eb3b0df1283301fa5jpg'),
(11, 'Modul SPM Kimia', '        Murah je', 1, '80.00', '303973f3db0bfdca8c1dd16130d76621jpg'),
(12, 'Modul SPM Fizik', '        asdff', 1, '9999.00', '2e9fb0187f00a20f2940e65fee6981e4jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenama`
--
ALTER TABLE `jenama`
  ADD PRIMARY KEY (`idJenama`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPengguna`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`idPilihan`),
  ADD KEY `idProduk` (`idProduk`),
  ADD KEY `idPengguna` (`idPengguna`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idJenama` (`idJenama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenama`
--
ALTER TABLE `jenama`
  MODIFY `idJenama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `idPilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD CONSTRAINT `idPengguna` FOREIGN KEY (`idPengguna`) REFERENCES `pengguna` (`idPengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idProduk` FOREIGN KEY (`idProduk`) REFERENCES `produk` (`idProduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `idJenama` FOREIGN KEY (`idJenama`) REFERENCES `jenama` (`idJenama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
