-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Maio-2021 às 23:22
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estagio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filhoses`
--

CREATE TABLE `filhoses` (
  `Nome` text NOT NULL,
  `Telefone` text NOT NULL,
  `Email` text NOT NULL,
  `Produtos` text NOT NULL,
  `Data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filhoses`
--

INSERT INTO `filhoses` (`Nome`, `Telefone`, `Email`, `Produtos`, `Data`) VALUES
('Andre', '9512346125', 'andre@gmail.com', 'Filhoses 500g', '19/06/2021'),
('aaa', '22232', 'erer', 'erere', 'fef'),
('ola', '99999', 'ola@gmail.com', 'filhoses 1 kg', '22/07/2021');

-- --------------------------------------------------------

--
-- Estrutura da tabela `piri`
--

CREATE TABLE `piri` (
  `Nome` text NOT NULL,
  `Telefone` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `piri`
--

INSERT INTO `piri` (`Nome`, `Telefone`, `Email`, `Mensagem`) VALUES
('Andre', 94556, 'andre@gmail.com', 'Olaaaaa\r\n'),
('ola', 845723, 'ola@gmail.com', 'wertyu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
