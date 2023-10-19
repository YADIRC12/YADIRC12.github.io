-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2023 pada 15.07
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelade2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesan`
--

CREATE TABLE `tb_pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pemesan`
--

INSERT INTO `tb_pemesan` (`id_pemesan`, `nama`, `telp`, `username`, `password`) VALUES
(1, 'hotelade', '05262091632', 'admin', 'admin'),
(2, 'Muhammad Hariadi', '082152981007', '310120012710', '310120012710'),
(3, 'ANGGRI APRILIANI', '082152981007', '310120012713', '310120012713'),
(4, 'DONY EKAT VIKTORY', '082152981007', '310120012698', '310120012698');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `id_reservasi` char(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `tipe_k` varchar(30) NOT NULL,
  `tgl_in` date NOT NULL,
  `tgl_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`id_reservasi`, `nama`, `telp`, `tipe_k`, `tgl_in`, `tgl_out`) VALUES
('R20230001', 'YADIRC', '09090', '1', '2023-08-30', '2023-08-17'),
('R20230002', 'YADIRC', '09090', '1', '2023-09-06', '2023-08-22'),
('R20230003', 'awdwad', '09090', '1', '2023-08-30', '2023-08-17'),
('R20230004', 'awda', '09090', '1', '2023-09-05', '2023-08-23'),
('R20230005', 'YADIRC', '09090', '1', '2023-08-29', '2023-08-16'),
('R20230006', 'awda', '09090', '1', '2023-08-14', '2023-08-22'),
('R20230007', 'YADIRC', '09090', '1', '2023-08-28', '2023-08-23'),
('R20230008', 'YADIRC', '09090', '1', '2023-09-05', '2023-09-01'),
('R20230009', 'YADIRC', '082152981007', '1', '2023-08-22', '2023-08-15'),
('R20230010', 'YADIRC', '09090', '1', '2023-08-31', '2023-08-17'),
('R20230011', 'awda', '09090', '1', '2023-08-29', '2023-08-10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pemesan`
--
ALTER TABLE `tb_pemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indeks untuk tabel `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pemesan`
--
ALTER TABLE `tb_pemesan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
