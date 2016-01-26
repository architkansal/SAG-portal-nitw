-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2016 at 10:59 AM
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
('62777d6f19c5f5bdbfeab676d34589db', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453802070, ''),
('68e2293692e1823c174d00414013bc98', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453801584, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"5";s:8:"username";s:12:"architkansal";s:6:"status";s:1:"1";}'),
('e97d3c841d86a029e3e2948aeef19775', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36', 1453802312, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"5";s:8:"username";s:12:"architkansal";s:6:"status";s:1:"1";}');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cid` bigint(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hcdid` int(6) NOT NULL,
  `preftime` varchar(10) DEFAULT NULL,
  `room` varchar(6) NOT NULL,
  `hostel` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `tag_id` int(5) NOT NULL,
  `details` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cid`, `user_id`, `date`, `hcdid`, `preftime`, `room`, `hostel`, `mobile`, `status`, `tag_id`, `details`) VALUES
(12, 5, '2016-01-26 09:56:51', 11, '16:04', '8-3-13', '8th Block', 9908324532, 0, 11002, 'x'),
(13, 5, '2016-01-26 09:57:40', 33, '16:04', '8-3-13', '8th Block', 9908324532, 0, 33002, 'hgxj eytzshhhhhhhhhhhhhhhhhhhh 199999999999999999');

-- --------------------------------------------------------

--
-- Table structure for table `hdepartment`
--

CREATE TABLE `hdepartment` (
  `hcdid` int(6) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
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
-- Table structure for table `tag_info`
--

CREATE TABLE `tag_info` (
  `tag_id` int(5) NOT NULL,
  `tag_desc` varchar(30) NOT NULL,
  `tag_count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `contact` varchar(15) COLLATE utf8_bin NOT NULL,
  `user_group_id` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `name`, `contact`, `user_group_id`) VALUES
(5, 'architkansal', '$P$BoeZeGt5i6ri/heFUfnq9cmPg5PpMt.', 'karchit@student.nitw.ac.in', 1, 0, NULL, NULL, NULL, NULL, 'ad116a1859d1bdac8db34b44bd030f5e', '127.0.0.1', '2016-01-26 10:58:35', '2016-01-22 16:02:32', '2016-01-26 09:58:35', '', '0', 1),
(10, 'prasad', '$P$BEnlRzZyrUNZATwNcT01/oeroq1jaf.', 'patilprasad263@gmail.com', 1, 0, NULL, NULL, NULL, NULL, '9e173f4aed7b6557c18e1641ff828cd3', '::1', '2016-01-22 18:26:07', '2016-01-22 16:32:46', '2016-01-22 17:26:07', '', '0', 0),
(11, 'manju', '$P$B/PuvsfQ7gWZPO7pqHwPd2hvTM1vIa1', 'smanjunathg@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '0000-00-00 00:00:00', '2016-01-24 10:32:20', '2016-01-24 09:32:20', '', '0', 0),
(22, '8142344', '$P$BnP77Wt8ik882b4hVo6j1nQ/rFXnnu/', 'arch@gamil.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '0000-00-00 00:00:00', '2016-01-24 15:05:08', '2016-01-24 14:05:08', 'patil dsgn', '', 0),
(23, '984521', '$P$BZ3ASMFBCxMRPBOm8f8/Zx8/vBEmhO0', 'karchyit@student.nitw.ac.in', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '0000-00-00 00:00:00', '2016-01-24 17:33:29', '2016-01-24 16:33:29', 'test', '5454544555', 0),
(24, '851401', '$P$BURpaLI.M4YnyQqoT3oke54voaTZ8K.', 'sanshraydewangan1@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2016-01-24 18:46:12', '2016-01-24 18:43:27', '2016-01-24 17:46:12', 'Sanshray Dewangan', '8143684606', 0),
(25, '811437', '$P$BBbeP.TFGID8JPRj8G91l/365BXsAL0', 'akashcoolahirwar@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2016-01-24 18:51:01', '2016-01-24 18:49:31', '2016-01-24 17:51:01', 'akash', '9866015990', 0);

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
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 11, NULL, NULL),
(2, 12, NULL, NULL),
(3, 13, NULL, NULL),
(4, 14, NULL, NULL),
(5, 15, NULL, NULL),
(6, 16, NULL, NULL),
(7, 17, NULL, NULL),
(8, 18, NULL, NULL),
(9, 19, NULL, NULL),
(10, 20, NULL, NULL),
(11, 21, NULL, NULL),
(12, 22, NULL, NULL),
(13, 23, NULL, NULL),
(14, 24, NULL, NULL),
(15, 25, NULL, NULL);

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
  ADD KEY `cid` (`cid`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `hdepartment`
--
ALTER TABLE `hdepartment`
  ADD PRIMARY KEY (`hcdid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_group_id` (`user_group_id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`user_group_id`),
  ADD KEY `user_group_id` (`user_group_id`),
  ADD KEY `user_group_id_2` (`user_group_id`);

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
  MODIFY `cid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
