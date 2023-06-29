-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2021 at 06:38 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `a_id` int(5) NOT NULL AUTO_INCREMENT,
  `a_email` varchar(40) NOT NULL,
  `a_password` varchar(10) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `a_email`, `a_password`) VALUES
(1, 'mitu123@gmail.com', '12345'),
(2, 'piyu12@gmail.com', '09876');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` int(3) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(10) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_mno` varchar(10) NOT NULL,
  `c_message` varchar(30) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_mno`, `c_message`) VALUES
(2, 'piyu', 'piyu90@gmail.com', '9987867898', 'hiii'),
(3, 'dhara', 'dhara123@gmail.com', '9987656434', 'jhghjghj'),
(4, 'mital', 'mitu123@gmail.com', '9987656434', 'hii'),
(5, 'kajal', 'k@gmail.com', '992513764', 'hhfhbdbdf');

-- --------------------------------------------------------

--
-- Table structure for table `langunge`
--

DROP TABLE IF EXISTS `langunge`;
CREATE TABLE IF NOT EXISTS `langunge` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_name` varchar(30) NOT NULL,
  `l_logo` varchar(50) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `langunge`
--

INSERT INTO `langunge` (`l_id`, `l_name`, `l_logo`) VALUES
(44, 'cpp', 'cpplogo.png'),
(45, 'php', 'phplogo.png'),
(46, 'php', 'phplogo.png'),
(47, 'cpp', 'cpplogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(3) NOT NULL AUTO_INCREMENT,
  `l_id` int(3) NOT NULL,
  `q_name` varchar(120) NOT NULL,
  `q_opt1` varchar(40) NOT NULL,
  `q_opt2` varchar(40) NOT NULL,
  `q_opt3` varchar(40) NOT NULL,
  `q_opt4` varchar(40) NOT NULL,
  `q_ans` varchar(40) NOT NULL,
  PRIMARY KEY (`q_id`),
  KEY `l_id` (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `l_id`, `q_name`, `q_opt1`, `q_opt2`, `q_opt3`, `q_opt4`, `q_ans`) VALUES
(1, 1, 'PHP stands for...', 'hypertext preprocessor', 'pretext hypertext preprocessor', 'personal home processor', 'none of the above', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fname`, `lname`, `gender`, `mobileno`, `emailid`, `password`) VALUES
(28, 'kajal', 'jethva', 'female', '9925173964', 'k@gmail.com', '12345678'),
(25, 'mansi', 'maheta', 'female', '6787656789', 'mansi12@gmail.com', '6789'),
(22, 'raj', 'patel', 'male', '9987656787', 'raj1234@gmail.com', '56789'),
(24, 'mahesh', 'patel', 'male', '9987656787', 'mahesh@gmail.com', '12345'),
(27, 'dixita', 'mer', 'female', '9601584673', 'dixu@gmail.com', 'dixu345'),
(29, 'radink', 'erre', 'female', '9925173964', 'k@gmail.com', '123456');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `question` (`q_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
