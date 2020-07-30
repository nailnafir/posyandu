-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2020 pada 19.41
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bayi`
--

CREATE TABLE `tb_bayi` (
  `id_bayi` int(11) NOT NULL,
  `nama_bayi` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `NIK_ibu` int(11) NOT NULL,
  `foto_bayi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bayi`
--

INSERT INTO `tb_bayi` (`id_bayi`, `nama_bayi`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `NIK_ibu`, `foto_bayi`) VALUES
(6, 'Gabriel Aurora Sulan', '2015-01-02', 'Perempuan', 'Ignasius Rizki', 'Rachel Andryani', 0, '1543382647455.jpg'),
(7, 'Muhammad Fatih Ghani', '2017-10-29', 'Laki-Laki', 'Fauzi', 'Budiarti', 0, ''),
(8, 'Muhammad Rizki R', '2016-06-09', 'Laki-Laki', 'Safrudin', 'Mursidah', 0, ''),
(9, 'Ayqilla Junito R', '2015-06-24', 'Perempuan', 'Muhammad Damin', 'Insiani', 0, ''),
(10, 'Aisyah Putri Rania', '2015-07-30', 'Perempuan', 'Faisal Rasidi', 'Sarinah', 0, ''),
(11, 'Michael C R BJ', '2014-06-19', 'Laki-Laki', 'Bona Venhira', 'Ana Maria', 0, ''),
(12, 'Syarifah Humaira', '2015-06-25', 'Perempuan', 'Bain', 'Andes', 0, ''),
(13, 'Ahmad Rafif Alfahrizi', '2018-08-12', 'Laki-Laki', 'Riannoor J', 'Nani', 0, ''),
(14, 'Alghifari Reisyand A', '2017-03-23', 'Laki-Laki', 'Samsul A', 'Novinta', 0, ''),
(15, 'Naifa Azkiya', '2018-03-05', 'Perempuan', 'Haifudin N', 'Norhayati', 0, ''),
(16, 'Muhammad Azriel Afandi', '2017-09-30', 'Laki-Laki', 'Abdul Mujib', 'Anik', 0, ''),
(17, 'Gt Seman', '2017-04-30', 'Laki-Laki', 'Muhammad Aldi', 'Misa', 0, ''),
(18, 'Akhmad Fikri A P', '2016-10-01', 'Laki-Laki', 'Nazar Anugerah', 'Santi', 0, ''),
(19, 'Nazwa Khalfa Wilda', '2014-10-21', 'Perempuan', 'Abdul Muji A', 'Anik', 0, ''),
(20, 'Anisa Rahwati', '2014-05-24', 'Perempuan', 'Agus B', 'Feni', 0, ''),
(21, 'Adibya Rifqi Hamzah', '2015-10-28', 'Laki-Laki', 'Giyanto', 'Mariatul', 0, 'X_as_a_child1.png'),
(22, 'Nor Adzviya Zafira', '2016-04-08', 'Perempuan', 'Giyanto', 'Marianto', 0, ''),
(23, 'Putri Kartini', '2016-04-21', 'Perempuan', 'Arif', 'Mahmudah', 0, ''),
(24, 'Meidina', '2018-04-20', 'Perempuan', 'Iswan', 'Heny', 0, ''),
(25, 'Rica', '2014-08-18', 'Perempuan', 'Dylan', 'Rita', 0, ''),
(26, 'Muhammad Ananda Hidayat', '2014-10-31', 'Laki-Laki', 'Roni Hidayat', 'Idayanti', 0, ''),
(27, 'Muhammad Airlangga Hidayat', '2016-02-24', 'Laki-Laki', 'Roni Hidayat', 'Idayanti', 0, ''),
(28, 'Nirmala Mayseh', '2017-09-27', 'Perempuan', 'Amin', 'Marni', 0, ''),
(29, 'Aqila Khadijah', '2018-02-16', 'Perempuan', 'Padli', 'Hariati', 0, ''),
(30, 'Sultan', '2016-08-19', 'Laki-Laki', 'Rado', 'Hariati', 0, ''),
(31, 'Khairul Aqli', '2014-06-06', 'Laki-Laki', 'Roni', 'Arbainah', 0, ''),
(32, 'Ahmad Jainal Ilmi', '2015-05-27', 'Laki-Laki', 'Aliansyah', 'Andriyani', 0, ''),
(33, 'Olinda Arifa Atmaja', '2015-09-17', 'Perempuan', 'Putra', 'Ayu', 0, ''),
(34, 'Rafli Pratama Ramadhan', '2017-06-08', 'Laki-Laki', 'Rigok', 'Ramadana', 0, ''),
(35, 'Aisha Syabilla Febriani', '2015-02-20', 'Perempuan', 'Fahmi', 'Alifah', 0, ''),
(36, 'Kirana Aisyah Ghina Saputri', '2014-11-08', 'Perempuan', 'Triyono', 'Lamsiyani', 0, ''),
(37, 'Alkhalifi Zikri Athyya', '2018-02-26', 'Laki-Laki', 'Abdul Hayat', 'Lindawati', 0, '1543382651843.jpg'),
(38, 'Muhammad Noval Rajabi', '2018-03-20', 'Laki-Laki', 'Muhammad Hairullah', 'Listi', 0, ''),
(39, 'Muhammad Ansari', '2017-01-19', 'Laki-Laki', 'Haris', 'Hanisa', 0, ''),
(40, 'Nur Ainur Rahma', '2018-02-27', 'Perempuan', 'Taufik Rahman', 'Vera Susanti', 0, ''),
(41, 'Gloria Agatha Putri Yulianto', '2017-10-24', 'Perempuan', 'Dicky Dwi Yulianto', 'Dewi Norma Bela', 0, '1543382659774.jpg'),
(42, 'Mikhail Alaric Sulan', '2014-09-05', 'Laki-Laki', 'Ignasius Rizki', 'Rachel Andryani', 0, ''),
(43, 'Muhammad Kevin Ansari', '2014-09-05', 'Laki-Laki', 'Ar Rahman', 'Paramita', 0, ''),
(44, 'Muhammad Razqa Gibran', '2018-03-20', 'Laki-Laki', 'Muhammad Isra', 'Ida Bachrudin', 0, ''),
(45, 'Ahmad Muzammil Hafiz', '2018-04-15', 'Laki-Laki', 'Fahruraji', 'Andiah', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_imunisasi`
--

