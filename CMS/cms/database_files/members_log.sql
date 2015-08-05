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
-- Table structure for table `members_log`
--

CREATE TABLE IF NOT EXISTS `members_log` (
`Member_log_id` int(11) NOT NULL,
  `Member_id` int(11) NOT NULL,
  `Member_App_Id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Member_Name` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `Member_Type` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `Member_logo` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `Member_Website` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `Member_Desc` text COLLATE utf16_unicode_ci NOT NULL,
  `Member_Address_Street` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `Member_House_No` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `Member_ZIP` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `Member_City` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `Member_Dist` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `Member_Country` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `Member_FB_Address` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `Member_Twtr_Address` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `Member_Multiple_Sports` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `MA_name` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_first_name` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_position` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_street_no` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_house_no` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_zip` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_city` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_dist` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_country` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_phone` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_mobile` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `MA_email` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `Member_CreatedAt` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Member_UpdatedAt` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Member_Createdby` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Member_latest_Release` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `Member_Status` varchar(10) CHARACTER SET latin1 NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members_log`
--
ALTER TABLE `members_log`
 ADD PRIMARY KEY (`Member_log_id`), ADD UNIQUE KEY `uc_MemberID` (`Member_log_id`,`Member_App_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members_log`
--
ALTER TABLE `members_log`
MODIFY `Member_log_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
