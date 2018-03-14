-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2018 at 03:58 AM
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
-- Table structure for table `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(144) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` varchar(10) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `nivel` int(1) UNSIGNED NOT NULL DEFAULT '1',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `cadastro` datetime NOT NULL,
  `data_ultimo_login` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `img`, `rg`, `cpf`, `pais`, `endereco`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `uf`, `telefone`, `celular`, `email`, `senha`, `nivel`, `ativo`, `cadastro`, `data_ultimo_login`) VALUES
(1, 'Cristiano Santos de Souza', '', '7052279', '02778852212', 'BRA', 'Rua Germano Aranha Qd. 294', '03', 'Proximo Ã  ParagÃ¡s', 'Vila dos Cabanos', '68447000', 'Barcarena', 'PA', '9191993974583', '0', 'cristiano@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 2, 1, '2017-04-23 17:28:17', '2017-12-06'),
(2, 'Mikael', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 'mikael@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 2, 1, '2017-05-07 18:16:43', '2018-01-31'),
(3, 'Marllon', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 'marllon@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 1, 1, '2017-05-07 18:22:27', '2017-06-22'),
(4, 'Castelo', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 'castelo@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 2, 1, '2017-05-07 18:24:19', '2018-03-10'),
(20, 'Aluno', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 'aluno@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 1, 1, '2017-05-08 11:25:25', '2017-05-08'),
(21, 'Paulo Bastos', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 'prbalmeida@bol.com.br', '2e6f9b0d5885b6010f9167787445617f553a735f', 1, 1, '2017-05-08 13:48:05', '2017-05-08'),
(22, '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 1, 1, '2017-05-09 12:33:18', '2017-05-09'),
(23, 'Mikael Aurio', '', '', '', '', '', '', '', '', '', '', '', '0', '992823691', 'mikaelaurio.mps@gmail.com', '6f025112e2905562f7a9bc2317f5261f70d8841f', 1, 1, '2017-05-09 14:05:34', '2017-05-31'),
(24, 'Paulo Sergio Alves da Silva Junior', '', '', '', '', '', '', '', '', '', '', '', '0', '91983536371', 'pauloalvesjnior@gmail.com', '6ca2e5f06205e6b6c7c01c0b8bad3e5dc21fd917', 1, 1, '2017-05-15 22:50:33', '2017-05-15'),
(25, 'Ana claudia Ribeiro Yoshitome', '', '', '', '', '', '', '', '', '', '', '', '0', '91988518475', 'dd-filhote2010@hotmail.com', '1deff98ccd845361d5805fd6bfc595bdce95a9eb', 1, 1, '2017-05-20 13:17:50', '2017-05-20'),
(26, 'Cristiano', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 'santodesouzacris@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 1, 1, '2017-05-23 21:37:02', '2017-06-09'),
(27, 'Cristiano', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 'santosdesouzacris@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 1, 1, '2017-05-24 13:48:47', '2018-03-14'),
(28, 'Mikael Aurio', '', '', '', '', '', '', '', '', '', '', '', '0', '992823691', 'b-boymikael13@hotmail.com', '6f025112e2905562f7a9bc2317f5261f70d8841f', 1, 1, '2017-06-15 11:59:18', '2017-06-15'),
(29, 'reginilson cesar dias barbosa', '', '', '', '', '', '', '', '', '', '', '', '91 93750241', '0', 'reginilsonbarbosa81@gmail.com', '41c73959d5a2ff83b321ea02824208227808059b', 1, 1, '2017-06-23 23:39:43', '2017-06-23'),
(30, 'JOSÉ TEOTONIO BARBALHO NETO', '', '', '', '', '', '', '', '', '', '', '', '0', '91 981013126', 'teobarbalho64@gmail.com', '4dc10a1d369a4983c322d1a48f4c9be6339411e4', 1, 1, '2017-08-25 10:18:13', '2017-08-25'),
(31, 'José Alexandre da Silva Sá', '', '', '', '', '', '', '', '', '', '', '', '0', '91 992701230', 'jsaalexandre@yahoo.com', 'aa964971f2af6c4426da02adabeb3f215bfde582', 1, 1, '2017-08-27 12:28:03', '2017-08-27'),
(32, 'Henrique Costa', '', '', '', '', '', '', '', '', '', '', '', '0', '91983944999', 'costah612@gmail.com', 'e0488135ba893570ec0b8b85ca58a47849afca7e', 1, 1, '2017-10-02 11:55:32', '2017-10-02'),
(33, 'jorge luiz castelo branco costa junior', '', '', '', '', '', '', '', '', '', '', '', '91080530153', '0', 'jorgeluizcb19@hotmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 1, 1, '2017-10-02 23:13:00', '2017-10-02'),
(34, 'Danilo Souza Duarte', '', '6229755', '02985366259', 'BRA', 'Travessa Francisco Monteiro', '119', 'Entre João Paulo e Jabatiteua', 'Marco', '66070190', 'Belém', 'PA', '91982780151', '(91) 982780151', 'danilo.duarte8@hotmail.com', 'f0eaa42c27e4790576e2d61a9e7f781c79977948', 1, 1, '2017-10-05 13:56:41', '2018-03-09'),
(35, 'Diego Jareta Maia ', '', '', '', '', '', '', '', '', '', '', '', '0', '27 997043314', 'diegojareta@bol.com.br', '9d47d7fc20bb1c9107250ad46db9c94c1afa9403', 1, 1, '2017-11-25 17:57:27', '2017-11-25'),
(36, 'Atitude Cursos', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 'atituderhcursos@gmail.com', '4a49fd7fd4e8d34cf309eedd9014ca778184e7c9', 2, 1, '2017-12-05 14:20:31', '2018-03-14'),
(42, 'Douglas Meireles', '', '', '', '', '', '', '', '', '', '', '', '0', '91988229862', 'meirelesdouglas25@gmail.com', 'e583e74c5770905ee29ce464f4001754440a60ba', 1, 1, '2018-01-16 23:04:24', '2018-01-16'),
(43, 'testedeusuario', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 'testedeusuario@testedeusuario.com', 'a6f94fb955afa90b217f2d95935ba57ff13199e3', 1, 1, '2018-02-05 18:18:58', '2018-02-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nivel` (`nivel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
