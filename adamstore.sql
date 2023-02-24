-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 12, 2022 lúc 05:22 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Cơ sở dữ liệu: `adamstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `parent_id` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `parent_id`, `url`) VALUES
(1, 'HOME PAGE', 0, 'http://localhost/adamstore/index.php'),
(2, 'INTRODUCTION', 0, 'http://localhost/adamstore/index.php?page=introduction'),
(3, 'DISCOUNT', 0, ''),
(4, 'SUIT ADAM OUTLET', 3, 'http://localhost/adamstore/index.php?page=category&cat_id=4'),
(5, 'OUTLET MEN SIZE', 3, 'http://localhost/adamstore/index.php?page=category&cat_id=5'),
(6, 'BST SUIT 2022', 9, 'http://localhost/adamstore/index.php?page=category&cat_id=6'),
(7, 'MEN S SHIRTS', 9, 'http://localhost/adamstore/index.php?page=category&cat_id=7'),
(8, 'LOOKBOOK', 0, 'http://localhost/adamstore/index.php?page=lookbook'),
(9, 'PRODUCTS', 0, '');

-- --------------------------------------------------------
-- 

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comm_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `comm_name` varchar(255) NOT NULL,
  `comm_mail` varchar(255) NOT NULL,
  `comm_date` datetime NOT NULL,
  `comm_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`comm_id`, `prd_id`, `customer_id`, `comm_name`, `comm_mail`, `comm_date`, `comm_details`) VALUES
