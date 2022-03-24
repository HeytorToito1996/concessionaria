-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Maio-2021 às 00:43
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `santorinimotors`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`userID`, `nome`, `usuario`, `senha`) VALUES
(1, 'Heytor Toito de Carvalho', 'Heytor', 'e1aaef260db7f48558149ce9b0c2c3d8'),
(2, 'Heytor Toito de Carvalho', 'Heytor', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Heytor Toito de Carvalho', 'Heytor', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Porquinho', 'garganta', 'ec6a6536ca304edf844d1d248a4f08dc'),
(5, 'Heytor Toito de Carvalho', 'Heytor', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Heytor Toito de Carvalho', 'Heytor', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Heytor Toito de Carvalho', 'Heytor', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Heytor Toito de Carvalho', 'Heytor', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Heytor Toito de Carvalho', 'Heytor', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, '', '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
CREATE TABLE IF NOT EXISTS `veiculos` (
  `codVeiculo` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(60) NOT NULL,
  `Modelo` varchar(60) NOT NULL,
  `Ano` varchar(4) NOT NULL,
  `Quilometragem` varchar(30) NOT NULL,
  `Potencia` varchar(30) NOT NULL,
  `Transmissao` varchar(30) NOT NULL,
  `Combustivel` varchar(30) NOT NULL,
  `Assentos` int(11) NOT NULL,
  `Portas` int(11) NOT NULL,
  `Cor` varchar(50) NOT NULL,
  `Foto` varchar(500) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  PRIMARY KEY (`codVeiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`codVeiculo`, `Marca`, `Modelo`, `Ano`, `Quilometragem`, `Potencia`, `Transmissao`, `Combustivel`, `Assentos`, `Portas`, `Cor`, `Foto`, `dataCadastro`) VALUES
(7, 'Honda', 'Civic SI', '2010', '2.000km', '100 CV', 'Manual - 6 Marchas', 'Flex', 5, 4, 'Branco', '210513120527.jpg', '2021-05-12 21:42:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
