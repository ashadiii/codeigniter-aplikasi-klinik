-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2018 at 09:46 AM
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
  MODIFY `id_arrival` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_arrival_detail`
--
ALTER TABLE `data_arrival_detail`
  MODIFY `id_arrival_detail` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_delivery`
--
ALTER TABLE `data_delivery`
  MODIFY `id_delivery` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_klinik`
--
ALTER TABLE `data_klinik`
  MODIFY `id_klinik` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_unit`
--
ALTER TABLE `data_unit`
  MODIFY `id_unit` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
