-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 01:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampusdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `nim` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `matkul` varchar(400) NOT NULL,
  `kehadiran` varchar(30) NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`nim`, `nama`, `kelas`, `matkul`, `kehadiran`, `waktu`) VALUES
(123654, 'Gisel', 'SI-D', 'Kapita Selekta', 'Hadir', 'Thursday, 02-01-2025 02:02:38 pm');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Michael', 'Michael');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `iddosen` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `matkul` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`iddosen`, `nama`, `jeniskelamin`, `matkul`, `fakultas`) VALUES
(71, 'Salsa', 'Perempuan', 'Analogi', 'Bahasa'),
(111, 'Burma', 'Perempuan', 'Ekonomi', 'Ekonomi'),
(125, 'Sambuno', 'Laki-Laki', 'Statistika', 'MIPA'),
(126, 'Ambert', 'Perempuan', 'Kalkulus', 'Industri'),
(157, 'Richard', 'Laki-Laki', 'Pemrograman', 'Komputer'),
(178, 'Ferdinand', 'Laki-Laki', 'Hukum perdata', 'Hukum'),
(387, 'Gilbert', 'Laki-Laki', 'Tata kota', 'Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalkuliah`
--

CREATE TABLE `jadwalkuliah` (
  `kode` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sks` int(2) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `jadwal` varchar(100) NOT NULL,
  `dosen` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwalkuliah`
--

INSERT INTO `jadwalkuliah` (`kode`, `nama`, `sks`, `kelas`, `jadwal`, `dosen`) VALUES
(124210153, 'Perencanaan Strategis TI', 3, 'SI-B', 'Senin : 08.00 - 09.00 : Patt.I-3A', 'Yuli Fauziah, S.T.,M.T.'),
(124210162, 'Rekayasa Kebutuhan Perangkat Lunak', 2, 'SI-B', 'Selasa : 09.30-11.15 : Patt.I-3B', 'Bambang Yuwono,S.T.,M.T.'),
(124210172, 'Sistem Pendukung Keputusan', 2, 'SI-B', 'Selasa : 14.30-16.15 : Patt.II-3B', 'Juwairiah, S.Si., M.T.'),
(124210182, 'Keamanan Aset Informasi', 2, 'SI-B', 'Jumat : 08.00-10.00 : Patt.I-3C', 'Dessyanto Boedi P, S.T., M.T.'),
(124210192, 'Desain & Manajemen Jaringan Komputer', 2, 'SI-B', 'Rabu : 15.30-16.00 : Patt.I-3A', 'Budi Suyanto, S.T.,M.Eng.'),
(124210202, 'Metode Survey dan Pengolahan Data', 2, 'SI-B', 'Selasa : 12.00-13.45 : Patt.II-3C', 'Dr. Novrido Charibaldi, S.Kom., M.Kom.'),
(124210212, 'Interaksi Manusia & Komputer ', 2, 'SI-B', 'Kamis : 12.00-13.45 : Patt.III-3B', 'Rochmat Husaini,S.Kom., M.Kom.'),
(124210222, 'Kapita Selekta', 3, 'SI-B', 'Senin : 14.30-16.00 : Patt.III-3B', 'Frans Richard Kodong,S.T., M.Kom.');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `angkatan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `prodi`, `angkatan`) VALUES
(12345, 'Andreas', 'Laki-Laki', 'Kimia', 2021),
(8888888, 'Ica', 'Perempuan', 'Kimia', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `no` int(10) NOT NULL,
  `kodemk` int(15) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`no`, `kodemk`, `matakuliah`, `sks`) VALUES
(1, 124210153, 'Perencanaan Strategis TI', 3),
(2, 124210162, 'Rekayasa Kebutuhan Perangkat Lunak', 2),
(3, 124210172, 'Sistem Pendukung Keputusan', 2),
(4, 124210182, 'Keamanan Aset Informasi', 2),
(5, 124210192, 'Desain & Manajemen Jaringan Komputer', 2),
(6, 124210202, 'Metode Survey dan Pengolahan Data', 2),
(7, 124210212, 'Interaksi Manusia dan Komputer', 2),
(8, 124210222, 'Kapita Selekta', 3);

-- --------------------------------------------------------

--
-- Table structure for table `matkulinput`
--

CREATE TABLE `matkulinput` (
  `no` int(20) NOT NULL,
  `kodemk` int(20) NOT NULL,
  `matakuliah` varchar(60) NOT NULL,
  `sks` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matkulinput`
--

INSERT INTO `matkulinput` (`no`, `kodemk`, `matakuliah`, `sks`) VALUES
(1, 124210153, 'Perencanaan Strategis TI', 3),
(10, 124210153, 'Perencanaan Strategis TI', 3),
(11, 124210162, 'Rekayasa Kebutuhan Perangkat Lunak', 2),
(12, 124210172, 'Sistem Pendukung Keputusan', 2),
(13, 124210222, 'Kapita Selekta', 3);

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `deadline` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `nama`, `deadline`, `deskripsi`) VALUES
(1, 'English', '2024-05-31', 'Buat Video Review'),
(2, 'English', '2024-05-31', 'Tugas 5'),
(3, 'PWD', '2024-06-13', 'Buat Web');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('Alea', '123'),
('Anastasya', 'anastasya1'),
('bunga', 'bunga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`iddosen`);

--
-- Indexes for table `jadwalkuliah`
--
ALTER TABLE `jadwalkuliah`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `matkulinput`
--
ALTER TABLE `matkulinput`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matkulinput`
--
ALTER TABLE `matkulinput`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
