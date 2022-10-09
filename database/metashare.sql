-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 04:50 PM
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
  `position` enum('founder','co-founder','') NOT NULL DEFAULT '',
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

INSERT INTO `admin` (`admin_id`, `code`, `name`, `position`, `phone`, `email`, `password`, `image`, `address`, `level`, `status`, `create_time`, `update_time`) VALUES
(8, 'ADMT001', 'Bayu Purnomo', '', '0881278635', 'bayupaths@gmail.com', '$2y$10$tcWI90daDC6AJBFBfL1mIOTwRql8T8m9ItjVTgNZkyR.yItNBY7dC', 'profile.png', 'Desa Susukan RT 02 RW 03, Kecamatan Sumbang, Kabupaten Banyumas,  Jawa Tengah 53183', 'su-admin', 1, '2022-10-04 04:15:29', '2022-10-04 07:28:32'),
(11, 'ADMT002', 'Tegar Kusuma', '', '0881278635', 'tegarkz76@gmail.com', '$2y$10$RSp/Li8NnWnED7.4.l3VCuy5O597nSzX0wbjmRZYpv5NLlx05u906', 'profile.png', 'Pliken Kembaran', 'admin', 0, '2022-10-06 06:49:10', '2022-10-06 06:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '$2y$10$ly.UyvwaDsYXIFoAMKjOVe88srLgQ.PLVI2g6B5iHRRPgVodpOJ2i',
  `status` enum('active','not-active') NOT NULL DEFAULT 'not-active',
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone`, `email`, `username`, `password`, `status`, `create_time`, `update_time`) VALUES
(1, 'Eren', '08811111111', 'eren@gmail.com', 'eren01', '$2y$10$ly.UyvwaDsYXIFoAMKjOVe88srLgQ.PLVI2g6B5iHRRPgVodpOJ2i', 'active', NULL, NULL);

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
  `transaction_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`invitation_id`, `cover_image1`, `cover_image2`, `groom_name`, `groom_nickname`, `groom_address`, `groom_father`, `groom_mother`, `groom_ig`, `groom_son`, `bride_name`, `bride_nickname`, `bridge_address`, `bride_father`, `bride_mother`, `bride_ig`, `bride_daughter`, `slug`, `transaction_id`) VALUES
(1, '', '', 'Runa Vha Ningit', 'Runa', 'Jl. Pramuka Timur 213 RT. 02 RW. 01 Purwokerto Kidul', 'Iwan Yuli Widiarto', 'Heny Margarini', '', 2, 'Ratna Sari Astuti', 'Ratna', 'Jl. Margo Mulyo RT. 07 RW. 08 Arcawinangun', 'Kiki Norhasis', 'Rumiati', 'runa-ratna', 2, 'runa-ratna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invited_guest`
--

CREATE TABLE `invited_guest` (
  `guest_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invited_guest`
--

INSERT INTO `invited_guest` (`guest_id`, `name`, `address`, `invitation_id`) VALUES
(1, 'Joko', NULL, 1),
(2, 'Udin', NULL, 1),
(3, 'Anwar', NULL, 1),
(4, 'Zaki', NULL, 1),
(5, 'Andi', NULL, 1);

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
  `cover_1` varchar(255) NOT NULL,
  `cover_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model_invitation`
--

INSERT INTO `model_invitation` (`model_id`, `name`, `type`, `category`, `price`, `view_model`, `cover_1`, `cover_2`) VALUES
(1, 'Model A', 'Pernikahan', 'Special', 150000, 'model_a', '', ''),
(2, 'Model B', 'Pernikahan', 'Standard', 100000, 'model_b', '', '');

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

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`gallery_id`, `photo`, `file_type`, `file_size`, `invitaion_id`) VALUES
(1, 'foto_1.jpg', '.jpg', '0', 1),
(2, 'foto_2.jpg', '.jpg', '0', 1),
(3, 'foto_3.jpg', '.jpg', '0', 1),
(4, 'foto_4.jpg', '.jpg', '0', 1),
(5, 'foto_5.jpg', '.jpg', '0', 1),
(6, 'foto_6.jpg', '.jpg', '0', 1),
(7, 'foto_7.jpg', '.jpg', '0', 1),
(8, 'foto_8.jpg', '.jpg', '0', 1);

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
(1, '$1$.USCCRzA$QeXfOBGTijnhETLL3oOF41', '2022-08-29 15:49:08'),
(2, '$1$ZYfWWSTH$0VJslY9tW3TxE7hqcHyvb1', '2022-09-28 01:03:50'),
(3, '$1$7xDog43S$WSmDAb6WwGFp25wDP4f.E1', '2022-10-06 05:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(10) UNSIGNED NOT NULL,
  `active_period` datetime DEFAULT NULL,
  `description` enum('1','2','0') NOT NULL DEFAULT '0',
  `proof_payment` varchar(255) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `active_period`, `description`, `proof_payment`, `customer_id`, `admin_id`, `model_id`) VALUES
(1, NULL, '0', '', 1, 11, 2);

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
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`wedding_id`, `title`, `date`, `address`, `time`, `maps`, `invitation_id`) VALUES
(1, 'Akad Nikah', '2022-10-23 10:00:00', 'Kediaman Mempelai Wanita', '10:00:00', '', 1),
(2, 'Resepsi', '2022-10-22 00:00:00', 'Jl. Margo Mulyo RT. 07 RW. 08 Arcawinangun Purwokerto Timur', '00:00:00', '', 1);

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
  ADD PRIMARY KEY (`customer_id`);

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
  ADD PRIMARY KEY (`invitation_id`),
  ADD KEY `invitation_transaction_id_index` (`transaction_id`);

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
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `transaction_customer_id_index` (`customer_id`),
  ADD KEY `transaction_admin_id_index` (`admin_id`),
  ADD KEY `transaction_model_id_index` (`model_id`);

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
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gifts`
--
ALTER TABLE `gifts`
  MODIFY `git_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `invitation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invited_guest`
--
ALTER TABLE `invited_guest`
  MODIFY `guest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `love_story`
--
ALTER TABLE `love_story`
  MODIFY `story_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `model_invitation`
--
ALTER TABLE `model_invitation`
  MODIFY `model_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `gallery_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `token_login`
--
ALTER TABLE `token_login`
  MODIFY `token_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `wedding_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gifts`
--
ALTER TABLE `gifts`
  ADD CONSTRAINT `gifts_invitation_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Constraints for table `invitation`
--
ALTER TABLE `invitation`
  ADD CONSTRAINT `invitation_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`);

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
  ADD CONSTRAINT `transaction_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `transaction_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
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
