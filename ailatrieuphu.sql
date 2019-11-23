-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 23, 2019 lúc 09:20 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ailatrieuphu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hinh_app`
--

DROP TABLE IF EXISTS `cau_hinh_app`;
CREATE TABLE IF NOT EXISTS `cau_hinh_app` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_hoi_sai` int(11) NOT NULL,
  `thoi_gian_tra_loi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hinh_diem_cau_hoi`
--

DROP TABLE IF EXISTS `cau_hinh_diem_cau_hoi`;
CREATE TABLE IF NOT EXISTS `cau_hinh_diem_cau_hoi` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thu_tu` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hinh_tro_giup`
--

DROP TABLE IF EXISTS `cau_hinh_tro_giup`;
CREATE TABLE IF NOT EXISTS `cau_hinh_tro_giup` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `loai_tro_giup` int(11) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hoi`
--

DROP TABLE IF EXISTS `cau_hoi`;
CREATE TABLE IF NOT EXISTS `cau_hoi` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linh_vuc_id` int(10) UNSIGNED NOT NULL,
  `phuong_an_a` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_b` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_c` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_d` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap_an` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_luot_choi`
--

DROP TABLE IF EXISTS `chi_tiet_luot_choi`;
CREATE TABLE IF NOT EXISTS `chi_tiet_luot_choi` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `luot_choi_id` int(10) UNSIGNED NOT NULL,
  `cau_hoi_id` int(10) UNSIGNED NOT NULL,
  `phuong_an` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goi_credit`
--

DROP TABLE IF EXISTS `goi_credit`;
CREATE TABLE IF NOT EXISTS `goi_credit` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_goi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `so_tien` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lich_su_mua_credit`
--

DROP TABLE IF EXISTS `lich_su_mua_credit`;
CREATE TABLE IF NOT EXISTS `lich_su_mua_credit` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nguoi_choi_id` int(10) UNSIGNED NOT NULL,
  `goi_credit_id` int(10) UNSIGNED NOT NULL,
  `credit` int(11) NOT NULL,
  `so_tien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linh_vuc`
--

DROP TABLE IF EXISTS `linh_vuc`;
CREATE TABLE IF NOT EXISTS `linh_vuc` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_linh_vuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `linh_vuc`
--

