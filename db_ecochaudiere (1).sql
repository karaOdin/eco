-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 07:05 PM
-- Server version: 10.2.10-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecochaudiere`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id_course` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formation_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_coding` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `req_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id_course`, `course_name`, `price`, `duration`, `image`, `formation_id`, `created_at`, `updated_at`, `course_coding`, `description`, `req_level`) VALUES
(9, 'شهادة تقني', '72000', '24 شهر', NULL, 8, '2018-12-24 21:17:00', '2018-12-26 14:10:59', 'BT', NULL, 'الثانية ثانوي'),
(10, 'شهادة مهارة مهنية', '45000', '18 شهر', NULL, 8, '2018-12-26 13:29:00', '2018-12-26 14:17:27', 'CMP', 'شهادة مهارة مهنية', 'الرابعة متوسط'),
(11, 'شهادة مهارة مهنية - معابر', '12000', '06 أشهر', NULL, 10, '2018-12-26 13:30:00', '2018-12-26 14:15:07', 'ِCMP_P', 'شهادة مهارة مهنية - معابر', 'الرابعة متوسط'),
(12, 'شهادة الكفاءة مهنية', '30000', '12 شهر', NULL, 8, '2018-12-26 13:32:00', '2018-12-26 14:14:36', 'CAP', 'شهادة الكفاءة مهنية', 'الرابعة متوسط'),
(13, 'شهادة تقني - معابر', '12000', '06 أشهر', NULL, 10, '2018-12-26 13:37:00', '2018-12-26 14:13:39', 'BT_P', 'شهادة تقني - معابر', 'الثانية ثانوي أو الرابعة متوسط + خبرة مهنية'),
(14, 'تقني سامي', '90000', '30 شهر', NULL, 8, '2018-12-26 13:49:00', '2018-12-26 14:11:40', 'BTS', 'تقني سامي', 'الثالثة ثانوي'),
(15, 'تقني سامي - معابر', '30000', '12 شهر', NULL, 10, '2018-12-26 13:54:00', '2018-12-26 14:03:58', 'BTS_P', 'تقني سامي - معابر', 'الثالثة ثانوي + شهادة تقني او ثانية ثانوي  + شهادة تقني + خبرة مهنية'),
(17, 'شهادة تأهيل', '12000', '06 أشهر', NULL, 6, '2018-12-26 13:56:00', '2018-12-26 14:11:57', 'QUALIFIANTE', 'شهادة تأهيل', 'الرابعة متوسط'),
(19, 'شهادة تربص Auto CAD - 2D', '5000 دج', '24 ساعة', 'courses/January2019/VDaxCpLtCaL0HZcFQJ4o.jpg', 11, '2019-01-05 08:49:00', '2019-01-05 09:30:03', 'à la carte', 'شهادة تربص تثبت الاختصاص و مدة التكوين', 'جامعي'),
(20, 'شهادة تربص Auto CAD - 3D', '2500دج', '12 ساعة', 'courses/January2019/UQUNKMp7DhbjnjyhTE6B.jpg', 11, '2019-01-05 09:34:23', '2019-01-05 09:34:23', 'à la carte', NULL, 'جامعي'),
(21, 'شهادة تربص Robo- BAT', '5000 دج', '24 ساعة', 'courses/January2019/J6XasUQ6Lqf0JrFlxIbC.png', 11, '2019-01-05 09:54:00', '2019-01-05 12:05:35', 'alacarte', NULL, 'جامعي'),
(22, 'شهادة تربص sap 2000', '5000 دج', '24 ساعة', 'courses/January2019/qaLV9LAVhn9eRDvpVF9h.jpg', 11, '2019-01-05 12:06:41', '2019-01-05 12:06:41', 'sap', NULL, 'جامعي'),
(23, 'شهادة تربص Solidworks', '5000 دج', '24 ساعة', 'courses/January2019/o77AOLnhBtOWnYtkZLs2.jpg', 11, '2019-01-05 12:40:44', '2019-01-05 12:40:44', 'sol', NULL, 'جامعي'),
(24, 'شهادة تربص Topographie', '10000دج', '36 ساعة', 'courses/January2019/8hKqWp9SK8EhHUkCnmgE.jpg', 11, '2019-01-05 14:05:38', '2019-01-05 14:05:38', 'topo', NULL, 'جامعي'),
(25, 'شهادة تربص Covadis', '5000 دج', '24 ساعة', 'courses/January2019/fr4HEeOoUfxZ711xI8M7.jpg', 11, '2019-01-05 14:14:23', '2019-01-05 14:14:23', 'cova', NULL, NULL),
(26, 'شهادة تربص ARCHICAD', '5000 دج', '24 ساعة', 'courses/January2019/lul4DQbOb2doRr3tnyvG.jpg', 11, '2019-01-05 14:15:18', '2019-01-05 14:15:18', 'archi', NULL, NULL),
(27, 'شهادة تربص - صيانة', '5000 دج', '24 ساعة', 'courses/January2019/sRWPdWBkf5rZ8VK93ZiD.jpg', 11, '2019-01-05 14:22:28', '2019-01-05 14:22:28', 'maint', NULL, 'الرابعة متوسط');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(24, 4, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(25, 4, 'tech_table', 'text_area', 'Tech Table', 0, 1, 1, 1, 1, 1, '{}', 4),
(26, 4, 'component', 'text_area', 'Component', 0, 1, 1, 1, 1, 1, '{}', 5),
(27, 4, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 6),
(28, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(29, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(30, 4, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 9),
(31, 4, 'prd_code', 'text', 'Prd Code', 0, 1, 1, 1, 1, 1, '{}', 10),
(32, 4, 'iamge_det', 'image', 'Iamge Det', 0, 1, 1, 1, 1, 1, '{}', 11),
(33, 4, 'marson_name', 'text', 'Marson Name', 0, 1, 1, 1, 1, 1, '{}', 12);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(4, 'products', 'products', 'Product', 'Products', 'voyager-window-list', 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-03-18 15:54:11', '2019-04-16 19:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `formations`
--

CREATE TABLE `formations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `coding` char(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formations`
--

INSERT INTO `formations` (`id`, `name`, `created_at`, `updated_at`, `coding`) VALUES
(6, 'تكوين تأهيلي', '2018-12-10 19:45:56', '2018-12-10 19:45:56', 'tests'),
(8, 'تكوين اقامي', '2018-12-10 19:47:00', '2018-12-10 19:47:00', 'testid'),
(10, 'معابر', '2018-12-22 11:00:04', '2018-12-22 11:00:04', 'passerelle'),
(11, 'تكوين سريع', '2019-01-05 08:44:00', '2019-01-07 10:55:19', 'COURTE');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-03-18 10:49:27', '2019-03-18 10:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-03-18 10:49:27', '2019-03-18 10:49:27', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2019-03-18 10:49:27', '2019-03-18 10:49:27', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2019-03-18 10:49:27', '2019-03-18 10:49:27', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2019-03-18 10:49:27', '2019-03-18 10:49:27', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2019-03-18 10:49:27', '2019-03-18 10:49:27', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2019-03-18 10:49:27', '2019-03-18 10:49:27', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2019-03-18 10:49:27', '2019-03-18 10:49:27', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2019-03-18 10:49:27', '2019-03-18 10:49:27', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2019-03-18 10:49:27', '2019-03-18 10:49:27', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2019-03-18 10:49:27', '2019-03-18 10:49:27', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2019-03-18 10:49:27', '2019-03-18 10:49:27', 'voyager.hooks', NULL),
(12, 1, 'Products', '', '_self', 'voyager-window-list', '#000000', NULL, 15, '2019-03-18 15:54:11', '2019-03-18 18:45:29', 'voyager.products.index', 'null');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(2, 'browse_bread', NULL, '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(3, 'browse_database', NULL, '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(4, 'browse_media', NULL, '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(5, 'browse_compass', NULL, '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(6, 'browse_menus', 'menus', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(7, 'read_menus', 'menus', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(8, 'edit_menus', 'menus', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(9, 'add_menus', 'menus', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(10, 'delete_menus', 'menus', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(11, 'browse_roles', 'roles', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(12, 'read_roles', 'roles', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(13, 'edit_roles', 'roles', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(14, 'add_roles', 'roles', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(15, 'delete_roles', 'roles', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(16, 'browse_users', 'users', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(17, 'read_users', 'users', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(18, 'edit_users', 'users', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(19, 'add_users', 'users', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(20, 'delete_users', 'users', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(21, 'browse_settings', 'settings', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(22, 'read_settings', 'settings', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(23, 'edit_settings', 'settings', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(24, 'add_settings', 'settings', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(25, 'delete_settings', 'settings', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(26, 'browse_hooks', NULL, '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(27, 'browse_products', 'products', '2019-03-18 15:54:11', '2019-03-18 15:54:11'),
(28, 'read_products', 'products', '2019-03-18 15:54:11', '2019-03-18 15:54:11'),
(29, 'edit_products', 'products', '2019-03-18 15:54:11', '2019-03-18 15:54:11'),
(30, 'add_products', 'products', '2019-03-18 15:54:11', '2019-03-18 15:54:11'),
(31, 'delete_products', 'products', '2019-03-18 15:54:11', '2019-03-18 15:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
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
(31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tech_table` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `prd_code` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iamge_det` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marson_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `tech_table`, `component`, `image`, `created_at`, `updated_at`, `deleted_at`, `prd_code`, `iamge_det`, `marson_name`) VALUES
(2, 'Cuves à Carburant Enterées', '<p>Large gamme de cuves des stockage enter&eacute;es fabriqu&eacute;es en confomit&eacute; avec les &eacute;xigences des normes internationales.</p>', '<table class=\"table\">\r\n					<caption>List of users</caption>\r\n					<thead class=\"thead-dark\">\r\n						<tr>\r\n							<th>Cap-nominale en L</th>\r\n							<th>Diametre en mm</th>\r\n							<th>Long-virole en mm</th>\r\n							<th>Long-totale en mm</th>\r\n							<th>Epaisseur</th>\r\n							<th>Poids à vide en kg</th>\r\n							\r\n						</tr>\r\n					</thead>\r\n\r\n					<tbody>\r\n						<tr>\r\n							<td>3000</td>\r\n							<td>1250</td>\r\n                                                        <td>2550</td>\r\n							<td>2830</td>\r\n							<td>4</td>\r\n							<td>476</td>\r\n						</tr>\r\n						<tr>\r\n							<td>5000</td>\r\n							<td>1500</td>\r\n							<td>2650</td>\r\n							<td>3460</td>\r\n							<td>5</td>\r\n							<td>816</td>\r\n						</tr>\r\n						<tr>\r\n							<td>10000</td>\r\n							<td>1900</td>\r\n							<td>3250</td>\r\n							<td>4060</td>\r\n							<td>6</td>\r\n							<td>1400</td>\r\n						</tr>\r\n						<tr>\r\n							<td>15000</td>\r\n							<td>1900</td>\r\n							<td>5100</td>\r\n							<td>5910</td>\r\n							<td>6</td>\r\n							<td>1937</td>\r\n						</tr>\r\n						<tr>\r\n							<td>20000</td>\r\n							<td>2500</td>\r\n							<td>3800</td>\r\n							<td>4882</td>\r\n							<td>6</td>\r\n							<td>2160</td>\r\n						</tr>\r\n						<tr>\r\n							<td>30000</td>\r\n							<td>2500</td>\r\n							<td>5800</td>\r\n							<td>6840</td>\r\n							<td>6</td>\r\n							<td>2940</td>\r\n						</tr>\r\n						<tr>\r\n							<td>50000</td>\r\n							<td>2700</td>\r\n							<td>8500</td>\r\n							<td>9620</td>\r\n							<td>6</td>\r\n							<td>4335</td>\r\n						</tr>\r\n						<tr>\r\n							<td>60000</td>\r\n							<td>2700</td>\r\n							<td>10000</td>\r\n							<td>11120</td>\r\n							<td>6</td>\r\n							<td>5130</td>\r\n						</tr>\r\n						<tr>\r\n							<td>100000</td>\r\n							<td>3000</td>\r\n							<td>14000</td>\r\n							<td>15256</td>\r\n							<td>6</td>\r\n							<td>7865</td>\r\n						</tr>\r\n						\r\n					</tbody>\r\n					\r\n				</table>', NULL, 'products\\April2019\\vERSouZBLVTUY6OdI2J0.jpg', '2019-03-31 11:50:00', '2019-04-15 22:04:44', NULL, 'cuves', NULL, 'Cuves à Carburant'),
(3, 'Chaudières à vapeur mixte gaz/mazout', '<p>Nos chaudi&egrave;res &agrave; vapeur fonctionnent avec les diff&eacute;rentes &eacute;nergies : Gaz, mazout.</p>\r\n<p>Possibilit&eacute; de produire de la vapeur propre. alimentaire ou st&eacute;rile.</p>', '<table class=\"table\">\r\n					<caption>List of users</caption>\r\n					<thead class=\"thead-dark\">\r\n						<tr>\r\n							<td>Modele</td>\r\n							<td>CH01</td>\r\n							<td>CH02</td>\r\n							<td>CH03</td>\r\n							<td>CH04</td>\r\n							<td>CH05</td>\r\n							<td>CH06</td>\r\n							<td>CH07</td>\r\n							<td>CH08</td>\r\n							<td>CH09</td>\r\n						</tr>\r\n                    </thead>\r\n                    <tbody>\r\n						<tr>\r\n							<td>Puissance kg/h</td>\r\n							<td>250</td>\r\n							<td>500</td>\r\n							<td>1000</td>\r\n							<td>1500</td>\r\n							<td>2000</td>\r\n							<td>2500</td>\r\n							<td>3000</td>\r\n							<td>3500</td>\r\n							<td>4000</td>\r\n						</tr>\r\n						<tr>\r\n							<td>A mm</td>\r\n							<td>3100</td>\r\n							<td>3450</td>\r\n							<td>4050</td>\r\n							<td>4600</td>\r\n							<td>4650</td>\r\n							<td>5000</td>\r\n							<td>5250</td>\r\n							<td>5800</td>\r\n							<td>5850</td>\r\n						</tr>\r\n						<tr>\r\n							<td>B mm</td>\r\n							<td>1800</td>\r\n							<td>2000</td>\r\n							<td>2200</td>\r\n							<td>2500</td>\r\n							<td>2500</td>\r\n							<td>2500</td>\r\n							<td>2500</td>\r\n							<td>2500</td>\r\n							<td>2500</td>\r\n						</tr>\r\n						<tr>\r\n							<td>C mm</td>\r\n							<td>1600</td>\r\n							<td>2100</td>\r\n							<td>2200</td>\r\n							<td>2200</td>\r\n							<td>2500</td>\r\n							<td>2700</td>\r\n							<td>2700</td>\r\n							<td>2866</td>\r\n							<td>2900</td>\r\n						</tr>\r\n						<tr>\r\n							<td>D en mm (sans bruleur)</td>\r\n							<td>2500</td>\r\n							<td>28500</td>\r\n							<td>3200</td>\r\n							<td>3700</td>\r\n							<td>3800</td>\r\n							<td>4150</td>\r\n							<td>4400</td>\r\n							<td>4950</td>\r\n							<td>5000</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Vanne sortie vapeur</td>\r\n							<td>DN25</td>\r\n							<td>DN32</td>\r\n							<td>DN80</td>\r\n							<td>DN100</td>\r\n							<td>DN100</td>\r\n							<td>DN80</td>\r\n							<td>DN100</td>\r\n							<td>DN100</td>\r\n							<td>DN100</td>\r\n						</tr>\r\n						<tr>\r\n						    <td>Soupape de sécurtie</td>\r\n							<td>DN32</td>\r\n							<td>DN40</td>\r\n							<td>DN50</td>\r\n							<td>DN50</td>\r\n							<td>DN50</td>\r\n							<td>DN50</td>\r\n							<td>DN50</td>\r\n							<td>DN50</td>\r\n							<td>DN50</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Timbre en bar</td>\r\n							<td>10</td>\r\n							<td>10</td>\r\n							<td>12</td>\r\n							<td>12</td>\r\n							<td>12</td>\r\n							<td>12</td>\r\n							<td>12</td>\r\n							<td>12</td>\r\n							<td>12</td>\r\n							\r\n						</tr>\r\n						\r\n						<tr>\r\n							<td>Cheminée mm</td>\r\n							<td>220</td>\r\n							<td>280</td>\r\n							<td>320</td>\r\n							<td>400</td>\r\n							<td>450</td>\r\n							<td>500</td>\r\n							<td>550</td>\r\n							<td>600</td>\r\n							<td>650</td>\r\n						</tr>\r\n					\r\n\r\n					\r\n						\r\n					</tbody>\r\n					\r\n				</table>', '<div class=\"col-sm-3 componantLi\">\r\n            		<li>Chaudiere</li>\r\n				    <li>Bruleur</li>\r\n				    <li>Armoire de commande</li>\r\n				    <li>Pompe d\'alimentation en eau</li>\r\n				    <li>Contrôle de niveau a glace</li>\r\n				    <li>Vanne d\'isolement</li>\r\n				    <li>Vanne d\'isolement pour pompe</li>\r\n				    <li>Clapet anti retour.</li>\r\n				    <li>Départ vapeur</li>\r\n				     <li>Tampons pour sonde de contrôle de niveau</li>\r\n				    \r\n				</div>\r\n				<div class=\"col-sm-3 componantLi\">\r\n					<li>Trou d\'homme</li>\r\n					<li>Soupape de sécurité</li>\r\n				    <li>Anneau de leavage.</li>\r\n				    <li>Socle</li>\r\n				    <li>Préssostat de sécurité</li>\r\n				    <li>Préssostat de réglage</li>\r\n				    <li>Manometre</li>\r\n				    <li>Echelle d\'escallade</li>\r\n				    <li>Vanne de vidange</li>\r\n				    <li>Buse de fumée</li>\r\n				   \r\n				</div>', 'products\\April2019\\bo0x6ULwe32KTcTaGGTP.jpg', '2019-03-31 11:59:00', '2019-04-16 19:58:58', NULL, 'vapeur', 'products\\April2019\\K2Lnlc96nijZR4AHGi2t.jpg', 'Chaudières à vapeur'),
(4, 'Génerateur d\'eau chaude mixte Gaz/Mazout', '<p>Le g&eacute;n&eacute;rateur d\'eau chaude permet une prodution instantan&eacute;e d\'eau chaude pour couvrir des besoins contenus .</p>\r\n<p>sa fabrication est faite en acier rev&ecirc;tu.</p>\r\n<p>tout g&eacute;n&eacute;rateur peut etre install&eacute; &agrave; l\'interieur ou &agrave; l\'exterieur de la chaufferie&nbsp;</p>', '<table class=\"table\">\r\n					<caption>List of users</caption>\r\n					<thead class=\"thead-dark\">\r\n						<tr>\r\n							<th>Modele</th>\r\n							<th>GO1</th>\r\n							<th>GO2</th>\r\n							<th>GO3</th>\r\n							<th>GO4</th>\r\n							<th>GO5</th>\r\n							\r\n						</tr>\r\n					</thead>\r\n\r\n					<tbody>\r\n						<tr>\r\n							<td>Puissance L/H</td>\r\n							<td>3500</td>\r\n							<td>4500</td>\r\n							<td>5500</td>\r\n							<td>6500</td>\r\n							<td>8500</td>\r\n						</tr>\r\n						<tr>\r\n							<td>A mm</td>\r\n							<td>1800</td>\r\n							<td>2050</td>\r\n							<td>2050</td>\r\n							<td>2100</td>\r\n							<td>2300</td>\r\n						</tr>\r\n						<tr>\r\n							<td>B mm</td>\r\n							<td>1160</td>\r\n							<td>1410</td>\r\n							<td>1410</td>\r\n							<td>1460</td>\r\n							<td>1660</td>\r\n						</tr>\r\n						<tr>\r\n							<td>C mm</td>\r\n							<td>2450</td>\r\n							<td>2450</td>\r\n							<td>2750</td>\r\n							<td>2950</td>\r\n							<td>2750</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Entrée eau froide</td>\r\n							<td>50</td>\r\n							<td>50</td>\r\n							<td>65</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Sortée eau chaude</td>\r\n							<td>50</td>\r\n							<td>50</td>\r\n							<td>65</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Recyclage</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>40</td>\r\n							<td>50</td>\r\n							<td>50</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Soupape de sécurité</td>\r\n							<td>20</td>\r\n							<td>20</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>32</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Vidange</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Pression de services bars</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Tempurateur de service C°</td>\r\n							<td>70</td>\r\n							<td>70</td>\r\n							<td>70</td>\r\n							<td>70</td>\r\n							<td>70</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Cheminée mm</td>\r\n							<td>220</td>\r\n							<td>220</td>\r\n							<td>260</td>\r\n							<td>280</td>\r\n							<td>300</td>\r\n						</tr>\r\n					</tbody>\r\n					\r\n				</table>', '<div class=\"col-sm-3 componantLi\">\r\n            		<li>Thermometre</li>\r\n				    <li>Tableau de commande</li>\r\n				    <li>Sortie eau chaude</li>\r\n				    <li>Recyclage</li>\r\n				    <li>Anneau de levage</li>\r\n				    <li>Entrée eau froide</li>\r\n				    \r\n				    \r\n				</div>\r\n				<div class=\"col-sm-3 componantLi\">\r\n					<li>Soupape de sécurité</li>\r\n				    <li>Buse de fumée</li>\r\n				    <li>Viseue de flamme</li>\r\n				     <li>Vidange</li>\r\n				     <li>Sortie de nettoyage</li>\r\n				     <li>Goutière</li>\r\n				</div>', 'products\\April2019\\mzrXdBLTH7yiAHViPbGw.jpg', '2019-04-01 03:29:00', '2019-04-17 03:42:32', NULL, 'generateur', 'products\\April2019\\BZrGvLJJYcH2sRwv7vKw.png', 'Génerateur d\'eau chaude'),
(5, 'Chaudière d\'eau chaude mixte Gaz/Mazout', '<p>Chaudi&eacute;re en acier &agrave; rendement &eacute;lev&eacute; robuste et robuste et silencieuse aux syst&eacute;mes de flamme</p>\r\n<p>guid&eacute;e dont la chambre de combustion est cylindrique .</p>\r\n<p>Ce syst&egrave;me am&egrave;ne une circulation id&eacute;ale de l\'eau. la chaleur est rapidement dissip&eacute;e dans toutes les parties de la chaudi&egrave;re .</p>', '<table class=\"table\">\r\n					<caption>List of users</caption>\r\n					<thead class=\"thead-dark\">\r\n						<tr>\r\n							<th>Modele</th>\r\n							<th>CH01</th>\r\n							<th>CH02</th>\r\n							<th>CH03</th>\r\n							<th>CH04</th>\r\n							<th>CH05</th>\r\n							<th>CH06</th>\r\n							<th>CH07</th>\r\n							<th>CH08</th>\r\n							<th>CH09</th>\r\n							<th>CH010</th>\r\n							<th>CH011</th>\r\n							<th>CH012</th>\r\n							<th>CH013</th>\r\n							<th>CH014</th>\r\n							<th>CH015</th>\r\n							<th>CH016</th>\r\n							<th>CH017</th>							\r\n						</tr>\r\n					</thead>\r\n\r\n					<tbody>\r\n						<tr>\r\n							<td>Pussace kcal/hx1000</td>\r\n							<td>80</td>\r\n							<td>100</td>\r\n							<td>150</td>\r\n							<td>200</td>\r\n							<td>250</td>\r\n							<td>300</td>\r\n							<td>350</td>\r\n							<td>400</td>\r\n							<td>450</td>\r\n							<td>500</td>\r\n							<td>550</td>\r\n							<td>600</td>\r\n							<td>700</td>\r\n							<td>800</td>\r\n							<td>900</td>\r\n							<td>1000</td>\r\n							<td>1600</td>\r\n						</tr>\r\n						<tr>\r\n							<td>A mm</td>\r\n							<td>1070</td>\r\n							<td>1200</td>\r\n							<td>1200</td>\r\n							<td>1200</td>\r\n							<td>1200</td>\r\n							<td>1350</td>\r\n							<td>1350</td>\r\n							<td>1350</td>\r\n							<td>1350</td>\r\n							<td>1350</td>\r\n							<td>1350</td>\r\n							<td>1450</td>\r\n							<td>1450</td>\r\n							<td>1450</td>\r\n							<td>1450</td>\r\n							<td>1550</td>\r\n							<td>1650</td>\r\n						</tr>\r\n						<tr>\r\n							<td>B mm</td>\r\n							<td>720</td>\r\n							<td>820</td>\r\n							<td>820</td>\r\n							<td>820</td>\r\n							<td>820</td>\r\n							<td>1000</td>\r\n							<td>1000</td>\r\n							<td>1000</td>\r\n							<td>1000</td>\r\n							<td>1000</td>\r\n							<td>1000</td>\r\n							<td>1100</td>\r\n							<td>1100</td>\r\n							<td>1100</td>\r\n							<td>1100</td>\r\n							<td>1200</td>\r\n							<td>1400</td>\r\n							\r\n						</tr>\r\n						<tr>\r\n							<td>C mm</td>\r\n							<td>1050</td>\r\n							<td>1050</td>\r\n							<td>1350</td>\r\n							<td>1600</td>\r\n							<td>1900</td>\r\n							<td>1600</td>\r\n							<td>1600</td>\r\n							<td>1700</td>\r\n							<td>1850</td>\r\n							<td>2000</td>\r\n							<td>2150</td>\r\n							<td>2200</td>\r\n							<td>2350</td>\r\n							<td>2500</td>\r\n							<td>2650</td>\r\n							<td>2500</td>\r\n							<td>3000</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Départ</td>\r\n							<td>50</td>\r\n							<td>65</td>\r\n							<td>65</td>\r\n							<td>65</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>125</td>\r\n							<td>175</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Retour</td>\r\n							<td>50</td>\r\n							<td>65</td>\r\n							<td>65</td>\r\n							<td>65</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>100</td>\r\n							<td>125</td>\r\n							<td>175</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Soupape de sécurité</td>\r\n							<td>20</td>\r\n							<td>20</td>\r\n							<td>20</td>\r\n							<td>20</td>\r\n							<td>20</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>40</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Vidange</td>\r\n							<td>20</td>\r\n							<td>20</td>\r\n							<td>20</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>25</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>32</td>\r\n							<td>40</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Pression d\'épreuve bars</td>\r\n							<td>8</td>\r\n							<td>8</td>\r\n							<td>8</td>\r\n							<td>8</td>\r\n							<td>8</td>\r\n							<td>10</td>\r\n							<td>10</td>\r\n							<td>10</td>\r\n							<td>10</td>\r\n							<td>10</td>\r\n							<td>10</td>\r\n							<td>12</td>\r\n							<td>12</td>\r\n							<td>12</td>\r\n							<td>12</td>\r\n							<td>14</td>\r\n							<td>16</td>\r\n						</tr>\r\n						<tr>\r\n							<td>Pression de service bars</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							<td>3</td>\r\n							\r\n						</tr>\r\n						<tr>\r\n							<td>Tempurateur de service bars C°</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							<td>80</td>\r\n							\r\n						</tr>\r\n						<tr>\r\n							<td>Cheminée mm</td>\r\n							<td>180</td>\r\n							<td>220</td>\r\n							<td>220</td>\r\n							<td>220</td>\r\n							<td>220</td>\r\n							<td>220</td>\r\n							<td>220</td>\r\n							<td>300</td>\r\n							<td>300</td>\r\n							<td>300</td>\r\n							<td>300</td>\r\n							<td>340</td>\r\n							<td>340</td>\r\n							<td>340</td>\r\n							<td>340</td>\r\n							<td>360</td>\r\n							<td>400</td>\r\n						</tr>\r\n					</tbody>\r\n					\r\n				</table>', '<div class=\"col-sm-3 componantLi\">\r\n            		<li>Départ d\'eau chaude</li>\r\n				    <li>retour d\'eau chaude</li>\r\n				    <li>Sortie eau chaude</li>\r\n				    <li>Soupape</li>\r\n				    \r\n				    \r\n				    \r\n				</div>\r\n				<div class=\"col-sm-3 componantLi\">\r\n					<li>Vidange	</li>\r\n				    <li>Cheminée</li>\r\n               	    <li>porte avant</li>\r\n				    <li>porte arierre</li>\r\n				 </div>', 'products\\April2019\\VV4XbThTuecHxnjfs2ZL.jpg', '2019-04-02 22:40:00', '2019-04-17 03:48:28', NULL, 'chaudiere', 'products\\April2019\\CIVd8QHMEpkRLwpv7k9O.png', 'Chaudière d\'eau chaude');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-03-18 10:49:27', '2019-03-18 10:49:27'),
(2, 'user', 'Normal User', '2019-03-18 10:49:27', '2019-03-18 10:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Ecochaudiere', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'DevPanel', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to DevPanel. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\March2019\\Q0sjdCUZunK18uIyjzh9.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `studens`
--

CREATE TABLE `studens` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `phoneN` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id_tour` int(10) UNSIGNED NOT NULL,
  `tour_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cour_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tour_image` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_duration` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_req_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id_tour`, `tour_name`, `tour_description`, `cour_id`, `created_at`, `updated_at`, `tour_image`, `tour_duration`, `tour_req_level`) VALUES
