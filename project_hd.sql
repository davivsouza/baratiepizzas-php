-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Out-2022 às 16:25
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_hd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_register`
--
CREATE DATABASE project_hd;
USE project_hd;
CREATE TABLE `tab_register` (
  `cpf` char(14) NOT NULL,
  `fone` char(14) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `cep` char(9) DEFAULT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_register`
--

INSERT INTO `tab_register` (`cpf`, `fone`, `nome`, `endereco`, `bairro`, `cidade`, `uf`, `cep`, `login`, `senha`) VALUES
('40875015835', '11949552848', 'Halisson', 'betaville', 'Jardim Camila', 'sÃ£o paulo', 'SP', '09361080', 'halissonaparecido@gm', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_register`
--
ALTER TABLE `tab_register`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
