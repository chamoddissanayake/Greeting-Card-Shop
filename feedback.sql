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
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `FeedbackID` int(11) NOT NULL,
  `About` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Page` varchar(500) NOT NULL,
  `Comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`FeedbackID`, `About`, `Name`, `Email`, `Subject`, `Page`, `Comment`) VALUES
(1, 'problem1', 'efsdr', 'wqewe', 'wqe', 'wqeqweqw', ''),
(14, 'problem1', 'dsfd', 'sdf', 'fsd', 'sadda', ''),
(15, 'problem1', 'xcv', 'vxc', 'xcvx', 'xcv', ''),
(16, 'problem1', ' mbm', 'hbhnv', 'mnnmm,vcvbc', 'nmbmnbn', ''),
(17, '', '', '', '', '', ''),
(18, 'problem1', 'saamsa', 'sasasa@jksfv.com', 'fb grfg', 'sdfsddf', ''),
(19, 'problem1', 'sdaasds', 'sadasf', 'dsfsdf', 'fdgdfg', ''),
(20, 'problem1', 'abcdef', 'abcdef@gmail.com', 'problem1', 'fdgkjdgfd.com/fgsdg.php', 'dsfsnfdskjfjds'),
(21, 'problem1', '1234', '1234@gmail.com', '12345', 'dfasf', 'dfsdfdsfdsf'),
(22, 'problem1', 'd', 'd@g.com', 'ss', 'ss', 'dddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  ADD PRIMARY KEY (`FeedbackID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
