-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2020 pada 07.06
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ridho`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `etutorial`
--

CREATE TABLE `etutorial` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `bahan` varchar(100) DEFAULT NULL,
  `alat` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `etutorial`
--

INSERT INTO `etutorial` (`id`, `nama`, `bahan`, `alat`, `gambar`) VALUES
(1, 'es_cream_oreo', 'oreo_tepung_maizena_susu_fullcream', 'mixer_mangkuk_cup_escream', '1.jpg'),
(2, 'bakwan_jagung', 'jagung_tepung_kunyit_garam_bawangputihmerah_air_minyak', 'spatula_kuali_piring', '2.jpg'),
(3, 'minuman', 'susu_kentalmanis_susu_fullcream_esbatu_pudingnutrijel_sirupmarjan', 'wadah1_cup', '3.jpg'),
(4, 'empek-empek', 'minyak,penyedap rasa, air, tepung, udang, telur', 'sendok, kuali, piring, mangkuk', '4.jpg'),
(5, 'es segar', 'sirup, gula, buah, susu', 'gelas, sendok', '5.jpg'),
(6, 'crabipety', 'tepung,daging,keju,tomat,slada', 'piring', '5ea65c2c3229f.jpg'),
(7, 'cake', 'tepung,daging,keju,tomat,slada', 'piring', '5ed8c95a1e467.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'fahmi', '$2y$10$vxmL6.zkNiwucHBDZXuxgu36bJ/0eYfc/XR8y4B2xqQOTyfBvOjG6'),
(5, 'riko', '$2y$10$tah4xg8T.YMDP55oBV0BWOuFzkdVd7IP4GVpsev4qoYjLHi4ppabW'),
(6, 'ridho', '$2y$10$tP/8uK7ZwSlfcThYoLc6FuYbuje4daOeKwHv7405zbu4YeNNuw.2e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `etutorial`
--
ALTER TABLE `etutorial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `etutorial`
--
ALTER TABLE `etutorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
