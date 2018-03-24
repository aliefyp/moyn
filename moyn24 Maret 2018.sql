-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 10:28 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moyn`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_realized_project`
--

CREATE TABLE `img_realized_project` (
  `id_irp` int(11) NOT NULL,
  `id_rp` int(11) DEFAULT NULL,
  `deskripsi_irp` text,
  `url_irp` text,
  `active_irp` tinyint(1) DEFAULT NULL,
  `as_thumbnail_irp` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `eduted_by` varchar(50) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_realized_project`
--

INSERT INTO `img_realized_project` (`id_irp`, `id_rp`, `deskripsi_irp`, `url_irp`, `active_irp`, `as_thumbnail_irp`, `created_at`, `created_by`, `edited_at`, `eduted_by`, `deleted_at`, `deleted_by`) VALUES
(1, 12, NULL, 'upload/addregister.png', NULL, NULL, '2018-01-13 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(2, 12, NULL, 'upload/addverified.png', NULL, NULL, '2018-01-13 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(3, 15, NULL, 'upload/addverified2.png', NULL, NULL, '2018-01-13 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(4, 15, NULL, 'upload/ship.jpg', NULL, NULL, '2018-01-13 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(5, 15, NULL, 'upload/logos.png', NULL, NULL, '2018-01-13 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(8, 17, NULL, 'upload/temp1.png', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(9, 17, NULL, 'upload/qaimg.png', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(10, 19, NULL, 'upload/divyia1.jpg', NULL, NULL, '2018-01-24 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(11, 19, NULL, 'upload/John-Smith.jpg', NULL, NULL, '2018-01-24 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(12, 19, NULL, 'upload/Nicolai-Larson3.jpg', NULL, NULL, '2018-01-24 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(13, 20, NULL, 'upload/divyia4.jpg', NULL, NULL, '2018-01-28 11:57:26', 'admin', NULL, NULL, NULL, NULL),
(27, 16, NULL, 'upload/Screenshot_(1)2.png', NULL, NULL, '2018-02-16 13:39:20', 'admin', NULL, NULL, NULL, NULL),
(28, 16, NULL, 'upload/Screenshot_(8).png', NULL, NULL, '2018-02-16 13:39:20', 'admin', NULL, NULL, NULL, NULL),
(29, 16, NULL, 'upload/Screenshot_(1)3.png', NULL, NULL, '2018-02-16 13:39:20', 'admin', NULL, NULL, NULL, NULL),
(30, 6, NULL, 'upload/Screenshot_(7)4.png', NULL, NULL, '2018-02-16 14:49:44', 'admin', NULL, NULL, NULL, NULL),
(31, 6, NULL, 'upload/Screenshot_(11)1.png', NULL, NULL, '2018-02-16 14:49:44', 'admin', NULL, NULL, NULL, NULL),
(34, 7, NULL, 'upload/Screenshot_(1)7.png', NULL, NULL, '2018-02-16 16:56:04', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `img_shop_item`
--

CREATE TABLE `img_shop_item` (
  `id_img_item` int(11) NOT NULL,
  `id_item` int(11) DEFAULT NULL,
  `deskripsi_img_item` text,
  `url_img_item` text,
  `active_img_item` tinyint(1) DEFAULT NULL,
  `as_thumbnail_img_item` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_shop_item`
--

INSERT INTO `img_shop_item` (`id_img_item`, `id_item`, `deskripsi_img_item`, `url_img_item`, `active_img_item`, `as_thumbnail_img_item`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, NULL, 'upload/divyia3.jpg', NULL, NULL, '2018-01-27 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(2, 2, NULL, 'upload/darwin-logo2.png', NULL, NULL, '2018-01-27 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(3, 2, NULL, 'upload/PIN1.png', NULL, NULL, '2018-01-27 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(4, 3, NULL, 'upload/attach-yellow1.png', NULL, NULL, '2018-01-27 09:40:46', 'admin', NULL, NULL, NULL, NULL),
(5, 3, NULL, 'upload/ship1.jpg', NULL, NULL, '2018-01-27 09:40:46', 'admin', NULL, NULL, NULL, NULL),
(19, 5, NULL, 'upload/Screenshot_(13)6.png', NULL, NULL, '2018-02-16 14:35:31', 'admin', NULL, NULL, NULL, NULL),
(20, 5, NULL, 'upload/Screenshot_(12)3.png', NULL, NULL, '2018-02-16 14:35:31', 'admin', NULL, NULL, NULL, NULL),
(24, 6, NULL, 'upload/Screenshot_(12)4.png', NULL, NULL, '2018-02-16 14:47:15', 'admin', NULL, NULL, NULL, NULL),
(25, 6, NULL, 'upload/Screenshot_(12)5.png', NULL, NULL, '2018-02-16 14:47:15', 'admin', NULL, NULL, NULL, NULL),
(26, 6, NULL, 'upload/Screenshot_(11).png', NULL, NULL, '2018-02-16 14:47:15', 'admin', NULL, NULL, NULL, NULL),
(27, 4, NULL, 'upload/Screenshot_(12)6.png', NULL, NULL, '2018-02-16 14:47:33', 'admin', NULL, NULL, NULL, NULL),
(28, 7, NULL, 'upload/Screenshot_(12)9.png', NULL, NULL, '2018-03-24 16:13:16', 'admin', NULL, NULL, NULL, NULL),
(29, 7, NULL, 'upload/Screenshot_(11)4.png', NULL, NULL, '2018-03-24 16:13:16', 'admin', NULL, NULL, NULL, NULL),
(30, 8, NULL, 'upload/Screenshot_(12)10.png', NULL, NULL, '2018-03-24 16:14:26', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `img_studio`
--

CREATE TABLE `img_studio` (
  `id_istd` int(11) NOT NULL,
  `id_studio` int(11) DEFAULT NULL,
  `deskrispi_istd` text,
  `url_istd` text,
  `active_istd` tinyint(1) DEFAULT NULL,
  `as_thumbnail_istd` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_studio`
--

INSERT INTO `img_studio` (`id_istd`, `id_studio`, `deskrispi_istd`, `url_istd`, `active_istd`, `as_thumbnail_istd`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, NULL, 'upload/Osvaldus-Valutis1.jpg', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(2, 2, NULL, 'upload/Sergey-Azovskiy1.jpg', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(3, 3, NULL, 'upload/Nicolai-Larson2.jpg', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(4, 3, NULL, 'upload/Osvaldus-Valutis2.jpg', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(5, 3, NULL, 'upload/Stephanie-Walter.jpg', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `img_unbuilt_project`
--

CREATE TABLE `img_unbuilt_project` (
  `id_iup` int(11) NOT NULL,
  `id_up` int(11) DEFAULT NULL,
  `deskripsi_iup` text,
  `url_iup` text,
  `active_iup` tinyint(1) DEFAULT NULL,
  `as_thumbnail_iup` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_unbuilt_project`
--

INSERT INTO `img_unbuilt_project` (`id_iup`, `id_up`, `deskripsi_iup`, `url_iup`, `active_iup`, `as_thumbnail_iup`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 3, NULL, 'upload/Matt-Cheuvront1.jpg', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(2, 3, NULL, 'upload/Lee-Munroe.jpg', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(3, 4, NULL, 'upload/adam-jansen.jpg', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(4, 4, NULL, 'upload/bing.png', NULL, NULL, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `my_studio`
--

CREATE TABLE `my_studio` (
  `id_studio` int(11) NOT NULL,
  `name_studio` varchar(256) DEFAULT NULL,
  `type_studio` varchar(30) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_studio`
--

INSERT INTO `my_studio` (`id_studio`, `name_studio`, `type_studio`, `active`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'My Studio', 'Test Studio', 1, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(2, 'My Studio', 'Test Studio', 1, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `judul_news` varchar(100) DEFAULT NULL,
  `deskripsi_news` text,
  `bulan_news` varchar(15) DEFAULT NULL,
  `tahun_news` varchar(4) DEFAULT NULL,
  `url_img_news` text,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `judul_news`, `deskripsi_news`, `bulan_news`, `tahun_news`, `url_img_news`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(2, 'News 1', 'News 1', 'February', '2018', 'message_avatar21.png', '2018-02-12 20:58:16', 'admin', '2018-02-22 08:17:43', 'admin', NULL, NULL),
(4, 'News 2', 'News 2', 'February', '2018', 'Screenshot_(8)3.png', '2018-02-12 21:02:39', 'admin', '2018-02-22 08:19:50', 'admin', NULL, NULL),
(5, 'sdwqdqwqw', '0', 'February', '2018', NULL, '2018-02-12 21:04:29', 'admin', NULL, NULL, NULL, NULL),
(6, 'erwetrt567', 'tyiyi67ythnjf', 'February', '2018', NULL, '2018-02-12 21:06:23', 'admin', NULL, NULL, NULL, NULL),
(7, 'ghjyj', 'gjthreeg', 'February', '2018', 'message_avatar22.png', '2018-02-12 21:08:32', 'admin', NULL, NULL, NULL, NULL),
(8, 'News Pagi', 'Pagi pagi', 'February', '2018', 'Screenshot_(12)8.png', '2018-02-22 08:26:07', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `qty_order` int(11) DEFAULT NULL,
  `cust_name` varchar(50) DEFAULT NULL,
  `cust_email` varchar(50) DEFAULT NULL,
  `cust_phone` varchar(20) DEFAULT NULL,
  `shipping_addr` text,
  `item_order` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `qty_order`, `cust_name`, `cust_email`, `cust_phone`, `shipping_addr`, `item_order`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 'Alief', 'alip@hoho.com', '097356352', 'Slipi Jakarta Barat', 'asaaadsd', '2018-02-16 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(2, 1, 'Zola', 'zola@hoho.com', '09738928371', 'Jl. Garuda 20', 'wqwq land', '2018-02-17 00:00:00', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `realized_project`
--

CREATE TABLE `realized_project` (
  `id_rp` int(11) NOT NULL,
  `name_rp` varchar(256) DEFAULT NULL,
  `type_rp` varchar(30) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realized_project`
--

INSERT INTO `realized_project` (`id_rp`, `name_rp`, `type_rp`, `active`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(6, 'Test Project', 'wewqe', 1, NULL, NULL, '2018-03-24 16:27:08', 'admin', NULL, NULL),
(7, 'Kamarku Indah', 'Zola Project', 1, NULL, NULL, '2018-02-16 16:56:04', 'admin', NULL, NULL),
(8, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Test Project', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Test Project', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Kuning Project APP Haha', 'APP Haha', 1, NULL, NULL, '2018-02-16 16:54:53', 'admin', NULL, NULL),
(19, 'Kamarku', 'Private', 1, '2018-01-24 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(20, 'asad', 'sds', 1, '2018-01-28 11:57:25', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_item`
--

CREATE TABLE `shop_item` (
  `id_item` int(11) NOT NULL,
  `name_item` varchar(256) DEFAULT NULL,
  `deskripsi_item` text,
  `active` tinyint(1) DEFAULT NULL,
  `price_item` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_item`
--

INSERT INTO `shop_item` (`id_item`, `name_item`, `deskripsi_item`, `active`, `price_item`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Taman Pintar', 'Taman pintar anak-anak', 1, 0, '2018-01-27 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(2, 'Taman Pintar', 'Taman pintar anak-anak', 1, 0, '2018-01-27 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(3, 'Testing Shop', 'sekedar percobaan', 1, 0, '2018-01-27 09:40:46', 'admin', NULL, NULL, NULL, NULL),
(4, 'Taman Pintar Solo Raya', 'Solo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of JavargtereSolo spirit of Javargtere', 1, 500000000, '2018-01-27 09:42:19', 'admin', '2018-02-16 14:47:33', 'admin', NULL, NULL),
(5, 'Kos Mewah', 'Kos Premium', 1, 12000000, '2018-01-27 09:46:30', 'admin', '2018-02-16 14:35:31', 'admin', NULL, NULL),
(6, 'khjfhewh', 'oiuiewhfnsdjkfhshdfcjkshduifhirgergergerg', 1, 2312112, NULL, NULL, '2018-02-16 14:47:15', 'admin', NULL, NULL),
(7, 'Cek', 'Cek', 1, 122323231, NULL, NULL, '2018-03-24 16:13:15', 'admin', NULL, NULL),
(8, 'sda', 'fsdfsd', 1, 2312312, NULL, NULL, '2018-03-24 16:14:26', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unbuilt_project`
--

CREATE TABLE `unbuilt_project` (
  `id_up` int(11) NOT NULL,
  `name_up` varchar(256) DEFAULT NULL,
  `type_up` varchar(30) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unbuilt_project`
--

INSERT INTO `unbuilt_project` (`id_up`, `name_up`, `type_up`, `active`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Unbuilt One', 'Testing', 1, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(2, 'Unbuilt One', 'Testing', 1, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL),
(3, 'Unbuilt One', 'Testing', 1, '2018-01-14 00:00:00', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `active`) VALUES
(1, 'admin', '88A2F0C66A0FE8E3FCAF487A0AF5BE77', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_realized_project`
--
ALTER TABLE `img_realized_project`
  ADD PRIMARY KEY (`id_irp`);

--
-- Indexes for table `img_shop_item`
--
ALTER TABLE `img_shop_item`
  ADD PRIMARY KEY (`id_img_item`);

--
-- Indexes for table `img_studio`
--
ALTER TABLE `img_studio`
  ADD PRIMARY KEY (`id_istd`);

--
-- Indexes for table `img_unbuilt_project`
--
ALTER TABLE `img_unbuilt_project`
  ADD PRIMARY KEY (`id_iup`);

--
-- Indexes for table `my_studio`
--
ALTER TABLE `my_studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `realized_project`
--
ALTER TABLE `realized_project`
  ADD PRIMARY KEY (`id_rp`);

--
-- Indexes for table `shop_item`
--
ALTER TABLE `shop_item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `unbuilt_project`
--
ALTER TABLE `unbuilt_project`
  ADD PRIMARY KEY (`id_up`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_realized_project`
--
ALTER TABLE `img_realized_project`
  MODIFY `id_irp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `img_shop_item`
--
ALTER TABLE `img_shop_item`
  MODIFY `id_img_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `img_studio`
--
ALTER TABLE `img_studio`
  MODIFY `id_istd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `img_unbuilt_project`
--
ALTER TABLE `img_unbuilt_project`
  MODIFY `id_iup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `my_studio`
--
ALTER TABLE `my_studio`
  MODIFY `id_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `realized_project`
--
ALTER TABLE `realized_project`
  MODIFY `id_rp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `shop_item`
--
ALTER TABLE `shop_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `unbuilt_project`
--
ALTER TABLE `unbuilt_project`
  MODIFY `id_up` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
