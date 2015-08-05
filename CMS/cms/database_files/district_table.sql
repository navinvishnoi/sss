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
-- Table structure for table `district_table`
--

CREATE TABLE IF NOT EXISTS `district_table` (
`dist_id` int(11) NOT NULL,
  `dist_german_name` varchar(50) NOT NULL,
  `dist_eng_name` varchar(50) NOT NULL,
  `dist_status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `district_table`
--

INSERT INTO `district_table` (`dist_id`, `dist_german_name`, `dist_eng_name`, `dist_status`) VALUES
(1, 'Alt-Saarbrücken', 'Alt-Saarbrücken', 'Active'),
(2, 'Malstatt', 'Malstatt', 'Active'),
(3, 'St. Johann', 'St. Johann', 'Active'),
(4, 'Eschberg', 'Eschberg', 'Active'),
(5, 'Sankt Arnual', 'Sankt Arnual', 'Active'),
(6, 'Gersweiler', 'Gersweiler', 'Active'),
(7, 'Klarenthal', 'Klarenthal', 'Active'),
(8, 'Altenkessel', 'Altenkessel', 'Active'),
(9, 'Burbach', 'Burbach', 'Active'),
(10, 'Dudweiler', 'Dudweiler', 'Active'),
(11, 'Jägersfreude', 'Jägersfreude', 'Active'),
(12, 'Herrensohr', 'Herrensohr', 'Active'),
(13, 'Scheidt', 'Scheidt', 'Active'),
(14, 'Schafbrücke', 'Schafbrücke', 'Active'),
(15, 'Bischmisheim', 'Bischmisheim', 'Active'),
(16, 'Ensheim', 'Ensheim', 'Active'),
(17, 'Brebach-Fechingen', 'Brebach-Fechingen', 'Active'),
(18, 'Eschringen', 'Eschringen', 'Active'),
(19, 'Güdingen', 'Güdingen', 'Active'),
(20, 'Bübingen', 'Bübingen', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district_table`
--
ALTER TABLE `district_table`
 ADD PRIMARY KEY (`dist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district_table`
--
ALTER TABLE `district_table`
MODIFY `dist_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
