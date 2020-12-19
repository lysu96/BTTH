-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 25, 2020 lúc 05:40 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanly_sinhvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lop`
--

CREATE TABLE `tbl_lop` (
  `id_lop` int(11) NOT NULL,
  `ten_lop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_lop` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lop`
--

INSERT INTO `tbl_lop` (`id_lop`, `ten_lop`, `ma_lop`) VALUES
(1, 'CNTT', 'CN1'),
(2, 'QTVP', 'PV1'),
(3, 'KTPM', 'KT1'),
(4, 'HTTT', 'HT1'),
(5, 'CNOT', 'CN2'),
(6, 'KTTT', 'KT2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sv`
--

CREATE TABLE `tbl_sv` (
  `id_sinhvien` int(11) NOT NULL,
  `ma_sinhvien` text COLLATE utf8_unicode_ci NOT NULL,
  `ten_sinhvien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_lop` text COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` text COLLATE utf8_unicode_ci NOT NULL,
  `nam_sinh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sv`
--

INSERT INTO `tbl_sv` (`id_sinhvien`, `ma_sinhvien`, `ten_sinhvien`, `ma_lop`, `gioi_tinh`, `nam_sinh`) VALUES
(22, 'DTC15BG', 'Nguyễn thị G', 'HT1', 'Nữ', '1997-04-26'),
(23, 'DTC15HD', 'Nguyễn văn T', 'CN1', 'Nam', '1998-01-15'),
(24, 'DTC42HD', 'Lường Minh H', 'CN2', 'Nam', '1999-07-19'),
(25, 'DTC15BD5', 'Nguyễn thị K', 'KT2', 'Nữ', '1999-07-26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_lop`
--
ALTER TABLE `tbl_lop`
  ADD PRIMARY KEY (`id_lop`);

--
-- Chỉ mục cho bảng `tbl_sv`
--
ALTER TABLE `tbl_sv`
  ADD PRIMARY KEY (`id_sinhvien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_lop`
--
ALTER TABLE `tbl_lop`
  MODIFY `id_lop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_sv`
--
ALTER TABLE `tbl_sv`
  MODIFY `id_sinhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
