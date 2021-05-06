-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 01:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l6learnmechange`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specialist_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `notification_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `payment_status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `payment_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `specialist_id`, `user_id`, `service_id`, `date`, `time`, `rate`, `status`, `notification_status`, `payment_status`, `payment_amount`, `created_at`, `updated_at`) VALUES
(4, 27, 25, 4, '10 March 2021', '9:40 AM', '8', '1', '1', '2', NULL, '2021-03-10 06:30:43', '2021-04-27 05:37:09'),
(14, 27, 25, 5, '01 Mar 2021', '1:00 PM', '12', '1', '1', '2', NULL, '2021-03-31 23:40:41', '2021-05-02 20:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_request_id` bigint(20) UNSIGNED DEFAULT NULL,
  `specialist_id` bigint(20) UNSIGNED DEFAULT NULL,
  `budget` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perposal` longtext COLLATE utf8mb4_unicode_ci,
  `work_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `payment_status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `payment_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `service_request_id`, `specialist_id`, `budget`, `delivery`, `attachment`, `perposal`, `work_status`, `payment_status`, `payment_amount`, `created_at`, `updated_at`, `status`) VALUES
(2, 1, 27, '30', '3 Days', 'uploads/files/1616670790_Report-22-3-21 (2).pdf', NULL, '0', '0', NULL, '2021-03-25 06:13:10', '2021-03-29 00:18:03', '0'),
(3, 2, 27, '45', '4 Days', NULL, '4545', '0', '0', '0', '2021-04-05 03:00:59', '2021-04-05 03:00:59', '0');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'it services', NULL, 'active', NULL, NULL),
(2, 'Beauty & Barber', NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_specialists`
--

CREATE TABLE `category_specialists` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `specialist_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `channel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`channel`, `caller`, `status`) VALUES
('waseem-ewdtech_client', 'waseem-ewdtech', '3');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` bigint(20) NOT NULL,
  `reciever_id` bigint(20) NOT NULL,
  `sender_reciever` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'chat',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `sender_id`, `reciever_id`, `sender_reciever`, `name`, `content`, `ip`, `type`, `created_at`, `updated_at`) VALUES
