-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 25, 2020 lúc 05:49 PM
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
-- Cơ sở dữ liệu: `proiect_student`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_help`
--

CREATE TABLE `tbl_help` (
  `tb_id_help` int(11) NOT NULL,
  `tb_problem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `maSV` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `tenSV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `namSinh` int(11) NOT NULL,
  `lop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `tb_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `maSV`, `tenSV`, `namSinh`, `lop`, `img`, `tb_key`) VALUES
(1, 'DTC15HD48001', 'Nguyễn văn A', 1996, 'CNTT', 'hackimg.php', 1),
(2, 'DTC15HD48002', 'Hoàng Thị Mai', 1997, 'CNPM', 'img.png', 2),
(4, 'DTC15HD48009', 'Hoàng Thị Mai Linh', 1997, 'CNPM', 'img (1).png', 0),
(5, 'DTC15HD48006', 'Nguyễn Văn D', 1997, 'HTTT', 'img (1).png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `key_user` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass-word` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`key_user`, `name`, `user_name`, `user_email`, `pass-word`, `img`, `token`) VALUES
(1, 'Trần Tú', 'Trantu', 'trantu12@email.com', '12345', 'hotboy_erba.jpg', ''),
(2, 'Thanh hà', 'hacute', 'hacute95@email.com', '123456789', 'hotgirl-08.jpg', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`key_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `key_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
