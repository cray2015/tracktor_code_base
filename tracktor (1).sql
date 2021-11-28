-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2014 at 05:16 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tracktor`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `songid` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `id`, `songid`, `comments`) VALUES
(1, 6, 30, 'asxasxsxasxasx'),
(2, 6, 30, 'asxcsadcxsdsdc'),
(47, 6, 30, 'xdvsdcdc'),
(48, 6, 32, 'xdvsdcdc'),
(49, 6, 33, 'xdvsdcdc'),
(50, 6, 34, 'xdvsdcdc'),
(51, 6, 35, 'xdvsdcdc'),
(52, 6, 36, 'xdvsdcdc'),
(53, 6, 37, 'xdvsdcdc'),
(54, 6, 38, 'xdvsdcdc'),
(55, 6, 39, 'xdvsdcdc'),
(56, 6, 40, 'xdvsdcdc'),
(57, 6, 41, 'xdvsdcdc'),
(58, 6, 30, 'xdvsdcdc'),
(59, 6, 32, 'xdvsdcdc'),
(60, 6, 33, 'xdvsdcdc'),
(61, 6, 34, 'xdvsdcdc'),
(62, 6, 35, 'xdvsdcdc'),
(63, 6, 36, 'xdvsdcdc'),
(64, 6, 37, 'xdvsdcdc'),
(65, 6, 38, 'xdvsdcdc'),
(66, 6, 39, 'xdvsdcdc'),
(67, 6, 40, 'xdvsdcdc'),
(68, 6, 41, 'xdvsdcdc');

-- --------------------------------------------------------

--
-- Table structure for table `profile_info`
--

CREATE TABLE IF NOT EXISTS `profile_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `about_me` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `Songid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `songname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `shares` int(11) NOT NULL DEFAULT '0',
  `upload_date` datetime NOT NULL,
  PRIMARY KEY (`Songid`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`Songid`, `id`, `songname`, `location`, `likes`, `shares`, `upload_date`) VALUES
(30, 6, 'Hardwell & Showtek - How We Do [OUT NOW].mp3', 'http://localhost/again/profile/cray/track&albums/Hardwell & Showtek - How We Do [OUT NOW].mp3', 1, 0, '2014-04-27 15:01:56'),
(31, 7, 'Hardwell & Dyro feat. Bright Lights - Never Say Goodbye [OUT NOW!].mp3', 'http://localhost/again/profile/dev2014/track&albums/Hardwell & Dyro feat. Bright Lights - Never Say Goodbye [OUT NOW!].mp3', 0, 0, '2014-04-27 15:09:31'),
(32, 6, 'Alvaro & Mercer feat. Lil Jon - Welcome To The Jungle [OUT NOW!].mp3', 'http://localhost/again/profile/cray/track&albums/Alvaro & Mercer feat. Lil Jon - Welcome To The Jungle [OUT NOW!].mp3', 0, 0, '2014-04-28 20:44:19'),
(33, 6, 'Baby Doll - Ragini MMS 2 - 320Kbps.mp3', 'http://localhost/again/profile/cray/track&albums/Baby Doll - Ragini MMS 2 - 320Kbps.mp3', 0, 0, '2014-04-28 21:00:21'),
(34, 6, 'BIRDY NAM NAM - GOIN  IN (SKRILLEX  GOIN HARD  REMIX) [OFFICIAL VIDEO].mp3', 'http://localhost/again/profile/cray/track&albums/BIRDY NAM NAM - GOIN  IN (SKRILLEX  GOIN HARD  REMIX) [OFFICIAL VIDEO].mp3', 0, 0, '2014-04-28 21:00:27'),
(35, 6, 'Chaar Botal Vodka - Yo Yo Honey Singh - Ragini MMS 2 320Kbps.mp3', 'http://localhost/again/profile/cray/track&albums/Chaar Botal Vodka - Yo Yo Honey Singh - Ragini MMS 2 320Kbps.mp3', 0, 0, '2014-04-28 21:00:32'),
(36, 6, 'Coldplay - Magic (Official audio).mp3', 'http://localhost/again/profile/cray/track&albums/Coldplay - Magic (Official audio).mp3', 0, 0, '2014-04-28 21:00:37'),
(37, 6, 'Hardwell - Spaceman (Original Mix).mp3', 'http://localhost/again/profile/cray/track&albums/Hardwell - Spaceman (Original Mix).mp3', 0, 0, '2014-04-28 21:00:41'),
(38, 6, 'Hardwell & Dyro feat. Bright Lights - Never Say Goodbye [OUT NOW!].mp3', 'http://localhost/again/profile/cray/track&albums/Hardwell & Dyro feat. Bright Lights - Never Say Goodbye [OUT NOW!].mp3', 0, 0, '2014-04-28 21:00:46'),
(39, 6, 'Hardwell feat. Amba Shepherd - Apollo [OUT NOW!].mp3', 'http://localhost/again/profile/cray/track&albums/Hardwell feat. Amba Shepherd - Apollo [OUT NOW!].mp3', 0, 0, '2014-04-28 21:00:50'),
(40, 6, 'Hardwell feat. Matthew Koma - Dare You (Extended Mix) [OUT NOW!].mp3', 'http://localhost/again/profile/cray/track&albums/Hardwell feat. Matthew Koma - Dare You (Extended Mix) [OUT NOW!].mp3', 0, 0, '2014-04-28 21:00:57'),
(41, 6, 'KOAN Sound - Funk Blaster (Official Video).mp3', 'http://localhost/again/profile/cray/track&albums/KOAN Sound - Funk Blaster (Official Video).mp3', 0, 0, '2014-04-28 21:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `Created On` datetime NOT NULL,
  `Updated On` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Username` (`Username`,`Email`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Username`, `Email`, `Password`, `birthdate`, `Created On`, `Updated On`) VALUES
(6, 'vibhanshu biswas', 'cray', 'biswasvibhanshu2011@gmail.com', 'c2bfd01762cfbe4e34cc97b9769b4238', '1992-11-24', '2014-04-14 11:55:34', '2014-04-14 11:55:34'),
(7, 'devanshu', 'dev2014', 'devanshubiswas@gmail.com', '67321a280a7414c6fe2557478a249053', '1999-09-08', '2014-04-16 23:15:56', '2014-04-16 23:15:56'),
(8, 'shruti', 'cray2014', 'cray@wert.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1937-09-17', '2014-04-17 00:22:51', '2014-04-17 00:22:51'),
(9, 'hello', 'helpme', 'qwertt@yui.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1937-07-15', '2014-04-23 00:41:28', '2014-04-23 00:41:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