CREATE TABLE `tb_imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `id_bayi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_imunisasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_imunisasi`
--

INSERT INTO `tb_imunisasi` (`id_imunisasi`, `id_bayi`, `tanggal`, `nama_imunisasi`) VALUES
(1, 37, '2018-01-19', 'HB0, Polio 0'),
(2, 37, '2018-02-01', 'DPT, Polio 2'),
(3, 37, '2018-03-15', 'DPT, Polio 2'),
(4, 37, '2018-03-15', 'HB1, Polio 2'),
(5, 37, '2018-04-12', 'DPT, Polio 3'),
(6, 37, '2018-04-12', 'HB2, Polio 3'),
(7, 37, '2018-05-15', 'DPT, Polio 4'),
(8, 37, '2018-05-15', 'HB3, Polio 4'),
(9, 8, '2016-05-11', 'HB0, Polio 0'),
(10, 8, '2016-07-14', 'BCG, Polio 1'),
(11, 8, '2016-10-20', 'DPT, Polio 2'),
(12, 8, '2016-10-20', 'HB1, Polio 2'),
(13, 8, '2016-12-01', 'DPT, Polio 3'),
(14, 8, '2016-12-01', 'HB2, Polio 3'),
(15, 8, '2017-01-05', 'DPT, Polio 4'),
(16, 8, '2017-01-05', 'HB3, Polio 4'),
(17, 8, '2017-03-16', 'CAMPAK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penimbangan`
--

