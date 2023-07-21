-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 02:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tapro`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `workspace_id` bigint(20) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `user_id`, `workspace_id`, `role`, `access`, `created_at`, `updated_at`) VALUES
(48, 3, 31, 'Owner', 0, '2022-07-09 10:34:05', '2022-07-09 10:34:05'),
(53, 1, 35, 'Owner', 0, '2022-07-16 04:03:19', '2022-07-16 04:03:19'),
(56, 3, 37, 'Owner', 0, '2023-06-13 13:37:34', '2023-06-13 13:37:34'),
(57, 1, 37, 'Member', 1, '2023-06-13 13:38:20', '2023-06-13 13:38:20'),
(58, 3, 38, 'Owner', 0, '2023-06-29 17:19:11', '2023-06-29 17:19:11'),
(59, 4, 39, 'Owner', 0, '2023-07-03 14:16:27', '2023-07-03 14:16:27'),
(60, 5, 39, 'Member', 0, '2023-07-03 14:18:25', '2023-07-03 14:18:25');

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
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_02_151040_create_workspace', 1),
(7, '2022_06_03_071950_create_project', 1),
(8, '2022_06_03_071959_create_task', 1),
(9, '2022_06_19_173920_create_member', 1),
(10, '2022_07_01_124515_create_share', 2),
(12, '2023_06_27_234422_create_task_comment', 3);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workspace_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `workspace_id`, `title`, `description`, `deadline`, `visibility`, `created_at`, `updated_at`) VALUES
(51, 35, 'Project pertama', NULL, NULL, 'private', '2022-07-16 04:03:28', '2022-07-16 04:03:28'),
(52, 37, 'Integrasi Jubelio', NULL, '06-06-2023 s/d 21-06-2023', 'private', '2023-06-13 13:38:40', '2023-06-27 16:19:31'),
(53, 37, 'sdfdsf', NULL, '21-06-2023 s/d 28-06-2023', 'private', '2023-06-27 18:20:41', '2023-06-27 18:20:53'),
(54, 39, 'Dashboard', NULL, '23-07-2023 s/d 31-07-2023', 'private', '2023-07-03 14:19:23', '2023-07-03 14:22:30'),
(55, 39, 'Landing page', NULL, NULL, 'private', '2023-07-03 14:19:33', '2023-07-03 14:19:33'),
(56, 39, 'Integrasi', NULL, NULL, 'private', '2023-07-03 14:19:40', '2023-07-03 14:19:40'),
(57, 38, 'sdfsdf', NULL, NULL, 'private', '2023-07-07 15:46:40', '2023-07-07 15:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `task_id` bigint(20) NOT NULL,
  `access` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`id`, `user_id`, `task_id`, `access`, `created_at`, `updated_at`) VALUES
(61, 1, 71, 1, '2023-06-13 13:39:55', '2023-06-13 13:39:55'),
(62, 3, 71, 1, '2023-06-27 15:55:12', '2023-06-27 15:55:12'),
(63, 1, 72, 1, '2023-06-27 17:45:35', '2023-06-27 17:45:35'),
(64, 3, 85, 1, '2023-06-27 17:54:53', '2023-06-27 17:54:53'),
(65, 1, 87, 1, '2023-06-27 18:03:15', '2023-06-27 18:03:15'),
(66, 5, 90, 1, '2023-07-03 14:21:44', '2023-07-03 14:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `project_id`, `title`, `completed`, `deleted`, `created_at`, `updated_at`) VALUES
(70, 51, 'Tugas pertama', 0, 0, '2022-07-16 04:03:37', '2022-07-16 04:03:37'),
(71, 52, 'Dashboard Integration', 1, 0, '2023-06-13 13:39:27', '2023-06-27 16:42:49'),
(72, 52, 'testing', 1, 0, '2023-06-27 16:37:24', '2023-06-27 18:20:22'),
(73, 52, 'dsf', 0, 0, '2023-06-27 16:43:43', '2023-06-27 17:33:04'),
(74, 52, 'sdf', 0, 0, '2023-06-27 17:33:07', '2023-06-27 17:33:07'),
(75, 52, 'dfg', 0, 0, '2023-06-27 17:36:40', '2023-06-27 17:36:40'),
(76, 52, 'sdfdsf', 1, 0, '2023-06-27 17:37:48', '2023-06-27 17:43:15'),
(77, 52, 'sdfsdf', 0, 0, '2023-06-27 17:38:43', '2023-06-27 17:38:43'),
(78, 52, 'sdfdsf', 0, 0, '2023-06-27 17:39:02', '2023-06-27 17:39:02'),
(79, 52, 'sdf', 0, 0, '2023-06-27 17:39:25', '2023-06-27 17:39:25'),
(80, 52, 'sdfdf', 0, 0, '2023-06-27 17:40:30', '2023-06-27 17:40:30'),
(81, 52, 'sdfdsf', 0, 0, '2023-06-27 17:41:16', '2023-06-27 17:41:16'),
(82, 52, 'sdf', 0, 0, '2023-06-27 17:41:40', '2023-06-27 17:41:40'),
(83, 52, 'sdfdf', 0, 0, '2023-06-27 17:42:22', '2023-06-27 17:42:22'),
(84, 52, 'dfgdfg', 0, 0, '2023-06-27 17:43:05', '2023-06-27 17:43:05'),
(85, 52, 'sdfdf', 0, 0, '2023-06-27 17:44:42', '2023-06-27 17:44:42'),
(86, 52, 'sdf', 0, 0, '2023-06-27 18:00:55', '2023-06-27 18:00:55'),
(87, 52, 'sdfdsf', 0, 0, '2023-06-27 18:02:19', '2023-06-27 18:02:19'),
(88, 52, 'sdfsdf', 0, 0, '2023-06-27 18:05:04', '2023-06-27 18:05:04'),
(89, 53, 'sdfsdf', 1, 0, '2023-06-27 18:20:45', '2023-06-27 18:20:47'),
(90, 54, 'Hitung jumlah user', 1, 0, '2023-07-03 14:20:11', '2023-07-03 14:22:05'),
(91, 54, 'Hitung jumlah project', 0, 0, '2023-07-03 14:20:19', '2023-07-03 14:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `task_comment`
--

CREATE TABLE `task_comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_comment`
--

INSERT INTO `task_comment` (`id`, `task_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(27, 90, 5, 'Iye kituh', '2023-07-03 14:21:36', '2023-07-03 14:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'Member', 'member@gmail.com', NULL, '$2y$10$JBvy2AR91WtXog8RgAHdmO8T4kMWky.28VSokH6RqZByRMiVAJINa', NULL, '2022-06-23 01:14:20', '2022-06-23 01:14:20'),
(2, 'Pengguna', 'pengguna@gmail.com', NULL, '$2y$10$eUjsFneKddtOxhx8G8h7yO4uR0MuPNHduCVOqz85NlY8TNPR09Xf2', NULL, '2022-06-24 02:00:04', '2022-06-24 02:00:04'),
(3, 'User dsfsfd', 'user@gmail.com', NULL, '$2y$10$34Cs6s9nnk2W4hT60.Cyq.3oMwLVXC5kqspyLRFqydA7Lb6X5aO5y', NULL, '2022-06-30 01:30:15', '2023-07-08 07:39:50'),
(4, 'Testing', 'testing@gmail.com', NULL, '$2y$10$jvGiNWNEq486MYomwaiYOO13SxXvgW8o0iL1/BrPEz4HX0pmiWbzW', NULL, '2023-07-03 14:15:34', '2023-07-03 14:15:34'),
(5, 'programmer', 'programmer@gmail.com', NULL, '$2y$10$QO7Im3i.K7G0xHl1FOsujuI5Req8sdeLd72oqncWEStwkReIlKfEa', NULL, '2023-07-03 14:17:11', '2023-07-03 14:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `workspace`
--

CREATE TABLE `workspace` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visibility` enum('private','public') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workspace`
--

INSERT INTO `workspace` (`id`, `title`, `description`, `visibility`, `created_at`, `updated_at`) VALUES
(35, 'Ruang kerja', NULL, 'private', '2022-07-16 04:03:19', '2022-07-16 04:03:19'),
(37, 'Black Pantom', NULL, 'private', '2023-06-13 13:37:34', '2023-06-13 13:37:34'),
(38, 'sdfsf', NULL, 'private', '2023-06-29 17:19:11', '2023-06-29 17:19:11'),
(39, 'Tim Black Phantom', NULL, 'private', '2023-07-03 14:16:27', '2023-07-03 14:16:27');

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
-- Indexes for table `member`
--
ALTER TABLE `member`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_comment`
--
ALTER TABLE `task_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workspace`
--
ALTER TABLE `workspace`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `task_comment`
--
ALTER TABLE `task_comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workspace`
--
ALTER TABLE `workspace`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
