-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2020 at 06:55 PM
-- Server version: 5.7.31-0ubuntu0.16.04.1
-- PHP Version: 7.2.33-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `router_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `routers`
--

CREATE TABLE `routers` (
  `id` int(11) NOT NULL,
  `sapid` varchar(18) NOT NULL,
  `hostname` varchar(14) NOT NULL,
  `loopback` varchar(15) NOT NULL,
  `mac_address` varchar(17) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routers`
--

INSERT INTO `routers` (`id`, `sapid`, `hostname`, `loopback`, `mac_address`, `status`) VALUES
(1, 'testsap12345678962', 'en.example.com', '192.168.43.143', '00:1B:44:11:3A:B7', 'active'),
(2, 'testsap12345678968', 'hi.example.com', '192.168.43.142', '00:1B:44:11:3A:B6', 'active'),
(10, 'testsap12345678963', 'kn.example.com', '192.168.43.141', '00:1B:44:11:3A:B9', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `routers`
--
ALTER TABLE `routers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hostname_2` (`hostname`),
  ADD UNIQUE KEY `loopback_2` (`loopback`),
  ADD UNIQUE KEY `mac_address_2` (`mac_address`),
  ADD UNIQUE KEY `sapid_2` (`sapid`),
  ADD KEY `sapid` (`sapid`),
  ADD KEY `hostname` (`hostname`),
  ADD KEY `loopback` (`loopback`),
  ADD KEY `mac_address` (`mac_address`),
  ADD KEY `status` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `routers`
--
ALTER TABLE `routers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
