-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2021 às 00:29
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `coisasemprestadas`
--
CREATE DATABASE IF NOT EXISTS `coisasemprestadas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `coisasemprestadas`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

DROP TABLE IF EXISTS `emprestimos`;
CREATE TABLE `emprestimos` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `destinatario_id` int(11) NOT NULL,
  `dtemp` date NOT NULL,
  `dtdev` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `item_id`, `destinatario_id`, `dtemp`, `dtdev`) VALUES
(32, 2, 8, '2021-11-23', '2021-12-23'),
(33, 31, 7, '2021-11-27', '2021-12-27'),
(34, 25, 2, '2021-11-25', '2021-12-11'),
(35, 33, 4, '2021-11-20', '2021-12-20'),
(36, 32, 6, '2021-11-20', '2021-12-23'),
(37, 28, 5, '2021-12-20', '2022-01-20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE `itens` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `nome`, `descricao`) VALUES
(2, 'Bicicleta', 'Caloi Aro 24'),
(25, 'Livro', 'Infantil'),
(28, 'Cadeira de Praia', 'Reclinável'),
(31, 'Barraca', 'Para trilhas'),
(32, 'Furadeira', 'Phillips'),
(33, 'Aparador de grama', 'Elétrico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `contato` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `contato`, `email`, `senha`, `ativo`) VALUES
(2, 'Ana', 'Souza', '(41) 888855555', 'ana@hotmail.com', '123456', ''),
(4, 'Diego', 'Moura', '(41) 999999999', 'diego@hotmail.com', '1234', 'A'),
(5, 'Luiza', 'Fernandes', '(41) 888555999', 'luiza@hotmail.com', '123', 'A'),
(6, 'José', 'Oliveira', '(41) 999555552', 'jose@hotmail.com', '1234', 'A'),
(7, 'Rafael', 'Guimarães', '(41) 999888888', 'rafa@hotmail.com', '123456', 'A'),
(8, 'Camila', 'Nolasco', '(41) 999999999', 'camila@hotmail.com', '1234', 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
