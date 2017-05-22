-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mei 2017 pada 19.52
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_kuliah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `nrp` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`nrp`, `nama`, `jurusan`, `matakuliah`, `sks`) VALUES
(151111008, 'Benny Putra Halim', 'S1 - Teknik Informatika', 'Strategi Algoritma', 3),
(151111009, 'Yoga Nanda Saputra', 'S1 - Teknik Informatika', 'Pemrograman Website', 3),
(151111015, 'Laurent Bagaskara ', 'S1 - Teknik Informatika', 'Strategi Algoritma', 3),
(151111019, 'Kaleb Molewe', 'S1 - Teknik Informatika', 'Praktikum Jaringan Komputer & Komunikasi Data', 1),
(151111088, 'Ode Syamsul Bahari', 'S1 - Teknik Informatika', 'Kewirausahaan', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`nrp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
