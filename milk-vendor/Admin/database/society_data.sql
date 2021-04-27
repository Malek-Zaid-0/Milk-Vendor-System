-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2020 at 06:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `society_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `complain` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `response` text NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`cid`, `sid`, `user_id`, `complain`, `date`, `response`, `status`) VALUES
(1, 1, 'A-101', 'Water Problem ', '25/02/2020', 'solved by plumber', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `event_name` varchar(500) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `required_equipment` text NOT NULL,
  `permission` varchar(100) NOT NULL,
  `remark` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `sid`, `user_id`, `event_name`, `event_date`, `required_equipment`, `permission`, `remark`) VALUES
(1, 1, 'A-101', 'Marriage', '02/03/2020', 'Society Hall, Mice, Speaker', 'Granted', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `ex_id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `bill_no` varchar(100) NOT NULL,
  `bill_image` varchar(500) NOT NULL,
  PRIMARY KEY (`ex_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`ex_id`, `sid`, `amount`, `date`, `description`, `bill_no`, `bill_image`) VALUES
(1, 1, 5000, '26/02/2020', 'Comon bor repairing', '1002', '1002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_tb`
--

CREATE TABLE IF NOT EXISTS `maintenance_tb` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `m_amount` double NOT NULL,
  `due_day` varchar(100) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `maintenance_tb`
--

INSERT INTO `maintenance_tb` (`m_id`, `sid`, `m_amount`, `due_day`) VALUES
(1, 1, 3000, '10'),
(2, 2, 500, '5');

-- --------------------------------------------------------

--
-- Table structure for table `members_pay`
--

CREATE TABLE IF NOT EXISTS `members_pay` (
  `sid` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `due_amount` double NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_pay`
--

INSERT INTO `members_pay` (`sid`, `user_id`, `due_amount`) VALUES
(2, 'ronak', 0),
(3, 'rahul', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `sid`, `user_id`, `message`, `date`, `status`) VALUES
(1, 1, 'A-101', 'Invitation for Marriage function on date 02/03/2020\r\nvenue : society hall', '26/02/2020', 'send to all members');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE IF NOT EXISTS `notice_board` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `notice` text NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`n_id`, `sid`, `notice`, `date`, `status`) VALUES
(1, 1, 'Meeting on 01/03/2020 in society club', '25/02/2020', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `amount` float DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pay_id`, `sid`, `user_id`, `role`, `date`, `amount`, `type`) VALUES
(1, 1, 'A-101', 'member', '20/02/2020', 2000, 'maintenance'),
(2, 1, 'B-201', 'secretary', '21/02/2020', 1500, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE IF NOT EXISTS `society` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `No_of _Houses` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `contact` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`sid`, `Name`, `No_of _Houses`, `Address`, `contact`) VALUES
(1, 'Sai Darshan', 5, 'Vallabh vidyanagar', '02692-244594'),
(2, 'Akash', 10, 'Anand', '02692-854262');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `role`, `sid`, `contact`, `email`) VALUES
('A-101', 'rahul', '12345', 'secretary ', 1, '9825546781', 'rahul@gmail.com'),
('admin', 'admin', 'admin', 'admin', 0, '+91-9999999999', 'society@gmail.com'),
('B-201', 'ronak', '12345', 'member', 1, '8527419634', 'ronak@gmail.com');
