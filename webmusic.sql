-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 10:45 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE SCHEMA `webmusic` ;
USE `webmusic`;



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `TenAlbum` text NOT NULL,
  `TheLoai` text NOT NULL,
  `idCS` int(11) NOT NULL,
  `NamPhatHanh` int(11) NOT NULL,
  `imgalbum` text NOT NULL,
  `LuotXem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `TenAlbum`, `TheLoai`, `idCS`, `NamPhatHanh`, `imgalbum`, `LuotXem`) VALUES
(1, 'Quên', 'Nhạc Trẻ', 17, 2017, 'quen.jpg', 2),
(2, 'Em Là Của Anh', 'Nhạc Trẻ', 18, 2017, 'em-la-cua-anh.jpg', 2),
(3, 'Vùng Lá Me bay', 'Trữ Tình', 21, 2017, 'vung-la-me-bay.jpg', 2),
(4, 'Đôi mắt Người Xưa', 'Bolero', 22, 2017, 'doi-mat-nguoi-xua.jpg', 2),
(5, 'Tình Khúc Vàng', 'Nhạc Trẻ', 23, 2017, 'tinh-khuc-vang.jpg', 2),
(6, 'Giây Phút Chia Xa', 'Nhạc Trẻ', 24, 2017, 'giay-phut-chia-xa.jpg', 2),
(7, 'Gửi Anh Xa Nhớ', 'Nhạc Trẻ', 20, 2018, 'gui-anh-xa-nho.jpg', 2),
(8, 'Ngắm Hoa Lệ Rơi', 'Nhạc Trẻ', 4, 2018, 'ngam-hoa-le-roi.jpg', 2),
(9, 'Đừng Hỏi Em', 'Nhạc Trẻ', 2, 2018, 'dung-hoi-em.jpg', 2),
(10, 'Có Em Chờ', 'Nhạc Trẻ', 16, 2018, 'co-em-cho.jpg', 2),
(11, 'Lạc Trôi', 'Nhạc Trẻ', 12, 2017, 'lac-troi.jpg', 2),
(12, 'Điều Anh Biết ', 'Nhạc Trẻ', 11, 2017, 'dieu-anh-biet.jpg', 2),
(13, 'Thương Mấy Cũng Là Người Dưng', 'Nhạc Trẻ', 3, 2017, 'thuong-may-cung-la-nguoi-dung.jpg', 2),
(14, 'Đi Để Trở Về', 'Nhac Trẻ', 6, 2017, 'di-de-tro-ve.jpg', 2),
(15, 'Mặt Trái Của Hạnh Phúc', 'Nhạc Trẻ', 1, 2017, 'mat-trai-cua-hanh-phuc.jpg', 2),
(16, 'Hỏi Thăm Nhau', 'Nhạc Trẻ', 8, 2017, 'hoi-tham-nhau.jpg', 2),
(17, 'Em Gái Mưa', 'Nhạc Trẻ', 13, 2017, 'em-gai-mua.jpg', 2),
(18, 'Cánh Hoa Tàn (Mẹ Chồng OST) ', 'Nhạc Trẻ', 13, 2017, 'canh-hoa-tan.jpg', 2),
(19, 'Đừng Cố Yêu Khi Tàn Phai', 'Nhạc Trẻ', 14, 2017, 'dung-co-yeu-khi-tan-phai.jpg', 2),
(20, 'Ta Còn Yêu Nhau', 'Nhạc Trẻ', 9, 2018, 'ta-con-yeu-nhau.jpg', 2),
(21, 'Ngày Em Đi', 'Trữ Tình', 22, 2018, 'ngay-em-di.jpg', 2),
(24, 'Đắp Mộ Cuộc Tình', 'Trữ Tình', 22, 1995, 'dap-mo-cuoc-tinh.jpg', 2),
(27, 'Quan Trọng Là Thần Thái', 'Rap Việt', 7, 2018, 'quan-trong-la-than-thai.jpg', 2),
(28, 'Từng Là Tất Cả', 'Rap Việt', 5, 2018, 'tung-la-tat-ca.jpg', 2),
(29, 'Quăng Tao Cái Boong ', 'Rap Việt', 10, 2017, 'quang-tao-cai-boong.jpg', 2),
(36, 'Look What You Made Me Do ', 'Pop', 29, 2017, 'look-what-you-made-me-do.jpg', 2),
(38, 'What Do You Mean?', 'Pop', 28, 2017, 'what-do-you-mean.jpg', 2),
(39, 'We Don''t Talk Any More', 'Pop', 27, 2017, 'we-don''t-talk-any-more.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE `baihat` (
  `id` int(250) NOT NULL,
  `TenBaiHat` text NOT NULL,
  `CaSiId` int(250) DEFAULT NULL,
  `NhacSiId` int(250) DEFAULT NULL,
  `TheLoaiId` int(250) DEFAULT NULL,
  `DuongDan` text NOT NULL,
  `Loi` text NOT NULL,
  `LuotNghe` int(11) NOT NULL,
  `Album` text NOT NULL,
  `PlaylistId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`id`, `TenBaiHat`, `CaSiId`, `NhacSiId`, `TheLoaiId`, `DuongDan`, `Loi`, `LuotNghe`, `Album`, `PlaylistId`) VALUES
