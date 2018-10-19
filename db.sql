-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2018 at 11:35 AM
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
  `unit` varchar(255) NOT NULL,
  `id_delivery` int(6) NOT NULL,
  `tgl_arrival` varchar(255) NOT NULL,
  `item` text NOT NULL,
  `qty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_arrival`
--

INSERT INTO `data_arrival` (`id_arrival`, `id_klinik`, `unit`, `id_delivery`, `tgl_arrival`, `item`, `qty`) VALUES
(12, 110, '0', 0, '08 October, 2018', 'Acne Foundation 1 - 15 g', ' 20 '),
(13, 110, '0', 0, '08 October, 2018', 'Acne Foundation 2 - 15 g', '12'),
(14, 110, '0', 0, '08 October, 2018', 'Acne Foundation 4 - 15 g', '30'),
(15, 110, '0', 0, '07 October, 2018', 'Acne Moisturizer Gel 2 - 15 g', '75'),
(16, 110, '0', 0, '07 October, 2018', 'Acne Moisturizer Gel 6 - 15 g', '36'),
(17, 110, '0', 0, '07 October, 2018', 'Acne Night Cream 3 - 15 g', '10'),
(18, 110, '0', 0, '10 October, 2018', 'Corrective Cream 25 - 10 g', '36'),
(19, 110, '0', 0, '10 October, 2018', 'Erha 5 Evening Moisturizer for Sensitive Skin 10 g', '24'),
(20, 110, '0', 0, '10 October, 2018', 'Erha 6 Evening Moisturizer 10 g', '45'),
(21, 110, '0', 0, '10 October, 2018', 'Erha 7 Foundation 10 g', '45'),
(22, 18, '0', 0, '10 October, 2018', 'Anti Inflammation Gel 1 - 10 g', '2'),
(23, 110, '0', 0, '10 October, 2018', 'Acne Sunscreen Gel 15 g', '120'),
(24, 110, '0', 0, '10 October, 2018', 'Fusipar Ointment Salicyl 10 g', '1'),
(25, 110, '0', 0, '09 October, 2018', 'Corrective Cream 25 - 10 g', '30'),
(26, 110, '0', 0, '09 October, 2018', 'Moisturizer Clear Bleaching Gel 30 ml', '8'),
(27, 110, '0', 0, '09 October, 2018', 'Evening Corrective Cream 2 - 10 g', '11'),
(28, 110, '0', 0, '10 October, 2018', 'Acne Gel 2 - 15 g', '48'),
(29, 110, '0', 0, '10 October, 2018', 'Acne Spot Treatment 10 g', '75'),
(30, 110, '0', 0, '10 October, 2018', 'Acne Face Treatment 15 g', '45'),
(31, 110, '0', 0, '10 October, 2018', ' Acne Face Treatment for Sensitive Skin 15 g', '40'),
(32, 110, '0', 0, '11 October, 2018', 'Finasteride 1 mg Capsule', '90'),
(33, 110, '0', 0, '11 October, 2018', 'Doxy Plus Capsule', '300'),
(34, 110, '0', 0, '11 October, 2018', 'Follicore Plus Capsule', '300'),
(35, 110, '0', 0, '11 October, 2018', 'Acne Moisturizer Gel 3 - 15 g', '48'),
(36, 110, '0', 0, '11 October, 2018', 'Acne Moisturizer Gel 8 - 15 g', '12'),
(37, 110, '0', 0, '11 October, 2018', 'Erha 4 Morning Moisturizer 10 g', '45'),
(38, 109, '0', 0, '08 October, 2018', 'Acne Foundation 1 - 15 g', '20'),
(39, 109, '0', 0, '08 October, 2018', 'Acne Foundation 2 - 15 g', '12'),
(40, 109, '0', 0, '08 October, 2018', 'Acne Foundation 4 - 15 g', '30'),
(55, 110, 'kg,g,kg,', 2, '31 October, 2018', 'Acne Foundation 1,Acne Foundation 2,Acne Foundation 3,', '23,123,22,');

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
  MODIFY `id_arrival` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `data_delivery`
--
ALTER TABLE `data_delivery`
  MODIFY `id_delivery` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_klinik`
--
ALTER TABLE `data_klinik`
  MODIFY `id_klinik` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `data_unit`
--
ALTER TABLE `data_unit`
  MODIFY `id_unit` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
