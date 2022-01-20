-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 05:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jahit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpelanggan`
--

CREATE TABLE `tbpelanggan` (
  `id_pl` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpelanggan`
--

INSERT INTO `tbpelanggan` (`id_pl`, `nama`, `nohp`, `alamat`) VALUES
(1, 'kairi', '08355476', 'palembang'),
(2, 'doni', '0845', 'kisaran');

-- --------------------------------------------------------

--
-- Table structure for table `tbpesananbaju`
--

CREATE TABLE `tbpesananbaju` (
  `id_pesanbaju` int(5) NOT NULL,
  `id_pl` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `lingkar_leher` int(5) NOT NULL,
  `lingkar_dada` varchar(100) NOT NULL,
  `lingkar_pinggul` varchar(50) NOT NULL,
  `panjang_pinggul` varchar(50) NOT NULL,
  `lebar_pinggul` varchar(50) NOT NULL,
  `lebar_bahu` varchar(50) NOT NULL,
  `lingkar_lengan` varchar(50) NOT NULL,
  `panjang_lengan` varchar(50) NOT NULL,
  `tgl_masuk` varchar(50) NOT NULL,
  `tgl_siap` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpesananbaju`
--

INSERT INTO `tbpesananbaju` (`id_pesanbaju`, `id_pl`, `jenis`, `lingkar_leher`, `lingkar_dada`, `lingkar_pinggul`, `panjang_pinggul`, `lebar_pinggul`, `lebar_bahu`, `lingkar_lengan`, `panjang_lengan`, `tgl_masuk`, `tgl_siap`, `jumlah`, `harga`, `total`) VALUES
(18, 1, 'polisi', 8, '8', '8', '8', '8', '8', '', '8', '2017_12_18', '2017_12_31', '3', 100000, '6666666'),
(20, 2, 'dinas', 8, '9', '10', '11', '13', '13', '8', '8', '2021-12-24', '2021-12-28', '4', 100000, '400000');

-- --------------------------------------------------------

--
-- Table structure for table `tbpesancelana`
--

CREATE TABLE `tbpesancelana` (
  `id_pl` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `panjang_kaki` varchar(25) NOT NULL,
  `lingkar_pinggang` varchar(25) NOT NULL,
  `lingkar_pinggul` int(5) NOT NULL,
  `lingkar_paha` varchar(100) NOT NULL,
  `id_pesancelana` int(5) NOT NULL,
  `tgl_masuk` varchar(50) NOT NULL,
  `tgl_siap` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpesancelana`
--

INSERT INTO `tbpesancelana` (`id_pl`, `jenis`, `panjang_kaki`, `lingkar_pinggang`, `lingkar_pinggul`, `lingkar_paha`, `id_pesancelana`, `tgl_masuk`, `tgl_siap`, `jumlah`, `harga`, `total`) VALUES
(2, 'dinas', '33', '3', 3, '3', 8, '2021-12-23', '2021-11-24', '5', 6, '5');

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
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff Kepaniteraan Hukum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  ADD PRIMARY KEY (`id_pl`);

--
-- Indexes for table `tbpesananbaju`
--
ALTER TABLE `tbpesananbaju`
  ADD PRIMARY KEY (`id_pesanbaju`),
  ADD KEY `id_pl` (`id_pl`);

--
-- Indexes for table `tbpesancelana`
--
ALTER TABLE `tbpesancelana`
  ADD PRIMARY KEY (`id_pesancelana`),
  ADD KEY `id_pl` (`id_pl`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  MODIFY `id_pl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbpesananbaju`
--
ALTER TABLE `tbpesananbaju`
  MODIFY `id_pesanbaju` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbpesancelana`
--
ALTER TABLE `tbpesancelana`
  MODIFY `id_pesancelana` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbpesananbaju`
--
ALTER TABLE `tbpesananbaju`
  ADD CONSTRAINT `tbpesananbaju_ibfk_1` FOREIGN KEY (`id_pl`) REFERENCES `tbpelanggan` (`id_pl`);

--
-- Constraints for table `tbpesancelana`
--
ALTER TABLE `tbpesancelana`
  ADD CONSTRAINT `tbpesancelana_ibfk_1` FOREIGN KEY (`id_pl`) REFERENCES `tbpelanggan` (`id_pl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
