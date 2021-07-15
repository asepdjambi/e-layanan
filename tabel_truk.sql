-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2021 pada 11.34
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `truk`
--

CREATE TABLE `truk` (
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
  `no_srut` varchar(50) COLLATE utf8_bin NOT NULL,
  `panjang_u` varchar(5) COLLATE utf8_bin NOT NULL,
  `lebar_u` varchar(5) COLLATE utf8_bin NOT NULL,
  `tinggi_u` varchar(5) COLLATE utf8_bin NOT NULL,
  `roh` varchar(5) COLLATE utf8_bin NOT NULL,
  `foh` varchar(5) COLLATE utf8_bin NOT NULL,
  `jsumbu` varchar(5) COLLATE utf8_bin NOT NULL,
  `sumbu1` varchar(5) COLLATE utf8_bin NOT NULL,
  `sumbu2` varchar(5) COLLATE utf8_bin NOT NULL,
  `sumbu3` varchar(5) COLLATE utf8_bin NOT NULL,
  `qutama` varchar(5) COLLATE utf8_bin NOT NULL,
  `panjang_b` varchar(5) COLLATE utf8_bin NOT NULL,
  `lebar_b` varchar(5) COLLATE utf8_bin NOT NULL,
  `tinggi_b` varchar(5) COLLATE utf8_bin NOT NULL,
  `volume1` varchar(5) COLLATE utf8_bin NOT NULL,
  `beratjenis` varchar(5) COLLATE utf8_bin NOT NULL,
  `bahan` varchar(5) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `truk`
--
ALTER TABLE `truk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `truk`
--
ALTER TABLE `truk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
