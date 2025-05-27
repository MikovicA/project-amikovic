-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 06:38 PM
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
-- Database: `project-amikovic`
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

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_korisnik@pwa.rs|127.0.0.1', 'i:1;', 1748311535),
('laravel_cache_korisnik@pwa.rs|127.0.0.1:timer', 'i:1748311535;', 1748311535);

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
-- Table structure for table `kategorijas`
--

CREATE TABLE `kategorijas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vrsta` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategorijas`
--

INSERT INTO `kategorijas` (`id`, `vrsta`, `created_at`, `updated_at`) VALUES
(1, 'Crveno', '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(2, 'Bijelo', '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(3, 'Roze', '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(4, 'Penušavo', '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(5, 'Desertno', '2025-05-24 14:09:16', '2025-05-24 14:09:16');

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
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2025_05_21_211123_create_personal_access_tokens_table', 1),
(4, '2025_05_24_000000_create_roles_table', 1),
(5, '2025_05_24_000001_create_users_table', 1),
(6, '2025_05_24_000002_create_kategorijas_table', 1),
(7, '2025_05_24_000003_create_vinos_table', 1),
(8, '2025_05_24_000004_create_narudzbinas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `narudzbinas`
--

CREATE TABLE `narudzbinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vino_id` bigint(20) UNSIGNED NOT NULL,
  `kolicina` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `narudzbinas`
--

INSERT INTO `narudzbinas` (`id`, `user_id`, `vino_id`, `kolicina`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(2, 1, 2, 1, '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(3, 2, 1, 3, '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(4, 2, 3, 1, '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(5, 3, 2, 4, '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(6, 1, 1, 1, '2025-05-25 01:30:19', '2025-05-25 01:30:19'),
(7, 1, 2, 1, '2025-05-25 01:33:18', '2025-05-25 01:33:18'),
(8, 1, 1, 1, '2025-05-25 01:37:09', '2025-05-25 01:37:09'),
(9, 1, 1, 1, '2025-05-25 16:36:32', '2025-05-25 16:36:32'),
(10, 1, 1, 1, '2025-05-25 17:20:47', '2025-05-25 17:20:47'),
(11, 1, 1, 1, '2025-05-25 19:47:33', '2025-05-25 19:47:33'),
(12, 1, 1, 1, '2025-05-25 20:12:34', '2025-05-25 20:12:34'),
(13, 1, 1, 1, '2025-05-25 22:34:54', '2025-05-25 22:34:54'),
(14, 1, 1, 1, '2025-05-26 00:36:39', '2025-05-26 00:36:39'),
(15, 1, 2, 1, '2025-05-26 20:11:23', '2025-05-26 20:11:23'),
(16, 2, 1, 1, '2025-05-27 02:26:48', '2025-05-27 02:26:48');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2025-05-24 14:09:15', '2025-05-24 14:09:15'),
(2, 'user', '2025-05-24 14:09:15', '2025-05-24 14:09:15'),
(3, 'editor', '2025-05-24 14:09:15', '2025-05-24 14:09:15');

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
('1UXeKixAfjaAQ3SxKknS82zHJ8pLLZAbnGJVBHoj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUcwam5sYUtXaUkxSTFuOG9zU3diSHZuTFl0bER2azdSZDMwd3U2TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748354026),
('DQR40aYj9JngsXHIYQslzqRK0DrTbZ3NvSdpF2We', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUmlpTHc5ejNjRkJVa0c3amRmeUJ6Y3lzRDFyaVprYmd6eGNiMk9lbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1748324817),
('IZVC4r18w3eBZcF5lArDd90bbQRzPL6uEw2jZdG8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ0g4VVhBT3ZpakROZjRtYmpLZUhWSUFXTXd2NGxzN2pha005bkRubCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1748354325),
('QeBrCEHSAkMpYAEDBQ1lQhLEv7E8wM5dlFtNuT91', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMVlOQWNMdmpuNnF2TldRM3lMWndvOHBRaWNIVVdKYU9hS3BuUmhxciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAva2F0YWxvZyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1748354408),
('yFzugIzj9XZbC2gKoNNEJY6fsEEK5l2pXJMOQWLF', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN2w3eEJqVUI2MzBlR3FpbFROd0NTNEwyUEFRSlhpelZXQXdxU2oxNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1748320959);

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
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@pwa.rs', NULL, '$2y$12$Um6Ob9bGrJt/8/LrEv.rC.8yDJZ7vPTamBMDD0E4ecOYxUbVNeQnu', NULL, 1, '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(2, 'User', 'user@pwa.rs', NULL, '$2y$12$t9X/hW3K8zIyzoHEnX2XDu7O1gF0M4RoVaoajKzwVXaHCab5MNuwy', NULL, 2, '2025-05-24 14:09:16', '2025-05-24 14:09:16'),
(3, 'Editor', 'editor@pwa.rs', NULL, '$2y$12$oBqeBH1wgcBMaO.1Gy59d.rQYngg0g6epAiwt2zHyRUACbq6BycUu', NULL, 3, '2025-05-24 14:09:16', '2025-05-24 14:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `vinos`
--

CREATE TABLE `vinos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `opis` text NOT NULL,
  `cijena` decimal(8,2) NOT NULL,
  `slika` varchar(255) DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `kategorija_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vinos`
