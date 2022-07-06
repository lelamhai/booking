-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2022 at 10:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_booking`
--

CREATE TABLE `wp_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_phone` int(11) NOT NULL,
  `booking_date` datetime NOT NULL,
  `booking_slots` int(11) NOT NULL,
  `booking_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_timeid` int(11) NOT NULL,
  `booking_services` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_booking`
--

INSERT INTO `wp_booking` (`booking_id`, `booking_fullname`, `booking_phone`, `booking_date`, `booking_slots`, `booking_email`, `booking_message`, `booking_timeid`, `booking_services`, `booking_status`) VALUES
(1, 'lelamhai', 1234567890, '2022-07-05 00:00:00', 1, '', '', 1, NULL, 1),
(2, 'haitho', 1234567891, '2022-07-05 00:00:00', 1, 'lelamhai@gmail.com', 'note', 1, NULL, 1),
(3, 'finsih', 1234567892, '2022-07-05 00:00:00', 1, 'lelamhai@gmail.com', 'note', 1, NULL, 1),
(4, 'le huyen thao', 1123456789, '2022-07-05 00:00:00', 1, '', 'dfsafds', 1, NULL, 1),
(5, 'le thanh tinh', 1122334455, '2022-07-05 00:00:00', 1, 'lethanhtinh@gmail.com', 'note', 1, NULL, 1),
(6, 'admin', 1134567890, '2022-07-05 00:00:00', 1, 'admin@gmail.com', '', 2, NULL, 1),
(7, 'message', 1334567890, '2022-07-06 00:00:00', 1, '', 'message', 4, NULL, 1),
(8, 'kakaka', 1234567800, '2022-07-06 00:00:00', 1, 'fdsafd@gmail.com', 'kakaka', 4, NULL, 1),
(9, 'Nguyen Van A', 1234567190, '2022-07-06 00:00:00', 1, 'nguyenvana@gmail.com', 'Nguyen Van A', 4, NULL, 1),
(10, 'lelamhai', 1234567898, '2022-07-05 00:00:00', 3, 'test@gmail.com', 'note', 1, '[[\\\"Fullset acrylic with tips\\\"],[\\\"French design\\\",\\\"Title\\\"],[\\\"French design\\\"],[\\\"Acrylic overlay\\\",\\\"Nail ombre\\\"],[\\\"Nail ombre\\\",\\\"Title\\\"]]', 1),
(11, 'test', 123456089, '2022-07-06 00:00:00', 5, 'test@gmail.com', 'note test', 1, '[[\\\"Fullset acrylic with tips\\\"],[\\\"French design\\\",\\\"Title\\\"],[\\\"French design\\\"],[\\\"Acrylic overlay\\\",\\\"Nail ombre\\\"],[\\\"Nail ombre\\\",\\\"Title\\\"]]', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_booking`
--
ALTER TABLE `wp_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `booking_phone` (`booking_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_booking`
--
ALTER TABLE `wp_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
