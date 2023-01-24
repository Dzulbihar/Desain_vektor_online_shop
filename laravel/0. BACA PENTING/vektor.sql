-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2022 pada 11.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vektor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `pesan` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Vektor', '2020-11-13 10:36:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_portofolio`
--

CREATE TABLE `customer_portofolio` (
  `id` int(11) NOT NULL,
  `portofolio_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_wa` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer_portofolio`
--

INSERT INTO `customer_portofolio` (`id`, `portofolio_id`, `customer_id`, `nama`, `alamat`, `nomor_wa`, `created_at`, `updated_at`) VALUES
(12, 46, 1, 'fatima azahra', 'Morodemak Bonang Demak', '081225131504', '2021-01-03 19:18:11', '2021-01-04 02:18:11'),
(13, 43, 1, 'dzulbihar', 'Kaliwungu', '089234725767', '2021-01-03 19:37:15', '2021-01-04 02:37:15'),
(14, 46, 1, 'teguh', 'semarang', '085826376278', '2021-01-03 19:38:33', '2021-01-04 02:38:33'),
(15, 51, 1, 'Agung', 'Jakarta', '08372653687', '2021-01-03 19:39:38', '2021-01-04 02:39:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(3, 'Kado Wisuda', '2020-11-13 07:36:41', '2020-11-13 07:36:41'),
(4, 'Kado Anniversary', '2020-11-13 07:36:59', '2020-11-13 07:36:59'),
(5, 'Kado Wedding', '2020-11-13 07:37:08', '2020-11-13 07:37:08'),
(6, 'Kado Ulang Tahun', '2020-11-13 07:37:22', '2020-11-13 07:37:22'),
(7, 'Kado Buat Pacar', '2020-11-13 07:37:38', '2020-11-13 07:37:38'),
(8, 'Kado Buat Orangtua', '2020-11-13 07:58:23', '2020-11-13 07:58:23'),
(9, 'Kado Persahabatan', '2020-11-13 08:29:59', '2020-11-13 08:29:59'),
(10, 'Kado Buat Teman', '2020-11-13 08:34:28', '2020-11-13 08:34:28'),
(11, 'Kado Buat Adek', '2020-11-13 08:39:07', '2020-11-13 08:39:07'),
(12, 'Kado Keluarga', '2020-11-13 08:39:18', '2020-11-13 08:39:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_11_12_213757_create_portofolio_table', 1),
(4, '2020_11_12_214026_create_kategori_table', 1),
(5, '2020_11_12_214106_create_pemesan_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_awal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_deal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `kategori`, `foto`, `harga_awal`, `harga_deal`, `keterangan`, `created_at`, `updated_at`) VALUES
(42, 'Kado Wisuda', 'agus skom2.jpg', '50000', '0', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 08:19:46', '2020-11-13 09:43:43'),
(43, 'Kado Buat Teman', 'akmal karikatur ig.jpg', '50000', '0', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 08:31:08', '2020-11-13 10:14:55'),
(44, 'Kado Persahabatan', 'ali background.jpg', '50000', '0', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 08:33:09', '2020-11-13 09:44:00'),
(45, 'Kado Buat Teman', 'asif plag.jpg', '50000', '0', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 08:34:58', '2020-11-13 09:44:10'),
(46, 'Kado Keluarga', 'bapak hitam.jpg', '80000', '0', 'Desain Sepundak (proses lama & detail) . Free Background & Request Ucapan', '2020-11-13 08:36:58', '2020-11-13 10:14:29'),
(47, 'Kado Ulang Tahun', 'cwek An ig cover.jpg', '50000', '0', 'Desain Wanita Sampai Jilbab. Free Background & Request Ucapan', '2020-11-13 08:38:19', '2020-11-13 09:05:36'),
(48, 'Kado Wedding', 'fatah satu.jpg', '50000', '0', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 08:40:53', '2020-11-13 09:06:05'),
(49, 'Kado Buat Adek', 'zalfa art.jpg', '80000', '0', 'Desain Full Body. Free Background & Request Ucapan', '2020-11-13 08:39:53', '2020-11-13 09:05:53'),
(50, 'Kado Buat Teman', 'kentang.jpg', '40000', '0', 'Desain Kepala samping, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 08:41:28', '2020-11-13 09:25:26'),
(51, 'Kado Keluarga', 'Fitri Hijau 1.jpg', '60000', '0', 'Desain Wanita Sampai Jilbab + tangan. Free Background & Request Ucapan', '2020-11-13 08:42:51', '2020-11-13 09:53:03'),
(52, 'Kado Keluarga', 'cetak ortu 8R.jpg', '130000', '0', 'Desain 2 Kepala Half body Sepundak . Free Background & Request Ucapan', '2020-11-13 08:46:29', '2020-11-13 09:17:20'),
(53, 'Kado Keluarga', 'cetak ibu 8R.jpg', '55000', '0', 'Desain Wanita Sampai Jilbab. Free Background & Request Ucapan', '2020-11-13 08:44:10', '2020-11-13 09:55:11'),
(54, 'Kado Ulang Tahun', 'idris peci fer27.jpg', '65000', '35000', 'Desain Half body. Free Background & Request Ucapan', '2020-11-13 08:50:20', '2020-11-13 09:43:28'),
(55, 'Kado Ulang Tahun', 'cetak ika 8R.jpg', '70000', '35000', 'Desain Half body + baju rumit. Free Background & Request Ucapan', '2020-11-13 08:51:40', '2020-11-13 09:27:03'),
(56, 'Kado Wedding', 'idris jadi bg.jpg', '55000', '35000', 'Desain Wanita Sampai Jilbab + Bunga. Free Background & Request Ucapan', '2020-11-13 08:49:00', '2020-11-13 09:29:08'),
(57, 'Kado Anniversary', 'idris biru jadi a4 .jpg', '65000', '35000', 'Desain Half body. Free Background & Request Ucapan', '2020-11-13 08:48:02', '2020-11-13 09:28:41'),
(58, 'Kado Buat Pacar', 'ike hitam.jpg', '70000', '0', 'Desain Half body + bunga. Free Background & Request Ucapan', '2020-11-13 08:53:35', '2020-11-13 09:26:39'),
(59, 'Kado Buat Teman', 'livia.jpg', '55000', '0', 'Desain Wanita Sampai Jilbab. Free Background & Request Ucapan', '2020-11-13 09:41:58', '2020-11-13 09:53:29'),
(60, 'Kado Wedding', '10R pernikahan 2.jpg', '105000', '40000', 'Desain 2 Kepala, Sejilbab & Sekepala . Free Background & Request Ucapan', '2020-11-13 09:21:25', '2020-11-13 09:53:54'),
(61, 'Kado Buat Teman', 'khotib JOOS.jpg', '50000', '0', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 08:55:12', '2020-11-13 09:09:05'),
(62, 'Kado Buat Adek', 'najwa clear 2.jpg', '55000', '0', 'Desain Wanita Sampai Jilbab + Tangan. Free Background & Request Ucapan', '2020-11-13 09:49:46', '2020-11-13 09:49:47'),
(63, 'Kado Anniversary', 'muna jadi.jpg', '55000', '50000', 'Desain Wanita Sampai Jilbab. Free Background & Request Ucapan', '2020-11-13 09:47:11', '2020-11-13 09:56:11'),
(64, 'Kado Buat Teman', 'nadila cetak 8R.jpg', '55000', '0', 'Desain Wanita Sampai Jilbab. Free Background & Request Ucapan', '2020-11-13 09:48:27', '2020-11-13 09:55:42'),
(65, 'Kado Ulang Tahun', 'mae vektor.jpg', '50000', '0', 'Desain Wanita Sampai Jilbab. Free Background & Request Ucapan', '2020-11-13 09:42:37', '2020-11-13 09:42:37'),
(66, 'Kado Buat Teman', 'ninin jadi.jpg', '55000', '0', 'Desain Wanita Sampai Jilbab. Free Background & Request Ucapan', '2020-11-13 09:57:44', '2020-11-13 09:57:44'),
(67, 'Kado Buat Pacar', 'ade gabung.jpg', '55000', '0', 'Desain Wanita Sampai Jilbab. Free Background & Request Ucapan', '2020-11-13 09:52:48', '2020-11-13 09:52:48'),
(68, 'Kado Buat Teman', 'Nawawi JADI .jpg', '65000', '0', 'Desain Half body. Free Background & Request Ucapan', '2020-11-13 09:57:06', '2020-11-13 09:57:06'),
(69, 'Kado Wisuda', 'Napis cetak 10R.jpg', '50000', '0', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 09:50:27', '2020-11-13 09:50:27'),
(70, 'Kado Ulang Tahun', 'olbar fer27 1 1 2.jpg', '70000', '0', 'Desain Half body ++. Free Background & Request Ucapan', '2020-11-13 09:58:50', '2020-11-13 09:58:51'),
(71, 'Kado Buat Teman', 'oll background.jpg', '55000', '0', 'Desain Wanita Sampai Jilbab. Free Background & Request Ucapan', '2020-11-13 09:59:36', '2020-11-13 09:59:36'),
(72, 'Kado Ulang Tahun', 'Order Ultah.jpg', '70000', '50000', 'Desain Half body ++. Free Background & Request Ucapan', '2020-11-13 10:01:08', '2020-11-13 10:01:08'),
(73, 'Kado Wisuda', 'Order cwek wisuda.jpg', '50000', '40000', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 10:01:49', '2020-11-13 10:01:49'),
(74, 'Kado Buat Adek', 'pak edi 1.jpg', '55000', '0', 'Desain Sepundak  . Free Background & Request Ucapan', '2020-11-13 10:03:54', '2020-11-17 19:19:54'),
(75, 'Kado Keluarga', 'Rifki desain.jpg', '55000', '0', 'Desain Sepundak  . Free Background & Request Ucapan', '2020-11-13 10:04:59', '2020-11-13 10:04:59'),
(76, 'Kado Ulang Tahun', 'rifki c ig.jpg', '60000', '0', 'Desain Wanita Sampai Jilbab + Tangan. Free Background & Request Ucapan', '2020-11-13 10:05:42', '2020-11-13 10:05:42'),
(77, 'Kado Buat Teman', 'mad jos.jpg', '50000', '0', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 10:06:12', '2020-11-13 10:06:12'),
(78, 'Kado Wedding', 'wedding.jpg', '130000', '70000', 'Desain 2 Kepala Half body . Free Background & Request Ucapan', '2020-11-13 10:07:20', '2020-11-17 19:37:45'),
(79, 'Kado Wisuda', 'tholib1 biru.jpg', '50000', '35000', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 10:08:03', '2020-11-13 10:08:03'),
(80, 'Kado Buat Teman', 'ufa hijau.jpg', '55000', '0', 'Desain Wanita Sampai Jilbab. Free Background & Request Ucapan', '2020-11-13 10:09:18', '2020-11-13 10:09:35'),
(81, 'Kado Wisuda', 'tholib2 hijau.jpg', '50000', '35000', 'Desain Kepala, Tubuh dari Tamplate kami. Free Background & Request Ucapan', '2020-11-13 10:08:33', '2020-11-13 10:08:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Ahmad Dzul Bihar', 'ahmaddzulbihar69@gmail.com', NULL, '$2y$10$KGvpggB9SsqbIXQT88ufoumy4EKW7EmI4IQ6GJYVFGwtVDXJajHWW', NULL, '2020-11-13 06:40:45', '2020-11-13 06:40:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer_portofolio`
--
ALTER TABLE `customer_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `customer_portofolio`
--
ALTER TABLE `customer_portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=802;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
