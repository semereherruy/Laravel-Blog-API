-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 23, 2025 at 10:02 AM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(3, 1, 'Intern', 'srawdgavcjhsbcnz,mc,mncksnclanlkcnalkcnlkancklasclkasnklcnasklasnclkanclknalkcnalkcnlkaclkacklacklnakcnalkcnlkanclaclkancnanihdiqdkjqhiu uaih qqy iqdoiqw8dbquguqdjhbduyd. abdjybqdbwqkdbiuqwbdkjqbdkqbdqwdiuhqwiudsrawdgavcjhsbcnz,mc,mncksnclanlkcnalkcnlkancklasclkasnklcnasklasnclkanclknalkcnalkcnlkaclkacklacklnakcnalkcnlkanclaclkancnanihdiqdkjqhiu uaih qqy iqdoiqw8dbquguqdjhbduyd.srawdgavcjhsbcnz,mc,mncksnclanlkcnalkcnlkancklasclkasnklcnasklasnclkanclknalkcnalkcnlkaclkacklacklnakcnalkcnlkanclaclkancnanihdiqdkjqhiu uaih qqy iqdoiqw8dbquguqdjhbduyd. abdjybqdbwqkdbiuqwbdkjqbdkqbdqwdiuhqwiud abdjybqdbwqkdbiuqwbdkjqbdkqbdqwdiuhqwiud', '2025-03-22 06:06:08', '2025-03-22 06:06:28'),
(4, 1, 'Life', 'life is bjhsbdjbeuyvcuybeuwybcubewbc', '2025-03-22 08:27:09', '2025-03-22 08:27:09'),
(5, 1, 'Blog', 'dvyvywvedtvwdvwydvwyd', '2025-03-22 08:59:30', '2025-03-22 08:59:30'),
(6, 1, 'lifes', 'adbudbusbcubscbsbcsbc', '2025-03-22 10:01:17', '2025-03-22 10:01:17'),
(8, 2, 'Updated Blog Post Title', 'Updated content for the blog post.', '2025-03-22 12:53:38', '2025-03-22 12:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_03_21_123002_create_blogs_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'API Token', 'da15b1ef2d5b69b210f79fbea4671693457e11c1a0094eafa58c5fd5f1951f6d', '[\"*\"]', NULL, '2025-03-22 07:15:58', '2025-03-22 07:15:58'),
(2, 'App\\Models\\User', 2, 'API Token', '10f0b2a5f1b3d007b755dae179ce6196a42379c32c26cc4dea6d4933647faa41', '[\"*\"]', NULL, '2025-03-22 07:16:40', '2025-03-22 07:16:40'),
(3, 'App\\Models\\User', 2, 'API Token', '695a09cd9eeda3dfec06f56d430d7982e06fcd1f9cd6b41ca6c5fd0a86e33972', '[\"*\"]', NULL, '2025-03-22 10:08:39', '2025-03-22 10:08:39'),
(4, 'App\\Models\\User', 2, 'API Token', '8c2b53503b4e878463eaf5b2c58d155020932fed0ac0e8d911814c90a88fe841', '[\"*\"]', NULL, '2025-03-22 10:08:54', '2025-03-22 10:08:54'),
(5, 'App\\Models\\User', 2, 'API Token', '88672dbc17e291c7f6555ebc6f69c1d37cc7bd9b037a88dd36f7c4d12e3cebf8', '[\"*\"]', NULL, '2025-03-22 10:33:52', '2025-03-22 10:33:52'),
(6, 'App\\Models\\User', 2, 'API Token', 'cba69cd9bce55118dd31542f61c5c78fa576c5d414c33a3c012bee9fc6cb8d7b', '[\"*\"]', NULL, '2025-03-22 12:11:19', '2025-03-22 12:11:19'),
(7, 'App\\Models\\User', 2, 'API Token', 'be58eb5ead8baed3dcb89fd853e8fd895c4aed79584e925d7c90299a42cf636c', '[\"*\"]', '2025-03-22 12:55:34', '2025-03-22 12:13:48', '2025-03-22 12:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'matti', 'matti222@gmail.com', NULL, '$2y$10$f/803eiUvzsEAkHsBzvEqewvMUHkt2b7CsP3sbLj3gzSNPRmP.iK6', 'kBtDA14B3vreFYJojkF70u6ekXLVYUsVxpIh4vvvlhhfZ1SUIFzKPDkYt2kY', '2025-03-21 13:31:31', '2025-03-21 13:31:31'),
(2, 'John Doe', 'john@example.com', NULL, '$2y$10$fl2t/vhexHcYHynJNcRGoO8llp7UwwyZQwP5YV97MyvO44mVX441S', NULL, '2025-03-22 07:15:27', '2025-03-22 07:15:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
