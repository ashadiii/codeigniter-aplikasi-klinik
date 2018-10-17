-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2018 at 02:20 PM
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
  `tgl_arrival` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `delivery_from` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_arrival`
--

INSERT INTO `data_arrival` (`id_arrival`, `id_klinik`, `tgl_arrival`, `item`, `delivery_from`, `qty`, `weight`) VALUES
(1, 1, '2018-10-17', 'Acne Foundation 1', 'EAP 3', '20', '15 g'),
(2, 1, '2018-10-17', 'Acne Foundation 1', 'EAP 3', '12', '15 g'),
(3, 1, '2018-10-18', 'soang', 'ES4', '30', '1 kg'),
(4, 4, '2018-10-17', 'jamur 666', 'ES666', '666', '666 kg'),
(6, 1, '2018-10-17', 'soang  jamur F', 'ES66r F', '5555', '34 GF');

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
(1, 'Apotek Erha21 - Duta Mall Banjarmasin'),
(3, 'est 3 mil'),
(4, 'ggg kk'),
(5, 'ggg'),
(6, 'sarang'),
(7, 'sugar ray');

-- --------------------------------------------------------

--
-- Table structure for table `data_lahan`
--

CREATE TABLE `data_lahan` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_lahan`
--

INSERT INTO `data_lahan` (`id`, `nama_pemilik`, `no_ktp`) VALUES
(000001, 'Probo Krismantoro', '3102014403910312'),
(000004, 'Probo Krismantoro', '3102014403910311'),
(000005, 'Muliawan', '3102014403910311'),
(000007, 'Probo Krismantoro', '3102014403910312'),
(000008, 'Pasaka', '3102014403910312'),
(000011, 'Probo Krismantoro', '3102014403910312'),
(000014, 'Ashadi Muliawan Sejati', '3102014403910312'),
(000015, 'Probo Krismantoro', '3102014403910312'),
(000018, 'Ashadi Muliawan', '3102014403910312'),
(000019, 'Probo Krismantoro', '3102014403910312');

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
(12, '2018-05-30 08:03:54', 'admin', 0, 'Melakukan Login'),
(13, '2018-05-30 09:17:52', 'admin', 2, 'Melakukan Input Data Lahan'),
(14, '2018-05-30 09:18:07', 'admin', 3, 'Melakukan Edit Data Lahan ID : 000015'),
(15, '2018-05-30 09:21:38', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000018'),
(16, '2018-05-30 09:21:42', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000011'),
(17, '2018-05-30 09:21:48', 'admin', 4, 'Melakukan Delete Data Lahan ID : 000017'),
(18, '2018-05-30 09:30:29', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000018'),
(19, '2018-05-30 09:30:44', 'admin', 2, 'Melakukan Input Data Lahan'),
(20, '2018-05-30 09:31:00', 'admin', 3, 'Melakukan Edit Data Lahan ID : 000019'),
(21, '2018-05-30 09:31:10', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(22, '2018-05-31 03:06:37', 'admin', 0, 'Melakukan Login'),
(23, '2018-05-31 06:50:21', 'admin', 0, 'Melakukan Login'),
(24, '2018-05-31 08:08:00', 'admin', 1, 'Melakukan Logout'),
(25, '2018-05-31 08:08:08', 'admin', 0, 'Melakukan Login'),
(26, '2018-05-31 09:52:15', 'admin', 1, 'Melakukan Logout'),
(27, '2018-05-31 09:52:22', 'admin', 0, 'Melakukan Login'),
(28, '2018-06-04 07:19:17', 'admin', 0, 'Melakukan Login'),
(29, '2018-06-05 02:26:04', 'admin', 0, 'Melakukan Login'),
(30, '2018-06-06 02:06:35', 'admin', 0, 'Melakukan Login'),
(31, '2018-06-06 09:00:19', 'admin', 0, 'Melakukan Login'),
(32, '2018-06-06 10:07:56', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(33, '2018-06-06 10:08:13', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(34, '2018-06-06 10:10:17', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(35, '2018-06-06 10:10:58', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(36, '2018-06-06 10:11:16', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(37, '2018-06-07 09:50:05', 'admin', 0, 'Melakukan Login'),
(38, '2018-06-07 09:55:35', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(39, '2018-06-07 09:55:46', 'admin', 0, 'Melakukan Login'),
(40, '2018-06-07 09:58:59', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(41, '2018-06-07 09:59:17', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(42, '2018-06-07 09:59:30', 'probo', 0, 'Melakukan Login'),
(43, '2018-06-07 09:59:58', 'probo', 6, 'Melakukan Edit Data User ID : 1'),
(44, '2018-06-07 10:00:09', 'admin', 0, 'Melakukan Login'),
(45, '2018-06-07 10:04:04', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(46, '2018-06-07 10:04:16', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(47, '2018-06-07 10:06:51', 'probo', 0, 'Melakukan Login'),
(48, '2018-06-07 10:06:58', 'probo', 6, 'Melakukan Edit Data User ID : 1'),
(49, '2018-06-07 10:07:29', 'admin', 0, 'Melakukan Login'),
(50, '2018-06-07 10:07:42', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(51, '2018-06-07 10:09:39', 'probo', 0, 'Melakukan Login'),
(52, '2018-06-07 10:09:52', 'probo', 6, 'Melakukan Edit Data User ID : 1'),
(53, '2018-06-07 10:10:01', 'admin', 0, 'Melakukan Login'),
(54, '2018-06-07 10:31:32', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(55, '2018-06-07 10:31:40', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(56, '2018-06-07 10:31:55', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(57, '2018-06-07 10:33:41', 'probo', 0, 'Melakukan Login'),
(58, '2018-06-07 10:33:48', 'probo', 6, 'Melakukan Edit Data User ID : 1'),
(59, '2018-06-07 10:34:53', 'admin', 0, 'Melakukan Login'),
(60, '2018-06-07 10:35:06', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(61, '2018-06-07 10:35:15', 'probo', 0, 'Melakukan Login'),
(62, '2018-06-07 10:35:24', 'probo', 6, 'Melakukan Edit Data User ID : 1'),
(63, '2018-06-07 10:35:37', 'admin', 0, 'Melakukan Login'),
(64, '2018-06-07 10:36:38', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(65, '2018-06-07 10:43:02', 'probo', 0, 'Melakukan Login'),
(66, '2018-06-07 11:28:19', 'probo', 6, 'Melakukan Edit Data User ID : 1'),
(67, '2018-06-07 11:28:25', 'probo', 6, 'Melakukan Edit Data User ID : 1'),
(68, '2018-06-08 05:58:39', 'admin', 0, 'Melakukan Login'),
(69, '2018-06-08 06:19:01', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(70, '2018-06-08 06:19:15', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(71, '2018-06-08 06:20:19', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(72, '2018-06-08 06:20:27', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(73, '2018-06-08 06:54:17', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(74, '2018-06-08 06:54:36', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(75, '2018-06-08 06:56:07', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(76, '2018-06-08 06:57:25', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(77, '2018-06-08 09:36:45', 'admin', 0, 'Melakukan Login'),
(78, '2018-06-08 09:41:00', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(79, '2018-06-08 09:43:02', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(80, '2018-06-08 09:43:12', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(81, '2018-06-12 04:07:24', 'admin', 0, 'Melakukan Login'),
(82, '2018-06-12 04:26:29', 'admin', 6, 'Melakukan Edit Data User ID : 1'),
(83, '2018-08-04 08:30:39', 'admin', 0, 'Melakukan Login'),
(84, '2018-08-04 10:41:19', 'admin', 0, 'Melakukan Login'),
(85, '2018-08-04 16:56:21', 'admin', 0, 'Melakukan Login'),
(86, '2018-08-04 16:56:27', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(87, '2018-08-04 16:57:14', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(88, '2018-08-04 17:06:35', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(89, '2018-08-04 17:09:45', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(90, '2018-08-04 17:11:36', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(91, '2018-08-04 17:33:10', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(92, '2018-08-04 17:35:59', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(93, '2018-08-06 14:18:43', 'admin', 0, 'Melakukan Login'),
(94, '2018-08-06 14:33:05', 'admin', 5, 'Melakukan View Detail Data Lahan ID : '),
(95, '2018-08-06 14:36:37', 'admin', 5, 'Melakukan View Detail Data Lahan ID : '),
(96, '2018-08-08 07:38:43', 'admin', 0, 'Melakukan Login'),
(97, '2018-08-08 13:16:23', 'admin', 0, 'Melakukan Login'),
(98, '2018-08-09 09:58:39', 'admin', 0, 'Melakukan Login'),
(99, '2018-08-09 10:13:56', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(100, '2018-08-09 10:31:45', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(101, '2018-08-09 10:32:29', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(102, '2018-08-09 10:34:26', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(103, '2018-08-09 10:42:19', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(104, '2018-08-09 10:48:16', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(105, '2018-08-09 10:48:48', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(106, '2018-08-09 10:51:53', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(107, '2018-08-09 10:53:16', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(108, '2018-08-09 10:53:25', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(109, '2018-08-09 10:54:01', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(110, '2018-08-09 10:56:02', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(111, '2018-08-09 10:56:24', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(112, '2018-08-09 10:56:42', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(113, '2018-08-09 10:58:07', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(114, '2018-08-09 11:00:18', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(115, '2018-08-10 02:12:14', 'admin', 0, 'Melakukan Login'),
(116, '2018-08-13 04:20:52', 'admin', 0, 'Melakukan Login'),
(117, '2018-08-13 07:28:58', 'admin', 5, 'Melakukan View Detail Data Lahan ID : 000019'),
(118, '2018-10-15 09:21:59', 'admin', 0, 'Melakukan Login'),
(119, '2018-10-15 10:05:09', 'admin', 2, 'Melakukan Input Data Lahan'),
(120, '2018-10-15 10:05:30', 'admin', 2, 'Melakukan Input Data Lahan'),
(121, '2018-10-15 10:05:34', 'admin', 2, 'Melakukan Input Data Lahan'),
(122, '2018-10-15 10:31:40', 'admin', 3, 'Melakukan Edit Data Lahan ID : 3'),
(123, '2018-10-15 10:36:58', 'admin', 3, 'Melakukan Edit Data Lahan ID : 4'),
(124, '2018-10-15 10:37:13', 'admin', 2, 'Melakukan Input Data Lahan'),
(125, '2018-10-16 04:56:55', 'admin', 0, 'Melakukan Login'),
(126, '2018-10-16 07:22:54', 'admin', 0, 'Melakukan Login'),
(127, '2018-10-16 07:28:21', 'admin', 2, 'Melakukan Input Data Lahan'),
(128, '2018-10-16 07:31:48', 'admin', 3, 'Melakukan Edit Data Lahan ID : 1'),
(129, '2018-10-16 07:35:17', 'admin', 4, 'Melakukan Delete Data Lahan ID : 2'),
(130, '2018-10-16 07:37:09', 'admin', 4, 'Melakukan Delete Data Lahan ID : 2'),
(131, '2018-10-16 08:47:10', 'admin', 3, 'Melakukan Edit Data Lahan ID : 1'),
(132, '2018-10-16 09:56:34', 'admin', 2, 'Melakukan Input Data Lahan'),
(133, '2018-10-16 09:58:25', 'admin', 2, 'Melakukan Input Data Lahan'),
(134, '2018-10-16 10:05:48', 'admin', 2, 'Melakukan Input Data Lahan'),
(135, '2018-10-16 10:43:24', 'admin', 3, 'Melakukan Edit Data Lahan ID : 4'),
(136, '2018-10-16 10:45:17', 'admin', 4, 'Melakukan Delete Data Lahan ID : 5'),
(137, '2018-10-16 10:45:42', 'admin', 2, 'Melakukan Input Data Lahan'),
(138, '2018-10-16 10:46:03', 'admin', 3, 'Melakukan Edit Data Lahan ID : 6'),
(139, '2018-10-16 10:47:04', 'admin', 1, 'Melakukan Logout'),
(140, '2018-10-16 10:47:11', 'admin', 0, 'Melakukan Login'),
(141, '2018-10-17 02:15:52', 'admin', 0, 'Melakukan Login'),
(142, '2018-10-17 03:47:58', 'admin', 1, 'Melakukan Logout'),
(143, '2018-10-17 03:55:14', 'admin', 0, 'Melakukan Login'),
(144, '2018-10-17 03:57:51', 'admin', 1, 'Melakukan Logout');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Andri', 'admin', 'puyol_puy.jpg', 'Jakarta', '01/09/1990');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_arrival`
--
ALTER TABLE `data_arrival`
  ADD PRIMARY KEY (`id_arrival`);

--
-- Indexes for table `data_klinik`
--
ALTER TABLE `data_klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indexes for table `data_lahan`
--
ALTER TABLE `data_lahan`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_arrival` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data_klinik`
--
ALTER TABLE `data_klinik`
  MODIFY `id_klinik` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_lahan`
--
ALTER TABLE `data_lahan`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
