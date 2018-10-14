-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 07:04 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_mod6`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_mod6`
--

CREATE TABLE `t_mod6` (
  `nama` varchar(20) NOT NULL,
  `nim` varchar(20) NOT NULL COMMENT 'primary_key',
  `jenis_kelamin` varchar(10) NOT NULL,
  `hobi` varchar(35) NOT NULL,
  `fakultas` varchar(29) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_mod6`
--

INSERT INTO `t_mod6` (`nama`, `nim`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`, `kelas`) VALUES
('Desi J Manurung', '6701174141', 'Perempuan', 'DENGAR MUSIK', 'FAKULTAS ILMU TERAPA', 'Gang PGA', ''),
('SRI', '6701174129', 'Perempuan', 'BADMINTON', 'FAKULTAS TEKNIK ELEK', 'SUKAPURA', ''),
('Julyanti', '6701173719', 'Perempuan', 'TIDUR', 'FAKULTAS TEKNIK ELEKTRO', 'medan', ''),
('JOU', '6701172998', 'Laki-Laki', 'BADMINTON', 'FAKULTAS INFORMATIKA', 'BANDUNG', ''),
('Manurung', '6701174141', 'Perempuan', 'BERENANG', 'FAKULTAS REKAYASA INDUSTRI', 'MEDAN', ''),
('putri', '6701173719', 'Perempuan', 'BOLA', 'FAKULTAS TEKNIK ELEKTRO', 'Gang PGA', 'D3MI-41-01'),
('sinambela', '6701172998', 'Laki-Laki', 'SEPAKBOLA', 'FAKULTAS TEKNIK ELEKTRO', 'SUKAPURA', 'D3MI-41-02'),
('Cinta', '6701176727', 'Perempuan', 'TIDUR', 'FAKULTAS REKAYASA INDUSTRI', 'PORSEA', 'D3MI-41-04'),
('Sayang', '6701171615', 'Laki-Laki', 'RENANG', 'FAKULTAS TEKNIK ELEKTRO', 'MEDAN', 'D3MI-41-04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
