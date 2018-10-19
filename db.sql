-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2018 at 06:21 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.1.22-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erha`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_arrival`
--

CREATE TABLE `data_arrival` (
  `id_arrival` int(6) NOT NULL,
  `id_klinik` int(6) NOT NULL,
  `id_delivery` int(6) NOT NULL,
  `tgl_arrival` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_arrival`
--

INSERT INTO `data_arrival` (`id_arrival`, `id_klinik`, `id_delivery`, `tgl_arrival`) VALUES
(74, 18, 2, '30 October, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `data_arrival_detail`
--

CREATE TABLE `data_arrival_detail` (
  `id_arrival_detail` int(6) NOT NULL,
  `id_arrival` int(6) NOT NULL,
  `item` text NOT NULL,
  `id_unit` int(6) NOT NULL,
  `qty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_arrival_detail`
--

INSERT INTO `data_arrival_detail` (`id_arrival_detail`, `id_arrival`, `item`, `id_unit`, `qty`) VALUES
(15, 74, 'rtert', 1, '123'),
(16, 74, '234', 3, '234'),
(17, 74, 'Acne Foundation 3', 1, '222');

-- --------------------------------------------------------

--
-- Table structure for table `data_delivery`
--

CREATE TABLE `data_delivery` (
  `id_delivery` int(6) NOT NULL,
  `nama_delivery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_delivery`
--

INSERT INTO `data_delivery` (`id_delivery`, `nama_delivery`) VALUES
(2, 'eas1'),
(3, 'eas2');

-- --------------------------------------------------------

--
-- Table structure for table `data_klinik`
--

CREATE TABLE `data_klinik` (
  `id_klinik` int(6) NOT NULL,
  `nama_klinik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_klinik`
--

INSERT INTO `data_klinik` (`id_klinik`, `nama_klinik`) VALUES
(18, 'Nipah Mall - Makassar'),
(19, 'Cilegon'),
(20, 'Sukabumi'),
(21, 'Living World Pekanbaru'),
(22, 'Tunjungan Plaza 6'),
(23, 'Medan - Johor'),
(24, '23 Paskal Shopping Center'),
(25, 'Palembang Icon Mall'),
(26, 'PT Erha Clinic Indonesia - Palangkaraya'),
(27, 'PT ES Serang'),
(28, 'PT Erha Apothecary - Trans Studio Mall Makasar'),
(29, 'PT Erha Skin - Karawang'),
(30, 'PT Erha Apothecary - AEON Mall Jakarta Garden City'),
(31, 'PT Tri Pelangi Anugerah - Lampung'),
(32, 'PT Erha Skin - Rungkut Surabaya'),
(33, 'PT Erha Skin - Menganti Surabaya'),
(34, 'PT Erha Skin - Gresik'),
(35, 'PT Erha Skin - Banyumanik'),
(36, 'PT Erha Clinik - PIK'),
(37, 'PT Erha Clinic Pusaka - Medan'),
(38, 'PT Erha Clinic Norja - KG'),
(39, 'PT Erha Apothecary - Supermall Pakuwon - Surabaya'),
(40, 'PT Erha Apothecary - Supermall Karawaci'),
(41, 'PT Erha Apothecary - SMS'),
(42, 'PT Erha Apothecary - Senayan City'),
(43, 'PT Erha Apothecary - Pasific Place'),
(44, 'PT Erha Apothecary - Pondok Indah Mall 2'),
(45, 'PT Erha Apothecary - Pentacity Balikpapan'),
(46, 'PT Erha Apothecary - MM Bekasi'),
(47, 'PT Erha Apothecary - Mall Solo Paragon'),
(48, 'PT Erha Apothecary - Mall KG'),
(49, 'PT Erha Apothecary - Makasar'),
(50, 'PT Erha Apothecary - Lombok Epicentrum Mall'),
(51, 'PT Erha Apothecary - Lippo Mall Puri'),
(52, 'PT Erha Apothecary - Kota Casablanca'),
(53, 'PT Erha Apothecary - Hartono Mall Yogya'),
(54, 'PT Erha Apothecary - Grand Indonesia'),
(55, 'PT Erha Apothecary - Gandaria'),
(56, 'PT Erha Apothecary - Galaxy Mall Surabaya'),
(57, 'PT Erha Apothecary - Emporium Pluit'),
(58, 'PT Erha Apothecary - CW SBY'),
(59, 'PT Erha Apothecary - Central Park'),
(60, 'PT Erha Apothecary - Big Mall Samarinda'),
(61, 'PT Erha Apothecary - Bay Walk Mall'),
(62, 'PT EPI - Tebet'),
(63, 'PT EPI - Setrasari, Bandung'),
(64, 'PT EPI - Pekanbaru'),
(65, 'PT EPI - Kopo, Bandung'),
(66, 'PT EPI - Cipinang'),
(67, 'PT ECI - Yogyakarta'),
(68, 'PT ECI - Tegal'),
(69, 'PT ECI - Tasikmalaya'),
(70, 'PT ECI - Sidoarjo'),
(71, 'PT ECI - Serpong'),
(72, 'PT ECI - Samarinda'),
(73, 'PT ECI - Pontianak'),
(74, 'PT ECI - Pondok Indah'),
(75, 'PT ECI - Pekalongan'),
(76, 'PT ECI - Pejaten Plaza Buncit'),
(77, 'PT ECI - Palembang'),
(78, 'PT ECI - Padang'),
(79, 'PT ECI - Mangga Besar'),
(80, 'PT ECI - Malang'),
(81, 'PT ECI - Madiun'),
(82, 'PT ECI - Lippo Cikarang'),
(83, 'PT ECI - KR50'),
(84, 'PT ECI - Kombes Surabaya'),
(85, 'PT ECI - Jemursari'),
(86, 'PT ECI - Jember'),
(87, 'PT ECI - Jatiwaringin'),
(88, 'PT ECI - Jambi'),
(89, 'PT ECI - Grand Galaxy Mall Bekasi (EA)'),
(90, 'PT ECI - Depok'),
(91, 'PT ECI - Citra Gran'),
(92, 'PT ECI - Ciputat'),
(93, 'PT ECI - Cengkareng'),
(94, 'PT ECI - Bintaro Plaza'),
(95, 'PT ECI - Bintaro'),
(96, 'PT ECI - Batam'),
(97, 'PT ECI - Bandung Timur'),
(98, 'PT Adha Ardika - Makassar'),
(99, 'Instalasi Farmasi Erha Skin Purwokerto'),
(100, 'Instalasi Farmasi Erha Skin Cirebon'),
(101, 'Instalasi Farmasi Erha Clinic Semarang'),
(102, 'Instalasi Farmasi Erha Clinic Manado'),
(103, 'Instalasi Farmasi Erha Clinic Kemang'),
(104, 'Instalasi Farmasi Erha Clinic Denpasar'),
(106, 'Instalasi Farmasi Erha Clinic Bogor'),
(107, 'Instalasi Farmasi Erha Clinic Bandung (Cimanuk)'),
(108, 'Instalasi Farmasi Erha Apothecary Summarecon Mall Bekasi'),
(109, 'Instalasi Farmasi Erha Apothecary Istana Plaza'),
(110, 'Apotek Erha21 - Duta Mall Banjarmasin');

-- --------------------------------------------------------

--
-- Table structure for table `data_unit`
--

CREATE TABLE `data_unit` (
  `id_unit` int(6) NOT NULL,
  `nama_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_unit`
--

INSERT INTO `data_unit` (`id_unit`, `nama_unit`) VALUES
(1, 'kg'),
(3, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_log`
--

CREATE TABLE `tabel_log` (
  `log_id` int(11) NOT NULL,
  `log_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_user` varchar(255) DEFAULT NULL,
  `log_tipe` int(11) DEFAULT NULL,
  `log_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_log`
--

INSERT INTO `tabel_log` (`log_id`, `log_time`, `log_user`, `log_tipe`, `log_desc`) VALUES
(385, '2018-10-19 08:23:11', 'admin', 0, 'Melakukan Login'),
(386, '2018-10-19 08:29:28', 'admin', 3, 'Melakukan Edit Data Lahan ID : 55'),
(387, '2018-10-19 08:29:35', 'admin', 3, 'Melakukan Edit Data Lahan ID : 55'),
(388, '2018-10-19 08:29:43', 'admin', 3, 'Melakukan Edit Data Lahan ID : 55'),
(389, '2018-10-19 09:06:29', 'admin', 2, 'Melakukan Input Data Lahan'),
(390, '2018-10-19 09:15:58', 'admin', 4, 'Melakukan Delete Data Lahan ID : 111'),
(391, '2018-10-19 09:44:57', 'admin', 2, 'Melakukan Input Data Lahan'),
(392, '2018-10-19 10:04:00', 'admin', 2, 'Melakukan Input Data Lahan'),
(393, '2018-10-19 10:15:14', 'admin', 2, 'Melakukan Input Data Lahan'),
(394, '2018-10-19 10:16:01', 'admin', 2, 'Melakukan Input Data Lahan'),
(395, '2018-10-19 10:20:52', 'admin', 2, 'Melakukan Input Data Lahan'),
(396, '2018-10-19 10:21:30', 'admin', 2, 'Melakukan Input Data Lahan'),
(397, '2018-10-19 10:26:56', 'admin', 2, 'Melakukan Input Data Lahan'),
(398, '2018-10-19 10:30:09', 'admin', 2, 'Melakukan Input Data Lahan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `role`, `image`, `alamat`, `tgl_lahir`) VALUES
(1, 'admin', '0f592c496b362a92fdd064f6e18778e7', 'Andri', 'admin', 'puyol_puy.jpg', 'Jakarta', '01/09/1990');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_arrival`
--
ALTER TABLE `data_arrival`
  ADD PRIMARY KEY (`id_arrival`);

--
-- Indexes for table `data_arrival_detail`
--
ALTER TABLE `data_arrival_detail`
  ADD PRIMARY KEY (`id_arrival_detail`);

--
-- Indexes for table `data_delivery`
--
ALTER TABLE `data_delivery`
  ADD PRIMARY KEY (`id_delivery`);

--
-- Indexes for table `data_klinik`
--
ALTER TABLE `data_klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indexes for table `data_unit`
--
ALTER TABLE `data_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tabel_log`
--
ALTER TABLE `tabel_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_arrival`
--
ALTER TABLE `data_arrival`
  MODIFY `id_arrival` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `data_arrival_detail`
--
ALTER TABLE `data_arrival_detail`
  MODIFY `id_arrival_detail` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `data_delivery`
--
ALTER TABLE `data_delivery`
  MODIFY `id_delivery` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_klinik`
--
ALTER TABLE `data_klinik`
  MODIFY `id_klinik` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `data_unit`
--
ALTER TABLE `data_unit`
  MODIFY `id_unit` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=399;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
