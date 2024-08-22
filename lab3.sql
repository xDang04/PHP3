-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2024 at 02:30 PM
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
-- Database: `lab3`
--

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_20_102511_create_products_table', 1),
(6, '2024_07_20_115208_create_orders_table', 1),
(7, '2024_07_20_115508_create_orders_detail_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `totalPrice` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `created_at`, `updated_at`, `totalPrice`) VALUES
(16, 35, '2024-05-14 05:34:18', '1988-11-07 09:09:14', 4.40),
(17, 41, '2000-07-24 19:12:08', '1983-11-24 06:51:52', 16.20),
(18, 38, '1992-09-11 13:44:51', '1980-09-03 09:10:49', 8.10),
(19, 46, '1989-11-25 20:54:08', '1985-11-30 15:37:28', 1.50),
(20, 38, '2012-03-10 09:46:25', '1978-03-13 06:20:26', 12.50),
(21, 44, '2011-11-18 02:06:59', '1985-04-30 09:17:59', 3.70),
(22, 48, '1991-11-30 16:37:02', '1983-02-14 03:30:48', 10.50),
(23, 41, '2016-02-22 09:37:29', '2001-12-14 09:52:55', 3.60),
(24, 47, '1986-06-13 15:02:46', '1986-12-03 09:04:51', 5.20),
(25, 46, '2014-09-03 18:50:37', '1982-07-05 04:17:43', 3.10),
(26, 45, '2016-07-03 11:59:55', '2006-11-21 11:38:53', 18.40),
(27, 45, '2019-02-14 18:54:02', '1980-12-17 22:17:43', 6.60),
(28, 37, '2022-08-06 14:37:19', '1997-11-17 21:01:36', 10.70),
(29, 38, '2020-10-12 08:14:20', '2013-06-06 16:31:31', 19.90),
(30, 49, '1977-12-14 03:12:58', '2022-03-29 18:13:19', 14.60);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `orders_detail_id` int UNSIGNED NOT NULL,
  `order_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`orders_detail_id`, `order_id`, `created_at`, `updated_at`, `product_id`, `quantity`, `price`) VALUES
(1, 30, '2022-03-21 07:25:11', '2003-06-25 15:01:59', 27, 247739, 32.20),
(2, 18, '1990-02-28 15:28:22', '2018-03-09 16:57:45', 17, 87336, 10.00),
(3, 23, '2005-01-29 17:55:14', '2006-04-17 07:06:41', 25, 8503338, 23.90),
(4, 22, '2004-07-27 09:02:32', '2010-01-04 01:31:59', 25, 357, 37.10),
(5, 22, '2016-03-29 12:48:36', '1979-03-17 01:37:39', 25, 78, 2.40),
(6, 27, '2003-03-09 00:21:14', '1977-07-07 08:59:27', 20, 6, 18.90),
(7, 26, '2021-05-11 04:41:39', '2005-01-29 00:38:20', 27, 867215628, 31.70),
(8, 24, '2002-01-13 01:50:43', '2014-01-25 17:06:45', 29, 4, 39.30),
(9, 27, '2005-09-06 09:46:59', '2015-12-10 12:55:41', 18, 23323, 45.60),
(10, 22, '1970-08-14 18:01:22', '2023-11-07 21:39:06', 30, 722348, 23.60),
(11, 21, '1990-03-12 15:49:13', '1977-07-05 03:20:02', 25, 7069221, 46.40),
(12, 21, '1976-07-17 12:08:33', '2011-04-29 19:16:28', 23, 7, 32.60),
(13, 22, '2005-04-18 19:12:52', '1983-11-23 12:36:19', 26, 9, 8.30),
(14, 27, '1975-05-17 23:23:24', '2006-10-29 18:48:41', 22, 7362, 9.40),
(15, 16, '2021-11-13 23:02:57', '2023-09-02 21:51:21', 21, 60, 36.60);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(10,2) NOT NULL DEFAULT '800.02'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `created_at`, `updated_at`, `description`, `price`) VALUES
(16, 'Aniya', '1985-08-25 23:29:43', '2000-10-20 04:21:33', 'Alias ea laudantium qui nisi. Aut pariatur cupiditate eligendi enim. Labore quis similique fuga at quos non rem.', 12.61),
(17, 'Victoria', '1988-07-14 03:05:52', '1982-01-11 10:30:59', 'Quibusdam repudiandae velit enim sed et non sint. Non doloribus omnis qui voluptatem ex voluptatem. Rerum et beatae blanditiis nam excepturi accusamus voluptatem. Corporis rem et libero nostrum.', 3.62),
(18, 'Tanya', '1977-03-14 01:42:04', '1970-02-18 22:03:37', 'Occaecati doloribus id a pariatur consequuntur itaque rerum numquam. Facere aut ea et eaque perspiciatis hic nemo enim. Excepturi ea nemo voluptatem id fuga quo.', 47.46),
(19, 'Arvid', '1989-06-24 11:15:09', '1980-10-11 13:19:47', 'Excepturi et et modi harum voluptas excepturi. Qui ut et tenetur voluptatem. Eligendi facere quod rerum velit accusamus est sit. Omnis accusamus laborum sunt et optio voluptatum porro.', 31.17),
(20, 'Jade', '2002-01-07 17:45:55', '1982-06-27 04:57:37', 'Aliquam autem distinctio mollitia ducimus iste. Voluptates omnis aut aspernatur officiis. Dolor enim dolores earum. Voluptas reprehenderit qui amet ea accusantium.', 18.78),
(21, 'Jeramy', '2018-01-22 10:07:31', '2013-07-03 02:47:27', 'Et qui est totam voluptatem hic. Necessitatibus et debitis error error in expedita mollitia ipsam. Explicabo saepe praesentium modi numquam soluta autem. Illum voluptate deleniti alias qui a.', 6.57),
(22, 'Jensen', '2005-02-11 09:05:18', '1994-11-14 23:00:33', 'Quo voluptates praesentium adipisci quo quia ab. Soluta animi quos nihil dolores.', 13.11),
(23, 'Amani', '1991-04-23 15:00:33', '2022-09-14 01:43:08', 'Et aliquam vel nihil itaque rem. Accusantium eius reiciendis et. Totam cum exercitationem quam voluptas laboriosam.', 45.08),
(24, 'Chanel', '1999-03-11 12:18:56', '2000-02-11 21:12:45', 'Eligendi consequatur odio incidunt voluptatem minima beatae. Rerum dolor aperiam et recusandae molestiae. Eum est possimus non laborum quo.', 41.78),
(25, 'Jaunita', '1983-02-10 18:09:31', '2004-09-18 06:30:57', 'Laboriosam ex et velit itaque. Suscipit beatae dolores amet similique rem beatae nihil. Nulla totam sit possimus fugiat possimus autem. Omnis modi illum eaque excepturi quam officiis tenetur iste.', 17.55),
(26, 'Patience', '1989-10-23 00:08:31', '1980-09-22 23:34:14', 'Eveniet eum fugit earum et sed. Necessitatibus dignissimos ipsa sunt odio soluta aut quia. Minima nobis natus voluptatibus sapiente aut aspernatur et.', 12.96),
(27, 'Toney', '1972-05-09 03:17:24', '2008-09-24 18:06:12', 'Ad dolores qui necessitatibus. Minima et dignissimos possimus. Qui itaque provident id nisi dignissimos. Dolores provident sequi accusamus non molestiae. In et aut adipisci occaecati est.', 21.67),
(28, 'Brock', '2001-04-22 20:45:36', '2001-07-20 10:13:26', 'In porro dolores quis odio. Est et nisi eos quas. Praesentium beatae vitae dolor et delectus.', 24.54),
(29, 'Winfield', '2003-09-05 02:39:24', '2017-07-09 02:39:39', 'Repellat et sunt accusamus assumenda aut tempore voluptas. Saepe est ut non similique nihil aut ut. Et rem quia maiores sunt dolor autem debitis.', 36.35),
(30, 'Leonor', '2024-03-17 04:54:47', '1994-08-26 02:59:12', 'Eum facilis accusamus quidem adipisci. Quia voluptates voluptas laudantium laborum officiis nostrum ut. Consectetur ut voluptas nisi veritatis quae soluta.', 42.81);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`, `remember_token`, `address`, `phone`) VALUES
(35, 'hermann.elroy', 'cecile.gulgowski@example.net', '2024-07-20 06:58:18', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '1978-11-20 12:00:14', '1994-11-19 05:48:21', 'et', 'Port Myrtis', '(762) 514-6962'),
(36, 'toy.simeon', 'mireille75@example.org', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '2003-04-16 05:05:33', '1984-08-18 23:07:50', 'illum', 'New Jerrell', '240-429-4051'),
(37, 'jameson.bogisich', 'vdeckow@example.org', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '2006-05-09 00:22:27', '2023-09-10 22:36:57', 'corrupti', 'New Ethelyn', '+15854576121'),
(38, 'allie65', 'peggie60@example.net', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '2015-11-29 13:05:12', '1993-02-07 07:33:55', 'officia', 'New Nicoleview', '+19808143868'),
(39, 'beatrice.nicolas', 'htowne@example.org', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '2004-05-06 00:14:52', '1981-10-31 04:55:05', 'officia', 'Jeraldbury', '+1 (680) 899-0205'),
(40, 'jasper.labadie', 'alyson99@example.org', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '1975-12-26 20:13:51', '2015-03-16 02:51:17', 'qui', 'East D\'angeloside', '385.445.3613'),
(41, 'lueilwitz.christop', 'dleannon@example.net', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '1991-10-12 21:16:27', '1974-06-19 14:53:01', 'molestias', 'East Janafurt', '(331) 770-0577'),
(42, 'miller.darrick', 'mann.destiny@example.org', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '1977-06-19 16:57:42', '2002-11-28 21:59:19', 'labore', 'Edwardfurt', '530.699.0375'),
(43, 'pjacobi', 'lea.kuvalis@example.net', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '1993-10-30 05:36:57', '1983-10-13 11:53:36', 'doloremque', 'Estherview', '+1 (267) 979-9330'),
(44, 'jaquan96', 'buster.abernathy@example.org', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '1977-07-25 10:01:17', '1993-03-04 13:05:50', 'eius', 'New Loren', '+15859340559'),
(45, 'ycronin', 'alexandrea87@example.net', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '1995-11-24 23:49:34', '1996-05-04 18:03:30', 'in', 'West Willamouth', '1-801-842-5226'),
(46, 'heber48', 'immanuel.bogan@example.org', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '1991-08-07 12:37:38', '1975-12-30 13:53:56', 'dolor', 'South Timmothyside', '+1 (458) 852-5243'),
(47, 'nadia.mraz', 'tsipes@example.net', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '1982-09-28 14:30:25', '2007-05-27 10:06:01', 'aspernatur', 'Gloverfort', '+17817055876'),
(48, 'chelsey.welch', 'mwilkinson@example.org', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '2014-02-10 05:11:56', '1996-10-19 09:16:19', 'fuga', 'Lake Cassie', '+1.240.544.8459'),
(49, 'harry53', 'neha30@example.net', '2024-07-20 06:58:19', '$2y$12$1w5gh2sfoshn8m6AHuuKkOUmpRfnD8pbCicMBJjZSastkCwfepBxa', '2015-01-09 03:28:05', '1973-11-15 05:59:24', 'esse', 'Whitneytown', '+18505510412');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`orders_detail_id`),
  ADD KEY `orders_detail_order_id_foreign` (`order_id`),
  ADD KEY `orders_detail_product_id_foreign` (`product_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `orders_detail_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
