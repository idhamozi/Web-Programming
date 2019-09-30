-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 03:35 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `npm` varchar(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `organisasi` varchar(50) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jns_kel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`npm`, `nama`, `contact`, `organisasi`, `pendidikan`, `alamat`, `jns_kel`) VALUES
('17081010044', 'M Idham F', 'king.idham@gmail.com', 'PMH', 'SMA', 'Petemon 4', 'L'),
('17081010045', 'Sunu Ilham P', 'sunudika@gmail.com', 'Robotika', 'SMA', 'Blukid Res', 'L'),
('17081010043', 'Guntur Adhi P', 'gunturadhip@gmail.com', 'LPW', 'SMA', 'Pasuruan', 'L');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
