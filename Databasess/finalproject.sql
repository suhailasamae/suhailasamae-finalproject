-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2024 at 06:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `per_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `veh_license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `per_name`, `veh_license`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'นายอาหามะ  กาซอ', '82-023', '0923313513', '2024-08-21 19:23:07', '2024-08-21 19:23:07'),
(3, 'นายอาหามัด  แวโวะ', '32-324', '0822624474', '2024-08-21 19:23:28', '2024-08-21 19:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint UNSIGNED NOT NULL,
  `per_id` bigint UNSIGNED NOT NULL,
  `exp_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `exp_date` date NOT NULL,
  `pay_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `per_id`, `exp_type`, `amount`, `exp_date`, `pay_method`, `desc`, `created_at`, `updated_at`) VALUES
(1, 2, 'Fuel', '314.00', '2024-08-22', 'Cash', 'ksdhjog;yipr', '2024-08-21 19:34:40', '2024-08-21 19:34:40'),
(2, 2, 'Fuel', '314.00', '2024-08-01', 'Bank Transfer', 'หกดฟเกหเดฟ้่หเดืัาัำวยรงร', '2024-08-21 19:36:56', '2024-08-21 19:36:56'),
(3, 2, 'Repairs', '314.00', '2024-08-23', 'Credit Card', '่าหเัฟรฟากือบ\r\nฤรไิพ่ส์ญฯ\"ฏํญ็ฺ์', '2024-08-21 19:37:26', '2024-08-21 19:37:26');

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
-- Table structure for table `garbages`
--

