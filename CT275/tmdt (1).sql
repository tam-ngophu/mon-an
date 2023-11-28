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
-- Database: `tmdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethanghoa`
--

CREATE TABLE `chitiethanghoa` (
  `ma_cthh` int(10) UNSIGNED NOT NULL,
  `loai_chitiet` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhinh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camerasau` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cameraselfile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonhotrong` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GPU` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hedieuhanh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xuatxu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namsx` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dohoa_lt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocung_lt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trongluong_lt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kichthuoc_lt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitiethanghoa`
--

INSERT INTO `chitiethanghoa` (`ma_cthh`, `loai_chitiet`, `manhinh`, `camerasau`, `cameraselfile`, `bonhotrong`, `GPU`, `pin`, `sms`, `ram`, `chip`, `hedieuhanh`, `xuatxu`, `namsx`, `dohoa_lt`, `ocung_lt`, `trongluong_lt`, `kichthuoc_lt`) VALUES
(1, 'DT', '6.5\", Super Retina XDR, Super AMOLED, 1242 x 2688 ', '12.0 MP + 12.0 MP + 12.0 MP', '12.0 MP', '64 GB', 'Apple GPU 4X', '3969 mAh', '1, 1 eSIM, 1 Nano SIM', '4 GB', 'A13 Bionic', 'iOS 13', 'Trung Quốc', '2019', NULL, NULL, NULL, NULL),
(21, 'LT', 'ddđ', NULL, NULL, NULL, NULL, NULL, NULL, 'ddđ', 'ddđ', '2222222', 'ddddđ', 'ddddd', 'ddddd', '222222', 'dddđ', '1'),
(22, 'DT', 'bbb', 'bbbbb', 'bbbbbbb', 'bbbbbbbb', 'bbbbbb', 'bbbbbbbbb', 'bbbbbbbb', 'bbbbb', 'bbbbbbb', 'bbbbbbbb', 'bbbbbb', 'bbbbbb', NULL, NULL, NULL, NULL),
(31, 'LT', 'dddd', NULL, NULL, NULL, NULL, NULL, NULL, 'ddđ', 'ddđ', 'dddddd', 'ddddđ', 'ddddd', 'ddddd', 'dddđ', '1kg', '10'),
(32, 'DT', '33333', '3333', '3333', '33333', '333333333333', '333333', '33333', '333333', '333333', '33333', '333333', '333333', NULL, NULL, NULL, NULL),
(33, 'LT', '333', NULL, NULL, NULL, NULL, NULL, NULL, '33333333333333333', '4444444', '4444444444', '444444', '44444', '44444', '44', '44', '44'),
(34, 'LT', '222222', NULL, NULL, NULL, NULL, NULL, NULL, '2222222', '222222222', '222222', '22222222', '222222', '2222222', '222222', '222222', '2222222'),
(35, 'DT', '32', '111111', '111111', '1111', '111111', '1111', '111111', '11111', '11111111', '11111', '11111111', '111', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_dathanghoa`
--

CREATE TABLE `chitiet_dathanghoa` (
  `ma_dhh` int(10) UNSIGNED NOT NULL,
  `ma_hh` int(10) UNSIGNED NOT NULL,
  `soluong_mua` decimal(10,0) UNSIGNED NOT NULL,
  `gia_mua` decimal(10,0) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitiet_dathanghoa`
--

INSERT INTO `chitiet_dathanghoa` (`ma_dhh`, `ma_hh`, `soluong_mua`, `gia_mua`) VALUES
(111, 1, '2', '57980000'),
(113, 1, '1', '28990000'),
(114, 1, '1', '28990000'),
(116, 1, '1', '28990000'),
(118, 1, '1', '28990000'),
(119, 1, '1', '28990000'),
(122, 1, '1', '28990000'),
(112, 13, '1', '11111111'),
(113, 13, '1', '11111111'),
(116, 13, '1', '11111111'),
(119, 13, '1', '11111111'),
(123, 13, '2', '22222222'),
(114, 14, '1', '20000000'),
(119, 14, '1', '20000000'),
(121, 14, '1', '20000000'),
(123, 14, '2', '40000000'),
(123, 17, '1', '100000000');

-- --------------------------------------------------------

--
-- Table structure for table `dathanghoa`
--

CREATE TABLE `dathanghoa` (
  `ma_dhh` int(10) UNSIGNED NOT NULL,
  `ma_kh` int(10) UNSIGNED NOT NULL,
  `ma_km` int(10) UNSIGNED NOT NULL,
  `ngaydathang` date NOT NULL,
  `ngaygiaohang` date NOT NULL,
  `trangthai` bit(1) DEFAULT NULL COMMENT '1 da xu ly, 0 chua xu ly'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dathanghoa`
--

INSERT INTO `dathanghoa` (`ma_dhh`, `ma_kh`, `ma_km`, `ngaydathang`, `ngaygiaohang`, `trangthai`) VALUES
(111, 5, 1, '2021-05-27', '2021-06-03', b'1'),
(112, 5, 3, '2021-05-28', '2021-05-21', b'1'),
(113, 5, 1, '2021-05-27', '2021-06-03', b'0'),
(114, 5, 1, '2021-05-27', '2021-06-03', b'0'),
(116, 5, 1, '2021-05-28', '2021-06-04', b'0'),
(118, 5, 1, '2021-05-28', '2021-06-04', b'0'),
(119, 5, 1, '2021-05-28', '2021-06-04', b'0'),
(121, 5, 1, '2021-05-28', '2021-06-04', b'0'),
(122, 5, 1, '2021-05-28', '2021-06-04', b'0'),
(123, 5, 1, '2021-05-28', '2021-06-04', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `ma_hh` int(10) UNSIGNED NOT NULL,
  `ma_nhh` int(10) UNSIGNED NOT NULL,
  `ma_cthh` int(10) UNSIGNED NOT NULL,
  `ma_km` int(10) UNSIGNED NOT NULL,
  `ten_dt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giacu_dt` decimal(10,0) DEFAULT NULL,
  `giamoi_dt` decimal(10,0) DEFAULT NULL,
  `soluong_dt` int(11) DEFAULT NULL,
  `hinh1_dt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh2_dt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh3_dt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`ma_hh`, `ma_nhh`, `ma_cthh`, `ma_km`, `ten_dt`, `giacu_dt`, `giamoi_dt`, `soluong_dt`, `hinh1_dt`, `hinh2_dt`, `hinh3_dt`) VALUES
(1, 1, 1, 1, 'IPhone 11 Pro Max 64GB', '29990000', '28990000', -11, '25022021112051_iphone1.png', '25022021112051_oppo4.png', '25022021112051_oppo9.png'),
(11, 2, 21, 1, 'Dell 875', '1111111', '11111111', 1, '28052021031104_anh1.jpg', '28052021031104_anh2.jpg', '28052021031104_laptop2.jpg'),
(13, 1, 1, 1, 'samsung', '1111111', '11111111', -12, '23032021132541_oppo2.png', '23032021132541_oppo5.png', '23032021132541_oppo7.png'),
(14, 1, 1, 1, 'dell11', '111111', '20000000', 4, '23032021132347_oppo3.png', '23032021132347_oppo4.png', '23032021132347_oppo9.png'),
(15, 1, 1, 1, 'Dell 8751', '1111111', '29000000', 1, '23032021132519_oppo3.png', '23032021132519_oppo1.png', '23032021132519_oppo6.png'),
(16, 2, 21, 5, 'Dell 875', '1111111', '11111111', 10, '28052021031257_anh2.jpg', '28052021031257_', '28052021031257_'),
(17, 1, 1, 1, 'samsung pro', '10000000', '100000000', 9, '29032021114912_25022021112849_iphone1.png', '29032021114912_23032021132541_oppo7.png', '29032021114912_25022021112849_oppo2.png');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` int(10) UNSIGNED NOT NULL,
  `sdt_kh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_kh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau_kh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh_kh` bit(1) NOT NULL COMMENT '1 la nam, 0 la nu',
  `emai_kh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi_kh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`ma_kh`, `sdt_kh`, `ten_kh`, `matkhau_kh`, `gioitinh_kh`, `emai_kh`, `diachi_kh`) VALUES
(1, '0377056951', 'Ngô Phú Tâm', '', b'1', 'tampro@gmail.com', 'Cần Thơ'),
(2, '01677056951', 'Ngô Tâm', '', b'1', 'tampro@gmail.com', 'An Giang'),
(3, '0377056952', 'Ngô Tâm', '123', b'1', 'tampro@gmail.com', 'AG'),
(5, '0377056953', 'Ngô Tâm', '202cb962ac59075b964b07152d234b70', b'1', 'tampro@gmail.com', 'ct');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `ma_km` int(10) UNSIGNED NOT NULL,
  `noidung_km` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaybatdau_km` datetime DEFAULT NULL,
  `ngayketthuc_km` datetime DEFAULT NULL,
  `phantram` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apdung` int(2) DEFAULT NULL COMMENT '1 là có khuyến mãi, 0 là không áp dụng khuyến mãi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`ma_km`, `noidung_km`, `ngaybatdau_km`, `ngayketthuc_km`, `phantram`, `apdung`) VALUES
(1, 'khuyến mãi trước tết', '2020-12-01 00:00:00', '2021-02-01 00:00:00', '20', 1),
(3, 'Khuyến mãi sau tết', '2021-03-01 00:00:00', '2021-03-31 00:00:00', '20', 0),
(5, 'khuyến mãi 30%', '2021-03-19 00:00:00', '2021-03-31 00:00:00', '30%', 1),
(6, 'khuyến mãi 10%', '2021-03-18 00:00:00', '2021-03-27 00:00:00', '10%', 1),
(7, 'khuye mai he', '2021-05-28 00:00:00', '2021-05-29 00:00:00', '30%', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `ma_nv` int(10) UNSIGNED NOT NULL,
  `sdt_nv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_nv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau_nv` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh_nv` bit(1) NOT NULL COMMENT '1 la nam, 0 la nu',
  `email_nv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi_nv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`ma_nv`, `sdt_nv`, `ten_nv`, `matkhau_nv`, `gioitinh_nv`, `email_nv`, `diachi_nv`) VALUES
(3, '0377056951', 'Tâm Ngô Phú', '123', b'1', 'tampro@gmail.com', 'Cần Thơ'),
(5, '0377056953', 'Tâm Ngô Phú', '202cb962ac59075b964b07152d234b70', b'1', 'tampro@gmail.com', '1111111111'),
(18, '0377056952', 'Tâm Ngô Phú', '202cb962ac59075b964b07152d234b70', b'1', 'tampro@gmail.com', 'CT');

-- --------------------------------------------------------

--
-- Table structure for table `nhomhanghoa`
--

CREATE TABLE `nhomhanghoa` (
  `ma_nhh` int(10) UNSIGNED NOT NULL,
  `ten_nhh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhomhanghoa`
--

INSERT INTO `nhomhanghoa` (`ma_nhh`, `ten_nhh`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `ma_ph` int(10) UNSIGNED NOT NULL,
  `ma_kh` int(10) UNSIGNED NOT NULL,
  `ten_ph` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_ph` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_ph` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_ph` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethanghoa`
--
ALTER TABLE `chitiethanghoa`
  ADD PRIMARY KEY (`ma_cthh`) USING BTREE;

--
-- Indexes for table `chitiet_dathanghoa`
--
ALTER TABLE `chitiet_dathanghoa`
  ADD PRIMARY KEY (`ma_hh`,`ma_dhh`) USING BTREE,
  ADD KEY `FK_chitiet_dathanghoa_dathanghoa` (`ma_dhh`);

--
-- Indexes for table `dathanghoa`
--
ALTER TABLE `dathanghoa`
  ADD PRIMARY KEY (`ma_dhh`),
  ADD KEY `ma_km` (`ma_km`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`ma_hh`) USING BTREE,
  ADD KEY `FK_dienthoai_nhomhanghoa` (`ma_nhh`),
  ADD KEY `FK_dienthoai_chitietdienthoai` (`ma_cthh`) USING BTREE,
  ADD KEY `ma_km` (`ma_km`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_kh`,`sdt_kh`) USING BTREE;

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`ma_km`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`ma_nv`,`sdt_nv`);

--
-- Indexes for table `nhomhanghoa`
--
ALTER TABLE `nhomhanghoa`
  ADD PRIMARY KEY (`ma_nhh`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`ma_ph`),
  ADD KEY `FK__khachhang` (`ma_kh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethanghoa`
--
ALTER TABLE `chitiethanghoa`
  MODIFY `ma_cthh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `dathanghoa`
--
ALTER TABLE `dathanghoa`
  MODIFY `ma_dhh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `ma_hh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_kh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `ma_km` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `ma_nv` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nhomhanghoa`
--
ALTER TABLE `nhomhanghoa`
  MODIFY `ma_nhh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `ma_ph` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_dathanghoa`
--
ALTER TABLE `chitiet_dathanghoa`
  ADD CONSTRAINT `FK_chitiet_dathanghoa_dathanghoa` FOREIGN KEY (`ma_dhh`) REFERENCES `dathanghoa` (`ma_dhh`),
  ADD CONSTRAINT `FK_chitiet_dathanghoa_hanghoa` FOREIGN KEY (`ma_hh`) REFERENCES `hanghoa` (`ma_hh`);

--
-- Constraints for table `dathanghoa`
--
ALTER TABLE `dathanghoa`
  ADD CONSTRAINT `FK_dathanghoa_khachhang` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`),
  ADD CONSTRAINT `FK_dathanghoa_khuyenmai` FOREIGN KEY (`ma_km`) REFERENCES `khuyenmai` (`ma_km`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_dienthoai_chitiethanghoa` FOREIGN KEY (`ma_cthh`) REFERENCES `chitiethanghoa` (`ma_cthh`),
  ADD CONSTRAINT `FK_dienthoai_nhomhanghoa` FOREIGN KEY (`ma_nhh`) REFERENCES `nhomhanghoa` (`ma_nhh`),
  ADD CONSTRAINT `FK_hanghoa_khuyenmai` FOREIGN KEY (`ma_km`) REFERENCES `khuyenmai` (`ma_km`);

--
-- Constraints for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `FK__khachhang` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
