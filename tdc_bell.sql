-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2023 pada 12.00
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdc_bell`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sebagai` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `sebagai`, `password`) VALUES
(1, 'I Made Sandika Wijaya', 'sandikakadek2018@gmail.com', 'juri', '123'),
(3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 'peserta', '123'),
(9, 'Eri Widura', 'eri@gmail.com', 'peserta', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `waktu`
--

CREATE TABLE `waktu` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `timestamp` double NOT NULL,
  `hide` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `waktu`
--

INSERT INTO `waktu` (`id`, `user_id`, `nama`, `email`, `timestamp`, `hide`) VALUES
(1, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692128140.9123, 'true'),
(2, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692128141.1629, 'true'),
(3, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692128141.317, 'true'),
(4, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178874.1863, 'true'),
(5, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178874.8068, 'true'),
(6, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178876.9592, 'true'),
(7, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178877.2771, 'true'),
(8, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178877.571, 'true'),
(9, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178900.4167, 'true'),
(10, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178900.9601, 'true'),
(11, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178901.5204, 'true'),
(12, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178902.0322, 'true'),
(13, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178902.5767, 'true'),
(14, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178903.0385, 'true'),
(15, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178903.5365, 'true'),
(16, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178903.9097, 'true'),
(17, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178904.29, 'true'),
(18, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178904.6139, 'true'),
(19, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178904.9127, 'true'),
(20, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178905.4875, 'true'),
(21, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178905.6008, 'true'),
(22, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178905.7441, 'true'),
(23, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178905.8892, 'true'),
(24, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178906.0085, 'true'),
(25, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178906.1396, 'true'),
(26, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178906.2238, 'true'),
(27, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692178906.352, 'true'),
(28, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692179359.364, 'false'),
(29, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692179359.7193, 'false'),
(30, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692179949.7982, 'false'),
(31, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692179950.3258, 'false'),
(32, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692179950.8331, 'false'),
(33, 3, 'Sandika Wijaya', 'sanditurty2018@gmail.com', 1692179951.3263, 'false');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