CREATE TABLE `tb_penimbangan` (
  `id_penimbangan` int(11) NOT NULL,
  `id_bayi` int(11) NOT NULL,
  `berat_bayi` double NOT NULL,
  `tinggi_bayi` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penimbangan`
--

INSERT INTO `tb_penimbangan` (`id_penimbangan`, `id_bayi`, `berat_bayi`, `tinggi_bayi`, `tanggal`) VALUES
(1, 1, 3.4, 60, '2018-10-24'),
(2, 3, 3, 50, '2018-10-24'),
(3, 5, 4, 50, '2018-10-24'),
(4, 21, 3, 35, '2018-11-13'),
(5, 7, 3.1, 35, '2017-10-16'),
(6, 7, 4.5, 45, '2017-11-16'),
(7, 7, 5.2, 52, '2017-12-16'),
(8, 7, 6, 58, '2018-02-15'),
(9, 7, 6.8, 62, '2018-03-15'),
(10, 7, 7.3, 6.4, '2018-04-15'),
(11, 7, 7.5, 66, '2018-05-15'),
(12, 7, 8, 70, '2018-06-15'),
(13, 7, 8.5, 72, '2018-07-15'),
(14, 7, 8.5, 73, '2018-08-15'),
(15, 7, 9.5, 78, '2018-09-15'),
(16, 7, 9.6, 80, '2018-10-15'),
(17, 37, 3.2, 45, '2018-09-15'),
(18, 37, 4.5, 53, '2018-08-15'),
(19, 37, 5.8, 55, '2018-07-15'),
(20, 37, 6.7, 57, '2018-06-15'),
(21, 37, 7.5, 63, '2018-05-15'),
(22, 37, 7.8, 65, '2018-04-15'),
(23, 37, 8, 67, '2018-03-15'),
(24, 37, 7.8, 70, '2018-02-26'),
(25, 37, 8, 71, '2018-10-15'),
(26, 38, 3.2, 45, '2018-11-14'),
(27, 38, 4.2, 51, '2018-11-14'),
(28, 38, 4.9, 53, '2018-11-14'),
(29, 38, 5.9, 55, '2018-11-14'),
(30, 38, 6.4, 57, '2018-11-14'),
(31, 38, 66, 59, '2018-11-14'),
(32, 38, 7.3, 62, '2018-11-14'),
(33, 38, 8, 67, '2018-11-14'),
(34, 45, 3.2, 46, '2018-11-14'),
(35, 45, 4.2, 50, '2018-11-14'),
(36, 45, 5.4, 54, '2018-11-14'),
(37, 45, 5.6, 57, '2018-11-14'),
(38, 45, 6.2, 63, '2018-11-14'),
(39, 45, 6.7, 67, '2018-11-14'),
(40, 45, 7, 67, '2018-11-14'),
(41, 40, 3.2, 44, '2018-11-14'),
(42, 40, 4.1, 49, '2018-11-14'),
(43, 40, 4.7, 53, '2018-11-14'),
(44, 40, 5.5, 56, '2018-11-14'),
(45, 40, 6.4, 61, '2018-11-14'),
(46, 40, 6.5, 62, '2018-11-14'),
(47, 40, 6.5, 63, '2018-11-14'),
(48, 40, 6.5, 63, '2018-11-14'),
(49, 40, 6.4, 63, '2018-11-14'),
(50, 41, 2.7, 38, '2018-11-21'),
(51, 41, 4.2, 43, '2018-11-21'),
(52, 41, 5.2, 45, '2018-11-21'),
(53, 41, 5.1, 48, '2018-11-21'),
(54, 41, 6.4, 52, '2018-11-21'),
(55, 41, 7.2, 55, '2018-11-21'),
(56, 41, 7.4, 55, '2018-11-21'),
(57, 41, 7.8, 57, '2018-11-21'),
(58, 41, 7.7, 57, '2018-11-21'),
(59, 41, 8, 60, '2018-11-21'),
(60, 41, 8.3, 65, '2018-11-21'),
(61, 41, 8.3, 65, '2018-11-21'),
(62, 41, 8.3, 63, '2018-11-21'),
(63, 41, 8.4, 67, '2018-11-21'),
(64, 41, 8.7, 73, '2018-11-21'),
(65, 8, 3, 45, '2018-11-21'),
(66, 8, 3.5, 47, '2018-11-21'),
(67, 8, 4.5, 52, '2018-11-21'),
(68, 8, 5.8, 57, '2018-11-21'),
(69, 8, 6.5, 60, '2018-11-21'),
(70, 8, 7, 63, '2018-11-21'),
(71, 8, 7.1, 64, '2018-11-21'),
(72, 8, 7.3, 66, '2018-11-21'),
(73, 8, 7.7, 70, '2018-11-21'),
(74, 8, 8, 71, '2018-11-21'),
(75, 8, 8.5, 74, '2018-11-21'),
(76, 8, 8.5, 73, '2018-11-21'),
(77, 8, 8.5, 73, '2018-11-21'),
(78, 39, 3.8, 45, '2018-11-21'),
(79, 39, 4.5, 49, '2018-11-21'),
(80, 39, 5.8, 53, '2018-11-21'),
(81, 39, 6.7, 56, '2018-11-21'),
(82, 39, 7.5, 59, '2018-11-21'),
(83, 39, 7.8, 60, '2018-11-21'),
(84, 39, 8, 63, '2018-11-21'),
(85, 39, 7.8, 63, '2018-11-21'),
(86, 39, 8, 67, '2018-11-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Nailul Firdaus', 'admin', 'adcd7048512e64b48da55b027577886ee5a36350');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bayi`
--
ALTER TABLE `tb_bayi`
  ADD PRIMARY KEY (`id_bayi`);

--
-- Indeks untuk tabel `tb_imunisasi`
--
ALTER TABLE `tb_imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indeks untuk tabel `tb_penimbangan`
--
ALTER TABLE `tb_penimbangan`
  ADD PRIMARY KEY (`id_penimbangan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bayi`
--
ALTER TABLE `tb_bayi`
  MODIFY `id_bayi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tb_imunisasi`
--
ALTER TABLE `tb_imunisasi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_penimbangan`
--
ALTER TABLE `tb_penimbangan`
  MODIFY `id_penimbangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
