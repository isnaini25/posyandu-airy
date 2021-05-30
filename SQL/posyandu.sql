-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2021 pada 17.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_balita`
--

CREATE TABLE `tbl_balita` (
  `kode_balita` int(5) NOT NULL,
  `kode_ibubalita` int(5) NOT NULL,
  `namaBalita` varchar(50) NOT NULL,
  `TTL` date NOT NULL,
  `jenkel` char(1) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `Bb_lahir` float NOT NULL,
  `Tb_lahir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_balita`
--

INSERT INTO `tbl_balita` (`kode_balita`, `kode_ibubalita`, `namaBalita`, `TTL`, `jenkel`, `anak_ke`, `Bb_lahir`, `Tb_lahir`) VALUES
(1, 1, 'Widya Rafani', '2020-05-20', 'P', 2, 3.5, 45.1),
(6, 10, 'Aisyah Raida Azmi', '2020-02-05', 'P', 2, 2.9, 50),
(7, 11, 'Muhammad Farhan', '2020-02-08', 'L', 2, 2.7, 49),
(8, 12, 'Mafaza Elvian', '2020-10-02', 'L', 1, 2.9, 40),
(9, 13, 'Fitria Zea Ardhiva', '2020-06-14', 'P', 2, 3.8, 39),
(10, 8, 'Alena Fathiyya Rastanti', '2020-11-20', 'P', 1, 2.5, 37),
(11, 7, 'Aidil Arnav Komari', '2020-07-05', 'L', 1, 2.9, 40),
(12, 9, 'Mafaza Aulia Zizah', '2020-07-28', 'P', 3, 3, 45);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bidan`
--

