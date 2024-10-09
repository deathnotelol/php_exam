-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 07:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `profile_photo`, `email`, `password`, `address`, `phone_number`, `created_date`, `updated_date`) VALUES
(3, 'War War', 'photo/girl3.jfif', 'warwar@gmail.com', '12345', 'localhost:8834', '096363636363', '2024-10-09 04:03:03', '2024-10-09 04:03:03'),
(4, 'Mar Mar', 'photo/girl4.jfif', 'marmar@gmail.com', '12345', 'localhost:8834', '094787545454', '2024-10-09 04:03:28', '2024-10-09 04:03:28'),
(5, 'Aye Aye1', 'photo/girl1.jfif', 'ayeaye@gmail.com', '12345', 'localhost:8834', '0923456789', '2024-10-09 04:54:42', '2024-10-09 04:59:33'),
(6, 'Maw Maw', 'photo/girl3.jfif', 'mawmaw@gmail.com', '12345', 'ABCDEFG', '09454454545454', '2024-10-09 05:02:16', '2024-10-09 05:02:24'),
(7, 'Mya Mya', 'photo/images.jfif', 'myamya@gmail.com', '12345', 'localhost:8834', '095654545455', '2024-10-09 05:04:48', '2024-10-09 05:05:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