INSERT INTO `linh_vuc` (`id`, `ten_linh_vuc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Y học', '2019-11-17 05:10:40', '2019-11-17 06:06:45', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luot_choi`
--

DROP TABLE IF EXISTS `luot_choi`;
CREATE TABLE IF NOT EXISTS `luot_choi` (
  `nguoi_choi_id` int(10) UNSIGNED NOT NULL,
  `so_cau` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_23_134438_create_linh_vucs_table', 1),
(2, '2019_10_23_134521_create_cau_hois_table', 1),
(3, '2019_10_29_034224_create_nguoi_chois_table', 1),
(4, '2019_11_06_004030_create_luot_chois_table', 1),
(5, '2019_11_06_004115_create_cau_hinh_apps_table', 1),
(6, '2019_11_06_004132_create_goi_credits_table', 1),
(7, '2019_11_06_004223_create_chi_tiet_luot_chois_table', 1),
(8, '2019_11_06_004241_create_lich_su_mua_credits_table', 1),
(9, '2019_11_06_004259_create_cau_hinh_diem_cau_hois_table', 1),
(10, '2019_11_06_004326_create_quan_tri_viens_table', 1),
(11, '2019_11_06_004336_create_cau_hinh_tro_giups_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_choi`
--

DROP TABLE IF EXISTS `nguoi_choi`;
CREATE TABLE IF NOT EXISTS `nguoi_choi` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_dai_dien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem_cao_nhat` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `credit` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_choi`
--

INSERT INTO `nguoi_choi` (`id`, `ten_dang_nhap`, `mat_khau`, `email`, `hinh_dai_dien`, `diem_cao_nhat`, `credit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'anhnene', '$2y$10$/QockTeP9xPznpDG/8Kq/ejuJoDrfqzqeG65oU/umgj7Puu8yC43C', 'maithanhhai99x@gmail.com', '123.jpg', 1, 500, '2019-11-17 03:11:35', '2019-11-18 18:02:39', NULL),
(2, 'W9TM6Ddl', '$2y$10$ihMX2sKPbpT7d1fK/7EcmeD2hx1tWVo.G8vwyQCkKXTJA9CXu9pGG', 'W9TM6Ddl@gmail.com', 'W9TM6Ddl.jpg', 3972, 207, '2019-11-17 08:29:07', '2019-11-17 08:29:07', NULL),
(3, 'tDdgLqCm', '$2y$10$6Jd/yHYILfUUrGZMyXqUkuH.11eJKPX4CXCnBegKbFTau.Sut2VNy', 'tDdgLqCm@gmail.com', 'tDdgLqCm.jpg', 4897, 124, '2019-11-17 08:29:07', '2019-11-17 08:29:07', NULL),
(4, 'wEWoHIc8', '$2y$10$7BgXCZhq0GkjrlaSX9F.2eSnZop4CR4Xsnx7dkB2ng0AgzvQ7FiaS', 'wEWoHIc8@gmail.com', 'wEWoHIc8.jpg', 4106, 82, '2019-11-17 08:29:07', '2019-11-17 08:29:07', NULL),
(5, 'EECrUQ00', '$2y$10$5lmkDRLvw1caxsmM0BlxB.nyoj9JWpQz6QFh7VvFsTktUocvyeLEO', 'EECrUQ00@gmail.com', 'EECrUQ00.jpg', 1447, 492, '2019-11-17 08:29:07', '2019-11-17 08:29:07', NULL),
(6, 'mRJXQE5N', '$2y$10$6/X/ag5CbFG0/h4SkBwR3O8c4lxDUQ3kOUmpMF90qKeORCXvXySnG', 'mRJXQE5N@gmail.com', 'mRJXQE5N.jpg', 2875, 260, '2019-11-17 08:29:07', '2019-11-17 08:29:07', NULL),
(7, '2BTwAV9c', '$2y$10$gvp9NAUCx1da3MwFMXTtJOc4euy/QSGiK.swolTykFfjh39eoU4Ly', '2BTwAV9c@gmail.com', '2BTwAV9c.jpg', 2045, 284, '2019-11-17 08:29:07', '2019-11-17 08:29:07', NULL),
(8, 'gAQCWBpH', '$2y$10$nz6oYxakXkKLpLWRwAMnkOqT.aKxHw6QSr6.d5eed/DNo2gN5G4HW', 'gAQCWBpH@gmail.com', 'gAQCWBpH.jpg', 4468, 307, '2019-11-17 08:29:07', '2019-11-17 08:29:07', NULL),
(9, '9JFOUTpb', '$2y$10$fK7.8Fh8UYLEpVTmdoNs.eMMNMJY.oE/i/i631.ujc5dKGKBJCFjq', '9JFOUTpb@gmail.com', '9JFOUTpb.jpg', 2999, 123, '2019-11-17 08:29:07', '2019-11-17 08:29:07', NULL),
(10, 'Xxdo0Jq4', '$2y$10$BkvLX..pn6EvxK8HMA/oguH1SBzy8GRVnnblWMVNnRe7NFRIZXzru', 'Xxdo0Jq4@gmail.com', 'Xxdo0Jq4.jpg', 4686, 351, '2019-11-17 08:29:07', '2019-11-17 08:29:07', NULL),
(11, 'wDPG3B4N', '$2y$10$6dtBe.mTUr3axDvpzvNEReyOG.jPPhc947k/fEelPJaqs7cOZ6Sre', 'wDPG3B4N@gmail.com', 'wDPG3B4N.jpg', 1821, 260, '2019-11-17 08:29:08', '2019-11-17 08:29:08', NULL),
(12, 'Sm68QzMJ', '$2y$10$dnu1BNlwOdxnCdG63v8M4es0YoouhZ49Qtm3xVlvJEhrjQEJXZsmW', 'Sm68QzMJ@gmail.com', 'Sm68QzMJ.jpg', 3166, 30, '2019-11-17 08:29:08', '2019-11-17 08:29:08', NULL),
(13, 'ZB3RjWJT', '$2y$10$axb16Yn8/tP.wYQUB4Xn3eWKJS8lUdOMIh6fBJg7W1oAj6fGowej.', 'ZB3RjWJT@gmail.com', 'ZB3RjWJT.jpg', 2526, 56, '2019-11-17 08:29:08', '2019-11-17 08:29:08', NULL),
(14, 'E0rfVh9l', '$2y$10$s/yNNy.qC/tFBHDRyBgqpuwZGU3adPUV.ClhuWZdOUUyvxIlXTjZ2', 'E0rfVh9l@gmail.com', 'E0rfVh9l.jpg', 4121, 356, '2019-11-17 08:29:08', '2019-11-17 08:29:08', NULL),
(15, 'qgJ7zMHo', '$2y$10$rrs/QMXsw6zs0PdQhT/sy.1SPcYgpNZTUAveYEls7W2k1ZeJ0q9tG', 'qgJ7zMHo@gmail.com', 'qgJ7zMHo.jpg', 2227, 299, '2019-11-17 08:29:08', '2019-11-17 08:29:08', NULL),
(16, 'k4LQTFHB', '$2y$10$SMME6iVZnqSd42/ZXkf61urx7RMGtCV/0iWvx4uBTFpzKkF9cSYou', 'k4LQTFHB@gmail.com', 'k4LQTFHB.jpg', 2159, 84, '2019-11-17 08:29:08', '2019-11-17 08:29:08', NULL),
(17, 'IRF8LWGS', '$2y$10$qGgBzudcSJDC1lJ.jk1xJO.f/dIqZaMRkLJApCRFaoTTpNk/Nvv6G', 'IRF8LWGS@gmail.com', 'IRF8LWGS.jpg', 4962, 484, '2019-11-17 08:29:08', '2019-11-17 08:29:08', NULL),
(18, 'o9cKDT8Q', '$2y$10$a/KJktU/pDNpu6kETmiiqOp466rRGiCDUK69XpT2MXtj7Bl8Y.FD.', 'o9cKDT8Q@gmail.com', 'o9cKDT8Q.jpg', 3296, 50, '2019-11-17 08:29:08', '2019-11-17 08:29:08', NULL),
(19, '3rlPdZka', '$2y$10$yaNIv6uEBRf4jTCxf1Mlf.pPvUM4YTb3DdcMAmePjZOcKvWmAoB0i', '3rlPdZka@gmail.com', '3rlPdZka.jpg', 2614, 308, '2019-11-17 08:29:08', '2019-11-17 08:29:08', NULL),
(20, 'AuB56w1K', '$2y$10$fapf33sfyqrz3M6lYrhmM.srTJhYNV59Z1sWd8w6yMmH/C3ldA.am', 'AuB56w1K@gmail.com', 'AuB56w1K.jpg', 2437, 280, '2019-11-17 08:29:08', '2019-11-17 08:29:08', NULL),
(21, 'yJ3isqqM', '$2y$10$.AZ4wInz2msAZXpWm2wVF.CAGS10VoOg4MAM0YSrRkSyApW/K9d9a', 'yJ3isqqM@gmail.com', 'yJ3isqqM.jpg', 3751, 480, '2019-11-17 08:29:09', '2019-11-17 08:29:09', NULL),
(22, 'u2gRKRP5', '$2y$10$k.756vkbFVl.o7wfN37Kt.B/Go2a/7iVcJSpS.qdhbYoB0DdHvE5K', 'u2gRKRP5@gmail.com', 'u2gRKRP5.jpg', 1588, 22, '2019-11-17 08:29:09', '2019-11-17 08:29:09', NULL),
(23, 'ncId3bdM', '$2y$10$bgJXBdHUyvOl.WHInqDzQ.TswoK3PSsg4PdC.j5Giai3afqkNRteG', 'ncId3bdM@gmail.com', 'ncId3bdM.jpg', 1977, 41, '2019-11-17 08:29:09', '2019-11-17 08:29:09', NULL),
(24, 'AjRhZe4P', '$2y$10$fo1B9b.bJDEnW5KaIz2TkOQX9Bi42cIT86Go.Cj/tNPMLxSNo4ocO', 'AjRhZe4P@gmail.com', 'AjRhZe4P.jpg', 4798, 461, '2019-11-17 08:29:09', '2019-11-17 08:29:09', NULL),
(25, 'jhj21kgn', '$2y$10$0E3TLg.7LGevQIrTc5jS9uGbL/ZDyXrGgcVmcC/XbsW.cXbSD/Xte', 'jhj21kgn@gmail.com', 'jhj21kgn.jpg', 4055, 141, '2019-11-17 08:29:09', '2019-11-17 08:29:09', NULL),
(26, 'AMt30DjH', '$2y$10$pCd0axY0Z.PvdVMZzQuRZ.sv08SARp/kUN8E2LDFFAlWhL8mPbiNG', 'AMt30DjH@gmail.com', 'AMt30DjH.jpg', 4083, 131, '2019-11-17 08:29:09', '2019-11-17 08:29:09', NULL),
(27, '4QuqiEmH', '$2y$10$w15aGC.J...Nm4ZkE5rVmOQJGtpp.D8eHHSN5J4zAeWNALlIZrgbW', '4QuqiEmH@gmail.com', '4QuqiEmH.jpg', 1576, 113, '2019-11-17 08:29:09', '2019-11-17 08:29:09', NULL),
(28, 'gb4faTV1', '$2y$10$Bk.pBhbIJsa/xz8StdGpD.4TpTsqH/KdQxhQNcWgUnfj1ZzNu2gXK', 'gb4faTV1@gmail.com', 'gb4faTV1.jpg', 3171, 440, '2019-11-17 08:29:09', '2019-11-17 08:29:09', NULL),
(29, 'beElt4n3', '$2y$10$s.Xm3dgQqLov1zZdYLqt8eTPFoKdoSMeJgbd8qjrB2mKY7xfgWzpa', 'beElt4n3@gmail.com', 'beElt4n3.jpg', 4622, 70, '2019-11-17 08:29:09', '2019-11-17 08:29:09', NULL),
(30, 'spatuc5S', '$2y$10$oXcQRkmiusvdc7QE9Bfng.ln3us92EQY1l4bVeZAVr60eHPUCUEhe', 'spatuc5S@gmail.com', 'spatuc5S.jpg', 3386, 33, '2019-11-17 08:29:09', '2019-11-17 08:29:09', NULL),
(31, 'GRgBBgdm', '$2y$10$cpp5ktc3l.JlwaSU5IJ.DeuTIuJsoI8H3biiVrLL46L4jdmbR3Ss.', 'GRgBBgdm@gmail.com', 'GRgBBgdm.jpg', 2945, 71, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(32, '1bS1VFlq', '$2y$10$3BvEvZxUc4j04Vy1rItyqOKZWJoQvhpnJDv7Q/CgeMj0FCV62Y89i', '1bS1VFlq@gmail.com', '1bS1VFlq.jpg', 4124, 409, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(33, 'tAG3IGqr', '$2y$10$I5ulJEu0mxVZ9pkTF3oe0eB5mEqjDR9XzEKbd6Uk.9wf3W01JW2zG', 'tAG3IGqr@gmail.com', 'tAG3IGqr.jpg', 1063, 139, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(34, 'rg18pqn7', '$2y$10$rfVZJQl7cYfQIcokbkx7recFAthCm6Ita8Vji2cDB0XIYQaIfjiXG', 'rg18pqn7@gmail.com', 'rg18pqn7.jpg', 1241, 138, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(35, 'mXpHXfEu', '$2y$10$hTP3qmAuTO3.LTI16GkjlecI4grxVO6G3Zie7HSaA8DsCB0HXbRaW', 'mXpHXfEu@gmail.com', 'mXpHXfEu.jpg', 1307, 38, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(36, 'QXoOvXyM', '$2y$10$Z89Z7mlm/m.FobjzLPomv.WGNw/wZxDqPfDhbkZqx6wHj9gnUVCmy', 'QXoOvXyM@gmail.com', 'QXoOvXyM.jpg', 4156, 140, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(37, 'SB8usNUR', '$2y$10$qGCF6X4FCnKbdhPYf9ovOOatLNkgKxXbEHBJRwCwMnAYgvfgg1ZKq', 'SB8usNUR@gmail.com', 'SB8usNUR.jpg', 3023, 39, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(38, 'ieCHLHlk', '$2y$10$mjlz7YzNILHgIAN84SrbDOU9qJiFcM9RyW3MPVqjyTNEj7yKjkfe2', 'ieCHLHlk@gmail.com', 'ieCHLHlk.jpg', 3643, 438, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(39, '4pTnzWbF', '$2y$10$Zdm49hlmYE9rXQ1jnlWcmuDwT5j5cI3nr0/fiQhve2QVJzgdJehWS', '4pTnzWbF@gmail.com', '4pTnzWbF.jpg', 3591, 313, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(40, 'ue6Ht5cv', '$2y$10$eGUpwX6FGKodOw8rpzolf.Nn6N31g/kZPXWufhY9ovitKTkxIuo4O', 'ue6Ht5cv@gmail.com', 'ue6Ht5cv.jpg', 3118, 272, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(41, 'LChhPa5C', '$2y$10$5Rah1WQBF6wh1IKwrCC8V.UBne8YtcDvQR4GCg9TKL0VTLhrgvq7C', 'LChhPa5C@gmail.com', 'LChhPa5C.jpg', 1669, 455, '2019-11-17 08:29:10', '2019-11-17 08:29:10', NULL),
(42, 'rspZfkEb', '$2y$10$1vHG9PfSBnhzVDtbaw02leGfq6Sq3ceV1zpXIeLj39q.Rn3n3d4Qi', 'rspZfkEb@gmail.com', 'rspZfkEb.jpg', 1419, 196, '2019-11-17 08:29:11', '2019-11-17 08:29:11', NULL),
(43, 'jqtfiNfr', '$2y$10$PtCK5EQko5rTTQU6nL7z6OQ8iM34WpiICAqRWwruszjC0UyPmEJlu', 'jqtfiNfr@gmail.com', 'jqtfiNfr.jpg', 2698, 72, '2019-11-17 08:29:11', '2019-11-17 08:29:11', NULL),
(44, 'EHB5QLcL', '$2y$10$dKABeEZ56O2x84o9NpQb/u6lKij.3Zs.kajh9sUjVImskEdXWGA3O', 'EHB5QLcL@gmail.com', 'EHB5QLcL.jpg', 4209, 351, '2019-11-17 08:29:11', '2019-11-17 08:29:11', NULL),
(45, 'IBCPU6jY', '$2y$10$dFJI9ANLzWJaJtkhtih53..65CCkdbp18YGxxENFkXJQiYR.AG/J.', 'IBCPU6jY@gmail.com', 'IBCPU6jY.jpg', 3214, 97, '2019-11-17 08:29:11', '2019-11-17 08:29:11', NULL),
(46, 'uZV0IO0O', '$2y$10$2mu8l5JY0nUsnIqjkG5Fg.3A.bXgw/J4yG.7cQmSna8yc2QeGT.bC', 'uZV0IO0O@gmail.com', 'uZV0IO0O.jpg', 2617, 482, '2019-11-17 08:29:11', '2019-11-17 08:29:11', NULL),
(47, 'iLZWiyOn', '$2y$10$I/E4U7MS34SxXNnwoPWMe.4.CnbjjSCu57jprCBhYcykzv0/1ebbG', 'iLZWiyOn@gmail.com', 'iLZWiyOn.jpg', 3044, 174, '2019-11-17 08:29:11', '2019-11-17 08:29:11', NULL),
(48, 'elnK5aXw', '$2y$10$12lGBO5ACx1zcBg3neqGrOHTVWiIfn/lRALDPa2XI/Undxn2U.BM6', 'elnK5aXw@gmail.com', 'elnK5aXw.jpg', 1735, 317, '2019-11-17 08:29:11', '2019-11-17 08:29:11', NULL),
(49, 'fgcu6VsF', '$2y$10$zRTzF9PZPgkK8bRLa37QSuiobM8eG8tvY2iXzYyAeFdw5zuIt/Ax6', 'fgcu6VsF@gmail.com', 'fgcu6VsF.jpg', 3948, 161, '2019-11-17 08:29:11', '2019-11-17 08:29:11', NULL),
(50, 'dgJvFhIp', '$2y$10$eLVrSMAQxscoHRakHx6zyOd8YZ2OxLjh09vcAnLXr2Kcx.IXcvDt6', 'dgJvFhIp@gmail.com', 'dgJvFhIp.jpg', 4844, 193, '2019-11-17 08:29:11', '2019-11-17 08:29:11', NULL),
(51, 'tMOCs564', '$2y$10$KDDKL1dde4xiUMW4fc09rO18SDdcnFVkE8cDTZikML7dM8s3J3B.O', 'tMOCs564@gmail.com', 'tMOCs564.jpg', 4736, 114, '2019-11-17 08:29:11', '2019-11-17 08:29:11', NULL),
(52, 'cEuZMNZs', '$2y$10$EAvFrNWI9ZkM576JjuM9H.q7gOADZFahgbkAdbo3nh.OfpFZnxbCm', 'cEuZMNZs@gmail.com', 'cEuZMNZs.jpg', 1510, 358, '2019-11-17 08:29:12', '2019-11-17 08:29:12', NULL),
(53, 'MJeakSDB', '$2y$10$6ERbmRS92xSeYXLgVl9pb.pShsNffhcZ4ZZcCw8A7AYgpgxJkSloe', 'MJeakSDB@gmail.com', 'MJeakSDB.jpg', 1025, 408, '2019-11-17 08:29:12', '2019-11-17 08:29:12', NULL),
(54, 'FTxifgJI', '$2y$10$hsUP9vB.2XkRbivlpusreO2Dn57xM60/WfZ0VNITE040fgw6Z8Hvu', 'FTxifgJI@gmail.com', 'FTxifgJI.jpg', 4685, 355, '2019-11-17 08:29:12', '2019-11-17 08:29:12', NULL),
(55, 'ujunU7Hn', '$2y$10$Ovu2kxvAw8LMPXzaas08O.Eb0DRX.OaQD9j.oZmuGsamx3qEGSFAq', 'ujunU7Hn@gmail.com', 'ujunU7Hn.jpg', 4149, 397, '2019-11-17 08:29:12', '2019-11-17 08:29:12', NULL),
(56, 'Cx01icLZ', '$2y$10$26HeV.lP0hnsq35.u92dUeIxZlRAR4xz/O0WMLQFGGcHtrTyYEGja', 'Cx01icLZ@gmail.com', 'Cx01icLZ.jpg', 2921, 28, '2019-11-17 08:29:12', '2019-11-17 08:29:12', NULL),
(57, 'dQyVQ555', '$2y$10$s07cfmvS1AaTMDeycGp.3eTfhasNIOn2B5Y/r.5.ECpfNJzZn3YI.', 'dQyVQ555@gmail.com', 'dQyVQ555.jpg', 1437, 286, '2019-11-17 08:29:12', '2019-11-17 08:29:12', NULL),
(58, 'KrkytCBX', '$2y$10$1cUIuA2hT8bEbWgD8vJdB.tvgnp/d7PUWhI/X3WNT7pQvWB49Y.ca', 'KrkytCBX@gmail.com', 'KrkytCBX.jpg', 4722, 10, '2019-11-17 08:29:12', '2019-11-17 08:29:12', NULL),
(59, 'Hk0tP5sY', '$2y$10$bqpIdzH/u4zq9qBDv72uHODKFf6xaY8VJ37IbiNIfLDh7YPWCi32q', 'Hk0tP5sY@gmail.com', 'Hk0tP5sY.jpg', 1339, 485, '2019-11-17 08:29:12', '2019-11-17 08:29:12', NULL),
(60, 'XURsXd9V', '$2y$10$U6tZXG1XnO.vCSAYIkYNvuikPKuMBtmdk2NAJIVlj3TaUU.lzbB9e', 'XURsXd9V@gmail.com', 'XURsXd9V.jpg', 3730, 312, '2019-11-17 08:29:12', '2019-11-17 08:29:12', NULL),
(61, 'vYWdMDmm', '$2y$10$GpTIYzWGdJR3LnvKT6I.guXDiph5E6t7lrmgws.b.9vBEUB4QpG1G', 'vYWdMDmm@gmail.com', 'vYWdMDmm.jpg', 3169, 294, '2019-11-17 08:29:12', '2019-11-17 08:29:12', NULL),
(62, 'LJ8WM9dV', '$2y$10$mgcFKlIS4YjxQ5fHesDmvuBzNecrpebuQCBGDX5Pm/1Eku8TowFNy', 'LJ8WM9dV@gmail.com', 'LJ8WM9dV.jpg', 4242, 145, '2019-11-17 08:29:13', '2019-11-17 08:29:13', NULL),
(63, 'rmGohJkE', '$2y$10$RS8ABm7D1C9sDr6R730cWu7jSxth.fSQxvX4lQzK4xSIQhVWch3LC', 'rmGohJkE@gmail.com', 'rmGohJkE.jpg', 4304, 318, '2019-11-17 08:29:13', '2019-11-17 08:29:13', NULL),
(64, 'ZoG6vjln', '$2y$10$x.xBfjao.IwV47CtuP/Fr.FC4AETMJVFZvoD1SnmqoUJUErfGX4GW', 'ZoG6vjln@gmail.com', 'ZoG6vjln.jpg', 1756, 292, '2019-11-17 08:29:13', '2019-11-17 08:29:13', NULL),
(65, '2Ewr79lu', '$2y$10$6rcyB4zxRbRm2ig/2d4sCunlVcCG3x.KPIF0UrYFFQu3huQnecqPq', '2Ewr79lu@gmail.com', '2Ewr79lu.jpg', 3455, 435, '2019-11-17 08:29:13', '2019-11-17 08:29:13', NULL),
(66, 'XKe8thiv', '$2y$10$RvExVRuADh3llxBhEecz0OoIDX0QZZbOpBV.3DF.i1KEi7h6AWRVy', 'XKe8thiv@gmail.com', 'XKe8thiv.jpg', 2840, 435, '2019-11-17 08:29:13', '2019-11-17 08:29:13', NULL),
(67, 'lKKrgbTn', '$2y$10$WI7INgxRB1YCPJxIZJcPmOy1hl17UTV5p3aNMq.NFffX7Hnlnu0ZG', 'lKKrgbTn@gmail.com', 'lKKrgbTn.jpg', 1996, 163, '2019-11-17 08:29:13', '2019-11-17 08:29:13', NULL),
(68, 'AeQbZxhr', '$2y$10$HIJQq54KeUJ8Fb3f3OBPFeDC2hcFHER9HHIBBrrLP4IMMFBKFIAby', 'AeQbZxhr@gmail.com', 'AeQbZxhr.jpg', 2986, 393, '2019-11-17 08:29:13', '2019-11-17 08:29:13', NULL),
(69, 'YMzRuW3r', '$2y$10$kctMMFyka0.RzKTU6wOpfu5ruAEm06cCeFoNY.UiZS/TBzNp66PNO', 'YMzRuW3r@gmail.com', 'YMzRuW3r.jpg', 3587, 209, '2019-11-17 08:29:13', '2019-11-17 08:29:13', NULL),
(70, 'wrWvtbwR', '$2y$10$4wiYjxSs1RQ8LV88udSrWOXfIqb.wSbhzDHLzRM/20iyejcZgOJpO', 'wrWvtbwR@gmail.com', 'wrWvtbwR.jpg', 4091, 348, '2019-11-17 08:29:13', '2019-11-17 08:29:13', NULL),
(71, 'EHb34JdP', '$2y$10$WjEahZbsMi1P5VePeaB/1.csv60ZHqAH2a0HaXldt6BH4PsdEu/SO', 'EHb34JdP@gmail.com', 'EHb34JdP.jpg', 4538, 478, '2019-11-17 08:29:13', '2019-11-17 08:29:13', NULL),
(72, 'W158BRXd', '$2y$10$trfmhzJm7h.WigzKnQnNoOwELNR2EKPOG0S53p2OyOm.fBjBHrKue', 'W158BRXd@gmail.com', 'W158BRXd.jpg', 4528, 496, '2019-11-17 08:29:14', '2019-11-17 08:29:14', NULL),
(73, 'YvjCSYEp', '$2y$10$LQXA6mmiwdC7l8XzoeM4YenbjzY0.1Ltl9wrKxznfzCBzzFoHvEQa', 'YvjCSYEp@gmail.com', 'YvjCSYEp.jpg', 4409, 385, '2019-11-17 08:29:14', '2019-11-17 08:29:14', NULL),
(74, 'lFfRnKtW', '$2y$10$SDe8uhz8l99kOena8A2uQOLK2PDK1moxtinFAeR2XVvjtN6Uhs86G', 'lFfRnKtW@gmail.com', 'lFfRnKtW.jpg', 3108, 28, '2019-11-17 08:29:14', '2019-11-17 08:29:14', NULL),
(75, 'cPTggjkt', '$2y$10$GO7M9CXtYdS65QRgcxQiU.pbtSZs5cXGoOTgKS2zzwjwSNB6bw21S', 'cPTggjkt@gmail.com', 'cPTggjkt.jpg', 4062, 95, '2019-11-17 08:29:14', '2019-11-17 08:29:14', NULL),
(76, 'dViANqr5', '$2y$10$dCEmCVgrhh7yeH7AcOggoOykBMDzU1SlAHBXghUSgAfiFDRFzACyG', 'dViANqr5@gmail.com', 'dViANqr5.jpg', 4857, 370, '2019-11-17 08:29:14', '2019-11-17 08:29:14', NULL),
(77, '7expQk3I', '$2y$10$rrdvsvQwPD4QPxRVcKXUyuq1RIhTGXqhTnfYP8sYncv76g5dfg8fu', '7expQk3I@gmail.com', '7expQk3I.jpg', 4472, 443, '2019-11-17 08:29:14', '2019-11-17 08:29:14', NULL),
(78, 'VkXQI2G7', '$2y$10$rYkiMpCmcdjH/R6yS2XQr.eV0T4S2Q1aDLFf1IxJdYz9N9W1R2L5O', 'VkXQI2G7@gmail.com', 'VkXQI2G7.jpg', 3249, 197, '2019-11-17 08:29:14', '2019-11-17 08:29:14', NULL),
(79, 'qLZGvUbM', '$2y$10$oKTKfVuLbI1NSLMn31oBKONsd5R3apUFg.Rlpj35LfTOKGEQq4at.', 'qLZGvUbM@gmail.com', 'qLZGvUbM.jpg', 2179, 139, '2019-11-17 08:29:14', '2019-11-17 08:29:14', NULL),
(80, 'JD4Iuz3S', '$2y$10$EEBnh9Xk3aNxBm5uDImzcOx96a7OiloqU4U6Y075r35Y5gO42lTlK', 'JD4Iuz3S@gmail.com', 'JD4Iuz3S.jpg', 4900, 247, '2019-11-17 08:29:14', '2019-11-17 08:29:14', NULL),
(81, 'ZjAF1Z25', '$2y$10$RTThtu/APMX9Ulol3SkWR.2n3e4.0VGdBu81H/CUF1XiFOjLNppfG', 'ZjAF1Z25@gmail.com', 'ZjAF1Z25.jpg', 2296, 428, '2019-11-17 08:29:14', '2019-11-17 08:29:14', NULL),
(82, 'zsw5L1gu', '$2y$10$JF0Upbol4InK3oj8JPysvuH/Eul/vOoXB03TJxq1mYSp0qOSN6TZK', 'zsw5L1gu@gmail.com', 'zsw5L1gu.jpg', 3181, 154, '2019-11-17 08:29:15', '2019-11-17 08:29:15', NULL),
(83, 'Bgg3C4NO', '$2y$10$8Oj3gmKrBG7HI3wMEMv8luJSiqvn.7tVG9iyNQOP5FhBh6UU1Mh/2', 'Bgg3C4NO@gmail.com', 'Bgg3C4NO.jpg', 3413, 143, '2019-11-17 08:29:15', '2019-11-17 08:29:15', NULL),
(84, 'k4OMFEsY', '$2y$10$KX80X5lvJaEQedKRdngykOB8dDfRrZrtFa8bysGAyL8nI/YK9bPV2', 'k4OMFEsY@gmail.com', 'k4OMFEsY.jpg', 3928, 384, '2019-11-17 08:29:15', '2019-11-17 08:29:15', NULL),
(85, 'zokQQPSg', '$2y$10$LZfWUFPEaw1WbjsKaiB2o.FmjOQKcUUSceshprkV/6ivrUk/NKLbW', 'zokQQPSg@gmail.com', 'zokQQPSg.jpg', 2028, 469, '2019-11-17 08:29:15', '2019-11-17 08:29:15', NULL),
(86, 'TMvTwbBl', '$2y$10$kDbEONPSewKS0x7YgBieV.JjgUvz13zwl5Ei0zixgq6Rv2Lavubb6', 'TMvTwbBl@gmail.com', 'TMvTwbBl.jpg', 3571, 22, '2019-11-17 08:29:15', '2019-11-17 08:29:15', NULL),
(87, 'cYwZfMTJ', '$2y$10$iEGsiXa4pCv.nQoTNvqUpOPGEy57eLUAu0ePjhYy6iOxgLDgs4wca', 'cYwZfMTJ@gmail.com', 'cYwZfMTJ.jpg', 2180, 193, '2019-11-17 08:29:15', '2019-11-17 08:29:15', NULL),
(88, 'URXMeZCQ', '$2y$10$B926cvCRT4y6jXfWy40LGOX5lPTGoG/yU14d6m6JWOzVe.KEgAkjW', 'URXMeZCQ@gmail.com', 'URXMeZCQ.jpg', 1600, 422, '2019-11-17 08:29:15', '2019-11-17 08:29:15', NULL),
(89, 'YITCaslD', '$2y$10$BK81zYFlbiSrJeSz0yGr9uJnLVXsTIriA.XUqZQGdGU9x2f8pCVIe', 'YITCaslD@gmail.com', 'YITCaslD.jpg', 3266, 166, '2019-11-17 08:29:15', '2019-11-17 08:29:15', NULL),
(90, '322ryudS', '$2y$10$mh5TJcZUM6e1/2A.Oa/DZOTxXaQ/vcRSxx/5V7YECkxbhZ4J2Plvu', '322ryudS@gmail.com', '322ryudS.jpg', 3749, 306, '2019-11-17 08:29:15', '2019-11-17 08:29:15', NULL),
(91, 'PPPCCniw', '$2y$10$OnYm8kCYF3fft.agICnA4O27vYQQqCazXd3iu6CPLlR1u/6bKgPbG', 'PPPCCniw@gmail.com', 'PPPCCniw.jpg', 1119, 237, '2019-11-17 08:29:15', '2019-11-17 08:29:15', NULL),
(92, 'MFcC8yZ9', '$2y$10$12OTk1UVVuegGfzsiYigWeQCHzHLYNcvUU3uiXZpbw0S4waxObVgu', 'MFcC8yZ9@gmail.com', 'MFcC8yZ9.jpg', 3407, 124, '2019-11-17 08:29:16', '2019-11-17 08:29:16', NULL),
(93, 'sjKFe90D', '$2y$10$zANbcN52gaI5Ao4ELMY8feSZsMqA8ga13V1V..2bZT1vPXWZytFZm', 'sjKFe90D@gmail.com', 'sjKFe90D.jpg', 4660, 339, '2019-11-17 08:29:16', '2019-11-17 08:29:16', NULL),
(94, 'hsBxxsDm', '$2y$10$eBR.pc/zEO8D6hGp6Rd3g.w6MhtQiWyaJI3p8tZgTcPFexx2D5OHm', 'hsBxxsDm@gmail.com', 'hsBxxsDm.jpg', 1167, 315, '2019-11-17 08:29:16', '2019-11-17 08:29:16', NULL),
(95, 'WssClkPG', '$2y$10$B8EVA6ipkn2A6WoGX.3laewMOZvEQ2C0AHyrt8w/DS.R6RjTM8dfu', 'WssClkPG@gmail.com', 'WssClkPG.jpg', 4461, 42, '2019-11-17 08:29:16', '2019-11-17 08:29:16', NULL),
(96, '5FOdExex', '$2y$10$RXB548Ub6qyYfftQdpz0OunYKj4N0Bcy1melZeSO6RKrpPirVLH5W', '5FOdExex@gmail.com', '5FOdExex.jpg', 1911, 394, '2019-11-17 08:29:16', '2019-11-17 08:29:16', NULL),
(97, 'ieKg1vC2', '$2y$10$3//6oVmpWT8GlyVM1FNQseW9pZcoyiFyB3w/w.n5YJvGMw/0l3C2e', 'ieKg1vC2@gmail.com', 'ieKg1vC2.jpg', 4507, 366, '2019-11-17 08:29:16', '2019-11-17 08:29:16', NULL),
(98, '0TDXvti2', '$2y$10$3LP3gDz0fGT.HeVq/lAHwubzKR.k.Dd728OOTzQ/tnXJHyZTJaEVy', '0TDXvti2@gmail.com', '0TDXvti2.jpg', 2690, 170, '2019-11-17 08:29:16', '2019-11-17 08:29:16', NULL),
(99, 'uJ77EkJJ', '$2y$10$bC4QmJ6I6QC0FzGzfF9S1OMkJ5aLmFMV8yH6FHH1FaKuPmZb.MM36', 'uJ77EkJJ@gmail.com', 'uJ77EkJJ.jpg', 1054, 28, '2019-11-17 08:29:16', '2019-11-17 08:29:16', NULL),
(100, 'Cs56Oo8y', '$2y$10$e9u6/cFR.DoVIuv0emZiVOxqYhZXsxIGdmqxxvzUh94DJxYzbxVFO', 'Cs56Oo8y@gmail.com', 'Cs56Oo8y.jpg', 2624, 437, '2019-11-17 08:29:16', '2019-11-17 08:29:16', NULL),
(101, 'EP9ayWWx', '$2y$10$XefjGVaxJLTHAj4Ro6IQvu5D2k.Rng7g/ZAb4K5H89n/wmlDRD/e.', 'EP9ayWWx@gmail.com', 'EP9ayWWx.jpg', 2217, 138, '2019-11-17 08:29:17', '2019-11-17 08:29:17', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_tri_vien`
--

DROP TABLE IF EXISTS `quan_tri_vien`;
CREATE TABLE IF NOT EXISTS `quan_tri_vien` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_tri_vien`
--

INSERT INTO `quan_tri_vien` (`id`, `ten_dang_nhap`, `mat_khau`, `ho_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '$2y$10$0tDICibdLpFrYNNGUJim..hLnKOrPVQY/xP9h0EJEpyvPqaODRrca', 'Thanh Hải', '2019-11-17 07:39:46', '2019-11-17 07:39:46', NULL),
(2, 'admin', '$2y$10$bO1XZnWUu9dAPZgRSSpZwup66mJpEJhewN722T7OSg4NmRUMhKVju', 'Thanh Hải', '2019-11-17 08:24:41', '2019-11-17 08:24:41', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
