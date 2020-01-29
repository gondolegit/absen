-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2020 pada 16.40
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `nama`, `tanggal`, `keterangan`) VALUES
(10, 'Fikri', '2019-11-26 06:39:02.563567', ''),
(14, 'fitrades Kurnia', '2019-04-30 02:52:16.234174', 'izin'),
(15, 'Dina', '2019-04-29 08:12:04.557346', 'masuk'),
(16, 'anas', '2019-04-30 00:44:10.773489', 'masuk'),
(17, 'franky', '2019-04-30 04:56:12.882548', 'izin'),
(18, 'anggie', '2019-04-30 05:02:44.567776', 'alpha'),
(24, 'aldo', '2019-05-03 06:06:39.145480', 'masuk'),
(25, 'candra', '2019-07-01 03:14:56.325304', 'sakit'),
(26, 'acong', '2019-07-01 14:20:38.497599', 'alpha'),
(27, 'aldo', '2019-07-10 09:11:23.899611', 'masuk'),
(29, 'aldo', '2019-10-13 13:57:34.406695', 'sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nis` int(8) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal` int(2) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` int(4) NOT NULL,
  `alamat` text,
  `no_telp` varchar(15) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `username`, `password`, `nama_lengkap`, `nis`, `tempat_lahir`, `tanggal`, `bulan`, `tahun`, `alamat`, `no_telp`, `jk`, `agama`) VALUES
(5, 'ades', 'ades', 'Fitrades Kurnia', 20177463, 'Yogyakarta', 21, 'Desember', 2001, 'Jl. Suramadu', '0812345567', 'Pria', 'Islam'),
(6, 'Franky', '123', 'franky qoiriyana', 20176477, 'Jakarta', 19, 'november', 2001, 'jalan petir utama RT10 RW 03 ', '082110872609', 'Pria', 'Islam'),
(9, 'razki', 'razki', 'Razki Fadhillah', 20177491, 'Jakarta', 19, 'Mei', 2002, 'Jl. Cipondoh Makmur', '082110872609', 'Pria', 'Islam'),
(11, 'Dina', 'dina', 'Dina Lulu Hamiah', 20177439, 'Tangerang', 29, 'Agustus', 2002, 'Jalan Teluk Naga', '081188182039', 'Wanita', 'Islam'),
(12, 'anas', 'anas', 'anas aprilian', 20177329, 'Jakarta', 7, 'April', 2002, 'Jl.Bintaro Gelap', '081828293018', 'Pria', 'Islam'),
(13, 'Frank', '1234', 'franky qoiriyana', 20177466, 'jakarta', 19, 'no', 2002, 'jajahagajshsafhf', '083877666488', 'Pria', 'Islam'),
(14, 'candra', 'candra140401', 'candra afrian yudistira', 20177388, 'tulung agung', 14, 'April', 2002, 'kp kalimati', '089629899702', 'Pria', 'Islam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
