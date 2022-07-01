-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2022 at 09:40 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laatokosherofood`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int UNSIGNED DEFAULT NULL,
  `shipping_charge` decimal(10,0) NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `city_id`, `shipping_charge`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dallu', 1, '125', '0', '2021-10-30 09:10:04', '2021-10-30 09:15:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `city_id`, `image`, `contact_number`, `phone_number`, `status`, `address`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ktm', 1, 'branches/October2021/cMOvqY8zZVCdA2RVfnpZ.png', '111111111', '111111111111111111', '1', 'patan', '<p>test</p>', '2021-10-30 09:37:03', '2021-10-30 09:49:50', NULL),
(2, 'Pokhara', 1, NULL, '9860240025', NULL, '1', 'TEst', NULL, '2021-10-31 11:39:46', '2021-10-31 11:47:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `parent_id` int UNSIGNED DEFAULT NULL,
  `order` int NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`, `status`, `image`, `deleted_at`) VALUES
(8, NULL, 1, 'sdasd', 'sdasd', '2021-10-23 11:53:56', '2021-10-23 11:53:56', 1, NULL, NULL),
(9, NULL, 1, ';k;l;lk;\';\';l\';l\';', 'k-l-lk-l-l;\'', '2021-10-23 12:00:04', '2021-10-23 12:00:04', 0, NULL, NULL),
(10, NULL, 1, 'Food', 'food', '2021-10-30 08:51:11', '2021-10-30 08:51:11', 1, 'categories/October2021/ptnHZTARVpzJ1dUQrhjC.jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`, `image`) VALUES
(1, 'Kathmandu', '1', '2021-10-30 09:09:17', '2021-10-30 09:09:34', NULL, 'cities/October2021/oMpxVcUKkRR2cocpdG2A.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int DEFAULT '1',
  `email_verfied_at` timestamp NULL DEFAULT NULL,
  `secondary_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `phone_number`, `gender`, `email`, `created_at`, `updated_at`, `deleted_at`, `status`, `email_verfied_at`, `secondary_phone_number`, `last_name`, `password`, `facebook_id`, `google_id`, `remember_token`) VALUES
(14, 'Dibya', '9860240025', 'M', 'DIbya@gmail.com', '2021-11-01 05:40:03', '2021-11-01 05:40:03', NULL, 1, NULL, NULL, 'Joshi', '$2a$12$uvuHUOf8peUGsHjv/bjetOhBfXFHJLkn4WIfJCCDgQrd5qem847um', NULL, NULL, NULL),
(15, 'Constance', '4444444444', 'M', 'dyvow@mailinator.com', '2021-11-01 05:45:16', '2021-11-01 05:45:16', NULL, 1, NULL, NULL, 'Mejia', '$2a$12$45vaUjRefaO35il7Tl0bxezy6icPjL3ToAFv5lVk6erVFtNUCgd6G', NULL, NULL, NULL),
(28, 'Shreya', NULL, NULL, 'tamrakar.shreyaa@gmail.com', '2021-11-23 09:35:06', '2021-11-23 09:35:06', NULL, 1, NULL, NULL, 'Tamrakar', '$2y$10$MH/1.gGi/Yrii4YwMy820.K/xfErhsgbDcHUhFHF9mlZA3s9wwoI.', NULL, '110782881599631218411', NULL),
(29, 'Dibya', NULL, NULL, 'joshidibya77@gmail.com', '2021-11-23 09:37:34', '2021-11-23 09:37:34', NULL, 1, NULL, NULL, 'Joshi', '$2y$10$sm0xpt69romhzfDRbKVWNOAffFNHqSk/Vyn1KKdDeG/K674xmGTnu', NULL, '108621818076149696408', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int UNSIGNED NOT NULL,
  `data_type_id` int UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 0, 0, 0, 0, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'number', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 0, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 4, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{\"on\":\"Active\",\"off\":\"Inactive\"}', 8),
(57, 4, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 9),
(58, 4, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 10),
(59, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(60, 7, 'category_id', 'text', 'Category Id', 0, 0, 0, 0, 0, 0, '{}', 9),
(61, 7, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(62, 7, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{\"on\":\"Active\",\"off\":\"Inactive\"}', 8),
(63, 7, 'price', 'text', 'Price', 1, 1, 1, 1, 1, 1, '{}', 5),
(64, 7, 'offer_price', 'text', 'Offer Price', 0, 1, 1, 1, 1, 1, '{}', 6),
(65, 7, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 7),
(66, 7, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 1, 0, 0, 0, '{}', 10),
(67, 7, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 11),
(68, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(70, 7, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(71, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 6),
(73, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(74, 8, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(75, 8, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 5),
(76, 8, 'order', 'number', 'Order', 0, 1, 1, 1, 1, 1, '{}', 7),
(77, 8, 'slug', 'text', 'Slug', 1, 0, 1, 0, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 4),
(78, 8, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{\"on\":\"Active\",\"off\":\"Inactive\"}', 6),
(79, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 8),
(80, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(81, 8, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 10),
(82, 8, 'category_id', 'text', 'Category Id', 0, 1, 1, 1, 1, 1, '{}', 11),
(83, 8, 'sub_category_belongsto_category_relationship', 'relationship', 'Category', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(84, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(85, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(86, 9, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{\"on\":\"Active\",\"off\":\"Inactive\"}', 4),
(87, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 5),
(88, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(89, 9, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 7),
(90, 9, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 3),
(91, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(92, 10, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 4),
(93, 10, 'city_id', 'text', 'City Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(94, 10, 'shipping_charge', 'number', 'Shipping Charge', 1, 1, 1, 1, 1, 1, '{}', 5),
(95, 10, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{\"on\":\"Active\",\"off\":\"Inactive\"}', 6),
(96, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 7),
(97, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(98, 10, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 9),
(99, 10, 'area_belongsto_area_relationship', 'relationship', 'City', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\City\",\"table\":\"cities\",\"type\":\"belongsTo\",\"column\":\"city_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"areas\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(100, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(101, 11, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(102, 11, 'city_id', 'text', 'City Id', 1, 1, 1, 1, 1, 1, '{}', 4),
(103, 11, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 7),
(104, 11, 'contact_number', 'number', 'Contact Number', 1, 0, 1, 1, 1, 1, '{}', 5),
(105, 11, 'phone_number', 'number', 'Mobile Number', 0, 0, 1, 1, 1, 1, '{}', 6),
(106, 11, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{\"on\":\"Active\",\"off\":\"Inactive\"}', 9),
(107, 11, 'address', 'text', 'Address', 0, 0, 1, 1, 1, 1, '{}', 8),
(108, 11, 'description', 'rich_text_box', 'Description', 0, 0, 1, 1, 1, 1, '{}', 10),
(109, 11, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 11),
(110, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(111, 11, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 13),
(112, 11, 'branch_belongsto_city_relationship', 'relationship', 'City', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\City\",\"table\":\"cities\",\"type\":\"belongsTo\",\"column\":\"city_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"areas\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(113, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(115, 12, 'phone_number', 'number', 'Phone Number', 1, 0, 1, 1, 1, 1, '{}', 4),
(116, 12, 'gender', 'text', 'Gender', 0, 1, 1, 1, 1, 1, '{}', 6),
(117, 12, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 3),
(118, 12, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 9),
(119, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(120, 12, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 11),
(121, 12, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{\"on\":\"Active\",\"off\":\"Inactive\"}', 7),
(122, 12, 'email_verfied_at', 'timestamp', 'Email Verfied At', 0, 0, 1, 0, 0, 0, '{}', 8),
(123, 12, 'secondary_phone_number', 'text', 'Secondary Phone Number', 0, 0, 1, 1, 1, 1, '{}', 5),
(124, 7, 'item_belongsto_sub_category_relationship', 'relationship', 'Sub Category', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\SubCategory\",\"table\":\"sub_categories\",\"type\":\"belongsTo\",\"column\":\"sub_category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"areas\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(125, 7, 'sub_category_id', 'text', 'Sub Category Id', 1, 1, 1, 1, 1, 1, '{}', 12),
(126, 12, 'first_name', 'text', 'First Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(127, 12, 'last_name', 'text', 'Last Name', 1, 1, 1, 1, 1, 1, '{}', 12),
(128, 12, 'password', 'password', 'Password', 0, 0, 1, 0, 0, 0, '{}', 13),
(129, 12, 'facebook_id', 'text', 'Facebook Id', 0, 1, 1, 1, 1, 1, '{}', 14),
(130, 12, 'google_id', 'text', 'Google Id', 0, 1, 1, 1, 1, 1, '{}', 15),
(131, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(132, 13, 'amount', 'text', 'Amount', 1, 1, 1, 1, 1, 1, '{}', 2),
(133, 13, 'area_id', 'text', 'Area Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(134, 13, 'address_description', 'text', 'Address Description', 0, 1, 1, 1, 1, 1, '{}', 4),
(135, 13, 'shipping_charge', 'text', 'Shipping Charge', 1, 1, 1, 1, 1, 1, '{}', 5),
(136, 13, 'total_amount', 'text', 'Total Amount', 1, 1, 1, 1, 1, 1, '{}', 6),
(137, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 7),
(138, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(139, 13, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 9),
(140, 13, 'order_belongsto_area_relationship', 'relationship', 'areas', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Area\",\"table\":\"areas\",\"type\":\"belongsTo\",\"column\":\"area_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"areas\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(141, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 0),
(142, 14, 'order_id', 'text', 'Order Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(143, 14, 'item_id', 'text', 'Item Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(144, 14, 'amount', 'text', 'Amount', 1, 1, 1, 1, 1, 1, '{}', 4),
(145, 14, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 5),
(146, 14, 'quantity', 'text', 'Quantity', 1, 1, 1, 1, 1, 1, '{}', 6),
(147, 14, 'discount', 'text', 'Discount', 0, 1, 1, 1, 1, 1, '{}', 7),
(148, 14, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 8),
(149, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(150, 14, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 10),
(151, 13, 'contact_number', 'text', 'Contact Number', 0, 1, 1, 1, 1, 1, '{}', 10),
(152, 13, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 11),
(153, 13, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 12);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-10-23 10:25:24', '2021-10-26 10:42:40'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-10-23 10:25:25', '2021-10-23 10:25:25'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-10-23 10:25:25', '2021-10-23 10:25:25'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'App\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-10-23 10:25:45', '2021-10-30 09:16:21'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2021-10-23 10:25:49', '2021-10-23 10:25:49'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2021-10-23 10:25:54', '2021-10-23 10:25:54'),
(7, 'items', 'items', 'Item', 'Items', NULL, 'App\\Item', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-10-23 11:51:52', '2021-10-30 10:19:08'),
(8, 'sub_categories', 'sub-categories', 'Sub Category', 'Sub Categories', NULL, 'App\\SubCategory', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-10-30 08:43:59', '2021-10-30 09:16:48'),
(9, 'cities', 'cities', 'City', 'Cities', NULL, 'App\\City', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-10-30 09:04:42', '2021-10-30 09:16:31'),
(10, 'areas', 'areas', 'Area', 'Areas', NULL, 'App\\Area', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-10-30 09:05:24', '2021-10-30 09:15:27'),
(11, 'branches', 'branches', 'Branch', 'Branches', NULL, 'App\\Branch', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-10-30 09:34:22', '2021-10-30 09:50:28'),
(12, 'customers', 'customers', 'Customer', 'Customers', NULL, 'App\\Customer', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-10-30 09:59:43', '2021-11-09 02:41:58'),
(13, 'orders', 'orders', 'Order', 'Orders', NULL, 'App\\Order', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-11-09 10:14:53', '2021-12-03 09:48:32'),
(14, 'order_details', 'order-details', 'Order Detail', 'Order Details', NULL, 'App\\OrderDetail', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-11-09 10:20:43', '2021-11-09 10:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `price` decimal(14,2) NOT NULL,
  `offer_price` decimal(14,2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `sub_category_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `status`, `price`, `offer_price`, `image`, `deleted_at`, `created_at`, `updated_at`, `description`, `sub_category_id`) VALUES
(2, NULL, 'Maggy Melendez', 1, '692.00', '464.00', NULL, NULL, '2021-10-30 10:19:25', '2021-10-30 10:19:25', '<p>Veniam, modi id magn.</p>', 1),
(3, NULL, 'Eggss', 1, '100.00', '98.00', 'items/October2021/d5pT9WlG4ew1qcUzttfO.jpg', NULL, '2021-10-30 10:20:23', '2021-10-30 10:20:23', '<p>Tato tato anda</p>', 2);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-10-23 10:25:31', '2021-10-23 10:25:31'),
(2, 'menu', '2021-10-29 05:28:56', '2021-10-29 05:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int UNSIGNED NOT NULL,
  `menu_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2021-10-23 10:25:31', '2021-10-23 10:25:31', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 9, '2021-10-23 10:25:32', '2021-11-09 10:21:53', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 8, '2021-10-23 10:25:32', '2021-11-09 10:21:53', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 7, '2021-10-23 10:25:32', '2021-11-09 10:21:52', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 11, '2021-10-23 10:25:33', '2021-11-09 10:21:46', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2021-10-23 10:25:33', '2021-10-30 09:08:39', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2021-10-23 10:25:33', '2021-10-30 09:08:39', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-10-23 10:25:33', '2021-10-30 09:08:40', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-10-23 10:25:33', '2021-10-30 09:08:40', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 12, '2021-10-23 10:25:34', '2021-11-09 10:21:47', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', NULL, '#000000', 20, 1, '2021-10-23 10:25:47', '2021-10-30 10:00:49', 'voyager.categories.index', 'null'),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 10, '2021-10-23 10:25:56', '2021-11-09 10:21:46', 'voyager.pages.index', NULL),
(14, 1, 'Items', '', '_self', NULL, NULL, 20, 3, '2021-10-23 11:51:52', '2021-10-30 10:00:49', 'voyager.items.index', NULL),
(15, 2, 'Home', '/', '_self', NULL, '#000000', NULL, 16, '2021-10-29 05:29:33', '2021-10-29 05:35:05', NULL, ''),
(16, 2, 'Menu', 'menu', '_self', NULL, '#000000', NULL, 17, '2021-10-29 05:29:59', '2021-10-29 05:35:00', NULL, ''),
(17, 2, 'About Us', 'about-us', '_self', NULL, '#000000', NULL, 18, '2021-10-29 05:30:16', '2021-10-29 05:34:41', NULL, ''),
(18, 2, 'Contact Us', 'contact-us', '_self', NULL, '#000000', NULL, 19, '2021-10-29 05:30:32', '2021-10-29 05:34:54', NULL, ''),
(19, 1, 'Sub Categories', '', '_self', NULL, NULL, 20, 2, '2021-10-30 08:44:00', '2021-10-30 10:00:49', 'voyager.sub-categories.index', NULL),
(20, 1, 'Menu', '', '_self', 'voyager-receipt', '#000000', NULL, 5, '2021-10-30 08:46:30', '2021-11-09 10:21:58', NULL, ''),
(21, 1, 'Cities', '', '_self', 'Y', '#000000', 23, 1, '2021-10-30 09:04:42', '2021-10-30 09:19:01', 'voyager.cities.index', 'null'),
(22, 1, 'Areas', '', '_self', NULL, NULL, 23, 2, '2021-10-30 09:05:24', '2021-10-30 09:08:31', 'voyager.areas.index', NULL),
(23, 1, 'Shipping Charge', '', '_self', 'voyager-dollar', '#000000', NULL, 6, '2021-10-30 09:08:16', '2021-11-09 10:21:52', NULL, ''),
(24, 1, 'Branches', '', '_self', 'voyager-group', '#000000', NULL, 3, '2021-10-30 09:34:22', '2021-10-30 10:00:48', 'voyager.branches.index', 'null'),
(25, 1, 'Customers', '', '_self', 'voyager-person', '#000000', NULL, 2, '2021-10-30 09:59:43', '2021-10-30 10:01:22', 'voyager.customers.index', 'null'),
(26, 1, 'Orders', '', '_self', 'voyager-megaphone', '#000000', NULL, 4, '2021-11-09 10:14:53', '2021-11-09 10:23:18', 'voyager.orders.index', 'null');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2021_10_23_165518_add_status_softdelete_in_category_table', 2),
(30, '2021_10_23_172437_create_items_table', 3),
(31, '2021_10_26_090432_create_tests_table', 4),
(32, '2021_10_26_160056_create_items_table', 4),
(33, '2021_10_26_160057_add_foreign_keys_to_items_table', 4),
(34, '2021_10_30_094017_add_is_group_in_category_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int UNSIGNED NOT NULL,
  `amount` decimal(10,0) UNSIGNED NOT NULL DEFAULT '0',
  `area_id` int UNSIGNED NOT NULL,
  `address_description` longtext COLLATE utf8mb4_unicode_ci,
  `shipping_charge` decimal(10,0) NOT NULL DEFAULT '0',
  `total_amount` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `amount`, `area_id`, `address_description`, `shipping_charge`, `total_amount`, `created_at`, `updated_at`, `deleted_at`, `contact_number`, `email`, `name`) VALUES
(1, '0', 0, 'Est autem pariatur', '100', '100', '2021-12-01 10:11:34', '2021-12-01 10:11:34', NULL, '+1 (892) 744-9726', 'qigase@mailinator.com', NULL),
(2, '0', 0, 'Neque similique at e', '100', '100', '2021-12-03 09:29:00', '2021-12-03 09:29:00', NULL, '+1 (741) 682-5577', 'motigu@mailinator.com', NULL),
(3, '0', 0, 'Ut molestiae laboris', '100', '100', '2021-12-03 09:52:19', '2021-12-03 09:52:19', NULL, '+1 (172) 291-6101', 'tamrakar.shreyaa@gmail.com', 'Brian'),
(4, '0', 0, 'Ut molestiae laboris', '100', '100', '2021-12-03 10:06:20', '2021-12-03 10:06:20', NULL, '+1 (172) 291-6101', 'tamrakar.shreyaa@gmail.com', 'Brian'),
(5, '0', 0, 'Ut molestiae laboris', '100', '100', '2021-12-03 10:07:51', '2021-12-03 10:07:51', NULL, '+1 (172) 291-6101', 'tamrakar.shreyaa@gmail.com', 'Brian'),
(6, '0', 0, 'Ut molestiae laboris', '100', '100', '2021-12-03 10:21:20', '2021-12-03 10:21:20', NULL, '+1 (172) 291-6101', 'tamrakar.shreyaa@gmail.com', 'Brian'),
(7, '0', 0, 'Ut molestiae laboris', '100', '100', '2021-12-03 10:22:18', '2021-12-03 10:22:18', NULL, '+1 (172) 291-6101', 'tamrakar.shreyaa@gmail.com', 'Brian'),
(8, '0', 0, 'Ut molestiae laboris', '100', '100', '2021-12-03 10:22:41', '2021-12-03 10:22:41', NULL, '+1 (172) 291-6101', 'tamrakar.shreyaa@gmail.com', 'Brian'),
(9, '0', 0, 'Ut molestiae laboris', '100', '100', '2021-12-03 10:23:43', '2021-12-03 10:23:43', NULL, '+1 (172) 291-6101', 'tamrakar.shreyaa@gmail.com', 'Brian'),
(10, '0', 0, 'Ut molestiae laboris', '100', '100', '2021-12-03 10:24:22', '2021-12-03 10:24:22', NULL, '+1 (172) 291-6101', 'tamrakar.shreyaa@gmail.com', 'Brian'),
(11, '0', 0, 'Ut molestiae laboris', '100', '100', '2021-12-03 10:26:02', '2021-12-03 10:26:02', NULL, '+1 (172) 291-6101', 'tamrakar.shreyaa@gmail.com', 'Brian'),
(12, '0', 0, 'Ut molestiae laboris', '100', '100', '2021-12-03 10:26:27', '2021-12-03 10:26:27', NULL, '+1 (172) 291-6101', 'tamrakar.shreyaa@gmail.com', 'Brian'),
(13, '0', 0, 'Recusandae Labore i', '100', '100', '2021-12-03 10:27:15', '2021-12-03 10:27:15', NULL, '+1 (917) 516-7584', 'tamrakar.shreyaa@gmail.com', 'Allen'),
(14, '0', 0, 'Recusandae Labore i', '100', '100', '2021-12-03 10:27:35', '2021-12-03 10:27:35', NULL, '+1 (917) 516-7584', 'tamrakar.shreyaa@gmail.com', 'Allen'),
(15, '0', 0, 'Recusandae Labore i', '100', '100', '2021-12-03 10:28:03', '2021-12-03 10:28:03', NULL, '+1 (917) 516-7584', 'tamrakar.shreyaa@gmail.com', 'Allen'),
(16, '0', 0, 'Recusandae Labore i', '100', '100', '2021-12-03 10:28:29', '2021-12-03 10:28:29', NULL, '+1 (917) 516-7584', 'tamrakar.shreyaa@gmail.com', 'Allen');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int UNSIGNED NOT NULL,
  `order_id` int UNSIGNED NOT NULL,
  `item_id` int UNSIGNED NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `quantity` int NOT NULL,
  `discount` decimal(10,0) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `item_id`, `amount`, `description`, `quantity`, `discount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '692', 'Test', 1, '0', '2021-12-01 10:11:34', '2021-12-01 10:11:34', NULL),
(2, 2, 2, '1384', 'Test', 2, '0', '2021-12-03 09:29:00', '2021-12-03 09:29:00', NULL),
(3, 2, 3, '100', NULL, 1, '0', '2021-12-03 09:29:00', '2021-12-03 09:29:00', NULL),
(4, 3, 2, '1384', 'Test', 2, '0', '2021-12-03 09:52:19', '2021-12-03 09:52:19', NULL),
(5, 3, 3, '100', NULL, 1, '0', '2021-12-03 09:52:19', '2021-12-03 09:52:19', NULL),
(6, 4, 2, '1384', 'Test', 2, '0', '2021-12-03 10:06:21', '2021-12-03 10:06:21', NULL),
(7, 4, 3, '100', NULL, 1, '0', '2021-12-03 10:06:21', '2021-12-03 10:06:21', NULL),
(8, 5, 2, '1384', 'Test', 2, '0', '2021-12-03 10:07:51', '2021-12-03 10:07:51', NULL),
(9, 5, 3, '100', NULL, 1, '0', '2021-12-03 10:07:51', '2021-12-03 10:07:51', NULL),
(10, 6, 2, '1384', 'Test', 2, '0', '2021-12-03 10:21:20', '2021-12-03 10:21:20', NULL),
(11, 6, 3, '100', NULL, 1, '0', '2021-12-03 10:21:20', '2021-12-03 10:21:20', NULL),
(12, 7, 2, '1384', 'Test', 2, '0', '2021-12-03 10:22:19', '2021-12-03 10:22:19', NULL),
(13, 7, 3, '100', NULL, 1, '0', '2021-12-03 10:22:19', '2021-12-03 10:22:19', NULL),
(14, 8, 2, '1384', 'Test', 2, '0', '2021-12-03 10:22:41', '2021-12-03 10:22:41', NULL),
(15, 8, 3, '100', NULL, 1, '0', '2021-12-03 10:22:42', '2021-12-03 10:22:42', NULL),
(16, 9, 2, '1384', 'Test', 2, '0', '2021-12-03 10:23:43', '2021-12-03 10:23:43', NULL),
(17, 9, 3, '100', NULL, 1, '0', '2021-12-03 10:23:43', '2021-12-03 10:23:43', NULL),
(18, 10, 2, '1384', 'Test', 2, '0', '2021-12-03 10:24:22', '2021-12-03 10:24:22', NULL),
(19, 10, 3, '100', NULL, 1, '0', '2021-12-03 10:24:23', '2021-12-03 10:24:23', NULL),
(20, 11, 2, '1384', 'Test', 2, '0', '2021-12-03 10:26:02', '2021-12-03 10:26:02', NULL),
(21, 11, 3, '100', NULL, 1, '0', '2021-12-03 10:26:02', '2021-12-03 10:26:02', NULL),
(22, 12, 2, '1384', 'Test', 2, '0', '2021-12-03 10:26:27', '2021-12-03 10:26:27', NULL),
(23, 12, 3, '100', NULL, 1, '0', '2021-12-03 10:26:27', '2021-12-03 10:26:27', NULL),
(24, 13, 2, '1384', 'Test', 2, '0', '2021-12-03 10:27:15', '2021-12-03 10:27:15', NULL),
(25, 13, 3, '100', NULL, 1, '0', '2021-12-03 10:27:15', '2021-12-03 10:27:15', NULL),
(26, 14, 2, '1384', 'Test', 2, '0', '2021-12-03 10:27:36', '2021-12-03 10:27:36', NULL),
(27, 14, 3, '100', NULL, 1, '0', '2021-12-03 10:27:36', '2021-12-03 10:27:36', NULL),
(28, 15, 2, '1384', 'Test', 2, '0', '2021-12-03 10:28:03', '2021-12-03 10:28:03', NULL),
(29, 15, 3, '100', NULL, 1, '0', '2021-12-03 10:28:03', '2021-12-03 10:28:03', NULL),
(30, 16, 2, '1384', 'Test', 2, '0', '2021-12-03 10:28:29', '2021-12-03 10:28:29', NULL),
(31, 16, 3, '100', NULL, 1, '0', '2021-12-03 10:28:30', '2021-12-03 10:28:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int UNSIGNED NOT NULL,
  `author_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2021-10-23 10:25:57', '2021-10-23 10:25:57'),
(2, 1, 'About Us', 'Blah Blah Bllah', '<p>asdadadsasda</p>', 'pages/October2021/PwQx9q8Vt3bazzdVo4wW.jpeg', 'about-us', 'asdasda', 'asdasdasd', 'ACTIVE', '2021-10-26 10:34:37', '2021-10-26 10:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tamrakar.shreyaa@gmail.com', '$2y$10$5cAmAYuwj7fLHJGiOW7nUurVaJbp.1fNoWPVDnfsafQeTisTPDZFi', '2022-04-07 05:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2021-10-23 10:25:35', '2021-10-23 10:25:35'),
(2, 'browse_bread', NULL, '2021-10-23 10:25:35', '2021-10-23 10:25:35'),
(3, 'browse_database', NULL, '2021-10-23 10:25:35', '2021-10-23 10:25:35'),
(4, 'browse_media', NULL, '2021-10-23 10:25:35', '2021-10-23 10:25:35'),
(5, 'browse_compass', NULL, '2021-10-23 10:25:35', '2021-10-23 10:25:35'),
(6, 'browse_menus', 'menus', '2021-10-23 10:25:36', '2021-10-23 10:25:36'),
(7, 'read_menus', 'menus', '2021-10-23 10:25:36', '2021-10-23 10:25:36'),
(8, 'edit_menus', 'menus', '2021-10-23 10:25:36', '2021-10-23 10:25:36'),
(9, 'add_menus', 'menus', '2021-10-23 10:25:36', '2021-10-23 10:25:36'),
(10, 'delete_menus', 'menus', '2021-10-23 10:25:36', '2021-10-23 10:25:36'),
(11, 'browse_roles', 'roles', '2021-10-23 10:25:36', '2021-10-23 10:25:36'),
(12, 'read_roles', 'roles', '2021-10-23 10:25:37', '2021-10-23 10:25:37'),
(13, 'edit_roles', 'roles', '2021-10-23 10:25:37', '2021-10-23 10:25:37'),
(14, 'add_roles', 'roles', '2021-10-23 10:25:37', '2021-10-23 10:25:37'),
(15, 'delete_roles', 'roles', '2021-10-23 10:25:37', '2021-10-23 10:25:37'),
(16, 'browse_users', 'users', '2021-10-23 10:25:37', '2021-10-23 10:25:37'),
(17, 'read_users', 'users', '2021-10-23 10:25:38', '2021-10-23 10:25:38'),
(18, 'edit_users', 'users', '2021-10-23 10:25:38', '2021-10-23 10:25:38'),
(19, 'add_users', 'users', '2021-10-23 10:25:38', '2021-10-23 10:25:38'),
(20, 'delete_users', 'users', '2021-10-23 10:25:38', '2021-10-23 10:25:38'),
(21, 'browse_settings', 'settings', '2021-10-23 10:25:38', '2021-10-23 10:25:38'),
(22, 'read_settings', 'settings', '2021-10-23 10:25:38', '2021-10-23 10:25:38'),
(23, 'edit_settings', 'settings', '2021-10-23 10:25:39', '2021-10-23 10:25:39'),
(24, 'add_settings', 'settings', '2021-10-23 10:25:39', '2021-10-23 10:25:39'),
(25, 'delete_settings', 'settings', '2021-10-23 10:25:39', '2021-10-23 10:25:39'),
(26, 'browse_categories', 'categories', '2021-10-23 10:25:47', '2021-10-23 10:25:47'),
(27, 'read_categories', 'categories', '2021-10-23 10:25:47', '2021-10-23 10:25:47'),
(28, 'edit_categories', 'categories', '2021-10-23 10:25:47', '2021-10-23 10:25:47'),
(29, 'add_categories', 'categories', '2021-10-23 10:25:48', '2021-10-23 10:25:48'),
(30, 'delete_categories', 'categories', '2021-10-23 10:25:48', '2021-10-23 10:25:48'),
(31, 'browse_posts', 'posts', '2021-10-23 10:25:52', '2021-10-23 10:25:52'),
(32, 'read_posts', 'posts', '2021-10-23 10:25:52', '2021-10-23 10:25:52'),
(33, 'edit_posts', 'posts', '2021-10-23 10:25:52', '2021-10-23 10:25:52'),
(34, 'add_posts', 'posts', '2021-10-23 10:25:53', '2021-10-23 10:25:53'),
(35, 'delete_posts', 'posts', '2021-10-23 10:25:53', '2021-10-23 10:25:53'),
(36, 'browse_pages', 'pages', '2021-10-23 10:25:56', '2021-10-23 10:25:56'),
(37, 'read_pages', 'pages', '2021-10-23 10:25:56', '2021-10-23 10:25:56'),
(38, 'edit_pages', 'pages', '2021-10-23 10:25:57', '2021-10-23 10:25:57'),
(39, 'add_pages', 'pages', '2021-10-23 10:25:57', '2021-10-23 10:25:57'),
(40, 'delete_pages', 'pages', '2021-10-23 10:25:57', '2021-10-23 10:25:57'),
(41, 'browse_items', 'items', '2021-10-23 11:51:52', '2021-10-23 11:51:52'),
(42, 'read_items', 'items', '2021-10-23 11:51:52', '2021-10-23 11:51:52'),
(43, 'edit_items', 'items', '2021-10-23 11:51:52', '2021-10-23 11:51:52'),
(44, 'add_items', 'items', '2021-10-23 11:51:52', '2021-10-23 11:51:52'),
(45, 'delete_items', 'items', '2021-10-23 11:51:52', '2021-10-23 11:51:52'),
(46, 'browse_sub_categories', 'sub_categories', '2021-10-30 08:43:59', '2021-10-30 08:43:59'),
(47, 'read_sub_categories', 'sub_categories', '2021-10-30 08:43:59', '2021-10-30 08:43:59'),
(48, 'edit_sub_categories', 'sub_categories', '2021-10-30 08:43:59', '2021-10-30 08:43:59'),
(49, 'add_sub_categories', 'sub_categories', '2021-10-30 08:43:59', '2021-10-30 08:43:59'),
(50, 'delete_sub_categories', 'sub_categories', '2021-10-30 08:43:59', '2021-10-30 08:43:59'),
(51, 'browse_cities', 'cities', '2021-10-30 09:04:42', '2021-10-30 09:04:42'),
(52, 'read_cities', 'cities', '2021-10-30 09:04:42', '2021-10-30 09:04:42'),
(53, 'edit_cities', 'cities', '2021-10-30 09:04:42', '2021-10-30 09:04:42'),
(54, 'add_cities', 'cities', '2021-10-30 09:04:42', '2021-10-30 09:04:42'),
(55, 'delete_cities', 'cities', '2021-10-30 09:04:42', '2021-10-30 09:04:42'),
(56, 'browse_areas', 'areas', '2021-10-30 09:05:24', '2021-10-30 09:05:24'),
(57, 'read_areas', 'areas', '2021-10-30 09:05:24', '2021-10-30 09:05:24'),
(58, 'edit_areas', 'areas', '2021-10-30 09:05:24', '2021-10-30 09:05:24'),
(59, 'add_areas', 'areas', '2021-10-30 09:05:24', '2021-10-30 09:05:24'),
(60, 'delete_areas', 'areas', '2021-10-30 09:05:24', '2021-10-30 09:05:24'),
(61, 'browse_branches', 'branches', '2021-10-30 09:34:22', '2021-10-30 09:34:22'),
(62, 'read_branches', 'branches', '2021-10-30 09:34:22', '2021-10-30 09:34:22'),
(63, 'edit_branches', 'branches', '2021-10-30 09:34:22', '2021-10-30 09:34:22'),
(64, 'add_branches', 'branches', '2021-10-30 09:34:22', '2021-10-30 09:34:22'),
(65, 'delete_branches', 'branches', '2021-10-30 09:34:22', '2021-10-30 09:34:22'),
(66, 'browse_customers', 'customers', '2021-10-30 09:59:43', '2021-10-30 09:59:43'),
(67, 'read_customers', 'customers', '2021-10-30 09:59:43', '2021-10-30 09:59:43'),
(68, 'edit_customers', 'customers', '2021-10-30 09:59:43', '2021-10-30 09:59:43'),
(69, 'add_customers', 'customers', '2021-10-30 09:59:43', '2021-10-30 09:59:43'),
(70, 'delete_customers', 'customers', '2021-10-30 09:59:43', '2021-10-30 09:59:43'),
(71, 'browse_orders', 'orders', '2021-11-09 10:14:53', '2021-11-09 10:14:53'),
(72, 'read_orders', 'orders', '2021-11-09 10:14:53', '2021-11-09 10:14:53'),
(73, 'edit_orders', 'orders', '2021-11-09 10:14:53', '2021-11-09 10:14:53'),
(74, 'add_orders', 'orders', '2021-11-09 10:14:53', '2021-11-09 10:14:53'),
(75, 'delete_orders', 'orders', '2021-11-09 10:14:53', '2021-11-09 10:14:53'),
(76, 'browse_order_details', 'order_details', '2021-11-09 10:20:43', '2021-11-09 10:20:43'),
(77, 'read_order_details', 'order_details', '2021-11-09 10:20:43', '2021-11-09 10:20:43'),
(78, 'edit_order_details', 'order_details', '2021-11-09 10:20:43', '2021-11-09 10:20:43'),
(79, 'add_order_details', 'order_details', '2021-11-09 10:20:43', '2021-11-09 10:20:43'),
(80, 'delete_order_details', 'order_details', '2021-11-09 10:20:43', '2021-11-09 10:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int UNSIGNED NOT NULL,
  `author_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-10-23 10:25:53', '2021-10-23 10:25:53'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-10-23 10:25:53', '2021-10-23 10:25:53'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-10-23 10:25:53', '2021-10-23 10:25:53'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-10-23 10:25:54', '2021-10-23 10:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2021-10-23 10:25:34', '2021-10-23 10:25:34'),
(2, 'user', 'Normal User', '2021-10-23 10:25:34', '2021-10-23 10:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Laatokosherofood', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Laatokosherofood.', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/October2021/mj05V6Ycppcpa6J4tnxD.jpeg', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'site.site_image', 'site image', 'settings/October2021/nhuiemkvp4w12qcJ8cQI.jpg', NULL, 'image', 6, 'Site'),
(12, 'site.default_image', 'default image', 'settings/November2021/gOCux4EoTgbGoU9zmox1.png', NULL, 'image', 7, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `image`, `order`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES
(1, 'test', 'sub-categories/October2021/cnuoTlCuaiMExwJo2gjC.jpeg', 1, 'test', '1', '2021-10-30 08:49:27', '2021-10-30 08:49:27', NULL, 8),
(2, 'Breakfast', '', 1, 'breakfast', '1', '2021-10-30 08:51:39', '2021-10-30 08:51:39', NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int UNSIGNED NOT NULL,
  `title` int DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2021-10-23 10:25:57', '2021-10-23 10:25:57'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2021-10-23 10:25:57', '2021-10-23 10:25:57'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2021-10-23 10:25:58', '2021-10-23 10:25:58'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2021-10-23 10:25:58', '2021-10-23 10:25:58'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2021-10-23 10:25:58', '2021-10-23 10:25:58'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2021-10-23 10:25:58', '2021-10-23 10:25:58'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2021-10-23 10:25:58', '2021-10-23 10:25:58'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2021-10-23 10:25:59', '2021-10-23 10:25:59'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2021-10-23 10:25:59', '2021-10-23 10:25:59'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2021-10-23 10:25:59', '2021-10-23 10:25:59'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2021-10-23 10:25:59', '2021-10-23 10:25:59'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2021-10-23 10:25:59', '2021-10-23 10:25:59'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2021-10-23 10:25:59', '2021-10-23 10:25:59'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2021-10-23 10:26:00', '2021-10-23 10:26:00'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2021-10-23 10:26:00', '2021-10-23 10:26:00'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2021-10-23 10:26:00', '2021-10-23 10:26:00'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2021-10-23 10:26:00', '2021-10-23 10:26:00'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2021-10-23 10:26:00', '2021-10-23 10:26:00'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2021-10-23 10:26:00', '2021-10-23 10:26:00'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2021-10-23 10:26:01', '2021-10-23 10:26:01'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2021-10-23 10:26:01', '2021-10-23 10:26:01'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2021-10-23 10:26:01', '2021-10-23 10:26:01'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2021-10-23 10:26:01', '2021-10-23 10:26:01'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2021-10-23 10:26:01', '2021-10-23 10:26:01'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2021-10-23 10:26:02', '2021-10-23 10:26:02'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2021-10-23 10:26:02', '2021-10-23 10:26:02'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2021-10-23 10:26:02', '2021-10-23 10:26:02'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2021-10-23 10:26:02', '2021-10-23 10:26:02'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2021-10-23 10:26:02', '2021-10-23 10:26:02'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2021-10-23 10:26:03', '2021-10-23 10:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/October2021/oSD0wKLbOksxzaMfe1bM.jpeg', NULL, '$2y$10$J/is.9wi2.WkOFDw94gRQea.nUif3hi1hOdBL08lwzSV7lg34fZny', 'znXitXOY5Gi04OFMCqIGcpU31g7KNYs57JbVtPWhLfojhYFV1z0LePKogSfu', '{\"locale\":\"en\"}', '2021-10-23 10:25:49', '2021-10-23 10:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

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
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

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
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_slug_unique` (`slug`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
