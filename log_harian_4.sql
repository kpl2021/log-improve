-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 05:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log_harian_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `users_id`, `name`, `nik`, `nik_verified_at`, `password`, `position`, `unit`, `golongan`, `no_telp`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 36, 'ADMIN', '0000', NULL, '$2y$10$AQ9YZckEQ8V2l6IQtNia2uES84tlouVfFeAwxaK2ZsvjIq8hyoTVS', 'ADMIN', 'Balai Konservasi Borobudur', 'ADMIN', NULL, NULL, NULL, '2021-01-31 19:40:49', '2021-02-08 19:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `users_id`, `name`, `nik`, `nik_verified_at`, `password`, `position`, `unit`, `golongan`, `no_telp`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 15, 'Safira Rahma Dewi', '24060118130135', NULL, '$2y$10$oZf99zfijlKD3fnD8ILQveOvFnhPjpbQXpL1N5erXWLUhX5tv.Lyy', '-', '-', '-', '085729830628', 'Jl. Medangkamolan No.8, Borobudur', NULL, '2021-01-28 19:39:57', '2021-01-29 09:10:57'),
(23, 45, 'Achmanto', '3308020910820002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', '085878977991', NULL, NULL, '2021-02-08 19:34:13', '2021-02-08 19:34:13'),
(24, 46, 'Agam Prastian', '3308011705950002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:36:25', '2021-02-08 19:36:25'),
(25, 47, 'Agnes Wulandari', '3308025303950002', NULL, '12345678', 'Kepegawaian', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:37:38', '2021-02-08 19:37:38'),
(26, 48, 'Agung sulistyo', '3308082202830004', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:38:39', '2021-02-08 19:38:39'),
(27, 49, 'Ahmad Ardian Eka Putra', '3308021903940001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:39:49', '2021-02-08 19:39:49'),
(28, 50, 'Ahmat Sulaiman', '3308021310840001', NULL, '12345678', 'Keuangan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:43:03', '2021-02-08 19:43:03'),
(29, 51, 'ANANG SUGIARTO', '3308021712790002', NULL, '12345678', 'Pemeliharaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:44:14', '2021-02-08 19:44:14'),
(30, 52, 'Andri yulianto', '3308022207820001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:45:22', '2021-02-08 19:45:22'),
(31, 53, 'April Purnomo', '3308081704840004', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:46:39', '2021-02-08 19:46:39'),
(32, 54, 'Ardhany Prasetyawan', '3308020203810005', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:51:07', '2021-02-08 19:51:07'),
(33, 55, 'Aris harriyanto', '3308021011870002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:52:08', '2021-02-08 19:52:08'),
(34, 56, 'Aristoro', '3308021407730004', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:53:39', '2021-02-08 19:53:39'),
(35, 57, 'ASMIYATI INAYATUL AZIZAH', '3308086012830004', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:54:55', '2021-02-08 19:54:55'),
(36, 58, 'Babar gifari', '3308020707900002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:56:36', '2021-02-08 19:56:36'),
(37, 59, 'Budi kristianto', '3308082201790002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:57:44', '2021-02-08 19:57:44'),
(38, 60, 'Danang Adiandoyo', '3308021108810001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 19:58:45', '2021-02-08 19:58:45'),
(39, 61, 'Dedi Purnama', '3308022112770002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:00:29', '2021-02-08 20:00:29'),
(40, 62, 'Dian Saputro', '3308090601920001', NULL, '12345678', 'Pemeliharaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:01:20', '2021-02-08 20:01:20'),
(41, 63, 'Didik wahyu dian prahasto', '3308011403880004', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:02:19', '2021-02-08 20:02:19'),
(42, 64, 'Eka Kurniawan', '3308020603780003', NULL, '12345678', 'Pemeliharaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:03:37', '2021-02-08 20:03:37'),
(43, 65, 'Eka sumitra', '3308021208810006', NULL, '12345678', 'Pemeliharaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:08:11', '2021-02-08 20:08:11'),
(44, 66, 'Eko nugroho', '3308021612850002', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:09:26', '2021-02-08 20:09:26'),
(45, 67, 'Eko Nur Arifin', '3308123001900001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:10:30', '2021-02-08 20:10:30'),
(46, 68, 'Erwan kurniawan', '3308021009720002', NULL, '12345678', 'Pemeliharaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:12:43', '2021-02-08 20:12:43'),
(47, 69, 'Fachrurozi', '3308101905890002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:13:34', '2021-02-08 20:13:34'),
(48, 70, 'Fajar sungkono', '3308020812840003', NULL, '12345678', 'Dokumentasi Publikasi', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:15:00', '2021-02-08 20:15:00'),
(49, 71, 'FENDY HERNADI', '3308091710860003', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:16:08', '2021-02-08 20:16:08'),
(50, 72, 'Gimanto', '3471031801710002', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:17:05', '2021-02-08 20:17:05'),
(51, 73, 'Hardianto', '3401021103910021', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:17:55', '2021-02-08 20:17:55'),
(52, 74, 'HARIYONO', '3308092210900001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:19:03', '2021-02-08 20:19:03'),
(53, 75, 'Hendrik Biyantoro', '3308022009930001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:20:04', '2021-02-08 20:20:04'),
(54, 76, 'Herman Wahyudi', '3308020706810001', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:23:35', '2021-02-08 20:23:35'),
(55, 77, 'Hindi priharto', '3308110603890002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:25:09', '2021-02-08 20:25:09'),
(56, 78, 'Ihwan Nurais', '3308112806860003', NULL, '12345678', 'Perencanaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:25:57', '2021-02-08 20:25:57'),
(57, 79, 'Ismanto', '3308061206830001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 20:27:15', '2021-02-08 20:27:15'),
(58, 80, 'Ismono adi inna', '3308020807820002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:06:09', '2021-02-08 23:06:09'),
(59, 81, 'Joko Pramono', '3308022612770001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:06:57', '2021-02-08 23:06:57'),
(60, 82, 'Julio agung perdana', '3308022307970002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:07:42', '2021-02-08 23:07:42'),
(61, 83, 'Kabul suprapto', '3308020907750002', NULL, '12345678', 'Pemeliharaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:08:26', '2021-02-08 23:08:26'),
(62, 84, 'KUSNANTA', '3308091103820002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:09:02', '2021-02-08 23:09:02'),
(63, 85, 'Mat darisman', '3308032212820001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:09:45', '2021-02-08 23:09:45'),
(64, 86, 'Muhamad murtakim', '3308020108810002', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:10:30', '2021-02-08 23:10:30'),
(65, 87, 'MUHAMMAD MUKHLISH', '3308020106930001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:11:36', '2021-02-08 23:11:36'),
(66, 88, 'muhammad restu faja kurnia', '3308023011950006', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:12:24', '2021-02-08 23:12:24'),
(67, 89, 'Muhammad saeful anwar', '3308021906760003', NULL, '12345678', 'Pemeliharaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:13:09', '2021-02-08 23:13:09'),
(68, 90, 'Muhammad safik', '3308022401850001', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:14:03', '2021-02-08 23:14:03'),
(69, 91, 'Muhammad Syaifudin Tanjung', '3308091602860002', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:14:53', '2021-02-08 23:14:53'),
(70, 92, 'Nanang Ardiyanto', '3308021711960001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:15:44', '2021-02-08 23:15:44'),
(71, 93, 'NANANG ESNAWI', '3308022502940004', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:16:25', '2021-02-08 23:16:25'),
(72, 94, 'Nur muhamad fadli', '3308130404940004', NULL, '12345678', 'Pelayanan Publik', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:17:21', '2021-02-08 23:17:21'),
(73, 95, 'NURMAARIF DWI SULISTYO', '3308020911800002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:18:00', '2021-02-08 23:18:00'),
(74, 96, 'Nurokhman', '3308101702790005', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:19:03', '2021-02-08 23:19:03'),
(75, 97, 'Parida Herdiawan', '3308020307820002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:19:45', '2021-02-08 23:19:45'),
(76, 98, 'Prastiyo Diantoro', '3308021509950004', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:20:55', '2021-02-08 23:20:55'),
(77, 99, 'Pristia Widayani', '3308015701900003', NULL, '12345678', 'Persuratan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:21:47', '2021-02-08 23:21:47'),
(78, 100, 'Priyono', '3404040609920001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:22:28', '2021-02-08 23:22:28'),
(79, 101, 'Puji arto', '3308021112830006', NULL, '12345678', 'Pemeliharaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:23:18', '2021-02-08 23:23:18'),
(80, 102, 'Pujiono', '3308022910680001', NULL, '12345678', 'Pemeliharaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:24:07', '2021-02-08 23:24:07'),
(81, 103, 'Ragil widiantoro', '3308080411900001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:24:49', '2021-02-08 23:24:49'),
(82, 104, 'RENDI SETIYO HANTORO', '3308020512870005', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:25:35', '2021-02-08 23:25:35'),
(83, 105, 'RICKY ADI WIJAYA SUSANTO', '3308051710930001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:26:14', '2021-02-08 23:26:14'),
(84, 106, 'ROHMAN PINUJI', '3308020310890002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:27:09', '2021-02-08 23:27:09'),
(85, 107, 'Rudy hartono', '3308022502790001', NULL, '12345678', 'Pemeliharaan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:28:00', '2021-02-08 23:28:00'),
(86, 108, 'Rumadi', '3308020610270001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:28:56', '2021-02-08 23:28:56'),
(87, 109, 'Samrodin', '3308101207840001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:29:40', '2021-02-08 23:29:40'),
(88, 110, 'SEPTIAN WIDODO', '3308022309960004', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:30:26', '2021-02-08 23:30:26'),
(89, 111, 'sujarwo', '3308020104760001', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:31:20', '2021-02-08 23:31:20'),
(90, 112, 'Susbiyantoro Danang Priatmojo', '3308022404790002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:32:01', '2021-02-08 23:32:01'),
(91, 113, 'Suyanto', '3308021412810003', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:32:57', '2021-02-08 23:32:57'),
(92, 114, 'Tauhid', '3308020712680001', NULL, '12345678', 'Perlengkapan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:33:46', '2021-02-08 23:33:46'),
(93, 115, 'wanto', '3308021107840002', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:34:28', '2021-02-08 23:34:28'),
(94, 116, 'Yulianto Hidayat', '3308022307810003', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:35:10', '2021-02-08 23:35:10'),
(95, 117, 'Yuyun purnomo exsheridato', '3308021506810010', NULL, '12345678', 'Pengamanan', 'Balai Konservasi Borobudur', '-', NULL, NULL, NULL, '2021-02-08 23:35:59', '2021-02-08 23:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `logharian`
--

CREATE TABLE `logharian` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uraian` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_27_071227_create_karyawan_table', 2),
(5, '2021_01_27_073318_create_karyawan_table', 3),
(6, '2021_01_28_021434_create_admin_table', 4),
(7, '2021_01_29_023742_create_karyawan_table', 5),
(8, '2021_02_01_023854_create_admin_table', 6),
(9, '2021_02_02_022805_create_logharian_table', 7),
(10, '2021_02_02_031617_create_logharian_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `nik` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaRole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `namaRole`) VALUES
(1, 'karyawan'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `roles_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roles_id`, `name`, `nik`, `nik_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(15, 1, 'Safira Rahma Dewi', '24060118130135', NULL, '$2y$10$oZf99zfijlKD3fnD8ILQveOvFnhPjpbQXpL1N5erXWLUhX5tv.Lyy', NULL, '2021-01-28 19:39:57', '2021-01-31 19:03:55'),
(36, 2, 'ADMIN', '0000', NULL, '$2y$10$tswwvSAgKeGYddNWnXddh.XIRananGtIv3pENxwH3eski69FUU4Vy', NULL, '2021-01-31 19:40:49', '2021-02-08 19:27:44'),
(45, 1, 'Achmanto', '3308020910820002', NULL, '$2y$10$QYHE5jGY6JWDyzRfMDe5HePaN6EEvr2gnNk6r6XiKwM5ROH7W.sl6', NULL, '2021-02-08 19:34:13', '2021-02-08 19:34:13'),
(46, 1, 'Agam Prastian', '3308011705950002', NULL, '$2y$10$02OVgVCHsxBgFlhrN4/XLebZmnq8rdqdU706voVdJtbM5KMuaS6WK', NULL, '2021-02-08 19:36:25', '2021-02-08 19:36:25'),
(47, 1, 'Agnes Wulandari', '3308025303950002', NULL, '$2y$10$P4PoQ1f7imFrKJlXrOIB8uwfYJfrpqRnbkiNgHF3n2Of2r7wZpDAC', NULL, '2021-02-08 19:37:38', '2021-02-08 19:37:38'),
(48, 1, 'Agung sulistyo', '3308082202830004', NULL, '$2y$10$3K6P4aB3KTBjzj1v.IQ4j.kiAT4bcJ/zWcMtlhqUmG/o3kmlySr1e', NULL, '2021-02-08 19:38:39', '2021-02-08 19:38:39'),
(49, 1, 'Ahmad Ardian Eka Putra', '3308021903940001', NULL, '$2y$10$wMX3DUad2Rvwe7i/ppuN5OYc93nv87HrFXo.95Sb.DM4zrSrSp8OK', NULL, '2021-02-08 19:39:48', '2021-02-08 19:39:48'),
(50, 1, 'Ahmat Sulaiman', '3308021310840001', NULL, '$2y$10$uYY1.VCXhHDwKPl8R6YGsuBNjIro/Ov1YUrBle/57QP6.abUDsaty', NULL, '2021-02-08 19:43:03', '2021-02-08 19:43:03'),
(51, 1, 'ANANG SUGIARTO', '3308021712790002', NULL, '$2y$10$vkgpRpxSw3lsuTMH6uyFmOYB4i1o4kHmES6ZHkDd7v0lb.jhkgHGu', NULL, '2021-02-08 19:44:14', '2021-02-08 19:44:14'),
(52, 1, 'Andri yulianto', '3308022207820001', NULL, '$2y$10$RL6zNOvFnN03PTu/GEs7recxg.LAtbctdLO5z9RI7NbQRb7o0ajDW', NULL, '2021-02-08 19:45:22', '2021-02-08 19:45:22'),
(53, 1, 'April Purnomo', '3308081704840004', NULL, '$2y$10$9efZ4TPQEz4n9fGB5xX9luIzAgLqiAru9ZtFA1pNr9ng36Nv0cPlq', NULL, '2021-02-08 19:46:39', '2021-02-08 19:46:39'),
(54, 1, 'Ardhany Prasetyawan', '3308020203810005', NULL, '$2y$10$YwJbNTiKRYLTyXKUNQvGDe02xC34tQrgZ4UXYTwepDzxLStZ2vlAm', NULL, '2021-02-08 19:51:07', '2021-02-08 19:51:07'),
(55, 1, 'Aris harriyanto', '3308021011870002', NULL, '$2y$10$24zVReVDY3g.t48z0pJu/ucHXqXK1DkFZpK0S3DSpoSYVXtXbLX/C', NULL, '2021-02-08 19:52:08', '2021-02-08 19:52:08'),
(56, 1, 'Aristoro', '3308021407730004', NULL, '$2y$10$2AHWJqJYgLMolemA18I/y.NeziFT1siRwf1Lzt6HGuj5b54nLN3sy', NULL, '2021-02-08 19:53:38', '2021-02-08 19:53:38'),
(57, 1, 'ASMIYATI INAYATUL AZIZAH', '3308086012830004', NULL, '$2y$10$NDNM87mQ/ONFe//Sb.8s1uroMR6fY7pzpI1y8rxHJ0dku9zKmkJZG', NULL, '2021-02-08 19:54:55', '2021-02-08 19:54:55'),
(58, 1, 'Babar gifari', '3308020707900002', NULL, '$2y$10$0KQOmHw1p48xXuXcDo.fF.iiS3sDpOzA9Y4apzxKMtNoBqK5l3uxK', NULL, '2021-02-08 19:56:36', '2021-02-08 19:56:36'),
(59, 1, 'Budi kristianto', '3308082201790002', NULL, '$2y$10$vUNhpd6RVt9pIAj68izvseVEAUWwJQDuKGR2VPPhpR0U8czchsiFW', NULL, '2021-02-08 19:57:44', '2021-02-08 19:57:44'),
(60, 1, 'Danang Adiandoyo', '3308021108810001', NULL, '$2y$10$apmgZWKOS45TdlIZzEUIEur3UPM0orx7.zA7/lwAay02z7p1KJmA.', NULL, '2021-02-08 19:58:45', '2021-02-08 19:58:45'),
(61, 1, 'Dedi Purnama', '3308022112770002', NULL, '$2y$10$5cBjUDXv4j5IyB1LEUhWfuRcSWWb5bxyYqkCph6Z5JMKC9y2qWz/2', NULL, '2021-02-08 20:00:29', '2021-02-08 20:00:29'),
(62, 1, 'Dian Saputro', '3308090601920001', NULL, '$2y$10$8g5yiIpOX8BIxigkzxW/Y.GOLOLVPyvHQaKj3Ihl5NTxv.EUMvFNm', NULL, '2021-02-08 20:01:20', '2021-02-08 20:01:20'),
(63, 1, 'Didik wahyu dian prahasto', '3308011403880004', NULL, '$2y$10$TrXbm1TCejcE5Ynjh5FllO9FsTCXKkY4erYjMJm.PgS70UZa.rnw.', NULL, '2021-02-08 20:02:19', '2021-02-08 20:02:19'),
(64, 1, 'Eka Kurniawan', '3308020603780003', NULL, '$2y$10$9kwAnWwRQX1T9S18KC3E1OTcbad8h4wDJabHfb3NzL/6IZU9VIpJu', NULL, '2021-02-08 20:03:37', '2021-02-08 20:03:37'),
(65, 1, 'Eka sumitra', '3308021208810006', NULL, '$2y$10$SlKLuLRVmvXTDRZ.e/crtOq3P9SuNnaqvWjy8GIgB/b08g6tgqR9W', NULL, '2021-02-08 20:08:10', '2021-02-08 20:08:10'),
(66, 1, 'Eko nugroho', '3308021612850002', NULL, '$2y$10$t1HZ4pPiNo60Tf4xc9cQTee5/fzWeqZ9MRbjmqTyWjmwrzBZxNSEW', NULL, '2021-02-08 20:09:25', '2021-02-08 20:09:25'),
(67, 1, 'Eko Nur Arifin', '3308123001900001', NULL, '$2y$10$zOOUBVgONmISH9x7Eke0k.V7JlTpHK2JE66QJQRqDM6AKCf9gi4GC', NULL, '2021-02-08 20:10:30', '2021-02-08 20:10:30'),
(68, 1, 'Erwan kurniawan', '3308021009720002', NULL, '$2y$10$IRnl2GMhPWRVToR4SaQBUuJ2WEcEGC.eBNF.M2YnbgmyDmj3H.nsS', NULL, '2021-02-08 20:12:43', '2021-02-08 20:12:43'),
(69, 1, 'Fachrurozi', '3308101905890002', NULL, '$2y$10$aRSDyapvK7iU/ka7g/3pfuAPXMSo8/UBlvZ0QU8/VRXF6qLbTe0uO', NULL, '2021-02-08 20:13:34', '2021-02-08 20:13:34'),
(70, 1, 'Fajar sungkono', '3308020812840003', NULL, '$2y$10$gylvUhKYi2sEfxg1KnedT.mCKTodo3vQlqwjbDe6T9XpoLL63vjiq', NULL, '2021-02-08 20:15:00', '2021-02-08 20:15:00'),
(71, 1, 'FENDY HERNADI', '3308091710860003', NULL, '$2y$10$kjV5ZcvNjZ.ZUUvT7ggLFeUgozIhmgxVeZY966vw9zsVxBlVeccjy', NULL, '2021-02-08 20:16:08', '2021-02-08 20:16:08'),
(72, 1, 'Gimanto', '3471031801710002', NULL, '$2y$10$G3tSKZZnpA58RbEUJRkS1edfdtkAubToeOY4HB69o.jcry/LdWrMu', NULL, '2021-02-08 20:17:05', '2021-02-08 20:17:05'),
(73, 1, 'Hardianto', '3401021103910021', NULL, '$2y$10$9TN3exWIVlear3vuSu/9VeiBTcjHQujoh/XkbfiTMXqTAUS6CylWu', NULL, '2021-02-08 20:17:55', '2021-02-08 20:17:55'),
(74, 1, 'HARIYONO', '3308092210900001', NULL, '$2y$10$nAiX5RJY6wWW/sVLfJNz/OkwKK/uEowt2XH1eqmAwdoFSb72qqEAO', NULL, '2021-02-08 20:19:03', '2021-02-08 20:19:03'),
(75, 1, 'Hendrik Biyantoro', '3308022009930001', NULL, '$2y$10$RN2qhvwbXuCDyLxn0EDmo.tvAwRpA9b9C5KUfIjPsjprwDr8pb57W', NULL, '2021-02-08 20:20:04', '2021-02-08 20:20:04'),
(76, 1, 'Herman Wahyudi', '3308020706810001', NULL, '$2y$10$Y5xRDcB.L0CPXNrq61fPBeK5oHkFbfR74sF067/Nk4G9oCO.TJmxa', NULL, '2021-02-08 20:23:35', '2021-02-08 20:23:35'),
(77, 1, 'Hindi priharto', '3308110603890002', NULL, '$2y$10$.8owuevh1GvIq5uUCx9YEuXz9lHn5m9DQ9pCGIbax/zf8I2sVbcRW', NULL, '2021-02-08 20:25:08', '2021-02-08 20:25:08'),
(78, 1, 'Ihwan Nurais', '3308112806860003', NULL, '$2y$10$ahjGXLgBSPNZigffiVZ4HuFDn01oznAWYc7Nx8qleOwz/mu3aIdxe', NULL, '2021-02-08 20:25:57', '2021-02-08 20:25:57'),
(79, 1, 'Ismanto', '3308061206830001', NULL, '$2y$10$eaw4To8legSCLBcGzNF0S.4GW4S0nqrMmjdWvbopQq.y9oFiF3ztG', NULL, '2021-02-08 20:27:15', '2021-02-08 20:27:15'),
(80, 1, 'Ismono adi inna', '3308020807820002', NULL, '$2y$10$sbNrK2xdbWt0JndIqhMwqOHAiH6VUXA6dwWPFo1dyQnPht0mKvhGu', NULL, '2021-02-08 23:06:08', '2021-02-08 23:06:08'),
(81, 1, 'Joko Pramono', '3308022612770001', NULL, '$2y$10$EYIBlX.1UgvSBmo6X89ecu4aSfXEHSFHluF/LVkjvVRZxS/pC.YDK', NULL, '2021-02-08 23:06:56', '2021-02-08 23:06:56'),
(82, 1, 'Julio agung perdana', '3308022307970002', NULL, '$2y$10$2XWoVdQXwy.wggqOBbaNg.UkRCm4zmmNAaYL5.sHETGny380mjPGq', NULL, '2021-02-08 23:07:41', '2021-02-08 23:07:41'),
(83, 1, 'Kabul suprapto', '3308020907750002', NULL, '$2y$10$InCXc/.lVSmeYgXtHW7GFuFphpJ3UZief6F6KTIPDQk1E/ClJyWjS', NULL, '2021-02-08 23:08:26', '2021-02-08 23:08:26'),
(84, 1, 'KUSNANTA', '3308091103820002', NULL, '$2y$10$KWLd993C5zIF09EQ4ToRl.oUM5fFlstIKeXe3nCq6AivLVeFmEN2m', NULL, '2021-02-08 23:09:02', '2021-02-08 23:09:02'),
(85, 1, 'Mat darisman', '3308032212820001', NULL, '$2y$10$KKobGjM8Es9j0/2FSaAccenU9z.GLpjMXy.eHAGtZt4hPLLzOJW6q', NULL, '2021-02-08 23:09:45', '2021-02-08 23:09:45'),
(86, 1, 'Muhamad murtakim', '3308020108810002', NULL, '$2y$10$9N1UwdI2qOBFszGV5L1zz.Fk2N0OV6MA5ZqVZK9N5P83AS2N49KzS', NULL, '2021-02-08 23:10:30', '2021-02-08 23:10:30'),
(87, 1, 'MUHAMMAD MUKHLISH', '3308020106930001', NULL, '$2y$10$I6Bm2zeaPggO3ndrKE7Lz.V37d4f5ekQzEw8UDDoetJIZFdCLprEy', NULL, '2021-02-08 23:11:36', '2021-02-08 23:11:36'),
(88, 1, 'muhammad restu faja kurnia', '3308023011950006', NULL, '$2y$10$n52qTGrluIIglhuvGFxoHeec..YexwTbeOFwBx/YVCZi44HOhjwE6', NULL, '2021-02-08 23:12:24', '2021-02-08 23:12:24'),
(89, 1, 'Muhammad saeful anwar', '3308021906760003', NULL, '$2y$10$NX.RbfAGVZX9NAuOM6EmWu.KuXQGxs0og1mTIxAh5H5EBVjmpivuO', NULL, '2021-02-08 23:13:09', '2021-02-08 23:13:09'),
(90, 1, 'Muhammad safik', '3308022401850001', NULL, '$2y$10$c2XnwXHBEoDdFK2CdGgpd.snWbm.9t2opqgoR5PVO.iIhW/gmkqJ.', NULL, '2021-02-08 23:14:03', '2021-02-08 23:14:03'),
(91, 1, 'Muhammad Syaifudin Tanjung', '3308091602860002', NULL, '$2y$10$EyRLuGDm3jCB9HJa8VpwL.XW/Dy/ZbsIpHgu4L5YCE16p/DCTZpei', NULL, '2021-02-08 23:14:53', '2021-02-08 23:14:53'),
(92, 1, 'Nanang Ardiyanto', '3308021711960001', NULL, '$2y$10$ZONeGnBiDpXlF2xkowdEROKYjCm7PZ6TLqGhWm3sSPzjmnK8Vbicm', NULL, '2021-02-08 23:15:43', '2021-02-08 23:15:43'),
(93, 1, 'NANANG ESNAWI', '3308022502940004', NULL, '$2y$10$mU4EHhftZrqmAj39WWef3ekRswg87x5DAlXTppdR7IkBLW9IB55Q.', NULL, '2021-02-08 23:16:25', '2021-02-08 23:16:25'),
(94, 1, 'Nur muhamad fadli', '3308130404940004', NULL, '$2y$10$hA6a/9UGu4F2fP4mfviYwuanVTHB4GkPkbuxPl4Ktvs990XR/ZNua', NULL, '2021-02-08 23:17:21', '2021-02-08 23:17:21'),
(95, 1, 'NURMAARIF DWI SULISTYO', '3308020911800002', NULL, '$2y$10$tZMgEf285LmzSzDLO/lfdOjML1bYMGk1kHH65jL6xkf1vm5QHMfsO', NULL, '2021-02-08 23:18:00', '2021-02-08 23:18:00'),
(96, 1, 'Nurokhman', '3308101702790005', NULL, '$2y$10$HvsHVJGYtL1mKoSTdtpng.fjSZ7NofSZVPo0Vs9/lPzriD0B5vxYO', NULL, '2021-02-08 23:19:03', '2021-02-08 23:19:03'),
(97, 1, 'Parida Herdiawan', '3308020307820002', NULL, '$2y$10$dcH6l1RYHRYpu6xyCtm2Ku2NxW5NiqQqfQXzynzTBx3425a0h1FhK', NULL, '2021-02-08 23:19:45', '2021-02-08 23:19:45'),
(98, 1, 'Prastiyo Diantoro', '3308021509950004', NULL, '$2y$10$lfA9CAk64t9YxZyU9oQv5.mtDQZACCJGWXg4RJB/.bCw1aj5I/9cK', NULL, '2021-02-08 23:20:55', '2021-02-08 23:20:55'),
(99, 1, 'Pristia Widayani', '3308015701900003', NULL, '$2y$10$mdddPpqEdGwBbQaiVvGny.1xVcLQT3uPfiUpHV61ISMjvsz8GuuZq', NULL, '2021-02-08 23:21:47', '2021-02-08 23:21:47'),
(100, 1, 'Priyono', '3404040609920001', NULL, '$2y$10$YWqvneYEzFsYz4A526TzHOTtDJqhvg2TWpKQx/U3S7Wig4CsJTQfW', NULL, '2021-02-08 23:22:28', '2021-02-08 23:22:28'),
(101, 1, 'Puji arto', '3308021112830006', NULL, '$2y$10$U9Ux0bYBia9CufFckERda.uGTSCguZsh8.5FtdacRRaPr/WXSbBuO', NULL, '2021-02-08 23:23:18', '2021-02-08 23:23:18'),
(102, 1, 'Pujiono', '3308022910680001', NULL, '$2y$10$QL0GnwLRGlzF94CpPM7T6eq2sTXlPV.lqPXr.MKiwcUgxv5/jZQwu', NULL, '2021-02-08 23:24:07', '2021-02-08 23:24:07'),
(103, 1, 'Ragil widiantoro', '3308080411900001', NULL, '$2y$10$SCgvgobSCEb54Id/L7oqbOoX4v2coz4wHJkVlHOVEhHdj5gHazVhK', NULL, '2021-02-08 23:24:49', '2021-02-08 23:24:49'),
(104, 1, 'RENDI SETIYO HANTORO', '3308020512870005', NULL, '$2y$10$wvA59.tvxOHgVG.FlTeGSuLzsX4J5MnoO92A6omXtIrONlSlCqyDa', NULL, '2021-02-08 23:25:35', '2021-02-08 23:25:35'),
(105, 1, 'RICKY ADI WIJAYA SUSANTO', '3308051710930001', NULL, '$2y$10$6357aus0MbVR37Yxlx1BBudreOUYYwN.JWhtQEx1NhlEksZ7dL0qO', NULL, '2021-02-08 23:26:14', '2021-02-08 23:26:14'),
(106, 1, 'ROHMAN PINUJI', '3308020310890002', NULL, '$2y$10$FIfTHVTZmjN0aF1Kb9hRRuKx1ULJqpyWULUUvULcUb4R/0fUXhDIi', NULL, '2021-02-08 23:27:09', '2021-02-08 23:27:09'),
(107, 1, 'Rudy hartono', '3308022502790001', NULL, '$2y$10$0aVTZiuaD8uWL4ixF1DjpeGIJXXJBwdxjFp7qkKv/pFWa4ZJc7h1i', NULL, '2021-02-08 23:28:00', '2021-02-08 23:28:00'),
(108, 1, 'Rumadi', '3308020610270001', NULL, '$2y$10$VFzsZ9JOcyRi7QYTQAbUo.zhvXZvQ3cVj.C4druJBGnVFSYxdiTki', NULL, '2021-02-08 23:28:56', '2021-02-08 23:28:56'),
(109, 1, 'Samrodin', '3308101207840001', NULL, '$2y$10$ZYXKClkjNhaaNYZ3ZQJg3eiCW75odNMXriMXrSARg.xP22lnD.eru', NULL, '2021-02-08 23:29:40', '2021-02-08 23:29:40'),
(110, 1, 'SEPTIAN WIDODO', '3308022309960004', NULL, '$2y$10$CLNqabKih5muVOyg8VIZae.TRCdFQ43O/WySwxiiFeb7Fz0r3TSwS', NULL, '2021-02-08 23:30:26', '2021-02-08 23:30:26'),
(111, 1, 'sujarwo', '3308020104760001', NULL, '$2y$10$d4O8DPn.H.fNmjM5Uv/dmumm4iar.OKQcG7wUwyX6atHcUnlYjYpq', NULL, '2021-02-08 23:31:20', '2021-02-08 23:31:20'),
(112, 1, 'Susbiyantoro Danang Priatmojo', '3308022404790002', NULL, '$2y$10$okznI/K/EQAiyOMPErmVseP8i2pszy64p5c0wWIsGyfpp7ELWAzo6', NULL, '2021-02-08 23:32:01', '2021-02-08 23:32:01'),
(113, 1, 'Suyanto', '3308021412810003', NULL, '$2y$10$qH2oBPLwLvNTWLaMJdRZsOW8EiCXIcQxmS/zRArnPHHYGVf91dYne', NULL, '2021-02-08 23:32:57', '2021-02-08 23:32:57'),
(114, 1, 'Tauhid', '3308020712680001', NULL, '$2y$10$2c/E34SZeex1mfIeSRW7uOh1aTkNb2QexyalhNTrTd4zF52wCNF9K', NULL, '2021-02-08 23:33:46', '2021-02-08 23:33:46'),
(115, 1, 'wanto', '3308021107840002', NULL, '$2y$10$5mlNc2LrWK9zNSB.8tcTp.r0I96mPsgkaUk1U9h2SnoHL7FdDcRVq', NULL, '2021-02-08 23:34:28', '2021-02-08 23:34:28'),
(116, 1, 'Yulianto Hidayat', '3308022307810003', NULL, '$2y$10$.4zmBn9U9lDCEMz9YX6at.yCEAxEcGm2ZjyT7.bdtiS4plMwSJedW', NULL, '2021-02-08 23:35:10', '2021-02-08 23:35:10'),
(117, 1, 'Yuyun purnomo exsheridato', '3308021506810010', NULL, '$2y$10$GUA8kPe.K8X0.X/kkG9YVOMeKCQX8mYiXHLgzBIBKkWpXlnREy.G2', NULL, '2021-02-08 23:35:59', '2021-02-08 23:35:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_nik_unique` (`nik`),
  ADD KEY `admin_users_id_foreign` (`users_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `karyawan_nik_unique` (`nik`),
  ADD KEY `karyawan_users_id_foreign` (`users_id`);

--
-- Indexes for table `logharian`
--
ALTER TABLE `logharian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logharian_users_id_foreign` (`users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_nik_index` (`nik`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`),
  ADD KEY `users_roles_id_foreign` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `logharian`
--
ALTER TABLE `logharian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logharian`
--
ALTER TABLE `logharian`
  ADD CONSTRAINT `logharian_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
