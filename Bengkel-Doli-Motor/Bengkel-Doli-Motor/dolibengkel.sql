-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2023 at 01:44 AM
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
-- Database: `dolibengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `id_product` int NOT NULL,
  `id_customer` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doorsmeers`
--

CREATE TABLE `doorsmeers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomortelepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipekendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ditunda',
  `pemberitahuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doorsmeers`
--

INSERT INTO `doorsmeers` (`id`, `user_id`, `namalengkap`, `nomortelepon`, `tipekendaraan`, `jenis`, `tanggal`, `waktu`, `status`, `pemberitahuan`, `created_at`, `updated_at`) VALUES
(1, 3, 'Yosafat Tambun', '085367896578', 'Avanza', 'Cuci Mobil Bersih Total', '2023-06-15', '10.00 - 12.00', 'Disetujui', 'Booking doorsmeer Anda telah diterima', '2023-06-13 18:28:54', '2023-06-13 18:41:32'),
(2, 3, 'Yosafat Tambun', '087654678988', 'Rush', 'Cuci Mobil Steam', '2023-06-20', '12.00 - 14.00', 'Ditunda', 'Yosafat Tambun melakukan boooking doorsmeer, segera lakukan verifikasi!', '2023-06-13 18:40:47', '2023-06-13 18:40:47'),
(3, 3, 'Yosafat Tambun', '085674563458', 'Rubicon', 'Cuci Mobil Steam', '2023-06-22', '12.00 - 14.00', 'Ditolak', 'Booking doorsmeer Anda ditolak', '2023-06-13 18:41:23', '2023-06-13 18:41:36'),
(4, 3, 'Yosafat Tambun', '081234567890', 'Xenia', 'Cuci Mobil Bersih Total', '2023-06-16', '14.00 - 16.00', 'Disetujui', 'Booking doorsmeer Anda telah diterima', '2023-06-14 09:15:27', '2023-06-14 09:18:32'),
(5, 3, 'Yosafat Tambun', '087654567890', 'Ertiga', 'Cuci Mobil Steam', '2023-06-17', '10.00 - 12.00', 'Disetujui', 'Booking doorsmeer Anda telah diterima', '2023-06-14 09:18:45', '2023-06-14 09:18:45'),
(6, 3, 'Yosafat Tambun', '081234567890', 'Innova', 'Cuci Mobil Steam', '2023-06-23', '10.00 - 12.00', 'Ditolak', 'Booking doorsmeer Anda ditolak', '2023-06-14 09:19:12', '2023-06-14 09:19:26'),
(7, 3, 'Yosafat Tambun', '085678912345', 'Avanza', 'Cuci Mobil Bersih Total', '2023-06-18', '16.00 - 18.00', 'Disetujui', 'Booking doorsmeer Anda telah diterima', '2023-06-14 10:30:51', '2023-06-14 10:32:16'),
(8, 3, 'Yosafat Tambun', '085678912345', 'Innova', 'Cuci Mobil Steam', '2023-06-19', '12.00 - 14.00', 'Ditolak', 'Booking doorsmeer Anda ditolak', '2023-06-14 10:32:29', '2023-06-14 10:32:29'),
(9, 3, 'Yosafat Tambun', '087656567890', 'Xpander', 'Cuci Mobil Steam', '2023-06-24', '12.00 - 14.00', 'Ditolak', 'Booking doorsmeer Anda ditolak', '2023-06-14 10:32:42', '2023-06-14 10:32:56'),
(10, 3, 'Yosafat Tambun', '081234567890', 'Avanza', 'Cuci Mobil Bersih Total', '2023-06-20', '10.00 - 12.00', 'Disetujui', 'Booking doorsmeer Anda telah diterima', '2023-06-14 11:45:18', '2023-06-14 11:48:23');

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
(5, '2023_03_28_163632_create_permission_tables', 1),
(6, '2023_04_11_171910_create_shop_table', 1),
(7, '2023_04_14_031511_create_rentals_table', 1),
(8, '2023_04_22_075102_create_services_table', 1),
(9, '2023_04_22_092111_create_doorsmeers_table', 1),
(10, '2023_04_23_093540_create_sarans_table', 1),
(11, '2023_05_13_111638_create_orders_table', 1),
(12, '2023_05_13_111647_create_order_ps_table', 1),
(13, '2023_05_13_113351_create_carts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `id_customer` int NOT NULL,
  `nama_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemberitahuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_customer`, `nama_customer`, `telepon`, `alamat`, `catatan`, `payment_method`, `status`, `gambar`, `pemberitahuan`, `created_at`, `updated_at`) VALUES
(20230614013358, 3, 'Yosafat Tambun', '085359568662', 'Balige', 'Semoga Berkah', 'Via Bank', 2, '1686706438.jpg', 'Pesanan anda Telah Diterima', '2023-06-13 18:33:58', '2023-06-13 18:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_ps`
--