CREATE TABLE `garbages` (
  `id` bigint UNSIGNED NOT NULL,
  `loc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disp_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `waste_amt` int NOT NULL,
  `addr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caretaker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `garbages`
--

INSERT INTO `garbages` (`id`, `loc_name`, `disp_method`, `date`, `waste_amt`, `addr`, `caretaker`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'ปรามะ', 'ฝังกลบ', '2024-09-05', 1234542, '3/9', 'aaaaaaaaaaaaaaaaaaaaa', '0923313513', '2024-08-21 15:27:41', '2024-08-21 15:27:41'),
(2, 'ปรามะ', 'ฝังกลบ', '2024-08-31', 1234542, '3/9', 'aaaaaaaaaaaaaaaaaaaaa', '0923313513', '2024-08-21 15:27:51', '2024-08-21 15:27:51'),
(3, 'ปรามะ', 'ฝังกลบ', '2024-08-21', 1234542, '3/9', 'aaaaaaaaaaaaaaaaaaaaa', '0923313513', '2024-08-21 19:14:49', '2024-08-21 19:14:49');

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
(26, '2024_08_19_221938_create_wastes_table', 1),
(61, '2014_10_12_000000_create_users_table', 2),
(62, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(63, '2019_08_19_000000_create_failed_jobs_table', 2),
(64, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(65, '2024_08_19_191718_create_villages_table', 2),
(66, '2024_08_21_183512_create_wastes_table', 3),
(67, '2024_08_21_213930_create_garbages_table', 3),
(71, '2024_08_21_223253_create_vehicles_table', 4),
(72, '2024_08_21_232052_create_employees_table', 4),
(73, '2024_08_22_001348_create_expenses_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Suhaila Samae', 'suhaila.jennis@gmail.com', NULL, '$2y$12$lpM/sA0QvB7TvQrQLdeGaemUvAhZ8fcla9/3g6tIJMNyiBWNWiu.S', NULL, '2024-08-21 14:16:45', '2024-08-21 14:16:45'),
(2, 'Suhaila Samae', '406459025@yru.ac.th', NULL, '$2y$12$d9sXovok67yxt1/7OizexeswHcnkNJ4bXI1AslHuihoPXsJOMgdWa', NULL, '2024-08-21 18:56:14', '2024-08-21 18:56:14'),
(3, 'Suhaila Samae', 'sss@gmail.com', NULL, '$2y$12$9yxPAqI2S/HOecG77ERKc.FbnO2tXv1XoG2fF9Xx4PHpi/4OxLvJu', NULL, '2024-08-21 19:05:31', '2024-08-21 19:05:31'),
(5, 'Suhaila Samae', '406459035@yru.ac.th', NULL, '$2y$12$byd60A9uNHir3G8YzyAQDO9I3Hc3sFN1d5X6xoJmWsVKRNoJk1hAe', NULL, '2024-08-22 01:21:13', '2024-08-22 01:21:13');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint UNSIGNED NOT NULL,
  `veh_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_service` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `veh_type`, `license`, `last_service`, `status`, `created_at`, `updated_at`) VALUES
(3, 'ContainerTruck', '82-023', '2024-08-24', 'Active', '2024-08-21 19:20:20', '2024-08-21 19:20:20'),
(5, 'CompactorTruck', '83-034', '2024-08-22', 'Inactive', '2024-08-21 19:22:01', '2024-08-21 19:22:01'),
(6, 'ContainerTruck', '32-324', '2024-08-21', 'Inactive', '2024-08-21 19:22:15', '2024-08-21 19:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `villages`
--

CREATE TABLE `villages` (
  `village_id` bigint UNSIGNED NOT NULL,
  `village_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pop` int NOT NULL,
  `hh_count` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villages`
--

INSERT INTO `villages` (`village_id`, `village_name`, `pop`, `hh_count`, `created_at`, `updated_at`) VALUES
(1, 'บ้านเบอร์เส้ง', 200, 101, '2024-08-21 14:17:00', '2024-08-21 14:17:00'),
(2, 'บ้านมลายูบางกอก', 200, 101, '2024-08-21 19:12:11', '2024-08-21 19:12:11'),
(3, 'บ้านเปาะยานิ', 200, 101, '2024-08-21 19:12:20', '2024-08-21 19:12:20'),
(4, 'บ้านนัดโต๊ะโมง', 200, 101, '2024-08-21 19:12:41', '2024-08-21 19:12:41'),
(5, 'บ้านบาโงยบาแด', 200, 101, '2024-08-21 19:12:51', '2024-08-21 19:12:51'),
(6, 'บ้านพงบูโล๊ะ', 200, 101, '2024-08-21 19:12:58', '2024-08-21 19:12:58'),
(7, 'บ้านนิบงบารู', 200, 101, '2024-08-21 19:13:06', '2024-08-21 19:13:06'),
(8, 'บ้านกำปงบูเกะ', 200, 101, '2024-08-21 19:13:16', '2024-08-21 19:13:16'),
(9, 'บ้านกือแลมะห์', 200, 101, '2024-08-21 19:13:23', '2024-08-21 19:13:23'),
(10, 'บ้านตือเบาะ', 200, 101, '2024-08-21 19:13:32', '2024-08-21 19:13:32'),
(11, 'บ้านกำปงตือเงาะ', 200, 101, '2024-08-21 19:13:38', '2024-08-21 19:13:38'),
(12, 'บ้านลาโจ๊ะ', 200, 1011, '2024-08-21 19:13:47', '2024-08-22 01:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `wastes`
--

CREATE TABLE `wastes` (
  `id` bigint UNSIGNED NOT NULL,
  `village_id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `total_waste` int NOT NULL,
  `gen_waste` int NOT NULL,
  `org_waste` int NOT NULL,
  `rec_waste` int NOT NULL,
  `haz_waste` int NOT NULL,
  `inf_waste` int NOT NULL,
  `ind_waste` int NOT NULL,
  `e_waste` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wastes`
--

INSERT INTO `wastes` (`id`, `village_id`, `date`, `total_waste`, `gen_waste`, `org_waste`, `rec_waste`, `haz_waste`, `inf_waste`, `ind_waste`, `e_waste`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-08-23', 1234, 112, 11, 11, 11, 11, 11, 11, '2024-08-21 15:05:18', '2024-08-21 15:05:18'),
(2, 1, '2024-08-30', 21234, 32, 43, 43, 425, 5324, 253, 2354, '2024-08-21 15:05:39', '2024-08-21 15:05:39'),
(3, 1, '2024-08-22', 12343, 12, 21, 34, 243, 234, 234, 423, '2024-08-21 19:14:17', '2024-08-21 19:14:17'),
(4, 9, '2024-08-30', 12123, 213, 213, 123, 23, 1231, 123, 123, '2024-08-22 01:22:54', '2024-08-22 02:03:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_veh_license_foreign` (`veh_license`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_per_id_foreign` (`per_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `garbages`
--
ALTER TABLE `garbages`
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
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicles_license_unique` (`license`);

--
-- Indexes for table `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `wastes`
--
ALTER TABLE `wastes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wastes_village_id_foreign` (`village_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `garbages`
--
ALTER TABLE `garbages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `villages`
--
ALTER TABLE `villages`
  MODIFY `village_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wastes`
--
ALTER TABLE `wastes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_veh_license_foreign` FOREIGN KEY (`veh_license`) REFERENCES `vehicles` (`license`) ON DELETE CASCADE;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_per_id_foreign` FOREIGN KEY (`per_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wastes`
--
ALTER TABLE `wastes`
  ADD CONSTRAINT `wastes_village_id_foreign` FOREIGN KEY (`village_id`) REFERENCES `villages` (`village_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
