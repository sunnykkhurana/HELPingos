-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2015 at 07:17 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpingos`
--

-- --------------------------------------------------------

--
-- Table structure for table `helpingos_admin`
--

CREATE TABLE IF NOT EXISTS `helpingos_admin` (
  `regid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`regid`),
  UNIQUE KEY `regid` (`regid`),
  UNIQUE KEY `regid_2` (`regid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `helpingos_admin`
--

INSERT INTO `helpingos_admin` (`regid`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(52, 'Vividh', 'Talesara', 'vividhtalesara@gmail.com', 'Vividh', '<¦cy®Éjd'),
(53, 'Gatha', 'Dubey', 'nikishergil@gmail.com', 'Gatha', 'bl=šƒG÷j'),
(54, 'Sunny', 'Khurana', 'sunnykhurana16@gmail.com', 'Sunny', 'K®@:»Ãx’');

-- --------------------------------------------------------

--
-- Table structure for table `helpingos_cart`
--

CREATE TABLE IF NOT EXISTS `helpingos_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_pro_id` varchar(1000) NOT NULL,
  `cart_pro_name` varchar(500) NOT NULL,
  `cart_pro_quantity` int(100) NOT NULL,
  `cart_pro_price` decimal(10,0) NOT NULL,
  `cart_pro_total` varchar(500) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `helpingos_contactus`
--

CREATE TABLE IF NOT EXISTS `helpingos_contactus` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `contact_message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `helpingos_contactus`
--

INSERT INTO `helpingos_contactus` (`contact_id`, `contact_name`, `contact_email`, `contact_number`, `contact_message`) VALUES
(2, 'monil raval', 'monilraval@gmail.com', 8896172451, ' nkhbjjkn hibibi'),
(5, 'gatha', 'nikishergil@gmail.com', 8866462891, ' fdg');

-- --------------------------------------------------------

--
-- Table structure for table `helpingos_member`
--

CREATE TABLE IF NOT EXISTS `helpingos_member` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `agegroup` varchar(50) NOT NULL,
  `volunteer` varchar(10) NOT NULL,
  `donor` varchar(10) NOT NULL,
  `partner` varchar(10) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `helpingos_member`
--

INSERT INTO `helpingos_member` (`userid`, `fname`, `email`, `password`, `gender`, `agegroup`, `volunteer`, `donor`, `partner`, `contact_number`, `address`) VALUES
(1, 'Vividh Talesara', 'vividhtalesara@gmail.com', 'vividh', 'Male', '15-30', 'Volunteer', '-', 'Partner', 8866172274, 'A-9/301 Soham Residency, nr. althan garden, althan road, surat.'),
(2, 'Surbhi Jain', 'surbhi.jain@gmail.com', 'kissy', 'Female', '15-30', '-', 'Donor', '-', 8000089777, 'Shukan Residency, Vesu'),
(3, 'Raval Monil', 'monilraval@gmail.com', 'monil', 'Male', '15-30', 'Volunteer', 'Donor', 'Partner', 940911456, 'Judge colony, Athwa lines. '),
(4, 'Gatha Dubey', 'gathadubey@gmail.com', 'bandar', 'Female', '15-30', '-', 'Donor', '-', 8866462891, 'Gopal Park, Bhatar'),
(5, 'Khurana Sunny', 'sunnykhurana@gmail.com', 'sunny', 'Male', '30-45', 'Volunteer', '-', '-', 7777665421, 'Nr. raj empire, bhatar road.'),
(6, 'Mohini Soni', 'sonimohini@gmail.com', 'mahi', 'Female', '15-30', '-', 'Donor', '-', 9925582548, 'udhana, magdaala, surat.'),
(7, 'Piyush Agrwal', 'piyush@outlook.com', 'py', 'Male', '15-30', '-', 'Donor', 'Partner', 8141446662, 'Vesu, Shukan.'),
(8, 'Pradeep', 'pradeep@gmail.com', 'pradeep', 'Male', '30-45', 'Volunteer', 'Donor', 'Partner', 8000089777, 'soham resieny.'),
(15, 'Harsh Jain ', 'harsh.jain@gmail.com', '', 'Male', '15-30', 'Volunteer', '-', 'Partner', 7878757233, 'gbry'),
(21, 'kritik Talesara', 'kitztalesara@gmail.com', 'TJ_éœ“‹´', 'male', '30-45', 'volunteer', '-', 'partner', 8460788777, ''),
(24, 'Rahul Dak', 'rahuldak@outlook.com', '¢‰ã/%ù', 'male', 'Below 15', 'volunteer', '-', 'partner', 8546483514, ''),
(25, 'Vaibhav Desai', 'vaibhav@sdjic.com', 'J´n!', 'Male', '30-45', 'Volunteer', '-', 'Partner', 5652524557, 'alasshfjs ghjgg ghhbvhdbigrighvfvbv.'),
(26, 'khushi jain', 'khushijain@hotmail.com', 'Ò’ºVí2', 'male', 'Below 15', 'volunteer', 'donor', '-', 4854504547, ''),
(27, 'sunny khurana', 'sunnykhurana16@gmail.com', 'K®@:»Ãx’', 'male', '15-30', 'volunteer', 'donor', 'partner', 8000265459, '');

-- --------------------------------------------------------

--
-- Table structure for table `helpingos_order`
--

CREATE TABLE IF NOT EXISTS `helpingos_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_of_order` date NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `total_amount` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `helpingos_order_item`
--

CREATE TABLE IF NOT EXISTS `helpingos_order_item` (
  `order_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_item_order_id` int(11) NOT NULL,
  `order_item_product_id` int(11) NOT NULL,
  `order_item_quantity` int(11) NOT NULL,
  `order_item_price` int(11) NOT NULL,
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `helpingos_product`
--

CREATE TABLE IF NOT EXISTS `helpingos_product` (
  `Pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_category_id` varchar(50) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_code` varchar(100) NOT NULL,
  `pro_gender` varchar(6) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_date` varchar(30) NOT NULL,
  `pro_offer` text NOT NULL,
  `pro_description` text NOT NULL,
  `pro_image` varchar(1000) NOT NULL,
  PRIMARY KEY (`Pro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `helpingos_product`
--

INSERT INTO `helpingos_product` (`Pro_id`, `pro_category_id`, `pro_name`, `pro_code`, `pro_gender`, `pro_price`, `pro_date`, `pro_offer`, `pro_description`, `pro_image`) VALUES
(8, '13', 'Teddy baby pink', 'toy_teddy_001', 'Female', 599, '2015-03-05', '50% off', '', 'tdy_pink.jpg'),
(15, '5', 'Loafers', 'foot_shoes_001', 'Male', 2999, '2015-03-03', '20% off', '', 'loafer_brown.jpg'),
(21, '2', 'Red t-shirt', 'help_clo_tshirt_002', 'Female', 1999, '03/18/2015', '25% off', 'A very nice red t-shirt for girls.', 'top_blood_red.jpg'),
(23, '5', 'Heavy Boot', 'help_foot_heavy_001', 'Male', 3999, '03/31/2015', 'flat 25% off', 'A heavy Quality leather boots for men.<div>tough and durable.</div>', 'boot_black.jpg'),
(25, '16', 'Wrist Band', 'help_band_wrist_', 'Both', 59, '03/30/2015', 'no offers', 'Rubber wrist bands', 'b_greenish.jpg'),
(27, '6', 'Mobile cover', 'help_acces_mob_001', 'Both', 150, '03/31/2015', '10% off on buying 2 covers', 'A beautiful mobile cover with creative design for Iphone 5S.', 'm_blueborder.jpg'),
(28, '2', 'T-Shirt', 'help_clo_tsh_002', 'Female', 399, '04/01/2015', '20% off', 'A fancy trendy t-shirt for girls available in all sizes fresh collection.', 'top_collor_black.jpg'),
(29, '17', 'Black HandBag', 'help_bags_bbag_001', 'Female', 799, '04/14/2015', '10% off', 'A stylish Bag black coloured and can be carried nywhere lightweight.', 'bag_black.jpg'),
(30, '5', 'Sport Shoes', 'help_foot_sport_001', 'Male', 599, '04/22/2015', 'no offers', 'A very sporty looks of shoes. very much durable and stylish blck coloured shoes.', 'shoes_black.jpg'),
(31, '16', 'multi colour wrist band', 'help_band_wrist_003', 'Both', 159, '04/16/2015', 'no offers', 'wrist band multi colored.', 'b_gnw_d.jpg'),
(33, '2', 'cool pink boys Tshirt', 'help_clo_tsh_003', 'Male', 599, '04/26/2015', '20% off', 'asdf nv goekgnegkej lorem lorem zorem jvdsg ns jdgjg<div style="font-weight: normal;">gwdguwbg&nbsp;</div><div style="font-weight: normal;">dg</div><div><b>&nbsp;wjmgji gwhng</b></div><div style="font-weight: normal;">bnj igwhg</div>', 't_babypink.jpg'),
(34, '2', 'black casual T-shirt', 'help_clo_tsh_004', 'Male', 399, '04/27/2015', 'no offers', 'black casual tshirt trend common formal.', 't_blck.jpg'),
(35, '2', 'yellow trendy T-shirt', 'help_clo_tsh_005', 'Male', 449, '04/28/2015', 'no offers', 'Yellow casual tshirt color trend common shiny.', 't_collor_ylw.jpg'),
(36, '2', 'casual dark green Tshirt', 'help_clo_tsh_006', 'Male', 349, '04/25/2015', '10% off', 'dark green casual tshirt color trend common shiny.', 't_drkgrn.jpg'),
(37, '2', 'white full sleve T-shirt', 'help_clo_tsh_007', 'Male', 849, '04/25/2015', 'no offers', 'white full sleve T-shirt party wear. trendy and stylish.', 't_f_white.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `helpingos_product_category`
--

CREATE TABLE IF NOT EXISTS `helpingos_product_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(500) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `helpingos_product_category`
--

INSERT INTO `helpingos_product_category` (`category_id`, `category_name`) VALUES
(2, 'Clothing'),
(5, 'Foot Wear'),
(6, 'Accessories'),
(13, 'Toys'),
(16, 'Bands'),
(17, 'Bags');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
