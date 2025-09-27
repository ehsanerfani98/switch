-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2025 at 07:31 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `switch`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('string','number','boolean','select','range') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'string',
  `is_multiple` tinyint(1) NOT NULL DEFAULT '0',
  `show_in_card` tinyint NOT NULL DEFAULT '0',
  `format_thousands` tinyint NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` smallint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `slug`, `label`, `icon`, `type`, `is_multiple`, `show_in_card`, `format_thousands`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'color', 'color', 'رنگ', 'fas fa-palette', 'select', 0, 1, 0, 1, 1, '2025-09-15 09:14:27', '2025-09-25 17:40:07'),
(2, 'year', 'year', 'سال تولید', 'fas fa-calendar', 'select', 0, 1, 0, 1, 2, '2025-09-15 09:14:47', '2025-09-25 18:06:07'),
(3, 'price', 'price', 'قیمت', 'fas fa-money-bill', 'range', 0, 0, 1, 1, 4, '2025-09-15 10:49:25', '2025-09-26 12:38:07'),
(4, 'insurance', 'insurance', 'بیمه', 'fas fa-shield-alt', 'boolean', 0, 1, 1, 1, 3, '2025-09-16 07:52:47', '2025-09-25 18:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint UNSIGNED NOT NULL,
  `attribute_id` bigint UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `attribute_id`, `value`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'سفید', 'white', '2025-09-15 09:15:11', '2025-09-15 09:15:11'),
(2, 1, 'مشکی', 'black', '2025-09-15 09:15:11', '2025-09-15 09:15:11'),
(3, 2, '1394', '1394', '2025-09-15 09:15:57', '2025-09-15 09:15:57'),
(4, 2, '1404', '1404', '2025-09-15 09:15:57', '2025-09-15 09:15:57'),
(5, 1, 'خاکستری', 'gray', '2025-09-17 07:47:53', '2025-09-17 07:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `link`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'آموزش بازاریابی', 'uploads/banners/1751881103_4.png', 'https://webcomco.com/', 0, 1, '2025-06-03 06:34:04', '2025-06-03 06:34:04'),
(2, 'دوره تبلیغ نویسی', 'uploads/banners/1751881109_3.png', 'http://127.0.0.1:8000/user/edit/profile', 0, 1, '2025-06-03 06:39:20', '2025-06-03 06:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` json DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('inreview','assessed','sold') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inreview',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `thumbnail`, `gallery`, `title`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(16, '/media-upload/YJ08ZCC54Vgi4ihEwVyRLEwIY6K0plpvdkVUcqCc.webp', '[\"/media-upload/YJ08ZCC54Vgi4ihEwVyRLEwIY6K0plpvdkVUcqCc.webp\", \"/media-upload/tnuRlLBQva4qqgfKg2CSiqruq2mBBsDK147CZ40U.webp\", \"/media-upload/qA1kk8oEJb1CuQaUguw2yzbjl2MPrh4kKIow4tfb.webp\", \"/media-upload/Vgn05y2GMtFYRu0FW1U9UrOKeSMAVWBQCcMW2aE5.webp\", \"/media-upload/ffGaGLGktO8Spb7OGRPaxolsxzFsw2KcmPKvN4zW.webp\"]', 'بنز کلاس E 2011', 'بنز-کلاس-E-2011', '<p>بنز کلاس E 350 مدل 2011 یک سدان لوکس و قدرتمند است که با موتور V6 با حجم 3.5 لیتر ارائه می&zwnj;شود. این خودرو با طراحی کلاسیک و مدرن، امکانات رفاهی و ایمنی بالایی را در اختیار سرنشینان قرار می&zwnj;دهد. مدل فول این خودرو شامل تمامی آپشن&zwnj;های روز مانند سیستم صوتی حرفه&zwnj;ای، سیستم ناوبری، دوربین&zwnj;های 360 درجه، سیستم تهویه مطبوع چهار منطقه&zwnj;ای، صندلی&zwnj;های چرمی با قابلیت تنظیم برقی و گرمکن و سردکن صندلی&zwnj;ها می&zwnj;باشد.</p>\r\n\r\n<p>این خودرو با کارکرد 158,669 کیلومتر در شرایط بسیار خوبی قرار دارد و تمامی سرویس&zwnj;های دوره&zwnj;ای آن به موقع انجام شده است. رنگ داخلی مشکی با چرم مرغوب و نمای خارجی سفید براق، ظاهری شیک و لاکچری به این بخش داده است. سیستم تعلیق و فرمان این خودرو عملکرد بسیار نرم و دقیقی دارد و مصرف سوخت آن برای یک خودروی لوکس در این کلاس مناسب است.</p>', 'inreview', '2025-09-25 16:13:48', '2025-09-26 13:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `car_attribute_values`
--

CREATE TABLE `car_attribute_values` (
  `id` bigint UNSIGNED NOT NULL,
  `car_id` bigint UNSIGNED NOT NULL,
  `attribute_id` bigint UNSIGNED NOT NULL,
  `attribute_value_id` bigint UNSIGNED DEFAULT NULL,
  `value_string` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_number` bigint UNSIGNED DEFAULT NULL,
  `value_boolean` tinyint(1) DEFAULT NULL,
  `value_boolean_label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_attribute_values`
--

INSERT INTO `car_attribute_values` (`id`, `car_id`, `attribute_id`, `attribute_value_id`, `value_string`, `value_number`, `value_boolean`, `value_boolean_label`, `created_at`, `updated_at`) VALUES
(225, 16, 1, 5, NULL, NULL, NULL, NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(226, 16, 2, 3, NULL, NULL, NULL, NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(227, 16, 3, NULL, NULL, 4500000000, NULL, NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(228, 16, 4, NULL, NULL, NULL, 1, 'دارد,ندارد', '2025-09-26 13:06:27', '2025-09-26 13:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `car_files`
--

CREATE TABLE `car_files` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_files`
--

INSERT INTO `car_files` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'بدنه و شاسی', '2025-09-17 11:14:52', '2025-09-17 11:18:58'),
(2, 'فنی و مکانیکی', '2025-09-17 11:15:13', '2025-09-17 11:15:13'),
(3, 'آپشن و تجهیزات', '2025-09-17 11:15:32', '2025-09-17 11:15:32'),
(4, 'رینگ و لاستیک', '2025-09-17 11:15:44', '2025-09-17 11:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `car_file_items`
--

CREATE TABLE `car_file_items` (
  `id` bigint UNSIGNED NOT NULL,
  `car_file_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_file_items`
--

INSERT INTO `car_file_items` (`id`, `car_file_id`, `title`, `created_at`, `updated_at`) VALUES
(31, 2, 'نشت آب', '2025-09-18 08:13:11', '2025-09-18 09:33:38'),
(32, 1, 'درب موتور', '2025-09-18 09:30:16', '2025-09-18 09:30:16'),
(33, 1, 'درب جلو چپ', '2025-09-18 09:30:25', '2025-09-18 09:30:25'),
(34, 1, 'درب عقب راست', '2025-09-18 09:30:32', '2025-09-18 09:30:32'),
(35, 1, 'درب صندوق', '2025-09-18 09:30:38', '2025-09-18 09:30:38'),
(36, 1, 'رکاب سمت چپ', '2025-09-18 09:30:43', '2025-09-18 09:30:43'),
(37, 1, 'ستون عقب راست', '2025-09-18 09:30:49', '2025-09-18 09:30:49'),
(38, 1, 'سقف', '2025-09-18 09:30:55', '2025-09-18 09:30:55'),
(39, 1, 'ستون وسط چپ', '2025-09-18 09:31:01', '2025-09-18 09:31:01'),
(40, 1, 'سینی جلو', '2025-09-18 09:31:07', '2025-09-18 09:31:07'),
(41, 1, 'گلگیر جلو چپ', '2025-09-18 09:31:13', '2025-09-18 09:31:13'),
(42, 1, 'درب جلو راست', '2025-09-18 09:31:18', '2025-09-18 09:31:18'),
(43, 1, 'گلگیر عقب چپ', '2025-09-18 09:31:23', '2025-09-18 09:31:23'),
(44, 1, 'ستون جلو چپ', '2025-09-18 09:31:28', '2025-09-18 09:31:28'),
(45, 1, 'رکاب سمت راست', '2025-09-18 09:31:33', '2025-09-18 09:31:33'),
(46, 1, 'شاسی جلو', '2025-09-18 09:31:38', '2025-09-18 09:31:38'),
(47, 1, 'سپر جلو', '2025-09-18 09:31:43', '2025-09-18 09:31:43'),
(48, 1, 'ستون وسط راست', '2025-09-18 09:31:48', '2025-09-18 09:31:48'),
(49, 1, 'آینه ها', '2025-09-18 09:31:52', '2025-09-18 09:31:52'),
(50, 1, 'گلگیر جلو راست', '2025-09-18 09:31:58', '2025-09-18 09:31:58'),
(51, 1, 'درب عقب چپ', '2025-09-18 09:32:03', '2025-09-18 09:32:03'),
(52, 1, 'گلگیر عقب راست', '2025-09-18 09:32:09', '2025-09-18 09:32:09'),
(53, 1, 'ستون جلو راست', '2025-09-18 09:32:14', '2025-09-18 09:32:14'),
(54, 1, 'ستون عقب چپ', '2025-09-18 09:32:18', '2025-09-18 09:32:18'),
(55, 1, 'شاسی عقب', '2025-09-18 09:32:23', '2025-09-18 09:32:23'),
(56, 1, 'سپر عقب', '2025-09-18 09:32:29', '2025-09-18 09:32:29'),
(57, 1, 'سینی عقب', '2025-09-18 09:32:34', '2025-09-18 09:32:34'),
(58, 2, 'نشت روغن', '2025-09-18 09:33:46', '2025-09-18 09:33:46'),
(59, 2, 'کمپرس موتور', '2025-09-18 09:33:51', '2025-09-18 09:33:51'),
(60, 2, 'سیستم فرمان', '2025-09-18 09:33:56', '2025-09-18 09:33:56'),
(61, 2, 'کنترل وضعیت موتور', '2025-09-18 09:34:00', '2025-09-18 09:34:00'),
(62, 2, 'وضعیت استارت', '2025-09-18 09:34:06', '2025-09-18 09:34:06'),
(63, 2, 'دیسک و صفحه', '2025-09-18 09:34:12', '2025-09-18 09:34:12'),
(64, 2, 'وضعیت منیفول', '2025-09-18 09:34:17', '2025-09-18 09:34:17'),
(65, 2, 'وضعیت گیربکس', '2025-09-18 09:34:25', '2025-09-18 09:34:25'),
(66, 2, 'پلوس ها', '2025-09-18 09:34:30', '2025-09-18 09:34:30'),
(67, 2, 'باطری', '2025-09-18 09:34:36', '2025-09-18 09:34:36'),
(68, 2, 'روغن سوزی', '2025-09-18 09:34:41', '2025-09-18 09:34:41'),
(69, 2, 'وضعیت روغن موتور', '2025-09-18 09:34:46', '2025-09-18 09:34:46'),
(70, 2, 'وضعیت روغن هیدرولیک', '2025-09-18 09:34:51', '2025-09-18 09:34:51'),
(71, 2, 'واشر سر سیلندر', '2025-09-18 09:34:56', '2025-09-18 09:34:56'),
(72, 2, 'دسته موتورها', '2025-09-18 09:35:01', '2025-09-18 09:35:01'),
(73, 2, 'خلاصی و باز پدال ترمز', '2025-09-18 09:35:06', '2025-09-18 09:35:06'),
(74, 2, 'وضعیت منبع اگزوز', '2025-09-18 09:35:11', '2025-09-18 09:35:11'),
(75, 2, 'سیستم تعلیق', '2025-09-18 09:35:16', '2025-09-18 09:35:16'),
(76, 2, 'بلبرینگ چرخها', '2025-09-18 09:35:22', '2025-09-18 09:35:22'),
(77, 2, 'واشر در سوپاپ', '2025-09-18 09:35:26', '2025-09-18 09:35:26'),
(78, 2, 'دود اگزور', '2025-09-18 09:35:31', '2025-09-18 09:35:31'),
(79, 2, 'وضعیت روغن ترمز', '2025-09-18 09:35:35', '2025-09-18 09:35:35'),
(80, 2, 'کنترل وضعیت فنها', '2025-09-18 09:35:40', '2025-09-18 09:35:40'),
(81, 2, 'کارکرد درجا', '2025-09-18 09:35:44', '2025-09-18 09:35:44'),
(82, 2, 'خلاصی و بازی پدال کلاچ', '2025-09-18 09:35:49', '2025-09-18 09:35:49'),
(83, 2, 'خلاصی و بازی پدال گاز', '2025-09-18 09:35:54', '2025-09-18 09:35:54'),
(84, 2, 'وضعیت صفحه کلاچ', '2025-09-18 09:35:58', '2025-09-18 09:35:58'),
(85, 2, 'تطابق کارکرد', '2025-09-18 09:36:03', '2025-09-18 09:36:03'),
(86, 3, 'کنترل آپشنهای هوشمند', '2025-09-18 09:36:22', '2025-09-18 09:36:22'),
(87, 3, 'مجموعه چراغهای جلو  سالم', '2025-09-18 09:36:27', '2025-09-18 09:36:27'),
(88, 3, 'مه شکن جلو چپ', '2025-09-18 09:36:32', '2025-09-18 09:36:32'),
(89, 3, 'مه شکن عقب چپ', '2025-09-18 09:36:38', '2025-09-18 09:36:38'),
(90, 3, 'مکانیزم سرمایش', '2025-09-18 09:36:44', '2025-09-18 09:36:44'),
(91, 3, 'وضعیت برف پاک کن', '2025-09-18 09:36:50', '2025-09-18 09:36:50'),
(92, 3, 'وضعیت سنسورها و دوربین', '2025-09-18 09:36:54', '2025-09-18 09:36:54'),
(93, 3, 'کنترل سیستم تهویه', '2025-09-18 09:37:01', '2025-09-18 09:37:01'),
(94, 3, 'مه شکن جلو راست', '2025-09-18 09:37:05', '2025-09-18 09:37:05'),
(95, 3, 'مجموعه چراغهای عقب', '2025-09-18 09:37:10', '2025-09-18 09:37:10'),
(96, 3, 'مه شکن عقب وسط', '2025-09-18 09:37:15', '2025-09-18 09:37:15'),
(97, 3, 'مکانیز گرمایش', '2025-09-18 09:37:20', '2025-09-18 09:37:20'),
(98, 3, 'شیشه بالابرها', '2025-09-18 09:37:25', '2025-09-18 09:37:25'),
(99, 3, 'کنترل قطعات الکترونیکی', '2025-09-18 09:37:31', '2025-09-18 09:37:31'),
(100, 3, 'عملکرد آمپرهای صفحه کیلومتر', '2025-09-18 09:37:35', '2025-09-18 09:37:35'),
(101, 3, 'مه شکن عقب راست', '2025-09-18 09:37:42', '2025-09-18 09:37:42'),
(102, 3, 'کنترل سیستم پایداری ESP', '2025-09-18 09:37:48', '2025-09-18 09:37:48'),
(103, 3, 'کمربند ایمنی', '2025-09-18 09:37:54', '2025-09-18 09:37:54'),
(104, 3, 'وضعیت صندلی خودرو', '2025-09-18 09:38:01', '2025-09-18 09:38:01'),
(105, 4, 'لاستیک جلو چپ', '2025-09-18 09:40:09', '2025-09-18 09:40:09'),
(106, 4, 'لاستیک عقب راست', '2025-09-18 09:40:15', '2025-09-18 09:40:15'),
(107, 4, 'رینگ جلو راست', '2025-09-18 09:40:22', '2025-09-18 09:40:22'),
(108, 4, 'رینگ زاپاس', '2025-09-18 09:40:41', '2025-09-18 09:40:41'),
(109, 4, 'لاستیک جلو راست', '2025-09-18 09:40:49', '2025-09-18 09:40:49'),
(110, 4, 'لاستیک زاپاس', '2025-09-18 09:40:55', '2025-09-18 09:40:55'),
(111, 4, 'رینگ عقب چپ', '2025-09-18 09:41:00', '2025-09-18 09:41:00'),
(112, 4, 'لاستیک عقب چپ', '2025-09-18 09:41:07', '2025-09-18 09:41:07'),
(113, 4, 'رینگ جلو چپ', '2025-09-18 09:41:42', '2025-09-18 09:41:42'),
(114, 4, 'رینگ عقب راست', '2025-09-18 09:41:49', '2025-09-18 09:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `car_file_item_values`
--

CREATE TABLE `car_file_item_values` (
  `id` bigint UNSIGNED NOT NULL,
  `car_id` bigint UNSIGNED NOT NULL,
  `car_file_item_id` bigint UNSIGNED NOT NULL,
  `status` enum('سالم','نامشخص','رنگ شده','صافکاری بدون رنگ','تعمیر شده','تعویض و مشکل‌دار') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'سالم',
  `status_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_file_item_values`
--

INSERT INTO `car_file_item_values` (`id`, `car_id`, `car_file_item_id`, `status`, `status_description`, `created_at`, `updated_at`) VALUES
(2442, 16, 32, 'رنگ شده', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2443, 16, 33, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2444, 16, 34, 'تعویض و مشکل‌دار', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2445, 16, 35, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2446, 16, 36, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2447, 16, 37, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2448, 16, 38, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2449, 16, 39, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2450, 16, 40, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2451, 16, 41, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2452, 16, 42, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2453, 16, 43, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2454, 16, 44, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2455, 16, 45, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2456, 16, 46, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2457, 16, 47, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2458, 16, 48, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2459, 16, 49, 'صافکاری بدون رنگ', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2460, 16, 50, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2461, 16, 51, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2462, 16, 52, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2463, 16, 53, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2464, 16, 54, 'نامشخص', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2465, 16, 55, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2466, 16, 56, 'تعمیر شده', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2467, 16, 57, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2468, 16, 31, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2469, 16, 58, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2470, 16, 59, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2471, 16, 60, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2472, 16, 61, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2473, 16, 62, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2474, 16, 63, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2475, 16, 64, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2476, 16, 65, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2477, 16, 66, 'رنگ شده', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2478, 16, 67, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2479, 16, 68, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2480, 16, 69, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2481, 16, 70, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2482, 16, 71, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2483, 16, 72, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2484, 16, 73, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2485, 16, 74, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2486, 16, 75, 'صافکاری بدون رنگ', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2487, 16, 76, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2488, 16, 77, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2489, 16, 78, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2490, 16, 79, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2491, 16, 80, 'نامشخص', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2492, 16, 81, 'تعمیر شده', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2493, 16, 82, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2494, 16, 83, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2495, 16, 84, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2496, 16, 85, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2497, 16, 86, 'رنگ شده', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2498, 16, 87, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2499, 16, 88, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2500, 16, 89, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2501, 16, 90, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2502, 16, 91, 'نامشخص', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2503, 16, 92, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2504, 16, 93, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2505, 16, 94, 'تعمیر شده', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2506, 16, 95, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2507, 16, 96, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2508, 16, 97, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2509, 16, 98, 'نامشخص', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2510, 16, 99, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2511, 16, 100, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2512, 16, 101, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2513, 16, 102, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2514, 16, 103, 'تعمیر شده', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2515, 16, 104, 'صافکاری بدون رنگ', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2516, 16, 105, 'نامشخص', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2517, 16, 106, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2518, 16, 107, 'تعمیر شده', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2519, 16, 108, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2520, 16, 109, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2521, 16, 110, 'رنگ شده', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2522, 16, 111, 'صافکاری بدون رنگ', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2523, 16, 112, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2524, 16, 113, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27'),
(2525, 16, 114, 'سالم', NULL, '2025-09-26 13:06:27', '2025-09-26 13:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'نازنین محمدی', '09126574382', 'nazanin@gmail.com', '2025-07-29 16:09:26', '2025-07-29 17:11:36'),
(2, '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'آرش قربانی', '09116937586', 'arash@gmail.com', '2025-07-31 09:24:38', '2025-07-31 09:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `advisor_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','closed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversation_user_statuses`
--

CREATE TABLE `conversation_user_statuses` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversation_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_room` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent` int UNSIGNED DEFAULT NULL,
  `type` enum('amount','percent') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percent',
  `expiration` datetime DEFAULT NULL,
  `status` enum('disable','enable') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `access` enum('public','private') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'private',
  `limitdiscount` int UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `user_ids`, `title`, `code`, `amount`, `percent`, `type`, `expiration`, `status`, `access`, `limitdiscount`, `created_at`, `updated_at`) VALUES
('9f857fc1-eb82-4d19-a066-be88d9ba9370', NULL, 'bahar1404', 'bahar1404', NULL, 10, 'percent', '2025-08-25 00:00:00', 'enable', 'public', 3, '2025-07-31 10:20:29', '2025-07-31 10:20:29'),
('9f8584fb-8088-4365-86a7-abf290fd3506', NULL, 'kljk', 'jkjk', '45454', NULL, 'amount', '2025-08-05 00:00:00', 'disable', 'public', 0, '2025-07-31 10:35:05', '2025-07-31 10:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `document_files`
--

CREATE TABLE `document_files` (
  `id` bigint UNSIGNED NOT NULL,
  `user_document_id` bigint UNSIGNED NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `contact_id` bigint UNSIGNED NOT NULL,
  `type_id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `send_date` datetime NOT NULL,
  `remind_at` datetime NOT NULL,
  `status` enum('pending','sent','failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `status_remind` enum('pending','sent','failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `contact_id`, `type_id`, `user_id`, `title`, `notes`, `send_date`, `remind_at`, `status`, `status_remind`, `created_at`, `updated_at`) VALUES
(6, 1, 1, '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'تولدت مبارک', 'خوبی عشقم', '2025-08-03 14:25:00', '2025-08-03 14:22:00', 'sent', 'sent', '2025-08-03 10:51:04', '2025-08-03 10:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE `event_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` enum('birthday','wedding-anniversary') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'شناسه داخلی نوع رویداد',
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نام نمایشی نوع رویداد'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_types`
--

INSERT INTO `event_types` (`id`, `name`, `display_name`) VALUES
(1, 'birthday', 'تولد'),
(3, 'wedding-anniversary', 'سالگرد ازدواج');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED DEFAULT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `filename`, `original_name`, `mime`, `size`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 'qA1kk8oEJb1CuQaUguw2yzbjl2MPrh4kKIow4tfb.webp', '598fb5ef-483c-43a6-a8ef-03acab6cb4e6.webp', 'image/webp', 125382, '9efc463a-7c58-4f5b-a649-cc59dc48b599', '2025-09-24 08:20:55', '2025-09-24 08:20:55'),
(17, 'tnuRlLBQva4qqgfKg2CSiqruq2mBBsDK147CZ40U.webp', '33345a0e-6caa-4b6f-a14d-941df6ee25ea.webp', 'image/webp', 122060, '9efc463a-7c58-4f5b-a649-cc59dc48b599', '2025-09-24 08:20:58', '2025-09-24 08:20:58'),
(18, 'YJ08ZCC54Vgi4ihEwVyRLEwIY6K0plpvdkVUcqCc.webp', 'c0ad23fc-2322-4778-864b-283ba282f7b3.webp', 'image/webp', 137794, '9efc463a-7c58-4f5b-a649-cc59dc48b599', '2025-09-24 08:21:02', '2025-09-24 08:21:02'),
(19, 'Vgn05y2GMtFYRu0FW1U9UrOKeSMAVWBQCcMW2aE5.webp', 'e56e5160-ee70-43ef-baff-8eb623a08c43.webp', 'image/webp', 147248, '9efc463a-7c58-4f5b-a649-cc59dc48b599', '2025-09-24 08:21:06', '2025-09-24 08:21:06'),
(20, 'ffGaGLGktO8Spb7OGRPaxolsxzFsw2KcmPKvN4zW.webp', 'f5f013e8-fda3-4cbf-9fcd-546b8d087b95.webp', 'image/webp', 133518, '9efc463a-7c58-4f5b-a649-cc59dc48b599', '2025-09-24 08:21:09', '2025-09-24 08:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversation_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_10_11_074803_create_permission_tables', 1),
(9, '2024_11_28_175715_create_settings_table', 1),
(10, '2025_05_22_100023_create_services_table', 1),
(11, '2025_05_22_100034_create_user_documents_table', 1),
(12, '2025_05_22_100040_create_subscriptions_table', 1),
(13, '2025_05_22_100045_create_user_subscriptions_table', 1),
(14, '2025_05_22_100050_create_user_services_table', 1),
(16, '2025_05_22_100059_create_wallets_table', 1),
(18, '2025_05_22_100054_create_payments_table', 2),
(19, '2025_05_22_100104_create_wallet_transactions_table', 2),
(20, '2025_05_26_152325_create_document_files_table', 3),
(21, '2025_06_03_081001_create_sliders_table', 4),
(22, '2025_06_03_082001_create_banners_table', 5),
(24, '2025_06_09_140235_create_useddiscounts_table', 7),
(25, '2025_06_15_092537_create_service_requests_table', 8),
(26, '2025_07_12_100058_add_service_limit_to_subscriptions_table', 9),
(27, '2025_07_12_101142_create_user_subscription_usage_table', 9),
(28, '2025_07_13_083809_add_is_online_to_users_table', 9),
(29, '2025_07_13_083841_create_conversations_table', 9),
(30, '2025_07_13_083945_create_messages_table', 9),
(31, '2025_07_14_142246_add_is_online_to_users_table', 10),
(33, '2025_07_16_093844_add_seen_to_messages_table', 11),
(34, '2025_07_16_142435_create_conversation_user_statuses_table', 12),
(35, '2025_07_25_105801_add_parent_id_to_services_table', 13),
(36, '2025_07_26_110416_add_rules_to_services_table', 14),
(42, '2025_07_28_112233_create_pages_table', 15),
(43, '2025_07_29_184027_create_contacts_table', 15),
(45, '2025_07_29_184131_create_events_table', 15),
(46, '2025_07_29_184109_create_event_types_table', 16),
(47, '2025_06_09_124521_create_discounts_table', 17),
(48, '2025_08_02_093916_create_notifications_table', 18),
(49, '2025_08_02_101222_add_device_token_to_users_table', 18),
(50, '2025_08_03_100549_add_status_remind_to_events_table', 19),
(51, '2025_06_07_124207_create_user_daily_limits_table', 20),
(52, '2025_06_07_124520_create_videos_table', 20),
(53, '2025_06_07_124719_create_referrals_table', 20),
(65, '2025_09_15_105425_create_cars_table', 21),
(66, '2025_09_15_111222_create_attributes_table', 21),
(67, '2025_09_15_111637_create_attribute_values_table', 21),
(68, '2025_09_15_112202_create_car_attribute_values_table', 21),
(71, '2025_09_17_124755_create_car_files_table', 22),
(72, '2025_09_17_124810_create_car_file_items_table', 22),
(73, '2025_09_17_132427_create_car_file_item_values_table', 22),
(75, '2025_09_23_191200_create_media_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', '3e7d1d77-6b8f-11f0-98da-74563cc4c11d'),
(1, 'App\\Models\\User', '9efc463a-7c58-4f5b-a649-cc59dc48b599'),
(7, 'App\\Models\\User', '9f61d659-2507-49b2-9e14-6bf56e98b9d4'),
(7, 'App\\Models\\User', '9f634456-868d-4a3c-b2b3-61fa0f293795'),
(8, 'App\\Models\\User', '9f655a1e-a5a6-4796-86a9-fecffacff4ee'),
(7, 'App\\Models\\User', '9f65637c-2a5c-4d77-85d1-132609779fea'),
(7, 'App\\Models\\User', '9f81e4b6-7da6-47ff-b50f-205507c260e0');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `receivers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `receivers`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bE5WZ6QShrYq5EXZnIiHY4F9dH6DvN47bR57L9ZXvM2MrBIin0OhJJMTTXE2nfxqnWH87JWj5GYGvdxufk6qiIO5uKRFWD67meCGXC9LusIBThtgDQ\";}', 'تست', 'توضیحات من', '2025-08-02 13:28:39', '2025-08-02 13:28:39'),
(2, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bGSsLx5YTQil7FqlDRYvaQrxu_PQItS9U_cGEGpveTvW4WLmRQgerlHdFPdLkO8sp1aTy5uCx7r0S192VO2JouYst7G4hJVQiX5moC8ED3jyZHU37k\";}', 'dfgdsfs', 'dfsdfd', '2025-08-02 13:34:10', '2025-08-02 13:34:10'),
(3, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bGSsLx5YTQil7FqlDRYvaQrxu_PQItS9U_cGEGpveTvW4WLmRQgerlHdFPdLkO8sp1aTy5uCx7r0S192VO2JouYst7G4hJVQiX5moC8ED3jyZHU37k\";}', 'dfdsf', 'dfdsf', '2025-08-02 13:34:45', '2025-08-02 13:34:45'),
(4, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bE8RUe3-KGF9jRdYJnkpyvKDv649SHboMDlb6yEdcrXuzXXdnN2G4PX-ImXW73WHIzF9xk8HYQxzqS-Rp28Z4Bgs23XmnDRGlbYAN7bPHU0868yS8o\";}', 'kjjhkk', 'jkhj', '2025-08-02 13:40:46', '2025-08-02 13:40:46'),
(5, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bEgfcaI_0iB7Ox-6M3P-nPov1072cC609h3iKsjKv6fB-5k2ywIj3wENyT-PnbTpqvrHLj5u72wO7sAETYu7c8AQJn71MdoEUt2cM98_jGEG-5fsdw\";}', 'ytry', 'tytyr', '2025-08-02 13:42:44', '2025-08-02 13:42:44'),
(6, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bEgfcaI_0iB7Ox-6M3P-nPov1072cC609h3iKsjKv6fB-5k2ywIj3wENyT-PnbTpqvrHLj5u72wO7sAETYu7c8AQJn71MdoEUt2cM98_jGEG-5fsdw\";}', 'لقفث', 'قفقثف', '2025-08-02 13:53:52', '2025-08-02 13:53:52'),
(7, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bEgfcaI_0iB7Ox-6M3P-nPov1072cC609h3iKsjKv6fB-5k2ywIj3wENyT-PnbTpqvrHLj5u72wO7sAETYu7c8AQJn71MdoEUt2cM98_jGEG-5fsdw\";}', 'dsfdsf', 'dsfdf', '2025-08-02 14:03:09', '2025-08-02 14:03:09'),
(8, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bEgfcaI_0iB7Ox-6M3P-nPov1072cC609h3iKsjKv6fB-5k2ywIj3wENyT-PnbTpqvrHLj5u72wO7sAETYu7c8AQJn71MdoEUt2cM98_jGEG-5fsdw\";}', 'dffdsf', 'dsfds', '2025-08-02 14:04:11', '2025-08-02 14:04:11'),
(9, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bEgfcaI_0iB7Ox-6M3P-nPov1072cC609h3iKsjKv6fB-5k2ywIj3wENyT-PnbTpqvrHLj5u72wO7sAETYu7c8AQJn71MdoEUt2cM98_jGEG-5fsdw\";}', 'xcxzc', 'zczx', '2025-08-02 14:04:49', '2025-08-02 14:04:49'),
(10, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bEgfcaI_0iB7Ox-6M3P-nPov1072cC609h3iKsjKv6fB-5k2ywIj3wENyT-PnbTpqvrHLj5u72wO7sAETYu7c8AQJn71MdoEUt2cM98_jGEG-5fsdw\";}', 'xcxzc', 'zczx', '2025-08-02 14:05:04', '2025-08-02 14:05:04'),
(11, 'a:1:{i:0;s:142:\"cE02uvEBvFqIzKO6QrqjV7:APA91bEgfcaI_0iB7Ox-6M3P-nPov1072cC609h3iKsjKv6fB-5k2ywIj3wENyT-PnbTpqvrHLj5u72wO7sAETYu7c8AQJn71MdoEUt2cM98_jGEG-5fsdw\";}', 'تنات', 'اتات', '2025-08-02 14:33:37', '2025-08-02 14:33:37'),
(12, 'a:1:{i:0;s:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";}', 'تست نوتیفیکیشن', 'توضیحات آزمایشی', '2025-08-02 15:13:11', '2025-08-02 15:13:11'),
(13, 'a:1:{i:0;s:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";}', 'تست نوتیفیکیشن ۲', 'توضیحات آزمایشی ۲', '2025-08-02 15:13:35', '2025-08-02 15:13:35'),
(14, 'a:1:{i:0;s:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";}', 'rtrert', 'ert', '2025-08-02 15:19:46', '2025-08-02 15:19:46'),
(15, 's:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";', 'تولدت مبارک', 'تولدت مبارک عزیزم', '2025-08-03 07:28:32', '2025-08-03 07:28:32'),
(16, 's:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";', 'تولدت مبارک', 'تولدت مبارک عزیزم', '2025-08-03 07:29:00', '2025-08-03 07:29:00'),
(17, 's:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";', 'تولدت مبارک', 'عزیزم تولدت مبارک', '2025-08-03 10:30:58', '2025-08-03 10:30:58'),
(18, 's:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";', 'تولدت مبارک', 'عزیزم تولدت مبارک', '2025-08-03 10:35:01', '2025-08-03 10:35:01'),
(19, 's:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";', 'سلام', 'سالگردمون مبارک', '2025-08-03 10:39:05', '2025-08-03 10:39:05'),
(20, 's:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";', 'سلام', 'سالگردمون مبارک', '2025-08-03 10:40:06', '2025-08-03 10:40:06'),
(21, 's:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";', 'تست', 'تست', '2025-08-03 10:43:09', '2025-08-03 10:43:09'),
(22, 's:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";', 'تست', 'تست', '2025-08-03 10:45:11', '2025-08-03 10:45:11'),
(23, 's:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";', 'تولدت مبارک', 'خوبی عشقم', '2025-08-03 10:52:16', '2025-08-03 10:52:16'),
(24, 's:142:\"fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M\";', 'تولدت مبارک', 'خوبی عشقم', '2025-08-03 10:55:19', '2025-08-03 10:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_subscription_id` bigint UNSIGNED DEFAULT NULL,
  `type` enum('wallet_topup','subscription_direct','subscription_wallet') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` float NOT NULL,
  `discount_amount` float DEFAULT NULL,
  `discount_code` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authority` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','paid','failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `user_subscription_id`, `type`, `amount`, `discount_amount`, `discount_code`, `transaction_id`, `invoice_number`, `authority`, `description`, `status`, `created_at`) VALUES
('9f6d13c7-5f7f-4a38-9953-b22038598fa8', '9efc463a-7c58-4f5b-a649-cc59dc48b599', NULL, 'subscription_direct', 2000000, 0, NULL, NULL, '14040428001', 'S000000000000000000000000000000035g8', 'خرید اشتراک عضویت / عضویت طلایی', 'pending', '2025-07-19 06:58:41'),
('9f793e0a-b666-4f7e-a20b-2eaba041756d', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 45, 'subscription_direct', 2000000, 0, NULL, '1612901', '14040503001', 'S000000000000000000000000000000v2eod', 'خرید اشتراک عضویت / عضویت طلایی', 'paid', '2025-07-25 08:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `title`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'لیست کاربران', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(2, 'user-create', 'ایجاد کاربر', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(3, 'user-edit', 'ویرایش کاربر', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(4, 'user-delete', 'حذف کاربر', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(5, 'role-list', 'لیست نقش ها', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(6, 'role-create', 'ایجاد نقش', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(7, 'role-edit', 'ویرایش نقش', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(8, 'role-delete', 'حذف نقش', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(9, 'setting-list', 'لیست تنظیمات', 'web', '2025-05-24 05:11:12', '2025-05-24 05:11:12'),
(10, 'setting-edit', 'ویرایش تنظیمات', 'web', '2025-05-24 05:11:12', '2025-05-24 05:11:12'),
(11, 'dashboard', 'پیشخوان', 'web', '2025-05-24 05:11:12', '2025-05-24 05:11:12'),
(12, 'user-login-mobile', 'ورود با موبایل', 'web', '2025-05-24 05:11:12', '2025-05-24 05:11:12'),
(13, 'service-list', 'لیست خدمات', 'web', '2025-05-24 09:40:19', '2025-05-24 09:40:19'),
(14, 'service-create', 'ایجاد خدمات جدید', 'web', '2025-05-24 09:40:20', '2025-05-24 09:40:20'),
(15, 'service-edit', 'ویرایش خدمت', 'web', '2025-05-24 09:40:20', '2025-05-24 09:40:20'),
(16, 'service-delete', 'حذف خدمت', 'web', '2025-05-24 09:40:20', '2025-05-24 09:40:20'),
(17, 'subscrib-list', 'لیست اشتراک ها', 'web', '2025-05-24 10:09:05', '2025-05-24 10:09:05'),
(18, 'subscrib-create', 'ایجاد اشتراک جدید', 'web', '2025-05-24 10:09:05', '2025-05-24 10:09:05'),
(19, 'subscrib-edit', 'ویرایش اشتراک', 'web', '2025-05-24 10:09:05', '2025-05-24 10:09:05'),
(20, 'subscrib-delete', 'حذف اشتراک', 'web', '2025-05-24 10:09:05', '2025-05-24 10:09:05'),
(21, 'slider-list', 'لیست اسلایدر ها', 'web', '2025-06-03 04:53:20', '2025-06-03 04:53:20'),
(22, 'slider-create', 'ایجاد اسلایدر جدید', 'web', '2025-06-03 04:53:20', '2025-06-03 04:53:20'),
(23, 'slider-edit', 'ویرایش اسلایدر', 'web', '2025-06-03 04:53:20', '2025-06-03 04:53:20'),
(24, 'slider-delete', 'حذف اسلایدر', 'web', '2025-06-03 04:53:20', '2025-06-03 04:53:20'),
(29, 'banner-list', 'لیست بنر ها', 'web', '2025-06-03 06:31:03', '2025-06-03 06:31:03'),
(30, 'banner-create', 'ایجاد بنر جدید', 'web', '2025-06-03 06:31:03', '2025-06-03 06:31:03'),
(31, 'banner-edit', 'ویرایش بنر', 'web', '2025-06-03 06:31:03', '2025-06-03 06:31:03'),
(32, 'banner-delete', 'حذف بنر', 'web', '2025-06-03 06:31:03', '2025-06-03 06:31:03'),
(33, 'discount-list', 'لیست تخفیف ها', 'web', '2025-06-09 10:00:30', '2025-06-09 10:00:30'),
(34, 'discount-create', 'ایجاد تخفیف جدید', 'web', '2025-06-09 10:00:30', '2025-06-09 10:00:30'),
(35, 'discount-edit', 'ویرایش تخفیف', 'web', '2025-06-09 10:00:30', '2025-06-09 10:00:30'),
(36, 'discount-delete', 'حذف تخفیف', 'web', '2025-06-09 10:00:30', '2025-06-09 10:00:30'),
(37, 'service-requests-list', 'لیست درخواست ها', 'web', '2025-06-15 06:05:22', '2025-06-15 06:05:22'),
(38, 'service-requests-create', 'ایجاد درخواست جدید', 'web', '2025-06-15 06:05:22', '2025-06-15 06:05:22'),
(39, 'service-requests-edit', 'ویرایش درخواست', 'web', '2025-06-15 06:05:22', '2025-06-15 06:05:22'),
(40, 'service-requests-delete', 'حذف درخواست', 'web', '2025-06-15 06:05:22', '2025-06-15 06:05:22'),
(41, 'advisor-list', 'مشاوره آنلاین', 'web', '2025-07-15 06:15:51', '2025-07-15 06:15:51'),
(42, 'advisor-create', 'ایجاد گفتگو', 'web', '2025-07-15 06:15:51', '2025-07-15 06:15:51'),
(43, 'page-list', 'لیست صفحه ها', 'web', '2025-07-28 08:01:56', '2025-07-28 08:01:56'),
(44, 'page-create', 'ایجاد صفحه جدید', 'web', '2025-07-28 08:01:56', '2025-07-28 08:01:56'),
(45, 'page-edit', 'ویرایش صفحه', 'web', '2025-07-28 08:01:56', '2025-07-28 08:01:56'),
(46, 'page-delete', 'حذف صفحه', 'web', '2025-07-28 08:01:56', '2025-07-28 08:01:56'),
(47, 'contact-list', 'لیست مخاطبین', 'web', '2025-07-29 15:49:14', '2025-07-29 15:49:14'),
(48, 'contact-create', 'مخاطب جدید', 'web', '2025-07-29 15:49:14', '2025-07-29 15:49:14'),
(49, 'contact-edit', 'ویرایش مخاطب', 'web', '2025-07-29 15:49:14', '2025-07-29 15:49:14'),
(50, 'contact-delete', 'حذف مخاطب', 'web', '2025-07-29 15:49:14', '2025-07-29 15:49:14'),
(51, 'event-list', 'لیست رویدادها', 'web', '2025-07-30 09:59:25', '2025-07-30 09:59:25'),
(52, 'event-create', 'ایجاد رویداد', 'web', '2025-07-30 09:59:25', '2025-07-30 09:59:25'),
(53, 'event-edit', 'ویرایش رویداد', 'web', '2025-07-30 09:59:25', '2025-07-30 09:59:25'),
(54, 'event-delete', 'حذف رویداد', 'web', '2025-07-30 09:59:25', '2025-07-30 09:59:25'),
(55, 'notification-list', 'لیست نوتیفیکیشن ها', 'web', '2025-08-02 06:57:04', '2025-08-02 06:57:04'),
(56, 'notification-create', 'ایجاد نوتیفیکیشن', 'web', '2025-08-02 06:57:04', '2025-08-02 06:57:04'),
(57, 'notification-edit', 'ویرایش نوتیفیکیشن', 'web', '2025-08-02 06:57:04', '2025-08-02 06:57:04'),
(58, 'notification-delete', 'حذف نوتیفیکیشن', 'web', '2025-08-02 06:57:04', '2025-08-02 06:57:04'),
(59, 'attribute-list', 'لیست ویژگی ها', 'web', '2025-09-16 07:55:04', '2025-09-16 07:55:04'),
(60, 'attribute-create', 'ایجاد ویژگی', 'web', '2025-09-16 07:55:04', '2025-09-16 07:55:04'),
(61, 'attribute-edit', 'ویرایش ویژگی', 'web', '2025-09-16 07:55:04', '2025-09-16 07:55:04'),
(62, 'attribute-delete', 'حذف ویژگی', 'web', '2025-09-16 07:55:04', '2025-09-16 07:55:04'),
(63, 'attribute-values-list', 'لیست مقدار ویژگی ها', 'web', '2025-09-16 08:17:23', '2025-09-16 08:17:23'),
(64, 'attribute-values-create', 'ایجاد مقدار ویژگی', 'web', '2025-09-16 08:17:23', '2025-09-16 08:17:23'),
(65, 'attribute-values-edit', 'ویرایش مقدار ویژگی', 'web', '2025-09-16 08:17:23', '2025-09-16 08:17:23'),
(66, 'attribute-values-delete', 'حذف مقدار ویژگی', 'web', '2025-09-16 08:17:23', '2025-09-16 08:17:23'),
(67, 'car-list', 'لیست ماشین ها', 'web', '2025-09-16 09:05:47', '2025-09-16 09:05:47'),
(68, 'car-create', 'ایجاد ماشین', 'web', '2025-09-16 09:05:47', '2025-09-16 09:05:47'),
(69, 'car-edit', 'ویرایش ماشین', 'web', '2025-09-16 09:05:47', '2025-09-16 09:05:47'),
(70, 'car-delete', 'حذف ماشین', 'web', '2025-09-16 09:05:47', '2025-09-16 09:05:47'),
(71, 'car-files-list', 'لیست پرونده ها', 'web', '2025-09-17 11:20:43', '2025-09-17 11:20:43'),
(72, 'car-files-create', 'ایجاد پرونده', 'web', '2025-09-17 11:20:43', '2025-09-17 11:20:43'),
(73, 'car-files-edit', 'ویرایش پرونده', 'web', '2025-09-17 11:20:43', '2025-09-17 11:20:43'),
(74, 'car-files-delete', 'حذف پرونده', 'web', '2025-09-17 11:20:43', '2025-09-17 11:20:43'),
(75, 'car-file-items-list', 'لیست آیتم‌های پرونده', 'web', '2025-09-17 11:29:43', '2025-09-17 11:29:43'),
(76, 'car-file-items-create', 'ایجاد آیتم‌', 'web', '2025-09-17 11:29:43', '2025-09-17 11:29:43'),
(77, 'car-file-items-edit', 'ویرایش آیتم‌', 'web', '2025-09-17 11:29:43', '2025-09-17 11:29:43'),
(78, 'car-file-items-delete', 'حذف آیتم‌', 'web', '2025-09-17 11:29:43', '2025-09-17 11:29:43'),
(79, 'media-list', 'مدیریت کتابخانه', 'web', '2025-09-24 05:23:54', '2025-09-24 05:23:54'),
(80, 'media-create', 'بارگذاری فایل', 'web', '2025-09-24 05:23:54', '2025-09-24 05:23:54'),
(81, 'media-edit', 'ویرایش فایل', 'web', '2025-09-24 05:23:54', '2025-09-24 05:23:54'),
(82, 'media-delete', 'حذف فایل', 'web', '2025-09-24 05:23:54', '2025-09-24 05:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint UNSIGNED NOT NULL,
  `inviter_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invitee_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `title`) VALUES
(1, 'Admin', 'web', '2025-05-24 05:11:12', '2025-05-24 05:11:12', 'ادمین'),
(7, 'User', 'web', '2025-06-03 05:34:15', '2025-06-03 05:34:15', 'کاربر'),
(8, 'advisor', 'web', '2025-07-14 07:11:02', '2025-07-14 07:11:02', 'مشاور');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
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
(80, 1),
(81, 1),
(82, 1),
(11, 7),
(1, 8),
(2, 8),
(3, 8),
(4, 8),
(5, 8),
(6, 8),
(7, 8),
(8, 8),
(9, 8),
(10, 8),
(11, 8),
(12, 8),
(13, 8),
(14, 8),
(15, 8),
(16, 8),
(17, 8),
(18, 8),
(19, 8),
(20, 8),
(21, 8),
(22, 8),
(23, 8),
(24, 8),
(29, 8),
(30, 8),
(31, 8),
(32, 8),
(33, 8),
(34, 8),
(35, 8),
(36, 8),
(37, 8),
(38, 8),
(39, 8),
(40, 8),
(41, 8),
(42, 8);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rules` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `parent_id`, `icon`, `name`, `description`, `rules`, `is_active`, `created_at`, `updated_at`) VALUES
('9f7b5f0a-4a3a-48e8-8038-eb3adae928a0', NULL, '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-width=\"2\" d=\"M3 21h18M4 18h16M6 10v8m4-8v8m4-8v8m4-8v8M4 9.5v-.955a1 1 0 0 1 .458-.84l7-4.52a1 1 0 0 1 1.084 0l7 4.52a1 1 0 0 1 .458.84V9.5a.5.5 0 0 1-.5.5h-15a.5.5 0 0 1-.5-.5Z\"></path>\r\n</svg>', 'کانون ارزیابی شایستگی و توسعه مدیران', NULL, NULL, 1, '2025-07-26 09:30:43', '2025-07-26 09:43:45'),
('9f7b6044-9b8e-43e2-9a70-b0fb0bb7c0d5', NULL, '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" viewBox=\"0 0 24 24\">\r\n  <path fill-rule=\"evenodd\" d=\"M9 15a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm3.845-1.855a2.4 2.4 0 0 1 1.2-1.226 1 1 0 0 1 1.992-.026c.426.15.809.408 1.111.749a1 1 0 1 1-1.496 1.327.682.682 0 0 0-.36-.213.997.997 0 0 1-.113-.032.4.4 0 0 0-.394.074.93.93 0 0 0 .455.254 2.914 2.914 0 0 1 1.504.9c.373.433.669 1.092.464 1.823a.996.996 0 0 1-.046.129c-.226.519-.627.94-1.132 1.192a1 1 0 0 1-1.956.093 2.68 2.68 0 0 1-1.227-.798 1 1 0 1 1 1.506-1.315.682.682 0 0 0 .363.216c.038.009.075.02.111.032a.4.4 0 0 0 .395-.074.93.93 0 0 0-.455-.254 2.91 2.91 0 0 1-1.503-.9c-.375-.433-.666-1.089-.466-1.817a.994.994 0 0 1 .047-.134Zm1.884.573.003.008c-.003-.005-.003-.008-.003-.008Zm.55 2.613s-.002-.002-.003-.007a.032.032 0 0 1 .003.007ZM4 14a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0v-4a1 1 0 0 1 1-1Zm3-2a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm6.5-8a1 1 0 0 1 1-1H18a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-.796l-2.341 2.049a1 1 0 0 1-1.24.06l-2.894-2.066L6.614 9.29a1 1 0 1 1-1.228-1.578l4.5-3.5a1 1 0 0 1 1.195-.025l2.856 2.04L15.34 5h-.84a1 1 0 0 1-1-1Z\" clip-rule=\"evenodd\"/>\r\n</svg>', 'سرمایه گزاری و تامین مالی', NULL, NULL, 1, '2025-07-26 09:34:09', '2025-07-26 09:48:27'),
('9f7b628d-bdf1-4d9e-9273-0109b8c66920', NULL, '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13.5713 5h7v9h-7m-6.00001-4-3 4.5m3-4.5v5m0-5h3.00001m0 0h5m-5 0v5m-3.00001 0h3.00001m-3.00001 0v5m3.00001-5v5m6-6 2.5 6m-3-6-2.5 6m-3-14.5c0 .82843-.67158 1.5-1.50001 1.5-.82843 0-1.5-.67157-1.5-1.5s.67157-1.5 1.5-1.5 1.50001.67157 1.50001 1.5Z\"></path>\r\n</svg>', 'مشاوره و اقدامات تخصصی', NULL, NULL, 1, '2025-07-26 09:40:32', '2025-07-26 09:43:27'),
('9f7b6333-eefd-453e-92b9-05e87a21dccb', NULL, '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 9H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6m0-6v6m0-6 5.419-3.87A1 1 0 0 1 18 5.942v12.114a1 1 0 0 1-1.581.814L11 15m7 0a3 3 0 0 0 0-6M6 15h3v5H6v-5Z\"></path>\r\n</svg>', 'تبلیغات و برندینگ', NULL, NULL, 1, '2025-07-26 09:42:21', '2025-07-26 09:43:20'),
('9f7b63f4-d3c0-4375-9ff7-b22947dd6087', NULL, '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M20 14H4m6.5 3L8 20m5.5-3 2.5 3M4.88889 17H19.1111c.4909 0 .8889-.4157.8889-.9286V4.92857C20 4.41574 19.602 4 19.1111 4H4.88889C4.39797 4 4 4.41574 4 4.92857V16.0714c0 .5129.39797.9286.88889.9286ZM13 14v-3h4v3h-4Z\"></path>\r\n</svg>', 'آموزش', NULL, NULL, 1, '2025-07-26 09:44:27', '2025-07-26 09:44:27'),
('9f7b6440-e7fb-4daa-b582-cc3c8d2d76c3', NULL, '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18.5 12A2.5 2.5 0 0 1 21 9.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2.5a2.5 2.5 0 0 1 0 5V17a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2.5a2.5 2.5 0 0 1-2.5-2.5Z\"></path>\r\n</svg>', 'رویدادها', NULL, NULL, 1, '2025-07-26 09:45:17', '2025-07-26 09:45:17'),
('9f7b647b-a8dc-427e-9c8d-a0312286acd6', NULL, '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3.78552 9.5 12.7855 14l9-4.5-9-4.5-8.99998 4.5Zm0 0V17m3-6v6.2222c0 .3483 2 1.7778 5.99998 1.7778 4 0 6-1.3738 6-1.7778V11\"></path>\r\n</svg>', 'دانش بنیان', NULL, NULL, 1, '2025-07-26 09:45:56', '2025-07-26 09:45:56'),
('9f7b64bd-aae0-46b0-bc74-2e42627abd10', NULL, '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-width=\"2\" d=\"M4.37 7.657c2.063.528 2.396 2.806 3.202 3.87 1.07 1.413 2.075 1.228 3.192 2.644 1.805 2.289 1.312 5.705 1.312 6.705M20 15h-1a4 4 0 0 0-4 4v1M8.587 3.992c0 .822.112 1.886 1.515 2.58 1.402.693 2.918.351 2.918 2.334 0 .276 0 2.008 1.972 2.008 2.026.031 2.026-1.678 2.026-2.008 0-.65.527-.9 1.177-.9H20M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"></path>\r\n</svg>', 'خدمات بین الملل', NULL, NULL, 1, '2025-07-26 09:46:39', '2025-07-26 09:46:39'),
('9f7b65e7-8887-4a83-985a-161cd6259ff1', NULL, '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 9a3 3 0 0 1 3-3m-2 15h4m0-3c0-4.1 4-4.9 4-9A6 6 0 1 0 6 9c0 4 4 5 4 9h4Z\"/>\r\n</svg>', 'تعاونی خدمات مشاوره و کارآفرینی', NULL, NULL, 1, '2025-07-26 09:49:54', '2025-07-26 09:49:54'),
('9f7b69c2-4f29-4047-8cc9-eb9ace1b4463', '9f7b5f0a-4a3a-48e8-8038-eb3adae928a0', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'اجرای کانون', NULL, NULL, 1, '2025-07-26 10:00:41', '2025-07-26 10:00:41'),
('9f7b69f1-7607-42e5-b833-bca6f14dbfa1', '9f7b5f0a-4a3a-48e8-8038-eb3adae928a0', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'عارضه یابی', NULL, NULL, 1, '2025-07-26 10:01:12', '2025-07-26 10:01:12'),
('9f7b6a10-1230-47a1-9807-3ed6392b4026', '9f7b5f0a-4a3a-48e8-8038-eb3adae928a0', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'آکادمی پرورش ارزیاب', NULL, NULL, 1, '2025-07-26 10:01:32', '2025-07-26 10:01:32'),
('9f7b6a2f-3cab-401c-b63f-390289c5de55', '9f7b5f0a-4a3a-48e8-8038-eb3adae928a0', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'واحد مهندسی شخصیت', NULL, NULL, 1, '2025-07-26 10:01:52', '2025-07-26 10:01:52'),
('9f7b6a50-f90f-4aab-8e50-7537fd358622', '9f7b5f0a-4a3a-48e8-8038-eb3adae928a0', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'استعدادیابی و پرورش کارکنان', NULL, NULL, 1, '2025-07-26 10:02:14', '2025-07-26 10:02:14'),
('9f7b6b14-ed94-49a3-b4c6-fd11cdc34bcf', '9f7b6044-9b8e-43e2-9a70-b0fb0bb7c0d5', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'معرفی و بارگذاری', '<p>طرح</p><p>ایده</p><p>محصول</p>', NULL, 1, '2025-07-26 10:04:23', '2025-07-26 10:04:23'),
('9f7b6b48-8578-473d-a4f8-42ff8151eb75', '9f7b6044-9b8e-43e2-9a70-b0fb0bb7c0d5', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'صدور ضمانت نامه بانکی', NULL, NULL, 1, '2025-07-26 10:04:57', '2025-07-26 10:04:57'),
('9f7b6b7b-d833-434e-8681-dbb7744ddd3d', '9f7b6044-9b8e-43e2-9a70-b0fb0bb7c0d5', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'خدمات لیزینگ', NULL, NULL, 1, '2025-07-26 10:05:30', '2025-07-26 10:05:30'),
('9f7b6ba3-a79c-4877-a75a-3f053daa094f', '9f7b6044-9b8e-43e2-9a70-b0fb0bb7c0d5', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'خدمات بازار سرمایه و بورس', NULL, NULL, 1, '2025-07-26 10:05:56', '2025-07-26 10:05:56'),
('9f7b6bc8-abbf-4191-b4e9-45edc6e32635', '9f7b6044-9b8e-43e2-9a70-b0fb0bb7c0d5', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'مناقصات و مزایدات', '<p>بارگذاری مدارک</p><p>اعلام پیشنهاد</p><p>نتایج</p>', NULL, 1, '2025-07-26 10:06:21', '2025-07-26 10:07:01'),
('9f7b6c35-5bdd-4731-be22-b5cc354f43fd', '9f7b628d-bdf1-4d9e-9273-0109b8c66920', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'حقوقی', NULL, NULL, 1, '2025-07-26 10:07:32', '2025-07-26 10:07:32'),
('9f7b6c5d-987b-462e-908c-a92b7bd1ee95', '9f7b628d-bdf1-4d9e-9273-0109b8c66920', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'بیمه ای', NULL, NULL, 1, '2025-07-26 10:07:58', '2025-07-26 10:07:58'),
('9f7b6c7d-cc14-4342-bbe6-25105c02b4e1', '9f7b628d-bdf1-4d9e-9273-0109b8c66920', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'مالی و مالیاتی', NULL, NULL, 1, '2025-07-26 10:08:19', '2025-07-26 10:08:19'),
('9f7b6ca2-c2ee-4281-9361-820b34c2c61b', '9f7b6333-eefd-453e-92b9-05e87a21dccb', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'تولید محتوا', NULL, NULL, 1, '2025-07-26 10:08:43', '2025-07-26 10:11:52'),
('9f7b6cc4-3f67-4f26-8d09-abd6c7210b78', '9f7b6333-eefd-453e-92b9-05e87a21dccb', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'طراحی سایت', NULL, NULL, 1, '2025-07-26 10:09:05', '2025-07-26 10:11:57'),
('9f7b6ced-55c0-4fe9-8d44-03011ae3a1b2', '9f7b6333-eefd-453e-92b9-05e87a21dccb', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'پرسنال برندینگ', NULL, NULL, 1, '2025-07-26 10:09:32', '2025-07-26 10:12:00'),
('9f7b6d0f-c264-4234-b47e-be13b0141903', '9f7b6333-eefd-453e-92b9-05e87a21dccb', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'دیجیتال مارکتینگ', NULL, NULL, 1, '2025-07-26 10:09:55', '2025-07-26 10:12:04'),
('9f7b6d35-6f66-4437-ac70-3b56ff5faeed', '9f7b6333-eefd-453e-92b9-05e87a21dccb', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'کوچینگ', NULL, NULL, 1, '2025-07-26 10:10:20', '2025-07-26 10:12:07'),
('9f7b6d5e-0345-43b2-a881-27d179a20efc', '9f7b6333-eefd-453e-92b9-05e87a21dccb', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'استراتژی سوشیال مدیا', NULL, NULL, 1, '2025-07-26 10:10:46', '2025-07-26 10:12:11'),
('9f7b6e1e-cc35-423c-8ec2-6da2170bee9e', '9f7b63f4-d3c0-4375-9ff7-b22947dd6087', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'دوره های کوتاه', NULL, NULL, 1, '2025-07-26 10:12:53', '2025-07-26 10:12:53'),
('9f7b6e44-35ad-4605-865a-df74e56842a1', '9f7b63f4-d3c0-4375-9ff7-b22947dd6087', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'اعطای عاملیت آموزشی', NULL, NULL, 1, '2025-07-26 10:13:17', '2025-07-26 10:13:17'),
('9f7b6e8d-9d85-4b84-8653-6d9cb36e7d42', '9f7b63f4-d3c0-4375-9ff7-b22947dd6087', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'دوره های عالی کسب و کار (MBA-DBA)', NULL, NULL, 1, '2025-07-26 10:14:05', '2025-07-26 10:14:05'),
('9f7b6eb2-0baf-4c43-81df-b56e27fc6b7d', '9f7b63f4-d3c0-4375-9ff7-b22947dd6087', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'صدور اعتبارنامه داخلی', NULL, NULL, 1, '2025-07-26 10:14:29', '2025-07-26 10:14:29'),
('9f7b6ed9-07a3-4288-8ce5-7cb23bda6114', '9f7b63f4-d3c0-4375-9ff7-b22947dd6087', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'صدور اعتبار نامه بین المللی', NULL, NULL, 1, '2025-07-26 10:14:55', '2025-07-26 10:14:55'),
('9f7b6f03-67de-4bac-a662-7b8023153636', '9f7b6440-e7fb-4daa-b582-cc3c8d2d76c3', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'همایش ها', NULL, NULL, 1, '2025-07-26 10:15:22', '2025-07-26 10:15:22'),
('9f7b6f2a-235e-4530-a564-d61fd5bc20d6', '9f7b6440-e7fb-4daa-b582-cc3c8d2d76c3', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'سمینارها', NULL, NULL, 1, '2025-07-26 10:15:48', '2025-07-26 10:15:48'),
('9f7b6f48-3c31-493b-b61e-6f9f6d16b8e7', '9f7b6440-e7fb-4daa-b582-cc3c8d2d76c3', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'نمایشگاه ها', NULL, NULL, 1, '2025-07-26 10:16:07', '2025-07-26 10:16:07'),
('9f7b6f7f-65c8-438d-8645-2b7f2297a643', '9f7b647b-a8dc-427e-9c8d-a0312286acd6', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'درخواست مشاوره عضویت انجمن صنفی مدیران مراکز دانش بنیانی', NULL, NULL, 1, '2025-07-26 10:16:44', '2025-07-26 10:16:44'),
('9f7b6fa3-94f4-42cf-92a1-dcd67f11402f', '9f7b647b-a8dc-427e-9c8d-a0312286acd6', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'درخواست مشاوره دانش بنیانی معاونت علمی', NULL, NULL, 1, '2025-07-26 10:17:07', '2025-07-26 10:17:07'),
('9f7b7034-8e0c-4178-9ffc-375ecc471b9a', '9f7b64bd-aae0-46b0-bc74-2e42627abd10', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'ارائه کارت شهروند الکترونیک', NULL, NULL, 1, '2025-07-26 10:18:42', '2025-07-26 10:18:42'),
('9f7b705c-e238-4ffd-a103-d175bbd11670', '9f7b64bd-aae0-46b0-bc74-2e42627abd10', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'گشایش دفاتر', NULL, NULL, 1, '2025-07-26 10:19:09', '2025-07-26 10:19:09'),
('9f7b708f-87cd-414b-ac16-e2b468de2c87', '9f7b64bd-aae0-46b0-bc74-2e42627abd10', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'ثبت بین الملل', NULL, NULL, 1, '2025-07-26 10:19:42', '2025-07-26 10:19:42'),
('9f7b70b2-e9cd-4cda-8e23-2bd85e1a2921', '9f7b64bd-aae0-46b0-bc74-2e42627abd10', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'صدور ایزو بین الملل', NULL, NULL, 1, '2025-07-26 10:20:05', '2025-07-26 10:20:05'),
('9f7b70d4-4fd6-4634-b0be-a221b0ea9c99', '9f7b64bd-aae0-46b0-bc74-2e42627abd10', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'اعزام نیروی کار و کاریابی خارجی', NULL, NULL, 1, '2025-07-26 10:20:27', '2025-07-26 10:20:27'),
('9f7b70fc-6ea6-49ac-8a88-5c8975d52db8', '9f7b64bd-aae0-46b0-bc74-2e42627abd10', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'رویدادهای بین المللی', NULL, NULL, 1, '2025-07-26 10:20:53', '2025-07-26 10:20:53'),
('9f7b7135-248b-4a96-bcb0-122e06984003', '9f7b64bd-aae0-46b0-bc74-2e42627abd10', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'مشاوره روادید', NULL, NULL, 1, '2025-07-26 10:21:31', '2025-07-26 10:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `service_requests`
--

CREATE TABLE `service_requests` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','in_progress','approved','rejected','completed','cancelled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `admin_notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rejection_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
('9efcd74a-ed25-47db-ad3e-35f8e72640d7', 'payment_gateway_type', 'zarinpal', '2025-05-24 11:56:49', '2025-05-24 12:15:34'),
('9efcd8db-779e-4633-a6c4-33c52beb454b', 'payment_gateway_status', '1', '2025-05-24 12:01:12', '2025-05-25 05:50:37'),
('9efcdb88-8418-4f33-9a67-c28e2c3cfafb', 'merchantId', '5d89df5c-42cf-42b1-ad90-9d528ec1be7f', '2025-05-24 12:08:41', '2025-05-24 12:09:13'),
('9efcdfbd-6e67-4633-90ed-90ec388f6c6d', 'payment_gateway_unit', 'IRR', '2025-05-24 12:20:26', '2025-05-24 12:21:48'),
('9efe48ef-0b53-44c9-8b00-2d37e8e3f18e', 'apiKey', 'Bearer 5NLyGLqcrFO7PiTFgvvygkRL0QcCd9kDaDVVMJcoXQE=', '2025-05-25 05:10:25', '2025-06-15 11:46:11'),
('9efe49da-01e4-4a31-b271-79665eec440b', 'originator', '+983000505', '2025-05-25 05:12:59', '2025-05-25 05:13:22'),
('9efe49da-08ae-48b3-b051-7148672fdc97', 'patternCode', '802819', '2025-05-25 05:12:59', '2025-06-15 11:46:11'),
('9efe4b37-a212-459a-9292-41c88ef7756d', 'sms_status', '1', '2025-05-25 05:16:48', '2025-05-25 05:51:19'),
('9f1c955f-a64c-4996-8c8c-b0a22052d3ab', 'company_name', 'سامانه ایونتیار', '2025-06-09 06:38:59', '2025-08-02 06:02:48'),
('9f1c955f-ab47-41de-b341-383f8f44511b', 'company_content', 'راه حل هوشمند شما', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f1c955f-acae-4567-9057-fec857f04904', 'company_address', 'تهران ، بلوار نلسون ماندلا ، پایینتر از چهارراه جهان کودک نرسیده به میدان آرژانتین ، روبروی وزارت راه و‌شهرسازی ، کوچه حکمت پلاک ۲', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f1c955f-add7-48e5-86ae-4963a4e598d7', 'company_phone', '02188871006-8', '2025-06-09 06:38:59', '2025-06-09 06:46:28'),
('9f1c955f-aef3-4023-81d6-d699f0973951', 'company_fax', '02188640230', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f1c955f-afda-466e-a9c4-b8ac85b5bc68', 'company_mobile', '09121234567', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f1c955f-b0be-4b1d-bb2a-1cf01d338e29', 'company_email', 'info@emigroup.ir', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f208fb2-5507-4c18-9821-c6a2d980adfb', 'login_type', 'mobile', '2025-06-11 06:06:25', '2025-06-11 10:54:33'),
('9f209f58-d9ff-4ca2-bb53-2b8ff3b18557', 'mail_mailer', 'smtp', '2025-06-11 06:50:11', '2025-06-11 10:54:07'),
('9f209f58-e134-4da8-8425-c7ed7d08b6aa', 'mail_host', 'sandbox.smtp.mailtrap.io', '2025-06-11 06:50:11', '2025-06-11 10:52:12'),
('9f209f58-e26f-45fb-95bc-488826624d11', 'mail_port', '2525', '2025-06-11 06:50:11', '2025-06-11 10:52:12'),
('9f209f58-e382-4b2f-8388-c0dd89c4e03d', 'mail_encryption', 'tls', '2025-06-11 06:50:11', '2025-06-11 06:50:11'),
('9f209f58-e492-40e6-8fc8-2449a0e09340', 'mail_username', '474606e0f2e747', '2025-06-11 06:50:11', '2025-06-11 10:52:12'),
('9f209f58-e5f7-43bb-a6ae-44f67bbc041c', 'mail_password', '72a2a5c98c6eb5', '2025-06-11 06:50:11', '2025-06-11 10:52:12'),
('9f209f58-e729-4920-bd28-1597ad9d63c4', 'mail_from_address', 'test@gmail.com', '2025-06-11 06:50:11', '2025-06-11 06:50:11'),
('9f209f58-e842-479b-a106-422938d4bf49', 'mail_from_name', 'تاک', '2025-06-11 06:50:11', '2025-06-11 06:50:11'),
('9f892971-08e6-454f-9891-47c857c7e7f3', 'PUSHER_APP_ID', NULL, '2025-08-02 06:02:26', '2025-08-02 06:02:26'),
('9f892971-8679-43c2-ad09-b94e94329d57', 'PUSHER_APP_KEY', NULL, '2025-08-02 06:02:26', '2025-08-02 06:02:26'),
('9f892971-8881-4a1c-b8cd-c5903ac4b1da', 'PUSHER_APP_SECRET', NULL, '2025-08-02 06:02:26', '2025-08-02 12:12:54'),
('9f892971-8a5e-4c78-8a2f-fd76f2f53bc4', 'PUSHER_APP_CLUSTER', NULL, '2025-08-02 06:02:26', '2025-08-02 06:02:26'),
('9f892971-8c53-4eb0-bf74-ac880eb635d2', 'PUSHER_PORT', NULL, '2025-08-02 06:02:26', '2025-08-02 06:02:26'),
('9f892971-8de3-4025-a3ec-3ad8c1f4f7aa', 'PUSHER_SCHEME', NULL, '2025-08-02 06:02:26', '2025-08-02 06:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `link`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'گالری ۱', 'uploads/sliders/1753692584_63dee3c5-caa8-4051-89ab-34d02c43d942.jfif', NULL, 0, 1, '2025-07-28 08:49:44', '2025-07-28 08:49:44'),
(6, 'گالری ۲', 'uploads/sliders/1753692611_03753809-3ac3-48dc-a64e-ebc4357786e7.jfif', NULL, 0, 1, '2025-07-28 08:50:11', '2025-07-28 08:50:11'),
(7, 'گالری ۳', 'uploads/sliders/1753692620_58b802ea-59a7-4964-8e8b-db9246541f1c.jfif', NULL, 0, 1, '2025-07-28 08:50:20', '2025-07-28 08:50:20'),
(9, 'گالری ۴', 'uploads/sliders/1753692647_05adb413-a898-4ae2-929d-83022c517e93.jfif', NULL, 0, 1, '2025-07-28 08:50:47', '2025-07-28 08:50:47'),
(10, 'گالری ۵', 'uploads/sliders/1753692662_f276e6bc-f2f6-4e31-9c3f-0038119c4e5b.jfif', NULL, 0, 1, '2025-07-28 08:51:02', '2025-07-28 08:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `duration_days` int NOT NULL,
  `service_limit` int NOT NULL DEFAULT '0',
  `is_active` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `icon`, `name`, `price`, `duration_days`, `service_limit`, `is_active`, `created_at`, `updated_at`) VALUES
('9efcb3e7-2f53-4ca8-952e-02230802a6fe', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m10.051 8.102-3.778.322-1.994 1.994a.94.94 0 0 0 .533 1.6l2.698.316m8.39 1.617-.322 3.78-1.994 1.994a.94.94 0 0 1-1.595-.533l-.4-2.652m8.166-11.174a1.366 1.366 0 0 0-1.12-1.12c-1.616-.279-4.906-.623-6.38.853-1.671 1.672-5.211 8.015-6.31 10.023a.932.932 0 0 0 .162 1.111l.828.835.833.832a.932.932 0 0 0 1.111.163c2.008-1.102 8.35-4.642 10.021-6.312 1.475-1.478 1.133-4.77.855-6.385Zm-2.961 3.722a1.88 1.88 0 1 1-3.76 0 1.88 1.88 0 0 1 3.76 0Z\"/>\r\n</svg>', 'عضویت طلایی', 2000000, 180, 5, 1, '2025-05-24 10:17:52', '2025-07-13 16:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `useddiscounts`
--

CREATE TABLE `useddiscounts` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` int UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_online` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `device_token`, `email`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`, `is_online`) VALUES
('9efc463a-7c58-4f5b-a649-cc59dc48b599', 'fHw-j7k4DKfnrOZMarlski:APA91bEekRnB_a_4nHK9wvvexKviIPV2x_FPq_u6i5yVD0JHG7_veOKjedLtt7Tj4pkOcp-iXMWxfXT49QtGXw7Ta4wlsbb6vvEA05bbasY1WKaj2cPJ3-M', 'ehsan.bavaghar1989@gmail.com', '09191816172', '$2y$10$ATTTmZlTxthh9sQEFM/Lg.qZltagkGeORF3GirwZR8NRCskcASt/e', NULL, '2025-05-24 05:11:11', '2025-08-02 15:12:37', 0),
('9f81e4b6-7da6-47ff-b50f-205507c260e0', NULL, 'test@gmail.com', '09121234567', NULL, NULL, '2025-07-29 15:19:27', '2025-08-02 11:15:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_daily_limits`
--

CREATE TABLE `user_daily_limits` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `searches_count` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

CREATE TABLE `user_documents` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('real','legal') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `needs_correction` tinyint NOT NULL DEFAULT '0',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_documents`
--

INSERT INTO `user_documents` (`id`, `user_id`, `type`, `first_name`, `last_name`, `mobile`, `company_name`, `national_id`, `company_address`, `is_verified`, `needs_correction`, `description`, `created_at`, `updated_at`) VALUES
(12, '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'real', 'احسان', 'باوقار', '09191816172', NULL, '4310155901', NULL, 1, 0, NULL, '2025-07-14 11:36:02', '2025-07-14 11:36:19'),
(16, '9f81e4b6-7da6-47ff-b50f-205507c260e0', 'real', 'علی', 'محمدی', '09121234567', NULL, '4310155902', NULL, 1, 0, NULL, '2025-07-14 11:36:02', '2025-07-14 11:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_subscriptions`
--

CREATE TABLE `user_subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `starts_at` timestamp NOT NULL,
  `ends_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_subscriptions`
--

INSERT INTO `user_subscriptions` (`id`, `user_id`, `subscription_id`, `starts_at`, `ends_at`, `created_at`) VALUES
(45, '9efc463a-7c58-4f5b-a649-cc59dc48b599', '9efcb3e7-2f53-4ca8-952e-02230802a6fe', '2025-07-25 08:06:54', '2026-01-21 08:06:54', '2025-07-25 08:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_subscription_usages`
--

CREATE TABLE `user_subscription_usages` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_subscription_id` bigint UNSIGNED NOT NULL,
  `used_services` int NOT NULL DEFAULT '0',
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_subscription_usages`
--

INSERT INTO `user_subscription_usages` (`id`, `user_id`, `user_subscription_id`, `used_services`, `used`, `created_at`, `updated_at`) VALUES
(3, '9efc463a-7c58-4f5b-a649-cc59dc48b599', 45, 1, 0, '2025-07-25 08:06:54', '2025-07-25 08:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_transactions`
--

CREATE TABLE `wallet_transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `wallet_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('credit','debit') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_slug_unique` (`slug`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_values_slug_attribute_id_unique` (`slug`,`attribute_id`),
  ADD UNIQUE KEY `attribute_values_slug_unique` (`slug`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cars_slug_unique` (`slug`);

--
-- Indexes for table `car_attribute_values`
--
ALTER TABLE `car_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_attribute_values_car_id_attribute_id_unique` (`car_id`,`attribute_id`),
  ADD KEY `car_attribute_values_attribute_value_id_foreign` (`attribute_value_id`),
  ADD KEY `car_attribute_values_attribute_id_attribute_value_id_index` (`attribute_id`,`attribute_value_id`),
  ADD KEY `car_attribute_values_value_number_index` (`value_number`);

--
-- Indexes for table `car_files`
--
ALTER TABLE `car_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_file_items`
--
ALTER TABLE `car_file_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_file_items_car_file_id_foreign` (`car_file_id`);

--
-- Indexes for table `car_file_item_values`
--
ALTER TABLE `car_file_item_values`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_file_item_values_car_id_car_file_item_id_unique` (`car_id`,`car_file_item_id`),
  ADD KEY `car_file_item_values_car_file_item_id_foreign` (`car_file_item_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `conversations_user_id_advisor_id_unique` (`user_id`,`advisor_id`),
  ADD KEY `conversations_advisor_id_foreign` (`advisor_id`);

--
-- Indexes for table `conversation_user_statuses`
--
ALTER TABLE `conversation_user_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversation_user_statuses_conversation_id_foreign` (`conversation_id`),
  ADD KEY `conversation_user_statuses_user_id_foreign` (`user_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_files`
--
ALTER TABLE `document_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_files_user_document_id_foreign` (`user_document_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_contact_id_foreign` (`contact_id`),
  ADD KEY `events_type_id_foreign` (`type_id`),
  ADD KEY `events_user_id_foreign` (`user_id`);

--
-- Indexes for table `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_types_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_conversation_id_foreign` (`conversation_id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`),
  ADD KEY `pages_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_transaction_id_unique` (`transaction_id`),
  ADD UNIQUE KEY `authority` (`authority`),
  ADD UNIQUE KEY `factor_id` (`invoice_number`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_user_subscription_id_foreign` (`user_subscription_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referrals_inviter_id_foreign` (`inviter_id`),
  ADD KEY `referrals_invitee_id_foreign` (`invitee_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_requests_user_id_foreign` (`user_id`),
  ADD KEY `service_requests_service_id_foreign` (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useddiscounts`
--
ALTER TABLE `useddiscounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_daily_limits`
--
ALTER TABLE `user_daily_limits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_daily_limits_user_id_date_unique` (`user_id`,`date`);

--
-- Indexes for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_documents_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_services_user_id_foreign` (`user_id`),
  ADD KEY `user_services_service_id_foreign` (`service_id`);

--
-- Indexes for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_subscriptions_user_id_foreign` (`user_id`),
  ADD KEY `user_subscriptions_subscription_id_foreign` (`subscription_id`);

--
-- Indexes for table `user_subscription_usages`
--
ALTER TABLE `user_subscription_usages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_subscription_usages_user_id_foreign` (`user_id`),
  ADD KEY `user_subscription_usages_user_subscription_id_foreign` (`user_subscription_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_user_id_foreign` (`user_id`);

--
-- Indexes for table `wallet_transactions`
--
ALTER TABLE `wallet_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallet_transactions_wallet_id_foreign` (`wallet_id`),
  ADD KEY `wallet_transactions_payment_id_foreign` (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `car_attribute_values`
--
ALTER TABLE `car_attribute_values`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `car_files`
--
ALTER TABLE `car_files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_file_items`
--
ALTER TABLE `car_file_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `car_file_item_values`
--
ALTER TABLE `car_file_item_values`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2526;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document_files`
--
ALTER TABLE `document_files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_types`
--
ALTER TABLE `event_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_daily_limits`
--
ALTER TABLE `user_daily_limits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_subscription_usages`
--
ALTER TABLE `user_subscription_usages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallet_transactions`
--
ALTER TABLE `wallet_transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `car_attribute_values`
--
ALTER TABLE `car_attribute_values`
  ADD CONSTRAINT `car_attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `car_attribute_values_attribute_value_id_foreign` FOREIGN KEY (`attribute_value_id`) REFERENCES `attribute_values` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `car_attribute_values_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `car_file_items`
--
ALTER TABLE `car_file_items`
  ADD CONSTRAINT `car_file_items_car_file_id_foreign` FOREIGN KEY (`car_file_id`) REFERENCES `car_files` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `car_file_item_values`
--
ALTER TABLE `car_file_item_values`
  ADD CONSTRAINT `car_file_item_values_car_file_item_id_foreign` FOREIGN KEY (`car_file_item_id`) REFERENCES `car_file_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `car_file_item_values_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_advisor_id_foreign` FOREIGN KEY (`advisor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `conversations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `conversation_user_statuses`
--
ALTER TABLE `conversation_user_statuses`
  ADD CONSTRAINT `conversation_user_statuses_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `conversation_user_statuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `document_files`
--
ALTER TABLE `document_files`
  ADD CONSTRAINT `document_files_user_document_id_foreign` FOREIGN KEY (`user_document_id`) REFERENCES `user_documents` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `events_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `event_types` (`id`),
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_subscription_id_foreign` FOREIGN KEY (`user_subscription_id`) REFERENCES `user_subscriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `referrals`
--
ALTER TABLE `referrals`
  ADD CONSTRAINT `referrals_invitee_id_foreign` FOREIGN KEY (`invitee_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `referrals_inviter_id_foreign` FOREIGN KEY (`inviter_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `services` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD CONSTRAINT `service_requests_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_daily_limits`
--
ALTER TABLE `user_daily_limits`
  ADD CONSTRAINT `user_daily_limits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD CONSTRAINT `user_documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_services`
--
ALTER TABLE `user_services`
  ADD CONSTRAINT `user_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD CONSTRAINT `user_subscriptions_subscription_id_foreign` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_subscription_usages`
--
ALTER TABLE `user_subscription_usages`
  ADD CONSTRAINT `user_subscription_usages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_subscription_usages_user_subscription_id_foreign` FOREIGN KEY (`user_subscription_id`) REFERENCES `user_subscriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wallets`
--
ALTER TABLE `wallets`
  ADD CONSTRAINT `wallets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wallet_transactions`
--
ALTER TABLE `wallet_transactions`
  ADD CONSTRAINT `wallet_transactions_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `wallet_transactions_wallet_id_foreign` FOREIGN KEY (`wallet_id`) REFERENCES `wallets` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
