-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 10:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `img`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(10) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_description` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `image_name`, `image_description`, `image_url`, `created_at`, `updated_at`) VALUES
(16, 'dd', '', 'http://127.0.0.1:8000/assets/images/1713096626.png', NULL, NULL),
(17, 'df', 'df', 'http://127.0.0.1:8000/assets/images/1713096690.jpg', '2024-04-07 15:22:45', '2024-04-01 15:22:45'),
(18, 'dfs', 'dfs', 'http://127.0.0.1:8000/assets/images/1713096690.jpg', '2024-04-01 15:23:28', '2024-04-01 15:23:28'),
(19, '7777', 'nnnnn', 'http://127.0.0.1:8000/assets/images/1714298631.jpg', NULL, NULL),
(20, 'ccc', 'ccc', 'http://127.0.0.1:8000/assets/images/1714465914.jpg', NULL, NULL),
(21, 'hdhd', 'hdhhdhdhd', 'http://127.0.0.1:8000/assets/images/1714465967.png', NULL, NULL),
(22, 'ui', 'iu', 'http://127.0.0.1:8000/assets/images/1714465980.png', NULL, NULL),
(23, 'gh', 'gh', 'http://127.0.0.1:8000/assets/images/1714465997.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
