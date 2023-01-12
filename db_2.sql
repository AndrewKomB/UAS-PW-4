-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2022 pada 08.30
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `nama` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(25) DEFAULT NULL,
  `usia` int(25) DEFAULT NULL,
  `no_telepon` varchar(25) DEFAULT NULL,
  `jenis_kelamin` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`nama`, `alamat`, `tgl_lahir`, `usia`, `no_telepon`, `jenis_kelamin`) VALUES
('Bima', 'Jln.Pelajar No.1 Marendal Sumatera Utara', '11 Oktober 2002', 20, '081286897553', 'Laki-Laki'),
('Arif Adrian', 'Jln.Tanjung Pura Kec.Babalan Sumatera Utara', '16 Maret 2003', 19, '085362747753', 'Laki-Laki'),
('Dita Anggreani', 'Jln.Eka Sama No.62 Sumatera Utara', '02 Juli 2003', 19, '082288058841', 'Perempuan'),
('Putri Andriyani', 'Dusun I Simpang Gambus Sumatera Utara', '16 Januari 2003', 19, '081263380144', 'Perempuan'),
('Imanda Tamara br Pasaribu', 'Gg.Amel Futsal Sumatera Utara', '22 September 2003', 19, '085275282101', 'Perempuan'),
('Pieter Tanoto', 'Jln.Sekip No.97 Sumatera Utara', '28 Maret 2003', 19, '087748215683', 'Laki-Laki'),
('Harry Sion Tarigan', 'Gg.Pendidikan Lorong Guru Sumatera Utara', '30 Maret 2003', 19, '083134104878', 'Laki-Laki'),
('Angela Siadari', 'Jln.Nenas Gg.Limau No.1 Sumatera Utara', '07 April 2003', 19, '082277862372', 'Perempuan'),
('Eunike Leoni Sinaga', 'Jln.Buku No.62-A Sumatera Utara', '12 April 2003', 19, '081265900001', 'Perempuan'),
('Elisa Lolita Haganta Bang', 'Jln.Jangka Sumatera Utara', '28 Juni 2004', 18, '0811600953', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
