-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2015 at 12:33 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rentaboat`
--

-- --------------------------------------------------------

--
-- Table structure for table `boats`
--

CREATE TABLE IF NOT EXISTS `boats` (
  `boats_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(4) NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_status` int(11) NOT NULL,
  PRIMARY KEY (`boats_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `boats`
--

INSERT INTO `boats` (`boats_id`, `name`, `description`, `price`, `phone`, `category_id`, `product_status`) VALUES
(1, 'elan', 'lenght 4.5m, engine 4KS, for 4 person', 30, '064/111-333', 1, 1),
(2, 'pasara', 'lenght 5m, engine 20KS, for 6 person', 40, '063/456-7879', 1, 1),
(3, 'sandolina', 'lenght 2m, for 2 persons', 10, '062/2578-258', 3, 1),
(4, 'barka', 'for 2 persons', 10, '069/357-951', 1, 1),
(5, 'cabin boat', 'lenght 6m, for 5 persons, 20HP', 45, '061/2548-968', 2, 1),
(6, 'boat with cabin', 'lengt 7m, for 6 persons, engine 50KS', 65, '065/86214-632', 2, 1),
(7, 'kajak', 'for 4 persons', 10, '062/59874-652', 3, 1),
(8, 'wooden boat', 'for 4 persons, engine 4HP', 45, '061/4589-369', 1, 1),
(9, 'boat widh sunny deck', 'length 5m, for 4 persons, 20HP', 35, '065/6985-568', 2, 1),
(10, 'boat', 'for 6 persons, 60HP, all equipment', 80, '063/5687-965', 1, 1),
(11, 'Galia 485', 'Cabin, engine 60HP, excellent', 80, '063/5687-965', 2, 1),
(12, 'Silver', 'length 6m, with cabin, engine 60HP', 80, '068/6168-482', 2, 1),
(13, 'Fishing boat palastura', 'Length 5m, engine 50HP, for 4 persons', 40, '063/569-5696', 1, 1),
(14, 'Cabin pasara', 'Length 6m, for 6 persons, 30HP', 35, '063/54587-985', 2, 1),
(15, 'gliteblue kayak', '2m length, for 1 person', 15, '063/9856-698', 3, 1),
(16, 'Riot-kayak', 'One person, double paddle', 15, '063/6587-412', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'boats', 1),
(2, 'cabin boats', 1),
(3, 'kajak', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'darko', '1a1dc91c907325c69271ddf0c944bc72', 'pera@pera.com'),
(2, 'mika', 'b222bfa2d373adb3b9314a52c0f4512b', 'mika@mika.com'),
(5, 'Zare', 'b222bfa2d373adb3b9314a52c0f4512b', 'zare@zare.rs'),
(6, 'Tamara', 'e10adc3949ba59abbe56e057f20f883e', 'tamara@tamara.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
