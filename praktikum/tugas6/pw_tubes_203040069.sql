-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 03:04 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040069`
--

-- --------------------------------------------------------

--
-- Table structure for table `tumblr`
--

CREATE TABLE `tumblr` (
  `id` int(7) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(15) NOT NULL,
  `stock` int(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tumblr`
--

INSERT INTO `tumblr` (`id`, `name`, `description`, `price`, `stock`, `category`, `picture`) VALUES
(1, 'Beary', '450ml', 85000, 45, 'Tumblr', 'beary.jpg'),
(2, 'Black Pattern', '500ml', 69000, 78, 'Tumblr', 'blackpattern.jpg'),
(3, 'Cleartum', '450ml', 79000, 47, 'Tumblr', 'cleartum.jpg'),
(4, 'Flowie', '500ml', 90000, 80, 'Tumblr', 'flowie.jpg'),
(5, 'Fresh Yellow', '500ml', 75000, 50, 'Tumblr', 'freshyellow.jpg'),
(6, 'Full Black', '500ml', 79000, 30, 'Tumblr', 'fullblack.jpg'),
(7, 'Peachy', '500ml', 90000, 27, 'Tumblr', 'peachy.jpg'),
(8, 'Peernie', '450', 79000, 60, 'Tumblr', 'peernie.jpg'),
(9, 'Sprinkle', '500ml', 80000, 34, 'Tumblr', 'sprinkle.jpg'),
(10, 'Pou', '450ml', 85000, 61, 'Tumblr', 'pou.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tumblr`
--
ALTER TABLE `tumblr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tumblr`
--
ALTER TABLE `tumblr`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
