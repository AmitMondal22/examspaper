-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 06:16 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_p`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(5) NOT NULL,
  `a_name` varchar(500) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'amit mondal', 'test@test.in', 'Amit@7025');

-- --------------------------------------------------------

--
-- Table structure for table `contact_public`
--

CREATE TABLE `contact_public` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(2000) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `institute_table`
--

CREATE TABLE `institute_table` (
  `institute_id` int(10) NOT NULL,
  `institute_name` varchar(500) NOT NULL,
  `institute_type_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institute_table`
--

INSERT INTO `institute_table` (`institute_id`, `institute_name`, `institute_type_id`) VALUES
(1, 'WBBSC', 1),
(2, 'Wbsete', 5);

-- --------------------------------------------------------

--
-- Table structure for table `institute_type_table`
--

CREATE TABLE `institute_type_table` (
  `institute_type_id` int(11) NOT NULL,
  `institute_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institute_type_table`
--

INSERT INTO `institute_type_table` (`institute_type_id`, `institute_type`) VALUES
(1, 'School'),
(2, 'University'),
(3, 'Board'),
(4, 'Collage'),
(5, 'Origination'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `stream_id` int(10) NOT NULL,
  `stream_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`stream_id`, `stream_name`) VALUES
(1, 'Computer science & engineering'),
(2, 'Mechanical'),
(4, 'Math'),
(5, 'Bengala'),
(6, 'englisg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_q_file`
--

CREATE TABLE `sub_q_file` (
  `sq_id` int(50) NOT NULL,
  `subject_name` varchar(500) NOT NULL,
  `q_post_date` varchar(30) NOT NULL,
  `q_file` varchar(100) NOT NULL,
  `institute_id` int(10) NOT NULL,
  `year_id` int(5) NOT NULL,
  `stream_id` int(10) NOT NULL,
  `user_id` int(15) NOT NULL,
  `admin_id` int(5) NOT NULL,
  `publish` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_q_file`
--

INSERT INTO `sub_q_file` (`sq_id`, `subject_name`, `q_post_date`, `q_file`, `institute_id`, `year_id`, `stream_id`, `user_id`, `admin_id`, `publish`) VALUES
(2, 'tygujoltuyigkjm, h', '10-04-21 06:19:25 AM', 'ebfe91b780e8c44282f395358559.pdf', 1, 12, 5, 1, 0, 'deactive'),
(4, 'jhkbl,yufijkm', '10-04-21 07:55:08 PM', 'e5394a5579d3c46313bc24b7bca7.pdf', 1, 9, 2, 0, 1, 'active'),
(5, 'DLD', '11-04-21 06:09:59 AM', '850b8c9b6cf99c071a47fbba4cf2.pdf', 2, 8, 1, 2, 0, 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `user_t`
--

CREATE TABLE `user_t` (
  `user_id` int(15) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(500) NOT NULL,
  `u_gender` varchar(15) NOT NULL,
  `user_agree` varchar(20) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_token` varchar(50) NOT NULL,
  `u_ststus` varchar(20) NOT NULL,
  `u_img` varchar(100) NOT NULL,
  `studied_at` varchar(500) NOT NULL,
  `work_at` varchar(500) NOT NULL,
  `lives_in` varchar(500) NOT NULL,
  `mobile_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_t`
--

INSERT INTO `user_t` (`user_id`, `u_name`, `u_email`, `u_gender`, `user_agree`, `u_password`, `u_token`, `u_ststus`, `u_img`, `studied_at`, `work_at`, `lives_in`, `mobile_no`) VALUES
(1, 'Navendu Maiti', 'maiti7211442001@gmail.com', 'Male', 'on', '$2y$10$YHfnBNnOKwYT7IofXC.fB.8LjvNjf1w49iO52Ewuk0mLW6Uw491tG', '356409', 'activate', '7fc4fb9f07203871e6c2b3643ab3.jpg', '', '', '', 0),
(2, 'Amit mondal', 'mamit7025@gmail.com', 'Male', 'on', '$2y$10$ZGXivPLBfLDkuxzJ6mKcDOUtzLHEhS12eo2Qtwl2FTB4SBJErNkji', '872133', 'activate', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `year_t`
--

CREATE TABLE `year_t` (
  `year_id` int(5) NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year_t`
--

INSERT INTO `year_t` (`year_id`, `year`) VALUES
(1, 2010),
(2, 2011),
(3, 2012),
(4, 2013),
(5, 2014),
(6, 2015),
(7, 2016),
(8, 2017),
(9, 2018),
(10, 2019),
(11, 2020),
(12, 2021);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_public`
--
ALTER TABLE `contact_public`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_table`
--
ALTER TABLE `institute_table`
  ADD PRIMARY KEY (`institute_id`);

--
-- Indexes for table `institute_type_table`
--
ALTER TABLE `institute_type_table`
  ADD PRIMARY KEY (`institute_type_id`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `sub_q_file`
--
ALTER TABLE `sub_q_file`
  ADD PRIMARY KEY (`sq_id`);

--
-- Indexes for table `user_t`
--
ALTER TABLE `user_t`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `year_t`
--
ALTER TABLE `year_t`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_public`
--
ALTER TABLE `contact_public`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institute_table`
--
ALTER TABLE `institute_table`
  MODIFY `institute_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `institute_type_table`
--
ALTER TABLE `institute_type_table`
  MODIFY `institute_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `stream_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_q_file`
--
ALTER TABLE `sub_q_file`
  MODIFY `sq_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_t`
--
ALTER TABLE `user_t`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `year_t`
--
ALTER TABLE `year_t`
  MODIFY `year_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
