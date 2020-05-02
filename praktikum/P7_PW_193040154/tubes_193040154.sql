-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 03.27
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
-- Database: `tubes_193040154`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_handphone`
--

CREATE TABLE `daftar_handphone` (
  `Id` int(11) NOT NULL,
  `Merk` varchar(100) NOT NULL,
  `Type` char(30) NOT NULL,
  `Design` varchar(300) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_handphone`
--

INSERT INTO `daftar_handphone` (`Id`, `Merk`, `Type`, `Design`, `Harga`, `Gambar`) VALUES
(1, 'Samsung', 'S20 Series', 'Baterai 4000mAh, \r\nRAM 12GB, \r\nCamera utama 64 MP,\r\nCamera depan 10 MP', 'Rp 12.999.000', 's20.jpg'),
(2, 'Vivo', 'V 19', 'Baterai 4500mAh,\r\nRAM 8GB,\r\nCamera utama 48 MP, \r\nCamera depan 32 MP', 'Rp 4.299.000', 'v19.jpg'),
(3, 'Oppo', 'Find X2', 'Baterai 4200mAh, \r\nRAM 12GB, \r\nCamera utama 48 MP,\r\nCamera depan 32 MP', 'Rp 14.999.000', 'findx2.jpg'),
(4, 'Real Me', 'Realme 6', 'Baterai 4300mAh,\r\nRAM 8GB,\r\nCamera utama 64 MP,\r\nCamera depan 16 MP', 'Rp 4.599.000', 'realme6.jpg'),
(5, 'Real Me', 'Realme X2 Pro', 'Baterai 4000mAh,\r\nRAM 12GB, \r\nCamera utama 64 MP,\r\nCamera depan 16 MP', 'Rp 7.799.000', 'realmex2.jpg'),
(6, 'Samsung', 'A50 s', 'Baterai 4000mAh, \r\nRAM 8GB,\r\nCamera utama 25,8,5 MP,\r\nCamera depan 25 MP', 'Rp 4.099.000', 'a50s.png'),
(7, 'Asus', 'Zenfone 6', 'Baterai 5000mAh,\r\nRAM 6GB,\r\nCamera utama 48, 12 MP', 'Rp 6.999.000', 'zenfone6.jpg'),
(8, 'Vivo', 'S1', 'Baterai 4500mAh,\r\nRAM 4GB,\r\nCamera utama 16,8,2 MP,\r\nCamera depan 32 MP', 'Rp 2.999.000', 's1.jpg'),
(9, 'Oppo', 'Reno 3', 'Baterai 4025mAh, \r\nRAM 8GB, \r\nCamera utama 48 MP, \r\nCamera depan 44 MP', 'Rp 11.942.100', 'reno3.jpg'),
(10, 'Samsung', 'Note 10', 'Baterai 3500mAh, \r\nRAM 8GB, \r\nCamera utama 12,16,12 MP, \r\nCamera depan 10 MP', 'Rp 13.999.000', 'note10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'elti', '$2y$10$As0AoGvaNq7SZRWQoPZ3ve.hPJhRlmMTOZnYLq3xtUqrucMFLdTHO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_handphone`
--
ALTER TABLE `daftar_handphone`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_handphone`
--
ALTER TABLE `daftar_handphone`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
