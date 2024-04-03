-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Apr 2024 pada 21.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `AlergiObat`
--

CREATE TABLE `AlergiObat` (
  `id` int(5) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_rm` varchar(255) NOT NULL,
  `id_history` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `AlergiObat`
--

INSERT INTO `AlergiObat` (`id`, `kode`, `name`, `id_rm`, `id_history`, `option`, `more`, `created_at`, `updated_at`) VALUES
(5, 'XMA0090', 'OBAT Pusing', '', '3', '', '', '2024-03-31 06:13:46', '2024-03-31 06:13:46'),
(12, 'XMA0090', 'OBAT Pusing', '', '4', '', '', '2024-04-02 06:26:10', '2024-04-02 06:26:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Diagnosa`
--

CREATE TABLE `Diagnosa` (
  `id` int(5) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Diagnosa`
--

INSERT INTO `Diagnosa` (`id`, `kode`, `name`, `option`, `more`, `created_at`, `updated_at`) VALUES
(1, 'XMA0090sd', 'Over Gula', '', '', '2024-04-01 06:33:36', '2024-04-01 06:33:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `History`
--

CREATE TABLE `History` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_rm` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `option` varchar(255) DEFAULT NULL,
  `more` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `History`
--

INSERT INTO `History` (`id`, `id_rm`, `status`, `option`, `more`, `created_at`, `updated_at`) VALUES
(3, '01-01-01', 'pendding', NULL, NULL, '2024-01-02 00:00:00', NULL),
(4, '01-01-02', NULL, NULL, NULL, '2023-06-30 22:59:53', '2024-03-30 22:59:53'),
(5, '01-01-02', NULL, NULL, NULL, '2024-04-02 22:59:53', '2024-03-30 22:59:53'),
(6, '01-01-02', NULL, NULL, NULL, '2023-06-30 22:59:53', '2024-03-30 22:59:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `idRm`
--

CREATE TABLE `idRm` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Kasus`
--

CREATE TABLE `Kasus` (
  `id` int(5) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Kasus`
--

INSERT INTO `Kasus` (`id`, `kode`, `name`, `option`, `more`, `created_at`, `updated_at`) VALUES
(2, 'PKLA565', 'Kecelakaan', '', '', '2024-04-01 06:33:07', '2024-04-01 06:33:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(53, '2024-02-14-144758', 'App\\Database\\Migrations\\User', 'default', 'App', 1711751643, 1),
(54, '2024-02-14-144840', 'App\\Database\\Migrations\\Pasien', 'default', 'App', 1711751643, 1),
(55, '2024-02-14-144854', 'App\\Database\\Migrations\\Diagnosa', 'default', 'App', 1711751643, 1),
(56, '2024-02-14-144902', 'App\\Database\\Migrations\\Tindakan', 'default', 'App', 1711751643, 1),
(57, '2024-02-14-144907', 'App\\Database\\Migrations\\Obat', 'default', 'App', 1711751643, 1),
(58, '2024-02-14-152319', 'App\\Database\\Migrations\\Pendaftaran', 'default', 'App', 1711751644, 1),
(59, '2024-02-14-152834', 'App\\Database\\Migrations\\Rpasien', 'default', 'App', 1711751644, 1),
(61, '2024-02-14-153053', 'App\\Database\\Migrations\\Rdiognosa', 'default', 'App', 1711751644, 1),
(62, '2024-02-14-153130', 'App\\Database\\Migrations\\Rtindakan', 'default', 'App', 1711751644, 1),
(63, '2024-02-14-153136', 'App\\Database\\Migrations\\Robat', 'default', 'App', 1711751645, 1),
(64, '2024-02-20-114156', 'App\\Database\\Migrations\\IdRm', 'default', 'App', 1711751645, 1),
(65, '2024-02-20-114207', 'App\\Database\\Migrations\\Setting', 'default', 'App', 1711751645, 1),
(66, '2024-03-21-142518', 'App\\Database\\Migrations\\History', 'default', 'App', 1711751645, 1),
(67, '2024-03-30-022341', 'App\\Database\\Migrations\\AlergiObat', 'default', 'App', 1711837948, 2),
(68, '2024-02-14-152947', 'App\\Database\\Migrations\\Ranamnese', 'default', 'App', 1711842409, 3),
(69, '2024-03-31-232127', 'App\\Database\\Migrations\\Kasus', 'default', 'App', 1711927763, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `Obat`
--

CREATE TABLE `Obat` (
  `id` int(5) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Obat`
--

INSERT INTO `Obat` (`id`, `kode`, `name`, `option`, `more`, `created_at`, `updated_at`) VALUES
(1, 'XMA0090', 'Rompang', '', '', '2024-03-30 09:25:41', '2024-03-30 09:25:41'),
(2, 'XMA0090', 'OBAT Pusing', '', '', '2024-03-31 05:11:02', '2024-03-31 05:11:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pasien`
--

CREATE TABLE `Pasien` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_rekammedis` varchar(255) NOT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `bpjs` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `lahir` date DEFAULT NULL,
  `usia` int(3) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `gol_darah` varchar(10) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `ayah` varchar(255) DEFAULT NULL,
  `ibu` varchar(255) DEFAULT NULL,
  `hubungi` varchar(20) DEFAULT NULL,
  `poli` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Pasien`
--

INSERT INTO `Pasien` (`id`, `id_rekammedis`, `tanggal_daftar`, `ktp`, `bpjs`, `nama`, `lahir`, `usia`, `gender`, `category`, `payment`, `alamat`, `no_hp`, `agama`, `gol_darah`, `pekerjaan`, `pendidikan`, `ayah`, `ibu`, `hubungi`, `poli`, `created_at`, `updated_at`) VALUES
(3, '01-01-02', '2024-03-19', '4641564165416541', '454564654156', 'manggala nabhaan', '2024-03-18', 0, 'Pria', 'Kritis', 'Cash', 'jawa timur', '081939268102', 'Islam', 'O', 'directur', 'SD', 'jnjsajkhdnas', 'osy', '54641564541', '1', NULL, '2024-03-31 06:25:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pendaftaran`
--

CREATE TABLE `Pendaftaran` (
  `id` int(5) UNSIGNED NOT NULL,
  `rm` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `bpjs` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Ranamnese`
--

CREATE TABLE `Ranamnese` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_rm` varchar(255) NOT NULL,
  `id_history` varchar(255) NOT NULL,
  `tinggi` varchar(255) DEFAULT NULL,
  `berat` varchar(255) DEFAULT NULL,
  `gizi` varchar(255) DEFAULT NULL,
  `sistole` varchar(255) DEFAULT NULL,
  `diastole` varchar(255) DEFAULT NULL,
  `denyut_nadi` varchar(255) DEFAULT NULL,
  `respirate_rate` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `thx` varchar(255) DEFAULT NULL,
  `abd` varchar(255) DEFAULT NULL,
  `ext` varchar(255) DEFAULT NULL,
  `he` varchar(255) DEFAULT NULL,
  `obat` varchar(255) DEFAULT NULL,
  `alergi` varchar(255) DEFAULT NULL,
  `anamnese` varchar(255) DEFAULT NULL,
  `option` varchar(255) DEFAULT NULL,
  `more` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Ranamnese`
--

INSERT INTO `Ranamnese` (`id`, `id_rm`, `id_history`, `tinggi`, `berat`, `gizi`, `sistole`, `diastole`, `denyut_nadi`, `respirate_rate`, `ket`, `thx`, `abd`, `ext`, `he`, `obat`, `alergi`, `anamnese`, `option`, `more`, `created_at`, `updated_at`) VALUES
(1, '', '4', '185', '154', 'Bagus', '56', '154', '154', '154', '154', '154', '154', '154', '154', NULL, NULL, 'anamnese', NULL, NULL, '2024-04-01 01:20:26', '2024-04-01 02:15:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Rdiognosa`
--

CREATE TABLE `Rdiognosa` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_rm` varchar(255) NOT NULL,
  `id_history` varchar(255) NOT NULL,
  `diagnosa` varchar(255) DEFAULT NULL,
  `kode_icd` varchar(255) DEFAULT NULL,
  `jenis_kasus` varchar(255) DEFAULT NULL,
  `jenis_diagnosa` varchar(255) DEFAULT NULL,
  `option` varchar(255) DEFAULT NULL,
  `more` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Rdiognosa`
--

INSERT INTO `Rdiognosa` (`id`, `id_rm`, `id_history`, `diagnosa`, `kode_icd`, `jenis_kasus`, `jenis_diagnosa`, `option`, `more`, `created_at`, `updated_at`) VALUES
(2, '', '4', 'Cholera due to vibrio cholerae 01, biovar cholerae', 'A00.0', 'Kecelakaan', 'Over Gula', NULL, NULL, '2024-01-01 06:29:38', '2024-04-02 06:29:38'),
(3, '', '5', 'Cholera due to vibrio cholerae 01, biovar cholerae', 'A00.0', 'Kecelakaan', 'Over Gula', NULL, NULL, '2024-04-02 06:29:38', '2024-04-02 06:29:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Robat`
--

CREATE TABLE `Robat` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_rm` varchar(255) NOT NULL,
  `id_history` varchar(255) NOT NULL,
  `obat` varchar(255) DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `dosis` varchar(255) DEFAULT NULL,
  `tarif` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `option` varchar(255) DEFAULT NULL,
  `more` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Robat`
--

INSERT INTO `Robat` (`id`, `id_rm`, `id_history`, `obat`, `satuan`, `catatan`, `dosis`, `tarif`, `jumlah`, `option`, `more`, `created_at`, `updated_at`) VALUES
(1, '', '5', 'Rompang', 'PCS', '', '1x3', '15000', '5', NULL, NULL, '2024-04-03 00:02:13', '2024-04-03 00:02:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Rtindakan`
--

CREATE TABLE `Rtindakan` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_rm` varchar(255) NOT NULL,
  `id_history` varchar(255) NOT NULL,
  `tindakan` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `tarif` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `option` varchar(255) DEFAULT NULL,
  `more` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Tindakan`
--

CREATE TABLE `Tindakan` (
  `id` int(5) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Tindakan`
--

INSERT INTO `Tindakan` (`id`, `kode`, `name`, `option`, `more`, `created_at`, `updated_at`) VALUES
(1, 'XMA0090', 'Sutik', '', '', '2024-04-01 06:33:25', '2024-04-01 06:33:25'),
(2, 'PKLA565', 'Rompang', '', '', '2024-04-02 02:28:51', '2024-04-02 02:28:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Users`
--

CREATE TABLE `Users` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tanggal_lahir` datetime DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `option` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Users`
--

INSERT INTO `Users` (`id`, `id_user`, `name`, `tanggal_lahir`, `gender`, `jabatan`, `username`, `password`, `foto`, `alamat`, `option`, `more`, `created_at`, `updated_at`) VALUES
(1, '', 'admin', '2024-04-18 00:00:00', 'laki', 'Manager', 'admin', '$2y$10$iy5EGhpJJoA/YYsp3PYtS.pzEf4LlMFQrH91BbWD5wi7f7Rn.7j2C', 'logopus.png', 'jln kenangan', '', '', '2024-04-01 06:34:33', '2024-04-01 06:34:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `AlergiObat`
--
ALTER TABLE `AlergiObat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Diagnosa`
--
ALTER TABLE `Diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `History`
--
ALTER TABLE `History`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `idRm`
--
ALTER TABLE `idRm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Kasus`
--
ALTER TABLE `Kasus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Obat`
--
ALTER TABLE `Obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Pasien`
--
ALTER TABLE `Pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Pendaftaran`
--
ALTER TABLE `Pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Ranamnese`
--
ALTER TABLE `Ranamnese`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Rdiognosa`
--
ALTER TABLE `Rdiognosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Robat`
--
ALTER TABLE `Robat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Rtindakan`
--
ALTER TABLE `Rtindakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Tindakan`
--
ALTER TABLE `Tindakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `AlergiObat`
--
ALTER TABLE `AlergiObat`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `Diagnosa`
--
ALTER TABLE `Diagnosa`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `History`
--
ALTER TABLE `History`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `idRm`
--
ALTER TABLE `idRm`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `Kasus`
--
ALTER TABLE `Kasus`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `Obat`
--
ALTER TABLE `Obat`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `Pasien`
--
ALTER TABLE `Pasien`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `Pendaftaran`
--
ALTER TABLE `Pendaftaran`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `Ranamnese`
--
ALTER TABLE `Ranamnese`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `Rdiognosa`
--
ALTER TABLE `Rdiognosa`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `Robat`
--
ALTER TABLE `Robat`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `Rtindakan`
--
ALTER TABLE `Rtindakan`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `Tindakan`
--
ALTER TABLE `Tindakan`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
