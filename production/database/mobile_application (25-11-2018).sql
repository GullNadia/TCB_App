-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 10:13 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `phone_no` varchar(16) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `father_name`, `cnic`, `phone_no`, `address`) VALUES
(2, 'nadia gull', 'Iftikhar Ali', '12345-6789098-7', '(+12)345-6789088', '3e4567890987654lkjnbvc'),
(3, 'kinza Mustafa', 'Ghulam Mustafa', '12345-6789098-7', '(+92)300-7976242', 'sdfghjklkjhbgvvbn');

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `phone_no` varchar(32) NOT NULL,
  `address` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `name`, `father_name`, `cnic`, `phone_no`, `address`) VALUES
(4, 'Ahmad', 'Hanif', '34568-9898956-7', '(+23)445-6456767', 'RYK'),
(6, 'aqsa', 'rasheed', '34567-2345678-9', '(+34)456-7845678', 'dfgdfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `product_name` varchar(512) NOT NULL,
  `manufacturer` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `manufacturer`) VALUES
(1, 'nokia3310', 'nokia'),
(2, 'samsung-j5', 'samsung'),
(3, 'oppo-f1', 'opp'),
(4, 'rfbnjkcvbnm', 'ali');

-- --------------------------------------------------------

--
-- Table structure for table `products_per_purchase_invoice`
--