(1, 'Duyên Phận', 1, 1, 9, '', '', 0, 'Mặt Trái Của Hạnh Phúc', 0),
(2, 'Niềm Tin Chiến Thắng', 2, 2, 15, '', '', 0, 'Đừng Hỏi Em', 0),
(3, 'yêu Một Người Không Sai ', 0, 0, 0, '', '17', 0, 'Đừng Hỏi Em', 0),
(4, '\nAnh Thì Không', 2, 4, 15, '', '', 0, 'Đừng Hỏi Em', 0),
(5, 'Đâu Chỉ Riêng Em', 2, 5, 15, '', '', 0, 'Đừng Hỏi Em', 0),
(6, 'Đừng Hỏi Em', 2, 6, 15, '', '', 0, 'Đừng Hỏi Em', 0),
(7, 'Cause I Love You', 3, 7, 15, '', '', 0, 'Thương Mấy Cũng Là Người Dưng', 0),
(8, 'Thương Mấy Cũng Là Người Dưng', 3, 8, 15, '', '', 0, 'Thương Mấy Cũng Là Người Dưng', 0),
(9, 'Như Phút Ban Đầu', 3, 9, 15, '', '', 0, 'Thương Mấy Cũng Là Người Dưng', 0),
(10, 'I Don''t Believe In You', 3, 10, 15, '', '', 0, 'Thương Mấy Cũng Là Người Dưng', 0),
(11, 'Chạm Khẽ Tim Anh Một Chút Thôi', 3, 11, 15, '', '', 0, 'Thương Mấy Cũng Là Người Dưng', 0),
(12, 'Dẫu Anh Không Nhìn Thấy', 4, 1, 15, '', '', 0, 'Ngắm Hoa Lệ Rơi', 0),
(13, 'Em Phải Quên Anh', 4, 2, 15, '', '', 0, 'Ngắm Hoa Lệ Rơi', 0),
(14, 'Ngắm Hoa Lệ Rơi', 4, 3, 15, '', '', 0, 'Ngắm Hoa Lệ Rơi', 0),
(15, 'Bên Nhau Thật Khó', 4, 4, 15, '', '', 0, 'Ngắm Hoa Lệ Rơi', 0),
(16, 'Người Anh Em', 4, 5, 15, '', '', 0, 'Ngắm Hoa Lệ Rơi', 0),
(17, 'Anh Là Của Em', 5, 6, 5, '', '', 0, 'Từng Là Tất Cả', 0),
(18, 'Thương', 5, 7, 5, '', '', 0, 'Từng Là Tất Cả', 0),
(19, 'Quan Trọng Là Thần Thái', 5, 8, 5, '', '', 0, 'Từng Là Tất Cả', 0),
(20, 'Làm Sao Đây', 5, 9, 5, '', '', 0, 'Từng Là Tất Cả', 0),
(21, 'Ai Ngờ Còn Thương', 5, 10, 5, '', '', 0, 'Từng Là Tất Cả', 0),
(22, 'Cạn Cả Nước Mắt', 5, 11, 5, '', '', 0, 'Từng Là Tất Cả', 0),
(23, 'Xin Đừng Lặng Im', 6, 11, 15, '', '', 0, 'Đi Để Trở Về', 0),
(24, 'Phía Sau Một Cô Gái', 6, 11, 15, '', '', 0, 'Đi Để Trở Về', 0),
(25, 'Đi Để Trở Về', 6, 12, 15, '', '', 0, 'Đi Để Trở Về', 0),
(26, 'Anh Đã Quen Với Cô Đơn', 6, 13, 15, '', '', 0, 'Đi Để Trở Về', 0),
(27, 'Vinh Quang Đang Chờ Ta', 6, 14, 15, '', '', 0, 'Đi Để Trở Về', 0),
(28, 'Đi Và Yêu', 6, 15, 15, '', '', 0, 'Đi Để Trở Về', 0),
(29, 'Chuyến Đi Của Năm (Đi Để Trở Về 2)', 6, 16, 15, '', '', 0, 'Đi Để Trở Về', 0),
(30, 'Từng Ngày Em Mơ Về Anh', 6, 17, 15, '', '', 0, 'Đi Để Trở Về', 0),
(31, 'Vài Lần Đón Đưa', 6, 18, 15, '', '', 0, 'Đi Để Trở Về', 0),
(32, 'Ngày Mai Em Đi', 6, 19, 15, '', '', 0, 'Đi Để Trở Về', 0),
(33, 'Đếm Ngày Xa Em', 7, 20, 15, '', '', 0, 'Quan Trọng Là Thần Thái', 0),
(34, 'Yêu Không Nghỉ Phép', 7, 21, 15, '', '', 0, 'Quan Trọng Là Thần Thái', 0),
(35, 'Yêu Là Tha Thu (Em Chưa 18 OST)', 7, 22, 15, '', '', 0, 'Quan Trọng Là Thần Thái', 0),
(36, 'Thấy Là Yêu Thương', 7, 6, 15, '', '', 0, 'Quan Trọng Là Thần Thái', 0),
(37, 'Và Như Thế', 7, 7, 15, '', '', 0, 'Quan Trọng Là Thần Thái', 0),
(38, 'Quan Trọng Là Thần Thái', 7, 8, 15, '', '', 0, 'Quan Trọng Là Thần Thái', 0),
(39, 'Em Chưa 18 (Em Chưa 18 OST)', 7, 9, 15, '', '', 0, 'Quan Trọng Là Thần Thái', 0),
(40, 'Yêu Đi Đừng Sợ', 7, 10, 15, '', '', 0, 'Quan Trọng Là Thần Thái', 0),
(41, 'Não Cá Vàng', 7, 11, 15, '', '', 0, 'Quan Trọng Là Thần Thái', 0),
(42, 'Anh Không Đòi Quà', 7, 12, 15, '', '', 0, 'Quan Trọng Là Thần Thái', 0),
(43, 'Em Nói Em Chán Yêu Vội Vàng', 8, 13, 15, '', '', 0, 'Hỏi Thăm Nhau', 0),
(44, 'Anh Sẽ Yêu Người Ấy Hơn Em', 8, 14, 15, '', '', 0, 'Hỏi Thăm Nhau', 0),
(45, 'Em Thật Là', 8, 15, 15, '', '', 0, 'Hỏi Thăm Nhau', 0),
(46, 'Hỏi Thăm Nhau', 8, 16, 15, '', '', 0, 'Hỏi Thăm Nhau', 0),
(47, 'Kết Thúc Lâu Rồi', 8, 18, 15, '', '', 0, 'Hỏi Thăm Nhau', 0),
(48, 'Anh Sẽ Yêu Người Ấy Hơn Em', 8, 19, 15, '', '', 0, 'Hỏi Thăm Nhau', 0),
(49, 'Vợ Là Nhất', 8, 20, 15, '', '', 0, 'Hỏi Thăm Nhau', 0),
(50, 'Ta Còn Yêu Nhau', 9, 21, 15, '', '', 0, 'Ta Còn Yêu Nhau', 0),
(51, 'Ánh Nắng Của Anh (Chờ Em Đến Ngày Mai OST)', 9, 22, 15, '', '', 0, 'Ta Còn Yêu Nhau', 0),
(52, 'Năm Ấy', 9, 23, 15, '', '', 0, 'Ta Còn Yêu Nhau', 0),
(53, 'Vỡ (Siêu Sao Siêu Ngố OST)', 9, 24, 15, '', '', 0, 'Ta Còn Yêu Nhau', 0),
(54, 'Chỉ Một Câu', 9, 25, 15, '', '', 0, 'Ta Còn Yêu Nhau', 0),
(55, 'Giấu Mặt', 9, 26, 15, '', '', 0, 'Ta Còn Yêu Nhau', 0),
(56, 'Cũng Đành Thôi', 9, 27, 15, '', '', 0, 'Ta Còn Yêu Nhau', 0),
(57, 'Niệm Khúc Cuối', 9, 28, 15, '', '', 0, 'Ta Còn Yêu Nhau', 0),
(58, 'Quăng Tao Cái Boong', 10, 1, 5, '', '', 0, 'Quăng Tao Cái Boong', 0),
(59, 'Mình Cưới Nhau Đi', 10, 28, 5, '', '', 0, 'Quăng Tao Cái Boong', 0),
(60, 'Quăng Tao Cái Boong', 10, 3, 5, '', '', 0, 'Quăng Tao Cái Boong', 0),
(61, 'Cho Họ Ghét Đi Em', 10, 4, 5, '', '', 0, 'Quăng Tao Cái Boong', 0),
(62, 'Mơ Đi Bay (Royal D Remix)', 10, 5, 5, '', '', 0, 'Quăng Tao Cái Boong', 0),
(63, 'Quăng Tao Cái Boong (Whisky Remix)', 10, 6, 5, '', '', 0, 'Quăng Tao Cái Boong', 0),
(64, 'Bởi Vì Em Hết Yêu Anh', 11, 7, 15, '', '', 0, 'Điều Anh Biết', 0),
(65, 'Điều Anh Biết', 11, 8, 15, '', '', 0, 'Điều Anh Biết', 0),
(66, 'Làm Vợ Anh Nhé', 11, 9, 15, '', '', 0, 'Điều Anh Biết', 0),
(67, 'Yêu Từ Phía Xa', 11, 10, 15, '', '', 0, 'Điều Anh Biết', 0),
(68, '1 2 3 4', 11, 11, 15, '', '', 0, 'Điều Anh Biết', 0),
(69, 'Thế Giới Thứ 4 (Tự Yêu Chính Mình)', 11, 11, 15, '', '', 0, 'Điều Anh Biết', 0),
(70, 'Điều Duy Nhất Cho Em', 11, 11, 15, '', '', 0, 'Điều Anh Biết', 0),
(71, 'Anh Muốn Em Sống Sao', 11, 12, 15, '', '', 0, 'Điều Anh Biết', 0),
(72, 'Chuyện Anh Vẫn Chưa Kể', 11, 13, 15, '', '', 0, 'Điều Anh Biết', 0),
(73, 'Có Được Không Em', 11, 14, 15, '', '', 0, 'Điều Anh Biết', 0),
(74, 'Lạc Trôi', 12, 15, 15, '', '', 0, 'Lạc Trôi', 0),
(75, 'Nơi Này Có Anh', 12, 16, 15, '', '', 0, 'Lạc Trôi', 0),
(76, 'Buông Đôi Tay Nhau Ra', 12, 17, 15, '', '', 0, 'Lạc Trôi', 0),
(77, 'Tập Sống Không Có Em', 12, 18, 15, '', '', 0, 'Lạc Trôi', 0),
(78, 'Như Ngày Hôm Qua', 12, 19, 15, '', '', 0, 'Lạc Trôi', 0),
(79, 'Âm Thầm Bên Em', 12, 20, 15, '', '', 0, 'Lạc Trôi', 0),
(80, 'Mãi Yêu Em', 12, 21, 15, '', '', 0, 'Lạc Trôi', 0),
(81, 'Chắc Ai Đó Sẽ Về', 12, 22, 15, '', '', 0, 'Lạc Trôi', 0),
(82, 'Em Gái Mưa', 13, 6, 15, '', '', 0, 'Em Gái Mưa', 0),
(83, 'Cho Em Gần Anh Thêm Chút Nữa', 13, 7, 15, '', '', 0, 'Em Gái Mưa', 0),
(84, 'Ta Còn Thuộc Về Nhau', 13, 8, 15, '', '', 0, 'Em Gái Mưa', 0),
(85, 'Ngốc', 13, 9, 15, '', '', 0, 'Em Gái Mưa', 0),
(86, 'Anh Thế Giới Và Em', 13, 10, 15, '', '', 0, 'Cánh Hoa Tàn (Mẹ Chồng OST)', 0),
(87, 'Người Từng Yêu Anh Rất Sâu Nặng', 13, 11, 15, '', '', 0, 'Cánh Hoa Tàn (Mẹ Chồng OST)', 0),
(88, 'Cánh Hoa Tàn (Mẹ Chồng OST)', 13, 17, 15, '', '', 0, 'Cánh Hoa Tàn (Mẹ Chồng OST)', 0),
(89, 'Tự Ngã Em Tự Đứng Lên', 14, 18, 15, '', '', 0, 'Đừng Cố Yêu Khi Tàn Phai', 0),
(90, 'Cười Chưa Chắc Đã Vui', 14, 19, 15, '', '', 0, 'Đừng Cố Yêu Khi Tàn Phai', 0),
(91, 'Nỗi Đau Tồn Tại Nơi Em', 14, 20, 15, '', '', 0, 'Đừng Cố Yêu Khi Tàn Phai', 0),
(92, 'Vì Anh Là Gió', 14, 21, 15, '', '', 0, 'Đừng Cố Yêu Khi Tàn Phai', 0),
(93, 'Mất Anh Trong Vòng Tay', 14, 22, 15, '', '', 0, 'Đừng Cố Yêu Khi Tàn Phai', 0),
(94, 'Không Còn Nợ Nhau', 14, 23, 15, '', '', 0, 'Đừng Cố Yêu Khi Tàn Phai', 0),
(95, 'Sống Xa Anh Chẳng Dễ Dàng', 15, 24, 15, '', '', 0, 'Yêu Một Người Vô Tâm', 0),
(96, 'Trái Tim Em Cũng Biết Đau', 15, 25, 15, '', '', 0, 'Yêu Một Người Vô Tâm', 0),
(97, 'Yêu Một Người Vô Tâm', 15, 26, 15, '', '', 0, 'Yêu Một Người Vô Tâm', 0),
(98, 'Anh Muốn Em Sống Sao', 15, 27, 15, '', '', 0, 'Yêu Một Người Vô Tâm', 0),
(99, 'Và Em Đã Biết Mình Yêu', 15, 1, 15, '', '', 0, 'Yêu Một Người Vô Tâm', 0),
(100, 'Lần Đầu', 15, 28, 15, '', '', 0, 'Yêu Một Người Vô Tâm', 0),
(101, 'Có Em Chờ', 16, 3, 15, '', '', 0, 'Có Em Chờ', 0),
(102, 'Ghen', 16, 4, 15, '', '', 0, 'Có Em Chờ', 0),
(103, 'Người Em Tìm Kiếm', 16, 5, 15, '', '', 0, 'Có Em Chờ', 0),
(104, 'Hôn Anh', 16, 6, 15, '', '', 0, 'Có Em Chờ', 0),
(105, 'Y.Ê.U (EDM Version)', 16, 7, 15, '', '', 0, 'Có Em Chờ', 0),
(106, 'Đừng Xin Lỗi Nữa', 16, 1, 15, '', '', 0, 'Có Em Chờ', 0),
(107, 'Quên', 17, 28, 15, '', '', 0, 'Quên', 0),
(108, 'Ngỡ', 17, 3, 15, '', '', 0, 'Quên', 0),
(109, 'Anh Yêu Em', 17, 4, 15, '', '', 0, 'Quên', 0),
(110, 'Yêu Lại Từ Đầu', 17, 5, 15, '', '', 0, 'Quên', 0),
(111, 'Suy Nghĩ Trong Anh', 17, 6, 15, '', '', 0, 'Quên', 0),
(112, 'Từ Bỏ', 17, 7, 15, '', '', 0, 'Quên', 0),
(113, 'Em Là Của Anh', 18, 1, 15, '', '', 0, 'Em Là Của Anh', 0),
(114, 'Con Bướm Xuân', 18, 28, 15, '', '', 0, 'Em Là Của Anh', 0),
(115, 'Chúc Mừng Năm Mới', 18, 3, 15, '', '', 0, 'Em Là Của Anh', 0),
(116, 'Không Cảm Xúc', 18, 4, 15, '', '', 0, 'Em Là Của Anh', 0),
(117, 'Còn Lại Gì Sau Cơn Mưa', 18, 5, 15, '', '', 0, 'Em Là Của Anh', 0),
(118, 'Nơi Ấy Con Tìm Về', 18, 6, 15, '', '', 0, 'Em Là Của Anh', 0),
(119, 'Cớ Sao Giờ Lại Chia Xa', 20, 9, 15, '', '', 0, 'Gửi Anh Xa Nhớ', 0),
(120, 'Mình Yêu Nhau Đi', 20, 10, 15, '', '', 0, 'Gửi Anh Xa Nhớ', 0),
(121, 'Gửi Anh Xa Nhớ', 20, 11, 15, '', '', 0, 'Gửi Anh Xa Nhớ', 0),
(122, 'Nói Thương Nhau Thì Đừng Làm Trái Tim Em Đau', 20, 17, 15, '', '', 0, 'Gửi Anh Xa Nhớ', 0),
(123, 'Chỉ Là Em Giấu Đi', 20, 18, 15, '', '', 0, 'Gửi Anh Xa Nhớ', 0),
(124, 'Em Muốn', 20, 19, 15, '', '', 0, 'Gửi Anh Xa Nhớ', 0),
(125, 'Vâng Anh Đi Đi', 20, 20, 15, '', '', 0, 'Gửi Anh Xa Nhớ', 0),
(126, 'Đêm Giao Thừa Nghe Bài Vọng Cổ', 21, 21, 14, '', '', 0, 'Vùng Lá Me Bay', 0),
(127, 'Vùng Lá Me Bay', 21, 22, 14, '', '', 0, 'Vùng Lá Me Bay', 0),
(128, 'Vì Lòng Còn Thương', 21, 9, 14, '', '', 0, 'Vùng Lá Me Bay', 0),
(129, 'Sau Lần Hẹn', 21, 10, 14, '', '', 0, 'Vùng Lá Me Bay', 0),
(130, 'Hoa Đào Năm Trước', 21, 11, 14, '', '', 0, 'Vùng Lá Me Bay', 0),
(131, 'Tình Yêu Trả Lại Trăng', 21, 17, 14, '', '', 0, 'Vùng Lá Me Bay', 0),
(132, 'Nếu Chúng Mình Cách Trở', 22, 18, 9, '', '', 0, 'Đôi Mắt Người Xưa', 0),
(133, 'Liên Khúc Thành Phố Buồn, Giọt Lệ Sầu', 22, 19, 9, '', '', 0, 'Đôi Mắt Người Xưa', 0),
(134, 'Đắp Mộ Cuộc Tình', 22, 20, 9, '', '', 0, 'Đôi Mắt Người Xưa', 0),
(135, 'Lại Nhớ Người Yêu', 22, 21, 9, '', '', 0, 'Đôi Mắt Người Xưa', 0),
(136, 'Đôi Mắt Người Xưa', 22, 22, 9, '', '', 0, 'Đôi Mắt Người Xưa', 0),
(137, 'Người Yêu Cô Đơn', 22, 6, 9, '', '', 0, 'Đôi Mắt Người Xưa', 0),
(138, 'Tình Đơn Phương', 23, 9, 15, '', '', 0, 'Tình Khúc Vàng', 0),
(139, 'Tình Khúc Vàng', 23, 10, 15, '', '', 0, 'Tình Khúc Vàng', 0),
(140, 'Kiếp Ve Sầu', 23, 11, 15, '', '', 0, 'Tình Khúc Vàng', 0),
(141, 'Ảo Mộng Tình Yêu', 23, 17, 15, '', '', 0, 'Tình Khúc Vàng', 0),
(142, 'Mưa Buồn', 23, 18, 15, '', '', 0, 'Tình Khúc Vàng', 0),
(143, 'Mưa Bụi 2', 23, 19, 15, '', '', 0, 'Tình Khúc Vàng', 0),
(144, 'Giới Hạn Nào Cho Chúng Ta', 24, 20, 15, '', '', 0, 'Giây Phút Chia Xa', 0),
(145, 'Giây Phút Chia Xa', 24, 21, 15, '', '', 0, 'Giây Phút Chia Xa', 0),
(146, 'Bài Ca Tết Cho Em', 24, 22, 15, '', '', 0, 'Giây Phút Chia Xa', 0),
(147, 'Xin Lỗi Tình Yêu', 24, 9, 15, '', '', 0, 'Giây Phút Chia Xa', 0),
(148, 'Bình Minh Sẽ Mang Em Đi', 24, 10, 15, '', '', 0, 'Giây Phút Chia Xa', 0),
(149, 'Ta Đi Tìm Em', 24, 11, 15, '', '', 0, 'Giây Phút Chia Xa', 0),
(150, 'Tình Ơi Xin Ngủ Yên', 24, 17, 15, '', '', 0, 'Giây Phút Chia Xa', 0),
(151, 'Tìm Lại Bầu Trời', 25, 28, 15, '', '', 0, 'Tìm Lại Bầu Trời', 0),
(152, 'Nắm Lấy Tay Anh', 25, 3, 15, '', '', 0, 'Tìm Lại Bầu Trời', 0),
(153, 'Anh Nhớ Em', 25, 4, 15, '', '', 0, 'Tìm Lại Bầu Trời', 0),
(154, 'Vì Người Không Xứng Đáng', 25, 5, 15, '', '', 0, 'Tìm Lại Bầu Trời', 0),
(155, 'Cầu Vồng Khuyết', 25, 6, 15, '', '', 0, 'Tìm Lại Bầu Trời', 0),
(156, 'Save Me', 26, 31, 17, '', '', 0, 'Tìm Lại Bầu Trời', 0),
(157, 'We Don''t Talk Anymore', 27, 32, 17, '', '', 0, 'We Don''t Talk Anymore (Heyder Remix)', 0),
(158, 'Good For You', 27, 32, 17, '', '', 0, 'We Don''t Talk Anymore (Heyder Remix)', 0),
(159, 'The Heart Wants What It Wants', 27, 32, 17, '', '', 0, 'We Don''t Talk Anymore (Heyder Remix)', 0),
(160, 'We Don''t Talk Anymore (Heyder Remix)', 27, 32, 17, '', '', 0, 'We Don''t Talk Anymore (Heyder Remix)', 0),
(161, 'Love You Like A Love Song', 27, 32, 17, '', '', 0, 'We Don''t Talk Anymore (Heyder Remix)', 0),
(162, 'Same Old Love', 27, 32, 17, '', '', 0, 'We Don''t Talk Anymore (Heyder Remix)', 0),
(163, 'Love Yourself', 28, 33, 17, '', '', 0, 'What Do You Mean?', 0),
(164, 'What Do You Mean?', 28, 33, 17, '', '', 0, 'What Do You Mean?', 0),
(165, 'Sorry', 28, 33, 17, '', '', 0, 'What Do You Mean?', 0),
(166, 'Cold Water', 28, 33, 17, '', '', 0, 'What Do You Mean?', 0),
(167, 'Let Me Love You', 28, 33, 17, '', '', 0, 'What Do You Mean?', 0),
(168, 'Despacito (Remix)', 28, 33, 17, '', '', 0, 'What Do You Mean?', 0),
(169, 'Baby', 28, 33, 17, '', '', 0, 'What Do You Mean?', 0),
(170, 'Look What You Made Me Do', 29, 30, 17, '', '', 0, 'Look What You Made Me Do', 0),
(171, 'Blank Space', 29, 30, 17, '', '', 0, 'Look What You Made Me Do', 0),
(172, 'Shake It Off', 29, 30, 17, '', '', 0, 'Look What You Made Me Do', 0),
(173, 'Gorgeous', 29, 30, 17, '', '', 0, 'Look What You Made Me Do', 0),
(174, 'Wildest Dreams', 29, 30, 17, '', '', 0, 'Look What You Made Me Do', 0),
(175, 'I Knew You Were Trouble', 29, 29, 17, '', '', 0, 'Look What You Made Me Do', 0),
(176, 'You Belong With Me', 29, 29, 17, '', '', 0, 'Look What You Made Me Do', 0),
(177, 'Teardrops On My Guitar', 29, 29, 17, '', '', 0, 'Look What You Made Me Do', 0),
(178, 'Ấm', 30, 10, 5, '', '', 0, 'Xoá Đi Quá Khứ', 0),
(179, 'Vì Tui Ế', 30, 11, 5, '', '', 0, 'Xoá Đi Quá Khứ', 0),
(180, 'Đừng Thức Khuya Nữa', 30, 17, 5, '', '', 0, 'Xoá Đi Quá Khứ', 0),
(181, 'Có Bao Giờ Không Anh', 30, 28, 5, '', '', 0, 'Xoá Đi Quá Khứ', 0),
(182, 'Xoá Đi Quá Khứ', 30, 3, 5, '', '', 0, 'Xoá Đi Quá Khứ', 0),
(183, 'Yêu Xa', 30, 10, 5, '', '', 0, 'Xoá Đi Quá Khứ', 0),
(184, 'Phiền (Cover)', 30, 11, 5, '', '', 0, 'Xoá Đi Quá Khứ', 0),
(185, 'Sẽ (Cover)', 30, 17, 5, '', '', 0, 'Xoá Đi Quá Khứ', 0),
(186, 'Ngày Hôm Qua Ngày Hôm Nay (Cover)', 30, 28, 5, '', '', 0, 'Xoá Đi Quá Khứ', 0),
(187, 'Cô đơn', 31, 3, 5, '', '', 0, 'Cô đơn', 0),
(188, 'Một Điếu', 33, 10, 5, '', '', 0, 'Hai Thế Giới', 0),
(189, 'Hai Thế Giới', 33, 11, 5, '', '', 0, 'Hai Thế Giới', 0),
(190, 'Buddha', 33, 17, 5, '', '', 0, 'Hai Thế Giới', 0),
(191, 'Emmmmm', 33, 28, 5, '', '', 0, 'Hai Thế Giới', 0),
(192, 'Bay Thật Xa', 33, 3, 5, '', '', 0, 'Hai Thế Giới', 0),
(193, 'nnnnnnnnnnnnnnn', 2, 1, 17, '', ' ', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `baihat_album`
--

CREATE TABLE `baihat_album` (
  `idBH` int(11) NOT NULL,
  `idAB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baihat_album`
--

INSERT INTO `baihat_album` (`idBH`, `idAB`) VALUES
(130, 3),
(131, 3),
(2, 9),
(3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `casi`
--

CREATE TABLE `casi` (
  `id` int(250) NOT NULL,
  `TenCaSi` text NOT NULL,
  `NgaySinh` date NOT NULL,
  `QueQuan` text NOT NULL,
  `img` text NOT NULL,
  `TieuSu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `casi`
--

INSERT INTO `casi` (`id`, `TenCaSi`, `NgaySinh`, `QueQuan`, `img`, `TieuSu`) VALUES
(1, 'JangMi', '1983-05-05', 'Tây Ninh', 'jang-mi.jpg', 'Jang Mi (nghĩa tiếng Hàn là Hoa Hồng) tên thật là Bùi Bảo Trang (sinh ngày 22 tháng 3 năm 1996) tại Cà Mau. Bảo Trang là con út trong gia đình có 2 anh em. Nhà Trang ở xã Tân Tiến, huyện Đầm Dơi, tỉnh Cà Mau. Jang Mi được gọi là "Hot Girl Xe Buýt" sau khi một đoạn clip "quay lén" cô hát trên một chuyến đi xe buýt được chia sẻ trên mạng xã hội Faceboo.Cô gái sinh năm 1996 cũng cho hay, giọng hát của mình khá phk nhận được sự quan tâm chú ý của đông đảo cư dân mạng, với hơn 340.000 lượt theo dõi, hơn 19.000 lượt thích và hàng trăm lượt chia sẻ, bình luận. Cô còn có tình yêu đặc biệt với dòng nhạc Bolero và ngày càng được yêu mến với những bản cover ngọt ngào, sâu lắng, đi vào lòng ngườiù hợp những bản nhạc bolero nên thường xuyên cover thể loại nhạc này. Bên cạnh đó, cô cũng mong muốn theo đuổi dòng nhạc ballad nhẹ nhàng để có thể khoe được giọng ca của mình. Trong thời gian tới Jang Mi Bảo Trang hứa hẹn sẽ tiếp tục cố gắng luyện giọng và tham gia một cuộc thi âm nhạc nào đó để phát triển sự nghiệp. Cô gái trẻ cũng khẳng định nếu có năng lực thì chắc chắn cô sẽ được fan hâm mộ yêu quý và không sợ bị lu mờ theo thời gian. Các album đã phát hành: Đừng Tin Em Mạnh Mẽ (Single) (2016) Mặt Trái Của Hạnh Phúc (2017)'),
(2, 'Mỹ Tâm', '1983-06-05', 'Quảng Nam', 'my-tam.jpg', 'Mỹ Tâm từng tốt nghiệp thủ khoa trung cấp Nhạc viện khoa thanh nhạc. - Đã sáng tác: Đã sáng tác: Mãi yêu, Nụ Hôn Bất Ngờ, Vì Đâu, Nhớ, Nhịp Đập Dại Khờ, Dường Như Ta Đã, Tình Yêu Chưa Nói, Như Em Đợi Anh, Khi Tình Yêu Trở Lại, Vũ Điệu France Cho Anh, Ngày Anh Ra Đi, ĐỢi Yêu, Cho Một Tình Yêu, Xin Lỗi, Không Yêu Không Yêu Vào hệ Trung cấp Nhạc viện, khoa Thanh nhạc, Mỹ Tâm được học trực tiếp với thầy Quốc Trụ, một giảng viên uy tín. Quãng thời gian 1997 - 1998, Mỹ Tâm tham gia liên tiếp những hội diễn văn nghệ, các cuộc thi giọng hát hay của quận, của thành phố. Tháng 4 năm 1998, Mỹ Tâm đoạt giải nhất gần như đồng thời ở hai hội thi đơn ca quận Tân Bình và quận 6. Tháng 11 năm ấy, giải nhất Giọng ca vàng báo Mực Tím lại đến với Tâm. Tháng giêng năm 1999, Mỹ Tâm trở thành ca sĩ độc quyền của Vafaco. Bản thu âm đầu tiên của Tâm được thực hiện dưới sự chỉ đạo của nhạc sĩ Nguyễn Hà. Ca khúc Nhé anh vừa là bài tập thu thanh đầu đời vừa là bài hát khắc dấu một Mỹ Tâm dồi dào ấn tượng, giàu nội lực và phong phú về sức bật. Nhạc sĩ Nguyễn Hà đã hướng dẫn Mỹ Tâm nhiều nguyên tắc quan trọng trong chuyên môn, đã hình thành ý thức chuyên nghiệp cho cô một cách hiệu quả. Giữa năm 2000, vừa hết hợp đồng làm việc với Vafaco, Tâm ôm ấp nhiều mộng ước, nhiều dự án độc lập. Cũng trong thời điểm này, Mỹ Tâm đã viết ca khúc đầu tay của mình, đặt tên là Mãi yêu. Quá trình sáng tác có sự trợ lực của nhạc sĩ Nguyễn Quang, chỉ huy ban nhạc Trung tâm Ca nhạc nhẹ. Mỹ Tâm đã đem bài hát này, cùng với I love you (cover lại ca khúc Celine Dion) vào phần thi của mình trong Liên hoan giọng ca vàng châu Á (Thượng Hải, Trung Quốc) và cô đã đoạt Huy chương đồng. Tháng 6/2001, Mỹ Tâm tốt nghiệp Trung cấp trường Nhạc với số điểm thủ khoa. Và công chúng đã bắt đầu nhắc nhiều đến To love you more, Nhé anh, Yêu dại khờ, Mãi yêu và đặc biệt là Tóc nâu môi trầm như những thành công của riêng Tâm. Từ năm 2002 trở đi, hàng loạt hit gắn liền với cái tên Mỹ Tâm như: Ước Gì, Họa Mi Tóc Nâu, Tình Lỡ Cách Xa, Tình Em Còn Mãi, Nụ Hôn Bất Ngờ, Nhớ, Dường Như Ta Đã,... đưa Mỹ Tâm lên vị trí nữ ca sĩ được yêu thích nhất. Năm 2006, Mỹ Tâm hợp tác cùng ekip Hàn Quốc thực hiện album Vol.5 mang tên "Vút Bay" đạt chất lượng quốc tế với mức đầu tư ước tính hơn 100.000 USD. Các ca khúc được yêu thích trong album như: Bí Mật, Tình Yêu Chưa Nói, Giọt Sương,... 2007, Mỹ Tâm ra mắt công ty của riêng mình mang tên MT Entertainment cho chính cô làm giám đốc. Cùng trong năm này, Mỹ Tâm cho ra mắt sản phẩm nước hoa của mình mang tên My Time. Tháng 04/2008, Mỹ Tâm công bố dự án Thời Gian Và Tôi và album "Trở Lại" mở đường nhận được nhiều ý kiến khen chê khác nhau. Đến tháng 07, Mỹ Tâm cho phát hành album Vol.7 mang tên "Nhịp Đập" (To The Beat), đây là bước thứ 2 trong dự án Thời Gian Và Tôi. 09/2008, Mỹ Tâm Live Concert Tour mang tên "Sóng Đa Tần" được mở đầu tại Tp.HCM dưới trời mưa tầm tã, nhưng không vì thế mà Mỹ Tâm không hát. Các buổi diễn sau đấy ở Hà Nội, Đà Nẵng, Cần Thơ,... đều diễn ra suôn sẽ. Mỹ Tâm Foundation là quỹ từ thiện mà Mỹ Tâm Entertainment cùng với các Fan của cô lập nên nhằm giúp đỡ những hoàn cảnh khó khăn, các em nhỏ mồ côi,... Hành động tích cực của Mỹ Tâm nhận được nhiều thiện cảm từ khán giả và nhất là mới đây chương trình từ thiện mang tên "Nâng Bước Ngày Mai" được Mỹ Tâm thực hiện rất thành công tại 2 nơi: Tp.HCM và Đà Nẵng, giúp đỡ những nạn nhân của trận bão vừa xảy ra không lâu tại Miền Trung - quê hương của Mỹ Tâm. 09/2009, Mỹ Tâm bị cuốn vào tin đồn với nhạc sĩ Hà Dũng. Với thái độ dứt khoát, Mỹ Tâm phản bác tất cả những tuyên bố được Mỹ Tâm cho là không có thật. Hiện tại Mỹ Tâm đang thu âm cho album mới. Album đã phát hành - 2001: CD Vol.1 Mãi yêu (tháng 5) - 2002: CD Single Cây đàn sinh viên (tháng 3), CD Single Hát với dòng sông (tháng 5), CD Single Ban mai tình yêu (tháng 5), CD Vol.2 Đâu chỉ riêng em (tháng 11) - 2003: CD Vol.3 Ngày ấy & Bây giờ- Yesterday & Now (tháng 6), VCD Mãi yêu (tháng 7) - 2004: VCD-DVD liveshow Ngày ấy & Bây giờ (tháng 8), VCD karaoke liveshow Ngày ấy & Bây giờ (tháng 12) - 2005: CD Vol.4 Hoàng hôn thức giấc- The color of my life (tháng 4) - 2006: VCD-DVD liveshow Sức mạnh của những ước mơ, CD Vol.4,5 Dường như ta đã (tháng 2), CD Vol.5 Vút bay- FLy (tháng 12) - 2008: CD Vol.6 Trở lại (tháng 4), CD Vol.7 Nhịp đập- To the beat (tháng 9) - 2009: DVD live tour concert Sóng đa tần (tháng 4) - 12/2010: CD Single Cho một tình yêu (bộ phim cùng tên) - 2011: Tháng 6/2011 phát hành DVD liveshow Kỷ niệm 10 năm ca hát Melodies of time (tháng 1 &3) Liveshow đã thực hiện - 2011: Tổ chứ liveshow "10 Years Anniversary - Melodies of Time" tại tp. HCM (14/01/2011) và tại Hà Nội (16/03/2011) nằm trong dự án Những giai điệu của thời gian. - 2001: "Cùng Sunsilk tỏa sáng ước mơ" tại Thành phố Hồ Chí Minh, Hà Nội và Đà Nẵng - 2004: "Yesterday & Now" tại Thành phố Hồ Chí Minh và Hà Nội với mức kinh phí đầu tư 3 tỉ, mức kinh phí lớn nhất tại thời điểm đó (tháng 3 và 4). "Quê hương tuổi thơ tôi" nằm trong chuỗi chương trình "Âm nhạc và những người bạn" do Đài truyền hình Việt Nam- VTV3 tổ chức tại quê nhà Đà Nẵng của Mỹ Tâm (tháng 9). "Sống hết mình" tại Thành phố Hồ Chí Minh và Hà Nội (tháng 12) - 2005: "Sức mạnh của những ước mơ" tại một số trường đại học ở Hà Nội, Thành phố Hồ Chí Minh, Đà Nẵng, Đà Lạt và Cần Thơ. Chương trình được tổ chức miễn phí dành cho sinh viên (tháng 9 - 10) - 2008: "Sóng đa tần" tại Thành phố Hồ Chí Minh, Hà Nội và Cần thơ nằm trong dự án "Thời gian và tôi" (tháng 9 - 10) Giải thưởng - Giải A "Liên hoan tiếng hát Miền Trung và Tây Nguyên" năm 1996 - Giải nhất đơn ca "Xuân 1997" toàn thành phố Đà Nẵng năm 1997 - Huy chương Vàng giọng hát hay Xuân 1997 - Giải nhất cuộc thi "Giọng ca hay Quận Tân Bình, Thành phố Hồ Chí Minh năm 1998" - Giải nhất cuộc thi "Giọng ca hay Quận 6, Thành phố Hồ Chí Minh năm 1998" - Giải nhất cuộc thi "Giọng ca vàng báo Mực Tím 1998" - Giải nhất "Hội diễn văn nghệ ngành Giáo dục Thành phố Hồ Chí Minh 1999 - 2000" - Huy chương Đồng "Liên hoan âm nhạc Châu Á" tại Thượng Hải, Trung Quốc năm 2000 - Đài truyền hình Việt Nam bình chọn là "Nhân vật tiêu biểu trong năm 2001" - "Top 5 ca sĩ triển vọng - Giải thưởng âm nhạc Hoa Học Trò lần I" do bạn đọc báo Hoa Học Trò bình chọn năm 2001 - "Gương mặt được yêu thích năm 2002" của Câu Lạc Bộ Bạn Trẻ Chiều Thứ 5 - Nhà Hát Bến Thành - Tạp chí Đẹp bình chọn là "Ca sĩ Trẻ tài năng" các năm 2002, 2003 - Giải Mai Vàng các năm: 2002, 2003 và 2008 do báo Người Lao Động tổ chức bình chọn - "Ca sĩ được yêu thích nhất trong năm" của chương trình "Làn Sóng Xanh" do Đài Tiếng Nói Nhân Dân Thành phố Hồ Chí Minh tổ chức bình chọn từ 2002 đến 2008. - Giải "Ca sĩ được yêu thích nhất" của chương trình VTV Bài Hát Tôi Yêu lần I năm 2002 - Giải "Videoclip được khán giả yêu thích nhất" của chương trình VTV Bài Hát Tôi Yêu lần II năm 2003 - Giải "Videoclip do Hội đồng Nghệ thuật bình chọn" của chương trình VTV Bài Hát Tôi Yêu lần II năm 2003 - Giải "Ca sĩ được yêu thích nhất" do Vietnamnet bình chọn năm 2003 - Giải thưởng nghệ sĩ ăn mặc đẹp nhất do viện mẫu Fadin bình chọn năm 2003 - Giải thưởng Trái Tim Việt Nam 2003 - Giải "Ngôi Sao Bạch Kim - Nữ ca sĩ được yêu thích nhất năm 2003" của báo Màn Ảnh Sân Khấu tổ chức bình chọn - Cúp vàng "Vì sự phát triển cộng đồng" năm 2004 của Công ty Văn Hóa Hà Nội và Báo Cộng Đồng bình chọn - Giải thưởng "Lá Phong" do Tổng Lãnh Sự Canada trao tặng. - Giải Hoa Hồng Vàng do khán giả kênh truyền hình VTC bình chọn 2006 - Giải ca sĩ và giải nhạc sĩ được yêu thích nhất trong năm 2006 của chương trình Làn Sóng Xanh - Đoạt giải Ngôi Sao Bạch Kim 2006:"Nữ ca sĩ có giọng hát xuất sắc nhất" - Đoạt giải thưởng HTV Award của Đài truyền hình TP.HCM - giải nữ ca sĩ được yêu thích nhất năm 2006 và 2007 - Đoạt giải Ca Sĩ Được Yêu Thích Nhất 10 Năm Làn Sóng Xanh - Giải Cống Hiến của năm cho Ca Sĩ của năm do báo Thể thao và Văn hóa tổ chức năm 2008.'),
(3, 'Noo Phước Thịnh', '1987-08-09', 'An Giang', 'noo-phuoc-thinh.jpg', 'Tên đầy đủ của Noo Phước Thịnh là Nguyễn Phước Thịnh. Anh giải thích rằng do anh sinh cận ngày Noel nên ba mẹ anh lấy luôn chữ Noel làm tên gọi ở nhà. Tuy nhiên, chữ Noel hơi khó đọc đối với một số người lớn tuổi trong nhà, nên mọi người chuyển sang gọi Nô. Rồi ba mẹ anh lại thấy chữ Nô mang tính "phủ định" quá, nên quyết định thêm một chữ O nữa thành Noo. Bằng khả năng của mình, với chất giọng lạ theo hướng nam trầm, cách trình diễn nhiều cảm xúc trong các bài hát trẻ trung, dễ nghe, ấm, anh đã gây ngạc nhiên cho khán giả và chỉ trong vòng hơn 6 tháng kể từ khi bước chân vào làng âm nhạc, cái tên Noo Phước Thịnh đã dần khẳng định được dấu ấn trong lòng các khán giả trẻ. và được coi là ca sĩ trẻ có triển vọng và thành công sớm. Các album đã phát hành: 1. Album Ba chấm 2. Single Đổi thay 3. Single Nỗi nhớ đầy vơi 4. Album "lạc bước trong đêm" phát hành ngày 21/11/2011 5. Mini album EM phát hành ngày 22/11/2012 Năm 2013, Noo ra mắt MV Chờ ngày mưa tan cùng với rapper Tonny Việt. Trong đó, phân nửa MV được quay tại Hàn Quốc. Bài hát cũng nhanh chóng trở thành hit, thống trị các bảng xếp hạng thời điểm đó. Tháng 9, anh ra mắt single Đừng nhìn lại theo hơi hướng nhạc Dance, đánh dấu sự thay đổi về phong cách âm nhạc của Noo. Năm 2014, Noo được làm đại sứ du lịch Nhật Bản. Và liên tiếp trong 3 năm, anh phát hành 3 sản phẩm Mãi mãi bên nhau (2014) quay ở Ōsaka, Really Love You (2015) ở Kanazawa và Như phút ban đầu (2016) ở Kyushu. Tháng 8 năm 2015, Noo Phước Thịnh ra mắt phim ca nhạc Chuyện tình Maldives hợp tác cùng Thủy Tiên được quay tại Maldives. Năm 2016, Noo Phước Thịnh tham gia The Remix (Hòa âm ánh sáng) mùa 2 và trở thành quán quân. Cũng trong năm đó, anh làm huấn luyện viên cho Giọng hát Việt nhí (mùa 4). Năm 2017, Noo tiếp tục làm huấn luyện viên cho Giọng hát Việt (mùa 4). Tháng 9 năm 2017, Noo cho ra mắt ca khúc Chạm Khẽ Tim Anh Một Chút Thôi'),
(4, 'Châu Khải Phong', '1988-08-09', 'Tây Ninh', 'chau-khai-phong.jpg', 'Công ty đại diện: Hải Âu Entertainment Chều cao: 1m73 Cân nặng: 71kg Tài vặt: có thể sáng tác và chơi 2 loại nhạc cụ ghita va organ. Thần tượng: Bằng Kiều và Đàm vĩnh Hưng. Bất ngờ đã tạo tên tuổi bằng ca khúc Anh thích em như xưa hồi vào năm 2011, Châu Khải Phong đã nhanh chóng trở thành một cái tên rất ăn khách, đặc biệt là ở trên các sân khấu phía nam. Sau khi anh tốt nghiệp Đại học Văn hóa Nghệ thuật Quân đội, với những kiến thức về âm nhạc được học ở tại nhà trường cùng với niềm đam mê về ca hát, Châu Khải Phong đã về đầu quân cho công ty giải trí Hải Âu và cũng đã nhanh chóng gửi đến khán giả nhiều những sản phẩm âm nhạc chất lượng. Sau thành công của hàng loạt ca khúc như là Chỉ yêu mình em, Xin đừng cách xa, hay Nụ cười không vui,… Châu Khải Phong đã vừa tung ra album mới có tên gọi là Anh sẽ tập quên. Chỉ sau ít ngày cho ra mắt, album cũng đã nhanh chóng chiếm được những vị trí cao ở trên các bảng xếp hạng âm nhạc online và đã được công chúng đón nhận rất nhiệt tình. Hai album mới nhất của anh trong năm 2017 : Bên Nhau Thật Khó (Single) , Ngắm Hoa Lệ Rơi (Remix). Chia sẻ về dự định ở trong thời gian tới, chàng ca sĩ trẻ đã cho biết: “Sắp tới Phong cũng sẽ có một tour diễn xuyên Việt kỉ niệm 5 năm thành lập công ty Giải trí Hải Âu cùng với nhóm nhạc HKT, HKTM The Five, ca sỹ Phạm Trưởng… Được nghe thấy những tràng pháo tay cỗ vũ rất nồng nhiệt của khán giả ở trong các đêm diễn là niềm hạnh phúc lớn nhất với một ca sĩ trẻ như là Phong. Phong muốn cố gắng đến khi nào mà tất cả mọi người sẽ đều thấy được sự cố gắng của chính mình thì mới thôi…” Để có được vị trí như là hiện tại, Châu Khải Phong cũng đã có một quá trình lao động nghiêm túc và đã đầu tư tâm huyết, đam mê trong suốt thời gian dài. Các giải thưởng đạt được: - Giải 1 tiếng hát HSSV toàn quốc năm 2004 - Giải 2 sao mai khu vưc miền trung 2007 Các Album thành công của Châu Khải Phong: Bên Nhau Thật Khó (Single). Ngắm Hoa Lệ Rơi (Remix). Let’s Go. Chỉ Yêu Mình Em. Số Nghèo… Anh Sẽ Để Em Ra Đi. Xin Đừng Cách Xa. Anh Sẽ Tập Quên. Lời Chúc Không Thật. Châu Khải Phong Dance Remix.'),
(5, 'Karik', '1985-08-08', 'Hải Phòng', 'karik.jpg', 'Tham gia nhóm nhảy Freestyle năm 2006 và chính thức nghỉ vào cuối năm 2008 vì bị chấn thương tay phải ,sau vài tháng hồi phục lại nhưng vẫn không được hoàn thiện nên Karik đã nghỉ hẳn và chuyển sang con đường Rap để giải tỏa cảm xúc. Với Rap, Karik có thể nói lên bất cứ điều gì mình suy nghĩ và bộc lộ được tính cách bản thân 1 cách rõ ràng nhất, qua đó cũng có thể nói lên suy nghĩ của những người đồng tư tưởng. Bản thân Karik từng là 1 người khá ít nói và sống nội tâm nên vào những ngày đầu đến với Rap, các tác phẩm thường mang hơi hướng tâm trạng hay nói về cuộc sống là nhiều. Dần dần anh cởi mở hơn, tự tin hơn khi được nhiều người biết đến , đón nhận và yêu thích. Càng dành nhiều thời gian tìm hiểu và làm việc với Rap, Karik càng đam mê.Rap đã mang anh đi khắp nơi để biểu diễn cho cộng đồng yêu thích từ Bắc vào Nam, qua đó anh cũng mang được suy nghĩ nội tâm mình truyền đạt đến cho những con người đồng cảm như anh. Cho đến giờ phút này có thể nói Karik là 1 trong những Rapper đầu tiên thành công cũng như đã thay đổi thành kiến về nhạc Rap tại VN. - Theo con đường Rapper từ năm 2008 và chính thức biễu diễn chuyên nghiệp từ 2011 - 2011 Vinh dự là nghệ sĩ nhạc Rap đầu tiên đoạt giải MTV Việt Nam - 2012 - 2013 Được khán giả yêu thích qua một loạt các Hits nổi bật: Anh Không Đòi Quà, Ế, Rắc Rối, Người Việt Nam.. - 2014 Đại sứ thương hiệu của nhãn hàng Sprite - công ty Cocacola Vietnam và vinh dự là nghệ sĩ đại sứ đầu tiên của Việt Nam được giới thiệu với hệ thống CocaCola Toàn Cầu cùng Music Video “Cứ Là Mình”. - 2016 và 2017 kết hợp cùng Thái Trinh với 2 Single Cạn cả nước mắt và Ai ngờ ta còn thương.'),
(6, 'Soobin Hoàng Sơn', '1989-05-09', 'Thái Bình', 'soobin-hoang-son.jpg', 'Là một ca sĩ, nhạc sĩ và rapper trẻ đang được nhiều người yêu mến và Soobin hiện là ca sĩ của SpaceSpeakers Music Productionz. Tuy Hoàng Sơn sinh ra và lớn lên ở Hà Nội nhưng anh lại tập trung phát triển sự nghiệp ca hát của mình hơn trong những năm gần đây tại Tp. HCM.\nSở trường của Soobin Hoàng Sơn là các ca khúc R&B, thế nhưng mới đây nam ca sĩ Hà Thành này lại khiến khán giả không khỏi bất ngờ khi phát hành ca khúc mang phong cách pop ballad có tựa đề "Phía sau một cô gái", một sáng tác của nữ ca nhạc sĩ Tiên Cookie - Đánh dấu một nét nổi bật mới dành cho nam ca sĩ này. Không chỉ đổi mới về phong cách âm nhạc, Soobin Hoàng Sơn còn trau chuốt về hình ảnh lẫn giọng hát trong sản phẩm âm nhạc mới này. Bài hát này còn là một trong những bài hát được nghe nhiều nhất tại Việt Nam trong năm 2016. Tính đến ngày 10 tháng 10 năm 2017, bản Audio chính thức đã thu hút được 238,971,037 lượt nghe trên Zing Mp3.'),
(7, 'Only C', '1982-05-09', 'Lai Châu', 'only-c.jpg', ''),
(8, 'Lê Bảo Bình', '1987-09-01', 'Lâm Đồng', 'le-bao-binh.jpg', 'Lê Bảo Bình được biết đến là một ca sĩ nhạc trẻ của Việt Nam đang là cái tên gây sốt trong cộng đồng mạng với loạt ca khúc nói về gia đình, cha mẹ, những người tha hương xa nhà rất nhiều ý nghĩa. Anh được rất nhiều các khán giả trẻ Việt Nam yêu mến. Những sản phẩm âm nhạc của Bảo Mình thu hút được hàng triệu lượt xem, hàng ngàn lượt chia sẻ giúp Lê Bảo Bình trở thành hiện tượng âm nhạc đang được cư dân mạng săn đón. Bên cạnh ca hát, Bảo Bình còn sáng tác và tự thể hiện những ca khúc của riêng mình, ngoài ra Lê Bảo Bình còn tự tay quay những MV ca nhạc cho bản thân. Dù chỉ với một góc máy, biểu cảm quen thuộc, nhưng cũng đủ để những sản phẩm âm nhạc của anh chàng có được hiệu ứng lan truyền rộng rãi. Các album đã phát hành: Xem Nhau Là Dĩ Vãng (2012) Yêu Thương Chỉ Còn Trong Mơ (Single) (2012) Người Luôn Hạnh Phúc (2013) Không Quan Trọng (2013) Vợ Là Nhất (2014) Yêu Lắm Luôn Ý (Single) (2015) Nhớ Gia Đình (2015) Mặc Kệ Ngày Mai (2015) Hỏi Thăm Nhau (2016)'),
(9, 'Đức Phúc', '1990-08-09', 'Phú Yên', 'duc-phuc.jpg', 'Đức Phúc là Quán quân Giọng hát Việt mùa 3 đồng thời là sinh viên trường Đại học Xây dựng Hà Nội. Hiện anh đang hoạt động nghệ thuật với vai trò ca sĩ do công ty Mỹ Tâm Entertainment quản lý. Năm 2015 anh tham gia cuộc thi Giọng hát Việt. Trước khi tham gia Giọng hát Việt anh cũng đã từng tham gia hai cuộc thi khác đó là Vietnam Idol và Vietnam''s Got Talent nhưng đều bị loại ở ngay vòng đầu. Sau 6 tháng tham gia cuộc thi dưới sự đẫn dắt của Mỹ Tâm vào ngày 20/09/2015 anh chính thức trở thành quán quân nam đầu tiên của Giọng hát Việt với tỷ lệ tin nhắn bình chọn áp đảo 49.25%. Sau hơn 2 tháng kể từ khi đăng quang ngôi vị Quán quân chương trình The Voice, Đức Phúc chính thức giới thiệu đến công chúng và khán giả yêu âm nhạc sản phẩm đầu tay của mình, MV “Chỉ Một Câu”. MV được sự hỗ trợ thực hiện từ Công ty MT Entertainment của ca sĩ Mỹ Tâm. Đây có thể xem là việc làm nhằm hiện thực hóa lời hứa sẽ đồng hành, hỗ trợ cậu học trò nhỏ mà “Họa mi tóc nâu” từng hứa trong cuộc thi The Voice. Không quá bất ngờ nhưng điều này cũng tạo ra nhiều thú vị bởi từ trước đến nay Mỹ Tâm gần như chưa bao giờ chính thức nhận lời hỗ trợ “toàn tập” cho bất kỳ ca sĩ trẻ nào. Với quyết định dìu dắt Đức Phúc từ những bước đi đầu tiên, Mỹ Tâm thêm một lần nữa khẳng định quan điểm mà cô nhiều lần phát biểu trong cuộc thi The Voice, rằng một nhân tố không có lợi thế ngoại hình vẫn có thể khẳng định được vị trí trong showbiz nếu có chiến lược, đường hướng cũng như sự đầu tư đúng mức. MV “Chỉ Một Câu” cũng là sản phẩm gắn mác cá nhân thực thụ đầu tiên của Đức Phúc trên hành trình hoạt động nghệ thuật với tư cách là một ca sĩ - một ca khúc hoàn toàn mới được nhạc sĩ Phạm Toàn Thắng sáng tác riêng cho giọng ca Đức Phúc. Có thể xem MV “Chỉ Một Câu” như một lời tri ân mà Đức Phúc muốn gửi đến khán giả, đặc biệt là những người đã ủng hộ mình xuyên suốt cuộc thi Giọng hát Việt 2015.'),
(11, 'Chi Dân', '1988-07-03', 'Đồng Tháp', 'chi-dan.jpg', 'Chi Dân đã có thời gian sinh hoạt ca hát trong nhóm Hero trước đây. Sau một thời gian hoạt động trong nhóm thu được một số kinh nghiệm, Chi Dân quyết định rời nhóm khi hết hợp đồng và theo đuổi con đường ca hát solo. Được mọi người xung quanh nhận xét là sống thân thiện, hòa đồng, cũng với tính cách này đã giúp anh thu hút được một lượng fan hùng hậu. Năm 2013, Chi Dân bất ngờ nổi tiếng sau ca khúc Mất Trí Nhớ. Tưởng chừng đấy chỉ là cơ duyên may thì đến năm 2016, với bài hát "Điều anh biết" anh đã thực sự được nhiều người biết đến khi có đến hơn 100 triệu người xem Video Audio của ca khúc, hơn 35 triệu người xem MV của ca khúc. 2017, Chi Dân tiếp tục nổi tiếng với các bản hit như 1234, Có được không em và gần đây nhất là Yêu từ phía xa.'),
(12, 'Sơn Tùng M-TP', '1980-07-04', 'Đồng Nai', 'son-tung-mt-p.jpg', 'M-TP tên thật là Nguyễn Thanh Tùng. Cậu thanh niên sinh năm 1994 ở Thái Bình sớm bị hip hop hớp hồn giống như bao bạn bè đồng trang lứa. Và với niềm đam mê này, M-TP quyết tâm khăn gói tới Hà Nội học hỏi thêm về hip hop. Sau khi tốt nghiệp cấp 3, anh chàng dự định sẽ đầu quân làm học viên tại Học viện M4Me để rèn rũa khả năng ca hát, sáng tác... trước khi chính thức theo đuổi con đường âm nhạc. Ngoài đam mê ca hát, M-TP còn có khả năng sáng tác, chơi piano và nhảy cực "đỉnh". Với thế mạnh này, anh chàng không ngừng cố gắng học tập các bậc đàn anh đàn chị và đã có trong tay một hành trang khá "khủng" những sáng tác của riêng mình. Sự nghiệp âm nhạc: Tháng 8/2011: M-TP phát hành ca khúc "Cơn Mưa Ngang Qua" lên mạng, ngay lập tức nó trở thành một ca khúc hot lúc bấy giờ khi mà chỉ sau hai tháng, đã có hơn 1.7 triệu lượt nghe - con số mà những ca sĩ kỳ cựu như Đàm Vĩnh Hưng, Hồ Ngọc Hà... cũng phải mơ ước. Năm 2012, với tổng điểm 25,5đ, M-TP trở thành thủ khoa Nhạc viện TP.HCM. Cậu chia sẻ rằng "chia sẻ cảm xúc: "Mặc dù khá tự tin sau khi kết thúc buổi thi nhưng mình vẫn không khỏi ngạc nhiên và hạnh phúc khi biết được kết quả thi. Đây thực sự là một món quà vô cùng ý nghĩa để bù đắp cho những nỗ lực của mình trong suốt thời gian ôn luyện vừa qua" Để lại nhiều ấn tượng trong lòng khán giả khi M-TP trình diễn thành công ca khúc "Cơn Mưa Ngang Qua" tại Bài Hát Yêu Thích tháng 10/2012 và tiếp tục nhận giải thưởng hát hát yêu thích của tháng trong chương trình là động lực rất lớn cho M-TP tiếp tục phấn đấu trong con đường âm nhạc chuyên nghiệp. Sau Bài Hát Yêu Thích, M-TP còn được mời tham gia biểu diễn trong đêm công bố kết quả Top 9 Vietnam Idol 2012. Tại Zing Mp3, "Cơn Mưa Ngang Qua" như là cút hít đầu tiên của cậu ca sĩ trẻ M-TP bước vào làng nhạc trẻ. Tính đến tháng 11/2014, ca khúc đạt được 64,278,735 lượt nghe.'),
(13, 'Hương Tràm', '1986-07-05', 'Cà Mau', 'huongtram.jpg', 'Hương Tràm là con nhà nòi. Cô có ba là NSƯT Tiến Dũng và anh trai là thí sinh Sao Mai điểm hẹn 2010 Phạm Tiến Mạnh. Hương Tràm đã gây cơn sốt trong buổi lên sóng đầu tiên ở vòng Giấu Mặt của "The Voice 2012" khi cô chọn ca khúc kinh điển I Will Always Love You của Whitney Houston và đã được cả 4 vị huấn luyện viên xoay ghế chọn vào đội của mình. Tuy nhiên, Hương Tràm quyết định chọn ca sỹ Thu Minh là vị huấn luyện viên cho giọng ca của mình. Ngày 13/01/2013, Hương Tràm chính thức trở thành quán quân đầu tiên của Giọng Hát Việt. Với ngôi vị quán quân, cô gái Nghệ An sẽ nhận được giải thưởng 500 triệu đồng tiền mặt, 200 triệu tiền sản phẩm của nhà tài trợ và một chuyến du lịch Hàn Quốc 7 ngày. Ngoài ra, cô còn được sở hữu một hợp đồng ghi âm khủng với hãng đĩa quốc tế. Với ngôi vị này, sẽ là bàn đạp rất tốt để cô gái đến từ xứ Nghệ bước vào làng nhạc Việt Nam với nhiều chông gai và đầy thách thức. Những bài hát tiêu biểu làm nên tên tuổi ca sĩ Hương Tràm: Năm phát hành 2013: Ngại Ngùng Với Em Là Mãi Mãi Xa Sẽ Có Người Cần Anh – song ca với Cao Thái Sơn Trăng dưới chân mình Vẫn yêu từng phút giây – song ca với Cao Thái Sơn. Năm phát hành 2015: I’m still loving you. Năm phát hành 2016: Ngốc Cho Em Gần Anh Thêm Chút Nữa (Nhạc phim cùng tên). Năm phát hành 2017: Ta Còn Thuộc Về Nhau. Em Gái Mưa'),
(14, 'Wendy Thảo', '1980-07-06', 'Bình Thuận', 'wendy-thao.jpg', 'Công Ty Đại Diện : NHACPRO - 2T ENTERTAIMENT Họ và Tên : Nguyễn Thảo Kha Birthday : 9/1 Cung : Ma Kết Nguyên Quán : Cà Mau Wendy Thảo bắt đầu hoạt động nghệ thuật vào cuối năm 2015 dưới sự dẫn dắt của công ty Tường Quân Entertaiment. Wendy Thảo : Là cô gái có ngoại hình nhỏ nhắn , gương mặt dễ nhìn , nhờ có giọng hát khá lạ tai nên Wendy Thảo may mắn tạo được thiện cảm với mọi người. Ngoài ra , Wendy Thảo còn có khả năng sáng tác nhạc và đã có cho mình những sáng tác riêng như : Không Còn Nợ Nhau , Vì Anh Là Gió ... đã được rất nhiều khán giả gần xa yêu thích. Hiện tại Wendy Thảo đã rời công ty Tường Quân Entertaiment. Trước đó Wendy Thảo luôn gắn liền với hình tượng dễ thương , trong sáng...và hơi yếu đuối. Năm 2017 Wendy Thảo muốn thay đổi hình ảnh của mình trở nên năng động hơn , cá tính hơn , mạnh mẽ và trưởng thành hơn ^^ Wendy Thảo sẽ tích cực hoạt động nghiêm túc và mang đến những sản phẩm âm nhạc chất lượng để phục vụ cho khán giả. Wendy Thảo hy vọng sẽ nhận được phản hồi tích cực từ mọi người. Đối với Wendy Thảo sự ủng hộ của khán giả là động lực rất lớn để Wendy Thảo cố gắng và cố gắng hơn nữa'),
(15, 'Bảo Anh', '1985-07-07', 'Long An', 'bao-anh.jpg', 'Bảo Anh từng là gương mặt ấn tượng trong nhiều cuộc thi âm nhạc dành cho tuổi teen. Năm 2008, Bảo Anh lọt vào top 12 thí sinh vòng chung kết Tiếng ca học đường. Năm 2009, Bảo Anh tiếp tục đoạt giải đồng hạng với Văn Mai Hương tại ''Tiếng Hát Học Đường'' với ca khúc ''Ăn khế trả vàng''. Năm 2010, Nguyễn Hoài Bảo Anh tiếp tục đoạt giải triển vọng cuộc thi H2T Icon 2010 do Báo Hoa học trò tổ chức. Năm 2012, Nguyễn Hoài Bảo Anh chinh phục được trái tim của 2 ca sỹ Thu Minh cùng nam ca sỹ nhạc rock Trần Lập trong cuộc thi Giọng hát Việt bằng chất giọng trong sáng và ngọt ngào. Thậm chí, cô cũng còn được ví là Taylor Swift phiên bản Việt lúc thể hiện ca khúc Safe and sound một cách khá trong trẻo, ngọt ngào cùng với hình tượng không khác như một công chúa. Tại thời điểm sau đó, Bảo Anh luôn gắn liền với các bản Ballad ngọt ngào, và truyền cảm. Cô đã nhanh chóng được các khán giả yêu mến với hàng loạt bài hit như là Anh muốn em sống sao, Và em đã biết mình yêu, Em đã từng yêu…'),
(16, 'MIN', '1980-07-08', 'Trà Vinh', 'min.jpg', 'MIN đã có một bước đột phá mới trong sự nghiệp nghệ thuật, khi giới thiệu tới báo giới và người yêu nhạc ca khúc "TÌM" như một khởi đầu tốt đẹp cho con đường ca hát chuyên nghiệp. "TÌM" là một trong những ca khúc được tìm nghe nhiều nhất trên mạng xã hội, trong tháng 12/2013, và cũng là sản phẩm mở đường, giúp Min thêm nhiều cơ hội hợp tác cùng các nghệ sĩ trẻ khác. Với giọng hát tình cảm ngọt ngào và cá tính, có thể nói rằng, Min như một cơn gió lạ, một hình tượng mới của giới nghệ thuật Việt Nam, đang từng bước khẳng định được chính mình với sự ủng hộ của thế hệ trẻ. 2017 phát hành các singles như Ghen, Chưa Bao Giờ Mẹ Kể, Có Em Chờ'),
(17, 'Khắc Việt', '1988-07-09', 'Thanh Hóa', 'khac-viet.jpg', 'Khắc Việt tên thật là Nguyễn Khắc Việt sinh ngày 30/08/1987 tại Yên Bái, là một ca sĩ, nhạc sĩ Việt Nam. Anh theo dòng nhạc pop-ballad. Sinh ra và lớn lên ở Yên Bái, trong một gia đình không có ai theo nghệ thuật, bố mẹ là công chức; sau khi học xong phổ thông trung học, Khắc Việt cùng em ruột của mình là Khắc Hưng thi đỗ vào Nhạc viện Hà Nội (Học viện Âm nhạc Quốc gia bây giờ) vào năm 2005. Vì gia đình không dư dả về kinh tế, để trang trải cuộc sống, Khắc Việt từng phải đi bán xăng và hát lót suốt 3 năm trời. Tốt nghiệp khoa Thanh nhạc, nhưng Khắc Việt chọn đi theo con đường sáng tác âm nhạc ngay từ khi mới bắt đầu đặt chân trên con đường nghệ thuật khi cho ra mắt ca khúc đầu tay với tựa đề "Quên" vào năm 2009. Đầu năm 2010, album single "Như vậy nhé" được phát hành online. Năm 2009, Khắc Việt ra mắt single "Quên", nằm trong EP Câu chuyện tình yêu và ngay lập tức ca khúc trở thành một cơn sốt trên mạng vào thời điểm đó. Năm 2010, album Yêu lại từ đầu ra mắt trên Zing Mp3 cùng với music video cho bài hát cùng tên. 4 bài hát trong album gồm "Yêu lại từ đầu", "Như vậy nhé", "Em thế nào" và "Quên" trở thành hit ngay trong thời điểm ra mắt. Năm 2011, sau thành công của album Yêu lại từ đầu, Khắc Việt ra mắt single "Lại một lần nữa", "Chỉ anh hiểu em" cùng hai video ca nhạc cho hai bài hát của single. Vài tháng sau, Khắc Việt ra mắt album phòng thu thứ hai mang tên Mất cảm giác yêu... Anh khác hay em khác? gồm 9 ca khúc và 5 video ca nhạc.'),
(18, 'Hồ Quang Hiếu', '1982-07-10', 'Hà Nội', 'ho-quang-hieu.jpg', ''),
(19, 'Mr Siro', '1980-07-11', 'Đà Nẵng', 'mr-siro.jpg', ''),
(20, 'Bích Phương', '1986-07-12', 'Hà Tĩnh', 'bich-phuong.jpg', ''),
(21, 'Dương Hồng Loan', '1994-07-03', 'Bà Rịa - Vũng Tàu', 'duong-hong-loan.jpg', ''),
(22, 'Đan Nguyên', '1980-05-04', 'Cần Thơ', 'dan-nguyen.jpg', ''),
(23, 'Đan Trường', '1989-07-01', 'Ninh Bình', 'dan-truong.jpg', ''),
(24, 'Đàm Vĩnh Hưng', '1985-07-06', 'Quảng Nam', 'dam-vinh-hung.jpg', ''),
(25, 'Tuấn Hưng', '1992-01-01', 'Hậu Giang', 'tuan-hung.jpg', ''),
(26, 'DEAMN', '1998-02-05', 'United States', 'dreamn.jpg', ''),
(27, 'Selena Gomez', '1994-04-24', 'United States', 'selena-gomez.jpg', ''),
(28, 'Justin Bieber', '1994-01-03', 'Canada', 'justin-bieber.jpg', ''),
(29, 'Taylor Swift', '1990-04-03', 'United States', 'taylor-swift.jpg', ''),
(30, 'Như Hexi', '1982-01-01', 'Cần Thơ', 'nhu-hexi.jpg', ''),
(31, 'Justa Tee', '1982-01-02', 'Ninh Bình', 'justa-tee.jpg', ''),
(32, 'Pjnboys', '1982-01-03', 'Quảng Nam', 'pjnboys.jpg', ''),
(33, 'Wowwy', '1982-01-04', 'Hậu Giang', 'wowwy.jpg', ''),
(34, 'ssssssssssssssssss', '2018-04-21', 'sssssss', '', ''),
(35, 'ưee', '2018-04-13', 'qưe', '', ''),
(36, 'Anh Quân', '2018-04-06', 'Thành Phố Hồ Chí Minh', 'Anh-Quan', ''),
(38, 'kkkkkkkkkkk', '2018-04-07', 'dddddd', 'kkkkkkkkkkk', ''),
(39, 'q', '2018-04-14', 'hhhh', 'q', ''),
(40, 'aaaaaaaaaaaaaaaa', '2018-04-11', 'aaaa', 'aaaaaaaaaaaaaaaa', ''),
(41, 'ca si', '2018-04-13', 'jjjjjjjjjj', 'ca-si', ''),
(42, 'ssssssssss', '2018-04-21', 'ssssssssssssssss', 'ssssssssss', ''),
(43, 'baitest', '2018-04-03', 'mmmmmmmmmmmmm', 'baitest', ''),
(44, 'kkkkkkkkkk', '2018-04-07', 'kkk', 'kkkkkkkkkk', ''),
(45, 'dddddd', '2018-04-21', 'dddd', 'dddddd', ''),
(46, 'lllll', '2018-04-11', 'l', 'lllll', ''),
(47, 'nnnvnnv', '2018-04-19', 'vvvvvvvvv', 'nnnvnnv', ''),
(48, 'nnnnnnn', '2018-04-06', 'nnnnnnnnn', 'nnnnnnn', '');

-- --------------------------------------------------------

--
-- Table structure for table `casi_baihat`
--

CREATE TABLE `casi_baihat` (
  `id` int(250) NOT NULL,
  `CaSiId` varchar(11) NOT NULL,
  `BaiHatId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE `chude` (
  `id` int(250) NOT NULL,
  `TenChuDe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`id`, `TenChuDe`) VALUES
(1, 'Love Songs'),
(2, 'For Love'),
(3, 'Wedding'),
(4, 'Merry christmas'),
(5, 'Cover & Mashup'),
(6, 'Coffee Time'),
(7, 'Nhạc phim'),
(8, 'Thất Tình'),
(9, 'Nhạc Vàng'),
(10, 'Bolero'),
(11, 'Aucostic'),
(12, 'Nhạc Thúy Nga'),
(13, 'Remix Hits');

-- --------------------------------------------------------

--
-- Table structure for table `nhacsi`
--

CREATE TABLE `nhacsi` (
  `id` int(11) NOT NULL,
  `TenNhacSi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhacsi`
--

INSERT INTO `nhacsi` (`id`, `TenNhacSi`) VALUES
(1, 'Nguyễn Văn Chung'),
(2, 'Tiên Cookie'),
(3, 'Nguyễn Văn Đông'),
(4, 'Nguyễn Vĩnh Tiến'),
(5, 'Chế Linh'),
(6, 'Chi Dân'),
(7, '\nKai Đinh'),
(8, 'Nguyễn Đình Bảng'),
(9, 'Nguyễn Đức Toàn'),
(10, 'Phan Mạnh Quỳnh'),
(11, 'Soobin Hoàng Sơn'),
(12, 'Tiên Tiên'),
(13, 'Tô Thanh Tùng'),
(14, 'Tăng Nhật Tuệ'),
(15, 'Tâm Anh'),
(16, 'Mỹ Tâm'),
(17, 'Thái Thịnh'),
(18, 'Thanh Bình'),
(19, 'Thanh Sơn'),
(20, 'Thanh Tùng'),
(21, 'Thăng Long'),
(22, 'Phạm Toàn Thắng'),
(23, 'Thập Nhất'),
(24, 'Thế Hiển'),
(25, 'Thế Song'),
(26, 'Thuận Yến'),
(27, 'Thủy Tiên'),
(28, 'Tiên Cookie'),
(29, ' Richard Fairbrass'),
(30, 'Jack Antonof'),
(31, 'Brian May'),
(32, 'Charlie Puth'),
(33, 'Benjamin Levin');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` int(250) NOT NULL,
  `TenPlayList` text NOT NULL,
  `LuotNghe` text NOT NULL,
  `img` text NOT NULL,
  `NguoiTao` text NOT NULL,
  `DuongDan` text NOT NULL,
  `TheLoaiId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id` int(250) NOT NULL,
  `TenTheLoai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `TenTheLoai`) VALUES
(1, 'Tiền Chiến'),
(2, 'Nhạc Trịnh'),
(3, 'Thiếu Nhi'),
(4, 'Cách Mạng'),
(5, 'Rap Việt'),
(6, 'Rock'),
(7, 'Nhạc Sàn'),
(8, 'Nhạc vàng'),
(9, 'Bolero'),
(10, 'Hải Ngoại'),
(11, 'Cải Lương'),
(12, 'Không lời'),
(13, 'Guitar'),
(14, 'Trữ Tình'),
(15, 'Nhạc Trẻ'),
(16, 'Remix Việt'),
(17, 'Pop'),
(18, 'Nhạc Hàn'),
(19, 'Nhạc Hoa'),
(20, 'Aucostic'),
(22, 'Thất Tình'),
(23, 'Quan Họ'),
(25, 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(250) NOT NULL,
  `UserName` text NOT NULL,
  `PassWord` text NOT NULL,
  `Email` text NOT NULL,
  `YeuThich` int(11) NOT NULL,
  `PhanQuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `UserName`, `PassWord`, `Email`, `YeuThich`, `PhanQuyen`) VALUES
(1, 'myhieu', '4ae4ad0da25f31b7be3a984d8f42802e', 'truongthimyhieu@gmail.com', 0, 0),
(4, 'Nguyen van ', '827ccb0eea8a706c4c34a16891f84e7b', 'nguyenvan@gmail.com', 0, 0),
(5, 'Tran van Thien', '71bfa1110fe86a01ec23e5061c0c83b5', 'tranvanthien@gmail.com', 0, 0),
(6, 'Tran  Huynh', '827ccb0eea8a706c4c34a16891f84e7b', 'tranhuynh@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_baihat`
--

CREATE TABLE `user_baihat` (
  `idBH` int(11) NOT NULL,
  `idND` int(11) NOT NULL,
  `playlist` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(250) NOT NULL,
  `TenVideo` text NOT NULL,
  `idCS` int(11) NOT NULL,
  `TheLoai` text NOT NULL,
  `DuongDan` text NOT NULL,
  `LuotXem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `TenVideo`, `idCS`, `TheLoai`, `DuongDan`, `LuotXem`) VALUES
(0, 'aaa', 0, 'aaa', '', 0),
(1, 'Ta Còn Yêu Nhau', 0, 'Việt Nam', 'video/Ta Con Yeu Nhau.mp4', 13),
(2, 'Tiếng Đàn Ta Lư', 0, 'Nhạc Cách Mạng', 'video/Tieng Dan Ta Lu.mp4', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casi`
--
ALTER TABLE `casi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casi_baihat`
--
ALTER TABLE `casi_baihat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhacsi`
--
ALTER TABLE `nhacsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `casi`
--
ALTER TABLE `casi`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `chude`
--
ALTER TABLE `chude`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `nhacsi`
--
ALTER TABLE `nhacsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