(2, 'المحاسبة', NULL, 9, '2018-12-26 13:57:00', '2018-12-30 09:15:49', 'tours/December2018/gQyhbPcMUq6Z2bZtAtbN.jpg', '24 شهرا', 'الثانية ثانوي'),
(3, 'مستغل المعلوماتية', NULL, 9, '2018-12-26 14:19:00', '2018-12-30 09:14:10', 'tours/December2018/yufw6V79T3IdJ6EiXc3G.jpg', NULL, 'الثانية ثانوي'),
(4, 'عامل في الميكرومعلوماتية', NULL, 10, '2018-12-26 14:20:00', '2018-12-30 09:13:56', 'tours/December2018/fUIRQfBRP13v0cK74gI0.jpg', NULL, 'الرابعة متوسط'),
(5, 'سكريتاريا', NULL, 10, '2018-12-26 14:23:00', '2018-12-30 09:13:39', 'tours/December2018/FoSHJtd7svZWLHlp8mI4.JPG', NULL, 'الرابعة متوسط'),
(6, 'عون حفظ البيانات', NULL, 12, '2018-12-26 14:24:00', '2018-12-30 09:13:21', 'tours/December2018/1WoroqBLPj9bGga9XPOg.jpg', NULL, 'الرابعة متوسط'),
(7, 'المحاسبة و التسيير - معابر', NULL, 15, '2018-12-26 14:26:00', '2018-12-30 09:13:01', 'tours/December2018/OErM9pIGIp2W4iaVE9yU.jpg', NULL, 'الثالثة ثانوي + شهادة تقني في المحاسبة أو الثانية ثانوي + شهادة تقني في المحاسبة + خبر مهنية عامين'),
(8, 'شبكات و أنظمة التشغيل', NULL, 15, '2018-12-26 14:29:00', '2018-12-30 09:57:04', 'tours/December2018/j0sbZ6WfnaDjC0FNVROQ.jpg', NULL, 'الثالثة ثانوي + شهادة تقني مستغل المعلوماتية أو الثانية ثانوي + شهادة تقني مستغل المعلوماتية + خبر مهنية عامين'),
(9, 'مستغل المعلوماتية - معابر', NULL, 13, '2018-12-26 14:31:00', '2018-12-30 09:12:31', 'tours/December2018/32W6ZJD2J4vmgV35Za5u.jpg', NULL, 'الثانية ثانوي + عامل في الميكرومعلوماتية أو الرابعة متوسط + شهادة عامل في الميكرومعلوماتية + خبرة لمدة عامين أو عامل تحصيل + خبرة لمدة أربع سنوات'),
(10, 'المحاسبة - معابر', NULL, 13, '2018-12-26 14:33:00', '2018-12-30 09:12:18', 'tours/December2018/MSojImIgl2oErwt96imY.jpg', NULL, 'الثانية ثانوي + شهادة مهارة مهنية في المحاسبة أو الرابعة متوسط + شهادة المهارة المهنية في المحاسبة'),
(11, 'سكريتاريا - معابر', NULL, 11, '2018-12-26 14:34:00', '2018-12-30 09:11:45', 'tours/December2018/ZWg2ZjsinYjuR3F72HLx.JPG', NULL, 'الرابعة متوسط+ شهادة عون حفظ البيانات'),
(12, 'مدخل للإعلام لآلي', NULL, 17, '2018-12-26 14:34:00', '2018-12-30 09:59:09', 'tours/December2018/V3Elu2DKfJdWM9q3N1rs.jpg', NULL, 'الرابعة متوسط'),
(13, 'Auto-CAD - 2D', 'مدة التكوين 24 ساعة - السعر 5000 دج', 19, '2019-01-05 08:58:00', '2019-01-05 09:31:31', 'tours/January2019/4fO4V0rHMB1AIu78a6Cx.jpg', NULL, 'جامعي'),
(14, 'Auto-CAD - 3D', NULL, 20, '2019-01-05 09:35:05', '2019-01-05 09:35:05', 'tours/January2019/1O5EeQmoyzIBKNmWpEAN.jpg', NULL, 'جامعي'),
(15, 'Robo - BAT', NULL, 21, '2019-01-05 09:55:00', '2019-01-05 12:29:08', 'tours/January2019/aDOFT8yE2jnIksKToGGD.png', NULL, 'جامعي'),
(16, 'SAP2000', NULL, 22, '2019-01-05 12:07:52', '2019-01-05 12:07:52', 'tours/January2019/J4yJ8uLmKguZ1MxCYFIa.jpg', NULL, 'جامعي'),
(17, 'SolidWorks', 'برنامج التصميمات - هندسة ميكانيكية', 23, '2019-01-05 12:42:30', '2019-01-05 12:42:30', 'tours/January2019/8marN3eTum17PSKksgWm.jpg', NULL, 'جامعي'),
(18, 'Topographie', NULL, 24, '2019-01-05 14:06:29', '2019-01-05 14:06:29', 'tours/January2019/MGJSfToUF33VoRQHfVaD.jpg', NULL, 'جامعي'),
(19, 'ARCHICAD', NULL, 26, '2019-01-05 14:16:07', '2019-01-05 14:16:07', 'tours/January2019/psPVYz0i5xEstrFXKR94.jpg', NULL, 'جامعي'),
(20, 'Covadis', NULL, 25, '2019-01-05 14:17:09', '2019-01-05 14:17:09', 'tours/January2019/LhKCaaS8sTOMCKlQET3J.jpg', NULL, 'جامعي'),
(21, 'صيانة -Maintenance', NULL, 27, '2019-01-05 14:23:00', '2019-01-06 09:27:16', 'tours/January2019/mnU21ZLA4J7quGr1uvx5.jpg', NULL, '04 متوسط');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'courses', 'name', 3, 'ar', 'محاسبة', '2018-11-05 15:40:41', '2018-11-05 15:40:41'),
(2, 'formations', 'name', 3, 'ar', 'تكوين تأهيلي', '2018-11-05 15:44:49', '2018-11-05 15:44:49'),
(3, 'formations', 'name', 2, 'ar', 'Passables', '2018-11-05 15:48:09', '2018-11-11 14:15:57'),
(4, 'formations', 'name', 1, 'ar', 'تكوين اقامي', '2018-11-05 15:48:47', '2018-11-05 15:48:47'),
(5, 'data_types', 'display_name_singular', 4, 'ar', 'Formation', '2018-11-05 15:52:51', '2018-11-05 15:52:51'),
(6, 'data_types', 'display_name_plural', 4, 'ar', 'Formations', '2018-11-05 15:52:51', '2018-11-05 15:52:51'),
(7, 'data_types', 'display_name_singular', 6, 'ar', 'الدورة', '2018-11-06 08:36:48', '2018-11-06 08:36:48'),
(8, 'data_types', 'display_name_plural', 6, 'ar', 'الدورات', '2018-11-06 08:36:48', '2018-11-06 08:36:48'),
(9, 'data_types', 'display_name_singular', 7, 'ar', 'Student', '2018-11-06 08:41:46', '2018-11-06 08:41:46'),
(10, 'data_types', 'display_name_plural', 7, 'ar', 'Students', '2018-11-06 08:41:46', '2018-11-06 08:41:46'),
(11, 'menu_items', 'title', 15, 'ar', 'الاساسية', '2018-11-06 13:46:51', '2018-11-06 13:47:18'),
(12, 'courses', 'name', 2, 'ar', 'شهادة المهارة المهنية', '2018-11-11 09:54:02', '2018-11-11 09:54:02'),
(13, 'courses', 'duration', 2, 'ar', 'option2', '2018-11-11 09:54:02', '2018-11-11 09:54:02'),
(14, 'courses', 'name', 1, 'ar', 'شهادة تقني', '2018-11-11 09:54:28', '2018-11-11 09:54:28'),
(15, 'courses', 'duration', 1, 'ar', 'option3', '2018-11-11 09:54:28', '2018-11-11 09:54:28'),
(16, 'courses', 'duration', 3, 'ar', 'option1', '2018-11-11 09:54:42', '2018-11-11 09:54:42'),
(17, 'courses', 'course_name', 3, 'ar', 'Comptabilité', '2018-11-11 14:17:10', '2018-11-11 14:17:10'),
(18, 'courses', 'course_name', 1, 'ar', 'شهادة تقني', '2018-11-12 09:12:02', '2018-11-12 09:12:02'),
(19, 'courses', 'course_name', 2, 'ar', 'شهادة المهارة المهنية', '2018-11-13 11:46:12', '2018-11-13 11:46:12'),
(20, 'data_types', 'display_name_singular', 8, 'ar', 'التخصص', '2018-11-15 09:27:50', '2018-12-24 13:35:13'),
(21, 'data_types', 'display_name_plural', 8, 'ar', 'التخصصات', '2018-11-15 09:27:50', '2018-12-24 13:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'KaraOdin', 'nihatmahdi@gmail.com', 'users\\March2019\\efylvrirVh03nrBj503r.png', '$2y$10$sqwbw9eJyzP5.LJHjQukN.p5Zvknjb871twvRm99fmXSS9FHJd3Dm', 'cuKq5PIG5H4Pt7uA48oT87rRQk6bw36kgtJj4A3PPQRJybJKWzczG7lmBJnB', '{\"locale\":\"en\"}', '2019-03-18 10:50:10', '2019-03-18 18:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `courses_course_coding_index` (`course_coding`);

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
-- Indexes for table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
