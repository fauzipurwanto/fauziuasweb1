-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 11:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id_admin` int(10) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'fauzipurwanto', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_tb`
--

CREATE TABLE `mahasiswa_tb` (
  `npm` varchar(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa_tb`
--

INSERT INTO `mahasiswa_tb` (`npm`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kode_pos`) VALUES
('191919', 'syahrudin', 'Pulau Alalak', '2000-03-03', 'Laki-Laki', 'Pulau Alalak', '66776'),
('19630404', 'Muhammad Fauzi Purwanto', 'Pulau Alalak', '2000-09-02', 'Laki-Laki ', 'alalak', '7787'),
('19630627', 'Dea Fatma', 'Kuin Selatan', '2000-01-12', 'Laki-Laki', 'Kuin', '3344'),
('21090912', 'Estri Ningsih', 'marabahan', '2000-01-01', 'Perempuan', 'puntik', '12345'),
('2232323', 'Ilham', 'Pulau Alalak', '2002-11-11', 'Laki-Laki ', 'Kuin Selatan', '09090'),
('24455676', 'Ega Wahyudi', 'Pulau Alalak', '1995-05-05', 'Laki-Laki ', 'Jl Pulau Alalak', '77660'),
('343434', 'Halimah', 'Alalak Selatan', '2002-01-01', 'Perempuan', 'Alalak Selatan', '88779'),
('666666', 'Joko waris', 'Banjarmain', '2002-07-31', 'Laki-Laki', 'Pulau Alalak', '66665');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `mahasiswa_tb`
--
ALTER TABLE `mahasiswa_tb`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
