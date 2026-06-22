-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 12:17 PM
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
-- Database: `mobile_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `fullname`, `mobile`, `address`, `city`, `state`, `pincode`, `landmark`, `created_at`, `updated_at`) VALUES
(4, 1, 'Jinal Dabhi', '9023093861', 'umiya park society', 'limbdi', 'gujarat', '363421', 'near national high way', '2026-05-28 23:17:13', '2026-05-28 23:17:13'),
(5, 1, 'Jinal', '1234567890', 'chamunda park', 'limbdi', 'gujarat', '363421', 'near national high way', '2026-05-28 23:18:01', '2026-05-28 23:18:01'),
(6, 1, 'Jinal Dabhi', '9023093861', 'chamunda park  society', 'rajkot', 'gujarat', '303231', 'near national high way', '2026-06-04 11:06:50', '2026-06-04 11:06:50'),
(7, 1, 'Jinal Dabhi', '9023093861', 'chamunda park', 'rajkot', 'gujarat', '363421', 'near national high way', '2026-06-04 11:16:40', '2026-06-04 11:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `qty`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 1, '2026-05-25 23:50:48', '2026-05-25 23:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vivo', '1779770068.svg', 'Active', '2026-05-25 23:04:28', '2026-05-25 23:04:28'),
(3, 'Samsung', '1779770129.jpg', 'Active', '2026-05-25 23:05:29', '2026-05-25 23:05:29'),
(4, 'Oppo', '1779770153.png', 'Active', '2026-05-25 23:05:53', '2026-05-25 23:05:53'),
(5, 'Apple', '1779770170.png', 'Active', '2026-05-25 23:06:10', '2026-05-25 23:06:10'),
(6, 'Motorola', '1779770188.png', 'Active', '2026-05-25 23:06:28', '2026-05-25 23:06:28'),
(7, 'OnePlus', '1779770210.png', 'Active', '2026-05-25 23:06:50', '2026-05-25 23:06:50'),
(8, 'Realme', '1779770240.png', 'Active', '2026-05-25 23:07:20', '2026-05-25 23:07:20'),
(9, 'Xiaomi', '1779770266.png', 'Active', '2026-05-25 23:07:46', '2026-05-25 23:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Jinal Dabhi', 'jinaldabhi1811@gmail.com', 'test', 'test message', '2026-05-26 00:17:02', '2026-05-26 00:17:02');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_05_15_054729_create_category_table', 1),
(5, '2026_05_17_124255_create_product_table', 1),
(6, '2026_05_18_053216_create_contact_table', 1),
(7, '2026_05_19_054018_create_cart_table', 1),
(8, '2026_05_23_162259_create_reviews_table', 1),
(9, '2026_05_23_171642_create_orders_table', 1),
(10, '2026_05_29_042406_create_address_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `product_name`, `product_img`, `price`, `status`, `created_at`, `updated_at`, `payment_id`, `qty`) VALUES
(1, 1, 2, 'Vivo V70', '1779770661.webp', 59999, 'Paid', '2026-05-26 00:08:14', '2026-05-26 00:08:14', NULL, NULL),
(2, 1, 1, 'iPhone 15 Pro Max', '1779770554.webp', 88999, 'Paid', '2026-05-26 00:11:30', '2026-05-26 00:11:30', 'pay_Stsg1c1FOaVygZ', 1),
(3, 1, 3, 'samsung s25 5g ultra', '1779770754.webp', 103499, 'Paid', '2026-05-26 00:15:21', '2026-05-26 00:15:21', 'pay_Stsk5fkqrZbO2O', 1),
(4, 1, 1, 'iPhone 15 Pro Max', '1779770554.webp', 88999, 'Paid', '2026-06-04 11:18:33', '2026-06-04 11:18:33', 'pay_Sxcqoc9SOu8r5p', 1);

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `description`, `price`, `qty`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'iPhone 15 Pro Max', 'Display: 6.7-inch Super Retina XDR OLED (up to 120Hz)Weight: 221 grams (lighter than the 14 Pro Max)Battery: All-day battery life (up to 29 hours of video playback)Storage Options: 256 GB, 512 GB, 1 TBCamera System: 48 MP Main, 12 MP Ultra Wide, and 12 MP 5x Telephoto', 88999, 10, '1779770554.webp', 'Active', '2026-05-25 23:12:34', '2026-05-25 23:12:34'),
(2, 1, 'Vivo V70', 'Display: 6.59\" AMOLED, 120Hz refresh rate, 1.5K resolution (1260 x 2750)Processor: Snapdragon 7 Gen 4Storage & RAM: 256GB/512GB Storage | 8GB/12GB RAMRear Cameras: 50MP Main (ZEISS OIS) + 50MP Super Telephoto + 8MP Ultra-WideFront Camera: 50MP ZEISS CameraBattery & Charging: 6500 mAh (BlueVolt Battery) with 90W FlashChargeDurability: IP68/IP69 Dust and Water ResistanceOS: OriginOS 6 (based on Android 16)', 59999, 15, '1779770661.webp', 'Active', '2026-05-25 23:14:21', '2026-05-25 23:14:21'),
(3, 3, 'samsung s25 5g ultra', 'Display: 6.9-inch Dynamic LTPO AMOLED 2X, up to 120Hz refresh rate, 2,600 nits peak brightnessProcessor: Qualcomm Snapdragon 8 Elite (3 nm)RAM & Storage: 12GB RAM with 256GB, 512GB, or 1TB storage optionsRear Cameras: 200MP Main (OIS), 50MP Ultra-Wide, 50MP Periscope (5x optical zoom), and 10MP Telephoto (3x optical zoom)Front Camera: 12MPBattery & Charging: 5,000 mAh capacity with 45W wired and 25W wireless chargingBuild: Grade 5 Titanium frame with Corning Gorilla Armor 2Durability: IP68 water and dust resistanceSpecial Features: Built-in S-Pen and Satellite Link capability', 103499, 5, '1779770754.webp', 'Active', '2026-05-25 23:15:54', '2026-05-25 23:15:54'),
(4, 1, 'Vivo V50 5g', 'Storage capacity: The device offers 256GB of internal storage for apps, media, and files.\r\nBiometric security: A circular fingerprint sensor is included for device unlocking and authentication.\r\nPros: Reviewers frequently praise the long-lasting battery life and fast charging capabilities\r\nCons: Some reviews report serious issues with app crashes, performance lag, and overheating', 38999, 5, '1781699450.webp', 'Active', '2026-06-17 07:00:50', '2026-06-17 07:00:50'),
(5, 7, 'OnePlus 12 5G', 'Display resolution: The 6.82-inch AMOLED screen features a 3168x1440 pixel resolution, delivering high-definition visuals for media consumption.\r\nTriple-camera system: The rear camera module consists of 50MP, 64MP, and 48MP sensors, providing versatile options for photography.\r\nPros: Reviews mention exceptional performance for gaming and incredibly fast charging capabilities\r\nCons: Some reviews note the device is a bit heavy and can feel slippery in the hand', 49489, 3, '1781699550.webp', 'Active', '2026-06-17 07:02:30', '2026-06-17 07:02:30'),
(6, 6, 'MOTOROLA Edge 60 Fusion', 'Display technology: The device features a 6.67-inch pOLED screen offering high contrast and power efficiency.\r\nProcessing hardware: Performance is driven by the MediaTek Dimensity 7400 system-on-chip, built for 5G connectivity.\r\nPros: Users appreciate the long battery life and find the large, bright display very appealing\r\nCons: Some reviews report severe overheating during routine tasks and disappointing camera performance', 20900, 2, '1781699662.jpg', 'Active', '2026-06-17 07:04:22', '2026-06-17 07:04:22'),
(7, 4, 'Oppo Reno14 5g', 'Internal storage capacity: The device is equipped with 256GB of internal storage for applications, media, and files.\r\nSystem memory: This model features 8GB of RAM to support multitasking and application performance.\r\nPros: Reviewers praise the stunning display, smooth performance, and high-quality camera system\r\nCons: Some reviews highlight concerns regarding battery efficiency and noticeable heating during use', 39999, 4, '1781699922.webp', 'Active', '2026-06-17 07:08:42', '2026-06-17 07:08:42'),
(8, 7, 'OnePlus Nord CE6', 'Brand\r\nOnePlus\r\nOperating System\r\nAndroid\r\nSmartphone\r\nYes\r\nSIM Slots\r\nDual SIM\r\nQuad-band\r\nYes\r\nConnector Type\r\nUSB-C\r\nColour\r\nPitch Black\r\nWater Resistant\r\nYes\r\nWith Fast Charging\r\nYes\r\nWith OLED Display\r\nYes\r\nBroadband Generation\r\n5G\r\nLens Type\r\nWide Angle\r\nScreen Size\r\n6.8 inches screen\r\nWeight\r\n215 grams\r\nStorage Capacity\r\n128 GB\r\nRear Camera Resolution\r\n50 MP Rear Camera\r\nFront Camera Resolution\r\n32 MP Front Camera\r\nRAM\r\nRAM: 8 GB', 32323, 2, '1781700991.webp', 'Active', '2026-06-17 07:26:31', '2026-06-17 07:26:31'),
(9, 8, 'Realme 11 Pro 5G', 'Internal storage capacity: The device comes equipped with 256GB of internal storage for data and applications.\r\nRAM configuration: This model features 12GB of RAM to manage multitasking and system performance.\r\nPros: Users frequently mention the 100MP camera produces sharp, detailed images in daylight\r\nCons: Some reviews note the software feels bloated, occasionally causing the interface to freeze', 31999, 3, '1781701408.webp', 'Active', '2026-06-17 07:33:28', '2026-06-17 07:33:28'),
(10, 4, 'Oppo F21 Pro', 'Expandable storage capacity: The device supports external memory cards up to 1TB in addition to its 128GB internal storage.\r\nDisplay technology: The 6.43-inch screen utilizes AMOLED technology to deliver a resolution of 1080x2400 pixels.\r\nPros: Reviews mention a vibrant display and a unique camera microlens for microscopic shots\r\nCons: One review mentions LTE bands do not match US carriers, limiting connectivity there', 31999, 3, '1781701848.webp', 'Active', '2026-06-17 07:40:48', '2026-06-17 07:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `name`, `review`, `created_at`, `updated_at`) VALUES
(1, 2, 'jinal', 'best 👍', '2026-06-22 03:53:18', '2026-06-22 03:53:18');

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
('lyL5Xf3HTn1u2usLfXvDrUfHeyiGOwxn4rr0UBQV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiakZCZ2U2QkdESWlyM2xWQW9GQUJHbmExWHV5OWFsMldrMFdIMGtTRSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG9wX2RldGFpbC8xIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1782122920);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `user_type` enum('1','2') NOT NULL DEFAULT '2' COMMENT '1.Admin 2.User',
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `user_type`, `password`, `created_at`, `updated_at`) VALUES
(1, 'jinal', 'jinal@gmail.com', '9023093861', '2', '$2y$12$2WwQitb.IdzpbgWBM3Ow8.tmqMB6GxiEdCubzj0Iv8XK/vOZq15pK', '2026-05-25 22:56:35', '2026-05-25 22:56:35'),
(2, 'bansi', 'bansi@gmail.com', '9023093851', '2', '$2y$12$oCOgmUscF2/1k5R5chA0dODbHjRtycr4Zvn78nrMEf2JahaaPn4Q6', '2026-05-25 22:57:06', '2026-05-25 22:57:50'),
(3, 'Admin', 'admin@gmail.com', '1234567890', '1', '$2y$12$kxc3gwwc.YhAmJR90VdexeyT13z.Xh7AsLHSTT20cquMcPRoak/6u', '2026-05-25 22:58:43', '2026-05-25 22:58:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
