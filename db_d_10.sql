-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 05:41 PM
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
-- Database: `db_d_10`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `username`, `nama`, `email`, `password`, `profilePic`, `created_at`, `updated_at`) VALUES
(4, 'adminUsername', 'Admin', 'adminsmak@sch.co.id', 'e07f0454019bf5d776dd0f6481b05c04eef90cd4b9a662ef6e53879161880c32', 'profilePics/qkib9OM7ZPy43NN4pJHb8aACftxgaXOa3Y0xl0Zm.png', '2024-12-17 09:48:35', '2024-12-17 08:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id_guru` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id_guru`, `nama`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'Eulogius Kurdeo Hesay', 'Jawa Tengah', 'Laki-laki', '2000-03-02', '082145795623', '2024-12-17 02:58:01', '2024-12-17 02:58:01'),
(2, 'Louisa Vinadeis Marista', 'Cilacap', 'Perempuan', '2002-03-17', '082145795623', '2024-12-17 02:58:30', '2024-12-17 02:58:30'),
(3, 'Dewi Sriningsih', 'Surabaya', 'Perempuan', '1985-02-12', '085678895645', '2024-12-17 02:59:01', '2024-12-17 02:59:01'),
(4, 'Brian Sinaga', 'Jombang', 'Laki-laki', '2002-02-12', '085679895623', '2024-12-17 02:59:35', '2024-12-17 02:59:35'),
(5, 'Gabriel Adit', 'Maluku', 'Laki-laki', '2000-04-12', '087896563245', '2024-12-17 03:01:56', '2024-12-17 03:01:56'),
(6, 'Ida Ayu Surya Putri', 'Bali', 'Perempuan', '1987-02-15', '089756452948', '2024-12-17 03:02:33', '2024-12-17 03:02:33'),
(7, 'Yohanes Paulus', 'Jakarta', 'Laki-laki', '1992-09-12', '084579522356', '2024-12-17 03:03:04', '2024-12-17 03:03:04'),
(9, 'Thomas Bayu Pratama', 'Kediri', 'Laki-laki', '1999-06-17', '082145795623', '2024-12-17 03:04:30', '2024-12-17 03:04:30'),
(10, 'Valentina Prisilia', 'Bandung', 'Perempuan', '2001-05-02', '084595643197', '2024-12-17 03:05:15', '2024-12-17 03:05:15'),
(13, 'Putri Indah', 'Lampung', 'Perempuan', '2000-09-12', '0856312973112', '2024-12-17 08:37:49', '2024-12-17 08:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ekskuls`
--

CREATE TABLE `jenis_ekskuls` (
  `id_ekskul` bigint(20) UNSIGNED NOT NULL,
  `id_guru` bigint(20) UNSIGNED NOT NULL,
  `nama_ekskul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_ekskuls`
--

INSERT INTO `jenis_ekskuls` (`id_ekskul`, `id_guru`, `nama_ekskul`, `deskripsi`, `hari`, `jam`, `created_at`, `updated_at`) VALUES
(1, 4, 'Band', 'Ekstrakulikuler musikal dengan perpanduan melodi dan lagu-lagu yang indah.', 'Senin, Selasa', '16:00:00', '2024-12-17 03:06:57', '2024-12-17 03:06:57'),
(2, 5, 'Futsal', 'Sparing dengan teknik dan gaya-gaya permainan yang akan dilatih dengan baik', 'Rabu', '16:00:00', '2024-12-17 03:18:41', '2024-12-17 03:18:41'),
(3, 1, 'Basket', 'Sparing dengan teknik dan gaya-gaya permainan yang akan dilatih dengan baik', 'Kamis', '16:00:00', '2024-12-17 03:19:50', '2024-12-17 03:19:50'),
(4, 10, 'Voli', 'Sparing dengan teknik dan gaya-gaya permainan yang akan dilatih dengan baik', 'Jumat', '16:00:00', '2024-12-17 03:20:13', '2024-12-17 03:20:13'),
(6, 3, 'Paskriba', 'Paskriba Keren', 'Selasa', '16:00:00', '2024-12-17 08:39:15', '2024-12-17 08:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `tingkat_kelas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `tingkat_kelas`, `jurusan`, `jumlah_siswa`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, '10', 'MIPA', 24, '10 MIPA 1', '2024-12-17 02:49:19', '2024-12-17 02:49:19'),
(2, '10', 'MIPA', 21, '10 MIPA 2', '2024-12-17 02:49:32', '2024-12-17 02:49:32'),
(3, '10', 'MIPA', 22, '10 MIPA 3', '2024-12-17 02:49:45', '2024-12-17 02:49:45'),
(4, '10', 'IPS', 23, '10 IPS 1', '2024-12-17 02:50:04', '2024-12-17 02:50:04'),
(5, '10', 'IPS', 23, '10 IPS 2', '2024-12-17 02:50:28', '2024-12-17 02:50:28'),
(6, '10', 'IPS', 22, '10 IPS 3', '2024-12-17 02:50:43', '2024-12-17 02:50:43'),
(7, '11', 'MIPA', 22, '11 MIPA 1', '2024-12-17 02:51:11', '2024-12-17 02:51:11'),
(8, '11', 'MIPA', 23, '11 MIPA 2', '2024-12-17 02:51:25', '2024-12-17 02:51:25'),
(9, '11', 'MIPA', 23, '11 MIPA 3', '2024-12-17 02:51:37', '2024-12-17 02:51:37'),
(10, '11', 'IPS', 24, '11 IPS 1', '2024-12-17 02:51:54', '2024-12-17 02:51:54'),
(11, '11', 'IPS', 21, '11 IPS 2', '2024-12-17 02:53:38', '2024-12-17 02:53:38'),
(12, '11', 'IPS', 20, '11 IPS 3', '2024-12-17 02:53:49', '2024-12-17 02:53:49'),
(13, '12', 'MIPA', 23, '12 MIPA 1', '2024-12-17 02:54:23', '2024-12-17 02:54:23'),
(14, '12', 'MIPA', 25, '12 MIPA 2', '2024-12-17 02:54:33', '2024-12-17 02:54:33'),
(15, '12', 'MIPA', 22, '12 MIPA 3', '2024-12-17 02:54:41', '2024-12-17 02:54:41'),
(16, '12', 'IPS', 21, '12 IPS 1', '2024-12-17 02:54:53', '2024-12-17 02:54:53'),
(17, '12', 'IPS', 23, '12 IPS 2', '2024-12-17 02:55:02', '2024-12-17 02:55:02'),
(18, '12', 'IPS', 24, '12 IPS 3', '2024-12-17 02:55:10', '2024-12-17 02:55:10'),
(20, '12', 'MIPA', 21, '12 MIPA 4', '2024-12-17 08:37:04', '2024-12-17 08:37:04');

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
(10, '2024_12_06_122939_create_kelas_table', 1),
(11, '2024_12_06_122940_create_admins_table', 1),
(12, '2024_12_06_122941_create_pendaftaran_siswas_table', 1),
(13, '2024_12_06_122942_create_gurus_table', 1),
(14, '2024_12_06_125518_create_siswas_table', 1),
(15, '2024_12_06_125606_create_jenis_ekskuls_table', 1),
(16, '2024_12_06_130554_create_pendaftaran_ekskuls_table', 1),
(17, '2024_12_06_132709_create_personal_access_tokens_table', 1),
(18, '2024_12_15_093743_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_ekskuls`
--

CREATE TABLE `pendaftaran_ekskuls` (
  `id_pendaftaran` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_ekskul` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran_ekskuls`
--

INSERT INTO `pendaftaran_ekskuls` (`id_pendaftaran`, `id_siswa`, `id_ekskul`, `tanggal_pendaftaran`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2024-12-17', '2024-12-17 05:39:01', '2024-12-17 05:39:01'),
(4, 6, 3, '2024-12-12', '2024-12-17 07:06:17', '2024-12-17 07:06:17'),
(6, 9, 6, '2024-12-17', '2024-12-17 09:04:46', '2024-12-17 09:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_siswas`
--

CREATE TABLE `pendaftaran_siswas` (
  `id_pendaftaranSiswa` bigint(20) UNSIGNED NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('pending','accepted','rejected') NOT NULL DEFAULT 'pending',
  `tanggal_pendaftaran` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran_siswas`
--

INSERT INTO `pendaftaran_siswas` (`id_pendaftaranSiswa`, `nisn`, `nama`, `profilePic`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `agama`, `no_telp`, `asal_sekolah`, `email`, `password`, `status`, `tanggal_pendaftaran`, `created_at`, `updated_at`) VALUES
(1, '300545989584', 'Adrian Setiawan', 'profilePics/pendaftaran/V1l4hf7XG5uasEmBXAuBZw9JRgSXmewRFzDrz7Ir.jpg', 'Laki-laki', '2003-02-12', 'Banyuwangi', 'Kristen', '081546973164', 'SMP Negeri 1 Banyuwangi', 'adrian@gmail.com', '12345678', 'accepted', '2024-12-17', '2024-12-17 03:24:31', '2024-12-17 03:44:17'),
(2, '300546798456', 'Lawrence Lorenzo', 'profilePics/pendaftaran/DXLYM8iC90kKA0gBd2rlZlBxr9tUYG5sldQ2aHVf.png', 'Laki-laki', '2004-05-24', 'Sidoarjo', 'Kristen', '085631462945', 'SMAK St. Albertus Sidoarjo', 'lorenzo@gmail.com', '12345678', 'accepted', '2024-12-17', '2024-12-17 03:27:42', '2024-12-17 03:44:30'),
(3, '300546985698', 'Lana Marcel Argya N', 'profilePics/pendaftaran/bqgVgZ1xj6FqdZVLLGmzEzuxNk5LzL5uVlRAbBSc.jpg', 'Laki-laki', '2004-05-12', 'Kediri', 'Kristen', '089756982156', 'SMP St. Antonius Kediri', 'lana@gmail.com', '12345678', 'accepted', '2024-12-17', '2024-12-17 03:29:37', '2024-12-17 03:44:22'),
(4, '300546984897', 'Rafael Zeconiah Kusuma', 'profilePics/pendaftaran/STeXMixD3EB12YMQGRI6fzHN78F9BWMNDPaOgIUw.png', 'Laki-laki', '2004-03-12', 'Kediri', 'Katolik', '085631469526', 'SMP St. Antonius Kediri', 'rafael@gmail.com', '12345678', 'accepted', '2024-12-17', '2024-12-17 03:31:14', '2024-12-17 06:42:46'),
(6, '300546984597', 'Erick Prakoso', 'profilePics/pendaftaran/FNVM6psH6CNOMqFCc3p62fBZei66T83hwgHob1VW.png', 'Laki-laki', '2004-05-08', 'Kediri', 'Katolik', '084579522146', 'SMP St. Antonius Kediri', 'erick@gmail.com', '12345678', 'accepted', '2024-12-17', '2024-12-17 03:34:11', '2024-12-17 03:46:56'),
(7, '300546981978', 'Angga Kurniawan', 'profilePics/pendaftaran/HWPasV9aGOJjSPkdxaGbvaTMZG0IUXkENTsxXxAB.png', 'Laki-laki', '2003-12-09', 'Kediri', 'Kristen', '084579521654', 'SMP St. Antonius Kediri', 'angga@gmail.com', 'adminsmak', 'accepted', '2024-12-17', '2024-12-17 03:35:53', '2024-12-17 03:44:24'),
(9, '300546980791', 'Yoab Sintara', 'profilePics/pendaftaran/WfYevRAoEvM7hbZSjFzRYGB9MqwZNrbemmb8xglp.png', 'Laki-laki', '2004-09-08', 'Tangerang', 'Hindu', '084579524679', 'SMP 56 Tangerang', 'sintara@gmail.com', '12345678', 'accepted', '2024-12-17', '2024-12-17 03:39:52', '2024-12-17 03:44:28'),
(11, '3005469802233', 'James A', 'profilePics/pendaftaran/4HiuARWpqdmyiZam2Iwq5z7MYD9AOzxXZ0mnIXXo.png', 'Laki-laki', '2024-12-13', 'Palembang', 'Kristen', '085413462124', 'SMP 27 Palembang', 'jamesa@gmail.com', '12345678', 'accepted', '2024-12-17', '2024-12-17 08:22:09', '2024-12-17 08:22:42'),
(12, '3005455678894565', 'Anton', 'profilePics/pendaftaran/qIlsMda86CQUOvMFsSldn1rsyvgLggB4kIc49Lso.png', 'Laki-laki', '2004-07-14', 'Bekasi', 'Kristen', '085621329845', 'SMP 9 Bekasi', 'anton@gmail.com', '12345678', 'accepted', '2024-12-17', '2024-12-17 08:58:23', '2024-12-17 08:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('fA79TK5TJmqRjmmebrHFswNkeRLe8POKSboZXH7Z', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQVZvcmRMWGR3SUxBQnVyeExub1hxZWNYVkdWMjV1M3VSRnFtWEtacyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9Vc2VyL2hvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjg6InNpc3dhX2lkIjtpOjk7fQ==', 1734451525);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_pendaftaranSiswa` bigint(20) UNSIGNED NOT NULL,
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('pending','accepted','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id_siswa`, `id_pendaftaranSiswa`, `id_admin`, `id_kelas`, `nisn`, `nama`, `profilePic`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `agama`, `no_telp`, `asal_sekolah`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 6, '300545989584', 'Adrian Setiawan', 'profilePics/pendaftaran/V1l4hf7XG5uasEmBXAuBZw9JRgSXmewRFzDrz7Ir.jpg', 'Laki-laki', '2003-02-12', 'Banyuwangi', 'Kristen', '081546973164', 'SMP Negeri 1 Banyuwangi', 'adrian@gmail.com', '12345678', 'accepted', '2024-12-17 03:44:17', '2024-12-17 03:44:17'),
(2, 3, 4, 2, '300546985698', 'Lana Marcel Argya N', 'profilePics/pendaftaran/bqgVgZ1xj6FqdZVLLGmzEzuxNk5LzL5uVlRAbBSc.jpg', 'Laki-laki', '2004-05-12', 'Kediri', 'Kristen', '089756982156', 'SMP St. Antonius Kediri', 'lana@gmail.com', 'lana1234', 'accepted', '2024-12-17 03:44:22', '2024-12-17 05:11:50'),
(6, 6, 4, 2, '300546984597', 'Erick Prakoso', 'profilePics/pendaftaran/FNVM6psH6CNOMqFCc3p62fBZei66T83hwgHob1VW.png', 'Laki-laki', '2004-05-08', 'Kediri', 'Katolik', '084579522146', 'SMP St. Antonius Kediri', 'erick@gmail.com', '12345678', 'accepted', '2024-12-17 03:46:56', '2024-12-17 03:46:56'),
(7, 4, 4, 6, '300546984897', 'Rafael Zeconiah Kusuma', 'profilePics/siswa/lfj4sPQyua0tjKhKcw5wY4bUnuNRer98xmkPR65B.png', 'Laki-laki', '2004-03-12', 'Kediri', 'Katolik', '085631469526', 'SMP St. Antonius Kediri', 'rafael@gmail.com', '12345678', 'accepted', '2024-12-17 06:42:46', '2024-12-17 08:41:00'),
(9, 12, 4, 4, '3005455678894565', 'Anton', 'profilePics/siswa/t90UodIANgPQ4Yz9MRv1bK2tTHN3gL51jEXZiTQb.png', 'Laki-laki', '2004-07-14', 'Bekasi', 'Kristen', '085621329845', 'SMP 9 Bekasi', 'anton12@gmail.com', 'anton123', 'accepted', '2024-12-17 08:58:47', '2024-12-17 09:00:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jenis_ekskuls`
--
ALTER TABLE `jenis_ekskuls`
  ADD PRIMARY KEY (`id_ekskul`),
  ADD KEY `jenis_ekskuls_id_guru_foreign` (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran_ekskuls`
--
ALTER TABLE `pendaftaran_ekskuls`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `pendaftaran_ekskuls_id_siswa_foreign` (`id_siswa`),
  ADD KEY `pendaftaran_ekskuls_id_ekskul_foreign` (`id_ekskul`);

--
-- Indexes for table `pendaftaran_siswas`
--
ALTER TABLE `pendaftaran_siswas`
  ADD PRIMARY KEY (`id_pendaftaranSiswa`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `siswas_nisn_unique` (`nisn`),
  ADD UNIQUE KEY `siswas_email_unique` (`email`),
  ADD KEY `siswas_id_admin_foreign` (`id_admin`),
  ADD KEY `siswas_id_kelas_foreign` (`id_kelas`),
  ADD KEY `siswas_id_pendaftaransiswa_foreign` (`id_pendaftaranSiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id_guru` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jenis_ekskuls`
--
ALTER TABLE `jenis_ekskuls`
  MODIFY `id_ekskul` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pendaftaran_ekskuls`
--
ALTER TABLE `pendaftaran_ekskuls`
  MODIFY `id_pendaftaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftaran_siswas`
--
ALTER TABLE `pendaftaran_siswas`
  MODIFY `id_pendaftaranSiswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id_siswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenis_ekskuls`
--
ALTER TABLE `jenis_ekskuls`
  ADD CONSTRAINT `jenis_ekskuls_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `gurus` (`id_guru`) ON DELETE CASCADE;

--
-- Constraints for table `pendaftaran_ekskuls`
--
ALTER TABLE `pendaftaran_ekskuls`
  ADD CONSTRAINT `pendaftaran_ekskuls_id_ekskul_foreign` FOREIGN KEY (`id_ekskul`) REFERENCES `jenis_ekskuls` (`id_ekskul`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendaftaran_ekskuls_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id_siswa`) ON DELETE CASCADE;

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswas_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswas_id_pendaftaransiswa_foreign` FOREIGN KEY (`id_pendaftaranSiswa`) REFERENCES `pendaftaran_siswas` (`id_pendaftaranSiswa`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
