-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 11:06 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--
CREATE DATABASE IF NOT EXISTS `tutorfinder` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
USE `tutorfinder`;

CREATE TABLE `admin_info` (
  `iddddd` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`iddddd`, `username`, `password`, `email`, `id`) VALUES
(1, 'mahbub', '123', 'ahmed@gmail.com', '01521109422');

-- --------------------------------------------------------

--
-- Table structure for table `apply_g_post`
--

CREATE TABLE `apply_g_post` (
  `post_id` int(10) NOT NULL,
  `g_id` varchar(15) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  `post_separate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;



-- --------------------------------------------------------

--
-- Table structure for table `guardian_info`
--

CREATE TABLE `guardian_info` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;



-- --------------------------------------------------------

--
-- Table structure for table `guardian_users`
--

CREATE TABLE `guardian_users` (
  `id` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;



-- --------------------------------------------------------

--
-- Table structure for table `g_post`
--

CREATE TABLE `g_post` (
  `post_id` int(10) NOT NULL,
  `g_id` varchar(15) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;


-- --------------------------------------------------------

--
-- Table structure for table `g_post_temp`
--

CREATE TABLE `g_post_temp` (
  `post_id` int(10) NOT NULL,
  `g_id` varchar(15) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `g_post_temp`
--

INSERT INTO `g_post_temp` (`post_id`, `g_id`, `subjects`, `medium`, `salary`, `divisions`, `address`, `dateTime`) VALUES
(14, '01478963215', 'Math', 'Bangla', 8000, 'Dhaka', 'Sadarghat', '2018-09-04 01:47:30'),
(15, '01478963215', 'Bangla', 'English', 6000, 'Dhaka', 'Kuratoli', '2018-09-04 01:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `g_rating`
--

CREATE TABLE `g_rating` (
  `id` int(5) NOT NULL,
  `rating_value` int(5) NOT NULL,
  `rater_id` varchar(15) NOT NULL,
  `g_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `g_rating`
--

INSERT INTO `g_rating` (`id`, `rating_value`, `rater_id`, `g_id`) VALUES
(3, 3, '01420420520', '01698456325'),
(10, 3, '01352569854', '01698456325'),
(11, 1, '01478963215', '01478963215'),
(12, 3, '017986352141', '01478963215');

-- --------------------------------------------------------

--
-- Table structure for table `request_tutor`
--

CREATE TABLE `request_tutor` (
  `post_id` int(10) NOT NULL,
  `t_id` varchar(15) NOT NULL,
  `g_id` varchar(15) NOT NULL,
  `separate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;



-- --------------------------------------------------------

--
-- Table structure for table `tutor_info`
--

CREATE TABLE `tutor_info` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `institutionname` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;


-- --------------------------------------------------------

--
-- Table structure for table `tutor_post`
--

CREATE TABLE `tutor_post` (
  `post_id` int(10) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_post_temp`
--

CREATE TABLE `tutor_post_temp` (
  `post_id` int(10) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_users`
--

CREATE TABLE `tutor_users` (
  `id` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;



-- --------------------------------------------------------

--
-- Table structure for table `t_rating`
--

CREATE TABLE `t_rating` (
  `id` int(5) NOT NULL,
  `rating_value` int(5) NOT NULL,
  `rater_id` varchar(15) NOT NULL,
  `t_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `t_rating`
--

INSERT INTO `t_rating` (`id`, `rating_value`, `rater_id`, `t_id`) VALUES
(1, 5, '01698456325', '01420420520'),
(2, 1, '017986352141', '017986352141'),
(3, 1, '01714014669', '01714014669');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`iddddd`);

--
-- Indexes for table `apply_g_post`
--
ALTER TABLE `apply_g_post`
  ADD PRIMARY KEY (`post_separate`);

--
-- Indexes for table `guardian_info`
--
ALTER TABLE `guardian_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian_users`
--
ALTER TABLE `guardian_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_post_temp`
--
ALTER TABLE `g_post_temp`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `g_rating`
--
ALTER TABLE `g_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_tutor`
--
ALTER TABLE `request_tutor`
  ADD PRIMARY KEY (`separate`);




--
-- Indexes for table `tutor_info`
--
ALTER TABLE `tutor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_post_temp`
--
ALTER TABLE `tutor_post_temp`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `t_rating`
--
ALTER TABLE `t_rating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `iddddd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apply_g_post`
--
ALTER TABLE `apply_g_post`
  MODIFY `post_separate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guardian_info`
--
ALTER TABLE `guardian_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `g_post_temp`
--
ALTER TABLE `g_post_temp`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `g_rating`
--
ALTER TABLE `g_rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request_tutor`
--
ALTER TABLE `request_tutor`
  MODIFY `separate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



--
-- AUTO_INCREMENT for table `tutor_info`
--
ALTER TABLE `tutor_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tutor_post_temp`
--
ALTER TABLE `tutor_post_temp`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_rating`
--
ALTER TABLE `t_rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
