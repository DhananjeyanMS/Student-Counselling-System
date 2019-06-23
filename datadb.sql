-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 02:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `college` varchar(100) NOT NULL,
  `cn` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college`, `cn`, `password`) VALUES
('3115', 1, '123'),
('3116', 7, '456');

-- --------------------------------------------------------

--
-- Table structure for table `e3115`
--

CREATE TABLE `e3115` (
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `cutoff` varchar(10) NOT NULL,
  `group` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e3116`
--

CREATE TABLE `e3116` (
  `name` varchar(100) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `total` varchar(100) NOT NULL,
  `cutoff` varchar(10) NOT NULL,
  `group` varchar(10) NOT NULL,
  `gender` varchar(110) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e3116`
--

INSERT INTO `e3116` (`name`, `fname`, `total`, `cutoff`, `group`, `gender`, `mob`, `email`) VALUES
('qwdweq', 'dedfwe', '234', 'dexeq', 'dcd', 'dwf', '13412421', 'dhanan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `name` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`name`, `regno`) VALUES
('', '311516104045'),
('shreya', '311516104045'),
('shreya', '311516104045'),
('dhanan', '311516104007'),
('dhanan', '311516104007'),
('monisha', '24'),
('deeptha', '4007'),
('aishu', '4006'),
('indira', '3008'),
('ragu', '3007'),
('monisha', '4556'),
('pranav', '2510'),
('babu', '1223'),
('ssn_291165', '2542'),
('dhanan', '311516104007'),
('Dhanan', '25345'),
('Dhanan', '5622536');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
