-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 10:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelguru`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `coment_content` text NOT NULL,
  `hostel_id` int(10) NOT NULL,
  `comment_by` varchar(150) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `coment_content`, `hostel_id`, `comment_by`, `comment_time`) VALUES
(2, 'This is a second comment ', 1, '9', '2021-05-02 12:20:37'),
(3, 'Hostel is good', 4, '9', '2021-05-02 13:14:38'),
(4, 'This is a hostel', 6, '12', '2021-05-04 23:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `hostel_id` int(8) NOT NULL,
  `hostel_name` varchar(300) NOT NULL,
  `hostel_owner` varchar(250) NOT NULL,
  `hostel_address` varchar(500) NOT NULL,
  `hostel_phone` varchar(15) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `hostel_city` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`hostel_id`, `hostel_name`, `hostel_owner`, `hostel_address`, `hostel_phone`, `category`, `price`, `hostel_city`, `time`, `description`) VALUES
(1, 'The boys Hostel', 'Jawad', 'F-8 Markaz Islamabad', '123456789', 'Male', 15000, 'Islamabad', '2021-05-02 10:29:07', 'This is description of hostel.'),
(2, 'The Rawalpindi Boys hostel', 'john', 'Saddar Near Metro Station', '15978643', 'Male', 14000, 'Rawalpindi', '2021-05-02 10:36:03', 'This is rwp hostel'),
(3, 'Shalimar Girls Hostel', 'kamran', 'F-10 Markaz Islamabad', '15978643', 'Female', 16000, 'Islamabad', '2021-05-02 10:40:29', 'This  is for girls.'),
(4, 'The Girls Hostel', 'awasi', 'Satellite town ', '15978643', 'Female', 14000, 'Rawalpindi', '2021-05-02 10:43:16', 'This is for girls'),
(5, 'Ambassador Hostel', 'Obaid Ismail', 'F-8 Markaz Islamabad', '123456789', 'Male', 16000, 'Islamabad', '2021-05-04 14:34:27', 'This is description of hostel'),
(6, 'Al-Jawad Hostels', 'Aamir Malik', 'E-11 Islamabad', '456789123', 'Male', 13000, 'Islamabad', '2021-05-04 14:36:15', 'This is description for hostels'),
(7, 'Rawalpindi Hostels', 'Aamir Yasin', 'Saddar Rawalpindi', '78945896321', 'Male', 13000, 'Rawalpindi', '2021-05-04 14:38:57', 'This is best hostel'),
(8, 'Boys Hostel', 'Hamza', 'Raja Bazar Rawalpindi', '78945896321', 'Male', 13000, 'Rawalpindi', '2021-05-04 14:41:13', 'This is description for hsotel'),
(9, 'Girls Hostel', 'Laiba ', 'Islamabad', '15978643', 'Female', 14000, 'Islamabad', '2021-05-04 14:44:03', 'This is best hostel for girls'),
(10, 'Girlz Hostels', 'Tasmia', 'Islamabad', '15978643', 'Female', 17000, 'Islamabad', '2021-05-04 14:46:32', 'This is description for girls hostel'),
(11, 'Girls Hostel', 'Fatima', 'Rawalpindi', '78945896321', 'Female', 12000, 'Rawalpindi', '2021-05-04 14:48:36', 'This is hostel'),
(12, 'Girls Hostel', 'Fatima', 'Rawalpindi', '78945896321', 'Female', 12000, 'Rawalpindi', '2021-05-04 14:50:15', 'This is hostel');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_owner`
--

