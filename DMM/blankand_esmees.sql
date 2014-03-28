-- phpMyAdmin SQL Dump
-- version 4.1.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2014 at 12:22 AM
-- Server version: 5.5.36-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blankand_esmees`
--

-- --------------------------------------------------------

--
-- Table structure for table `advs`
--

DROP TABLE IF EXISTS `advs`;
CREATE TABLE IF NOT EXISTS `advs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `adv_id` int(25) NOT NULL,
  `adv_name` varchar(500) NOT NULL,
  `afflitate_type` varchar(2) NOT NULL,
  `vested_period` varchar(20) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `advs`
--

INSERT INTO `advs` (`id`, `adv_id`, `adv_name`, `afflitate_type`, `vested_period`, `url`, `created`) VALUES
(1, 38010, 'SheInside', 'LS', '10 ', NULL, '2014-03-18 23:48:48'),
(2, 3485540, '2xist', 'CJ', '10', 'http://www.2xist.com', '2014-03-22 04:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `section` int(1) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `buy_url` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `lft`, `rght`, `name`) VALUES
(1, NULL, 1, 12, 'All Products'),
(2, 1, 2, 5, 'Men'),
(3, 1, 6, 11, 'Women'),
(4, 2, 3, 4, 'Tops'),
(5, 3, 7, 8, 'Tops'),
(6, 3, 9, 10, 'Dresses');

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

DROP TABLE IF EXISTS `commissions`;
CREATE TABLE IF NOT EXISTS `commissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adversiter_id` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `program_type` varchar(20) NOT NULL,
  `total_commission_earned` float NOT NULL,
  `total_Amount_vested` float NOT NULL,
  `vested_period` varchar(50) NOT NULL,
  `v_date` varchar(20) NOT NULL,
  `transaction_date` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `remarks` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

DROP TABLE IF EXISTS `followers`;
CREATE TABLE IF NOT EXISTS `followers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `follow_id` int(10) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=241 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `member_id`, `adv_id`, `merchant_name`, `order_id`, `transaction_date`, `transaction_time`, `sku_number`, `sales`, `quantity`, `commissions`, `process_date`, `process_time`, `status`) VALUES
(238, 'ESMADMIN-ES000010', '38010', 'SheInside', '1006396', '2014-03-01', '17:48:00', 'dress140311102', '24.80', 1, '2.48', '0000-00-00', '17:49:00', 1),
(239, 'ESMADMIN-ES000010', '38010', 'SheInside', '1006396', '2014-03-01', '17:48:00', 'dress140311103', '24.80', 1, '2.48', '0000-00-00', '17:49:00', 1),
(240, 'GUEST-GUEST', '36342', 'Buy.com (dba Rakuten.com Shopping)', '73591475', '2014-03-10', '03:18:00', '259086554', '33.99', 1, '0.34', '0000-00-00', '17:15:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `looks`
--

DROP TABLE IF EXISTS `looks`;
CREATE TABLE IF NOT EXISTS `looks` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `caption_name` varchar(200) NOT NULL,
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `brand` varchar(200) DEFAULT NULL,
  `likes` int(10) NOT NULL DEFAULT '0',
  `cover` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL DEFAULT '0',
  `order_id` int(10) DEFAULT NULL,
  `product_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `product_id`, `user_id`, `order_date`) VALUES
