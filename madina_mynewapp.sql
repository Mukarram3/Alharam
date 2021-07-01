-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 07:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madina_mynewapp`
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
-- Table structure for table `finances`
--

CREATE TABLE `finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planId` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `advantage` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `finances`
--

INSERT INTO `finances` (`id`, `planId`, `title`, `description`, `created_at`, `updated_at`, `advantage`) VALUES
(6, 2, 'Car Ijarah', 'Get the car of your choice interest-free way. With simple, convenient and flexible solutions that are Shari’ah compliant along with the following benefits', '2021-06-03 02:47:04', '2021-06-03 02:47:04', '[\"Flexible tenure from 1 to 7 years (6 & 7 years is available for 950 CC vehicles and above)\",\"Flexible tenure from 1 to 7 years (6 & 7 years is available for 950 CC vehicles and above) Security deposit as low as 15%\",\"No upfront Insurance\\/Takaful charges\",\"No upfront registration charges\",\"No rentals before delivery of the vehicle\",\"Competitive pricing\",\"Minimal documentation and application fee\",\"No hidden costs\",\"Quick Processing time\"]'),
(7, 2, 'Conventional', 'Be in the driver’s seat when buying the perfect car of your choice. Suzuki Finance Arrangement program lets you control your payment plan. With our quick loan processing, the only thing that’ll take time is deciding what product and which color to pick', '2021-06-03 02:55:46', '2021-06-03 02:55:46', '[\"Affordable mark-up rates to choose from i.e. fixed and variable\"]');

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
(4, '2021_05_28_175906_create_plans_table', 1),
(5, '2021_05_29_101057_create_vehiclecategories_table', 2),
(6, '2021_05_29_101331_create_vehicletypes_table', 2),
(7, '2021_06_02_064538_create_finances_table', 3),
(8, '2021_06_03_062908_add_advantage_to_finances_table', 4),
(9, '2021_06_03_065024_drop_advantage_from_finances_table', 5),
(10, '2021_06_03_065259_add_advatage_to_finances_table', 6);

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `image`, `description`, `btn_name`, `created_at`, `updated_at`) VALUES
(2, 'Mode of Finance', '60b5d6f5ee0b6.png', 'Let us know which type of financing you want', 'Select Mode Of Finance', '2021-06-01 01:43:02', '2021-06-01 01:43:02'),
(6, 'Select Your Suzuki', '60b88933c9c7d.png', 'Just select your desired Suzuki vehicle which you want to finance from our wide range of latest contemporary models', 'Select Suzuki', '2021-06-03 02:48:04', '2021-06-03 02:48:04');

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
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `city`, `mobile`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mukarram', 'mukarram123786@gmail.com', NULL, '$2y$10$3YKwYLFWlfDjwM0suOVBb.eMHQZvvVO57Z.wq1vWIZF./9UEHES8m', 'street 8', 'sargodha', '03066703820', '60b2146c3ca6a.png', NULL, '2021-05-29 05:16:12', '2021-05-29 05:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `vehiclecategories`
--

CREATE TABLE `vehiclecategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planId` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehiclecategories`
--

INSERT INTO `vehiclecategories` (`id`, `planId`, `title`, `image`, `created_at`, `updated_at`) VALUES
(4, 6, 'Alto', '60b88ff2a47f8.png', '2021-06-03 03:16:50', '2021-06-03 03:16:50'),
(6, 6, 'Jimny', '60b89051497c6.jpg', '2021-06-03 03:18:25', '2021-06-03 03:18:25'),
(7, 6, 'Swift', '60b8909fbf5cf.jpg', '2021-06-03 03:19:43', '2021-06-03 03:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `vehicletypes`
--

CREATE TABLE `vehicletypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicleId` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_cap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_cap` int(11) NOT NULL,
  `doors` int(11) NOT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transm_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicletypes`
--

INSERT INTO `vehicletypes` (`id`, `vehicleId`, `title`, `price`, `image`, `description`, `engine_cap`, `seat_cap`, `doors`, `fuel_type`, `transm_type`, `version`, `colours`, `created_at`, `updated_at`) VALUES
(7, 4, 'Alto', 12, '60b891205d98b.png', 'The Car for New Generation Fuel Efficient – Spacious – Modern Design', '660 cc', 4, 5, 'Petrol', 'Manual/ Auto Gear Shift', 'VX, VXR, AGS', 'Cerulean Blue, Pearl Red, Graphite Gray, Silky Silver, White, Pearl Black, Sand Beige', '2021-06-03 03:21:52', '2021-06-03 03:21:52'),
(8, 4, 'Alto', 12, '60b8917fea13e.jpg', 'The Car for New Generation Fuel Efficient – Spacious – Modern Design', '660 cc', 4, 5, 'Petrol', 'Manual/ Auto Gear Shift', 'VX, VXR, AGS', 'Cerulean Blue, Pearl Red, Graphite Gray, Silky Silver, White, Pearl Black, Sand Beige', '2021-06-03 03:23:27', '2021-06-03 03:23:27'),
(9, 6, 'Jimny', 5, '60b8920871762.jpg', 'Nothing but daring', '1500 cc', 4, 3, 'Petrol', 'Manual (4WD)', 'GA', 'White, Metallic Silky Silver, Kinetic Yellow, Jungle Green, Pearl Bluish Black', '2021-06-03 03:25:44', '2021-06-03 03:25:44');

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
-- Indexes for table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `finances_planid_foreign` (`planId`);

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
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehiclecategories`
--
ALTER TABLE `vehiclecategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehiclecategories_planid_foreign` (`planId`);

--
-- Indexes for table `vehicletypes`
--
ALTER TABLE `vehicletypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicletypes_vehicleid_foreign` (`vehicleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finances`
--
ALTER TABLE `finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehiclecategories`
--
ALTER TABLE `vehiclecategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicletypes`
--
ALTER TABLE `vehicletypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `finances`
--
ALTER TABLE `finances`
  ADD CONSTRAINT `finances_planid_foreign` FOREIGN KEY (`planId`) REFERENCES `plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vehiclecategories`
--
ALTER TABLE `vehiclecategories`
  ADD CONSTRAINT `vehiclecategories_planid_foreign` FOREIGN KEY (`planId`) REFERENCES `plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vehicletypes`
--
ALTER TABLE `vehicletypes`
  ADD CONSTRAINT `vehicletypes_vehicleid_foreign` FOREIGN KEY (`vehicleId`) REFERENCES `vehiclecategories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
