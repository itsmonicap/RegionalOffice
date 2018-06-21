-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2016 at 06:15 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_regionaloffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `circular`
--

CREATE TABLE IF NOT EXISTS `circular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateofposting` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `circular`
--

INSERT INTO `circular` (`id`, `dateofposting`, `subject`, `file`, `type`) VALUES
(1, '2013-12-06', 'ARC Training Manual for Post HSC Diploma course', '1446103851passout-data.pdf', 'application/pdf'),
(2, '2016-11-01', 'Academic Year 2015-16 online EBC Form filling..... Dt.31/12/2015', '1448611106Tansha-1-2948.pdf', 'application/pdf'),
(3, '2016-01-11', 'ARC Training Manual for Post HSC Diploma course    ', '1446103851passout-data.pdf', 'application/pdf');

-- --------------------------------------------------------

--
-- Table structure for table `currentnews`
--

CREATE TABLE IF NOT EXISTS `currentnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateofposting` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `currentnews`
--

INSERT INTO `currentnews` (`id`, `dateofposting`, `subject`, `file`, `type`) VALUES
(1, '2016-01-11', '*****Most - Urgent : Scholarship Inspections for Private Institutes', '1448611106Tansha-1-2948.pdf', 'application/pdf');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE IF NOT EXISTS `diploma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `intake` varchar(30) NOT NULL,
  `url` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`id`, `code`, `number`, `name`, `intake`, `url`) VALUES
(1, '5006', '1-465626741', 'Government Polytechnic, Ahmednagar', '880', 'http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5006');

-- --------------------------------------------------------

--
-- Table structure for table `institutelogin`
--

CREATE TABLE IF NOT EXISTS `institutelogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institute_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `institutelogin`
--

INSERT INTO `institutelogin` (`id`, `institute_name`, `username`, `cpassword`) VALUES
(1, '', 'admin', 'admin123'),
(2, 'xyz', 'xyz', 'xyz123');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateofposting` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `dateofposting`, `subject`, `file`, `type`) VALUES
(1, '2016-01-11', '*****Most - Urgent : Scholarship Inspections for Private Institutes', '1449729881Tansha-2551.pdf', 'application/pdf');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `password`, `cpassword`, `name`, `birthdate`, `gender`) VALUES
(1, 'charu.shirsat22@gmail.com', 'charu12345', 'charu12345', 'Charu Shirsat', '1992-03-22', 'Female'),
(2, 'admin@gmail.com', 'admin123', 'admin123', 'Admin', '22/03/1990', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `updatelink`
--

CREATE TABLE IF NOT EXISTS `updatelink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateofposting` varchar(50) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `updatelink`
--

INSERT INTO `updatelink` (`id`, `dateofposting`, `subject`, `file`, `type`) VALUES
(1, '2016-11-01', '*****Most - Urgent : Scholarship Inspections for Private Institutes  Dt.08/01/2016', '1445860322Diploma.pdf', 'application/pdf'),
(2, '2016-11-01', 'Academic Year 2015-16 online EBC Form filling..... Dt.31/12/2015', '1448969460Tansha-2910.pdf', 'application/pdf');

-- --------------------------------------------------------

--
-- Table structure for table `webform`
--

CREATE TABLE IF NOT EXISTS `webform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cousename` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `admitted` int(11) NOT NULL,
  `ebc` int(11) NOT NULL,
  `passout` int(11) NOT NULL,
  `drops` int(11) NOT NULL,
  `leftout` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webform`
--

INSERT INTO `webform` (`id`, `cousename`, `code`, `admitted`, `ebc`, `passout`, `drops`, `leftout`) VALUES
(1, 'ggg', '323343', 23, 23, 23, 23, 23);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
