-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: 04-Abr-2022 às 15:31
-- Versão do servidor: 5.7.23
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--    
-- Database: `SysBa`
--

-- --------------------------------------------------------

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `idAluno` int (11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `matricula` int (6) NOT NULL,
  `curso` varchar(3) NOT NULL,
  `ano` int (4) NOT NULL,
  `semestre` int (1) NOT NULL,
  `analisado` varchar(1),
  PRIMARY KEY (`idAluno`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `requisicao`;
CREATE TABLE IF NOT EXISTS `requisicao` (
  `id` int (11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11),
  `aprovacao` varchar(1) NOT NULL,
  `disciplina` int(5),
  `tipoSolicitacao` int(1),
  `curso` varchar(3),
  CONSTRAINT fk_alunoADM FOREIGN KEY (id_aluno) references aluno (idALuno),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `matricula`;
CREATE TABLE IF NOT EXISTS `matricula` (
  `idMatricula` int (11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `numero` int(5) NOT NULL,
  PRIMARY KEY (`idMatricula`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


INSERT INTO `matricula` (`nome`,`numero`) VALUES
('Introdução a Engenharia de controle e automação', 10001),
('Metodologia científica', 30001),
('Física geral I', 30002),
('Física experimental I', 30003),
('Cálculo I', 30004),
('Geometria analítica', 30005),
('Informática para engenharia', 30006),
('Desenho técnico', 30007);


