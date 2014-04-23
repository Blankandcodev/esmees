-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2014 at 05:30 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esmees`
--
CREATE DATABASE IF NOT EXISTS `esmees` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `esmees`;

-- --------------------------------------------------------

--
-- Table structure for table `advs`
--

CREATE TABLE IF NOT EXISTS `advs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `adv_id` int(25) DEFAULT NULL,
  `adv_name` varchar(500) NOT NULL,
  `afflitate_type` varchar(2) NOT NULL,
  `vested_period` int(3) NOT NULL,
  `url` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `advs`
--

INSERT INTO `advs` (`id`, `adv_id`, `adv_name`, `afflitate_type`, `vested_period`, `url`, `created`) VALUES
(18, 36342, 'Payment', 'LS', 1, '', '2014-03-05 09:27:30'),
(8, 38010, 'Testing', 'LS', 2, '', '2014-02-17 04:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` int(1) NOT NULL,
  `section` int(1) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `buy_url` varchar(200) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `category`, `section`, `heading`, `description`, `buy_url`, `image`, `created`) VALUES
(16, 0, 0, '', '', '', NULL, '2014-04-01 08:34:29'),
(17, 0, 0, '', '', '', NULL, '2014-04-01 08:34:38'),
(18, 0, 0, '', '', '', NULL, '2014-04-01 08:35:56'),
(19, 0, 0, '', '', '', NULL, '2014-04-01 08:52:00'),
(20, 0, 0, '', '', '', NULL, '2014-04-01 08:53:15'),
(21, 0, 0, 'Testing', 'Demo Testing', 'www.google.com', 'Profile.png', '2014-04-01 08:54:31'),
(22, 0, 0, 'ssss', 'sss', 'ssss', NULL, '2014-04-01 08:58:27'),
(23, 0, 1, 'dddd', 'ddd', 'dddd', NULL, '2014-04-03 05:22:07'),
(24, 1, 1, 'Demo ', 'Testing', 'www.google.com', NULL, '2014-04-03 05:24:53'),
(25, 1, 1, 'Demo ', 'Testing', 'www.google.com', NULL, '2014-04-03 05:26:47');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `lft`, `rght`, `name`) VALUES
(1, NULL, 1, 24, 'Category'),
(2, 1, 2, 15, 'Men'),
(3, 1, 16, 23, 'Women'),
(4, 2, 3, 8, 'T-Shirt'),
(5, 3, 17, 20, 'Top'),
(6, 2, 9, 10, 'Shirt'),
(7, 2, 11, 12, 'paint'),
(8, 2, 13, 14, 'Cap'),
(9, 3, 21, 22, 'demo'),
(11, 4, 4, 5, 'sfsfsdfs'),
(12, 4, 6, 7, 'T-shirt1'),
(13, 5, 18, 19, 'top2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `commissions`
--

INSERT INTO `commissions` (`id`, `ref_id`, `user_commission`, `member_id`, `adv_id`, `user_id`, `order_id`, `transaction_date`, `transaction_time`, `sku_number`, `sales`, `quantity`, `commissions`, `process_date`, `vesting_date`, `program`) VALUES
(7, 0, 1.24, 'ESMADMIN-ES000010', '38010', '10', '1006396', '2014-03-19', '17:48:00', 'dress140311103', '24.80', 1, '2.48', '2014-03-19', '2014-03-29', 'LS'),
(8, 0, 1.24, 'ESMADMIN-ES000010', '38010', '10', '1006396', '2014-03-19', '17:48:00', 'dress140311103', '24.80', 1, '2.48', '2014-03-19', '2014-03-29', 'LS');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follow_id`, `create_date`) VALUES
(1, 2, 2, '0000-00-00 00:00:00'),
(2, 7, 7, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `product_id`) VALUES
(1, 2, 2),
(2, 2, 24),
(3, 5, 2),
(4, 5, 24),
(5, 7, 2),
(6, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(50) NOT NULL,
  `adv_id` varchar(50) NOT NULL,
  `merchant_name` varchar(200) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `transaction_date` date NOT NULL,
  `transaction_time` time NOT NULL,
  `sku_number` varchar(100) NOT NULL,
  `sales` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `commissions` varchar(20) NOT NULL,
  `process_date` date NOT NULL,
  `process_time` time NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=247 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `member_id`, `adv_id`, `merchant_name`, `order_id`, `transaction_date`, `transaction_time`, `sku_number`, `sales`, `quantity`, `commissions`, `process_date`, `process_time`, `status`) VALUES
(238, 'ESMADMIN-ES000010', '38010', 'SheInside', '1006396', '2014-03-01', '17:48:00', 'dress140311102', '24.80', 1, '2.48', '0000-00-00', '17:49:00', 1),
(239, 'ESMADMIN-ES000010', '38010', 'SheInside', '1006396', '2014-03-01', '17:48:00', 'dress140311103', '24.80', 1, '2.48', '0000-00-00', '17:49:00', 1),
(240, 'GUEST-GUEST', '36342', 'Buy.com (dba Rakuten.com Shopping)', '73591475', '2014-03-10', '03:18:00', '259086554', '33.99', 1, '0.34', '0000-00-00', '17:15:00', 1),
(244, 'ESMADMIN-ES000010', '38010', 'SheInside', '1006396', '0000-00-00', '17:48:00', 'dress140311102', '24.80', 1, '2.48', '0000-00-00', '17:49:00', 1),
(245, 'ESMADMIN-ES000010', '38010', 'SheInside', '1006396', '0000-00-00', '17:48:00', 'dress140311103', '24.80', 1, '2.48', '0000-00-00', '17:49:00', 1),
(246, 'GUEST-GUEST', '36342', 'Buy.com (dba Rakuten.com Shopping)', '73591475', '0000-00-00', '03:18:00', '259086554', '33.99', 1, '0.34', '0000-00-00', '17:15:00', 1);

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
  `brand` varchar(100) DEFAULT NULL,
  `cover` int(1) DEFAULT NULL,
  `likes` int(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `looks`
--

INSERT INTO `looks` (`Id`, `caption_name`, `order_id`, `user_id`, `product_id`, `image`, `status`, `created`, `category_id`, `brand`, `cover`, `likes`) VALUES
(23, 'Demo Testing', 1, 10, 108, '53350d43-eb14-4c22-81b1-1118408d8133.png', 0, '2014-03-28 05:48:51', 6, 'azIam', 1, 0),
(24, 'Demo Testing', 1, 10, 108, '53350d68-033c-4247-9a8a-1118408d8133.png', 0, '2014-03-28 05:49:28', 6, 'azIam', 0, 0);

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
  `transaction_time` time NOT NULL,
  `sku_number` varchar(100) NOT NULL,
  `sales` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `commissions` varchar(20) NOT NULL,
  `process_date` date NOT NULL,
  `process_time` time NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `email` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lsorders`
--

INSERT INTO `lsorders` (`id`, `member_id`, `adv_id`, `merchant_name`, `order_id`, `transaction_date`, `transaction_time`, `sku_number`, `sales`, `quantity`, `commissions`, `process_date`, `process_time`, `status`, `email`) VALUES
(1, 'ESMADMIN-ES000010', '38010', 'SheInside', '1006396', '2014-03-19', '17:48:00', 'dress140311102', '24.80', 1, '2.48', '2014-03-19', '17:49:00', 1, 0),
(2, 'ESMADMIN-ES000010', '38010', 'SheInside', '1006396', '2014-03-19', '17:48:00', 'dress140311103', '24.80', 1, '2.48', '2014-03-19', '17:49:00', 1, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `product_id`, `user_id`, `order_date`) VALUES
(1, 1006396, 2, 10, '2014-03-19 00:00:00'),
(2, 1006396, 4, 10, '2014-03-19 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `slug`, `status`) VALUES
(2, 'Ram', 'closed', '', 0),
(3, 'Help', 'Testing', '', 0),
(4, 'Terms & Condition', 'Testing', '', 0),
(5, 'Privacy Policy', 'TEsting', '', 0),
(6, 'Contact Us', 'Testing', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `generate_date` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `member_id`, `amount`, `remarks`, `generate_date`, `status`) VALUES
(1, 10, 'ES000010', '2', 'Testing', '2014-04-02 21:47:07', 0),
(2, 10, 'ES000010', '1', 'Final Testing', '2014-04-02 21:47:39', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descrition`, `short_descrition`, `image_url`, `in_stock`, `isbn`, `upc`, `sku`, `price`, `retail_price`, `sale_price`, `mnf_name`, `mnf_sku`, `currency`, `buy_url`, `parent_id`, `advetiser_name`, `advertiser_id`, `ad_id`, `type`, `created`, `modified`) VALUES
(2, '', ' short="A pretty lace inset turns this otherwise basic blouse into an elegant and easy must-have." long=""', NULL, 'http://www.joie.com/media/catalog/product/m/_/m_500727465_caviar_front-cropped.png', 1, NULL, NULL, 'dress140311102', 168, NULL, 168, 'CafePress', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=252245.10896&type=15&murl=https%3A%2F%2Fjoie.affiliatetechnology.com%2Fredirect.php%3Fnt_id%3D2%26url%3Dhttp%3A%2F%2Fwww.joie.com%2Farrayah-top-caviar', 3, 'Joie', 37453, 10896, 1, '2014-02-17 03:12:41', '2014-03-11 12:52:14'),
(4, ' Rancher Top ', ' short="A relaxed silhouette in soft silk makes this tee a new essential. With a pocket detail and subtle pin tucking, this cap sleeved blouse is sheer bliss." long=""', NULL, 'http://www.joie.com/media/catalog/product/m/_/m_n1123294_dustypinksand_front-cropped.png', 1, NULL, NULL, 'dress140311103', 158, NULL, 158, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=252245.11845&type=15&murl=https%3A%2F%2Fjoie.affiliatetechnology.com%2Fredirect.php%3Fnt_id%3D2%26url%3Dhttp%3A%2F%2Fwww.joie.com%2Francher-top-dusty-pink-sand', 3, 'Joie', 37453, 11845, 1, '2014-02-17 03:13:06', '2014-02-17 03:13:06'),
(16, 'Rich''s Team ', 'OFFICIAL Team Groundhog Tourney Gear Baseball  Baseball Jersey    Our 100% cotton Baseball Jersey is a sporty hit with both men and women whether you''re in the game or just looking the part in great run-around casual-wear.  Choose red, blue or black sleeves. 6.1 oz. 100% heavyweight cotton. Standard f', NULL, 'http://images.cafepress.com/product/10382125_480x480_f.jpg', 0, '', '', '259086554', 31, 31, 31, 'CafePress', '10382125', 'GBP', 'http://www.kqzyfj.com/click-7352624-10798686?url=http%3A%2F%2Fwww.cafepress.co.uk%2Fmf%2F4138762%2Frichs-team-groundhog_baseball-jersey&cjsku=10382125', 2, 'Cafepress UK', 3049768, 10798686, 0, '2014-02-17 04:49:29', '2014-02-17 04:49:29'),
(8, ' Baseball Baseball ', 'Our 100% cotton Baseball Jersey is a sporty hit with both men and women whether you''re in the game or just looking the part in great run-around casual-wear.  Choose red, blue or black sleeves. 6.1 oz. 100% heavyweight cottonStandard f Baseball  Baseball Jersey    Our 100% cotton Baseball Jersey is a sporty hit with both men and women whether you''re in the game or just looking the part in great run-around casual-wear.  Choose red, blue or black sleeves. 6.1 oz. 100% heavyweight cotton. Standard f', NULL, 'http://images.cafepress.com/product/11348150_480x480_b.jpg', 0, '', '', '11348150', 31, 31, 31, 'CafePress', '11348150', 'GBP', 'http://www.jdoqocy.com/click-7352624-10798686?url=http%3A%2F%2Fwww.cafepress.co.uk%2Fmf%2F4615223%2F-website-address-on-the-front_baseball-jersey&cjsku=11348150', 2, 'Cafepress UK', 3049768, 10798686, 0, '2014-02-17 04:26:24', '2014-02-17 04:32:10'),
(10, ' Sweatshirt ', 'Imprint same on both sides Imprint  Hooded Sweatshirt   Tee, TShirt, Shirt The hoodie: the perfect utilitarian piece of clothing. Leave your hat and scarf at home Stay warm and comfy in your Pullover Hooded Sweatshirt. This hoodie is constructed with a cotton/polyester blend - both durable and comfortable.Heavyweight 90', NULL, 'http://images.cafepress.com/product/12812219_480x480_f.jpg', 0, '', '', '12812219', 36, 36, 36, 'CafePress', '12812219', 'GBP', 'http://www.tkqlhce.com/click-7352624-10798686?url=http%3A%2F%2Fwww.cafepress.co.uk%2F%2Bproud_owner_hooded_sweatshirt%2C12812219&cjsku=12812219', 2, 'Cafepress UK', 3049768, 10798686, 0, '2014-02-17 04:27:04', '2014-03-11 12:58:20'),
(12, 'Shoot Smiley', 'Ad-Free version of this classic offensive design Funny  Long Sleeve T-Shirt   Tee, TShirt, Shirt The most comfortable t-shirt ever Our 100% cotton, Hanes Beefy-T is preshrunk, durable and guaranteed.  6.1 oz. 100% luxuriously soft ring spun cotton . Standard fit. Ribbed sleeve cuffs.', NULL, 'http://images.cafepress.com/product/12414053_480x480_f.jpg', 0, '', '', '12414053', 31, 31, 31, 'CafePress', '12414053', 'GBP', 'http://www.anrdoezrs.net/click-7352624-10798686?url=http%3A%2F%2Fwww.cafepress.co.uk%2Fmf%2F4184303%2Fshoot-smiley-in-the-head_long-sleeve-tshirt&cjsku=12414053', 2, 'Cafepress UK', 3049768, 10798686, 0, '2014-02-17 04:28:18', '2014-02-17 04:33:13'),
(28, 'Aaluuka ', 'Aaluuka The City', NULL, 'http://media.activewearusa.com/store/pc/catalog/Aaluuka-City-Grey-Pants-general.jpg', 0, '', '', 'AALK-BTTMS-21001', 88, 88, NULL, 'Aaluuka', '', 'USD', 'http://www.anrdoezrs.net/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FAaluuka-The-City-p62732.htm&cjsku=AALK-BTTMS-21001', 3, 'ActivewearUSA.com', 3698863, 11061455, 0, '2014-02-17 05:03:19', '2014-02-17 05:03:19'),
(18, 'Grassroot ', 'Our Jr. Raglan from American Apparel is body contoured and baby soft. Made of 100% superfine combed cotton baby rib, this raglan provides the perfect look for any season. 5.8 oz. 100% Ultra-fine combed ring spun 1x1 baby rib cottonSize up Soccer  Jr. Raglan    Our Jr. Raglan from American Apparel is body contoured and baby soft. Made of 100% superfine combed cotton baby rib, this raglan provides the perfect look for any season. 5.8 oz. 100% Ultra-fine combed ring spun 1x1 baby rib cotton. Size up', NULL, 'http://images.cafepress.com/product/11349069_480x480_f.jpg', 0, '', '', '11349069', 29, 29, 29, 'CafePress', '11349069', 'GBP', 'http://www.tkqlhce.com/click-7352624-10798686?url=http%3A%2F%2Fwww.cafepress.co.uk%2Fmf%2F4500698%2Fgrassroot-soccer-logo_baseball-jersey&cjsku=11349069', 3, 'Cafepress UK', 3049768, 10798686, 0, '2014-02-17 04:50:04', '2014-02-17 05:36:47'),
(30, 'Anjali Lila ', 'Anjali Lila Cropped Yoga Pants', NULL, 'http://media.activewearusa.com/store/pc/catalog/Anjali-Lila-Cropped-Pants-Turq-general.jpg', 0, '', '', 'ANJ-CAPRI-AK6741', 200, 60, 52, 'Anjali', '', 'USD', 'http://www.tkqlhce.com/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FAnjali-Lila-Cropped-Yoga-Pants-p53609.htm&cjsku=ANJ-CAPRI-AK6741', 3, 'ActivewearUSA.com', 3698863, 11061455, 0, '2014-02-17 05:04:02', '2014-03-11 12:58:48'),
(20, 'Grassroot ', 'Our 100% cotton Baseball Jersey is a sporty hit with both men and women whether you''re in the game or just looking the part in great run-around casual-wear.  Choose red, blue or black sleeves. 6.1 oz. 100% heavyweight cottonStandard f Soccer  Baseball Jersey    Our 100% cotton Baseball Jersey is a sporty hit with both men and women whether you''re in the game or just looking the part in great run-around casual-wear.  Choose red, blue or black sleeves. 6.1 oz. 100% heavyweight cotton. Standard f', NULL, 'http://images.cafepress.com/product/11349083_480x480_f.jpg', 0, '', '', '11349083', 29, 29, 29, 'CafePress', '11349083', 'GBP', 'http://www.tkqlhce.com/click-7352624-10798686?url=http%3A%2F%2Fwww.cafepress.co.uk%2Fmf%2F4500698%2Fgrassroot-soccer-logo_baseball-jersey&cjsku=11349083', 2, 'Cafepress UK', 3049768, 10798686, 0, '2014-02-17 04:50:54', '2014-02-17 04:50:54'),
(36, ' T-Shirt', 'Vote yes, then grab your weapon of choice.<br /><br />â€¢ Professionally printed silkscreen<br />â€¢  High-quality, 100% cotton tee.<br />â€¢ Ships within 2 business days<br />â€¢  Designed and printed in the USA<br />', NULL, 'http://6dollarshirts.com/images/P/Vote-Yes-Zombie-Apocalypse-T-SHIRT-11130.jpg', 0, '', '', '11130', 6, NULL, NULL, '', '', 'USD', 'http://www.dpbolvw.net/click-7352624-10650431?url=http%3A%2F%2F6dollarshirts.com%2Fproduct.php%3Fproductid%3D11130&cjsku=11130', 2, '6DollarShirts.com', 2606886, 10650431, 0, '2014-02-17 05:17:17', '2014-02-17 05:17:17'),
(24, 'Beckons Grace', 'Beckons Grace Bamboo Dress', NULL, 'http://media.activewearusa.com/store/pc/catalog/Beckons-Grace-Dress-Purple-general.jpg', 0, '', '', 'BCK-DRESS-D121', 99, 99, NULL, 'Beckons', '', 'USD', 'http://www.dpbolvw.net/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FBeckons-Grace-Bamboo-Dress-p54127.htm&cjsku=BCK-DRESS-D121', 3, 'ActivewearUSA.com', 3698863, 11061455, 0, '2014-02-17 04:54:46', '2014-02-17 04:54:46'),
(26, ' Jersey', '2XU Women''s Sublimated Jersey', NULL, 'http://media.activewearusa.com/store/pc/catalog/2XU-wc2346a_blkchr_front_general.jpg', 0, '', '', '2XU-65001', 99.95, 99.95, NULL, '2XU', '', 'USD', 'http://www.jdoqocy.com/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2F2XU-Women-s-Sublimated-Jersey-p113871.htm&cjsku=2XU-65001', 2, 'ActivewearUSA.com', 3698863, 11061455, 0, '2014-02-17 04:56:02', '2014-02-17 05:35:55'),
(33, ' T-Shirt', 'Drop a couple hits, and it''s like digging up your dead grandma with rollers in her hair.<br /> <br /> â€¢ Professionally printed silkscreen <br /> â€¢ High-quality, 100% cotton tee <br /> â€¢ Ships within 2 business days  <br />', NULL, 'http://6dollarshirts.com/images/P/grateful_dead_big_bertha-01.jpg', 0, '', '', '11832', 13.95, NULL, NULL, '', '', 'USD', 'http://www.dpbolvw.net/click-7352624-10650431?url=http%3A%2F%2F6dollarshirts.com%2Fproduct.php%3Fproductid%3D11832&cjsku=11832', 2, '6DollarShirts.com', 2606886, 10650431, 0, '2014-02-17 05:08:38', '2014-02-17 05:08:38'),
(40, 'Yoga Pants', 'Anjali Lila Cropped Yoga Pants', NULL, 'http://media.activewearusa.com/store/pc/catalog/Anjali-Lila-Cropped-Pants-Turq-general.jpg', 0, '', '', 'ANJ-CAPRI-AK6741', 60, 60, NULL, 'Anjali', '', 'USD', 'http://www.dpbolvw.net/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FAnjali-Lila-Cropped-Yoga-Pants-p53609.htm&cjsku=ANJ-CAPRI-AK6741', 3, 'ActivewearUSA.com', 3698863, 11061455, 0, '2014-02-17 05:21:35', '2014-02-17 05:21:35'),
(38, 'Vote Yes', 'Vote yes, then grab your weapon of choice.<br /><br />â€¢ Professionally printed silkscreen<br />â€¢  High-quality, 100% cotton tee.<br />â€¢ Ships within 2 business days<br />â€¢  Designed and printed in the USA<br />', NULL, 'http://6dollarshirts.com/images/P/Vote-Yes-Zombie-Apocalypse-T-SHIRT-11130.jpg', 0, '', '', '11130', 6, NULL, NULL, '', '', 'USD', 'http://www.dpbolvw.net/click-7352624-10650431?url=http%3A%2F%2F6dollarshirts.com%2Fproduct.php%3Fproductid%3D11130&cjsku=11130', 2, '6DollarShirts.com', 2606886, 10650431, 0, '2014-02-17 05:18:15', '2014-02-17 05:18:15'),
(42, 'Practice Tank', 'Anjali Ohm Practice Tank', NULL, 'http://media.activewearusa.com/store/pc/catalog/Anjali-Ohm-Practice-Tank-Black-general.jpg', 0, '', '', 'ANJ-TOP-AK6538', 40, 40, NULL, 'Anjali', '', 'USD', 'http://www.jdoqocy.com/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FAnjali-Ohm-Practice-Tank-p53575.htm&cjsku=ANJ-TOP-AK6538', 3, 'ActivewearUSA.com', 3698863, 11061455, 0, '2014-02-17 05:22:18', '2014-02-17 05:22:18'),
(44, 'Yoga Burnout Tee', 'Anjali Yo-Yoga Burnout Tee', NULL, 'http://media.activewearusa.com/store/pc/catalog/Anjali-YoYoga-Tee-White-general.jpg', 0, '', '', 'ANJ-AK6823', 44, 44, NULL, 'Anjali', '', 'USD', 'http://www.jdoqocy.com/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FAnjali-Yo-Yoga-Burnout-Tee-p103671.htm&cjsku=ANJ-AK6823', 3, 'ActivewearUSA.com', 3698863, 11061455, 0, '2014-02-17 05:23:08', '2014-02-17 05:23:08'),
(48, ' Aleene Top ', ' short="A basic tank silhouette is updated with delicate embroidery and cut-out eyelet details." long=""', NULL, 'http://www.joie.com/media/catalog/product/m/_/m_j255t1307_porcelain_front-cropped.png', 1, NULL, NULL, 'J255-T1307_PORCELAIN', 238, NULL, 238, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=252245.12154&type=15&murl=https%3A%2F%2Fjoie.affiliatetechnology.com%2Fredirect.php%3Fnt_id%3D2%26url%3Dhttp%3A%2F%2Fwww.joie.com%2Faleene-top-porcelain', 3, 'Joie', 37453, 12154, 1, '2014-02-17 05:27:11', '2014-02-17 05:27:11'),
(62, ' Amaline ', ' short="The classically chic and feminine peplum top gets a slightly edgy update in super soft paper leather." long=""', NULL, 'http://www.joie.com/media/catalog/product/m/_/m_j725t1228b_caviar_front-cropped.png', 1, NULL, NULL, 'J725-T1228B_CAVIAR', 498, NULL, 498, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=252245.11798&type=15&murl=https%3A%2F%2Fjoie.affiliatetechnology.com%2Fredirect.php%3Fnt_id%3D2%26url%3Dhttp%3A%2F%2Fwww.joie.com%2Famaline-b-leather-top-caviar', 3, 'Joie', 37453, 11798, 1, '2014-02-17 05:38:25', '2014-02-17 05:38:25'),
(50, ' Natelle Top ', ' short="A feminine silhouette in chic geo printed savory silk, our Natelle top features a covered button placket, split v-neck and button sleeve cuffs." long=""', NULL, 'http://www.joie.com/media/catalog/product/m/_/m_1237t1230_caviar_front-cropped.png', 1, NULL, NULL, '1237-T1230_CAVIAR', 258, NULL, 258, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=252245.12148&type=15&murl=https%3A%2F%2Fjoie.affiliatetechnology.com%2Fredirect.php%3Fnt_id%3D2%26url%3Dhttp%3A%2F%2Fwww.joie.com%2Fnatelle-top-caviar', 3, 'Joie', 37453, 12148, 1, '2014-02-17 05:27:34', '2014-02-17 05:27:34'),
(52, ' Yasmin Top ', ' short="This slightly sheer long sleeve Soft Joie shirt features a scoop neckline. Model is wearing the Coraline camisole in Caviar. Camisole is sold separately." long=""', NULL, 'http://www.joie.com/media/catalog/product/m/_/m_b69-23225_caviar_cropped.png', 1, NULL, NULL, 'B69-23225_CAVIAR', 118, NULL, 118, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=252245.4642&type=15&murl=https%3A%2F%2Fjoie.affiliatetechnology.com%2Fredirect.php%3Fnt_id%3D2%26url%3Dhttp%3A%2F%2Fwww.joie.com%2Fyasmin-top-caviar', 4, 'Joie', 37453, 4642, 1, '2014-02-17 05:27:54', '2014-02-17 05:27:54'),
(54, ' Marlo Top ', ' short="Our Marlo blouse features 3/4 sleeves, two front chest pockets, split v-neck, rounded hem and epaulettes. Pair the neutral hue, airy silhouette with skinny jeans and wear all year long." long=""', NULL, 'http://www.joie.com/media/catalog/product/m/_/m_35522405_mink_front-cropped.png', 1, NULL, NULL, '355-22405_MINK', 218, NULL, 218, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=252245.11381&type=15&murl=https%3A%2F%2Fjoie.affiliatetechnology.com%2Fredirect.php%3Fnt_id%3D2%26url%3Dhttp%3A%2F%2Fwww.joie.com%2Fmarlo-top-mink', 3, 'Joie', 37453, 11381, 1, '2014-02-17 05:28:17', '2014-02-17 05:28:17'),
(57, ' Purine Top ', ' short="A wear anywhere top, our Purine cheetah print silk blouse features a concealed button placket, split v-neck, bracelet sleeve cuffs and a rounded hem." long=""', NULL, 'http://www.joie.com/media/catalog/product/m/_/m_j16724179_caviar_front-cropped.png', 1, NULL, NULL, 'J167-24179_CAVIAR', 238, NULL, 238, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=252245.10987&type=15&murl=https%3A%2F%2Fjoie.affiliatetechnology.com%2Fredirect.php%3Fnt_id%3D2%26url%3Dhttp%3A%2F%2Fwww.joie.com%2Fpurine-top-caviar', 4, 'Joie', 37453, 10987, 1, '2014-02-17 05:28:48', '2014-02-17 05:28:48'),
(59, ' Dimante Top ', ' short="J&#039;adore. The mini heart printed pattern on this matte silk short sleeve blouse is true love." long=""', NULL, 'http://www.joie.com/media/catalog/product/m/_/m_4088t1207_mink_front-cropped.png', 1, NULL, NULL, '4088-T1207_MINK', 188, NULL, 188, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=252245.11396&type=15&murl=https%3A%2F%2Fjoie.affiliatetechnology.com%2Fredirect.php%3Fnt_id%3D2%26url%3Dhttp%3A%2F%2Fwww.joie.com%2Fdimante-top-mink', 5, 'Joie', 37453, 11396, 1, '2014-02-17 05:29:22', '2014-02-17 05:29:22'),
(94, '2-Ply Cotton Traditional Straight Collar Dress Shirt', '2-Ply Cotton Traditional Straight Collar Dress Shirt', NULL, 'http://s7d5.scene7.com/is/image/PaulFredrick/142_B?$category$', 0, '', '', '142', 69.5, 69.5, NULL, NULL, '', 'USD', 'http://www.anrdoezrs.net/click-7352624-11443471?url=http%3A%2F%2Fwww.paulfredrick.com%2FCatalog%2FPFProductDetails.aspx%3FCategory%3DDressshirts%26ProductId%3D142&cjsku=142', 4, 'Paul Fredrick', 4027838, NULL, 0, '2014-02-19 21:50:43', '2014-02-19 21:50:43'),
(65, ' Gildan Adult ', ' short="Gildan Adult Ultra Cotton&amp;#153 T-Shirt Nobody knows t-shirts likeGildan, and this classic Ultra Cotton style is a great choice for teams, giveaways, marathons or anyOne Size&#039;s T-shirt drawer. Coordinate: Youth B, Ladies&#039; L, Toddler P, Tall T preshrunk 100% cotton jersey (blended cotton/polyester in antique heather and safety colors) 6-oz. seamless double-needle 7/8&quot; collar taped neck and shoulders double-needle sleeve and bottom hems quarter-turned to eliminate center crease Ladies&#039; coord. L Sizes: S-5XL2000 GD Tee Blue Dusk L" long="Gildan Adult T-Shirt Blue Dusk L"', NULL, 'http://www.dollardays.com/images/b93/2000_45_md.jpg', 1, NULL, NULL, '2502481', 9, NULL, 6.52, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=227643.2502481&type=15&murl=http%3A%2F%2Fwww.dollardays.com%2Fi2502481-wholesale-gildan-adult-t-shirt-blue-dusk-l.html%3Fpf%3Dlinkshare', 5, 'wowmyuniverse.com', 36228, 2502481, NULL, '2014-02-17 05:43:19', '2014-02-17 05:50:27'),
(69, ' T-Shirt', ' short="Gildan Adult Ultra Cotton&amp;#153 T-Shirt Nobody knows t-shirts likeGildan, and this classic Ultra Cotton style is a great choice for teams, giveaways, marathons or anyOne Size&#039;s T-shirt drawer. Coordinate: Youth B, Ladies&#039; L, Toddler P, Tall T preshrunk 100% cotton jersey (blended cotton/polyester in antique heather and safety colors) 6-oz. seamless double-needle 7/8&quot; collar taped neck and shoulders double-needle sleeve and bottom hems quarter-turned to eliminate center crease Ladies&#039; coord. L Sizes: S-5XL2000 GD Tee Orange S" long="Gildan Adult T-Shirt Orange S"', NULL, 'http://www.dollardays.com/images/b93/2000_38_md.jpg', 1, NULL, NULL, '2502423', 9, NULL, 6.52, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=227643.2502423&type=15&murl=http%3A%2F%2Fwww.dollardays.com%2Fi2502423-wholesale-gildan-adult-t-shirt-orange-s.html%3Fpf%3Dlinkshare', 5, 'wowmyuniverse.com', 36228, 2502423, NULL, '2014-02-17 05:43:50', '2014-02-17 05:51:12'),
(71, 'Tee Grey ', ' short="Bella+Canvas Men&#039;s Tri-blend Tee The perfect blend of three fabrics makes for a fashionably-soft feel that will make this a favorite of every man that owns it. 40-single jersey 50% polyester/25% combed and ring-spun cotton/25% rayon 3.4-oz. Sizes: S-2XL3413 CV TriBlnd T GryTriXL" long="Bella+Canvas Men&#039;s Tri-blend Tee Grey Triblend XL"', NULL, 'http://www.dollardays.com/images/b93/3413_51_md.jpg', 1, NULL, NULL, '2509627', 16.74, NULL, 11.47, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=227643.2509627&type=15&murl=http%3A%2F%2Fwww.dollardays.com%2Fi2509627-wholesale-bella-canvas-mens-tri-blend-tee-grey-triblend-xl.html%3Fpf%3Dlinkshare', 5, 'wowmyuniverse.com', 36228, 2509627, NULL, '2014-02-17 05:44:21', '2014-02-17 05:50:12'),
(73, ' 360 Sweater', ' short="Look incredible with clothing by 360 Sweater." long="Look incredible with clothing by 360 Sweater."', NULL, 'http://www.smartbargains.com/images/S/360AA-16102EXCLU-WHITE.jpg', 1, NULL, NULL, '16102EXCLU-WHITE-P', 124.99, NULL, 124.99, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=317760.136441&type=15&murl=http%3A%2F%2Fwww.smartbargains.com%2Fdetail.asp%3Fbo_products_variance_id%3D136441%26utm_source%3DLinkShare', 2, 'SmartBargains.com', 37461, 136441, NULL, '2014-02-17 05:44:58', '2014-02-17 05:50:48'),
(77, ' Men''s Black ', ' short="Stay in style with shirts by Enrico Coveri." long="Stay in style with shirts by Enrico Coveri."', NULL, 'http://www.smartbargains.com/images/S/ECOVERIAA-MTP-ELASTIC-BLK.jpg', 1, NULL, NULL, 'MTP-ELASTIC-BLK-XXL', 21.99, NULL, 21.99, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=317760.136573&type=15&murl=http%3A%2F%2Fwww.smartbargains.com%2Fdetail.asp%3Fbo_products_variance_id%3D136573%26utm_source%3DLinkShare', 2, 'SmartBargains.com', 37461, 136573, NULL, '2014-02-17 05:46:04', '2014-02-17 05:49:51'),
(79, 'Fit Shirt ', ' short="Slim fit woven shirt from ONE90ONE. Lighweight and Comfortable. Contrast Print Inside Cuffs and Collar. Square Buttons" long="Slim fit woven shirt from ONE90ONE. Lighweight and Comfortable. Contrast Print Inside Cuffs and Collar. Square Buttons"', NULL, 'http://www.smartbargains.com/images/S/191AA-MTP-GR200.jpg', 1, NULL, NULL, 'GR200', 38.99, NULL, 38.99, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=317760.145573&type=15&murl=http%3A%2F%2Fwww.smartbargains.com%2Fdetail.asp%3Fbo_products_variance_id%3D145573%26utm_source%3DLinkShare', 2, 'SmartBargains.com', 37461, 145573, NULL, '2014-02-17 05:46:23', '2014-02-17 05:51:32'),
(81, ' Alberta', ' short="Look incredibly gorgeous in pieces by Alberta Ferretti. PLEASE BE AWARE THAT THIS ITEM IS NOT PRE-OWNED, BUT IT IS SUBJECT TO MINOR SCUFFS, SCRATCHES AND CREASES THAT MAY NOT BE SHOWN IN THE PICTURE. RETURNS FOR THESE ITEMS ARE ACCEPTED FOR STORE CREDIT O" long="Look incredibly gorgeous in pieces by Alberta Ferretti. PLEASE BE AWARE THAT THIS ITEM IS NOT PRE-OWNED, BUT IT IS SUBJECT TO MINOR SCUFFS, SCRATCHES AND CREASES THAT MAY NOT BE SHOWN IN THE PICTURE. RETURNS FOR THESE ITEMS ARE ACCEPTED FOR STORE CREDIT O"', NULL, 'http://www.smartbargains.com/images/S/WTP-A12040-WH.jpg', 1, NULL, NULL, 'WTP-A12040-WH42', 94.5, NULL, 94.5, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=317760.135341&type=15&murl=http%3A%2F%2Fwww.smartbargains.com%2Fdetail.asp%3Fbo_products_variance_id%3D135341%26utm_source%3DLinkShare', 2, 'SmartBargains.com', 37461, 135341, NULL, '2014-02-17 05:47:23', '2014-02-17 05:51:48'),
(93, 'Pet Tech   Dog T-Shirt by CafePress', 'Let your pet show how much you care  Dog T-Shirt   Tee, TShirt, Shirt Put your pooch in his own cool doggie t-shirt from American Apparel. Hersquo;ll be the envy of all the pups in the park. Let him wear a doggie-cool design so he can express what hersquo;d like to bark out loud. Do it up in doggie style Made of', NULL, 'http://images.cafepress.com/product/12001545_480x480_f.jpg', 0, '', '', '12001545', 15, 15, 15, NULL, '12001545', 'GBP', 'http://www.dpbolvw.net/click-7352624-10798686?url=http%3A%2F%2Fwww.cafepress.co.uk%2F%2Bpet_tech_dog_tshirt%2C12001545&cjsku=12001545', 2, 'Cafepress UK', 3049768, NULL, 0, '2014-02-19 02:45:34', '2014-02-19 02:45:34'),
(95, ' S.T. Dupont Black Textured Leather Business Card Holder (2 CC/Large Business Card Pocket) ', 'Drawing inspiration from its beginnings S.T.Dupont rediscovers its roots in producing top-quality leather goods.Calfskin full-grain lambskin and buffalo hide - natural supple skins that gain in beauty over time - are chosen exclusively in France Italy and Spain and must meet the quality standards required for traditional production.Several operations including cutting stitching and assembling are performed manually in accordance with long-established criteria. Quality control tests are systemati', NULL, 'http://www.smartbargains.com/images/H/STDUPONTW-074102.JPG', 1, NULL, '3597390067937', 'STDUPONTW-074102', 270, NULL, 110, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=317760.140998&type=15&murl=http%3A%2F%2Fwww.smartbargains.com%2Fdetail.asp%3Fiq%3D1%26bo_products_variance_id%3D140998%26RID%3D%5BENGINENAME%5D%26utm_medium%3DCSE%26utm_source%3D%5BENGINENAME%5D', 2, 'SmartBargains.com', 37461, 140998, 1, '2014-02-26 11:48:21', '2014-02-26 11:48:21'),
(96, ' Mundi Women''s Croc Print Checkbook Clutch Wallet ', 'Hit the town in style while you stay organized with this Mundi croc print clutch wallet. This stylish clutch features multiple credit card slots six ID windows and a convenient checkbook holder to keep your most important stuff ready to go.', NULL, 'http://www.smartbargains.com/images/H/MUNDI-L30475-IVY.jpg', 1, NULL, '870191091923', 'MUNDI-L30475-IVY', 54.99, NULL, 34.99, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=317760.172830&type=15&murl=http%3A%2F%2Fwww.smartbargains.com%2Fdetail.asp%3Fiq%3D1%26bo_products_variance_id%3D172830%26RID%3D%5BENGINENAME%5D%26utm_medium%3DCSE%26utm_source%3D%5BENGINENAME%5D', 2, 'SmartBargains.com', 37461, 172830, 1, '2014-02-26 11:48:32', '2014-02-26 11:48:32'),
(97, ' Picnic Time Picnic Table ', 'Picnic Time''s portable Picnic Table is a compact fold-out table with bench seats for four that you can take anywhere. The legs and seats fold into the table when collapsed so the item is easy to store and transport. It has a maximum weight capacity of 250 lbs. per seat and 20 lbs. for the table. The seats are molded polypropylene with a basket weave pattern in the same color as the ABS plastic table top. The frame is aluminum alloy for durability. The Picnic Table is ideal for outdoor or indoor', NULL, 'http://www.smartbargains.com/images/H/PICNICTIME-811-00-139-000-0.JPG', 1, NULL, '099967082006', 'PICNICTIME-811-00-139-000', 160.99, NULL, 102.99, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=317760.183498&type=15&murl=http%3A%2F%2Fwww.smartbargains.com%2Fdetail.asp%3Fiq%3D1%26bo_products_variance_id%3D183498%26RID%3D%5BENGINENAME%5D%26utm_medium%3DCSE%26utm_source%3D%5BENGINENAME%5D', 2, 'SmartBargains.com', 37461, 183498, 1, '2014-02-26 11:48:38', '2014-02-26 11:48:38'),
(98, ' LCM HOME FASHIONS White Waterproof Mattress Pad ', 'Keep spills and other accidents at bay with this microfiber waterproof mattress pad. Made with a polyurethane coating it features a brushed top that dries quickly and fits mattresses up to 19 inches deep. It is machine washable for your convenience..', NULL, 'http://www.smartbargains.com/images/H/LCMHOME-L061.JPG', 1, NULL, '837304008582', 'LCMHOME-L061', 44.99, NULL, 33.99, NULL, NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=317760.181237&type=15&murl=http%3A%2F%2Fwww.smartbargains.com%2Fdetail.asp%3Fiq%3D1%26bo_products_variance_id%3D181237%26RID%3D%5BENGINENAME%5D%26utm_medium%3DCSE%26utm_source%3D%5BENGINENAME%5D', 2, 'SmartBargains.com', 37461, 181237, 1, '2014-02-26 11:48:46', '2014-02-26 11:48:46'),
(99, 'Alo Activewear Circle Top', 'Alo Activewear Circle Top', NULL, 'http://media.activewearusa.com/store/pc/catalog/W1177R_10054_1_general.jpg', 0, '', '', 'ALO-W1177R', 42, 42, NULL, 'Alo', '', 'USD', 'http://www.anrdoezrs.net/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FAlo-Activewear-Circle-Top-p131225.htm&cjsku=ALO-W1177R', 4, 'ActivewearUSA.com', 3698863, NULL, 0, '2014-03-03 09:13:00', '2014-03-03 09:13:00'),
(100, 'Margarita Activewear Top #928A', 'Look smart and sassy, in this soft-feel workout top. Made from Supplex/Lycra high performance fabric, this top features a cross-over back with keyhole detail and a flattering scoop neck. Perfect for all kinds of fitness activities, this top is a versatile addition to any woman''s workout wardrobe.', NULL, 'http://media.activewearusa.com/store/pc/catalog/928a_1289_general.jpg', 0, '', '', 'MA-TOP-928A', 64, 64, NULL, 'Margarita Activewear', '', 'USD', 'http://www.tkqlhce.com/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FMargarita-Activewear-Top-928A-p2373.htm&cjsku=MA-TOP-928A', 4, 'ActivewearUSA.com', 3698863, NULL, 0, '2014-03-03 09:13:04', '2014-03-03 09:13:04'),
(101, 'Patagonia W''s Hotline Top', 'Patagonia W''s Hotline Top', NULL, 'http://media.activewearusa.com/store/pc/catalog/PAT-20923_425_general.jpg', 0, '', '', 'PAT-20923', 49, 49, NULL, 'Patagonia', '', 'USD', 'http://www.kqzyfj.com/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FPatagonia-W-s-Hotline-Top-p97754.htm&cjsku=PAT-20923', 4, 'ActivewearUSA.com', 3698863, NULL, 0, '2014-03-03 09:13:08', '2014-03-03 09:13:08'),
(102, 'Prana Becca Convertible Top', 'Prana Becca Convertible Top', NULL, 'http://media.activewearusa.com/store/pc/catalog/PRN-W1BECC113_BLACKMAYAN_general.jpg', 0, '', '', 'PRN-W1BECC113', 60, 60, NULL, 'prAna', '', 'USD', 'http://www.anrdoezrs.net/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FPrana-Becca-Convertible-Top-p94620.htm&cjsku=PRN-W1BECC113', 4, 'ActivewearUSA.com', 3698863, NULL, 0, '2014-03-03 09:13:15', '2014-03-03 09:13:15'),
(103, 'Prana Gabrielle Top', 'Prana Gabrielle Top', NULL, 'http://media.activewearusa.com/store/pc/catalog/PRN-W1GABR113_SUMMERPLUM_general.jpg', 0, '', '', 'PRN-W1GABR113', 69, 69, NULL, 'prAna', '', 'USD', 'http://www.dpbolvw.net/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FPrana-Gabrielle-Top-p93510.htm&cjsku=PRN-W1GABR113', 4, 'ActivewearUSA.com', 3698863, NULL, 0, '2014-03-03 09:13:18', '2014-03-03 09:13:18'),
(104, 'Prana Sabin Chakara Top', 'With a wide racerback and shirred detailing on the bodice the Sabin Chakara Top is the epitome of classic sport-chic. High-performance Chakara fabric with moisture-wicking properties ensures you''ll stay comfortable right through your workout, while the internal shelf bra supports and flatters your bust.', NULL, 'http://media.activewearusa.com/store/pc/catalog/PRN-W1SACH112_BLACK_general.jpg', 0, '', '', 'PRN-W1SACH112', 60, 60, NULL, 'prAna', '', 'USD', 'http://www.tkqlhce.com/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FPrana-Sabin-Chakara-Top-p45864.htm&cjsku=PRN-W1SACH112', 4, 'ActivewearUSA.com', 3698863, NULL, 0, '2014-03-03 09:13:22', '2014-03-03 09:13:22'),
(105, 'UpVibe Bahia Top', 'UpVibe Bahia Top', NULL, 'http://media.activewearusa.com/store/pc/catalog/UpVibe-Bahia-Top-Red-general.jpg', 0, '', '', 'UPV-JUV39TP', 49, 49, NULL, 'UpVibe', '', 'USD', 'http://www.kqzyfj.com/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FUpVibe-Bahia-Top-p115784.htm&cjsku=UPV-JUV39TP', 4, 'ActivewearUSA.com', 3698863, NULL, 0, '2014-03-03 09:13:25', '2014-03-03 09:13:25'),
(106, 'Prana Pixie Flower Beanie', 'Prana Pixie Flower Beanie', NULL, 'http://media.activewearusa.com/store/pc/catalog/PRN-U5PIXI312_ESPRESSO_general.jpg', 0, '', '', 'PRN-U5PIXI312', 28, 28, NULL, 'prAna', '', 'USD', 'http://www.dpbolvw.net/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FPrana-Pixie-Flower-Beanie-p75163.htm&cjsku=PRN-U5PIXI312', 8, 'ActivewearUSA.com', 3698863, NULL, 0, '2014-03-03 09:18:12', '2014-03-03 09:18:12'),
(107, 'Patagonia W''s L/S Chambray Shirt', 'Patagonia W''s L/S Chambray Shirt', NULL, 'http://media.activewearusa.com/store/pc/catalog/PAT-53920_663_general.jpg', 0, '', '', 'PAT-53920', 79, 79, NULL, 'Patagonia', '', 'USD', 'http://www.tkqlhce.com/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FPatagonia-W-s-L-S-Chambray-Shi-p120934.htm&cjsku=PAT-53920', 6, 'ActivewearUSA.com', 3698863, NULL, 0, '2014-03-03 09:18:39', '2014-03-03 09:18:39'),
(108, 'AZIAM Devi Tee', 'Our light-weight, raglan sleeved scoop Tee shirt is the ultimate in comfort and style.', NULL, 'http://media.activewearusa.com/store/pc/catalog/AZIAM-Devi-Tee-general.jpg', 0, '', '', 'AZI-TOP-SST02', 48, 48, NULL, 'azIam', '', 'USD', 'http://www.anrdoezrs.net/click-7352624-11061455?url=http%3A%2F%2Fwww.activewearusa.com%2Fstore%2Fpc%2FAZIAM-Devi-Tee-p35056.htm&cjsku=AZI-TOP-SST02', 6, 'ActivewearUSA.com', 3698863, NULL, 0, '2014-03-03 09:18:49', '2014-03-03 09:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(11) DEFAULT NULL,
  `username` varchar(250) NOT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '0',
  `likes` int(10) NOT NULL DEFAULT '0',
  `name` varchar(250) NOT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `dob` varchar(20) NOT NULL,
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
  `token` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_id`, `username`, `nickname`, `password`, `role`, `likes`, `name`, `middle_name`, `last_name`, `dob`, `address`, `address1`, `state`, `city`, `zip`, `country`, `gender`, `status`, `image`, `ss_number`, `bankname`, `bankaccount_no`, `bankrouting_no`, `token`, `created`, `modified`) VALUES
(3, 'ES000003', 'admin', NULL, '9a5d716a6be58acec023d33587e170ed09edb191', 1, 0, 'xyz', NULL, NULL, '', 'Delhi', NULL, 'Delhi', 'Delhi', '110099', 'IN', '0', 0, '53045c14-de64-44fb-aa50-24254293f485.jpg', '4525566', 'SBI', '2373273288', '8283283', NULL, '2014-02-19 00:12:14', '2014-02-19 00:24:04'),
(10, 'ES000010', 'sbdh.singh@gmail.com', 'subodh', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'kumar', 'singh', 'Testing', '1-11-1983', '', NULL, 'Delhii', 'Delhi', '', 'ID', '0', 1, NULL, 'sss', 'ssss', 'ssss', '33443343', '9fcedf7f4a9ff351307aebd15cb42aa191298561', '2014-04-01 05:41:10', '2014-04-01 05:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `widthdraws`
--

CREATE TABLE IF NOT EXISTS `widthdraws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `widthdraw_request_amount` varchar(50) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `request_date` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `widthdraws`
--

INSERT INTO `widthdraws` (`id`, `user_id`, `widthdraw_request_amount`, `currency`, `request_date`, `status`) VALUES
(5, 10, '1', '', '2014-03-31 22:59:35', 0),
(6, 10, '1', '', '2014-03-31 22:59:47', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `type`) VALUES
(20, 7, 65, 0),
(19, 7, 2, 1),
(21, 20, 105, 0),
(22, 10, 11, 1),
(23, 10, 11, 1),
(24, 10, 11, 1),
(25, 10, 11, 1),
(26, 10, 11, 1),
(27, 10, 23, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
