-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 05:29 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ja941580`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `order_id` int(3) DEFAULT NULL,
  `user_id` int(3) DEFAULT NULL,
  `product_id` int(3) NOT NULL,
  `price` int(12) NOT NULL,
  `quantity` int(3) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `ordertime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `product_id`, `price`, `quantity`, `active`, `ordertime`) VALUES
(3, 1, 3, 51, 20, 1, 0, '2016-11-09 03:25:15'),
(4, NULL, 10, 65, 0, 2, 0, '2016-11-09 03:25:15'),
(5, NULL, 11, 26, 0, 3, 1, '2016-11-09 03:26:04'),
(6, NULL, 11, 71, 0, 1, 0, '2016-11-09 03:26:04'),
(8, NULL, 13, 38, 45, 1, 1, '0000-00-00 00:00:00'),
(15, NULL, NULL, 56, 550, 1, 0, '0000-00-00 00:00:00'),
(16, NULL, 3, 31, 19, 1, 0, '0000-00-00 00:00:00'),
(17, NULL, 3, 44, 59, 1, 0, '0000-00-00 00:00:00'),
(18, NULL, 3, 56, 550, 1, 0, '0000-00-00 00:00:00'),
(19, NULL, 3, 50, 64, 1, 0, '0000-00-00 00:00:00'),
(20, NULL, 3, 57, 300, 1, 0, '0000-00-00 00:00:00'),
(21, 2, 3, 32, 19, 1, 0, '0000-00-00 00:00:00'),
(22, 2, 3, 55, 98, 1, 0, '0000-00-00 00:00:00'),
(23, 2, 3, 30, 19, 1, 0, '0000-00-00 00:00:00'),
(24, 2, 3, 34, 26, 1, 0, '0000-00-00 00:00:00'),
(25, 3, 3, 3, 20, 1, 0, '0000-00-00 00:00:00'),
(26, 3, 3, 48, 34, 1, 0, '0000-00-00 00:00:00'),
(27, 3, 3, 64, 60, 1, 0, '0000-00-00 00:00:00'),
(28, 4, 3, 56, 550, 1, 0, '0000-00-00 00:00:00'),
(29, 5, 3, 18, 100, 1, 0, '0000-00-00 00:00:00'),
(30, 5, 3, 52, 194, 1, 0, '0000-00-00 00:00:00'),
(31, 6, NULL, 56, 550, 1, 0, '0000-00-00 00:00:00'),
(32, 6, NULL, 31, 19, 1, 0, '0000-00-00 00:00:00'),
(34, 7, NULL, 58, 1600, 1, 0, '0000-00-00 00:00:00'),
(36, 9, 4, 15, 20, 2, 0, '2016-11-16 21:47:46'),
(37, 10, 4, 16, 100, 1, 0, '2016-11-16 21:48:21'),
(38, 11, 4, 15, 20, 1, 0, '2016-11-16 21:49:58'),
(39, 12, 4, 15, 20, 1, 0, '2016-11-16 21:50:50'),
(40, 13, 4, 16, 100, 1, 0, '2016-11-16 21:51:25'),
(41, 14, 4, 30, 19, 1, 0, '2016-11-16 21:53:39'),
(42, 15, 4, 56, 550, 1, 0, '2016-11-16 21:54:38'),
(43, NULL, 4, 56, 550, 1, 1, '0000-00-00 00:00:00'),
(44, 17, NULL, 56, 550, 1, 0, '2016-11-16 22:02:41'),
(45, 16, 4, 14, 56, 1, 0, '0000-00-00 00:00:00'),
(46, 8, 4, 10, 24, 1, 0, '2016-11-16 22:01:18'),
(47, 17, NULL, 31, 19, 1, 0, '2016-11-16 22:02:41'),
(48, 18, NULL, 56, 550, 2, 0, '2016-11-16 22:04:47'),
(49, 19, NULL, 56, 550, 1, 0, '2016-11-16 22:05:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
