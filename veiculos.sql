-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Maio-2021 às 04:37
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `santorinimotors`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

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
  `dataCadastro` datetime NOT NULL,
  PRIMARY KEY (`codVeiculo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`codVeiculo`, `Marca`, `Modelo`, `Ano`, `Quilometragem`, `Potencia`, `Transmissao`, `Combustivel`, `Assentos`, `Portas`, `Cor`, `dataCadastro`) VALUES
(1, 'Honda', 'Civic SI', '2010', '2.000km', '150 CV', 'Manual - 5 Marchas', 'Flex', 5, 4, 'Branco', '2021-05-10 23:32:41'),
(2, 'Honda', 'Civic SI', '2010', '2.000km', '150 CV', 'Manual - 5 Marchas', 'Flex', 5, 4, 'Branco', '2021-05-10 23:32:46'),
(3, 'Honda', 'Civic SI', '2010', '2.000km', '150 CV', 'Manual - 5 Marchas', 'Flex', 5, 4, 'Branco', '2021-05-10 23:33:31'),
(4, 'Honda', 'Civic SI', '2010', '2.000km', '150 CV', 'Manual - 5 Marchas', 'Flex', 5, 4, 'Branco', '2021-05-10 23:35:19'),
(5, 'Honda', 'Civic SI', '2010', '2.000km', '150 CV', 'Manual - 5 Marchas', 'Flex', 5, 4, 'Branco', '2021-05-10 23:35:47'),
(6, 'Honda', 'Civic SI', '2010', '2.000km', '150 CV', 'Manual - 5 Marchas', 'Flex', 5, 4, 'Branco', '2021-05-10 23:36:11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
