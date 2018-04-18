-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2018 at 12:17 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `cr`
--

CREATE TABLE `cr` (
  `id` int(5) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `count` int(10) DEFAULT NULL,
  `secid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`id`, `name`, `count`, `secid`) VALUES
(1, 'Iron Man', 22, '1'),
(2, 'SpiderMan', 6, '1'),
(3, 'Black Panther Man', 3, '1'),
(4, 'Hawkeye Man', 1, '1'),
(5, 'Dr.Strange', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(25) NOT NULL,
  `unm` varchar(255) DEFAULT NULL,
  `psw` varchar(255) DEFAULT NULL,
  `voted` int(25) NOT NULL DEFAULT '0',
  `secid` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `unm`, `psw`, `voted`, `secid`) VALUES
(1, 'dev', 'hello', 1, 1),
(2, 'minz', 'minzking', 1, 1),
(3, 'sid', 'sid1', 1, 1),
(4, 'shub', 'shub', 1, 1),
(5, 'ram', 'ram', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sec`
--

CREATE TABLE `sec` (
  `id` int(25) NOT NULL,
  `sec` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec`
--

INSERT INTO `sec` (`id`, `sec`) VALUES
(1, 1),
(2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cr`
--
ALTER TABLE `cr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec`
--
ALTER TABLE `sec`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
