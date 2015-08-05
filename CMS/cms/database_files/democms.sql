-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 06:19 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`country_id` int(11) NOT NULL,
  `country_german_value` varchar(100) NOT NULL,
  `country_eng_value` varchar(100) NOT NULL,
  `country_status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_german_value`, `country_eng_value`, `country_status`) VALUES
(1, 'Deutschland', 'Germany', 'Active');

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

-- --------------------------------------------------------

--
-- Table structure for table `email_notification`
--

CREATE TABLE IF NOT EXISTS `email_notification` (
`email_notifi_id` int(11) NOT NULL,
  `email_notifi_title` varchar(50) NOT NULL,
  `email_notifi_german_value` text NOT NULL,
  `email_notifi_eng_value` text NOT NULL,
  `email_notifi_status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
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
  `Member_Relese_version` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `Member_Current_Status` varchar(50) COLLATE utf16_unicode_ci NOT NULL DEFAULT 'New',
  `Member_Status` varchar(10) CHARACTER SET latin1 NOT NULL DEFAULT 'Active',
  `Customer_ID` varchar(50) COLLATE utf16_unicode_ci NOT NULL DEFAULT 'cust00001'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`msg_id` int(11) NOT NULL,
  `msg_title` varchar(50) NOT NULL,
  `msg_german_value` text NOT NULL,
  `msg_eng_value` text NOT NULL,
  `msg_status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_title`, `msg_german_value`, `msg_eng_value`, `msg_status`) VALUES
(1, 'Add_Profile', 'Vielen Dank, dassSie die DatenIhresVereinseingetragenhaben. Wir werden die Änderungen prüfen und freigeben Danach sind die aktualisierten Daten auf www.saarbruecken.de sichtbar.', '', 'Active'),
(2, 'Edit_Profile', 'Vielen Dank, dassSie die DatenIhresVereinseingetragenhaben. Wir werden die Änderungen prüfen und freigeben Danach sind die aktualisierten Daten auf www.saarbruecken.de sichtbar.', 'Thanks profile submitted successfully.will be activated after verification. ', 'Active'),
(3, 'Check_App_ID', 'Please check your Application ID.', '', 'Active'),
(4, 'Accepted', 'Siehaben die neuenodergeändertenVereinsdatenfreigegeben. Die neuenDatensind nun auf der Website sichtbar.', 'you have approved the data update, these data are now online.', 'Active'),
(5, 'Rejected', 'Siehaben die neuenodergeändertenVereinsdatennichtfreigegeben. Die sichtbaren Daten auf der Website bleiben unverändert.', 'you have rejected the data update, these data are not online, the old data remain', 'Active'),
(6, 'Update', 'Reminder sent.', '', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_type`
--
ALTER TABLE `contact_type`
 ADD PRIMARY KEY (`contact_type_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `district_table`
--
ALTER TABLE `district_table`
 ADD PRIMARY KEY (`dist_id`);

--
-- Indexes for table `email_notification`
--
ALTER TABLE `email_notification`
 ADD PRIMARY KEY (`email_notifi_id`);

--
-- Indexes for table `masteradmin`
--
ALTER TABLE `masteradmin`
 ADD PRIMARY KEY (`madmin_id`);

--
-- Indexes for table `memberauthor`
--
ALTER TABLE `memberauthor`
 ADD PRIMARY KEY (`ma_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`Member_id`), ADD UNIQUE KEY `uc_MemberID` (`Member_id`,`Member_App_Id`);

--
-- Indexes for table `members_log`
--
ALTER TABLE `members_log`
 ADD PRIMARY KEY (`Member_log_id`), ADD UNIQUE KEY `uc_MemberID` (`Member_log_id`,`Member_App_Id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_type`
--
ALTER TABLE `contact_type`
MODIFY `contact_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `district_table`
--
ALTER TABLE `district_table`
MODIFY `dist_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `email_notification`
--
ALTER TABLE `email_notification`
MODIFY `email_notifi_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masteradmin`
--
ALTER TABLE `masteradmin`
MODIFY `madmin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `memberauthor`
--
ALTER TABLE `memberauthor`
MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `Member_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members_log`
--
ALTER TABLE `members_log`
MODIFY `Member_log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
