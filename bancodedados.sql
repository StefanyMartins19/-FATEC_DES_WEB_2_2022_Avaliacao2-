-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Out-2022 às 03:39
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancodedados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao_filmes`
--

CREATE TABLE `locacao_filmes` (
  `filme` varchar(255) NOT NULL,
  `tempo_locacao` varchar(15) DEFAULT NULL,
  `devolucao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `locacao_filmes`
--

INSERT INTO `locacao_filmes` (`filme`, `tempo_locacao`, `devolucao`) VALUES
('carrie', 'um dia', NULL),
('panico', 'dois dias ', NULL),
('panico2', 'dois dias ', NULL),
('premonicao', 'tres dias', NULL),
('transformers ', 'cinco dias ', '02/11/2022');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `locacao_filmes`
--
ALTER TABLE `locacao_filmes`
  ADD PRIMARY KEY (`filme`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
