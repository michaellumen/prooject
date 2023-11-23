-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2023 pada 04.11
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nm_agama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `nm_agama`) VALUES
(1, 'Katolik'),
(2, 'Islam'),
(3, 'Buddha'),
(4, 'Hindu'),
(5, 'Kristen'),
(6, 'Konghuchu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `namakelas` varchar(100) DEFAULT NULL,
  `kompetensi` varchar(100) DEFAULT NULL,
  `tahun_pelajaran` int(10) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `namakelas`, `kompetensi`, `tahun_pelajaran`, `keterangan`) VALUES
(1, 'XI RPL 1', 'Rekayasa Perangkat Lunak', 2023, 'PKL'),
(2, 'XI MM 1 ', 'Multimedia', 2023, 'PKL'),
(3, 'XI DKV 2 ', 'Desain Komunikasi Visual', 2023, 'PKL'),
(4, 'XI TKJ 3 ', 'Teknik Komputer Jaringan', 2023, 'PKL'),
(5, 'XI SIJA 1 ', 'Sistem Informasi Jaringan Aplikasi', 2023, 'PKL'),
(6, 'XI TKR 2 ', 'Teknik Kendaraan Ringan', 2023, 'PKL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tplahir` varchar(50) DEFAULT NULL,
  `tglahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `hobi` varchar(255) DEFAULT NULL,
  `cita_cita` varchar(100) DEFAULT NULL,
  `jm_saudara` int(10) DEFAULT NULL,
  `idkelas` int(10) DEFAULT NULL,
  `idagama` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `tplahir`, `tglahir`, `alamat`, `hobi`, `cita_cita`, `jm_saudara`, `idkelas`, `idagama`) VALUES
(1, 'Michael Lumen Christiano Prasetyo Wibowo', 'Malang', '2007-06-02', 'JL. Kauman GG 3 Kebonagung', 'Berenang', 'Software Engginer', 2, 1, 1),
(2, 'Rizky Ramadhan', 'Malang', '2006-08-19', 'JL. Sukajaya Malang', 'Sepak Bola', 'Polisi', 3, 2, 2),
(3, 'Bowo Yudoyono', 'Malang', '2007-06-19', 'JL. Sukajaya Malang', 'Sepak Bola', 'Polisi', 1, 1, 4),
(4, 'Kineisha Icha', 'Malang', '2023-11-30', 'JL. Anggrek', 'Menulis', 'Dokter', 2, 3, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Michael Lumen Christiano Prasetyo Wibowo', 'lumen267', 'lumen12345678', 'siswa'),
(2, 'Albert Herderson', 'albert123', 'albert12345', 'petugas'),
(3, 'Kineisha Icha', 'ichaap123', 'ich12345', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkelas` (`idkelas`),
  ADD KEY `idagama` (`idagama`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`idkelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`idagama`) REFERENCES `agama` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
