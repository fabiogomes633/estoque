
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
  `data_modific` date DEFAULT NULL,
  `inseriu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `desc_produto` varchar(30) NOT NULL,
  `qtde` int(11) DEFAULT NULL,
  `data_chegada` date DEFAULT NULL,
  `fornecedor` varchar(30) DEFAULT NULL,
  `tel_forn` varchar(30) DEFAULT NULL,
  `codigo_produto` varchar(50) DEFAULT NULL,	
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

CREATE TABLE IF NOT EXISTS `saida` (
  `nome_user` varchar(30) NOT NULL,
  `desc_produto` varchar(30) NOT NULL,
  `data_modific` date DEFAULT NULL,
  `retirou` int(11) DEFAULT NULL,
  `num_req` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL DEFAULT '',
  `senha` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
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
`endereco` VARCHAR( 200 ) NOT NULL ,
`cidade` VARCHAR( 20 ) NOT NULL ,
`estado` VARCHAR( 2 ) NOT NULL ,
`bairro` VARCHAR( 20 ) NOT NULL ,
`pais` VARCHAR( 20 ) NOT NULL ,
`id_cliente` INT( 200 ) NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`id_cliente`),
UNIQUE (`id_cliente` ) );