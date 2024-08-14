-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 08:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kelahiran` bigint(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pukul` time NOT NULL,
  `jenis_kelahiran` varchar(50) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat` varchar(59) NOT NULL,
  `berat_bayi` varchar(10) NOT NULL,
  `panjang_bayi` varchar(10) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `alamat_ayah` varchar(100) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `nama`, `hari`, `tempat_lahir`, `tanggal_lahir`, `pukul`, `jenis_kelahiran`, `anak_ke`, `jenis_kelamin`, `alamat`, `berat_bayi`, `panjang_bayi`, `nik_ayah`, `nama_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `nik_ibu`, `nama_ibu`, `pekerjaan_ibu`, `alamat_ibu`) VALUES
(18, 'NAURA', '1', 'Simpang Empat', '2023-06-15', '11:30:00', '', '', 'Laki Laki', 'Air Runding ', '', '', '', 'Dasri Watan HSB', 'petani', '', '', 'Junisra', 'ibu Rumah Tangga', ''),
(19, 'Nawaitu Zahra', 'Senin', 'Simpang Empat', '2023-03-22', '18:31:00', '', '', 'Perempuan', 'Simpang', '', '', '', 'Rajab Lubis', '', '', '', 'Pitra Yahani', '', ''),
(20, 'Muhammad Aslama Syan', 'Rabu', 'Kabupaten Pasaman Barat', '2024-05-21', '21:45:00', '', '', 'Laki Laki', 'Air Runding', '', '', '', 'Saplisar', '', '', '', 'Elma Yanti', '', ''),
(21, 'Willy Saputra', 'Jumat', 'Air Runding', '2021-02-01', '10:00:00', '', '', 'Laki Laki', 'Simpang', '', '', '', 'Alizar', '', '', '', 'Rikahani', '', ''),
(22, 'Anggian Saputra', 'Jumat', 'Jambak', '2019-06-11', '17:00:00', '', '', 'Laki Laki', 'Air Runding', '', '', '', 'Dasri Watan HSB', '', '', '', 'Junisra', '', ''),
(23, 'Azel Zein Putra', 'Jumat', 'Simpang', '0000-00-00', '00:00:00', '', '', 'Laki Laki', 'Simpang\r\n', '', '', '', 'Ardi', '', '', '', 'Linda Sari', '', ''),
(24, 'Tiara Lestari', 'Selasa', 'Air Balam', '2021-12-16', '22:21:00', '', '', 'Perempuan', 'Simpang', '', '', '', 'Antoni', '', '', '', 'Mahyuni', '', ''),
(25, 'Dedi Wahyudi', 'Rabu', 'Air Runding', '2020-07-31', '13:30:00', '', '', 'Laki Laki', 'Air Runding', '', '', '', 'Saipul', '', '', '', 'Ratna', '', ''),
(26, 'Izzati Adilla', 'Sabtu', 'Simpang', '2019-10-13', '10:36:00', '', '', 'Perempuan', 'Simpang', '', '', '', 'Aswat', '', '', '', 'Hartati', '', ''),
(27, 'Sahira', '1', 'Air Runding', '2024-02-01', '00:00:00', '', '', 'Laki Laki', 'Air Runding ', '', '', '', 'Rijal', 'wrausaha', '', '', 'Cinda', 'ibu Rumah Tangga', '');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hari_wafat` varchar(20) NOT NULL,
  `pukul` time NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat`, `hari_wafat`, `pukul`, `keterangan`) VALUES
