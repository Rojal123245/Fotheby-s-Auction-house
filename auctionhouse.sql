-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 08:18 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auctionhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientstatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankacno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `firstname`, `surname`, `address`, `contactno`, `email`, `password`, `clientstatus`, `bankacno`, `sortcode`, `approved`, `created_at`, `updated_at`) VALUES
(1, 'Mr', 'Rojal', 'pradhan', 'imadol', '9862038516', 'rozal@gmail.com', '$2y$10$KI877E/xA8I92Q/lu14XQek0LsrpYGkDlhJvlAjiwWkmZg7dP1WZa', 'buyer', '123456789', '123', 1, '2019-04-27 11:08:18', '2019-04-27 11:48:11'),
(2, 'Mr', 'pranisha', 'katwal', 'dharan', '98243523534', 'prana@gmail.com', '$2y$10$UAUCe/dZl6K.7aO3iLUQzejsRNpf9an.3oM5NEqy.aqBzlDgVIQ1.', 'seller', '1234567890', '345', 0, '2019-04-27 11:51:50', '2019-04-27 11:51:50'),
(3, 'Mr', 'Sunil', 'thapa', 'sorkhutta', '9862039615', 'sunilthapa@gmail.com', '$2y$10$OknvD38TDNNtl/UOx0xt..r4gT0FjMNjNY0083MxlZRB1.kX5Ulgu', 'joint', '123456780', '1245', 0, '2019-05-04 12:03:34', '2019-05-04 12:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `commission_bids`
--

CREATE TABLE `commission_bids` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commission_bids`
--

INSERT INTO `commission_bids` (`id`, `client_email`, `item_id`, `created_at`, `updated_at`) VALUES
(2, 'rozal@gmail.com', '1', '2019-05-03 12:41:27', '2019-05-03 12:41:27'),
(7, 'rozal@gmail.com', '1', '2019-05-03 12:49:56', '2019-05-03 12:49:56'),
(8, 'rozal@gmail.com', '1', '2019-05-04 11:34:48', '2019-05-04 11:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `auctiontitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lotrefno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lotno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medium` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frame` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeofimg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auctionDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auctionperiod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activate` tinyint(1) NOT NULL DEFAULT '0',
  `recyclebin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `auctiontitle`, `location`, `lotrefno`, `lotno`, `period`, `title`, `price`, `dimension`, `artist`, `description`, `category`, `medium`, `frame`, `typeofimg`, `material`, `weight`, `auctionDate`, `auctionperiod`, `image`, `activate`, `recyclebin`, `created_at`, `updated_at`) VALUES
(1, 'darkside1999', 'paris', '34279847', '1', '2006', 'darkside', '50000', '1.5', 'rojal', 'blah hasdfaskdbfkasdbfk', 'drawing', 'pencil', 'wooden frame', NULL, NULL, NULL, '2019-05-01', 'afternoon', '2019-05-01-GQZ8iuNfxI.jpg', 1, 0, '2019-04-27 11:06:19', '2019-05-01 11:15:36'),
(2, 'A world beautiful lady', 'london', '123456', '1', '1996', 'monalisa', '100000', '1.6m', 'picasso', 'a historic picturekdFKSDAGFKUADSKUGAFKDGSKFGASKDGFASDFD', 'painting', 'ink', 'wodden', NULL, NULL, NULL, '2019-04-27', 'morning', '2019-05-01-V6oPiBG6Wo.jpg', 1, 0, '2019-04-27 11:09:45', '2019-05-01 11:17:01'),
(3, 'blahhh', 'london', '98765', '1', '2005', 'whasts', '9000', '1.5', 'rojal', 'skdajfhkahsdfauwehfukahwefuaw', 'painting', 'pen', 'frame', NULL, NULL, NULL, '2019-02-02', 'afternoon', '2019-05-01-QIrA5fDNKj.jpg', 1, 0, '2019-04-30 10:58:41', '2019-05-01 11:17:33'),
(4, 'wooww', 'london', '98765', '1', '2006', 'SDKFHAKHDS', '9000', '1.65', 'rojal', 'skhdfkasdfkaksdfkafaskdfha', 'drawing', 'pen', 'framed', NULL, NULL, NULL, '2019-04-30', 'afternoon', '2019-04-30-CxoHlbZ9w1.png', 1, 0, '2019-04-30 11:06:59', '2019-04-30 12:49:31'),
(5, 'darkside', 'london', '978687', '1', '2006', 'whats up', '100000', '1.5', 'rojal', 'akdjsfkadskfahdsfhakjsdfhajdfas', 'drawing', 'pen', 'framed', NULL, NULL, NULL, '2019-05-02', 'afternoon', '2019-05-01-FKpmdZNzi2.png', 1, 0, '2019-05-01 03:08:06', '2019-05-01 03:08:06'),
(6, 'Sahil bro', 'london', '9876544', '1', '2006', 'sahil bhai', '90000', '1.5', 'rojal', 'kjdsnfkjadbfjkabdsjkfakdsbfkadjbfkadsbakdsjbfagifasdgfiaug', 'painting', 'pen', 'framed', NULL, NULL, NULL, '2019-05-01', 'afternoon', '2019-05-01-DEAfqLoubM.png', 1, 0, '2019-05-01 04:10:33', '2019-05-01 04:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Sahil bro has been added successful with Lot Reference Code 9876544', '2019-05-01 04:10:33', '2019-05-01 04:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_04_23_103014_create_items_table', 1),
(8, '2019_04_26_065036_create_clients_table', 1),
(9, '2019_05_01_094545_create_logs_table', 2),
(10, '2019_05_03_180805_create_commission_bids_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rojal pradhan', 'rozalpra@gmail.com', '$2y$10$0k5qUawm/FhHnSwMPmra/e11XOzyUtrHo5sGU13EtHaUZsE.CXcv2', '7o3StY10JFBl6mxbsGwPKWM5cZJdGC8q9wO796xyNOD6py8Gi5K8VDQG0JCX', '2019-04-28 01:47:08', '2019-04-28 01:47:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_bids`
--
ALTER TABLE `commission_bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commission_bids`
--
ALTER TABLE `commission_bids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
