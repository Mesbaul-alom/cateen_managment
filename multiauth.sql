-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 09:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `org_name`, `customer_name`, `department`, `email`, `number`, `address`, `created_at`, `updated_at`) VALUES
(1, 44, 'Skyler Noel', 'Carly Clemons', 'Similique quis sapie', 'mibucili@mailinator.com', '999', 'Labore omnis volupta', '2023-04-11 23:18:17', NULL),
(2, 83, 'Blake Carlson', 'Reese Snow', 'Tempora dolore ut pa', 'fuko@mailinator.com', '711', 'Deserunt eius amet', '2023-04-11 23:18:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day`, `created_at`, `updated_at`) VALUES
(1, 'sunday', '2023-04-08 22:57:34', NULL),
(2, 'Monday', '2023-04-09 22:35:53', NULL),
(3, 'Tuesday', '2023-04-09 22:36:18', NULL),
(4, 'Wednesday', '2023-04-11 01:54:48', NULL),
(5, 'Thursday', '2023-04-11 01:56:02', NULL),
(6, 'Friday', '2023-04-11 01:56:11', NULL),
(7, 'Saturday', '2023-04-11 01:56:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employe_id` int(11) NOT NULL,
  `org_name` int(11) NOT NULL,
  `employe_name` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `official_email` int(11) NOT NULL,
  `personal_email` int(11) DEFAULT NULL,
  `number` int(11) NOT NULL,
  `address` int(11) DEFAULT NULL,
  `password` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `excels`
--

CREATE TABLE `excels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `excels`
--

INSERT INTO `excels` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, '2023-04-05 02:08:47', '2023-04-05 02:08:47'),
(2, NULL, NULL, NULL, NULL, '2023-04-05 02:09:29', '2023-04-05 02:09:29'),
(3, NULL, NULL, NULL, NULL, '2023-04-05 02:10:03', '2023-04-05 02:10:03'),
(4, NULL, NULL, NULL, NULL, '2023-04-07 21:29:22', '2023-04-07 21:29:22'),
(5, NULL, NULL, NULL, NULL, '2023-04-07 21:59:59', '2023-04-07 21:59:59'),
(6, NULL, NULL, NULL, NULL, '2023-04-07 22:00:36', '2023-04-07 22:00:36'),
(7, NULL, NULL, NULL, NULL, '2023-04-08 21:44:34', '2023-04-08 21:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_manus`
--

CREATE TABLE `food_manus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_manus`
--

INSERT INTO `food_manus` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Deserunt', 500, '2023-04-08 23:20:11', '2023-04-10 01:49:44'),
(4, 'Aut', 500, '2023-04-09 22:35:41', '2023-04-10 21:14:09'),
(5, 'Harum voluptatem Co', 458, '2023-04-10 23:15:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `food_plans`
--

CREATE TABLE `food_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_day` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_plans`
--

INSERT INTO `food_plans` (`id`, `name`, `total_day`, `created_at`, `updated_at`) VALUES
(1, 'Signe Rodgers', '7', '2023-04-10 23:12:46', NULL),
(2, 'Ivana Rodriquez', '10', '2023-04-10 23:13:42', NULL),
(3, 'Barrett Fowler', '9', '2023-04-10 23:13:57', '2023-04-10 23:34:28');

-- --------------------------------------------------------

--
-- Table structure for table `food_variants`
--

CREATE TABLE `food_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_variants`
--

INSERT INTO `food_variants` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, 'Sed', '2023-04-09 01:28:16', '2023-04-10 22:30:38'),
(8, 'Necessitatibus', '2023-04-09 22:35:47', '2023-04-10 22:29:14'),
(9, 'Consequatur sit et', '2023-04-10 23:14:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE `menu_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `food_variant_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`id`, `menu_id`, `day_id`, `food_variant_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 7, '2023-04-09 22:00:55', '2023-04-10 02:49:08'),
(3, 4, 1, 7, '2023-04-09 22:36:31', '2023-04-10 02:44:03'),
(4, 4, 3, 8, '2023-04-10 02:19:37', '2023-04-10 21:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2023_04_05_071920_create_excels_table', 3),
(9, '2023_04_09_045452_create_days_table', 4),
(10, '2023_04_09_050852_create_food_variants_table', 5),
(11, '2023_04_09_051617_create_food_manus_table', 6),
(12, '2023_04_10_035133_create_menu_details_table', 7),
(13, '2023_04_10_061658_create_products_table', 8),
(14, '2023_04_11_050118_create_food_plans_table', 9),
(15, '2023_04_11_064352_create_employes_table', 10),
(17, '2023_04_11_080849_create_customers_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Ginger Weber', 'Dolores quos ut in a', '2023-04-10 00:24:09', '2023-04-10 00:24:09'),
(2, 'Jessica Dominguez', 'Perspiciatis accusa', '2023-04-10 00:24:15', '2023-04-10 00:24:15'),
(3, 'Zoe Snider', 'Dignissimos sunt ip', '2023-04-10 00:27:35', '2023-04-10 00:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `customer_id` int(200) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `number` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `customer_id`, `org_name`, `department`, `number`, `address`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hamim', 'hamim@gmail.com', 0, '', NULL, '', NULL, NULL, 1, '$2y$10$QdY7dQZ1v2cmLn18O/Zv1.YEBdkI.F/GCGKQq4XtuMXjm7p0x3WZa', NULL, '2023-04-04 22:54:06', '2023-04-04 22:54:06'),
(2, 'Justine Woodard', 'huca@mailinator.com', 0, '', NULL, '', NULL, NULL, 2, '$2y$10$A7ly/a4q9LVisoyPVwHkreK2nAu0UCxXWj/AC88HM3C9rUYtEq3Wi', NULL, '2023-04-04 22:54:13', '2023-04-04 22:54:13'),
(8, 'Irma Lang', 'vawugasuly@mailinator.com', 47, 'Charity Conway', 'Quis velit sint iur', '504', 'Odit dolores iure ra', NULL, 0, '$2y$10$dimqgNigB7uvYOc6ZSSarueByPrRKEs0FLNQVG0SUIbq0jCRfgfBy', NULL, '2023-04-11 22:07:39', '2023-04-11 22:07:39'),
(9, 'Bruno Harvey', 'qemylil@mailinator.com', 47, 'Brynne Glenn', 'Consequatur maiores', '207', 'Eu lorem anim placea', NULL, 0, '$2y$10$Sr9bcSIjqpxggVF/JJKZ2O5oiPkJk12cYHl5.DJkrC3ObEV6QHofW', NULL, '2023-04-11 22:38:50', '2023-04-11 22:38:50'),
(10, 'Britanni Randolph', 'haheqobaf@mailinator.com', 31, 'Jillian Kim', 'Sunt velit atque odi', '657', 'Voluptate sequi porr', NULL, 0, '$2y$10$FGUzVLHb4nPPZmCKMnw1RuLxRjclprcEnEgiRQxgLVr7Yk2dxFf5y', NULL, '2023-04-11 22:39:20', '2023-04-11 22:39:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excels`
--
ALTER TABLE `excels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food_manus`
--
ALTER TABLE `food_manus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_plans`
--
ALTER TABLE `food_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_variants`
--
ALTER TABLE `food_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_details`
--
ALTER TABLE `menu_details`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `excels`
--
ALTER TABLE `excels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_manus`
--
ALTER TABLE `food_manus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food_plans`
--
ALTER TABLE `food_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food_variants`
--
ALTER TABLE `food_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu_details`
--
ALTER TABLE `menu_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
