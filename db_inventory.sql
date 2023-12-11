-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 05:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$1IQH7kpSFs24aMAoBiyEO.Wr0MEuD8NcfXnkQIwsx4pqhlZ5/po/y', NULL, NULL),
(2, 'admin', '$2y$10$1IQH7kpSFs24aMAoBiyEO.Wr0MEuD8NcfXnkQIwsx4pqhlZ5/po/y', NULL, NULL);

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
(2, '2023_10_002_101609_create_tb_jenis', 1),
(3, '2023_11_29_013840_create_administrator_table', 1),
(4, '2023_12_02_101900_create_table_barang', 1);

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
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_barang`, `keterangan_barang`, `id_jenis`, `created_at`, `updated_at`) VALUES
(1, 'Kampas Kopling  DAYTONA 4606-4PCS.', 'Karisma/Supra X 125', 5, NULL, '2023-12-06 08:16:25'),
(5, 'SENSOR TPS MST', 'ALL NEW BEAT FI GENIO SCOOPY', 12, '2023-12-03 08:47:55', '2023-12-05 06:46:26'),
(8, 'Kampas Kopling Ganda 22535K35V01', 'Vario 150', 14, '2023-12-03 09:01:51', '2023-12-05 06:45:56'),
(9, 'Ban Luar Federal AHM', '80/90-17', 13, '2023-12-05 06:14:11', '2023-12-05 06:41:05'),
(10, 'NGK CPR9EA', 'busi beat fi/vario 125/cbr 150/cb150r', 16, '2023-12-05 06:19:21', '2023-12-05 06:19:21'),
(11, 'MPX 1 0.8L', 'JASO MA SAE 10w-30 API SL', 2, '2023-12-05 06:23:00', '2023-12-05 06:23:00'),
(12, 'Oli Master Silentium 0.8L', 'JASO MA SAE 20w-50 API SL', 2, '2023-12-05 06:49:53', '2023-12-05 06:49:53'),
(14, 'Aki YUASA', '10aj', 17, '2023-12-05 10:12:57', '2023-12-05 10:12:57'),
(15, 'Sensor CKP MST', 'Aerox 155, Lexi 125', 12, '2023-12-05 10:14:12', '2023-12-05 10:14:12'),
(16, 'Kampas Rem AHM 06455 KR3 404', 'KARISMA MEGA PRO REVO SUPRA SUPRA FIT SUPRA X 125 TIGER', 3, '2023-12-06 06:51:47', '2023-12-06 06:51:47'),
(17, 'Federal Ultratec 0,8', 'JASO MA 20w-40 API SJ', 2, '2023-12-06 07:06:23', '2023-12-06 07:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id`, `nama_jenis`, `created_at`, `updated_at`) VALUES
(2, 'Oli Mesin', NULL, '2023-12-05 10:10:13'),
(3, 'Kampas Rem', NULL, NULL),
(5, 'Kampas Kopling', NULL, NULL),
(12, 'Sensor FI', '2023-12-03 07:35:37', '2023-12-05 06:09:41'),
(13, 'Ban', '2023-12-03 07:58:40', '2023-12-03 07:58:40'),
(14, 'CVT', '2023-12-03 09:01:02', '2023-12-03 09:01:02'),
(15, 'Filter Udara', '2023-12-05 06:11:50', '2023-12-05 06:11:50'),
(16, 'Busi', '2023-12-05 06:12:12', '2023-12-05 06:12:12'),
(17, 'Aki', '2023-12-05 06:12:24', '2023-12-05 06:12:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_barang_id_jenis_foreign` (`id_jenis`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_id_jenis_foreign` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
