-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 06:39 AM
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
-- Table structure for table `contact_type`
--

CREATE TABLE IF NOT EXISTS `contact_type` (
`contact_type_id` int(11) NOT NULL,
  `contact_type_german_value` varchar(100) NOT NULL,
  `contact_type_eng_value` varchar(100) NOT NULL,
  `contact_type_status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_type`
--

INSERT INTO `contact_type` (`contact_type_id`, `contact_type_german_value`, `contact_type_eng_value`, `contact_type_status`) VALUES
(1, 'Sport', 'Sport', 'Active'),
(2, 'Kunst', 'Kunst', 'Active'),
(3, 'Sonstige', 'Sonstige', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_type`
--
ALTER TABLE `contact_type`
 ADD PRIMARY KEY (`contact_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_type`
--
ALTER TABLE `contact_type`
MODIFY `contact_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
