-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 05:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialmedia`
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
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `likes` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`, `likes`, `created_at`, `updated_at`) VALUES
(1, 18, 2, 'likes', '2022-04-07 20:18:15', '2022-04-07 20:18:15');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_06_014140_create_posts_table', 2),
(8, '2022_03_31_025249_create_likes_table', 3);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Likes` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Description`, `Likes`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Wahahahhahahahahha', 1, 2, '2022-03-06 01:47:17', NULL),
(2, 'Sample', 0, 2, '2022-03-06 22:01:57', '2022-03-06 22:01:57'),
(3, 'Another Sample Description', 0, 2, '2022-03-06 22:24:39', '2022-03-06 22:24:39'),
(4, 'Liza account1', 0, 3, '2022-03-06 22:47:55', '2022-03-07 19:18:12'),
(5, 'Sample whahah yoyowt', 0, 3, '2022-03-07 17:24:01', '2022-03-07 19:18:33'),
(7, 'This is my post', 0, 4, '2022-03-07 20:40:08', '2022-03-07 20:40:08'),
(8, 'This is my latest post', 0, 4, '2022-03-07 21:27:53', '2022-03-07 21:27:53'),
(9, 'Wiwiwiwi', 0, 2, '2022-03-08 02:20:38', '2022-03-08 02:20:38'),
(10, 'meow', 0, 3, '2022-03-08 02:24:39', '2022-03-08 02:24:39'),
(11, 'Domain Expansion', 0, 4, '2022-03-08 02:26:13', '2022-03-08 02:26:13'),
(12, 'Xaxaxaxaxxaxa', 0, 4, '2022-03-08 02:26:37', '2022-03-08 02:26:37'),
(13, 'dsfsdfs', 0, 4, '2022-03-08 02:31:49', '2022-03-08 02:31:49'),
(14, 'gfdhfdghfg', 0, 4, '2022-03-08 02:31:56', '2022-03-08 02:31:56'),
(15, 'fsdfsdfsdff', 0, 4, '2022-03-08 02:32:04', '2022-03-08 02:32:04'),
(16, 'hgfdhfg', 0, 4, '2022-03-08 02:32:11', '2022-03-08 02:32:11'),
(17, 'fghfghfgh', 0, 4, '2022-03-08 02:32:18', '2022-03-08 02:32:18'),
(18, 'fdsfsfdsf', 0, 4, '2022-03-08 02:32:47', '2022-03-08 02:32:47'),
(19, 'fdsfsdfew', 0, 4, '2022-03-08 02:32:54', '2022-03-08 02:32:54'),
(20, 'TEST whwhwhwhaaaa', 0, 3, '2022-03-22 01:48:30', '2022-03-22 01:48:30'),
(21, 'Hiiiiiii...!!!!', 0, 5, '2022-03-29 19:12:21', '2022-03-29 19:12:21'),
(22, 'Hellooo...', 0, 6, '2022-03-29 20:59:49', '2022-03-29 20:59:49');

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
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_bg.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_image`, `cover_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Enchong', 'enchong@admin.com', NULL, '$2y$10$wXvxLXZoNpVtToVrNhqE2eoqxmiWtJ.HG5OUfIU.LtbzCCzH4FSQe', '20220308104743.jpg', '20220306003500.jpg', NULL, '2022-03-04 21:29:28', '2022-03-08 02:47:43'),
(3, 'Liza', 'zoberanoLiza@gmail.com', NULL, '$2y$10$dmNEpFLQ2G6zTdMJrwCm3Ohag6hRNf4IuOrKjbd20WBbbA2Y7Xqx.', '20220330035359.jpg', '20220308110250.jpg', NULL, '2022-03-05 16:38:21', '2022-03-29 19:53:59'),
(4, 'Yuji Itadori', 'sample@gmail.com', NULL, '$2y$10$lc7KIL6HWFq7KJXQQPZOyeqk8QE5n96Halhm5zof/JLKkkQZRrzMS', '20220308041233.jpg', '20220308041449.png', NULL, '2022-03-07 20:02:17', '2022-03-07 20:14:49'),
(5, 'Kathryn Bernardo', 'kath@gmail.com', NULL, '$2y$10$6lD8Hnx3VJRwqkBjvaWPzeEM0Lock2p3fhYCa51WepM9ZCPOfzZCy', '20220330035437.jpg', '20220330035447.jpg', NULL, '2022-03-29 19:11:28', '2022-03-29 19:54:47'),
(6, 'Kim Domingo', 'kim@gmail.com', NULL, '$2y$10$eg7psXvtTCFPQKolDZ6tve3y.MSVb4jfbx4ikBs6hD9VKRbYMpzCa', '20220330045923.jpg', '20220330045933.jpg', NULL, '2022-03-29 20:59:03', '2022-03-29 20:59:33');

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
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_post_id_foreign` (`post_id`),
  ADD KEY `likes_user_id_foreign` (`user_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
