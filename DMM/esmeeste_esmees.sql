-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2014 at 09:10 AM
-- Server version: 5.5.40-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esmeeste_esmees`
--

-- --------------------------------------------------------

--
-- Table structure for table `advs`
--

CREATE TABLE IF NOT EXISTS `advs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `adv_id` int(25) NOT NULL,
  `adv_name` varchar(500) NOT NULL,
  `afflitate_type` varchar(2) NOT NULL,
  `vested_period` varchar(20) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `advs`
--

INSERT INTO `advs` (`id`, `adv_id`, `adv_name`, `afflitate_type`, `vested_period`, `url`, `created`) VALUES
(1, 38010, 'SheInside', 'LS', '14', 'http://www.lifeisgood.com', '2014-03-18 23:48:48'),
(3, 25065, 'Manhattanite', 'LS', '20', 'http://www.shopmanhattanite.com', '2014-04-02 20:45:21'),
(7, 36342, 'Buy.com', 'LS', '1', 'http://www.rakuten.com', '2014-04-07 23:37:02'),
(8, 37793, 'Oasap Limited', 'LS', '30', 'http://www.oasap.com/', '2014-07-28 01:25:41'),
(9, 39137, 'JollyChic', 'LS', '45', 'http://www.jollychic.com/', '2014-07-28 01:39:37'),
(10, 768, 'dELiA''s', 'LS', '10', 'http://store.delias.com/content/features/affiliate/jsp/index.jsp', '2014-07-28 23:07:42'),
(11, 1237, 'NORDSTROM', 'LS', '1', 'http://shop.nordstrom.com/', '2014-07-31 23:51:21'),
(12, 37986, 'Design By Humans ', 'LS', '10', 'http://www.designbyhumans.com/', '2014-08-02 00:54:14'),
(13, 38982, 'BAUKJEN', 'LS', '30', 'http://www.baukjen.com/us', '2014-08-06 00:07:17'),
(14, 38126, 'Shoptiques', 'LS', '30', 'http://www.shoptiques.com/', '2014-09-01 02:18:29'),
(15, 38801, 'Saks Fifth Avenue OFF 5TH', 'LS', '14', 'http://www.saksoff5th.com/', '2014-09-11 23:39:37'),
(16, 39608, 'Todd Snyder', 'LS', '30', 'http://www.toddsnyder.com', '2014-09-12 02:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pages` varchar(100) NOT NULL,
  `section` varchar(50) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `buy_url` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `pages`, `section`, `heading`, `description`, `buy_url`, `image`, `created`, `status`) VALUES
(9, 'banner2', 'left', '', '', 'http://test-esmees.com/Users/register', '54127cea-e78c-4c54-83b6-64c6408d8133.jpg', '2014-05-19 02:47:53', 1),
(21, 'footer', 'left', '', '', 'http://test-esmees.com/Users/register', '53a77d17-76a0-45f7-9f7e-3688408d8133.jpg', '2014-05-19 03:28:22', 1),
(37, 'banner1', 'left', '', '', 'http://test-esmees.com/Users/register', '54127d9c-7d48-4311-b516-7d3e408d8133.jpg', '2014-05-19 07:12:55', 1),
(38, 'index', 'right', '', '', 'http://test-esmees.com/Products/women', '53a73266-72d8-44dc-a0a2-5cf7408d8133.jpg', '2014-05-19 07:14:11', 1),
(13, 'men', 'left', '', '', 'http://test-esmees.com/', '5379aca7-d9e0-49ad-af82-23a1408d8133.png', '2014-05-19 03:03:05', 1),
(15, 'women', 'left', '', '', 'http://test-esmees.com/', '5379ad5d-c90c-44c0-8c75-3de5408d8133.png', '2014-05-19 03:06:07', 1),
(16, 'women', 'right', '', '', 'http://test-esmees.com/', '5379adab-1e04-4a58-872d-4d1e408d8133.png', '2014-05-19 03:07:24', 1),
(17, 'men', 'right', '', '', 'http://test-esmees.com/', '5379af80-2c08-482b-8e15-1140408d8133.png', '2014-05-19 03:15:13', 1),
(19, 'header', 'left', '', '', 'http://test-esmees.com/', '5379b049-0c40-444d-9089-2cc3408d8133.png', '2014-05-19 03:18:33', 1),
(39, 'index', 'left', '', '', 'http://test-esmees.com/Products/men', '53a730fe-0bfc-4ec6-99f8-1ba7408d8133.jpg', '2014-05-19 07:15:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `lft`, `rght`, `name`) VALUES
(1, NULL, 1, 24, 'All Products'),
(2, 1, 2, 11, 'Men'),
(3, 1, 12, 23, 'Women'),
(4, 2, 3, 4, 'Tops'),
(5, 3, 13, 14, 'Tops'),
(6, 3, 15, 16, 'Dresses'),
(7, 2, 5, 6, 'Bottoms'),
(8, 2, 7, 8, 'Outerwear'),
(9, 3, 17, 18, 'Outerwear'),
(10, 3, 19, 20, 'Bottoms'),
(11, 3, 21, 22, 'Jumpsuits'),
(12, 2, 9, 10, 'Socks');

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE IF NOT EXISTS `commissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_id` int(10) NOT NULL,
  `user_commission` float NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `adv_id` varchar(50) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `transaction_date` date NOT NULL,
  `transaction_time` time NOT NULL,
  `sku_number` varchar(100) NOT NULL,
  `sales` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `commissions` varchar(20) NOT NULL,
  `process_date` date NOT NULL,
  `vesting_date` date NOT NULL,
  `program` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `commissions`
--

INSERT INTO `commissions` (`id`, `ref_id`, `user_commission`, `member_id`, `adv_id`, `user_id`, `order_id`, `transaction_date`, `transaction_time`, `sku_number`, `sales`, `quantity`, `commissions`, `process_date`, `vesting_date`, `program`) VALUES
(7, 0, 1.24, 'ESMADMIN-ES000010', '38010', '9', '1006396', '2014-03-19', '17:48:00', 'dress140311103', '24.80', 1, '2.48', '2014-03-19', '2014-03-29', 'LS'),
(8, 0, 1.24, 'ESMADMIN-ES000010', '38010', '9', '1006396', '2014-03-19', '17:48:00', 'dress140311103', '24.80', 1, '2.48', '2014-03-19', '2014-03-29', 'LS');

-- --------------------------------------------------------

--
-- Table structure for table `crons`
--

CREATE TABLE IF NOT EXISTS `crons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `fetchls` tinyint(1) NOT NULL DEFAULT '0',
  `savels` tinyint(1) NOT NULL DEFAULT '0',
  `commls` tinyint(1) NOT NULL DEFAULT '0',
  `fetchcj` tinyint(1) NOT NULL DEFAULT '0',
  `savecj` tinyint(1) NOT NULL DEFAULT '0',
  `commcj` tinyint(1) NOT NULL DEFAULT '0',
  `email` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE IF NOT EXISTS `followers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `follow_id` int(10) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follow_id`, `create_date`) VALUES
(2, 40, 9, '0000-00-00 00:00:00'),
(3, 42, 9, '0000-00-00 00:00:00'),
(6, 43, 9, '0000-00-00 00:00:00'),
(5, 43, 43, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `product_id`) VALUES
(17, 40, 4),
(19, 42, 4),
(20, 43, 4),
(21, 47, 4),
(22, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `looks`
--

CREATE TABLE IF NOT EXISTS `looks` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `caption_name` varchar(200) NOT NULL,
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `category_id` int(10) DEFAULT NULL,
  `brands` varchar(100) DEFAULT NULL,
  `cover` int(1) DEFAULT NULL,
  `likes` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `looks`
--

INSERT INTO `looks` (`Id`, `caption_name`, `order_id`, `user_id`, `product_id`, `image`, `status`, `created`, `category_id`, `brands`, `cover`, `likes`) VALUES
(4, '#First uploaded pic to the site.  Test Test Test Test', 1, 9, 29, '54279a92-0dfc-492d-ae29-5cf9408d8133.jpg', 0, '2014-04-21 23:41:14', 2, 'Buy.com', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `lsorders`
--

CREATE TABLE IF NOT EXISTS `lsorders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(50) NOT NULL,
  `adv_id` varchar(50) NOT NULL,
  `merchant_name` varchar(200) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `transaction_date` date NOT NULL,
  `transaction_time` time DEFAULT NULL,
  `sku_number` varchar(100) NOT NULL,
  `sales` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `commissions` varchar(20) NOT NULL,
  `process_date` date DEFAULT NULL,
  `process_time` time DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `email` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `lsorders`
--

INSERT INTO `lsorders` (`id`, `member_id`, `adv_id`, `merchant_name`, `order_id`, `transaction_date`, `transaction_time`, `sku_number`, `sales`, `quantity`, `commissions`, `process_date`, `process_time`, `status`, `email`) VALUES
(1, '2945519', '37461', 'SmartBargains.com', '1602420', '2014-03-03', '00:00:00', '*not-available*', '22.99', 1, '1.15', '2014-03-24', '21:25:00', 4, 2),
(2, 'ESMADMIN-ES000009', '36342', 'Buy.com (dba Rakuten.com Shopping)', '74087849', '2014-04-09', '05:46:00', '255423474', '17.97', 1, '0.18', '2014-04-10', '05:15:00', 2, 1),
(3, 'ESMADMIN-ES000010', '38010', 'SheInside', '1006396', '2014-03-19', '17:48:00', 'dress140311102', '24.80', 1, '2.48', '2014-03-19', '17:49:00', 3, 2),
(4, 'ESMADMIN-ES000010', '38010', 'SheInside', '1006396', '2014-03-19', '17:48:00', 'dress140311103', '24.80', 1, '2.48', '2014-03-19', '17:49:00', 3, 2),
(5, 'ESMADMIN-ESMGUEST', '36342', 'Buy.com (dba Rakuten.com Shopping)', '74087820', '2014-04-09', '05:37:00', '262616362', '27.99', 1, '0.28', '2014-04-10', '05:15:00', 4, 2),
(6, 'GUEST-GUEST', '36342', 'Buy.com (dba Rakuten.com Shopping)', '73591475', '2014-03-04', '03:18:00', '259086554', '33.99', 1, '0.34', '2014-03-13', '17:15:00', 4, 2),
(7, 'ESMADMIN-ES000009', '36342', 'Buy.com (dba Rakuten.com Shopping)', '74276164', '2014-04-23', '05:52:00', '262444876', '31.99', 1, '0.32', '2014-04-24', '05:11:00', 3, 2),
(8, 'ESMADMIN-ES000034', '36342', 'Buy.com (dba Rakuten.com Shopping)', '74310288', '2014-04-26', '04:01:00', '262445022', '27.99', 1, '0.28', '2014-04-29', '17:10:00', 4, 2),
(9, '1602420', '03/03/2014', '00:00:00', '37461', '1969-12-31', '00:00:00', 'N/A', '22.99', 1, '1.1495', '1969-12-31', NULL, 4, 2),
(10, '73591475', '03/04/2014', '03:18:00', '36342', '1969-12-31', '838:59:59', 'Apparel : TRUKFIT Tommy Mens Pocket Tee', '33.99', 1, '0.3399', '1969-12-31', NULL, 4, 2),
(11, '1006396', '03/19/2014', '17:48:00', '38010', '1969-12-31', '00:00:00', 'White Long Sleeve Rhinestone Slim Dress', '24.8', 1, '2.48', '1969-12-31', NULL, 4, 2),
(12, '1006396', '03/19/2014', '17:48:00', '38010', '1969-12-31', '00:00:00', 'Red Long Sleeve Rhinestone Slim Dress', '24.8', 1, '2.48', '1969-12-31', NULL, 4, 2),
(13, '74087820', '04/09/2014', '05:37:00', '36342', '1969-12-31', '838:59:59', 'Apparel : TRUKFIT Martian Mens T-Shirt', '27.99', 1, '0.2799', '1969-12-31', NULL, 4, 2),
(14, '74276164', '04/23/2014', '05:52:00', '36342', '1969-12-31', '838:59:59', 'Apparel : LRG Unfocused Mens T-Shirt', '31.99', 1, '0.3199', '1969-12-31', NULL, 4, 2),
(15, '74310288', '04/26/2014', '04:01:00', '36342', '1969-12-31', '838:59:59', 'Apparel : LRG Floral Cursive Mens T-Shirt', '27.99', 1, '0.2799', '1969-12-31', NULL, 4, 2),
(16, 'PROD3713-2945519', '06/25/2014', '00:00:00', '37453', '1969-12-31', '00:00:00', 'N/A', '6.9721', 1, '0.48805', '1969-12-31', NULL, 4, 2),
(17, '201408182253034335854818', '08/18/2014', '22:53:00', '1237', '1969-12-31', '00:00:00', 'Topman Cloud Pattern Socks', '6', 1, '0.12', '1969-12-31', NULL, 4, 2),
(18, '201409140024104969793030', '09/14/2014', '00:24:00', '1237', '1969-12-31', '00:00:00', 'Calibrate Dot Socks', '12.5', 1, '0.25', '1969-12-31', NULL, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) DEFAULT NULL,
  `product_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `product_id`, `user_id`, `order_date`) VALUES
(1, 74087849, 29, 9, '2014-04-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `slug`, `status`) VALUES
(2, 'Help', '<font color="#632423"><i><b>Help for Coming soon.....</b></i></font><br>', 'help', 0),
(3, 'offers', '<p><font color="#632423"><i><b>Offers for Coming soon.....</b></i></font><br></p>\r\n', 'offers', 0),
(4, 'Contact Us', '<p><font color="#632423"><i><b>Contact Us for Coming soon.....</b></i></font><br></p>\r\n', 'contactus', 0),
(5, 'Privacy Policy', '<p><i><b><font color="#632423">Privacy Policy for Coming soon.....</font></b></i><br></p>\r\n', 'privacy_policy', 0),
(8, 'Terms&condition', '<p><font color="#632423"><i><b>Terms &amp; Condition for Coming soon.....</b></i></font><br></p>\r\n', 'terms_condition', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `amount` float NOT NULL DEFAULT '0',
  `generate_date` datetime DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `descrition` longtext,
  `short_descrition` mediumtext,
  `image_url` varchar(500) NOT NULL,
  `in_stock` int(1) NOT NULL DEFAULT '1',
  `isbn` varchar(25) DEFAULT NULL,
  `upc` varchar(25) DEFAULT NULL,
  `sku` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `retail_price` float DEFAULT NULL,
  `sale_price` float DEFAULT NULL,
  `mnf_name` varchar(200) DEFAULT NULL,
  `mnf_sku` varchar(25) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `buy_url` varchar(500) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `advetiser_name` varchar(100) DEFAULT NULL,
  `advertiser_id` int(25) DEFAULT NULL,
  `ad_id` int(25) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=166 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descrition`, `short_descrition`, `image_url`, `in_stock`, `isbn`, `upc`, `sku`, `price`, `retail_price`, `sale_price`, `mnf_name`, `mnf_sku`, `currency`, `buy_url`, `parent_id`, `advetiser_name`, `advertiser_id`, `ad_id`, `type`, `created`, `modified`) VALUES
