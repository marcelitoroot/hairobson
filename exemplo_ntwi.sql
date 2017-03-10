-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Mar-2017 às 21:40
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exemplo_ntwi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas_despesas`
--

CREATE TABLE `receitas_despesas` (
  `id` int(11) NOT NULL COMMENT 'Chave primaria .',
  `nome` varchar(50) NOT NULL COMMENT 'Ex .: conta de telefone .',
  `mes_referencia` int(11) NOT NULL,
  `tipo` int(1) NOT NULL COMMENT '1. Receita ; 2. Despesa .',
  `classe` int(1) NOT NULL COMMENT '1. variavel ; 2. Fixo .',
  `datahora` datetime NOT NULL,
  `valor` float NOT NULL,
  `usuario` int(11) NOT NULL COMMENT 'Id do usuario a quem pertence .',
  `descricao` text COMMENT 'Comentarios adicionais .'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receitas_despesas`
--

INSERT INTO `receitas_despesas` (`id`, `nome`, `mes_referencia`, `tipo`, `classe`, `datahora`, `valor`, `usuario`, `descricao`) VALUES
(75, 'hgfdhg', 1, 1, 1, '2017-02-16 00:10:51', 1111.11, 1, 'fdsdfs'),
(76, '123', 1, 1, 1, '2017-03-05 20:31:41', 200, 6, ''),
(77, '1515', 1, 1, 1, '2017-03-05 20:34:20', 300, 6, ''),
(78, '15', 1, 1, 1, '2017-03-05 20:38:01', 500, 6, ''),
(79, '16', 1, 1, 1, '2017-03-05 20:40:52', 500, 6, ''),
(80, '19', 1, 1, 1, '2017-03-05 20:45:00', 500, 7, ''),
(81, '200', 1, 1, 1, '2017-03-05 20:49:36', 200, 6, ''),
(82, '500', 1, 1, 1, '2017-03-05 20:53:19', 500, 6, ''),
(83, '500', 1, 1, 1, '2017-03-05 20:56:07', 500, 6, ''),
(84, '9', 1, 1, 1, '2017-03-05 20:57:13', 200, 6, ''),
(85, '5', 1, 1, 1, '2017-03-05 21:02:18', 100, 6, ''),
(86, '15', 1, 1, 1, '2017-03-05 21:04:01', 200, 6, ''),
(87, '6', 1, 2, 1, '2017-03-05 21:05:19', 100, 6, ''),
(88, '9', 1, 1, 1, '2017-03-05 21:06:38', 500, 6, ''),
(89, 'da', 1, 1, 1, '2017-03-05 21:08:16', 100, 6, ''),
(90, '200', 1, 1, 1, '2017-03-05 21:23:33', 200, 6, ''),
(91, '17', 1, 1, 1, '2017-03-05 21:25:03', 100, 6, ''),
(92, '66', 1, 1, 1, '2017-03-05 21:29:33', 100, 6, ''),
(93, '22', 1, 1, 1, '2017-03-05 21:30:48', 100, 6, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL COMMENT 'Chave primaria .',
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` int(11) NOT NULL COMMENT '1. Feminino ; 2. Masculino .',
  `ranking` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `nome`, `sexo`, `ranking`) VALUES
(1, 'admin', 'admin', 'Administrador Padrao', 2, 0),
(6, 'donga', 'donga', 'Donga', 0, 151);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receitas_despesas`
--
ALTER TABLE `receitas_despesas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receitas_despesas`
--
ALTER TABLE `receitas_despesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Chave primaria .', AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Chave primaria .', AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
