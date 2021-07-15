-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2020 pada 09.16
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_layanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) COLLATE utf8_bin NOT NULL,
  `nik` varchar(50) COLLATE utf8_bin NOT NULL,
  `umur` varchar(3) COLLATE utf8_bin NOT NULL,
  `pekerjaan` varchar(150) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(255) COLLATE utf8_bin NOT NULL,
  `rangka` varchar(255) COLLATE utf8_bin NOT NULL,
  `tujuan` varchar(255) COLLATE utf8_bin NOT NULL,
  `dari` date NOT NULL,
  `hingga` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `bus`
--

INSERT INTO `bus` (`id`, `nama`, `nik`, `umur`, `pekerjaan`, `alamat`, `rangka`, `tujuan`, `dari`, `hingga`, `created_at`, `updated_at`) VALUES
(1, 'HERMAN', '2345690', '35', 'Wiraswasta', 'kamboja', 'pariwisata', 'Bandung', '2020-10-13', '2020-10-17', '2020-10-13 17:44:20', '2020-10-13 17:44:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_login`
--

CREATE TABLE `dt_login` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `dt_login`
--

INSERT INTO `dt_login` (`id`, `login`, `created_at`, `updated_at`) VALUES
(2, 'admin', '2020-10-22 07:14:22', '2020-10-22 07:14:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jarak`
--

CREATE TABLE `jarak` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(150) COLLATE utf8_bin NOT NULL,
  `nik` varchar(50) COLLATE utf8_bin NOT NULL,
  `pekerjaan` varchar(150) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(255) COLLATE utf8_bin NOT NULL,
  `dari` varchar(150) COLLATE utf8_bin NOT NULL,
  `hingga` varchar(150) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kir`
--

CREATE TABLE `kir` (
  `id` int(11) NOT NULL,
  `no` varchar(50) COLLATE utf8_bin NOT NULL,
  `tgl` date NOT NULL,
  `nomor` varchar(50) COLLATE utf8_bin NOT NULL,
  `nama` varchar(150) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(255) COLLATE utf8_bin NOT NULL,
  `uji` varchar(50) COLLATE utf8_bin NOT NULL,
  `merk` varchar(150) COLLATE utf8_bin NOT NULL,
  `type` varchar(150) COLLATE utf8_bin NOT NULL,
  `tahun` varchar(4) COLLATE utf8_bin NOT NULL,
  `landasan` varchar(150) COLLATE utf8_bin NOT NULL,
  `mesin` varchar(150) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `status` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `status`) VALUES
(1, 'ASNETI,SE', '316001', 'user'),
(2, 'NINGSIH', '316002', 'user'),
(3, 'HERLY VIVIEN,SE', '316003', 'user'),
(4, 'MAYASARI SJAM,SE', '316004', 'user'),
(5, 'WINDA AGUSTIN', '316005', 'user'),
(6, 'YOPI CANDRA', '316006', 'user'),
(7, 'SANDI ALLAMSYAH P', '316007', 'user'),
(8, 'ALAMSYAH', '316009', 'user'),
(9, 'M.ADAN JORGI', '316011', 'user'),
(10, 'HIDAYATULLAH,S.SOS', '316012', 'user'),
(11, 'Candra Wijaya', '316013', 'user'),
(12, 'DONI KURNIAWAN', '316014', 'user'),
(13, 'Doni Yansyah', '316015', 'user'),
(14, 'SUHADA, S.Pd', '316057', 'user'),
(15, 'HANISAH,SH', '316058', 'user'),
(16, 'DIMAS JORDANA FITRA', '316059', 'user'),
(17, 'M. ZARKASIH', '316060', 'user'),
(18, 'M. IRPAN', '316061', 'user'),
(19, 'YUDI PRATAMA', '316062', 'user'),
(20, 'Fidi Pratomo', '316063', 'user'),
(21, 'ENI SARTIKA, SE', '316064', 'user'),
(22, 'RESI WULANDARI,SE', '316065', 'user'),
(23, 'SUDARWANDI', '316066', 'user'),
(24, 'NIA KANDISA, S.Pd', '316069', 'user'),
(25, 'LINI FEBRI ZULFIA', '336096', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengawas`
--

CREATE TABLE `pengawas` (
  `id` int(11) NOT NULL,
  `no` varchar(50) COLLATE utf8_bin NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(150) COLLATE utf8_bin NOT NULL,
  `nik` varchar(50) COLLATE utf8_bin NOT NULL,
  `perusahaan` varchar(255) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(255) COLLATE utf8_bin NOT NULL,
  `stnk` varchar(50) COLLATE utf8_bin NOT NULL,
  `stuk` varchar(150) COLLATE utf8_bin NOT NULL,
  `merk` varchar(150) COLLATE utf8_bin NOT NULL,
  `tahun` varchar(4) COLLATE utf8_bin NOT NULL,
  `jenis` varchar(150) COLLATE utf8_bin NOT NULL,
  `jumlah` varchar(4) COLLATE utf8_bin NOT NULL,
  `lain` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `nomor` varchar(50) COLLATE utf8_bin NOT NULL,
  `asal` varchar(150) COLLATE utf8_bin NOT NULL,
  `pengantar` varchar(150) COLLATE utf8_bin NOT NULL,
  `perihal` varchar(255) COLLATE utf8_bin NOT NULL,
  `tgl_terima` date NOT NULL,
  `tgl_surat` date NOT NULL,
  `penerima` varchar(150) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(150) COLLATE utf8_bin NOT NULL,
  `nik` varchar(50) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(255) COLLATE utf8_bin NOT NULL,
  `pekerjaan` varchar(150) COLLATE utf8_bin NOT NULL,
  `riwayat` varchar(255) COLLATE utf8_bin NOT NULL,
  `tujuan` varchar(255) COLLATE utf8_bin NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `email_verified_at`, `password`, `remember_token`, `p_name`, `created_at`, `updated_at`) VALUES
(32, 'user', 'ASNETI,SE', 'ASNETI,SE', NULL, '$2y$10$9mXIrqG1pypH.LXVMj8hIe.J.RkbxBUq2PK5ydaE9/G6yf/wk1HA6', NULL, '316001', '2020-10-19 07:23:42', '2020-10-19 07:23:42'),
(33, 'user', 'WINDA AGUSTIN', 'WINDA AGUSTIN', NULL, '$2y$10$MN12uamKqkm3awd9kKQ13uPz151CiZqLRv6KBmHJID7b.OHjgsL5O', NULL, '316005', '2020-10-19 08:20:47', '2020-10-19 08:20:47'),
(34, 'user', 'SANDI ALLAMSYAH P', 'SANDI ALLAMSYAH P', NULL, '$2y$10$S.WeQQxIOKRCTz.UWEozWO.kwYkEV3P5TloP2pe0KSL2rphmvOjCK', NULL, '316007', '2020-10-19 08:22:47', '2020-10-19 08:22:47'),
(35, 'user', 'ALAMSYAH', 'ALAMSYAH', NULL, '$2y$10$56tQy6p3lL7fOlssQF5b4eQcVOrX/Oxcziff3jLvviG48U9UKQdWS', NULL, '316009', '2020-10-19 08:25:19', '2020-10-19 08:25:19'),
(36, 'user', 'M.ADAN JORGI', 'M.ADAN JORGI', NULL, '$2y$10$spsLgxYdyjEi5xBRFDy4L.1M.zKxvJQ1OVyMOl2edwhV1qtA5BIxy', NULL, '316011', '2020-10-19 09:31:39', '2020-10-19 09:31:39'),
(37, 'user', 'HIDAYATULLAH,S.SOS', 'HIDAYATULLAH,S.SOS', NULL, '$2y$10$cI1aWourcnRLSV/3Wz/6T.E1jGgk23NI0V10yaJsDQ0QaP6qKC8EG', NULL, '316012', '2020-10-20 08:08:33', '2020-10-20 08:08:33'),
(38, 'user', 'Candra Wijaya', 'Candra Wijaya', NULL, '$2y$10$9y1BlVvwwWA1sCNeAC6areJavX6CtC1TDrkW4ljAv9RAKR55w2fqW', NULL, '316013', '2020-10-20 08:09:00', '2020-10-20 08:09:00'),
(39, 'user', 'DONI KURNIAWAN', 'DONI KURNIAWAN', NULL, '$2y$10$Z1/2.mhFNxfTBZvlNVV6neXQL0xzoTToN41MBmnuCltRlNlL598UK', NULL, '316014', '2020-10-20 08:09:36', '2020-10-20 08:09:36'),
(40, 'user', 'Doni Yansyah', 'Doni Yansyah', NULL, '$2y$10$jtWhbBLNeq3NQQ8KD5GvZOCh14zS2kip1lCzV6U9npqjdqNLz6Vga', NULL, '316015', '2020-10-20 08:09:56', '2020-10-20 08:09:56'),
(41, 'user', 'SUHADA, S.Pd', 'SUHADA, S.Pd', NULL, '$2y$10$64z4fyqTAu.Dau91KTaqpeNICNJaJCEOiXRINQVTX9rsiuLFpxG0u', NULL, '316057', '2020-10-20 08:10:15', '2020-10-20 08:10:15'),
(42, 'user', 'HANISAH,SH', 'HANISAH,SH', NULL, '$2y$10$F8T5HqQDrgPXu9GW.Ab5j.Z1/aGecdEu8FdEwntvPFwrBwj1eWjbu', NULL, '316058', '2020-10-20 08:11:07', '2020-10-20 08:11:07'),
(43, 'user', 'M. ZARKASIH', 'M. ZARKASIH', NULL, '$2y$10$SKiRE7Pgj7MQUB174KSdleWxTGA866snQrkPvEp1c5aI3NP4ijNBu', NULL, '316060', '2020-10-20 08:11:33', '2020-10-20 08:11:33'),
(44, 'user', 'M. IRPAN', 'M. IRPAN', NULL, '$2y$10$cQbeFzHbGHHVkYgNe2thLO3K872OMEwzUTDScnomRv55r9ZUCkj4G', NULL, '316061', '2020-10-20 08:11:53', '2020-10-20 08:11:53'),
(45, 'user', 'Fidi Pratomo', 'Fidi Pratomo', NULL, '$2y$10$/36rGEcoiVZDUwH4hJZZmuS.rAzYcc8YKxl7Xtpv/W8FnGi.atvtm', NULL, '316063', '2020-10-20 08:12:13', '2020-10-20 08:12:13'),
(46, 'user', 'ENI SARTIKA, SE', 'ENI SARTIKA, SE', NULL, '$2y$10$Glg2Xt3d0nJOhOJ5pJ4eMuBFp6BvoUmbiCaHIkyCbBAonu5S6SYbG', NULL, '316064', '2020-10-20 08:12:35', '2020-10-20 08:12:35'),
(47, 'user', 'RESI WULANDARI,SE', 'RESI WULANDARI,SE', NULL, '$2y$10$20xjbnh5.F8uONFceW9fzuOClm.fa8W4xN9tt/aBtBjk4rNENf1gq', NULL, '316065', '2020-10-20 08:12:54', '2020-10-20 08:12:54'),
(48, 'user', 'NIA KANDISA, S.Pd', 'NIA KANDISA, S.Pd', NULL, '$2y$10$/SPB7LfmvwM3zC5.7DyaGOzkfwLZOh2k3dKO1Xa5ZcdzN0L6GPDRu', NULL, '316069', '2020-10-20 08:14:20', '2020-10-20 08:14:20'),
(50, 'user', 'LINI FEBRI ZULFIA', 'LINI FEBRI ZULFIA', NULL, '$2y$10$MYbFVjioNN2uceiesSr26.A4rEAAGXy2vk.1uTwANgYYYsm9/lAKW', NULL, '336096', '2020-10-20 08:30:49', '2020-10-20 08:30:49'),
(51, 'admin', 'admin', 'admin', NULL, '$2y$10$G8EtAcFOBE5RPsd7Ky.hXuiT/0Tts968gi8VaaoGXGQheUEspSTTG', NULL, '4dm1n', '2020-10-21 02:35:58', '2020-10-21 02:35:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dt_login`
--
ALTER TABLE `dt_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jarak`
--
ALTER TABLE `jarak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kir`
--
ALTER TABLE `kir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengawas`
--
ALTER TABLE `pengawas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dt_login`
--
ALTER TABLE `dt_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jarak`
--
ALTER TABLE `jarak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kir`
--
ALTER TABLE `kir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengawas`
--
ALTER TABLE `pengawas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