CREATE TABLE `tbl_bidan` (
  `kode_kader` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ibubalita`
--

CREATE TABLE `tbl_ibubalita` (
  `kode_ibubalita` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namaIbu` varchar(50) NOT NULL,
  `namaSuami` varchar(50) NOT NULL,
  `tglPendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ibubalita`
--

INSERT INTO `tbl_ibubalita` (`kode_ibubalita`, `username`, `password`, `namaIbu`, `namaSuami`, `tglPendaftaran`) VALUES
(1, 'susi', 'susi', 'susi ningsih', 'yudi widiyanto', '2020-11-05'),
(7, 'Ponisah', '', 'Ponisah', 'Komari', '2020-12-29'),
(8, 'Sunarti', '', 'Sunarti', 'Maryanto', '2020-12-29'),
(9, 'Etik', '', 'Etik', 'Husein', '2020-12-29'),
(10, 'Yani', '', 'Riwayani', 'Sugeng', '2020-12-29'),
(11, 'Ike', '', 'Ike susanti', 'Muktar', '2020-12-29'),
(12, 'Fitria', '', 'Fitriani', 'Aan dariyanto', '2020-12-29'),
(13, 'UmiF', '', 'Umi Fatonah', 'antoni', '2020-12-29'),
(16, 'misti', '59bd93f7d8ffeb97fa369fc5e3953282', 'Mistiani', 'Turiono', '2020-12-29'),
(17, 'pebytha', 'b0baee9d279d34fa1dfd71aadb908c3f', 'peby', 'haechan', '2020-12-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imunisasi`
--

CREATE TABLE `tbl_imunisasi` (
  `kode_imunisasi` int(5) NOT NULL,
  `kode_balita` int(5) NOT NULL,
  `kode_kader` int(5) NOT NULL,
  `usiaPerbulan` int(5) NOT NULL,
  `imunisasi` varchar(30) NOT NULL,
  `tanggal_imunisasi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_imunisasi`
--

INSERT INTO `tbl_imunisasi` (`kode_imunisasi`, `kode_balita`, `kode_kader`, `usiaPerbulan`, `imunisasi`, `tanggal_imunisasi`) VALUES
(3, 1, 0, 7, 'avp', '0000-00-00 00:00:00'),
(4, 6, 0, 11, 'campak', '0000-00-00 00:00:00'),
(5, 7, 0, 10, 'dptP', '2021-01-01 16:12:04'),
(6, 8, 0, 3, 'dpt3', '2021-01-01 16:12:33'),
(7, 9, 0, 6, 'avp', '2021-01-01 16:12:50'),
(8, 10, 0, 1, 'bsg', '2021-01-01 16:13:08'),
(9, 11, 0, 6, 'avp', '2021-01-01 16:13:30'),
(10, 12, 0, 5, 'avp', '2021-01-01 16:13:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kader`
--

CREATE TABLE `tbl_kader` (
  `kode_kader` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kader`
--

INSERT INTO `tbl_kader` (`kode_kader`, `username`, `password`, `nama`, `email`) VALUES
(1, 'kader', 'kader', 'yanis ', 'yanis@gmail.com'),
(2, 'kader01', 'kader1', 'agnespebythalia', 'agnes@gmail.com'),
(3, 'kader02', 'kader', 'Mutmainah', 'mutmainah25@gmail.com'),
(5, 'kader03', 'kader', 'Lilin Wanda', 'wandalestari@gmail.com'),
(6, 'kader04', 'kader', 'Sri watini', 'watini123@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penimbangan`
--

CREATE TABLE `tbl_penimbangan` (
  `kode_penimbangan` int(5) NOT NULL,
  `kode_balita` int(5) NOT NULL,
  `kode_kader` int(5) NOT NULL,
  `kode_ibubalita` int(5) NOT NULL,
  `tinggiBadan` float NOT NULL,
  `beratBadan` float NOT NULL,
  `usiaPerminggu` int(5) NOT NULL,
  `Status` char(1) NOT NULL,
  `tanggal_penimbangan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penimbangan`
--

INSERT INTO `tbl_penimbangan` (`kode_penimbangan`, `kode_balita`, `kode_kader`, `kode_ibubalita`, `tinggiBadan`, `beratBadan`, `usiaPerminggu`, `Status`, `tanggal_penimbangan`) VALUES
(29, 1, 0, 0, 46, 5, 32, '', '2021-01-31 15:40:13'),
(30, 1, 0, 0, 65, 7, 36, '', '2021-03-31 15:40:40'),
(31, 6, 0, 0, 51, 3, 47, '', '2020-12-31 18:20:39'),
(32, 6, 0, 0, 52, 3.1, 51, '', '2021-01-31 18:20:56'),
(33, 1, 0, 0, 67, 4, 40, '', '2021-02-17 20:02:32'),
(34, 7, 0, 0, 70, 6, 46, '', '2021-01-01 02:16:04'),
(35, 7, 0, 0, 71, 6.5, 50, '', '2021-02-01 02:16:21'),
(36, 8, 0, 0, 41, 3.2, 13, '', '2021-01-01 14:46:18'),
(37, 8, 0, 0, 42, 3.4, 17, '', '2021-02-01 14:47:42'),
(38, 8, 0, 0, 43, 3.5, 22, '', '2021-03-01 14:47:32'),
(39, 8, 0, 0, 43, 3.6, 26, '', '2021-04-01 14:48:19'),
(40, 8, 0, 0, 44, 3.8, 30, '', '2021-05-01 14:48:29'),
(49, 6, 0, 0, 55, 4, 55, '', '2021-03-01 14:56:52'),
(50, 6, 0, 0, 56, 3.5, 59, '', '2021-04-01 14:59:09'),
(51, 6, 0, 0, 57, 3.6, 64, '', '2021-05-01 14:59:21'),
(52, 1, 0, 0, 68, 5, 44, '', '2021-04-01 15:06:03'),
(53, 1, 0, 0, 69, 5.2, 46, '', '2021-05-01 15:06:16'),
(54, 7, 0, 0, 71, 6.6, 54, '', '2021-03-01 15:10:49'),
(55, 7, 0, 0, 72, 6.9, 58, '', '2021-04-01 15:10:59'),
(56, 7, 0, 0, 73, 7, 62, '', '2021-05-01 15:11:13'),
(57, 9, 0, 0, 39, 4, 28, '', '2021-01-01 15:26:34'),
(58, 9, 0, 0, 40, 4.1, 28, '', '2021-01-01 15:26:47'),
(59, 9, 0, 0, 41, 4.2, 28, '', '2021-01-01 15:27:01'),
(60, 9, 0, 0, 42, 4.3, 28, '', '2021-01-01 15:27:16'),
(61, 9, 0, 0, 43, 4.4, 28, '', '2021-01-01 15:27:29'),
(62, 10, 0, 0, 37, 3, 6, '', '2021-01-01 16:10:25'),
(63, 10, 0, 0, 38, 3.2, 6, '', '2021-01-01 16:10:36'),
(64, 11, 0, 0, 41, 3.5, 25, '', '2021-01-01 16:10:54'),
(65, 12, 0, 0, 46, 3.5, 22, '', '2021-01-01 16:11:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_balita`
--
ALTER TABLE `tbl_balita`
  ADD PRIMARY KEY (`kode_balita`);

--
-- Indeks untuk tabel `tbl_bidan`
--
ALTER TABLE `tbl_bidan`
  ADD PRIMARY KEY (`kode_kader`);

--
-- Indeks untuk tabel `tbl_ibubalita`
--
ALTER TABLE `tbl_ibubalita`
  ADD PRIMARY KEY (`kode_ibubalita`);

--
-- Indeks untuk tabel `tbl_imunisasi`
--
ALTER TABLE `tbl_imunisasi`
  ADD PRIMARY KEY (`kode_imunisasi`);

--
-- Indeks untuk tabel `tbl_kader`
--
ALTER TABLE `tbl_kader`
  ADD PRIMARY KEY (`kode_kader`);

--
-- Indeks untuk tabel `tbl_penimbangan`
--
ALTER TABLE `tbl_penimbangan`
  ADD PRIMARY KEY (`kode_penimbangan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_balita`
--
ALTER TABLE `tbl_balita`
  MODIFY `kode_balita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_bidan`
--
ALTER TABLE `tbl_bidan`
  MODIFY `kode_kader` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ibubalita`
--
ALTER TABLE `tbl_ibubalita`
  MODIFY `kode_ibubalita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_imunisasi`
--
ALTER TABLE `tbl_imunisasi`
  MODIFY `kode_imunisasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_kader`
--
ALTER TABLE `tbl_kader`
  MODIFY `kode_kader` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_penimbangan`
--
ALTER TABLE `tbl_penimbangan`
  MODIFY `kode_penimbangan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
