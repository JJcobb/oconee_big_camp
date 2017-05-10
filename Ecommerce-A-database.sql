-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: sulley.cah.ucf.edu
-- Generation Time: Dec 02, 2016 at 11:18 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dig4530c_010`
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
(1, 1, 3, 9, 5, 3, 1, '2016-11-09 03:24:22'),
(3, 1, 3, 51, 20, 1, 0, '2016-11-09 03:25:15'),
(4, NULL, 10, 65, 0, 2, 0, '2016-11-09 03:25:15'),
(5, NULL, 11, 26, 0, 3, 1, '2016-11-09 03:26:04'),
(6, NULL, 11, 71, 0, 1, 0, '2016-11-09 03:26:04'),
(7, NULL, 3, 17, 100, 1, 1, '0000-00-00 00:00:00'),
(8, NULL, 3, 5, 20, 1, 1, '0000-00-00 00:00:00'),
(9, NULL, 3, 7, 30, 4, 1, '0000-00-00 00:00:00'),
(11, 1, 3, 10, 10, 2, 1, '2016-11-09 03:25:15'),
(12, 2, NULL, 31, 19, 1, 0, '2016-11-17 01:04:47'),
(15, 6, NULL, 30, 19, 1, 0, '2016-11-17 04:09:35'),
(16, 3, 4, 16, 100, 2, 0, '2016-11-17 01:04:47'),
(18, 4, 4, 37, 16, 2, 0, '2016-11-17 03:32:07'),
(19, 4, 4, 46, 124, 1, 0, '2016-11-17 03:32:07'),
(20, 6, NULL, 31, 19, 2, 0, '2016-11-17 04:09:35'),
(25, 4, 4, 20, 150, 1, 0, '2016-11-17 03:32:07'),
(26, 5, 4, 31, 19, 2, 0, '2016-11-17 03:38:48'),
(27, 5, 4, 39, 35, 1, 0, '2016-11-17 03:38:48'),
(28, 8, 4, 31, 19, 1, 0, '2016-11-22 02:53:07'),
(29, 8, 4, 3, 20, 1, 0, '2016-11-22 02:53:07'),
(30, 6, NULL, 56, 550, 1, 0, '2016-11-17 04:09:35'),
(31, NULL, 15, 45, 89, 1, 1, '2016-11-17 04:53:02'),
(32, 7, 10, 2, 30, 2, 0, '2016-11-17 05:03:00'),
(33, 7, 10, 6, 20, 1, 0, '2016-11-17 05:03:00'),
(34, NULL, NULL, 56, 550, 1, 1, '2016-11-17 16:18:08'),
(35, NULL, NULL, 31, 19, 2, 1, '2016-11-22 02:51:36'),
(36, NULL, NULL, 59, 600, 1, 1, '2016-11-23 19:38:30'),
(37, NULL, 4, 45, 89, 1, 1, '2016-11-28 20:44:45'),
(38, NULL, 4, 45, 89, 1, 1, '2016-11-28 20:44:47'),
(39, NULL, 4, 45, 89, 1, 1, '2016-11-28 20:44:48'),
(40, NULL, 4, 45, 89, 1, 1, '2016-11-28 20:44:49'),
(41, NULL, 4, 2, 30, 1, 1, '2016-11-28 20:45:13'),
(42, NULL, 4, 2, 30, 1, 1, '2016-11-28 20:45:15'),
(43, NULL, NULL, 44, 59, 1, 1, '2016-11-29 04:19:27'),
(44, NULL, NULL, 54, 69, 1, 1, '2016-11-30 16:03:15'),
(45, NULL, NULL, 37, 16, 1, 1, '2016-11-30 19:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(45) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `category` varchar(25) DEFAULT NULL,
  `sub_category` varchar(25) DEFAULT NULL,
  `sku` varchar(6) DEFAULT NULL,
  `stock` int(3) DEFAULT NULL,
  `cost` varchar(12) DEFAULT NULL,
  `price` varchar(12) DEFAULT NULL,
  `image_url` varchar(200) DEFAULT NULL,
  `weight` varchar(25) DEFAULT NULL,
  `size` varchar(25) DEFAULT NULL,
  `extra_info` varchar(100) DEFAULT NULL,
  `active` varchar(7) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `category`, `sub_category`, `sku`, `stock`, `cost`, `price`, `image_url`, `weight`, `size`, `extra_info`, `active`) VALUES
(1, 'Adventurous Explorer Hat', 'Made for warm-weather adventures, the Adventurous Explorer Hat shields your face and neck from the sun.', 'Clothing', 'Hats', 'CLO452', 30, '11.23', '34.95', 'https://www.rei.com/media/93d18486-ea66-4df0-804d-f90b676ead94', '9 ounces', '1 ft. w', 'Unisex', 'active'),
(2, 'Sunny Hike Hat', 'The Sunny Hike Hat is specifically designed to protect you from UV rays and keep you cool during warm-weather adventures.', 'Clothing', 'Hats', 'CLO812', 2, '4.75', '29.99', 'https://www.rei.com/media/2f234acf-939c-4d1e-a30e-087bf9e086e7', '6 ounces', '6 in.', 'Unisex', 'active'),
(3, 'Vector Dye Tank Top', 'Show off your gains in the Vector Dye Tank Top. This sleeveless performance tee lets you display your hard work and the unique, space dye fabric treatment takes your style to the next level.', 'Clothing', 'Shirts', 'CLO156', 55, '3.65 ', '19.99 ', 'http://www.dickssportinggoods.com/graphics/product_images/pDSP1-23269282v750.jpg', '10 ounces', 'varies', 'Men', 'active'),
(4, 'Helix Crew Shirt', '100% micro denier polyester engineered construction is designed to create air pockets for added moisture control and improved breathability, and to provide UV protection.', 'Clothing', 'Shirts', 'CLO725', 60, '5.75 ', '19.99 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/larger/91675.jpg', '12 ounces', 'varies', 'Men', 'active'),
(5, 'Dream Tank Top', 'The Strappy Tank Top is perfect for warm-weather running, with ultralight, ultra-breathable fabric that won\'t weigh you down—no matter how hot it gets.', 'Clothing', 'Shirts', 'CLO363', 55, '3.16 ', '19.99 ', 'https://www.rei.com/media/60a32d25-cd36-417d-ba3c-e5ac94ea1e9a', '8 ounces', 'varies', 'Women', 'active'),
(6, 'Legend Short Sleeve', 'The Legend Short Sleeve is an essential for any sport or training style. This training top is constructed out of fabric that wicks sweat and moisture away so you stay cool and comfortable throughout your workout.', 'Clothing', 'Shirts', 'CLO668', 60, '4.68 ', '19.99 ', 'http://www.dickssportinggoods.com/graphics/product_images/pDSP1-20251564v750.jpg', '10 ounces', 'varies', 'Women', 'active'),
(7, 'Resistant Nature Pants', 'Packable rain protection that pulls on easily over boots, the Resistant Naturel Pants take a responsible step forward with a 100% recycled nylon face; waterproof/breathable performance reliability.', 'Clothing', 'Pants', 'CLO245', 30, '6.83 ', '29.99 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/alt/M0331_alt1.jpg', '18 ounces', 'varies', 'Men', 'active'),
(8, 'Zip Rain Pants', 'The technical, waterproof womens Zip Rain Pants let you stay out when the weather turns ugly, while half-zip legs let you get them on or off easily over your boots.', 'Clothing', 'Pants', 'CLO943', 30, '6.37 ', '29.99 ', 'https://www.rei.com/media/6590b639-c54a-4ad2-92c2-1adeab99e3c1', '15 ounces', 'varies', 'Women', 'active'),
(9, 'Mojo Shorts', 'Great for climbing, yoga and other outdoor activities, these stylish shorts are durable and designed for smooth, unrestricted movement.', 'Events', 'Shorts', 'CLO358', 30, '4.70', '23.99', 'https://www.rei.com/media/6d5c284f-90e2-4e92-ba8e-0153dd961330', '14 ounces', 'varies', 'Men', 'active'),
(10, 'Screenline Shorts', 'Designed for strong performance on the trail, the women\'s Screeline Shorts offer stretch, durability and quick-drying comfort mile after mile.', 'Clothing', 'Shorts', 'CLO200', 30, '4.35 ', '23.99 ', 'https://www.rei.com/media/56a31bae-b9ac-486a-8d30-e5ec52b557b9', '13 ounces', 'varies', 'Women', 'active'),
(11, 'Edge Hiking Boots', 'With instant comfort and the perfect fit, the Merrell Moab Edge Hiking Boots is the Moab you know and love, now with a breathable, athletic mesh upper.', 'Clothing', 'Shoes', 'CLO952', 15, '23.67 ', '59.99 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/larger/F0381sla.jpg', '20 ounces', 'varies', 'Men', 'active'),
(12, 'Hard Hiking Shoes', 'The mid-height, waterproof Hard Hiking Boots are the perfect match for traversing creek beds or hiking through downpours. For the weekend warrior or veteran hiker in search of a durable, comfortable, supportive boot in all weather conditions, look no further than the Moab.', 'Clothing', 'Shoes', 'CLO438', 15, '20.41 ', '59.99 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/larger/10637gry.jpg', '18 ounces', 'varies', 'Women', 'active'),
(13, 'Westfall Stretch Jacket', 'The Westfall Stretch Jacket has just the right amount of insulation, combined with a highly breathable, and highly water repellent shell.', 'Clothing', 'Jackets', 'CLO956', 10, '14.67 ', '55.95 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/larger/M0406blk.jpg', '17 ounces', 'varies', 'Men', 'active'),
(14, 'Hill Jacket', 'The highly breathable and water repellent Hill Jacket is critically seam taped and filled with Whisper fill insulation, for warmth.', 'Clothing', 'Jackets', 'CLO238', 10, '12.67 ', '55.95 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/larger/L0444pac.jpg', '15 ounces', 'varies', 'Women', 'active'),
(15, 'Longs Swim Trunks', 'These up-for-anything Longs Swim Trunks are made of sturdy Supplex&reg; nylon and have a quick-drying mesh liner and elasticized waistband for excellent performance both in and out of the water.', 'Clothing', 'Swimwear', 'CLO424', 25, '4.82 ', '19.99 ', 'https://www.rei.com/media/eb5de9c4-f375-4bd3-8b57-99df702e82bb', '14 ounces', 'varies', 'Men', 'active'),
(16, 'Ticla Besito Sleeping Bag', 'This clever car-camping sleeping bag offers different thicknesses of insulation on each side so you can adjust its warmth to the temperature outside.', 'Equipment', 'Sleeping Bags', 'EQU001', 4, '70.00 ', '100.00 ', 'https://www.rei.com/media/f7577b06-6338-44ae-b120-15d0ca28e516', '3 lbs', 'L', '', 'active'),
(17, 'evrgrn  Crash Sack', 'This wearable bag combines the warmth of a legit sleeping bag with indulgent comfort of the biggest puffy jacket you could own. Trust us, it makes getting out of your tent to make coffee a lot easier.', 'Equipment', 'Sleeping Bags', 'EQU002', 4, '50.00 ', '99.95 ', 'https://www.rei.com/media/f9915f8b-b91f-4049-9abd-5f50b96bd86f', '2 lbs. 7 oz.', 'L', '', 'active'),
(18, 'REI  Trail Pod 29 Sleeping Bag', 'Perfect for car camping and nights spent at the trailhead, the spacious Trail Pod sleeping bag is designed with warmth and comfort as its top priorities.', 'Equipment', 'Sleeping Bags', 'EQU003', 4, '70.00 ', '99.95 ', 'https://www.rei.com/media/43a4ab0d-733b-46e7-b149-eee9f7292693', '3 lbs. 2 oz.', 'L', '', 'active'),
(19, 'Marmot Trestles 30 Sleeping Bag - Womens', 'Cold, damp weather calls for a synthetic insulated mummy bag. This women\'s specific bag offers lofty warmth, low bulk and excellent packability, and continues to insulate even if wet.', 'Equipment', 'Sleeping Bags', 'EQU004', 0, '80.00 ', '109.00 ', 'https://www.rei.com/media/7ac1bc55-c6e1-4ca2-94c8-0fa3935a374d', '3 lbs. 8 oz.', 'L', '', 'active'),
(20, 'Kelty  Discovery 4 Tent', 'This durable tent has a simple 2-pole design that is easy to set up in any weather, at any time. Its roomy interior provides 3-season livability for 4 campers.', 'Equipment', 'Tents', 'EQU005', 6, '110.00 ', '149.95 ', 'https://www.rei.com/media/936bdcf5-4faf-47fd-ad0f-3f6e876ca037', '10 lbs. 7 oz.', '4-person', '', 'active'),
(21, 'Kelty  Trail Ridge 4 Tent with Footprint', 'The Trail Ridge 4 tent combines steep mesh walls with 2 doors and 2 vestibules to provide ample space and livability. Setup couldn\'t be quicker with continuous pole sleeves and color coded clips.', 'Equipment', 'Tents', 'EQU006', 5, '220.00 ', '289.95 ', 'https://www.rei.com/media/15c8fead-48b1-433e-984d-a2242b0621d7', '10 lbs. 14 oz.', '4-person', '', 'active'),
(22, 'Osprey   Hydraulics Reservoir - 3 Liters', 'The 3-liter Osprey Hydraulics reservoir is ideal for large-volume packs and long-duration activities.', 'Equipment', 'Water Containers', 'EQU007', 10, '30.00 ', '36.00 ', 'https://www.rei.com/media/2c70a109-1e92-402b-b9d3-6d89fba2167d', '10.8 ounces', '3 liter', '', 'active'),
(23, 'CamelBak  Chute Water Bottle - 50 fl. oz.', 'At 1.5 liters, this is a big one. In fact, it\'s the biggest water bottle CamelBak makes. The rugged, leakproof Chute bottle has a high-flow spout that makes it easy to chug or pour without spilling.', 'Equipment', 'Water Containers', 'EQU008', 10, '10.00 ', '16.00 ', 'https://www.rei.com/media/c89fb2c8-05ab-4449-9322-3eac8710e696', '7.6 ounces', '50 fl ounces', '', 'active'),
(24, 'Black Diamond  Spot Headlamp', 'Meet the headlight that can do it all. It\'s lightweight, superbright, dimmable and delivers multiple modes for effective illumination while hiking, climbing, skiing or embarking on other adventures.', 'Equipment', 'Lights', 'EQU009', 8, '30.00 ', '39.95 ', 'https://www.rei.com/media/262b7d69-0cf2-4290-aab2-45835671bdb5', '3.25 ounces', '', '', 'active'),
(25, 'ENO   Atlas Hammock Suspension System', 'In Greek mythology, Atlas was strong enough to shoulder the weight of the world on his back. This hammock suspension system can\'t do that, but it can support 400 lbs. and makes setup simple.', 'Equipment', 'Hammocks', 'EQU010', 4, '20.00 ', '29.95 ', 'https://www.rei.com/media/f6c3d08d-928e-4bf3-ac8a-faa0e3ec5421', '11 ounces', '', '', 'active'),
(26, 'ENO  ProFly Hammock Rain Tarp', 'Don\'t be left out in the rain! Rest easy in your hammock with this lightweight, ripstop rain tarp over your head.', 'Equipment', 'Hammocks', 'EQU011', 4, '60.00 ', '79.95 ', 'https://www.rei.com/media/3e2948bc-4630-4453-8bb7-247fe6505ac5', '1 lb. 6 oz.', '', '', 'active'),
(27, 'ENO  Double Deluxe Hammock', 'The Double Deluxe hammock is 26 in. wider than the popular DoubleNest hammock, providing ample space for 2 or more people to sway in comfort on a summer day.', 'Equipment', 'Hammocks', 'EQU012', 4, '64.00 ', '84.95 ', 'https://www.rei.com/media/725d917b-c760-4032-b763-acd8bc675b60', '1 lb. 12 oz.', 'double', '', 'active'),
(28, 'Klymit  Static V Luxe Insulated Sleeping Pad', 'Representing a landmark in sleeping pad comfort, the Static V Luxe insulated sleeping pad uses a V-chamber design to limit air movement and has a massive 30-in. width for plenty of rolling room.', 'Equipment', 'Pads', 'EQU013', 4, '100.00 ', '119.95 ', 'https://www.rei.com/media/628b2563-0755-4a07-8b6a-d6169902453a', '2 lbs. 4 oz.', '', '', 'active'),
(29, 'REI  Flex Lite Chair', 'This supportive, easy-to-pack chair features a deep, comfortable seat. Its light weight works well for backpackers and the low height makes it a smart choice for concertgoers.', 'Equipment', 'Chairs', 'EQU014', 10, '55.00 ', '79.50 ', 'https://www.rei.com/media/2728dfaa-97a4-4dad-bb87-4ebcd4a766a0', '1 lb. 10 oz.', '', '', 'active'),
(30, 'T-shirt', 'Our comfy, loose fitting shirt.', 'Merchandise', 'shirts', 'MER001', 40, '15.20 ', '18.99 ', 'http://rlv.zcache.com/mens_basic_t_shirt-r08f1765aa35248d6ad6408715266c156_jg4de_324.jpg', '450g', 'small', '', 'active'),
(31, 'Fitted T-shirt', 'Our sporty, athletic cut shirt.', 'Merchandise', 'shirts', 'MER002', 35, '15.20 ', '18.99 ', 'http://rlv.zcache.com/mens_performance_t_shirt-r7cf8c049eb964c89867f2a0e7b0daa1a_8nhd7_324.jpg', '450g', 'small', '', 'active'),
(32, 'Womens T-shirt', 'Our relaxed fit camp shirt or girls.', 'Merchandise', 'shirts', 'MER003', 40, '15.20 ', '18.99 ', 'http://rlv.zcache.com/womens_basic_t_shirt-r03d567e694e94ed1b27c9654fcbd63c9_jg95v_324.jpg', '450g', 'small', '', 'active'),
(33, 'Hoodie', 'Our warm camp hoodie for cold nights.', 'Merchandise', 'shirts', 'MER004', 20, '30.40 ', '37.99 ', 'http://rlv.zcache.com/womens_basic_hoodie-r6ee5658c0990416fb0ff655e03aedcf4_jg517_324.jpg', '950g', 'small', '', 'active'),
(34, 'Polo', 'Our presentable and sporty polo shirt.', 'Merchandise', 'shirts', 'MER005', 25, '20.80 ', '25.99 ', 'http://rlv.zcache.com/make_your_own_mens_jersey_polo-rd87712b3021a4794894e4354f55e4e6f_vj78m_324.jpg', '450g', 'small', '', 'active'),
(35, 'Tank Top', 'Our flexible, cotton camp tank top.', 'Merchandise', 'shirts', 'MER006', 30, '16.80 ', '20.99 ', 'http://rlv.zcache.com/design_your_own_jersey_tank_top-r5badfb6f81514b9ba059ff03ea9e4d7e_jyr6d_324.jpg', '400g', 'small', '', 'active'),
(36, 'Belt', 'Our camp belt.', 'Merchandise', 'accessories', 'MER007', 25, '16.80 ', '20.99 ', 'http://tse4.mm.bing.net/th?id=OIP.M921f79527d48bbbf5e3517d9dd494c21o0&pid=15.1', '300g', 'very small', '', 'active'),
(37, 'Baseball Cap', 'Keep cool with our caps!', 'Merchandise', 'accessories', 'MER008', 30, '12.80 ', '15.99 ', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/baseball-cap.jpg', '150g', 'very small', '', 'active'),
(38, 'Flip Flops w/ Bottle Opener', 'Relax and open up a cold one with our camp flip flops, each with a built-in bottle opener.', 'Merchandise', 'accessories', 'MER009', 20, '36.00 ', '44.99 ', 'https://images-na.ssl-images-amazon.com/images/I/31OHKcm5WGL._AC_UL260_SR200,260_.jpg', '150g', 'small', '', 'active'),
(39, 'Backpack', 'Carry supplies like a pro with our camp backpacks.', 'Merchandise', 'bags', 'MER010', 25, '28.00 ', '34.99 ', 'http://rlv.zcache.com/high_sierra_backpack_red_backpack-r56090968af6d45b59c1d9dfb76b0a5d2_j7aab_324.jpg?rlvnet=1', '950g', 'medium', '', 'active'),
(40, 'Laundry Bags', 'Keep your dirty clothes in our camp laundry bag!', 'Merchandise', 'bags', 'MER011', 50, '8.00 ', '9.99 ', 'https://images-na.ssl-images-amazon.com/images/I/41Dc2IKYnNL._AC_UL260_SR200,260_.jpg', '90g', 'small', '', 'active'),
(41, 'Tote', 'Our camp totebag, perfect for storing your lunches.', 'Merchandise', 'bags', 'MER012', 40, '8.00 ', '9.99 ', 'http://rlv.zcache.com/custom_budget_tote_bag-rf369864afab3412497be3519c8884a22_v9w6h_8byvr_324.jpg', '100g', 'small', '', 'active'),
(42, 'Blankets', 'Cozy up with our comfy camp throw blanket! ', 'Merchandise', 'misc', 'MER013', 25, '28.00 ', '34.99 ', 'http://rlv.zcache.com/custom_throw_blanket-r036684cd2b59436db36a494d6d8216c7_zikrk_324.jpg?rlvnet=1', '1600g', 'medium', '', 'active'),
(43, 'Stickers', 'A sticky piece of paper with our camp logo on it.', 'Merchandise', 'misc', 'MER014', 1000, '0.10 ', '0.50 ', 'http://rlv.zcache.com/personalized_round_stickers-re3384eb7f17c420ca4add5ff70b0f388_v9waf_8byvr_324.jpg', '1g', 'very very small', '', 'active'),
(44, 'Regular Cabin', 'Cozy cabin with a bunk bed, small kitchen, and bathroom. Front porch great for relaxing any time of day.', 'Accommodations', 'Cabin', 'ACC001', 5, '175,000 ', '59', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/cabin-regular.jpg', '', '2', 'sleeps 2 | 1 bath', 'active'),
(45, 'Large Cabin', 'Features two full beds, kitchen, and bathroom. Enjoy yourself with room to stretch out in the spacious living area.', 'Accommodations', 'Cabin', 'ACC002', 5, '250,000 ', '89', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/cabin-large.jpg', '', '4', 'sleeps 2-4 | 1 bath', 'active'),
(46, 'Deluxe Cabin', 'Up to five people can enjoy the luxury of this cabin with two full beds, full kitchen, and two bathrooms. There\'s even a loft that sleeps one and provides a great place to hide away.  ', 'Accommodations', 'Cabin', 'ACC003', 5, '350,000 ', '124', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/cabin-deluxe.jpg', '', '5', 'sleeps 5 | 2 bath', 'active'),
(47, 'Regular Tent', 'Sleep out under the stars and enjoy the fresh air in this standard-sized camping tent.', 'Accommodations', 'Tent', 'ACC004', 5, '100 ', '14', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/tent-regular.jpg', '', '2', 'sleeps 1-2 | shared bath', 'active'),
(48, 'Large Tent', 'You\'ll have plenty of room to stretch out and get comfortable. Enjoy having your own mattress and soft rug flooring.', 'Accommodations', 'Tent', 'ACC005', 5, '500 ', '34', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/tent-large.jpg', '', '4', 'sleeps 2-4 | shared bath', 'active'),
(49, 'Deluxe Tent', 'Camp out in style with this deluxe tent that features its own loft and living area. The supporting structure and canopy ensure protection from all the elements.', 'Accommodations', 'Tent', 'ACC006', 5, '10,000 ', '119', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/tent-deluxe.jpg', '', '5', 'sleeps 5 | shared bath', 'active'),
(50, 'Regular Treehouse', 'Get up in the trees surrounding our campgrounds and enjoy the view. Features a living area and a bedroom.', 'Accommodations', 'Treehouse', 'ACC007', 3, '180,000 ', '64', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/treehouse-regular.jpg', '', '2', 'sleeps 2 | 1 bath', 'active'),
(51, 'Large Treehouse', 'Built right on a maple tree. Enjoy your own amenities including a small kitchen and bathroom', 'Accommodations', 'Treehouse', 'ACC008', 2, '250,000 ', '124', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/treehouse-large.jpg', '', '4', 'sleeps 2-4 | 1 bath', 'active'),
(52, 'Deluxe Treehouse', 'This treehouse really makes you feel together with nature as the branches extend though the house. Has all the amenities and its own loft.', 'Accommodations', 'Treehouse', 'ACC009', 2, '300,000 ', '194', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/treehouse-deluxe.jpg', '', '5', 'sleeps 5 | 1 bath', 'active'),
(53, 'Regular Tipi', 'What a better way to enjoy the Oconee campgrounds than in an authentic Native American accommodation.', 'Accommodations', 'Tipi', 'ACC010', 5, '2,300 ', '45', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/tipi-regular.jpg', '', '2', 'sleeps 1-2 | shared bath', 'active'),
(54, 'Large Tipi', 'Enjoy some extra space in your tipi with comfortable mattresses and access gas fire.', 'Accommodations', 'Tipi', 'ACC011', 5, '5,300 ', '69', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/tipi-large.jpg', '', '4', 'sleeps 2-4 | shared bath', 'active'),
(55, 'Deluxe Tipi', 'Live like a Native American in style with two beds, soft rug floor, and even your own canopy covered outdoor dining area.', 'Accommodations', 'Tipi', 'ACC012', 3, '8,500 ', '98', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/tipi-deluxe.jpg', '', '5', 'sleeps 5 | shared bath', 'active'),
(56, 'Week-long Detox', 'Full detox from daily activities. Camp activities include kayaking, wine & hammocks, lazy river tubing, and camp crafting.', 'Events', 'week', 'ENT001', 80, '300 ', '550 ', 'http://blog.eurekatent.com/wp-content/uploads/2013/03/20-Reasons-to-Love-Camping.jpg', '', '5', '', 'active'),
(57, 'Weekend Getaway', 'A condenced version of the Week-long Detox for those who cannot get away for an entire week. ', 'Events', 'weekend', 'ENT002', 60, '150 ', '300 ', 'http://www.active.com/Assets/Outdoors/360x240/Old-Shady-Pine-Memorial-Day-Camping.jpg', '', '3', '', 'active'),
(58, 'Team Competition Weekend', 'Bring your team out to compete against other organizations to discover who has the best.', 'Events', 'team', 'ENT003', 30, '45 ', '1600 ', 'http://www.beacons.co.uk/img/raft_dasa.jpg', '', '3', '', 'active'),
(59, 'Team Day Event', 'A single day for your team to bring better bonding and team building.', 'Events', 'team', 'ENT004', 20, '15 ', '600 ', 'http://www.cumulusoutdoors.com/Sites/Cumulus/library/images/Content-Corporate%20team%20building%20activities%20.JPG', '', '1', '', 'active'),
(60, 'Wine & Hammocks', 'A relaxing afternoon and evening in hammocks with red and white wine accompanied by live music.', 'Events', 'afternoon', 'ENT005', 40, '55 ', '100 ', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/wine-hammock.jpg', '', '0.5', '', 'active'),
(61, 'Lazy River Tubing', 'Spend a day drifting down a natural river while allowing your stress to drift away from you.', 'Events', 'day', 'ENT006', 20, '20 ', '40 ', 'https://scontent.cdninstagram.com/hphotos-xaf1/t51.2885-15/s640x640/e35/sh0.08/11420937_1635472936710470_1381704284_n.jpg', '', '1', '', 'active'),
(62, 'Paintball & Picnic Afternoon', 'Spend the afternoon competing in Paintball games then relax at the warrior\'s dinner with mede. Sign up as an individual or a group.', 'Events', 'afternoon', 'ENT007', 40, '40 ', '75 ', 'https://psmedia.playstation.com/is/image/psmedia/GregHastingsPainball2_FeaturedImage?TwoColumn_Legacy', '', '0.5', '', 'active'),
(63, 'Paintball & Picnic Full Day', 'From dawn until dunk, fight your friends and foe in an epic battle. Day includes lunch and dinner. Sign up as an individual or as a group.', 'Events', 'day', 'ENT008', 40, '60 ', '120 ', 'http://www.paintballguide.net/wp-content/uploads/2016/05/Best-Paintball-Gun-Reviews-4.jpg', '', '1', '', 'active'),
(64, 'Kayaking ', 'Kayak to our special lunch location while exploring the nature in the area. Dinner not included.', 'Events', 'day', 'ENT009', 20, '30 ', '60 ', 'http://www.sacstateaquaticcenter.com/paddling/paddling_images/KAYAK-MAIN-PAGE.jpg', '', '1', '', 'active'),
(65, 'Survival Weekend', 'Put your skills to the test with a weekend in the woods and limited supplies. Meals included.', 'Events', 'weekend', 'ENT010', 30, '50 ', '100 ', 'http://558706404.r.worldcdn.net/wp-content/uploads/2014/11/survival-camp-edit1-1280x720.jpg', '', '3', '', 'active'),
(70, 'Test 1', 'this is a test item for the add form', 'Events', 'sub test', 'ACO999', 3, '3.00', '5.00', 'http://localhost/ecommerce/A/products_add.php', '3 lbs', '4in', 'test stuff', 'removed'),
(71, 'test 2', 'this is test 2', 'Events', 'test cat 2', 'CLO500', 50, '500.93', '10.00', 'http://www.lettercount.com/', '3 oz', '5 feet', 'this is test of info', 'removed');

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
(5, 1, 1, 'Beautiful hat that does a great job of protecting you from the sun. Fantastic outdoor wear!', 5, '2016-11-12 12:12:47'),
(6, 3, 1, 'Nice hat that helped keep the sun out of my face, but it’s not that pretty.\r\n', 3, '2016-11-12 12:12:47'),
(7, 4, 2, 'The sun kept getting in my eyes even with this hat. Doesn’t look too bad though. \r\n', 3, '2016-11-12 12:12:47'),
(8, 5, 2, 'I bought this for my daughter but she lost it right away. Awful hat. Waste of money!\r\n', 2, '2016-11-12 12:12:47'),
(9, 6, 3, 'I love this shirt. I can show off my beautiful biceps with this shirt. Would buy again.\r\n', 5, '2016-11-12 12:12:47'),
(10, 7, 3, 'I like this shirt. Nice to wear when it’s hot out.\r\n', 4, '2016-11-12 12:12:47'),
(11, 8, 4, 'It feels weird to wear. Meh don’t get it. \r\n', 3, '2016-11-12 12:12:47'),
(12, 9, 4, 'Doesn’t look good. Doesn’t feel good\r\n', 2, '2016-11-12 12:12:47'),
(13, 10, 6, 'It looks awesome. Super great to wear and I haven’t taken it off all week.\r\n', 5, '2016-11-12 12:12:47'),
(14, 11, 6, 'This is pretty top notch. I got it for my husband and he just looks so delicious in it. Mmmmmm\r\n', 5, '2016-11-12 12:12:47'),
(15, 1, 7, 'I got this pair of pants when it looked like it was going to rain. I didn\'t bring any rain gear. But this pants worked out great for me. So grateful I bought it.\n', 4, '2016-11-12 12:12:47'),
(16, 3, 7, 'This pants really does help you stay dry. Very useful for keeping your intimate areas nice.\r\n', 4, '2016-11-12 12:12:47'),
(17, 4, 7, 'they look like plastic footsie pajamas. Am I the only one seeing this?\r\n', 2, '2016-11-12 12:12:47'),
(18, 5, 7, 'They fit great over my footsie pajamas, and kept them dry! Great purchase!\r\n', 5, '2016-11-12 12:12:47'),
(19, 6, 8, 'It may keep you dry but it feels really awful and uncomfortable. Effective in some ways I guess.\r\n', 3, '2016-11-12 12:12:47'),
(20, 7, 8, 'I mean it kind of works but it just looks so ugly. I regretted it as soon as I put them on.\r\n', 2, '2016-11-12 12:12:47'),
(21, 8, 9, 'Mmm this pants are so comfortable and do not get in the way when doing all of those outdoor activities at the camp.\r\n', 4, '2016-11-12 12:12:47'),
(22, 9, 9, 'This pair of pants isn’t that bad but I have so many of my own shorts so it doesn’t really stand out.\r\n', 2, '2016-11-12 12:12:47'),
(23, 10, 10, 'Wow these pants are great. What spectacular design. Looks beautiful and is streamlined for stuff I like to do.\r\n', 5, '2016-11-12 12:12:47'),
(24, 11, 10, 'Pretty decent pair of pants. I really enjoyed wearing them at camp. They were my go to pair.\r\n', 4, '2016-11-12 12:12:47'),
(25, 1, 10, 'I wear these every chance I get! they dry quick, and they look great on me!\r\n', 5, '2016-11-12 12:12:47'),
(26, 3, 10, 'Very sporty! It can also work as a bathing suit!\r\n', 5, '2016-11-12 12:12:47'),
(27, 10, 2, 'I love this hat so much. Truly wonderful!', 5, '2016-11-12 17:06:01'),
(28, 1, 11, 'Thick boots are useful for all the hikes you\'ll be making at camp. ', 4, '2016-11-16 18:38:15'),
(29, 3, 11, 'Ugly. Just so ugly. Ugh', 1, '2016-11-16 18:38:15'),
(30, 4, 12, 'I went on 2 hikes every day for a week. Wore these threw rain, mud, rivers, dirt, mountains, and a bunch of other crap. But they still feel great. Good boots.', 5, '2016-11-16 18:38:15'),
(31, 9, 12, 'I wore these on my hikes and while they didn\'t break they did feel pretty bad. So it\'s pretty average.', 3, '2016-11-16 18:38:15'),
(32, 10, 13, 'Why would anyone want to wear a jacket this ugly? The material it is made out of also feels awful. No one should buy this.', 1, '2016-11-16 18:39:30'),
(33, 11, 13, 'My mom bought this for me and I HATE it. She\'s the worst mom ever! I hate her!!!!!', 1, '2016-11-16 18:39:30'),
(34, 7, 14, 'Very pretty jacket and it helped me against the cold. I was so happy I had this jacket for my week at camp.', 4, '2016-11-16 18:40:48'),
(35, 11, 14, 'It helped protect me from the rain. I am forever grateful to this jacket. God Bless!', 5, '2016-11-16 18:40:48'),
(36, 5, 15, 'These swim trunks are really tight which is why I bought them for my boyfriend. We did a lot of swimming activities at the camp and he got to show off quite a bit. ', 5, '2016-11-16 18:42:02'),
(37, 14, 15, 'These swim trunks are really tight which is awful. I\'m already so fat and this pair of bathing suit makes me so self-conscious of my weight. The only reason why I wore these was because I forgot to bring my own bathing suit.', 2, '2016-11-16 18:42:02'),
(38, 5, 16, 'I love the adaptability of this sleeping bag. With it I am able to avoid getting too cold on a cold night or too hot on a warm night. Great design that fits any situation.', 5, '2016-11-16 18:42:47'),
(39, 6, 16, 'It can\'t be said just how useful this is. Different available thickness is useful to help regulate temperature. Afterall sometimes it gets hot with two people in a sleeping bag.', 4, '2016-11-16 18:42:47'),
(40, 8, 17, 'Best thing ever! I don\'t\' have to change to go to bed. I just can just sleep anywhere. I wore it for the whole trip and never had to take it off. Great!', 5, '2016-11-16 18:43:40'),
(41, 10, 17, 'This is the ugliest jacket I have ever seen. Who would be nasty enough to sleep with just a jacket protecting you from the dirty floor.', 1, '2016-11-16 18:43:40'),
(42, 7, 18, 'My friends were so jealous to see me use such a comfortable sleeping bag. If you want to be the star of your group make sure to grab this sleeping bag.', 4, '2016-11-16 18:47:30'),
(43, 11, 18, 'I mean it\'s a perfectly functional sleeping bag. But nothing to write home about really.', 2, '2016-11-16 18:47:30'),
(44, 10, 18, 'Omg, sooooo comfy! I felt like a warm snuggly sushi roll!~', 5, '2016-11-16 18:47:30'),
(45, 1, 18, 'I am currently sleeping in one and I can\'t wake up. Not sure if I want to. Definitely very nice tough.', 4, '2016-11-16 18:47:30'),
(46, 5, 19, 'I bought this for my wife. It\'s just so adorable seeing her sleeping in it. I love watching her sleep. ', 4, '2016-11-16 18:48:23'),
(47, 12, 19, 'This sleeping bag helped keep me warm and dry each night. So I am happy I used this sleeping bag.', 3, '2016-11-16 18:48:23'),
(48, 11, 20, 'Our tent didn\'t protect from the cold weather at all. Everyone was constantly freezing their butts off. I wish we had a thicker tent.', 1, '2016-11-16 18:49:38'),
(49, 10, 20, 'Not a particularly fantastic tent. The best I can say is that it is really easy to set up. But that\'s about it.', 2, '2016-11-16 18:49:38'),
(50, 4, 21, 'I\'m happy that we brought this tent with us. It was easy to setup and very spacious.', 4, '2016-11-16 18:50:36'),
(51, 14, 21, 'At night we would get really cold from the weather but that would change when we got into the tent. It was so well insulated and I\'m so thankful we bought it. ', 5, '2016-11-16 18:50:36'),
(52, 8, 22, 'Very functional, and durable! It was a lifesaver while I was hiking. I drank the whole thing by the time I got back home!', 4, '2016-11-16 18:51:40'),
(53, 9, 22, 'It tastes AWFUL. Everything I put in it tastes like plastic when you drink from it. Don\'t buy.', 1, '2016-11-16 18:51:40'),
(54, 3, 29, 'Not too comfy, but it was very convenient when I wanted a sit. :>', 4, '2016-11-16 18:53:21'),
(55, 13, 29, 'It broke after a couple of weeks after a bear sat on it, now I can\'t sit anywhere.', 2, '2016-11-16 18:53:21'),
(56, 1, 34, 'Comfy, and stylish. No complaints!', 4, '2016-11-16 18:54:13'),
(57, 14, 34, 'Polos are for dweebs.', 1, '2016-11-16 18:54:13'),
(58, 4, 44, 'They have great beds, but they have a real bad mosquito problem. Otherwise, great! I hate mosquitos.', 4, '2016-11-16 18:55:14'),
(59, 6, 44, 'I didn\'t buy one, I just released a bunch of mosquitos inside some dude\'s cabin. Hilarious, great source of entertainment.', 5, '2016-11-16 18:55:14'),
(60, 3, 47, 'Nothin better than the great outdoors! Just like the great old ones intended.', 5, '2016-11-16 18:56:09'),
(61, 13, 47, 'These walls are paper-thin! Also, no bathrooms???', 1, '2016-11-16 18:56:09'),
(62, 5, 50, 'As a monkey, I find the tree house very convenient. Swinging from trees is second nature for me, so I applaud the option!', 5, '2016-11-16 18:57:13'),
(63, 3, 50, 'I like it very much, comfy, but later I fell??? What happen??? :c', 4, '2016-11-16 18:57:13'),
(64, 6, 53, 'I found a squirrel in mine while I was away! Squirrels are my spirit animal!', 5, '2016-11-16 18:59:59'),
(65, 1, 53, 'Surprisingly cozy! I\'d say it was quite the experience!', 4, '2016-11-16 18:59:59'),
(66, 4, 62, 'This was such a nice time! Mede is a great way to wash down an afternoon of paintball. I gotta do this again.', 5, '2016-11-16 19:03:50'),
(67, 1, 62, 'Very fun! I just wish we had more time, I could keep going all day!', 4, '2016-11-16 19:03:50'),
(68, 1, 63, 'I was very tired by the time we got to the picnic, but it was great! I just wish it was for an afternoon or so.', 3, '2016-11-16 19:03:50'),
(69, 11, 63, 'Party all night long! I\'m gonna hurt in the morning, but who cares?!', 5, '2016-11-16 19:03:50'),
(70, 8, 23, 'Very nice, would buy 60 more', 5, '2016-11-16 19:06:19'),
(71, 6, 23, 'Held my drinks very well', 4, '2016-11-16 19:06:19'),
(72, 9, 25, 'Very nice, and comfy!', 4, '2016-11-16 19:09:23'),
(73, 5, 25, 'Atlas is stronk!', 5, '2016-11-16 19:09:23'),
(74, 1, 26, 'Kept my hammock dry! <3', 5, '2016-11-16 19:11:50'),
(75, 12, 27, 'This is a good hammock. Very hammock-y', 4, '2016-11-16 19:13:53'),
(76, 5, 28, 'Had a really great night on this!', 5, '2016-11-16 19:15:12'),
(77, 12, 30, 'It\'s a T-shirt, very basic attire', 3, '2016-11-16 19:16:14'),
(78, 7, 31, 'It\'s comfy and fits me well', 5, '2016-11-16 20:05:52'),
(79, 3, 32, 'The neck hole is waaay too big', 2, '2016-11-16 20:07:06'),
(80, 12, 33, 'It\'s really itchy >m<', 2, '2016-11-16 20:08:45'),
(82, 9, 44, 'I felt very at home here, nice experience ', 5, '2016-11-16 20:10:49'),
(83, 8, 35, 'my arms are too chilly now ', 2, '2016-11-16 20:15:29'),
(84, 6, 7, 'these suck!', 1, '2016-11-16 20:21:42'),
(85, 11, 36, 'This can keep my pants up, and the material is durable!', 4, '2016-11-16 20:29:04'),
(86, 6, 37, 'now the sun\'s not in my eyes all the time! I have sensitive eyes.', 5, '2016-11-16 20:31:00'),
(87, 8, 38, 'NOW DIRT AND CRUD IS IN MY BEER', 5, '2016-11-16 20:31:55'),
(88, 9, 39, 'Using my hands to carry stuff is hard, but now I can carry it with my back! c:', 5, '2016-11-16 20:36:45'),
(89, 5, 56, 'hello', 3, '2016-11-17 01:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
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
(1, 'Admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin', 'admin', 'admin@oconee.com', '4075551234', '555 Oconee Dr', 'Orlando', 'FL', 32826, 'US', 'admin', 'removed'),
(3, 'user', 'd41d8cd98f00b204e9800998ecf8427e', 'Steve', 'Jobs', 'user@oconee.com', '4075550987', '987 Oconee Dr.', 'Orlando', 'FL', 32826, 'US', 'user', 'active'),
(4, 'Admin', '34b11c30f4ccfff13c30534a6b0661a5', 'Dan', 'Nova', 'super@nova.com', '4073266682', '999 Supernova ct', 'Orlando', 'FL', 32849, 'US', 'admin', 'active'),
(5, 'Super', 'de01de8b5f40c45a497e173775f780a9', 'Nad', 'Avon', 'repus@avon.com', '4072866623', '000 Avonrepus Ct', 'Orlando', 'FL', 32894, 'US', 'privileged', 'active'),
(6, 'Admin2', 'd41d8cd98f00b204e9800998ecf8427e', 'Adam', 'Nister', 'admin2@nister.com', '4079323646', '222 Admin Cir', 'Tallahassee', 'FL', 56123, 'US', 'admin', 'active'),
(7, 'Admin3', '32cacb2f994f6b42183a1300d9a3e8d6', 'Adum', 'Nister', 'admin3@nister.com', '4073323646', '333 Admin Cir', 'Tallahassee', 'FL', 56123, 'US', 'admin', 'active'),
(8, 'Privileged2', '19feca35715b4e47c2831c3eeea624ab', 'Privi', 'Leged', 'privileged2@user.com', '4072222222', '222 Privileged St', 'Miami', 'FL', 48523, 'US', 'privileged', 'active'),
(9, 'Privileged3', '21e3f6b3ac4c49c149cd26042d5710f1', 'Privii', 'Legedd', 'privileged3@user.com', '4073333333', '333 Privileged St', 'Miami', 'FL', 48523, 'US', 'privileged', 'active'),
(10, 'User2', '7e58d63b60197ceb55a1c487989a3720', 'Usertwo', 'Two', 'user2@user2.com', '4078732222', '222 User Rd', 'Kissimmee', 'FL', 34723, 'US', 'user', 'active'),
(11, 'User3', '92877af70a45fd6a2ed7fe81e1236b78', 'User', 'Three', 'user3@user.com', '4078733333', '333 User Rd', 'Kissimmee', 'FL', 34723, 'US', 'user', 'active'),
(12, 'newuser', '0354d89c28ec399c00d3cb2d094cf093', 'User', 'New', 'new@user.com', '4073334444', '2548 New Road', 'Oviedo', 'FL', 32765, 'US', 'user', 'active'),
(13, 'sesTest', 'e80eded141e1295d694cd35cf2b8f675', 'Session', 'test', 'sesTest@test.com', '5555555555', '555 Oconee Drive', 'Orlando', 'FL', 55555, 'US', 'user', 'active'),
(14, 'Newuser2', '2e42fb99dfb563d785e3888fd2ceb14c', 'Newuser', 'Two', 'newuser@2.com', '4072222222', '222 Newuser lane', 'Mt. Dora', 'FL', 86286, 'US', 'user', 'active'),
(15, 'testuser', '5d9c68c6c50ed3d02a2fcf54f63993b6', 'test', 'testing', 'test@test.com', '5555555555', 'test street', 'test', 'CO', 55555, 'US', 'user', 'active');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `review_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
