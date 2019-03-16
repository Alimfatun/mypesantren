-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jul 2018 pada 14.37
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbangsuran`
--

CREATE TABLE `tbangsuran` (
  `id` int(30) NOT NULL,
  `anis` varchar(50) NOT NULL,
  `jumlah` varchar(65) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbangsuran`
--

INSERT INTO `tbangsuran` (`id`, `anis`, `jumlah`, `date`) VALUES
(1, '10001', '1000000', '2017-11-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdata`
--

CREATE TABLE `tbdata` (
  `id` int(30) NOT NULL,
  `nis` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` int(10) NOT NULL,
  `tempat` text NOT NULL,
  `lahir` date NOT NULL,
  `anak` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` text NOT NULL,
  `agama` int(10) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `namay` varchar(50) NOT NULL,
  `namab` varchar(50) NOT NULL,
  `joby` varchar(50) NOT NULL,
  `jobb` varchar(50) NOT NULL,
  `alamat1` text NOT NULL,
  `nohp1` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbdata`
--

INSERT INTO `tbdata` (`id`, `nis`, `nama`, `gender`, `tempat`, `lahir`, `anak`, `alamat`, `nohp`, `agama`, `sekolah`, `kelas`, `program`, `namay`, `namab`, `joby`, `jobb`, `alamat1`, `nohp1`, `date`) VALUES
(2, '10001', 'Panji', 1, 'Tegal', '2015-10-29', '1,6', 'Kalisapu, tegal', '08976541234', 1, 'SMA N 1 Tegal', 'VII', '', 'Tarjo', 'Tarmih', 'Buruh', 'Buruh', 'Desa Kalisapu, Tegal', '08976541234', '2017-10-08'),
(3, '9001', 'Aida Bibah', 2, 'Tegal', '2015-10-30', '3,9', 'Slawi', '08976512378', 1, 'SMA N 2 Slawi', '8', '4', 'Good', 'Orang', 'Buruh', 'Buruh', 'Slawi', '089765123552', '2017-12-05'),
(4, '1001', 'Aida', 2, 'Tegal', '2008-10-28', '2,5', 'Tegal Slerok', '0897123456', 1, 'SMA 1 tegal', '12', '10', 'Murni', 'Mumi', 'Buruh', 'Guru', 'Indonesia', '089765123456', '2017-11-15'),
(5, '2001', 'ALiyah', 2, 'Brebes', '2014-10-30', '2,5', 'Brebes', '9879798', 1, '', '11', '8', 'fsdf', 'dsfs', 'fdsf', 'fsf', 'fsf', 'fsfs', '2017-11-15'),
(6, '10021', 'Agung ', 1, 'Brebes', '1998-07-17', '2,5', 'Jln. Pegangsaaan timur no. 56', '08976534219', 1, 'SMA 1 Negeri ', '12', '12', 'Nabati', 'Malkis', 'Buruh', 'Guru', 'Jln. Pegangsaan Timur no. 56', '08976534219', '2018-07-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbroot`
--

CREATE TABLE `tbroot` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbroot`
--

INSERT INTO `tbroot` (`id`, `nama`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtentor`
--

CREATE TABLE `tbtentor` (
  `id_ten` int(11) NOT NULL,
  `nama_ten` varchar(50) NOT NULL,
  `alamat_ten` text NOT NULL,
  `mapel_ten` varchar(45) NOT NULL,
  `status_ten` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtentor`
--

INSERT INTO `tbtentor` (`id_ten`, `nama_ten`, `alamat_ten`, `mapel_ten`, `status_ten`) VALUES
(1, 'Hendi', 'Tegal kalipasung', 'Bahasa Inggris', 11),
(2, 'Broly', 'Slawi', 'Matematika', 12),
(3, 'Gondes', 'Majapahit', 'Matematika', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbangsuran`
--
ALTER TABLE `tbangsuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbdata`
--
ALTER TABLE `tbdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbroot`
--
ALTER TABLE `tbroot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbtentor`
--
ALTER TABLE `tbtentor`
  ADD PRIMARY KEY (`id_ten`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbangsuran`
--
ALTER TABLE `tbangsuran`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbdata`
--
ALTER TABLE `tbdata`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbroot`
--
ALTER TABLE `tbroot`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbtentor`
--
ALTER TABLE `tbtentor`
  MODIFY `id_ten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
