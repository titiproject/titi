-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2015 at 09:35 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `titi`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `lastLogin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`, `status`, `lastLogin`) VALUES
(1, 'admin', 'admin@mail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, '2015-06-25 09:02:19'),
(2, 'mod', 'mod@mail.com', '7dd30f0a95d522bfc058be4e75847f8b6df9f76b', 1, '2015-06-25 09:08:02'),
(3, '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `catid` int(10) NOT NULL AUTO_INCREMENT,
  `catname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentid` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catname`, `modified`, `created`, `author`, `description`, `parentid`, `status`) VALUES
(1, 'Sua bot', '2015-06-27 09:32:30', '2015-06-27 09:32:30', '1', 'asdasdasdsadsadsadsadsadsadasdsadsadsadsadsadsadas', -1, 1),
(2, 'Sua bot', '2015-06-27 11:05:29', '2015-06-27 11:05:29', '1', 'Ã¡das', -1, 1),
(3, 'Sữ dê', '2015-06-27 07:27:29', '2015-06-27 07:27:29', '2', '', -1, 1),
(4, 'SUMO', '2015-06-27 08:06:28', '2015-06-27 08:06:28', '1', 'sumo Sữa', -1, 1),
(5, 'Sữ bò', '2015-06-27 08:38:19', '2015-06-27 08:38:19', '1', 'sữa bò ', -1, 1),
(6, 'Korea', '2015-06-27 20:41:15', '2015-06-27 20:41:15', '1', 'sada ', -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `phone` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `state`, `zip`, `country`, `created`, `gender`, `phone`, `email`, `avatar`) VALUES
(1, 'admin', 'admin', 'HCM', '1', 'zip', 'Viá»‡t Nam', '2015-06-27 01:26:48', 1, '0909797979', 'admin@mail.com', ''),
(2, 'Huỳnh Chí Tâm', 'Huỳnh Khương An', 'Hồ Chí Minh', '1', '9999999', 'Việt Nam', '2015-06-27 01:06:53', 1, '0909797979', 'admin@mail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customerid` int(10) NOT NULL,
  `amount` float NOT NULL,
  `order_status` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `ship_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ship_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ship_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ship_zip` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `ship_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ship_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `orderid` int(10) NOT NULL,
  `productid` int(10) NOT NULL,
  `item_price` float NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `catid` int(10) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL DEFAULT '0',
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`) VALUES
(1, 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `log_user` FOREIGN KEY (`id`) REFERENCES `accounts` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;