-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 03:41 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `Dish` varchar(50) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `Discount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `doj` date NOT NULL,
  `package` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `purpose` varchar(10) NOT NULL,
  `batch` varchar(11) NOT NULL,
  `regdate` date NOT NULL,
  `duedate` date NOT NULL,
  `deposit` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `note` varchar(70) NOT NULL,
  `img` varchar(20) NOT NULL,
  `imgtype` varchar(10) DEFAULT 'jpg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `reg` (`reg`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `reg`, `name`, `fname`, `address`, `contact`, `doj`, `package`, `dob`, `occupation`, `email`, `purpose`, `batch`, `regdate`, `duedate`, `deposit`, `due`, `total`, `note`, `img`, `imgtype`) VALUES
(10, '145', '145', 'None', 'None', 'None', '0000-00-00', 'None', '0000-00-00', 'None', 'None', 'Not Select', 'Not Selecte', '2017-02-19', '0000-00-00', 0, 0, 0, 'None', '5', 'jpg'),
(11, '1544', '1544', 'None', 'None', 'None', '0000-00-00', 'None', '0000-00-00', 'None', 'None', 'Not Select', 'Not Selecte', '2017-02-19', '0000-00-00', 0, 0, 0, 'None', '5', 'png');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
CREATE TABLE IF NOT EXISTS `coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `code` varchar(15) NOT NULL,
  `valid from` date DEFAULT NULL,
  `valid till` date DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `user`, `code`, `valid from`, `valid till`, `amount`, `discount`) VALUES
(1, 'aalut', '551235', NULL, NULL, 500, 25),
(2, '', '503472', NULL, NULL, 500, 20),
(3, 'anmol', '411105', NULL, NULL, 500, 25),
(4, 'aalut', '501110', NULL, NULL, 500, 20),
(5, 'anmol1', '272814', NULL, NULL, 500, 25),
(6, 'aalut', '544644', NULL, NULL, 500, 20),
(7, 'Sakshi', '123456', NULL, NULL, 500, 25);

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

