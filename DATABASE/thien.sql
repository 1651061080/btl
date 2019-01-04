-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2019 lúc 08:24 AM
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
-- Cơ sở dữ liệu: `thien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `id` int(11) NOT NULL,
  `chude` varchar(100) NOT NULL,
  `cauhoi` varchar(200) NOT NULL,
  `dapan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`id`, `chude`, `cauhoi`, `dapan`) VALUES
(1, 'sosanh', 'số nào lớn hơn', 'a'),
(3, 'sosanh', 'số nào nhỏ hơn ?', 'a'),
(4, 'sosanh', 'số 9 lớn hơn số 5 ?', 'a'),
(5, 'tonho', 'qua nào to hơn?', 'a'),
(6, 'tonho', 'con voi to hơn con kiến đúng không', 'a'),
(7, 'tonho', 'con gì to hơn ', 'a'),
(8, 'tonho', 'qua nào to hơn?', 'a'),
(9, 'tonho', 'con voi to hơn con kiến đúng không', 'a'),
(10, 'tonho', 'con gì to hơn ', 'a'),
(11, 'tonho', 'con voi to hơn con mèo?', 'a'),
(12, 'tonho', 'cái nào to hơn', 'a'),
(13, 'tonho', 'con voi to hơn con mèo?', 'a'),
(14, 'tonho', 'cái nào to hơn', 'a'),
(16, 'daingan', 'thước kẻ 30cm dài  hơn tước kẻ 10cm đúng khônh', 'a'),
(17, 'daingan', 'Cái nào dài hơn', 'a'),
(18, 'daingan', 'cái nào ngắn hơn', 'a'),
(19, 'daingan', 'độ dài ngắn có thể thay đổi được không?', 'a'),
(21, 'daingan', 'thước kẻ 30cm dài  hơn tước kẻ 10cm đúng khônh', 'a'),
(22, 'ronghep', 'Cái tủ nào to hơn?', 'a'),
(23, 'ronghep', 'quả nào nhỏ hơn', 'a'),
(24, 'ronghep', 'Cánh cửa nào hẹp hơn?', 'a'),
(25, '', 'Cửa nào rộng hơn?', 'a'),
(26, 'ronghep', 'sông nào rộng hơn ?', 'a'),
(27, 'nangnhe', 'cái nào nang hơn', 'a'),
(28, 'nangnhe', 'cái gì nhẹ hơn', 'a'),
(29, 'sosanh1', 'sô nào lớn hơn?', 'a'),
(30, 'sosanh1', 'Số nào nhỏ hơn?', 'a'),
(31, 'sosanh1', 'điền dấu thích hợp 8 __  9', 'a'),
(32, 'sosanh1', 'Diền dấu thích hợp 8 __  8 ?', 'a'),
(33, 'dem', 'đếm theo đúng thứ tự các số từ 1 đến năm?', 'a'),
(34, 'dem', 'đếm đúng  thứ tự các số từ 5 xuống 1?', 'a'),
(35, 'congtru10', 'Hoàn thành phép cộng sau: 5+3 = ?', 'a'),
(36, 'congtru10', 'Hoàn thành phép cộng sau: 5+4 = ?', 'a'),
(37, 'congtru10', 'Hoàn thành phép cộng sau: 5-3 = ?', 'a'),
(38, 'congtru10', 'Hoàn thành phép cộng sau: 5+4 = ?', 'a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop1`
--

CREATE TABLE `lop1` (
  `id` int(10) NOT NULL,
  `chude` varchar(200) NOT NULL,
  `cauhoi` varchar(200) NOT NULL,
  `dapan` varchar(10) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop2`
--

CREATE TABLE `lop2` (
  `id` int(10) NOT NULL,
  `chude` varchar(200) NOT NULL,
  `cauhoi` varchar(200) NOT NULL,
  `dapan` varchar(10) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lop2`
--

INSERT INTO `lop2` (`id`, `chude`, `cauhoi`, `dapan`, `a`, `b`) VALUES
(5, 'cong10', 'thực hiện phép tính sau 6+4=?', 'a', '10', '9'),
(6, 'cong10', 'thực hiện phép tính sau 6+4=?', 'a', '10', '9'),
(7, 'cong10', 'Thực hiện phép toán sau 3+4 =?', 'a', '7', '5'),
(8, 'cong10', 'Thực hiện phép toán sau 3+5 =?', 'a', '8', '7'),
(9, 'cong10', 'Thực hiện phép toán sau 3+3 =?', 'a', '6', '7'),
(10, 'cong10', 'Thực hiện phép toán sau 1+9 =?', 'a', '10', '9'),
(11, '6cong', 'Thực hiện phép toán sau 6+4 =?', 'a', '10', '7'),
(12, '6cong', 'Thực hiện phép toán sau 6+5 =?', 'a', '11', '10'),
(13, '6cong', 'Thực hiện phép toán sau 6+7 =?', 'a', '13', '10'),
(14, '6cong', 'Thực hiện phép toán sau 6+8 =?', 'a', '14', '10'),
(15, '6cong', 'Thực hiện phép toán sau 6+9 =?', 'a', '15', '11'),
(16, '6cong', 'Thực hiện phép toán sau 6+1 =?', 'a', '7', '6'),
(17, '6cong', 'Thực hiện phép toán sau 6+10 =?', 'a', '16', '11'),
(18, '6cong', 'Thực hiện phép toán sau 6+0 =?', 'a', '6', '7');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop3`
--

CREATE TABLE `lop3` (
  `id` int(10) NOT NULL,
  `chude` varchar(200) NOT NULL,
  `cauhoi` varchar(200) NOT NULL,
  `dapan` varchar(10) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lop3`
--

INSERT INTO `lop3` (`id`, `chude`, `cauhoi`, `dapan`, `a`, `b`) VALUES
(1, 'doc', 'số 50 đọc là gỉ?', 'a', 'Năm mươi', 'Năm lăm'),
(2, 'doc', 'số 49 đọc là gỉ?', 'a', 'Bốn mươi chín', 'Bốn mưoi'),
(3, 'doc', 'số 25 đọc là gỉ?', 'a', 'Hai mươi lăm', 'Hai mươi năm'),
(4, 'doc', 'số 81 đọc là gỉ?', 'a', 'Tám mươi mốt', 'Tám mươi một'),
(5, 'doc', 'số 11 đọc là gỉ?', 'a', 'mười một', 'Mười Mốt'),
(6, 'doc', 'số 50 đọc là gỉ?', 'a', 'Năm mươi', 'Bốn mươi'),
(7, 'doc', '', '', '', ''),
(8, 'doc', '', '', '', ''),
(9, 'doc', '', '', '', ''),
(10, 'doc', '', '', '', ''),
(11, 'doc', '', '', '', ''),
(12, 'doc', '', '', '', ''),
(13, 'doc', 'Năm mươi viết như thế nào', 'a', '50', '55'),
(14, 'doc', 'Bốn mươi chín viết như thế nào?', 'b', '48', '49'),
(15, 'doc', 'Hai mươi lăm viết như thế nào', 'a', '25', '26'),
(16, 'doc', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop4`
--

CREATE TABLE `lop4` (
  `id` int(10) NOT NULL,
  `chude` varchar(200) NOT NULL,
  `cauhoi` varchar(200) NOT NULL,
  `dapan` varchar(10) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop5`
--

CREATE TABLE `lop5` (
  `id` int(10) NOT NULL,
  `chude` varchar(200) NOT NULL,
  `cauhoi` varchar(200) NOT NULL,
  `dapan` varchar(10) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `resetToken` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `resetComplete` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'No',
  `level` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`, `level`) VALUES
(11, 'thien', '$2y$10$82ow5wrb5NZQ6sDA2Fb1m.0gRNiWgdZvxOn//suAns.v5sUpX2FXG', 'thiennn62@wru.vn', 'Yes', '76d8b203ae645e33164bd3abfb50e29b6ca19c888950c0e2e7ddfc2145153768', 'Yes', 2),
(30, 'trang', '$2y$10$kXgSoLUvLpClvM9D.Ac/OOFc1yCKKUKwk.Oha2ZXuCqU7jT6Xiu8m', 'trangtt62@wru.vn', 'Yes', NULL, 'No', 2),
(33, 'dung', '$2y$10$7HXRFvID5F0Y9WasMeUKfe.rKar6HotIWdecPih2H7FRmeEZ.tQPW', 'ngodung251199@gmail.com', 'Yes', NULL, 'No', 1),
(39, 'thien25', '$2y$10$gQXluSHwcSzgUqaicti2VuQrGoHXj86.MmwKe1ZMfywiv6.82SoQW', 'ngothien25111998@gmail.com', 'Yes', '027b1e8a77262ac31a15a4cae3050c20fa5d0fd907f4313d80b5ae9c15c2f718', 'No', 1),
(21, 'dai', '$2y$10$Fg6.GK59.a3Slm8JWxz6COk4vx9ANk2RnhRkkQhoJNGK0ReFvSJ0a', 'daint62@wwru.vn', 'Yes', '34411633e516cfdb4ca5f647643b12fd002b4a889b5592606918f310c3f0647c', 'No', 1),
(34, 'ngô ngọc thiện', '', 'abcd@gmail.com', '', NULL, 'No', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongan`
--

CREATE TABLE `phuongan` (
  `id` int(10) NOT NULL,
  `a` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phuongan`
--

INSERT INTO `phuongan` (`id`, `a`, `b`) VALUES
(1, '7', '5'),
(3, '6', '10'),
(4, 'đúng', 'sai'),
(5, 'quả bưởi', 'quả cam'),
(6, 'đúng', 'sai'),
(5, 'quả bưởi', 'quả cam'),
(6, 'đúng', 'sai'),
(7, 'con voi', 'con mèo'),
(7, 'con voi', 'con mèo'),
(8, 'quả nhãn', 'quả dưa hấu'),
(8, 'quả nhãn', 'quả dưa hấu'),
(9, 'đúng', 'sai'),
(10, 'con chó', 'con chuột'),
(9, 'đúng', 'sai'),
(10, 'con chó', 'con chuột'),
(13, 'đúng', 'Sai'),
(14, 'biển', 'ao'),
(13, 'đúng', 'Sai'),
(14, 'biển', 'ao'),
(16, 'đúng', 'sai'),
(17, 'con sông', 'cái ao'),
(18, 'cái gối', 'cái giường'),
(19, 'Có', 'Không'),
(21, 'đúng', 'Sai'),
(16, 'đúng', 'sai'),
(17, 'con sông', 'cái ao'),
(18, 'cái gối', 'cái giường'),
(19, 'Có', 'Không'),
(21, 'đúng', 'Sai'),
(21, '../dungchung/img/lodo.png', '../dungchung/img/lodo.png'),
(22, '../dungchung/img/tuto.jpg', '../dungchung/img/tunho.jpg'),
(23, '../dungchung/img/nhan.jpg', '../dungchung/img/tao.jpg'),
(25, '../dungchung/img/cuahep.gif', '../dungchung/img/cuarong1.gif'),
(26, '../dungchung/img/songrong.jpg', '../dungchung/img/song hep.jpg'),
(27, '../dungchung/img/nang.jpg', '../dungchung/img/nhe.png'),
(28, '../dungchung/img/nhe1.jpg', '../dungchung/img/nang1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongann`
--

CREATE TABLE `phuongann` (
  `id` int(10) NOT NULL,
  `a` char(200) NOT NULL,
  `b` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phuongann`
--

INSERT INTO `phuongann` (`id`, `a`, `b`) VALUES
(29, '10', '5'),
(30, '5', '10'),
(31, '<', '>'),
(32, '=', '>'),
(33, 'một - hai - ba - bốn - năm', 'một - năm - ba - hai - bốn'),
(34, 'năm - bốn - ba - hai - một', 'một - hai - ba - bốn - năm'),
(35, '8', '2'),
(36, '9', '1'),
(37, '2', '8'),
(38, '9', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the`
--

CREATE TABLE `the` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `the`
--

INSERT INTO `the` (`id`, `name`, `mobile`, `address`, `number`) VALUES
(1, 'thien', '0961540437', '2018_2019', 1),
(8, 'thien', '0961540437', '2018_2019', 1),
(9, 'ngô ngọc thiện', '0961540437', 'hà nam', 1),
(10, 'ngô ngọc thiện', '0961540437', 'hà nam', 1),
(11, 'ngô ngọc thiện', '0961540437', 'hà nam', 1),
(12, 'ngô văn dũng', '0961540437', 'hà nội', 1),
(13, 'ngô văn dũng', '0961540437', 'hà nội', 1),
(14, 'trần trang', '123456789', 'thanh hóa', 1),
(15, 'trần trang', '123456789', 'thanh hóa', 1),
(16, 'đinh nghiêm', '0961540437', 'hà tây', 1),
(17, 'đinh nghiêm', '0961540437', 'hà tây', 1),
(18, 'ngô mạnh', '0961540437', 'hà nam', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lop2`
--
ALTER TABLE `lop2`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lop3`
--
ALTER TABLE `lop3`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lop4`
--
ALTER TABLE `lop4`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lop5`
--
ALTER TABLE `lop5`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Chỉ mục cho bảng `phuongan`
--
ALTER TABLE `phuongan`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `phuongann`
--
ALTER TABLE `phuongann`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Chỉ mục cho bảng `the`
--
ALTER TABLE `the`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `lop2`
--
ALTER TABLE `lop2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `lop3`
--
ALTER TABLE `lop3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `lop4`
--
ALTER TABLE `lop4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lop5`
--
ALTER TABLE `lop5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `phuongann`
--
ALTER TABLE `phuongann`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `the`
--
ALTER TABLE `the`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `phuongann`
--
ALTER TABLE `phuongann`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `cauhoi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