CREATE TABLE `products_per_purchase_invoice` (
  `id` int(255) NOT NULL,
  `purchase_invoice_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `expiry_starting_date` date NOT NULL,
  `expiry_ending_date` date NOT NULL,
  `original_price` int(255) NOT NULL,
  `discount_per_item` int(255) NOT NULL,
  `purchase_price` int(255) NOT NULL,
  `sale_price` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `imei` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_per_purchase_invoice`
--

INSERT INTO `products_per_purchase_invoice` (`id`, `purchase_invoice_id`, `product_id`, `expiry_starting_date`, `expiry_ending_date`, `original_price`, `discount_per_item`, `purchase_price`, `sale_price`, `status`, `imei`) VALUES
(1, 1, 1, '2018-01-12', '2018-01-17', 500, 100, 400, 800, '', 2147483647),
(2, 1, 1, '2018-01-12', '2018-01-17', 500, 100, 400, 800, '', 2147483647),
(3, 1, 1, '2018-01-12', '2018-01-17', 500, 100, 400, 800, '', 657465765),
(4, 1, 1, '2018-01-12', '2018-01-17', 500, 100, 400, 800, '', 65765764),
(5, 1, 1, '2018-01-12', '2018-01-17', 500, 100, 400, 800, '', 476576474),
(6, 1, 1, '2018-01-22', '2018-01-16', 800, 50, 750, 900, '', 8568586),
(7, 1, 1, '2018-01-11', '2018-01-10', 9000, 50, 8950, 10000, '', 767676767),
(8, 1, 1, '2018-01-10', '2018-01-22', 8000, 50, 7950, 9000, 'Sold', 0),
(9, 1, 1, '2018-01-04', '2018-01-16', 900, 0, 900, 1000, 'Available', 121212),
(10, 1, 1, '2018-01-10', '2018-01-17', 90000, 0, 90000, 100000, 'Sold', 20202020),
(11, 2, 2, '2018-01-18', '2018-01-11', 6000, 50, 5950, 8000, 'Available', 121212),
(12, 2, 3, '2018-01-18', '2018-01-11', 6000, 50, 5950, 8000, 'Available', 212121),
(13, 2, 1, '2018-01-18', '2018-01-11', 6000, 50, 5950, 8000, 'Available', 123123),
(14, 3, 1, '2018-01-18', '2018-01-17', 9000, 0, 9000, 10000, 'Sold', 909090),
(15, 3, 2, '2018-01-18', '2018-01-17', 9000, 0, 9000, 10000, 'Sold', 898989),
(16, 3, 3, '2018-01-18', '2018-01-17', 9000, 0, 9000, 10000, 'Sold', 787878787),
(18, 5, 2, '2018-11-14', '2018-12-12', 10000, 1000, 9000, 9500, 'Available', 2147483647),
(19, 5, 2, '2018-11-14', '2018-12-12', 10000, 1000, 9000, 9500, 'Available', 2147483647),
(20, 6, 2, '2018-11-17', '2018-11-17', 20000, 800, 19200, 22000, 'Available', 111222),
(21, 6, 2, '2018-11-17', '2018-11-17', 20000, 800, 19200, 22000, 'Available', 111333),
(22, 7, 4, '2018-11-17', '2018-11-30', 40000, 1600, 38400, 45000, 'Sold', 555777),
(23, 7, 4, '2018-11-17', '2018-11-30', 40000, 1600, 38400, 45000, 'Available', 555888);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_invoice`
--

CREATE TABLE `purchase_invoice` (
  `id` int(255) NOT NULL,
  `distributer_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(500) NOT NULL,
  `net_total_of_products` int(255) NOT NULL,
  `products_discount` int(255) NOT NULL,
  `discount_of_invoice` int(255) NOT NULL,
  `net_discount` int(255) NOT NULL,
  `net_total` int(255) NOT NULL,
  `amount_paid` int(255) NOT NULL,
  `amount_payable` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_invoice`
--

INSERT INTO `purchase_invoice` (`id`, `distributer_id`, `date`, `comment`, `net_total_of_products`, `products_discount`, `discount_of_invoice`, `net_discount`, `net_total`, `amount_paid`, `amount_payable`) VALUES
(3, 6, '2018-01-15', ' \r\n		third invoice			', 27000, 0, 100, 100, 26900, 26000, 900),
(4, 4, '2018-11-14', ' \r\n					', 0, 0, 0, 0, 0, 0, 0),
(5, 4, '2018-11-15', ' \r\n					', 18000, 2000, 1000, 3000, 17000, 10000, 7000),
(6, 7, '2018-11-17', ' sdfghjklkj\r\n					', 0, 0, 0, 0, 0, 0, 0),
(7, 7, '2018-11-17', ' sdfghjklkjnbv\r\n					', 76800, 3200, 5376, 8576, 71424, 60000, 11424);

-- --------------------------------------------------------

--
-- Table structure for table `sale_invoice`
--

CREATE TABLE `sale_invoice` (
  `sale_id` int(11) NOT NULL,
  `customer_id` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `total` int(11) NOT NULL,
  `total_discount` double NOT NULL,
  `net_total` double NOT NULL,
  `amount_paid` double NOT NULL,
  `remaining` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_invoice`
--

INSERT INTO `sale_invoice` (`sale_id`, `customer_id`, `date`, `total`, `total_discount`, `net_total`, `amount_paid`, `remaining`) VALUES
(1, 'nadia gull', '2018-11-19', 45000, 900, 44100, 4000, 40100),
(2, 'nadia gull', '2018-11-19', 45000, 900, 44100, 40000, 4100),
(3, 'aqsa', '2018-11-19', 45000, 900, 44100, 44000, 100),
(4, 'aqsa', '2018-11-19', 45000, 900, 44100, 40000, 4100),
(5, 'nadia gull', '2018-11-19', 45000, 900, 44100, 44000, 100),
(6, 'nadia gull', '2018-11-19', 64000, 1190, 62810, 60000, 2810),
(7, 'aqsa', '2018-11-19', 55000, 900, 54100, 50000, 4100),
(8, 'aqsa', '2018-11-19', 55000, 900, 54100, 50000, 4100),
(9, 'aqsa', '2018-11-19', 55000, 1100, 53900, 53000, 900),
(10, 'aqsa', '2018-11-19', 55000, 1100, 53900, 53000, 900),
(11, 'aqsa', '2018-11-19', 55000, 1100, 53900, 53000, 900),
(12, 'nadia gull', '2018-11-19', 45000, 1350, 43650, 43000, 650),
(13, 'aqsa', '2018-11-19', 45000, 900, 44100, 44000, 100),
(14, 'nadia gull', '2018-11-19', 64000, 920, 63080, 63000, 80),
(15, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(16, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(17, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(18, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(19, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(20, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(21, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(22, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(23, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(24, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(25, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(26, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(27, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(28, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(29, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(30, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(31, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(32, 'nadia gull', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(33, 'aqsa', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(34, 'aqsa', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(35, 'aqsa', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(36, 'aqsa', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(37, 'aqsa', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(38, 'aqsa', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(39, 'aqsa', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(40, 'aqsa', '2018-11-19', 9000, 0, 9000, 500, 8500),
(41, 'aqsa', '2018-11-19', 9000, 0, 9000, 500, 8500),
(42, 'aqsa', '2018-11-19', 9000, 0, 9000, 500, 8500),
(43, 'aqsa', '2018-11-19', 9000, 0, 9000, 500, 8500),
(44, 'aqsa', '2018-11-19', 9000, 270, 8730, 30000, -21270),
(45, 'aqsa', '2018-11-19', 45000, 2250, 42750, 5000, 37750),
(46, 'aqsa', '2018-11-19', 9000, 450, 8550, 5000, 3550),
(47, 'aqsa', '2018-11-19', 9000, 270, 8730, 5000, 3730),
(48, 'aqsa', '2018-11-19', 9000, 270, 8730, 5000, 3730),
(49, 'aqsa', '2018-11-19', 9000, 270, 8730, 5000, 3730),
(50, 'aqsa', '2018-11-19', 9000, 270, 8730, 6000, 2730),
(51, 'aqsa', '2018-11-22', 45000, 900, 44100, 42000, 2100);

-- --------------------------------------------------------

--
-- Table structure for table `sale_invoice_product_detail`
--

CREATE TABLE `sale_invoice_product_detail` (
  `sale_invoice_detail_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `per_item_sale_price` double NOT NULL,
  `imei` int(15) NOT NULL,
  `discount_per_item` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_invoice_product_detail`
--

INSERT INTO `sale_invoice_product_detail` (`sale_invoice_detail_id`, `sale_id`, `product_name`, `per_item_sale_price`, `imei`, `discount_per_item`) VALUES
(1, 6, 'rfbnjkcvbnm', 45000, 555777, 44100),
(2, 6, 'nokia3310', 9000, 0, 8910),
(3, 6, 'nokia3310', 10000, 909090, 9800),
(4, 7, 'rfbnjkcvbnm', 45000, 555777, 44100),
(5, 7, 'nokia3310', 10000, 909090, 0),
(6, 7, 'rfbnjkcvbnm', 45000, 555777, 44100),
(7, 7, 'nokia3310', 10000, 909090, 0),
(8, 7, 'rfbnjkcvbnm', 45000, 555777, 44100),
(9, 7, 'nokia3310', 10000, 909090, 9800),
(10, 7, 'rfbnjkcvbnm', 45000, 555777, 44100),
(11, 7, 'nokia3310', 10000, 909090, 9800),
(12, 7, 'rfbnjkcvbnm', 45000, 555777, 44100),
(13, 7, 'nokia3310', 10000, 909090, 9800),
(14, 1, 'rfbnjkcvbnm', 45000, 555777, 43650),
(15, 3, 'rfbnjkcvbnm', 45000, 555777, 44100),
(16, 6, 'rfbnjkcvbnm', 45000, 555777, 44550),
(17, 6, 'nokia3310', 10000, 909090, 9800),
(18, 6, 'nokia3310', 9000, 0, 8730),
(19, 15, 'nokia3310', 9000, 0, 8550),
(20, 15, 'nokia3310', 9000, 0, 8550),
(21, 15, 'nokia3310', 9000, 0, 8550),
(22, 15, 'nokia3310', 9000, 0, 8550),
(23, 15, 'nokia3310', 9000, 0, 8550),
(24, 15, 'nokia3310', 9000, 0, 8550),
(25, 15, 'nokia3310', 9000, 0, 8550),
(26, 15, 'nokia3310', 9000, 0, 8550),
(27, 15, 'nokia3310', 9000, 0, 8550),
(28, 15, 'nokia3310', 9000, 0, 8550),
(29, 15, 'nokia3310', 9000, 0, 8550),
(30, 15, 'nokia3310', 9000, 0, 8550),
(31, 15, 'nokia3310', 9000, 0, 8550),
(32, 15, 'nokia3310', 9000, 0, 8550),
(33, 15, 'nokia3310', 9000, 0, 8550),
(34, 15, 'nokia3310', 9000, 0, 8550),
(35, 15, 'nokia3310', 9000, 0, 8550),
(36, 15, 'nokia3310', 9000, 0, 8550),
(37, 33, 'nokia3310', 9000, 0, 8550),
(38, 33, 'nokia3310', 9000, 0, 8550),
(39, 33, 'nokia3310', 9000, 0, 8550),
(40, 33, 'nokia3310', 9000, 0, 8550),
(41, 33, 'nokia3310', 9000, 0, 8550),
(42, 33, 'nokia3310', 9000, 0, 8550),
(43, 33, 'nokia3310', 9000, 0, 8550),
(44, 33, 'nokia3310', 9000, 0, 0),
(45, 33, 'nokia3310', 9000, 0, 0),
(46, 33, 'nokia3310', 9000, 0, 0),
(47, 33, 'nokia3310', 9000, 0, 0),
(48, 33, 'nokia3310', 9000, 0, 8730),
(49, 3, 'rfbnjkcvbnm', 45000, 555777, 42750),
(50, 33, 'nokia3310', 9000, 0, 8550),
(51, 33, 'nokia3310', 9000, 0, 8730),
(52, 33, 'nokia3310', 9000, 0, 8730),
(53, 33, 'nokia3310', 9000, 0, 8730),
(54, 33, 'nokia3310', 9000, 0, 8730),
(55, 3, 'rfbnjkcvbnm', 45000, 555777, 44100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `user_address` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `password`, `user_address`, `image`) VALUES
(1, 'nauman', 'nauman@gmail.com', 'admin123', 'satellite town RYK', 'images/download (3).jpg'),
(3, 'admin', 'admin@gmail.com', 'admin123', 'Sattelite town Ryk', 'images/26417138.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_per_purchase_invoice`
--
ALTER TABLE `products_per_purchase_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_invoice`
--
ALTER TABLE `purchase_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_invoice`
--
ALTER TABLE `sale_invoice`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `cutomer_id` (`customer_id`);

--
-- Indexes for table `sale_invoice_product_detail`
--
ALTER TABLE `sale_invoice_product_detail`
  ADD PRIMARY KEY (`sale_invoice_detail_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_per_purchase_invoice`
--
ALTER TABLE `products_per_purchase_invoice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `purchase_invoice`
--
ALTER TABLE `purchase_invoice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sale_invoice`
--
ALTER TABLE `sale_invoice`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sale_invoice_product_detail`
--
ALTER TABLE `sale_invoice_product_detail`
  MODIFY `sale_invoice_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