(3, 3, 45, 17, '2014-03-13 00:00:00'),
(2, 2, 44, 17, '2014-03-05 00:00:00'),
(1, 1, 43, 17, '2014-03-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `slug`, `status`) VALUES
(1, 'dcasdadas', '<p>sjfhfjsfjsdkfsdjfsdl</p>', 'dcasdadas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `generate_date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descrition`, `short_descrition`, `image_url`, `in_stock`, `isbn`, `upc`, `sku`, `price`, `retail_price`, `sale_price`, `mnf_name`, `mnf_sku`, `currency`, `buy_url`, `parent_id`, `advetiser_name`, `advertiser_id`, `ad_id`, `type`, `created`, `modified`) VALUES
(1, ' Grey Long Sleeve Diamond Patterned Drawstring Dress ', 'Grey diamond patterned drawstring dress with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385108102053416487.jpg', 1, NULL, '', 'dress131122004', 32.64, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10117&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FGrey-Long-Sleeve-Diamond-Patterned-Drawstring-Dress-p-153027-cat-1727.html', 6, 'SheInside', 38010, 10117, 1, '2014-03-18 23:49:39', '2014-03-18 23:49:39'),
(2, ' White Long Sleeve Metal Beading Neckline Retro Print Dress ', 'White metal beading neckline retro print dress with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1384327042454354467.jpg', 1, NULL, '', 'dresz13111303', 31.95, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10155&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FWhite-Long-Sleeve-Metal-Beading-Neckline-Retro-Print-Dress-p-152127-cat-1727.html', 6, 'SheInside', 38010, 10155, 1, '2014-03-18 23:49:44', '2014-03-18 23:49:44'),
(3, ' Black Contrast PU Leather Mickey Print Dress ', 'Black contrast PU leather mickey print dress with long sleeves and round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385789528574265916.jpg', 1, NULL, '', 'dress131106003', 27.35, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10110&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Contrast-PU-Leather-Mickey-Print-Dress-p-150940-cat-1727.html', 6, 'SheInside', 38010, 10110, 1, '2014-03-18 23:49:54', '2014-03-18 23:49:54'),
(4, ' Black Round Neck Cape Chiffon Dress ', 'Black cape chiffon dress with round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201401/1389252122170590274.jpg', 1, NULL, '', 'dress14010915', 34.83, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10169&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Round-Neck-Cape-Chiffon-Dress-p-158611-cat-1727.html', 6, 'SheInside', 38010, 10169, 1, '2014-03-18 23:49:59', '2014-03-18 23:49:59'),
(5, ' Yellow Short Sleeve Backless Bow Mini Dress ', 'Yellow backless bow mini dress with short sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201402/1392884207581507535.jpg', 1, NULL, '', 'dress140210402', 34.3, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10171&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FYellow-Short-Sleeve-Backless-Bow-Dress-p-159778-cat-1727.html', 6, 'SheInside', 38010, 10171, 1, '2014-03-18 23:50:04', '2014-03-18 23:50:04'),
(6, ' Leopard Lapel Long Sleeve Slim Straight Dress ', 'Leopard slim straight dress with lapel and long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385789947566083983.jpg', 1, NULL, '', 'dress13103008', 34.1, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10161&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FLeopard-Lapel-Long-Sleeve-Slim-Straight-Dress-p-150010-cat-1727.html', 6, 'SheInside', 38010, 10161, 1, '2014-03-18 23:50:08', '2014-03-18 23:50:08'),
(7, ' Grey Sleeveless Sequined A Line Sundress ', 'Grey sequined a line sundress without sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1384504226401080071.jpg', 1, NULL, '', 'dress131115102', 27.99, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10167&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FGrey-Sleeveless-Sequined-A-Line-Sundress-p-152233-cat-1727.html', 6, 'SheInside', 38010, 10167, 1, '2014-03-18 23:50:14', '2014-03-18 23:50:14'),
(8, ' Blue Long Sleeve Contrast PU Leather Lace Split Dress ', 'Blue contrast PU leather lace split dress with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385704811991540462.jpg', 1, NULL, '', 'dress131129004', 49.89, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10128&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlue-Long-Sleeve-Contrast-PU-Leather-Lace-Split-Dress-p-153912-cat-1727.html', 6, 'SheInside', 38010, 10128, 1, '2014-03-18 23:50:18', '2014-03-18 23:50:18'),
(9, ' Black Short Sleeve Mesh Peak Collar Skater Dress ', 'Black mesh peak collar skater dress with short sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201309/1379141648873499175.jpg', 1, NULL, '', 'drece13091404', 29.99, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10162&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Short-Sleeve-Mesh-Peak-Collar-Skater-Dress-p-145154-cat-1727.html', 6, 'SheInside', 38010, 10162, 1, '2014-03-18 23:50:23', '2014-03-18 23:50:23'),
(10, ' Black Contrast Lace Long Sleeve Chiffon Dress ', 'Black contrast lace chiffon dress with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201401/1389252123308880476.jpg', 1, NULL, '', 'dress14010917', 34.83, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10168&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Contrast-Lace-Long-Sleeve-Chiffon-Dress-p-158613-cat-1727.html', 6, 'SheInside', 38010, 10168, 1, '2014-03-18 23:50:29', '2014-03-18 23:50:29'),
(11, ' Black Sleeveless Eyelash Lace Contrast Leather Bodycon Dress ', 'Black eyelash lace contrast leather bodycon dress without sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1383639555514755402.jpg', 1, NULL, '', 'dress131105404', 35.02, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10127&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Sleeveless-Eyelash-Lace-Contrast-Leather-Bodycon-Dress-p-150817-cat-1727.html', 6, 'SheInside', 38010, 10127, 1, '2014-03-18 23:50:36', '2014-03-18 23:50:36'),
(12, ' Blue Contrast Hollow Long Sleeve Eyelash Lace Ruffle Dress ', 'Blue contrast hollow long sleeve eyelash lace ruffle dress with round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1384245836937036528.jpg', 1, NULL, '', 'dress131105401', 35.06, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10154&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlue-Contrast-Hollow-Long-Sleeve-Eyelash-Lace-Ruffle-Dress-p-150814-cat-1727.html', 6, 'SheInside', 38010, 10154, 1, '2014-03-18 23:50:44', '2014-03-18 23:50:44'),
(13, ' Green Three Quarter Length Sleeve Gathered Pleats Dress ', 'Green three quarter length sleeves gathered pleats dress with round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201309/1378524349832097104.jpg', 1, NULL, '', 'dress13090705', 24.99, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10165&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FGreen-Three-Quarter-Length-Sleeve-Gathered-Pleats-Dress-p-144759-cat-1727.html', 6, 'SheInside', 38010, 10165, 1, '2014-03-18 23:50:54', '2014-03-18 23:50:54'),
(14, ' Black Long Sleeve Oil Painting Character Print Ruffle Dress ', 'Black long sleeves oil painting character print ruffle dress with round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385790626060186542.jpg', 1, NULL, '', 'dresz13112804', 63.93, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10156&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Long-Sleeve-Oil-Painting-Character-Print-Ruffle-Dress-p-154081-cat-1727.html', 6, 'SheInside', 38010, 10156, 1, '2014-03-18 23:51:00', '2014-03-18 23:51:00'),
(15, ' Green Long Puff Sleeve Plaid Loose Dress ', 'Green long puff sleeves plaid loose dress with round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385444337340039825.jpg', 1, NULL, '', 'dress131126005', 29, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10120&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FGreen-Long-Puff-Sleeve-Plaid-Loose-Dress-p-153401-cat-1727.html', 6, 'SheInside', 38010, 10120, 1, '2014-03-18 23:51:05', '2014-03-18 23:51:05'),
(16, ' Black Sleeveless Sheer Backless Lace Bodycon Dress ', 'Black sheer backless lace bodycon dress without sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201307/1372901934325058848.jpg', 1, NULL, '', 'dress13022103', 18.99, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10166&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Sleeveless-Sheer-Backless-Lace-Bodycon-Dress-p-109566-cat-1727.html', 6, 'SheInside', 38010, 10166, 1, '2014-03-18 23:51:12', '2014-03-18 23:51:12'),
(17, ' Black Long Sleeve Donald Duck Print Sweatshirt ', 'Black donald duck print sweatshirt with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201310/1383027544163263364.jpg', 1, NULL, '', 'sweatshirt131029001', 20.79, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10115&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Long-Sleeve-Donald-Duck-Print-Sweatshirt-p-149779-cat-1773.html', 5, 'SheInside', 38010, 10115, 1, '2014-03-18 23:51:35', '2014-03-18 23:51:35'),
(18, ' Apricot Gradients Long Sleeve Loose Mohair Sweater ', 'Apricot gradients long sleeves loose mohair sweater with round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201312/1386140957135505607.jpg', 1, NULL, '', 'sweater131107003', 31.48, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10145&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FApricot-Gradients-Long-Sleeve-Loose-Mohair-Sweater-p-151142-cat-1734.html', 5, 'SheInside', 38010, 10145, 1, '2014-03-18 23:51:39', '2014-03-18 23:51:39'),
(19, ' Navy Tribal Striped Pattern Draped Front Cardigan ', 'Navy tribal striped pattern draped front cardigan with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201310/1382157100294006939.jpg', 1, NULL, '', 'sweater131019200', 28.14, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10134&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FNavy-Tribal-Striped-Pattern-Draped-Front-Cardigan-p-148590-cat-1734.html', 5, 'SheInside', 38010, 10134, 1, '2014-03-18 23:51:44', '2014-03-18 23:51:44'),
(20, ' White Short Sleeve Rainbow Horse Print T-Shirt ', 'White rainbow horse print t-shirt with short sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201306/1370766612839497003.jpg', 1, NULL, '', 'tshssh13060760911H1', 17.99, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10094&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FWhite-Short-Sleeve-Rainbow-Horse-Print-T-Shirt-p-137960-cat-1738.html', 5, 'SheInside', 38010, 10094, 1, '2014-03-18 23:51:49', '2014-03-18 23:51:49'),
(21, ' Black Long Sleeve Feather Print Long T-Shirt ', 'Black feather print long t-shirt with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201310/1382517638675004726.jpg', 1, NULL, '', 'tees131023018', 22.03, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10131&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Long-Sleeve-Feather-Print-Long-T-Shirt-p-149083-cat-1738.html', 5, 'SheInside', 38010, 10131, 1, '2014-03-18 23:51:54', '2014-03-18 23:51:54'),
(22, ' Green Gradients Lapel Long Sleeve Chiffon Blouse ', 'Green gradients chiffon blouse with lapel and long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201312/1387873520296361431.jpg', 1, NULL, '', 'blouse13122414', 23.57, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10170&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FGreen-Gradients-Lapel-Long-Sleeve-Chiffon-Blouse-p-156861-cat-1733.html', 5, 'SheInside', 38010, 10170, 1, '2014-03-18 23:51:59', '2014-03-18 23:51:59'),
(23, ' Blue Stand Collar Long Sleeve Letters Print Sweatshirt ', 'Blue letters print sweatshirt with stand collar and long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1384328005869185016.jpg', 1, NULL, '', 'sweatshirt131113014', 27.87, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10091&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlue-Stand-Collar-Long-Sleeve-Letters-Print-Sweatshirt-p-151869-cat-1773.html', 5, 'SheInside', 38010, 10091, 1, '2014-03-18 23:52:06', '2014-03-18 23:52:06'),
(24, ' "Black Short Sleeve ""COCO MADE ME DO IT"" Print T-Shirt" ', '"Black ""COCO MADE ME DO IT"" print t-shirt with short sleeves."', NULL, 'http://img.sheinside.com/images/sheinside.com/201306/1370335611681664540.jpg', 1, NULL, '', 'tshssh1305175173L1', 15.99, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10100&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Short-Sleeve-COCO-MADE-ME-DO-IT-Print-T-Shirt-p-135925-cat-1738.html', 5, 'SheInside', 38010, 10100, 1, '2014-03-18 23:52:13', '2014-03-18 23:52:13'),
(25, ' Grey Long Sleeve Building Letters Print Sweatshirt ', 'Grey building letters print sweatshirt with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1384331890379605216.jpg', 1, NULL, '', 'sweatshirt131113007', 30.33, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10124&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FGrey-Long-Sleeve-Building-Letters-Print-Sweatshirt-p-151862-cat-1773.html', 5, 'SheInside', 38010, 10124, 1, '2014-03-18 23:52:19', '2014-03-18 23:52:19'),
(26, ' Purple Long Sleeve Woman Clouds Print Sweatshirt ', 'Purple woman clouds print sweatshirt with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201312/1386579715630570870.jpg', 1, NULL, '', 'sweatshirt131209002', 25.97, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10139&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FPurple-Long-Sleeve-Woman-Clouds-Print-Sweatshirt-p-155109-cat-1773.html', 5, 'SheInside', 38010, 10139, 1, '2014-03-18 23:52:24', '2014-03-18 23:52:24'),
(27, ' Black Contrast PU Leather Lion Print Sweatshirt ', 'Black contrast PU leather lion print sweatshirt witn round neck and long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201312/1386042718984031760.jpg', 1, NULL, '', 'sweatshirt131106012', 27.28, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10138&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Contrast-PU-Leather-Lion-Print-Sweatshirt-p-150982-cat-1773.html', 5, 'SheInside', 38010, 10138, 1, '2014-03-18 23:52:28', '2014-03-18 23:52:28'),
(28, ' Black Long Sleeve Vintage Cashew Print Sweatshirt ', 'Black vintage cashew print sweatshirt with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385018048658161959.jpg', 1, NULL, '', 'sweatshirt131121101', 31.97, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10142&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Long-Sleeve-Vintage-Cashew-Print-Sweatshirt-p-152846-cat-1773.html', 5, 'SheInside', 38010, 10142, 1, '2014-03-18 23:52:32', '2014-03-18 23:52:32'),
(29, ' Purple Long Sleeve Cat Print Loose Sweatshirt ', 'Purple long sleeves cat print loose sweatshirt with long sleeves and cat print.', NULL, 'http://img.sheinside.com/images/sheinside.com/201312/1386640482946545288.jpg', 1, NULL, '', 'sweatshirt131209001', 23.86, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10140&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FPurple-Long-Sleeve-Cat-Print-Loose-Sweatshirt-p-155114-cat-1773.html', 5, 'SheInside', 38010, 10140, 1, '2014-03-18 23:52:36', '2014-03-18 23:52:36'),
(30, ' Grey Long Sleeve Galaxy Print Loose Sweatshirt ', 'Grey galaxy print loose sweatshirt with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201212/1356661477262327851.jpg', 1, NULL, '', 'sweatshirt12110213', 24.9, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10103&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FGrey-Long-Sleeve-Galaxy-Print-Loose-Sweatshirt-p-102821-cat-1773.html', 5, 'SheInside', 38010, 10103, 1, '2014-03-18 23:52:48', '2014-03-18 23:52:48'),
(31, ' Black Round Neck and White Cross Pattern Jumper Sweater ', 'Black round neck and white cross pattern jumper sweater with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201307/1373701277115267249.jpg', 1, NULL, '', 'sweaterssh1585603', 25.6, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10151&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Round-Neck-and-White-Cross-Pattern-Jumper-Sweater-p-103513-cat-1734.html', 5, 'SheInside', 38010, 10151, 1, '2014-03-18 23:52:53', '2014-03-18 23:52:53'),
(32, ' Green Long Sleeve Floral 15 Print Sweatshirt ', 'Green floral 15 print sweatshirt with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1385608175361101423.jpg', 1, NULL, '', 'sweatshirt131128003', 30.82, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10122&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FGreen-Long-Sleeve-Floral-15-Print-Sweatshirt-p-153766-cat-1773.html', 5, 'SheInside', 38010, 10122, 1, '2014-03-18 23:52:58', '2014-03-18 23:52:58'),
(33, ' Purple Long Sleeve Floral OFF DUTY Print Sweatshirt ', 'Purple floral OFF DUTY print sweatshirt with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1384244598430598920.jpg', 1, NULL, '', 'sweatshirt131112010', 30.99, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10121&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FPurple-Long-Sleeve-Floral-OFF-DUTY-Print-Sweatshirt-p-151831-cat-1773.html', 5, 'SheInside', 38010, 10121, 1, '2014-03-18 23:53:05', '2014-03-18 23:53:05'),
(34, ' Black Contrast Shoulder Long Sleeve Cable Knit Sweater ', 'Black contrast shoulder cable knit sweater with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201310/1381043806848073513.jpg', 1, NULL, '', 'sweater131006023', 28.77, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10149&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Contrast-Shoulder-Long-Sleeve-Cable-Knit-Sweater-p-147035-cat-1734.html', 5, 'SheInside', 38010, 10149, 1, '2014-03-18 23:53:10', '2014-03-18 23:53:10'),
(35, ' White Long Sleeve Cartoon Mickey Print Sweatshirt ', 'White long sleeves sweatshirt with cartoon mickey print.', NULL, 'http://img.sheinside.com/images/sheinside.com/201309/1380092140622824103.jpg', 1, NULL, '', 'sweatshirt130924004', 25.79, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10098&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FWhite-Long-Sleeve-Cartoon-Mickey-Print-Sweatshirt-p-146161-cat-1773.html', 5, 'SheInside', 38010, 10098, 1, '2014-03-18 23:53:16', '2014-03-18 23:53:16'),
(36, ' Black Long Sleeve KEEP Print Loose Sweatshirt ', 'Black loose sweatshirt with long sleeves and KEEP print.', NULL, 'http://img.sheinside.com/images/sheinside.com/201311/1383804758964029693.jpg', 1, NULL, '', 'sweatshirt131107011', 22.05, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10116&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Long-Sleeve-KEEP-Print-Loose-Sweatshirt-p-151151-cat-1773.html', 5, 'SheInside', 38010, 10116, 1, '2014-03-18 23:53:25', '2014-03-18 23:53:25'),
(37, ' Pink Long Sleeve Striped Horse Print Crop Sweatshirt ', 'Pink long sleeves crop sweatshirt with striped horse print.', NULL, 'http://img.sheinside.com/images/sheinside.com/201312/1386912699191405173.jpg', 1, NULL, '', 'sweatshirt131213002', 26.56, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10108&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FPink-Long-Sleeve-Striped-Horse-Print-Crop-Sweatshirt-p-155617-cat-1773.html', 5, 'SheInside', 38010, 10108, 1, '2014-03-18 23:53:33', '2014-03-18 23:53:33'),
(38, ' Pink Round Neck and White Cross Pattern Jumper Sweater ', 'Pink round neck and white cross pattern jumper sweater with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201307/1373701397702765510.jpg', 1, NULL, '', 'sweaterssh1585601', 25.9, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10150&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FPink-Round-Neck-and-White-Cross-Pattern-Jumper-Sweater-p-103511-cat-1734.html', 5, 'SheInside', 38010, 10150, 1, '2014-03-18 23:53:47', '2014-03-18 23:53:47'),
(39, ' Black Long Sleeve Vintage Leopard Print Sweatshirt ', 'Black vintage leopard print sweatshirt with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201312/1386657800700498795.jpg', 1, NULL, '', 'sweatshirt131210008', 31.64, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10107&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Long-Sleeve-Vintage-Leopard-Print-Sweatshirt-p-155155-cat-1773.html', 5, 'SheInside', 38010, 10107, 1, '2014-03-18 23:53:51', '2014-03-18 23:53:51'),
(40, ' Black Patched Beading Crystal Shoulder Sweatshirt ', 'Black patched beading crystal shoulder sweatshirt with long sleeves and round neck.', NULL, 'http://img.sheinside.com/images/sheinside.com/201310/1381488376712493735.jpg', 1, NULL, '', 'sweatshirt131011201', 29.59, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10141&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Patched-Beading-Crystal-Shoulder-Sweatshirt-p-147672-cat-1773.html', 5, 'SheInside', 38010, 10141, 1, '2014-03-18 23:53:56', '2014-03-18 23:53:56'),
(41, ' Red Fur Hooded Long Sleeve Drawstring Coat ', 'Red fur hooded drawstring coat with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201210/1350546041338460666.jpg', 1, NULL, '', 'outwear12101819', 31.93, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10179&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FRed-Fur-Hooded-Long-Sleeve-Drawstring-Coat-p-101532-cat-1735.html', 3, 'SheInside', 38010, 10179, 1, '2014-03-20 08:27:03', '2014-03-20 08:27:03'),
(42, ' Apricot Long Sleeve Geometric Pattern Tassel Cardigan ', 'Apricot geometric pattern tassel cardigan with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201309/1380261014508795849.jpg', 1, NULL, '', 'sweater130927013', 29.59, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10146&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FApricot-Long-Sleeve-Geometric-Pattern-Tassel-Cardigan-p-146408-cat-1734.html', 3, 'SheInside', 38010, 10146, 1, '2014-03-20 08:27:09', '2014-03-20 08:27:09'),
(43, ' Beige Long Sleeve Fur Collar Hooded Cap Wool Coat ', 'Beige fur collar hooded cap wool coat with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201401/1390299713691496741.jpg', 1, NULL, '', 'outerwear131030400', 33.19, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10173&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBeige-Long-Sleeve-Fur-Collar-Hooded-Cap-Wool-Coat-p-150122-cat-1735.html', 3, 'SheInside', 38010, 10173, 1, '2014-03-20 08:27:14', '2014-03-20 08:27:14'),
(44, ' Black Zipper Embellished Faux Leather Biker Jacket ', 'Black embellished faux leather biker jacket with zipper.', NULL, 'http://img.sheinside.com/images/sheinside.com/201310/1380963374626514366.jpg', 1, NULL, '', 'jacket13100503', 40.13, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10130&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlack-Zipper-Embellished-Faux-Leather-Biker-Jacket-p-146955-cat-1776.html', 3, 'SheInside', 38010, 10130, 1, '2014-03-20 08:27:20', '2014-03-20 08:27:20'),
(45, ' Blue Hooded Long Sleeve Drawstring Denim Outerwear ', 'Blue hooded drawstring denim outerwear with long sleeves.', NULL, 'http://img.sheinside.com/images/sheinside.com/201307/1374826310025523246.jpg', 1, NULL, '', 'outshe1307265962', 33.97, NULL, NULL, 'SheInside', NULL, NULL, 'http://click.linksynergy.com/link?id=ric4naJVaQQ&offerid=291406.10180&type=15&murl=http%3A%2F%2Fwww.sheinside.com%2FBlue-Hooded-Long-Sleeve-Drawstring-Denim-Outerwear-p-141509-cat-1735.html', 2, 'SheInside', 38010, 10180, 1, '2014-03-20 08:29:24', '2014-03-20 08:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_id`, `username`, `password`, `role`, `likes`, `nickname`, `name`, `middle_name`, `last_name`, `dob`, `address`, `address1`, `state`, `city`, `zip`, `country`, `gender`, `status`, `image`, `ss_number`, `bankname`, `bankaccount_no`, `bankrouting_no`, `token`, `created`, `modified`) VALUES
(1, 'ES000001', 'admin@esmees.com', '9a5d716a6be58acec023d33587e170ed09edb191', 1, 0, 'Admin', 'Admin', NULL, NULL, NULL, 'NYC', NULL, 'NYC', 'NYC', '12345', 'US', '0', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2014-03-18 00:00:00', '2014-03-26 11:40:20'),
(2, 'ES000002', 'ashish1bhagat@gmail.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'Ashu', 'Ashish', 'K', 'Bhagat', NULL, 'test addr', 'c', 'Delhi', 'Delhi', '123456', 'IN', '0', 1, '5329636a-acb0-48e5-8028-05c04293f485.jpg', 'c', 'c', 'c', 'c', '24c83df685a634445e67a6921c70c43e37128642', '2014-03-18 01:10:12', '2014-03-19 03:29:14'),
(9, 'ES000009', 'smsarreal@gmail.com', 'fb1812322db534584b3dc4d90c08ab756558c436', 0, 0, 'SeanNYC', 'Sean', 'M.', 'Sarreal', NULL, '67-03 166 st.', '1st Flr', 'NY', 'Fresh Meadows', '11366', 'US', '0', 1, '532936e6-a940-4e67-b308-366f4293f485.jpg', 'na', 'na', 'na', 'na', 'c7237d3884b504dc47a7a7297ceb9a1aa4a9023b', '2014-03-19 00:03:09', '2014-03-19 00:22:10'),
(10, 'ES000010', 'sbdh.singh@gmail.com', '9f62e083864d57e3504e4d673f935055e5b82de6', 0, 0, 'Demo Testing', 'Nina ', 'E ', 'Sarreal ', NULL, '914 82nd Street ', '2nd Floor ', 'NJ ', 'North Bergen ', '07047', 'US', '1', 1, '5329c4ba-91dc-4467-9986-120c4293f485.jpg', '142983906', 'Chase ', '021000021', '765160122', 'a77bb4be71952f11c064c0ac4c3ab64c82d63f21', '2014-03-19 09:44:43', '2014-03-27 11:23:29'),
(15, 'ES000015', 'shivam5105@gmail.com', '9fe896189c58ac7fcbed4dc9344203d2a5ee34d1', 0, 0, 'shivam', 'Shivam', 'shivam', 'shivam', NULL, 'Delhi', 'Delhi', 'Delhi', 'Delhi', '110099', 'IN', '', 1, NULL, '', '', '', '', '6ce3d8429a99c06d2853173b2849670eba4d334b', '2014-03-20 09:01:20', '2014-03-26 11:40:43'),
(14, 'ES000014', 'sbdh1.singh@gmail.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'subodh', 'Testing', 'Kumar', 'Singh', NULL, 'Delhi', 'Delhi', 'Delhi', 'Delhi', '110099', 'IN', '', 1, NULL, '372373827', '843848438', '343488889', '4343434', 'a91ae1abd1ad37f11920138f5bc96c976a39d4e5', '2014-03-20 08:54:23', '2014-03-20 08:54:23'),
(16, 'ES000016', 'sbdh.singh@gmail.com', '62534f78b4ed2680abe854ecaa9661fe00cb3e5d', 0, 0, 'subodh', 'subodh', 'kumar', 'singh', '1-11-1982', '', NULL, '', 'Delhi', '', 'IN', '0', 1, NULL, NULL, NULL, NULL, NULL, 'c8496ef34cf5566bd2060be6a3cc961826adaece', '2014-03-21 23:32:09', '2014-03-27 02:02:47'),
(17, 'ES000017', 'Subodh@blankandco.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 0, 'subodh singh', 'subodh', '', 'singh', '1-11-1983', '', NULL, 'Delhi', 'Delhi', '', 'IN', '0', 1, NULL, NULL, NULL, NULL, NULL, '83925c92db861d7a4d8f47d71ab57a04e3047b66', '2014-03-27 06:53:24', '2014-03-27 06:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `widthdraws`
--

DROP TABLE IF EXISTS `widthdraws`;
CREATE TABLE IF NOT EXISTS `widthdraws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `widthdraw_request_amount` varchar(50) NOT NULL,
  `request_date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `widthdraws`
--

INSERT INTO `widthdraws` (`id`, `user_id`, `widthdraw_request_amount`, `request_date`, `status`) VALUES
(1, 10, '1', '2014-03-27 00:00:00', 0),
(3, 10, '1', NULL, 0),
(4, 10, '1', NULL, 0),
(5, 10, '12', NULL, 0),
(6, 10, '2', NULL, 0),
(7, 10, '2', NULL, 0),
(8, 10, '', NULL, 0),
(9, 10, '12', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `type`) VALUES
(2, 9, 37, 0),
(3, 9, 36, 0),
(14, 10, 40, 0),
(7, 9, 31, 0),
(15, 11, 38, 0),
(16, 13, 35, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
