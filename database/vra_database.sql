-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2014 at 04:32 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vra_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `citizenship` varchar(250) NOT NULL,
  `birth` varchar(250) NOT NULL,
  `emailad` varchar(250) NOT NULL,
  `mailStat` int(11) NOT NULL COMMENT '0=not, 1=done',
  `mobile` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `province` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `brgy` varchar(250) NOT NULL,
  `houseno` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `birthcity` varchar(250) NOT NULL,
  `birthprovince` varchar(250) NOT NULL,
  `civil` varchar(250) NOT NULL,
  `spouse` varchar(250) NOT NULL,
  `citizentype` varchar(250) NOT NULL,
  `natdate` varchar(250) NOT NULL,
  `natno` varchar(250) NOT NULL,
  `cityresyears` varchar(250) NOT NULL,
  `cityresmonths` varchar(250) NOT NULL,
  `philresyears` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `tinnum` varchar(250) NOT NULL,
  `fatherlname` varchar(250) NOT NULL,
  `fatherfname` varchar(250) NOT NULL,
  `fathermname` varchar(250) NOT NULL,
  `motherlname` varchar(250) NOT NULL,
  `motherfname` varchar(250) NOT NULL,
  `mothermname` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `image` mediumtext NOT NULL,
  `document` mediumtext NOT NULL,
  `height` varchar(250) NOT NULL,
  `weight` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `code`, `status`, `reason`, `citizenship`, `birth`, `emailad`, `mailStat`, `mobile`, `lname`, `fname`, `mname`, `province`, `city`, `brgy`, `houseno`, `gender`, `birthcity`, `birthprovince`, `civil`, `spouse`, `citizentype`, `natdate`, `natno`, `cityresyears`, `cityresmonths`, `philresyears`, `occupation`, `tinnum`, `fatherlname`, `fatherfname`, `fathermname`, `motherlname`, `motherfname`, `mothermname`, `date`, `image`, `document`, `height`, `weight`) VALUES
(41, 'b1hSPd', 1, '12', 'we', 'e', 'holdengrantdummy@gmail.com', 1, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', '', '', '', '', 'philresyears', '', '', '', '', '', '', '', '', '2014-10-05', '', '', 'height', 'height'),
(42, '', 1, 'yerytertyerty', '5', '5', '5', 1, '5', '5', '5', '5', '5', '5', '5', '5', '5', '', '', '', '', '', '', '', '', '', 'philresyears', '', '', '', '', '', '', '', '', '2014-10-05', '', '', 'height', 'height'),
(43, 'ARB9Di', 1, '12', 'kl', '', '', 1, 'lklk', 'kl', 'kl', 'lk', 'lk', 'lk', 'l', 'lkkl', '', '', '', '', '', '', '', '', '', '', 'philresyears', '', '', '', '', '', '', '', '', '2014-10-06', '', '', 'height', 'height'),
(44, '', 2, 'vxcvxcvxvxv', 'd', 'd', 'd', 0, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', '', 'd', 'd', 'd', 'd', 'd', 'd', 'd', '', '', '', '', '', '', '', '', '2014-10-06', '', '', 'height', 'height'),
(45, '', 2, 'fsfsfsdfsdfs', 'k', 'k', 'k', 0, 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', '', '', '', 'philresyears', '', '', '', '', '', '', '', '', '2014-10-06', '', '', 'height', 'height');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `lname`, `position`, `level`) VALUES
(1, 'holden', '123', 'holden', 'grant', 'head manager', 1),
(2, 'grant', '123', 'grant', 'holden', 'department manager', 0),
(3, 'jing2', '123', 'benjo', 'barbaso', 'manager', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
