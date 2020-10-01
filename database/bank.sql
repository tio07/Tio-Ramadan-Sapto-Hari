-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 06:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_perkiraan`
--

CREATE TABLE `b_perkiraan` (
  `id_perkiraan` int(11) NOT NULL,
  `nama_perkiraan` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_perkiraan`
--

INSERT INTO `b_perkiraan` (`id_perkiraan`, `nama_perkiraan`, `ket`) VALUES
(2, 'Penarikan', 'Kredit'),
(3, 'Pinjaman', 'Kredit');

-- --------------------------------------------------------

--
-- Table structure for table `b_transaksi`
--

CREATE TABLE `b_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nasabah` text NOT NULL,
  `id_perkiraan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_transaksi`
--

INSERT INTO `b_transaksi` (`id_transaksi`, `nasabah`, `id_perkiraan`, `jumlah`) VALUES
(1, 'Tio', 3, 1000000),
(3, 'Budi', 3, 5000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_perkiraan`
--
ALTER TABLE `b_perkiraan`
  ADD PRIMARY KEY (`id_perkiraan`);

--
-- Indexes for table `b_transaksi`
--
ALTER TABLE `b_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_perkiraan`
--
ALTER TABLE `b_perkiraan`
  MODIFY `id_perkiraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `b_transaksi`
--
ALTER TABLE `b_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