(1, 1, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(2, 2, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(3, 3, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(4, 4, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(5, 5, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(6, 6, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(7, 7, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(8, 8, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(9, 9, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(10, 10, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(11, 11, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(12, 12, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(14, 14, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(15, 15, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(16, 16, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(17, 17, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(18, 18, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(19, 19, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(20, 20, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(21, 21, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(22, 22, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(23, 23, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(24, 24, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(25, 25, 0, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(39, 0, 0, 'ewqe', 'qwewqe@dfsfsdf', '0000-00-00 00:00:00', 'sdasdasdasd'),
(40, 0, 0, 'dfsdfsdf', 'dfsdfdsfsdf@gmail.com', '0000-00-00 00:00:00', 'fsdfsdfsdf'),
(41, 0, 0, 'dfsdfsdf', 'dfsdfdsfsdf@gmail.com', '0000-00-00 00:00:00', 'fsdfsdfsdf'),
(42, 0, 0, 'erwerwe', 'dfsdfdsfsdf@gmail.com', '0000-00-00 00:00:00', 'asdasdasdas'),
(43, 0, 0, 'erwerwe', 'dfsdfdsfsdf@gmail.com', '0000-00-00 00:00:00', 'asdasdasdas'),
(44, 0, 0, 'erwerwe', 'dfsdfdsfsdf@gmail.com', '0000-00-00 00:00:00', 'asdasdasdas'),
(45, 0, 0, 'erwerwe', 'dfsdfdsfsdf@gmail.com', '0000-00-00 00:00:00', 'asdasdasdas'),
(46, 0, 0, 'abc', 'dfsdfdsfsdf@gmail.com', '0000-00-00 00:00:00', 'sadsdasd'),
(47, 0, 0, 'dasfdsf', 'dfsdfdsfsdf@gmail.com', '2020-03-05 19:13:27', 'adasdasdasdqw3ewq');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_mail` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_mail`, `customer_pass`, `customer_address`, `customer_phone`) VALUES
(1, 'Vũ Xuân Thành', 'vxt@gmail.com', '123456', 'hà nội', '0868090402'),
(2, 'Vũ Xuân Thành', 'vxt@gmail.com', '123456', 'hà nội', '0868090402'),
(3, 'Vũ Xuân Thành', 'vxt@gmail.com', '123456', 'hà nội', '0868090402'),
(4, 'cb cd', 'admin@gmail.com', '123456', 'cbg hcdsj', '0123456789'),
(5, 'vũ xuân ', 'admin@gmail.com', '123456', 'hà nội', '0988249966'),
(6, 'vũ xuân ', 'admin@gmail.com', '123456', 'hà nội', '0988249966'),
(7, 'vũ xuân ', 'admin@gmail.com', '123456', 'hà nội', '0988249966'),
(8, 'vu dep', 'vxt00110@gmail.com', 'vxt1234', 'hà nội', '0868090402'),
(10, 'huy', 'huy@gmail.com', '123456', 'hà nội', '0911376547'),
(14, 'hello', 'hello@gmail.com', 'hello123', 'hà nội', '0987654321'),
(15, 'vxt', 'vxt@gmail.com', '123456', 'hà nội', '0868090402');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `amount` decimal(30,4) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`order_id`, `user_name`, `user_mail`, `user_phone`, `address`, `status`, `amount`, `created`) VALUES
(1, 'admin', 'vxt@gmail.com', '0868090402', 'hà nội', 1, '2380000.0000', '2022-06-05 23:12:34'),
(2, 'vxt1010', 'vxt@gmail.com', '0939272387923', 'ct19-khu đô thị Việt Hưng-Hà Nội', 1, '4972500.0000', '2022-06-05 23:22:59'),
(3, 'vxt0904', 'klasdln@gmail.com', '0939272387923', 'ha noi', 1, '2380000.0000', '2022-06-06 21:07:18'),
(4, 'admin', 'vxt@gmail.com', '2002090402', 'ha noi', 1, '2380000.0000', '2022-06-06 21:12:09'),
(5, 'sa', 'vxt@gmail.com', '0939272387923', 'ha noi', 1, '2380000.0000', '2022-06-06 21:13:49'),
(6, 'vxt1010', 'khbsdkas@gmail.com', '2002090402', 'vietnam', 0, '2980000.0000', '2022-06-08 16:34:33'),
(7, 'vxt1010', 'khbsdkas@gmail.com', '2002090402', 'le quy don', 1, '2980000.0000', '2022-06-08 16:38:09'),
(8, 'vxt1010', 'khbsdkas@gmail.com', '2002090402', 'le quy don', 1, '2980000.0000', '2022-06-08 16:47:56'),
(9, 'vxt1010', 'vxt@gmail.com', '2002090402', 'Long Biên - Hà Nội', 0, '4760000.0000', '2022-06-10 15:51:07'),
(12, 'âdc', 'vxt@gmail.com', '9213', 'ct19-khu đô thị Việt Hưng-Hà Nội', 0, '1200000.0000', '2022-06-10 23:33:44'),
(13, 'admin', 'khbsdkas@gmail.com', '88888', 'vietnam', 1, '2950000000.0000', '2022-06-11 08:53:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderDetail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(30,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`orderDetail_id`, `order_id`, `prd_id`, `qty`, `price`) VALUES
(11, 6, 26, 1, '2380000.0000'),
(12, 6, 32, 1, '600000.0000'),
(13, 7, 26, 1, '2380000.0000'),
(14, 7, 32, 1, '600000.0000'),
(15, 8, 26, 1, '2380000.0000'),
(16, 8, 32, 1, '600000.0000'),
(17, 9, 26, 2, '2380000.0000'),
(18, 10, 29, 1, '2380000.0000'),
(19, 11, 29, 1, '2380000.0000'),
(20, 12, 35, 2, '600000.0000'),
(21, 13, 11, 1000, '2950000.0000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `prd_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prdType_id` int(11) NOT NULL,
  `prd_nameId` varchar(255) NOT NULL,
  `prd_name` varchar(255) NOT NULL,
  `prd_image` varchar(255) NOT NULL,
  `prd_hover` varchar(255) NOT NULL,
  `prd_price` int(11) UNSIGNED NOT NULL,
  `prd_status` int(1) NOT NULL,
  `prd_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`prd_id`, `cat_id`, `prdType_id`, `prd_nameId`, `prd_name`, `prd_image`, `prd_hover`, `prd_price`, `prd_status`, `prd_details`) VALUES
(1, 6, 1, 'AV28548', 'ÁO VEST KẺ GHI SÁNG - AV285', 'ÁO-VEST-KẺ-GHI-SÁNG-AV285.png', 'ÁO-VEST-KẺ-GHI-SÁNG-AV285-hover.png', 2950000, 1, 'Anh Quốc hai khuy, ve notch, sang trọng cách tân dựa trên tỷ lệ hình thể người đàn ông Việt Nam giúp bộ đồ trông sang trọng nhưng vẫn giữ được sự trẻ trung và hạn chế khuyết điểm.'),
(2, 6, 1, 'AV28148', 'ÁO VEST GHI KẺ - AV281', 'ÁO-VEST-GHI-KẺ-AV281.png', 'ÁO-VEST-GHI-KẺ-AV281-hover.png', 2950000, 1, 'Anh Quốc hai khuy, ve notch, sang trọng cách tân dựa trên tỷ lệ hình thể người đàn ông Việt Nam giúp bộ đồ trông sang trọng nhưng vẫn giữ được sự trẻ trung và hạn chế khuyết điểm.'),
(3, 6, 1, 'AV28348', 'ÁO VEST XANH KẺ - AV283', 'ÁO-VEST-XANH-KẺ-AV283.png', 'ÁO-VEST-XANH-KẺ-AV283-hover.png', 2950000, 1, 'Anh Quốc hai khuy, ve notch, sang trọng cách tân dựa trên tỷ lệ hình thể người đàn ông Việt Nam giúp bộ đồ trông sang trọng nhưng vẫn giữ được sự trẻ trung và hạn chế khuyết điểm.'),
(4, 6, 1, 'AV28252', 'ÁO VEST XANH GHI - AV282', 'ÁO-VEST-XANH-GHI-AV282.png', 'ÁO-VEST-XANH-GHI-AV282-hover.png', 2950000, 1, 'Anh Quốc hai khuy, ve notch, sang trọng cách tân dựa trên tỷ lệ hình thể người đàn ông Việt Nam giúp bộ đồ trông sang trọng nhưng vẫn giữ được sự trẻ trung và hạn chế khuyết điểm.'),
(5, 6, 1, 'AV28748', 'ÁO VEST XANH GHI XƯỚC - AV287', 'ÁO-VEST-XANH-GHI-XƯỚC-AV287.png', 'ÁO-VEST-XANH-GHI-XƯỚC-AV287-hover.png', 2950000, 1, 'Anh Quốc hai khuy, ve notch, sang trọng cách tân dựa trên tỷ lệ hình thể người đàn ông Việt Nam giúp bộ đồ trông sang trọng nhưng vẫn giữ được sự trẻ trung và hạn chế khuyết điểm.'),
(6, 6, 1, 'AV28648', 'ÁO VEST ĐEN SỌC - 286', 'ÁO-VEST-ĐEN-SỌC-286.png', 'ÁO-VEST-ĐEN-SỌC-286-hover.png', 2950000, 1, 'Anh Quốc hai khuy, ve notch, sang trọng cách tân dựa trên tỷ lệ hình thể người đàn ông Việt Nam giúp bộ đồ trông sang trọng nhưng vẫn giữ được sự trẻ trung và hạn chế khuyết điểm.'),
(7, 6, 1, 'AVLH6448', 'ÁO VEST ADAM XANH KẺ ĐEN LH64', 'ÁO-VEST-ADAM-XANH-KẺ-ĐEN-LH64.png', 'ÁO-VEST-ADAM-XANH-KẺ-ĐEN-LH64-hover.png', 2950000, 1, 'Áo vest nam Adam Store may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, sắc nét. Áo vest có thể mặc trong các buổi tiệc, đi làm công sở, đi chơi...'),
(8, 6, 1, 'AV28048', 'ÁO VEST XANH NHẠT - AV280', 'ÁO-VEST-XANH-NHẠT-AV280.png', 'ÁO-VEST-XANH-NHẠT-AV280-hover.png', 2950000, 1, ''),
(9, 6, 1, 'AV27948', 'ÁO VEST GHI - AV279', 'ÁO-VEST-GHI-AV279.png', 'ÁO-VEST-GHI-AV279-hover.png', 2950000, 1, ''),
(10, 6, 1, 'AV27848', 'ÁO VEST XANH - AV278', 'ÁO-VEST-XANH-AV278.png', 'ÁO-VEST-XANH-AV278-hover.png', 2950000, 1, ''),
(11, 6, 1, 'AV27648', 'AV276', 'AV276.png', 'AV276-hover.png', 2950000, 1, ''),
(12, 6, 1, 'AVLH6048', 'ÁO VEST ADAM BE XƯỚC LH60', 'ÁO-VEST-ADAM-BE-XƯỚC-LH60.png', 'ÁO-VEST-ADAM-BE-XƯỚC-LH60-hover.png', 2750000, 1, 'Áo vest nam Adam Store may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, sắc nét. Áo vest có thể mặc trong các buổi tiệc, đi làm công sở, đi chơi...'),
(13, 7, 2, 'SMC08748', 'SƠ MI GHI HOA XANH - SMC087', 'SƠ-MI-GHI-HOA-XANH-SMC087.png', 'SƠ-MI-GHI-HOA-XANH-SMC087.png', 750000, 1, ''),
(14, 7, 2, 'SMC08154', 'SƠ MI KẺ VÀNG SMC081', 'SƠ-MI-KẺ-VÀNG-SMC081.png', 'SƠ-MI-KẺ-VÀNG-SMC081.png', 750000, 1, ''),
(15, 7, 2, 'SMC08848', 'SƠ MI GHI HOA XANH - SMC088', 'SƠ-MI-GHI-HOA-XANH-SMC088.png', 'SƠ-MI-GHI-HOA-XANH-SMC088.png', 750000, 1, ''),
(16, 7, 2, 'SMC08648', 'SƠ MI GHI HỌA TIẾT - SMC086', 'SƠ-MI-GHI-HỌA-TIẾT-SMC086.png', 'SƠ-MI-GHI-HỌA-TIẾT-SMC086.png', 750000, 1, ''),
(17, 7, 2, 'SMC08448', 'SƠ MI ĐEN HỌA TIẾT - SMC084', 'SƠ-MI-ĐEN-HỌA-TIẾT-SMC084.png', 'SƠ-MI-ĐEN-HỌA-TIẾT-SMC084.png', 750000, 1, ''),
(18, 7, 2, 'SMC08550', 'SƠ MI TRẮNG HỌA TIẾT - SMC085', 'SƠ-MI-TRẮNG-HỌA-TIẾT-SMC085.png', 'SƠ-MI-TRẮNG-HỌA-TIẾT-SMC085.png', 750000, 1, ''),
(19, 7, 2, 'SMC05348', 'ÁO SƠ MI ADAM ĐEN HỌA TIẾT SMC053', 'ÁO-SƠ-MI-ADAM-ĐEN-HỌA-TIẾT-SMC053.png', 'ÁO-SƠ-MI-ADAM-ĐEN-HỌA-TIẾT-SMC053.png', 700000, 1, ''),
(20, 7, 2, 'SMC05650', 'ÁO SƠ MI ADAM ĐEN HỌA TIẾT SMC056', 'ÁO-SƠ-MI-ADAM-ĐEN-HỌA-TIẾT-SMC056.png', 'ÁO-SƠ-MI-ADAM-ĐEN-HỌA-TIẾT-SMC056.png', 700000, 1, ''),
(21, 7, 2, 'SMC05750', 'ÁO SƠ MI ADAM ĐEN HỌA TIẾT SMC057', 'ÁO-SƠ-MI-ADAM-ĐEN-HỌA-TIẾT-SMC057.png', 'ÁO-SƠ-MI-ADAM-ĐEN-HỌA-TIẾT-SMC057.png', 700000, 1, ''),
(22, 7, 2, 'SMC06248', 'ÁO SƠ MI ADAM ĐEN HỌA TIẾT SMC062', 'ÁO-SƠ-MI-ADAM-ĐEN-HỌA-TIẾT-SMC062.png', 'ÁO-SƠ-MI-ADAM-ĐEN-HỌA-TIẾT-SMC062.png', 700000, 1, ''),
(23, 7, 2, 'SMC07248', 'ÁO SƠ MI ADAM ĐEN KẺ XANH SMC072', 'ÁO-SƠ-MI-ADAM-ĐEN-KẺ-XANH-SMC072.png', 'ÁO-SƠ-MI-ADAM-ĐEN-KẺ-XANH-SMC072.png', 700000, 1, ''),
(24, 7, 2, 'SMD48', 'ÁO SƠ MI ADAM ĐEN TRƠN', 'ÁO-SƠ-MI-ADAM-ĐEN-TRƠN.png', 'ÁO-SƠ-MI-ADAM-ĐEN-TRƠN.png', 700000, 1, ''),
(25, 4, 1, 'AV23552', 'ÁO VEST GHI KẺ 2K- 235', 'ÁO-VEST-GHI-KẺ-2K-235.png', 'ÁO-VEST-GHI-KẺ-2K-235-hover.png', 2380000, 1, 'Áo vest nam Adam Store may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam Adam Store có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi. Lưu ý: - Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu. - Adam Store có dịch vụ may đo riêng theo yêu cầu.'),
(26, 4, 1, 'AVLH4154', 'ÁO VEST GHI KẺ CHỈ TRẮNG LH41', 'ÁO-VEST-GHI-KẺ-CHỈ-TRẮNG-LH41.png', 'ÁO-VEST-GHI-KẺ-CHỈ-TRẮNG-LH41-hover.png', 2380000, 1, 'Áo vest nam Adam Store may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam Adam Store có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi. Lưu ý: - Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu. - Adam Store có dịch vụ may đo riêng theo yêu cầu.'),
(27, 4, 1, ' AVLH4656', ' ÁO VEST KẺ ĐỎ LH46', 'ÁO-VEST-KẺ-ĐỎ-LH46.png', 'ÁO-VEST-KẺ-ĐỎ-LH46-hover.png', 2500000, 2, 'Áo vest nam Adam Store may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam Adam Store có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi. Lưu ý: - Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu. - Adam Store có dịch vụ may đo riêng theo yêu cầu.'),
(28, 4, 1, 'AVLH4657', 'ÁO VEST KẺ Ô XANH SẪM', 'ÁO-VEST-KẺ-Ô-XANH-SẪM.png', 'ÁO-VEST-KẺ-Ô-XANH-SẪM-hover.png', 2380000, 1, 'Áo vest nam Adam Store may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam Adam Store có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi. Lưu ý: - Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu. - Adam Store có dịch vụ may đo riêng theo yêu cầu.'),
(29, 4, 1, 'AVLH2154', 'ÁO VEST KẺ Ô XANH SÁNG', 'ÁO-VEST-KẺ-Ô-XANH-SÁNG.png', 'ÁO-VEST-KẺ-Ô-XANH-SÁNG-hover.png', 2380000, 1, 'Áo vest nam Adam Store may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam Adam Store có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi. Lưu ý: - Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu. - Adam Store có dịch vụ may đo riêng theo yêu cầu.'),
(30, 4, 1, 'AVLH3254', 'ÁO VEST KẺ XANH AVLH32', 'ÁO-VEST-KẺ-XANH-AVLH32.png', 'ÁO-VEST-KẺ-XANH-AVLH32-hover.png', 2380000, 1, 'Áo vest nam Adam Store may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam Adam Store có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi. Lưu ý: - Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu. - Adam Store có dịch vụ may đo riêng theo yêu cầu.'),
(31, 5, 2, 'SDT000648', 'SƠ MI NAM HỌA TIẾT SDT0006', 'SƠ-MI-NAM-HỌA-TIẾT-SDT0006.png', 'SƠ-MI-NAM-HỌA-TIẾT-SDT0006.png', 600000, 1, ''),
(32, 5, 2, 'SDTT1154', 'SƠ MI NAM TÍM AD133', 'SƠ-MI-NAM-TÍM-AD133.png', 'SƠ-MI-NAM-TÍM-AD133.png', 600000, 1, ''),
(33, 5, 2, 'SMAS1134KG54', 'SƠ MI NAM KẺ GHI C119', 'SƠ-MI-NAM-KẺ-GHI-C119.png', 'SƠ-MI-NAM-KẺ-GHI-C119.png', 500000, 1, ''),
(34, 5, 2, 'SDTTK002256', 'SƠ MI NAM TRẮNG NẾN AD137', 'SƠ-MI-NAM-TRẮNG-NẾN-AD137.png', 'SƠ-MI-NAM-TRẮNG-NẾN-AD137.png', 750000, 1, ''),
(35, 5, 2, 'SDTT0954', 'SƠ MI NAM TRƠN MÀU AD139', 'SƠ-MI-NAM-TRƠN-MÀU-AD139.png', 'SƠ-MI-NAM-TRƠN-MÀU-AD139.png', 600000, 1, ''),
(36, 5, 2, '       SD1107XS54', ' ÁO SƠ MI NAM ADAM XANH SÁNG SD1107XS', 'ÁO-SƠ-MI-NAM-ADAM-XANH-SÁNG-SD1107XS.png', 'ÁO-SƠ-MI-NAM-ADAM-XANH-SÁNG-SD1107XS.png', 600000, 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttype`
--

CREATE TABLE `producttype` (
  `prdType_id` int(11) NOT NULL,
  `prdType_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `producttype`
--

INSERT INTO `producttype` (`prdType_id`, `prdType_name`) VALUES
(1, 'VEST ADAM'),
(2, 'SƠ MI ADAM'),
(3, 'ÁO POLO ADAM'),
(4, 'GIÀY DA ADAM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_full` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_full`, `user_mail`, `user_pass`, `user_level`) VALUES
(1, 'Administrator', 'admin@gmail.com', '123456', 1),
(2, 'Nguyễn Van A', 'nguyenvana@gmail.com', '123456', 1),
(3, 'Nguyễn Van B', 'nguyenvanb@gmail.com', '123456', 1),
(4, 'Nguyễn Van C', 'nguyenvanc@gmail.com', '123456', 1),
(5, 'Nguyễn Van D', 'nguyenvand@gmail.com', '123456', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comm_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderDetail_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`);

--
-- Chỉ mục cho bảng `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`prdType_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mail` (`user_mail`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderDetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `producttype`
--
ALTER TABLE `producttype`
  MODIFY `prdType_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
