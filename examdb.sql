-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2021 lúc 09:53 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `examdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `is_true` tinyint(4) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `execution_time` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `expire_time` datetime NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `subject` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `exam`
--

INSERT INTO `exam` (`id`, `name`, `execution_time`, `start_time`, `expire_time`, `password`, `active`, `created_date`, `updated_date`, `subject`, `user`) VALUES
(1, 'Thi giữ kì', 45, '2021-12-27 12:39:14', '2021-12-31 14:51:45', NULL, 0, '2021-12-27 12:39:14', '2021-12-27 12:39:14', 1, 2),
(2, 'Bài thi giữa kì', 60, '2021-12-29 18:30:00', '2021-12-31 11:00:00', '12345678', 1, '2021-12-28 08:23:46', '2021-12-28 08:23:46', 2, 2),
(3, 'Bài thi cuối kì', 90, '2021-12-29 08:30:00', '2021-12-31 08:30:00', '12345678', 1, '2021-12-28 15:28:10', '2021-12-28 15:28:11', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `exam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`id`, `content`, `created_date`, `updated_date`, `exam`) VALUES
(1, 'Đây là câu hỏi số 1?', '2021-12-28 10:14:38', '2021-12-28 10:14:38', 3),
(2, 'Đây là câu hỏi số 2?', '2021-12-28 16:36:26', '2021-12-28 16:36:26', 3),
(3, 'Đây là câu hỏi số 3?', '2021-12-28 16:38:29', '2021-12-28 16:38:29', 3),
(4, 'Đây là câu hỏi số 4?', '2021-12-28 16:39:02', '2021-12-28 16:39:02', 3),
(5, 'Đây là câu hỏi số 5?', '2021-12-28 16:41:20', '2021-12-28 16:41:20', 3),
(6, '1 + 1 = ?', '2021-12-28 16:42:01', '2021-12-28 16:42:01', 2),
(7, 'Điền vào chỗ trống: 5 ... 5 = 10.', '2021-12-28 16:44:46', '2021-12-28 16:44:46', 2),
(8, 'Thành có non không?', '2021-12-29 15:47:24', '2021-12-29 15:47:24', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scores`
--

CREATE TABLE `scores` (
  `user` int(11) NOT NULL,
  `exam` int(11) NOT NULL,
  `scores` double NOT NULL,
  `submited_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'Lập Trình Web'),
(2, 'Chuyên Đề');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `first_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mail` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `gender` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `student_number` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `avatar` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `role` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_login` tinyint(4) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `mail`, `phone`, `birthday`, `gender`, `student_number`, `avatar`, `role`, `active`, `last_login`, `is_login`, `created_date`, `updated_date`) VALUES
(2, 'user1', '12345678', 'Tường', 'Nguyễn', 'nct682000@gmail.com', '0948822116', '2000-08-06 10:20:25', 'Nam', '1851050178', NULL, 'User', 1, '2021-12-27 10:20:25', 1, NULL, NULL),
(3, 'user2', '12345678', 'Cường', 'Nguyễn', 'qwe123@gmail.com', '0123456789', '2021-12-27 13:30:07', 'Nam', '1851050014', NULL, 'User', 1, '2021-12-27 13:30:07', 1, NULL, NULL),
(4, 'user3', '12345678', 'Thành', 'Châu', 'asd123@gmail.com', '0123456789', '2021-12-27 13:31:58', 'Giới tính khác', '1851050130', NULL, 'User', 1, '2021-12-27 13:31:58', 1, NULL, NULL),
(5, 'user4', '12345678', 'Tựu', 'Châu', 'zxc123@gmail.com', '0123456789', '2021-12-27 13:33:50', 'Nữ', '1851050179', NULL, 'User', 1, '2021-12-27 13:33:50', 1, NULL, NULL),
(6, 'usertest', '$2y$10$vAWClOauFgm9U5/rQ2vCGO5LJ6TOoBKeI43P7hxLS4RofDdlIg6LK', 'Thưởng', 'Nguyễn', 'abcde@ou.edu.vn', '0123456789', '2000-01-01 00:00:00', 'Nam', '0123912841274', 'images (11).jpg', 'User', 1, '2021-12-29 15:28:35', 0, '2021-12-29 15:28:35', '2021-12-29 15:28:35');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_answer_question_idx` (`question`);

--
-- Chỉ mục cho bảng `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_exam_subject_idx` (`subject`),
  ADD KEY `fk_exam_user_idx` (`user`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_question_exam_idx` (`exam`);

--
-- Chỉ mục cho bảng `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`user`,`exam`),
  ADD KEY `fk_scores_exam_idx` (`exam`);

--
-- Chỉ mục cho bảng `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_answer_question` FOREIGN KEY (`question`) REFERENCES `question` (`id`);

--
-- Các ràng buộc cho bảng `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `fk_exam_subject` FOREIGN KEY (`subject`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `fk_exam_user` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_question_exam` FOREIGN KEY (`exam`) REFERENCES `exam` (`id`);

--
-- Các ràng buộc cho bảng `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `fk_scores_exam` FOREIGN KEY (`exam`) REFERENCES `exam` (`id`),
  ADD CONSTRAINT `fk_scores_user` FOREIGN KEY (`user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
