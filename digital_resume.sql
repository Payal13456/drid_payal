-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2021 at 11:15 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_resume`
--

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
(4, '2021_03_11_131626_create_student_basic_info_table', 2),
(5, '2021_03_11_132755_create_student_basic_info_table', 3),
(6, '2021_03_11_133020_create_sessions_table', 4),
(7, '2021_03_11_135050_create_sessions_table', 5);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kfgZeijpMLl2rEe3Zidz3PXfWi4qbDzmZtT6CIAq', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWU9rNktaVm1LSmVZcWdoRnhEcUNoYTlCZFFuTkhKZ3pyanVHS015diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9uZXh0LXN0ZXAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1615471366);

-- --------------------------------------------------------

--
-- Table structure for table `student_basic_info`
--

CREATE TABLE `student_basic_info` (
  `id` bigint UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob_privacy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_privacy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rpassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_add_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `counter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `marksheet_pass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forget_verifiy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_campion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverletter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefjobtype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefroles` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefloc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutmevideo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objective` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noticeperiod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noticeduration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_basic_info`
--

INSERT INTO `student_basic_info` (`id`, `fname`, `lname`, `slug`, `mobile_no`, `mob_privacy`, `email_privacy`, `email`, `email_2`, `job_title`, `password`, `rpassword`, `street_add`, `street_add_two`, `state_id`, `country_id`, `city_id`, `pin_code`, `birth_date`, `profile_img`, `cover_img`, `summary`, `marital_status`, `gender`, `religion`, `user_type`, `is_delete`, `counter`, `marksheet_pass`, `forget_verifiy`, `from_campion`, `status`, `github`, `linkedin`, `coverletter`, `prefjobtype`, `prefroles`, `prefloc`, `aboutmevideo`, `objective`, `noticeperiod`, `noticeduration`, `created_at`, `updated_at`) VALUES
(1, 'Payal', 'Nihore', 'Payal-Nihore', '8435153945', NULL, NULL, 'payalnihore@gmail.com', NULL, NULL, '$2y$10$01tbcowCh2YRRz42En462e.vnzlOiISvMurHTvqdDbYIVZz2J7.l6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'single', 'female', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1:recruiter,2:candidate',
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `student_basic_info`
--
ALTER TABLE `student_basic_info`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_basic_info`
--
ALTER TABLE `student_basic_info`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
