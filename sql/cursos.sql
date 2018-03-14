-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2018 at 11:30 AM
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
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `curso` text NOT NULL,
  `link` text NOT NULL,
  `nota` int(11) NOT NULL,
  `img` text NOT NULL,
  `id` bigint(20) NOT NULL,
  `code` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`curso`, `link`, `nota`, `img`, `id`, `code`) VALUES
('Microsoft Word 2010', 'cursos/word.php', 0, 'images/portfolio/word.png', 50, 1),
('Microsoft Word 2010', 'cursos/word.php', 0, 'images/portfolio/word.png', 52, 4),
('Microsoft Word 2010', 'cursos/word.php', 0, 'images/portfolio/word.png', 53, 3),
('Microsoft Word 2010', 'cursos/word.php', 0, 'images/portfolio/word.png', 54, 20),
('Microsoft Word 2010', 'cursos/word.php', 0, 'images/portfolio/word.png', 55, 21),
('Microsoft Word 2010', 'cursos/word.php', 0, 'images/portfolio/word.png', 56, 23),
('Microsoft Excel', 'cursos/excel.php', 0, '../images/portfolio/excel.png', 57, 3),
('Microsoft Word', 'cursos/word.php', 0, '../images/portfolio/word.png', 58, 24),
('Microsoft Powerpoint', 'cursos/powerpoint.php', 0, '../images/portfolio/powerpoint.png', 59, 24),
('Microsoft Excel', 'cursos/excel.php', 0, '../images/portfolio/excel.png', 60, 25),
('Mídias Sociais', 'cursos/informatica.php', 0, '../images/portfolio/informatica.png', 61, 1),
('Mídias Sociais', 'cursos/informatica.php', 0, '../images/portfolio/informatica.png', 62, 26),
('Microsoft Word', 'cursos/word.php', 0, '../images/portfolio/word.png', 63, 26),
('Microsoft PowerPoint', 'cursos/powerpoint.php', 0, '../images/portfolio/powerpoint.png', 64, 26),
('Microsoft Excel', 'cursos/excel.php', 0, '../images/portfolio/excel.png', 65, 26),
('Sistemas de Informação', 'cursos/sistema.php', 0, '../images/portfolio/informacao.jpg', 66, 26),
('Marketing Digital', 'cursos/marketing.php', 0, '../images/portfolio/marketing.jpg', 67, 26),
('Sistemas de Informação', 'cursos/sistema.php', 0, '../images/portfolio/informacao.jpg', 68, 29),
('Microsoft PowerPoint', 'cursos/powerpoint.php', 0, '../images/portfolio/powerpoint.png', 69, 1),
('Marketing Digital', 'cursos/marketing.php', 0, '../images/portfolio/marketing.jpg', 70, 1),
('Microsoft Excel', 'cursos/excel.php', 0, '../../images/portfolio/excel.png', 71, 32),
('Microsoft Word', 'cursos/word.php', 0, '../../images/portfolio/word.png', 72, 32),
('Microsoft PowerPoint', 'cursos/powerpoint.php', 0, '../../images/portfolio/powerpoint.png', 73, 32),
('Trabalho em altura', 'cursos/nr35.php', 0, '../../images/portfolio/nrtec.jpg', 74, 1),
('Trabalho com eletricidade', 'cursos/nr10.php', 0, '../../images/portfolio/nrd.jpg', 75, 1),
('Trabalho em altura', 'cursos/nr35.php', 0, '../../images/portfolio/nrtec.jpg', 76, 2),
('Trabalho com eletricidade', 'cursos/nr10.php', 0, '../../images/portfolio/nrd.jpg', 77, 2),
('Trabalho em espaços confinados', 'cursos/nr33.php', 0, '../../images/portfolio/nrtetr.jpg', 78, 2),
('Mídias Sociais', 'cursos/informatica.php', 0, '../../images/portfolio/informatica.png', 79, 36),
('Microsoft Word', 'cursos/word.php', 0, '../../images/portfolio/word.png', 80, 36),
('Trabalho em altura', 'cursos/nr35.php', 0, '../../images/portfolio/nrtec.jpg', 81, 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
