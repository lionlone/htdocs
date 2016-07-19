-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2016 at 06:09 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shop_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `key`, `data`) VALUES
(1, 'copyright', 'Copyright © 2016. All Rights Reserved by Group 1 LT0715'),
(2, 'Youtube', 'https://www.youtube.com/'),
(3, 'Instagram', 'https://www.instagram.com'),
(4, 'Facebook', 'https://www.facebook.com'),
(5, 'Twitter', 'https://twitter.com/'),
(6, 'Google', 'https://plus.google.com'),
(7, 'CSKH', '1900 545 545'),
(8, 'MuaHang', '1900 545 546'),
(9, 'Hotline', '0963 64 9191'),
(10, 'logo', '');

-- --------------------------------------------------------

--
-- Table structure for table `listshop`
--

CREATE TABLE `listshop` (
  `idshop` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `linkshop` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `listcatid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vi_nameshop` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vi_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vi_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `vi_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listshop`
--

INSERT INTO `listshop` (`idshop`, `userid`, `linkshop`, `website`, `listcatid`, `vi_nameshop`, `vi_address`, `vi_phone`, `vi_email`) VALUES
(1, 1, 'shopdienthoai', 'shopdienthoai.com', '1,2', 'Cửa hàng điện thoại', 'Số 1 - Xuân Thủy - Cầu Giấy - Hà Nội', '01683216444', 'nguyentrongtuan@gmail.com'),
(2, 2, 'shoponline', 'shoponline.com', '2,3', 'Shop bán hàng online', '175 Xuân Thủy - Cầu Giấy - Hà Nội', '01686100030', 'botxabong009@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(11) NOT NULL,
  `lat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `lng` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DiaDiem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Kieu` tinyint(3) UNSIGNED NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `DanhGia` double UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `lat`, `lng`, `DiaDiem`, `DiaChi`, `avatar`, `Kieu`, `MoTa`, `DanhGia`) VALUES
(1, '21.0390151', '105.786067', 'Khu tập thể Đại học Sư phạm, Dịch Vọng Hậu, Cầu Gi', 'Khu tập thể Đại học Sư phạm, Dịch Vọng Hậu, Cầu Giấy, Hà Nội, Việt Nam', '17072016193757.png', 0, 'Khu tập thể Đại học Sư phạm, Dịch Vọng Hậu, Cầu Giấy, Hà Nội, Việt Nam', 5);

-- --------------------------------------------------------

--
-- Table structure for table `shops_catalogs`
--

CREATE TABLE `shops_catalogs` (
  `catid` mediumint(8) UNSIGNED NOT NULL,
  `parentid` mediumint(8) UNSIGNED NOT NULL DEFAULT '0',
  `subcatid` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `add_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `edit_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `vi_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_alias` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_descriptionhtml` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops_catalogs`
--

INSERT INTO `shops_catalogs` (`catid`, `parentid`, `subcatid`, `add_time`, `edit_time`, `vi_title`, `vi_alias`, `vi_description`, `vi_descriptionhtml`) VALUES
(2, 0, '6,7,8,9,23,26', 1432362728, 1432362803, 'Váy', 'Vay-nu', '', ''),
(3, 0, '13,14,15,16', 1432362789, 1432362789, 'Giày dép', 'Giay-dep', '', ''),
(4, 0, '10,11,12', 1432362835, 1432364806, 'Áo', 'Ao', '', ''),
(5, 0, '18,19,20,21,22', 1432362887, 1432362887, 'Phụ kiện', 'Phu-kien', '', ''),
(6, 2, '', 1432364675, 1432364675, 'váy dài', 'vay-dai', '', ''),
(7, 2, '', 1432364695, 1432364695, 'váy ngắn', 'vay-ngan', '', ''),
(8, 2, '', 1432364752, 1432364752, 'đầm maxi', 'dam-maxi', '', ''),
(9, 2, '', 1432364786, 1432364786, 'Váy chữ A', 'Vay-chu-A', '', ''),
(10, 4, '', 1432364825, 1432364863, 'Áo sơmi', 'Ao-somi', '', ''),
(11, 4, '', 1432364880, 1432364880, 'Áo phông', 'Ao-phong', '', ''),
(12, 4, '', 1432364936, 1432364936, 'Áo dáng dài', 'Ao-dang-dai', '', ''),
(13, 3, '', 1432364976, 1432364976, 'Giày cao gót', 'Giay-cao-got', '', ''),
(14, 3, '', 1432365033, 1432365033, 'Giày sandal', 'Giay-sandal', '', ''),
(15, 3, '', 1432365081, 1432365081, 'Giày búp bê', 'Giay-bup-be', '', ''),
(16, 3, '', 1432365108, 1432365108, 'Giày vải', 'Giay-vai', '', ''),
(19, 5, '', 1432365211, 1432365211, 'Lắc tay', 'Lac-tay', '', ''),
(18, 5, '', 1432365185, 1432365185, 'Vòng cổ', 'Phu-kien-Vong-co', '', ''),
(20, 5, '', 1432365242, 1432365242, 'Thắt lưng', 'That-lung', '', ''),
(21, 5, '', 1432365281, 1432365281, 'Đồng hồ', 'Dong-ho', '', ''),
(22, 5, '', 1432365303, 1432365303, 'Ví nữ', 'Vi-nu', '', ''),
(23, 2, '24', 1465406710, 1465406710, 'Váy chữ B', 'vay-chu-b', '', ''),
(24, 23, '', 1465406737, 1465406737, 'Ten Váy chữ A', 'ten-vay-chu-a', '', ''),
(26, 2, '', 1465535034, 1465535034, 'Tên loại sản phẩm', 'ten-loai-san-pham', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `shops_product`
--

CREATE TABLE `shops_product` (
  `idproduct` int(11) UNSIGNED NOT NULL,
  `listcatid` int(11) NOT NULL DEFAULT '0',
  `idshop` int(11) NOT NULL,
  `user_id` mediumint(8) NOT NULL DEFAULT '0',
  `addtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `product_number` int(11) NOT NULL DEFAULT '0',
  `product_price` float NOT NULL DEFAULT '0',
  `money_unit` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_unit` smallint(4) NOT NULL,
  `product_weight` float NOT NULL DEFAULT '0',
  `weight_unit` char(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `discount_id` smallint(6) NOT NULL DEFAULT '0',
  `homeimgfile` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `homeimgalt` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_alias` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_hometext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_bodytext` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_gift_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_address` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops_product`
--

INSERT INTO `shops_product` (`idproduct`, `listcatid`, `idshop`, `user_id`, `addtime`, `product_number`, `product_price`, `money_unit`, `product_unit`, `product_weight`, `weight_unit`, `discount_id`, `homeimgfile`, `homeimgalt`, `vi_title`, `vi_alias`, `vi_hometext`, `vi_bodytext`, `vi_gift_content`, `vi_address`) VALUES
(1, 6, 0, 1, 1432363521, 19, 100000, 'VND', 1, 20, 'g', 0, '2015_05/giay-bup-be-ngoi-sao-nhap-khau.jpg', 'Váy Maxi sang trọng', 'Đầm Maxi sang trọng', 'Dam-Maxi-sang-trong', 'Đầm maxi thời trang', 'Sản phẩm thời trang<br  /> <div style="text-align:center"><img alt="giay bup be ngoi sao nhap khau" height="800" src="/uploads/shops/2015_05/giay-bup-be-ngoi-sao-nhap-khau.jpg" width="800" /></div> ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` mediumint(8) UNSIGNED NOT NULL,
  `group_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `gender` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `birthday` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `view_mail` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `in_groups` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `active` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `checknum` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `siteid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `group_id`, `username`, `password`, `email`, `first_name`, `last_name`, `gender`, `photo`, `birthday`, `question`, `answer`, `view_mail`, `in_groups`, `active`, `checknum`, `siteid`) VALUES
(1, 1, 'Administrator', '{SSHA}wui6PYmX7eXoLNuDCML2mZQBnLBhM3J5', 'botxabong009@gmail.com', 'Administrator', '', '', '', 0, 'cau hoi', 'tra loi', 0, '1', 1, '', 0),
(2, 2, 'admin', '{SSHA}JKsh8c2O1SC7f3l8Qo81dyGZPwxadkdq', 'nguyentrongtuan.st@gmail.com', 'admin', '', 'M', '', 1465491600, 'cau hoi', 'tra loi', 0, '2', 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `group_id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(240) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `group_type` tinyint(4) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0:Sys, 1:approval, 2:public',
  `group_color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `is_default`, `add_time`) VALUES
(1, 'Super admin', '', 'Super Admin', '', 0, '', '', 0, 1464934750),
(2, 'General admin', '', 'General Admin', '', 0, '', '', 0, 1464934750),
(3, 'Module admin', '', 'Module Admin', '', 0, '', '', 0, 1464934750),
(4, 'Users', '', 'Users', '', 0, '', '', 0, 1464934750),
(7, 'New Users', '', 'New Users', '', 0, '', '', 0, 1464934750),
(5, 'Guest', '', 'Guest', '', 0, '', '', 0, 1464934750),
(6, 'All', '', 'All', '', 0, '', '', 0, 1464934750);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listshop`
--
ALTER TABLE `listshop`
  ADD PRIMARY KEY (`idshop`),
  ADD UNIQUE KEY `linkshop` (`linkshop`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops_catalogs`
--
ALTER TABLE `shops_catalogs`
  ADD PRIMARY KEY (`catid`),
  ADD UNIQUE KEY `vi_alias` (`vi_alias`),
  ADD KEY `parentid` (`parentid`);

--
-- Indexes for table `shops_product`
--
ALTER TABLE `shops_product`
  ADD PRIMARY KEY (`idproduct`),
  ADD UNIQUE KEY `vi_alias` (`vi_alias`),
  ADD KEY `listcatid` (`listcatid`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idsite` (`siteid`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `ktitle` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `listshop`
--
ALTER TABLE `listshop`
  MODIFY `idshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shops_catalogs`
--
ALTER TABLE `shops_catalogs`
  MODIFY `catid` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `shops_product`
--
ALTER TABLE `shops_product`
  MODIFY `idproduct` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `group_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
