-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 04:50 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_jewelry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `job_title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'CHAN SOPHEAK', 'sopheakchhit99@gmail.com', 'ADMIN', '$2y$10$s3Cs.BTaXTYwa.F3NqLVvutMDCBdqLskmwrxNhsnPHT378NQp/T76', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'gold_ring', '2018-08-09 00:46:56', '2018-08-14 02:51:09'),
(2, 'silver_ring', '2018-08-09 00:47:06', '2018-08-14 02:51:19'),
(3, 'diamond_ring', '2018-08-09 00:47:16', '2018-08-14 02:51:29'),
(4, 'gold_necklace', '2018-08-09 09:46:53', '2018-08-12 01:13:16'),
(5, 'gold_earrings', '2018-08-12 01:35:54', '2018-08-12 01:35:54'),
(6, 'silver_necklace', '2018-08-14 03:01:10', '2018-08-14 03:01:10'),
(7, 'silver_earrings', '2018-08-14 03:01:29', '2018-08-14 03:01:29'),
(8, 'diamond_necklace', '2018-08-14 19:58:28', '2018-08-14 19:58:28'),
(9, 'diamond_earrings', '2018-08-14 19:58:51', '2018-08-14 19:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 'First Test', 'Hello Admin', '2018-08-20 21:13:10', '2018-08-20 21:13:10'),
(2, 5, 'Service', 'hello admin !! \r\nYou should improve your service.', '2018-08-27 02:46:27', '2018-08-27 02:46:27'),
(3, 5, 'Service', 'hello admin !! \r\nYou should improve your service.', '2018-08-27 02:48:37', '2018-08-27 02:48:37'),
(4, 5, 'Service', 'hello', '2018-08-27 02:51:41', '2018-08-27 02:51:41'),
(5, 5, 'Service', 'hello', '2018-08-27 02:52:36', '2018-08-27 02:52:36'),
(6, 6, 'test activity', 'testing activity diagram', '2018-09-03 05:24:49', '2018-09-03 05:24:49'),
(7, 1, 'Service', 'helo', '2019-02-09 09:02:15', '2019-02-09 09:02:15');

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
(3, '2018_07_12_030550_create_admins_table', 1),
(4, '2018_07_12_030746_create_products_table', 1),
(5, '2018_07_15_142736_create_order_table', 1),
(6, '2018_08_09_071329_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `pro_id`, `qty`, `created_at`, `updated_at`) VALUES
(63, '1', '21', '1', '2018-07-26 07:33:49', '2018-07-26 07:33:49'),
(65, '5', '2', '3', '2018-07-27 05:50:40', '2018-07-27 05:50:40'),
(66, '6', '4', '2', '2018-07-28 08:20:55', '2018-07-28 08:20:55'),
(67, '1', '5', '1', '2018-07-29 08:25:45', '2018-07-29 08:25:45'),
(68, '5', '12', '1', '2018-07-30 06:52:46', '2018-07-30 06:52:46'),
(69, '6', '12', '1', '2018-07-30 06:52:46', '2018-07-30 06:52:46'),
(70, '1', '12', '1', '2018-07-30 06:29:07', '2018-07-30 06:29:07'),
(71, '5', '12', '1', '2018-07-30 06:52:46', '2018-07-30 06:52:46'),
(72, '6', '12', '1', '2018-07-30 06:52:46', '2018-07-30 06:52:46'),
(73, '1', '12', '1', '2018-07-30 06:33:24', '2018-07-30 06:33:24'),
(74, '5', '21', '1', '2018-07-10 07:33:49', '2018-07-10 07:33:49'),
(75, '5', '2', '2', '2018-07-11 05:50:40', '2018-07-11 05:50:40'),
(76, '6', '4', '1', '2018-07-12 08:20:55', '2018-07-12 08:20:55'),
(77, '1', '5', '2', '2018-07-12 08:25:45', '2018-07-12 08:25:45'),
(78, '5', '12', '1', '2018-07-13 05:50:04', '2018-07-13 05:50:04'),
(79, '1', '12', '1', '2018-07-14 05:50:04', '2018-07-14 05:50:04'),
(80, '6', '12', '1', '2018-07-14 06:29:07', '2018-07-14 06:29:07'),
(81, '1', '12', '1', '2018-07-15 05:50:04', '2018-07-15 05:50:04'),
(82, '6', '12', '1', '2018-07-16 05:50:04', '2018-07-16 05:50:04'),
(83, '5', '12', '1', '2018-07-17 06:33:24', '2018-07-17 06:33:24'),
(89, '6', '12', '1', '2018-07-30 06:52:46', '2018-07-30 06:52:46'),
(90, '1', '12', '1', '2018-07-30 06:29:07', '2018-07-30 06:29:07'),
(91, '5', '12', '1', '2018-07-30 06:52:46', '2018-07-30 06:52:46'),
(92, '6', '12', '1', '2018-07-30 06:52:46', '2018-07-30 06:52:46'),
(93, '1', '12', '1', '2018-07-30 06:33:24', '2018-07-30 06:33:24'),
(94, '5', '21', '1', '2018-07-10 07:33:49', '2018-07-10 07:33:49'),
(95, '5', '2', '2', '2018-07-11 05:50:40', '2018-07-11 05:50:40'),
(96, '6', '4', '1', '2018-07-12 08:20:55', '2018-07-12 08:20:55'),
(97, '1', '5', '2', '2018-07-12 08:25:45', '2018-07-12 08:25:45'),
(98, '5', '12', '1', '2018-07-13 05:50:04', '2018-07-13 05:50:04'),
(99, '1', '12', '1', '2018-07-14 05:50:04', '2018-07-14 05:50:04'),
(100, '6', '12', '1', '2018-07-14 06:29:07', '2018-07-14 06:29:07'),
(101, '1', '12', '1', '2018-07-15 05:50:04', '2018-07-15 05:50:04'),
(102, '6', '12', '1', '2018-07-16 05:50:04', '2018-07-16 05:50:04'),
(103, '5', '12', '1', '2018-07-17 06:33:24', '2018-07-17 06:33:24'),
(104, '9', '2', '2', '2018-07-29 19:05:00', '2018-07-30 07:04:52'),
(105, '5', '7', '1', '2018-07-29 19:05:00', '2018-07-30 07:04:52'),
(106, '9', '10', '1', '2018-07-01 06:52:46', '2018-07-01 06:52:46'),
(107, '8', '11', '1', '2018-07-01 06:29:07', '2018-07-01 06:29:07'),
(108, '7', '9', '1', '2018-07-02 06:52:46', '2018-07-02 06:52:46'),
(109, '6', '7', '1', '2018-07-02 06:52:46', '2018-07-02 06:52:46'),
(110, '1', '4', '1', '2018-07-03 06:33:24', '2018-07-03 06:33:24'),
(111, '5', '2', '1', '2018-07-04 07:33:49', '2018-07-04 07:33:49'),
(112, '5', '2', '1', '2018-07-05 05:50:40', '2018-07-05 05:50:40'),
(113, '7', '4', '1', '2018-07-06 08:20:55', '2018-07-06 08:20:55'),
(114, '8', '5', '1', '2018-07-05 08:25:45', '2018-07-05 08:25:45'),
(115, '5', '3', '1', '2018-07-03 05:50:04', '2018-07-03 05:50:04'),
(116, '1', '6', '1', '2018-07-07 05:50:04', '2018-07-07 05:50:04'),
(117, '8', '5', '1', '2018-07-08 06:29:07', '2018-07-08 06:29:07'),
(118, '5', '8', '1', '2018-07-09 05:50:04', '2018-07-09 05:50:04'),
(119, '6', '11', '1', '2018-07-10 05:50:04', '2018-07-10 05:50:04'),
(120, '5', '10', '1', '2018-07-09 06:33:24', '2018-07-09 06:33:24'),
(121, '9', '2', '1', '2018-07-08 19:05:00', '2018-07-09 07:04:52'),
(122, '5', '7', '1', '2018-07-10 19:05:00', '2018-07-11 07:04:52'),
(123, '9', '18', '1', '2018-08-30 08:21:35', '2018-08-30 08:21:35'),
(124, '8', '12', '1', '2018-08-30 08:21:35', '2018-08-30 08:21:35'),
(125, '9', '13', '1', '2018-08-30 08:21:35', '2018-08-30 08:21:35'),
(126, '8', '14', '1', '2018-08-30 08:21:35', '2018-08-30 08:21:35'),
(127, '9', '5', '1', '2018-08-30 08:21:35', '2018-08-30 08:21:35'),
(128, '8', '16', '1', '2018-08-30 08:21:35', '2018-08-30 08:21:35'),
(129, '5', '13', '1', '2018-08-30 08:21:35', '2018-08-30 08:21:35'),
(130, '6', '14', '1', '2018-08-30 08:21:35', '2018-08-30 08:21:35'),
(131, '5', '17', '2', '2018-08-31 08:21:35', '2018-08-31 08:21:35'),
(132, '8', '12', '2', '2018-08-31 08:21:35', '2018-08-31 08:21:35'),
(133, '7', '13', '2', '2018-08-31 08:21:35', '2018-08-31 08:21:35'),
(134, '8', '14', '1', '2018-08-31 08:21:35', '2018-08-31 08:21:35'),
(135, '8', '5', '1', '2018-08-31 08:21:35', '2018-08-31 08:21:35'),
(136, '7', '18', '1', '2018-08-31 08:21:35', '2018-08-31 08:21:35'),
(137, '6', '16', '1', '2018-08-31 08:21:35', '2018-08-31 08:21:35'),
(138, '1', '14', '2', '2018-08-31 08:21:35', '2018-08-31 08:21:35'),
(139, '9', '12', '2', '2018-08-01 08:21:35', '2018-08-01 08:21:35'),
(140, '7', '12', '2', '2018-08-01 08:21:35', '2018-08-01 08:21:35'),
(141, '5', '13', '1', '2018-08-01 08:21:35', '2018-08-01 08:21:35'),
(142, '8', '15', '1', '2018-08-01 08:21:35', '2018-08-01 08:21:35'),
(143, '9', '5', '1', '2018-08-02 08:21:35', '2018-08-02 08:21:35'),
(144, '8', '16', '2', '2018-08-02 08:21:35', '2018-08-02 08:21:35'),
(145, '7', '14', '1', '2018-08-02 08:21:35', '2018-08-02 08:21:35'),
(146, '6', '17', '1', '2018-08-03 08:21:35', '2018-08-03 08:21:35'),
(147, '8', '19', '2', '2018-08-04 08:21:35', '2018-08-04 08:21:35'),
(148, '8', '12', '1', '2018-08-04 08:21:35', '2018-08-04 08:21:35'),
(149, '7', '8', '2', '2018-08-05 08:21:35', '2018-08-05 08:21:35'),
(150, '8', '15', '1', '2018-08-04 08:21:35', '2018-08-04 08:21:35'),
(151, '8', '5', '1', '2018-08-05 08:21:35', '2018-08-05 08:21:35'),
(152, '1', '19', '1', '2018-08-06 08:21:35', '2018-08-06 08:21:35'),
(153, '5', '16', '1', '2018-08-06 08:21:35', '2018-08-06 08:21:35'),
(154, '9', '16', '1', '2018-08-07 08:21:35', '2018-08-07 08:21:35'),
(157, '1', '19', '2', '2018-01-06 08:21:35', '2018-01-06 08:21:35'),
(158, '5', '16', '3', '2018-01-05 08:21:35', '2018-01-05 08:21:35'),
(159, '5', '12', '2', '2018-01-07 08:21:35', '2018-01-07 08:21:35'),
(160, '8', '19', '3', '2018-01-01 08:21:35', '2018-01-01 08:21:35'),
(161, '7', '15', '2', '2018-01-02 05:23:03', '2018-01-02 05:23:03'),
(162, '1', '19', '3', '2018-02-06 08:21:35', '2018-02-06 08:21:35'),
(163, '5', '16', '3', '2018-02-05 08:21:35', '2018-02-05 08:21:35'),
(164, '5', '12', '2', '2018-02-07 08:21:35', '2018-02-07 08:21:35'),
(165, '8', '19', '3', '2018-02-01 08:21:35', '2018-02-01 08:21:35'),
(166, '7', '15', '3', '2018-02-02 05:23:03', '2018-02-02 05:23:03'),
(167, '1', '21', '3', '2018-03-26 07:33:49', '2018-03-26 07:33:49'),
(168, '5', '2', '3', '2018-03-27 05:50:40', '2018-03-27 05:50:40'),
(169, '6', '4', '2', '2018-03-28 08:20:55', '2018-03-28 08:20:55'),
(170, '1', '5', '4', '2018-03-29 08:25:45', '2018-03-29 08:25:45'),
(171, '5', '12', '3', '2018-03-30 06:52:46', '2018-03-30 06:52:46'),
(177, '1', '21', '3', '2018-05-26 07:33:49', '2018-05-26 07:33:49'),
(178, '5', '2', '1', '2018-05-27 05:50:40', '2018-05-27 05:50:40'),
(179, '6', '4', '2', '2018-05-28 08:20:55', '2018-05-28 08:20:55'),
(180, '1', '5', '4', '2018-05-29 08:25:45', '2018-05-29 08:25:45'),
(181, '5', '12', '3', '2018-05-30 06:52:46', '2018-05-30 06:52:46'),
(182, '1', '21', '4', '2018-06-26 07:33:49', '2018-06-26 07:33:49'),
(183, '5', '2', '2', '2018-06-27 05:50:40', '2018-06-27 05:50:40'),
(184, '6', '4', '3', '2018-06-28 08:20:55', '2018-06-28 08:20:55'),
(185, '1', '5', '4', '2018-06-29 08:25:45', '2018-06-29 08:25:45'),
(186, '5', '12', '3', '2018-06-30 06:52:46', '2018-06-30 06:52:46'),
(202, '1', '21', '1', '2018-01-26 07:33:49', '2018-01-26 07:33:49'),
(203, '5', '2', '3', '2018-01-27 05:50:40', '2018-01-27 05:50:40'),
(204, '6', '4', '2', '2018-01-28 08:20:55', '2018-01-28 08:20:55'),
(205, '1', '5', '2', '2018-01-29 08:25:45', '2018-01-29 08:25:45'),
(206, '5', '12', '2', '2018-01-30 06:52:46', '2018-01-30 06:52:46'),
(212, '1', '21', '2', '2018-02-26 07:33:49', '2018-02-26 07:33:49'),
(213, '5', '2', '4', '2018-02-26 05:50:40', '2018-02-26 05:50:40'),
(214, '6', '4', '3', '2018-02-26 08:20:55', '2018-02-26 08:20:55'),
(215, '1', '5', '3', '2018-02-26 08:25:45', '2018-02-26 08:25:45'),
(216, '5', '12', '3', '2018-02-26 06:52:46', '2018-02-26 06:52:46'),
(217, '1', '21', '3', '2018-01-26 07:33:49', '2018-01-26 07:33:49'),
(218, '5', '2', '4', '2018-01-27 05:50:40', '2018-01-27 05:50:40'),
(219, '6', '4', '3', '2018-01-28 08:20:55', '2018-01-28 08:20:55'),
(220, '1', '5', '3', '2018-01-29 08:25:45', '2018-01-29 08:25:45'),
(221, '5', '12', '3', '2018-01-30 06:52:46', '2018-01-30 06:52:46'),
(222, '1', '12', '1', '2018-03-14 05:50:04', '2018-03-14 05:50:04'),
(223, '6', '12', '1', '2018-03-14 06:29:07', '2018-03-14 06:29:07'),
(224, '1', '12', '1', '2018-03-15 05:50:04', '2018-03-15 05:50:04'),
(225, '6', '12', '1', '2018-03-16 05:50:04', '2018-03-16 05:50:04'),
(226, '5', '12', '1', '2018-03-17 06:33:24', '2018-03-17 06:33:24'),
(227, '1', '21', '1', '2018-03-26 07:33:49', '2018-03-26 07:33:49'),
(228, '5', '2', '1', '2018-03-27 05:50:40', '2018-03-27 05:50:40'),
(229, '6', '4', '2', '2018-03-28 08:20:55', '2018-03-28 08:20:55'),
(230, '1', '5', '1', '2018-03-29 08:25:45', '2018-03-29 08:25:45'),
(231, '5', '12', '1', '2018-03-30 06:52:46', '2018-03-30 06:52:46'),
(232, '1', '12', '1', '2018-05-14 05:50:04', '2018-05-14 05:50:04'),
(233, '6', '12', '1', '2018-05-14 06:29:07', '2018-05-14 06:29:07'),
(234, '1', '12', '1', '2018-05-15 05:50:04', '2018-05-15 05:50:04'),
(235, '6', '12', '1', '2018-05-16 05:50:04', '2018-05-16 05:50:04'),
(236, '5', '12', '1', '2018-05-17 06:33:24', '2018-05-17 06:33:24'),
(237, '1', '21', '1', '2018-05-26 07:33:49', '2018-05-26 07:33:49'),
(238, '5', '2', '3', '2018-05-27 05:50:40', '2018-05-27 05:50:40'),
(239, '6', '4', '2', '2018-05-28 08:20:55', '2018-05-28 08:20:55'),
(240, '1', '5', '1', '2018-05-29 08:25:45', '2018-05-29 08:25:45'),
(241, '5', '12', '1', '2018-05-30 06:52:46', '2018-05-30 06:52:46'),
(260, '1', '12', '2', '2018-04-15 05:50:04', '2018-04-15 05:50:04'),
(261, '6', '12', '3', '2018-04-16 05:50:04', '2018-04-16 05:50:04'),
(262, '5', '12', '2', '2018-04-17 06:33:24', '2018-04-17 06:33:24'),
(263, '1', '21', '3', '2018-04-26 07:33:49', '2018-04-26 07:33:49'),
(264, '5', '2', '2', '2018-04-27 05:50:40', '2018-04-27 05:50:40'),
(265, '6', '4', '2', '2018-04-28 08:20:55', '2018-04-28 08:20:55'),
(266, '1', '5', '3', '2018-04-29 08:25:45', '2018-04-29 08:25:45'),
(267, '5', '12', '2', '2018-04-30 06:52:46', '2018-04-30 06:52:46'),
(268, '1', '12', '3', '2018-04-14 05:50:04', '2018-04-14 05:50:04'),
(269, '6', '12', '3', '2018-04-14 06:29:07', '2018-04-14 06:29:07'),
(270, '1', '21', '1', '2018-06-26 07:33:49', '2018-06-26 07:33:49'),
(271, '5', '2', '2', '2018-06-27 05:50:40', '2018-06-27 05:50:40'),
(272, '6', '4', '2', '2018-06-28 08:20:55', '2018-06-28 08:20:55'),
(273, '1', '5', '1', '2018-06-29 08:25:45', '2018-06-29 08:25:45'),
(274, '1', '33', '1', '2018-09-25 04:41:43', '2018-09-25 04:41:43'),
(275, '1', '1', '1', '2019-01-01 12:55:17', '2019-01-01 12:55:17'),
(276, '1', '34', '2', '2019-02-09 16:00:51', '2019-02-09 16:00:51'),
(277, '1', '30', '1', '2019-03-16 01:00:49', '2019-03-16 01:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('seyha@gmail.com', '$2y$10$zcMBrUcFOvW6UvXTHudvYuNcC8spcLBOFaqG2uJzMKinZbX5UGIZS', '2018-08-16 08:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `proname` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `cat_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `proname`, `image`, `description`, `price`, `cat_id`, `size`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Gold Ring', 'gold.jpg', 'Lady Ring', '150.00', '1', '446087', 'image/jpeg', '2018-08-09 00:45:45', '2019-03-15 18:09:37'),
(2, 'Silver Ring', 'silver.png', 'Lady Ring', '75.00', '2', '68464', 'image/png', '2018-08-09 00:46:19', '2018-08-13 21:18:44'),
(4, 'Man Gold Ring', 'mr.jpg', 'Man Ring', '150.00', '1', '216647', 'image/jpeg', '2018-08-09 09:47:35', '2018-08-12 01:25:06'),
(5, 'Gold Necklace', 'gn.jpg', 'Necklace Gold for Lady', '250.00', '4', '74855', 'image/jpeg', '2018-08-12 01:18:31', '2018-08-12 01:18:31'),
(6, 'Gold Earrings', 'er.jpg', 'Gold Earrings', '150.00', '5', '281813', 'image/jpeg', '2018-08-12 01:34:48', '2018-08-12 01:34:48'),
(7, 'Diamond Ring', 'diamond.png', 'Lady Ring', '350.00', '3', '1716096', 'image/png', '2018-08-14 02:45:13', '2018-08-26 03:04:07'),
(12, 'Silver Necklace', 'sn1.jpg', 'Beautiful silver necklace', '150.00', '6', '151073', 'image/jpeg', '2018-08-14 03:13:26', '2018-08-14 03:13:26'),
(13, 'Silver Necklace', 'sn.jpg', 'Beautiful silver necklace', '150.00', '6', '14791', 'image/jpeg', '2018-08-14 03:14:16', '2018-08-14 03:14:16'),
(14, 'Silver Earrings', 'se.jpg', 'Earrings silver smooth', '150.00', '7', '38913', 'image/jpeg', '2018-08-14 19:40:21', '2018-08-14 19:40:21'),
(15, 'Diamond Necklace', 'dn1.jpg', 'Beautiful Necklace Diamond', '200.00', '8', '52299', 'image/jpeg', '2018-08-14 20:07:15', '2018-08-14 20:07:15'),
(16, 'Diamond Earrings', 'de1.jpg', 'Beautiful Earrings Diamond', '150.00', '9', '14373', 'image/jpeg', '2018-08-14 20:08:06', '2018-08-14 20:08:06'),
(21, 'Ring Silver', 'silver.png', 'Lady Ring', '150.00', '2', '68464', 'image/png', '2018-08-19 05:14:11', '2018-08-19 05:14:11'),
(30, 'Gold Ring', 'gold1.jpg', 'Lady Ring', '150.00', '1', '13044', 'image/jpeg', '2018-09-10 07:40:52', '2018-09-10 07:40:52'),
(32, 'Diamond Ring', 'rd2.jpg', 'Diamond ring', '200.00', '3', '18065', 'image/jpeg', '2018-09-10 07:51:25', '2018-09-10 07:51:25'),
(33, 'Ring Silver', 'sr.jpg', 'Lady Ring', '150.00', '2', '73054', 'image/jpeg', '2018-09-10 07:52:55', '2018-09-10 07:52:55'),
(34, 'Necklace', 'gn1.jpg', 'Beautiful  necklace', '200.00', '4', '6574', 'image/jpeg', '2018-09-10 07:55:48', '2018-09-10 07:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `sendback`
--

CREATE TABLE `sendback` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sendback`
--

INSERT INTO `sendback` (`id`, `user_id`, `subject`, `message`, `created_at`, `updated_at`, `status`) VALUES
(2, 3, 'hi user 3', 'you are user 3', '2018-08-20 10:59:37', '0000-00-00 00:00:00', 0),
(7, 1, 'sendback', 'thank you user', '2018-08-21 07:18:57', '2018-08-21 07:18:57', 0),
(8, 3, 'Improving service', 'Dear user !!\r\nthank you for your feedback, now we ready improve our service.', '2018-08-21 07:23:43', '2018-08-21 07:23:43', 0),
(9, 3, 'sendback', 'reply again', '2018-08-21 07:43:09', '2018-08-21 07:43:09', 0),
(10, 5, 'Service', 'thank you', '2018-08-27 02:53:36', '2018-08-27 02:53:36', 0),
(11, 1, 'Service', 'thamk', '2018-08-27 02:57:12', '2018-08-27 02:57:12', 0),
(12, 1, 'sendback', 'user 5', '2018-08-27 02:57:51', '2018-08-27 02:57:51', 0),
(13, 5, 'sendback', 'user1', '2018-08-27 02:59:47', '2018-08-27 02:59:47', 0),
(14, 1, 'test send back', 'for user 1', '2018-08-27 03:05:11', '2018-08-27 03:05:11', 0),
(15, 6, 'send activity back', 'send activity back', '2018-09-03 05:26:07', '2018-09-03 05:26:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `type`, `size`, `created_at`, `updated_at`, `name`) VALUES
(1, 'chicago.jpg', 'image/jpeg', '71294', '2018-08-23 20:56:38', '2018-08-23 20:56:38', 'slider 1'),
(2, 's1.jpg', 'image/jpeg', '174971', '2018-08-23 21:37:11', '2018-08-23 21:37:11', 'slider 2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `phone`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mean Seyha', 'Bandung', '087238036', 'seyha@gmail.com', '$2y$10$s3Cs.BTaXTYwa.F3NqLVvutMDCBdqLskmwrxNhsnPHT378NQp/T76', 'iADpgJ2YVg8wtQXRhSeB3qCNWaDt1If9d5xqFrfNjMN6eQZBx3MH0UkNZbNM', '2018-08-09 00:43:41', '2018-08-09 00:43:41'),
(5, 'Sok Leakhina', 'Kom Pong Thom', '010 45 25 20', 'leakhinasok@gmail.com', '$2y$10$4XIdqf6FoqGT.7MTbpWmV.4bZmv3GVhR/Ov5bbQ303YNArJUblDJC', 'DxgmzC51pTYJcAttlBMVlEmNxyvjY87uVYsbEUDhN67t8sJFt3AhMJJAPUwI', '2018-08-26 20:03:37', '2018-08-26 20:03:37'),
(6, 'Heng Sovan', 'Phnom Penh', '012 87 80 81', 'hengsovan@gmail.com', '$2y$10$BNVx7u/FMG08lTN/IxckU.Jky1.FucYW4nnl./WWHyK8aZwoIyldq', 'fwRnHKSE8hA96xLsRDAAaurCKGlhf0Bpd7tC0JcDnNiIIZyKHmUE4zvivZz0', '2018-08-26 20:06:06', '2018-08-26 20:06:06'),
(7, 'khuon Makara', 'Phnom Penh', '010 329865', 'makara@gmail.com', '$2y$10$Vdd9.U8AHaoIsPhszTLST.XOQHEqy7bkaqr2ua3NbfHj20bpS34K6', 'n3AIZLEhQjnjs5lNhTSYtxhyMUWlGv24wKZXCvSjCjf2DbfjD1EFTJL6TNSh', '2018-08-27 03:21:15', '2018-08-27 03:21:15'),
(8, 'Hong Nika', 'Phnom Penh', '012 355330', 'nika@gmail.com', '$2y$10$QoXOr2t6.Ij3Sj7kjhvQT.7TOJAzzZHua74LjvWq8gtI1xuRAVdFm', 'wYMfsz1FNthp7GJTDIAVaDaJ7lY4UrqVtLq03WfdGKvlLjQqLLW5HzlX2aEj', '2018-08-30 00:34:56', '2018-08-30 00:34:56'),
(9, 'Seng Thona', 'Phnom Penh', '012 788008', 'thona@gmail.com', '$2y$10$6vC2l7hPlTsvUxZzJMCim.C0XJ8rYvG0Td4INoxzBtksgKyPgNM2i', NULL, '2018-08-30 00:38:44', '2018-08-30 00:38:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendback`
--
ALTER TABLE `sendback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sendback`
--
ALTER TABLE `sendback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
