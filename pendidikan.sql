-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 08:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendidikan`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `namaguru` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `gambar_guru` blob DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `namaguru`, `alamat`, `jeniskelamin`, `gambar_guru`, `updated_at`, `created_at`) VALUES
(6, 'Hendra Muswara', 'Sarmen', 'Laki Laki', 0x313730303132303539342e706e67, '2023-11-16 07:43:14', '2023-11-09 08:04:27'),
(8, 'Reza NurPanther', 'Tg.uma', 'Laki Laki', 0x313730303132303630332e706e67, '2023-11-16 07:43:23', '2023-11-10 06:41:52'),
(9, 'Nico Tambunan', 'Tiban Baru', 'Laki Laki', 0x313730303132303631312e706e67, '2023-11-16 07:43:31', '2023-11-13 03:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `mapel` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `jam` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `mapel`, `kelas`, `jam`, `updated_at`, `created_at`) VALUES
(3, 3, 16, 10, '2023-11-09 08:33:55', '2023-11-09 08:33:55'),
(4, 4, 17, 8, '2023-11-10 06:43:36', '2023-11-10 06:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `namajurusan` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `namajurusan`, `deskripsi`, `updated_at`, `created_at`) VALUES
(1, 'Pengembangan Perangkat Lunak dan Gim', 'Mewujudkan program komputer yang relevan dengan kebutuhan masyarakat menjadi salah satu goals dari para lulusan program studi Rekayasa Perangkat Lunak. Siswa(i) akan secara aktif mempelajari dan melaksanakan praktek yang dimulai dari algoritma computer hingga bahasa pemograman. Tak hanya pembuatan, dalam lingkungan Rekayasa Perangkat Lunak juga akan berfokus pada pemeliharaan dan manajemen organisasi serta kualitas perangkat lunak melalui pendekatan-pendekatan yang akan diterima dari para tenaga pendidik professional.', '2023-11-15 09:52:43', '2023-11-15 09:52:43'),
(2, 'Akuntansi Keuangan Lembaga', 'Menjadi jantung dari perputaran operasional sebuah perusahaan adalah salah satu visi para penikmat program studi Akuntansi. Laporan keuangan hasil dari para lulusan akuntansi akan menjadi bahan evaluasi dalam pengambilan langkah selanjutnya. Melangkah kedalam proses tersebut, para siswa(i) diharapkan mampu memaksimalkan potensi diri melalui berbagai aspek pelajaran dan praktek serta IFRS (International Financial Reporting System) yang akan diadopsi oleh Multistudi High School.', '2023-11-15 09:52:43', '2023-11-15 09:52:43'),
(3, 'Desain Komunikasi Visual', 'Serba terdigitalisasi menjadikan para pelaku yang berkecimpung dalam dunia multimedia menjadi pemenangnya. Perubahan besar telah hadir ditengah masyarakat sehingga kebutuhan akan sumber daya manusia dalam bidang ini akan menjadi semakin tinggi. Para siswa(i) dituntun untuk aktif dalam mempelajari segala yang berkenaan dari produksi video, desain grafis, fotografi, bahkan animasi computer. Proses tersebut bertujuan untuk memaksimalkan media untuk penyampaian informasi kepada publik.', '2023-11-15 09:54:20', '2023-11-15 09:54:20'),
(4, 'Teknik Jaringan Komputer dan Telekomunikasi', 'Antusias terhadap seluk beluk perangkat computer serta operating systemnya dapat menjadi langkah awal bagi para siswa(i) memilih program studi Teknik Komputer dan Jaringan. Mendalami ilmu dan praktek dalam dunia teknologi menjadikan nilai yang akan kian mahal pada masa yang akan datang. Keahlian tambahan seperti penguasaan Microsoft Office akan diberikan dalam berlangsungnya proses pembelajaran selama berada di Multistudi High School. Berani menjadi salah satu yang berperan dalam proses transformasi digital di Indonesia?', '2023-11-15 09:54:20', '2023-11-15 09:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `namakelas` varchar(255) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `kursi` int(11) NOT NULL,
  `meja` int(11) NOT NULL,
  `gambar_kelas` blob NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `namakelas`, `id_guru`, `kursi`, `meja`, `gambar_kelas`, `updated_at`, `created_at`) VALUES
(16, 'XI PPLG 2', 6, 15, 15, 0x313639393531373439312e706e67, '2023-11-09 08:11:31', '2023-11-09 08:11:31'),
(17, 'XI TJKT 2', 8, 15, 15, 0x313639393539383536382e6a7067, '2023-11-10 06:42:48', '2023-11-10 06:42:48'),
(18, 'XII TJKT 1', 6, 28, 28, 0x313639393834363534372e706e67, '2023-11-15 09:32:27', '2023-11-13 03:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `namamapel` varchar(225) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `namamapel`, `id_guru`, `updated_at`, `created_at`) VALUES
(3, 'WEB', 6, '2023-11-09 08:28:49', '2023-11-09 08:28:49'),
(4, 'TLJ', 8, '2023-11-10 06:42:06', '2023-11-10 06:42:06'),
(5, 'PKN', 9, '2023-11-13 03:36:14', '2023-11-13 03:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_01_084129_create_guru_table', 2),
(7, '2023_11_01_084408_create_siswa_table', 3),
(8, '2023_11_07_025010_create_user_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `kuis` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `total_nilai` decimal(10,0) DEFAULT NULL,
  `keterangan` varchar(225) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `tugas`, `kuis`, `uts`, `uas`, `total_nilai`, `keterangan`, `updated_at`, `created_at`) VALUES
(7, 5, 100, 100, 100, 30, 72, 'D Cukup', '2023-11-09 08:40:52', '2023-11-09 08:40:30'),
(8, 6, 0, 100, 100, 100, 90, 'B Baik', '2023-11-10 06:44:06', '2023-11-10 06:43:54'),
(10, 7, 90, 100, 80, 95, 91, 'A Sangat Bagus', '2023-11-13 08:08:28', '2023-11-13 08:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengembangan`
--