DROP TABLE IF EXISTS `main_menu`;
CREATE TABLE IF NOT EXISTS `main_menu` (
  `main_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_cat` varchar(30) NOT NULL,
  PRIMARY KEY (`main_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`main_id`, `main_cat`) VALUES
(1, 'Indian'),
(2, 'Tandoori'),
(3, 'Chinese Veg and Non Veg'),
(4, 'Hot Bread'),
(5, 'Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Category` varchar(50) NOT NULL,
  `Sub` varchar(50) NOT NULL,
  `Dish` varchar(50) NOT NULL,
  `Price` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=202 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `Category`, `Sub`, `Dish`, `Price`) VALUES
(2, 'Indian', 'Indian Chicken Mandi', 'Chicken Masala(Full)', 130),
(3, 'Indian', 'Indian Chicken Mandi', 'Chicken Masala(half)', 80),
(4, 'Indian', 'Indian Chicken Mandi', 'Chicken Korma(Full)', 130),
(5, 'Indian', 'Indian Chicken Mandi', 'Chicken Korma(Half)', 80),
(6, 'Indian', 'Indian Chicken Mandi', 'Chicken Makhani(Full)', 230),
(7, 'Indian', 'Indian Chicken Mandi', 'Chicken Makhani(Half)', 120),
(8, 'Indian', 'Indian Chicken Mandi', 'Chicken Kadahi(Full)', 130),
(9, 'Indian', 'Indian Chicken Mandi', 'Chicken Kadahi(Half)', 80),
(10, 'Indian', 'Indian Chicken Mandi', 'Chicken Do-Pyaja(Full)', 130),
(11, 'Indian', 'Indian Chicken Mandi', 'Chicken Do-Pyaja(Half)', 80),
(12, 'Indian', 'Indian Chicken Mandi', 'Chicken Curry(Full)', 120),
(13, 'Indian', 'Indian Chicken Mandi', 'Chicken Curry(Half)', 80),
(14, 'Indian', 'Indian Chicken Mandi', 'Chicken Handi(Full)', 250),
(15, 'Indian', 'Indian Chicken Mandi', 'Chicken Handi(Half)', 130),
(16, 'Indian', 'Indian Chicken Mandi', 'Chicken Muglal(Full)', 250),
(17, 'Indian', 'Indian Chicken Mandi', 'Chicken Muglal(Half)', 130),
(18, 'Indian', 'Indian Chicken Mandi', 'Chicken Hyderabadi(Full)', 250),
(19, 'Indian', 'Indian Chicken Mandi', 'Chicken Hyderabadi(Half)', 130),
(20, 'Indian', 'Indian Chicken Mandi', 'Chicken Rogan Josh(Full)', 250),
(21, 'Indian', 'Indian Chicken Mandi', 'Chicken Rogan Josh(Half)', 130),
(22, 'Indian', 'Indian Chicken Mandi', 'Chicken Kolhapuri(Full)', 250),
(23, 'Indian', 'Indian Chicken Mandi', 'Chicken Kolhapuri(Half)', 130),
(24, 'Indian', 'Indian Chicken Mandi', 'Godavari Chicken', 130),
(25, 'Indian', 'Indian Chicken Mandi', 'Rara Chicken', 130),
(26, 'Indian', 'Indian Chicken Mandi', 'Chi Tandoori Masala(Full)', 280),
(27, 'Indian', 'Indian Chicken Mandi', 'Chi Tandoori Masala(Half)', 150),
(28, 'Indian', 'Indian Chicken Mandi', 'Chicken Tikka Masala', 130),
(29, 'Indian', 'Indian Chicken Mandi', 'Chicken Kalimirch(Full)', 130),
(30, 'Indian', 'Indian Chicken Mandi', 'Chicken Kalimirch(Half)', 80),
(31, 'Indian', 'Indian Chicken Mandi', 'Chicken Kima Masala', 140),
(32, 'Indian', 'Indian Chicken Mandi', 'Chicken Sagwala(Full)', 130),
(33, 'Indian', 'Indian Chicken Mandi', 'Chicken Sagwala(Half)', 80),
(34, 'Indian', 'Indian Chicken Mandi', 'Butter Chicken(Full)', 130),
(35, 'Indian', 'Indian Chicken Mandi', 'Butter Chicken(Half)', 80),
(36, 'Indian', 'Indian Chicken Mandi', 'A D Spl Chicken(Full)', 270),
(37, 'Indian', 'Indian Chicken Mandi', 'A D Spl Chicken(Half)', 140),
(38, 'Indian', 'Indian Sabji Mandi', 'Aloo Gobi Masala(Dry/Gravy)', 55),
(39, 'Indian', 'Indian Sabji Mandi', 'Aloo Mutter Tamater', 55),
(40, 'Indian', 'Indian Sabji Mandi', 'Aloo Capsicum Masala(Dry/Gravy)', 65),
(41, 'Indian', 'Indian Sabji Mandi', 'Aloo Dum Punjabi', 65),
(42, 'Indian', 'Indian Sabji Mandi', 'Aloo Zeera(dry)', 55),
(43, 'Indian', 'Indian Sabji Mandi', 'Aloo Methi(dry)', 55),
(44, 'Indian', 'Indian Sabji Mandi', 'Mix Veg', 65),
(45, 'Indian', 'Indian Sabji Mandi', 'Veg Korma', 65),
(46, 'Indian', 'Indian Sabji Mandi', 'Tawa Garden', 65),
(47, 'Indian', 'Indian Sabji Mandi', 'Veg Butter Masala', 65),
(48, 'Indian', 'Indian Sabji Mandi', 'Veg Kima', 65),
(49, 'Indian', 'Indian Sabji Mandi', 'Kadhai Veg', 65),
(50, 'Indian', 'Indian Sabji Mandi', 'Bhindi Fry(dry)', 55),
(51, 'Indian', 'Indian Sabji Mandi', 'Channa Masala', 65),
(52, 'Indian', 'Indian Sabji Mandi', 'Rajma Masala', 65),
(53, 'Indian', 'Indian Sabji Mandi', 'Bhind Masala', 60),
(54, 'Indian', 'Indian Sabji Mandi', 'Mushroom Masala', 70),
(55, 'Indian', 'Indian Sabji Mandi', 'Kaju Curry', 80),
(56, 'Indian', 'Indian Sabji Mandi', 'Green Peas Masala', 65),
(57, 'Indian', 'Indian Sabji Mandi', 'Veg Kolhapuri', 65),
(58, 'Indian', 'Indian Sabji Mandi', 'Sabji Milooni', 70),
(59, 'Indian', 'Indian Sabji Mandi', 'Veg Manchurian(Dry/Gravy)', 80),
(60, 'Indian', 'Indian Paneer Mandi', 'Paneer Masala', 75),
(61, 'Indian', 'Indian Paneer Mandi', 'Paneer Butter Masala', 80),
(62, 'Indian', 'Indian Paneer Mandi', 'Kadhai Paneer', 80),
(63, 'Indian', 'Indian Paneer Mandi', 'Tawa Paneer', 80),
(64, 'Indian', 'Indian Paneer Mandi', 'Shimla Spl Paneer', 95),
(65, 'Indian', 'Indian Paneer Mandi', 'Palak Paneer', 80),
(66, 'Indian', 'Indian Paneer Mandi', 'Mutter Paneer', 80),
(67, 'Indian', 'Indian Paneer Mandi', 'Hariyali Paneer', 75),
(68, 'Indian', 'Indian Paneer Mandi', 'Kaju Paneer', 90),
(69, 'Indian', 'Indian Paneer Mandi', 'Sahi Paneer', 90),
(70, 'Indian', 'Indian Paneer Mandi', 'Paneer Pasanda', 90),
(71, 'Indian', 'Indian Paneer Mandi', 'Paneer Methi Malai Mutter', 90),
(72, 'Indian', 'Indian Paneer Mandi', 'Paneer Tikka Masala', 95),
(73, 'Indian', 'Indian Paneer Mandi', 'Paneer Do Pyaja', 80),
(74, 'Indian', 'Indian Paneer Mandi', 'Paneer Korma', 80),
(75, 'Indian', 'Indian Paneer Mandi', 'Paneer Bhurji', 95),
(76, 'Indian', 'Indian Paneer Mandi', 'A D Spl Paneer', 95),
(77, 'Indian', 'Dal', 'Dal Fry', 45),
(78, 'Indian', 'Dal', 'Dal Tadka', 50),
(79, 'Indian', 'Dal', 'Dal Makhani', 70),
(80, 'Indian', 'Kofta', 'Nargish Kofta Curry', 90),
(81, 'Indian', 'Kofta', 'Malai Kofta Curry', 90),
(82, 'Indian', 'Kofta', 'Paneer Kofta Curry', 85),
(83, 'Indian', 'Kofta', 'Veg Kofta Curry', 85),
(84, 'Chinese', 'Chinese Veg Starter', 'Paneer Manchurian', 80),
(85, 'Chinese', 'Chinese Veg Starter', 'Paneer Chilli', 80),
(86, 'Chinese', 'Chinese Veg Starter', 'Paneer 65', 80),
(87, 'Chinese', 'Chinese Veg Starter', 'Schzewan Paneer', 80),
(88, 'Chinese', 'Chinese Veg Starter', 'Gobi Manchurian', 70),
(89, 'Chinese', 'Chinese Veg Starter', 'Gobi Chilli', 70),
(90, 'Chinese', 'Chinese Veg Starter', 'Gobi 65', 70),
(91, 'Chinese', 'Chinese Veg Starter', 'Aloo Manchurian', 70),
(92, 'Chinese', 'Chinese Veg Starter', 'Aloo Chilli', 70),
(93, 'Chinese', 'Chinese Veg Starter', 'Aloo 65', 70),
(94, 'Chinese', 'Chinese Veg Starter', 'Chilli Mushroom', 80),
(95, 'Chinese', 'Chinese Veg Starter', 'Mushroom Manchurian', 80),
(96, 'Chinese', 'Chinese Veg Starter', 'Mushroom 65', 80),
(97, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Chilli Chicken', 100),
(98, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Schzewan Chicken', 100),
(99, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Chicken Sweet 16', 120),
(100, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Garlic Chicken', 100),
(101, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Lemon Chicken', 105),
(102, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Ginger Chicken', 100),
(103, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Dragon Chicken', 130),
(104, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Chicken 65', 100),
(105, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Chicken Winglet(Full)', 140),
(106, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Chicken Winglet(Half)', 75),
(107, 'Chinese', 'Chinese Non Veg Starter(Dry)', 'Chicken Manchurian', 100),
(108, 'Chinese', 'Chicken Non Veg(Gravy)', 'Chicken Manchurian', 105),
(109, 'Chinese', 'Chicken Non Veg(Gravy)', 'Chilli Chicken', 105),
(110, 'Chinese', 'Chicken Non Veg(Gravy)', 'Garlic Chicken', 105),
(111, 'Chinese', 'Chicken Non Veg(Gravy)', 'Ginger Chicken', 105),
(112, 'Chinese', 'Chicken Non Veg(Gravy)', 'Mehboob Chicken', 120),
(113, 'Chinese', 'Chicken Non Veg(Gravy)', 'Schzewan Chicken', 110),
(114, 'Hot Breads', 'Hot Bread', 'Tawa Roti', 7),
(115, 'Hot Breads', 'Hot Bread', 'Tawa Butter Roti', 8),
(116, 'Hot Breads', 'Hot Bread', 'Tandoori Roti', 9),
(117, 'Hot Breads', 'Hot Bread', 'Tandoori Butter Roti', 10),
(118, 'Hot Breads', 'Hot Bread', 'Butter Naan', 15),
(119, 'Hot Breads', 'Hot Bread', 'Plain Kulcha', 15),
(120, 'Hot Breads', 'Hot Bread', 'Butter Kulcha', 18),
(121, 'Hot Breads', 'Hot Bread', 'Masala Kulcha', 30),
(122, 'Hot Breads', 'Hot Bread', 'Aloo Kulcha', 30),
(123, 'Hot Breads', 'Hot Bread', 'Paneer Kulcha', 35),
(124, 'Hot Breads', 'Parantha', 'Aloo Parantha', 20),
(125, 'Hot Breads', 'Parantha', 'Paneer Parantha', 30),
(126, 'Hot Breads', 'Parantha', 'Gobi Parantha', 25),
(127, 'Hot Breads', 'Parantha', 'Onion Parantha', 25),
(128, 'Hot Breads', 'Parantha', 'Plain Parantha', 15),
(129, 'Hot Breads', 'Parantha', 'Mix Parantha', 25),
(130, 'Tandoori', 'Tandoori Veg Starter', 'Paneer Tikka Masala', 90),
(131, 'Tandoori', 'Tandoori Veg Starter', 'Paneer Cheese Tikka ', 100),
(132, 'Tandoori', 'Tandoori Veg Starter', 'Tiranga Paneer', 150),
(133, 'Tandoori', 'Tandoori Veg Starter', 'Paneer Seek Kabab', 120),
(134, 'Tandoori', 'Tandoori Veg Starter', 'Veg Shakahari Plater', 350),
(135, 'Tandoori', 'Tandoori Veg Starter', 'Tandoori Gobi', 80),
(136, 'Tandoori', 'Tandoori Veg Starter', 'Aloo Angara', 90),
(137, 'Tandoori', 'Tandoori Veg Starter', 'Tandoori Sabji Ka Milan', 150),
(138, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Mix Chicken Plater', 480),
(139, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Tangari Kabab', 130),
(140, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Tandoori Chicken(Full)', 280),
(141, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Tandoori Chicken(Half)', 150),
(142, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Afghani Chicken(Full)', 300),
(143, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Afghani Chicken(Half)', 160),
(144, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Chicken Tikka Masala', 120),
(145, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Hariyali Kabab', 120),
(146, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Malai Kabab', 130),
(147, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Lahsuni Kabab', 120),
(148, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Adrakhi Kabab', 120),
(149, 'Tandoori', 'Tandoori Starter (Non Veg)', 'Chicken Seek Kaba', 140),
(150, 'Beverages', 'Beverages', 'Masala Cold Drinks', 25),
(151, 'Beverages', 'Beverages', 'Lassi Sweet', 25),
(152, 'Beverages', 'Beverages', 'Lassi Salty', 20),
(153, 'Beverages', 'Beverages', 'Butter Milk', 15),
(154, 'Beverages', 'Beverages', 'Mineral Water', 22),
(155, 'Beverages', 'Beverages', 'Soft Drinks', 14),
(156, 'Beverages', 'Beverages', 'Soft Drinks(400 ml)', 25),
(157, 'Rice', 'Veg Rice', 'Steam Rice', 30),
(158, 'Rice', 'Veg Rice', 'Kashmiri Pulao', 80),
(159, 'Rice', 'Veg Rice', 'Peas Pulao', 70),
(160, 'Rice', 'Veg Rice', 'Veg Pulao', 65),
(161, 'Rice', 'Veg Rice', 'Paneer Pulao', 80),
(162, 'Rice', 'Veg Rice', 'Ghee Rice', 60),
(163, 'Rice', 'Veg Rice', 'Jeera Rice', 50),
(164, 'Rice', 'Veg Rice', 'Curd Rice', 50),
(165, 'Rice', 'Veg Rice', 'Veg Fried Rice', 50),
(166, 'Rice', 'Veg Rice', 'Ceg Schzewan Fried Rice', 60),
(167, 'Rice', 'Veg Rice', 'Garlic Fried Rice', 60),
(168, 'Rice', 'Veg Rice', 'Mushroom Fred Rice', 70),
(169, 'Rice', 'Veg Rice', 'Veg Biryani', 75),
(170, 'Rice', 'Non Veg Rice', 'Hyd Chicken Biryani', 110),
(171, 'Rice', 'Non Veg Rice', 'Chicken Biryani', 100),
(172, 'Rice', 'Non Veg Rice', 'Mutton Biryani', 130),
(173, 'Rice', 'Non Veg Rice', 'Egg Biryani', 80),
(174, 'Rice', 'Non Veg Rice', 'Chicken Fried Rice', 65),
(175, 'Rice', 'Non Veg Rice', 'Schzewan Chicken Fried Rice', 70),
(176, 'Rice', 'Non Veg Rice', 'Egg Fried Rice', 55),
(177, 'Rice', 'Non Veg Rice', 'Schzewan Egg Fried Rice', 60),
(178, 'Mutton and Egg', 'Mutton Gravy', 'Mutton Rogan Josh(Full)', 220),
(179, 'Mutton and Egg', 'Mutton Gravy', 'Mutton Rogan Josh(Half)', 120),
(180, 'Mutton and Egg', 'Mutton Gravy', 'Spl Dhaniya Kima Mutton(Full)', 220),
(181, 'Mutton and Egg', 'Mutton Gravy', 'Spl Dhaniya Kima Mutton(Half)', 120),
(182, 'Mutton and Egg', 'Mutton Gravy', 'Mutton Kadhai(Full)', 200),
(183, 'Mutton and Egg', 'Mutton Gravy', 'Mutton Kadhai(Half)', 110),
(184, 'Mutton and Egg', 'Ande Ke Funde', 'Egg Curry', 50),
(185, 'Mutton and Egg', 'Ande Ke Funde', 'Egg Masala', 55),
(186, 'Mutton and Egg', 'Ande Ke Funde', 'Egg Bhurji', 35),
(187, 'Mutton and Egg', 'Ande Ke Funde', 'Egg Bhurji Curry', 55),
(188, 'Mutton and Egg', 'Ande Ke Funde', 'Egg Omlet', 40),
(189, 'Mutton and Egg', 'Ande Ke Funde', 'Omlet Curry', 55),
(190, 'Curd/Raita', 'Curd/Raita', 'Plain Curd', 20),
(191, 'Curd/Raita', 'Curd/Raita', 'Jeera Curd', 25),
(192, 'Curd/Raita', 'Curd/Raita', 'Bundi Raita', 35),
(193, 'Curd/Raita', 'Curd/Raita', 'Onion Raita', 30),
(194, 'Curd/Raita', 'Curd/Raita', 'Cucumber Raita', 35),
(195, 'Curd/Raita', 'Curd/Raita', 'Mix Raita', 35),
(196, 'Papad and Salad', 'Salad', 'Onion Salad', 25),
(197, 'Papad and Salad', 'Salad', 'Green Salad', 35),
(198, 'Papad and Salad', 'Salad', 'Masala Onion Salad', 25),
(199, 'Papad and Salad', 'Papad', 'Fried Papad', 15),
(200, 'Papad and Salad', 'Papad', 'Masala Papad', 25),
(201, 'Papad and Salad', 'Papad', 'Roasted Papad', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orderid`
--

DROP TABLE IF EXISTS `orderid`;
CREATE TABLE IF NOT EXISTS `orderid` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `amount` varchar(11) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderid`
--

INSERT INTO `orderid` (`orderid`, `user`, `address`, `amount`, `date`, `contact`, `email`) VALUES
(6, 'anmol', 'vit', '420', '27-03-2017 18:31:15', NULL, NULL),
(5, 'anmol', 'vit', '550', '26-03-2017 22:35:42', NULL, NULL),
(7, 'anmol', 'jhjhbj', NULL, NULL, NULL, NULL),
(8, 'anmol', 'dfgd', NULL, '27-03-2017 19:37:58', NULL, NULL),
(9, 'anmol', 'vit bhej do', NULL, '27-03-2017 19:40:55', NULL, NULL),
(10, 'anmol', 'dfs', '160', '27-03-2017 19:46:15', NULL, NULL),
(11, 'anmol', 'vit do', '340', '27-03-2017 19:48:09', NULL, NULL),
(12, 'anmol', 'vit do', '340', '27-03-2017 19:51:08', NULL, NULL),
(13, 'sakshi', 'kahi bhi', '340', '28-03-2017 14:33:09', '98', '78'),
(14, 'abcdef', 'sakshi ka ghar', '340', '29-03-2017 20:58:55', '4334', 'gl'),
(15, 'abcdef', '', '370', '29-03-2017 21:03:59', '4334', 'gl');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(50) DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `referral` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `user`, `password`, `contact`, `email`, `address`, `referral`) VALUES
('admin', 'admin', 'admin123', NULL, NULL, NULL, NULL),
('asd', 'asd', 'fd', 98, '78', '686', 'cSxPKE'),
('asd', 'popp', 'fd', 98, '78', '686', 'U4j5wy'),
('asd', 'poppfg', 'fd', 98, '78', '686', 'MXUqS3'),
('asd', 'poppfghg', 'fd', 98, '78', '686', 'fr503L'),
('asd', 'sakshi', 'fd', 98, '78', '686', 'lPUeez'),
('akshit', 'abcdef', 'abc', 4334, 'gl', 'dfh', 'AVzCZb'),
('akshit', 'abcdef+g', 'abc', 4334, 'gl', 'dfh', 'rY1OJc'),
('akshit', 'abcdef+gh', 'abc', 4334, 'gl', 'dfh', 'bYJECf'),
('akshit', 'abcdef+ghd', 'abc', 4334, 'gl', 'dfh', 'dvizuY'),
('akshit', 'akshit', 'abc', 34, 'ff', 'A-35', 'dgfg'),
('lala', 'lala', 'lala', 4777, 'fd', 'trivenu', 'WFzKJO'),
('Saksham', 'nimesh', 'abc', 9351274249, 'jain.akshit16@gmail.com', 'A-35', 'hJC7hN'),
('chinta', 'chinta', 'chinta', 9351274249, 'jain.akshit16@gmail.com', 'A-35', 'wVB8d8'),
('aalu', 'aalu', 'allal', 9351274249, 'jain.akshit16@gmail.com', 'A-35', 'ulp2Rm'),
('aalu', 'aalut', 'lolo', 9351274249, 'jain.akshit16@gmail.com', 'A-35', 'CdxHjH'),
('anmol', 'anmol', 'anmol', 9994329290, 'anmol5varma@gmail.com', 'vit', 'ZE3rZK'),
('anmol', 'anmol1', 'abc', 9994329290, 'anmol5varma@gmail.com', 'vit', 'm2COrE');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

DROP TABLE IF EXISTS `sub_menu`;
CREATE TABLE IF NOT EXISTS `sub_menu` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_cat` varchar(30) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_id`, `sub_cat`) VALUES
(1, 'Starters'),
(2, 'Indian Mandi'),
(3, 'Dal'),
(4, 'Hot Breads/Parantha'),
(5, 'Mutton Gravy'),
(6, 'Kofta'),
(7, 'Rice'),
(8, 'Ande ke Funde'),
(9, 'Curd/Raita'),
(10, 'Salad/Papad'),
(11, 'Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `table 7`
--

DROP TABLE IF EXISTS `table 7`;
CREATE TABLE IF NOT EXISTS `table 7` (
  `COL 1` varchar(1449) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 7`
--

INSERT INTO `table 7` (`COL 1`) VALUES
('<?xml version=1.0 encoding=UTF-8 standalone=yes?>'),
('<Types xmlns=http://schemas.openxmlformats.org/package/2006/content-types><Default Extension=bin ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.printerSettings/><Default Extension=rels ContentType=application/vnd.openxmlformats-package.relationships+xml/><Default Extension=xml ContentType=application/xml/><Override PartName=/xl/workbook.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml/><Override PartName=/xl/worksheets/sheet1.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml/><Override PartName=/xl/worksheets/sheet2.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml/><Override PartName=/xl/worksheets/sheet3.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml/><Override PartName=/xl/theme/theme1.xml ContentType=application/vnd.openxmlformats-officedocument.theme+xml/><Override PartName=/xl/styles.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.styles+xml/><Override PartName=/xl/sharedStrings.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.sharedStrings+xml/><Override PartName=/docProps/core.xml ContentType=application/vnd.openxmlformats-package.core-properties+xml/><Override PartName=/docProps/app.xml ContentType=application/vnd.openxmlformats-officedocument.extended-properties+xml/></Types>');

-- --------------------------------------------------------

--
-- Table structure for table `table 8`
--

DROP TABLE IF EXISTS `table 8`;
CREATE TABLE IF NOT EXISTS `table 8` (
  `COL 1` varchar(1449) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 8`
--

INSERT INTO `table 8` (`COL 1`) VALUES
('<?xml version=1.0 encoding=UTF-8 standalone=yes?>'),
('<Types xmlns=http://schemas.openxmlformats.org/package/2006/content-types><Default Extension=bin ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.printerSettings/><Default Extension=rels ContentType=application/vnd.openxmlformats-package.relationships+xml/><Default Extension=xml ContentType=application/xml/><Override PartName=/xl/workbook.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml/><Override PartName=/xl/worksheets/sheet1.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml/><Override PartName=/xl/worksheets/sheet2.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml/><Override PartName=/xl/worksheets/sheet3.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml/><Override PartName=/xl/theme/theme1.xml ContentType=application/vnd.openxmlformats-officedocument.theme+xml/><Override PartName=/xl/styles.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.styles+xml/><Override PartName=/xl/sharedStrings.xml ContentType=application/vnd.openxmlformats-officedocument.spreadsheetml.sharedStrings+xml/><Override PartName=/docProps/core.xml ContentType=application/vnd.openxmlformats-package.core-properties+xml/><Override PartName=/docProps/app.xml ContentType=application/vnd.openxmlformats-officedocument.extended-properties+xml/></Types>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ac` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `ac`) VALUES
(1, 'nitesh', 'thedynamicgym', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

DROP TABLE IF EXISTS `userorder`;
CREATE TABLE IF NOT EXISTS `userorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `address` varchar(80) DEFAULT NULL,
  `dish` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `tprice` int(11) NOT NULL,
  `time_date` varchar(50) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`id`, `user`, `address`, `dish`, `quantity`, `tprice`, `time_date`, `status`) VALUES
(1, 'akshit', NULL, 'maggi', 3, 176, NULL, 'pending'),
(2, 'akshit', NULL, 'maggi', 3, 176, NULL, 'pending'),
(3, 'akshit', NULL, 'Paneer Manchurian', 2, 176, NULL, 'pending'),
(4, 'akshit', NULL, 'maggi', 3, 176, NULL, 'pending'),
(5, 'akshit', NULL, 'Paneer Manchurian', 2, 176, NULL, 'pending'),
(6, 'akshit', NULL, 'maggi', 3, 176, NULL, 'pending'),
(7, 'akshit', NULL, 'Paneer Manchurian', 2, 176, NULL, 'pending'),
(8, 'akshit', NULL, 'maggi', 3, 176, NULL, 'pending'),
(9, 'akshit', NULL, 'Paneer Manchurian', 2, 176, NULL, 'pending'),
(10, 'akshit', NULL, 'maggi', 3, 176, NULL, 'pending'),
(11, 'akshit', NULL, 'Paneer Manchurian', 2, 176, '13-03-2017 00:30:51', 'pending'),
(12, 'akshit', NULL, 'maggi', 3, 176, '13-03-2017 00:30:51', 'pending'),
(13, 'akshit', NULL, 'Paneer Manchurian', 2, 176, '13-03-2017 00:35:58', 'pending'),
(14, 'akshit', NULL, 'maggi', 3, 176, '13-03-2017 00:35:58', 'pending'),
(15, 'akshit', NULL, 'Paneer Manchurian', 2, 176, '13-03-2017 00:36:55', 'pending'),
(16, 'akshit', NULL, 'maggi', 3, 176, '13-03-2017 00:36:55', 'pending'),
(17, 'akshit', 'A-35', 'Paneer Manchurian', 2, 176, '13-03-2017 00:43:14', 'pending'),
(18, 'akshit', 'A-35', 'maggi', 3, 176, '13-03-2017 00:43:14', 'pending'),
(19, 'akshit', 'A-35', 'Paneer Manchurian', 2, 220, '13-03-2017 17:58:44', 'pending'),
(20, 'akshit', 'A-35', 'maggi', 3, 220, '13-03-2017 17:58:44', 'pending'),
(21, 'akshit', 'A-35', 'Paneer Manchurian', 2, 176, '13-03-2017 18:14:54', 'pending'),
(22, 'akshit', 'A-35', 'maggi', 3, 176, '13-03-2017 18:14:54', 'pending'),
(23, 'Sakshi', '686', 'Chicken Korma(Full)', 1, 650, '2013-07-17 18:33:55', 'completed'),
(24, 'Sakshi', '686', 'Chicken Masala(half)', 2, 650, '2013-07-17 18:33:55', 'completed'),
(25, 'Sakshi', '686', 'Chicken Masala(Full)', 2, 650, '2013-07-17 18:33:55', 'completed'),
(26, 'Sakshi', '686', 'Masala Cold Drinks', 1, 650, '2013-07-17 18:33:55', 'completed'),
(27, 'Sakshi', '686', 'Lassi Sweet', 1, 650, '2013-07-17 18:33:55', 'completed'),
(28, 'Sakshi', '686', 'Lassi Salty', 1, 650, '2013-07-17 18:33:55', 'completed'),
(29, 'Sakshi', '686', 'Butter Milk', 2, 650, '2013-07-17 18:33:55', 'completed'),
(30, 'Sakshi', '686', 'Chicken Masala(half)', 2, 290, '18-03-2017 01:46:34', 'pending'),
(31, 'Sakshi', '686', 'Chicken Masala(Full)', 1, 290, '18-03-2017 01:46:34', 'pending'),
(32, 'Sakshi', '686', 'Chicken Kadahi(Half)', 1, 435, '26-03-2017 12:42:58', 'pending'),
(33, 'Sakshi', '686', 'Chicken Kadahi(Full)', 1, 435, '26-03-2017 12:42:58', 'pending'),
(34, 'Sakshi', '686', 'Chicken Masala(half)', 1, 435, '26-03-2017 12:42:58', 'pending'),
(35, 'Sakshi', '686', 'Butter Milk', 1, 435, '26-03-2017 12:42:58', 'pending'),
(36, 'Sakshi', '686', 'Chicken Masala(Full)', 1, 435, '26-03-2017 12:42:58', 'pending'),
(37, 'Sakshi', '686', 'Chicken Masala(half)', 2, 420, '26-03-2017 18:51:32', 'pending'),
(38, 'Sakshi', '686', 'Chicken Masala(Full)', 2, 420, '26-03-2017 18:51:32', 'pending'),
(39, 'Sakshi', '686', 'Chicken Masala(half)', 2, 290, '26-03-2017 19:31:47', 'pending'),
(40, 'Sakshi', '686', 'Chicken Masala(Full)', 1, 290, '26-03-2017 19:31:47', 'pending'),
(41, 'anmol', 'vit', 'Chicken Masala(half)', 2, 550, '26-03-2017 22:35:42', 'pending'),
(42, 'anmol', 'vit', 'Chicken Masala(half)', 2, 420, '27-03-2017 18:31:15', 'pending'),
(43, 'anmol', 'vit', 'Chicken Korma(Full)', 1, 420, '27-03-2017 18:31:15', 'pending'),
(44, 'anmol', 'vit', 'Chicken Masala(half)', 1, 340, '27-03-2017 18:41:47', 'pending'),
(45, 'anmol', 'vit', 'Chicken Masala(Full)', 1, 340, '27-03-2017 18:41:47', 'pending'),
(46, 'anmol', 'vit', 'Chicken Masala(half)', 1, 470, '27-03-2017 18:43:19', 'pending'),
(47, 'anmol', 'vit', 'Chicken Masala(Full)', 1, 470, '27-03-2017 18:43:19', 'pending'),
(48, 'anmol', 'vit', 'Chicken Masala(half)', 1, 340, '27-03-2017 19:41:00', 'pending'),
(49, 'anmol', 'vit', 'Chicken Masala(half)', 1, 340, '27-03-2017 19:48:13', 'pending'),
(50, 'anmol', 'vit', 'Chicken Masala(Full)', 1, 340, '27-03-2017 19:48:13', 'pending'),
(51, 'anmol', 'vit', 'Chicken Korma(Full)', 2, 340, '27-03-2017 19:51:13', 'pending'),
(52, 'sakshi', '686', 'Chicken Masala(half)', 1, 340, '28-03-2017 14:33:13', 'pending'),
(53, 'sakshi', '686', 'Chicken Masala(Full)', 1, 340, '28-03-2017 14:33:13', 'pending'),
(54, 'abcdef', 'dfh', 'Chicken Masala(half)', 1, 340, '29-03-2017 20:58:59', 'pending'),
(55, 'abcdef', 'dfh', 'Chicken Korma(Full)', 1, 340, '29-03-2017 20:58:59', 'pending'),
(56, 'abcdef', 'dfh', 'Chicken Masala(half)', 2, 370, '29-03-2017 21:03:59', 'pending'),
(57, 'abcdef', 'dfh', 'Chicken Korma(Full)', 1, 370, '29-03-2017 21:03:59', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`code`, `type`) VALUES
(1, 'admin'),
(2, 'editor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
