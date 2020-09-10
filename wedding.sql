-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2020 at 09:39 PM
-- Server version: 10.3.20-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htetoolinn_wed`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`id`, `booking_id`, `item_id`, `created_at`, `updated_at`) VALUES
(28, 18, 14, '2020-03-06 23:24:23', '2020-03-06 23:24:23'),
(29, 18, 2, '2020-03-06 23:24:24', '2020-03-06 23:24:24'),
(30, 19, 2, '2020-03-07 06:05:59', '2020-03-07 06:05:59'),
(31, 19, 3, '2020-03-07 06:05:59', '2020-03-07 06:05:59'),
(32, 20, 2, '2020-03-09 02:26:48', '2020-03-09 02:26:48'),
(33, 20, 3, '2020-03-09 02:26:48', '2020-03-09 02:26:48'),
(34, 21, 2, '2020-03-09 02:28:59', '2020-03-09 02:28:59'),
(35, 21, 3, '2020-03-09 02:29:00', '2020-03-09 02:29:00'),
(36, 21, 12, '2020-03-09 02:29:00', '2020-03-09 02:29:00'),
(37, 21, 23, '2020-03-09 02:29:00', '2020-03-09 02:29:00'),
(38, 21, 39, '2020-03-09 02:29:00', '2020-03-09 02:29:00'),
(39, 21, 17, '2020-03-09 02:29:00', '2020-03-09 02:29:00'),
(40, 21, 33, '2020-03-09 02:29:00', '2020-03-09 02:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `total`, `date`, `start_time`, `end_time`, `package_id`, `notes`, `created_at`, `updated_at`) VALUES
(18, 3, 28300000, '2020-03-19', '11:11', '12:22', 9, 'aaaaaaaaaaaaaaaaaaaaaaa', '2020-03-06 23:24:23', '2020-03-06 23:24:23'),
(19, 4, 500000, '2020-03-18', '11:11', '12:22', 9, 'thank U', '2020-03-07 06:05:59', '2020-03-07 06:05:59'),
(20, 5, 500000, '2020-03-17', '11:11', '14:22', 8, 'thank', '2020-03-09 02:26:48', '2020-03-09 02:26:48'),
(21, 5, 24050000, '2020-03-27', '10:11', '12:22', 9, 'Thank U', '2020-03-09 02:28:59', '2020-03-09 02:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `photo`, `price`, `service_id`, `created_at`, `updated_at`) VALUES
(2, 'Planning', '/storage/item/1583208461.jpg', 300000, 2, '2020-03-02 03:17:03', '2020-07-27 07:15:21'),
(3, 'San Francisco', '/storage/item/1583208491.jpg', 200000, 2, '2020-03-02 03:20:00', '2020-07-27 07:15:50'),
(4, 'Marbella', '/storage/item/1583208525.jpg', 200000, 2, '2020-03-02 03:20:45', '2020-07-27 07:15:58'),
(5, 'Newsletter', '/storage/item/1583208768.jpg', 200000, 2, '2020-03-02 03:21:33', '2020-07-27 07:16:07'),
(6, 'Graffin Cateing', '/storage/item/1583208853.jpg', 250000, 2, '2020-03-02 03:22:32', '2020-07-27 07:16:14'),
(7, 'Banquet', '/storage/item/1583208883.jpg', 100000, 2, '2020-03-02 03:23:29', '2020-07-27 07:16:22'),
(9, 'Mainson', '/storage/item/1583208914.jpg', 400000, 2, '2020-03-02 03:26:31', '2020-07-27 07:16:32'),
(10, 'Strawberry Cake', '/storage/item/1583208949.jpeg', 30000, 2, '2020-03-02 03:27:56', '2020-07-27 07:16:41'),
(11, 'Sedona Hotel', '/storage/item/1583208967.jpg', 25000000, 1, '2020-03-02 03:32:04', '2020-07-27 07:16:51'),
(12, 'Chatrium Hotel', '/storage/item/1583208982.jpg', 22000000, 1, '2020-03-02 03:33:31', '2020-07-27 07:16:58'),
(13, 'R.Garden Hotel', '/storage/item/1583208996.jpg', 15000000, 1, '2020-03-02 03:34:22', '2020-07-27 07:17:09'),
(14, 'Novotel Hotel', '/storage/item/1583209006.jpg', 28000000, 1, '2020-03-02 03:37:43', '2020-07-27 07:17:23'),
(15, 'Lotte Hotel', '/storage/item/1583209018.jpg', 24000000, 1, '2020-03-02 03:40:38', '2020-07-27 07:17:39'),
(16, 'Jasmine Hotel', '/storage/item/1583209034.jpg', 17000000, 1, '2020-03-02 03:41:51', '2020-07-27 07:17:58'),
(17, 'Khin San Win MakeUp', '/storage/item/1583209068.jpg', 500000, 6, '2020-03-02 03:42:42', '2020-03-02 21:47:48'),
(18, 'Htet Htet Make-Up', '/storage/item/1583209337.jpg', 500000, 6, '2020-03-02 03:43:22', '2020-03-02 21:52:17'),
(19, 'Calvin Wai Yan Make-Up', '/storage/item/1583209972.png', 400000, 6, '2020-03-02 03:44:21', '2020-03-02 22:02:52'),
(20, 'May Oo Maung', '/storage/item/1583209351.jpg', 400000, 6, '2020-03-02 03:45:06', '2020-03-02 21:52:31'),
(21, 'Aung Make-Up', '/storage/item/1583209365.jpg', 200000, 6, '2020-03-02 03:46:19', '2020-03-02 22:25:57'),
(22, 'Kyal Sin Thu', '/storage/item/1583209378.jpg', 150000, 6, '2020-03-02 03:47:05', '2020-03-02 21:52:58'),
(23, 'Always & Forever', '/storage/item/1583209394.jpg', 350000, 3, '2020-03-02 03:49:51', '2020-03-02 21:53:14'),
(24, 'Eiysian Floral', '/storage/item/1583209404.jpg', 300000, 3, '2020-03-02 03:50:29', '2020-03-02 21:53:24'),
(25, 'Lovely Flower', '/storage/item/1583209415.jpg', 400000, 3, '2020-03-02 03:51:20', '2020-03-02 21:53:35'),
(26, 'To My Dear', '/storage/item/1583209428.jpg', 420000, 3, '2020-03-02 03:51:59', '2020-03-02 21:53:48'),
(27, 'Rose flower', '/storage/item/1583209441.jpg', 470000, 3, '2020-03-02 03:52:40', '2020-03-02 21:54:01'),
(28, 'Flower Bucket', '/storage/item/1583209456.jpg', 310000, 3, '2020-03-02 03:55:57', '2020-03-02 21:54:16'),
(29, 'Casket Flowers', '/storage/item/1583209470.jpg', 200000, 3, '2020-03-02 03:56:52', '2020-03-02 21:54:30'),
(33, 'Ko Myo Myint Aung', '/storage/item/1583145092.jpg', 400000, 8, '2020-03-02 04:01:32', '2020-03-02 04:01:32'),
(35, 'U Kyaw Kyaw Aung', '/storage/item/1583145157.jpg', 150000, 8, '2020-03-02 04:02:37', '2020-03-02 04:02:37'),
(36, 'Classic', '/storage/item/1583145221.jpg', 300000, 5, '2020-03-02 04:03:41', '2020-03-02 04:03:41'),
(37, 'Classic Dance', '/storage/item/1583209582.jpg', 400000, 5, '2020-03-02 04:04:21', '2020-03-02 21:56:22'),
(38, 'Tradition', '/storage/item/1583145293.jpg', 250000, 5, '2020-03-02 04:04:53', '2020-03-02 04:04:53'),
(39, 'Aroma', '/storage/item/1583145365.jpg', 300000, 4, '2020-03-02 04:06:05', '2020-03-02 04:06:05'),
(40, 'KTK Photo', '/storage/item/1583209954.jpg', 400000, 4, '2020-03-02 04:06:53', '2020-03-02 22:02:34'),
(41, 'Sweet Heart', '/storage/item/1583145465.jpg', 300000, 4, '2020-03-02 04:07:45', '2020-03-02 04:07:45'),
(42, 'Hoya Hotel', '/storage/item/1583209285.jpg', 12000000, 1, '2020-03-02 21:51:25', '2020-07-27 07:34:36'),
(43, 'Angel Hotel', '/storage/item/1583217980.jpg', 10000000, 1, '2020-03-03 00:16:20', '2020-07-27 07:36:05'),
(44, 'Ko Kyaw Htet Aung', '/storage/item/1583228375.jpg', 250000, 8, '2020-03-03 03:09:35', '2020-03-03 03:10:36'),
(45, 'Victory  Hotel', '/storage/item/1583295188.jpg', 30000000, 1, '2020-03-03 21:43:08', '2020-07-27 07:34:59'),
(46, 'Sakura Hotel', '/storage/item/1583295225.jpg', 20000000, 1, '2020-03-03 21:43:45', '2020-07-27 07:35:10'),
(47, 'Cupid Hotel', '/storage/item/1583295257.jpg', 19000000, 1, '2020-03-03 21:44:17', '2020-07-27 07:35:24'),
(48, 'Brilliant Hotel', '/storage/item/1583295289.jpg', 14000000, 1, '2020-03-03 21:44:49', '2020-07-27 07:35:38'),
(49, 'CAKES', '/storage/item/1583305502.jpeg', 12000000, 2, '2020-03-04 00:35:02', '2020-07-27 07:35:48');

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
(4, '2020_02_28_081735_create_services_table', 1),
(6, '2020_02_28_081835_create_packages_table', 1),
(9, '2020_02_28_084030_create_package_service_table', 1),
(10, '2020_02_28_081812_create_items_table', 2),
(11, '2020_03_05_033148_create_permission_tables', 3),
(12, '2020_02_28_081901_create_bookings_table', 4),
(13, '2020_02_28_081932_create_bookingdetails_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 3),
(2, 'App\\User', 4),
(2, 'App\\User', 5),
(2, 'App\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(8, 'Diamond', '2020-02-29 04:29:09', '2020-02-29 04:29:09'),
(9, 'Platinum', '2020-03-01 20:57:50', '2020-03-01 20:57:50'),
(10, 'Gold', '2020-03-02 00:52:37', '2020-03-02 00:52:37'),
(11, 'Silver', '2020-03-02 00:53:14', '2020-03-02 00:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `package_service`
--

CREATE TABLE `package_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_service`
--

INSERT INTO `package_service` (`id`, `package_id`, `service_id`, `created_at`, `updated_at`) VALUES
(5, 8, 1, '2020-02-29 04:29:10', '2020-02-29 04:29:10'),
(6, 8, 2, '2020-02-29 04:29:10', '2020-02-29 04:29:10'),
(7, 8, 3, '2020-02-29 04:29:10', '2020-02-29 04:29:10'),
(8, 8, 4, '2020-02-29 04:29:10', '2020-02-29 04:29:10'),
(9, 8, 5, '2020-02-29 04:29:10', '2020-02-29 04:29:10'),
(10, 8, 6, '2020-02-29 04:29:10', '2020-02-29 04:29:10'),
(11, 8, 8, '2020-02-29 04:29:10', '2020-02-29 04:29:10'),
(12, 9, 1, '2020-03-01 20:57:50', '2020-03-01 20:57:50'),
(13, 9, 2, '2020-03-01 20:57:50', '2020-03-01 20:57:50'),
(14, 9, 3, '2020-03-01 20:57:50', '2020-03-01 20:57:50'),
(15, 9, 4, '2020-03-01 20:57:50', '2020-03-01 20:57:50'),
(16, 9, 6, '2020-03-01 20:57:50', '2020-03-01 20:57:50'),
(17, 9, 8, '2020-03-01 20:57:50', '2020-03-01 20:57:50'),
(18, 10, 1, '2020-03-02 00:52:39', '2020-03-02 00:52:39'),
(19, 10, 2, '2020-03-02 00:52:39', '2020-03-02 00:52:39'),
(20, 10, 3, '2020-03-02 00:52:39', '2020-03-02 00:52:39'),
(21, 10, 4, '2020-03-02 00:52:39', '2020-03-02 00:52:39'),
(22, 10, 8, '2020-03-02 00:52:39', '2020-03-02 00:52:39'),
(23, 11, 1, '2020-03-02 00:53:14', '2020-03-02 00:53:14'),
(24, 11, 2, '2020-03-02 00:53:14', '2020-03-02 00:53:14'),
(25, 11, 3, '2020-03-02 00:53:14', '2020-03-02 00:53:14'),
(26, 11, 8, '2020-03-02 00:53:14', '2020-03-02 00:53:14'),
(28, 11, 4, '2020-03-09 02:24:01', '2020-03-09 02:24:01');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', NULL, NULL),
(2, 'User', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Halls', '2020-02-28 22:39:30', '2020-07-27 07:15:05'),
(2, 'Foods', '2020-02-28 22:41:15', '2020-07-27 07:14:57'),
(3, 'Flower and Light Decoration', '2020-02-28 22:44:33', '2020-02-28 22:44:33'),
(4, 'Photographer & Video', '2020-02-28 22:45:09', '2020-03-02 22:14:20'),
(5, 'Music Bands', '2020-02-28 22:45:09', '2020-02-28 22:46:10'),
(6, 'MakeUp', '2020-02-28 22:45:20', '2020-02-28 22:45:20'),
(8, 'Chief of Ceremory', '2020-02-29 02:59:25', '2020-02-29 02:59:25');

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$3Gp3ywRNsnkasWi2AavNpeBngPsl8edd/QTpx46RSjtxmiER52he6', NULL, '2020-03-05 04:52:17', '2020-03-05 04:52:17'),
(3, 'customer', 'customer12@gmail.com', NULL, '$2y$10$TL8eavr/x4dDKKes92uoy.IBZpugXx6nRyd4LxJCqZodjb69iejUK', NULL, '2020-03-06 22:36:31', '2020-03-06 22:36:31'),
(4, 'Kay Zin Soe', 'kaygyi1@gmail.com', NULL, '$2y$10$KBOGe4/ZdqRE0bRlrJnQGONFexuLP9ZMRPs18CmrweQlPb0GiC7aS', NULL, '2020-03-06 23:06:38', '2020-03-06 23:06:38'),
(5, 'Htet Oo Linn', 'htetoolinn83@gmail.com', NULL, '$2y$10$.2aw44p/WFRf3OmM4idzXOuhOK1s9Tfq7hitD8RoS04a9gQ1hIY8O', NULL, '2020-03-08 20:33:11', '2020-03-08 20:33:11'),
(6, 'customer', 'customer@gmail.com', NULL, '$2y$10$4gxI43Y/pfUatip4xbQ6fOUJH0jCewbsoGZBW1O.DMPXQ1UUUIfhm', NULL, '2020-07-27 06:52:29', '2020-07-27 06:52:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookingdetails_booking_id_foreign` (`booking_id`),
  ADD KEY `bookingdetails_item_id_foreign` (`item_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`),
  ADD KEY `bookings_package_id_foreign` (`package_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_service_id_foreign` (`service_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_service`
--
ALTER TABLE `package_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_service_package_id_foreign` (`package_id`),
  ADD KEY `package_service_service_id_foreign` (`service_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `package_service`
--
ALTER TABLE `package_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD CONSTRAINT `bookingdetails_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookingdetails_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package_service`
--
ALTER TABLE `package_service`
  ADD CONSTRAINT `package_service_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `package_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
