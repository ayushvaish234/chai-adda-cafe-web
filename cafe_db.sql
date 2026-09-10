-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2026 at 07:51 AM
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
-- Database: `cafe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `title`, `description`, `image`, `price`, `is_active`) VALUES
(2, '2 Bombay vada pav with 2 ccd masala chai', 'Nice combination masala chai and mumbai style vada pav with green chilli and gun powder.', '1789018337_deal_6b3dd305e82dd0b19baf7e4e9d59529c.avif', 219.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `label` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `category`, `image`, `label`) VALUES
(3, 'Aloo tikki Vada Pav', '', 39.00, 'Vada Pav', '1789017421_e8c434120784fedcdd0af8464d7dabe8.avif', ''),
(4, 'Schezwan Vada Pav', '', 55.00, 'Vada Pav', '1789017442_c9baa6064df7aa2f46e5dd05f678486f.avif', ''),
(5, 'Chatpata paneer vada pav', '', 99.00, 'Vada Pav', '1789017491_images.jpg', ''),
(6, 'Cold Cofee', '', 89.00, 'Cold Drinks', '1789017556_dcbc0d967c670c96057df7a155904e79.avif', ''),
(7, 'White Sauce pasta', '', 99.00, 'Snacks', '1789017591_3ac9cbbe5647564cd2cd08c673fd8c41.avif', ''),
(8, 'peri peri pasta', '', 129.00, 'Vada Pav', '1789017616_3ac9cbbe5647564cd2cd08c673fd8c41.avif', ''),
(9, 'Exotic Grilled Sandwich', '', 69.00, 'Snacks', '1789017656_cb30e297dda1310fc00fdb0221512ac1.avif', ''),
(10, 'Elaichi Chai', '', 25.00, 'Coffee', '1789017691_5943b03ab7daaf96762d46862f2c2d4e.avif', ''),
(11, 'capuccino', '', 89.00, 'Coffee', '1789017751_images (1).jpg', ''),
(12, 'capuccino', '', 89.00, 'Coffee', '1789017879_images (1).jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
