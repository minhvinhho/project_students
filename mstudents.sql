-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 30, 2021 lúc 01:04 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mstudents`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `teacher_master_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `faculty_id`, `teacher_master_id`) VALUES
(1, '12A', 1, 2),
(4, '12S', 3, 5),
(5, 'S2', 1, 5),
(7, 'N3', 2, 5);
(8, 'M9', 2, 5);
(9, 'A1', 2, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_master_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_master_id`) VALUES
(1, 'IT', 1),
(2, 'MARKETING', 1),
(3, 'AI', 1);
(8, 'BlockChain', 1);
(4, 'Nodejs', 1);
(9, 'Laravel', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `points`
--

CREATE TABLE `points` (
  `subject_id` int(11) DEFAULT NULL,
  `students_id` int(11) DEFAULT NULL,
  `times` int(11) DEFAULT NULL,
  `point` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `points`
--

INSERT INTO `points` (`subject_id`, `students_id`, `times`, `point`) VALUES
(1, 5, 50, 5),
(2, 6, 50, 5),
(1, 5, 50, 5),
(2, 6, 50, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `students_id` int(11) NOT NULL,
  `students_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`students_id`, `students_name`, `gender`, `address`, `class_id`) VALUES
(1, 'Lê Văn A', 'Nam', 'Lăng Cô - Huế', 1),
(4, 'Lê Văn D', 'Nam', 'Lăng Cô - Huế', 4),
(5, 'Lê Văn E', 'Nữ', 'Phú Lộc - Huế', 5),
(6, 'Lê Văn F', 'Nữ', 'Phú Xuân - Huế', 6),
(7, 'Lê Văn F', 'Nữ', 'Hải Châu - Đà Nẵng', 1),
(8, 'Lê Văn F', 'Nữ', 'Thanh Khê - Đà Nẵng', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `credit`) VALUES
(1, 'Toán', 50),
(2, 'Hóa', 10),
(3, 'Vật lý', 20),
(4, 'Sinh học', 45),
(5, 'Ngữ văn', 77),
(6, 'Ngữ văn', 77),
(7, 'Toán', 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `gender`, `address`) VALUES
(1, 'Nguyễn Tuấn Anh', '1', 'Lăng Cô - Huế'),
(2, 'Nguyễn Thị Cẩm Vân', '0', 'Thanh Khê - Đà nẵng'),
(3, 'Trịnh Quang Tấn', '0', 'Hội An - Quảng nam'),
(4, 'Nguyễn Thị Thu Thảo', '1', 'Bắc Từ Liêm - Hà nội'),
(5, 'Trần Văn Đàm', '0', 'Quận 9 -HCM'),
(6, 'Đậu Thị Đậu', '1', 'Bến Xe Trung Tâm Huế');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `teacher_master_id` (`teacher_master_id`);

--
-- Chỉ mục cho bảng `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `faculty_master_id` (`faculty_master_id`);

--
-- Chỉ mục cho bảng `points`
--
ALTER TABLE `points`
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `Students` (`students_id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`students_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Chỉ mục cho bảng `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `faculty_id` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_master_id` FOREIGN KEY (`teacher_master_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `student_id` FOREIGN KEY (`students_id`) REFERENCES `students` (`students_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `class_id` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
