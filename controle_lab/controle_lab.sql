-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jul-2015 às 02:36
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `controle_lab`
--
CREATE DATABASE IF NOT EXISTS `controle_lab` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `controle_lab`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('08dc7307721190abe34df7908cfed883', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.134 Safari/537.36', 1437064211, 'a:4:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:4:"nome";s:25:"IVAN CABRAL BARRETO FILHO";s:6:"logado";b:1;}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcurso`
--

CREATE TABLE IF NOT EXISTS `tblcurso` (
  `cursoid` int(11) NOT NULL AUTO_INCREMENT,
  `cursodesc` varchar(50) NOT NULL,
  PRIMARY KEY (`cursoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `tblcurso`
--

INSERT INTO `tblcurso` (`cursoid`, `cursodesc`) VALUES
(1, 'ADMINISTRAÇÃO'),
(2, 'ARQUITETURA E URBANISMO'),
(3, 'CIÊNCIAS CONTÁBEIS'),
(4, 'CIÊNCIA DA COMPUTAÇÃO'),
(5, 'CST - GESTÃO COMERCIAL'),
(6, 'CST - GESTÃO FINANCEIRA'),
(7, 'CST - GESTÃO DE RH'),
(8, 'CST - LOGÍSTICA'),
(9, 'CST - REDE DE COMPUTADORES'),
(10, 'DIREITO'),
(11, 'EDUCAÇÃO FÍSICA - BACHARELADO'),
(12, 'EDUCAÇÃO FÍSICA - LICENCIATURA'),
(13, 'ENGENHARIA AMBIENTAL'),
(14, 'ENGENHARIA CIVIL'),
(15, 'ENGENHARIA DE CONTROLE E AUTOMAÇÃO'),
(16, 'ENGENHARIA DE PRODUÇÃO'),
(17, 'ENGENHARIA ELÉTRICA'),
(18, 'ENGENHARIA MECÂNICA'),
(19, 'ENGENHARIA QUÍMICA'),
(20, 'LETRAS'),
(21, 'PEDAGOGIA'),
(22, 'SERVIÇO SOCIAL'),
(23, 'ENFERMAGEM'),
(24, 'FARMÁCIA'),
(25, 'FISIOTERAPIA'),
(26, 'PSICOLOGIA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbldisciplina`
--

CREATE TABLE IF NOT EXISTS `tbldisciplina` (
  `disciplinaid` int(11) NOT NULL AUTO_INCREMENT,
  `disciplinadesc` varchar(100) NOT NULL,
  PRIMARY KEY (`disciplinaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `tbldisciplina`
--

INSERT INTO `tbldisciplina` (`disciplinaid`, `disciplinadesc`) VALUES
(1, 'Engenharia de Software'),
(2, 'Anatomia'),
(3, 'Analise de projetos'),
(4, 'Desenho técnico'),
(5, 'Metodologia Cientifica'),
(6, 'Banco de Dados 1'),
(7, 'Banco de Dados 2'),
(8, 'Calculo I'),
(9, 'Calculo II'),
(10, 'Engenharia de Software II'),
(11, 'Analise de Projetos e Sistemas'),
(12, 'Circuitos Digitais'),
(13, 'Sistemas Operacionais'),
(14, 'Analise de Algoritmos'),
(15, 'Organização de Arquivos'),
(16, 'Programação Orientada a Objetos'),
(17, 'Programação para Web'),
(18, 'Redes de Computadores 1'),
(19, 'Sistemas Multimidia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblfiltroperiodo`
--

CREATE TABLE IF NOT EXISTS `tblfiltroperiodo` (
  `cursoid` int(11) NOT NULL,
  `periodoid` int(11) NOT NULL,
  PRIMARY KEY (`cursoid`),
  KEY `periodoid` (`periodoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblfiltroperiodo`
--

INSERT INTO `tblfiltroperiodo` (`cursoid`, `periodoid`) VALUES
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 5),
(12, 6),
(20, 7),
(1, 8),
(3, 8),
(4, 8),
(11, 8),
(21, 8),
(22, 8),
(2, 10),
(10, 10),
(13, 10),
(14, 10),
(15, 10),
(16, 10),
(17, 10),
(18, 10),
(19, 10),
(23, 10),
(24, 10),
(25, 10),
(26, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblgrade`
--

CREATE TABLE IF NOT EXISTS `tblgrade` (
  `cursoid` int(11) NOT NULL,
  `disciplinaid` int(11) NOT NULL,
  UNIQUE KEY `cursoid` (`cursoid`,`disciplinaid`),
  KEY `disciplinaid` (`disciplinaid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblgrade`
--

INSERT INTO `tblgrade` (`cursoid`, `disciplinaid`) VALUES
(9, 5),
(4, 6),
(4, 7),
(4, 8),
(9, 8),
(4, 9),
(9, 9),
(4, 10),
(4, 11),
(4, 12),
(9, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17),
(4, 18),
(9, 18),
(4, 19),
(9, 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbllaboratorio`
--

CREATE TABLE IF NOT EXISTS `tbllaboratorio` (
  `labid` int(11) NOT NULL AUTO_INCREMENT,
  `tipolabid` int(11) NOT NULL,
  `labnome` varchar(50) NOT NULL,
  `capacidade` int(11) DEFAULT NULL,
  `unidadeid` int(11) NOT NULL,
  PRIMARY KEY (`labid`),
  KEY `tipolabid` (`tipolabid`,`unidadeid`),
  KEY `capacidade` (`capacidade`),
  KEY `unidadeid` (`unidadeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `tbllaboratorio`
--

INSERT INTO `tbllaboratorio` (`labid`, `tipolabid`, `labnome`, `capacidade`, `unidadeid`) VALUES
(1, 2, 'LABORATORIO DE FÍSICA I', 30, 1),
(2, 2, 'LABORATÓRIO DE FÍSICA II', 25, 1),
(3, 3, 'Laboratorio de Quimica', NULL, 1),
(4, 4, 'Laboratorio de Circuitos Elétricos', NULL, 2),
(5, 5, 'Laboratorio de Eletrônica', NULL, 1),
(6, 6, 'Laboratorio de Materiais de Construçao', NULL, 2),
(7, 7, 'Analises Clinicas', NULL, 2),
(8, 8, 'Bioquimica', NULL, 1),
(9, 9, 'Bromatologia', NULL, 2),
(10, 10, 'Condicionamento Operante', NULL, 2),
(11, 11, 'Controle de Qualidade Biologico', NULL, 1),
(12, 12, 'Fisiologia', NULL, 2),
(13, 13, 'Microscopia', NULL, 2),
(14, 14, 'Praticas de Enfermagem', NULL, 2),
(15, 15, 'Primeiros Socorros', NULL, 2),
(16, 16, 'Semiologia', NULL, 1),
(17, 17, 'Anatomia', NULL, 1),
(18, 18, 'Farmacotecnica', NULL, 2),
(19, 19, 'Informatica', NULL, 1),
(20, 19, 'Laboratorio  de Informatica', NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblmaterial`
--

CREATE TABLE IF NOT EXISTS `tblmaterial` (
  `materialid` int(11) NOT NULL AUTO_INCREMENT,
  `materialnome` varchar(200) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `labid` int(11) NOT NULL,
  `tipolabid` int(11) NOT NULL,
  `unidadeid` int(11) NOT NULL,
  PRIMARY KEY (`materialid`),
  KEY `tipolabid` (`tipolabid`),
  KEY `unidadeid` (`unidadeid`),
  KEY `labid` (`labid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Extraindo dados da tabela `tblmaterial`
--

INSERT INTO `tblmaterial` (`materialid`, `materialnome`, `quantidade`, `labid`, `tipolabid`, `unidadeid`) VALUES
(3, 'Aparelho de ar condicionado Carrie', 1, 1, 2, 1),
(4, 'Armário para equipamentos e materiais', 7, 1, 2, 1),
(5, 'Balança de Torção - IASKARA - EQ090', 6, 1, 2, 1),
(6, 'Bancadas com tampa de granito', 6, 1, 2, 1),
(7, 'Bancos de madeira 73 cm', 30, 1, 2, 1),
(8, 'Cadeira da mesa do técnico', 1, 1, 2, 1),
(9, 'Cadeira da mesa do professor', 1, 1, 2, 1),
(10, 'Calculadora T5 - 89 Titanium', 1, 1, 2, 1),
(11, 'Colchão de ar linear - CIDEPE - EQ001-16', 2, 1, 2, 1),
(12, 'Computador', 1, 1, 2, 1),
(13, 'Conjunto Matzenbacher para módulo de Young - EQ 200', 6, 1, 2, 1),
(14, 'Cronômetros digitais', 12, 1, 2, 1),
(15, 'Ebulidor de aluminio', 7, 1, 2, 1),
(16, 'Fita métrica de 10m', 1, 1, 2, 1),
(17, 'Fonte de alimentação digital - NADAL - CC -EQ030', 15, 1, 2, 1),
(18, 'Maleta com Hardness Tester TH170', 2, 1, 2, 1),
(19, 'Medidores Lab. Pro Vernier', 2, 1, 2, 1),
(20, 'Mesa do professor', 1, 1, 2, 1),
(21, 'Mesa do técnico de laboratório', 1, 1, 2, 1),
(22, 'Multímetro IDEL MD 5770', 2, 1, 2, 1),
(23, 'Multímetro Minipa ET 2042 c', 8, 1, 2, 1),
(24, 'Óculos de proteção', 63, 1, 2, 1),
(25, 'Painel de forças NDF - III - EQ032', 12, 1, 2, 1),
(26, 'Paquímetro Universal de Aço 250mm - DIGIMESS', 11, 1, 2, 1),
(27, 'Plano inclinado KERSTING II - EQ 001', 12, 1, 2, 1),
(28, 'Protetor auricular', 66, 1, 2, 1),
(29, 'Quadro branco', 1, 1, 2, 1),
(30, 'Régua de 50 cm de metal ADECK', 2, 1, 2, 1),
(31, 'Régua de 50 cm de plástico', 7, 1, 2, 1),
(32, 'Régua de 60 cm de metal MARBERG', 2, 1, 2, 1),
(33, 'Sensores de força DUAL-RANGE', 2, 1, 2, 1),
(34, 'Termômetros à álcool - 10°C a 110°C', 9, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblperiodo`
--

CREATE TABLE IF NOT EXISTS `tblperiodo` (
  `periodoid` int(11) NOT NULL AUTO_INCREMENT,
  `periododesc` varchar(20) NOT NULL,
  PRIMARY KEY (`periodoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `tblperiodo`
--

INSERT INTO `tblperiodo` (`periodoid`, `periododesc`) VALUES
(1, '1º período '),
(2, '2º período '),
(3, '3º período '),
(4, '4º período '),
(5, '5º período '),
(6, '6º período '),
(7, '7º período '),
(8, '8º período '),
(9, '9º período '),
(10, '10º período ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblreserva`
--

CREATE TABLE IF NOT EXISTS `tblreserva` (
  `reservaid` int(11) NOT NULL AUTO_INCREMENT,
  `usuarioid` int(11) NOT NULL,
  `cursoid` int(11) NOT NULL,
  `disciplinaid` int(11) NOT NULL,
  `periodoid` int(11) NOT NULL,
  `turnoid` int(11) NOT NULL,
  `labid` int(11) NOT NULL,
  `unidadeid` int(11) NOT NULL,
  `descricao` longtext NOT NULL,
  `data_reserva` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data_aula` date NOT NULL,
  PRIMARY KEY (`reservaid`),
  KEY `usuarioid` (`usuarioid`,`cursoid`,`periodoid`,`turnoid`,`labid`),
  KEY `instituicaoid` (`unidadeid`),
  KEY `disciplinaid` (`disciplinaid`),
  KEY `turnoid` (`turnoid`),
  KEY `cursoid` (`cursoid`),
  KEY `periodoid` (`periodoid`),
  KEY `labid` (`labid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tblreserva`
--

INSERT INTO `tblreserva` (`reservaid`, `usuarioid`, `cursoid`, `disciplinaid`, `periodoid`, `turnoid`, `labid`, `unidadeid`, `descricao`, `data_reserva`, `data_aula`) VALUES
(9, 1, 16, 16, 9, 1, 16, 1, 'hjvbnvbnj', '2015-07-16 16:15:22', '2015-07-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbltipolab`
--

CREATE TABLE IF NOT EXISTS `tbltipolab` (
  `tipolabid` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`tipolabid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `tbltipolab`
--

INSERT INTO `tbltipolab` (`tipolabid`, `descricao`) VALUES
(2, 'FÍSICA'),
(3, 'QUÍMICA'),
(4, 'CIRCUITOS ELÉTRICOS'),
(5, 'ELETRÔNICA'),
(6, 'MATERIAIS DE CONSTRUÇÃO'),
(7, 'ANÁLISES CLÍNICAS'),
(8, 'BIOQUIMICA'),
(9, 'BROMATOLOGIA'),
(10, 'CONDICIONAMENTO OPERANTE'),
(11, 'CONTROLE DE QUALIDADE BIOLÓGICO'),
(12, 'FISIOLOGIA'),
(13, 'MICROSCOPIA'),
(14, 'PRÁTICAS DE ENFERMAGEM'),
(15, 'PRIMEIROS SOCORROS'),
(16, 'SEMIOLOGIA'),
(17, 'ANATOMIA'),
(18, 'FARMACOTÉCNICA'),
(19, 'INFORMÁTICA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbltipousuario`
--

CREATE TABLE IF NOT EXISTS `tbltipousuario` (
  `tipoid` int(11) NOT NULL AUTO_INCREMENT,
  `tipodesc` varchar(50) NOT NULL,
  PRIMARY KEY (`tipoid`),
  KEY `descricao` (`tipodesc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tbltipousuario`
--

INSERT INTO `tbltipousuario` (`tipoid`, `tipodesc`) VALUES
(1, 'Administrador do Sistema'),
(4, 'Coordenador de Curso'),
(2, 'Coordenador de Laboratório'),
(5, 'Professor'),
(3, 'Técnico de Laboratório');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblturno`
--

CREATE TABLE IF NOT EXISTS `tblturno` (
  `turnoid` int(11) NOT NULL AUTO_INCREMENT,
  `turnodesc` varchar(50) NOT NULL,
  PRIMARY KEY (`turnoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tblturno`
--

INSERT INTO `tblturno` (`turnoid`, `turnodesc`) VALUES
(1, 'Matutino'),
(2, 'Vespertino'),
(3, 'Noturno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblunidade`
--

CREATE TABLE IF NOT EXISTS `tblunidade` (
  `unidadeid` int(11) NOT NULL AUTO_INCREMENT,
  `unidadedesc` varchar(50) NOT NULL,
  `localizacaodesc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`unidadeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tblunidade`
--

INSERT INTO `tblunidade` (`unidadeid`, `unidadedesc`, `localizacaodesc`) VALUES
(1, 'FACULDADE PITÁGORAS - TURU', NULL),
(2, 'FACULDADE PITÁGORAS - COHAMA', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblusuario`
--

CREATE TABLE IF NOT EXISTS `tblusuario` (
  `usuarioid` int(11) NOT NULL AUTO_INCREMENT,
  `tipoid` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `email` varchar(75) NOT NULL,
  `contato` varchar(12) NOT NULL,
  PRIMARY KEY (`usuarioid`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `tipoid` (`tipoid`,`nome`,`matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tblusuario`
--

INSERT INTO `tblusuario` (`usuarioid`, `tipoid`, `nome`, `cpf`, `senha`, `matricula`, `email`, `contato`) VALUES
(1, 1, 'IVAN CABRAL BARRETO FILHO', '05145832311', '123456', '99999', 'IVAN@GMAIL.COM', '982566392'),
(2, 2, 'ANDERSON BEZERRA', '05098765433', '123123', '888888', 'ANDERSON@GMAIL.COM', '988223703'),
(3, 3, 'MARCOS JULIANO REGO', '09876532111', '987987', '777777', 'MARCOS@GMAIL.COM', '988776653'),
(4, 4, 'ALISSON JORGEM ALMEIDA', '02735732311', '789789', '222222', 'ALISSON@GMAIL.COM', ''),
(5, 3, 'ROBERTO PIMENTEL', '23002576544', 'semsenha', '1111111', 'roberto@gmail.com', '988645321'),
(6, 1, 'RODRIGO ALVES MESQUITA', '05065871345', '123', '321', 'rodrigo@gmail.com', '988645321');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tblfiltroperiodo`
--
ALTER TABLE `tblfiltroperiodo`
  ADD CONSTRAINT `tblfiltroperiodo_ibfk_1` FOREIGN KEY (`periodoid`) REFERENCES `tblperiodo` (`periodoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblfiltroperiodo_ibfk_2` FOREIGN KEY (`cursoid`) REFERENCES `tblcurso` (`cursoid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tblgrade`
--
ALTER TABLE `tblgrade`
  ADD CONSTRAINT `tblgrade_ibfk_1` FOREIGN KEY (`cursoid`) REFERENCES `tblcurso` (`cursoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblgrade_ibfk_2` FOREIGN KEY (`disciplinaid`) REFERENCES `tbldisciplina` (`disciplinaid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbllaboratorio`
--
ALTER TABLE `tbllaboratorio`
  ADD CONSTRAINT `tbllaboratorio_ibfk_1` FOREIGN KEY (`tipolabid`) REFERENCES `tbltipolab` (`tipolabid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbllaboratorio_ibfk_2` FOREIGN KEY (`unidadeid`) REFERENCES `tblunidade` (`unidadeid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tblmaterial`
--
ALTER TABLE `tblmaterial`
  ADD CONSTRAINT `tblmaterial_ibfk_1` FOREIGN KEY (`tipolabid`) REFERENCES `tbltipolab` (`tipolabid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblmaterial_ibfk_2` FOREIGN KEY (`unidadeid`) REFERENCES `tblunidade` (`unidadeid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblmaterial_ibfk_3` FOREIGN KEY (`labid`) REFERENCES `tbllaboratorio` (`labid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tblreserva`
--
ALTER TABLE `tblreserva`
  ADD CONSTRAINT `tblreserva_ibfk_1` FOREIGN KEY (`turnoid`) REFERENCES `tblturno` (`turnoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblreserva_ibfk_3` FOREIGN KEY (`usuarioid`) REFERENCES `tblusuario` (`usuarioid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblreserva_ibfk_4` FOREIGN KEY (`cursoid`) REFERENCES `tblcurso` (`cursoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblreserva_ibfk_5` FOREIGN KEY (`disciplinaid`) REFERENCES `tbldisciplina` (`disciplinaid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblreserva_ibfk_6` FOREIGN KEY (`periodoid`) REFERENCES `tblperiodo` (`periodoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblreserva_ibfk_7` FOREIGN KEY (`unidadeid`) REFERENCES `tblunidade` (`unidadeid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblreserva_ibfk_8` FOREIGN KEY (`labid`) REFERENCES `tbllaboratorio` (`labid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD CONSTRAINT `tblusuario_ibfk_1` FOREIGN KEY (`tipoid`) REFERENCES `tbltipousuario` (`tipoid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
