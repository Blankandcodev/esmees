-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2014 at 07:44 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cackedb1`
--

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
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `looks`
--

INSERT INTO `looks` (`Id`, `caption_name`, `order_id`, `user_id`, `product_id`, `image`, `status`, `created`) VALUES
(45, 'Demo', 10001, 7, 2, '530c3a72-32ec-41f0-b674-0484408d8133.jpg', 0, '2014-02-25 06:38:42'),
(46, 'demo2', 10001, 7, 2, '530c3aa7-d2fc-40b1-8958-0484408d8133.jpg', 0, '2014-02-25 06:39:35'),
(47, 'My Pic', 10004, 2, 90, '530c3e9f-cef0-42fc-91f1-0484408d8133.jpg', 0, '2014-02-25 06:56:31'),
(48, 'ddddd', 10001, 7, 2, '530c3f74-af4c-4251-a598-0484408d8133.png', 0, '2014-02-25 07:00:04'),
(49, 'ddddd', 1006, 7, 40, '530c3f87-2408-4ea3-bc4e-0484408d8133.png', 0, '2014-02-25 07:00:23'),
(50, 'sssss', 1006, 7, 40, '530c3fca-9ad8-4cd8-aa98-0484408d8133.jpg', 0, '2014-02-25 07:01:30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
