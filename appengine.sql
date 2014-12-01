-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2014 at 12:43 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `appengine`
--

-- --------------------------------------------------------

--
-- Table structure for table `appdetails`
--

CREATE TABLE IF NOT EXISTS `appdetails` (
  `appid` varchar(50) NOT NULL,
  `template` text NOT NULL,
  `app_name` text NOT NULL,
  `app_icon` text NOT NULL,
  `bacground_image` text NOT NULL,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appdetails`
--

INSERT INTO `appdetails` (`appid`, `template`, `app_name`, `app_icon`, `bacground_image`, `user_name`, `password`) VALUES
('app101', 'Restaurant', 'KFC BD', 'D:\\RestaurantResources\\icon\\ic_launcher.png', 'D:\\RestaurantResources\\background\\new_background.jpg', 'farhadssj', 'farhadssj'),
('app102', 'BiryaniHouse', 'Nanna Biryani House', 'D:\\BiryaniHouseResource\\media.png', 'D:\\BiryaniHouseResource\\back56.jpg', 'roberto', 'mypass');

-- --------------------------------------------------------

--
-- Table structure for table `biryanihouse`
--

CREATE TABLE IF NOT EXISTS `biryanihouse` (
  `biryanihouse_id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` text NOT NULL,
  `iconlocation` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  PRIMARY KEY (`biryanihouse_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `biryanihouse`
--

INSERT INTO `biryanihouse` (`biryanihouse_id`, `appid`, `iconlocation`, `description`, `category`) VALUES
(1, 'app102', 'D:\\BiryaniHouseResource\\appetizer_2.jpg', 'It is a blah & blah company......', 'about'),
(2, 'app102', 'D:\\BiryaniHouseResource\\ic_launcher.png', 'Tehari is a nice items & const is so low', 'menu'),
(3, 'app102', 'D:\\BiryaniHouseResource\\ic_launcher.png', 'Biryani is a factastic food item for increasing balley.....', 'menu');

-- --------------------------------------------------------

--
-- Table structure for table `biryanihouseotherinfo`
--

CREATE TABLE IF NOT EXISTS `biryanihouseotherinfo` (
  `biryaniother_id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` text NOT NULL,
  `phone` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY (`biryaniother_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `biryanihouseotherinfo`
--

INSERT INTO `biryanihouseotherinfo` (`biryaniother_id`, `appid`, `phone`, `latitude`, `longitude`) VALUES
(1, 'app102', '+880174675898989', 90.2344, 23.796897);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` varchar(50) NOT NULL,
  `gallery_image` text NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `appid`, `gallery_image`) VALUES
(1, 'app101', 'D:\\RestaurantResources\\items\\appetizer_1.jpg'),
(2, 'app102', 'D:\\BiryaniHouseResource\\appetizer_1.jpg'),
(3, 'app102', 'D:\\BiryaniHouseResource\\appetizer_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `restaurant_id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` varchar(50) NOT NULL,
  `about_us` text NOT NULL,
  `follow_link` text NOT NULL,
  `contact_info` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `phone` text NOT NULL,
  PRIMARY KEY (`restaurant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `appid`, `about_us`, `follow_link`, `contact_info`, `latitude`, `longitude`, `phone`) VALUES
(1, 'app101', 'We are the most commitment company in the country & world', 'https://www.facebook.com/groups/android.devs.bd/', '143PLAY,Dhanmondi,Dhaka-1210', 23.7867, 90.425, '+8801764341179');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantmenuitem`
--

CREATE TABLE IF NOT EXISTS `restaurantmenuitem` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` varchar(50) NOT NULL,
  `category` text NOT NULL,
  `item_image` text NOT NULL,
  `title` text NOT NULL,
  `price` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `restaurantmenuitem`
--

INSERT INTO `restaurantmenuitem` (`item_id`, `appid`, `category`, `item_image`, `title`, `price`, `description`) VALUES
(1, 'app101', 'Appetizer', 'D:\\RestaurantResources\\items\\appetizer_1.jpg', 'Appetizer snacks', '50 bdt', 'Its is a healthy amoung these food item as well as cheap.'),
(2, 'app101', 'Main Dish', 'D:\\RestaurantResources\\items\\appetizer_2.jpg', 'Rice', '45bdt', 'Rice with vagetables...');
