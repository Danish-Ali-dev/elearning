-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 02:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE `add_student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` text NOT NULL,
  `stu_email` varchar(30) NOT NULL,
  `stu_password` varchar(20) NOT NULL,
  `stu_occ` varchar(100) NOT NULL,
  `stu_picture` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`stu_id`, `stu_name`, `stu_email`, `stu_password`, `stu_occ`, `stu_picture`, `created_at`) VALUES
(60, 'Danish Ali', 'danish@gmail.com', 'dani', '', '', '2021-07-07 22:50:41'),
(80, 'Amir Majeed', 'amir@gmail.com', 'amir', '', '', '2021-07-08 00:51:16'),
(81, 'Shari', 'shari@gmail.com', 'shari', '', '', '2021-07-08 17:03:37'),
(82, 'haider', 'haider@gmail.com', 'haider', '', '', '2021-07-08 17:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `created_at`) VALUES
(1, 'Danish', 'danish@gmail.com', 'dani12', '2021-07-08 19:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_desc` varchar(500) NOT NULL,
  `course_author` varchar(50) NOT NULL,
  `course_img` varchar(200) NOT NULL,
  `course_duartion` int(50) NOT NULL,
  `course_sale_price` int(50) NOT NULL,
  `course_original_price` int(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duartion`, `course_sale_price`, `course_original_price`, `created_at`) VALUES
(1, 'Web', 'Web Develop', 'Program', 'img', 12, 22, 12, '2021-07-10 16:39:39'),
(2, 'Java Script', 'Java', 'Web', '1625918510_Apple-iPhone-11-Pro-Max-1.jpg', 2, 2000, 1500, '2021-07-10 17:02:55'),
(3, 'Java Script', 'Java', 'Web', '1625918589_Apple-iPhone-11-Pro-Max-1.jpg', 2, 2000, 1500, '2021-07-10 17:03:09'),
(4, 'Java Script', 'Java', 'Web', '1625918611_Apple-iPhone-11-Pro-Max-1.jpg', 2, 2000, 1500, '2021-07-10 17:03:31'),
(5, 'Java Script', 'Java', 'Web', '1625918661_Apple-iPhone-11-Pro-Max-1.jpg', 2, 2000, 1500, '2021-07-10 17:04:21'),
(6, 'Java Script', 'Java', 'Web', '1625918715_Apple-iPhone-11-Pro-Max-1.jpg', 2, 2000, 1500, '2021-07-10 17:05:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_student`
--
ALTER TABLE `add_student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_student`
--
ALTER TABLE `add_student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
