-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 07:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metashare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `code` char(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(225) NOT NULL DEFAULT 'example@email.com',
  `password` varchar(255) NOT NULL DEFAULT '$2y$10$RSp/Li8NnWnED7.4.l3VCuy5O597nSzX0wbjmRZYpv5NLlx05u906',
  `image` varchar(255) NOT NULL DEFAULT 'profile.png',
  `address` text DEFAULT NULL,
  `level` enum('su-admin','admin','') NOT NULL DEFAULT 'admin',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `code`, `name`, `phone`, `email`, `password`, `image`, `address`, `level`, `status`, `create_time`, `update_time`) VALUES
(8, 'ADMT001', 'Bayu Purnomo', '0881278635', 'bayupaths@gmail.com', '$2y$10$tcWI90daDC6AJBFBfL1mIOTwRql8T8m9ItjVTgNZkyR.yItNBY7dC', 'profile.png', 'Desa Susukan RT 02 RW 03, Kecamatan Sumbang, Kabupaten Banyumas,  Jawa Tengah 53183', 'su-admin', 1, '2022-10-04 04:15:29', '2022-10-04 07:28:32'),
(11, 'ADMT002', 'Tegar Kusuma', '0881278635', 'tegarkz76@gmail.com', '$2y$10$tcWI90daDC6AJBFBfL1mIOTwRql8T8m9ItjVTgNZkyR.yItNBY7dC', 'profile.png', 'Pliken Kembaran', 'admin', 1, '2022-10-06 06:49:10', '2022-11-27 09:50:34'),
(51, 'ADMT004', 'K\'Sante', '3016126311235', 'ksante@email.com', '$2y$10$FPXo2nbOt8blGGQ1stqAMukBHqtsJyKwB9qU0d8Uja7swndAgjQZO', 'profile.png', 'Shurima Empire', 'admin', 1, '2022-11-07 08:25:28', '2022-11-10 00:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT 'example@email.com',
  `password` varchar(255) NOT NULL DEFAULT '$2y$10$ly.UyvwaDsYXIFoAMKjOVe88srLgQ.PLVI2g6B5iHRRPgVodpOJ2i',
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `name`, `phone`, `email`, `password`, `image`, `status`, `create_time`, `update_time`) VALUES
(76, 'Dakimura', '08841124', 'dakimura@email.com', '$2y$10$ly.UyvwaDsYXIFoAMKjOVe88srLgQ.PLVI2g6B5iHRRPgVodpOJ2i', 'default.jpg', 0, '2022-10-27 10:15:32', NULL),
(103, 'Danang Budiman', '0535 7901 965', 'rahayu.ulva@gmail.co.id', '$2y$10$YuQJRRGUXP/79fmc1UCciunyvsg5SJe1pcLIpmFImYgVng.upEnjW', 'default.jpg', 0, '2022-10-27 10:25:47', '2022-11-14 07:22:20'),
(104, 'Dwi Raden Nashiruddin', '(+62) 915 3904 5028', 'mahmud59@yahoo.com', '$2y$10$ly.UyvwaDsYXIFoAMKjOVe88srLgQ.PLVI2g6B5iHRRPgVodpOJ2i', 'default.jpg', 1, '2022-10-27 10:25:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `git_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bank` varchar(255) NOT NULL,
  `number_account` varchar(255) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE `invitation` (
  `invitation_id` int(10) UNSIGNED NOT NULL,
  `cover_image1` varchar(255) NOT NULL,
  `cover_image2` varchar(255) NOT NULL,
  `groom_name` varchar(255) NOT NULL,
  `groom_nickname` varchar(255) NOT NULL,
  `groom_address` text NOT NULL,
  `groom_father` varchar(255) NOT NULL,
  `groom_mother` varchar(255) NOT NULL,
  `groom_ig` varchar(255) NOT NULL,
  `groom_son` smallint(6) NOT NULL,
  `bride_name` varchar(255) NOT NULL,
  `bride_nickname` varchar(255) NOT NULL,
  `bridge_address` varchar(255) NOT NULL,
  `bride_father` varchar(255) NOT NULL,
  `bride_mother` varchar(255) NOT NULL,
  `bride_ig` varchar(255) NOT NULL,
  `bride_daughter` smallint(6) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `code` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`invitation_id`, `cover_image1`, `cover_image2`, `groom_name`, `groom_nickname`, `groom_address`, `groom_father`, `groom_mother`, `groom_ig`, `groom_son`, `bride_name`, `bride_nickname`, `bridge_address`, `bride_father`, `bride_mother`, `bride_ig`, `bride_daughter`, `slug`, `code`) VALUES
(2, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', 'ASDA1414222');

-- --------------------------------------------------------

--
-- Table structure for table `invited_guest`
--

CREATE TABLE `invited_guest` (
  `guest_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invited_guest`
--

INSERT INTO `invited_guest` (`guest_id`, `name`, `create_at`, `update_at`, `invitation_id`) VALUES
(7, 'Bayu Purnomo', '2022-11-28 09:26:22', '2022-11-28 09:26:22', 2),
(8, 'Bayu Purnomo', '2022-11-28 09:48:39', '2022-11-28 09:48:39', 2),
(9, 'Naruto', '2022-11-28 09:48:39', '2022-11-28 09:48:39', 2),
(10, 'Sasuke', '2022-11-28 09:48:39', '2022-11-28 09:48:39', 2);

-- --------------------------------------------------------

--
-- Table structure for table `love_story`
--

CREATE TABLE `love_story` (
  `story_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `date` date NOT NULL,
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `message` text NOT NULL,
  `status` smallint(2) NOT NULL DEFAULT 0,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `model_invitation`
--

CREATE TABLE `model_invitation` (
  `model_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(125) NOT NULL,
  `category` varchar(125) NOT NULL,
  `price` float NOT NULL,
  `view_model` varchar(255) NOT NULL,
  `cover_1` varchar(255) NOT NULL DEFAULT 'default_1.svg',
  `cover_2` varchar(255) NOT NULL DEFAULT 'default_2.svg',
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model_invitation`
--

INSERT INTO `model_invitation` (`model_id`, `name`, `type`, `category`, `price`, `view_model`, `cover_1`, `cover_2`, `create_time`, `update_time`) VALUES
(231, 'Gun and Roses', 'islamic', 'special', 150000, 'sp_53810', 'b2639e6054295573221871c009763afa.svg', '910dde9999b92693a9357298e93fd1db.svg', '2022-11-18 14:19:34', '2022-11-18 14:19:34'),
(232, 'Violet and Blue', 'islamic', 'standard', 130000, 'st_24926', '14d52a62ee53b3838b7788c5cf4610c2.svg', 'ac0b6a6a850ab6a7bd968fd3980cd6e8.svg', '2022-11-18 14:20:07', '2022-11-18 14:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `gallery_id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `invitaion_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `token_login`
--

CREATE TABLE `token_login` (
  `token_id` int(100) UNSIGNED NOT NULL,
  `access_token` text NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token_login`
--

INSERT INTO `token_login` (`token_id`, `access_token`, `login_time`) VALUES
(4, '$1$hFN6FkJM$rb963HPR0F15t/gxPqCcO1', '2022-11-03 14:07:52'),
(5, '$1$grcK5Czr$4FJVU2Lv4QKWfeSl898jf0', '2022-11-07 08:10:39'),
(6, '$1$bqX6nx/j$GD7ZSOWkfAXH90YwFMknH1', '2022-11-09 06:21:59'),
(7, '$1$mxcTLop5$G9NeW.MgNjoGlFGFHAnR80', '2022-11-10 00:43:46'),
(8, '$1$D83y7FFu$MxQrmJONCuZlLREFnaQmH1', '2022-11-14 00:14:49'),
(10, '$1$VVgHIPhq$V729pBHGlu4s6u5nNjtof1', '2022-11-14 07:13:24'),
(11, '$1$D7xSzRs2$ZAICpYOAFsXSLIRn/mn0k/', '2022-11-15 12:30:43'),
(12, '$1$VCQn3gpB$t1Fe8Uq5t827581lcXrzF1', '2022-11-16 06:23:05'),
(13, '$1$Rs08oNMj$SFKJ6Va/ikS3eTCApKAoZ/', '2022-11-16 23:48:06'),
(17, '$1$mb7EvXtb$DI8jx9xPoObgnnwbGyfAS1', '2022-11-19 05:43:54'),
(18, '$1$eawT1n43$3.Ifvs3x/4TM4scL1aDtX/', '2022-11-22 03:40:38'),
(21, '$1$ARtAopa/$Jm.qkbodgcGRlyLduBznh/', '2022-11-27 08:17:43'),
(25, '$1$RRyJ9aJ8$5ODy6dYnjeBHiqs0yLkjt1', '2022-11-28 06:29:22'),
(26, '$1$kNRLUzFH$jYV8dRfqqNeFBD.V0rBA31', '2022-11-29 00:38:04'),
(27, '$1$Oz7vNtvv$ucdA.duOpbctd6rHRgPWh/', '2022-11-29 06:21:55'),
(28, '$1$7ZKfb/tL$B9oFPpPNrrART.LyIGdQu.', '2022-11-29 06:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(18) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `active` datetime DEFAULT NULL,
  `desc` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `proof` varchar(255) NOT NULL DEFAULT 'null',
  `status` tinyint(3) NOT NULL DEFAULT 0,
  `cus_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT 0,
  `model_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `code`, `date`, `active`, `desc`, `proof`, `status`, `cus_id`, `admin_id`, `model_id`) VALUES
(15, 'ASDA1414221', '2022-11-19 05:48:01', NULL, 1, 'f683957a55ebf0948a7989a7bfcc662a.jpg', 0, 103, 11, 232),
(16, 'ASDA1414222', '2022-11-19 05:48:01', NULL, 1, 'null', 0, 104, 11, 231),
(17, 'ASDA1414223', '2022-10-19 05:48:01', NULL, 0, 'ad5523b257c113887beab0247b7e07ab.jpg', 0, 104, 51, 231);

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `wedding_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `address` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `maps` varchar(255) NOT NULL,
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `code_UNIQUE` (`code`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`git_id`),
  ADD KEY `gifts_invitation_id_index` (`invitation_id`);

--
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`invitation_id`);

--
-- Indexes for table `invited_guest`
--
ALTER TABLE `invited_guest`
  ADD PRIMARY KEY (`guest_id`),
  ADD KEY `invited_guest_invitation_id_index` (`invitation_id`);

--
-- Indexes for table `love_story`
--
ALTER TABLE `love_story`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `love_story_invitation_id_index` (`invitation_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `message_invitation_id_foreign` (`invitation_id`);

--
-- Indexes for table `model_invitation`
--
ALTER TABLE `model_invitation`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `photo_gallery_invitaion_id_index` (`invitaion_id`);

--
-- Indexes for table `token_login`
--
ALTER TABLE `token_login`
  ADD PRIMARY KEY (`token_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_UNIQUE` (`code`),
  ADD KEY `transaction_model_id_index` (`model_id`),
  ADD KEY `foreign_cus_id_idx` (`cus_id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`wedding_id`),
  ADD KEY `wedding_wedding_id_foreign_idx` (`invitation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `gifts`
--
ALTER TABLE `gifts`
  MODIFY `git_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `invitation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invited_guest`
--
ALTER TABLE `invited_guest`
  MODIFY `guest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `love_story`
--
ALTER TABLE `love_story`
  MODIFY `story_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `model_invitation`
--
ALTER TABLE `model_invitation`
  MODIFY `model_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `gallery_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `token_login`
--
ALTER TABLE `token_login`
  MODIFY `token_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `wedding_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gifts`
--
ALTER TABLE `gifts`
  ADD CONSTRAINT `gifts_invitation_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Constraints for table `invited_guest`
--
ALTER TABLE `invited_guest`
  ADD CONSTRAINT `invited_guest_invitation_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Constraints for table `love_story`
--
ALTER TABLE `love_story`
  ADD CONSTRAINT `love_story_invitation_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_invitation_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Constraints for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD CONSTRAINT `photo_gallery_invitaion_id_foreign` FOREIGN KEY (`invitaion_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `foreign_cus_id` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `model_invitation` (`model_id`);

--
-- Constraints for table `wedding`
--
ALTER TABLE `wedding`
  ADD CONSTRAINT `wedding_wedding_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `wedding` (`wedding_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
