-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2023 pada 08.09
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `code` char(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(225) NOT NULL DEFAULT 'example@email.com',
  `password` varchar(255) NOT NULL DEFAULT '$2y$10$oWHjsEyUUXpT.FnoeIMThukBHS1fti5mHSewQw2hg0.jDFodMAOA2',
  `image` varchar(255) NOT NULL DEFAULT 'profile.png',
  `address` text DEFAULT NULL,
  `level` enum('su-admin','admin','') NOT NULL DEFAULT 'admin',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `code`, `name`, `phone`, `email`, `password`, `image`, `address`, `level`, `status`, `create_time`, `update_time`) VALUES
(1, 'ADMT001', 'Metashare Super Admin', '6287899703471', 'metashare.paralogy@gmail.com', '$2y$10$Hs9.lB5g0aawJzIfgfnrcuD9NqzhzHMgOs0tUhSfYXk6Rc982bAbe', 'profile.png', NULL, 'su-admin', 1, '2023-01-12 07:06:18', '2023-01-12 07:06:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(45) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `digit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `banks`
--

INSERT INTO `banks` (`id`, `name`, `code`, `icon`, `digit`) VALUES
(1, 'Bank Mandiri', 'mandiri', 'invitations/gifts/banks/logo-bank-mandiri.png', 13),
(2, 'Bank Syariah Indonesia', 'BSI', 'invitations/gifts/banks/logo-bank-bsi.png', 10),
(3, 'Bank Negara Indonesia', 'BNI', 'invitations/gifts/banks/logo-bank-bni.png', 10),
(4, 'Bank Rakyat Indonesia', 'BRI', 'invitations/gifts/banks/logo-bank-bri.png', 15),
(5, 'Bank Central Asia', 'BCA', 'invitations/gifts/banks/logo-bank-bca.png', 10),
(6, 'CIMB Niaga', 'cimb-niaga', 'invitations/gifts/banks/logo-bank-cimb-niaga.png', 14),
(7, 'DANA', 'dana', 'invitations/gifts/banks/logo-dana.png', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT 'example@email.com',
  `password` varchar(255) NOT NULL DEFAULT '$2y$10$ly.UyvwaDsYXIFoAMKjOVe88srLgQ.PLVI2g6B5iHRRPgVodpOJ2i',
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gifts`
--

CREATE TABLE `gifts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `number_account` varchar(255) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `invitation_id` int(10) UNSIGNED NOT NULL,
  `bank_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `invitation`
--

CREATE TABLE `invitation` (
  `invitation_id` int(10) UNSIGNED NOT NULL,
  `cover_image_1` varchar(255) NOT NULL DEFAULT 'cover_image_1.svg',
  `cover_image_2` varchar(255) NOT NULL DEFAULT 'cover_image_2.svg',
  `groom_name` varchar(125) NOT NULL,
  `groom_nickname` varchar(45) NOT NULL,
  `groom_address` text NOT NULL,
  `groom_father` varchar(125) NOT NULL,
  `groom_mother` varchar(125) NOT NULL,
  `groom_ig` varchar(45) NOT NULL,
  `groom_son` varchar(10) NOT NULL,
  `groom_img` varchar(45) NOT NULL DEFAULT 'groom_img.png',
  `bride_name` varchar(125) NOT NULL,
  `bride_nickname` varchar(45) NOT NULL,
  `bride_address` text NOT NULL,
  `bride_father` varchar(125) NOT NULL,
  `bride_mother` varchar(125) NOT NULL,
  `bride_ig` varchar(45) NOT NULL,
  `bride_daughter` varchar(10) NOT NULL,
  `bride_img` varchar(45) NOT NULL DEFAULT 'bride_img.png',
  `music_bg` varchar(125) NOT NULL DEFAULT 'default_music.mp3',
  `link_video` text DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  `code` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `invited_guest`
--

CREATE TABLE `invited_guest` (
  `guest_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `love_story`
--

CREATE TABLE `love_story` (
  `story_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `date` date NOT NULL,
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `message_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `message` text NOT NULL,
  `status` smallint(2) NOT NULL DEFAULT 0,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_invitation`
--

CREATE TABLE `model_invitation` (
  `model_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(125) NOT NULL DEFAULT 'Undangan Pernikahan Digital',
  `category` varchar(125) NOT NULL,
  `price` float NOT NULL,
  `view_model` varchar(255) NOT NULL,
  `cover_1` varchar(255) NOT NULL DEFAULT 'default_1.svg',
  `cover_2` varchar(255) NOT NULL DEFAULT 'default_2.svg',
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `gallery_id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `cus_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `token_login`
--

CREATE TABLE `token_login` (
  `token_id` int(100) UNSIGNED NOT NULL,
  `access_token` text NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(18) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `active` datetime DEFAULT NULL,
  `desc` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `proof` varchar(255) NOT NULL DEFAULT 'null',
  `source_order` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL DEFAULT 'MARKETPLACE',
  `status` tinyint(3) NOT NULL DEFAULT 0,
  `cus_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT 0,
  `model_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wedding`
--

CREATE TABLE `wedding` (
  `wedding_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `maps` varchar(255) NOT NULL,
  `invitation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `code_UNIQUE` (`code`);

--
-- Indeks untuk tabel `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indeks untuk tabel `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gifts_invitation_id_index` (`invitation_id`);

--
-- Indeks untuk tabel `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`invitation_id`);

--
-- Indeks untuk tabel `invited_guest`
--
ALTER TABLE `invited_guest`
  ADD PRIMARY KEY (`guest_id`),
  ADD KEY `invited_guest_invitation_id_index` (`invitation_id`);

--
-- Indeks untuk tabel `love_story`
--
ALTER TABLE `love_story`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `love_story_invitation_id_index` (`invitation_id`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `message_invitation_id_foreign` (`invitation_id`);

--
-- Indeks untuk tabel `model_invitation`
--
ALTER TABLE `model_invitation`
  ADD PRIMARY KEY (`model_id`);

--
-- Indeks untuk tabel `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `photo_gallery_invitaion_id_index` (`invitation_id`);

--
-- Indeks untuk tabel `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `token_login`
--
ALTER TABLE `token_login`
  ADD PRIMARY KEY (`token_id`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_UNIQUE` (`code`),
  ADD KEY `transaction_model_id_index` (`model_id`),
  ADD KEY `foreign_cus_id_idx` (`cus_id`);

--
-- Indeks untuk tabel `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`wedding_id`),
  ADD KEY `wedding_wedding_id_foreign_idx` (`invitation_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gifts`
--
ALTER TABLE `gifts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `invitation`
--
ALTER TABLE `invitation`
  MODIFY `invitation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `invited_guest`
--
ALTER TABLE `invited_guest`
  MODIFY `guest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `love_story`
--
ALTER TABLE `love_story`
  MODIFY `story_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `model_invitation`
--
ALTER TABLE `model_invitation`
  MODIFY `model_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `gallery_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `token_login`
--
ALTER TABLE `token_login`
  MODIFY `token_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `wedding`
--
ALTER TABLE `wedding`
  MODIFY `wedding_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gifts`
--
ALTER TABLE `gifts`
  ADD CONSTRAINT `gifts_invitation_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Ketidakleluasaan untuk tabel `invited_guest`
--
ALTER TABLE `invited_guest`
  ADD CONSTRAINT `invited_guest_invitation_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Ketidakleluasaan untuk tabel `love_story`
--
ALTER TABLE `love_story`
  ADD CONSTRAINT `love_story_invitation_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Ketidakleluasaan untuk tabel `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_invitation_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Ketidakleluasaan untuk tabel `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD CONSTRAINT `photo_gallery_invitaion_id_foreign` FOREIGN KEY (`invitation_id`) REFERENCES `invitation` (`invitation_id`);

--
-- Ketidakleluasaan untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `foreign_cus_id` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `model_invitation` (`model_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
