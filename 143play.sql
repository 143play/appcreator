-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2014 at 07:56 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `143play`
--

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE IF NOT EXISTS `app` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `categoryId` int(100) NOT NULL,
  `templateId` int(100) NOT NULL,
  `platformId` int(100) NOT NULL,
  `appName` varchar(1000) NOT NULL,
  `appLogo` varchar(1000) NOT NULL,
  `menuId` int(100) NOT NULL,
  `creatorId` int(100) NOT NULL,
  `appTag` varchar(1000) NOT NULL,
  `status` int(100) NOT NULL,
  `price` double NOT NULL,
  `like` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`id`, `categoryId`, `templateId`, `platformId`, `appName`, `appLogo`, `menuId`, `creatorId`, `appTag`, `status`, `price`, `like`, `image`, `about`) VALUES
(1, 2, 2, 2, 'Fastfood', '', 1, 1, 'Fastfood', 1, 5, 4, 'public/img/3.png', ''),
(2, 1, 1, 1, 'Coffeeshop', '', 1, 1, 'Coffeeshop', 1, 5, 10, 'public/img/1.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `appmenu`
--

CREATE TABLE IF NOT EXISTS `appmenu` (
  `menuId` int(100) NOT NULL,
  `menuName` varchar(1000) NOT NULL,
  `menuImage` varchar(1000) NOT NULL,
  PRIMARY KEY (`menuId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(1000) NOT NULL,
  `categoryImage` varchar(1000) NOT NULL,
  `publicationStatus` varchar(1000) NOT NULL,
  `categoryTag` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryImage`, `publicationStatus`, `categoryTag`) VALUES
(1, 'Restaurant', 'public/img/2.png', '1', 'Restaurant'),
(2, 'Education', 'public/img/5.png', '1', 'Education'),
(3, 'Ecommerce', 'public/img/8.png', '1', 'Ecommerce');

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE IF NOT EXISTS `platform` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `categoryId` int(100) NOT NULL,
  `platformName` varchar(1000) NOT NULL,
  `platformImage` varchar(1000) NOT NULL,
  `publicationStatus` int(100) NOT NULL,
  `platformTag` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`id`, `categoryId`, `platformName`, `platformImage`, `publicationStatus`, `platformTag`) VALUES
(1, 1, 'Android', 'public/img/android1.png', 1, 'Android'),
(2, 1, 'iPhone', 'public/img/iphone1.png', 1, 'iPhone'),
(3, 1, 'Windows', 'public/img/windows-phone2.png', 1, 'Windows');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(100) NOT NULL,
  `noleName` varchar(1000) NOT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE IF NOT EXISTS `template` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `categoryId` int(100) NOT NULL,
  `templateName` varchar(1000) NOT NULL,
  `templateImage` varchar(1000) NOT NULL,
  `publicationStatus` int(100) NOT NULL,
  `templateTag` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `categoryId`, `templateName`, `templateImage`, `publicationStatus`, `templateTag`) VALUES
(1, 1, 'Coffee Shop', 'public/img/1.png', 1, 'A Beautiful template with clean design'),
(2, 1, 'Fast Food', 'public/img/3.png', 1, 'A Beautiful template with clean design'),
(3, 1, 'Sushi Place', 'public/img/4.png', 1, 'A Beautiful template with clean design'),
(4, 1, 'Ice Cream Parlour', 'public/img/19.png', 1, 'A Beautiful template with clean design');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `role` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `username`, `email`, `password`, `name`, `type`, `photo`, `country`, `phone`, `about`) VALUES
(1, 'admin', 'al_imran_ahmed', 'imran15-1191@diu.edu.bd', 'aeda6d66c337fa09f185719baa2334f9', 'Al- Imran Ahmed', 'unknown', '', 'Bangladesh', '01748197835', 'This is Al- Imran Ahmed. I love programming a lot! Now I am working on this project....'),
(2, 'creator', 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', '', '', 'Bangladesh', '12345678901', 'This is an account of demon user to test the functionality of the system. Thank you...');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
