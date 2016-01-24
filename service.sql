-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2016 at 09:22 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('270d83dc2df468b09ff2d8b0e42621b4', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453572897, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"5";s:8:"username";s:12:"architkansal";s:6:"status";s:1:"1";}'),
('35a9661abdf5f888e72b72f03fd02961', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453579262, ''),
('4021c7119cfb02aa48d293b412fad043', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453575920, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"5";s:8:"username";s:12:"architkansal";s:6:"status";s:1:"1";}'),
('69a4c4197b26b67a0534b40940590cef', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453576700, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"5";s:8:"username";s:12:"architkansal";s:6:"status";s:1:"1";}'),
('a371e4ac2b6cb232f524a91dcc4ea407', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453573826, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"5";s:8:"username";s:12:"architkansal";s:6:"status";s:1:"1";}'),
('a789fafdf2c875af4ffd9be298897438', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453572510, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"5";s:8:"username";s:12:"architkansal";s:6:"status";s:1:"1";}'),
('b3211743ed7e9d4a2dfcfda07e92e52d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453572570, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"5";s:8:"username";s:12:"architkansal";s:6:"status";s:1:"1";}'),
('d86a1bcfb0019a6ce5b55731a30a029b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453572367, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"5";s:8:"username";s:12:"architkansal";s:6:"status";s:1:"1";}'),
('d93895295ec25406e8429014523f94fb', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453572822, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"5";s:8:"username";s:12:"architkansal";s:6:"status";s:1:"1";}');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `userid` bigint(6) NOT NULL,
  `cid` bigint(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hcdid` int(6) NOT NULL,
  `preftime` varchar(10) DEFAULT NULL,
  `room` varchar(6) NOT NULL,
  `hostel` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `hcdid` int(6) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `details` varchar(300) NOT NULL,
  `cid` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hdepartment`
--

CREATE TABLE `hdepartment` (
  `hcdid` int(6) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `inc_name` varchar(50) NOT NULL,
  `inc_contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` bigint(6) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `course` varchar(10) NOT NULL,
  `year` int(2) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `user_group_id` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `password`, `name`, `course`, `year`, `contact`, `user_group_id`) VALUES
(811411, 'rajiv', 'Rahul', 'btech', 2, 9177330341, 0),
(811437, '811437', 'akash', 'btech', 2, 9866015990, 0),
(811442, 'amrita', 'Archit Kansal', 'B.Tech', 2, 9908341446, 1),
(811443, 'amrita123', 'Prasad Patil ', 'B.Tech', 2, 7387901034, 0),
(831414, '831414', 'Manjunath', 'B tech', 2, 8143679675, 0),
(851415, '123654', 'Sailesh Satpathy', 'B.Tech', 2, 8374649414, 0),
(951425, 'priyam', 'priyam khandelwal', 'B.Tech', 2, 9024538969, 0),
(951438, '12345', 'Sushrut Kasture', 'B.Tech', 2, 9403039900, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(5, 'architkansal', '$P$BoeZeGt5i6ri/heFUfnq9cmPg5PpMt.', 'karchit@student.nitw.ac.in', 1, 0, NULL, NULL, NULL, NULL, 'ad116a1859d1bdac8db34b44bd030f5e', '127.0.0.1', '2016-01-23 21:00:24', '2016-01-22 16:02:32', '2016-01-23 20:00:24'),
(10, 'prasad', '$P$BEnlRzZyrUNZATwNcT01/oeroq1jaf.', 'patilprasad263@gmail.com', 1, 0, NULL, NULL, NULL, NULL, '9e173f4aed7b6557c18e1641ff828cd3', '::1', '2016-01-22 18:26:07', '2016-01-22 16:32:46', '2016-01-22 17:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `user_group_id` int(5) NOT NULL DEFAULT '0',
  `user_tag` varchar(20) NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`user_group_id`, `user_tag`) VALUES
(0, 'student'),
(1, 'chief_warden');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `hdepartment`
--
ALTER TABLE `hdepartment`
  ADD PRIMARY KEY (`hcdid`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`user_group_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `cid` bigint(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
