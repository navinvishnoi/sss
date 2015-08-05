-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 06:40 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `democms`
--

-- --------------------------------------------------------

--
-- Table structure for table `memberauthor`
--

CREATE TABLE IF NOT EXISTS `memberauthor` (
`ma_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `ma_name` varchar(50) NOT NULL,
  `ma_first_name` varchar(50) NOT NULL,
  `ma_position` varchar(50) NOT NULL,
  `ma_street` varchar(50) NOT NULL,
  `ma_house_no` varchar(50) NOT NULL,
  `ma_zip` varchar(50) NOT NULL,
  `ma_city` varchar(50) NOT NULL,
  `ma_country` varchar(50) NOT NULL,
  `ma_phone` varchar(50) NOT NULL,
  `ma_mobile` varchar(50) NOT NULL,
  `ma_email` varchar(50) NOT NULL,
  `ma_createdAt` varchar(50) NOT NULL,
  `ma_updatedAt` varchar(50) NOT NULL,
  `ma_createdBy` varchar(50) NOT NULL,
  `ma_status` varchar(25) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memberauthor`
--
ALTER TABLE `memberauthor`
 ADD PRIMARY KEY (`ma_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memberauthor`
--
ALTER TABLE `memberauthor`
MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
