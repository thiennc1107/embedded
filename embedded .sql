-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 08, 2021 lúc 10:29 AM
-- Phiên bản máy phục vụ: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `embedded`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Auto`
--

CREATE TABLE `Auto` (
  `den_bat` time NOT NULL,
  `den_tat` time NOT NULL,
  `tuoi_bat` time NOT NULL,
  `tuoi_tat` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Auto`
--

INSERT INTO `Auto` (`den_bat`, `den_tat`, `tuoi_bat`, `tuoi_tat`) VALUES
('23:47:42', '22:51:42', '12:51:30', '23:51:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Manual`
--

CREATE TABLE `Manual` (
  `Den` text NOT NULL,
  `Tuoi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Manual`
--

INSERT INTO `Manual` (`Den`, `Tuoi`) VALUES
('tat', 'Dung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pid`
--

CREATE TABLE `pid` (
  `P` double(10,0) DEFAULT NULL,
  `I` double(10,0) DEFAULT NULL,
  `D` double(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pid`
--

INSERT INTO `pid` (`P`, `I`, `D`) VALUES
(1, 2, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `error` double DEFAULT NULL,
  `speed` double DEFAULT NULL,
  `angle` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`error`, `speed`, `angle`) VALUES
(3, 4, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
