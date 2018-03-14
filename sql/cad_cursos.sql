-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2018 at 03:59 AM
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
-- Table structure for table `cad_cursos`
--

CREATE TABLE `cad_cursos` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(60) CHARACTER SET latin1 NOT NULL,
  `descricao` text CHARACTER SET latin1 NOT NULL,
  `link` varchar(40) CHARACTER SET latin1 NOT NULL,
  `categoria` varchar(60) CHARACTER SET latin1 NOT NULL,
  `page` varchar(60) CHARACTER SET latin1 NOT NULL,
  `acao` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cad_cursos`
--

INSERT INTO `cad_cursos` (`id`, `nome`, `descricao`, `link`, `categoria`, `page`, `acao`) VALUES
(1, 'Mídias Sociais', 'Você irá aprender tudo sobre a utilização das maiores \"ferramentas de mídias sociais\" projetados para possibilitar a interação social.', '../../images/portfolio/informatica.png', 'info', 'cursos/informatica.php', 'Em breve'),
(2, 'Microsoft Word', 'Você irá aprender todo sobre o Microsoft Word e entendera como montar listas, relatórios, projetos e livros.', '../../images/portfolio/word.png', 'info', 'cursos/word.php', 'Adicionar curso'),
(4, 'Microsoft PowerPoint', 'Com o curso de PowerPoint você aprenderá a criar slides com suas fotos favoritas e apresentações de projetos de modo automático.', '../../images/portfolio/powerpoint.png', 'info', 'cursos/powerpoint.php', 'Adicionar curso'),
(5, 'Microsoft Excel', 'Aprenda a criar tabelas inteligentes, controle de fluxos, relatórios e resumos de utilitários com o Microsoft Excel', '../../images/portfolio/excel.png', 'info', 'cursos/excel.php', 'Em breve'),
(6, 'Sistemas de Informação', 'Descubra como funciona os mais diversos sistemas de informação automatizados ou manuais.', '../../images/portfolio/informacao.jpg', 'info', 'cursos/sistema.php', 'Em breve'),
(7, 'Marketing Digital', 'Saiba como promover produtos e pessoas no mundo digital, utilizando redes sociais e outros meios eficazes.', '../../images/portfolio/marketing.jpg', 'info', 'cursos/marketing.php', 'Em breve'),
(8, 'Trabalho em altura', 'Conheça os princí­pios e técnicas desta norma regulamentadora essencial para quem realiza trabalho em altura.', '../../images/portfolio/nrtec.jpg', 'nr', 'cursos/nr35.php', 'Adicionar curso'),
(9, 'Trabalho com eletricidade', 'Conheça os princípios e técnicas desta norma regulamentadora essencial para quem realiza trabalho com eletricidade.', '../../images/portfolio/nrd.jpg', 'nr', 'cursos/nr10.php', 'Adicionar curso'),
(10, 'Trabalho em espaços confinados', 'Conheça os princípios e técnicas desta norma regulamentadora essencial para quem realiza trabalho em espaços confinados.', '../../images/portfolio/nrtetr.jpg', 'nr', 'cursos/nr33.php', 'Adicionar curso');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_cursos`
--
ALTER TABLE `cad_cursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_cursos`
--
ALTER TABLE `cad_cursos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
