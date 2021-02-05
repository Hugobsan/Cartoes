-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jan-2021 às 02:13
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cartoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartoes`
--

CREATE TABLE `cartoes` (
  `id` int(11) NOT NULL,
  `numero_cartao` int(20) NOT NULL,
  `cod_sec` int(4) NOT NULL,
  `validade` varchar(6) NOT NULL,
  `nome` varchar(110) NOT NULL,
  `cpf` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cartoes`
--
ALTER TABLE `cartoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cartoes`
--
ALTER TABLE `cartoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
