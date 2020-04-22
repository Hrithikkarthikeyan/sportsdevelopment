-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2019 at 09:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `net`
--

CREATE TABLE `net` (
  `name` varchar(50) NOT NULL,
  `accno` int(50) NOT NULL,
  `fn` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `g` varchar(10) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `proof` varchar(30) NOT NULL,
  `ms` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `eq` varchar(20) NOT NULL,
  `c` varchar(5) NOT NULL,
  `bal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `net`
--

INSERT INTO `net` (`name`, `accno`, `fn`, `dob`, `g`, `bank`, `pwd`, `type`, `proof`, `ms`, `address`, `eq`, `c`, `bal`) VALUES
('Our India sp', 0, 'father', '2018-01-30', 'MALE', 'SBI', '12345', 'SAVINGS', 'adhaar card, PAN', 'married', '1234', 'phd', 'yes', '10000'),
('hrithik', 0, 'spa', '2019-04-01', 'FEMALE', 'SBI', '12345', 'SAVINGS', 'voter ID', 'married', '12345', 'B.tech', 'yes', '20000'),
('karthikeyan', 2060123456, 'RAJA', '2001-12-12', 'MALE', 'SBI', '123', 'CURRENT', 'adhaar card, PAN, ration card,', 'unmarried', 'fwe5r6ft7gy8', 'B.tech', 'no', '400');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
