-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Nov-2022 às 13:48
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `project_hd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_cliente`
--

CREATE TABLE `tab_cliente` (
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cpf` char(14) NOT NULL,
  `fone` char(14) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `cep` char(9) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tab_cliente`
--

INSERT INTO `tab_cliente` (`nome`, `email`, `senha`, `cpf`, `fone`, `endereco`, `cidade`, `uf`, `cep`, `bairro`) VALUES
('Halisson Aparecido Lima', 'halissonaparecidolima2005@gmail.com', 'halisson123', '40475017845', '11949552848', 'Rua Skenaro Nakandakare ', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_entrega`
--

CREATE TABLE `tab_entrega` (
  `numpedido` int(11) NOT NULL,
  `cpffunc` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_itens`
--

CREATE TABLE `tab_itens` (
  `numitem` int(11) NOT NULL,
  `numpedido` int(11) NOT NULL,
  `codprod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_pedido`
--

CREATE TABLE `tab_pedido` (
  `numped` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `vlrtotal` decimal(7,2) NOT NULL,
  `frete` decimal(6,2) DEFAULT NULL,
  `cpfcli` char(14) NOT NULL,
  `cpffunc` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_pizza`
--

CREATE TABLE `tab_pizza` (
  `codprod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `ingrediente` varchar(100) NOT NULL,
  `valor` decimal(7,2) NOT NULL,
  `wallpaper_url` varchar(80) NOT NULL,
  `pizza_image_url` varchar(80) NOT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tab_pizza`
--

INSERT INTO `tab_pizza` (`codprod`, `nome`, `descricao`, `ingrediente`, `valor`, `wallpaper_url`) VALUES
(1, 'PIZZA GREGA', 'Uma pizza que veio dos próprios deuses do olimpo.', 'Berinjela, azeitona, molho de tomate, queijo mussarela e pimentão.', '33.00', 'https://i.pinimg.com/originals/6b/3e/63/6b3e63ebd7267e3e749743e5f185cf62.jpg', 'https://i.pinimg.com/originals/64/81/74/64817428f9b4098bd11a2aff090f771c.jpg'),
(2, 'PIZZA ITALIANA', 'Uma pizza vinda diretamente do colisseu em roma.', 'Queijo mussarela, azeitona, cebola roxa, tomate, pimentão e carne seca.', '30.00', 'https://i.pinimg.com/originals/c5/d2/55/c5d255126b8aed07ffcd07c56c7ddf77.jpg'),
(3, 'PIZZA SUIÇA', 'Uma pizza feita com ingredientes dos alpes suiços.', 'Queijo suiço, cogumelo champignon, calabresa, azeitona, manjericão e alecrim.', '27.00', 'https://i.pinimg.com/originals/00/13/d7/0013d70cce33fc89b131c05e6fb94876.jpg'),
(4, 'PIZZA DE PEPPERONI', 'Uma pizza feita para aquelas pessoas que amam pepperoni.', 'Queijo mussarela, cogumelo champgnon, tomate, e azeitona.', '31.00','https://i.pinimg.com/originals/6a/00/f8/6a00f8471b61ff8f1b4fc5e9a5be0f0b.jpg'),
(5, 'PIZZA DE FRANGO', 'Uma pizza para amantes de frango.', 'Queijo mussarela, frango em fatias, tomate cereja, azeitona, cebola roxa e manjericão.', '26.00','https://i.pinimg.com/originals/51/27/84/512784fb12e09cf6954da477c31d0919.jpg'),
(6, 'PIZZA CANADENSE', 'Uma pizza saudável para quem quer manter a dieta.', 'Queijo mussarela, bacon, azeitona, tomate, pimentão, cebola roxa e calabresa.', '35.00', 'https://i.pinimg.com/originals/e4/5f/b4/e45fb48c53053beb395282a3dc8c9f68.jpg'),
(7, 'PIZZA MARGHERITA', 'A mais tradicional pizza do mundo e uma das mais gostosas.', 'Queijo mussarela, manjericão e tomate.', '29.00','https://i.pinimg.com/originals/b6/ea/4a/b6ea4a2f40dbbacc2765505fb034f737.jpg'),
(8, 'PIZZA BELGA', 'Uma bellísima pizza vinda diretamente da Bélgica.', 'queijo mussarela, bacon, azeitona, tomate, cebola, camarão e manjericão.', '32.00','https://i.pinimg.com/originals/36/da/f0/36daf0c17504659bd65ce76fe0548fd6.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_register`
--

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
('40475017845', '11949552848', 'Halisson Aparecido Lima', 'Rua Skenaro Nakandakare ', 'Jardim Zaira', 'Mauá', 'SP', '09361080', 'halissonaparecidolim', '123456'),
('40875015835', '11949552848', 'Halisson', 'betaville', 'Jardim Camila', 'sÃ£o paulo', 'SP', '09361080', 'halissonaparecido@gm', '12345678');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tab_cliente`
--
ALTER TABLE `tab_cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `tab_entrega`
--
ALTER TABLE `tab_entrega`
  ADD PRIMARY KEY (`numpedido`);

--
-- Índices para tabela `tab_itens`
--
ALTER TABLE `tab_itens`
  ADD PRIMARY KEY (`numitem`);

--
-- Índices para tabela `tab_pedido`
--
ALTER TABLE `tab_pedido`
  ADD PRIMARY KEY (`numped`);

--
-- Índices para tabela `tab_pizza`
--
ALTER TABLE `tab_pizza`
  ADD PRIMARY KEY (`codprod`);

--
-- Índices para tabela `tab_register`
--
ALTER TABLE `tab_register`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_pedido`
--
ALTER TABLE `tab_pedido`
  MODIFY `numped` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tab_pizza`
--
ALTER TABLE `tab_pizza`
  MODIFY `codprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
