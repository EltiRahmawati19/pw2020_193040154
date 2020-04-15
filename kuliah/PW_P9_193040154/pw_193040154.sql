-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 16.24
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040154`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Elti Rahmawati', '193040154', 'elti.rahmawati19@gmail.com', 'Teknik Informatika', 'elti.jpg'),
(2, 'Sarah Nur Fadhilla', '193020209', 'sarahnf@gmail.com', 'Teknologi Pangan', 'sarah.jpg'),
(3, 'Titin Angreini', '193060057', 'titinangreini@gmail.com', 'Perancangan Wilayah Dan Kota', 'titin.jpg'),
(5, 'Nelli Marliana', '193040165', 'nellim@gmail.com', 'Teknik Informatika', 'nelli.jpg'),
(6, 'Fajri Khoirunisa', '193040159', 'fajrikhoi@gmail.com', 'Teknik Informatika', 'fajri.jpg'),
(7, 'Freety Indriani Safitri', '193040175', 'freety@gmail.com', 'Teknik Informatika', 'freety.jpg'),
(8, 'Nur Safitri Wulandari', '193040181', 'safitrin@gmail.com', 'Teknik Informatika', 'nur.jpg'),
(9, 'Maudy', '193020077', 'mmaudy@gmail.com', 'Teknologi Pangan', 'maudy.jpg'),
(10, 'Kafin kautsar', '193010071', 'kkautsar@gmail.com', 'Teknik Industri', 'kafin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
