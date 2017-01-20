-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2017 at 05:21 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_negara`
--

CREATE TABLE IF NOT EXISTS `data_negara` (
  `id` int(11) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `ibu_kota` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_negara`
--

INSERT INTO `data_negara` (`id`, `negara`, `ibu_kota`) VALUES
(1, 'Indonesia', 'Jakarta'),
(2, 'Malaysia', 'Kuala Lumpur'),
(3, 'Filipina', 'Manila'),
(4, 'Singapura', 'Singapura'),
(5, 'Kamboja', 'Phnom Penh'),
(6, 'Laos', 'Vientiane'),
(7, 'Myanmar', 'Naypyidaw'),
(8, 'Thailand', 'Bangkok'),
(9, 'Vietnam', 'Hanoi'),
(10, 'Brunei Darussalam', 'Bandar Seri Begawan'),
(11, 'Timor Leste', 'Dili');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_negara`
--
ALTER TABLE `data_negara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_negara`
--
ALTER TABLE `data_negara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
