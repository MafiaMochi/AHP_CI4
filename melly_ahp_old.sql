-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 04:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melly_ahp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` varchar(5) NOT NULL,
  `nama_gr` varchar(255) NOT NULL,
  `jabatan_gr` varchar(255) NOT NULL,
  `tugas_gr` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `nama_gr`, `jabatan_gr`, `tugas_gr`, `created_at`, `update_at`) VALUES
('A1', 'Samuel', 'Kepala sekolah', 'Guru kimia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('A2', 'Melly', 'Wakil Kepala Sekolah', 'Guru Bahasa indonesia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('A3', 'Fariz', 'Wakil Kepala Sekolah 2', 'Guru IPS', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `eigen`
--

CREATE TABLE `eigen` (
  `id_nilai_eigen` int(5) NOT NULL,
  `id_kriteria1` varchar(5) NOT NULL,
  `id_kriteria2` varchar(5) NOT NULL,
  `nilai_eigen` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eigen`
--

INSERT INTO `eigen` (`id_nilai_eigen`, `id_kriteria1`, `id_kriteria2`, `nilai_eigen`) VALUES
(1, 'C1', 'C1', '0.797469'),
(2, 'C1', 'C2', '0.859649'),
(3, 'C1', 'C3', '0.529412'),
(4, 'C2', 'C1', '0.113924'),
(5, 'C2', 'C2', '0.122807'),
(6, 'C2', 'C3', '0.411765'),
(7, 'C3', 'C1', '0.088608'),
(8, 'C3', 'C2', '0.017544'),
(9, 'C3', 'C3', '0.058824');

-- --------------------------------------------------------

--
-- Table structure for table `irk`
--

