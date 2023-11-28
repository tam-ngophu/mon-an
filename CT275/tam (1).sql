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
-- Database: `tam`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(10) UNSIGNED NOT NULL,
  `IDKH` int(11) UNSIGNED NOT NULL,
  `mahttt` int(11) UNSIGNED NOT NULL,
  `ngaydh` datetime DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madh`, `IDKH`, `mahttt`, `ngaydh`, `trangthai`) VALUES
(1, 1, 1, '2021-01-20 18:09:25', 1),
(2, 1, 1, '2021-01-21 18:09:36', 1),
(3, 2, 1, '2021-01-22 18:11:13', 1),
(4, 2, 1, '2021-01-23 18:10:48', 1),
(5, 1, 1, '0000-00-00 00:00:00', NULL),
(14, 1, 1, '0000-00-00 00:00:00', NULL),
(15, 1, 1, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `idgv` int(10) UNSIGNED NOT NULL,
  `idlop` int(10) UNSIGNED NOT NULL,
  `tengv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`idgv`, `idlop`, `tengv`) VALUES
(1, 1, 'tam'),
(2, 2, 'loi');

-- --------------------------------------------------------

--
-- Table structure for table `gv_lop`
--

CREATE TABLE `gv_lop` (
  `idlop` int(11) UNSIGNED NOT NULL,
  `idgv` int(11) UNSIGNED NOT NULL,
  `idmh` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gv_lop`
--

INSERT INTO `gv_lop` (`idlop`, `idgv`, `idmh`) VALUES
(1, 1, 2),
(1, 2, 1),
(1, 2, 2),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hinhsp`
--

CREATE TABLE `hinhsp` (
  `MSH` int(11) NOT NULL,
  `Hinh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ID` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinhsp`
--

INSERT INTO `hinhsp` (`MSH`, `Hinh`, `ID`) VALUES
(15, '15012021114331_iphone3.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hinhthuc`
--

CREATE TABLE `hinhthuc` (
  `mahttt` int(10) UNSIGNED NOT NULL,
  `tenmht` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinhthuc`
--

INSERT INTO `hinhthuc` (`mahttt`, `tenmht`) VALUES
(1, 'tien mat');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `IDKH` int(10) UNSIGNED NOT NULL,
  `TENKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taikhoan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DIACHI` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`IDKH`, `TENKH`, `taikhoan`, `DIACHI`, `matkhau`) VALUES
(1, 'Tâm', 'admin', 'Cần Thơ', '123'),
(2, 'Lợi', 'admin1', 'Đồng Tháp', '123'),
(3, 'tâm', 'admin2', 'cần thơ', '123');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `IDKM` int(11) UNSIGNED NOT NULL,
  `TENKM` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TUNGAY` datetime NOT NULL,
  `DENNGAY` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `IDLOAI` int(11) UNSIGNED NOT NULL,
  `MSLSP` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TENLOAI` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`IDLOAI`, `MSLSP`, `TENLOAI`, `mota`) VALUES
(1, 'ss3', 'samsung đen', 'null'),
(2, 'ss4', 'samsung trắng', NULL),
(11, 'ss4', 'samsung đen', NULL),
(12, 'ss4', 'samsung trắng', NULL),
(13, 'ss4', 'samsung trắng đen', NULL),
(20, 'ss4', 'samsung trắng đen 1', NULL),
(27, '1', 'samsung đen', '&lt;script&gt;alert(&quot;hello&quot;)&lt;/script&gt;'),
(28, '', 'samsung đen', '&lt;script&gt;alert(&quot;hello&quot;)&lt;/script&gt;'),
(29, '', 'samsung đen', '&lt;script&gt;alert(&quot;hello&quot;)&lt;/script&gt;'),
(30, '', 'samsung đen', '&lt;script&gt;alert(&quot;hello&quot;)&lt;/script&gt;'),
(31, '', 'samsung đen', '&lt;script&gt;alert(&quot;hello&quot;)&lt;/script&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `idlop` int(10) UNSIGNED NOT NULL,
  `tenlop` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`idlop`, `tenlop`) VALUES
(1, 'a'),
(2, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `idmh` int(11) UNSIGNED NOT NULL,
  `tenmonhoc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`idmh`, `tenmonhoc`) VALUES
(1, 'aa'),
(2, 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(10) UNSIGNED NOT NULL,
  `MaPB` int(11) UNSIGNED NOT NULL,
  `MaQL` int(11) UNSIGNED NOT NULL,
  `hoten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gioitinh` bit(1) NOT NULL COMMENT '1la nam 0 la nu',
  `Ngaysinh` date NOT NULL,
  `CMND` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayLamviec` date NOT NULL,
  `Hesoluong` double NOT NULL DEFAULT 0,
  `Chucvu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Trinhdo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `MaPB`, `MaQL`, `hoten`, `ho`, `Gioitinh`, `Ngaysinh`, `CMND`, `NgayLamviec`, `Hesoluong`, `Chucvu`, `Trinhdo`) VALUES
(1, 1, 1, 'loi', 'nguyen ngoc', b'1', '1999-02-12', '1234561', '2020-10-10', 3.5, 'NhanVien', 'daihoc');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `IDNSX` int(10) UNSIGNED NOT NULL,
  `TENNSX` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`IDNSX`, `TENNSX`) VALUES
(1, 'SS1'),
(2, 'SS2'),
(3, 'SS3');

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `MaPB` int(10) UNSIGNED NOT NULL,
  `TenPB` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diengiai` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`MaPB`, `TenPB`, `Diengiai`) VALUES
(1, 'PhongA', 'Đẹp'),
(2, 'PhongB', 'Tối'),
(3, 'PhongC', 'Sáng');

-- --------------------------------------------------------

--
-- Table structure for table `phongban_1`
--

CREATE TABLE `phongban_1` (
  `Mapb1` int(10) UNSIGNED NOT NULL,
  `tenpb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mapb_1` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phongban_1`
--

INSERT INTO `phongban_1` (`Mapb1`, `tenpb`, `Mapb_1`) VALUES
(1, 'phongA', NULL),
(2, 'PhongF', 1),
(12, 'PhongB', 1),
(13, 'PhongC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quanlynv`
--

CREATE TABLE `quanlynv` (
  `MaQL` int(10) UNSIGNED NOT NULL,
  `HotenQL` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quanlynv`
--

INSERT INTO `quanlynv` (`MaQL`, `HotenQL`) VALUES
(1, 'tam'),
(2, 'son');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(10) UNSIGNED NOT NULL,
  `IDLOAI` int(10) UNSIGNED DEFAULT NULL,
  `IDNSX` int(10) UNSIGNED DEFAULT NULL,
  `TENKM` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TENSP` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` int(10) UNSIGNED NOT NULL,
  `GiaCu` decimal(16,0) DEFAULT NULL,
  `GiaMoi` decimal(16,0) DEFAULT NULL,
  `Gioitinh` bit(1) NOT NULL COMMENT '#1 nam #0nu',
  `NgaySX` datetime DEFAULT NULL,
  `NDKM` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TU` datetime DEFAULT NULL,
  `DEN` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID`, `IDLOAI`, `IDNSX`, `TENKM`, `MSP`, `TENSP`, `soluong`, `GiaCu`, `GiaMoi`, `Gioitinh`, `NgaySX`, `NDKM`, `TU`, `DEN`) VALUES
(1, 1, 1, '', 'SP001', 'SAMSUNG J7', 10, '1000000', '10000000', b'1', '2021-01-04 18:13:51', NULL, NULL, NULL),
(2, 2, 2, 'khuyến mãi', 'SP002', 'SAMSUNG PRO', 10, '50000000', '100000000', b'0', '2021-01-04 18:13:49', '20%', '2021-01-04 18:45:05', '2021-02-04 18:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `sp_donhang`
--

CREATE TABLE `sp_donhang` (
  `madh` int(10) UNSIGNED NOT NULL,
  `ma_spdh` int(10) UNSIGNED NOT NULL,
  `soluong` decimal(10,0) DEFAULT NULL,
  `dongia` decimal(10,0) DEFAULT NULL,
  `tensp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sp_donhang`
--

INSERT INTO `sp_donhang` (`madh`, `ma_spdh`, `soluong`, `dongia`, `tensp`) VALUES
(1, 1, '3', '100000', 'nokia'),
(2, 2, '2', '200000', 'sámung'),
(1, 3, '1', '330000', 'nokia'),
(3, 4, '2', '100000', 'sámung'),
(2, 5, '1', '1111111', 'sámung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD KEY `FK_donhang_khachhang` (`IDKH`),
  ADD KEY `FK_donhang_hinhthuc` (`mahttt`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`idgv`),
  ADD KEY `FK_giangvien_lop` (`idlop`);

--
-- Indexes for table `gv_lop`
--
ALTER TABLE `gv_lop`
  ADD UNIQUE KEY `idlop_idgv_idmh` (`idlop`,`idgv`,`idmh`),
  ADD KEY `FK_gv_lop_giangvien` (`idgv`),
  ADD KEY `FK_gv_lop_monhoc` (`idmh`);

--
-- Indexes for table `hinhsp`
--
ALTER TABLE `hinhsp`
  ADD PRIMARY KEY (`MSH`),
  ADD KEY `FK_hinhsp_sanpham` (`ID`);

--
-- Indexes for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  ADD PRIMARY KEY (`mahttt`) USING BTREE;

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`IDKH`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`IDKM`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`IDLOAI`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`idlop`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`idmh`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `FK_nhanvien_phongban` (`MaPB`),
  ADD KEY `FK_nhanvien_quanlynv` (`MaQL`);

--
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`IDNSX`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MaPB`);

--
-- Indexes for table `phongban_1`
--
ALTER TABLE `phongban_1`
  ADD PRIMARY KEY (`Mapb1`),
  ADD KEY `FK_phongban_1_phongban_1` (`Mapb_1`);

--
-- Indexes for table `quanlynv`
--
ALTER TABLE `quanlynv`
  ADD PRIMARY KEY (`MaQL`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_sanpham_loaisp` (`IDLOAI`),
  ADD KEY `FK_sanpham_nhasanxuat` (`IDNSX`);

--
-- Indexes for table `sp_donhang`
--
ALTER TABLE `sp_donhang`
  ADD PRIMARY KEY (`ma_spdh`,`madh`) USING BTREE,
  ADD KEY `FK_sp_donhang_donhang` (`madh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `idgv` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hinhsp`
--
ALTER TABLE `hinhsp`
  MODIFY `MSH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `mahttt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `IDKH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `IDKM` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `IDLOAI` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `idlop` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `idmh` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `IDNSX` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `MaPB` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phongban_1`
--
ALTER TABLE `phongban_1`
  MODIFY `Mapb1` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quanlynv`
--
ALTER TABLE `quanlynv`
  MODIFY `MaQL` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sp_donhang`
--
ALTER TABLE `sp_donhang`
  MODIFY `ma_spdh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_donhang_hinhthuc` FOREIGN KEY (`mahttt`) REFERENCES `hinhthuc` (`mahttt`),
  ADD CONSTRAINT `FK_donhang_khachhang` FOREIGN KEY (`IDKH`) REFERENCES `khachhang` (`IDKH`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `FK_giangvien_lop` FOREIGN KEY (`idlop`) REFERENCES `lop` (`idlop`);

--
-- Constraints for table `gv_lop`
--
ALTER TABLE `gv_lop`
  ADD CONSTRAINT `FK_gv_lop_giangvien` FOREIGN KEY (`idgv`) REFERENCES `giangvien` (`idgv`),
  ADD CONSTRAINT `FK_gv_lop_lop` FOREIGN KEY (`idlop`) REFERENCES `lop` (`idlop`),
  ADD CONSTRAINT `FK_gv_lop_monhoc` FOREIGN KEY (`idmh`) REFERENCES `monhoc` (`idmh`);

--
-- Constraints for table `hinhsp`
--
ALTER TABLE `hinhsp`
  ADD CONSTRAINT `FK_hinhsp_sanpham` FOREIGN KEY (`ID`) REFERENCES `sanpham` (`ID`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `FK_nhanvien_phongban` FOREIGN KEY (`MaPB`) REFERENCES `phongban` (`MaPB`),
  ADD CONSTRAINT `FK_nhanvien_quanlynv` FOREIGN KEY (`MaQL`) REFERENCES `quanlynv` (`MaQL`);

--
-- Constraints for table `phongban_1`
--
ALTER TABLE `phongban_1`
  ADD CONSTRAINT `FK_phongban_1_phongban_1` FOREIGN KEY (`Mapb_1`) REFERENCES `phongban_1` (`Mapb1`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_sanpham_loaisp` FOREIGN KEY (`IDLOAI`) REFERENCES `loaisp` (`IDLOAI`),
  ADD CONSTRAINT `FK_sanpham_nhasanxuat` FOREIGN KEY (`IDNSX`) REFERENCES `nhasanxuat` (`IDNSX`);

--
-- Constraints for table `sp_donhang`
--
ALTER TABLE `sp_donhang`
  ADD CONSTRAINT `FK_sp_donhang_donhang` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
