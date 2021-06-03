-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 03, 2021 lúc 07:54 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kitaab`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `matkhau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `hoten`, `email`, `matkhau`) VALUES
(1, 'xuanquy', 'xuanquy1120@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(250) NOT NULL,
  `idkh` int(250) NOT NULL,
  `idsp` int(250) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `tensp` varchar(200) NOT NULL,
  `giasp` int(11) NOT NULL,
  `soluong` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `idkh`, `idsp`, `hinhanh`, `tensp`, `giasp`, `soluong`) VALUES
(9, 2, 6, '../admin/pimages/harrypotter.jpg', 'harrypotter', 200000, 1),
(10, 2, 7, '../admin/pimages/class12 flemingo.jpg', 'class12 flemingo', 120000, 3),
(11, 1, 5, '../admin/pimages/crimson.jpg', 'crimson', 200000, 1),
(12, 2, 5, '../admin/pimages/crimson.jpg', 'crimson', 200000, 1),
(13, 1, 6, '../admin/pimages/harrypotter.jpg', 'harrypotter', 200000, 1),
(14, 1, 7, '../admin/pimages/class12 flemingo.jpg', 'class12 flemingo', 120000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `ngayhd` date NOT NULL,
  `tongtien` int(11) NOT NULL,
  `hinhthuc` varchar(200) NOT NULL,
  `tinhtrang` varchar(200) NOT NULL,
  `soluongsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `idkh`, `ngayhd`, `tongtien`, `hinhthuc`, `tinhtrang`, `soluongsp`) VALUES
(59, 1, '2021-06-03', 500000, 'Ví điện tử', 'Đã giao', 4),
(61, 2, '2021-06-04', 760000, 'Ví điện tử', 'Chưa giao', 5),
(63, 1, '2021-06-04', 700000, 'Tiền mặt', 'Đã giao', 5),
(64, 1, '2021-06-04', 700000, 'Ví điện tử', 'Chưa giao', 5),
(65, 1, '2021-06-04', 520000, 'Tiền mặt', 'Chưa giao', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `matkhau` varchar(200) NOT NULL,
  `nlmatkhau` varchar(250) NOT NULL,
  `anhdaidien` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `hoten`, `diachi`, `gioitinh`, `ngaysinh`, `sdt`, `email`, `matkhau`, `nlmatkhau`, `anhdaidien`) VALUES
(1, 'Nguyễn Xuân Quý', 'Định Công Thượng', 'nam', '2000-01-01', '0349593356', 'xuanquy1120@gmail.com', '123456', '123456', 'anh-dai-dien.jpg'),
(2, 'test1', 'Việt nam', 'Nữ', '2021-06-14', '0349593357', 'test1@gmail.com', '123456', '123456', 'trainers-with-broguing-slogan.png'),
(3, 'test2', 'Viet Nam', 'Khác', '2021-06-15', '123456789', 'test2@gmail.com', '123456', '123456', 'Fashion-Elements-In-This-Right-Summer.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(200) NOT NULL,
  `mota` varchar(200) NOT NULL,
  `tacgia` varchar(100) NOT NULL,
  `theloai` varchar(200) NOT NULL,
  `anh` varchar(200) NOT NULL,
  `giaban` int(11) NOT NULL,
  `giakhautru` int(11) NOT NULL,
  `giagoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `mota`, `tacgia`, `theloai`, `anh`, `giaban`, `giakhautru`, `giagoc`) VALUES
(1, '12 years a slave', 'miêu tả', 'Nguyen van A', 'Kinh dị', '12 years a slave.jpg', 100000, 20000, 120000),
(5, 'crimson', 'miêu tả', 'Nguyen Van C', 'Tưởng tượng', 'crimson.jpg', 200000, 20000, 220000),
(6, 'harrypotter', 'miêu  tả', 'Nguyen Van E', 'Tưởng tượng', 'harrypotter.jpg', 200000, 100000, 300000),
(7, 'class12 flemingo', 'miêu tả', 'Nguyen Van N', 'Truyện tranh', 'class12 flemingo.jpg', 120000, 20000, 140000),
(8, 'cat book', 'miêu tả', 'Nguyen Van R', 'Trẻ em', 'cat book.jpg', 150000, 50000, 200000),
(9, 'the-power-of-your-subconscious-mind-original', 'miêu tả', 'Nguyen Van I', 'Giáo dục', 'the-power-of-your-subconscious-mind-original-imafwwgwebjdvgjh.jpeg', 100000, 20000, 120000),
(10, 'Lý luận và phê bình văn học', 'miêu tả', 'Nguyen Van O', 'Sách văn học', 'images.jpg', 25000, 5000, 30000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkhachhang1` (`idkh`),
  ADD KEY `idsp1` (`idsp`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkh2` (`idkh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `idkhachhang1` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `idsp1` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `idkh2` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
