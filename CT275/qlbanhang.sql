-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 07:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdienthoai`
--

CREATE TABLE `chitietdienthoai` (
  `MSCTDT` char(5) NOT NULL,
  `ManHinh` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `Camerasau` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `CameraSelfile` char(20) CHARACTER SET utf8 DEFAULT NULL,
  `RAM` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `BoNhoTrong` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `CHIPCPU` char(30) CHARACTER SET utf8 DEFAULT NULL,
  `GPU` char(30) CHARACTER SET utf8 DEFAULT NULL,
  `PIN` char(20) CHARACTER SET utf8 DEFAULT NULL,
  `SMS` char(30) CHARACTER SET utf8 DEFAULT NULL,
  `HeDieuHanh` char(30) CHARACTER SET utf8 DEFAULT NULL,
  `XuatXu` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `NamSX` char(5) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitietdienthoai`
--

INSERT INTO `chitietdienthoai` (`MSCTDT`, `ManHinh`, `Camerasau`, `CameraSelfile`, `RAM`, `BoNhoTrong`, `CHIPCPU`, `GPU`, `PIN`, `SMS`, `HeDieuHanh`, `XuatXu`, `NamSX`) VALUES
('CTI1', '6.5\", Super Retina XDR, Super AMOLED, 1242 x 2688 Pixel', '12.0 MP + 12.0 MP + 12.0 MP', '12.0 MP', '4 GB', '64 GB', 'A13 Bionic', 'Apple GPU 4X', '3969 mAh', '1, 1 eSIM, 1 Nano SIM', 'iOS 13', 'China', '2019'),
('CTI2', '6.7\", FHD+, Super AMOLED Plus, 1080 x 2400 Pixel', '64.0 MP + 12.0 MP + 12.0 MP', '10.0 MP', '8 GB', '256 GB', 'Exynos 990', 'Mali-G77 MP11', '4300 mAh', '1, 1 eSIM, 1 Nano SIM', 'Android 10.0', 'VietNam', '2020'),
('CTI3', '6.5\", Super Retina XDR, Super AMOLED, 1242 x 2688 Pixel', '12.0 MP + 12.0 MP + 12.0 MP', '12.0 MP', '4 GB', '512 GB', 'A13 Bionic', 'Apple GPU 4X', '3969 mAh', '1, 1 eSIM, 1 Nano SIM', 'iOS 13', 'China', '2020'),
('CTI4', '5.5\", Retina HD, IPS LCD, 1080 x 1920 Pixel', '12.0 MP + 12.0 MP', '7.0 MP', '3 GB', '128 GB', 'A11 Bionic', 'PowerVR', '2691 mAh', '1, Nano SIM', 'iOS 14', 'China', '2019'),
('CTO1', '\r\n6.4\", FHD+, AMOLED, 1080 x 2400 Pixel', '48.0 MP + 8.0 MP + 2.0 MP + 2.0 MP', '32.0 MP', '8 GB', '128 GB', 'Snapdragon 720G', 'Adreno 618', ' 4015 mAh', '2, Nano SIM', 'Android 10.0', 'China', '2020'),
('CTO2', '6.5\", HD+, LCD, 720 x 1600 Pixel', '13.0 MP + 2.0 MP + 2.0 MP', '16.0 MP', '4 GB', '128 GB', 'Snapdragon 460', 'Adreno 610', '5000 mAh', '2, Nano SIM', 'Android 10.0', 'China', '2020'),
('CTO3', '6.43\", FHD+, AMOLED, 1080 x 2400 Pixel', '48.0 MP + 8.0 MP + 2.0 MP + 2.0 MP', '16.0 MP, 2.0 MP', '8 GB', '128 GB', 'Helio P95', 'IMG 9XM-HP8', '4000 mAh', '2, Nano SIM', 'Android 10.0', 'China', '2020'),
('CTO4', '6.5\", HD+, TFT LCD, 720 x 1600 Pixel', '48.0 MP + 8.0 MP + 2.0 MP + 2.0 MP', '16 MP', '8 GB', '128 GB', 'Snapdragon 665', 'Adreno 610', '5000 mAh', '2, Nano SIM', 'Android 9.0', 'China', '2020'),
('CTS1', '6.9\", QHD+, Dynamic AMOLED 2X, 1440 x 3200 Pixel', '108.0 MP + 48.0 MP + 12.0 MP + 3D ToF', '40.0 MP', '12 GB', '128 GB', 'Exynos 990', 'Mali-G77', '5000 mAh', '2, Nano SIM', 'Android 10.0', 'VietNam', '2020'),
('CTS2', '6.7\", FHD+, Super AMOLED, 1080 x 2400 Pixel', '64.0 MP + 12.0 MP + 5.0 MP + 5.0 MP', '32.0 MP', '8 GB', '128 GB', 'Snapdragon 730', 'Adreno 618', '4500 mAh', ' 2, Nano SIM', 'Android 10.0', 'VietNam', '2019'),
('CTS3', '6.7\", FHD+, Super AMOLED, 1080 x 2400 Pixel', '12.0 MP + 12.0 MP + 12.0 MP', '32.0 MP', '8 GB', '128 GB', 'Exynos 9810', 'Mali-G72', '4500 mAh', '2, Nano SIM', 'Android 10.0', 'VietNam', '2020'),
('CTS4', '6.7\", FHD+, Super AMOLED Plus, 1080 x 2400 Pixel', '64.0 MP + 12.0 MP + 12.0 MP', '10.0 MP', '8 GB', '256 GB', 'Exynos 990', 'Mali-G77 MP11', '4300 mAh', '1, 1 eSIM, 1 Nano SIM', 'Android 10.0', 'VietNam', '2020'),
('CTS5', '5.8\", FHD+, Dynamic AMOLED, 1080 x 2280 Pixel', '12.0 MP + 16.0 MP', '10.0 MP', '6 GB', '128 GB', 'Exynos 9820', 'Mali-G77', '3100 mAh', '2, Nano SIM', 'Android 9.0', 'VietNam', '2019'),
('CTS6', '5.8\", QHD+, Super AMOLED, 1440 x 2960 Pixel', '12.0 MP', '8.0 MP', '4 GB', '64 GB', 'Exynos 9810', 'Mali-G72', '3000 mAh', '2, Nano SIM', 'Android 8.0', 'VietNam', '2019'),
('CTS7', '6.4\", QHD+, Super AMOLED, 1440 x 2960 Pixel', '12.0 MP + 12.0 MP', '8.0 MP', '6 GB', '128 GB', 'Exynos 9810', 'Mali-G72', '4000 mAh', '2, Nano SIM', 'Android 8.1', 'VietNam', '2019'),
('CTS8', '6.7\", FHD+, Super AMOLED, 1080 x 2400 Pixel', '48.0 MP + 8.0 MP + 3D ToF', '48.0 MP, 8.0 MP', '8 GB', '128 GB', 'Snapdragon 730', 'Adreno 618', '3700 mAh', '2, Nano SIM', 'Android 9.0', 'VietNam', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdondathang`
--

CREATE TABLE `chitietdondathang` (
  `MSCTDT` int(11) NOT NULL,
  `MSDDT` int(11) NOT NULL,
  `MSKH` int(11) NOT NULL,
  `MSDT` char(5) NOT NULL,
  `SoLuongDDH` int(11) DEFAULT NULL,
  `GiaDDH` char(12) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitietdondathang`
--

INSERT INTO `chitietdondathang` (`MSCTDT`, `MSDDT`, `MSKH`, `MSDT`, `SoLuongDDH`, `GiaDDH`) VALUES
(14, 103, 345866825, 'SS1', 3, '56970000'),
(15, 104, 345866825, 'SS2', 2, '17800000'),
(16, 105, 345866825, 'SS7', 1, '22990000'),
(21, 110, 345866825, 'SS1', 1, '18990000'),
(22, 111, 345866825, 'SS2', 1, '8900000'),
(23, 112, 345866825, 'SS1', 1, '18990000'),
(24, 113, 345866825, 'SS1', 1, '18990000'),
(17, 106, 345866828, 'SS8', 1, '14990000'),
(18, 107, 345866828, 'SS5', 1, '15990000'),
(19, 108, 345866828, 'OP1', 1, '8490000'),
(20, 109, 345866828, 'OP4', 1, '4990000');

-- --------------------------------------------------------

--
-- Table structure for table `datdienthoai`
--

CREATE TABLE `datdienthoai` (
  `MSKH` int(11) NOT NULL,
  `MSDDT` int(11) NOT NULL,
  `NgayDH` date DEFAULT NULL,
  `TrangThai` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `MSNV` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datdienthoai`
--

INSERT INTO `datdienthoai` (`MSKH`, `MSDDT`, `NgayDH`, `TrangThai`, `MSNV`) VALUES
(345866825, 103, '2020-12-26', 'XÃ¡c nháº­n', 9),
(345866825, 104, '2020-12-26', 'XÃ¡c nháº­n', 9),
(345866825, 105, '2020-12-26', 'XÃ¡c nháº­n', 9),
(345866828, 106, '2020-12-28', 'XÃ¡c nháº­n', 9),
(345866828, 107, '2020-12-28', 'XÃ¡c nháº­n', 9),
(345866828, 108, '2020-12-28', 'XÃ¡c nháº­n', 9),
(345866828, 109, '2020-12-28', 'XÃ¡c nháº­n', 9),
(345866825, 110, '2021-01-05', 'XÃ¡c nháº­n', 9),
(345866825, 111, '2021-03-29', 'XÃ¡c nháº­n', 9),
(345866825, 112, '2021-03-29', '0', 0),
(345866825, 113, '2021-04-22', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dienthoai`
--

CREATE TABLE `dienthoai` (
  `MSDT` char(5) NOT NULL,
  `MSCTDT` char(5) DEFAULT NULL,
  `MNDT` char(5) DEFAULT NULL,
  `TenDT` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `GiaDT` int(20) DEFAULT NULL,
  `SoLuongDT` int(11) DEFAULT NULL,
  `HinhAnh` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `HinhCT1` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `HinhCT2` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dienthoai`
--

INSERT INTO `dienthoai` (`MSDT`, `MSCTDT`, `MNDT`, `TenDT`, `GiaDT`, `SoLuongDT`, `HinhAnh`, `HinhCT1`, `HinhCT2`) VALUES
('IP1', 'CTI1', 'IP', 'IPhone 11 Pro Max 64GB', 28990000, 10, 'asset/img/phonekm/phonekm_1.jpg', 'asset/img/chitiet/phonekm_3.1.png', 'asset/img/chitiet/phonekm_3.2.png'),
('IP2', 'CTI2', 'IP', 'IPhone 11 64GB', 18990000, 10, 'asset/img/phone/phone_3.jpg', 'asset/img/chitiet/phone_3.1.png', 'asset/img/chitiet/phone_3.2.png'),
('IP3', 'CTI3', 'IP', 'IPhone 11 Pro Max 512GB', 36990000, 10, 'asset/img/phone/phone_4.jpg', 'asset/img/chitiet/phone_4.1.png', 'asset/img/chitiet/phone_4.2.png'),
('IP4', 'CTI4', 'IP', 'iPhone 8 Plus 128GB', 13990000, 10, 'asset/img/phone/iphone1.png', 'asset/img/phone/iphone2.png', 'asset/img/phone/iphone3.png'),
('IP6', 'CTI1', 'IP', 'IPhone 11 Pro Max 64GB them moi', 28990000, 10, 'asset/img/phone/iphone1.png', 'asset/img/phone/', 'asset/img/phone/'),
('OP1', 'CTO1', 'OP', 'OPPO Geno4', 8490000, 9, 'asset/img/phone/phone_1.jpg', 'asset/img/chitiet/phone_1.1.1.png', 'asset/img/chitiet/phone_1.1.2.png'),
('OP2', 'CTO2', 'OP', 'Oppo A53 4GB-128GB', 4490000, 10, 'asset/img/phone/oppo1.png', 'asset/img/phone/oppo2.png', 'asset/img/phone/oppo3.png'),
('OP3', 'CTO3', 'OP', 'OPPO A93 8GB-128GB', 7490000, 10, 'asset/img/phone/oppo4.png', 'asset/img/phone/oppo5.png', 'asset/img/phone/oppo6.png'),
('OP4', 'CTO4', 'OP', 'Oppo A9 2020', 4990000, 9, 'asset/img/phone/oppo7.png', 'asset/img/phone/oppo8.png', 'asset/img/phone/oppo9.png'),
('SS1', 'CTS1', 'SS', 'Samsung Galaxy S20 Ultra', 18990000, 0, 'asset/img/phonekm/phonekm_3.jpg', 'asset/img/chitiet/phone_1.1.png', 'asset/img/chitiet/phone_1.2.png'),
('SS2', 'CTS2', 'SS', 'Samsung Galaxy A71', 8900000, 7, 'asset/img/phonekm/phonekm_2.jpg', 'asset/img/chitiet/phonekm_2.1.png', 'asset/img/chitiet/phonekm_2.2.png'),
('SS3', 'CTS3', 'SS', 'Samsung Galaxy Note 10 Lite', 10190000, 10, 'asset/img/phonekm/phonekm_4.jpg', 'asset/img/chitiet/phonekm_4.1.png', 'asset/img/chitiet/phonekm_4.2.png'),
('SS4', 'CTS4', 'SS', 'Samsung Galaxy Note 20 Ultra', 29990000, 10, 'asset/img/phone/phone_2.jpg', 'asset/img/chitiet/phone_2.1.png', 'asset/img/chitiet/phone_2.2.png'),
('SS5', 'CTS5', 'SS', 'Samsung Galaxy S10e', 15990000, 9, 'asset/img/phone/samsung1.png', 'asset/img/phone/samsung2.png', 'asset/img/phone/samsung3.png'),
('SS6', 'CTS6', 'SS', 'Samsung Galaxy S9', 19990000, 10, 'asset/img/phone/samsung4.jpg', 'asset/img/phone/samsung5.png', ''),
('SS7', 'CTS7', 'SS', 'Samsung Galaxy Note 9 128GB', 22990000, 8, 'asset/img/phone/samsung7.png', 'asset/img/phone/samsung8.png', 'asset/img/phone/samsung9.png'),
('SS8', 'CTS8', 'SS', 'Samsung Galaxy A80', 14990000, 9, 'asset/img/phone/samsung10.png', 'asset/img/phone/samsung11.png', 'asset/img/phone/samsung12.png');

-- --------------------------------------------------------

--
-- Table structure for table `khachhangshop`
--

CREATE TABLE `khachhangshop` (
  `MSKH` int(11) NOT NULL,
  `HotenKH` char(50) CHARACTER SET utf8 NOT NULL,
  `DiaChi` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `sdtKH` varchar(12) CHARACTER SET utf8 NOT NULL,
  `GioiTinhKH` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `NgaySinhKH` date DEFAULT NULL,
  `emailKH` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `pwMatKhauKH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `CMNDKH` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khachhangshop`
--

INSERT INTO `khachhangshop` (`MSKH`, `HotenKH`, `DiaChi`, `sdtKH`, `GioiTinhKH`, `NgaySinhKH`, `emailKH`, `pwMatKhauKH`, `CMNDKH`) VALUES
(345866825, 'NgÃ´ PhÃº TÃ¢m', '111111111111', '0377056951', 'nam', '2020-11-30', 'tampro@gmail.com', '202cb962ac59075b964b07152d234b70', '3333333333'),
(345866828, 'NgÃ´ PhÃº TÃ¢m', 'cần thơ', '0377056952', 'nam', '2020-11-18', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', '1111111111'),
(345866829, 'NgÃ´ PhÃº TÃ¢m', '1111111111111', '0377056954', 'nam', '2020-12-08', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', '9999999999');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvienshop`
--

CREATE TABLE `nhanvienshop` (
  `MSNV` int(11) UNSIGNED NOT NULL,
  `TenNV` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `sdtNV` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GioiTinhNV` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `NgaySinhNV` date DEFAULT NULL,
  `emailNV` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `CMNDNV` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `ChucVu` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `DiaChiNV` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `pwMatKhauNV` char(50) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhanvienshop`
--

INSERT INTO `nhanvienshop` (`MSNV`, `TenNV`, `sdtNV`, `GioiTinhNV`, `NgaySinhNV`, `emailNV`, `CMNDNV`, `ChucVu`, `DiaChiNV`, `pwMatKhauNV`) VALUES
(9, 'NgÃ´ PhÃº TÃ¢m', '0377056951', 'nam', '1999-10-20', 'tampro@gmail.com', '352491954', 'QL', 'Cáº§n ThÆ¡', '202cb962ac59075b964b07152d234b70'),
(17, 'NgÃ´ PhÃº TÃ¢m', '0377056952', 'nam', '2020-12-10', 'tampro@gmail.com', '3333333333', 'QL', 'cáº§n thÆ¡', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `nhomdienthoai`
--

CREATE TABLE `nhomdienthoai` (
  `MNDT` char(5) NOT NULL,
  `TenNDT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhomdienthoai`
--

INSERT INTO `nhomdienthoai` (`MNDT`, `TenNDT`) VALUES
('IP', 'IPHONE'),
('OP', 'OPPO'),
('SS', 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `MSPH` int(10) UNSIGNED NOT NULL,
  `MSKH` int(11) NOT NULL,
  `noidung` varchar(1000) DEFAULT NULL,
  `sdtKHLH` varchar(12) DEFAULT NULL,
  `emailLH` varchar(200) DEFAULT NULL,
  `hotenKHLH` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`MSPH`, `MSKH`, `noidung`, `sdtKHLH`, `emailLH`, `hotenKHLH`) VALUES
(3, 345866825, '123', '0975428280', 'tampro@gmail.com', 'ngÃ´ tÃ¢m'),
(7, 345866825, '&lt;script&gt;alert(&quot;hello^^&quot;)&lt;/script&gt;', '0975428280', 'tampro@gmail.com', 't&acirc;m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdienthoai`
--
ALTER TABLE `chitietdienthoai`
  ADD PRIMARY KEY (`MSCTDT`);

--
-- Indexes for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD PRIMARY KEY (`MSKH`,`MSCTDT`,`MSDT`,`MSDDT`) USING BTREE,
  ADD KEY `MSCTDT` (`MSCTDT`),
  ADD KEY `MSDT` (`MSDT`),
  ADD KEY `MSDDT` (`MSDDT`);

--
-- Indexes for table `datdienthoai`
--
ALTER TABLE `datdienthoai`
  ADD PRIMARY KEY (`MSDDT`) USING BTREE,
  ADD KEY `MSDDT` (`MSDDT`),
  ADD KEY `MSKH` (`MSKH`);

--
-- Indexes for table `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`MSDT`) USING BTREE,
  ADD KEY `MSCTDT` (`MSCTDT`),
  ADD KEY `MNDT` (`MNDT`);

--
-- Indexes for table `khachhangshop`
--
ALTER TABLE `khachhangshop`
  ADD PRIMARY KEY (`MSKH`);

--
-- Indexes for table `nhanvienshop`
--
ALTER TABLE `nhanvienshop`
  ADD PRIMARY KEY (`MSNV`);

--
-- Indexes for table `nhomdienthoai`
--
ALTER TABLE `nhomdienthoai`
  ADD PRIMARY KEY (`MNDT`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`MSPH`) USING BTREE,
  ADD KEY `FK_phanhoi_khachhangshop` (`MSKH`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  MODIFY `MSCTDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `datdienthoai`
--
ALTER TABLE `datdienthoai`
  MODIFY `MSDDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `khachhangshop`
--
ALTER TABLE `khachhangshop`
  MODIFY `MSKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345866832;

--
-- AUTO_INCREMENT for table `nhanvienshop`
--
ALTER TABLE `nhanvienshop`
  MODIFY `MSNV` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `MSPH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `chitietdondathang_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhangshop` (`MSKH`),
  ADD CONSTRAINT `chitietdondathang_ibfk_4` FOREIGN KEY (`MSDT`) REFERENCES `dienthoai` (`MSDT`),
  ADD CONSTRAINT `chitietdondathang_ibfk_5` FOREIGN KEY (`MSDDT`) REFERENCES `datdienthoai` (`MSDDT`);

--
-- Constraints for table `datdienthoai`
--
ALTER TABLE `datdienthoai`
  ADD CONSTRAINT `datdienthoai_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhangshop` (`MSKH`);

--
-- Constraints for table `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD CONSTRAINT `dienthoai_ibfk_1` FOREIGN KEY (`MSCTDT`) REFERENCES `chitietdienthoai` (`MSCTDT`),
  ADD CONSTRAINT `dienthoai_ibfk_2` FOREIGN KEY (`MNDT`) REFERENCES `nhomdienthoai` (`MNDT`);

--
-- Constraints for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `FK_phanhoi_khachhangshop` FOREIGN KEY (`MSKH`) REFERENCES `khachhangshop` (`MSKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
