-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2023 pada 09.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uts_web1_21552011144_azkimaulanaassariy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendaftar_crud_api`
--

CREATE TABLE `data_pendaftar_crud_api` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pendaftar_crud_api`
--

INSERT INTO `data_pendaftar_crud_api` (`id`, `nama_depan`, `nama_belakang`, `email`, `username`, `password`, `photo`) VALUES
(1, 'Azki', 'Maulana Assariy', 'maulanaazkiassariy@gmail.com', 'maulanaakgn', '292fb151f8eadacb8bf3ac1ba52d44f4f708c82c', 'photo/Snapinsta.app_329911476_1275641849960625_5495636075565242971_n_1080.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_register`
--

CREATE TABLE `data_register` (
  `id` int(11) NOT NULL,
  `namadepan` varchar(50) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_register`
--

INSERT INTO `data_register` (`id`, `namadepan`, `namabelakang`, `email`, `nohp`, `password`) VALUES
(1, 'Azki', 'Maulana Assariy', 'maulanaazkiassariy@gmail.com', '08986921583', '2a51fe345ecf4be0e73674a489c1776afcd446fb5fd904cd9acb46a7fcdfae17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pendaftar_crud_api`
--
ALTER TABLE `data_pendaftar_crud_api`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_register`
--
ALTER TABLE `data_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`nohp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pendaftar_crud_api`
--
ALTER TABLE `data_pendaftar_crud_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_register`
--
ALTER TABLE `data_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
