-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 05:30 AM
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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `review` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `review_creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `user_id`, `product_id`, `review`, `rating`, `review_creation_date`) VALUES
(1, 3, 9, 'this is a test review', 5, '2016-11-09 08:27:17'),
(2, 3, 13, 'this is anaother test review', 3, '2016-11-09 08:27:17'),
(3, 10, 65, 'test review right here', 4, '2016-11-09 08:28:10'),
(5, 1, 1, 'Beautiful hat that does a great job of protecting you from the sun. Fantastic outdoor wear!', 5, '2016-11-12 17:12:47'),
(6, 3, 1, 'Nice hat that helped keep the sun out of my face, but it’s not that pretty.\r\n', 3, '2016-11-12 17:12:47'),
(7, 4, 2, 'The sun kept getting in my eyes even with this hat. Doesn’t look too bad though. \r\n', 3, '2016-11-12 17:12:47'),
(8, 5, 2, 'I bought this for my daughter but she lost it right away. Awful hat. Waste of money!\r\n', 2, '2016-11-12 17:12:47'),
(9, 6, 3, 'I love this shirt. I can show off my beautiful biceps with this shirt. Would buy again.\r\n', 5, '2016-11-12 17:12:47'),
(10, 7, 3, 'I like this shirt. Nice to wear when it’s hot out.\r\n', 4, '2016-11-12 17:12:47'),
(11, 8, 4, 'It feels weird to wear. Meh don’t get it. \r\n', 3, '2016-11-12 17:12:47'),
(12, 9, 4, 'Doesn’t look good. Doesn’t feel good\r\n', 2, '2016-11-12 17:12:47'),
(13, 10, 6, 'It looks awesome. Super great to wear and I haven’t taken it off all week.\r\n', 5, '2016-11-12 17:12:47'),
(14, 11, 6, 'This is pretty top notch. I got it for my husband and he just looks so delicious in it. Mmmmmm\r\n', 5, '2016-11-12 17:12:47'),
(15, 1, 7, 'I got this pair of pants when it looked like it was going to rain. I didn''t bring any rain gear. But this pants worked out great for me. So grateful I bought it.\n', 4, '2016-11-12 17:12:47'),
(16, 3, 7, 'This pants really does help you stay dry. Very useful for keeping your intimate areas nice.\r\n', 4, '2016-11-12 17:12:47'),
(17, 4, 7, 'they look like plastic footsie pajamas. Am I the only one seeing this?\r\n', 2, '2016-11-12 17:12:47'),
(18, 5, 7, 'They fit great over my footsie pajamas, and kept them dry! Great purchase!\r\n', 5, '2016-11-12 17:12:47'),
(19, 6, 8, 'It may keep you dry but it feels really awful and uncomfortable. Effective in some ways I guess.\r\n', 3, '2016-11-12 17:12:47'),
(20, 7, 8, 'I mean it kind of works but it just looks so ugly. I regretted it as soon as I put them on.\r\n', 2, '2016-11-12 17:12:47'),
(21, 8, 9, 'Mmm this pants are so comfortable and do not get in the way when doing all of those outdoor activities at the camp.\r\n', 4, '2016-11-12 17:12:47'),
(22, 9, 9, 'This pair of pants isn’t that bad but I have so many of my own shorts so it doesn’t really stand out.\r\n', 2, '2016-11-12 17:12:47'),
(23, 10, 10, 'Wow these pants are great. What spectacular design. Looks beautiful and is streamlined for stuff I like to do.\r\n', 5, '2016-11-12 17:12:47'),
(24, 11, 10, 'Pretty decent pair of pants. I really enjoyed wearing them at camp. They were my go to pair.\r\n', 4, '2016-11-12 17:12:47'),
(25, 1, 10, 'I wear these every chance I get! they dry quick, and they look great on me!\r\n', 5, '2016-11-12 17:12:47'),
(26, 3, 10, 'Very sporty! It can also work as a bathing suit!\r\n', 5, '2016-11-12 17:12:47'),
(27, 10, 2, 'I love this hat so much. Truly wonderful!', 5, '2016-11-12 22:06:01'),
(28, 3, 31, 'test â€œ review', 4, '2016-11-13 13:28:36'),
(29, 3, 31, 'test â€ review 2', 4, '2016-11-13 13:30:36'),
(30, 3, 31, 'testing quote''s', 4, '2016-11-13 13:33:12'),
(31, 4, 45, 'Fantastic cabin! Really enjoyed my time here.', 5, '2017-02-25 01:32:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `review_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
