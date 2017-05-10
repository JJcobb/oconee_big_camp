-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 05:25 AM
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
(1, 'Adventurous Explorer Hat', 'Made for warm-weather adventures, the Adventurous Explorer Hat shields your face and neck from the sun.', 'Camping Clothing', 'Hats', 'CLO452', 30, '11.23', '34.95', 'https://www.rei.com/media/93d18486-ea66-4df0-804d-f90b676ead94', '9 ounces', '1 ft. w', 'Unisex', 'removed'),
(2, 'Sunny Hike Hat', 'The Sunny Hike Hat is specifically designed to protect you from UV rays and keep you cool during warm-weather adventures.', 'Clothing', 'Hats', 'CLO812', 0, '4.75 ', '29.99 ', 'https://www.rei.com/media/2f234acf-939c-4d1e-a30e-087bf9e086e7', '6 ounces', '6 in.', 'Unisex', 'active'),
(3, 'Vector Dye Tank Top', 'Show off your gains in the Vector Dye Tank Top. This sleeveless performance tee lets you display your hard work and the unique, space dye fabric treatment takes your style to the next level.', 'Clothing', 'Shirts', 'CLO156', 55, '3.65 ', '19.99 ', 'http://www.dickssportinggoods.com/graphics/product_images/pDSP1-23269282v750.jpg', '10 ounces', 'varies', 'Men', 'active'),
(4, 'Helix Crew Shirt', '100% micro denier polyester engineered construction is designed to create air pockets for added moisture control and improved breathability, and to provide UV protection.', 'Clothing', 'Shirts', 'CLO725', 60, '5.75 ', '19.99 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/larger/91675.jpg', '12 ounces', 'varies', 'Men', 'active'),
(5, 'Dream Tank Top', 'The Strappy Tank Top is perfect for warm-weather running, with ultralight, ultra-breathable fabric that won''t weigh you down—no matter how hot it gets.', 'Clothing', 'Shirts', 'CLO363', 55, '3.16 ', '19.99 ', 'https://www.rei.com/media/60a32d25-cd36-417d-ba3c-e5ac94ea1e9a', '8 ounces', 'varies', 'Women', 'active'),
(6, 'Legend Short Sleeve', 'The Legend Short Sleeve is an essential for any sport or training style. This training top is constructed out of fabric that wicks sweat and moisture away so you stay cool and comfortable throughout your workout.', 'Clothing', 'Shirts', 'CLO668', 60, '4.68 ', '19.99 ', 'http://www.dickssportinggoods.com/graphics/product_images/pDSP1-20251564v750.jpg', '10 ounces', 'varies', 'Women', 'active'),
(7, 'Resistant Nature Pants', 'Packable rain protection that pulls on easily over boots, the Resistant Naturel Pants take a responsible step forward with a 100% recycled nylon face; waterproof/breathable performance reliability.', 'Clothing', 'Pants', 'CLO245', 30, '6.83 ', '29.99 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/alt/M0331_alt1.jpg', '18 ounces', 'varies', 'Men', 'active'),
(8, 'Zip Rain Pants', 'The technical, waterproof womens Zip Rain Pants let you stay out when the weather turns ugly, while half-zip legs let you get them on or off easily over your boots.', 'Clothing', 'Pants', 'CLO943', 30, '6.37 ', '29.99 ', 'https://www.rei.com/media/6590b639-c54a-4ad2-92c2-1adeab99e3c1', '15 ounces', 'varies', 'Women', 'active'),
(9, 'Mojo Shorts', 'Great for climbing, yoga and other outdoor activities, these stylish shorts are durable and designed for smooth, unrestricted movement.', 'Events', 'Shorts', 'CLO358', 30, '4.70', '23.99', 'https://www.rei.com/media/6d5c284f-90e2-4e92-ba8e-0153dd961330', '14 ounces', 'varies', 'Men', 'active'),
(10, 'Screenline Shorts', 'Designed for strong performance on the trail, the women''s Screeline Shorts offer stretch, durability and quick-drying comfort mile after mile.', 'Clothing', 'Shorts', '', 30, '4.35 ', '23.99 ', 'https://www.rei.com/media/56a31bae-b9ac-486a-8d30-e5ec52b557b9', '13 ounces', 'varies', 'Women', 'active'),
(11, 'Edge Hiking Boots', 'With instant comfort and the perfect fit, the Merrell Moab Edge Hiking Boots is the Moab you know and love, now with a breathable, athletic mesh upper.', 'Clothing', 'Shoes', 'CLO952', 15, '23.67 ', '59.99 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/larger/F0381sla.jpg', '20 ounces', 'varies', 'Men', 'active'),
(12, 'Hard Hiking Shoes', 'The mid-height, waterproof Hard Hiking Boots are the perfect match for traversing creek beds or hiking through downpours. For the weekend warrior or veteran hiker in search of a durable, comfortable, supportive boot in all weather conditions, look no further than the Moab.', 'Clothing', 'Shoes', 'CLO438', 15, '20.41 ', '59.99 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/larger/10637gry.jpg', '18 ounces', 'varies', 'Women', 'active'),
(13, 'Westfall Stretch Jacket', 'The Westfall Stretch Jacket has just the right amount of insulation, combined with a highly breathable, and highly water repellent shell.', 'Clothing', 'Jackets', 'CLO956', 10, '14.67 ', '55.95 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/larger/M0406blk.jpg', '17 ounces', 'varies', 'Men', 'active'),
(14, 'Hill Jacket', 'The highly breathable and water repellent Hill Jacket is critically seam taped and filled with Whisper fill insulation, for warmth.', 'Clothing', 'Jackets', 'CLO238', 10, '12.67 ', '55.95 ', 'https://www.campmor.com/wcsstore/Campmor/static/images/items/larger/L0444pac.jpg', '15 ounces', 'varies', 'Women', 'active'),
(15, 'Longs Swim Trunks', 'These up-for-anything Longs Swim Trunks are made of sturdy Supplex&reg; nylon and have a quick-drying mesh liner and elasticized waistband for excellent performance both in and out of the water.', 'Clothing', 'Swimwear', 'CLO424', 25, '4.82 ', '19.99 ', 'https://www.rei.com/media/eb5de9c4-f375-4bd3-8b57-99df702e82bb', '14 ounces', 'varies', 'Men', 'active'),
(16, 'Ticla Besito Sleeping Bag', 'This clever car-camping sleeping bag offers different thicknesses of insulation on each side so you can adjust its warmth to the temperature outside.', 'Equipment', 'Sleeping Bags', 'EQU001', 4, '70.00 ', '100.00 ', 'https://www.rei.com/media/f7577b06-6338-44ae-b120-15d0ca28e516', '3 lbs', 'L', '', 'active'),
(17, 'evrgrn  Crash Sack', 'This wearable bag combines the warmth of a legit sleeping bag with indulgent comfort of the biggest puffy jacket you could own. Trust us, it makes getting out of your tent to make coffee a lot easier.', 'Equipment', 'Sleeping Bags', 'EQU002', 4, '50.00 ', '99.95 ', 'https://www.rei.com/media/f9915f8b-b91f-4049-9abd-5f50b96bd86f', '2 lbs. 7 oz.', 'L', '', 'active'),
(18, 'REI  Trail Pod 29 Sleeping Bag', 'Perfect for car camping and nights spent at the trailhead, the spacious Trail Pod sleeping bag is designed with warmth and comfort as its top priorities.', 'Equipment', 'Sleeping Bags', 'EQU003', 4, '70.00 ', '99.95 ', 'https://www.rei.com/media/43a4ab0d-733b-46e7-b149-eee9f7292693', '3 lbs. 2 oz.', 'L', '', 'active'),
(19, 'Marmot Trestles 30 Sleeping Bag - Womens', 'Cold, damp weather calls for a synthetic insulated mummy bag. This women''s specific bag offers lofty warmth, low bulk and excellent packability, and continues to insulate even if wet.', 'Equipment', 'Sleeping Bags', 'EQU004', 0, '80.00 ', '109.00 ', 'https://www.rei.com/media/7ac1bc55-c6e1-4ca2-94c8-0fa3935a374d', '3 lbs. 8 oz.', 'L', '', 'active'),
(20, 'Kelty  Discovery 4 Tent', 'This durable tent has a simple 2-pole design that is easy to set up in any weather, at any time. Its roomy interior provides 3-season livability for 4 campers.', 'Equipment', 'Tents', 'EQU005', 6, '110.00 ', '149.95 ', 'https://www.rei.com/media/936bdcf5-4faf-47fd-ad0f-3f6e876ca037', '10 lbs. 7 oz.', '4-person', '', 'active'),
(21, 'Kelty  Trail Ridge 4 Tent with Footprint', 'The Trail Ridge 4 tent combines steep mesh walls with 2 doors and 2 vestibules to provide ample space and livability. Setup couldn''t be quicker with continuous pole sleeves and color coded clips.', 'Equipment', 'Tents', 'EQU006', 5, '220.00 ', '289.95 ', 'https://www.rei.com/media/15c8fead-48b1-433e-984d-a2242b0621d7', '10 lbs. 14 oz.', '4-person', '', 'active'),
(22, 'Osprey   Hydraulics Reservoir - 3 Liters', 'The 3-liter Osprey Hydraulics reservoir is ideal for large-volume packs and long-duration activities.', 'Equipment', 'Water Containers', 'EQU007', 10, '30.00 ', '36.00 ', 'https://www.rei.com/media/2c70a109-1e92-402b-b9d3-6d89fba2167d', '10.8 ounces', '3 liter', '', 'active'),
(23, 'CamelBak  Chute Water Bottle - 50 fl. oz.', 'At 1.5 liters, this is a big one. In fact, it''s the biggest water bottle CamelBak makes. The rugged, leakproof Chute bottle has a high-flow spout that makes it easy to chug or pour without spilling.', 'Equipment', 'Water Containers', 'EQU008', 10, '10.00 ', '16.00 ', 'https://www.rei.com/media/c89fb2c8-05ab-4449-9322-3eac8710e696', '7.6 ounces', '50 fl ounces', '', 'active'),
(24, 'Black Diamond  Spot Headlamp', 'Meet the headlight that can do it all. It''s lightweight, superbright, dimmable and delivers multiple modes for effective illumination while hiking, climbing, skiing or embarking on other adventures.', 'Equipment', 'Lights', 'EQU009', 8, '30.00 ', '39.95 ', 'https://www.rei.com/media/262b7d69-0cf2-4290-aab2-45835671bdb5', '3.25 ounces', '', '', 'active'),
(25, 'ENO   Atlas Hammock Suspension System', 'In Greek mythology, Atlas was strong enough to shoulder the weight of the world on his back. This hammock suspension system can''t do that, but it can support 400 lbs. and makes setup simple.', 'Equipment', 'Hammocks', 'EQU010', 4, '20.00 ', '29.95 ', 'https://www.rei.com/media/f6c3d08d-928e-4bf3-ac8a-faa0e3ec5421', '11 ounces', '', '', 'active'),
(26, 'ENO  ProFly Hammock Rain Tarp', 'Don''t be left out in the rain! Rest easy in your hammock with this lightweight, ripstop rain tarp over your head.', 'Equipment', 'Hammocks', 'EQU011', 4, '60.00 ', '79.95 ', 'https://www.rei.com/media/3e2948bc-4630-4453-8bb7-247fe6505ac5', '1 lb. 6 oz.', '', '', 'active'),
(27, 'ENO  Double Deluxe Hammock', 'The Double Deluxe hammock is 26 in. wider than the popular DoubleNest hammock, providing ample space for 2 or more people to sway in comfort on a summer day.', 'Equipment', 'Hammocks', 'EQU012', 4, '64.00 ', '84.95 ', 'https://www.rei.com/media/725d917b-c760-4032-b763-acd8bc675b60', '1 lb. 12 oz.', 'double', '', 'active'),
(28, 'Klymit  Static V Luxe Insulated Sleeping Pad', 'Representing a landmark in sleeping pad comfort, the Static V Luxe insulated sleeping pad uses a V-chamber design to limit air movement and has a massive 30-in. width for plenty of rolling room.', 'Equipment', 'Pads', 'EQU013', 4, '100.00 ', '119.95 ', 'https://www.rei.com/media/628b2563-0755-4a07-8b6a-d6169902453a', '2 lbs. 4 oz.', '', '', 'active'),
(29, 'REI  Flex Lite Chair', 'This supportive, easy-to-pack chair features a deep, comfortable seat. Its light weight works well for backpackers and the low height makes it a smart choice for concertgoers.', 'Equipment', 'Chairs', 'EQU014', 10, '55.00 ', '79.50 ', 'https://www.rei.com/media/2728dfaa-97a4-4dad-bb87-4ebcd4a766a0', '1 lb. 10 oz.', '', '', 'active'),
(30, 'T-shirt', 'Our comfy, loose fitting shirt.', 'Merchandise', 'shirts', 'MER001', 40, '15.20 ', '18.99 ', 'http://rlv.zcache.com/mens_basic_t_shirt-r08f1765aa35248d6ad6408715266c156_jg4de_324.jpg', '450g', 'small', '', 'active'),
(31, 'Fitted T-shirt', 'Our sporty, athletic cut shirt.', 'Merchandise', 'shirts', 'MER002', 35, '15.20 ', '18.99 ', 'http://rlv.zcache.com/mens_performance_t_shirt-r7cf8c049eb964c89867f2a0e7b0daa1a_8nhd7_324.jpg', '450g', 'small', '', 'active'),
(32, 'Womens T-shirt', 'Our relaxed fit camp shirt or girls.', 'Merchandise', 'shirts', 'MER003', 40, '15.20 ', '18.99 ', 'http://rlv.zcache.com/womens_basic_t_shirt-r03d567e694e94ed1b27c9654fcbd63c9_jg95v_324.jpg', '450g', 'small', '', 'active'),
(33, 'Hoodie', 'Our warm camp hoodie for cold nights.', 'Merchandise', 'shirts', 'MER004', 20, '30.40 ', '37.99 ', 'http://rlv.zcache.com/womens_basic_hoodie-r6ee5658c0990416fb0ff655e03aedcf4_jg517_324.jpg', '950g', 'small', '', 'active'),
(34, 'Polo', 'Our presentable and sporty polo shirt.', 'Merchandise', 'shirts', 'MER005', 25, '20.80 ', '25.99 ', 'http://rlv.zcache.com/make_your_own_mens_jersey_polo-rd87712b3021a4794894e4354f55e4e6f_vj78m_324.jpg', '450g', 'small', '', 'active'),
(35, 'Tank Top', 'Our flexible, cotton camp tank top.', 'Merchandise', 'shirts', '', 30, '16.80 ', '20.99 ', 'http://rlv.zcache.com/design_your_own_jersey_tank_top-r5badfb6f81514b9ba059ff03ea9e4d7e_jyr6d_324.jpg', '400g', 'small', '', 'active'),
(36, 'Belt', 'Our camp belt.', 'Merchandise', 'accessories', 'MER007', 25, '16.80 ', '20.99 ', 'http://tse4.mm.bing.net/th?id=OIP.M921f79527d48bbbf5e3517d9dd494c21o0&pid=15.1', '300g', 'very small', '', 'active'),
(37, 'Baseball Cap', 'Keep cool with our caps!', 'Merchandise', 'accessories', 'MER008', 30, '12.80 ', '15.99 ', 'http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/baseball-cap.jpg', '150g', 'very small', '', 'active'),
(38, 'Flip Flops w/ Bottle Opener', 'Relax and open up a cold one with our camp flip flops, each with a built-in bottle opener.', 'Merchandise', 'accessories', 'MER009', 20, '36.00 ', '44.99 ', 'https://images-na.ssl-images-amazon.com/images/I/31OHKcm5WGL._AC_UL260_SR200,260_.jpg', '150g', 'small', '', 'active'),
(39, 'Backpack', 'Carry supplies like a pro with our camp backpacks.', 'Merchandise', 'bags', 'MER010', 25, '28.00 ', '34.99 ', 'http://rlv.zcache.com/high_sierra_backpack_red_backpack-r56090968af6d45b59c1d9dfb76b0a5d2_j7aab_324.jpg?rlvnet=1', '950g', 'medium', '', 'active'),
(40, 'Laundry Bags', 'Keep your dirty clothes in our camp laundry bag!', 'Merchandise', 'bags', 'MER011', 50, '8.00 ', '9.99 ', 'https://images-na.ssl-images-amazon.com/images/I/41Dc2IKYnNL._AC_UL260_SR200,260_.jpg', '90g', 'small', '', 'active'),
(41, 'Tote', 'Our camp totebag, perfect for storing your lunches.', 'Merchandise', 'bags', 'MER012', 40, '8.00 ', '9.99 ', 'http://rlv.zcache.com/custom_budget_tote_bag-rf369864afab3412497be3519c8884a22_v9w6h_8byvr_324.jpg', '100g', 'small', '', 'active'),
(42, 'Blankets', 'Cozy up with our comfy camp throw blanket! ', 'Merchandise', 'misc', 'MER013', 25, '28.00 ', '34.99 ', 'http://rlv.zcache.com/custom_throw_blanket-r036684cd2b59436db36a494d6d8216c7_zikrk_324.jpg?rlvnet=1', '1600g', 'medium', '', 'active'),
(43, 'Stickers', 'A sticky piece of paper with our camp logo on it.', 'Merchandise', 'misc', 'MER014', 1000, '0.10 ', '0.50 ', 'http://rlv.zcache.com/personalized_round_stickers-re3384eb7f17c420ca4add5ff70b0f388_v9waf_8byvr_324.jpg', '1g', 'very very small', '', 'active'),
(44, 'Regular Cabin', 'Cozy cabin with a bunk bed, small kitchen, and bathroom. Front porch great for relaxing any time of day.', 'Accommodations', 'Cabin', 'ACC001', 5, '175,000 ', '59', '//i.imgur.com/EIOUqAq.jpg', '', '2', 'sleeps 2 | 1 bath', 'active'),
(45, 'Large Cabin', 'Features two full beds, kitchen, and bathroom. Enjoy yourself with room to stretch out in the spacious living area.', 'Accommodations', 'Cabin', 'ACC002', 5, '250,000 ', '89', '//i.imgur.com/zVExhUD.jpg', '', '4', 'sleeps 2-4 | 1 bath', 'active'),
(46, 'Deluxe Cabin', 'Up to five people can enjoy the luxury of this cabin with two full beds, full kitchen, and two bathrooms. There''s even a loft that sleeps one and provides a great place to hide away.  ', 'Accommodations', 'Cabin', 'ACC003', 5, '350,000 ', '124', '//i.imgur.com/jdy9ixa.jpg', '', '5', 'sleeps 5 | 2 bath', 'active'),
(47, 'Regular Tent', 'Sleep out under the stars and enjoy the fresh air in this standard-sized camping tent.', 'Accommodations', 'Tent', 'ACC004', 5, '100 ', '14', '//i.imgur.com/z4xxdIc.jpg', '', '2', 'sleeps 1-2 | shared bath', 'active'),
(48, 'Large Tent', 'You''ll have plenty of room to stretch out and get comfortable. Enjoy having your own mattress and soft rug flooring.', 'Accommodations', 'Tent', 'ACC005', 5, '500 ', '34', '//i.imgur.com/vxbxhUx.jpg', '', '4', 'sleeps 2-4 | shared bath', 'active'),
(49, 'Deluxe Tent', 'Camp out in style with this deluxe tent that features its own loft and living area. The supporting structure and canopy ensure protection from all the elements.', 'Accommodations', 'Tent', 'ACC006', 5, '10,000 ', '119', '//i.imgur.com/EbclXDt.jpg', '', '5', 'sleeps 5 | shared bath', 'active'),
(50, 'Regular Treehouse', 'Get up in the trees surrounding our campgrounds and enjoy the view. Features a living area and a bedroom.', 'Accommodations', 'Treehouse', 'ACC007', 3, '180,000 ', '64', '//i.imgur.com/Jd5MlLB.jpg', '', '2', 'sleeps 2 | 1 bath', 'active'),
(51, 'Large Treehouse', 'Built right on a maple tree. Enjoy your own amenities including a small kitchen and bathroom', 'Accommodations', 'Treehouse', 'ACC008', 2, '250,000 ', '124', '//i.imgur.com/Drsu69r.jpg', '', '4', 'sleeps 2-4 | 1 bath', 'active'),
(52, 'Deluxe Treehouse', 'This treehouse really makes you feel together with nature as the branches extend though the house. Has all the amenities and its own loft.', 'Accommodations', 'Treehouse', 'ACC009', 2, '300,000 ', '194', '//i.imgur.com/bYNqHKN.jpg', '', '5', 'sleeps 5 | 1 bath', 'active'),
(53, 'Regular Tipi', 'What a better way to enjoy the Oconee campgrounds than in an authentic Native American accommodation.', 'Accommodations', 'Tipi', 'ACC010', 5, '2,300 ', '45', '//i.imgur.com/dh8JMA6.jpg', '', '2', 'sleeps 1-2 | shared bath', 'active'),
(54, 'Large Tipi', 'Enjoy some extra space in your tipi with comfortable mattresses and access gas fire.', 'Accommodations', 'Tipi', 'ACC011', 5, '5,300 ', '69', '//i.imgur.com/bAO7niI.jpg', '', '4', 'sleeps 2-4 | shared bath', 'active'),
(55, 'Deluxe Tipi', 'Live like a Native American in style with two beds, soft rug floor, and even your own canopy covered outdoor dining area.', 'Accommodations', 'Tipi', 'ACC012', 3, '8,500 ', '98', '//i.imgur.com/wmLXcN8.jpg', '', '5', 'sleeps 5 | shared bath', 'active'),
(56, 'Week-long Detox', 'Full detox from daily activities. Camp activities include kayaking, wine & hammocks, lazy river tubing, and camp crafting.', 'Events', 'week', 'ENT001', 80, '300 ', '550 ', 'http://blog.eurekatent.com/wp-content/uploads/2013/03/20-Reasons-to-Love-Camping.jpg', '', '5', '', 'active'),
(57, 'Weekend Getaway', 'A condenced version of the Week-long Detox for those who cannot get away for an entire week. ', 'Events', 'weekend', 'ENT002', 60, '150 ', '300 ', 'http://www.active.com/Assets/Outdoors/360x240/Old-Shady-Pine-Memorial-Day-Camping.jpg', '', '3', '', 'active'),
(58, 'Team Competition Weekend', 'Bring your team out to compete against other organizations to discover who has the best.', 'Events', 'team', 'ENT003', 30, '45 ', '1600 ', 'http://www.beacons.co.uk/img/raft_dasa.jpg', '', '3', '', 'active'),
(59, 'Team Day Event', 'A single day for your team to bring better bonding and team building.', 'Events', 'team', 'ENT004', 20, '15 ', '600 ', 'http://www.cumulusoutdoors.com/Sites/Cumulus/library/images/Content-Corporate%20team%20building%20activities%20.JPG', '', '1', '', 'active'),
(60, 'Wine & Hammocks', 'A relaxing afternoon and evening in hammocks with red and white wine accompanied by live music.', 'Events', 'afternoon', 'ENT005', 40, '55 ', '100 ', '//i.imgur.com/vCiRdNO.jpg', '', '0.5', '', 'active'),
(61, 'Lazy River Tubing', 'Spend a day drifting down a natural river while allowing your stress to drift away from you.', 'Events', 'day', 'ENT006', 20, '20 ', '40 ', 'https://scontent.cdninstagram.com/hphotos-xaf1/t51.2885-15/s640x640/e35/sh0.08/11420937_1635472936710470_1381704284_n.jpg', '', '1', '', 'active'),
(62, 'Paintball & Picnic Afternoon', 'Spend the afternoon competing in Paintball games then relax at the warrior''s dinner with mede. Sign up as an individual or a group.', 'Events', 'afternoon', 'ENT007', 40, '40 ', '75 ', 'https://psmedia.playstation.com/is/image/psmedia/GregHastingsPainball2_FeaturedImage?TwoColumn_Legacy', '', '0.5', '', 'active'),
(63, 'Paintball & Picnic Full Day', 'From dawn until dunk, fight your friends and foe in an epic battle. Day includes lunch and dinner. Sign up as an individual or as a group.', 'Events', 'day', 'ENT008', 40, '60 ', '120 ', 'http://www.paintballguide.net/wp-content/uploads/2016/05/Best-Paintball-Gun-Reviews-4.jpg', '', '1', '', 'active'),
(64, 'Kayaking ', 'Kayak to our special lunch location while exploring the nature in the area. Dinner not included.', 'Events', 'day', 'ENT009', 20, '30 ', '60 ', 'http://www.sacstateaquaticcenter.com/paddling/paddling_images/KAYAK-MAIN-PAGE.jpg', '', '1', '', 'active'),
(65, 'Survival Weekend', 'Put your skills to the test with a weekend in the woods and limited supplies. Meals included.', 'Events', 'weekend', 'ENT010', 30, '50 ', '100 ', 'http://558706404.r.worldcdn.net/wp-content/uploads/2014/11/survival-camp-edit1-1280x720.jpg', '', '3', '', 'active'),
(70, 'Test 1', 'this is a test item for the add form', 'Events', 'sub test', 'ACO999', 3, '3.00', '5.00', 'http://localhost/ecommerce/A/products_add.php', '3 lbs', '4in', 'test stuff', 'active'),
(71, 'test 2', 'this is test 2', 'Camping Clothing', 'test cat 2', 'CLO500', 50, '500.93', '10.00', 'http://www.lettercount.com/', '3 oz', '5 feet', 'this is test of info', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
