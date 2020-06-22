-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2020 at 07:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2020_06_19_085526_create_roles_table', 1),
(41, '2020_06_19_154219_create_profileforms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profileforms`
--

CREATE TABLE `profileforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `form_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_required` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profileforms`
--

INSERT INTO `profileforms` (`id`, `user_id`, `form_name`, `form_type`, `form_required`, `created_at`, `updated_at`) VALUES
(1, NULL, 'name', 'text', 1, '2020-06-21 13:14:57', '2020-06-21 13:14:57'),
(2, NULL, 'email', 'email', 1, '2020-06-21 13:15:13', '2020-06-21 13:15:13'),
(3, NULL, 'contact', 'number', 1, '2020-06-21 13:15:20', '2020-06-21 23:22:32'),
(4, 1, 'Ramesh Das', NULL, NULL, '2020-06-21 13:19:05', '2020-06-21 13:19:05'),
(5, 1, 'rameshdas028@gmail.com', NULL, NULL, '2020-06-21 13:19:05', '2020-06-21 13:19:05'),
(6, 1, '7059476213', NULL, NULL, '2020-06-21 13:19:05', '2020-06-21 13:19:05'),
(7, 2, 'Sinchan Nuhara', NULL, NULL, '2020-06-21 13:20:31', '2020-06-21 13:20:31'),
(8, 2, 's@gmail.com', NULL, NULL, '2020-06-21 13:20:31', '2020-06-21 13:20:31'),
(9, 2, '7059476213', NULL, NULL, '2020-06-21 13:20:31', '2020-06-21 13:20:31'),
(10, NULL, 'Movie Name', 'text', 0, '2020-06-21 13:22:48', '2020-06-21 13:22:48'),
(11, 3, 'Nobita Suke', NULL, NULL, '2020-06-21 23:09:21', '2020-06-21 23:09:21'),
(12, 3, 'n@gmail.com', NULL, NULL, '2020-06-21 23:09:21', '2020-06-21 23:09:21'),
(13, 3, '9330751117', NULL, NULL, '2020-06-21 23:09:21', '2020-06-21 23:09:21'),
(14, 3, 'Spiderman', NULL, NULL, '2020-06-21 23:09:21', '2020-06-21 23:09:21'),
(15, 4, 'Doremon', NULL, NULL, '2020-06-21 23:29:38', '2020-06-21 23:29:38'),
(16, 4, 'd@gmail.com', NULL, NULL, '2020-06-21 23:29:38', '2020-06-21 23:29:38'),
(17, 4, '8100290865', NULL, NULL, '2020-06-21 23:29:38', '2020-06-21 23:29:38'),
(18, 4, 'Dark Night', NULL, NULL, '2020-06-21 23:29:38', '2020-06-21 23:29:38'),
(19, 5, 'Sirmran Kaur', NULL, NULL, '2020-06-21 23:32:59', '2020-06-21 23:32:59'),
(20, 5, 'kaur@gmail.com', NULL, NULL, '2020-06-21 23:32:59', '2020-06-21 23:32:59'),
(21, 5, '456784185', NULL, NULL, '2020-06-21 23:32:59', '2020-06-21 23:32:59'),
(22, 5, 'KGF', NULL, NULL, '2020-06-21 23:32:59', '2020-06-21 23:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-06-21 13:12:20', '2020-06-21 13:12:20'),
(2, 'user', '2020-06-21 13:12:20', '2020-06-21 13:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Technotech', 'admin@gmail.com', NULL, '$2y$10$2P4pG5X/S.ZkMdxUcw290eoQqXz/KT0LmVVSRedalVSfvMUz9gAcm', NULL, '2020-06-21 13:12:20', '2020-06-21 13:12:20'),
(2, 2, 'Shinchan Nuhara', 'sn@gmail.com', NULL, '$2y$10$q0iRgXd5LdFFbrVZuWf6JuoF7c2r7J2CZMsKTkqz82WssgEVi6yxe', 'O46lUiIhqVLEdJi8WOaJyRcG2rQDEI3EmHgNkUpREr3VI850CY1nZgmXdXa2', '2020-06-21 13:13:26', '2020-06-21 13:13:26'),
(3, 2, 'Nobita Suke', 'n@gmail.com', NULL, '$2y$10$db6qEcKF7sU81eLw5ZIg9OsJBsqiyeDJ4CR4bNOsNSWq4NLIzSmNm', NULL, '2020-06-21 23:08:46', '2020-06-21 23:08:46'),
(4, 2, 'Doremon', 'd@gmail.com', NULL, '$2y$10$wk2ghfPFapz9vPNyk1lkmeD1R.NNDgBqAT7pxlbEkxkdKLpybKZf6', NULL, '2020-06-21 23:28:56', '2020-06-21 23:28:56'),
(5, 2, 'Simran', 'kaur@gmail.com', NULL, '$2y$10$bgQcJ8XpFDAOuflypzA44u7p2Kd39i8yMDWeUv8UYwZpjdIp5U1aa', NULL, '2020-06-21 23:32:17', '2020-06-21 23:32:17');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `profileforms`
--
ALTER TABLE `profileforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `profileforms`
--
ALTER TABLE `profileforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