CREATE TABLE `order_ps` (
  `id` bigint UNSIGNED NOT NULL,
  `id_product` int NOT NULL,
  `id_order` bigint NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_ps`
--

INSERT INTO `order_ps` (`id`, `id_product`, `id_order`, `user_id`, `quantity`, `harga`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 1, 20230614013358, 3, 3, '59000', '177000', '2023-06-13 18:33:58', '2023-06-13 18:33:58');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomortelepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalrental` date NOT NULL,
  `tanggalpengembalian` date NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ditunda',
  `pemberitahuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `namalengkap`, `alamat`, `nomortelepon`, `tanggalrental`, `tanggalpengembalian`, `type`, `status`, `pemberitahuan`, `created_at`, `updated_at`) VALUES
(1, 3, 'Yosafat Tambun', 'Balige', '086787654675', '2023-06-15', '2023-06-16', 'Inova Reborn', 'Disetujui', 'Booking rental Anda telah diterima', '2023-06-13 18:27:01', '2023-06-13 18:36:40'),
(2, 3, 'Yosafat Tambun', 'Siantar', '086785645678', '2023-06-22', '2023-06-23', 'Inova Reborn', 'Ditunda', 'Yosafat Tambun melakukan boooking rental, segera lakukan verifikasi!', '2023-06-13 18:35:58', '2023-06-13 18:35:58'),
(3, 3, 'Yosafat Tambun', 'Dolok Sanggul', '089765435678', '2023-06-21', '2023-06-28', 'Avanza Baru', 'Ditolak', 'Booking rental Anda ditolak', '2023-06-13 18:36:25', '2023-06-13 18:36:44'),
(4, 3, 'Yosafat Tambun', 'Jakarta', '081234567890', '2023-06-16', '2023-06-19', 'Fortuner VRZ', 'Disetujui', 'Booking rental Anda telah diterima', '2023-06-14 09:20:37', '2023-06-14 09:23:52'),
(5, 3, 'Yosafat Tambun', 'Bekasi', '087654567890', '2023-06-18', '2023-06-19', 'Hyundai H-1', 'Disetujui', 'Booking rental Anda telah diterima', '2023-06-14 09:24:07', '2023-06-14 09:24:07'),
(6, 3, 'Yosafat Tambun', 'Depok', '081234567890', '2023-06-25', '2023-06-27', 'Avanza Baru', 'Ditolak', 'Booking rental Anda ditolak', '2023-06-14 09:24:29', '2023-06-14 09:24:42'),
(7, 3, 'Yosafat Tambun', 'Bandung', '085678912345', '2023-06-20', '2023-06-22', 'Avanza Baru', 'Disetujui', 'Booking rental Anda telah diterima', '2023-06-14 10:34:17', '2023-06-14 10:36:42'),
(8, 3, 'Yosafat Tambun', 'Surabaya', '085678912345', '2023-06-23', '2023-06-25', 'Innova Reborn', 'Ditolak', 'Booking rental Anda ditolak', '2023-06-14 10:36:55', '2023-06-14 10:36:55'),
(9, 3, 'Yosafat Tambun', 'Yogyakarta', '087656567890', '2023-06-26', '2023-06-27', 'Terios AT', 'Ditolak', 'Booking rental Anda ditolak', '2023-06-14 10:37:08', '2023-06-14 10:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-06-13 18:21:00', '2023-06-13 18:21:00'),
(2, 'customer', 'web', '2023-06-13 18:21:00', '2023-06-13 18:21:00'),
(3, 'staff', 'web', '2023-06-13 18:21:00', '2023-06-13 18:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sarans`
--

CREATE TABLE `sarans` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomortelepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarans`
--

/* INSERT INTO `sarans` (`id`, `nama`, `nomortelepon`, `saran`, `created_at`, `updated_at`) VALUES
(1, 'Yosafat Tambun', '082167183919', 'Tambahin lagi dong produknya', '2023-06-13 18:43:35', '2023-06-13 18:43:35')
(2, 'Budi Santoso', '081234567890', 'Pelayanannya sangat baik!', '2023-06-14 09:25:10', '2023-06-14 09:25:10'),
(3, 'Andi Wijaya', '085678912345', 'Harga sewa kendaraannya terlalu mahal', '2023-06-14 10:38:05', '2023-06-14 10:38:05'),
(4, 'Rina Fitriani', '081234567890', 'Tersedia mobil jenis SUV?', '2023-06-14 11:49:02', '2023-06-14 11:49:02'),
(5, 'Dewi Susanti', '082167183919', 'Minta bonus dong', '2023-06-14 13:20:15', '2023-06-14 13:20:15'),
(6, 'Ahmad Faisal', '087656789012', 'Mekaniknya sangat cepat sekali', '2023-06-14 14:30:52', '2023-06-14 14:30:52'),
(7, 'Siti Rahmawati', '081234567890', 'Abang kemarin ganteng banget', '2023-06-14 15:45:37', '2023-06-14 15:45:37');*/

INSERT INTO `sarans` (`id`, `nama`, `nomortelepon`, `saran`, `created_at`, `updated_at`)
VALUES 
(1, 'Yosafat Tambun', '082167183919', 'Tambahin lagi dong produknya', '2023-06-13 18:43:35', '2023-06-13 18:43:35'),
(2, 'Budi Santoso', '081234567890', 'Pelayanannya sangat baik!', '2023-06-14 09:25:10', '2023-06-14 09:25:10'),
(3, 'Andi Wijaya', '085678912345', 'Harga sewa kendaraannya terlalu mahal', '2023-06-14 10:38:05', '2023-06-14 10:38:05'),
(4, 'Rina Fitriani', '081234567890', 'Tersedia mobil jenis SUV?', '2023-06-14 11:49:02', '2023-06-14 11:49:02'),
(5, 'Dewi Susanti', '082167183919', 'Minta bonus dong', '2023-06-14 13:20:15', '2023-06-14 13:20:15'),
(6, 'Ahmad Faisal', '087656789012', 'Mekaniknya sangat cepat sekali', '2023-06-14 14:30:52', '2023-06-14 14:30:52'),
(7, 'Siti Rahmawati', '081234567890', 'Abang kemarin ganteng banget', '2023-06-14 15:45:37', '2023-06-14 15:45:37');


-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomortelepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipemobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ditunda',
  `pemberitahuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `namalengkap`, `layanan`, `nomortelepon`, `tipemobil`, `tanggal`, `waktu`, `status`, `pemberitahuan`, `created_at`, `updated_at`) VALUES
