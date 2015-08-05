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
-- Table structure for table `masteradmin`
--

CREATE TABLE IF NOT EXISTS `masteradmin` (
`madmin_id` int(11) NOT NULL,
  `madmin1_first_name` varchar(50) NOT NULL,
  `madmin1_name` varchar(50) NOT NULL,
  `madmin1_email` varchar(50) NOT NULL,
  `madmin2_first_name` varchar(50) NOT NULL,
  `madmin2_name` varchar(50) NOT NULL,
  `madmin2_email` varchar(50) NOT NULL,
  `madmin_record_type` varchar(50) NOT NULL,
  `madmin_createdAt` varchar(50) NOT NULL,
  `madmin_updatedAt` varchar(50) NOT NULL,
  `madmin_status` varchar(25) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masteradmin`
--
ALTER TABLE `masteradmin`
 ADD PRIMARY KEY (`madmin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masteradmin`
--
ALTER TABLE `masteradmin`
MODIFY `madmin_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
