-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2023 pada 17.34
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imunkitv2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_judul` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `diskripsi` varchar(100) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_judul`, `judul`, `waktu`, `jam`, `lokasi`, `diskripsi`, `gambar`) VALUES
(52, 'COBA99', '2023-06-23', '22:00', 'Purwokerto Barat', 'COBA999', 'public/assets/images/jadwal/PngItem_4531821.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemantauan`
--

CREATE TABLE `tbl_pemantauan` (
  `id_pemantauan` int(6) NOT NULL,
  `jenis_imunisasi` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pemantauan`
--

INSERT INTO `tbl_pemantauan` (`id_pemantauan`, `jenis_imunisasi`, `status`) VALUES
(1, 'ziz', 'Sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `akses`) VALUES
(8, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(9, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'users');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indeks untuk tabel `tbl_pemantauan`
--
ALTER TABLE `tbl_pemantauan`
  ADD PRIMARY KEY (`id_pemantauan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_judul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tbl_pemantauan`
--
ALTER TABLE `tbl_pemantauan`
  MODIFY `id_pemantauan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
