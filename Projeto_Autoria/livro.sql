-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2023 às 15:03
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--
CREATE DATABASE  `livro`;

use  `livro`;

CREATE TABLE `autor` (
  `Cod_Autor` varchar(50) NOT NULL,
  `NomeAutor` varchar(50) NOT NULL,
  `Sobrenome` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nascimento` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`Cod_Autor`, `NomeAutor`, `Sobrenome`, `Email`, `Nascimento`) VALUES
('10', 'agatha ', 'christie', 'rob_ca@gmail.com', '10/2/1916'),
('10', 'Raibnow ', 'Rowell', 'rob_ca@gmail.com', '10/2/1916'),
('50', 'Roberto', 'Carlos', 'rob_ca@gmail.com', '10/2/1916'),
('60', 'John', 'green', 'rob_ca@gmail.com', '10/2/1916'),
('70', 'Joao', 'Verde', 'rob_ca@gmail.com', '10/2/1916'),
('80', 'Josh', 'Malerman', 'rob_ca@gmail.com', '10/2/1916'),
('90', 'Jenna', 'Evans', 'rob_ca@gmail.com', '10/2/1916');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autoria`
--

CREATE TABLE `autoria` (
  `id_autoria` varchar(50) NOT NULL,
  `Codigo_Autor` varchar(50) NOT NULL,
  `Cod_livro` varchar(50) NOT NULL,
  `DataLancamento` varchar(40) NOT NULL,
  `Editora` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autoria`
--

INSERT INTO `autoria` (`id_autoria`, `Codigo_Autor`, `Cod_livro`, `DataLancamento`, `Editora`) VALUES
('0', '453', '20', '10/3/2020', 'seguinte'),
('1', '777', '40', '10/03/2023', 'seguinte'),
('2', '555', '50', '10/3/2020', 'globolivros'),
('3', '9090', '50', '10/03/2024', 'seguinte'),
('4', '8080', '30', '10/3/2020', 'globolivros'),
('5', '6060', '30', '10/03/2024', 'seguinte'),
('6', '3030', '40', '10/3/2020', 'globolivros'),
('7', '000000000', '40', '10/3/2020', 'seguinte');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `Cod_livro` varchar(10) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `ISBN` varchar(40) NOT NULL,
  `Idioma` varchar(50) NOT NULL,
  `QtdePag` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`Cod_livro`, `Titulo`, `Categoria`, `ISBN`, `Idioma`, `QtdePag`) VALUES
('20', 'Eleanor e Park', 'Romance', '03209+5', 'Inglês', '365'),
('10', 'A Seleção', 'Romance', '4084708', 'Português', '220'),
('30', 'A Elite', 'Romance', '499494949', 'Português', '365'),
('40', 'A Escolha', 'Romance', '323232', 'Português', '25222'),
('50', 'e não sobrou nenhum', 'suspense', '00000000000055', 'Francês', '226');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Login` varchar(5) NOT NULL,
  `Senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Login`, `Senha`) VALUES
('a', 123),
('b', 456),
('Gi', 2213);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autoria`
--
ALTER TABLE `autoria`
  ADD PRIMARY KEY (`Codigo_Autor`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cod_livro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
