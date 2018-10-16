-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 12:19 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal 7`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswabaru`
--

CREATE TABLE `mahasiswabaru` (
  `nim` int(225) NOT NULL,
  `nama` text NOT NULL,
  `jeniskelamin` text NOT NULL,
  `prodi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `motohidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswabaru`
--

INSERT INTO `mahasiswabaru` (`nim`, `nama`, `jeniskelamin`, `prodi`, `fakultas`, `asal`, `motohidup`) VALUES
(99, 'Sinta', 'perempuan', 'IF', 'FIT', 'Jakarta', 'Hidup'),
(670, 'aku', 'perempuan', 'MI', 'FIT', 'sisi', 'dgj'),
(1890, 'Sinta', 'perempuan', 'IF', 'FIT', 'Jakarta', 'Hidup'),
(9000, 'vaniaa', 'perempuan', 'SM', 'FEB', 'Jawa Tengah', 'Baik'),
(101010, 'Nanda', 'perempuan', 'TK', 'FIT', 'Delanggu', 'Bukan untuk Bersenang senang'),
(117809, 'Nadia N.C', 'perempuan', 'SM', 'FRI', 'Klaten', 'nadd'),
(189023, 'Sintia', '', 'MI', 'FIT', 'Yogyakarta', 'Pasrah'),
(569875, 'Vina', '', 'TK', 'FIT', 'Jakarta', ''),
(1112233, 'Sintia', 'perempuan', 'MI', 'FIT', 'Yogyakarta', 'Pasrah'),
(11778899, 'Sintia', '', 'MI', 'FIT', 'Yogyakarta', 'Pasrah'),
(67018796, 'Deffa raffy', 'laki-laki', 'IF', 'FIF', 'Klaten', 'Berjuang'),
(67088990, 'Hesti', 'perempuan', 'MI', 'FIT', 'Klaten', ''),
(670117234, 'Deffa raffy', 'laki-laki', 'IF', 'FIF', 'Klaten', 'Berjuang'),
(2147483647, 'Ivania Nonita C', 'perempuan', 'MI', 'FIT', 'Klaten', 'Bukan untuk Bersenang senang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswabaru`
--
ALTER TABLE `mahasiswabaru`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
