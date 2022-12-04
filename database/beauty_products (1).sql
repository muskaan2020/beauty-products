-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2022 at 07:27 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  `c_desc` longtext NOT NULL,
  `c_img` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_desc`, `c_img`) VALUES
(1, 'Skin Care', 'It contains all the skincare products.', 'Skin Care.jpg'),
(2, 'Hair Care', 'It contains all the haircare products.', 'Hair Care.png'),
(3, 'Body Care', 'It contains all the bodycare products.', 'Body Care.jpg'),
(4, 'Cosmetics', 'It contains all the cosmetics.', 'cosmetics.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `p_catg` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `p_catg` (`p_catg`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `p_catg`, `p_name`, `p_price`, `p_img`) VALUES
(1, 1, 'Cetaphil Gentle Skin Cleanser', 300, 'skincare1.jpg'),
(2, 1, 'Cetaphil Moisturising Cream', 400, 'skincare2.jpg'),
(3, 1, 'Biotique Bio Papaya Revitalizing Tan removal Scrub', 230, 'skincare3.jpg'),
(4, 1, 'Nykaa Skin Secrets Exotic Black Mud Mask', 100, 'skincare4.jpg'),
(5, 2, 'ONION SHAMPOO FOR HAIR FALL CONTROL', 500, 'haircare1.jpg'),
(6, 2, 'ANTI DANDRUFF SHAMPOO', 450, 'haircare2.jpg'),
(7, 2, 'COCONUT MILK CONDITIONER', 430, 'haircare3.jpg'),
(8, 2, 'MOROCCAN ARGAN HAIR OIL', 550, 'haircare4.jpg'),
(9, 3, 'Dove Antibacterial Body Wash', 420, 'bodycare1.jpg'),
(10, 3, 'Keys Soulcare Sacred Body Oil ', 1500, 'bodycare2.png'),
(11, 3, 'Vaseline Jelly Stick', 420, 'bodycare3.jpg'),
(12, 3, 'Dove Nourishing Hand Sanitizer', 300, 'bodycare4.jpg'),
(13, 4, 'Swiss Beauty Eyeshadow Palette', 215, 'cosmetics1.jpg'),
(14, 4, 'Maybelline New York Colossal Waterproof Mascara', 500, 'cosmetics2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

DROP TABLE IF EXISTS `product_reviews`;
CREATE TABLE IF NOT EXISTS `product_reviews` (
  `r_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `fname` int(11) NOT NULL,
  `review` longtext NOT NULL,
  PRIMARY KEY (`r_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first name` varchar(255) NOT NULL,
  `last name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `billingAddress` longtext NOT NULL,
  `billingState` varchar(255) NOT NULL,
  `billingCity` varchar(255) NOT NULL,
  `billingPincode` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first name`, `last name`, `email`, `contactno`, `password`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `country`) VALUES
(1, 'muskaan', 'nijhawan', 'muskaan@gmail.com', '9779462237', '12345678', 'street no.3 bajwa colony', 'punjab', 'jagraon', 142026, 'india'),
(15, 'deepak', 'nijhawan', 'deepak@gmail.com', '08360411046', '987654', 'House no.720 street no. 3 bajwa colony', 'punjab', 'jagraon', 142026, 'India');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`p_catg`) REFERENCES `category` (`c_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
