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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