--

INSERT INTO `vinos` (`id`, `naziv`, `opis`, `cijena`, `slika`, `featured`, `kategorija_id`, `created_at`, `updated_at`) VALUES
(1, 'Planinska Krv', 'Jake note sa sjevernih planina Crne Gore koje lijece tugu', 20.00, 'slike/uHWaUc02Vh2JrUmBvUZ1bktkPsWnggZepbg11asy.jpg', 1, 1, '2025-05-24 14:09:16', '2025-05-25 21:08:24'),
(2, 'Morksi san', 'Bijelo vino sa primorja iz berba punih joda i juga vjetra', 24.00, 'slike/dPtj6ZvIeuUZbpR8voOGjXXgw5KUCjRRZFdiQS2K.jpg', 1, 2, '2025-05-24 14:09:16', '2025-05-25 21:08:43'),
(3, 'Snijezna pahuljica', 'Bijelo ledeno vino, koje se godinama hladilo i odmaralo u koritu rijeke Morace', 55.00, 'slike/yIhuEer5gTZovTRQLq3Pn2MifWJ0LjCOKuTaL48w.jpg', 1, 2, '2025-05-24 14:09:16', '2025-05-25 21:08:55'),
(4, 'Elixir Ljubavi', 'Crveni elixir koji budi emocije i raspolozenje svojim bogatim slatkastim ukusom', 29.00, 'slike/CCsO97Nnc6DBIsyuOS8bMBVFkeh1zO7NTGzKXJgs.jpg', 1, 3, '2025-05-24 14:09:16', '2025-05-25 21:09:04'),
(5, 'Suvo Hladno', 'Hladno vino sa predjela sjeverne Crne Gore u kojem se osjeca jutarnja rosa Jelovice', 18.00, 'slike/3kOw8EAdfR7QHMsIToE1mDR1FQKPDTFg5ldchPjk.jpg', 0, 2, '2025-05-24 22:14:40', '2025-05-24 22:14:40'),
(6, 'Suvo Hladno', 'Suvo i dezerrtno vino lijepo', 18.00, 'slike/Otzqc7h6tMx7UrQKqsKklrFf7EASmoeb8bHvvhgf.jpg', 0, 5, '2025-05-25 17:18:37', '2025-05-25 22:36:06'),
(7, 'Somajler uzitak', 'Pravi lijepi ukus', 25.00, 'slike/SUrnwVuDu35m3XsvgYEg6w7eK3CQ35sB6i4OhlK8.jpg', 0, 5, '2025-05-25 17:55:19', '2025-05-27 03:44:52'),
(17, 'Somajler uzitak', 'bez znanja pakovanja', 22.00, NULL, 0, 1, '2025-05-27 03:46:22', '2025-05-27 11:59:57');

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
-- Indexes for table `kategorijas`
--
ALTER TABLE `kategorijas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narudzbinas`
--
ALTER TABLE `narudzbinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `narudzbinas_user_id_foreign` (`user_id`),
  ADD KEY `narudzbinas_vino_id_foreign` (`vino_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `vinos`
--
ALTER TABLE `vinos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vinos_kategorija_id_foreign` (`kategorija_id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `kategorijas`
--
ALTER TABLE `kategorijas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `narudzbinas`
--
ALTER TABLE `narudzbinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vinos`
--
ALTER TABLE `vinos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `narudzbinas`
--
ALTER TABLE `narudzbinas`
  ADD CONSTRAINT `narudzbinas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `narudzbinas_vino_id_foreign` FOREIGN KEY (`vino_id`) REFERENCES `vinos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `vinos`
--
ALTER TABLE `vinos`
  ADD CONSTRAINT `vinos_kategorija_id_foreign` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorijas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
