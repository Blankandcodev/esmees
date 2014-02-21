-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2014 at 04:11 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cackedb`
--
CREATE DATABASE IF NOT EXISTS `cackedb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cackedb`;

-- --------------------------------------------------------

--
-- Table structure for table `advertisers`
--

CREATE TABLE IF NOT EXISTS `advertisers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `adv_id` int(25) NOT NULL,
  `adv_name` varchar(500) NOT NULL,
  `afflitate_type` int(1) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `advertisers`
--

INSERT INTO `advertisers` (`id`, `adv_id`, `adv_name`, `afflitate_type`, `created`) VALUES
(1, 0, '', 0, '2014-01-17 09:44:08'),
(2, 0, '', 0, '2014-01-17 09:47:49'),
(3, 0, '', 0, '2014-01-17 09:48:29'),
(4, 0, '', 0, '2014-01-17 09:49:35'),
(5, 0, '', 0, '2014-01-17 09:51:02'),
(6, 0, '', 0, '2014-01-17 09:52:43'),
(7, 234242, 'fsdfsfsfs', 0, '2014-01-17 09:54:16'),
(8, 1001, 'raja kumar', 1, '2014-01-17 10:09:19'),
(9, 84748347, 'yyreurert', 0, '2014-01-17 10:09:56'),
(10, 0, '123456', 0, '2014-01-17 12:44:09'),
(11, 1100, 'raja', 1, '2014-01-17 12:45:57'),
(12, 0, 'fhfghff', 1, '2014-01-17 17:34:26'),
(13, 0, 'fhfghff', 1, '2014-01-17 17:35:38'),
(14, 900000000, 'tata', 1, '2014-01-17 17:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `advs`
--

CREATE TABLE IF NOT EXISTS `advs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `adv_id` int(25) NOT NULL,
  `adv_name` varchar(500) NOT NULL,
  `afflitate_type` int(1) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `advs`
--

INSERT INTO `advs` (`id`, `adv_id`, `adv_name`, `afflitate_type`, `created`) VALUES
(1, 10001, 'subodh', 1, '2014-01-09 00:00:00'),
(6, 10091, 'subodh', 0, '2014-01-17 21:25:20'),
(9, 102938, 'subodh', 1, '2014-01-18 00:55:49');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `lft`, `rght`, `name`) VALUES
(1, NULL, 1, 8, 'Categories'),
(2, 1, 2, 5, 'Men'),
(3, 1, 6, 7, 'Women'),
(4, 2, 3, 4, 'Shirts');

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
  `category_id` int(10) DEFAULT NULL,
  `advetiser_name` varchar(100) DEFAULT NULL,
  `advertiser_id` int(25) DEFAULT NULL,
  `ad_id` int(25) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descrition`, `short_descrition`, `image_url`, `in_stock`, `isbn`, `upc`, `sku`, `price`, `retail_price`, `sale_price`, `mnf_name`, `mnf_sku`, `currency`, `buy_url`, `category_id`, `advetiser_name`, `advertiser_id`, `ad_id`, `created`, `modified`) VALUES
(1, 'tesj', 'kjfhc', 'iuihdsusd', 'uisdd', 1, 'yugyug', 'uy', 'ghjg', 1.52, 15.42, 152.454, 'uyfy', 'ugfg', 'fdf', 'uytuytf', 767877, '7687ufg', 8787, 786, '2014-01-17 00:00:00', '2014-01-17 00:00:00'),
(2, 'tesj', 'kjfhc', 'iuihdsusd', 'uisdd', 1, 'yugyug', 'uy', 'ghjg', 4694, 121, 654645, 'uyfy', 'ugfg', 'fdf', 'uytuytf', 767877, '7687ufg', 8787, 786, '2014-01-17 00:00:00', '2014-01-17 00:00:00');

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
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `country` varchar(250) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_id`, `username`, `password`, `role`, `name`, `address`, `state`, `city`, `zip`, `country`, `gender`, `status`, `created`, `modified`) VALUES
(1, 'ADMIN', 'admin@esmees.com', '42d565f4782f8aa44a43235ba47e4449efa17a90', 1, 'Admin', 'Esmees', 'Esmees', 'Esmees', '12345', 'US', NULL, 1, '2014-01-17 00:00:00', '2014-01-17 00:00:00'),
(4, 'ES000004', 'ashish@blankandco.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 'Ashish1bhagat', 'test address', 'Delhi', 'Delhi', '12345', 'US', '0', 0, '2014-01-17 06:52:11', '2014-01-17 06:52:12'),
(5, 'ES000005', 'test@test.com', '9a5d716a6be58acec023d33587e170ed09edb191', 0, 'Subodh Singh', '1zdolkj oajsjoas', 'Delhi', 'Delhi', '12345', 'AU', '1', 0, '2014-01-17 07:28:48', '2014-01-17 07:28:48'),
(6, 'ES000006', 'sbdh.singh@gmail.com', '9a5d716a6be58acec023d33587e170ed09edb191', 1, 'subodh', 'delhoi', 'Delhi', 'delhi', '110099', 'UG', '0', 0, '2014-01-17 03:21:25', '2014-01-17 03:21:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
