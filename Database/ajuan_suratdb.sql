-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 11:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajuan_suratdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajuan_surat`
--

CREATE TABLE `ajuan_surat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_surat` text NOT NULL,
  `kat_surat` varchar(50) DEFAULT NULL,
  `status_surat` varchar(30) DEFAULT NULL,
  `link_surat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajuan_surat`
--

INSERT INTO `ajuan_surat` (`id`, `nama`, `nim`, `email`, `jenis_surat`, `kat_surat`, `status_surat`, `link_surat`) VALUES
(9, 'Dicky Arya Pratama', 1218009, 'dickyarya.personal@gmail.com', 'Surat kepada ybs', 'Surat Pengantar', 'Selesai', 'www.mediafire.com'),
(10, 'Ahmad Steve ', 123456, 'ahamd@dicodok.com', 'izin Kerja sama.', 'Surat Pengantar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `layanan_akademik`
--

CREATE TABLE `layanan_akademik` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan_akademik`
--

INSERT INTO `layanan_akademik` (`id`, `username`, `password`) VALUES
(1, 'dosen123', '861e72e26334c8f472d8565591e9c0db');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajuan_surat`
--
ALTER TABLE `ajuan_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_akademik`
--
ALTER TABLE `layanan_akademik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajuan_surat`
--
ALTER TABLE `ajuan_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `layanan_akademik`
--
ALTER TABLE `layanan_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