CREATE TABLE `irk` (
  `id_irk` int(2) NOT NULL,
  `indek_irk` int(3) NOT NULL,
  `nilai_irk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irk`
--

INSERT INTO `irk` (`id_irk`, `indek_irk`, `nilai_irk`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0.58),
(4, 4, 0.9),
(5, 5, 1.12),
(6, 6, 1.24),
(7, 7, 1.32),
(8, 8, 1.41),
(9, 9, 1.45),
(10, 10, 1.49),
(11, 11, 1.51),
(12, 12, 1.48),
(13, 13, 1.56),
(14, 14, 1.57),
(15, 15, 1.59);

-- --------------------------------------------------------

--
-- Table structure for table `jml_nilai_perb`
--

CREATE TABLE `jml_nilai_perb` (
  `id_jml_nilai_perb` int(11) NOT NULL,
  `id_kriteria` varchar(5) NOT NULL,
  `total_nilai_perb` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jml_nilai_perb`
--

INSERT INTO `jml_nilai_perb` (`id_jml_nilai_perb`, `id_kriteria`, `total_nilai_perb`) VALUES
(1, 'C1', '1.253968'),
(2, 'C2', '8.142857'),
(3, 'C3', '17.000000');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_krit` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_krit`, `nama`) VALUES
('C1', 'tanggung jawab'),
('C2', 'disiplin'),
('C3', 'di sukai murid');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_perbk`
--

CREATE TABLE `nilai_perbk` (
  `id_nilai_kriteria` int(5) NOT NULL,
  `id_kriteria1` varchar(5) NOT NULL,
  `id_kriteria2` varchar(5) NOT NULL,
  `nilai_perb` decimal(10,6) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_perbk`
--

INSERT INTO `nilai_perbk` (`id_nilai_kriteria`, `id_kriteria1`, `id_kriteria2`, `nilai_perb`, `created_at`, `updated_at`) VALUES
(1, 'C1', 'C1', '1.000000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'C1', 'C2', '7.000000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'C1', 'C3', '9.000000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'C2', 'C1', '0.142857', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'C2', 'C2', '1.000000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'C2', 'C3', '7.000000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'C3', 'C1', '0.111111', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'C3', 'C2', '0.142857', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'C3', 'C3', '1.000000', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_alt`
--

CREATE TABLE `perbandingan_alt` (
  `id_perbandingan_alt` int(5) NOT NULL,
  `id_kriteria` varchar(5) NOT NULL,
  `id_alt1` varchar(5) NOT NULL,
  `id_alt2` varchar(5) NOT NULL,
  `nilai_perb_alt` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perbandingan_alt`
--

INSERT INTO `perbandingan_alt` (`id_perbandingan_alt`, `id_kriteria`, `id_alt1`, `id_alt2`, `nilai_perb_alt`) VALUES
(1, 'C1', 'A1', 'A1', '1.000000'),
(2, 'C1', 'A1', 'A2', '7.000000'),
(3, 'C1', 'A1', 'A3', '0.125000'),
(4, 'C1', 'A2', 'A1', '0.142857'),
(5, 'C1', 'A2', 'A2', '1.000000'),
(6, 'C1', 'A2', 'A3', '8.000000'),
(7, 'C1', 'A3', 'A1', '8.000000'),
(8, 'C1', 'A3', 'A2', '0.125000'),
(9, 'C1', 'A3', 'A3', '1.000000'),
(10, 'C2', 'A1', 'A1', '1.000000'),
(11, 'C2', 'A1', 'A2', '9.000000'),
(12, 'C2', 'A1', 'A3', '7.000000'),
(13, 'C2', 'A2', 'A1', '0.111111'),
(14, 'C2', 'A2', 'A2', '1.000000'),
(15, 'C2', 'A2', 'A3', '0.166667'),
(16, 'C2', 'A3', 'A1', '0.142857'),
(17, 'C2', 'A3', 'A2', '6.000000'),
(18, 'C2', 'A3', 'A3', '1.000000'),
(19, 'C3', 'A1', 'A1', '1.000000'),
(20, 'C3', 'A1', 'A2', '0.142857'),
(21, 'C3', 'A1', 'A3', '0.111111'),
(22, 'C3', 'A2', 'A1', '7.000000'),
(23, 'C3', 'A2', 'A2', '1.000000'),
(24, 'C3', 'A2', 'A3', '0.166667'),
(25, 'C3', 'A3', 'A1', '9.000000'),
(26, 'C3', 'A3', 'A2', '6.000000'),
(27, 'C3', 'A3', 'A3', '1.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id_ranking` int(5) NOT NULL,
  `id_alt` varchar(5) NOT NULL,
  `nilai_alt` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratakriteria`
--

CREATE TABLE `ratakriteria` (
  `id_ratakriteria` int(5) NOT NULL,
  `id_kriteria` varchar(5) NOT NULL,
  `nilai_rata` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratakriteria`
--

INSERT INTO `ratakriteria` (`id_ratakriteria`, `id_kriteria`, `nilai_rata`) VALUES
(1, 'C1', '0.728843'),
(2, 'C2', '0.216165'),
(3, 'C3', '0.054992');

-- --------------------------------------------------------

--
-- Table structure for table `rata_rengking`
--

CREATE TABLE `rata_rengking` (
  `id_rata_rengking` int(5) NOT NULL,
  `id_kriteria` varchar(5) NOT NULL,
  `id_alt` varchar(5) NOT NULL,
  `nilai_rengking` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rata_rengking`
--

INSERT INTO `rata_rengking` (`id_rata_rengking`, `id_kriteria`, `id_alt`, `nilai_rengking`) VALUES
(1, 'C3', 'A1', '5.666667'),
(2, 'C2', 'A1', '0.417989'),
(3, 'C1', 'A1', '3.047619'),
(4, 'C2', 'A2', '5.333333'),
(5, 'C1', 'A2', '2.708333'),
(6, 'C3', 'A2', '2.380952'),
(7, 'C3', 'A3', '0.425926'),
(8, 'C2', 'A3', '2.722222'),
(9, 'C1', 'A3', '3.041667');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `eigen`
--
ALTER TABLE `eigen`
  ADD PRIMARY KEY (`id_nilai_eigen`);

--
-- Indexes for table `irk`
--
ALTER TABLE `irk`
  ADD PRIMARY KEY (`id_irk`);

--
-- Indexes for table `jml_nilai_perb`
--
ALTER TABLE `jml_nilai_perb`
  ADD PRIMARY KEY (`id_jml_nilai_perb`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_krit`);

--
-- Indexes for table `nilai_perbk`
--
ALTER TABLE `nilai_perbk`
  ADD PRIMARY KEY (`id_nilai_kriteria`);

--
-- Indexes for table `perbandingan_alt`
--
ALTER TABLE `perbandingan_alt`
  ADD PRIMARY KEY (`id_perbandingan_alt`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indexes for table `ratakriteria`
--
ALTER TABLE `ratakriteria`
  ADD PRIMARY KEY (`id_ratakriteria`);

--
-- Indexes for table `rata_rengking`
--
ALTER TABLE `rata_rengking`
  ADD PRIMARY KEY (`id_rata_rengking`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eigen`
--
ALTER TABLE `eigen`
  MODIFY `id_nilai_eigen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `irk`
--
ALTER TABLE `irk`
  MODIFY `id_irk` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jml_nilai_perb`
--
ALTER TABLE `jml_nilai_perb`
  MODIFY `id_jml_nilai_perb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai_perbk`
--
ALTER TABLE `nilai_perbk`
  MODIFY `id_nilai_kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `perbandingan_alt`
--
ALTER TABLE `perbandingan_alt`
  MODIFY `id_perbandingan_alt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id_ranking` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratakriteria`
--
ALTER TABLE `ratakriteria`
  MODIFY `id_ratakriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rata_rengking`
--
ALTER TABLE `rata_rengking`
  MODIFY `id_rata_rengking` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