CREATE TABLE `pengembangan` (
  `id_pengembangan` int(11) NOT NULL,
  `namapengembangan` varchar(225) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembangan`
--

INSERT INTO `pengembangan` (`id_pengembangan`, `namapengembangan`, `jumlah`, `jenis`, `updated_at`, `created_at`) VALUES
(2, 'Osis', 40, 'Organisasi', '2023-11-09 07:05:22', '2023-11-09 07:04:55'),
(3, 'Rohis', 56, 'Organisasi', '2023-11-09 07:05:41', '2023-11-09 07:05:41'),
(4, 'Band', 10, 'Ekstrakulikuler', '2023-11-09 07:05:53', '2023-11-09 07:05:53'),
(5, 'English Club', 78, 'Intrakulikuler', '2023-11-09 07:06:17', '2023-11-09 07:06:17');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `namasiswa` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `gambar_siswa` blob DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `namasiswa`, `alamat`, `jeniskelamin`, `id_kelas`, `gambar_siswa`, `updated_at`, `created_at`) VALUES
(5, 'Dini Aminarty', 'sengkuang', 'Perempuan', 16, 0x313730303131383539372e6a7067, '2023-11-16 07:09:57', '2023-11-09 08:21:38'),
(6, 'Salman Syamsudin', 'Seraya', 'Laki Laki', 17, 0x313730303131383632372e6a7067, '2023-11-16 07:10:27', '2023-11-10 06:43:14'),
(7, 'Hendro', 'Batu Aji', 'Laki Laki', 17, 0x313730303131383635342e6a7067, '2023-11-16 07:10:54', '2023-11-13 02:38:36'),
(8, 'Karta', 'sengkuang', 'Laki Laki', 18, 0x313730303131383639342e706e67, '2023-11-16 07:11:34', '2023-11-13 03:33:47'),
(9, 'Divo', 'Sadai', 'Laki Laki', 18, 0x313730303131383731332e706e67, '2023-11-16 07:11:53', '2023-11-13 15:57:27'),
(10, 'Rashed', 'Villa Mas', 'Laki Laki', 18, 0x313730303131383738322e6a7067, '2023-11-16 07:13:02', '2023-11-16 07:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Hendra Muswara', 'henmus@gmail.com', NULL, '$2y$10$wfoXN4TlN9/H.AxXkoe08uBd9DsfzsAppCgb7kLAzwClAZNC7eZym', NULL, NULL, '2023-11-16 00:12:07'),
(5, 'user', 'pmb@mail.com', NULL, '$2y$12$aKEvkjrIkWrBKblYAZ3mvOQPHCcFOryfkPTLyHDz23ATf7TVzy5wS', NULL, '2023-11-09 01:51:44', '2023-11-09 01:51:44');

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
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `mapel` (`mapel`,`kelas`),
  ADD KEY `jadwalkelas` (`kelas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `walikelas` (`id_guru`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`);

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
-- Indexes for table `pengembangan`
--
ALTER TABLE `pengembangan`
  ADD PRIMARY KEY (`id_pengembangan`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `kelas` (`id_kelas`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengembangan`
--
ALTER TABLE `pengembangan`
  MODIFY `id_pengembangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwalkelas` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwalmapel` FOREIGN KEY (`mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `GURU` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `gurumapel` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilaisiswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `Kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
