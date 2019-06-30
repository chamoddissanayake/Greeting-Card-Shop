-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 11:32 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greeting_card_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_detail`
--

CREATE TABLE `card_detail` (
  `card_detail_id` int(11) NOT NULL,
  `title` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf16_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `image_url` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `card_detail`
--

INSERT INTO `card_detail` (`card_detail_id`, `title`, `description`, `price`, `image_url`, `category`) VALUES
(1, 'Birthday abc', 'birthday card descrition1', 3.45, 'images/category/birthday/birthday_1.jpg', 'birthday'),
(2, 'Thank You fgfh', 'Thank you card description1', 2.34, 'images/category/thankyou/thankyou_1.jpg', 'thankyou'),
(3, 'Birthday dghd', 'Birthday cards description2', 0.98, 'images/category/birthday/birthday_2.jpg', 'birthday'),
(4, 'Anniversary wetgz', 'Anniversary card description11', 1.12, 'images/category/anniversary/anniversary_1.jpg', 'anniversary'),
(5, 'Thank you', 'Thnak you card description2', 1.45, 'images/category/thankyou/thankyou_2.jpg', 'thankyou'),
(6, 'Anniversary', 'Anniversary card description2', 2.33, 'images/category/anniversary/anniversary_1.jpg', 'anniversary');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(26) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(56) COLLATE utf16_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `password` varchar(25) COLLATE utf16_unicode_ci NOT NULL,
  `image_url` varchar(1000) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `gender`, `password`, `image_url`) VALUES
(1, 'Chamod', 'dissanayakechamod@gmail.com', 1, 'chamod', 'php/uploads/chamod.jpg'),
(2, 'Vinu', 'vihanpm@gmail.com', 1, 'vinu', 'php/uploads/vinu.jpg'),
(3, 'Yeshan', 'shanperera963@gmail.com', 1, 'yeshan', 'php/uploads/yeshan.jpg'),
(4, 'Lahiru', 'lahiruyasintha97@gmail.com', 1, 'lahiru', 'php/uploads/lahiru.jpg'),
(5, 'Gayan', 'gayanperera160@gmail.com', 1, 'gayan', 'php/uploads/gayan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_detail`
--
ALTER TABLE `card_detail`
  ADD PRIMARY KEY (`card_detail_id`),
  ADD UNIQUE KEY `card_detail_id` (`card_detail_id`),
  ADD KEY `card_detail_id_2` (`card_detail_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_detail`
--
ALTER TABLE `card_detail`
  MODIFY `card_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
