-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 09:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrix`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset_forms`
--

CREATE TABLE `asset_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_group_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `device_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `res_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `res_emp_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asset_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asset_configuration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peripheral_device` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `location_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_forms`
--

INSERT INTO `asset_forms` (`id`, `asset_group_id`, `user_id`, `device_name`, `res_person`, `res_emp_code`, `asset_location`, `asset_configuration`, `floor`, `ip`, `peripheral_device`, `other`, `other_two`, `created_at`, `updated_at`, `department`, `purchase_date`, `location_id`) VALUES
(19, 24, 1, NULL, '23456', '345', '3456', '3456', '3456', '456', '456', NULL, NULL, '2019-02-26 03:45:50', '2019-02-26 03:45:50', '23456', '2019-02-26', 6),
(22, 24, 1, NULL, '234', '234', '34', '34', '34', '34', '34', NULL, NULL, '2019-02-26 03:46:10', '2019-02-26 03:46:10', '234', '2019-02-26', 6),
(23, 24, 1, NULL, 'ram', 'asdasdasd', 'rHO', 'JJ', 'asdasd', 'www.rojantamrakar.com.np', 'sdf', NULL, NULL, '2019-02-26 04:38:16', '2019-02-26 04:38:16', 'test', '2019-02-26', 6);

-- --------------------------------------------------------

--
-- Table structure for table `asset_groups`
--

CREATE TABLE `asset_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` tinyint(1) DEFAULT NULL,
  `device_name` tinyint(1) DEFAULT NULL,
  `res_person` tinyint(1) DEFAULT NULL,
  `res_emp_code` tinyint(1) DEFAULT NULL,
  `asset_location` tinyint(1) DEFAULT NULL,
  `asset_configuration` tinyint(1) DEFAULT NULL,
  `floor` tinyint(1) DEFAULT NULL,
  `ip` tinyint(1) DEFAULT NULL,
  `peripheral_device` tinyint(1) DEFAULT NULL,
  `other` tinyint(1) DEFAULT NULL,
  `other_two` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department` tinyint(1) DEFAULT NULL,
  `purchase_date` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_groups`
--

INSERT INTO `asset_groups` (`id`, `name`, `code`, `device_name`, `res_person`, `res_emp_code`, `asset_location`, `asset_configuration`, `floor`, `ip`, `peripheral_device`, `other`, `other_two`, `created_at`, `updated_at`, `department`, `purchase_date`) VALUES
(24, 'Computer', NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 0, 0, '2019-02-24 08:45:40', '2019-02-24 10:41:33', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `daily_status_updates`
--

CREATE TABLE `daily_status_updates` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_form_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `evening_time` datetime DEFAULT NULL,
  `morning_time` datetime DEFAULT NULL,
  `morning_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evening_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `morning_status` enum('Working','Not Working') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evening_status` enum('Working','Not Working') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_status_updates`
--

