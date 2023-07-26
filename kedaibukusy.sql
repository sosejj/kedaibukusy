-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 07:22 AM
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
-- Database: `kedaibukusy`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenama`
--

CREATE TABLE `jenama` (
  `idJenama` int(11) NOT NULL,
  `namaJenama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenama`
--

INSERT INTO `jenama` (`idJenama`, `namaJenama`) VALUES
(1, 'Pelangi'),
(2, 'Sasbadi');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idPengguna`, `password`, `nama`, `aras`, `nomhp`) VALUES
('012345678910', '12345', 'shiyang', 'ADMIN', '0124118296'),
('761115069874', 'THaxbcs', 'Chew Jia Yi', 'PENGGUNA', '0176428851'),
('872602087821', 'Dyla0123', 'Dylan Kiu', 'PENGGUNA', '01178952546'),
('880529075558', '687s@@', 'Chew Chia Yi', 'PENGGUNA', '0125554411'),
('930221013297', 'pass3', 'Wong Chong Xuan', 'PENGGUNA', '0175448844'),
('980731101245', '1234abc', 'Kipt Khor', 'PENGGUNA', '0124185425');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `idPilihan` int(11) NOT NULL,
  `idPengguna` varchar(30) DEFAULT NULL,
  `idProduk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `namaProduk`, `deskripsi`, `idJenama`, `harga`, `gambar`) VALUES
(1, 'FOCUS PT3 Tingkatan 1,2,3: Matematik', '-320 muka surat \n-untuk pelajar T1-T3', 1, '31.90', NULL),
(2, 'FOCUS PT3 Tingkatan 1,2,3: Sains', '-320 muka surat \n-untuk pelajar T1-T3', 1, '30.90', NULL),
(3, 'FOCUS PT3 Tingkatan 1,2,3: Bahasa Melayu', '-320 muka surat \n-untuk pelajar T1-T3', 1, '29.90', NULL),
(4, 'MASTERCLASS T4,5: Prinsip Perakaunan', '-320 muka surat \n-untuk pelajar T4-T5', 2, '28.90', NULL),
(5, 'MASTERCLASS T4,5: RBT', '-320 muka surat \n-untuk pelajar T4-T5', 2, '27.90', NULL);

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
  MODIFY `idJenama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `idPilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
