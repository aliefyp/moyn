-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 10:57 AM
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
  `created_at` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` date DEFAULT NULL,
  `eduted_by` varchar(50) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_realized_project`
--

INSERT INTO `img_realized_project` (`id_irp`, `id_rp`, `deskripsi_irp`, `url_irp`, `active_irp`, `as_thumbnail_irp`, `created_at`, `created_by`, `edited_at`, `eduted_by`, `deleted_at`, `deleted_by`) VALUES
(1, 12, NULL, 'addregister.png', NULL, NULL, '2018-01-13', 'admin', NULL, NULL, NULL, NULL),
(2, 12, NULL, 'addverified.png', NULL, NULL, '2018-01-13', 'admin', NULL, NULL, NULL, NULL),
(3, 15, NULL, 'upload/addverified2.png', NULL, NULL, '2018-01-13', 'admin', NULL, NULL, NULL, NULL),
(4, 15, NULL, 'upload/ship.jpg', NULL, NULL, '2018-01-13', 'admin', NULL, NULL, NULL, NULL),
(5, 15, NULL, 'upload/logos.png', NULL, NULL, '2018-01-13', 'admin', NULL, NULL, NULL, NULL),
(6, 16, NULL, 'upload/attach-yellow.png', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(7, 16, NULL, 'upload/darwin-logo.png', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(8, 17, NULL, 'upload/temp1.png', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(9, 17, NULL, 'upload/qaimg.png', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL);

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
  `created_at` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` date DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `created_at` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` date DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_studio`
--

INSERT INTO `img_studio` (`id_istd`, `id_studio`, `deskrispi_istd`, `url_istd`, `active_istd`, `as_thumbnail_istd`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, NULL, 'upload/Osvaldus-Valutis1.jpg', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(2, 2, NULL, 'upload/Sergey-Azovskiy1.jpg', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(3, 3, NULL, 'upload/Nicolai-Larson2.jpg', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(4, 3, NULL, 'upload/Osvaldus-Valutis2.jpg', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(5, 3, NULL, 'upload/Stephanie-Walter.jpg', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL);

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
  `created_at` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` date DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_unbuilt_project`
--

INSERT INTO `img_unbuilt_project` (`id_iup`, `id_up`, `deskripsi_iup`, `url_iup`, `active_iup`, `as_thumbnail_iup`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 3, NULL, 'upload/Matt-Cheuvront1.jpg', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(2, 3, NULL, 'upload/Lee-Munroe.jpg', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(3, 4, NULL, 'upload/adam-jansen.jpg', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(4, 4, NULL, 'upload/bing.png', NULL, NULL, '2018-01-14', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `my_studio`
--

CREATE TABLE `my_studio` (
  `id_studio` int(11) NOT NULL,
  `name_studio` varchar(256) DEFAULT NULL,
  `type_studio` varchar(30) DEFAULT NULL,
  `active_studio` tinyint(1) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` date DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_studio`
--

INSERT INTO `my_studio` (`id_studio`, `name_studio`, `type_studio`, `active_studio`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'My Studio', 'Test Studio', 1, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(2, 'My Studio', 'Test Studio', 1, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(3, 'Tegalan Gawe', 'MMM', 1, '2018-01-14', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `realized_project`
--

CREATE TABLE `realized_project` (
  `id_rp` int(11) NOT NULL,
  `name_rp` varchar(256) DEFAULT NULL,
  `type_rp` varchar(30) DEFAULT NULL,
  `active_rp` tinyint(1) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` date DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realized_project`
--

INSERT INTO `realized_project` (`id_rp`, `name_rp`, `type_rp`, `active_rp`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Test Project', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Test Project', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Test Project', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Test Project', 'Testing', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Zola Project', 'Stage', 1, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(18, 'Test Project', 'Testing', 1, '2018-01-14', 'admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_item`
--

CREATE TABLE `shop_item` (
  `id_item` int(11) NOT NULL,
  `name_item` varchar(256) DEFAULT NULL,
  `deskripsi_item` text,
  `active_item` tinyint(1) DEFAULT NULL,
  `price_item` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` date DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unbuilt_project`
--

CREATE TABLE `unbuilt_project` (
  `id_up` int(11) NOT NULL,
  `name_up` varchar(256) DEFAULT NULL,
  `type_up` varchar(30) DEFAULT NULL,
  `active_up` tinyint(1) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `edited_at` date DEFAULT NULL,
  `edited_by` varchar(50) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unbuilt_project`
--

INSERT INTO `unbuilt_project` (`id_up`, `name_up`, `type_up`, `active_up`, `created_at`, `created_by`, `edited_at`, `edited_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Unbuilt One', 'Testing', 1, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(2, 'Unbuilt One', 'Testing', 1, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(3, 'Unbuilt One', 'Testing', 1, '2018-01-14', 'admin', NULL, NULL, NULL, NULL),
(4, 'Panjul Project', 'Check', 1, '2018-01-14', 'admin', NULL, NULL, NULL, NULL);

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
  MODIFY `id_irp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `img_shop_item`
--
ALTER TABLE `img_shop_item`
  MODIFY `id_img_item` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `realized_project`
--
ALTER TABLE `realized_project`
  MODIFY `id_rp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `shop_item`
--
ALTER TABLE `shop_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unbuilt_project`
--
ALTER TABLE `unbuilt_project`
  MODIFY `id_up` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
