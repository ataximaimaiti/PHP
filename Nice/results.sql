-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2017 at 08:19 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `results`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `projectName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `projectName`) VALUES
(1, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `runid` int(11) NOT NULL,
  `testid` int(11) NOT NULL,
  `testname` varchar(100) NOT NULL,
  `params` varchar(200) NOT NULL,
  `host` varchar(100) NOT NULL,
  `date` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `browser` varchar(15) NOT NULL,
  `errormessage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`runid`, `testid`, `testname`, `params`, `host`, `date`, `status`, `browser`, `errormessage`) VALUES
(2, 2, 'Limited_Client_Access_testing_test', 'None', 'ATAXIMAIMAITI', '2017-08-31 15:49:07', 'FAIL', 'chrome', 'failed'),
(3, 2, 'Limited_Client_Access_testing_test', 'None', 'ATAXIMAIMAITI', '2017-10-13 10:25:17', 'FAIL', 'chrome', 'failed'),
(4, 4, 'assignTicketInJira', 'None', 'ATAXIMAIMAITI', '2017-10-13 17:00:10', 'FAIL', 'chrome', 'failed'),
(5, 5, 'creatingTestingPageInWiki', 'None', 'ATAXIMAIMAITI', '2017-10-13 17:03:54', 'FAIL', 'chrome', 'unknown error: Element <button id=\"rte-button-publish\" class=\"aui-button aui-button-primary default-submit\" type=\"submit\" name=\"confirm\" value=\"Save\" tabindex=\"101\" data-tooltip=\"... changes (Ctrl+S)\"'),
(6, 5, 'creatingTestingPageInWiki', 'None', 'ATAXIMAIMAITI', '2017-10-16 10:52:17', 'PASS', 'chrome', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testnames`
--

CREATE TABLE `testnames` (
  `id` int(11) NOT NULL,
  `projectID` int(11) NOT NULL,
  `testName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testnames`
--

INSERT INTO `testnames` (`id`, `projectID`, `testName`) VALUES
(1, 0, 'UpdateResume'),
(2, 1, 'Limited_Client_Access_testing_test'),
(4, 1, 'assignTicketInJira'),
(5, 1, 'creatingTestingPageInWiki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `testnames`
--
ALTER TABLE `testnames`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `testnames`
--
ALTER TABLE `testnames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
