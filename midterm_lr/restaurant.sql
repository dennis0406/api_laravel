-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 06:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midterm_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cơm dĩa', NULL, NULL),
(2, 'Bánh mỳ', NULL, NULL),
(3, 'Bún phở', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `midterms`
--

CREATE TABLE `midterms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_01_012541_create_categories_table', 1),
(3, '2022_07_01_020906_create_products_table', 1),
(4, '2022_07_01_022147_create_midterms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `image`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Louie Mann V', 'Voluptatem alias voluptate consequatur hic.', 'https://via.placeholder.com/640x480.png/008811?text=foods+amet', '6.00', 1, '2022-06-30 20:15:36', '2022-06-30 20:15:36'),
(2, 'Georgette Harber', 'Aut temporibus nihil neque quasi iste et quis.', 'https://via.placeholder.com/640x480.png/0055ee?text=foods+dolorum', '8.00', 2, '2022-06-30 20:15:36', '2022-06-30 20:15:36'),
(3, 'Mr. Mateo Hagenes', 'A veritatis accusantium explicabo quisquam vel unde.', 'https://via.placeholder.com/640x480.png/00ffee?text=foods+nulla', '6.00', 1, '2022-06-30 20:15:36', '2022-06-30 20:15:36'),
(4, 'Ms. Alvena Waters PhD', 'Asperiores suscipit dolores dolor facilis quis.', 'https://via.placeholder.com/640x480.png/009955?text=foods+ad', '7.00', 2, '2022-06-30 20:15:36', '2022-06-30 20:15:36'),
(5, 'Rae Borer', 'Saepe voluptatem nihil id modi ut sequi nulla.', 'https://via.placeholder.com/640x480.png/00ff44?text=foods+porro', '1.00', 3, '2022-06-30 20:15:36', '2022-06-30 20:15:36'),
(6, 'Jean Dickinson', 'Itaque aliquam tenetur amet quia iure.', 'https://via.placeholder.com/640x480.png/004466?text=foods+qui', '2.00', 1, '2022-06-30 20:15:36', '2022-06-30 20:15:36'),
(7, 'Miss Lynn Gusikowski', 'Cupiditate sed pariatur odio praesentium et repellendus.', 'https://via.placeholder.com/640x480.png/00bbcc?text=foods+blanditiis', '4.00', 1, '2022-06-30 20:15:36', '2022-06-30 20:15:36'),
(8, 'Delia Reilly', 'Quia iusto dolor distinctio possimus.', 'https://via.placeholder.com/640x480.png/008800?text=foods+velit', '5.00', 2, '2022-06-30 20:15:36', '2022-06-30 20:15:36'),
(9, 'Ricky Boyle', 'Ea voluptatem quo hic maxime dolorum sunt.', 'https://via.placeholder.com/640x480.png/00ff88?text=foods+rem', '0.00', 1, '2022-06-30 20:15:36', '2022-06-30 20:15:36'),
(10, 'Johanna Schoen', 'Pariatur nesciunt consectetur nesciunt rerum earum tenetur.', 'https://via.placeholder.com/640x480.png/00ff55?text=foods+laboriosam', '0.00', 2, '2022-06-30 20:15:36', '2022-06-30 20:15:36'),
(11, 'Lê Văn lập', 'Voluptatem alias voluptate consequatur hic.', 'http://placeimg.com/640/480/cats', '400000.00', 2, NULL, NULL),
(12, 'Bún Thầy Đình', 'menus need only a custom class, .form-select to trigger the custom styles.', 'http://at06.chonweb.vn/wp-content/uploads/2019/08/VietnameseMeatballsXiuMaiandBanhMi-1-1.jpeg', '35000.00', 3, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `midterms`
--
ALTER TABLE `midterms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `midterms`
--
ALTER TABLE `midterms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
