-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2013 at 07:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` char(50) NOT NULL,
  `LastName` char(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` char(50) NOT NULL,
  `Phone` int(50) NOT NULL,
  `Password` char(50) NOT NULL,
  `DateRejistered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `FirstName`, `LastName`, `Address`, `Email`, `Phone`, `Password`, `DateRejistered`) VALUES
(137, 'fg', 'fg', 'fg', 'fg', 0, 'fg', '2012-05-18 06:27:31'),
(138, 'مهلا', 'دلپاک', 'خیابان نهم', 'mahlad365@gmail.com', 21345, 'mahla', '2012-05-18 06:41:10'),
(139, 'علی', 'مینایی', 'خیابان بیستم', 'ali@gmail.com', 56768768, 'ali', '2012-05-18 08:56:39'),
(140, 'مینا', 'محمدی', 'خیابان هشتم', 'mina@gmail.com', 987986897, 'mina', '2012-05-18 09:12:44'),
(141, 'مریم', 'مرادی', 'خیابان دهم', 'maryam@gmail.com', 8987897, 'maryam', '2012-05-18 12:39:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
