-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 04:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop_t3`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Laptop'),
(2, 'PC'),
(3, 'Printer');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_user_id` int(11) NOT NULL,
  `order_product_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_price` float NOT NULL,
  `order_ship_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_ship_address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_zip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_shipping` float NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_shipped` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_user_id`, `order_product_id`, `order_quantity`, `order_price`, `order_ship_name`, `order_ship_address`, `order_city`, `order_zip`, `order_country`, `order_phone`, `order_shipping`, `order_date`, `order_shipped`) VALUES
(1, 6, 2, 1, 1089.5, '', '', '', '', '', '', 0, '2019-08-08 14:49:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(12) NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_weight` float NOT NULL,
  `product_short_desc` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_stock` int(11) DEFAULT NULL,
  `product_active` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_weight`, `product_short_desc`, `product_long_desc`, `product_image`, `product_category_id`, `product_update_date`, `product_stock`, `product_active`) VALUES
(1, 'Lenovo Legion Y530-15ICH', 959.5, 2.3, '8750H(2.2/4.1GHz 6 bërthama/12 threads)', 'Laptop Lenovo Legion Y530-15ICH, Intel Core i7, 8GB RAM, 128GB SSD + 1TB HDD, 15.6\" Full HD, NVIDIA GeForce GTX 1050 Ti, Black', 'https://noah.gjirafa.com/storage/gj50/img/97983/0.jpg', 1, '2019-08-07 14:20:55', 100, 0),
(2, 'Laptop ASUS TUF Gaming ', 1089.5, 0, 'Laptop ASUS TUF Gaming FX505GE, Intel Core i7, 16GB RAM, 512GB SSD, 15.6\" Full HD, NVIDIA GeForce GTX 1050 Ti, i zi', 'Kodi i produktit:251619\r\nBluetooth:\r\nNumri i porteve USB-A 3.0 / 3.1 Gen 1 : 2\r\nMemorie e brendshme [GB]: 512\r\nModeli i procesorit: 8750H(2.2/4.1GHz 6 bërthama/12 threads)\r\nNgjyra: Zezë', 'https://noah.gjirafa.com/storage/gj50/img/94856/0.jpg', 1, '2019-08-08 10:27:23', 100, 0),
(3, 'Laptop Lenovo Legion Y530', 959.5, 0, 'Laptop Lenovo Legion Y530-15ICH, Intel Core i7, 8GB RAM, 128GB SSD + 1TB HDD, 15.6\" Full HD, NVIDIA GeForce GTX 1050 Ti, i zi', 'Kodi i produktit:248428\r\nBluetooth:\r\nPesha [kg]: 2.3\r\nMini DisplayPort:\r\nModeli i procesorit: 8750H(2.2/4.1GHz 6 bërthama/12 threads)\r\nNgjyra: Zezë', 'https://noah.gjirafa.com/storage/gj50/img/97983/0.jpg', 1, '2019-08-08 10:29:45', 100, 0),
(4, 'Kasë MICRONICS FRONTIER ', 48.5, 0, 'Kodi i produktit:249773\r\nEAN: 8809436061157\r\nNumri i hapësirave për karta: 6\r\nProdhuesi: MICRONICS\r\nPesha [kg]: 2,9\r\nPërmasat e kutisë: 416 x 410 x 200\r\nShiko të gjitha specifikat', 'EAN:8809436061157\r\nFtohës të montuar:1x120mm LED\r\nGarancioni nga prodhuesi:1 vit\r\nGjatësia maksimale e ftohësit të CPU-së [cm]:15.6\r\nGjatësia maksimale e kartës [cm]:36\r\nKodi:FRONTIER H300 BLACK\r\nLansuar:24. 11. 2018\r\nLidhësit:3,5mm jack (2x), USB-A 2.0 (1x), USB-A 3.0 (1x)\r\nNgjyra:Zezë\r\nNumri i ftohësve të montuar:1\r\nNumri i hapësirave për karta:6\r\nNumri i sloteve:Jashtëm 5,25 (1x), brendshëm 2,5 (2x), brendshëm 3,5 (3x)\r\nPajisje speciale:Cable management, Pruhledná bocnice\r\nParametrat e energjisë:Bez zdroje, Horní umístení, Podpora ATX standardu\r\nPërmasat e kutisë:416 x 410 x 200\r\nPesha [kg]:2,9\r\nProdhuesi:MICRONICS\r\nUeb-i i prodhuesit:Micronicsglobal.com', 'https://noah.gjirafa.com/storage/gj50/img/93069/0.jpg', 2, '2019-08-08 10:31:20', 100, 0),
(5, 'Printer Xerox Phaser 6022NI', 251.5, 0, 'Kodi i produktit:168300\r\nEAN: 0952058679304\r\nPërmasat [mm]: 397 x 398 x 246\r\nTeknologjia e printimit: Laser, LED\r\nTeknologjia: RJ-45, USB 2.0, WiFi\r\nShpejtësia e printimit me ngjyrë të zezë - normale [faqe / min]:', 'EAN:0952058679304\r\nEkran:Jo\r\nFunksione shtesë:AirPrint, Google Cloud Print\r\nGarancioni nga prodhuesi:1 vit\r\nKapaciteti standard i memories [MB]:256\r\nKodi i prodhuesit:6022V_NI\r\nKonsumi (W):340\r\nLloji i printerit:LED\r\nMadhësia e printerit:A4\r\nMbështetje për W10:\r\nMultifunksional:Jo\r\nNgjyra:\r\nNgjyra / Bardhë e zi:Shumëngjyrësh\r\nPërmasat [mm]:397 x 398 x 246\r\nPesha në kg:12,4\r\nPrintim DPI:2400\r\nPrintimi i faqes së parë [sekondë]:13\r\nProdhuesi:Xerox\r\nRezolucioni - ngjyra e zezë [DPI]:1200 x 2400\r\nShpejtësia e printimit me ngjyra - normale [faqe / min]:18\r\nShpejtësia e printimit me ngjyrë të zezë - normale [faqe / min]:18\r\nTeknologjia:RJ-45, USB 2.0, WiFi\r\nTeknologjia e printimit:Laser, LED\r\nUeb-i i prodhuesit:Xerox.com', 'https://noah.gjirafa.com/storage/gj50/img/72368/0.jpg', 3, '2019-08-08 10:32:45', 87, 0),
(6, 'Kasë MICRONICS FRONTIER H300, e bardhë', 48.5, 0, 'Kodi i produktit:249774\r\nEAN: 8809436061171\r\nNumri i ftohësve të montuar: 1\r\nProdhuesi: MICRONICS\r\nPesha [kg]: 2,9\r\nPërmasat e kutisë: 416 x 410 x 200', 'EAN:8809436061171\r\nFormatet e mbështetura të pllakave amë:ATX, Micro-ATX, Mini-ITX\r\nFtohës të montuar:1x120mm LED\r\nGarancioni nga prodhuesi:1 vit\r\nGjatësia maksimale e ftohësit të CPU-së [cm]:15.6\r\nGjatësia maksimale e kartës [cm]:36\r\nKodi:FRONTIER H300 WHITE\r\nLansuar:24. 11. 2018\r\nLidhësit:3,5mm jack (2x), USB-A 2.0 (1x), USB-A 3.0 (1x)\r\nNgjyra:Bardhë\r\nNumri i ftohësve të montuar:1\r\nNumri i hapësirave për karta:6\r\nNumri i sloteve:Jashtëm 5,25 (1x), brendshëm 2,5 (2x), brendshëm 3,5 (3x)\r\nPajisje speciale:Cable management, Pruhledná bocnice\r\nParametrat e energjisë:Bez zdroje, Horní umístení, Podpora ATX standardu\r\nPërmasat e kutisë:416 x 410 x 200\r\nPesha [kg]:2,9\r\nProdhuesi:MICRONICS\r\nUeb-i i prodhuesit:Micronicsglobal.com', 'https://noah.gjirafa.com/storage/gj50/img/92914/0.jpg', 2, '2019-08-08 10:48:23', 92, 0),
(7, 'Kasë MICRONICS FRONTIER H100, e zezë', 39.5, 0, 'Kodi i produktit:249772\r\nEAN: 8809436061485\r\nFtohës të montuar: 1x80mm\r\nLidhësit: 3,5mm jack (2x), USB-A 2.0 (2x)\r\nNgjyra: Zezë\r\nNumri i ftohësve të montuar: 1', 'EAN:8809436061485\r\nFtohës të montuar:1x80mm\r\nLidhësit:3,5mm jack (2x), USB-A 2.0 (2x)\r\nNgjyra:Zezë\r\nNumri i ftohësve të montuar:1\r\nNumri i sloteve:Interní 2,5&quot; (1x), Interní 3,5&quot; (1x)\r\nPajisje speciale:Nepruhledná bocnice, Osvetlení\r\nParametrat e energjisë:Pa burim energjie\r\nPërmasat e kutisë:405 x 360 x 175\r\nPesha [kg]:2.1\r\nProdhuesi:MICRONICS', 'https://noah.gjirafa.com/storage/gj50/img/93068/0.jpg', 2, '2019-08-08 10:49:18', 200, 0),
(8, 'Printer Samsung SL-M2026', 96.5, 0, 'Kodi i produktit:170506\r\nEAN: 191628388035\r\nPërmasat [mm]: 331 x 215 x 178\r\nTeknologjia e printimit: Laser\r\nTeknologjia: USB 2.0\r\nShpejtësia e printimit me ngjyrë të zezë - normale [faqe / min]:', 'EAN:191628388035\r\nEkran:Jo\r\nGarancioni nga prodhuesi:1 vit\r\nKapaciteti standard i memories [MB]:8\r\nKodi i prodhuesit:SL-M2026/SEE\r\nKonsumi (W):310\r\nLansuar:27 Maj 2015\r\nLloji i printerit:Laserik\r\nMadhësia e printerit:A4\r\nMbështetje për W10:\r\nMultifunksional:Jo\r\nNgjyra / Bardhë e zi:Bardhë e zi\r\nPërmasat [mm]:331 x 215 x 178\r\nPesha maksimale e printimeve [g / m2]:163\r\nPesha në kg:3,97\r\nPrintim DPI:1200\r\nPrintimi i faqes së parë [sekondë]:8,5\r\nProdhuesi:Samsung\r\nRezolucioni - ngjyra e zezë [DPI]:1200 x 1200\r\nShpejtësia e printimit me ngjyrë të zezë - normale [faqe / min]:20\r\nTeknologjia:USB 2.0\r\nTeknologjia e printimit:Laser\r\nUeb-i i prodhuesit:Samsung.cz', 'https://noah.gjirafa.com/storage/gj50/img/19423/0.jpg', 3, '2019-08-08 10:50:32', 123, 0),
(9, 'Printer Brother HL-1222WE', 135.5, 0, 'Kodi i produktit:227380\r\nEAN: 4977766760287\r\nPesha maksimale e printimeve [g / m2]: 105\r\nTeknologjia e printimit: Laser\r\nTeknologjia: USB 2.0, WiFi\r\nShpejtësia e printimit me ngjyrë të zezë - normale [faqe / min]:', 'EAN:4977766760287\r\nEkran:Jo\r\nGarancioni nga prodhuesi:1 vit\r\nKapaciteti standard i memories [MB]:32\r\nKodi i prodhuesit:HL1222WEYJ1\r\nKonsumi (W):380\r\nLloji i printerit:Laserik\r\nMadhësia e printerit:A4\r\nMultifunksional:Jo\r\nMundësi lidhjeje me:IPrint&amp;Scan\r\nNgjyra / Bardhë e zi:Bardhë e zi\r\nPërmasat [mm]:340 x 238 x 189\r\nPesha maksimale e printimeve [g / m2]:105\r\nPesha në kg:4,6\r\nPrintim dyanësh:\r\nPrintime DPI:2400\r\nProdhuesi:Brother\r\nRezolucioni - ngjyra e zezë [DPI]:2400 x 600\r\nShpejtësia e printimit me ngjyrë të zezë - normale [faqe / min]:20\r\nTeknologjia:USB 2.0, WiFi\r\nTeknologjia e printimit:Laser\r\nUeb-i i prodhuesit:Brother.com', 'https://noah.gjirafa.com/storage/gj50/img/76407/0.jpg', 3, '2019-08-08 10:51:25', 122, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Test Role');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_city` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_country` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role_id` int(11) NOT NULL,
  `user_blocked` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_first_name`, `user_last_name`, `user_city`, `user_registration_date`, `user_mobile`, `user_fax`, `user_country`, `user_address`, `user_address_2`, `user_role_id`, `user_blocked`) VALUES
(1, 'mentorbibaj@hotmail.com', '$2y$10$Tq3CtYzpkrSZdk0H0thoCe0ilCiC/pibQeEm4fWoVchDoael2vD2G', 'mentor', 'bibaj', NULL, '2019-08-08 08:57:51', NULL, NULL, NULL, NULL, NULL, 0, 0),
(2, 'mentorbibaj@hotmail.com', '$2y$10$fB24H/BwpZXdeK15NgOSoexu9arWt3WqcDeS0oxuFvISu0A43rela', 'mentor', 'mentor', NULL, '2019-08-08 09:29:30', NULL, NULL, NULL, NULL, NULL, 0, 0),
(3, 'Mentori', '$2y$10$fGvFGZh4u2To0ZcVINf1gOUrscYhN2vY9ZBL/hwq5SvrLf/ills6u', 'Bibaj', 'mentorbibaj@hotmail.com', NULL, '2019-08-08 10:43:41', NULL, NULL, NULL, NULL, NULL, 0, 0),
(4, 'Mentor', '$2y$10$4Tn.6P6FEn.FyRhg58hTuubPRSgJspxEn4MEL9.hYlTkmpOX3FNBq', 'Bibaj', 'mentorbibaj@hotmail.com', NULL, '2019-08-08 12:36:25', NULL, NULL, NULL, NULL, NULL, 0, 0),
(5, 'mentor@hotmail.com', '$2y$10$w.AKBSjv7ABb2OOjWzt92e1TA/FyZHY51fkENc0RgJgFzXOLPFp12', 'test', 'test', NULL, '2019-08-08 13:45:55', NULL, NULL, NULL, NULL, NULL, 0, 0),
(6, 'mentorb@hotmail.com', '$2y$10$ma4cAB9XarNkzzE3X.XVCuZcbq45kVsJFtRb/EKfwQlDpj.gSLcxK', 'Mentor', 'Bibaj', NULL, '2019-08-08 13:46:59', NULL, NULL, NULL, NULL, NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