CREATE TABLE `hostel_owner` (
  `hostel_owner_id` int(6) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_owner`
--

INSERT INTO `hostel_owner` (`hostel_owner_id`, `first_name`, `last_name`, `username`, `email`, `phone`, `password`, `type`, `created`) VALUES
(1, 'Jawad', 'khan', 'jawad', 'jawad@gmail', '156789', '1256', 'Hostel Owner', '2021-05-02 08:58:58'),
(2, 'john', 'hosting', 'admin', 'asimaqsood56@gmail.com', '+994123456789', '$2y$10$T79TIMvFvqBJtVlTVbGDyuKnHAn/xLzzGzsezkNlBCBPhV8tsvsC6', 'Hostel Owner', '2021-05-02 09:22:07'),
(3, 'hostel', 'owner', 'sohaib', 'sohaib@gmakk', '1578996655', '$2y$10$KzE5AcYUVCi4sO/0zOZnpOeyrqhZBmzj4GvDYi69tCILasmICdsqq', 'Hostel Owner', '2021-05-02 09:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `std_id` int(7) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `accound_type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `first_name`, `last_name`, `gender`, `username`, `password`, `accound_type`, `email`, `phone`, `created`) VALUES
(1, 'Asim ', 'Maqsood', 'Male', 'asimmaqsood', '123', 'student', 'asimmaqsood@gmail.com', '123456789', '2021-05-02 08:04:22'),
(2, 'awais ', 'khan', 'Male', 'awaiskhan', '$2y$10$oLtaocroONXnFQtm1agMSuI88POUR7bMAMdxjXWlGYUTJO1zSfqV.', '1', 'jaob@gmial', '1245666', '2021-05-02 08:10:55'),
(3, 'awais ', 'khan', '', 'awaiskhan', '$2y$10$VbppOW3P6lE92ku7L13MeeSqOcMCg9WeVbCaMhIqIiPirBD91df3y', '1', 'jassob@gssss', '1245666', '2021-05-02 08:16:57'),
(4, 'web ', 'hosting', '', 'webhosting', '$2y$10$8w5w1LXHveZA4DhlJFeSY.GJ0JLHM6egGDq.Bu3F17WZKfIk3BCa.', '1', 'webhosting@gmial', '15689', '2021-05-02 08:21:06'),
(5, 'john ', 'johny', '', 'john', '$2y$10$0UWC6iwyx9msXFXPYpllSuis9NfUTbSdL1ChVPLjuSCa.BUCA4/qi', 'Student', 'john@gmail', '159687', '2021-05-02 08:31:18'),
(6, 'web ', 'khan', '', 'si', '$2y$10$Nql9AXMVGbOijBWThcHl3.PF65BZ9d4yS0y6ZzgkI0H547UlW7P0a', 'Student', 'asi@gmk', '156', '2021-05-02 08:40:02'),
(7, 'awais ', 'hosting', '', 'awaishosting', '$2y$10$A77xBaZ.3Wgae5p8c/kKR.GY2MLqlAz0BmZ6q7gN4fX8oEVbASiwq', 'Hostel Owner', 'jassob@gssss', '1589755', '2021-05-02 09:15:44'),
(8, 'asim ', 'asim', '', 'asimasim', '$2y$10$iRFwmZC8cookRGblzoePGuLKHWTjTwqlsIsEQvkFCs3cjqYfrjbGO', 'Student', 'asim@gmaa', '456789', '2021-05-02 09:34:46'),
(9, 'kkkk ', 'kkdfdsfdsf', '', 'kamran', '$2y$10$FY1ZNzUOViAbZoH6OiuEqeCu3AVoGfVlt/uiPX/Jtd3neLuxJR7Ti', 'Student', 'asim@gm', '789566', '2021-05-02 09:49:33'),
(10, 'wfd', 'feewrf', 'Female', 'fatima', '123', 'Student', 'adfef@gmm', '1256666', '2021-05-02 11:20:37'),
(11, 'kkddd ', 'dwedfa', 'Female', 'fatima', '$2y$10$lCrG.IU8zsF7chBJ.ceBleMPKpr8sd8ND.1xXx5P3ZBBnyLHDg4tq', 'Student', 'jassob@gss', '1245666', '2021-05-02 11:23:15'),
(12, 'Muhammad  ', 'Ibrahim', 'Male', 'ibrahim', '$2y$10$S0NUkxoXIfNcRHfR3wm40eb2MZW4qOez9VvHalGC1pVFimC1mdzDm', 'Student', 'asimmaqsood57@gmail.com', '123456789', '2021-05-04 23:32:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `hostel_owner`
--
ALTER TABLE `hostel_owner`
  ADD PRIMARY KEY (`hostel_owner_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `hostel_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hostel_owner`
--
ALTER TABLE `hostel_owner`
  MODIFY `hostel_owner_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `std_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
