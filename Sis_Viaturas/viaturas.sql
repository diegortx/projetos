-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 13/02/2020 às 13:18
-- Versão do servidor: 5.5.62-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `viaturas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `antiguidade`
--

CREATE TABLE IF NOT EXISTS `antiguidade` (
  `cod_posto_grad` int(3) NOT NULL,
  `nome_posto` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`cod_posto_grad`),
  UNIQUE KEY `cod_posto_grad` (`cod_posto_grad`),
  UNIQUE KEY `nome_posto` (`nome_posto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `antiguidade`
--

INSERT INTO `antiguidade` (`cod_posto_grad`, `nome_posto`) VALUES
(8, '1 Sgt'),
(9, '2 Sgt'),
(10, '3 Sgt'),
(6, 'Asp'),
(4, 'Cap'),
(11, 'Cb'),
(1, 'Cel'),
(3, 'Maj'),
(12, 'Sd'),
(7, 'ST'),
(2, 'TC'),
(5, 'Ten');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_posto_grad` int(3) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nivel_acesso` int(3) NOT NULL,
  `cpf_mil` varchar(12) NOT NULL,
  `categoria` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `cod_posto_grad`, `nome`, `senha`, `nivel_acesso`, `cpf_mil`, `categoria`) VALUES
(1, 10, 'DIEGO', '108', 1, '10831111674', 'AD'),
(3, 12, 'DIAS', '1234', 1, '09794712623', 'B'),
(4, 12, 'HENRIQUE', 'Bruno1995*', 1, '12330532644', 'AB'),
(5, 4, 'PETERNELLA', '077', 1, '07744207823', 'AE'),
(7, 12, 'DOS REIS', '123456', 1, '13522748689', 'B'),
(8, 11, 'FEIBER', '123456', 1, '05755843600', 'AE'),
(9, 12, 'REIS', '123456', 1, '12858252688', 'C'),
(10, 12, 'NICOLAS', '123456', 1, '13510158695', 'D'),
(11, 12, 'JOÃO CARLOS', '123456', 1, '11544451601', 'D'),
(12, 12, 'COSTA', '123456', 1, '02090654600', 'AB'),
(13, 12, 'SILONI', '123456', 1, '11716742609', 'B'),
(14, 12, 'H GONÇALVES', '123456', 1, '13901785604', 'AB'),
(15, 11, 'CANNIELLO', '123456', 1, '12730337601', 'AD'),
(16, 10, 'DHIONE', '123456', 1, '09611864612', 'B'),
(17, 12, 'GOUVEIA', '123456', 1, '13032784646', 'D'),
(18, 12, 'RICHARDSON', '123456', 1, '12041752688', 'E'),
(19, 12, 'PORFIRIO', '123456', 1, '12788790643', 'B'),
(20, 8, 'MONTEIRO', '002', 1, '00279554605', 'AD'),
(21, 12, 'NICOLAS', '135', 1, '13510158695', 'E'),
(22, 11, 'FEIBER', '057', 1, '05755843600', 'AE'),
(23, 12, 'RIUDYERI', '123456', 1, '12925494676', 'B'),
(24, 11, 'REIS', '123456', 1, '09413704619', 'AB'),
(25, 9, 'CIRINO', '123456', 1, '87467488653', 'B'),
(26, 12, 'PAULINO', '1233052644', 1, '02138443620', 'AB'),
(27, 9, 'CORREA', '12330532644', 1, '07455602618', 'B'),
(28, 4, 'SAKAI', '123456', 1, '07828301880', 'AE'),
(29, 11, 'SANTOS', '123456', 1, '11963378610', 'D');

-- --------------------------------------------------------

--
-- Estrutura para tabela `viatura`
--

