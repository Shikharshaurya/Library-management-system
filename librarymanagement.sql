-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2014 at 09:44 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `backup_info`
--

INSERT INTO `backup_info` (`id`, `sql_file_name`, `date_taken`, `status`) VALUES
(1, 'librarymanagement_1393789609', 1393789609, 0),
(2, 'librarymanagement_1393790325', 1393790325, 0),
(3, 'librarymanagement_1393790929', 1393790929, 0),
(4, 'librarymanagement_1393791353', 1393791353, 0),
(5, 'librarymanagement_1393791414', 1393791414, 0),
(6, 'librarymanagement_1393815614', 1393815614, 0),
(7, 'librarymanagement_1393817634', 1393817634, 0),
(8, 'librarymanagement_1393819507', 1393819507, 0),
(9, 'librarymanagement_1393819563', 1393819563, 0),
(10, 'librarymanagement_1393819689', 1393819689, 0),
(11, 'librarymanagement_1393819777', 1393819777, 0),
(12, 'librarymanagement_1393819850', 1393819850, 0),
(13, 'librarymanagement_1393920185', 1393920185, 0),
(14, 'librarymanagement_1393920397', 1393920397, 0),
(15, 'librarymanagement_1393920407', 1393920407, 0),
(16, 'librarymanagement_1393920620', 1393920620, 0),
(17, 'librarymanagement_1393920673', 1393920673, 0),
(18, 'librarymanagement_1393920914', 1393920914, 0),
(19, 'librarymanagement_1393920958', 1393920958, 0),
(20, 'librarymanagement_1393920984', 1393920984, 0),
(21, 'librarymanagement_1393921107', 1393921107, 0),
(22, 'librarymanagement_1393921289', 1393921289, 0),
(23, 'librarymanagement_1393921326', 1393921326, 0),
(24, 'librarymanagement_1393921465', 1393921465, 0),
(25, 'librarymanagement_1393921650', 1393921650, 0),
(26, 'librarymanagement_1393921812', 1393921812, 0),
(34, 'librarymanagement_1394631227', 1394631227, 0),
(28, 'librarymanagement_1393924298', 1393924298, 0),
(29, 'librarymanagement_1393924331', 1393924331, 0),
(30, 'librarymanagement_1393924438', 1393924438, 0),
(31, 'librarymanagement_1393924493', 1393924493, 0),
(32, 'librarymanagement_1393924597', 1393924597, 0),
(33, 'librarymanagement_1393924808', 1393924808, 0),
(35, 'librarymanagement_1394631272', 1394631272, 0),
(36, 'librarymanagement_1394660504', 1394660504, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `bookself`
--

INSERT INTO `bookself` (`id`, `dept`, `book_name`, `author_name`, `quantity`, `active`) VALUES
(1, 'CSE', 'A Text Book of Electrical Technology', 'BL Theraja & Ak Theraja', '10', 1),
(2, 'CSE', '3D''s Max 9 Essentials ', 'Autodesk', '16', 1),
(3, 'CSE', 'Adobe Web design & publishing', 'Unleashed', '15', 1),
(4, 'CSE', 'An introduction to Computer Networking', 'K.C.Mansfield', '15', 1),
(5, 'CSE', 'Analog electronics', 'Crecraft and Pergely', '10', 1),
(6, 'CSE', 'Analysis and Design of information system', 'V.Rajarmen', '20', 1),
(7, 'CSE', 'Antenna Toolkit', 'Carr', '5', 1),
(8, 'CSE', 'Assembly Language for Intel Based Computer', 'Irvine', '15', 1),
(9, 'CSE', 'Basic Electronic', 'B.L. Theraja', '15', 1),
(10, 'CSE', 'Basic RadioPrinciples and Technology', 'Poob', '5', 1),
(11, 'CSE', 'Botnets The killer Web App', 'Schiller', '16', 1),
(12, 'CSE', 'Business Data Communications', 'Stallings', '20', 1),
(13, 'CSE', 'Computer Architecture and Organization', 'John P.Hayes', '20', 1),
(14, 'CSE', 'Computer fundamentals', 'Dr. Lutfar Rahman, Dr. Alamgir Hossain', '20', 1),
(15, 'CSE', 'Computer Networks', 'Tanenbaum', '15', 1),
(16, 'CSE', 'Computer Networks : A System Approach, 4/e', 'Peterson', '15', 1),
(17, 'CSE', 'Computer Organization', 'Patterson & Hennessey', '15', 1),
(18, 'CSE', 'Computer Vission And Applications : Concise Edtion (with CD)', 'Jahne', '10', 1),
(19, 'CSE', 'Data & Computer Communication', 'William Stallings', '20', 1),
(20, 'CSE', 'Data Base Modeling and Design', 'Teorey', '15', 1),
(21, 'CSE', 'Data Structure', 'Seymour Lipschatz Schaum Series', '15', 1),
(22, 'CSE', 'Design of UNIX Operating System Microcomputers', 'Morrice J. Back', '15', 1),
(23, 'CSE', 'Digital and Analogue Communication System', 'Couch', '15', 1),
(24, 'CSE', 'Digital Measurment Techniques', 'T.S. Rathore', '15', 1),
(25, 'CSE', 'Digital Principles & Applications', 'Malvino', '15', 1),
(26, 'CSE', 'Discrete math and its Application', 'Keneth, H. Rosen', '15', 1),
(27, 'CSE', 'Electric Circuit', 'Bell', '15', 1),
(28, 'CSE', ' Electrical Devices & Circuit theory', 'Jacob Millman, C. Halkias', '15', 1),
(29, 'CSE', 'Electrical Technology', 'B.L. Theraja', '10', 1),
(30, 'CSE', 'Electronic Devices & Circuit Theory', 'Bolyested', '20', 1),
(31, 'CSE', 'Electronic Principles', 'Malvino', '15', 1),
(32, 'CSE', 'Electronics Circuits and Systems', 'Bishop', '4', 1),
(33, 'CSE', 'Electronics Devices and Circuits', 'Bogart', '15', 1),
(34, 'CSE', 'Electronics Devices and Circuits', 'G.K Methal', '15', 1),
(35, 'CSE', 'Elements of Electrical Engineering', 'Dargan C.R', '20', 1),
(36, 'CSE', 'Engineering Communication System', 'N Balam', '3', 1),
(37, 'CSE', 'Fundamental of Power Electronics 2000/200044/46', 'S.R. Reddy', '5', 1),
(38, 'CSE', 'Industrial Electronics Applications', 'Kissell', '15', 1),
(39, 'CSE', 'Internetworking with TCM/IP-', 'Comer. (All Volume)', '10', 1),
(40, 'CSE', 'Introductions to Digital Computer Principles', 'Malvino', '15', 1),
(41, 'CSE', 'Introductions to Digital  System', 'Crisp', '5', 1),
(42, 'CSE', 'Introductions to Fiber Optics 2E', 'Crisp', '5', 1),
(43, 'CSE', 'Introductions to Microprocessor', 'Crisp', '5', 1),
(44, 'CSE', 'Joe Celko''s Analytics and OLAP in SQL', 'Celko', '15', 1),
(45, 'CSE', 'Knowledge Management in Theory and practice', 'Dalkir', '15', 1),
(46, 'CSE', 'Learn Yourself C++', 'Herber Schield', '20', 1),
(47, 'CSE', 'Learning Computer programming', 'Mary Farrell', '20', 1),
(48, 'CSE', 'Lineer Integrated Circuits', 'Carr, Joe', '5', 1),
(49, 'CSE', 'Macromedia web Publishing', 'Unleashed', '20', 1),
(50, 'CSE', 'Management Information System', 'A.K. Gupta', '20', 1),
(51, 'CSE', 'Mastering HTML-IV', 'LV', '20', 1),
(52, 'CSE', 'Microcomputer and Interfacing Programing and Hardware', 'Douglas V. Hall', '20', 1),
(53, 'CSE', 'Microcomputer Based system (The 8086/8088 Family)', 'Ya Cheng Liu Glemn A. Gibson', '9', 1),
(54, 'CSE', 'Microcontroller Based system Design', 'Manoharan', '20', 1),
(55, 'CSE', 'Microprocessor (Theory and applications Intel and Motorola)', 'Rafiquzzaman', '15', 1),
(56, 'CSE', 'Microprocessor and Interfacing Programming & Hardware', 'Douglas V. Hall', '15', 1),
(57, 'CSE', 'Microprocessor Data Hand Book', 'Intel', '15', 1),
(58, 'CSE', 'Microprocessor, Microcomputer', 'Uffenbeck', '15', 1),
(59, 'CSE', 'Microwave Communication Technology', 'Carr, Joseph', '5', 1),
(60, 'CSE', 'Modern Operating Systems', 'Andr S. Tanenbaum', '20', 1),
(61, 'CSE', 'Ms SQL server 7', 'Unleashed', '20', 1),
(62, 'CSE', 'My SQl server Programming', 'Unleashed', '10', 1),
(63, 'CSE', 'Multicast Communication : Protocols and Applications', 'wittman', '15', 1),
(64, 'CSE', 'Multimedia in Practice', 'Judith Jeffoate', '15', 1),
(65, 'CSE', 'Multimedia, Sound & Video', 'Jose Lozano', '3', 1),
(66, 'CSE', 'Networking essential', 'Unleashed', '15', 1),
(67, 'CSE', 'Object Orented Analysis and Design Using UMI -2nd Edn', 'Srimathi et. Al', '15', 1),
(68, 'CSE', 'Object Oriented Programming With C++', 'BalaguroSami', '15', 1),
(69, 'CSE', 'Op Amp and Linear Integrated Circuit', 'Gayakawad', '15', 1),
(70, 'CSE', 'Operating System', 'Tanenbaum', '15', 1),
(71, 'CSE', 'Operating System and Systems Programming 2nd Fdn', 'Balakrishna Prasad', '20', 1),
(72, 'CSE', 'Operating System Concepts', 'Silberschatggaivin', '15', 1),
(73, 'CSE', 'Optical Communications : Components and System-2000/73344/46', 'J.H. Franz', '5', 1),
(74, 'CSE', 'Optical Networks', 'Black', '5', 1),
(75, 'CSE', 'Oracle-9i', 'Complete Reference. Oracle Press', '10', 1),
(76, 'CSE', 'PHP Professional', 'Wrox', '15', 1),
(77, 'CSE', 'Power Electronics', 'Muhammad H. Rashid', '15', 1),
(78, 'CSE', 'Principles of Electronic', 'V.K Meheta', '15', 1),
(79, 'CSE', 'Probability & Statistics : With Integrated Software Routines', 'Deep', '10', 1),
(80, 'CSE', 'Programming in ANSI-C', 'E. balaqurusamy', '15', 1),
(81, 'CSE', 'Project in Networking', 'Hari. Et. Al', '15', 1),
(82, 'CSE', 'Project on Java 2', 'Xaiver', '15', 1),
(83, 'CSE', 'Programming with Java 2', 'Xaiver', '15', 1),
(84, 'CSE', 'Programming in C', 'Kernighan, Richie', '15', 1),
(85, 'CSE', 'Programming Language Pragmatics, 2/e', 'Scott', '15', 1),
(86, 'CSE', 'Programming Logic Controllers', 'Bolton', '15', 1),
(87, 'CSE', 'Programming the 80286, 80386, 80486', 'Barray B. Brey', '14', 1),
(88, 'CSE', 'Frequency Transistor principals and --- Application', 'Dye Norman', '5', 1),
(89, 'CSE', 'RF Circuits Design', 'Bowick Christopher', '5', 1),
(90, 'CSE', 'RF Components and Circuits', 'Carr', '5', 1),
(91, 'CSE', 'Sattelite Communication', 'Mitra', '15', 1),
(92, 'CSE', 'Secure Your network for free', 'Seagren', '15', 1),
(93, 'CSE', 'Short Range Wireless Network System for free', 'Bensky, Alan', '5', 1),
(94, 'CSE', 'Fundamental of RF System Design and application', 'Ibbalson, Z', '5', 1),
(95, 'CSE', 'Signal Transmission', 'Sinha', '10', 1),
(96, 'CSE', 'Software Engineering', 'Sommervaille', '5', 1),
(97, 'CSE', 'Software Engineering (5th Edition)', 'Roger S. Pressman', '15', 1),
(98, 'CSE', 'System Analysis & Design', 'Elias M. Awad', '15', 1),
(99, 'CSE', 'System Software', 'Shahlini', '15', 1),
(100, 'CSE', 'The Intel Microprocessor', 'Barry. B. Brey', '15', 1),
(101, 'CSE', 'The Power Oracle 9i', 'Rajeev A. Parida, Vinod Sharma', '15', 1),
(102, 'CSE', 'The Power Oracle 9i', 'Rajeev A. Parida', '15', 1),
(103, 'CSE', 'Theory and Problems of Discrete mathematics', 'Seymour Lipschatz', '15', 1),
(104, 'CSE', 'Troubleshooting & Maintenace', 'Mairk Minasi', '10', 1),
(105, 'CSE', 'Turbo C/C++ Complete Reference', 'Herbert Schidt', '10', 1),
(106, 'CSE', 'Understand Amplifiers', 'Bishop', '4', 1),
(107, 'CSE', 'Understand electronic Filters', 'Bishop', '5', 1),
(108, 'CSE', 'Understanding Telephone Electronic 2E', 'Bigelow/Can/Winder', '5', 1),
(109, 'CSE', 'Upgrading and Repairing Pc', 'Muller', '10', 1),
(110, 'CSE', 'Value Driven IT Managment : Commercializing the IT function', 'Aitken', '15', 1),
(111, 'CSE', 'Visual Basic 6 How to Program', 'Deitel', '15', 1),
(112, 'CSE', 'Wave Shaping & Digital Circuits', 'Dr. K.K. Aggarwal', '15', 1),
(113, 'CSE', 'XML', 'Wrox', '15', 1),
(114, 'EEE', 'Antenna Theory and Web propagation -2n edition', 'Sundarranjan', '10', 1),
(115, 'EEE', 'Application of Nonlinear Fiber Optics', 'Agrawal', '15', 1),
(116, 'EEE', 'Biomedical Digital Signal Processing', 'Michael Edited - prentice Hall India', '20', 1),
(117, 'EEE', 'Biomedical Instrumentation and measurement', 'Gromwell, Weibell, Pfeiffer', '20', 1),
(118, 'EEE', 'Circuits, Signals & System for Bdioengineers- A MATLAB- based introduction', 'Semmlow', '20', 1),
(119, 'CE', 'A Course in highway engineering', 'Bindra', '15', 1),
(120, 'CE', 'A Text Book of Railway Engineering', 'Aroza, S. P', '15', 1),
(121, 'CE', 'Adapting Building and Cities for Climate Change', 'Roaf', '3', 1),
(122, 'CE', 'Advanced Engineering Matematics, 2/e', 'Greenberg', '15', 1),
(124, 'CE', 'Advanced Structural Dynamics', 'Selven V.K.M', '20', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `book_issue`
--


-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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
