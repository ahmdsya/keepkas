-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2019 pada 11.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keep_mvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_keluar`
--

CREATE TABLE `kas_keluar` (
  `id_keluar` int(15) NOT NULL,
  `keterangan` varchar(25) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_masuk`
--

CREATE TABLE `kas_masuk` (
  `id_masuk` int(15) NOT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `jumlah` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kas_masuk`
--

INSERT INTO `kas_masuk` (`id_masuk`, `nim`, `nama`, `waktu`, `status`, `jumlah`) VALUES
(2, '0702163065', 'Ahmad Syarif', '2019-03-07 09:44:55', 'Terkonfirmasi', '2000'),
(3, '0702163063', 'Ahmad Syarif', '2019-03-07 10:12:08', 'Terkonfirmasi', '1500'),
(4, '0702163063', 'Ahmad Syarif', '2019-03-07 10:18:10', 'Terkonfirmasi', '2000'),
(5, '0702163063', 'Ahmad Syarif', '2019-03-07 10:21:14', 'Terkonfirmasi', '500'),
(6, '0702163065', 'Ahmad Syarif', '2019-03-07 10:23:21', 'Terkonfirmasi', '1500'),
(7, '0702163063', 'Ahmad Syarif', '2019-03-07 11:41:50', 'Terkonfirmasi', '1000'),
(8, '0702163063', 'Ahmad Syarif', '2019-03-07 13:02:06', 'Terkonfirmasi', '500'),
(9, '0702163065', 'Ahmad Syarif', '2019-03-07 13:27:30', 'Terkonfirmasi', '1500'),
(10, '0702163067', 'Abdul Alfatah', '2019-03-09 16:23:49', 'Terkonfirmasi', '1500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(15) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `jumlah` varchar(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `jurusan`, `kelas`, `jumlah`, `tgl`, `gambar`) VALUES
(40, '0702163063', '0702163063', 'Ahmad Syarif', 'Sistem Informasi', 'SI-2', '5500', '2019-03-07', '5c7e31112c4a6.png'),
(42, '0702163065', '0702163065', 'Ahmad Syarif', 'Sistem Informasi', 'SI-2', '5000', '2019-03-07', '5c807d30ad524.png'),
(43, '0702163066', '0702163066', 'Anggi Syahputri', 'Sistem Informasi', 'SI-2', NULL, NULL, NULL),
(44, '0702163067', '0702163067', 'Abdul Alfatah', 'Sistem Informasi', 'SI-2', '1500', '2019-03-09', NULL),
(45, '0702163068', '0702163068', 'Nada Dayatillah', 'Sistem Informasi', 'SI-2', NULL, NULL, NULL),
(46, '0702163069', '0702163069', 'Elfani Rizky', 'Sistem Informasi', 'SI-2', NULL, NULL, NULL),
(47, '0702163070', '0702163070', 'Teguh Kurniawan', 'Sistem Informasi', 'SI-2', NULL, NULL, NULL),
(48, '0702163071', '0702163071', 'Rahmad Aulia', 'Sistem Informasi', 'SI-2', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kas_keluar`
--
ALTER TABLE `kas_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indeks untuk tabel `kas_masuk`
--
ALTER TABLE `kas_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kas_keluar`
--
ALTER TABLE `kas_keluar`
  MODIFY `id_keluar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kas_masuk`
--
ALTER TABLE `kas_masuk`
  MODIFY `id_masuk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
