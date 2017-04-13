-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2017 at 04:20 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pps`
--

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `participant_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(2) NOT NULL,
  `shturm_try_1` float DEFAULT NULL,
  `shturm_try_2` float DEFAULT NULL,
  `shturm` float DEFAULT NULL,
  `shturm_zabig` int(3) DEFAULT NULL,
  `sto_metriv_try_1` float DEFAULT NULL,
  `sto_metriv_try_2` float DEFAULT NULL,
  `sto_metriv` float DEFAULT NULL,
  `sto_metriv_zabig` int(3) DEFAULT NULL,
  `dvoborstvo` float DEFAULT NULL,
  `doroga_number` int(11) DEFAULT NULL,
  `shturm_result` int(10) DEFAULT NULL,
  `sto_metriv_result` int(11) DEFAULT NULL,
  `dvoborstvo_result` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`participant_id`, `team_id`, `first_name`, `last_name`, `age`, `shturm_try_1`, `shturm_try_2`, `shturm`, `shturm_zabig`, `sto_metriv_try_1`, `sto_metriv_try_2`, `sto_metriv`, `sto_metriv_zabig`, `dvoborstvo`, `doroga_number`, `shturm_result`, `sto_metriv_result`, `dvoborstvo_result`) VALUES
(401, 89, '1', '1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(396, 87, 'q', '1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(397, 87, '2', '2', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(398, 88, '11', '11', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(399, 88, '11', '11', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(400, 89, '1', '1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(367, 80, '1', '1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(100, 18, 'Вова', '2', 1, 1, 0.25, 0.25, 1, 22.22, NULL, 22.22, 1, 22.47, 3, 2, 10, 5),
(110, 19, 'Міша', '6', 1, 2, 0.2, 0.2, 1, 556.2, 0, 556.2, 1, 556.4, 4, 1, 22, 20),
(109, 19, 'Міша', '5', 1, 0, 1, 1, 2, NULL, 0, 566.2, 2, 0, 4, 4, 23, 21),
(107, 19, 'Міша', '3', 1, 1.2, 1.2, 1.2, 3, NULL, 0.3, 0.3, 3, 1.5, 4, 5, 3, 2),
(108, 19, 'Міша', '4', 1, 11.2, 55.2, 11.2, 4, NULL, 55.36, 55.36, 4, 66.56, 4, 9, 15, 12),
(106, 19, 'Міша', '2', 1, 55.3, 66.3, 55.3, 5, NULL, 0.22, 0.22, 5, 55.52, 4, 13, 1, 9),
(101, 18, 'Вова', '3', 1, 0, 45, 45, 2, 13.4, NULL, 13.4, 2, 58.4, 3, 12, 8, 11),
(102, 18, 'Вова', '4', 1, 11.2, 2, 2, 3, 11.5, 0.245, 0.245, 3, 2.245, 3, 6, 2, 3),
(103, 18, 'Вова', '5', 1, 66.3, 88.2, 66.3, 4, 55.2, NULL, 55.2, 4, 121.5, 3, 15, 14, 19),
(104, 18, 'Вова', '6', 1, 66.4, 88.2, 66.4, 5, 44.33, NULL, 44.33, 5, 110.73, 3, 16, 13, 17),
(105, 19, 'Міша', '1', 1, 77.2, 86.5, 77.2, 6, 55.3, 2.34, 2.34, 6, 79.54, 4, 17, 5, 13),
(99, 18, 'Вова', '1', 1, NULL, NULL, 87.2, 6, NULL, 22.55, 22.55, 6, 0, 3, 18, 12, 21),
(89, 20, 'Віталік', '3', 2, 4, 1, 1, 1, 22.2, 0, 22.2, 1, 23.2, 1, 4, 9, 6),
(90, 20, 'Віталік', '4', 2, 1, 0, 1, 2, 23.5, 12.55, 12.55, 2, 13.55, 1, 4, 7, 4),
(91, 20, 'Віталік', '5', 2, 11.2, 11.2, 11.2, 3, 0, NULL, 566.2, 3, 0, 1, 9, 23, 21),
(92, 20, 'Віталік', '6', 2, 99.2, 55.88, 55.88, 4, 56.2, 88.445, 56.2, 4, 112.08, 1, 14, 17, 18),
(93, 21, 'Богдан', '1', 2, 5, 2.22, 2.22, 1, 22.36, NULL, 22.36, 1, 24.58, 2, 7, 11, 7),
(94, 21, 'Богдан', '2', 2, 0, 2, 2, 2, 55.45, NULL, 55.45, 2, 57.45, 2, 6, 16, 10),
(95, 21, 'Богдан', '3', 2, 21.4, 1, 1, 3, NULL, 88.9, 88.9, 3, 89.9, 2, 4, 21, 15),
(96, 21, 'Богдан', '4', 2, 11.3, 8.43, 8.43, 4, NULL, 88.6, 88.6, 4, 97.03, 2, 8, 20, 16),
(97, 21, 'Богдан', '5', 2, 23.25, 88.4, 23.25, 5, 6.2, 5.6, 5.6, 5, 28.85, 2, 11, 6, 8),
(98, 21, 'Богдан', '6', 2, 14, NULL, 14, 6, 66.5, NULL, 66.5, 6, 80.5, 2, 10, 19, 14),
(87, 20, 'Віталік', '1', 2, 5.12, 0.356, 0.356, 5, 1, 1, 1, 5, 1.356, 1, 3, 4, 1),
(88, 20, 'Віталік', '2', 2, NULL, 0, 87.2, 6, NULL, 66.3, 66.3, 6, 0, 1, 18, 18, 21);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estafeta` float DEFAULT NULL,
  `estafeta_result` int(11) DEFAULT NULL,
  `boyove` float DEFAULT NULL,
  `boyove_result` int(11) DEFAULT NULL,
  `shturm` float DEFAULT NULL,
  `shturm_result` int(11) DEFAULT NULL,
  `sto_metriv` float DEFAULT NULL,
  `sto_metriv_result` int(11) DEFAULT NULL,
  `dvoborstvo` float DEFAULT NULL,
  `dvoborstvo_result` int(11) DEFAULT NULL,
  `tru_kolinna` float DEFAULT NULL,
  `tru_kolinna_result` int(11) DEFAULT NULL,
  `team_zabig` int(11) DEFAULT NULL,
  `doroga_number` int(11) DEFAULT NULL,
  `result` int(10) DEFAULT NULL,
  `result_result` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `estafeta`, `estafeta_result`, `boyove`, `boyove_result`, `shturm`, `shturm_result`, `sto_metriv`, `sto_metriv_result`, `dvoborstvo`, `dvoborstvo_result`, `tru_kolinna`, `tru_kolinna_result`, `team_zabig`, `doroga_number`, `result`, `result_result`) VALUES
(20, 'Теребовля', 10, 2, 60.2, 2, 156.636, 3, 724.45, 3, 14.906, 1, 7, 1, 2, 1, 12, 1),
(21, 'Козова', 11, 3, 104.24, 4, 50.9, 1, 327.41, 2, 191.38, 4, 102.5, 4, 2, 2, 18, 4),
(18, 'Тернопіль', 7, 1, 100, 3, 267.15, 4, 157.945, 1, 83.115, 2, 10.5, 2, 1, 1, 13, 2),
(19, 'Ланівці', 14, 4, 10.2, 1, 146.1, 2, 1180.62, 4, 123.58, 3, 11.2, 3, 1, 2, 17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'vova', 'BqsF4mT5FhS2ogGLqFnERJDZIgl-2C5q', '$2y$13$j/1HkUmBEeGgaE8QdV81WuiA401hbIoHGZiKL0OBvmW0AjsiptJtW', NULL, 'fendeka@mail.ru', 10, 1478022411, 1478022411),
(2, 'stepan', 'xW3XJ9ygutgMJDx604nCnqa_3Mz4FpBu', '$2y$13$RW6Zw8do5LMtBOxzGiCL5ud4fX4fMaRQdimzWG0Tu9wHXsi2Ch7Fi', NULL, 'stepan@mail.ru', 10, 1478032626, 1478032626),
(3, 'oleg', 'rq0XF-OFS7y23VedQPxNxdMI2IRwfbSG', '$2y$13$y9NHi6Dq9PXyqf367u6Wk.LWfuH22/elIcxVb2r0PjaqdB.nVzJGu', NULL, 'oleg@mail.ru', 10, 1478208636, 1478208636),
(4, 'bin', 'wmC8Kcj9x7x6Sj5d3m96jAIpVpDpRnKa', '$2y$13$1ETdj.AJuW9o/8Ioi.q/YexAKLTMbLdQsEaYhFEfSZQ18QnaVLMBG', NULL, 'de@mail.com', 10, 1478707627, 1478707627),
(5, 'va', 'X13_LBQGU3dySTG89z1wK4jy-2cipjEW', '$2y$13$Qf9AG5OVaFScdUIl18VQmO1Wop4g.rBZ364OIClt.a3dJF8hM9NE2', NULL, 'va@mail.com', 10, 1478708579, 1478708579),
(6, 'ka', 'Zc-Koz8616QyaVm1ICKoAIz2ud2eyaGB', '$2y$13$Zu7sOLnnL55YO2VQYcNSbeEHWd9ka0uiU7MqA58KYsxMr.x0ocNpe', NULL, 'ka@mail.com', 10, 1478708602, 1478708602),
(7, 'step', 'SbpslJVfYPXsQy8S48QPuosq1XODsr3e', '$2y$13$cidTXHYvXGayC/tRHtlkhu0tCqPOGOlqAMg6ivwCiv8JsLo/nC4Ze', NULL, 'step@mail.com', 10, 1479085051, 1479085051),
(8, 'qqqqq', '_YLI-FNvgE0PSsgxcGrnKT4QyT_7Ob2z', '$2y$13$shY4V1tuNVM7WHaYYjyxgu.1hqkA0a3Tb9f.bX.D1PywJoSz1.okm', NULL, 'qqqqq@mail.com', 10, 1479230503, 1479230503);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`participant_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `participant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
