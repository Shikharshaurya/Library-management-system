-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2014 at 11:41 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `librarymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE IF NOT EXISTS `admininfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `email`, `user_name`, `password`) VALUES
(1, 'admin@gmail.com', 'ashraful', 'ashraful'),
(2, 'admin@gmail.com', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `backup_info`
--

CREATE TABLE IF NOT EXISTS `backup_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sql_file_name` varchar(200) NOT NULL,
  `date_taken` double NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `backup_info`
--


-- --------------------------------------------------------

--
-- Table structure for table `bookself`
--

CREATE TABLE IF NOT EXISTS `bookself` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept` varchar(20) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `author_name` varchar(250) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `active` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `bookself`
--

INSERT INTO `bookself` (`id`, `dept`, `book_name`, `author_name`, `quantity`, `active`) VALUES
(4, 'CE', 'Civil basic ', 'Ashraful', '86', 1),
(12, 'CSE', 'Compilers', 'AHO LAM SETHI ULLMAN', '40', 1),
(16, 'CE', 'sad', 'dsad', '122', 1),
(6, 'CSE', 'Programming with C', 'Schaum''s outline', '26', 1),
(7, 'CSE', 'Database System Concept ', 'Silberschatz  Korth  Sudarshan', '17', 1),
(17, 'CE', 'sad', 'dsad', '123', 1),
(15, 'CE', 'sdsad', 'sddsf', '20', 1),
(10, 'CSE', 'Formal language and automata', 'Peter linz', '39', 1),
(11, 'CSE', 'Introduction to algorithms', 'CORMAN LEISERSON RIVEST STEIN', '48', 1),
(13, 'CSE', 'Numerical methods for engineers', 'Steven C. chapra  Raymond P. canale', '56', 1),
(14, 'CSE', 'sdsad', 'sdsa', '0', 1),
(18, 'CSE', 'fgdfg', 'dfgdfg', 'dfgdfg', 1),
(19, 'EEE', 'asdsdfs', 'sdf', 'dsfsdf', 1),
(20, 'CE', 'sdsad', 'sdfsdf', 'fdfsd', 1),
(21, 'ME', 'dsfdsf', 'dsfsdfds', 'fs', 1),
(22, 'CSE', 'sdfsd', 'hj', 'kjhk', 1),
(23, 'CSE', 'kl', 'dg', '13', 1),
(24, 'ME', 'jhkh', 'hjk', '13', 1),
(25, 'EEE', 'yhjkh', 'kjhkhkj', 'jhk', 1),
(26, 'CSE', 'hjjkhjk', 'hjkhjk', 'hkjhjk', 1),
(27, 'EEE', 'hjkhjk', 'hjkhkhjkhjkhjk', '.0241', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_issue`
--

CREATE TABLE IF NOT EXISTS `book_issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `group_id` varchar(250) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `author_name` varchar(250) NOT NULL,
  `issue_date` date NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `book_issue`
--

INSERT INTO `book_issue` (`id`, `book_id`, `group_id`, `book_name`, `author_name`, `issue_date`, `active`) VALUES
(26, 11, 'CSE0920293258', 'Introduction to algorithms', 'CORMAN LEISERSON RIVEST STEIN', '2014-02-27', 1),
(23, 6, 'CSE1020', 'Programming with C', 'Schaum', '2014-02-27', 1),
(14, 12, 'CE0920', 'Compilers', 'AHO LAM SETHI ULLMAN', '2014-02-27', 1),
(15, 10, 'CSE1020', 'Formal language and automata', 'Peter linz', '2014-02-27', 1),
(13, 7, 'CSE1020', 'Database System Concept ', 'Silberschatz  Korth  Sudarshan', '2014-02-27', 1),
(10, 7, 'CSE0920293258', 'Database System Concept ', 'Silberschatz  Korth  Sudarshan', '2014-02-27', 1),
(21, 4, 'CSE0920293258', 'Civil basic ', 'Ashraful', '2014-02-27', 1),
(20, 7, 'CE0920', 'Database System Concept ', 'Silberschatz  Korth  Sudarshan', '2014-02-27', 1),
(24, 6, 'CE0920', 'Programming with C', 'Schaum', '2014-02-27', 1),
(25, 11, 'CE0920', 'Introduction to algorithms', 'CORMAN LEISERSON RIVEST STEIN', '2014-02-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'CSE'),
(2, 'EEE'),
(3, 'CE'),
(4, 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE IF NOT EXISTS `studentinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` varchar(100) NOT NULL,
  `name1` varchar(200) NOT NULL,
  `regno1` varchar(50) NOT NULL,
  `name2` varchar(200) NOT NULL,
  `regno2` varchar(50) NOT NULL,
  `name3` varchar(200) NOT NULL,
  `regno3` varchar(50) NOT NULL,
  `name4` varchar(200) NOT NULL,
  `regno4` varchar(50) NOT NULL,
  `session` varchar(30) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `active` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `group_id`, `name1`, `regno1`, `name2`, `regno2`, `name3`, `regno3`, `name4`, `regno4`, `session`, `dept`, `email`, `mobile`, `active`) VALUES
(1, 'CSE0920293258', 'Md. Ashraful alam', '2009331520', 'Mizanur rahman', '2009331529', 'Supan ahmed', '2009331532', 'Mubassher ali', '2009331558', '2009-2010', 'CSE', 'ashraful.sec01@gmail.com', '01673712003', 1),
(14, 'CSE1020', 'Md. Ashraful alam', '2009331520', '', '', '', '', '', '', '2010-2011', 'CSE', 'ashraful.sec01@gmail.com', '01673712003', 1),
(15, 'CE0920', 'Md. Ashraful alam', '2009331520', '', '', '', '', '', '', '2009-2010', 'CE', 'ashraful.sec01@gmail.com', '01673712003', 1);
