-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2022 lúc 12:32 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sinhvien`
--

CREATE TABLE `tbl_sinhvien` (
  `ma_sv` int(11) NOT NULL,
  `ten_sv` varchar(255) NOT NULL,
  `dien_thoai` varchar(255) NOT NULL,
  `ngay_sinh` varchar(255) NOT NULL,
  `noi_sinh` varchar(255) NOT NULL,
  `gioi_tinh` varchar(255) NOT NULL,
  `cmnd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sinhvien`
--

INSERT INTO `tbl_sinhvien` (`ma_sv`, `ten_sv`, `dien_thoai`, `ngay_sinh`, `noi_sinh`, `gioi_tinh`, `cmnd`) VALUES
(3, 'df', '101234', '2022-12-01', 'sad', 'Nam', '456'),
(12, 'asd', '1205305', '2022-12-03', 'Mỹ Tho', 'Nữ', '6489'),
(20101055, 'Võ Huy', '0123456789', '2002-01-01', 'Mỹ Tho', 'Nữ', '325147892');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD PRIMARY KEY (`ma_sv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  MODIFY `ma_sv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20101056;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
