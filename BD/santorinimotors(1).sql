-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Maio-2021 às 02:45
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
-- Estrutura da tabela `fichas`
--

DROP TABLE IF EXISTS `fichas`;
CREATE TABLE IF NOT EXISTS `fichas` (
  `codFicha` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `veiculo` varchar(200) NOT NULL,
  `mensagem` longtext NOT NULL,
  `dataCadastro` date NOT NULL,
  PRIMARY KEY (`codFicha`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fichas`
--

INSERT INTO `fichas` (`codFicha`, `nome`, `email`, `cpf`, `telefone`, `cep`, `estado`, `cidade`, `bairro`, `endereco`, `veiculo`, `mensagem`, `dataCadastro`) VALUES
(1, 'Heytor Toito de Carvalho', 'thetrooper_1983@hotmail.com', '23752372850', '11979697602', '08574150', 'SÃ£o Paulo', 'itaquaquecetuba', 'jardim aracarÃ©', 'rua cambarÃ¡ orli,1200', 'honda civic si 2010', 'dfsggsgsgd', '2021-05-13'),
(2, 'Heytor Toito de Carvalho', 'thetrooper_1983@hotmail.com', '23752372850', '11979697602', '08574150', 'SÃ£o Paulo', 'itaquaquecetuba', 'jardim aracarÃ©', 'rua cambarÃ¡ orli,1200', 'honda civic si 2010', 'dfsggsgsgd', '2021-05-13');

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
  `precoMinimo` int(11) NOT NULL,
  `Descricao` longtext NOT NULL,
  `Itens` longtext NOT NULL,
  `Foto` varchar(500) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  PRIMARY KEY (`codVeiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`codVeiculo`, `Marca`, `Modelo`, `Ano`, `Quilometragem`, `Potencia`, `Transmissao`, `Combustivel`, `Assentos`, `Portas`, `Cor`, `precoMinimo`, `Descricao`, `Itens`, `Foto`, `dataCadastro`) VALUES
(7, 'Honda', 'Civic SI', '2010', '2.000km', '100 CV', 'Manual - 6 Marchas', 'Flex', 5, 4, 'Branco', 0, 'fdf', '', '210513110540.jpg', '2021-05-13 20:24:40'),
(9, 'Mazda', 'RX-7', '1999', '2.000km', '150 CV', 'Manual - 6 Marchas', 'Flex', 5, 4, 'Branco', 8000, 'vsssggsgafgaf', 'gafgagafg', '210514120512.jpg', '2021-05-13 21:10:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