('', 'Sutardi', '', '25', 'Laki Laki', '', '', 'Simpang', 'jumat', '00:00:00', ''),
('', 'Maisaroh', '', '53', 'Perempuan', '', '', 'Air Runding', 'Rabu', '00:00:00', ''),
('', 'Teti Astuti', '', '37', 'Perempuan', '', '', 'Air Runding', 'Selasa', '00:00:00', ''),
('', 'Rahayu', '', '18', 'Perempuan', '', '', 'Simpang', 'Rabu', '00:00:00', ''),
('', 'Miftahul Jannah', '', '32', 'Perempuan', '', '', 'Simpang', 'Sabtu', '00:00:00', ''),
('', 'Yandra', '', '22', 'Laki Laki', '', '', 'Air Runding', 'Kamis', '00:00:00', ''),
('', 'Ibrahim', '', '16', 'Laki Laki', '', '', 'Simpang', 'Sabtu', '00:00:00', ''),
('', 'Edwira', '', '31', 'Laki Laki', '', '', 'Air Runding', 'jumat', '00:00:00', ''),
('', 'Nasrul Putra', '', '11', 'Laki Laki', '', '', 'Air Runding', 'Kamis', '00:00:00', ''),
('', 'Murhayati', '', '63', 'Perempuan', '', '', 'Air Runding', 'Senin', '00:00:00', ''),
('1304014112970004', 'Sapu', 'tidak tsu', '21', 'Laki Laki', 'Kristen', 'gf', 'x', 'jumat', '00:57:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `pejabat`
--

CREATE TABLE `pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `nama_pejabat` varchar(20) NOT NULL,
  `nip_pejabat` varchar(20) NOT NULL,
  `jabatan_pejabat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pejabat`
--

INSERT INTO `pejabat` (`id_pejabat`, `nama_pejabat`, `nip_pejabat`, `jabatan_pejabat`) VALUES
(1, 'Lisa April Yeni', '19820405 201001 2004', 'Kepala Wali'),
(2, 'Donat Izazus S.Pd', '-', 'Sekretaris Wali');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` bigint(16) NOT NULL,
  `no_kk` bigint(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jorong` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `golongan_darah` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `no_kk`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `jorong`, `agama`, `status_perkawinan`, `pendidikan`, `pekerjaan`, `status`, `golongan_darah`, `kewarganegaraan`) VALUES
(1201040410130001, 1312082405190005, 'Samsul Bahri', 'Pinangsori', '2013-12-03', 'Laki Laki', 'Simpang   ', 'Jorong Simpang', 'Islam', 'Belum Menikah', 'SD', 'Tidak Bekerja', 'Tetap', 'O', 'Indonesia'),
(1202041402870003, 1312082701220001, 'Rajab Lubis', 'Perancis', '1987-03-16', 'Laki Laki', 'Simpang', 'Jorong Simpang', 'Islam', 'Menikah', 'SMA', 'Petani', 'Tetap', 'O', 'Indonesia'),
(1213084404750002, 1312080805100014, 'Linda Sari', 'Bandarejo', '1998-05-04', 'Perempuan', 'Simpang', 'Jorong Simpang', 'Islam', 'Menikah', 'SD', 'Ibu Rumah Tangga', 'Tetap', 'A', 'Indonesia'),
(1312050811040002, 1213081921170003, 'Ade Saputra', 'Simpang', '1980-03-12', 'Laki Laki', 'Simpang', 'Jorong Simpang', 'Islam', 'Menikah', 'SD', 'Petani', 'Tetap', 'AB', 'Indonesia'),
(1312080505770002, 1312081009080020, 'Dasri Watan HSB', 'Batang Lingkin', '1977-06-06', 'Laki Laki', 'Air Runding', 'Jorong Air Runding', 'Islam', 'Menikah', 'SMA', 'Wiraswasta', 'Tetap', 'AB', 'Indonesia'),
(1312080606070001, 131208186200016, 'Yusuf Andika', 'Air Runding', '2006-06-09', 'Laki Laki', 'Air Runding', 'Jorong Air Runding', 'Islam', 'Belum Menikah', 'SMP', 'Pelajar', 'Tetap', 'B', 'Indonesia'),
(1312080906800001, 1312090511100006, 'Sutardi', 'Desa Baru', '1996-05-18', 'Laki Laki', 'Simpang', 'Jorong Simpang', 'Islam', 'Belum Menikah', 'SMA', 'Petani', 'Tetap', 'A', 'Indonesia'),
(1312083001730001, 1312080906000025, 'Junisra', 'Air Runding', '1982-01-10', 'Perempuan', 'Air Runding', 'Jorong Air Runding', 'Islam', 'Menikah', 'SD', 'Ibu Rumah Tangga', 'Tetap', 'O', 'Indonesia'),
(1312084105640003, 1312092011140002, 'Juriani', 'Silaping', '1965-05-01', 'Perempuan', 'Simpang', 'Jorong Simpang', 'Islam', 'Menikah', 'SMA', 'Petani', 'Tetap', 'AB', 'Indonesia'),
(1312084503020008, 1312081913170003, 'Rosella', 'Rao-Rao', '2002-03-05', 'Perempuan', 'Simpang', 'Jorong Simpang', 'Islam', 'Belum Menikah', 'S1', 'Mahasiswa', 'Tetap', 'AB', 'Indonesia'),
(1312085403010002, 1312080105240002, 'Sri Wahyuni', 'Padang', '2002-05-18', 'Perempuan', 'Simpang', 'Jorong Simpang', 'Islam', 'Belum Menikah', 'D3', 'Mahasiswa', 'Tetap', 'AB', 'Indonesia'),
(1312086106921205, 1312081806200014, 'Mita Utari', 'Air Runding', '1991-05-21', 'Perempuan', 'Air Runding', 'Jorong Air Runding', 'Islam', 'Belum Menikah', 'D3', 'Tidak Bekerja', 'Tetap', 'A', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `skck`
--

CREATE TABLE `skck` (
  `id_skck` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_skck` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck`
--

INSERT INTO `skck` (`id_skck`, `id_pejabat`, `nik`, `tanggal_skck`) VALUES
(3, 1, '123456789', '2019-11-15'),
(4, 1, '75765757', '2019-11-15'),
(5, 1, '232323423', '2019-11-15'),
(6, 1, '3215260112990001', '2019-11-25'),
(7, 1, '3215260112990001', '2024-07-02'),
(8, 1, '213', '2024-07-05'),
(9, 1, '1201040410130001', '2024-08-11'),
(10, 1, '1312085403010002', '2024-08-11'),
(11, 1, '1312080606070001', '2024-08-11'),
(12, 1, '1202041402870003', '2024-08-11'),
(13, 1, '1312080505770002', '2024-08-11'),
(14, 1, '1312080906800001', '2024-08-11'),
(15, 1, '1213084404750002', '2024-08-11'),
(16, 1, '1312083001730001', '2024-08-11'),
(17, 1, '1312084105640003', '2024-08-11'),
(18, 1, '1312086106921205', '2024-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `surat_kelahiran`
--

CREATE TABLE `surat_kelahiran` (
  `id_surat_kelahiran` int(10) NOT NULL,
  `id_pejabat` int(20) NOT NULL,
  `nik_ayah` varchar(30) NOT NULL,
  `nik_ibu` varchar(30) NOT NULL,
  `nik_pelapor` varchar(30) NOT NULL,
  `nama_anak` varchar(30) NOT NULL,
  `kelamin_anak` varchar(15) NOT NULL,
  `tempat_lahir_anak` varchar(20) NOT NULL,
  `tanggal_lahir_anak` date NOT NULL,
  `jam_lahir_anak` varchar(10) NOT NULL,
  `hari_lahir_anak` varchar(20) NOT NULL,
  `hubungan_sebagai` varchar(100) NOT NULL,
  `tanggal_surat_kelahiran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_kelahiran`
--

INSERT INTO `surat_kelahiran` (`id_surat_kelahiran`, `id_pejabat`, `nik_ayah`, `nik_ibu`, `nik_pelapor`, `nama_anak`, `kelamin_anak`, `tempat_lahir_anak`, `tanggal_lahir_anak`, `jam_lahir_anak`, `hari_lahir_anak`, `hubungan_sebagai`, `tanggal_surat_kelahiran`) VALUES
(1, 1, '213', '213', '213', 'sri', 'Perempuan', 'SIMPANG EMPAT', '2024-08-04', '23:27', 'Selasa', 'ANAK KANDUNG', '2024-08-10'),
(2, 1, '123123', '213', '213', 'ana', 'Perempuan', 'padang', '2024-08-01', '18:17', 'Sabtu', 'anak', '2024-08-11'),
(3, 1, '1312080505770002', '1312083001730001', '1202041402870003', 'Ayu Lestari', 'Perempuan', 'Padang', '2024-07-30', '22:30', 'Minggu', 'Anak', '2024-08-11'),
(4, 1, '1312080505770002', '1312083001730001', '1213084404750002', 'Aura', 'Perempuan', 'Air Runding', '2024-08-01', '22:29', 'Kamis', 'Anak', '2024-08-11'),
(5, 1, '1202041402870003', '1312084503020008', '1213084404750002', 'Enika Putri', 'Perempuan', 'Simpang', '2024-01-07', '12:30', 'Minggu', 'Anak', '2024-08-11'),
(6, 1, '1312080505770002', '1312083001730001', '1202041402870003', 'Naura', 'Perempuan', 'Simpang Empat', '2023-06-15', '12:30', 'Sabtu', 'Anak', '2024-08-11'),
(7, 1, '1202041402870003', '1213084404750002', '1312080906800001', 'Indah Permata Sari', 'Perempuan', 'Simpang', '2024-01-08', '10:00', 'Senin', 'Anak', '2024-08-12'),
(8, 1, '1312080505770002', '1312083001730001', '1312080505770002', 'Sri Yunita', 'Perempuan', 'Padang', '2022-05-18', '08:15', 'Jumat', 'Anak', '2024-08-12'),
(9, 1, '1312080906800001', '1312084105640003', '1312080906800001', 'Reno Anggara', 'Laki-Laki', 'Simpang', '2020-11-27', '05:30', 'Selasa', 'Anak', '2024-08-12'),
(10, 1, '1202041402870003', '1312084503020008', '1202041402870003', 'Hendra Saputra', 'Laki-Laki', 'Simpang Empat ', '2023-05-08', '10:00', 'Minggu', 'Anak', '2024-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `surat_kematian`
--

CREATE TABLE `surat_kematian` (
  `id_surat_kematian` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nik_pelapor` varchar(30) NOT NULL,
  `umur_pelapor` int(11) NOT NULL,
  `tempat_kematian` varchar(255) NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `jam_kematian` varchar(10) NOT NULL,
  `hari_kematian` varchar(20) NOT NULL,
  `sebab_kematian` varchar(255) NOT NULL,
  `hubungan_sebagai` varchar(100) NOT NULL,
  `tanggal_surat_kematian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_kematian`
--

INSERT INTO `surat_kematian` (`id_surat_kematian`, `id_pejabat`, `nik`, `nik_pelapor`, `umur_pelapor`, `tempat_kematian`, `tanggal_kematian`, `jam_kematian`, `hari_kematian`, `sebab_kematian`, `hubungan_sebagai`, `tanggal_surat_kematian`) VALUES
(1, 1, '2147483647', '2147483647', 30, 'Tegal', '1990-11-11', '10:30', '', '', 'abah', '2019-11-15'),
(2, 1, '12346777', '123456789', 2, 'Tegal', '0000-00-00', '11:11', '', '', 'ibu', '2019-11-21'),
(3, 1, '3215260112990001', '3215260112990001', 12, 'tegall', '1998-09-16', '11:11', '1', '', 'sa', '2019-11-25'),
(4, 1, '3215261607780001', '3215262701170002', 120, 'sdds', '1998-11-11', '11:01', '', '', 'sodara', '2019-11-25'),
(5, 3, '213', '213', 31, 'AS', '4342-03-12', '12:03', 'Selasa', '', 'IBU', '2024-07-05'),
(6, 1, '1202041402870003', '1312080505770002', 47, 'Simpang', '2024-06-03', '12:39', 'Selasa', '', 'Saudara', '2024-08-11'),
(7, 1, '1312086106921205', '1213084404750002', 53, 'Air Runding', '2024-05-05', '23:50', 'Selasa', '', 'anak', '2024-08-11'),
(8, 1, '1312080606070001', '1312083001730001', 42, 'Air Runding', '2024-02-07', '10:30', 'Kamis', '', 'Anak', '2024-08-11'),
(9, 1, '1312080906800001', '1312084105640003', 65, 'Simpang', '2024-08-01', '13:26', 'Senin', '', 'Saudara', '2024-08-11'),
(10, 1, '1312050811040002', '1312080505770002', 42, 'Simpang', '2020-10-20', '10:10', 'Selasa', '', 'Keluarga', '2024-08-12'),
(11, 1, '1201040410130001', '1312080505770002', 44, 'Air Runding', '2024-07-26', '10:20', 'Selasa', '', 'Anak', '2024-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id_usaha` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `sejak_usaha` varchar(4) NOT NULL,
  `tanggal_usaha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id_usaha`, `id_pejabat`, `nik`, `nama_usaha`, `sejak_usaha`, `tanggal_usaha`) VALUES
(1, 1, '2147483647', 'khoirul syarif', '1886', '2019-11-15'),
(2, 1, '42432', 'khoirul syarif', '4', '2019-11-15'),
(3, 1, '3215260112990001', 'dfdsdf', '1998', '2019-11-25'),
(4, 1, '213', 'bumn', 's', '2024-07-04'),
(5, 1, '1202041402870003', 'Cafe', '2020', '2024-08-11'),
(6, 1, '1312080505770002', 'Konter', '2023', '2024-08-11'),
(8, 1, '1213084404750002', 'Resto', '2023', '2024-08-11'),
(9, 1, '1312080906800001', 'Bengkel', '2022', '2024-08-12'),
(10, 1, '1312083001730001', 'Toko Baju', '2023', '2024-08-12'),
(11, 1, '1312084105640003', 'Glosir', '2021', '2024-08-12'),
(12, 1, '1213084404750002', 'Toko Buah', '2023', '2024-08-12'),
(13, 1, '1312080505770002', 'Warnet', '2023', '2024-08-12'),
(14, 1, '1312084503020008', 'Usaha Kue', '2019', '2024-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `level` enum('admin','sekertaris','kepaladesa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama_petugas`, `level`) VALUES
('aal', 'c4ca4238a0b923820dcc509a6f75849b', 'Slamet', 'kepaladesa'),
('admin', 'c4ca4238a0b923820dcc509a6f75849b', 'Tibor', 'admin'),
('walinagari', 'c4ca4238a0b923820dcc509a6f75849b', 'Rohman', 'sekertaris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indexes for table `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id_pejabat`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `skck`
--
ALTER TABLE `skck`
  ADD PRIMARY KEY (`id_skck`);

--
-- Indexes for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD PRIMARY KEY (`id_surat_kelahiran`);

--
-- Indexes for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD PRIMARY KEY (`id_surat_kematian`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `skck`
--
ALTER TABLE `skck`
  MODIFY `id_skck` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  MODIFY `id_surat_kelahiran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  MODIFY `id_surat_kematian` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id_usaha` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
