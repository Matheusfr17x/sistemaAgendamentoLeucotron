-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Maio-2023 às 15:16
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_sistemaagenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bdlogin`
--

CREATE TABLE `bdlogin` (
  `idLogin` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `senha` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `bdlogin`
--

INSERT INTO `bdlogin` (`idLogin`, `email`, `senha`) VALUES
(1, 'matheusanred@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reunioes`
--

CREATE TABLE `reunioes` (
  `idreuniao` int(11) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `titulo` text NOT NULL,
  `datas` date NOT NULL,
  `horasInicio` time NOT NULL,
  `duracao` time NOT NULL,
  `localizacao` text NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `reunioes`
--

INSERT INTO `reunioes` (`idreuniao`, `autor`, `titulo`, `datas`, `horasInicio`, `duracao`, `localizacao`, `descricao`) VALUES
(2, 'matheus faria ribeiro', 'teste', '2023-04-28', '17:06:00', '00:00:00', '342', ''),
(3, 'matheus faria ribeiro', 'teste', '2023-04-28', '17:06:00', '00:00:00', '342', ''),
(19, 'matheus', 'teste', '1211-12-12', '12:12:00', '12:43:00', 'machado', 'MG'),
(20, '', 'teste', '0000-00-00', '00:00:00', '12:12:00', '12', '12'),
(21, 'jose', 'teste', '0000-00-00', '00:00:00', '12:12:00', '12', '12'),
(22, '12', '12', '0000-00-00', '12:12:00', '12:12:00', '12', '12'),
(23, '5', '5', '5555-05-05', '05:55:00', '05:05:00', '5', '5');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bdlogin`
--
ALTER TABLE `bdlogin`
  ADD PRIMARY KEY (`idLogin`);

--
-- Índices para tabela `reunioes`
--
ALTER TABLE `reunioes`
  ADD PRIMARY KEY (`idreuniao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bdlogin`
--
ALTER TABLE `bdlogin`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `reunioes`
--
ALTER TABLE `reunioes`
  MODIFY `idreuniao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
