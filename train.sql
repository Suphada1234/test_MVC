-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 05:29 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `train` int(11) NOT NULL,
  `d_station` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `d_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`train`, `d_station`, `d_time`) VALUES
(234, 'กรุงเทพฯ', '14:15:00'),
(424, 'นครราชสีมา', '09:50:00'),
(72, 'กรุงเทพฯ', '14:55:00'),
(428, 'นครราชสีมา', '11:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `huayrach`
--

CREATE TABLE `huayrach` (
  `train` int(11) NOT NULL,
  `to` time NOT NULL,
  `exit` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `huayrach`
--

INSERT INTO `huayrach` (`train`, `to`, `exit`) VALUES
(234, '05:53:00', '05:54:00'),
(424, '07:39:00', '07:40:00'),
(72, '08:22:00', '08:23:00'),
(428, '09:38:00', '09:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE `origin` (
  `train` int(11) NOT NULL,
  `station` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `note` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`train`, `station`, `time`, `note`) VALUES
(234, 'สุรินทร์', '05:20:00', 'รถธรรมดา'),
(424, 'สำโรงทาบ', '05:50:00', 'รถดีเซลราง'),
(72, 'อุบลราชธาณี', '05:40:00', 'รถด่วนดีเซลราง'),
(428, 'อุบลราชธาณี', '06:20:00', 'รถดีเซลราง');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
