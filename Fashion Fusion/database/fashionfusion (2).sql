-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 05:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashionfusion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_detail`
--

INSERT INTO `admin_detail` (`id`, `name`, `admin_email`, `contactno`, `gender`, `password`) VALUES
(6, 'Fashion Fusion Admin', 'admin@gmail.com', '9876543210', 'Male', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`, `email`) VALUES
(143, 'HIGHLANDER ', '650', 'hjas.webp', '1', 'userone@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(9, 'dfgddfg', 'admin@gmail.com', ''),
(10, 'radhi', 'radhi@gmail.com', ''),
(11, 'abc', 'admin@gmail.com', ''),
(12, 'abc', 'admin@gmail.com', ''),
(13, 'abc', 'admin@gmail.com', ''),
(14, 'abc', 'admin@gamil.com', ''),
(15, 'abc', 'admin@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `items` varchar(255) DEFAULT NULL,
  `custname` varchar(255) DEFAULT NULL,
  `contactno` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` int(100) DEFAULT NULL,
  `pincode` int(20) DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  `order_date` date DEFAULT curdate(),
  `order_time` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `items`, `custname`, `contactno`, `email`, `gender`, `address`, `city`, `state`, `country`, `pincode`, `payment`, `status`, `order_date`, `order_time`) VALUES
(57, 'Traditional(3)   ', ' user one', ' 9876543210', 'userone@gmail.com', ' Male', '1-301 gokuldham apartment', 'botad', 'gujrat', 0, 360055, ' Rs.600/-', 'approved', '2024-03-21', '08:36:44'),
(58, 'kurti dupatta(1)   METRO-FASHION (3)   ', ' user one', ' 9876543210', 'userone@gmail.com', ' Male', 'A-301 gokuldham apartment', 'botad', 'gujrat', 0, 360055, ' Rs.2196/-', 'approved', '2024-03-21', '12:18:11'),
(59, 'jeans(3)   MAX(5)   ', ' user one', ' 9876543210', 'userone@gmail.com', ' Male', 'dfdsf', 'dsf', 'dsf', 0, 0, ' Rs.4745/-', 'approved', '2024-03-21', '12:29:11'),
(60, 'MAX(1)   partyware(1)    Fancy cotton top for women girls(1)   kurti dupatta(1)   ', ' user one', ' 9876543210', 'userone@gmail.com', ' Male', 'A-301 gokuldham apartment', 'botad', 'gujrat', 0, 364710, ' Rs.2549/-', 'approved', '2024-03-25', '13:20:28'),
(61, 'MAX(1)   ', ' user one', ' 9876543210', 'userone@gmail.com', ' Male', 'rupavati', 'vincchhiya', 'gujrat', 0, 360055, ' Rs.349/-', 'approved', '2024-03-25', '20:07:31'),
(62, 'Traditional(1)   ', ' user one', ' 9876543210', 'userone@gmail.com', ' Male', 'A-301 gokuldham apartment', 'botad', 'gujrat', 0, 360055, ' Rs.200/-', 'approved', '2024-03-27', '13:26:40'),
(63, 'METRO-FASHION (1)   MAX(1)   ', ' user one', ' 9876543210', 'userone@gmail.com', ' Male', 'A-301 gokuldham apartment', 'botad', 'gujrat', 0, 0, ' Rs.681/-', 'approved', '2024-03-28', '21:14:58'),
(64, 'Surhi (1)   HIGHLANDER (1)   KETCH(1)   ', ' user two', ' 123456789', 'usertwo@gmail.com', ' Male', 'kjhkjhk', 'kjhj', 'khkjh', 0, 0, ' Rs.1218/-', 'approved', '2024-03-31', '22:53:39'),
(65, 'marriage ware(1)   Traditional(1)   partyware(1)   ', ' user two', ' 123456789', 'usertwo@gmail.com', ' Male', 'sadjgj', 'kjhkjdkjg', 'kjkjgdskjgkj', 0, 0, ' Rs.700/-', 'approved', '2024-03-31', '22:54:54'),
(66, 'partyware(1)   ', ' user two', ' 123456789', 'usertwo@gmail.com', ' Male', 'dfhkhjk', 'sfdsgdf', 'hkdshkj', 0, 0, ' Rs.300/-', 'approved', '2024-03-31', '23:07:16'),
(67, 'partyware(1)   Surhi (1)    Fancy cotton top for women girls(1)   MAX(1)   ', ' user one', ' 9876543210', 'userone@gmail.com', ' Male', 'A-301 gokuldham apartment', 'botad', 'gujrat', 0, 364710, ' Rs.1648/-', 'approved', '2024-04-01', '07:55:11'),
(68, 'MAX(1)   kids fashion(1)   ', ' user one', ' 9876543210', 'userone@gmail.com', ' Male', 'A-301 gokuldham apartment', 'botad', 'gujrat', 0, 364710, ' Rs.3349/-', 'approved', '2024-04-01', '11:44:17'),
(69, 'Traditional(1)   ', ' user one', ' 9876543210', 'userone@gmail.com', ' Male', 'A-301 gokuldham apartment', 'botad', 'gujrat', 0, 0, ' Rs.200/-', 'approved', '2024-04-05', '08:01:10'),
(70, 'MAX(1)   ', ' utwo', ' 1234567890', 'utwo@gmail.com', ' Female', 'A-301 gokuldham apartment', 'botad', 'gujrat', 0, 364710, ' Rs.349/-', 'approved', '2024-04-05', '08:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `products_kids`
--

CREATE TABLE `products_kids` (
  `id` int(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products_kids`
--

INSERT INTO `products_kids` (`id`, `p_id`, `p_name`, `p_price`, `p_image`, `p_description`) VALUES
(1, 'p_1', 'partyware', 300, 'kid2.jpg', 'hello'),
(2, 'p_2', 'Traditional', 200, 'kid1.jpg', 'Hello'),
(3, 'p_3', 'marriage ware', 200, 'kid3.jpg', 'Welcome To Fashion Fusion'),
(17, 'P50', ' Girls cute summer sleeveless shirts ', 1000, 'kg1.webp', 'Girls Summer Sleeveless Floral Shirts Kids Ruffle Tie Front Fashion Tops Blouse Outfits 5-14 Years'),
(18, 'P86', 'girls fashion', 1200, 'kg2.jpg', 'unique design for baby girl'),
(19, 'P82', 'short sleeve shirts for girls', 700, 'kg3.jpg', 'Girls Puff Short Sleeve Shirts Summer'),
(20, 'P88', ' Baby Boys Formal Suit ', 1500, 'kb1.jpg', 'Baby Boy Clothes Suits'),
(21, 'P17', 'kids boy fashion', 800, 'kb3.jpg', 'Shan and Toad is a trend-setting kidswear boutique for girls, boys, and baby, stocking the most fashion-forward collections.'),
(22, 'P63', 'Baby Suits Kids ', 2000, 'boy.jpg', 'Baby Suits Kids Boys Formal Suit Weddings Vest+Shirt +Necktie'),
(23, 'P27', 'festivewear', 2000, 'party.jpg', 'Kids festive wear'),
(24, 'P49', 'kids fashion', 3000, 'kbg3.jpg', 'unique design outfits'),
(25, 'P20', 'boy girl outfits', 4000, 'kbg4.jpg', 'fashions'),
(26, 'P26', 'frock', 1050, 'img15.jpg', 'new design frock for baby girl'),
(27, 'P48', 'unique frock', 1300, 'img12.jpg', 'baby girl fashion');

-- --------------------------------------------------------

--
-- Table structure for table `products_man`
--

CREATE TABLE `products_man` (
  `id` int(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products_man`
--

INSERT INTO `products_man` (`id`, `p_id`, `p_name`, `p_price`, `p_image`, `p_description`) VALUES
(104, 'P16', 'Surhi ', '299', 's-st28-vebnor-original-imagq6aqgh2hzv22.webp', 'Men Regular Fit Checkered Spread Collar Casual Shirt'),
(106, 'P21', 'HIGHLANDER ', '650', 'hjas.webp', 'Men Slim Fit Checkered Casual Shirt'),
(107, 'P51', 'KETCH', '269', 'l-khsh000155-ketch-original-imag8gmfyntywhat-bb.webp', 'Men Slim Fit Checkered Cut Away Collar Casual Shirt'),
(109, 'P92', 't-shirt', '500', 'm8.jpg', 'byebloger horizontal stripes polo tshirt for men'),
(110, 'P82', 'pretty designer men tshirtss', '1000', 'm6.jpg', 'men checkered-solid polo neck polyester tshirt'),
(113, 'P98', 'abc', '3000', 'm10.jpg', 'Men Flap Pocket Zip Up Jacket'),
(112, 'P90', 't-shirt', '1200', 'm01.webp', 'Product details\r\n\r\nFabric type95% Polyester, 5% Elastane\r\nCare instructionsMachine Wash\r\nOriginImported\r\nClosure type Pull On'),
(114, 'P75', 'tshirt', '1000', 'mt.jpg', 'Men Solid Button Detail Polo Shirt'),
(115, 'P52', 'men suit', '5000', 'mj.jpg', 'Men green suit, two piece suit, man pant , green blazer office formal look office blazer look'),
(116, 'P70', 'party wear', '4000', 'ms.jpg', 'Mens Indian Latest Design For Coat Pants Officeal Groom Wedding Party Wear Engagemen'),
(117, 'P11', 'wedding coat', '2500', 'mw.jpg', 'man wedding coat'),
(118, 'P55', 'men military shirt', '2000', 'mm.jpg', 'Men Cotton Military Shirt Long Sleeve Breathable Casual Shirt Solid Shirt Tops White '),
(119, 'P93', 'men shirt', '1000', 'm100.jpg', 'Men Shirt Male Clothing Slim Fit Oxford Cotton Long Sleeve Casual Shirts Fashion Brand '),
(120, 'P18', 'men fashion', '1500', 'm20.jpg', 'men fashion');

-- --------------------------------------------------------

--
-- Table structure for table `products_woman`
--

CREATE TABLE `products_woman` (
  `id` int(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products_woman`
--

INSERT INTO `products_woman` (`id`, `p_id`, `p_name`, `p_price`, `p_image`, `p_description`) VALUES
(201, 'p_1', 'METRO-FASHION ', 299, 'xl-kr497d-metro-fashion-original-imag537e4mdskmgd.webp', 'Women Printed Pure Cotton Straight Kurta  (Blue)'),
(202, 'p_2', 'MAX', 349, 'l-daamsp20cr21fuchsia-max-original-imag75y35nvrpj9f.webp', 'Women Embroidered Viscose Rayon Straight Kurta  (Pink)'),
(203, 'p_3', 'METRO-FASHION ', 332, 'm-kr499b-metro-fashion-original-imag537e9whwftd7.webp', 'Women Striped Pure Cotton Straight Kurta  (Pink)'),
(207, 'P37', 'kurti', 700, 'dpkw1.jpg', 'kurti dupatta set'),
(208, 'P33', 'kurti dupatta', 1200, 'dpkw2.jpg', 'women silk blend kurta pant dupatta set'),
(209, 'P54', 'embrodered kurta', 1500, 'dpkw5.jpg', 'embrodered kurta,trouser/pant&dupatta set'),
(210, 'P89', 'jeans', 1000, 'jw12.jpg', 'casual bellsleeves color block women top'),
(211, 'P22', 'sun flower top', 800, 'wjw1.webp', 're fashion stylish printed top comfortable length '),
(212, 'P55', ' Fancy women top, Maroon stripe designer top', 650, 'w2w.webp', ' \r\n\r\nMaroon stripe top, Woman fancy top, Girl partywear top, Maroon designer top, Trendy designer top, Harpa maroon top, Harpa woman top. '),
(213, 'P73', 'Casual Polyester Blend Round Neck And Short Sleeves', 1000, 'w3w.webp', ' \r\n\r\nCasual Polyester Blend Round Neck And Short Sleeves Stylish Printed Top (23\"Inches)'),
(214, 'P69', ' Fancy cotton top for women girls', 700, 'w4w.webp', 'Fabulous chicken embroidery top unique style like very nice looking so amazing and pretty fabric cotton chicken embroidery high quality fabric'),
(215, 'P47', 'unique design saree', 1200, 'sw1.webp', 'Beautiful 3 mm tone to tone sequence work with 5 mm hanging sequence tone to tone lace border work'),
(216, 'P72', 'saree', 400, 'sw2.webp', 'unique saree'),
(217, 'P38', 'Saree Fabric : Banarasi Silk', 1500, 'ws3.webp', 'Party Wear Festive Striped Occasional Wedding Satin Made Fashion Saree Collection\r\n\r\n'),
(218, 'P99', ' Two-Tone Chiffon Navy Blue Saree With Blouse  Saree Fabric : Viscose Silk', 2000, 'sw5.webp', 'yanchit pure chiffon south cloth silk saree');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `name`, `email`, `contactno`, `gender`, `password`) VALUES
(22, 'user one', 'userone@gmail.com', '9876543210', 'Male', 'user@123'),
(23, 'user two', 'usertwo@gmail.com', '123456789', 'Male', 'user@123'),
(24, 'utwo', 'utwo@gmail.com', '1234567890', 'Female', 'usertwo123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_detail`
--
ALTER TABLE `admin_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products_kids`
--
ALTER TABLE `products_kids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_man`
--
ALTER TABLE `products_man`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_woman`
--
ALTER TABLE `products_woman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_detail`
--
ALTER TABLE `admin_detail`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `products_kids`
--
ALTER TABLE `products_kids`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products_man`
--
ALTER TABLE `products_man`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `products_woman`
--
ALTER TABLE `products_woman`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
