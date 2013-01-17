-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2013 at 07:59 AM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` char(50) NOT NULL,
  `LastName` char(50) NOT NULL,
  `Username` char(50) NOT NULL,
  `Password` char(50) NOT NULL,
  `JobTitle` char(50) NOT NULL,
  `Phone` char(50) NOT NULL,
  `Address` char(50) NOT NULL,
  PRIMARY KEY (`User ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