CREATE TABLE IF NOT EXISTS `viatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `viatura_nome` varchar(45) NOT NULL,
  `viatura_eb` varchar(15) NOT NULL,
  `viatura_placa` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Fazendo dump de dados para tabela `viatura`
--

INSERT INTO `viatura` (`id`, `viatura_nome`, `viatura_eb`, `viatura_placa`) VALUES
(1, 'CONSTELATION', '3412018757', ''),
(2, 'CONSTELATION', '3412017472', ''),
(3, 'CONSTELATION', '3412013936', ''),
(4, 'CONSTELATION', '3412018290', ''),
(5, 'CONSTELATION', '3412015863', ''),
(6, 'CONSTELATION', '3412017419', ''),
(7, 'CONSTELATION', '3412019079', ''),
(8, 'CONSTELATION', '3412019333', ''),
(9, 'CONSTELATION', '3412017938', ''),
(10, 'CONSTELATION', '3412018175', ''),
(11, 'CONSTELATION', '3412019523', ''),
(12, 'CONSTELATION', '3412018023', ''),
(13, 'ATEGO', '3412058111', ''),
(14, 'ATEGO', '3412057216', ''),
(15, 'ATEGO', '3412291771', ''),
(16, 'ATEGO', '3412234128', ''),
(17, 'ATEGO', '3412057418', ''),
(18, 'ATEGO', '3412056971', ''),
(19, 'ATEGO', '3412057053', ''),
(20, 'ATEGO', '3412234142', ''),
(21, 'ATEGO', '3412234130', ''),
(22, 'CONTAINER', '3413270409', ''),
(23, 'CIST. COMB.', '3413174614', ''),
(24, 'PIPA D AGUA', '3413295525', ''),
(25, 'WV', '3412278550', ''),
(26, 'CAÇAMBA', '3413241395', ''),
(27, 'MBB 1418', '3412080327', ''),
(28, 'MARRUÁ', '3412225741', ''),
(29, 'MARRUÁ', '3412225739', ''),
(30, 'MARRUÁ', '3412136825', ''),
(31, 'MARRUÁ', '3412225727', ''),
(32, 'MARRUÁ', '3412225715', ''),
(33, 'LAND ROVER CMT', '3412092849', ''),
(34, 'LAND ROVER LONA', '3412033904', ''),
(35, 'LAND ROVER AMB.', '3413163580', ''),
(36, 'IVECO', '3472195775', 'OQP-7315'),
(37, 'ONIBUS', '3471225888', 'GMF-7730'),
(38, 'TOYOTA AMB.', '3473065759', 'GMF-2083'),
(39, 'AMB RENAULT', '3473067279', 'GMF-8083'),
(40, 'VAN DUCATO', '3471053173', 'GMF-6154'),
(41, 'RANGER', '3471005641', 'GMF-6972'),
(42, 'FRONTIER', '3472509669', 'GMF-8436'),
(43, 'SANGYOUNG  ', '3472084777', 'GMF-7875'),
(44, 'FIESTA', '3471145487', 'GMF-6502'),
(45, 'DOBLO', '3471203109', 'GMF-7809'),
(46, 'MARCH', '3471503013', 'GMF-8353');

-- --------------------------------------------------------

--
-- Estrutura para tabela `viaturasregistradas`
--

CREATE TABLE IF NOT EXISTS `viaturasregistradas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `situacao` int(3) NOT NULL,
  `motorista` varchar(36) NOT NULL,
  `chViatura` varchar(36) NOT NULL,
  `data_retorno` date NOT NULL,
  `data_saida` date NOT NULL,
  `ebViatura` varchar(30) NOT NULL,
  `obsViatura` text NOT NULL,
  `abertoPor` varchar(25) NOT NULL,
  `h_saida` time NOT NULL,
  `h_chegada` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Fazendo dump de dados para tabela `viaturasregistradas`
--

INSERT INTO `viaturasregistradas` (`id`, `situacao`, `motorista`, `chViatura`, `data_retorno`, `data_saida`, `ebViatura`, `obsViatura`, `abertoPor`, `h_saida`, `h_chegada`) VALUES
(1, 0, '18', 'SGT RODRIGUES', '2019-12-10', '2019-12-10', '45', 'VIVEIRO SANTA RITA BUSCAR MUDA.', '12330532644', '00:00:00', '00:00:00'),
(2, 0, '7', 'SGT KENNEDI', '2019-12-10', '2019-12-10', '46', 'AB VISUAL, LEMBRANÃ‡AS DOS ALUNOS DO CFS.', '12330532644', '00:00:00', '00:00:00'),
(4, 0, '23', 'CB REIS', '2019-12-11', '2019-12-11', '45', 'CENTRAL GRÃFICA.', '12330532644', '09:00:00', '11:00:00'),
(9, 0, '25', 'CAP SAKAI', '2019-12-12', '2019-12-12', '42', 'ESPIRITO SANTO DO DOURADO/ ANDRADAS.', '12330532644', '08:00:00', '17:00:00'),
(11, 0, '11', 'SGT KENNEDI', '2019-12-12', '2019-12-12', '46', 'AB VISUAL.', '12330532644', '09:00:00', '11:20:00'),
(12, 0, '11', 'SGT J MARCOS', '2019-12-23', '2019-12-23', '45', 'CORREIOS.', '12330532644', '15:40:00', '16:00:00'),
(13, 0, '4', 'CB SANTOS', '2019-12-23', '2019-12-23', '46', 'COMPRA DE PEÃ‡A.', '12330532644', '15:40:00', '16:30:00'),
(14, 0, '11', 'CB BUENO', '2019-12-24', '2019-12-24', '30', 'LOTE PRIMAVERA.', '12330532644', '10:30:00', '11:40:00'),
(15, 0, '29', 'SGT TAMARA', '2019-12-27', '2019-12-26', '46', 'BELO HORIZONTE.', '12330532644', '07:30:00', '17:00:00'),
(16, 0, '10', 'CB SANTOS', '2020-01-20', '2020-01-20', '46', 'MM COMERCIO DE PEÃ‡AS.', '12330532644', '15:45:00', '16:30:00'),
(17, 0, '7', 'CB MARQUES', '2020-01-20', '2020-01-20', '27', 'VIVEIRO SANTA RITA.', '12330532644', '14:15:00', '15:30:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
