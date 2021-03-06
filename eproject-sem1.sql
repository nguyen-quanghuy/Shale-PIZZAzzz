-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 11:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject-sem1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `permission` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `permission`, `user_name`, `password`, `updated_at`, `created_at`) VALUES
(1235, 'Owner', 'ThangNguyen', '7c4a8d09ca3762af61e59520943dc26494f8941b5a562703441846cfdf137b5b5e4d806ba148a571', NULL, NULL),
(1236, 'Owner', 'AnNguyen', '7c4a8d09ca3762af61e59520943dc26494f8941b5a562703441846cfdf137b5b5e4d806ba148a571', NULL, NULL),
(1237, 'Admin', 'hello', '7c4a8d09ca3762af61e59520943dc26494f8941b5a562703441846cfdf137b5b5e4d806ba148a571', NULL, NULL),
(1238, 'Owner', 'test3', '7c4a8d09ca3762af61e59520943dc26494f8941b5a562703441846cfdf137b5b5e4d806ba148a571', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_price` float DEFAULT NULL,
  `cat_image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_description` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_combo`
--

CREATE TABLE `tbl_combo` (
  `id` int(11) NOT NULL,
  `combo_img` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_combo`
--

INSERT INTO `tbl_combo` (`id`, `combo_img`, `description`, `price`, `status`) VALUES
(2, '1594868837_636188481_1.jpg', 'combo-weekend special', 20, 'Expired');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delivery`
--

CREATE TABLE `tbl_delivery` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `phone_numbers` int(11) DEFAULT NULL,
  `store_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_code` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_delivery`
--

INSERT INTO `tbl_delivery` (`id`, `first_name`, `last_name`, `email`, `id_user`, `phone_numbers`, `store_name`, `customer_address`, `comment`, `order_code`) VALUES
(41, 'nguyen', 'huy', 'nguyenhuyabc2k@gmail.com', 468, 213456, NULL, 'Vuong Thua Vu-Khuong Trung-Ha Noi', '123456', 59),
(50, 'thang', 'nguyen', 'gras@gmail.com', 468, 1234567891, 'Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh', NULL, 'dfsd', 69),
(51, 'nguyen', 'huy', 'nguyenhuyabc2k@gmail.com', 468, 213456, NULL, 'Xâm Hồ-Khuong Trung-Ha Noi', 'gchgf', 70),
(52, 'nguyen', 'huy', 'nguyenhuyabc2k@gmail.com', 468, 123456, 'Choose a store to receive your order', NULL, 'ss', 71),
(53, 'nguyen', 'huy', 'nguyenhuyabc2k@gmail.com', 468, 123456, 'Choose a store to receive your order', NULL, '34234', 72),
(54, 'Nguyễn', 'Huy', 'nguyenhuyabc2k@gmail.com', 468, 213456, NULL, 'Vuong Thua Vu-Khuong Trung-Ha Noi', 'this is Test', 73),
(55, 'Nguyễn', 'Huy', 'nguyenhuyabc2k@gmail.com', 468, 987366110, NULL, 'Vuong Thua Vu-Khuong Trung-Hà Nội', 'ojmk', 74),
(56, 'Nguyễn', 'Huy', 'nguyenhuyabc2k@gmail.com', 487, 987366110, NULL, 'Vuong Thua Vu-Khuong Trung-Hà Nội', 'This is Test', 77);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `img_description` varchar(200) DEFAULT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `img`, `img_description`) VALUES
(7, '1594865330_1706490104_avatar.jpeg', NULL),
(8, '1594868913_896437039_2.jpg', 'perfect pizza');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_details` int(11) NOT NULL,
  `date_create` datetime DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `id_user`, `id_details`, `date_create`, `status`) VALUES
(59, 468, 51, NULL, 'vip'),
(68, 468, 60, NULL, 'pending'),
(69, 468, 61, NULL, 'pending'),
(70, 468, 62, NULL, 'friendly member'),
(75, 487, 67, NULL, 'pending'),
(76, 487, 68, NULL, 'pending'),
(77, 487, 69, NULL, 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id` int(11) NOT NULL,
  `prd_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id`, `prd_name`, `quantity`, `total_price`) VALUES
(51, 'SEAFOOD DELUXE,Brown coffee,Milk shake', 4, 25),
(60, 'Epic Rainbow Cake,Doberge Cake', 2, 14),
(61, 'Epic Rainbow Cake,Doberge Cake', 2, 14),
(62, 'Double-Garlic & Herb Bread,CHEESY BITES TRIO SHRIMP,PIZZA 4 CHEESE,SEAFOOD PESTO', 10, 80),
(63, 'PIZZA 4 CHEESE', 1, 8),
(64, 'PIZZA 4 CHEESE,CHEESY BITES TRIO SHRIMP,SEAFOOD DELUXE,SEAFOOD PESTO,OCEAN DELIGHT', 6, 54),
(65, 'CHEESY BITES TRIO SHRIMP,SEAFOOD DELUXE,HAWAIIAN PARADISE', 3, 32),
(66, 'PIZZA 4 CHEESE', 2, 16),
(67, 'PIZZA 4 CHEESE,CHEESY BITES TRIO SHRIMP', 2, 17),
(68, 'PIZZA 4 CHEESE,CHEESY BITES TRIO SHRIMP', 2, 17),
(69, 'PIZZA 4 CHEESE,CHEESY BITES TRIO SHRIMP', 2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `menu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prd_img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `dish_name` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `sold` float DEFAULT NULL,
  `inventory` double NOT NULL,
  `customer_reviews` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `menu`, `prd_img`, `cat_id`, `dish_name`, `price`, `sold`, `inventory`, `customer_reviews`) VALUES
(17, 'pizza', '1589551868_1739024570_V1.png', 1, 'PIZZA 4 CHEESE', 8, 200, 100, 'Taste like chicken'),
(18, 'pizza', '1589552222_1195760323_V2.png', 1, 'CHEESY BITES TRIO SHRIMP', 9, NULL, 100, 'Best with beer'),
(19, 'pizza', '1589552320_203753091_V3.png', 1, 'SEAFOOD DELUXE', 9, NULL, 100, 'Almost perfect'),
(20, 'preminum', '1589552380_1468727117_V4.png', 1, 'SUPER SUPREME', 10, NULL, 100, 'Nothing to complain'),
(21, 'pizza', '1589552475_318866219_V5.png', 1, 'SEAFOOD PESTO', 8, NULL, 100, 'Like the first love in rainy day'),
(22, 'preminum', '1589552559_662166398_V6.png', 1, 'SUPREME', 11, NULL, 100, 'Clumsy love'),
(23, 'pizza', '1589552656_208777355_V7.png', 1, 'OCEAN DELIGHT', 12, NULL, 100, 'Bring ocean to your mouth'),
(24, 'pizza', '1589552723_562593966_V11.png', 2, 'SUPREME MEAT LOVER\'S', 14, NULL, 100, 'First kiss from crystal maiden'),
(25, 'pizza', '1589552872_508925465_H9.jpg', 2, 'CHICKEN SUPREME', 14, NULL, 100, 'More protein than beef 11 time'),
(28, 'pizza', '1589553220_150326650_v13.png', 1, 'CHEESE LOVER’S', 10, NULL, 100, 'Cheese lover\'s for cheese lover\'s'),
(27, 'preminum', '1589553135_1185640104_v12.png', 2, 'HAWAIIAN PARADISE', 14, NULL, 100, 'Never trust commercial?? You have to think again!!!'),
(29, 'garlic breads', '1589553458_420032847_1.jpg', 3, 'Double-Garlic & Herb Bread', 7, NULL, 100, 'Good for health'),
(30, 'garlic breads', '1589553708_1008758410_2.jpg', 3, 'Roasted Garlic Cheesy Bread', 5, NULL, 100, 'Bake your own bread or chop up a store-bought loaf for this tasty cheese'),
(31, 'garlic breads', '1589553748_1966478009_3.jpg', 3, 'Asiago Herb Hoagie Rolls', 6, NULL, 100, 'Imagine the smell in your kitchen when these babies are in the oven. Yes please!'),
(32, 'garlic breads', '1589553838_1885190516_4.jpg', 3, '. Caprese Garlic Bread', 6, NULL, 100, 'Here’s a two-ingredient addition that transforms your garlic bread tenfold'),
(33, 'garlic breads', '1589554008_278258767_5.jpg', 3, 'Garlic Cheddar Swirl Brioche Rolls', 8, NULL, 100, 'Try this unique way to eat bread'),
(34, 'garlic breads', '1589554292_172188745_6.jpg', 3, 'Roasted Garlic, Sun-Dried Tomato + Basil Filled Pane Bianco:', 7, NULL, 100, 'Perfect'),
(35, 'garlic breads', '1589554333_832547195_8.jpg', 3, 'Garlic + Cheddar Bay Biscuits', 11, NULL, 100, 'The cheese and bread become one… so good'),
(36, 'garlic breads', '1589555194_748199081_9.jpg', 3, 'Mushroom + Gruyere Bruschetta', 9, NULL, 100, 'The nutty gruyere, the earthy mushrooms… this duo couldn’t possibly get any better.'),
(37, 'garlic breads', '1589555245_1381287296_10.jpg', 3, 'Garlic Beer Pita Bread', 9, NULL, 100, 'Yup, this pita bread has beer in it — a delicious wheat beer, to be exact'),
(38, 'garlic breads', '1589555287_825810529_12.jpg', 3, 'Cheesy Stuffed Garlic Bread', 8, NULL, 100, 'Party-perfect, and ready to go'),
(39, 'pizza sandwiches', '1589556283_2065470709_1.jpg', 4, 'Philly Cheesesteak', 11, NULL, 100, 'Papa\'s signature dough stuffed with tender steak that melts in your mouth'),
(40, 'pizza sandwiches', '1589556482_1744077887_2.jpg', 4, 'Grilled BBQ Chicken & Bacon', 14, NULL, 100, 'I\'m not gonna lie. You mút try it once'),
(41, 'pizza sandwiches', '1589556536_657717306_3.jpg', 4, 'Meatball & Pepperoni', 12, NULL, 100, 'The ultimate pizza sandwich with spicy pepperoni,'),
(42, 'pizza sandwiches', '1589556606_1444147998_4.jpg', 4, 'Italian', 9, NULL, 100, 'A beautiful combination of Papa\'s own salami, sausage, banana peppers'),
(43, 'pizza sandwiches', '1589556706_1236404346_5.jpg', 4, 'Black Forest Ham', 10, NULL, 100, '11/10'),
(44, 'pizza sandwiches', '1589556803_253955065_6.jpg', 4, 'Tuna', 9, NULL, 100, 'Delicious and cheap such as your ex'),
(45, 'desserts', '1589556958_604188394_1.jpg', 4, 'Keto Berry-Pecan Cheesecake Bars', 5, NULL, 100, 'ese cheesecake bars are an excellent sweet on a low-carb or keto lifestyle.'),
(46, 'desserts', '1589557034_1218181175_2.jpg', 5, 'Epic Rainbow Cake', 7, NULL, 100, 'I\'ve never seen a dessert get so much camera attention!'),
(47, 'desserts', '1589557358_1196311935_3.jpg', 5, 'Doberge Cake', 7, NULL, 100, 'It\'s my husband\'s all-time favorite and has become a birthday tradition.'),
(49, 'desserts', '1589560266_1723204721_5.jpg', 5, 'No-Bake Greek Yogurt Cheesecake', 7, NULL, 100, 'This no-bake Greek yogurt cheesecake is perfect for parties'),
(50, 'desserts', '1589560323_1991646377_6.jpg', 5, 'Double Layer Pumpkin Cheesecake', 9, NULL, 100, 'great alternative to pumpkin pie, especially for those cheesecake fans out there'),
(51, 'desserts', '1589560380_1129603657_7.jpg', 5, 'Sam\'s Famous Carrot Cake', 7, NULL, 100, 'Carrot cake legacy will always live on! Enjoy!'),
(52, 'desserts', '1589560466_1936571661_10.jpg', 5, 'Tiramisu Layer Cake', 5, NULL, 100, 'Fancy taste without all the work.'),
(53, 'desserts', '1589560563_564133495_12.jpg', 5, 'Banana Cake VI', 9, NULL, 100, 'Better Than Sex'),
(55, 'beverages', '1589560749_1744949101_1.jpg', 5, 'Brown coffee', 3, NULL, 100, 'Brown coffee for coffee lover'),
(56, 'beverages', '1589560793_2081334026_2.jpeg', 5, 'Mojito', 4, NULL, 100, 'Cold enough for freezing your mind'),
(57, 'beverages', '1589560853_1304336388_2.jpg', 5, 'Milk shake', 4, NULL, 100, 'Milk with little bit of Mint'),
(58, 'beverages', '1589560923_576496339_3.jpg', 5, 'Saigon\'s coffee', 4, NULL, 100, 'Coffee and a lot of milk'),
(59, 'beverages', '1589560989_219685872_4.jpg', 5, 'Latte', 4, NULL, 100, 'Lightly and warmish for you in cold winter'),
(60, 'beverages', '1589561063_1132581057_5.jpg', 5, 'Black coffee', 3, NULL, 100, 'Bitter, bitter, and bitter more'),
(61, 'beverages', '1589561153_405873183_6.jpg', 5, 'Espresso', 5, NULL, 100, 'Elegant such as a gentlemen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feed_back` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `password`, `feed_back`, `phone_number`, `email`, `remember_token`, `updated_at`, `created_at`) VALUES
(468, 'hello', '$2y$10$O59IFMGvuNgKXEQXU21rAO5yPjpnlqbJW.TzFUpEwUCN8VN1sXvq.', '', '123456', 'orionazo9@gmail.com', 'SohJIBL3SwJ17gpbseEN0IJi0j4nXKXnx0cCxJ4RYcq9bpQ2LYBSGLVUTcFc', '2020-07-18 05:41:15', '2020-04-27 09:45:52'),
(486, 'testt', '$2y$10$flyWdIwjkQnBVaI/lVkhBOyfWAQHI9sGN8iq7z9jhbtjf/5rHGwBy', '', '12345678910', '123@gmail.com', 'HjrNZyMcIpnyRN05AAfd7ZqxEVKvdFuMJzGp7jxgAno2NjIm9h4VNWLQxHJ1', '2020-07-16 17:19:10', '2020-07-16 17:09:33'),
(487, 'delete', '$2y$10$Tde1qzEBiLTsTxHzsRqW7uCLHXzeemv.VZVGa/41vcM8PxSNJ76Ry', 'hello world', '12345678910', '123@gmail.com', 'uR6cEk6mkt1dBQghO5UR1B5ONxi8X7iq0PyRwVvR6eDHfQrbZ3dS4gxrtBZc', '2020-07-17 07:30:17', '2020-07-16 17:18:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_combo`
--
ALTER TABLE `tbl_combo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_delivery`
--
ALTER TABLE `tbl_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`cat_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1239;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_combo`
--
ALTER TABLE `tbl_combo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_delivery`
--
ALTER TABLE `tbl_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=488;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