(1, 3, 'Yosafat Tambun', 'Ganti Oli', '081265789876', 'Avanza', '2023-06-15', '10:00 - 12:00', 'Disetujui', 'Booking service Anda telah diterima', '2023-06-13 18:28:19', '2023-06-13 18:39:19'),
(2, 3, 'Yosafat Tambun', 'Ganti Ban', '089712356735', 'Terios', '2023-06-15', '10:00 - 12:00', 'Ditunda', 'Yosafat Tambun melakukan boooking service, segera lakukan verifikasi!', '2023-06-13 18:37:36', '2023-06-13 18:37:36'),
(3, 3, 'Yosafat Tambun', 'Ganti Kanpas Rem', '081267857645', 'Panther', '2023-06-21', '14:00 - 16:00', 'Ditolak', 'Booking service Anda ditolak', '2023-06-13 18:39:02', '2023-06-13 18:39:23'),
(4, 3, 'Yosafat Tambun', 'Cek Mesin', '081234567890', 'Xenia', '2023-06-16', '14:00 - 16:00', 'Disetujui', 'Booking service Anda telah diterima', '2023-06-14 09:26:53', '2023-06-14 09:29:05'),
(5, 3, 'Yosafat Tambun', 'Ganti Aki', '087654567890', 'Ertiga', '2023-06-17', '10:00 - 12:00', 'Disetujui', 'Booking service Anda telah diterima', '2023-06-14 09:29:18', '2023-06-14 09:29:18'),
(6, 3, 'Yosafat Tambun', 'Perbaikan AC', '081234567890', 'Innova', '2023-06-23', '10:00 - 12:00', 'Ditolak', 'Booking service Anda ditolak', '2023-06-14 09:29:32', '2023-06-14 09:29:45'),
(7, 3, 'Yosafat Tambun', 'Ganti Oli', '085678912345', 'Avanza', '2023-06-18', '16:00 - 18:00', 'Disetujui', 'Booking service Anda telah diterima', '2023-06-14 10:39:23', '2023-06-14 10:41:47'),
(8, 3, 'Yosafat Tambun', 'Ganti Ban', '085678912345', 'Innova', '2023-06-19', '12:00 - 14:00', 'Ditolak', 'Booking service Anda ditolak', '2023-06-14 10:42:00', '2023-06-14 10:42:00'),
(9, 3, 'Yosafat Tambun', 'Ganti Kampas Rem', '087656567890', 'Xpander', '2023-06-24', '12:00 - 14:00', 'Ditolak', 'Booking service Anda ditolak', '2023-06-14 10:42:13', '2023-06-14 10:42:26'),
(10, 3, 'Yosafat Tambun', 'Perbaikan AC', '081234567890', 'Avanza', '2023-06-20', '10:00 - 12:00', 'Disetujui', 'Booking service Anda telah diterima', '2023-06-14 11:51:15', '2023-06-14 11:53:27'),
(11, 3, 'Yosafat Tambun', 'Cek Mesin', '081234567890', 'Terios', '2023-06-21', '14:00 - 16:00', 'Disetujui', 'Booking service Anda telah diterima', '2023-06-14 11:53:40', '2023-06-14 11:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `stok` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop`
--

/* INSERT INTO `shop` (`id`, `nama`, `gambar`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'SHELL Plus 10W-40', '1686706333.jpg', 59000, 14, '2023-06-13 18:32:13', '2023-06-13 18:34:25')
(2, 'UAC CO 35112C A/C Compressor', 'ac_compressor.jpg', 500000, 8, '2023-06-14 09:31:52', '2023-06-14 09:31:52'),
(3, 'Power Stop 17-1613, Z17 Brake Pad', 'brake_pad.jpg', 250000, 20, '2023-06-14 09:32:06', '2023-06-14 09:32:06'),
(4, 'Autolite Iridium Spark Plug', 'spark_plug.jpg', 50000, 50, '2023-06-14 09:32:20', '2023-06-14 09:32:20'),
(5, 'EPAuto CP133 Air Filter', 'air_filter.jpg', 100000, 30, '2023-06-14 09:32:34', '2023-06-14 09:32:34'),
(6, 'Pair Rear Shock Absorber', 'shock_absorber.jpg', 400000, 12, '2023-06-14 09:32:48', '2023-06-14 09:32:48'),
(7, 'Deka 9A47 AGM Intimidator Battery', 'battery.jpg', 800000, 18, '2023-06-14 09:33:02', '2023-06-14 09:33:02');*/

INSERT INTO `shop` (`id`, `nama`, `gambar`, `harga`, `stok`, `created_at`, `updated_at`)
VALUES
    (1, 'SHELL Plus 10W-40', '1686706333.jpg', 59000, 14, '2023-06-13 18:32:13', '2023-06-13 18:34:25'),
    (2, 'UAC CO 35112C A/C Compressor', 'ac_compressor.jpg', 500000, 8, '2023-06-14 09:31:52', '2023-06-14 09:31:52'),
    (3, 'Power Stop Brake Pad', 'brake_pad.jpg', 250000, 20, '2023-06-14 09:32:06', '2023-06-14 09:32:06'),
    (4, 'Autolite Iridium Spark Plug', 'spark_plug.jpg', 50000, 50, '2023-06-14 09:32:20', '2023-06-14 09:32:20'),
    (5, 'EPAuto CP133 Air Filter', 'air_filter.jpg', 100000, 30, '2023-06-14 09:32:34', '2023-06-14 09:32:34'),
    (6, 'Pair Rear Shock Absorber', 'shock_absorber.jpg', 400000, 12, '2023-06-14 09:32:48', '2023-06-14 09:32:48'),
    (7, 'Deka 9A47 AGM Battery', 'battery.jpg', 800000, 18, '2023-06-14 09:33:02', '2023-06-14 09:33:02');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$.UaM3uwUxLN8baxm5e/9neyyVfcWlpuHEwjhTwyA/YImKDRsZQ.2m', NULL, '2023-06-13 18:21:01', '2023-06-13 18:21:01'),
(2, 'staff', 'staff', 'staff@gmail.com', NULL, '$2y$10$1SzjztwkYKt7sNZVzpm7n.SaCOHIqGUfv214tKzlfP0Boft8Tn7AK', NULL, '2023-06-13 18:21:01', '2023-06-13 18:21:01'),
(3, 'yosafat', 'Yosafat Tambun', 'yosafat@gmail.com', NULL, '$2y$10$isRUfTJ8PyIL91yltlGKyOzVdXYYmvGeMjVfVW4MXZQYKhKSEk8C6', NULL, '2023-06-13 18:21:01', '2023-06-13 18:21:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doorsmeers`
--
ALTER TABLE `doorsmeers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doorsmeers_user_id_foreign` (`user_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_ps`
--
ALTER TABLE `order_ps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_ps_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rentals_user_id_foreign` (`user_id`);

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
-- Indexes for table `sarans`
--
ALTER TABLE `sarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doorsmeers`
--
ALTER TABLE `doorsmeers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20230614013359;

--
-- AUTO_INCREMENT for table `order_ps`
--
ALTER TABLE `order_ps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sarans`
--
ALTER TABLE `sarans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doorsmeers`
--
ALTER TABLE `doorsmeers`
  ADD CONSTRAINT `doorsmeers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `order_ps`
--
ALTER TABLE `order_ps`
  ADD CONSTRAINT `order_ps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
