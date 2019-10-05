-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 02:04 PM
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
  `desc_diri` varchar(256) NOT NULL,
  `sd` varchar(50) NOT NULL,
  `smp` varchar(50) NOT NULL,
  `sma` varchar(50) NOT NULL,
  `univ` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ig` varchar(50) NOT NULL,
  `github` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`npm`, `desc_diri`, `sd`, `smp`, `sma`, `univ`, `nama`, `ig`, `github`, `linkedin`, `twitter`) VALUES
('17081010044', 'Halooo saya lahir pada tanggal 15 Februari 1999, Hobi memancing dan rebahan.', 'SD Muhammadiyah 6 Surabaya', 'SMPN 32 Surabaya', 'SMA Kemala Bhayangkari 1 Surabaya', 'UPN JATIM', 'Mohammad Idham Fachrurrozi', '@idhamozi_', 'idhamozi', 'mohammad-idham', 'idham_p4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
