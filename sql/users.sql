-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2018 at 11:34 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u998161308_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `org` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `loc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ultimo_acesso` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip`, `org`, `loc`, `city`, `region`, `country`, `ultimo_acesso`) VALUES
(1, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-22 02:11:25'),
(2, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-22 10:04:43'),
(3, '66.249.88.36', 'AS15169 Google Inc.', '37.4192,-122.0574', 'Mountain View', 'California', 'US', '2017-08-22 10:19:19'),
(4, '66.249.88.32', 'AS15169 Google Inc.', '37.4192,-122.0574', 'Mountain View', 'California', 'US', '2017-08-22 10:21:11'),
(5, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-22 10:39:29'),
(6, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-22 10:40:00'),
(7, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-22 10:41:52'),
(8, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-22 10:43:59'),
(9, '107.189.61.108', 'AS7363 Lightstream Transmission and Telecom Inc', '40.7834,-73.9663', 'Manhattan', 'New York', 'US', '2017-08-22 11:22:23'),
(10, '107.189.61.108', 'AS7363 Lightstream Transmission and Telecom Inc', '40.7834,-73.9663', 'Manhattan', 'New York', 'US', '2017-08-22 11:22:33'),
(11, '107.189.61.108', 'AS7363 Lightstream Transmission and Telecom Inc', '40.7834,-73.9663', 'Manhattan', 'New York', 'US', '2017-08-22 11:22:43'),
(12, '107.189.61.108', 'AS7363 Lightstream Transmission and Telecom Inc', '40.7834,-73.9663', 'Manhattan', 'New York', 'US', '2017-08-22 11:22:47'),
(13, '177.74.20.117', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.0500,-46.7667', 'Bragança', 'Para', 'BR', '2017-08-22 16:27:01'),
(14, '5.228.129.60', 'AS42610 PJSC Rostelecom', '55.7333,37.7667', 'Plyushchëvo', 'Moscow City', 'RU', '2017-08-23 05:16:39'),
(15, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-23 11:03:03'),
(16, '200.216.225.196', 'AS7738 Telemar Norte Leste S.A.', '-22.8305,-43.2192', '', '', 'BR', '2017-08-23 16:13:51'),
(17, '176.15.234.69', 'AS8402 OJSC Vimpelcom', '55.7485,37.6184', 'Moscow', 'Moscow', 'RU', '2017-08-24 22:33:49'),
(18, '66.249.88.60', 'AS15169 Google Inc.', '37.4192,-122.0574', 'Mountain View', 'California', 'US', '2017-08-25 04:00:53'),
(19, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 11:27:30'),
(20, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 11:49:22'),
(21, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 13:10:17'),
(22, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 13:37:26'),
(23, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 13:44:19'),
(24, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 14:58:56'),
(25, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 15:01:51'),
(26, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 15:04:41'),
(27, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 15:09:44'),
(28, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 15:10:56'),
(29, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 15:11:08'),
(30, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 15:13:57'),
(31, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-08-25 15:14:01'),
(32, '189.82.43.92', 'AS7738 Telemar Norte Leste S.A.', '-1.3657,-48.3422', 'Ananindeua', 'Para', 'BR', '2017-08-26 14:30:09'),
(33, '189.82.43.92', 'AS7738 Telemar Norte Leste S.A.', '-1.3657,-48.3422', 'Ananindeua', 'Para', 'BR', '2017-08-26 14:31:13'),
(34, '177.13.233.49', 'AS11338 SKY SERVIÇOS DE BANDA LARGA LTDA', '-1.3657,-48.3422', 'Ananindeua', 'Para', 'BR', '2017-08-27 15:19:45'),
(35, '177.74.10.91', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.0500,-46.7667', 'Bragança', 'Para', 'BR', '2017-08-28 19:42:31'),
(36, '177.74.10.91', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.0500,-46.7667', 'Bragança', 'Para', 'BR', '2017-08-28 19:44:21'),
(37, '200.217.187.115', 'AS7738 Telemar Norte Leste S.A.', '-22.8305,-43.2192', '', '', 'BR', '2017-08-31 00:27:28'),
(38, '177.74.20.123', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.0500,-46.7667', 'Bragança', 'Para', 'BR', '2017-09-04 16:23:01'),
(39, '66.102.6.122', 'AS15169 Google Inc.', '37.4192,-122.0574', 'Mountain View', 'California', 'US', '2017-09-07 21:29:57'),
(40, '200.129.133.131', 'AS1916 Associação Rede Nacional de Ensino e Pesquisa', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-09-15 12:27:31'),
(41, '177.74.20.99', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.0500,-46.7667', 'Bragança', 'Para', 'BR', '2017-09-15 15:19:34'),
(42, '200.217.187.115', 'AS7738 Telemar Norte Leste S.A.', '-22.8305,-43.2192', '', '', 'BR', '2017-09-15 17:04:32'),
(43, '66.249.85.30', 'AS15169 Google Inc.', '37.4192,-122.0574', 'Mountain View', 'California', 'US', '2017-09-15 19:41:20'),
(44, '66.249.85.30', 'AS15169 Google Inc.', '37.4192,-122.0574', 'Mountain View', 'California', 'US', '2017-10-01 18:20:21'),
(45, '66.249.85.29', 'AS15169 Google Inc.', '37.4192,-122.0574', 'Mountain View', 'California', 'US', '2017-10-01 18:20:39'),
(46, '177.74.10.30', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-10-31 19:18:06'),
(47, '177.74.10.30', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-10-31 19:18:08'),
(48, '177.74.20.78', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-10-31 19:20:04'),
(49, '177.74.20.78', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-10-31 19:20:05'),
(50, '177.74.20.78', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-10-31 19:20:08'),
(51, '177.74.20.78', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-10-31 19:20:09'),
(52, '177.74.20.78', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-10-31 19:20:26'),
(53, '177.74.20.78', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-10-31 19:20:29'),
(54, '66.249.85.30', 'AS15169 Google LLC', '37.4192,-122.0574', 'Mountain View', 'California', 'US', '2017-11-03 02:24:05'),
(55, '66.249.85.29', 'AS15169 Google LLC', '37.4192,-122.0574', 'Mountain View', 'California', 'US', '2017-11-03 02:25:00'),
(56, '177.74.10.8', 'AS53016 PRODEPA - Emp Tec da Inf e Com do Estado do Pará', '-1.4373,-48.4706', 'Belém', 'Para', 'BR', '2017-12-12 19:41:51'),
(57, '177.209.18.150', 'AS7738 Oi', '-1.3657,-48.3422', 'Ananindeua', 'Para', 'BR', '2017-12-24 23:52:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
