-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Out-2018 às 06:52
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faca_acontecer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `id_conta` int(11) NOT NULL,
  `user_nome` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`id_conta`, `user_nome`, `user_email`, `senha`) VALUES
(1, 'maycon vitor do nascimento cos', 'maycon.vcosta@gmail.com', '255302d0387015f6d0db194e73a1a45d'),
(2, 'luis miguel costa', 'luis.miguel@gmail.com', '14d065073d9ae95b60a95e135afb016c'),
(3, 'Projeto Teste', 'teste@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'test8', 'teste8@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'teste8', 'teste8@gmail.com', 'aa1bf4646de67fd9086cf6c79007026c');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id_projetos` int(11) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nome_projeto` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `img_projeto` longblob NOT NULL,
  `resumo_projetos` varchar(100) NOT NULL,
  `descricao_projeto` varchar(300) NOT NULL,
  `autor_projeto` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `contato_projeto` varchar(50) DEFAULT NULL,
  `tag` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `email` varchar(50) NOT NULL DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id_projetos`, `data_created`, `nome_projeto`, `img_projeto`, `resumo_projetos`, `descricao_projeto`, `autor_projeto`, `contato_projeto`, `tag`, `email`) VALUES
(29, '2018-10-06 03:31:47', 'Projeto 1', '', 'Este é o projeto 1', 'O projeto 1 faz isso', 'Leo', NULL, 'Testes de Softwere', 'testes@gmail.com'),
(30, '2018-10-06 03:36:02', 'Projeto 2', '', 'Este é o projeto 2', 'O projeto 2 faz isso', 'Leo', NULL, 'Economia', 'economia@gmail.com'),
(31, '2018-10-06 03:43:18', 'Projeto 3', '', 'Este é o projeto 3', 'O projeto 3 faz isso', 'Leo', NULL, 'Sustentabilidade', 'verde@gmail.com'),
(32, '2018-10-06 03:43:22', 'Projeto 4', '', 'Este é o projeto 4', 'O projeto 4 faz isso', 'Leo', NULL, 'Saude', 'sus@gmail.com'),
(33, '2018-10-06 03:43:24', 'Projeto 5', '', 'Este é o projeto 5', 'O projeto 5 faz isso', 'Leo', NULL, 'Economia', 'amarelo@gmail.com'),
(34, '2018-10-06 03:43:25', 'Projeto 6', '', 'Este é o projeto 6', 'O projeto 6 faz isso', 'Leo', NULL, 'Gestão', 'azul@gmail.com'),
(35, '2018-10-06 03:43:26', 'Projeto 7', '', 'Este é o projeto 7', 'O projeto 7 faz isso', 'Leo', NULL, 'Tecnologia', 'tec@gmail.com'),
(36, '2018-10-06 03:43:28', 'Projeto 8', '', 'Este é o projeto 8', 'O projeto 8 faz isso', 'Leo', NULL, 'Tecnologia', 'tecs@gmail.com'),
(37, '2018-10-06 03:43:30', 'Projeto 9', '', 'Este é o projeto 9', 'O projeto 9 faz isso', 'Leo', NULL, 'Politica', 'gov@gmail.com'),
(38, '2018-10-06 03:43:32', 'Projeto 10', '', 'Este é o projeto 10', 'O projeto 10 faz isso', 'Leo', NULL, 'Saude', 'stajoana@gmail.com'),
(39, '2018-10-06 03:43:35', 'Projeto 11', '', 'Este é o projeto 11', 'O projeto 11 faz isso', 'Leo', NULL, 'Gastronomia', 'comer@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `usuario`, `senha`, `id_usuario`) VALUES
('Leonardo Silveira', 'leonardo.allan@hotmail.com', 'leoteste', '25d55ad283aa400af464c76d713c07ad', 1),
('Milton Vieira', 'milton@gmail.com', 'milto', '25d55ad283aa400af464c76d713c07ad', 3),
('Nicolau', 'nicolau@gmail.com', 'nicolau', '25f9e794323b453885f5181f1b624d0b', 4),
('João Borba', 'teste@gmail.com', 'porchat', '25d55ad283aa400af464c76d713c07ad', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id_conta`);

--
-- Indexes for table `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id_projetos`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conta`
--
ALTER TABLE `conta`
  MODIFY `id_conta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id_projetos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

CREATE TABLE if not exists tags(
tag varchar(25) not null
);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