(0, 25, 49, '2549', 'Muhammad Waseem', 'test', '::1', 'chat', '2021-04-16 05:49:13', '2021-04-16 05:49:13'),
(0, 49, 25, '2549', 'Muhammad Waseem', 'hey', '::1', 'chat', '2021-04-16 05:51:40', '2021-04-16 05:51:40'),
(0, 25, 49, '2549', 'Muhammad Waseem', '😬', '::1', 'chat', '2021-04-16 05:54:41', '2021-04-16 05:54:41'),
(0, 49, 25, '2549', 'Muhammad Waseem', 'ai bhla koi mazak ha', '::1', 'chat', '2021-04-16 05:55:04', '2021-04-16 05:55:04'),
(0, 25, 49, '2549', 'Muhammad Waseem', '🍅🥒', '::1', 'chat', '2021-04-16 05:58:08', '2021-04-16 05:58:08'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hi', '::1', 'chat', '2021-04-17 00:10:05', '2021-04-17 00:10:05'),
(0, 49, 25, '2549', 'Muhammad Waseem', 'hey', '::1', 'chat', '2021-04-17 00:11:48', '2021-04-17 00:11:48'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hi', '::1', 'chat', '2021-04-17 00:26:14', '2021-04-17 00:26:14'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'how are you', '::1', 'chat', '2021-04-17 00:26:40', '2021-04-17 00:26:40'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hey', '::1', 'chat', '2021-04-17 00:32:56', '2021-04-17 00:32:56'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hi', '::1', 'chat', '2021-04-17 00:43:17', '2021-04-17 00:43:17'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hey', '::1', 'chat', '2021-04-17 00:46:08', '2021-04-17 00:46:08'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hey test', '::1', 'chat', '2021-04-17 00:46:56', '2021-04-17 00:46:56'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hi', '::1', 'chat', '2021-04-17 01:16:04', '2021-04-17 01:16:04'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hi again', '::1', 'chat', '2021-04-17 01:19:14', '2021-04-17 01:19:14'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'again\\', '::1', 'chat', '2021-04-17 01:31:05', '2021-04-17 01:31:05'),
(0, 49, 25, '2549', 'Muhammad Waseem', 'ok', '::1', 'chat', '2021-04-17 01:33:39', '2021-04-17 01:33:39'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hey reciever', '::1', 'chat', '2021-04-17 01:53:25', '2021-04-17 01:53:25'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hey', '::1', 'chat', '2021-04-17 02:00:50', '2021-04-17 02:00:50'),
(0, 49, 25, '2549', 'Muhammad Waseem', 'how are you', '::1', 'chat', '2021-04-17 02:02:19', '2021-04-17 02:02:19'),
(0, 49, 25, '2549', 'Muhammad Waseem', 'what\'s up?', '::1', 'chat', '2021-04-17 02:33:27', '2021-04-17 02:33:27'),
(0, 49, 25, '2549', 'Muhammad Waseem', 'HI', '::1', 'chat', '2021-04-17 03:45:54', '2021-04-17 03:45:54'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hey', '::1', 'chat', '2021-04-17 03:48:31', '2021-04-17 03:48:31'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'how are you', '::1', 'chat', '2021-04-17 03:51:54', '2021-04-17 03:51:54'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hey', '::1', 'chat', '2021-04-17 04:20:03', '2021-04-17 04:20:03'),
(0, 49, 25, '2549', 'Muhammad Waseem', 'hey how are you', '::1', 'chat', '2021-04-17 04:34:03', '2021-04-17 04:34:03'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hi', '::1', 'chat', '2021-04-17 05:13:18', '2021-04-17 05:13:18'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'hi', '::1', 'chat', '2021-04-17 05:17:21', '2021-04-17 05:17:21'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'test', '::1', 'chat', '2021-04-17 05:20:39', '2021-04-17 05:20:39'),
(0, 25, 49, '2549', 'Muhammad Waseem', 'again', '::1', 'chat', '2021-04-17 05:22:33', '2021-04-17 05:22:33'),
(0, 49, 71, '4971', 'Muhammad Waseem', 'hy', '::1', 'chat', '2021-04-17 06:09:07', '2021-04-17 06:09:07'),
(0, 49, 25, '2549', 'Muhammad Waseem', 'hey', '::1', 'chat', '2021-04-17 06:09:47', '2021-04-17 06:09:47'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'hi', '::1', 'chat', '2021-04-19 00:03:31', '2021-04-19 00:03:31'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'hey', '::1', 'chat', '2021-04-19 00:17:06', '2021-04-19 00:17:06'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'how are you?', '::1', 'chat', '2021-04-19 00:17:10', '2021-04-19 00:17:10'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'fine', '::1', 'chat', '2021-04-19 01:19:42', '2021-04-19 01:19:42'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'u?', '::1', 'chat', '2021-04-19 01:19:47', '2021-04-19 01:19:47'),
(0, 25, 49, '2549', 'client', 'me also', '::1', 'chat', '2021-04-19 01:22:24', '2021-04-19 01:22:24'),
(0, 25, 49, '2549', 'client', 'ok', '::1', 'chat', '2021-04-19 01:22:59', '2021-04-19 01:22:59'),
(0, 25, 49, '2549', 'client', NULL, '::1', 'chat', '2021-04-19 02:12:48', '2021-04-19 02:12:48'),
(0, 25, 49, '2549', 'client', NULL, '::1', 'chat', '2021-04-19 02:13:33', '2021-04-19 02:13:33'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 04:10:18', '2021-04-19 04:10:18'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 04:11:43', '2021-04-19 04:11:43'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 04:12:51', '2021-04-19 04:12:51'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 04:13:17', '2021-04-19 04:13:17'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 04:14:55', '2021-04-19 04:14:55'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 04:16:39', '2021-04-19 04:16:39'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 04:17:03', '2021-04-19 04:17:03'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 04:56:55', '2021-04-19 04:56:55'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 05:01:46', '2021-04-19 05:01:46'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 05:05:59', '2021-04-19 05:05:59'),
(0, 25, 71, '2571', 'client', 'reprot', '::1', 'chat', '2021-04-19 05:24:51', '2021-04-19 05:24:51'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 05:35:18', '2021-04-19 05:35:18'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 05:36:11', '2021-04-19 05:36:11'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 05:41:42', '2021-04-19 05:41:42'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 05:51:57', '2021-04-19 05:51:57'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 05:52:09', '2021-04-19 05:52:09'),
(0, 25, 71, '2571', 'client', 'test', '::1', 'chat', '2021-04-19 05:55:30', '2021-04-19 05:55:30'),
(0, 25, 71, '2571', 'client', NULL, '::1', 'chat', '2021-04-19 06:15:16', '2021-04-19 06:15:16'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'hey', '::1', 'chat', '2021-04-19 06:42:55', '2021-04-19 06:42:55'),
(0, 25, 49, '2549', 'client', 'how are you', '::1', 'chat', '2021-04-19 06:44:02', '2021-04-19 06:44:02'),
(0, 25, 49, '2549', 'client', 'how are you', '::1', 'chat', '2021-04-19 06:45:07', '2021-04-19 06:45:07'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'fine', '::1', 'chat', '2021-04-19 06:45:23', '2021-04-19 06:45:23'),
(0, 49, 25, '2549', 'waseem-ewdtech', '&u?', '::1', 'chat', '2021-04-19 06:45:46', '2021-04-19 06:45:46'),
(0, 25, 49, '2549', 'client', 'hey', '::1', 'chat', '2021-04-20 00:22:18', '2021-04-20 00:22:18'),
(0, 25, 102, '25102', 'client', 'hi', '::1', 'chat', '2021-04-20 00:37:17', '2021-04-20 00:37:17'),
(0, 25, 49, '2549', 'client', 'how are you', '::1', 'chat', '2021-04-20 00:39:22', '2021-04-20 00:39:22'),
(0, 25, 49, '2549', 'client', 'fine dear', '::1', 'chat', '2021-04-20 01:29:06', '2021-04-20 01:29:06'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'okey', '::1', 'chat', '2021-04-20 01:31:38', '2021-04-20 01:31:38'),
(0, 25, 49, '2549', 'client', 'ok', '::1', 'chat', '2021-04-20 01:32:48', '2021-04-20 01:32:48'),
(0, 25, 49, '2549', 'client', 'again', '::1', 'chat', '2021-04-20 01:38:04', '2021-04-20 01:38:04'),
(0, 25, 49, '2549', 'client', 'again two', '::1', 'chat', '2021-04-20 01:47:13', '2021-04-20 01:47:13'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'ma wella nhn', '::1', 'chat', '2021-04-20 01:51:29', '2021-04-20 01:51:29'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'testing purpose', '::1', 'chat', '2021-04-20 01:53:27', '2021-04-20 01:53:27'),
(0, 102, 25, '25102', 'client1', 'hi', '::1', 'chat', '2021-04-20 01:54:56', '2021-04-20 01:54:56'),
(0, 102, 25, '25102', 'client1', 'how are you?', '::1', 'chat', '2021-04-20 01:55:01', '2021-04-20 01:55:01'),
(0, 102, 25, '25102', 'client1', 'what\'s up?', '::1', 'chat', '2021-04-20 01:55:49', '2021-04-20 01:55:49'),
(0, 25, 102, '25102', 'client', 'hi', '::1', 'chat', '2021-04-20 01:58:06', '2021-04-20 01:58:06'),
(0, 25, 102, '25102', 'client', 'fine', '::1', 'chat', '2021-04-20 01:58:09', '2021-04-20 01:58:09'),
(0, 25, 102, '25102', 'client', 'nothing', '::1', 'chat', '2021-04-20 01:58:13', '2021-04-20 01:58:13'),
(0, 102, 25, '25102', 'client1', 'ok', '::1', 'chat', '2021-04-20 06:13:53', '2021-04-20 06:13:53'),
(0, 25, 102, '25102', 'client', 'yeah', '::1', 'chat', '2021-04-20 06:14:34', '2021-04-20 06:14:34'),
(0, 102, 25, '25102', 'client1', 'okey', '::1', 'chat', '2021-04-20 06:15:09', '2021-04-20 06:15:09'),
(0, 25, 102, '25102', 'client', 'hey', '::1', 'chat', '2021-04-20 06:22:35', '2021-04-20 06:22:35'),
(0, 102, 25, '25102', 'client1', 'hi', '::1', 'chat', '2021-04-20 06:23:36', '2021-04-20 06:23:36'),
(0, 25, 102, '25102', 'client', 'how are you?', '::1', 'chat', '2021-04-20 06:24:06', '2021-04-20 06:24:06'),
(0, 25, 102, '25102', 'client', 'what\'s up', '::1', 'chat', '2021-04-20 06:26:03', '2021-04-20 06:26:03'),
(0, 102, 25, '25102', 'client1', 'nothing', '::1', 'chat', '2021-04-20 06:26:49', '2021-04-20 06:26:49'),
(0, 102, 25, '25102', 'client1', 'ok', '::1', 'chat', '2021-04-20 06:27:38', '2021-04-20 06:27:38'),
(0, 25, 102, '25102', 'client', 'hey', '::1', 'chat', '2021-04-20 06:33:12', '2021-04-20 06:33:12'),
(0, 102, 25, '25102', 'client1', 'hi', '::1', 'chat', '2021-04-20 06:33:41', '2021-04-20 06:33:41'),
(0, 102, 25, '25102', 'client1', 'how are you?', '::1', 'chat', '2021-04-20 06:33:48', '2021-04-20 06:33:48'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'hi', '::1', 'chat', '2021-04-20 23:49:45', '2021-04-20 23:49:45'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'how are you', '::1', 'chat', '2021-04-20 23:51:57', '2021-04-20 23:51:57'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'what\'s up?', '::1', 'chat', '2021-04-20 23:52:46', '2021-04-20 23:52:46'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'what\'s going on?', '::1', 'chat', '2021-04-20 23:53:21', '2021-04-20 23:53:21'),
(0, 25, 49, '2549', 'client', 'hey', '::1', 'chat', '2021-04-21 00:41:54', '2021-04-21 00:41:54'),
(0, 25, 49, '2549', 'client', 'fine', '::1', 'chat', '2021-04-21 00:41:59', '2021-04-21 00:41:59'),
(0, 25, 49, '2549', 'client', 'nothing', '::1', 'chat', '2021-04-21 00:42:02', '2021-04-21 00:42:02'),
(0, 25, 49, '2549', 'client', 'nothing special', '::1', 'chat', '2021-04-21 00:42:08', '2021-04-21 00:42:08'),
(0, 25, 102, '25102', 'client', 'hey', '::1', 'chat', '2021-04-21 03:59:42', '2021-04-21 03:59:42'),
(0, 25, 49, '2549', 'client', 'hey', '::1', 'chat', '2021-04-21 04:00:05', '2021-04-21 04:00:05'),
(0, 25, 49, '2549', 'client', 'how are you', '::1', 'chat', '2021-04-21 04:00:39', '2021-04-21 04:00:39'),
(0, 25, 49, '2549', 'client', 'hi', '::1', 'chat', '2021-04-21 04:04:09', '2021-04-21 04:04:09'),
(0, 25, 102, '25102', 'client', 'hey', '::1', 'chat', '2021-04-21 04:12:19', '2021-04-21 04:12:19'),
(0, 25, 49, '2549', 'client', 'hey', '::1', 'chat', '2021-04-21 04:12:43', '2021-04-21 04:12:43'),
(0, 25, 102, '25102', 'client', 'hey', '::1', 'chat', '2021-04-21 04:26:59', '2021-04-21 04:26:59'),
(0, 25, 102, '25102', 'client', 'how are you', '::1', 'chat', '2021-04-21 04:27:14', '2021-04-21 04:27:14'),
(0, 25, 102, '25102', 'client', 'what\'s up', '::1', 'chat', '2021-04-21 04:27:28', '2021-04-21 04:27:28'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'hi', '::1', 'chat', '2021-04-21 04:58:03', '2021-04-21 04:58:03'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'how are you?', '::1', 'chat', '2021-04-21 04:58:22', '2021-04-21 04:58:22'),
(0, 49, 102, '49102', 'waseem-ewdtech', 'hey', '::1', 'chat', '2021-04-21 05:01:12', '2021-04-21 05:01:12'),
(0, 25, 49, '2549', 'client', 'hey', '::1', 'chat', '2021-04-21 05:03:42', '2021-04-21 05:03:42'),
(0, 25, 49, '2549', 'client', 'fine', '::1', 'chat', '2021-04-21 05:03:43', '2021-04-21 05:03:43'),
(0, 25, 49, '2549', 'client', 'tell about you?', '::1', 'chat', '2021-04-21 05:03:49', '2021-04-21 05:03:49'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'me also', '::1', 'chat', '2021-04-21 05:04:13', '2021-04-21 05:04:13'),
(0, 25, 49, '2549', 'client', 'hey', '::1', 'chat', '2021-04-22 00:29:02', '2021-04-22 00:29:02'),
(0, 25, 49, '2549', 'client', 'how are you', '::1', 'chat', '2021-04-22 02:39:22', '2021-04-22 02:39:22'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'fine', '::1', 'chat', '2021-04-22 02:54:33', '2021-04-22 02:54:33'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'what\'', '::1', 'chat', '2021-04-22 02:54:37', '2021-04-22 02:54:37'),
(0, 102, 25, '25102', 'client1', 'hey', '::1', 'chat', '2021-04-22 03:42:28', '2021-04-22 03:42:28'),
(0, 102, 25, '25102', 'client1', 'nothing', '::1', 'chat', '2021-04-22 03:42:31', '2021-04-22 03:42:31'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'hey', '::1', 'chat', '2021-04-22 04:06:11', '2021-04-22 04:06:11'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'how are you', '::1', 'chat', '2021-04-22 04:08:16', '2021-04-22 04:08:16'),
(0, 25, 49, '2549', 'client', 'hey', '::1', 'chat', '2021-04-22 06:13:10', '2021-04-22 06:13:10'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'hey how are you', '::1', 'chat', '2021-04-22 06:14:16', '2021-04-22 06:14:16'),
(0, 49, 25, '2549', 'waseem-ewdtech', 'hy', '::1', 'chat', '2021-04-22 06:16:55', '2021-04-22 06:16:55'),
(0, 25, 49, '2549', 'client', 'ftjg\'\'', '::1', 'chat', '2021-04-22 06:17:02', '2021-04-22 06:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `business_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `business_phone`, `business_location`, `created_at`, `updated_at`) VALUES
(2, 25, '+376 301 7161638', NULL, '2021-03-02 02:16:43', '2021-03-31 04:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `client_specialists`
--

CREATE TABLE `client_specialists` (
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `specialist_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_specialist_disputes`
--

CREATE TABLE `client_specialist_disputes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciever_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reciever_seen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `admin_seen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `client_response` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialist_response` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_response` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `response_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_specialist_disputes`
--

INSERT INTO `client_specialist_disputes` (`id`, `project_id`, `project_type`, `sender_id`, `reciever_id`, `subject`, `comment`, `file_type`, `file_link`, `reciever_seen`, `admin_seen`, `client_response`, `specialist_response`, `admin_response`, `status`, `response_time`, `created_at`, `updated_at`) VALUES
(23, '14', 'appointments', '25', '49', 'requirement changes', 'this is body the of dispute which i have to file for the specialist', 'video', 'http://localhost/laravelprojects/l6learnme/uploads/disputes/14_1620042131.mp4', '0', '1', '2021-05-03 06:42:11', NULL, '2021-05-03 06:46:18', '0', '2021-05-05 06:46:18', '2021-05-03 01:42:11', '2021-05-03 01:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `dispute_replies`
--

CREATE TABLE `dispute_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dispute_id` bigint(20) UNSIGNED NOT NULL,
  `reply` longtext COLLATE utf8mb4_unicode_ci,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `reciever_id` bigint(20) UNSIGNED NOT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reciever_seen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `client_seen` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `specialist_seen` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `admin_seen` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dispute_replies`
--

INSERT INTO `dispute_replies` (`id`, `dispute_id`, `reply`, `sender_id`, `reciever_id`, `file_type`, `file_link`, `user_type`, `reciever_seen`, `client_seen`, `specialist_seen`, `admin_seen`, `created_at`, `updated_at`) VALUES
(43, 23, 'Hello, <br />\n            <br />\n            There has been a dispute filed for this appointment. <br />\n            <br />\n            Questions and problems are usually solved in two to three days when both parties directly together. <br />\n            <br />\n            Please provide a statement that details the reason for you filing the dispute, and asking for a refund. You can include any document or file that shows proof to your claim.<br />\n            <br />\n            Please keep in mind, that both parties will see each other’s responses.<br />\n             <br />\n            If you are defending a claim, please also provide a statement that details why you are not liable to provide a refund. <br />\n            <br />\n            From the first statement given, the other party will have exactly 48 hours to provide their first statement. If no response is provided, the case will either be closed or settled in the favor of the disputer.  <br />\n            <br />\n            We only need one statement from both parties. <br />\n            <br />\n            You can also choose to cancel the dispute as well, just mention to us in this session.  <br />\n            <br />\n            A learnme live arbitrator will view the responses and make a decision within 24 hours.<br />\n             <br />\n            Thank you.', 101, 101, NULL, NULL, 'admin', '0', '0', '0', '1', '2021-05-03 01:42:11', '2021-05-03 02:04:18'),
(44, 23, 'hey guys', 101, 101, '', '', 'specialist', '0', '0', '0', '1', '2021-05-03 01:46:18', '2021-05-03 02:04:18');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(68, '2021_05_04_012709_create_tb_user', 1),
(69, '2021_05_04_043257_create_tb_availabletime', 1),
(70, '2021_05_04_053947_create_tb_paymentinfo', 1),
(75, '2021_05_05_003818_create_tb_categories', 2),
(76, '2021_05_05_020222_create_tb_servicecategory', 3),
(77, '2021_05_06_015850_create_tb_portfolio', 4),
(78, '2021_05_06_015850_create_tb_portofolio', 5);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `specialist_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bid_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deduction_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '20',
  `recieve_amount` double(8,2) NOT NULL,
  `paid_amount` double(8,2) NOT NULL,
  `recieve_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `withdraw_status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specialist_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `specialist_id`, `image`, `cover`, `created_at`, `updated_at`) VALUES
(5, 27, 'public/uploads/portfolio/16172607780_', NULL, '2021-04-01 02:06:18', '2021-04-01 02:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `specialist_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specialist_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `specialist_id`, `category_id`, `sub_categories`, `title`, `timing`, `rate`, `status`, `created_at`, `updated_at`, `description`, `tags`) VALUES
(4, 27, 1, '[\"1\"]', 'any php work', '120', '8', '1', '2021-03-10 06:26:47', '2021-03-10 06:26:47', '', ''),
(5, 27, 1, '[\"1\"]', 'any backend task', '30', '12', '1', '2021-03-10 06:27:16', '2021-04-01 02:36:54', 'test', ''),
(7, 27, 2, '[\"6\"]', 'test', '12', '85', '1', '2021-04-01 02:35:00', '2021-04-01 02:35:00', 'detail', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_requests`
--

CREATE TABLE `service_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_requests`
--

INSERT INTO `service_requests` (`id`, `user_id`, `category_id`, `subcategories`, `title`, `description`, `tags`, `budget`, `status`, `created_at`, `updated_at`) VALUES
(1, 25, 1, '[\"2\"]', 'any php work', 'this is description of the request', NULL, '25', 'active', '2021-03-25 04:11:54', '2021-04-23 06:26:26'),
(2, 25, 1, '[\"2\"]', 'any php work', 'this is description of the request', NULL, '25', 'inactive', '2021-03-25 04:11:54', '2021-04-23 06:25:51'),
(3, 25, 1, '[\"3\"]', 'all in one', 'this is in which all services are expected', NULL, '500', 'active', '2021-04-23 05:35:18', '2021-04-23 05:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opening_hours` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_birth_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_ssn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routing_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `languages` text COLLATE utf8mb4_unicode_ci,
  `specifications` text COLLATE utf8mb4_unicode_ci,
  `time_zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'America/Chicago',
  `stripe_public_key` longtext COLLATE utf8mb4_unicode_ci,
  `stripe_secrete_key` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialists`
--

INSERT INTO `specialists` (`id`, `user_id`, `category_id`, `sub_category_id`, `business_name`, `business_phone`, `opening_hours`, `payment_method`, `payment_email`, `payment_birth_date`, `payment_phone`, `payment_ssn`, `created_at`, `updated_at`, `payment_first_name`, `payment_last_name`, `public_profile`, `account_number`, `routing_number`, `address`, `description`, `languages`, `specifications`, `time_zone`, `stripe_public_key`, `stripe_secrete_key`) VALUES
(27, 49, 2, '[\"6\"]', '', NULL, '{\"monday\":[\"3:30 AM\",\"7:30 PM\"],\"friday\":[\"9:30 AM\",\"7:30 PM\"]}', 'stripe', 'tes@gmail.com', NULL, NULL, NULL, '2021-03-06 00:21:21', '2021-04-27 05:49:01', NULL, NULL, 'waseem@ewdtech.com.learnme.live', NULL, NULL, NULL, NULL, '[\"Arabic\",\"Catalan\",\"Cambodian\"]', NULL, 'America/Chicago', NULL, NULL),
(28, 103, 1, '[\"1\"]', '', '+923017161638', '{\"monday\":[\"1:00 AM\",\"1:00 PM\"]}', 'paypal', 'tes@gmail.com', NULL, NULL, NULL, '2021-04-23 05:57:44', '2021-04-23 05:57:44', NULL, NULL, 'specialist1.learnme.live', NULL, NULL, NULL, 'this is detail', '[\"Arabic\",\"Armenian\",\"English\"]', NULL, 'America/Chicago', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_availabletime`
--

CREATE TABLE `tb_availabletime` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Closed',
  `tue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Closed',
  `wed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Closed',
  `thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Closed',
  `fri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Closed',
  `sat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Closed',
  `sun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Closed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_availabletime`
--

INSERT INTO `tb_availabletime` (`id`, `user_id`, `mon`, `tue`, `wed`, `thr`, `fri`, `sat`, `sun`, `created_at`, `updated_at`) VALUES
(11, 19, '1620194400~1620246600', '1620208800~1620273600', 'Closed', 'Closed', 'Closed', '1620198000~1620266400', 'Closed', '2021-05-05 01:31:36', '2021-05-05 01:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_categories`
--

CREATE TABLE `tb_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_subcategory` tinyint(4) NOT NULL DEFAULT '0',
  `category_id` bigint(20) NOT NULL DEFAULT '-1',
  `date_created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_categories`
--

INSERT INTO `tb_categories` (`id`, `title`, `is_subcategory`, `category_id`, `date_created`) VALUES
(40, 'BEAUTY', 0, -1, '2020-08-04 08:19:31'),
(41, 'Barber Specialist', 1, 42, '2020-08-04 08:19:35'),
(42, 'HAIR CARE', 0, -1, '2020-08-04 08:19:46'),
(43, 'Nails Specialist', 1, 40, '2020-08-04 08:22:02'),
(44, 'ASMR', 0, -1, '2020-08-04 08:22:11'),
(47, 'Makeup Specialist', 1, 40, '2020-08-04 08:43:55'),
(48, 'Eyebrow Specialist', 1, 40, '2020-08-04 08:44:07'),
(49, 'Mukbang', 1, 44, '2020-08-04 08:45:01'),
(50, 'Relaxation', 1, 44, '2020-08-04 08:45:23'),
(51, 'TRAVEL', 0, -1, '2020-08-04 08:48:19'),
(52, 'Tour Guide', 1, 51, '2020-08-04 08:48:26'),
(53, 'FOOD & BEVERAGE', 0, -1, '2020-08-04 08:48:51'),
(56, 'ASSISTANT', 0, -1, '2020-08-04 08:55:18'),
(60, 'all', 1, 58, '2020-08-04 13:33:42'),
(63, 'IT & NETWORKING', 0, -1, '2020-08-04 17:05:15'),
(64, 'Network Engineer', 1, 63, '2020-08-04 17:05:35'),
(65, 'Software Engineer', 1, 63, '2020-08-04 17:06:03'),
(66, 'Computer Specialist', 1, 63, '2020-08-04 17:07:11'),
(83, 'MUSIC & AUDIO', 0, -1, '2020-08-12 00:03:04'),
(84, 'Music Instructor', 1, 83, '2020-08-12 00:03:23'),
(85, 'DANCE SERVICES', 0, -1, '2020-08-12 00:03:32'),
(86, 'Dance Instructor', 1, 85, '2020-08-12 00:03:44'),
(87, 'FASHION', 0, -1, '2020-08-12 00:05:23'),
(88, 'Fashion Stylist', 1, 87, '2020-08-12 00:05:35'),
(93, 'Cooking Lessons ', 1, 53, '2020-08-12 13:28:38'),
(95, 'EDUCATION', 0, -1, '2020-08-12 13:57:01'),
(110, 'Musical Instruments', 1, 83, '2020-08-12 16:06:40'),
(116, 'AUTO SERVICES ', 0, -1, '2020-08-12 21:11:16'),
(117, 'Auto Technician', 1, 116, '2020-08-12 21:12:06'),
(118, 'Language', 1, 95, '2020-08-12 21:14:43'),
(122, 'Virtual Assistant', 1, 56, '2020-08-13 00:21:14'),
(124, 'FITNESS', 0, -1, '2020-08-13 00:31:16'),
(125, 'Personal Trainer ', 1, 124, '2020-08-13 00:32:13'),
(126, 'NUTRITION ', 0, -1, '2020-08-13 00:32:29'),
(127, 'Dietitian ', 1, 126, '2020-08-13 00:32:47'),
(138, 'Vocal Coach', 1, 83, '2020-08-23 03:43:24'),
(143, 'Hair Coloring ', 1, 42, '2020-08-23 13:11:24'),
(144, 'Hair Stylist', 1, 42, '2020-08-23 17:28:52'),
(147, 'Yoga Instructor', 1, 124, '2020-12-22 15:16:49'),
(148, 'ARTWORK', 0, -1, '2020-12-22 16:40:43'),
(149, 'Painting Session', 1, 148, '2020-12-22 16:41:06'),
(152, 'STARS & ENTERTAINMENT', 0, -1, '2020-12-28 13:29:05'),
(153, 'YouTube', 1, 152, '2020-12-28 13:32:53'),
(156, 'TikTok', 1, 152, '2020-12-28 13:33:42'),
(157, 'Twitter', 1, 152, '2020-12-28 13:39:46'),
(158, 'Instagram', 1, 152, '2020-12-28 13:41:24'),
(159, 'Snapchat', 1, 152, '2020-12-28 14:00:41'),
(160, 'Facebook', 1, 152, '2020-12-28 14:00:51'),
(164, 'BABY & NEW PARENTS', 0, -1, '2020-12-29 15:46:29'),
(172, 'PET CARE', 0, -1, '2021-01-02 09:50:22'),
(173, 'Pet Groomer', 1, 172, '2021-01-02 09:50:33'),
(174, 'Skincare Specialist ', 1, 40, '2021-01-04 16:09:07'),
(175, 'Early Childhood Specialist', 1, 164, '2021-01-05 10:09:29'),
(176, 'COACHING', 0, -1, '2021-01-06 16:19:07'),
(177, 'Education', 1, 176, '2021-01-06 16:19:22'),
(178, 'Photography', 1, 148, '2021-01-06 18:13:58'),
(179, 'Tutor', 1, 95, '2021-01-06 18:16:42'),
(180, 'FINANCES', 0, -1, '2021-01-13 18:38:52'),
(181, 'Financial Advisor', 1, 180, '2021-01-13 18:39:03'),
(182, 'Life Coach', 1, 176, '2021-01-17 16:16:58'),
(185, 'DO IT YOURSELF', 0, -1, '2021-01-28 20:08:25'),
(186, 'DIY', 1, 185, '2021-01-28 20:08:42'),
(188, 'Sleep Training', 1, 164, '2021-02-01 19:18:00'),
(189, 'Sports', 1, 176, '2021-02-02 06:28:14'),
(190, 'Pet Training', 1, 172, '2021-02-02 10:26:39'),
(191, 'DESIGN', 0, -1, '2021-02-02 19:55:26'),
(192, 'Interior Design', 1, 191, '2021-02-02 19:55:58'),
(193, 'Graphic Design', 1, 191, '2021-02-02 19:56:27'),
(194, 'Entrepreneur', 1, 176, '2021-02-14 20:48:41'),
(195, 'Bartender', 1, 53, '2021-02-23 19:43:03'),
(196, 'Zumba', 1, 124, '2021-04-07 11:58:43'),
(197, 'SPIRITUAL', 0, -1, '2021-04-13 20:44:53'),
(201, 'Spiritual Advisor', 1, 197, '2021-04-13 21:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paymentinfo`
--

CREATE TABLE `tb_paymentinfo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routing_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_paymentinfo`
--

INSERT INTO `tb_paymentinfo` (`id`, `user_id`, `first_name`, `last_name`, `account_number`, `routing_number`, `dob`, `email`, `account_type`, `ssn`, `created_at`, `updated_at`) VALUES
(14, 19, NULL, NULL, NULL, NULL, NULL, 'tes@gmail.com', NULL, NULL, '2021-05-05 01:31:36', '2021-05-05 01:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_portofolio`
--

CREATE TABLE `tb_portofolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_portofolio`
--

INSERT INTO `tb_portofolio` (`id`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 19, 'https://learnme.live/uploadfiles/portfolio/1590966049522.png', NULL, NULL),
(2, 19, 'https://learnme.live/uploadfiles/portfolio/1591328086648.png', NULL, NULL),
(3, 19, 'https://learnme.live/uploadfiles/portfolio/1591328159867.png', NULL, NULL),
(4, 19, 'https://learnme.live/uploadfiles/portfolio/1591393712918.png', NULL, NULL),
(5, 19, 'https://learnme.live/uploadfiles/portfolio/1591495476252.png', NULL, NULL),
(6, 19, 'https://learnme.live/uploadfiles/portfolio/1591766925273.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_servicecategory`
--

CREATE TABLE `tb_servicecategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_15` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_30` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_45` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_60` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_servicecategory`
--

INSERT INTO `tb_servicecategory` (`id`, `user_id`, `category_id`, `name`, `t_15`, `t_30`, `t_45`, `t_60`, `created_at`, `updated_at`) VALUES
(5, 19, 158, 'Instagram', NULL, NULL, NULL, NULL, '2021-05-05 01:31:36', '2021-05-05 01:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('seller','buyer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'buyer',
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_complete` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `languages` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tools` longtext COLLATE utf8mb4_unicode_ci,
  `approve` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('offline','online') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'offline',
  `rating` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '0',
  `notification` enum('off','on') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `timezone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'America/Chicago',
  `account_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssn` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `type`, `username`, `first_name`, `last_name`, `email`, `password`, `phone`, `picture`, `dob`, `gender`, `country`, `remember_token`, `profile_complete`, `address`, `description`, `languages`, `tools`, `approve`, `token`, `state`, `rating`, `count`, `notification`, `timezone`, `account_id`, `payment_type`, `ssn`, `google_id`, `fb_id`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'buyer', 'client', 'first', 'last', 'client@gmail.com', '$2y$10$9o5tHiI/nuROeEV.gaRBPuh5nfZUAwVHzTuS9z151sdoZ/2ibEt/a', '+923017161638', '', NULL, 'male', 'Pakistan', NULL, '0', NULL, NULL, NULL, NULL, '0', NULL, 'offline', '0', 0, 'on', 'America/Chicago', NULL, NULL, NULL, NULL, NULL, '1620301868', '2021-05-04 01:41:32', '2021-05-06 01:50:48'),
(19, 'seller', 'specialist', 'abudr1', 'rehman', 'superadmin22@gmail.com', '$2y$10$c0DV2pO6dOHh.STCqjV6uePmzQO8qPsu2Kpwal/de3MmVi5KQwxmm', '+923017161638', 'http://localhost/laravelprojects/learnmelive-updated/uploads/user/1620214295.png', NULL, 'male', 'Pakistan', NULL, '0', 'fsd pakistan', 'i have two years experince in php/laravel developer ', 'Armenian,English,Punjabi', NULL, '1', NULL, 'offline', '0', 0, 'on', 'America/Chicago', NULL, 'paypal', NULL, NULL, NULL, '0', '2021-05-05 01:31:36', '2021-05-05 01:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'America/Chicago',
  `fcm_token` longtext COLLATE utf8mb4_unicode_ci,
  `last_login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `country`, `email_verified_at`, `password`, `photo`, `payment_method`, `payment_email`, `payment_password`, `status`, `remember_token`, `created_at`, `updated_at`, `username`, `avatar`, `time_zone`, `fcm_token`, `last_login`) VALUES
(25, 'client', 'clientName', 'client@gmail.com', 'Andorra', NULL, '$2y$10$IwluwvTiJF12BNx3uvV3L.mEFYxynM.j9jx54VbPCkA43AVpAsN3C', NULL, 'stripe', NULL, 'asdfghjkl;', 'active', NULL, '2021-03-02 02:16:43', '2021-05-03 20:24:55', 'client', 'public/uploads/user/1617173845_', 'Asia/Karachi', 'cPp8q3evBY8e3WFNHuCLD4:APA91bGypBtrXB1QxJ0ayMoeh9fogNQxduARWGeKBMTP17LuZiQO0033Qre8of22ZV-ZSBnx_9nwI4qOkT_jzzFL14ajyxnjOzsGK9MXlUnS6vKjgsu5rcsz2y0WiTwk_a8Q4OUoEFuj', '1620109515'),
(49, 'specialist', 'specialistName', 'waseem@ewdtech.com', 'Germany', NULL, '$2y$10$QDVKxz5AVsNOPRT7puVQvOh/1TGPseXdouUl0aN6em33HR5FcyNRK', NULL, NULL, NULL, NULL, 'active', NULL, '2021-03-06 00:21:21', '2021-05-03 02:04:03', 'waseem-ewdtech', 'public/uploads/user/1617606937_', 'America/Chicago', 'cZr9hymyfDf6PmtsaCLcsG:APA91bGAl8wUmjkQ1k2IGcP11337T62oW85ZnUmImXeWnSwUOEtAeQ-QeqO5oyGXLMrB02lFvn6HpWmqnE6j7vVhVob9raTeNrmpfns8r6h-SavmsS-2jggd7nTLKOT27344E4-g7I2n', '1620043463'),
(101, 'admin', 'Muhammad Waseem', 'superadmin@gmail.com', '', NULL, '$2y$10$QDVKxz5AVsNOPRT7puVQvOh/1TGPseXdouUl0aN6em33HR5FcyNRK', NULL, NULL, NULL, NULL, 'active', NULL, '2021-03-03 07:34:07', '2021-05-03 20:04:13', 'learnme live Support', NULL, 'America/Managua', NULL, '1620108273'),
(102, 'client', 'client1Name', 'client1@gmail.com', 'Andorra', NULL, '$2y$10$IwluwvTiJF12BNx3uvV3L.mEFYxynM.j9jx54VbPCkA43AVpAsN3C', NULL, 'stripe', NULL, 'asdfghjkl;', 'active', NULL, '2021-03-02 02:16:43', '2021-04-23 01:54:01', 'client1', 'public/uploads/user/1617173845_', 'Atlantic/Cape_Verde', 'cZr9hymyfDf6PmtsaCLcsG:APA91bGAl8wUmjkQ1k2IGcP11337T62oW85ZnUmImXeWnSwUOEtAeQ-QeqO5oyGXLMrB02lFvn6HpWmqnE6j7vVhVob9raTeNrmpfns8r6h-SavmsS-2jggd7nTLKOT27344E4-g7I2n', '1619082351'),
(103, 'specialist', 'spename', 'specialist1@gmail.com', 'Pakistan', NULL, '$2y$10$klbDxoSri60EfbgUMxTOt.0Hf4OV.xNXcIbkniQLtvDBhhWnJRkim', NULL, NULL, NULL, NULL, 'inactive', NULL, '2021-04-23 05:57:44', '2021-04-24 00:22:28', 'specialist1', 'public/uploads/user/1619175464_', 'America/Chicago', NULL, '1619241768');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_specialist_id_foreign` (`specialist_id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`),
  ADD KEY `appointments_service_id_foreign` (`service_id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bids_service_request_id_foreign` (`service_request_id`),
  ADD KEY `bids_specialist_id_foreign` (`specialist_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_specialists`
--
ALTER TABLE `category_specialists`
  ADD KEY `category_specialists_category_id_foreign` (`category_id`),
  ADD KEY `category_specialists_specialist_id_foreign` (`specialist_id`);

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD UNIQUE KEY `channels_channel_unique` (`channel`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_user_id_foreign` (`user_id`);

--
-- Indexes for table `client_specialists`
--
ALTER TABLE `client_specialists`
  ADD KEY `client_specialists_client_id_foreign` (`client_id`),
  ADD KEY `client_specialists_specialist_id_foreign` (`specialist_id`);

--
-- Indexes for table `client_specialist_disputes`
--
ALTER TABLE `client_specialist_disputes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispute_replies`
--
ALTER TABLE `dispute_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dispute_replies_dispute_id_foreign` (`dispute_id`),
  ADD KEY `dispute_replies_sender_id_foreign` (`sender_id`),
  ADD KEY `dispute_replies_reciever_id_foreign` (`reciever_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_specialist_id_foreign` (`specialist_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_specialist_id_foreign` (`specialist_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_specialist_id_foreign` (`specialist_id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`),
  ADD KEY `ratings_appointment_id_foreign` (`appointment_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_specialist_id_foreign` (`specialist_id`),
  ADD KEY `services_category_id_foreign` (`category_id`);

--
-- Indexes for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_requests_user_id_foreign` (`user_id`),
  ADD KEY `service_requests_category_id_foreign` (`category_id`);

--
-- Indexes for table `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialists_user_id_foreign` (`user_id`),
  ADD KEY `specialists_category_id_foreign` (`category_id`);

--
-- Indexes for table `tb_availabletime`
--
ALTER TABLE `tb_availabletime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_availabletime_user_id_foreign` (`user_id`);

--
-- Indexes for table `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_paymentinfo`
--
ALTER TABLE `tb_paymentinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_paymentinfo_user_id_foreign` (`user_id`);

--
-- Indexes for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_portofolio_user_id_foreign` (`user_id`);

--
-- Indexes for table `tb_servicecategory`
--
ALTER TABLE `tb_servicecategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_servicecategory_user_id_foreign` (`user_id`),
  ADD KEY `tb_servicecategory_category_id_foreign` (`category_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_specialist_disputes`
--
ALTER TABLE `client_specialist_disputes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `dispute_replies`
--
ALTER TABLE `dispute_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_requests`
--
ALTER TABLE `service_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_availabletime`
--
ALTER TABLE `tb_availabletime`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `tb_paymentinfo`
--
ALTER TABLE `tb_paymentinfo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_servicecategory`
--
ALTER TABLE `tb_servicecategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_service_request_id_foreign` FOREIGN KEY (`service_request_id`) REFERENCES `service_requests` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bids_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_specialists`
--
ALTER TABLE `category_specialists`
  ADD CONSTRAINT `category_specialists_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_specialists_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client_specialists`
--
ALTER TABLE `client_specialists`
  ADD CONSTRAINT `client_specialists_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `client_specialists_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dispute_replies`
--
ALTER TABLE `dispute_replies`
  ADD CONSTRAINT `dispute_replies_dispute_id_foreign` FOREIGN KEY (`dispute_id`) REFERENCES `client_specialist_disputes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dispute_replies_reciever_id_foreign` FOREIGN KEY (`reciever_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dispute_replies_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `services_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD CONSTRAINT `service_requests_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `specialists`
--
ALTER TABLE `specialists`
  ADD CONSTRAINT `specialists_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `specialists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_availabletime`
--
ALTER TABLE `tb_availabletime`
  ADD CONSTRAINT `tb_availabletime_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_paymentinfo`
--
ALTER TABLE `tb_paymentinfo`
  ADD CONSTRAINT `tb_paymentinfo_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  ADD CONSTRAINT `tb_portofolio_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_servicecategory`
--
ALTER TABLE `tb_servicecategory`
  ADD CONSTRAINT `tb_servicecategory_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `tb_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_servicecategory_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
