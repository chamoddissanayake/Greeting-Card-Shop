-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 11:33 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildcard`
--

CREATE TABLE `buildcard` (
  `topic` varchar(30) NOT NULL,
  `noPgs` int(2) NOT NULL,
  `c_width` int(2) NOT NULL,
  `c_height` int(2) NOT NULL,
  `c_to` varchar(20) NOT NULL,
  `c_from` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buildcard`
--

INSERT INTO `buildcard` (`topic`, `noPgs`, `c_width`, `c_height`, `c_to`, `c_from`, `message`) VALUES
('gh', 3, 56, 55, 'hgj', 'jkj', 'Type here.'),
('gh', 3, 56, 55, 'hgj', 'jkj', 'Type here.'),
('gh', 3, 56, 55, 'hgj', 'jkj', 'Type here.'),
('gh', 3, 56, 55, 'hgj', 'jkj', 'Type here.'),
('gh', 3, 56, 55, 'hgj', 'jkj', 'Type here.'),
('gh', 3, 56, 55, 'hgj', 'jkj', 'Type here.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
