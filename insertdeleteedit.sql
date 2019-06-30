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
-- Database: `insertdeleteedit`
--

-- --------------------------------------------------------

--
-- Table structure for table `insertdeleteedittable`
--

CREATE TABLE `insertdeleteedittable` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertdeleteedittable`
--

INSERT INTO `insertdeleteedittable` (`id`, `firstname`, `lastname`, `email`) VALUES
(3, 'Vinu', 'Perera', 'vihanpm@gmail.com'),
(4, 'Chamod', 'Dissanayake', 'dissanayakechamod@gmail.com'),
(5, 'Yeshan', 'Abegunawardhana', 'shanperera963@gmail.com'),
(6, 'Lahiru', 'Yasintha', 'lahiruyasintha97@gmail.com'),
(7, 'Gayan', 'Perera', 'gayanperera160@gmail.com'),
(8, 'hashan', 'jayasinghe', 'hashan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insertdeleteedittable`
--
ALTER TABLE `insertdeleteedittable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertdeleteedittable`
--
ALTER TABLE `insertdeleteedittable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
