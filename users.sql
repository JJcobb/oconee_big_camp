-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 05:31 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` char(2) NOT NULL,
  `zip` int(5) NOT NULL,
  `country` varchar(25) DEFAULT NULL,
  `access` varchar(24) NOT NULL,
  `active` varchar(7) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone`, `street`, `city`, `state`, `zip`, `country`, `access`, `active`) VALUES
(1, 'Admin1', 'admin1', 'admin', 'admin', 'admin@oconee.com', '4075551234', '555 Oconee Dr', 'Orlando', 'FL', 32826, 'US', 'admin', 'removed'),
(3, 'user', 'user', 'Steve', 'Jobs', 'user@oconee.com', '4075550987', '988 Oconee Dr.', 'Orlando', 'FL', 32826, 'US', 'user', 'active'),
(4, 'Admin', 'high^five', 'Dan', 'Nova', 'super@nova.com', '4073266682', '999 Supernova ct', 'Orlando', 'FL', 32849, 'US', 'admin', 'active'),
(5, 'Super', 'UPPER~CASE', 'Nad', 'Avon', 'repus@avon.com', '4072866623', '000 Avonrepus Ct', 'Orlando', 'FL', 32894, 'US', 'privileged', 'active'),
(6, 'Admin2', 'admin2', 'Adam', 'Nister', 'admin2@nister.com', '4079323646', '222 Admin Cir', 'Tallahassee', 'FL', 56123, 'US', 'admin', 'active'),
(7, 'Admin3', 'admin3', 'Adum', 'Nister', 'admin3@nister.com', '4073323646', '333 Admin Cir', 'Tallahassee', 'FL', 56123, 'US', 'admin', 'active'),
(8, 'Privileged2', 'privileged2', 'Privi', 'Leged', 'privileged2@user.com', '4072222222', '222 Privileged St', 'Miami', 'FL', 48523, 'US', 'privileged', 'active'),
(9, 'Privileged3', 'privileged3', 'Privii', 'Legedd', 'privileged3@user.com', '4073333333', '333 Privileged St', 'Miami', 'FL', 48523, 'US', 'privileged', 'active'),
(10, 'User2', 'user2', 'Usertwo', 'Two', 'user2@user2.com', '4078732222', '222 User Rd', 'Kissimmee', 'FL', 34723, 'US', 'user', 'active'),
(11, 'User3', 'user3', 'User', 'Three', 'user3@user.com', '4078733333', '333 User Rd', 'Kissimmee', 'FL', 34723, 'US', 'user', 'active'),
(12, 'newuser', 'newuser', 'User', 'New', 'new@user.com', '4073334444', '2548 New Road', 'Oviedo', 'FL', 32765, 'US', 'user', 'active'),
(13, 'jjcobb', 'beast', 'jacob', 'voge', 'test@test.com', '3216549870', '123 main', 'tville', 'FL', 32780, 'US', 'user', 'active'),
(14, 'test', '$2y$10$tEJga4NYuqljczO6uHIhcei3gdhzCiu4S82ZCVc27aD', 'jacob', 'voge', 'test@test.com', '3216549870', '123 main', 'tville', 'FL', 32780, 'US', 'user', 'removed'),
(15, 'jacob', '$2y$10$tDV3IFOBSXgpd/TIJjb4sOgIgD50lVulQxx0zHY/tm4A/W4W1WRkK', 'jacob', 'voge', 'test@test.com', '3216549870', '123 main', 'tville', 'FL', 32780, 'US', 'user', 'removed'),
(16, 'voge', '$2y$10$V6NJjLy3dutb5w1VC0awWOIuDuUsV.TVLiyi2CFDO6LUOcbUcTUze', 'jacob', 'voge', 'test@test.com', '3216549870', '123 main', 'tville', 'FL', 32780, 'US', 'user', 'removed'),
(17, 'tester', '$2y$10$Pli1m0nkTSH6v3Mg3sxSMuLhfzRs5ORFkR/Sj9owEupNpVykXTfVC', 'jacob', 'voge', 'test@test.com', '3216549870', '123 main', 'tville', 'FL', 32780, 'US', 'user', 'removed'),
(18, 'tester', 'f5d1278e8109edd94e1e4197e04873b9', 'jacob', 'voge', 'test@test.com', '3216549870', '123 main', 'tville', 'FL', 32780, 'US', 'user', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