INSERT INTO `daily_status_updates` (`id`, `module_form_id`, `user_id`, `evening_time`, `morning_time`, `morning_remarks`, `evening_remarks`, `created_at`, `updated_at`, `morning_status`, `evening_status`, `location_id`) VALUES
(24, 28, 2, NULL, '2019-02-25 17:41:49', 'test', NULL, '2019-02-25 11:56:49', '2019-02-25 11:56:49', 'Working', NULL, 7),
(25, 28, 1, NULL, NULL, NULL, NULL, '2019-02-26 04:57:14', '2019-02-26 05:14:31', NULL, NULL, 6),
(28, 30, 1, '2019-02-26 11:14:41', '2019-02-26 11:10:58', 'test', 'test', '2019-02-26 05:26:01', '2019-02-26 05:29:44', 'Not Working', 'Not Working', 6),
(29, 28, 1, NULL, '2019-02-27 11:29:12', 'test', NULL, '2019-02-27 05:44:17', '2019-02-27 05:44:17', 'Not Working', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `location_id`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', '6', '2019-02-05 07:36:26', '2019-02-07 06:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `internets`
--

CREATE TABLE `internets` (
  `id` int(10) UNSIGNED NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intranet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intranet_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_intranet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_upto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_internet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `country`, `created_at`, `updated_at`) VALUES
(6, 'CGHO, Sanepa', 'Nepal', '2019-02-15 07:08:34', '2019-02-15 07:08:34'),
(7, 'CGFP, Bhaisepati', 'Nepal', '2019-02-15 07:08:52', '2019-02-15 07:08:52'),
(8, 'CGIP, Nawalparasi', 'Nepal', '2019-02-15 07:09:25', '2019-02-15 07:09:25'),
(9, 'CG Foods Enterprises, Bardiya', 'Nepal', '2019-02-15 07:09:46', '2019-02-15 07:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `mail_setups`
--

CREATE TABLE `mail_setups` (
  `id` int(10) UNSIGNED NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_setups`
--

INSERT INTO `mail_setups` (`id`, `to`, `cc`, `created_at`, `updated_at`) VALUES
(1, 'r0zaantamrakar@gmail.com', 'r0zaantamrakar@gmail.com,rojan.tamrakar@chaudharygroup.com', NULL, '2019-02-25 09:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_05_050248_create_roles_table', 1),
(4, '2019_02_05_050355_alter_users_add_role_id_column', 1),
(5, '2019_02_05_071008_create_locations_table', 2),
(6, '2019_02_05_092057_alter_users_add_location_id_column', 3),
(7, '2019_02_05_110640_create_devices_table', 4),
(8, '2019_02_05_121919_create_modules_table', 4),
(9, '2019_02_05_125019_create_groups_table', 5),
(14, '2019_02_05_133903_create_module_forms_table', 8),
(15, '2019_02_06_121829_create_assets_groups_table', 8),
(17, '2019_02_05_163409_alter_modules_add_column', 9),
(20, '2019_02_06_125547_create_asset_groups_table', 10),
(22, '2019_02_06_141715_create_networks_table', 12),
(23, '2019_02_06_132611_create_asset_forms_table', 13),
(24, '2019_02_07_064738_alter_module_forms_add_user_id_column', 14),
(26, '2019_02_07_132320_create_daily_status_updates_table', 15),
(27, '2019_02_09_050042_alter_drop_morning_evening_status', 16),
(28, '2019_02_09_050254_alter_create_morning_evening_status', 16),
(30, '2019_02_13_033446_alter_asset_group_add_department_purchase_date_column', 17),
(31, '2019_02_13_033149_alter_asset_form_add_department_purchase_date_column', 18),
(32, '2019_02_19_204257_create_vendors_table', 19),
(33, '2019_02_19_221044_alter_module_forms_add_location_id_column', 20),
(34, '2019_02_21_091015_alter_daily_status_updates_delete_morning_status_column', 21),
(35, '2019_02_21_091139_alter_daily_status_updates_add_morning_status_column', 21),
(36, '2019_02_21_155736_create_internets_table', 22),
(37, '2019_02_22_091442_create_users_modules_pivot_table', 23),
(42, '2019_02_22_145146_create_user_accesses_table', 24),
(43, '2019_02_24_105353_user_asset_group_pivot_table', 25),
(44, '2019_02_24_125104_alter_internets_add_file_column', 26),
(45, '2019_02_24_171252_alter_daily_status_updates_add_location_id_column', 27),
(46, '2019_02_25_144455_create_mail_setups_table', 28),
(47, '2019_02_26_092702_alter_asset_forms_location_id_column', 29),
(48, '2019_02_26_100604_alter_internets_add_connection_type_column', 30);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ip` tinyint(1) DEFAULT NULL,
  `model` tinyint(1) DEFAULT NULL,
  `res_emp` tinyint(1) DEFAULT NULL,
  `res_emp_code` tinyint(1) DEFAULT NULL,
  `location` tinyint(1) DEFAULT NULL,
  `floor` tinyint(1) DEFAULT NULL,
  `nvr_ip` tinyint(1) DEFAULT NULL,
  `capture_location` tinyint(1) DEFAULT NULL,
  `cctv_ip` tinyint(1) DEFAULT NULL,
  `other` tinyint(1) DEFAULT NULL,
  `other_two` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `created_at`, `updated_at`, `ip`, `model`, `res_emp`, `res_emp_code`, `location`, `floor`, `nvr_ip`, `capture_location`, `cctv_ip`, `other`, `other_two`) VALUES
(23, 'Attendance Device', '2019-02-24 08:45:15', '2019-02-26 04:56:36', 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0),
(24, 'CCTV Camera', '2019-02-24 10:18:22', '2019-02-24 10:20:00', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(25, 'Test', '2019-02-26 04:00:24', '2019-02-26 04:13:01', 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `module_forms`
--

CREATE TABLE `module_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `res_emp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `res_emp_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nvr_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capture_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cctv_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `location_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `module_forms`
--

INSERT INTO `module_forms` (`id`, `module_id`, `ip`, `model`, `res_emp`, `res_emp_code`, `location`, `floor`, `nvr_ip`, `capture_location`, `cctv_ip`, `other`, `other_two`, `created_at`, `updated_at`, `user_id`, `location_id`) VALUES
(28, 23, '2345', '23456', '234', '5234', '23456', '23456', NULL, NULL, NULL, NULL, NULL, '2019-02-25 11:56:41', '2019-02-25 11:56:41', 2, 7),
(29, 24, NULL, '4567', '4567', '4567', '345678', '4567', NULL, NULL, NULL, '567', NULL, '2019-02-26 04:15:15', '2019-02-26 04:15:15', 1, 6),
(30, 24, NULL, '4567', '3456', 'e', '3456789', '34566', '456', '12312', '4567', '456', '456', '2019-02-26 04:16:42', '2019-02-26 04:16:42', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `networks`
--

CREATE TABLE `networks` (
  `id` int(10) UNSIGNED NOT NULL,
  `network` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dns` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bandwidth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `res_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `res_emp_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_vendor_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `networks`
--

INSERT INTO `networks` (`id`, `network`, `public_ip`, `dns`, `static_ip`, `bandwidth`, `location`, `res_person`, `res_emp_code`, `contact_person`, `contact_vendor_number`, `created_at`, `updated_at`) VALUES
(3, 'World Link', '202.83.12.35', '202.83.12.36', NULL, '50 MBPs', 'HO Sanepa', 'Pradip  Bhandari', 'E05899', 'Pramesh Neaupane', '9849653157 /  014256985', '2019-02-25 07:06:17', '2019-02-25 07:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2019-02-04 18:15:00', '2019-02-04 18:15:00'),
(2, 'User', '2019-02-04 18:15:00', '2019-02-04 18:15:00'),
(3, 'IT Admin', '2019-02-04 18:15:00', '2019-02-04 18:15:00'),
(4, 'Admin', '2019-02-04 18:15:00', '2019-02-04 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `location_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `location_id`) VALUES
(1, 'Super Admin', 'admin@admin.com', '2019-02-04 18:15:00', '$2y$10$Km.Q84.ZriTPn3IM1xq/sOKDZC0eRdDAgrjTgmkFOUmzTN.YczNvy', 'ronj7G9zPS7gSNr7ZptT2aqUfmuIGBP5QU7Scywk01GBTJWpWPZWK9OOPI9V', '2019-02-04 18:15:00', '2019-02-04 18:15:00', 1, 6),
(2, 'Rojan', 'r0zaantamrakar@gmail.com', NULL, '$2y$10$Km.Q84.ZriTPn3IM1xq/sOKDZC0eRdDAgrjTgmkFOUmzTN.YczNvy', 'HJfgelvOJFe3UhON5CFXbRDNBTPrmmSPNRhwq0ZlQHZU0EvEGBF9YNnLu6n3', '2019-02-05 03:37:01', '2019-02-26 03:35:25', 2, 6),
(21, 'Admin', 'matrix@admin.com', NULL, '$2y$10$ccsVc/U8nBqDg2ED3jPjAuUOCWyhKv4mXsTApHMrGgc20/58pClyO', NULL, '2019-02-25 10:49:26', '2019-02-25 10:49:26', 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users_modules_pivot`
--

CREATE TABLE `users_modules_pivot` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `module_id` int(10) UNSIGNED NOT NULL,
  `read` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_modules_pivot`
--

INSERT INTO `users_modules_pivot` (`id`, `user_id`, `module_id`, `read`, `full`, `created_at`, `updated_at`) VALUES
(35, 1, 23, 'on', 'on', '2019-02-24 08:45:15', '2019-02-24 08:45:15'),
(36, 2, 23, 'off', 'on', '2019-02-24 08:58:40', '2019-02-25 10:37:41'),
(37, 1, 24, 'on', 'on', '2019-02-24 10:18:22', '2019-02-24 10:18:22'),
(38, 2, 24, 'off', 'off', '2019-02-25 03:58:01', '2019-02-25 10:37:41'),
(60, 21, 23, 'on', 'on', '2019-02-25 10:49:26', '2019-02-25 10:49:26'),
(61, 21, 24, 'on', 'on', '2019-02-25 10:49:26', '2019-02-25 10:49:26'),
(62, 1, 25, 'on', 'on', '2019-02-26 04:00:24', '2019-02-26 04:00:24'),
(63, 21, 25, 'on', 'on', '2019-02-26 04:00:24', '2019-02-26 04:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_accesses`
--

CREATE TABLE `user_accesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_accesses`
--

INSERT INTO `user_accesses` (`id`, `user_id`, `name`, `read`, `full`, `created_at`, `updated_at`) VALUES
(1, 2, 'Internet', 'off', 'off', '2019-02-22 09:46:00', '2019-02-25 10:32:07'),
(5, 2, 'Location', 'on', 'on', '2019-02-22 10:12:34', '2019-02-25 04:13:45'),
(6, 2, 'Network', 'off', 'off', '2019-02-22 10:12:34', '2019-02-25 10:32:07'),
(7, 2, 'Device Report', 'on', 'on', '2019-02-22 10:12:34', '2019-02-25 10:32:07'),
(11, 1, 'Internet', 'on', 'on', '2019-02-21 18:15:00', '2019-02-21 18:15:00'),
(12, 1, 'Location', 'on', 'on', '2019-02-21 18:15:00', '2019-02-21 18:15:00'),
(13, 1, 'Network', 'on', 'on', '2019-02-21 18:15:00', '2019-02-21 18:15:00'),
(14, 1, 'Device Report', 'on', 'on', '2019-02-21 18:15:00', '2019-02-21 18:15:00'),
(15, 1, 'Asset Group Setup', 'on', 'on', '2019-02-21 18:15:00', '2019-02-21 18:15:00'),
(16, 2, 'Asset Group Setup', 'on', 'off', NULL, NULL),
(17, 1, 'Module Setup', 'on', 'on', '2019-02-21 18:15:00', '2019-02-21 18:15:00'),
(18, 2, 'Module Setup', 'on', 'off', '2019-02-21 18:15:00', '2019-02-21 18:15:00'),
(19, 1, 'Vendors', 'on', 'on', '2019-02-21 18:15:00', '2019-02-21 18:15:00'),
(26, 2, 'Vendors', 'off', 'off', '2019-02-22 11:51:04', '2019-02-25 10:32:07'),
(39, 21, 'Internet', 'on', 'on', '2019-02-25 10:49:26', '2019-02-25 10:49:26'),
(40, 21, 'Network', 'on', 'on', '2019-02-25 10:49:26', '2019-02-25 10:49:26'),
(41, 21, 'Device Report', 'on', 'on', '2019-02-25 10:49:26', '2019-02-25 10:49:26'),
(42, 21, 'Vendors', 'on', 'on', '2019-02-25 10:49:26', '2019-02-25 10:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_asset_group_pivot`
--

CREATE TABLE `user_asset_group_pivot` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `asset_group_id` int(10) UNSIGNED NOT NULL,
  `read` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_asset_group_pivot`
--

INSERT INTO `user_asset_group_pivot` (`id`, `user_id`, `asset_group_id`, `read`, `full`, `created_at`, `updated_at`) VALUES
(6, 1, 24, 'on', 'on', '2019-02-24 08:45:40', '2019-02-24 08:45:40'),
(7, 2, 24, 'off', 'on', '2019-02-24 08:58:40', '2019-02-25 10:37:41'),
(30, 21, 24, 'on', 'on', '2019-02-25 10:49:26', '2019-02-25 10:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_person_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_key_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_support` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `key_person`, `key_person_number`, `office_number`, `office_location`, `alt_key_person`, `brand_support`, `other`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test', 'test', 'test', 'test', NULL, 'test', NULL, '2019-02-20 03:49:45', '2019-02-19 15:27:10', '2019-02-20 03:49:45'),
(2, 'NImble Infosys Pvt. Ltd.', 'Khem Raj Ghimire', '985109069', '014104381/82/77', 'New Baneswor', 'Ravi Neupane', 'Software Slaes and support', '9851203618 Ravi', NULL, '2019-02-20 03:48:15', '2019-02-20 03:48:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset_forms`
--
ALTER TABLE `asset_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_forms_asset_group_id_foreign` (`asset_group_id`),
  ADD KEY `asset_forms_user_id_foreign` (`user_id`),
  ADD KEY `asset_forms_location_id_foreign` (`location_id`);

--
-- Indexes for table `asset_groups`
--
ALTER TABLE `asset_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_status_updates`
--
ALTER TABLE `daily_status_updates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daily_status_updates_location_id_foreign` (`location_id`),
  ADD KEY `daily_status_updates_module_form_id_foreign` (`module_form_id`),
  ADD KEY `daily_status_updates_user_id_foreign` (`user_id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internets`
--
ALTER TABLE `internets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_setups`
--
ALTER TABLE `mail_setups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_forms`
--
ALTER TABLE `module_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_forms_location_id_foreign` (`location_id`),
  ADD KEY `module_forms_module_id_foreign` (`module_id`),
  ADD KEY `module_forms_user_id_foreign` (`user_id`);

--
-- Indexes for table `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `users_modules_pivot`
--
ALTER TABLE `users_modules_pivot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_modules_pivot_user_id_foreign` (`user_id`),
  ADD KEY `users_modules_pivot_module_id_foreign` (`module_id`);

--
-- Indexes for table `user_accesses`
--
ALTER TABLE `user_accesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_accesses_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_asset_group_pivot`
--
ALTER TABLE `user_asset_group_pivot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_asset_group_pivot_user_id_foreign` (`user_id`),
  ADD KEY `user_asset_group_pivot_asset_group_id_foreign` (`asset_group_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset_forms`
--
ALTER TABLE `asset_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `asset_groups`
--
ALTER TABLE `asset_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `daily_status_updates`
--
ALTER TABLE `daily_status_updates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internets`
--
ALTER TABLE `internets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mail_setups`
--
ALTER TABLE `mail_setups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `module_forms`
--
ALTER TABLE `module_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `networks`
--
ALTER TABLE `networks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_modules_pivot`
--
ALTER TABLE `users_modules_pivot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user_accesses`
--
ALTER TABLE `user_accesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_asset_group_pivot`
--
ALTER TABLE `user_asset_group_pivot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asset_forms`
--
ALTER TABLE `asset_forms`
  ADD CONSTRAINT `asset_forms_asset_group_id_foreign` FOREIGN KEY (`asset_group_id`) REFERENCES `asset_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asset_forms_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asset_forms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `daily_status_updates`
--
ALTER TABLE `daily_status_updates`
  ADD CONSTRAINT `daily_status_updates_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `daily_status_updates_module_form_id_foreign` FOREIGN KEY (`module_form_id`) REFERENCES `module_forms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `daily_status_updates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `module_forms`
--
ALTER TABLE `module_forms`
  ADD CONSTRAINT `module_forms_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `module_forms_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `module_forms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_modules_pivot`
--
ALTER TABLE `users_modules_pivot`
  ADD CONSTRAINT `users_modules_pivot_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_modules_pivot_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_accesses`
--
ALTER TABLE `user_accesses`
  ADD CONSTRAINT `user_accesses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_asset_group_pivot`
--
ALTER TABLE `user_asset_group_pivot`
  ADD CONSTRAINT `user_asset_group_pivot_asset_group_id_foreign` FOREIGN KEY (`asset_group_id`) REFERENCES `asset_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_asset_group_pivot_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
