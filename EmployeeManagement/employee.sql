-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2016 at 04:32 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `PID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`PID`, `Name`, `Email`, `Message`) VALUES
(1, 'Sanjay kumar mahto', 'mahto.sanjay41@gmail.com', 'Hello!');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `image_name`, `email`) VALUES
(37, 'uploads/sanjay kumar.jpg', 'sanjay kumar.jpg', 'mahtosanjay@warlords.com'),
(39, 'uploads/picture027.jpg', 'picture027.jpg', 'mahtovijay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `PID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`PID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`PID`, `Name`, `Email`, `Password`) VALUES
(36, 'Sanjay kumar mahto', 'mahto.sanjay41@gmail.com', 'MTJ3ZWRmdmI='),
(41, 'vijay kumar mahto', 'mahtovijay@gmail.com', 'MTJxd2FzZGY='),
(42, 'sanjay kumar', 'mahtosanjay@warlords.com', 'MTJxd2Fzeng=');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
