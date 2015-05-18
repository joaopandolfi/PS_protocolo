-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 16-Maio-2015 às 19:44
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `protocolcontrol`
--
CREATE DATABASE IF NOT EXISTS `protocolcontrol` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `protocolcontrol`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'RH'),
(2, 'CI'),
(3, 'CNH'),
(4, 'Almoxerifado'),
(6, 'CCA'),
(7, 'Professores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `process`
--

CREATE TABLE IF NOT EXISTS `process` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `detail` varchar(10000) NOT NULL,
  `owner` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `protocol` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `process`
--

INSERT INTO `process` (`id`, `type`, `detail`, `owner`, `department`, `create_date`, `protocol`) VALUES
(1, 'ProgressÃ£o', 'processo de progressão de professor', 13, 1, '2015-05-15', '20151887121'),
(2, 'AcusaÃ§Ã£o', 'Processo contra professor', 2, 2, '0000-00-00', '20151827226'),
(3, 'AcusaÃ§Ã£o', 'Processo contra professor', 1, 1, '0000-00-00', '60351887121'),
(4, 'AcusaÃ§Ã£o', 'Processo contra professor', 3, 2, '0000-00-00', '20151881221'),
(5, 'AcusaÃ§Ã£o', 'Processo contra professor', 5, 3, '0000-00-00', '44151887121'),
(6, 'licitaÃ§Ã£o', 'comprar de equipamentos', 3, 6, '2015-05-22', '20151887122');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `id_dept` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `type`, `id_dept`) VALUES
(1, 'leo', '123', 'Administrador', 1),
(2, 'Joao', '123', 'Administrador', 1),
(3, 'paulo', '123', 'Vizualizador', 2),
(4, 'Yago', '123', 'Vizualizador', 3),
(8, 'gabi', '123', 'Chefe de Setor', 2),
(11, 'joana', '123', 'Chefe de Setor', 4),
(12, 'maria', '123', 'Vizualizador', 1),
(13, 'ernani', '123', 'Chefe de Setor', 1),
(15, 'carlos', '123', 'Vizualizador', 1),
(16, 'marinaldo', '123', 'Chefe de Setor', 1),
(19, 'paulo', '123', 'Vizualizador', 7),
(21, 'Yasmin', '123', 'Vizualizador', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