(1, 'ROSE FUR SWEATER', 'This furry sweatshirt has rosette detailing. A sweet alternative to a plain old sweatshirt. Try it with a full tulle skirt!  Brand: Lulumari', NULL, 'http://d2csjd0bj2nauk.cloudfront.net/products/37660f27-b456-4386-83b4-5fa5ae25babf_s.jpg', 1, NULL, '', 'PK12805', 68.99, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/fs-bin/click?id=ric4naJVaQQ&subid=&offerid=280854.1&type=10&tmpid=11695&RD_PARM1=http%253A%252F%252Fwww.shoptiques.com%252Fproducts%252Frose-fur-sweater"><img alt="icon" border="0" ', 5, 'Shoptiques', 38126, 0, 1, '2014-03-28 11:56:13', '2014-11-08 04:28:44'),
(2, ' Blue Long Sleeve Contrast PU Leather Lace Split Dress ', 'Blue contrast PU leather lace split dress with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385704811991540462.jpg', 1, NULL, '', 'dress131129004', 49.89, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10128&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlue-Long-Sleeve-Contrast-PU-Leather-Lace-Split-Dress-p-153912-cat-1727.html', 6, 'SheInside', 38010, 10128, 1, '2014-03-29 01:03:46', '2014-03-29 01:03:46'),
(3, ' White Long Sleeve Metal Beading Neckline Retro Print Dress ', 'White metal beading neckline retro print dress with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1384327042454354467.jpg', 1, NULL, '', 'dresz13111303', 31.95, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10155&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FWhite-Long-Sleeve-Metal-Beading-Neckline-Retro-Print-Dress-p-152127-cat-1727.html', 6, 'SheInside', 38010, 10155, 1, '2014-03-29 01:03:57', '2014-03-29 01:03:57'),
(4, ' Grey Long Sleeve Diamond Patterned Drawstring Dress ', 'Grey diamond patterned drawstring dress with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385108102053416487.jpg', 1, NULL, '', 'dress131122004', 32.64, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10117&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FGrey-Long-Sleeve-Diamond-Patterned-Drawstring-Dress-p-153027-cat-1727.html', 6, 'SheInside', 38010, 10117, 1, '2014-03-29 01:04:01', '2014-03-29 01:04:01'),
(5, ' Leopard Lapel Long Sleeve Slim Straight Dress ', 'Leopard slim straight dress with lapel and long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385789947566083983.jpg', 1, NULL, '', 'dress13103008', 34.1, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10161&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FLeopard-Lapel-Long-Sleeve-Slim-Straight-Dress-p-150010-cat-1727.html', 6, 'SheInside', 38010, 10161, 1, '2014-03-29 01:04:08', '2014-03-29 01:04:08'),
(6, ' Yellow Short Sleeve Backless Bow Mini Dress ', 'Yellow backless bow mini dress with short sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201403/1394619399231460984.jpg', 1, NULL, '', 'dress140210402', 43, NULL, 29.3, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10171&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FYellow-Short-Sleeve-Backless-Bow-Dress-p-159778-cat-1727.html', 6, 'SheInside', 38010, 10171, 1, '2014-04-02 00:21:04', '2014-04-03 20:17:14'),
(164, ' Mitchell & Ness ''Knicks - Role Player'' Tailored Fit Fleece ', 'A soft, varsity-style fleece features color-blocked sleeves, tipped trim, contrast shoulders and a chenille team logo front and center. Color(s): royal blue. Brand: MITCHELL & NESS. Style Name: Mitchell & Ness ''Knicks - Role Player'' Tailored Fit Fleece. Style Number: 886023.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/5/_9825745.jpg', 1, NULL, '', '86166758', 150, NULL, 150, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.86166758&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3880730%3Fcm_cat%3Ddatafeed%26cm_pla%3Douterwear%3Amen%3Ashort_jacket_coat%26cm_ite%3Dmitchell_%2526_ness_%2527knicks_-_role_player%2527_tailored_fit_fleece%3A886023%26cm_ven%3DLinkshare', 8, 'NORDSTROM.com', 1237, 86166758, 1, '2014-11-03 01:07:04', '2014-11-03 01:07:04'),
(9, ' Black Sleeveless Sheer Backless Lace Bodycon Dress ', 'Black sheer backless lace bodycon dress without sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201403/1394693172058835756.JPG', 1, NULL, '', 'dress13022103', 26, NULL, 18.99, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10166&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Sleeveless-Sheer-Backless-Lace-Bodycon-Dress-p-109566-cat-1727.html', 6, 'SheInside', 38010, 10166, 1, '2014-04-02 00:21:26', '2014-04-03 20:13:31'),
(10, ' Navy Fur Hooded Long Sleeve Drawstring Coat ', 'Navy fur hooded drawstring coat with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201210/1350546042838618371.jpg', 1, NULL, '', 'outwear12101820', 36.49, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10087&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FNavy-Fur-Hooded-Long-Sleeve-Drawstring-Coat-p-101533-cat-1735.html', 5, 'SheInside', 38010, 10087, 1, '2014-04-02 00:25:22', '2014-04-02 00:25:22'),
(11, ' Red Long Sleeve Zipper Ruffle Woolen Coat ', 'Red zipper ruffle woolen coat with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1383289074148989047.jpg', 1, NULL, '', 'outer131101008', 35.9, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10126&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FRed-Long-Sleeve-Zipper-Ruffle-Woolen-Coat-p-150338-cat-1735.html', 5, 'SheInside', 38010, 10126, 1, '2014-04-02 00:27:39', '2014-04-02 00:27:39'),
(12, ' Black Long Sleeve Front Flecked Zip Cardigan ', 'Black front flecked zip cardigan with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201310/1382609824129120547.jpg', 1, NULL, '', 'sweater131024503', 29.99, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10132&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Long-Sleeve-Front-Flecked-Zip-Cardigan-p-149326-cat-1734.html', 5, 'SheInside', 38010, 10132, 1, '2014-04-02 00:27:48', '2014-04-02 00:27:48'),
(163, ' M / Salt and Pepper / KN018B-GY14 ', 'Todd is all about the contrasting of Modern design and Vintage appeal, which is why we''re proud to introduce the Contrast Sleeve Sweatshirt. 80% Cotton 20% Polyester Made in Canada *Does not ship to Japan', NULL, 'https://cdn.shopify.com/s/files/1/0186/1574/products/KN018B-GY14-A_large.jpg?v=1412943691', 1, NULL, '', '906392657', 120, NULL, NULL, '', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=0.906392657&type=15&murl=http%3A%2F%2Fwww.toddsnyder.com%2Fproducts%2Fcontrast-sleeve-sweatshirt-in-salt-and-pepper', 4, '', 39608, 906392657, 1, '2014-10-15 01:24:17', '2014-10-15 01:24:17'),
(14, ' Boulee Ciara Sleeveless Dress ', 'Boulee offers a collection of eye candy - silky dresses, tanks, and tops. Designed for those confident enough to show some skin, this line has everything from fitted pencil skirts, draped trapeze dresses, and intricate cut-outs.   Show some skin in this sexy, cutout dress! One shoulder sleeve with cut-outs in all the right places. Available in Royal, Black and Purple.    82% nylon, 18% spandex.  Dry clean.  Made in the USA.', NULL, 'http://www.shopmanhattanite.com/images/B-CIARA-NS-R.jpg', 1, NULL, '', '4520', 198, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.4520&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fboulee-ciara-sleeveless-dress-p-4520.html', 6, 'Shopmanhattanite', 25065, 4520, 1, '2014-04-02 20:51:43', '2014-04-02 20:51:43'),
(15, ' Boulee Serena Dress in Grey/Black ', 'Boulee offers a collection of eye candy - silky dresses, tanks, and tops. Designed for those confident enough to show some skin, this line has everything from fitted pencil skirts, draped trapeze dresses, and intricate cut-outs.   Slip on this sexy dress if you want to turn heads! Colorblock strapless dress with zipper back.    Dry clean.  Made in the USA.', NULL, 'http://www.shopmanhattanite.com/images/B-SERENA-GRY-BLK.jpg', 1, NULL, '', '3655', 210, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.3655&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fboulee-serena-dress-in-greyblack-p-3655.html', 6, 'Shopmanhattanite', 25065, 3655, 1, '2014-04-02 20:51:50', '2014-04-02 20:51:50'),
(16, ' Sky Fannie Dress in Black ', 'Elegant and sexy, Sky dresses and tops are absolutely amazing! Sky offers a line of quintessential luxurious and glamorous go-to dresses and tops for a night out or special occasion.   Off the shoulder fringe beaded dress. Tie belt included.   Lining: 93% rayon, 7% spandex.  Dry clean.  Made in the U.S.A.', NULL, 'http://www.shopmanhattanite.com/images/SKY-H515RX.jpg', 1, NULL, '', '4486', 132, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.4486&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fsky-fannie-dress-in-black-p-4486.html', 6, 'Shopmanhattanite', 25065, 4486, 1, '2014-04-02 20:51:58', '2014-04-02 20:51:58'),
(17, ' Sky Khalima Maxi Dress in Leopard ', 'Elegant and sexy, Sky dresses and tops are absolutely amazing! Sky offers a line of quintessential luxurious and glamorous go-to dresses and tops for a night out or special occasion.   Halter leopard maxi dress with O-ring empire waist.   94% rayon, 6% spandex.  Dry clean.  Made in the U.S.A.', NULL, 'http://www.shopmanhattanite.com/images/SKY-I580ZV.jpg', 1, NULL, '', '4489', 218, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.4489&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fsky-khalima-maxi-dress-in-leopard-p-4489.html', 6, 'Shopmanhattanite', 25065, 4489, 1, '2014-04-02 20:52:04', '2014-04-02 20:52:04'),
(18, ' Boulee Deja Dress in Black and Black Mesh ', 'Boulee offers a collection of eye candy - silky dresses, tanks, and tops. Designed for those confident enough to show some skin, this line has everything from fitted pencil skirts, draped trapeze dresses, and intricate cut-outs.   Slip on this sexy dress if you want to turn heads! Knee-length halter dress with side cutouts.   Dry clean.  Made in the USA.   As Seen ON:  Jenna Dewan-Tatum', NULL, 'http://www.shopmanhattanite.com/images/B-DEJA_JennaDewan.jpg', 1, NULL, '', '3653', 196, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.3653&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fboulee-deja-dress-in-black-and-black-mesh-p-3653.html', 6, 'Shopmanhattanite', 25065, 3653, 1, '2014-04-02 20:52:25', '2014-04-02 20:52:25'),
(19, ' Boulee Blake Scuba Mesh Dress in Black ', 'Boulee offers a collection of eye candy - silky dresses, tanks, and tops. Designed for those confident enough to show some skin, this line has everything from fitted pencil skirts, draped trapeze dresses, and intricate cut-outs.   Rock this super sexy dress with killer heels or boots! Draped neckline with cut-out sides. Short sleeve minidress.  Dry clean.  Made in the USA.   As Seen On:  Stephanie Pratt', NULL, 'http://www.shopmanhattanite.com/images/B-BLAKE_StephaniePratt.jpg', 1, NULL, '', '3650', 219, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.3650&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fboulee-blake-scuba-mesh-dress-in-black-p-3650.html', 6, 'Shopmanhattanite', 25065, 3650, 1, '2014-04-02 20:52:31', '2014-04-02 20:52:31'),
(20, ' Black Contrast PU Leather Mickey Print Dress ', 'Black contrast PU leather mickey print dress with long sleeves and round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385789528574265916.jpg', 1, NULL, '', 'dress131106003', 27.35, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10110&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Contrast-PU-Leather-Mickey-Print-Dress-p-150940-cat-1727.html', 6, 'SheInside', 38010, 10110, 1, '2014-04-02 20:53:02', '2014-04-02 20:53:02'),
(21, ' Black Round Neck Cape Chiffon Dress ', 'Black cape chiffon dress with round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201403/1395380263304104678.jpg', 1, NULL, '', 'dress14010915', 34.83, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10169&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Round-Neck-Cape-Chiffon-Dress-p-158611-cat-1727.html', 6, 'SheInside', 38010, 10169, 1, '2014-04-02 20:53:09', '2014-04-03 20:07:54'),
(22, ' Black Long Sleeve Contrast Shaggy Letters Print Dress ', 'Black long sleeves contrast shaggy letters print dress witn round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201312/1386640483891281251.jpg', 1, NULL, '', 'dress131209001', 26.9, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291421.10137&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Long-Sleeve-Contrast-Shaggy-Letters-Print-Dress-p-155115-cat-1727.html', 6, 'SheInside', 38010, 10137, 1, '2014-04-07 22:43:58', '2014-04-07 22:43:58'),
(25, ' Green Long Puff Sleeve Plaid Loose Dress ', 'Green long puff sleeves plaid loose dress with round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385444337340039825.jpg', 1, NULL, '', 'dress131126005', 29, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291421.10120&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FGreen-Long-Puff-Sleeve-Plaid-Loose-Dress-p-153401-cat-1727.html', 6, 'SheInside', 38010, 10120, 1, '2014-04-07 22:45:43', '2014-04-07 22:45:43'),
(26, ' TRUKFIT Winners Are Born Mens Raglan Tee ', 'Trukfit raglan tee. Born Winners text screened on chest. Trukfit logo patch near bottom hem. Camouflage dot print 3/4 length raglan sleeves. Trukfit logo patch at left sleeve opening. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/68114444/0/1/250/68114444.jpg', 1, NULL, '', '262444931', 43.99, NULL, 43.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.262444931&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Ftrukfit-winners-are-born-mens-raglan-tee%2F262444931.html', 4, 'Buy.com', 36342, 262444931, 1, '2014-04-07 23:39:34', '2014-04-07 23:39:34'),
(27, ' TRUKFIT High Mens T-Shirt ', 'Trukfit High tee. High with cloud fill and Trukfit logo text screened on front. Trukfit logo screened at left sleeve. Short sleeve. Crew neck. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/68942021/0/1/250/68942021.jpg', 1, NULL, '', '263152671', 27.99, NULL, 27.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.263152671&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Ftrukfit-high-mens-t-shirt%2F263152671.html', 4, 'Buy.com', 36342, 263152671, 1, '2014-04-07 23:39:50', '2014-04-07 23:39:50'),
(28, 'BLUE CROWN Cosmic Contrast Boys Pocket Tee', 'Blue Crown Cosmic Contrast pocket tee. Contrast cosmic print slip chest pocket. Short sleeve. Crew neck. 50% polyester/38% cotton/12% rayon. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/68756872/0/1/500/68756872.jpg', 1, NULL, '', '263026538', 15.99, NULL, NULL, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/fs-bin/click?id=ric4naJVaQQ&subid=&offerid=327053.1&type=10&tmpid=6933&RD_PARM1=http%3A%2F%2Ftillys.shop.rakuten.com%2Fp%2Fblue-crown-cosmic-contrast-boys-pocket-tee%2F263026538.html', 4, 'Buy.com', 36342, 263026538, 1, '2014-04-07 23:40:03', '2014-04-08 00:22:51'),
(29, ' TRUKFIT Martian Mens T-Shirt ', 'Trukfit Martian tee. Martian graphic screened on chest. Trukfit logo screened on left sleeve. Short sleeve. Crew neck. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/59719863/0/1/250/59719863.jpg', 1, NULL, '', '255423474', 22.97, NULL, 22.97, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.255423286&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Ftrukfit-martian-mens-t-shirt%2F255423286.html', 4, 'Buy.com', 36342, 255423286, 1, '2014-04-07 23:40:54', '2014-04-07 23:40:54'),
(31, ' TRUKFIT No Worries Mens T-Shirt ', 'Trukfit No Worries tee. I Ain''t Got No Worries text graphic heavily screened on front. Trukfit logo screened on left sleeve. Short sleeve. Crew neck. 50% cotton/50% polyester. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/68644300/0/1/250/68644300.jpg', 1, NULL, '', '262767222', 27.99, NULL, 27.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.262767222&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Ftrukfit-no-worries-mens-t-shirt%2F262767222.html', 4, 'Buy.com', 36342, 262767222, 1, '2014-04-07 23:41:06', '2014-04-07 23:41:06'),
(32, ' TRUKFIT Vines Mens T-Shirt ', 'Trukfit Vines tee. Allover venus fly trap print with Trukfit logo screened on chest. Short sleeve. Crew neck. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/59592884/0/1/250/59592884.jpg', 1, NULL, '', '255349407', 19.97, NULL, 19.97, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.255349407&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Ftrukfit-vines-mens-t-shirt%2F255349407.html', 4, 'Buy.com', 36342, 255349407, 1, '2014-04-07 23:41:12', '2014-04-07 23:41:12'),
(33, ' TRUKFIT Feelin Spacey Mens T-Shirt ', 'Trukfit Feelin Spacey tee. Martians Truk The Wurl text on front with Trukfit Martian logo. Trukfit logo on left sleeve. Short sleeve. Crew neck. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/53377387/0/1/250/53377387.jpg', 1, NULL, '', '250778574', 17.97, NULL, 17.97, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.250778574&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Ftrukfit-feelin-spacey-mens-t-shirt%2F250778574.html', 4, 'Buy.com', 36342, 250778574, 1, '2014-04-08 23:30:33', '2014-04-08 23:30:33'),
(34, ' TRUKFIT Martian Mens T-Shirt ', 'Trukfit Martian tee. Martian graphic screened on chest. Trukfit logo screened on left sleeve. Short sleeve. Crew neck. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/68239609/0/1/250/68239609.jpg', 1, NULL, '', '262614747', 27.99, NULL, 27.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.262614747&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Ftrukfit-martian-mens-t-shirt%2F262614747.html', 4, 'Buy.com', 36342, 262614747, 1, '2014-04-08 23:31:33', '2014-04-08 23:31:33'),
(162, ' M / Mast Blue / KN018B-BL07 ', 'Todd is all about the contrasting of Modern design and Vintage appeal, which is why we''re proud to introduce the Contrast Sleeve Sweatshirt. 80% Cotton 20% Polyester Made in Canada *Does not ship to Japan', NULL, 'https://cdn.shopify.com/s/files/1/0186/1574/products/KN018B-Bloomingdales-A_large.jpg?v=1412943667', 1, NULL, '', '906392549', 120, NULL, NULL, '', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=0.906392549&type=15&murl=http%3A%2F%2Fwww.toddsnyder.com%2Fproducts%2Fcontrast-sleeve-sweatshirt-in-mast-blue', 4, '', 39608, 906392549, 1, '2014-10-15 01:24:09', '2014-10-15 01:24:09'),
(36, 'Jersey Cowl Neck Top', 'Jersey Cowl Neck Top', NULL, 'http://www.us.purecollection.com/assets/+quality:90/+size:575:725:crop/product/lw-981_cranberry_1.jpg', 0, '', '', 'LW-981    CRANB 16', 54, 54, NULL, 'Pure Collection', '', 'USD', 'http://www.jdoqocy.com/click-7386303-10777539?url=http%3A%2F%2Fwww.us.purecollection.com%2FJersey_Cowl_Neck_Top.htm%3FdiscountCode%3DCOMJCT%26utm_source%3DCOMJCT%26utm_medium%3DCOMJCT&cjsku=LW-981++++CRANB+16', 2, 'Pure Collection', 2970358, NULL, 0, '2014-04-11 04:43:09', '2014-04-11 04:43:09'),
(37, ' Black Off the Shoulder Hollow Slim T-Shirt ', 'Black Off the Shoulder Hollow Slim T-Shirt.', NULL, 'http://img.sheinside.com/images/sheinside.com/201404/1396418083844074466.jpg', 1, NULL, '', 'tee140402007', 19.25, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291421.10145&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Off-the-Shoulder-Hollow-Slim-T-Shirt-p-165565-cat-1738.html', 3, 'SheInside', 38010, 10145, 1, '2014-04-11 06:55:47', '2014-04-11 06:55:47'),
(38, 'Men''s Go. Sea. Do. Anchor Cool Tee', 'Men''s Go. Sea. Do. Anchor Cool Tee', NULL, 'http://images.lifeisgood.com/Mens-Cool-Tee-Go-Sea-Do_24953_1_zm.png', 0, '', '887941047673', '24953-XL', 32, NULL, 32, 'Life is good', 'mp-24953-XL', 'USD', 'http://www.dpbolvw.net/click-7386303-10879273?url=http%3A%2F%2Flink.mercent.com%2Fredirect.ashx%3Fmr%3AmerchantID%3DLifeIsGood%26mr%3AtrackingCode%3D02F7B8D1-5BB4-E311-AC1D-BC305BF933C0%26mr%3AtargetUrl%3Dhttp%3A%2F%2Fwww.lifeisgood.com%2Ftee-types%2Fcool-tees%2Fmen%2Fmens-go.-sea.-do.-anchor-cool-tee-24953.html%253fsize%253dXL&cjsku=24953-XL', 4, 'Life is good', 3259588, NULL, 0, '2014-04-13 23:34:04', '2014-04-13 23:34:04'),
(39, ' Red Zipper Ruffle A Line Skirt ', 'Red Zipper Ruffle A Line Skirt.', NULL, 'http://img.sheinside.com/images/sheinside.com/201309/1379406619787240299.jpg', 1, NULL, '', 'skirt130917002', 22.33, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291421.10214&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FRed-Zipper-Ruffle-A-Line-Skirt-p-145550-cat-1732.html', 6, 'SheInside', 38010, 10214, 1, '2014-04-16 08:17:35', '2014-05-13 23:20:35'),
(44, ' Lake Girl Wind Breaker Jacket - XL ', 'The shore beckons. Answer the call in style. Lake Girl Windbreaker Jacket Don''t let the weather dictate your fun: throw on a cute windbreaker and head out. A playful embroidered Lake Girl crest incorporates paddles and a crown; 100% nylon outer layer wards off chill from brisk breezes with a soft polyester lining to keep you comfortable. On the back, Lake Girl embroidery is a final flourish. Imported. S-XLAlso available:Lake Girl Zip HoodieLake Girl Ball Cap&gt;Lake Girl Thermal Henley', NULL, 'http://img.rakuten.com/PIC/62522070/0/1/250/62522070.jpg', 1, NULL, '', '257871646', 54.98, NULL, 54.98, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.257871646&type=15&murl=http%3A%2F%2Fwww.rakuten.com%2Fretail%2Fproduct.asp%3Fsku%3D257871646%26listingid%3D316290543', 3, 'Buy.com', 36342, 257871646, 1, '2014-04-18 10:58:10', '2014-04-18 10:58:10'),
(45, ' Old Time Hockey Detroit Red Wings Women''s Sadie Long Sleeve Thermal Fooler T-Shirt ', 'Show off your champions of the ice in this cute womens Sadie long-sleeve thermal Fooler t-shirt from Old Time Hockey(r). It features your NHL(r) teams name and logo in a distressed screenprint across the chest; thermal sleeves provide a two-in-one, faux-layered look.', NULL, 'http://img.rakuten.com/PIC/29588341/0/1/250/29588341.jpg', 1, NULL, '00673801704516', '228721560', 29.99, NULL, 28.97, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.228721560&type=15&murl=http%3A%2F%2Fwww.rakuten.com%2Fprod%2Fold-time-hockey-detroit-red-wings-women-s-sadie-long-sleeve-thermal%2F228721560.html', 3, 'Buy.com', 36342, 228721560, 1, '2014-04-18 10:58:44', '2014-04-18 10:58:44'),
(47, ' MY BEST FRIEND IS MY Old English Sheepdog Women Hoodie ', 'This Old English Sheepdog Hoodie has undergone extensive quality control before reaching you. We have over 10 years experience in selling products on the internet. The items are created by us and are even customizable! Just contact our great customer service for any questions. Hoodie BEST FRIEND / HAND Old English Sheepdog', NULL, 'http://img.rakuten.com/PIC/67106342/0/1/250/67106342.jpg', 1, NULL, '', '261580669', 36, NULL, 36, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.261580669&type=15&murl=http%3A%2F%2Fidakoos.store.buy.com%2Fp%2Fmy-best-friend-is-my-old-english-sheepdog-women-hoodie%2F261580669.html', 2, 'Buy.com', 36342, 261580669, 1, '2014-04-18 10:58:54', '2014-04-18 10:58:54'),
(48, ' MY BEST FRIEND IS MY Old English Sheepdog Women Hoodie ', 'This Old English Sheepdog Hoodie has undergone extensive quality control before reaching you. We have over 10 years experience in selling products on the internet. The items are created by us and are even customizable! Just contact our great customer service for any questions. Hoodie BEST FRIEND / HAND Old English Sheepdog', NULL, 'http://img.rakuten.com/PIC/67106111/0/1/250/67106111.jpg', 1, NULL, '', '261580667', 35, NULL, 35, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.261580667&type=15&murl=http%3A%2F%2Fidakoos.store.buy.com%2Fp%2Fmy-best-friend-is-my-old-english-sheepdog-women-hoodie%2F261580667.html', 2, 'Buy.com', 36342, 261580667, 1, '2014-04-18 10:58:58', '2014-04-18 10:58:58'),
(50, ' Francisco Jose de Goya Y Lucientes Time and the Old Women - 16 x 24 Premium Archival Print ', '16 x 24 Francisco Jose de Goya Y Lucientes Time and the Old Women premium archival print reproduced to meet museum quality standards. Our museum quality archival prints are produced using high-precision print technology for a more accurate reproduction printed on high quality, heavyweight matte presentation paper with fade-resistant, archival inks. This artwork is produced with extra white border space for future framing. We present a comprehensive collection of exceptional art reproductions by Francisco Jose de Goya Y Lucientes.', NULL, 'http://img.rakuten.com/PIC/68498043/0/1/250/68498043.jpg', 1, NULL, '', '262862506', 24.99, NULL, 24.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.262862506&type=15&murl=http%3A%2F%2Fwww.rakuten.com%2Fretail%2Fproduct.asp%3Fsku%3D262862506%26listingid%3D335461764', 2, 'Buy.com', 36342, 262862506, 1, '2014-04-18 10:59:05', '2014-04-18 10:59:05'),
(51, ' Black Sleeveless Contrast Lace Shoulder Dress ', 'Black Sleeveless Contrast Lace Shoulder Dress.', NULL, 'http://img.sheinside.com/images/sheinside.com/201309/1375867217344050796.jpg', 1, NULL, '', 'dresz13073102', 57.34, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291421.10134&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Sleeveless-Contrast-Lace-Shoulder-Dress-p-144264-cat-1727.html', 6, 'SheInside', 38010, 10134, 1, '2014-04-20 00:08:00', '2014-04-20 00:08:00'),
(52, ' Black Long Sleeve Vintage Floral Pleated Dress ', 'Black Long Sleeve Vintage Floral Pleated Dress.', NULL, 'http://img.sheinside.com/images/sheinside.com/201312/1386831838459872784.jpg', 1, NULL, '', 'dress13121202', 30.98, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291421.10260&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Long-Sleeve-Vintage-Floral-Pleated-Dress-p-155575-cat-1727.html', 6, 'SheInside', 38010, 10260, 1, '2014-04-20 01:16:54', '2014-04-20 01:16:54'),
(53, ' Black Long Sleeve Oil Painting Character Print Ruffle Dress ', 'Black Long Sleeve Oil Painting Character Print Ruffle Dress.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385790626833968254.jpg', 1, NULL, '', 'dresz13112804', 63.93, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291421.10287&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Long-Sleeve-Oil-Painting-Character-Print-Ruffle-Dress-p-154081-cat-1727.html', 6, 'SheInside', 38010, 10287, 1, '2014-04-20 01:19:33', '2014-04-20 01:19:33'),
(54, ' LRG Unfocused Mens T-Shirt ', 'LRG Unfocused tee. LRG logo embroidery at left chest. Contrast lower panel. LRG logo tag at bottom hem. Short sleeve. V-neck. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/68114754/0/1/250/68114754.jpg', 1, NULL, '', '262445032', 31.99, NULL, 31.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.262445032&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-unfocused-mens-t-shirt%2F262445032.html', 4, 'Buy.com', 36342, 262445032, 1, '2014-04-22 23:36:04', '2014-04-22 23:36:04'),
(55, ' LRG Abuse Your Illusion Mens Shirt ', 'LRG Abuse Your Illusion woven shirt. Button front. Button slip chest pocket with LRG logo patch. Allover distorted graphic print. LRG logo tag at bottom hem. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/69169276/0/1/250/69169276.jpg', 1, NULL, '', '263324669', 58.99, NULL, 58.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.263324669&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-abuse-your-illusion-mens-shirt%2F263324669.html', 4, 'Buy.com', 36342, 263324669, 1, '2014-04-22 23:37:54', '2014-04-22 23:37:54'),
(56, ' LRG Floral Cursive Mens T-Shirt ', 'LRG Floral Cursive tee. Floral LRG logo screened on front. LRG tags at neckline and bottom hem. Short sleeve. Crew neck. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/68114527/0/1/250/68114527.jpg', 1, NULL, '', '262444984', 27.99, NULL, 27.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.262444984&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-floral-cursive-mens-t-shirt%2F262444984.html', 4, 'Buy.com', 36342, 262444984, 1, '2014-04-22 23:38:04', '2014-04-22 23:38:04'),
(57, ' LRG Crew Overspray Mens T-Shirt ', 'LRG Crew Overspray tee. Allover geometric shapes with overspray accents. LRG tags at neckline and bottom hem. Tonal raglan short sleeve. Crew neck. 60% cotton/40% polyester. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/67521328/0/1/250/67521328.jpg', 1, NULL, '', '261947766', 38.99, NULL, 38.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.261947766&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-crew-overspray-mens-t-shirt%2F261947766.html', 4, 'Buy.com', 36342, 261947766, 1, '2014-04-22 23:38:44', '2014-04-22 23:38:44'),
(58, ' LRG Abuse Your Illusion Mens Pocket Tank ', 'LRG Abuse Your Illusion pocket tank. Allover distorted graphic print. Contrast notched slip chest pocket. Contrast trim. LRG tags at neckline and bottom hem. 60% cotton/40% polyester. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/69169053/0/1/250/69169053.jpg', 1, NULL, '', '263324572', 33.99, NULL, 33.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.263324572&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-abuse-your-illusion-mens-pocket-tank%2F263324572.html', 4, 'Buy.com', 36342, 263324572, 1, '2014-04-22 23:38:59', '2014-04-22 23:38:59'),
(59, ' LRG So Raw Mens T-Shirt ', 'LRG So Raw tee. Allover colored dot print with lion graphic screened on front. LRG tags at neckline and bottom hem. Short sleeve. Crew neck. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/69169021/0/1/250/69169021.jpg', 1, NULL, '', '263324634', 38.99, NULL, 38.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.263324634&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-so-raw-mens-t-shirt%2F263324634.html', 4, 'Buy.com', 36342, 263324634, 1, '2014-04-22 23:39:42', '2014-04-22 23:39:42'),
(60, ' LRG Wolfland Mens Baseball Tee ', 'LRG Wolfland baseball tee. LRG logo screened at welt chest pocket. Contrast 3/4 length camouflage print sleeves. Crew neck. 60% cotton/40% polyester. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/66039205/0/1/250/66039205.jpg', 1, NULL, '', '260656868', 34.97, NULL, 34.97, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.260656868&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-wolfland-mens-baseball-tee%2F260656868.html', 4, 'Buy.com', 36342, 260656868, 1, '2014-04-22 23:39:58', '2014-04-22 23:39:58'),
(61, ' LRG Tree 47 Mens Pocket Tank ', 'LRG Tree 47 pocket tank. Allover graphic print with contrast snap button slip chest pocket. Contrast trim. LRG tags at neckline and bottom hem. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/69169125/0/1/250/69169125.jpg', 1, NULL, '', '263324638', 33.99, NULL, 33.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.263324638&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-tree-47-mens-pocket-tank%2F263324638.html', 4, 'Buy.com', 36342, 263324638, 1, '2014-04-22 23:40:19', '2014-04-22 23:40:19'),
(62, ' LRG Lion Rock Mens T-Shirt ', 'LRG Lion Rock tee. Superimposed Rasta colored lion graphics with Lion Rock text screened on front. LRG tags at neckline and bottom hem. Short sleeve. Crew neck. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/62847330/0/1/250/62847330.jpg', 1, NULL, '', '258173985', 29.99, NULL, 29.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.258173985&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-lion-rock-mens-t-shirt%2F258173985.html', 4, 'Buy.com', 36342, 258173985, 1, '2014-04-22 23:40:26', '2014-04-22 23:40:26'),
(63, ' LRG Hawaiian Safari Mens Pocket Tee ', 'LRG Hawaiian Safari pocket tee. Hawaiian safari print contrast slip chest pocket. LRG tags at neckline and bottom hem. Short sleeve. Crew neck. 100% cotton. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/69169163/0/1/250/69169163.jpg', 1, NULL, '', '263324573', 25.99, NULL, 25.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.263324573&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-hawaiian-safari-mens-pocket-tee%2F263324573.html', 4, 'Buy.com', 36342, 263324573, 1, '2014-04-22 23:40:55', '2014-04-22 23:40:55'),
(64, ' LRG Hawaiian Safari Mens Shirt ', 'LRG Hawaiian Safari woven shirt. Button front. Slip chest pocket with LRG logo patch. Allover jungle safari Hawaiian print. LRG logo tag at bottom hem. 55% cotton/45% linen. Machine wash. Imported.', NULL, 'http://img.rakuten.com/PIC/69169057/0/1/250/69169057.jpg', 1, NULL, '', '263324604', 68.99, NULL, 68.99, 'Buy.com', NULL, NULL, 'http://affiliate.rakuten.com/link?id=ric4naJVaQQ&offerid=288682.263324604&type=15&murl=http%3A%2F%2Ftillys.store.buy.com%2Fp%2Flrg-hawaiian-safari-mens-shirt%2F263324604.html', 4, 'Buy.com', 36342, 263324604, 1, '2014-04-30 23:35:59', '2014-04-30 23:35:59'),
(65, ' Local Celebrity Hi Hater Tee in White ', 'Local Celebrity Hi Hater Tee in White  Hi Hater on Front, Bye Hater on Back', NULL, 'http://www.shopmanhattanite.com/images/Screen%20Shot%202014-05-13%20at%2012.10.59%20PM.png', 1, NULL, '', '5824', 44, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5824&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Flocal-celebrity-hi-hater-tee-in-white-p-5824.html', 5, 'Shopmanhattanite', 25065, 5824, 1, '2014-05-24 02:18:47', '2014-05-24 02:18:47'),
(66, ' Local Celebrity Jene Sais Tee in Cardinal PRE-ORDER ', 'Local Celebrity Jene Sais Tee in Cardinal  Fabric: Cotton Poly  Expected to ship the end of May.', NULL, 'http://www.shopmanhattanite.com/images/Screen%20Shot%202014-05-13%20at%2010.32.08%20AM.png', 1, NULL, '', '5828', 48, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5828&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Flocal-celebrity-jene-sais-tee-in-cardinal-preorder-p-5828.html', 5, 'Shopmanhattanite', 25065, 5828, 1, '2014-05-24 02:18:52', '2014-05-24 02:18:52'),
(67, ' Local Celebrity Beach Please Tank in Deep Ocean PRE-ORDER ', 'Local Celebrity Beach Please Tank in Deep Ocean   Fabric: Cotton Poly  Expected to ship the end of May.', NULL, 'http://www.shopmanhattanite.com/images/Screen%20Shot%202014-05-13%20at%2012.13.31%20PM.png', 1, NULL, '', '5826', 40, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5826&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Flocal-celebrity-beach-please-tank-in-deep-ocean-preorder-p-5826.html', 5, 'Shopmanhattanite', 25065, 5826, 1, '2014-05-24 02:18:58', '2014-05-24 02:18:58'),
(68, ' Local Celebrity Hug Dealer Tank in Black ', 'Local Celebrity Hug Dealer Muscle Tank in Black  50% cotton , 50% poly  Rib knit collar  Raw cut sleeve openings', NULL, 'http://www.shopmanhattanite.com/images/hugdealer.png', 1, NULL, '', '5821', 38, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5821&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Flocal-celebrity-hug-dealer-tank-in-black-p-5821.html', 5, 'Shopmanhattanite', 25065, 5821, 1, '2014-05-24 02:19:04', '2014-05-24 02:19:04'),
(69, ' Local Celebrity Clothes Before Bros Tee in Black ', 'Local Celebrity Clothes Before Bros Tee in Black  50% poly , 38% cotton , 12% rayon', NULL, 'http://www.shopmanhattanite.com/images/Screen%20Shot%202014-05-13%20at%2012.41.41%20PM.png', 1, NULL, '', '5823', 44, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5823&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Flocal-celebrity-clothes-before-bros-tee-in-black-p-5823.html', 5, 'Shopmanhattanite', 25065, 5823, 1, '2014-05-24 02:19:09', '2014-05-24 02:19:09'),
(70, ' Local Celebrity Creme De La Creme Tee in Black PRE-ORDER ', 'Local Celebrity Creme De La Creme Tee in Black  Fabric: 50% Polyester / 50% Cotton / Burnout Wash  Expected to ship the end of May.', NULL, 'http://www.shopmanhattanite.com/images/Screen%20Shot%202014-05-13%20at%2012.13.45%20PM.png', 1, NULL, '', '5827', 44, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5827&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Flocal-celebrity-creme-de-la-creme-tee-in-black-preorder-p-5827.html', 5, 'Shopmanhattanite', 25065, 5827, 1, '2014-05-24 02:19:17', '2014-05-24 02:19:17'),
(71, ' Local Celebrity Trust Me Tee in White ', 'Local Celebrity Trust Me Tee in White  50% cotton , 50% poly  Rib knit neckline  Rolled sleeves', NULL, 'http://www.shopmanhattanite.com/images/large/trustme.png', 1, NULL, '', '5822', 48, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5822&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Flocal-celebrity-trust-me-tee-in-white-p-5822.html', 5, 'Shopmanhattanite', 25065, 5822, 1, '2014-05-24 02:19:22', '2014-05-24 02:19:22'),
(72, ' Chaser Nirvana Amp Dolman Tee in Grey ', 'This oversized, scoop-neck jersey top features a Nirvana amp graphic. Dropped shoulder seams. Short sleeves. 22" long, measured from shoulder.   50% polyester, 38% cotton, 12% rayon. Machine wash cold. Made in the U.S.A.', NULL, 'http://www.shopmanhattanite.com/images/CHA-CW921-NIRV052.jpg', 1, NULL, '', '4452', 43.4, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.4452&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fchaser-nirvana-amp-dolman-tee-in-grey-p-4452.html', 5, 'Shopmanhattanite', 25065, 4452, 1, '2014-05-24 02:21:04', '2014-08-03 18:07:19'),
(73, ' Michael Lauren Bently One Shoulder Rib Dress in Navy ', 'Michael Lauren embodies the perfect foundation for every look. Meant to stand alone and worn as the ingredients to one''s fashionable sensibility or layered with sister line, Lauren Moshi, Michael Lauren is the epitome of versatile, modern basics.   The Michael Lauren Bently One Shoulder Rib Dress in Navy is sexy, flattering and absolutely effortless. Go for a casual look and pair it with flats or wear heels for a night out! Shoulder seam to hem measures approx 36" in length.   94% rayon 6% spand', NULL, 'http://www.shopmanhattanite.com/images/ML-bently.jpg', 1, NULL, '', '4045', 81, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.4045&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fmichael-lauren-bently-one-shoulder-rib-dress-in-navy-p-4045.html', 6, 'Shopmanhattanite', 25065, 4045, 1, '2014-05-24 02:23:51', '2014-05-24 02:23:51'),
(74, ' Chaser Nirvana Studio Muscle Tank in White ', 'The vintage-inspired tee features a destroyed muscle tank and a screen print of Nirvana. The destroyed tank has holes and rips in all the right places. Approx Length from Shoulder to Hem: 25.5". Approx Bust Measurement (Armpit to Armpit): 12" (Size S).   100% cotton. Machine wash.  Made in the USA.', NULL, 'http://www.shopmanhattanite.com/images/CHA-CW959-NIRV035-WHT.jpg', 1, NULL, '', '4245', 40.6, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.4245&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fchaser-nirvana-studio-muscle-tank-in-white-p-4245.html', 5, 'Shopmanhattanite', 25065, 4245, 1, '2014-05-24 02:25:48', '2014-05-24 02:25:48'),
(75, ' Siwy Hannah Slim Crop Jean in Give Me Love ', 'The combination of a tailored fit, expert construction and superb wash detail highlights the curves of your body. There''s a vintage aesthetic to every design. Siwy denim is a favorite of celebrities.  Cropped at the ankle, this style is meant to be snug, highlighting the figure. The Hannah has a magical inseam, which is graded to create the perfect skinny for petite figures, while also creating a flattering crop for the taller figure. 11" leg opening.  7.5" low rise, 28-29" cropped inseam.  98%', NULL, 'http://www.shopmanhattanite.com/images/SD-W100SCY-GML.jpg', 1, NULL, '', '5233', 196, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5233&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fsiwy-hannah-slim-crop-jean-in-give-me-love-p-5233.html', 10, 'Shopmanhattanite', 25065, 5233, 1, '2014-05-24 02:34:21', '2014-05-24 02:34:21'),
(76, ' Siwy Hannah Slim Crop Jean in Wipeout ', 'The combination of a tailored fit, expert construction and superb wash detail highlights the curves of your body. There''s a vintage aesthetic to every design. Siwy denim is a favorite of celebrities.  Cropped at the ankle, this style is meant to be snug, highlighting the figure. The Hannah has a magical inseam, which is graded to create the perfect skinny for petite figures, while also creating a flattering crop for the taller figure.  11" leg opening  98% Cotton, 2% Elastan', NULL, 'http://www.shopmanhattanite.com/images/SD-W100SXY-WIP.jpg', 1, NULL, '', '5672', 218, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5672&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fsiwy-hannah-slim-crop-jean-in-wipeout-p-5672.html', 10, 'Shopmanhattanite', 25065, 5672, 1, '2014-05-24 02:34:28', '2014-05-24 02:34:28'),
(77, ' Siwy Kendra Slouchy Skinny Jean in Tomboy ', 'The combination of a tailored fit, expert construction and superb wash detail highlights the curves of your body. There''s a vintage aesthetic to every design. Siwy denim is a favorite of celebrities.  The fit of this classic pocket slouchy skinny is low slung and slightly baggy from the hip into the thighs, tapering into a slightly skinnier fit at the calves into the ankle. The style give thes laid back look of a boyfriend, while touches like seams at the front pocket and center back hem update', NULL, 'http://www.shopmanhattanite.com/images/SD-W816RAM-TBY.jpg', 1, NULL, '', '5676', 228, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5676&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fsiwy-kendra-slouchy-skinny-jean-in-tomboy-p-5676.html', 10, 'Shopmanhattanite', 25065, 5676, 1, '2014-05-24 02:34:48', '2014-05-24 02:34:48'),
(78, ' Siwy Kendra Slouchy Skinny Jean in Love Hurts ', 'The combination of a tailored fit, expert construction and superb wash detail highlights the curves of your body. There''s a vintage aesthetic to every design. Siwy denim is a favorite of celebrities.  The fit of this classic pocket slouchy skinny is low slung and slightly baggy from the hip into the thighs, tapering into a slightly skinnier fit at the calves into the ankle. The style give thes laid back look of a boyfriend, while touches like seams at the front pocket and center back hem update', NULL, 'http://www.shopmanhattanite.com/images/SD-W816ODR-LHT.jpg', 1, NULL, '', '5309', 218, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5309&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fsiwy-kendra-slouchy-skinny-jean-in-love-hurts-p-5309.html', 10, 'Shopmanhattanite', 25065, 5309, 1, '2014-05-24 02:34:58', '2014-05-24 02:34:58'),
(79, ' Siwy Kendra Slouchy Skinny Jean in Seafarer ', 'The combination of a tailored fit, expert construction and superb wash detail highlights the curves of your body. There''s a vintage aesthetic to every design. Siwy denim is a favorite of celebrities. The fit of this classic pocket slouchy skinny is low slung and slightly baggy from the hip into the thighs, tapering into a slightly skinnier fit at the calves into the ankle. The style give thes laid back look of a boyfriend, while touches like seams at the front pocket and center back hem update t', NULL, 'http://www.shopmanhattanite.com/images/Screen%20Shot%202014-05-13%20at%2011.33.37%20AM.png', 1, NULL, '', '5829', 218, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5829&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fsiwy-kendra-slouchy-skinny-jean-in-seafarer-p-5829.html', 10, 'Shopmanhattanite', 25065, 5829, 1, '2014-05-24 02:35:09', '2014-05-24 02:35:09'),
(80, ' Zoe Karssen Leopard Loose Fit Sweater ', 'LOOSE FIT SWEATER   GET WARM IN THIS LOOSE FIT SWEATER WITH CURVED HEM. THE SOFT FLEECE INTERIOR MAKES FOR A SOFT AND COMFORTABLE FIT.  WATER BASED PRINT   80% COTTON 20% POLYESTER  WITH CURVED HEM  MACHINE WASH', NULL, 'http://www.shopmanhattanite.com/images/zkleopard.png', 1, NULL, '', '5749', 137, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5749&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fzoe-karssen-leopard-loose-fit-sweater-p-5749.html', 5, 'Shopmanhattanite', 25065, 5749, 1, '2014-05-24 02:40:49', '2014-05-24 02:40:49'),
(81, ' Zoe Karssen Beyoutiful Loose Fit Sweater ', 'LOOSE FIT SWEATER  ALLOVER QUILT STITCHING MAKES THIS SWEATER A MUST-HAVE FOR THIS SEASON. IT COMES IN A LOOSE FIT WITH SOFT FLEECE INTERIOR.  WATER BASED PRINT   80% COTTON 20% POLYESTER    WITH QUILT STITCHING   MACHINE WASH', NULL, 'http://www.shopmanhattanite.com/images/Screen%20Shot%202014-03-25%20at%2012.17.48%20PM.png', 1, NULL, '', '5751', 150, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5751&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fzoe-karssen-beyoutiful-loose-fit-sweater-p-5751.html', 5, 'Shopmanhattanite', 25065, 5751, 1, '2014-05-24 02:40:55', '2014-05-24 02:40:55'),
(82, ' Wildfox Prairie Rose Lennon Sweater in Georgia Peach ', 'Combining great style and unsurpassed quality, Wildfox has quickly gained a cult-like following amongst celebrities.  Adorable prairie rose sweater. Oversized knit sweater with distressed hem and sleeves.   56% acrylic, 34% nylon, 10% wool.', NULL, 'http://www.shopmanhattanite.com/images/WF-prairie.jpg', 1, NULL, '', '5167', 245, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5167&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fwildfox-prairie-rose-lennon-sweater-in-georgia-peach-p-5167.html', 5, 'Shopmanhattanite', 25065, 5167, 1, '2014-05-24 02:41:06', '2014-05-24 02:41:06'),
(83, ' Zoe Karssen Bat Loose Fit Sweater ', 'LOOSE FIT SWEATER   THE SIGNATURE ZOE KARSSEN BAT PRINT ON AN EASY-TO-WEAR LOOSE FIT SWEAT, WITH LUXE LEATHER SHOULDER DETAILS.  WATER BASED PRINT  80% COTTON 20% POLYESTER  WITH LEATHER SHOULDER DETAILS  MACHINE WASH', NULL, 'http://www.shopmanhattanite.com/images/Screen%20Shot%202014-03-25%20at%2011.23.08%20AM.png', 1, NULL, '', '5750', 178, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5750&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fzoe-karssen-bat-loose-fit-sweater-p-5750.html', 5, 'Shopmanhattanite', 25065, 5750, 1, '2014-05-24 02:41:14', '2014-05-24 02:41:14'),
(84, ' Wildfox Seeing Stars Lennon Sweater in Dirty Black ', 'Combining great style and unsurpassed quality, Wildfox has quickly gained a cult-like following amongst celebrities.  We''re seeing stars sport this adorable sweater. Oversized knit sweater with distressed hem and sleeves. 56% acrylic, 34% nylon, 10% wool.', NULL, 'http://www.shopmanhattanite.com/images/WF-seeingblack.jpg', 1, NULL, '', '5138', 198, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5138&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fwildfox-seeing-stars-lennon-sweater-in-dirty-black-p-5138.html', 5, 'Shopmanhattanite', 25065, 5138, 1, '2014-05-24 02:41:21', '2014-05-24 02:41:21');
INSERT INTO `products` (`id`, `name`, `descrition`, `short_descrition`, `image_url`, `in_stock`, `isbn`, `upc`, `sku`, `price`, `retail_price`, `sale_price`, `mnf_name`, `mnf_sku`, `currency`, `buy_url`, `parent_id`, `advetiser_name`, `advertiser_id`, `ad_id`, `type`, `created`, `modified`) VALUES
(85, ' Wildfox Shooting Star Lennon Sweater in Black ', 'Combining great style and unsurpassed quality, Wildfox has quickly gained a cult-like following amongst celebrities.  Destroyed sweater with shooting stars on front.', NULL, 'http://www.shopmanhattanite.com/images/WF-WIL315R69.jpg', 1, NULL, '', '5081', 209, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5081&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fwildfox-shooting-star-lennon-sweater-in-black-p-5081.html', 5, 'Shopmanhattanite', 25065, 5081, 1, '2014-05-24 02:41:36', '2014-05-24 02:41:36'),
(86, ' Zoe Karssen Loose Fit Live Fast Sweatshirt in Grey ', 'LOOSE FIT SWEATER       Grey heather cotton and polyester-blend jersey      Inside water based black ''LIVE FAST CAUSE IT WON''T LAST'' print      With shoulder detail      Machine Wash', NULL, 'http://www.shopmanhattanite.com/images/ZK-S13017.jpg', 1, NULL, '', '5204', 125, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5204&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fzoe-karssen-loose-fit-live-fast-sweatshirt-in-grey-p-5204.html', 5, 'Shopmanhattanite', 25065, 5204, 1, '2014-05-24 02:41:56', '2014-05-24 02:41:56'),
(87, ' Zoe Karssen Loose Army of Lovers Sweatshirt in Shell ', 'LOOSE FIT SWEATER CURVED HEM       Shell cotton and polyester-blend jersey      With curved hem      Water based black ''ARMY OF LOVERS'' print      Machine Wash', NULL, 'http://www.shopmanhattanite.com/images/ZK-S13050.jpg', 1, NULL, '', '5206', 125, NULL, NULL, 'Shopmanhattanite', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=323054.5206&type=15&murl=http%3A%2F%2Fwww.shopmanhattanite.com%2Fzoe-karssen-loose-army-of-lovers-sweatshirt-in-shell-p-5206.html', 5, 'Shopmanhattanite', 25065, 5206, 1, '2014-05-24 02:42:00', '2014-05-24 02:42:00'),
(88, ' Vintage Denim Dress with Contrast Mesh Skirt ', '"Dress crafted with contrast panel detail, featuring the denim top with contrast mesh skirt, round neckline, button front detail, short puff sleeves with raw edge to cuffs, multi layer mesh skirt, vintage and sweet, in a relaxed fit."', NULL, 'http://image1.oasap.com/o_img/2012/02/20/4219-19782-home/vintage-denim-dress-with-contrast-mesh-skirt.jpg', 1, NULL, '', 'OP4219', 59, NULL, 59, 'Oasap Limited', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=275253.4219&type=15&murl=http%3A%2F%2Fwww.oasap.com%2Fdresses%2F4219-vintage-denim-dress-with-contrast-mesh-skirt.html', 6, 'Oasap Limited', 37793, 4219, 1, '2014-07-28 01:35:07', '2014-07-28 01:35:07'),
(89, ' Sexy Color Block Hip Hugging Strapless Dress ', '"Dress made of cotton and nylon, featuring strapless styling, color block design, hip hugging style, in mini length cut."', NULL, 'http://image4.oasap.com/o_img/2012/06/04/11190-62276-home/sexy-color-block-hip-hugging-strapless-dress.jpg', 1, NULL, '', 'OP11190', 81, NULL, 81, 'Oasap Limited', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=275253.11190&type=15&murl=http%3A%2F%2Fwww.oasap.com%2Fdresses%2F11190-sexy-color-block-hip-hugging-strapless-dress.html', 6, 'Oasap Limited', 37793, 11190, 1, '2014-07-28 01:35:55', '2014-07-28 01:35:55'),
(90, ' Black Contrast Sheer Lace Back V-neckline Detail Dress ', '"The dress is crafted in lace and cotton, featuring elegant black main, sexy v-neckline, contrast sheer lace back detail, long lace sleeves, medium fitted waistline and in slim fit."', NULL, 'http://image1.oasap.com/o_img/2012/04/26/8890-47740-home/black-contrast-sheer-lace-back-v-neckline-detail-dress.jpg', 1, NULL, '', 'OP8890', 28, NULL, 28, 'Oasap Limited', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=275253.8890&type=15&murl=http%3A%2F%2Fwww.oasap.com%2Fdresses%2F8890-black-contrast-sheer-lace-back-v-neckline-detail-dress.html', 6, 'Oasap Limited', 37793, 8890, 1, '2014-07-28 01:36:44', '2014-07-28 01:36:44'),
(161, ' Sweetheart & Leather Dress ', 'Strapless, sweetheart dress with faux leather lined pockets and top, pleated skirt, and zipper closure on back. Chest is padded for extra support Pair this stunning dress with a leather jacket, pumps and an edgy clutch for an evening out!', NULL, 'https://d2csjd0bj2nauk.cloudfront.net/products/636b612b-d826-457e-87db-794fbd5be186_s.jpg', 1, NULL, '', '46490', 48, NULL, 24, 'Shoptiques', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=280854.46490&type=15&murl=http%3A%2F%2Fwww.shoptiques.com%2Fproducts%2Fsweetheart-leather-dress', 6, 'Shoptiques', 38126, 46490, 1, '2014-09-26 02:30:48', '2014-09-26 02:30:48'),
(160, ' Pleated Skirt Dress ', 'Sapphire blue dress with pleated skirt and mock crop top. Perfection with a nude heel and statement necklace.', NULL, 'https://d2csjd0bj2nauk.cloudfront.net/products/77e1d6c2-db8e-4ba5-87f8-b4d94246ed61_s.jpg', 1, NULL, '', '64210', 44, NULL, NULL, 'Shoptiques', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=280854.64210&type=15&murl=http%3A%2F%2Fwww.shoptiques.com%2Fproducts%2Fpleated-skirt-dress-1', 6, 'Shoptiques', 38126, 64210, 1, '2014-09-26 02:30:34', '2014-09-26 02:30:34'),
(93, ' Entrancing Geo Print Jumpsuits ', '"The jumpsuits featuring geo print. V neck. Sleeveless. Slant pockets. Fress black cami top.We''ll be wearing women jumpsuits with beaded sandals, oversized sunglasses and a cross body bag."', NULL, 'http://image4.oasap.com/o_img/2014/07/23/44009-266514-home/entrancing-geo-print-jumpsuits.jpg', 1, NULL, '', 'OP44009', 25.9, NULL, NULL, 'Oasap Limited', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=275253.44009&type=15&murl=http%3A%2F%2Fwww.oasap.com%2Fjumpsuits-playsuits%2F44009-entrancing-geo-print-jumpsuits.html', 6, 'Oasap Limited', 37793, 44009, 1, '2014-07-28 01:45:55', '2014-07-28 01:45:55'),
(94, ' Billabong Twist Bandeau Bikini Top ', 'Interlocking twist bandeau bikini top by Billabong. Features removable neck straps and macrame back detail. Team with matching items or mix & match to find your perfect suit.', NULL, 'http://shopimages-pe.delias.com/313415_mul_c.jpg', 1, NULL, '', '313415', 46.9, NULL, 46.9, 'dELiA*s', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=149736.82870&type=15&murl=http%3A%2F%2Fstore.delias.com%2Fproduct%2Fbillabong%2Btwist%2Bbandeau%2Bbikini%2Btop%2B313415.do', 5, 'dELiA*s', 768, 82870, 1, '2014-07-28 23:15:58', '2014-07-28 23:15:58'),
(95, ' Open Twist-Back Maxi Dress ', 'Cover-up or day dress? You decide! This twist-back maxi dress looks great over your fave swim style or bright bandeau! Features "415" screen print at front.', NULL, 'http://shopimages-pe.delias.com/314716_hea_c.jpg', 1, NULL, '', '314716', 34.9, NULL, 29.99, 'dELiA*s', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=149736.84719&type=15&murl=http%3A%2F%2Fstore.delias.com%2Fproduct%2Fopen%2Btwist-back%2Bmaxi%2Bdress%2B314716.do', 6, 'dELiA*s', 768, 84719, 1, '2014-07-28 23:18:25', '2014-07-28 23:18:25'),
(96, ' Karen Kane ''Solar Ikat'' Cascade Wrap Dress ', 'A pleated V-neckline frames the face for a dress cut from printed matte jersey. The figure-flattering design has a faux-wrap front finished with a cascading skirt panel. Color(s): brown print. Brand: Karen Kane. Style Name: Karen Kane ''Solar Ikat'' Cascade Wrap Dress. Style Number: 807265.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/11/_9066211.jpg', 1, NULL, '734008266631', '77728136', 128, NULL, 84.9, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.77728136&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3748313%3Fcm_cat%3Ddatafeed%26cm_pla%3Ddresses%3Awomen%3Adress%26cm_ite%3Dkaren_kane_%2527solar_ikat%2527_cascade_wrap_dress%3A807265%26cm_ven%3DLinkshare', 6, 'NORDSTROM.com', 1237, 77728136, 1, '2014-08-01 00:41:02', '2014-08-01 00:41:02'),
(97, ' Dress the Population ''Lola'' Sequin Body-Con Dress (Nordstrom Online Exclusive) ', 'A curve-tracing cut, deeply scooped back and lavish veneer of swirling, inky sequins all add up to an undeniably sexy minidress styled with long sleeves so you can keep dancing the night away without worrying about layering up. Color(s): navy swirl. Brand: Dress the Population. Style Name: Dress the Population ''Lola'' Sequin Body-Con Dress (Nordstrom Online Exclusive). Style Number: 804043.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/6/_9326986.jpg', 1, NULL, '810943025547', '77718574', 198, NULL, 131.9, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.77718574&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3748274%3Fcm_cat%3Ddatafeed%26cm_pla%3Ddresses%3Awomen%3Adress%26cm_ite%3Ddress_the_population_%2527lola%2527_sequin_body-con_dress_%2528nordstrom_online_exclusive%2529%3A804043%26cm_ven%3DLinkshare', 6, 'NORDSTROM.com', 1237, 77718574, 1, '2014-08-01 00:42:35', '2014-08-01 00:42:35'),
(98, ' Dress the Population ''Lola'' Sequin Body-Con Minidress ', 'Clusters of sequins bring allover iridescence to a long-sleeve minidress styled with a deep V-back. Color(s): white. Brand: Dress the Population. Style Name: Dress the Population ''Lola'' Sequin Body-Con Minidress. Style Number: 754379.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/11/_9295171.jpg', 1, NULL, '810943026049', '84550968', 198, NULL, 198, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.84550968&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3801249%3Fcm_cat%3Ddatafeed%26cm_pla%3Ddresses%3Awomen%3Adress%26cm_ite%3Ddress_the_population_%2527lola%2527_sequin_body-con_minidress%3A754379%26cm_ven%3DLinkshare', 6, 'NORDSTROM.com', 1237, 84550968, 1, '2014-08-01 00:42:46', '2014-08-01 00:42:46'),
(99, ' Dress the Population ''Lola'' Sequin Body-Con Minidress ', 'A dense layer of ebony sequins drenches a sculpted V-back minidress in dazzling shine. Color(s): black glass. Brand: Dress the Population. Style Name: Dress the Population ''Lola'' Sequin Body-Con Minidress. Style Number: 861039.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/3/_9349603.jpg', 1, NULL, '810943025738', '81533521', 194, NULL, 194, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.81533521&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3776592%3Fcm_cat%3Ddatafeed%26cm_pla%3Ddresses%3Awomen%3Adress%26cm_ite%3Ddress_the_population_%2527lola%2527_sequin_body-con_minidress%3A861039%26cm_ven%3DLinkshare', 6, 'NORDSTROM.com', 1237, 81533521, 1, '2014-08-01 00:42:54', '2014-08-01 00:42:54'),
(100, ' Topshop Print Body-Con Minidress (Nordstrom Exclusive) ', 'An exclusive geo print gives bold, symmetrical style to a close-fitting minidress that showcases your figure. Color(s): pink. Brand: TOPSHOP. Style Name: Topshop Print Body-Con Minidress (Nordstrom Exclusive). Style Number: 466211.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/14/_9413754.jpg', 1, NULL, '', '3789733', 60, NULL, 39.9, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3789733&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3789733%3Fcm_cat%3Ddatafeed%26cm_pla%3Ddresses%3Awomen%3Adress%26cm_ite%3Dtopshop_print_body-con_minidress_%2528nordstrom_exclusive%2529%3A466211%26cm_ven%3DLinkshare', 6, 'NORDSTROM.com', 1237, 3789733, 1, '2014-08-01 00:44:30', '2014-08-01 00:44:30'),
(101, ' 7 Diamonds ''Unbreakable'' Print Short Sleeve Woven Shirt ', 'A small-scale, concealed button-down collar tops a smart shirt crafted from silky smooth cotton and detailed with mother-of-pearl buttons. Color(s): black. Brand: 7 Diamonds. Style Name: 7 Diamonds ''Unbreakable'' Print Short Sleeve Woven Shirt. Style Number: 422057.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/17/_9116677.jpg', 1, NULL, '', '3751802', 89, NULL, 58.9, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3751802&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3751802%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3Ashirt%26cm_ite%3D7_diamonds_%2527unbreakable%2527_print_short_sleeve_woven_shirt%3A422057%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3751802, 1, '2014-08-01 00:46:19', '2014-08-01 00:46:19'),
(102, ' Topman Paisley Print Shirt ', 'A wide-spaced paisley print styles a handsome cotton shirt tailored extra trim through the body, shoulders and sleeves. Color(s): white. Brand: TOPMAN. Style Name: Topman Paisley Print Shirt. Style Number: 707703.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/8/_9167348.jpg', 1, NULL, '', '3742474', 55, NULL, 34.9, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3742474&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3742474%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3Ashirt%26cm_ite%3Dtopman_paisley_print_shirt%3A707703%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3742474, 1, '2014-08-01 00:47:07', '2014-08-01 00:47:07'),
(103, ' Junk Food ''New York Giants'' Graphic T-Shirt ', 'Cracked and faded team graphics on the front and back offer an authentic vintage look to a supersoft, trim-fitting crewneck T-shirt crafted in the USA. Color(s): licorace. Brand: JUNKFOOD. Style Name: Junk Food ''New York Giants'' Graphic T-Shirt. Style Number: 808176.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/4/_9085324.jpg', 1, NULL, '', '3734247', 38, NULL, 24.9, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3734247&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3734247%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Djunk_food_%2527new_york_giants%2527_graphic_t-shirt%3A808176%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3734247, 1, '2014-08-01 00:49:34', '2014-08-01 00:49:34'),
(104, ' Wright & Ditson ''Mets'' Baseball Henley Royal/ Orange X-Large ', 'Vintage team logos detail a classic, trim-fitting baseball henley constructed with contrast three-quarter raglan sleeves and neck. Color(s): royal/ orange. Brand: Wright & Ditson. Style Name: Wright & Ditson ''Mets'' Baseball Henley. Style Number: 949320.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/10/_9126490.jpg', 1, NULL, '798698247301', '57818227', 42, NULL, 27.9, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.57818227&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3577479%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dwright_%2526_ditson_%2527mets%2527_baseball_henley%3A949320%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 57818227, 1, '2014-08-01 00:50:30', '2014-08-01 00:50:30'),
(105, ' Mitchell & Ness ''Dwight Gooden - New York Mets'' Authentic Mesh BP Jersey ', 'An authentic, throwback batting practice jersey features a lightweight, perforated mesh construction and embroidered team details that capture the true essence of America''s pastime. Color(s): blue. Brand: MITCHELL & NESS. Style Name: Mitchell & Ness ''Dwight Gooden - New York Mets'' Authentic Mesh BP Jersey. Style Number: 738498.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/12/_9092532.jpg', 1, NULL, '', '3764421', 80, NULL, 80, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3764421&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3764421%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dmitchell_%2526_ness_%2527dwight_gooden_-_new_york_mets%2527_authentic_mesh_bp_jersey%3A738498%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3764421, 1, '2014-08-01 00:51:13', '2014-08-01 00:51:13'),
(106, ' Topman Check Shirt ', 'Bold checks pattern a softly woven, trim-fitting cotton shirt designed with button-flap pockets at the chest. Color(s): red. Brand: TOPMAN. Style Name: Topman Check Shirt. Style Number: 707682.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/10/_9163190.jpg', 1, NULL, '', '3742448', 55, NULL, 34.9, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3742448&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3742448%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3Ashirt%26cm_ite%3Dtopman_check_shirt%3A707682%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3742448, 1, '2014-08-01 00:53:23', '2014-08-01 00:53:23'),
(107, ' Mighty Fine ''Opti-California'' Graphic T-Shirt ', 'An optical, stylized graphic fronts a trim-fitting crewneck T-shirt crafted in America from ultrasoft cotton. Color(s): aqua blue. Brand: MIGHTY FINE. Style Name: Mighty Fine ''Opti-California'' Graphic T-Shirt. Style Number: 860990.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/10/_9224090.jpg', 1, NULL, '', '3776596', 32, NULL, 20.9, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3776596&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3776596%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dmighty_fine_%2527opti-california%2527_graphic_t-shirt%3A860990%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3776596, 1, '2014-08-01 00:56:20', '2014-08-01 00:56:20'),
(108, ' summer hunting 2 Art Print ', 'summer hunting 2 Art Print', NULL, 'http://cdn.designbyhumans.com/product_images/b120r5s7t9jak7683.png', 1, NULL, '', '45344', 18, NULL, NULL, 'Design By Humans', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=271706.453441004&type=15&murl=http%3A%2F%2Fwww.designbyhumans.com%2Fshop%2Fart-print%2Fsummer-hunting-2%2F45344%2F', 4, 'Design By Humans', 37986, 453441004, 1, '2014-08-02 01:29:31', '2014-08-02 01:29:31'),
(109, ' ASTR Faux Wrap Bodysuit ', 'A plunging surplice neckline and delicate crossed straps flatter a fluid faux-wrap bodysuit. Color(s): ivory, white. Brand: Astr. Style Name: ASTR Faux Wrap Bodysuit. Style Number: 81837.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/10/_9391650.jpg', 1, NULL, '', '3783329', 48, NULL, 48, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3783329&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3783329%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Awomen%3Ablouse_top%26cm_ite%3Dastr_faux_wrap_bodysuit%3A81837%26cm_ven%3DLinkshare', 6, 'NORDSTROM.com', 1237, 3783329, 1, '2014-08-02 01:32:28', '2014-08-02 01:32:28'),
(110, ' Bailey 44 ''Tiki Torch'' Textured Mesh Front Tank ', 'Slender strips of jersey are stitched onto the sheer mesh front of a slinky, textured tank fitted with a solid-knit back panel. Color(s): white. Brand: BAILEY 44. Style Name: Bailey 44 ''Tiki Torch'' Textured Mesh Front Tank. Style Number: 713771.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/5/_8989545.jpg', 1, NULL, '', '3728711', 185, NULL, 92.49, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3728711&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3728711%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Awomen%3Atank_cami_shell%26cm_ite%3Dbailey_44_%2527tiki_torch%2527_textured_mesh_front_tank%3A713771%26cm_ven%3DLinkshare', 5, 'NORDSTROM.com', 1237, 3728711, 1, '2014-08-02 01:34:58', '2014-08-02 01:34:58'),
(111, ' Wayf Diamond Print Crepe V-Neck Shift Dress ', 'A blurred diamond print offers a cool, stained-glass effect to a stunning shift dress styled with a V-neckline and a shirttail hem. Color(s): abstract diamond. Brand: WAYF. Style Name: Wayf Diamond Print Crepe V-Neck Shift Dress. Style Number: 133294.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/12/_9079152.jpg', 1, NULL, '849707033573', '75842289', 48, NULL, 48, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.75842289&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3739935%3Fcm_cat%3Ddatafeed%26cm_pla%3Ddresses%3Awomen%3Adress%26cm_ite%3Dwayf_diamond_print_crepe_v-neck_shift_dress%3A133294%26cm_ven%3DLinkshare', 6, 'NORDSTROM.com', 1237, 75842289, 1, '2014-08-02 01:43:56', '2014-08-02 01:43:56'),
(112, ' Wayf Faux Wrap High/Low Top ', 'A smoldering, sheer top boasts relaxed dolman sleeves, an alluring faux-wrap front and an on-trend high/low hemline. Color(s): animal print. Brand: WAYF. Style Name: Wayf Faux Wrap High/Low Top. Style Number: 452499_5.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/12/_9221872.jpg', 1, NULL, '', '3808339', 48, NULL, 48, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3808339&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3808339%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Awomen%3Ablouse_top%26cm_ite%3Dwayf_faux_wrap_high_low_top%3A452499_5%26cm_ven%3DLinkshare', 5, 'NORDSTROM.com', 1237, 3808339, 1, '2014-08-02 01:44:44', '2014-08-02 01:44:44'),
(113, ' Wayf Faux Wrap High/Low Top ', 'A smoldering, sheer top boasts relaxed dolman sleeves, an alluring faux-wrap front and an on-trend high/low hemline. Color(s): purple floral. Brand: WAYF. Style Name: Wayf Faux Wrap High/Low Top. Style Number: 452499_7.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/17/_9282197.jpg', 1, NULL, '', '3825381', 48, NULL, 48, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3825381&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3825381%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Awomen%3Ablouse_top%26cm_ite%3Dwayf_faux_wrap_high_low_top%3A452499_7%26cm_ven%3DLinkshare', 5, 'NORDSTROM.com', 1237, 3825381, 1, '2014-08-02 01:44:54', '2014-08-02 01:44:54'),
(114, ' Wayf Faux Wrap High/Low Top ', 'A smoldering, sheer top boasts relaxed dolman sleeves, an alluring faux-wrap front and an on-trend high/low hemline.A smoldering, sheer top boasts relaxed dolman sleeves, an alluring faux-wrap front and an on-trend high/low hemline. Color(s): black. Brand: WAYF. Style Name: Wayf Faux Wrap High/Low Top. Style Number: 452499_3.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/11/_9076791.jpg', 1, NULL, '', '3802651', 48, NULL, 23.98, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3802651&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3802651%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Awomen%3Ablouse%252ftop%26cm_ite%3Dwayf_faux_wrap_high%252flow_top%3A452499_3%26cm_ven%3DLinkshare', 5, 'NORDSTROM.com', 1237, 3802651, 1, '2014-08-02 01:45:20', '2014-08-02 01:45:20'),
(115, ' Wayf Faux Wrap High/Low Top ', 'A smoldering, sheer top boasts relaxed dolman sleeves, an alluring faux-wrap front and an on-trend high/low hemline. Color(s): dubarry. Brand: WAYF. Style Name: Wayf Faux Wrap High/Low Top. Style Number: 452499_8.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/10/_9222830.jpg', 1, NULL, '', '3834493', 48, NULL, 23.98, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3834493&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3834493%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Awomen%3Ablouse_top%26cm_ite%3Dwayf_faux_wrap_high_low_top%3A452499_8%26cm_ven%3DLinkshare', 5, 'NORDSTROM.com', 1237, 3834493, 1, '2014-08-02 01:45:33', '2014-08-02 01:45:33'),
(116, ' Wayf Faux Wrap High/Low Top ', 'A smoldering, sheer top boasts relaxed dolman sleeves, an alluring faux-wrap front and an on-trend high/low hemline. Color(s): red flame. Brand: WAYF. Style Name: Wayf Faux Wrap High/Low Top. Style Number: 452499.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/14/_9219954.jpg', 1, NULL, '', '3718232', 48, NULL, 48, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3718232&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3718232%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Awomen%3Ablouse_top%26cm_ite%3Dwayf_faux_wrap_high_low_top%3A452499%26cm_ven%3DLinkshare', 5, 'NORDSTROM.com', 1237, 3718232, 1, '2014-08-02 01:45:52', '2014-08-02 01:45:52'),
(117, ' Topshop Tailored Strapless Jumpsuit ', 'A slim strapless bodice tops this ultra-chic pleated jumpsuit finished with sleek tapered legs. Color(s): black, blush, ivory. Brand: TOPSHOP. Style Name: Topshop Tailored Strapless Jumpsuit. Style Number: 420611.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/9/_9242049.jpg', 1, NULL, '', '3740610', 120, NULL, 120, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3740610&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3740610%3Fcm_cat%3Ddatafeed%26cm_pla%3Djumpsuits_coveralls%3Awomen%3Ajumpsuit_romper%26cm_ite%3Dtopshop_tailored_strapless_jumpsuit%3A420611%26cm_ven%3DLinkshare', 11, 'NORDSTROM.com', 1237, 3740610, 1, '2014-08-02 01:51:30', '2014-08-02 01:51:30'),
(118, ' Tildon Zebra Print Ruched Strapless Jumpsuit ', 'Bold zebra stripes pattern an exotic jumpsuit tailored with a strapless, ruched bodice and loose-fitting legs. Color(s): black wavy print. Brand: Tildon. Style Name: Tildon Zebra Print Ruched Strapless Jumpsuit. Style Number: 811057.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/15/_9261835.jpg', 1, NULL, '', '3760049', 58, NULL, 58, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3760049&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3760049%3Fcm_cat%3Ddatafeed%26cm_pla%3Djumpsuits_coveralls%3Awomen%3Ajumpsuit_romper%26cm_ite%3Dtildon_zebra_print_ruched_strapless_jumpsuit%3A811057%26cm_ven%3DLinkshare', 11, 'NORDSTROM.com', 1237, 3760049, 1, '2014-08-02 01:51:38', '2014-08-02 01:51:38'),
(119, ' Glamorous Print Jumpsuit ', 'A trend-right print gives bold style to a chiffon jumpsuit styled with a cinched waist and a slim silhouette. Color(s): navy exotic flower. Brand: GLAMOROUS. Style Name: Glamorous Print Jumpsuit. Style Number: 432236_1.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/19/_9224099.jpg', 1, NULL, '', '3819684', 58, NULL, 58, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3819684&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3819684%3Fcm_cat%3Ddatafeed%26cm_pla%3Djumpsuits_coveralls%3Awomen%3Ajumpsuit_romper%26cm_ite%3Dglamorous_print_jumpsuit%3A432236_1%26cm_ven%3DLinkshare', 11, 'NORDSTROM.com', 1237, 3819684, 1, '2014-08-02 01:56:04', '2014-08-02 01:56:04'),
(120, ' Ella Moss ''Kona'' Graphic Print Jumpsuit ', 'A graphic crosshatched pattern gives mesmerizing appeal to a tank-style jumpsuit that cinches at the drawstring waist and finishes with flattering tapered legs. Color(s): stone/ nude. Brand: Ella Moss. Style Name: Ella Moss ''Kona'' Graphic Print Jumpsuit. Style Number: 256480.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/2/_8863562.jpg', 1, NULL, '', '3718261', 248, NULL, 99.97, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3718261&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3718261%3Fcm_cat%3Ddatafeed%26cm_pla%3Djumpsuits_coveralls%3Awomen%3Ajumpsuit_romper%26cm_ite%3Della_moss_%2527kona%2527_graphic_print_jumpsuit%3A256480%26cm_ven%3DLinkshare', 11, 'NORDSTROM.com', 1237, 3718261, 1, '2014-08-03 17:39:14', '2014-08-03 17:39:14'),
(121, ' Free People ''Sunset'' Open Back Print Jumpsuit ', 'Watch the sun go down with dreamy bliss is this supersoft jumpsuit designed with a cinchable drawstring waist and an indulgent open back. Color(s): red combo. Brand: Free People. Style Name: Free People ''Sunset'' Open Back Print Jumpsuit. Style Number: 935402.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/1/_8792061.jpg', 1, NULL, '', '3675181', 148, NULL, 99.16, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3675181&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3675181%3Fcm_cat%3Ddatafeed%26cm_pla%3Djumpsuits%252fcoveralls%3Awomen%3Ajumpsuit%252fromper%26cm_ite%3Dfree_people_%2527sunset%2527_open_back_print_jumpsuit%3A935402%26cm_ven%3DLinkshare', 11, 'NORDSTROM.com', 1237, 3675181, 1, '2014-08-03 17:39:41', '2014-08-03 17:39:41'),
(122, ' FELICITY & COCO Print Jersey Jumpsuit (Nordstrom Exclusive) (Regular & Petite) ', 'A supersoft jersey jumpsuit rendered in an illustrative geo print is kept both on-trend and extra comfy with a strapless blouson bodice and roomy tapered legs. Color(s): black print. Brand: Felicity and Coco. Style Name: FELICITY & COCO Print Jersey Jumpsuit (Nordstrom Exclusive) (Regular & Petite). Style Number: 948298.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/19/_8873559.jpg', 1, NULL, '', '3688490', 88, NULL, 88, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3688490&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3688490%3Fcm_cat%3Ddatafeed%26cm_pla%3Djumpsuits_coveralls%3Awomen%3Ajumpsuit_romper%26cm_ite%3Dfelicity_%2526_coco_print_jersey_jumpsuit_%2528nordstrom_exclusive%2529_%2528regular_%2526_petite%2529%3A948298%26cm_ven%3DLinkshare', 11, 'NORDSTROM.com', 1237, 3688490, 1, '2014-08-03 17:40:36', '2014-08-03 17:40:36'),
(123, ' Topshop Tropical Print Tie Waist Jumpsuit ', 'Amp up your tropical vibe in a head-turning printed jumpsuit styled with a cinched tie-front waist and tapered legs. Color(s): blue. Brand: TOPSHOP. Style Name: Topshop Tropical Print Tie Waist Jumpsuit. Style Number: 800170.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/19/_9274799.jpg', 1, NULL, '', '3810233', 116, NULL, 54.99, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3810233&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3810233%3Fcm_cat%3Ddatafeed%26cm_pla%3Djumpsuits_coveralls%3Awomen%3Ajumpsuit_romper%26cm_ite%3Dtopshop_tropical_print_tie_waist_jumpsuit%3A800170%26cm_ven%3DLinkshare', 11, 'NORDSTROM.com', 1237, 3810233, 1, '2014-08-03 17:41:17', '2014-08-03 17:41:17'),
(124, ' ASTR Beaded Hem Shift Dress ', 'A jazzy zigzag motif patterns a breezy shift dress topped with spaghetti straps and finished with beaded fringe at the hemline. Color(s): black. Brand: Astr. Style Name: ASTR Beaded Hem Shift Dress. Style Number: 84434.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/1/_9261761.jpg', 1, NULL, '849402028508', '83519246', 74, NULL, 74, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.83519246&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3783691%3Fcm_cat%3Ddatafeed%26cm_pla%3Ddresses%3Awomen%3Adress%26cm_ite%3Dastr_beaded_hem_shift_dress%3A84434%26cm_ven%3DLinkshare', 6, 'NORDSTROM.com', 1237, 83519246, 1, '2014-08-03 17:43:44', '2014-08-03 17:43:44'),
(125, ' Tildon Print Bell Sleeve Minidress ', 'A bold print, breezy bell sleeves and an abbreviated hemline combine to get this minidress noticed. Color(s): teal-oasis jungle swirl. Brand: Tildon. Style Name: Tildon Print Bell Sleeve Minidress. Style Number: 872062.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/10/_9261470.jpg', 1, NULL, '439003775712', '82900152', 49, NULL, 49, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.82900152&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3778090%3Fcm_cat%3Ddatafeed%26cm_pla%3Ddresses%3Awomen%3Adress%26cm_ite%3Dtildon_print_bell_sleeve_minidress%3A872062%26cm_ven%3DLinkshare', 6, 'NORDSTROM.com', 1237, 82900152, 1, '2014-08-03 17:44:33', '2014-08-03 17:44:33'),
(126, ' Tildon Print Bell Sleeve Minidress ', 'A bold print, breezy bell sleeves and an abbreviated hemline combine to get this minidress noticed. Color(s): red-persimmon dappled floral. Brand: Tildon. Style Name: Tildon Print Bell Sleeve Minidress. Style Number: 872062_1.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/8/_9261648.jpg', 1, NULL, '439003775668', '82900160', 49, NULL, 49, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.82900160&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3840424%3Fcm_cat%3Ddatafeed%26cm_pla%3Ddresses%3Awomen%3Adress%26cm_ite%3Dtildon_print_bell_sleeve_minidress%3A872062_1%26cm_ven%3DLinkshare', 6, 'NORDSTROM.com', 1237, 82900160, 1, '2014-08-03 17:44:37', '2014-08-03 17:44:37'),
(127, ' Red Jacket ''New York Mets'' Trim Fit Ringer T-Shirt (Men) ', 'Contrasting crewneck and cuffs frame a vintaged T-shirt that shows your team allegiance. Color(s): black. Brand: Red Jacket. Style Name: Red Jacket ''New York Mets'' Trim Fit Ringer T-Shirt (Men). Style Number: 359492.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/10/_7424650.jpg', 1, NULL, '', '3178995', 45, NULL, 45, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3178995&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3178995%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dred_jacket_%2527new_york_mets%2527_trim_fit_ringer_t-shirt_%2528men%2529%3A359492%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3178995, 1, '2014-08-03 17:54:41', '2014-08-03 17:54:41'),
(128, ' Red Jacket ''Mets - Deadringer'' T-Shirt ', 'Fun embroidery displays your team loyalty on a slim, vintaged T-shirt. Color(s): blue. Brand: Red Jacket. Style Name: Red Jacket ''Mets - Deadringer'' T-Shirt. Style Number: 684239.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/19/_7975659.jpg', 1, NULL, '', '3486487', 45, NULL, 45, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3486487&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3486487%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dred_jacket_%2527mets_-_deadringer%2527_t-shirt%3A684239%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3486487, 1, '2014-08-03 17:55:00', '2014-08-03 17:55:00'),
(129, ' Red Jacket ''New York Mets'' Trim Fit Ringer T-Shirt (Men) Royal/ Orange Large ', 'Contrasting crewneck and cuffs frame a vintaged T-shirt that shows your team allegiance. Color(s): royal/ orange. Brand: Red Jacket. Style Name: Red Jacket ''New York Mets'' Trim Fit Ringer T-Shirt (Men). Style Number: 368392.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/18/_7839538.jpg', 1, NULL, '026093044097', '51453977', 45, NULL, 45, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.51453977&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3190043%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dred_jacket_%2527new_york_mets%2527_trim_fit_ringer_t-shirt_%2528men%2529%3A368392%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 51453977, 1, '2014-08-03 17:55:15', '2014-08-03 17:55:15'),
(130, ' 47 Brand ''New York Mets - Scrum'' T-Shirt ', 'A throwback team logo fronts a soft, slubbed cotton T-shirt for a vintage appearance. Color(s): bleacher blue. Brand: 47 Brand. Style Name: 47 Brand ''New York Mets - Scrum'' T-Shirt. Style Number: 378002.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/13/_8938753.jpg', 1, NULL, '', '3687859', 42, NULL, 42, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3687859&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3687859%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3D47_brand_%2527new_york_mets_-_scrum%2527_t-shirt%3A378002%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3687859, 1, '2014-08-03 17:55:35', '2014-08-03 17:55:35'),
(131, ' Mitchell & Ness ''New York Mets - Game Ball'' Tailored Fit Short Sleeve Henley ', 'Rep your team in a lightweight, short-sleeve henley cut for a slim fit and featuring a vintage screenprint and stripe-knit trim. Color(s): royal blue. Brand: MITCHELL & NESS. Style Name: Mitchell & Ness ''New York Mets - Game Ball'' Tailored Fit Short Sleeve Henley. Style Number: 967379.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/17/_9382057.jpg', 1, NULL, '', '3599189', 50, NULL, 50, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3599189&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3599189%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dmitchell_%2526_ness_%2527new_york_mets_-_game_ball%2527_tailored_fit_short_sleeve_henley%3A967379%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3599189, 1, '2014-08-03 17:56:28', '2014-08-03 17:56:28'),
(132, ' Mitchell & Ness ''MLB Batter - Mets'' Cotton Baseball T-Shirt ', 'It''s time to root, root, root for the home team! A ribbed cotton T-shirt is styled with contrasting three-quarter sleeves and a weathered-looking team logo emblazoned across the chest. It''s shaped with a tailored fit and garment washed for ultimate softness so you''ll feel like wearing it through the 9th inning and beyond. Color(s): off white. Brand: MITCHELL & NESS. Style Name: Mitchell & Ness ''MLB Batter - Mets'' Cotton Baseball T-Shirt. Style Number: 407756.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/5/_9084425.jpg', 1, NULL, '', '3762302', 55, NULL, 55, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3762302&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3762302%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dmitchell_%2526_ness_%2527mlb_batter_-_mets%2527_cotton_baseball_t-shirt%3A407756%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3762302, 1, '2014-08-03 17:57:10', '2014-08-03 17:57:10'),
(133, ' Red Jacket ''Yankees - Remote Control'' T-Shirt ', 'Bold stripes lend sporty style to a weathered-looking crewneck T-shirt that shows your team allegiance. Color(s): yankees navy. Brand: Red Jacket. Style Name: Red Jacket ''Yankees - Remote Control'' T-Shirt. Style Number: 562807.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/11/_6986731.jpg', 1, NULL, '', '3314804', 45, NULL, 45, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3314804&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3314804%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dred_jacket_%2527yankees_-_remote_control%2527_t-shirt%3A562807%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3314804, 1, '2014-08-03 17:57:46', '2014-08-03 17:57:46'),
(134, ' Red Jacket ''Yankees - Remote Control'' T-Shirt (Men) ', 'Bold stripes lend sporty style to a team-emblazoned T-shirt with a time-weathered look. Color(s): grey. Brand: Red Jacket. Style Name: Red Jacket ''Yankees - Remote Control'' T-Shirt (Men). Style Number: 549360.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/19/_8893539.jpg', 1, NULL, '', '3297351', 45, NULL, 45, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3297351&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3297351%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dred_jacket_%2527yankees_-_remote_control%2527_t-shirt_%2528men%2529%3A549360%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3297351, 1, '2014-08-03 17:58:03', '2014-08-03 17:58:03'),
(135, ' Red Jacket ''New York Yankees - Easy Rider'' Trim Fit T-Shirt ', 'Weathered, throwback graphics style a vintage team T-shirt crafted for a washed-and-worn look. Color(s): black. Brand: Red Jacket. Style Name: Red Jacket ''New York Yankees - Easy Rider'' Trim Fit T-Shirt. Style Number: 625435.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/14/_9039854.jpg', 1, NULL, '', '3684259', 45, NULL, 45, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3684259&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3684259%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dred_jacket_%2527new_york_yankees_-_easy_rider%2527_trim_fit_t-shirt%3A625435%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3684259, 1, '2014-08-03 17:58:36', '2014-08-03 17:58:36'),
(136, ' Red Jacket ''New York Yankees - Burnout'' V-Neck T-Shirt ', 'A soft, heathered burnout T-shirt cut with an athletic fit features the timeless logo of the boys in blue. Color(s): midnight navy. Brand: Red Jacket. Style Name: Red Jacket ''New York Yankees - Burnout'' V-Neck T-Shirt. Style Number: 206512.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/17/_8918117.jpg', 1, NULL, '', '3657624', 45, NULL, 45, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3657624&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3657624%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3Dred_jacket_%2527new_york_yankees_-_burnout%2527_v-neck_t-shirt%3A206512%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3657624, 1, '2014-08-03 17:59:15', '2014-08-03 17:59:15'),
(137, ' 47 Brand ''New York Yankees - RBI'' Henley T-Shirt ', 'A team logo applique and screenprint top the chest of a soft henley T-shirt finished with contrasting short sleeves. Color(s): white wash. Brand: 47 Brand. Style Name: 47 Brand ''New York Yankees - RBI'' Henley T-Shirt. Style Number: 350581.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/18/_8962098.jpg', 1, NULL, '', '3684989', 44, NULL, 44, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3684989&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3684989%3Fcm_cat%3Ddatafeed%26cm_pla%3Dtops%3Amen%3At-shirt_tee%26cm_ite%3D47_brand_%2527new_york_yankees_-_rbi%2527_henley_t-shirt%3A350581%26cm_ven%3DLinkshare', 4, 'NORDSTROM.com', 1237, 3684989, 1, '2014-08-03 17:59:23', '2014-08-03 17:59:23'),
(139, ' Baukjen Womenswear Hayton Striped Tunic Dress ', 'Turn back the cuffs on the Hayton Striped Tunic Dress to reveal a chic contrasting grey melange, just the little detail that makes it an absolute off&ndash;duty essential. Long sleeves, double&ndash;faced heavyweight jersey and a versatile sporty feel mean this scoop neck dress is also an all&ndash;year&ndash;round piece. Try with slip&ndash;on loafers now and switch to tights, ankle boots and casual outerwear as the temperature drops.For style advice, sizing queries or to book a free online styling session, please contact our eStylist team here.', NULL, 'http://dcnsktahnz789.cloudfront.net/assets/+size:500:500:fit/+v:b741a2/product/DR664-GST-10_3.jpg', 1, NULL, '', 'DR664-GST-14', 139, NULL, NULL, 'Baukjen', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=343751.27162&type=15&murl=http%3A%2F%2Fwww.baukjen.com%2Fus%2Fshop%2Fbaukjen%2Fdresses%2Fjersey-dresses%2Fhayton-striped-tunic-dress-grey-melange-stone-stripe.htm', 6, 'Baukjen', 38982, 27162, 1, '2014-08-06 00:15:35', '2014-08-06 00:15:35'),
(140, ' Baukjen Womenswear Felsted Shirt Dress ', 'Endlessly easy to wear, the statement Felsted Shirt Dress does transitional dressing with ease. The relaxed cut and clean, rolled sleeve, covered placket design is perfectly complemented by our exclusive animal print in neutral tones. Wear as a standalone piece now with sandals and style it later with leather leggings and a sumptuous knit.For style advice, sizing queries or to book a free online styling session, please contact our eStylist team here.', NULL, 'http://dcnsktahnz789.cloudfront.net/assets/+size:500:500:fit/+v:d5fa9e/product/DR638-ANI-10_3.jpg', 1, NULL, '', 'DR638-ANI-12', 195, NULL, NULL, 'Baukjen', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=343751.26694&type=15&murl=http%3A%2F%2Fwww.baukjen.com%2Fus%2Fshop%2Fbaukjen%2Fdresses%2Ffelsted-shirt-dress-animalistic-print.htm', 6, 'Baukjen', 38982, 26694, 1, '2014-08-06 00:15:41', '2014-08-06 00:15:41'),
(141, ' Baukjen Womenswear Karen Print Dress ', 'Tap into this seasons print trend with our gold ink crepe dress. The eclectic mix of black, gold and grey makes this a luxe style with retro appeal. The fit and flare cut results in a flattering silhouette that looks chic enhanced with a waist belt.', NULL, 'http://dcnsktahnz789.cloudfront.net/assets/+size:500:500:fit/+v:269312/product/DR551-GIK-10ZZ_3.jpg', 1, NULL, '', 'DR551-GIK-8ZZZ', 269, NULL, 137, 'Baukjen', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=343751.3676&type=15&murl=http%3A%2F%2Fwww.baukjen.com%2Fus%2Fbaukjen-sale%2Fall-sale%2Fkaren-print-dress-gold-ink-print.htm', 6, 'Baukjen', 38982, 3676, 1, '2014-08-06 00:16:25', '2014-08-06 00:16:25'),
(142, ' Topman Cloud Pattern Socks ', 'Fluffy clouds pattern soft, lightweight socks spun from a fine cotton blend. Color(s): black. Brand: TOPMAN. Style Name: Topman Cloud Pattern Socks. Style Number: 407800.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/18/_8797658.jpg', 1, NULL, '', '3712641', 6, NULL, 6, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3712641&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3712641%3Fcm_cat%3Ddatafeed%26cm_pla%3Dhosiery%3Amen%3Asocks%26cm_ite%3Dtopman_cloud_pattern_socks%3A407800%26cm_ven%3DLinkshare', 12, 'NORDSTROM.com', 1237, 3712641, 1, '2014-08-19 01:17:44', '2014-08-19 01:17:44'),
(143, ' BLANKNYC Faux Leather Jacket ', 'Adjust your attitude with a tailored biker-babe jacket constructed with detailed seaming. Allover zip accents bring the urban edge, while a slim, feminine cut complements your curves. Color(s): attention hog, black, revved up grey. Brand: BLANKNYC. Style Name: BLANKNYC Faux Leather Jacket. Style Number: 683636.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/15/_9386315.jpg', 1, NULL, '', '3485962', 98, NULL, 98, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3485962&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3485962%3Fcm_cat%3Ddatafeed%26cm_pla%3Djacket_sportcoat%3Awomen%3Ajacket%26cm_ite%3Dblanknyc_faux_leather_jacket%3A683636%26cm_ven%3DLinkshare', 9, 'NORDSTROM.com', 1237, 3485962, 1, '2014-08-19 02:22:01', '2014-08-19 02:22:01'),
(144, ' Topshop ''Cherrie'' Faux Leather Biker Jacket ', 'Tons of gunmetal hardware, a snap-button collar and linear quilting along the shoulders add moto-sleek edge to this inky, faux-leather biker jacket. Color(s): black. Brand: TOPSHOP. Style Name: Topshop ''Cherrie'' Faux Leather Biker Jacket. Style Number: 745908.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/10/_8893970.jpg', 1, NULL, '', '3690264', 100, NULL, 100, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3690264&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3690264%3Fcm_cat%3Ddatafeed%26cm_pla%3Djacket_sportcoat%3Awomen%3Ajacket%26cm_ite%3Dtopshop_%2527cherrie%2527_faux_leather_biker_jacket%3A745908%26cm_ven%3DLinkshare', 9, 'NORDSTROM.com', 1237, 3690264, 1, '2014-08-19 02:24:18', '2014-08-19 02:24:18'),
(145, ' KUT from the Kloth ''Zack'' Embossed Faux Leather Jacket ', 'Chevron embossing distinguishes a collarless front-zip jacket crafted from supple faux leather with knit side and sleeve panels to perfect the fit and add mobility. Color(s): black. Brand: Kut From The Kloth. Style Name: KUT from the Kloth ''Zack'' Embossed Faux Leather Jacket. Style Number: 831929.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/16/_9424376.jpg', 1, NULL, '', '3835202', 128, NULL, 128, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3835202&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3835202%3Fcm_cat%3Ddatafeed%26cm_pla%3Djacket_sportcoat%3Awomen%3Ajacket%26cm_ite%3Dkut_from_the_kloth_%2527zack%2527_embossed_faux_leather_jacket%3A831929%26cm_ven%3DLinkshare', 9, 'NORDSTROM.com', 1237, 3835202, 1, '2014-08-19 02:25:31', '2014-08-19 02:25:31'),
(146, ' Kenneth Cole New York ''Ella'' Jacket (Petite) ', 'A black-and-white snakeskin print mottles the lightweight eyelet fashioning a distinctive moto-style jacket. Color(s): black multi. Brand: Kenneth Cole New York. Style Name: Kenneth Cole New York ''Ella'' Jacket (Petite). Style Number: 87143.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/2/_9074882.jpg', 1, NULL, '', '3751082', 178, NULL, 106.8, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3751082&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3751082%3Fcm_cat%3Ddatafeed%26cm_pla%3Djacket_sportcoat%3Awomen%3Ajacket%26cm_ite%3Dkenneth_cole_new_york_%2527ella%2527_jacket_%2528petite%2529%3A87143%26cm_ven%3DLinkshare', 9, 'NORDSTROM.com', 1237, 3751082, 1, '2014-08-19 02:28:20', '2014-08-19 02:28:20'),
(147, ' Free People Denim & Knit Jacket ', 'Get the best of both worlds with a classic button-tab denim jacket updated with a sweatshirt-style drawstring hood and sleeves. Color(s): pumice black. Brand: Free People. Style Name: Free People Denim & Knit Jacket. Style Number: 826277.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/1/_9273601.jpg', 1, NULL, '', '3757863', 148, NULL, 148, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3757863&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3757863%3Fcm_cat%3Ddatafeed%26cm_pla%3Djacket_sportcoat%3Awomen%3Ajacket%26cm_ite%3Dfree_people_denim_%2526_knit_jacket%3A826277%26cm_ven%3DLinkshare', 9, 'NORDSTROM.com', 1237, 3757863, 1, '2014-08-19 02:42:32', '2014-08-19 02:42:32');
INSERT INTO `products` (`id`, `name`, `descrition`, `short_descrition`, `image_url`, `in_stock`, `isbn`, `upc`, `sku`, `price`, `retail_price`, `sale_price`, `mnf_name`, `mnf_sku`, `currency`, `buy_url`, `parent_id`, `advetiser_name`, `advertiser_id`, `ad_id`, `type`, `created`, `modified`) VALUES
(148, ' Jackie O Dress ', 'This dress is absolutely a closet staple that every woman should own. As the name of the garment suggests, this is a classic dress that fits every occasion and every style. The perfect day to night dress. Add a blazer and pumps for work; then after hours lose that blazer and let your hair down. Throw on those sexy stilettos, gold bangles and hit the bar with the girls!', NULL, 'https://d2csjd0bj2nauk.cloudfront.net/products/4555f2de-592e-444c-b8d7-3dfd785a6b91_s.jpg', 1, NULL, '', '47586', 47, NULL, NULL, 'Shoptiques', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=280854.47586&type=15&murl=http%3A%2F%2Fwww.shoptiques.com%2Fproducts%2Fjackie-o-black', 6, 'Shoptiques', 38126, 47586, 1, '2014-09-01 02:33:20', '2014-09-01 02:33:20'),
(149, ' Boom Shaka Crop ', 'Racer Style top with "Boom Shaka Laka" Slogan. Pair with high rise shorts or skirt for the perfect look that will make heads turn.', NULL, 'https://d2csjd0bj2nauk.cloudfront.net/products/a7e700c2-bfd8-4a80-bf54-2f615a5a3594_s.jpg', 1, NULL, '', '64282', 35, NULL, NULL, 'Shoptiques', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=280854.64282&type=15&murl=http%3A%2F%2Fwww.shoptiques.com%2Fproducts%2Fboom-shaka-crop-1', 5, 'Shoptiques', 38126, 64282, 1, '2014-09-01 03:03:20', '2014-09-01 03:03:20'),
(150, ' LS SWEATSHIRT ', 'Faux Leather & French Terry Sweatshirt', NULL, 'http://image.s5a.com/is/image/saksoff5th/0496829817804_300x400.jpg', 1, NULL, '', '0496829817804', 84.99, NULL, 84.99, 'Saks Fifth Avenue OFF 5TH', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=311437.0821419077861&type=15&murl=http%3A%2F%2Fwww.saksoff5th.com%2Ffaux-leather-%2526-french-terry-sweatshirt%2F0496829817804.html%3Fsite_refer%3D', 5, 'Saks Fifth Avenue OFF 5TH', 38801, 2147483647, 1, '2014-09-11 23:42:01', '2014-09-11 23:42:01'),
(151, ' PERFECTION  KNIT SW ', 'Long-Sleeve Graphic Tee', NULL, 'http://image.s5a.com/is/image/saksoff5th/0483929818732_300x400.jpg', 1, NULL, '', '0483929818732', 54.99, NULL, 54.99, 'Saks Fifth Avenue OFF 5TH', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=311437.0749200648574&type=15&murl=http%3A%2F%2Fwww.saksoff5th.com%2Flong-sleeve-graphic-tee%2F0483929818732.html%3Fsite_refer%3D', 5, 'Saks Fifth Avenue OFF 5TH', 38801, 2147483647, 1, '2014-09-11 23:43:23', '2014-09-11 23:43:23'),
(152, ' 1104 MURIEL L/S TOP W NET ', 'Muriel Net-Sleeve Tee', NULL, 'http://image.s5a.com/is/image/saksoff5th/0496911180861_300x400.jpg', 1, NULL, '', '0496911180861', 52.99, NULL, 52.99, 'Saks Fifth Avenue OFF 5TH', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=311437.0496911180908&type=15&murl=http%3A%2F%2Fwww.saksoff5th.com%2Fmuriel-net-sleeve-tee%2F0496911180861.html%3Fsite_refer%3D', 5, 'Saks Fifth Avenue OFF 5TH', 38801, 2147483647, 1, '2014-09-11 23:46:25', '2014-09-11 23:46:25'),
(153, ' BBC MOON MAN CREWNEC ', 'Moon Man Long-Sleeve Tee', NULL, 'http://image.s5a.com/is/image/saksoff5th/0497420607801_300x400.jpg', 1, NULL, '', '0497420607801', 69.99, NULL, 69.99, 'Saks Fifth Avenue OFF 5TH', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=311437.0885398735198&type=15&murl=http%3A%2F%2Fwww.saksoff5th.com%2Fmoon-man-long-sleeve-tee%2F0497420607801.html%3Fsite_refer%3D', 4, 'Saks Fifth Avenue OFF 5TH', 38801, 2147483647, 1, '2014-09-12 00:02:44', '2014-09-12 00:02:44'),
(154, ' LARGE HELMET CREWNEC ', 'Washed Helmet-Decal Sweatshirt', NULL, 'http://image.s5a.com/is/image/saksoff5th/0497420615257_300x400.jpg', 1, NULL, '', '0497420615257', 69.99, NULL, 69.99, 'Saks Fifth Avenue OFF 5TH', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=311437.0885398820542&type=15&murl=http%3A%2F%2Fwww.saksoff5th.com%2Fwashed-helmet-decal-sweatshirt%2F0497420615257.html%3Fsite_refer%3D', 4, 'Saks Fifth Avenue OFF 5TH', 38801, 2147483647, 1, '2014-09-12 00:03:28', '2014-09-12 00:03:28'),
(157, ' Calibrate Dot Socks Blue Ceramic One Size ', 'A multitude of patterns mark eye-catching socks formed from a stretchy cotton blend. Color(s): blue ceramic, navy heather. Brand: CALIBRATE. Style Name: Calibrate Dot Socks. Style Number: 67167.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/18/_8947978.jpg', 1, NULL, '429585379651', '58823877', 12.5, NULL, 12.5, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.58823877&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3649504%3Fcm_cat%3Ddatafeed%26cm_pla%3Dhosiery%3Amen%3Asocks%26cm_ite%3Dcalibrate_dot_socks%3A67167%26cm_ven%3DLinkshare', 12, 'NORDSTROM.com', 1237, 58823877, 1, '2014-09-14 03:15:50', '2014-09-14 03:15:50'),
(165, ' Men''s Stance ''The Reserve - Crooke'' Socks ', 'Knit from a soft, stretchy blend of combed cotton with a reinforced heel and toe, durable midweight socks feature static-like stripes and a cool dot pattern. Color(s): black. Brand: Stance. Style Name: Stance ''The Reserve - Crooke'' Socks. Style Number: 467604.', NULL, 'http://content.nordstrom.com/imagegallery/store/product/large/12/_9901272.jpg', 1, NULL, '', '3790412', 14, NULL, 14, 'NORDSTROM.com', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=276223.3790412&type=15&murl=http%3A%2F%2Fshop.nordstrom.com%2FS%2F3790412%3Fcm_cat%3Ddatafeed%26cm_ite%3Dstance_%2527the_reserve_-_crooke%2527_socks%3A467604%26cm_pla%3Dmen%3Ahosiery%3Asocks%26cm_ven%3DLinkshare', 12, 'NORDSTROM.com', 1237, 3790412, 1, '2014-11-21 23:53:38', '2014-11-21 23:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(11) DEFAULT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '0',
  `likes` int(10) NOT NULL DEFAULT '0',
  `nickname` varchar(100) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `address1` varchar(200) DEFAULT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `country` varchar(250) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `image` varchar(200) DEFAULT NULL,
  `ss_number` varchar(50) DEFAULT NULL,
  `bankname` varchar(200) DEFAULT NULL,
  `bankaccount_no` varchar(200) DEFAULT NULL,
  `bankrouting_no` varchar(200) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_id`, `username`, `password`, `role`, `likes`, `nickname`, `name`, `middle_name`, `last_name`, `dob`, `address`, `address1`, `state`, `city`, `zip`, `country`, `gender`, `status`, `image`, `ss_number`, `bankname`, `bankaccount_no`, `bankrouting_no`, `token`, `created`, `modified`) VALUES
(1, 'ES000001', 'admin@esmees.com', '9a5d716a6be58acec023d33587e170ed09edb191', 1, 0, 'Admin', 'Admin', NULL, NULL, NULL, 'NYC', NULL, 'NYC', 'NYC', '12345', 'US', '0', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2014-03-18 00:00:00', '2014-04-22 23:00:42'),
(2, 'ES000002', 'ashish1bhagat@gmail.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'Ashu', 'Ashish', 'K', 'Bhagat', NULL, 'test addr', 'c', 'Delhi', 'Delhi', '123456', 'IN', '0', 1, '5329636a-acb0-48e5-8028-05c04293f485.jpg', 'c', 'c', 'c', 'c', '24c83df685a634445e67a6921c70c43e37128642', '2014-03-18 01:10:12', '2014-03-19 03:29:14'),
(9, 'ES000009', 'smsarreal@gmail.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 5, 'SeanNYC', 'Sean', 'Testing', 'Sarreal', '08/10/1978', '', '', '', '', '', 'US', '0', 1, '5379d7d4-009c-47d0-800b-59b8408d8133.jpg', 'SSN344943943', 'Bank Name', 'AC043904304', 'BRT495945', 'c7237d3884b504dc47a7a7297ceb9a1aa4a9023b', '2014-03-19 00:03:09', '2014-05-19 06:07:16'),
(44, 'ES000044', 'jenvarias@yahoo.com', '25e2e750cfe5dbbc931a737fd47b177001cfd37f', 0, 0, 'JenFiire', 'Jennifer', '', 'Varias', '10/03/1982', '', NULL, 'New York', 'New York', '', 'US', '1', 1, NULL, NULL, NULL, NULL, NULL, '17d34d248d1a1098f189dbcca544380ea9f3c630', '2014-09-16 13:17:13', '2014-09-16 13:17:13'),
(41, 'ES000041', 'john.peter.marcelino@gmail.com', 'e4a7cb0cd8b2c0c22e28026687a533f233a2b14f', 0, 0, 'jp_test', 'JP', '', 'M', '01/01/1950', '', NULL, 'NY', 'New York', '', 'US', '0', 1, NULL, NULL, NULL, NULL, NULL, 'c86b113ead81dc0169204d07e176411b98228972', '2014-08-07 22:31:03', '2014-08-07 22:31:04'),
(10, 'ES000010', 'shivam@builtbyblank.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'Shivam', 'Demo', '', 'xvcx', '09110987', '', NULL, 'delhi', 'delhi', '', '  ', '0', 1, NULL, NULL, NULL, NULL, NULL, '2c0cefa38d336b7048cd3831b44550d5904ddfeb', '2014-04-02 06:43:27', '2014-04-02 06:43:27'),
(28, 'ES000028', 'pankajgupta20dec@outlook.com', '581a2c3c4555d7ae5f0a70324672dd538bb0f546', 0, 0, 'AG', 'Aman', '', 'Gupta', '05/08/1991', '', NULL, 'Delhi', 'Delhi', '', 'IN', '0', 1, NULL, NULL, NULL, NULL, NULL, 'c09678b657e006b884d10d7f97360fdaaa301c82', '2014-04-04 07:47:35', '2014-04-04 07:47:35'),
(27, 'ES000027', 'pankaj@builtbyblank.com', 'cc054f04d8a108e11ec48d85a3e108ec60d1be9f', 0, 0, 'Pankaj', 'Pankaj', '', 'Gupta', '20/12/1991', 'A-64, New No.704, Buddha Marg', 'Mandawali', 'Delhi', 'Laxmi Nagar', '110092', 'IN', '0', 1, '533d0d5d-7178-4c10-af8b-4b1b4293f485.jpg', NULL, NULL, NULL, NULL, '2fb7ec18b8fcfca069b921946c3b46fe64989fea', '2014-04-03 01:19:53', '2014-04-03 03:59:27'),
(36, 'ES000036', 'sbdh.singh@gmail.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'Gaman', 'subodh', 'Kumar', 'Singh', '01/11/1998', 'sfsdfsdfsd', '', 'Delhi', 'Delhi', '', 'AQ', '0', 1, '5368b4ee-0970-4289-be0f-2afa4293f485.png', '333333', '11111', '22222', '4444444', '87adc263d597af8a8ae296a7778e894554da8c61', '2014-05-06 04:05:40', '2014-05-19 00:21:46'),
(30, 'ES000030', 'shivam5105@gmail.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'shivam', 'bvnvbn', '', 'dggg', '12/01/1989', '', '', 'New Delhi', 'Delhi', '110033', '  ', '0', 1, '53550c76-9874-43f1-a1a2-3bd94293f485.jpg', 'SSN394939939', 'SBI', 'AC000000045', 'BRN394984939393', 'e2237e8f63c57a04976d51ba445033b96976da63', '2014-04-16 06:34:09', '2014-05-14 01:43:47'),
(31, 'ES000031', 'missisabelsarreal@gmail.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'AlohaIsabel', 'Isabel', '', 'Sarreal', '03/28/2000', '123', '123', 'New Jersey', 'North Bergen', '07047', 'US', '1', 1, NULL, NULL, NULL, NULL, NULL, 'c05b72aa5c8ed636fcff2ced21846e27e7b04929', '2014-04-19 08:48:28', '2014-04-19 08:51:22'),
(35, 'ES000035', 'jamesbrice75@gmail.com', 'a178f8bac015c24531700661641c88be3cf81ea1', 0, 0, 'jigga', 'james', 'auther', 'brice', '12/26/1978', '', '', 'new york', 'flushing', '', 'US', '0', 1, NULL, NULL, NULL, NULL, NULL, '0e7f28e49d3c3de9f9d5e5c684c68c2db2c5544f', '2014-04-30 17:01:05', '2014-04-30 18:12:28'),
(37, 'ES000037', 'ram@gmail.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'subodh', 'kumar', 'singh', 'Testing', '05/31/1995', '', NULL, 'Delhi', 'Delhi', '', 'BH', '0', 0, NULL, NULL, NULL, NULL, NULL, '339343eb694f5db010218b706b8e5f3c250441b3', '2014-05-20 04:45:17', '2014-05-20 04:45:17'),
(38, 'ES000038', 'ytryyt@hghghgh.juhkjk', '1451bfefea8df271ebedfa5ceb5cd098361978b9', 0, 0, 'yty', 'tyyr', 'ytryry', 'tryrtytryyt', '12/31/2012', '', NULL, 'jkjhkjhk', 'jhkj', '', 'BS', '0', 0, NULL, NULL, NULL, NULL, NULL, 'e89a180be7215bf99ca8c633d337b48b9c9cd70b', '2014-05-20 04:48:19', '2014-05-20 04:48:19'),
(39, 'ES000039', 'gfdgfd@gfg.fsf', 'aa2276a82452fb79bbcd8cfb0d4a0d9b1e4b376a', 0, 0, 'fsg', 'dfgdfg', 'gdgfdgfdg', 'gfdgfdgd', '12/22/2014', '', NULL, 'lljkljl', 'jklklj', '', '  ', '0', 0, NULL, NULL, NULL, NULL, NULL, 'e24ad64addb40a4e4d1be2d2e5e5cbe51ecabaf0', '2014-05-20 04:49:24', '2014-05-20 04:49:24'),
(43, 'ES000043', 'daddysean@gmail.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'TestUser01', 'Test', '', 'Test', '08/10/1978', '', NULL, 'NJ', 'North Bergen', '', 'US', '0', 1, NULL, NULL, NULL, NULL, NULL, '141e23cb4a3a32031d27d9f14e301ebbf908a33b', '2014-09-13 22:34:00', '2014-10-05 03:58:59'),
(45, 'ES000045', 'debbie_varias@yahoo.com', '8c552944e8f72977228a979e49f2fb110cf33512', 0, 0, 'Deba', 'Debbie', '', 'Varias', '10/22/1980', '', NULL, 'Ny', 'Flushing', '', 'US', '1', 1, NULL, NULL, NULL, NULL, NULL, '2626ada597c23a0e244eaf1f89de6f44697c1c7e', '2014-09-16 13:17:46', '2014-09-16 13:17:47'),
(46, 'ES000046', 'missxonell@gmail.com', 'e3fc651b28cb0c5355ffc1d9bde904d6c1eb226f', 0, 0, 'Nell', 'Manell', 'N', 'Eugenio', '03/10/1988', '', NULL, 'New Jersey', 'North Bergen', '', 'US', '1', 1, NULL, NULL, NULL, NULL, NULL, '49d840301ebf48bab9d802b9514af6302cac4c50', '2014-09-16 16:16:35', '2014-09-16 16:16:35'),
(48, 'ES000048', 'seanesmees@yahoo.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'TestUser03', 'Sean', 'Test', 'Test', '08/10/1978', '', NULL, 'NY', 'Flushing', '', 'US', '0', 0, NULL, NULL, NULL, NULL, NULL, '4bbb18eb82b71d55873f758070ac26cad17c1c00', '2014-11-19 22:50:48', '2014-11-19 22:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `widthdraws`
--

CREATE TABLE IF NOT EXISTS `widthdraws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `widthdraw_request_amount` varchar(50) NOT NULL,
  `request_date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `type`) VALUES
(8, 43, 133, 0),
(9, 43, 135, 0),
(10, 43, 154, 0),
(11, 43, 136, 0),
(20, 43, 4, 1),
(13, 43, 27, 0),
(14, 43, 56, 0),
(15, 43, 153, 0),
(16, 43, 102, 0),
(17, 43, 142, 0),
(19, 43, 134, 0),
(22, 47, 164, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
