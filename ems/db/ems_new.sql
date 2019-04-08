-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 08:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ems_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pwd` varchar(25) NOT NULL,
  `e_id` int(20) NOT NULL,
  `contact no` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pwd`, `e_id`, `contact no`) VALUES
(1, 'admin', 'a@g.com', 'admin', 1, 932894),
(2, 'Harshit', 'hkt@gmail.com', 'hkt', 2, 2147483647),
(3, 'Pihu', 'pihu@gmail.com', 'hp', 3, 2147483647),
(4, 'Rk', 'rk@gmail.com', 'rk', 4, 8347);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`e_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `name`, `type`, `dept`) VALUES
(1, 'robo race', 'tech', 'mech'),
(2, 'cricket', 'non tech', 'mech'),
(3, 'Code War In Java', 'tech', 'comp'),
(4, 'race', 'tech', 'mech');

-- --------------------------------------------------------

--
-- Table structure for table `noti`
--

CREATE TABLE IF NOT EXISTS `noti` (
`n_id` int(5) NOT NULL,
  `e_id` int(5) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noti`
--

INSERT INTO `noti` (`n_id`, `e_id`, `msg`) VALUES
(1, 1, 'Time Has been Changed'),
(2, 2, 'get Your certificate from thissss'),
(3, 3, 'You can Bring Your Lappy wid u :)'),
(4, 1, 'yoyo'),
(5, 1, 'Hello Friendds');

-- --------------------------------------------------------

--
-- Table structure for table `register_details`
--

CREATE TABLE IF NOT EXISTS `register_details` (
`id` int(5) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `e_id` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_details`
--

INSERT INTO `register_details` (`id`, `fname`, `lname`, `e_id`, `gender`, `email`, `contact`) VALUES
(1, 'pihu', 'trivedi', 3, '', '', 0),
(2, 'Hp', 'Trivedi', 1, 'Male', 'h@gmail.com', 9949621),
(3, 'Harshit', '', 0, '', '', 0),
(4, 'Harshit', 'Trivedi', 0, '', '', 0),
(5, 'Harshit', 'Trivedi', 0, '', '', 0),
(6, 'Savan', 'Vaghasiya', 2, 'Male', 'hkt@gmail.com', 932896665),
(7, '', '', 0, 'Male', '', 0),
(8, 'dsaadas', 'Vaghasiya', 1, 'Male', 'hkt@gmail.com', 932896665),
(9, 'Senta', 'Ranjeet', 2, 'Male', 's@g.com', 787878),
(10, 'ss', 'qq', 3, 'Male', 'q@g.com', 999886);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `noti`
--
ALTER TABLE `noti`
 ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `register_details`
--
ALTER TABLE `register_details`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `e_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `noti`
--
ALTER TABLE `noti`
MODIFY `n_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `register_details`
--
ALTER TABLE `register_details`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
