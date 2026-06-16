-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2026 at 04:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `cv`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$5xZ3/LMu5wu4GNhDJubW2.d92Zv1se2KyLIAAZCAJ2u', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`) VALUES
(1, 'Los Angeles', 1),
(2, 'San Francisco', 1),
(3, 'New York City', 2),
(4, 'Buffalo', 2),
(5, 'Houston', 3),
(6, 'Austin', 3),
(7, 'Toronto', 4),
(8, 'Ottawa', 4),
(9, 'Vancouver', 5),
(10, 'Victoria', 5),
(11, 'London', 6),
(12, 'Manchester', 6),
(13, 'Edinburgh', 7),
(14, 'Glasgow', 7),
(15, 'Sydney', 8),
(16, 'Newcastle', 8),
(17, 'Melbourne', 9),
(18, 'Geelong', 9),
(19, 'Mumbai', 10),
(20, 'Pune', 10),
(21, 'Bengaluru', 11),
(22, 'Mysuru', 11),
(23, 'New Delhi', 12),
(24, 'Ahmedabad', 13),
(25, 'Surat', 13);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(4, 'Australia'),
(2, 'Canada'),
(5, 'India'),
(3, 'United Kingdom'),
(1, 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`) VALUES
(1, 'Engineering'),
(2, 'Human Resources'),
(3, 'Marketing'),
(4, 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `status` enum('enable','disable') DEFAULT 'enable',
  `verification_token` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `address`, `department`, `salary`, `password`, `gender`, `image`, `cv`, `country`, `state`, `city`, `role`, `status`, `verification_token`, `skills`) VALUES
(1, 'John Doe', 'john@example.com', '1234567890', '123 Main St', '1', 85000, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Male', NULL, NULL, 'United States', 'California', 'Los Angeles', '1', 'enable', NULL, 'PHP, MySQL, JavaScript'),
(2, 'Jane Smith', 'jane@example.com', '0987654321', '456 Market St', '3', 65000, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Female', NULL, NULL, 'Canada', 'Ontario', 'Toronto', '4', 'disable', NULL, 'SEO, Google Analytics'),
(3, 'Alice Johnson', 'alice@example.com', '5551112233', '789 Park Ave', '2', 75000, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Female', NULL, NULL, 'United Kingdom', 'England', 'London', '3', 'enable', NULL, 'Recruiting, Conflict Resolution'),
(4, 'Mayank Gaur', 'mayankgaur0307@gmail.com', '8929641963', 'h-238', '1', 500000, '$2y$10$6ETPEWyuDyY5GCEbqj5xXOAPQCuHsL.J109pZZby8PcUMKH0A53hO', 'Male', '', '', 'India', 'Maharashtra', 'Mumbai', '1', 'enable', NULL, 'PHP,JavaScript'),
(5, 'Mayank Gaur', 'mayankgaur1504@gmail.com', '8929641964', 'H-238 , alpha 2', '1', NULL, '$2y$10$IEvcI95SXzxYkRNxfsVGh.CnUZI2a48VjoxJnE0da5pjlUtwJ/pJK', 'Male', '1780886117_AVATAR2.jpg', '1780886117_mayank_gaur_resume_nf.pdf', 'India', 'Karnataka', 'Bengaluru', '1', 'enable', NULL, 'Python,Java');

-- --------------------------------------------------------

--
-- Table structure for table `employee_ratings`
--

CREATE TABLE `employee_ratings` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_ratings`
--

INSERT INTO `employee_ratings` (`id`, `employee_id`, `rating`, `review`, `created_at`) VALUES
(1, 1, 5, 'Excellent problem solver and team player.', '2026-06-08 02:21:08'),
(2, 1, 4, 'Consistently delivers good work.', '2026-06-08 02:21:08'),
(3, 3, 5, 'Fantastic management skills.', '2026-06-08 02:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `job_roles`
--

CREATE TABLE `job_roles` (
  `id` int(11) NOT NULL,
  `job_role_name` varchar(100) DEFAULT NULL,
  `department_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_roles`
--

INSERT INTO `job_roles` (`id`, `job_role_name`, `department_name`) VALUES
(1, 'Software Engineer', 'Engineering'),
(2, 'DevOps Engineer', 'Engineering'),
(3, 'HR Manager', 'Human Resources'),
(4, 'SEO Specialist', 'Marketing'),
(5, 'Sales Representative', 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'California', 1),
(2, 'New York', 1),
(3, 'Texas', 1),
(4, 'Ontario', 2),
(5, 'British Columbia', 2),
(6, 'England', 3),
(7, 'Scotland', 3),
(8, 'New South Wales', 4),
(9, 'Victoria', 4),
(10, 'Maharashtra', 5),
(11, 'Karnataka', 5),
(12, 'Delhi', 5),
(13, 'Gujarat', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_ratings`
--
ALTER TABLE `employee_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_roles`
--
ALTER TABLE `job_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee_ratings`
--
ALTER TABLE `employee_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_roles`
--
ALTER TABLE `job_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
