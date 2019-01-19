-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny7
-- http://www.phpmyadmin.net


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `estoque`
--
CREATE DATABASE `estoque` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `estoque`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

CREATE TABLE IF NOT EXISTS `entrada` (
  `nome_user` varchar(30) NOT NULL,
  `desc_produto` varchar(30) NOT NULL,
  `data_modific` date default NULL,
  `inseriu` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entrada`
--

INSERT INTO `entrada` (`nome_user`, `desc_produto`, `data_modific`, `inseriu`) VALUES
('Matheus', 'Gas', '2011-05-02', 20),
('Matheus', 'Gas', '2011-05-02', 20),
('Matheus', 'Pilha', '2011-05-02', 20),
('Matheus', 'Pilha', '2011-05-02', 4),
('Matheus', 'Pilha', '2011-05-02', 2),
('Matheus', 'WebCam', '2011-05-02', 3),
('Matheus', 'WebCam', '2011-05-02', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `desc_produto` varchar(30) NOT NULL,
  `qtde` int(11) default NULL,
  `data_chegada` date default NULL,
  `fornecedor` varchar(30) default NULL,
  `tel_forn` varchar(30) default NULL,
  `id_produto` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`desc_produto`, `qtde`, `data_chegada`, `fornecedor`, `tel_forn`, `id_produto`) VALUES
('Parafuso', 410, '2011-05-02', 'Casa da Construcao', '3254534', 1),
('Gas', 20, '2011-05-02', 'Tel gas', '2131321', 2),
('Pilha', 2, '2011-05-02', 'Teste', '1231321', 3),
('WebCam', 4, '2011-05-02', 'Digital Computer', '2132132', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

CREATE TABLE IF NOT EXISTS `saida` (
  `nome_user` varchar(30) NOT NULL,
  `desc_produto` varchar(30) NOT NULL,
  `data_modific` date default NULL,
  `retirou` int(11) default NULL,
  `num_req` varchar(30) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `saida`
--

INSERT INTO `saida` (`nome_user`, `desc_produto`, `data_modific`, `retirou`, `num_req`) VALUES
('Samya', 'WebCam', '2011-05-02', 1, '32154');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL default '',
  `senha` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL auto_increment,
  `sexo` varchar(30) default NULL,
  PRIMARY KEY  (`id_user`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `telefone`, `login`, `senha`, `id_user`, `sexo`) VALUES
('admin', '', 'admin', 'admin', 1, '');


-- Estrutura da tablea 'cliente' --
CREATE TABLE IF NOT EXISTS `cliente` (
`nome` VARCHAR( 200 ) NOT NULL ,
`cpf` INT ( 15 ) NOT NULL ,
`email` VARCHAR( 60 ) NOT NULL ,
`sexo` VARCHAR( 10 ) NOT NULL ,
`ddd` INT( 3 ) ,
`telefone` INT( 9 ) ,
`endereço` VARCHAR( 200 ) NOT NULL ,
`cidade` VARCHAR( 20 ) NOT NULL ,
`estado` VARCHAR( 2 ) NOT NULL ,
`bairro` VARCHAR( 20 ) NOT NULL ,
`país` VARCHAR( 20 ) NOT NULL ,
`id` INT( 200 ) NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`id`),
UNIQUE (`id` ) );