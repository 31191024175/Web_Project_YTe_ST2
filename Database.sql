-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 05:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ttyt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `id_account` int(11) NOT NULL,
  `ac_sdt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ac_matkhau` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`id_account`, `ac_sdt`, `ac_matkhau`) VALUES
(1, '0589344362', 'Cautroimuaduocve123'),
(2, '123456789', '123456789'),
(3, '1234567899', '1234567899'),
(4, 'Đặng Đông Vĩ', '123456789'),
(5, '0589344364', '123456789'),
(6, '0589344368', '123456789'),
(7, '01224988500', '123456789'),
(8, '0589344367', 'Cautroimuaduocve123'),
(9, '0933115406', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chuyengia`
--

CREATE TABLE `tb_chuyengia` (
  `id_chuyengia` int(11) NOT NULL,
  `chuyengia_hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `chuyengia_chucvu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `chuyengia_sdt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `chuyengia_hinh` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_chuyengia`
--

INSERT INTO `tb_chuyengia` (`id_chuyengia`, `chuyengia_hoten`, `chuyengia_chucvu`, `chuyengia_sdt`, `chuyengia_hinh`) VALUES
(1, 'Lê Minh Tú', 'Chuyên gia Virus', '0589344589', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dktc`
--

CREATE TABLE `tb_dktc` (
  `id_dktc` int(11) NOT NULL,
  `user_sdt` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_tiensu_phanve` enum('2','1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_tiensu_covid` enum('2','1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_tiensu_vacxin` enum('2','1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_tiensu_suygiam` enum('2','1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_tiensu_dungthuoc` enum('2','1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_tiensu_captinh` enum('2','1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_tiensu_mantinh` enum('2','1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_muitiem` enum('1','2','3','4','5') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_ngaytiem` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_buoitiem` enum('S','C','A') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_dongy` enum('1') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kbyt`
--

CREATE TABLE `tb_kbyt` (
  `id_kbyt` int(11) NOT NULL,
  `user_sdt` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_trieuchung_ho` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_trieuchung_sot` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_trieuchung_dauhong` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_trieuchung_matmui` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_trieuchung_met` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_trieuchung_khotho` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_dichte_benh` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_dichte_tiepxuc` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_dichte_quocgiapassing` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_dichte_dieutri` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_trieuchung_textarea` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tintuc`
--

CREATE TABLE `tb_tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tintuc_tieude` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tintuc_tacgia` int(30) NOT NULL,
  `tintuc_ngay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tintuc_noidung` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_hoten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_ngaysinh` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_gioitinh` enum('Nam','Nữ') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_sdt_` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_cccd` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_quoctich` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_dantoc` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_sonha` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_tinh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_quanhuyen` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_xaphuong` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_hoten`, `user_ngaysinh`, `user_gioitinh`, `user_sdt_`, `user_email`, `user_cccd`, `user_quoctich`, `user_dantoc`, `user_sonha`, `user_tinh`, `user_quanhuyen`, `user_xaphuong`) VALUES
(1, 'Lê Minh Tú', '2001-02-10', 'Nam', '0589344362', NULL, '026118907', NULL, NULL, '490 Phan Huy Ích', 'TPHCM', 'Gò Vấp', 'Phường 12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_xntc`
--

CREATE TABLE `tb_xntc` (
  `id_xntc` int(11) NOT NULL,
  `user_sdt` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_tengiam` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_quanhe` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_sdtgiam` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_muidatiem` enum('1','2','3') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_vaccin1` enum('Astra','Pfizer','Moderna','VeroCell','Sputnik','Abdala') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_solo1` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_date1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_vaccin2` enum('Astra','Pfizer','Moderna','VeroCell','Sputnik','Abdala') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_solo2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_date2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_vaccin3` enum('Astra','Pfizer','Moderna','VeroCell','Sputnik','Abdala') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_solo3` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_date3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_xacnhan` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_xntc`
--

INSERT INTO `tb_xntc` (`id_xntc`, `user_sdt`, `user_tengiam`, `user_quanhe`, `user_sdtgiam`, `user_muidatiem`, `user_vaccin1`, `user_solo1`, `user_date1`, `user_vaccin2`, `user_solo2`, `user_date2`, `user_vaccin3`, `user_solo3`, `user_date3`, `user_xacnhan`) VALUES
(0, '0589344362', '', '', '', '1', 'Astra', '', '2022-05-26', 'Astra', '', '2022-06-02', 'Astra', '', '2022-06-22', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `tb_chuyengia`
--
ALTER TABLE `tb_chuyengia`
  ADD PRIMARY KEY (`id_chuyengia`);

--
-- Indexes for table `tb_dktc`
--
ALTER TABLE `tb_dktc`
  ADD PRIMARY KEY (`id_dktc`);

--
-- Indexes for table `tb_kbyt`
--
ALTER TABLE `tb_kbyt`
  ADD PRIMARY KEY (`id_kbyt`);

--
-- Indexes for table `tb_tintuc`
--
ALTER TABLE `tb_tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_xntc`
--
ALTER TABLE `tb_xntc`
  ADD PRIMARY KEY (`id_xntc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_account`
--
ALTER TABLE `tb_account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_dktc`
--
ALTER TABLE `tb_dktc`
  MODIFY `id_dktc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kbyt`
--
ALTER TABLE `tb_kbyt`
  MODIFY `id_kbyt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
