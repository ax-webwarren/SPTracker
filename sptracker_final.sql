-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2015 at 01:07 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS sptracker;

USE sptracker;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sptracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `category` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(2, 'TEST Category 2'),
(3, 'TEST Category 1'),
(4, 'Test Category Edited'),
(5, 'Ayala'),
(6, 'Constant Contact');

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
`id` int(11) NOT NULL,
  `developer` longtext NOT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`id`, `developer`, `pass`) VALUES
(2, 'TEST Developer 0', NULL),
(4, 'TEST Developer 1', NULL),
(6, 'admin', 'efd524bfbf5f2032b0172f3b29f67145'),
(7, 'Gian', NULL),
(8, 'Jojo Pogi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sptracker`
--

CREATE TABLE IF NOT EXISTS `sptracker` (
  `categories` text NOT NULL,
  `developer` text NOT NULL,
  `status` text NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `notes` longtext,
`id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `sptracker`
--

INSERT INTO `sptracker` (`categories`, `developer`, `status`, `start`, `end`, `notes`, `id`) VALUES
('Ayala', 'Gian', 'Production', '2015-10-01 06:16:04', '2015-10-01 07:16:08', 'edited chuchuchuchu', 35),
('Constant Contact', 'Jojo Pogi', 'Production', '2015-10-01 06:17:33', '2015-10-01 07:17:35', '#1111011', 36),
('Constant Contact', 'Jojo Pogi', 'Production', '2015-10-01 10:42:31', '2015-10-01 10:42:32', 'zxcasd', 37),
('Constant Contact', 'Gian', 'Production', '2015-10-01 12:18:18', '2015-10-01 12:18:19', 'asd3', 45),
('Constant Contact', 'Jojo Pogi', 'Production', '2015-10-07 09:37:55', '2015-10-07 09:37:55', 'ZXcASDWE', 46);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id` int(11) NOT NULL,
  `status` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(2, 'TEST Status 2'),
(3, 'TEST Status 1'),
(4, 'TEST Status via ADD'),
(5, 'Production');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sptracker`
--
ALTER TABLE `sptracker`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sptracker`
--
ALTER TABLE `sptracker`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
