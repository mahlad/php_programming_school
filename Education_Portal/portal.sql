-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2013 at 09:51 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` char(50) CHARACTER SET utf8 NOT NULL,
  `LastName` char(50) CHARACTER SET utf8 NOT NULL,
  `Username` char(50) CHARACTER SET utf8 NOT NULL,
  `Password` char(50) CHARACTER SET utf8 NOT NULL,
  `JobTitle` char(50) CHARACTER SET utf8 NOT NULL,
  `Phone` char(50) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Address` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Username`, `Password`, `JobTitle`, `Phone`, `Email`, `Address`) VALUES
(8, 'مینا', 'مینایی', 'mina', 'mina', 'سرپرست شمار3', '44444444', 'm@gmail.com', 'خیابان چهارم');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
