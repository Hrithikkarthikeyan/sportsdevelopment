-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2019 at 10:04 PM
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
-- Database: `bmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmijan`
--

CREATE TABLE `bmijan` (
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `ht` varchar(20) NOT NULL,
  `wt` varchar(20) NOT NULL,
  `bg` varchar(20) NOT NULL,
  `hob` varchar(50) NOT NULL,
  `sprt` varchar(50) NOT NULL,
  `mark` varchar(50) NOT NULL,
  `vis` varchar(50) NOT NULL,
  `fre` varchar(50) NOT NULL,
  `txt` varchar(50) NOT NULL,
  `dis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmijan`
--

INSERT INTO `bmijan` (`name`, `age`, `gender`, `ht`, `wt`, `bg`, `hob`, `sprt`, `mark`, `vis`, `fre`, `txt`, `dis`) VALUES
('k ', ' ', 'female', ' ', ' ', ' ', ' ', 'cricket', ' ', ' ', ' ', ' ', 'yes'),
('karthikeyan', '18', 'male', ' 1.7', ' 60', ' ab', ' reading', 'kho kho', ' a mole on hand', ' 12', ' 22', ' good for health', ''),
('hrithik', ' 17', 'male', ' 1.7', ' 60', ' ab', ' reading', 'volley ball', ' a mole on hand', ' 12', ' 22', ' health is wealth', 'on, on'),
('hrithik', ' 17', 'male', ' 1.7', ' 60', ' ab', ' reading', 'volley ball', ' a mole on hand', ' 12', ' 22', ' health is wealth', 'on, on'),
('hrithik', ' 17', 'male', ' 1.7', ' 60', ' ab', ' reading', 'volley ball', ' a mole on hand', ' 12', ' 22', ' health is wealth', 'on, on'),
('hrithik', ' 17', 'male', ' 1.7', ' 60', ' ab', ' reading', 'volley ball', ' a mole on hand', ' 12', ' 22', ' health is wealth', 'on, on'),
('hrithik', ' 17', 'male', ' 1.7', ' 60', ' ab', ' reading', 'volley ball', ' a mole on hand', ' 12', ' 22', ' health is wealth', 'on, on'),
('hrithik', ' 17', 'male', ' 1.7', ' 60', ' ab', ' reading', 'volley ball', ' a mole on hand', ' 12', ' 22', ' health is wealth', 'on, on'),
('hrithik', ' 17', 'male', ' 1.7', ' 60', ' ab', ' reading', 'volley ball', ' a mole on hand', ' 12', ' 22', ' health is wealth', 'on, on'),
('hrithik', ' 17', 'male', ' 1.7', ' 60', ' ab', ' reading', 'volley ball', ' a mole on hand', ' 12', ' 22', ' health is wealth', 'on, on'),
('hrithik', ' 17', 'male', ' 1.7', ' 60', ' ab', ' reading', 'volley ball', ' a mole on hand', ' 12', ' 22', ' health is wealth', 'on, on'),
('hrithik', ' 17', 'male', ' 1.7', ' 60', ' ab', ' reading', 'volley ball', ' a mole on hand', ' 12', ' 22', ' health is wealth', 'on, on');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
