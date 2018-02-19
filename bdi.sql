-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 08 Agu 2017 pada 16.09
-- Versi Server: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `ID` int(11) NOT NULL,
  `NamaKecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`ID`, `NamaKecamatan`) VALUES
(1, 'Mantikulore'),
(2, 'Palu Barat'),
(3, 'Palu Selatan'),
(4, 'Palu Timur'),
(5, 'Palu Utara'),
(6, 'Tatanga'),
(7, 'Tawaeli'),
(8, 'Ulujadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatanluhkum`
--

CREATE TABLE `kegiatanluhkum` (
  `ID` int(11) NOT NULL,
  `IDLuhkum` int(11) DEFAULT NULL,
  `IDKelurahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatanluhkum`
--

INSERT INTO `kegiatanluhkum` (`ID`, `IDLuhkum`, `IDKelurahan`) VALUES
(1, 1, 43),
(2, 2, 16),
(6, 3, 11),
(7, 3, 12),
(4, 3, 16),
(5, 3, 17),
(3, 3, 18),
(13, 4, 28),
(12, 4, 29),
(14, 4, 30),
(9, 4, 31),
(10, 4, 32),
(8, 4, 33),
(15, 5, 11),
(16, 5, 12),
(17, 5, 16),
(18, 5, 17),
(19, 5, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `ID` int(11) NOT NULL,
  `NamaKelurahan` varchar(255) DEFAULT NULL,
  `IDKecamatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`ID`, `NamaKelurahan`, `IDKecamatan`) VALUES
(1, 'Mamboro', 5),
(2, 'Mamboro Barat', 5),
(3, 'Taipa', 5),
(4, 'Kayumalue Ngapa', 5),
(5, 'Kayumalue Paekoi', 5),
(6, 'Panau', 7),
(7, 'Baiya', 7),
(8, 'Lambara', 7),
(9, 'Pantoloan', 7),
(10, 'Pantoloan Boya', 7),
(11, 'Besusu Barat', 4),
(12, 'Besusu Tengah', 4),
(13, 'Besusu Timur', 4),
(14, 'Lolu Utara', 4),
(15, 'Lolu Selatan', 4),
(16, 'Talise', 1),
(17, 'Tondo', 1),
(18, 'Layana Indah', 1),
(19, 'Lasoani', 1),
(20, 'Poboya', 1),
(21, 'Tanamodindi', 1),
(22, 'Kawatuna', 1),
(23, 'Birobuli Utara', 3),
(24, 'Birobuli Selatana', 3),
(25, 'Tatura Utara', 3),
(26, 'Tatura Selatan', 3),
(27, 'Petobo', 3),
(28, 'Tavanjuka', 6),
(29, 'Pengawu', 6),
(30, 'Palupi', 6),
(31, 'Boyaoge', 6),
(32, 'Nunu', 6),
(33, 'Duyu', 6),
(34, 'Ujuna', 2),
(35, 'Baru', 2),
(36, 'Lere', 2),
(37, 'Kamonji', 2),
(38, 'Siranindi', 2),
(39, 'Balaroa', 2),
(40, 'Dongala Kodi', 8),
(41, 'Kabonena', 8),
(42, 'Silae', 8),
(43, 'Tipo', 8),
(44, 'Buluri', 8),
(45, 'Watusampu', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `korupsi`
--

CREATE TABLE `korupsi` (
  `ID` int(11) NOT NULL,
  `Lid` int(11) DEFAULT NULL,
  `Dik` int(11) DEFAULT NULL,
  `Tut` int(11) DEFAULT NULL,
  `Tahun` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `korupsi`
--

INSERT INTO `korupsi` (`ID`, `Lid`, `Dik`, `Tut`, `Tahun`) VALUES
(1, 2, 3, 1, 2013),
(2, 2, 2, 0, 2014),
(3, 4, 5, 6, 2015),
(4, 1, 2, 3, 2016),
(5, 1, 1, 1, 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `luhkum`
--

CREATE TABLE `luhkum` (
  `ID` int(11) NOT NULL,
  `JumlahPenduduk` int(11) DEFAULT NULL,
  `Waktu` date DEFAULT NULL,
  `SasaranDanMateri` varchar(255) DEFAULT NULL,
  `JumlahPeserta` int(11) DEFAULT NULL,
  `NamaKelurahanDesa` varchar(255) DEFAULT NULL,
  `LokasiPenyuluhan` varchar(255) DEFAULT NULL,
  `Petugas` varchar(255) DEFAULT NULL,
  `Ket` varchar(255) DEFAULT NULL,
  `LinkGambar1` text,
  `LinkGambar2` text,
  `LinkGambar3` text,
  `LinkGambar4` text,
  `Lat` text,
  `Lon` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `luhkum`
--

INSERT INTO `luhkum` (`ID`, `JumlahPenduduk`, `Waktu`, `SasaranDanMateri`, `JumlahPeserta`, `NamaKelurahanDesa`, `LokasiPenyuluhan`, `Petugas`, `Ket`, `LinkGambar1`, `LinkGambar2`, `LinkGambar3`, `LinkGambar4`, `Lat`, `Lon`) VALUES
(1, 3218, '2012-03-17', 'Mahasiswa Peserta KKN Fak. Hukum Untad dan Masyarakat Kel. Tipo.', 100, 'Kelurahan Tipo', 'Kelurahan Tipo', 'Kaharuddin Kasim SH, Nursiah SH, Didin Mufti SH, Lindawati SH, Junaedy SH, Reza Hidayat SH', NULL, NULL, NULL, NULL, NULL, '-0.847752', '119.815521'),
(2, 20942, '2012-10-17', 'Tokoh Masyarakat, Tokoh Pemuda, PKL dan Masyarakat pada Kel. Talise', 150, 'Kelurahan Talise', 'Kelurahan Talise', 'Asnawi SH, Kaharuddin Kasim SH, Nursiah SH, Didin Mufti SH, Lindawati SH, Junaedy SH, Samuel SH', NULL, NULL, NULL, NULL, NULL, '-0.874038', '119.872427'),
(3, 46560, '2013-02-20', 'Tokoh Masyarakat, Tokoh Pemuda dan Masyarakat pada Kel. Layana Indah, Talise, Tondo, Besusu Barat dan Besusu Tengah.', 200, 'Kel. Layana Indah, Talise, Tondo, Besusu Barat dan Besusu Tengah', 'Kel. Layana Indah, Mantikulore', 'Kaharuddin Kasim SH, Nursiah SH, Didin Mufti SH, Lindawaty SH, Junaedy SH, Samuel SH.', NULL, NULL, NULL, NULL, NULL, '-0.884937', '119.891911'),
(4, 342755, '2013-05-20', 'Tokoh Masyarakat, Tokoh Pemuda dan Masyarakat', 300, 'Kel. Duyu, Nunu, Boyaoge, Pengawu, Tavanjuka dan Palupi', 'Kelurahan Pengawu', 'Kaharuddin Kasim SH, Nursiah SH, Didin Mufti SH, Lindawaty SH, Junaedy SH, Samuel SH.', NULL, NULL, NULL, NULL, NULL, '-0.924328', '119.849939'),
(5, 46560, '2013-02-20', 'Tokoh Masyarakat, Tokoh Pemuda dan Masyarakat. Materi Sosialisasi Perda Kota Palu No 6 tahun 2012 tentang Penertiban Ternak', 200, 'Kel. Layana Indah, Talise, Tondo, Besusu Barat dan Besusu Tengah', 'Kel. Layana Indah, Kec Matikulore', 'Kaharuddin Kasim SH, Nursiah SH, Didin Mufti SH, Lindawaty SH, Junaedy SH, Samuel SH', NULL, NULL, NULL, NULL, NULL, '-0.880474', '119.882469');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` char(5) NOT NULL,
  `nm_matkul` varchar(30) NOT NULL,
  `jml_sks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nm_matkul`, `jml_sks`) VALUES
('IF123', 'Pemrograman Web', 3),
('IF222', 'Pemrograman Java', 3),
('IF333', 'Pemrograman OOP', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `narkoba`
--

CREATE TABLE `narkoba` (
  `ID` int(11) NOT NULL,
  `Tahun` int(4) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `narkoba`
--

INSERT INTO `narkoba` (`ID`, `Tahun`, `Jumlah`) VALUES
(1, 2012, 100),
(2, 2013, 200),
(3, 2014, 123),
(4, 2015, 87),
(5, 2016, 113),
(6, 2017, 123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penkum`
--

CREATE TABLE `penkum` (
  `ID` int(11) NOT NULL,
  `Sasaran` varchar(255) DEFAULT NULL,
  `Materi` varchar(255) DEFAULT NULL,
  `JumlahPeserta` int(11) DEFAULT '0',
  `Waktu` date DEFAULT NULL,
  `Tempat` varchar(255) DEFAULT NULL,
  `Media` varchar(255) DEFAULT NULL,
  `MateriTidakLangsung` varchar(255) DEFAULT NULL,
  `WaktuTidakLangsung` varchar(255) DEFAULT NULL,
  `KetTidakLangsung` text,
  `JenisPelaksanaan` enum('langsung','tidak_langsung') DEFAULT NULL,
  `Petugas` varchar(255) DEFAULT NULL,
  `Ket` text,
  `KerjaSamaInstansiLain` varchar(255) DEFAULT NULL,
  `LinkGambar1` text,
  `LinkGambar2` text,
  `LinkGambar3` text,
  `LinkGambar4` text,
  `IDKelurahan` int(11) DEFAULT NULL,
  `Lat` text,
  `Lon` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penkum`
--

INSERT INTO `penkum` (`ID`, `Sasaran`, `Materi`, `JumlahPeserta`, `Waktu`, `Tempat`, `Media`, `MateriTidakLangsung`, `WaktuTidakLangsung`, `KetTidakLangsung`, `JenisPelaksanaan`, `Petugas`, `Ket`, `KerjaSamaInstansiLain`, `LinkGambar1`, `LinkGambar2`, `LinkGambar3`, `LinkGambar4`, `IDKelurahan`, `Lat`, `Lon`) VALUES
(1, 'Siswa-siswi, Dewan Guru SMPN 2 Palu', 'Bahaya Narkoba, Kenakalan Remaja', 1000, '2017-04-17', 'Lapangan SMP 2 Palu', NULL, NULL, NULL, NULL, 'langsung', 'Subeno SH, M.Yusuf', 'Menjadi Pembina Upacara', 'Dinas Pendidikan Kota Palu', NULL, NULL, NULL, NULL, 0, '-0.899914', '119.873039'),
(2, 'Siswa-Siswi SMKN 1 Palu', 'Tugas dan Fungsi Kejaksaan, Bahaya Narkoba', 60, '2017-02-07', 'Aula SMKN 1 Palu', NULL, NULL, NULL, NULL, 'langsung', 'E. Yusak Tomasowa SH, MH, M. Fikri SH, M. Yusuf S.Kom, Furqanuddin Lagonah', '', '', 'img/uploads/GX-3S41L.jpg', 'img/uploads/16645732413_3b7af58186_c.jpg', '', '', 0, '-0.901482', '119.880164'),
(3, 'Siswa-siswi, Dewan Guru SMPN 1 Palu', 'Pentingnya Kejujuran', 1000, '2017-02-27', 'Lapangan SMPN 1 Palu', NULL, NULL, NULL, NULL, 'langsung', 'I Ketut Sudiarta SH, M. Yusuf S.Kom', 'Menjadi Pembina Upacara Bendera', 'Dinas Pendidikan Kota Palu', NULL, NULL, NULL, NULL, 0, '-0.894497', '119.874080'),
(4, 'Siswa-siswi, Dewan Guru SDN 2 Palu', 'Bahaya Narkoba', 400, '2017-02-27', 'Lapangan SDN 2 Palu', NULL, NULL, NULL, NULL, 'langsung', 'E. Yusak Tomasowa SH.MH, Furqanuddin Lagonah', 'Pembina Upacara', 'Dinas Pendidikan Kota Palu', NULL, NULL, NULL, NULL, 0, '-0.894843', '119.856690'),
(5, 'Para Kepala SKPD Pemkot Kota Palu', 'Sosialisasi TP4D', 40, '2017-03-01', 'Aula Kantor Walikota Palu', NULL, NULL, NULL, NULL, 'langsung', 'E. Yusak Tomasowa, I Ketut Sudiarta, Furqanuddin Lagonah, M. Fikri', '', NULL, NULL, NULL, NULL, NULL, 0, '-0.900204', '119.890966'),
(6, 'Pegawai Kantor Pertanahan Kota Palu', 'Pengenalan Fungsi Kejaksaan di Bidang DATUN', 14, '2017-03-16', 'Aula Kantor Kejari Palu', NULL, NULL, NULL, NULL, 'langsung', 'I Ketut Sudiarta', NULL, NULL, NULL, NULL, NULL, NULL, 0, '-0.910312', '119.889381'),
(7, 'Mahasiswa Fak. Hukum Semester VI Universitas Tadulako', 'Tatacara pembuatan surat dakwaan', 9, '2017-03-21', 'Aula Kejari Palu', NULL, NULL, NULL, NULL, 'langsung', 'Subeno, SH.', NULL, NULL, NULL, NULL, NULL, NULL, 0, '-0.910152', '119.889687'),
(8, 'Siswa-siswi, Dewan Guru SMPN 3 Palu', 'Pentingnya Kejujuran', 1000, '2017-03-27', 'Lapangan SMPN 3 Palu', NULL, NULL, NULL, NULL, 'langsung', 'Suryanto SH, M. Yusuf S.Kom', NULL, 'Dinas Pendidikan Kota Palu', NULL, NULL, NULL, NULL, 0, '-0.902201', '119.852841'),
(9, 'Siswa-siswi SMAN 3 Palu', 'Suarakan Anti Korupsi Sejak Dini', 100, '2013-10-30', 'Aula SMAN 3 Palu', NULL, NULL, NULL, NULL, 'langsung', 'Asnawi SH, Fahri SH, Nursiah SH, Didin Mufti SH, Junaedy SH, Samuel SH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-0.931951', '119.897125'),
(10, 'Siswa-siswi SMAN 2 Palu', 'Suarakan Anti Korupsi Sejak Dini', 100, '2013-10-29', 'Aula SMAN 2 Palu', NULL, NULL, NULL, NULL, 'langsung', 'Asnawi SH, Fahri SH, Nursiah SH, Didin SH, Junaedy SH, Samuel SH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-0.903266', '119.879186'),
(11, 'Pengusaha Restoran dan Perhotelan di Kota Palu', 'Sosialisasi Perda No 5 tahun 2013 tentang Pencegahan dan Penanggulangan Bahaya Kebakaran dalam Wilayah Kota Palu', 100, '2013-11-21', 'Kantor Pertanian Kehutanan dan Kelautan Kota Palu', NULL, NULL, NULL, NULL, NULL, 'Asnawi SH, Nursiah SH, Didin SH, Junaedy SH, Samuel SH', NULL, 'Dinas Pemadam Kebakaran Kota Palu', NULL, NULL, NULL, NULL, NULL, '-0.899369', '119.892162'),
(13, 'Para Kepala Sekolah SD, SMP, SMA / Sederajat se Kota Palu dan Pejabat di Lingkungan Dinas Pendidikan dan Kebudayaan Kota Palu', 'Aspek Hukum dalam Pengadaan Barang dan Jasa di Lingkungan Pemerintah', 150, '2014-09-15', 'Auditorium Walikota Palu', NULL, NULL, NULL, NULL, 'langsung', 'Asnawi SH, Fahri SH, Reza SH, Moh Tang SH, Rusli SH', NULL, 'Pemkot Palu', NULL, NULL, NULL, NULL, NULL, '-0.898092', '119.873075'),
(14, 'Pegawai Dinas ESDM Kota Palu', 'Pembinaan SDM di Bidang Hukum', 50, '2014-09-10', 'Kantor ESDM Kota Palu', NULL, NULL, NULL, NULL, NULL, 'Asnawi SH, Fahri SH, Reza SH, Moh Tang SH, Rusly SH', NULL, 'ESDM Kota Palu', NULL, NULL, NULL, NULL, NULL, '-0.923255', '119.885036'),
(15, 'Siswa-siswi SMK Alkhairat Kota Palu', 'Tugas dan Fungsi Kejaksaan', 40, '2015-06-24', 'SMK Alkhairat Palu', NULL, NULL, NULL, NULL, NULL, 'Reza Hidayat SH, Ahmad Habibi SH, Khalimatus Sangdiyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-0.902126', '119.858058'),
(16, 'Siswa-siswi SMKN 2 Palu', 'Pengenalan Korupsi Sejak Dini', 50, '2015-09-17', 'Aula SMKN 2 Palu', NULL, NULL, NULL, NULL, 'langsung', 'R. Syamsul Arifin SH, Fahri SH, Reza SH, Ahmad Habibi SH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-0.902392', '119.876509'),
(17, 'Siswa-siswi SMAN 4 Palu', 'Tugas dan Fungsi Kejaksaan', 65, '2016-02-02', 'SMAN 4 Palu', NULL, NULL, NULL, NULL, 'langsung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-0.889487', '119.848244'),
(18, 'Mahasiswa Akademi Kebidanan Kota Palu', 'Tugas dan Fungsi Kejaksaan', 65, '2016-10-05', 'Aula AKBID Kota Palu', NULL, NULL, NULL, NULL, NULL, 'E Yusak Tomasowa SH, Junaidy SH, M. Fikri SH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'SMPN 4 Palu', 'Cyberbullying, Bahaya Narkoba', 800, '2017-05-15', 'SMPN 4 Palu', NULL, NULL, NULL, NULL, 'langsung', 'Efrivel SH', '', 'Dinas Pendidikan Kota Palu', 'img/uploads/12654460_1110280852350116_5063313027794735547_n.jpg', '', '', '', NULL, '-0.893456', '119.873918');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `NamaKecamatan` (`NamaKecamatan`);

--
-- Indexes for table `kegiatanluhkum`
--
ALTER TABLE `kegiatanluhkum`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `IDLuhkum` (`IDLuhkum`,`IDKelurahan`),
  ADD KEY `fk_kegiatanpenluh_1` (`IDKelurahan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_kelurahan_1` (`IDKecamatan`);

--
-- Indexes for table `korupsi`
--
ALTER TABLE `korupsi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `luhkum`
--
ALTER TABLE `luhkum`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `narkoba`
--
ALTER TABLE `narkoba`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `penkum`
--
ALTER TABLE `penkum`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_penkum_1_idx` (`IDKelurahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kegiatanluhkum`
--
ALTER TABLE `kegiatanluhkum`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `korupsi`
--
ALTER TABLE `korupsi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `luhkum`
--
ALTER TABLE `luhkum`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `narkoba`
--
ALTER TABLE `narkoba`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penkum`
--
ALTER TABLE `penkum`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kegiatanluhkum`
--
ALTER TABLE `kegiatanluhkum`
  ADD CONSTRAINT `fk_kegiatanpenluh_1` FOREIGN KEY (`IDKelurahan`) REFERENCES `kelurahan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kegiatanpenluh_2` FOREIGN KEY (`IDLuhkum`) REFERENCES `luhkum` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `fk_kelurahan_1` FOREIGN KEY (`IDKecamatan`) REFERENCES `kecamatan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
