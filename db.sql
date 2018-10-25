-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2018 at 05:30 PM
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
(3, 'eas2'),
(4, 'eas3');

-- --------------------------------------------------------

--
-- Table structure for table `data_klinik`
--

CREATE TABLE `data_klinik` (
  `id_klinik` int(6) NOT NULL,
  `nama_klinik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Kg'),
(3, 'Liter'),
(4, 'Mg'),
(5, 'G');

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
(398, '2018-10-19 10:30:09', 'admin', 2, 'Melakukan Input Data Lahan'),
(399, '2018-10-22 02:14:39', 'admin', 0, 'Melakukan Login'),
(400, '2018-10-22 03:00:49', 'admin', 2, 'Melakukan Input Data Lahan'),
(401, '2018-10-22 10:12:00', 'admin', 0, 'Melakukan Login'),
(402, '2018-10-23 06:09:55', 'admin', 0, 'Melakukan Login'),
(403, '2018-10-23 06:10:15', 'admin', 2, 'Melakukan Input Data Lahan'),
(404, '2018-10-23 07:22:33', 'admin', 2, 'Melakukan Input Data Lahan'),
(405, '2018-10-23 07:22:48', 'admin', 2, 'Melakukan Input Data Lahan'),
(406, '2018-10-24 03:57:02', 'admin', 0, 'Melakukan Login'),
(407, '2018-10-24 07:13:14', 'admin', 0, 'Melakukan Login'),
(408, '2018-10-24 08:26:23', 'admin', 2, 'Melakukan Input Data Lahan'),
(409, '2018-10-24 09:32:28', 'admin', 2, 'Melakukan Input Data Lahan'),
(410, '2018-10-25 02:14:09', 'admin', 0, 'Melakukan Login'),
(411, '2018-10-25 02:26:57', 'admin', 2, 'Melakukan Input Data Lahan'),
(412, '2018-10-25 02:28:37', 'admin', 2, 'Melakukan Input Data Lahan'),
(413, '2018-10-25 03:00:34', 'admin', 3, 'Melakukan Edit Data Lahan ID : 2'),
(414, '2018-10-25 03:00:57', 'admin', 3, 'Melakukan Edit Data Lahan ID : 2'),
(415, '2018-10-25 04:32:53', 'admin', 2, 'Melakukan Input Data Lahan'),
(416, '2018-10-25 04:33:27', 'admin', 3, 'Melakukan Edit Data Lahan ID : 4'),
(417, '2018-10-25 04:33:33', 'admin', 3, 'Melakukan Edit Data Lahan ID : 4'),
(418, '2018-10-25 04:35:44', 'admin', 2, 'Melakukan Input Data Lahan'),
(419, '2018-10-25 04:36:19', 'admin', 3, 'Melakukan Edit Data Lahan ID : 5'),
(420, '2018-10-25 04:36:31', 'admin', 2, 'Melakukan Input Data Lahan'),
(421, '2018-10-25 04:37:29', 'admin', 3, 'Melakukan Edit Data Lahan ID : 4'),
(422, '2018-10-25 04:38:22', 'admin', 2, 'Melakukan Input Data Lahan'),
(423, '2018-10-25 04:39:51', 'admin', 3, 'Melakukan Edit Data Lahan ID : 111'),
(424, '2018-10-25 04:39:59', 'admin', 4, 'Melakukan Delete Data Lahan ID : 111');

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
  MODIFY `id_arrival` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `data_arrival_detail`
--
ALTER TABLE `data_arrival_detail`
  MODIFY `id_arrival_detail` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `data_delivery`
--
ALTER TABLE `data_delivery`
  MODIFY `id_delivery` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_klinik`
--
ALTER TABLE `data_klinik`
  MODIFY `id_klinik` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `data_unit`
--
ALTER TABLE `data_unit`
  MODIFY `id_unit` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
