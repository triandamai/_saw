-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2019 pada 10.35
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_bekerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nip`, `password`, `lastlogin`) VALUES
(1, '061234567', 'spksaw', '2019-12-10 09:34:51'),
(2, '3456789', 'admin', '2019-12-10 05:10:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `id` int(10) NOT NULL,
  `value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id`, `value`) VALUES
(1, '0'),
(2, '0.33'),
(3, '0.66'),
(4, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama`, `jabatan`) VALUES
('061234567', 'Rochmanzaenur', 'SEKDES'),
('3456789', 'Trian', 'DOSEN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggungan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `sudah_dinilai` int(2) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`nik`, `nama`, `tanggungan`, `alamat`, `sudah_dinilai`, `status`) VALUES
('3302193107980006', 'Imam Tahyudin', 4, 'Jl.PPNH no 21 rt:03 rw 01\r\nDesa bojongslawi kec.lohbener', 1, ''),
('33123456', 'Zaenurrochman', 3, 'Jln Pramuka desa kalisari RT07 RW 02', 0, ''),
('45678', 'Trian', 1, 'Jl.PPNH no 21 rt:03 rw 01\r\nDesa bojongslawi kec.lohbener', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `sifat` enum('benefit','cost') NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`, `keterangan`, `sifat`, `bobot`) VALUES
(1, 'Pendidikan', 'Semakin kecil semakin bagus', 'cost', 0.35),
(2, 'Pengabdian', 'Semakin besar semakin bagus', 'benefit', 0.3),
(3, 'Asas', 'Semakin kecil semakin bagus', 'cost', 0.2),
(4, 'Jenis Lantai', 'Semakin besar semakin bagus', 'benefit', 0.15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nikPenduduk` varchar(20) NOT NULL,
  `idKriteria` int(11) NOT NULL,
  `id_subKriteria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nikPenduduk`, `idKriteria`, `id_subKriteria`) VALUES
(49, '3302193107980006', 1, 2),
(50, '3302193107980006', 2, 5),
(51, '3302193107980006', 3, 10),
(52, '3302193107980006', 4, 14),
(53, '45678', 1, 2),
(54, '45678', 2, 5),
(55, '45678', 3, 9),
(56, '45678', 4, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(11) NOT NULL,
  `idKriteria` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `idKriteria`, `nama`, `value`) VALUES
(1, 1, 'Sangat Kurang', 1),
(2, 1, 'Kurang', 0.66),
(3, 1, 'Cukup', 0.33),
(4, 1, 'Baik', 0),
(5, 2, 'Sangat Kurang', 0),
(6, 2, 'Kurang', 0.33),
(7, 2, 'Cukup', 0.66),
(8, 2, 'Baik', 1),
(9, 3, 'Sangat Kurang', 1),
(10, 3, 'Kurang', 0.66),
(11, 3, 'Cukup', 0.33),
(12, 3, 'Baik', 0),
(13, 4, 'Sangat Kurang', 0),
(14, 4, 'Kurang', 0.33),
(15, 4, 'Cukup', 0.66),
(16, 4, 'Baik', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nik`, `password`, `lastlogin`) VALUES
(1, '33123456', 'rochman25', '2019-02-10 04:34:58'),
(2, '45678', 'user', '2019-12-10 05:11:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_adminPegawai` (`nip`);

--
-- Indeks untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_KriteriaNilai` (`idKriteria`),
  ADD KEY `fk_nilaiPenduduk` (`nikPenduduk`),
  ADD KEY `fk_nilaiSubkriteria` (`id_subKriteria`);

--
-- Indeks untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_subKriteria` (`idKriteria`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userNik` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_adminPegawai` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_KriteriaNilai` FOREIGN KEY (`idKriteria`) REFERENCES `kriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nilaiPenduduk` FOREIGN KEY (`nikPenduduk`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nilaiSubkriteria` FOREIGN KEY (`id_subKriteria`) REFERENCES `subkriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD CONSTRAINT `fk_subKriteria` FOREIGN KEY (`idKriteria`) REFERENCES `kriteria` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_userNik` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
