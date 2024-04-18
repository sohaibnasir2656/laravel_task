-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 01:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveltask`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Mariko Meyers', 'kawifanyho@mailinator.com', 'logos/6cCoQ9XoHXDFQeqMaIEXcKxwJbDc1fBLFZJa34ec.png', 'https://www.google.com/', '2024-04-18 05:22:12', '2024-04-18 05:34:35'),
(2, 'Miriam Bauer', 'hedevolito@mailinator.com', 'logos/WaSjjYW1O6E8HB1RwSgLmu1sUQSVuQA1FCJaoElM.png', 'https://www.gumebixyp.com', '2024-04-18 05:26:12', '2024-04-18 05:26:12'),
(4, 'Wyatt Rivas', 'gafor@mailinator.com', 'logos/SXldhrwtjvO5FfDehRm5JIVuYQMjZKhCMGe7vIK9.jpg', 'https://www.pobem.mobi', '2024-04-18 05:27:58', '2024-04-18 05:27:58'),
(5, 'Rinah Macias', 'jobagys@mailinator.com', 'logos/3f3OeCKgWI6vLDFyPUtXRuzSWPND8bPzy7qji9Zm.jpg', 'https://www.govupicoqoh.tv', '2024-04-18 05:28:15', '2024-04-18 05:28:15'),
(6, 'Kyle Boyle', 'vevon@mailinator.com', 'logos/rR9Fw2MVc5TCmIJ9UEXjg4aclA7Uu0zHcyxU2TWO.jpg', 'https://www.jupusegaqojipiz.net', '2024-04-18 05:28:29', '2024-04-18 05:28:29'),
(7, 'Jenna Hess', 'josorah@mailinator.com', 'logos/SJIhfABEv1PIBYHOyCGXKUQnfwkaL1RZhBFCpxfV.jpg', 'https://www.bocovogudyw.co.uk', '2024-04-18 05:28:46', '2024-04-18 05:28:46'),
(8, 'Candice Melton', 'wybog@mailinator.com', 'logos/dPlHyZ6gTlDgnGFQ2fImSqjxwhedEPm0fatRH3AP.jpg', 'https://www.lobidenypezimy.com.au', '2024-04-18 05:29:03', '2024-04-18 05:29:03'),
(9, 'Nerea Wade', 'wedycucen@mailinator.com', 'logos/wYNSX6YGNbY4SY7gnnCda2cmRRgLOMLSBf4velgq.jpg', 'https://www.zitotuzocahiki.org', '2024-04-18 05:29:54', '2024-04-18 05:29:54'),
(10, 'Brittany Evans', 'myxehezi@mailinator.com', 'logos/qbD4BO3lUQ3AxkqjdnTCHio2F1qmEqJ6AFhO3oyr.jpg', 'https://www.zyb.biz', '2024-04-18 05:30:11', '2024-04-18 05:30:11'),
(11, 'Shaeleigh Wolfe', 'kagyv@mailinator.com', 'logos/mETMHG4Wn4n6jJfyC4l0hQEf95arJGUHoFhLKGqp.jpg', 'https://www.qutiz.me.uk', '2024-04-18 05:30:26', '2024-04-18 05:30:26'),
(12, 'Samson Carver', 'hyhatogy@mailinator.com', 'logos/vcLznT3NzS4mkt2W4cNGExVCfKlKTwoTdbDAiaJG.jpg', 'https://www.hibanohawu.mobi', '2024-04-18 05:30:46', '2024-04-18 05:30:46'),
(13, 'Cecilia Wilkin', 'guju@mailinator.com', 'logos/aSjKSb8PlymuoqYgzwN12SSuBXQDnIaEOIzYCYGb.jpg', 'https://www.diqebupulatano.com.au', '2024-04-18 05:31:05', '2024-04-18 06:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `company_id`, `first_name`, `last_name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jael', 'Tucker', 'jezob@mailinator.com', '+1 (582) 176-7597', '2024-04-18 05:22:29', '2024-04-18 05:22:29'),
(2, 2, 'Lewis', 'Carrillo', 'seqafoz@mailinator.com', '+1 (625) 385-4349', '2024-04-18 05:57:04', '2024-04-18 05:57:04'),
(3, 5, 'Virginia', 'Wood', 'qiqyxo@mailinator.com', '+1 (926) 429-3725', '2024-04-18 05:57:21', '2024-04-18 05:57:21'),
(4, 13, 'Vincent', 'Mcguire', 'xunulynyna@mailinator.com', '+1 (489) 783-2105', '2024-04-18 05:57:36', '2024-04-18 05:57:36'),
(5, 12, 'Vielka', 'Lancaster', 'wugil@mailinator.com', '+1 (708) 394-4503', '2024-04-18 05:57:51', '2024-04-18 05:57:51'),
(6, 11, 'Keane', 'William', 'borenimej@mailinator.com', '+1 (984) 626-7813', '2024-04-18 05:58:07', '2024-04-18 05:58:07'),
(7, 9, 'Azalia', 'Mckenzie', 'xefef@mailinator.com', '+1 (304) 219-3621', '2024-04-18 05:58:24', '2024-04-18 05:58:24'),
(8, 7, 'Donna', 'Hawkins', 'bymuqar@mailinator.com', '+1 (715) 438-3255', '2024-04-18 05:58:41', '2024-04-18 05:58:41'),
(9, 4, 'TaShya', 'Foster', 'qyfukazaz@mailinator.com', '+1 (883) 924-2062', '2024-04-18 05:58:54', '2024-04-18 05:58:54'),
(10, 6, 'Ethan', 'Harding', 'himixequm@mailinator.com', '+1 (125) 287-3029', '2024-04-18 05:59:11', '2024-04-18 05:59:11'),
(11, 9, 'steve', 'Aguirre', 'tikyty@mailinator.com', '+1 (795) 304-4368', '2024-04-18 05:59:27', '2024-04-18 06:13:15');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_17_112232_create_companies_table', 1),
(5, '2024_04_18_093152_create_employes_table', 1);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vN9g6m5mgLlE1v9KKGlERUFiU9aM55MxDMT37xGE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibHZOZm41RzdtU3hSYmR5QUJVRDI5UTF1WEtUbjY0aExEUjJJNU1GdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MTM0MzkwNTA7fX0=', 1713439092);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$12$LGKo3EPZGG//ltnVuEOkveTknvh/TM0WpyjZCLuJbJ6V4DA3f0WF2', NULL, '2024-04-18 05:15:42', '2024-04-18 05:15:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employes_company_id_foreign` (`company_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
