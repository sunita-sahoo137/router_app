-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2020 at 05:34 PM
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
-- Table structure for table `rest_tokens`
--

CREATE TABLE `rest_tokens` (
  `id` int(11) NOT NULL,
  `api_key` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rest_tokens`
--

INSERT INTO `rest_tokens` (`id`, `api_key`) VALUES
(1, 'c!sko_router');

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
(1, 'testsap12345678961', 'e6.example.com', '192.168.43.143', '00:1B:44:11:2A:Bc', 'inactive'),
(2, 'testsap12345678968', 'hi.example.com', '192.168.43.142', '00:1B:44:11:3A:B6', 'inactive'),
(10, 'testsap12345678963', 'kn.example.com', '192.168.43.141', '00:1B:44:11:3A:B9', 'active'),
(11, 'testsap12345678932', 'e1.example.com', '123.76.21.2', '00:1B:44:11:3A:A9', 'active'),
(12, 'testsap12345678965', 'e2.example.com', '192.168.43.146', '00:1B:44:11:3A:A4', 'active'),
(13, 'testsap12345678943', 'e3.example.com', '127.98.87.2', '00:1B:44:11:3A:B2', 'active'),
(14, 'a65767899721ba1c78', 'adf0379023ee90', '83.78.12.33', '6a:d8:8e:ba:d2:ca', 'active'),
(15, '2351ecd662329806fx', '13af036b486cfx', '30.41.178.148', '35:78:b7:43:2c:19', 'inactive'),
(16, 'f7536a4be469f3860d', 'ed99a615b87a57', '64.211.203.121', 'd0:4c:b9:04:34:8e', 'active'),
(17, '1c42cdca3a365a84e6', 'c56ceb687f1f08', '27.123.94.3', 'c9:f0:7c:c5:87:d0', 'inactive'),
(18, '562035785388eabdcf', '09c05861865163', '16.113.0.204', '5a:b3:99:d8:13:8a', 'active'),
(19, 'eed7e11a6e3f37092c', '4f81e667bedbe7', '28.180.210.23', '63:09:33:8f:38:2c', 'inactive'),
(20, '38cd3735b20b410b00', '4c0fc7b89dee7c', '79.162.53.130', '58:c4:ff:b6:87:a2', 'active'),
(21, 'bbb91ff792e9442655', 'be4996311bf0d5', '83.31.242.249', 'ec:e5:64:50:be:62', 'active'),
(22, 'eba2aab79a145f8874', '7700af2d89d1c1', '42.66.161.205', '47:8c:02:46:2f:bb', 'active'),
(23, 'd2660e8603cb053db5', 'f80b3cf27198df', '122.187.221.74', '1a:e3:8d:fc:a1:27', 'inactive'),
(24, 'd01f805fc1d69ac617', 'c36a306175f6e9', '54.246.20.199', '4d:d8:06:31:5d:84', 'active'),
(25, '77ee6bf833590828a9', '5e9ba36e392692', '52.112.206.247', '67:3e:81:c3:e0:c3', 'active'),
(26, 'da0a787b3bf3e2ab45', '944bec2223c11c', '93.209.248.99', '21:c9:f4:b6:38:07', 'active'),
(27, 'faa3c7c50543f20e92', 'a4160f306ef2a0', '55.14.194.236', 'e2:fc:0a:e3:08:89', 'active'),
(28, '5836003d090d6a26bc', '5a357120f40e97', '45.38.200.47', '3d:0a:60:a2:87:64', 'active'),
(29, '141c69c19947710061', '3bd16b7e9533dd', '118.64.21.98', 'e7:e1:23:ca:99:63', 'inactive'),
(30, 'cf636f4d745d823b19', 'c8e3fde4a6a96f', '113.83.214.34', 'f3:72:bd:af:7b:fd', 'active'),
(31, 'acb614a422e7e08ae0', '3ef8465507fbe7', '85.166.76.170', 'eb:44:cc:12:59:72', 'active'),
(32, 'dcea81b52ca62c3af0', '8abb07165708e0', '14.189.100.6', 'c5:aa:2b:20:3a:32', 'active'),
(33, 'e35076ba31e47306ac', 'bb5ce39cf4eedb', '35.37.50.240', '24:1f:bf:9f:b3:88', 'active'),
(34, '97fe9a8e3aca9062d9', '3afd26f9ce884d', '22.147.99.16', '08:36:cc:93:88:9b', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rest_tokens`
--
ALTER TABLE `rest_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `api_key` (`api_key`),
  ADD KEY `api_key_2` (`api_key`);

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
-- AUTO_INCREMENT for table `rest_tokens`
--
ALTER TABLE `rest_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `routers`
--
ALTER TABLE `routers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
