-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 04:13 PM
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
-- Database: `salonmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'LOreal');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'SkinCare');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_firstname` varchar(100) NOT NULL,
  `client_Lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `dob` date NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_firstname`, `client_Lastname`, `username`, `email`, `gender`, `password`, `contact_no`, `dob`, `role_id`) VALUES
(1, 'Muhammad', 'Ibrahim', 'ibrahim0214', 'ibrahim123@gmail.com', 'Male', '$2y$10$6QLWIXcgAIVHpZnOo/u0t.D5ZREOzBwC5hvhp4k3A/2sZNAxOfz6O', 2147483647, '2006-05-14', 4),
(2, 'Muhammad', 'Ibrahim', 'ibrahim01', 'ibrahim01@gmail.com', 'Male', '$2y$10$Tnmk7mQ8Jo9po6gNN6MiBui0XNO.xYgC0joSsV4rxK.n6nbAN6a8O', 2147483647, '2006-05-14', 4),
(3, 'Mr', 'basit', 'basit12', 'basit12@gmail.com', 'Male', '$2y$10$PS7BoUeyfTkOnWbNuMFZKexpXy/.X7779/sIJn9PqCgHZ0kNj22H6', 312546856, '2025-01-16', 4),
(4, 'mr', 'muneeb', 'muneeb12', 'muneeb12@gmail.com', 'Male', '$2y$10$.wKjXZI4Dtl/qYqW2Isyfe2nXLNEyHTLuhjRrV37ZOcn5kyRTjTEe', 2147483647, '2025-02-06', 4),
(5, 'mr', 'subhan', 'subhan12', 'subhan12@gmail.com', 'male', '123subhan', 319584563, '2006-05-14', 4),
(6, 'mr', 'abdul', 'abdul12', 'abdul12@gmail.com', 'Male', '$2y$10$w0BG2fEVplVIc.KtODSaaey5QkscNmaLFRcSHfog9GVvhkRPnyAki', 2147483647, '2025-01-24', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Receptionist'),
(3, 'Stylist'),
(4, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `dob` date NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `gender`, `password`, `contact_no`, `dob`, `role_id`) VALUES
(1, 'Muhammad', 'Ibrahim', 'ibrahim0214', 'ibrahim0214@gmail.com', 'M', '$2y$10$snZtjY7RDcLCGOpRiHudseBHvn3ks4jkKR.G3NRTyFryTWnxIM1sC', 2147483647, '2006-05-14', 2),
(2, 'Muhammad', 'Kashan', 'kashan123', 'kashan123@gmail.com', 'M', '$2y$10$hEhEH7UCIYO44EUb2i36Eu.DFFgJsEV8xs8D8nU18G2v/hYXHwFaS', 2147483647, '2007-01-17', 2),
(3, 'momin', 'Ali', 'momin123', 'momin123@gmail.com', 'M', '$2y$10$2Ve1i11SNLPXYZvEj33h0ehpP.mAIQ9v.6Aub/ZpbClD7e1rpny3G', 2147483647, '2025-01-18', 2),
(4, 'Muhammad', 'Ibrahim', 'ibrahimAdmin0214', 'foraptech080@gmail.com', 'male', 'ibrahimadmin0214', 319818792, '2006-05-14', 1),
(5, 'Mr', 'Bilal', 'bilal123', 'bilal123@gmail.com', 'M', '$2y$10$sujpqMTJF0X3MJg/JPMzN.de4dIPXJvs66KhQ8FSAaPnR00Wv3/OO', 2147483647, '2025-01-23', 2),
(6, 'mr', 'bilal', 'bilal12', 'bilal12@gmail.com', 'male', '123bilal', 319584563, '2025-01-29', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
