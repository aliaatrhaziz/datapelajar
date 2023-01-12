-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 04:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_pelajar`
--

CREATE TABLE `info_pelajar` (
  `id` int(3) NOT NULL,
  `no_ndp` int(9) NOT NULL,
  `nama_pelajar` varchar(50) NOT NULL,
  `no_kp` varchar(50) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_pelajar`
--

INSERT INTO `info_pelajar` (`id`, `no_ndp`, `nama_pelajar`, `no_kp`, `jantina`, `no_hp`) VALUES
(1, 23221084, 'AINA ATIKAH BINTI MOHD AZHAR', '020828160168', 'PEREMPUAN', '01110582755'),
(2, 23221102, 'AINA NAJWA BINTI AMRAN', '021013031452', 'PEREMPUAN', '0193078957'),
(3, 23221157, 'ALLYSSA BINTI ABDULLAH', '031206140104', 'PEREMPUAN', '0139170155'),
(4, 23221132, 'HANIF FAISAL BIN HASMAZI', '020723081107', 'LELAKI', '01167842755'),
(5, 23221100, 'ISHUAARIYAA A/P KRISHNAN', '030526141256', 'PEREMPUAN', '01478563422');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
