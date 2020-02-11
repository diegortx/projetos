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
-- Banco de dados: `viagens`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `antiguidade`
--

CREATE TABLE IF NOT EXISTS `antiguidade` (
  `cod_posto_grad` int(3) DEFAULT NULL,
  `nome_posto` varchar(15) DEFAULT NULL,
  UNIQUE KEY `cod_posto_grad` (`cod_posto_grad`),
  UNIQUE KEY `nome_posto` (`nome_posto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `antiguidade`
--

INSERT INTO `antiguidade` (`cod_posto_grad`, `nome_posto`) VALUES
(1, 'Cel'),
(2, 'TC'),
(3, 'Maj'),
(4, 'Cap'),
(5, 'Ten'),
(6, 'Asp'),
(7, 'ST'),
(8, '1 Sgt'),
(9, '2 Sgt'),
(10, '3 Sgt'),
(11, 'Cb'),
(12, 'Sd');

-- --------------------------------------------------------

--
-- Estrutura para tabela `baterias`
--

CREATE TABLE IF NOT EXISTS `baterias` (
  `cod_baterias` varchar(2) NOT NULL,
  `baterias` varchar(35) NOT NULL,
  UNIQUE KEY `cod_baterias` (`cod_baterias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `baterias`
--

INSERT INTO `baterias` (`cod_baterias`, `baterias`) VALUES
('1', 'EM'),
('2', 'CFGS'),
('3', 'BC'),
('4', '1BO'),
('5', '2BO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registradas`
--

CREATE TABLE IF NOT EXISTS `registradas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bateria` int(3) NOT NULL,
  `posto` int(5) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `telefone` text NOT NULL,
  `data_Saida` date NOT NULL,
  `data_Retorno` date NOT NULL,
  `cidade_Destino` varchar(35) NOT NULL,
  `inserido` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=259 ;

--
-- Fazendo dump de dados para tabela `registradas`
--

INSERT INTO `registradas` (`id`, `bateria`, `posto`, `nome`, `telefone`, `data_Saida`, `data_Retorno`, `cidade_Destino`, `inserido`) VALUES
(50, 3, 8, 'PEREIRA', '3598882-7112', '2019-11-08', '2019-11-11', 'TRÃŠS CORAÃ‡Ã•ES - MG', '94803897620'),
(52, 3, 10, 'DIEGO', '35991518204', '2019-11-08', '2019-11-10', 'ANDRADAS - MG', '07744207823'),
(51, 1, 4, 'PETERNELLA', '35991342258', '2019-11-08', '2019-11-10', 'INDAIATUBA - SP', '07744207823'),
(53, 3, 9, 'BUENO', '3599252-8484', '2007-11-19', '2008-11-19', 'CAMANDUCAIA-MG', '81778376649'),
(54, 3, 9, 'ADMIR', '3599201-1850', '2019-11-08', '2019-11-10', 'SÃƒO JOÃƒO DEL REI - MG', '05354288630'),
(55, 1, 5, 'JUAREZ', '3599119-4530', '2019-11-08', '2019-11-11', 'ITAJUBÃ - MG', '35735490206'),
(56, 3, 8, 'NEVES', '35998676879', '2019-11-09', '2019-11-10', 'CAMPINAS-SP', '06304080689'),
(57, 5, 4, 'DAVID BAKSYS', '3598438-5325', '2019-11-09', '2019-11-10', 'CAMPINAS - SP', '03050026197'),
(58, 3, 8, 'DAUTO', '35-99117-9584', '2009-11-19', '2010-11-19', 'CAMPINAS/PAULÃNEA-SP', '04500456686'),
(59, 3, 10, 'COUTO', '35988511745', '2019-11-08', '2019-11-10', 'TRÃŠS CORAÃ‡Ã•ES - MG', '08305965694'),
(60, 3, 10, 'DIEGO', '35991518204', '2019-11-08', '2019-11-10', 'ANDRADAS - MG', '10831111674'),
(61, 3, 10, 'THAYS LIMA', '3599344511', '2019-11-08', '2019-11-10', 'RIO DE JANEIRO-RJ', '11018979700'),
(62, 3, 5, 'PAULO', '35991257786', '2019-08-11', '2019-11-11', 'BARBACENA-MG', '10649568664'),
(63, 1, 6, 'TEIXEIRA', '2499301-6953', '2019-11-08', '2019-11-10', 'RIO DE JANEIRO - RJ', '14400890783'),
(64, 3, 9, 'MARCOS VICENTE', '32988150209', '2019-11-09', '2019-11-11', 'ITAJUBA', '09718148647'),
(65, 3, 9, 'BUENO', '35992528484', '2008-11-19', '2011-11-19', 'CAMANDUCAIA MG', '81778376649'),
(66, 3, 8, 'FABIO', '3598823-0101373322-3600', '2019-11-14', '2019-11-17', 'FORMIGA - MG', '03534437608'),
(67, 1, 5, 'JUAREZ', '3599119-4530', '2019-11-14', '2019-11-18', 'ITAJUBÃ/MG', '35735490206'),
(68, 1, 4, 'PETERNELLA', '3599134-2258', '2019-11-15', '2019-11-17', 'LINDÃ“IA - SP / INDAIATUBA - SP', '07744207823'),
(69, 3, 8, 'PEREIRA', '3598882-7112', '2019-11-13', '2019-11-14', 'TRÃŠS CORAÃ‡Ã•ES - MG', '94803897620'),
(70, 1, 6, 'SANDYA CURTY', '3298414-3050', '2019-11-14', '2019-11-17', 'ALÃ‰M PARAÃBA ', '08625194621'),
(71, 1, 6, 'SANDYA CURTY', '3298414-3050', '2019-11-14', '2019-11-17', 'ALÃ‰M PARAÃBA - MG', '08625194621'),
(72, 3, 10, 'TAMARA', '21971050393', '2014-11-19', '2017-11-19', 'NOVA IGUAÃ‡U- RJ', '14224161788'),
(73, 3, 9, 'ADMIR', '3599201-1850', '2019-11-14', '2019-11-17', 'SÃƒO JOÃƒO DEL REI - MG', '05354288630'),
(74, 3, 5, 'PAULO', '35991257786', '2019-11-14', '2019-11-17', 'BARBACENA - MG', '10649568664'),
(75, 3, 10, 'JULIANO', '35988460360', '2019-11-16', '2019-11-18', 'SÃƒO BENTO ABADE', '10912829605'),
(76, 3, 9, 'MARCOS VICENTE', '32988150209', '2019-11-14', '2019-11-18', 'RIBEIRÃƒO PRETO - SP', '09718148647'),
(77, 3, 10, 'MARIANA', '35991499032', '2019-11-14', '2019-11-17', 'JUIZ DE FORA', '10190610654'),
(78, 3, 7, 'COSTA', '35984494051', '2019-11-15', '2019-11-17', 'PEQUERI-MG', '94015686691'),
(79, 3, 9, 'BUENO', '3599252-8484', '2014-11-19', '2018-11-19', 'CAMANDUCIA-MG', '81778376649'),
(80, 3, 8, 'DIAS JÃšNIOR', '3599206-36753599963-2398', '2019-11-16', '2019-11-17', 'VARGINHA - MG', '02896156666'),
(81, 3, 10, 'JULIANO', '35988460360', '2019-11-19', '2019-11-21', 'SÃƒO BENTO ABADE - MG', '10912829605'),
(82, 1, 5, 'JUAREZ', '3599119-4530', '2019-11-19', '2019-11-21', 'ITAJUBÃ/MG', '35735490206'),
(83, 3, 9, 'ADMIR', '3599201-1850', '2022-11-19', '2024-11-19', 'SÃƒO JOÃƒO DEL REI - MG', '05354288630'),
(84, 1, 4, 'PETERNELLA', '3599134-2258', '2019-11-22', '2019-11-24', 'INDAIATUBA - SP', '07744207823'),
(85, 3, 10, 'MOLITERNO', '3298848-4713', '2019-11-18', '2019-11-24', 'JUIZ DE FORA', '05516989698'),
(86, 1, 2, 'HUDDSON', '992066172', '2020-11-19', '2020-11-19', 'TRÃŠS CORAÃ‡Ã•ES - MG', '16861854808'),
(87, 4, 6, 'TESTE', '344564448', '2019-11-21', '2019-11-23', 'ANDRADAS -MG', '10831111674'),
(88, 3, 10, 'ELINES', '3599259-4313', '2019-11-22', '2019-11-24', 'VALENÃ‡A- RJ', '04367684610'),
(89, 1, 5, 'JUAREZ', '3599119-4530', '2019-11-22', '2019-11-25', 'ITAJUBÃ/MG', '35735490206'),
(90, 3, 10, 'DIEGO', '35991518204', '2019-11-22', '2019-11-24', 'ANDRADAS -MG', '10831111674'),
(91, 3, 9, 'ADMIR', '3599201-1850', '2019-11-22', '2019-11-25', 'SÃƒO JOÃƒO DEL REI - MG', '05354288630'),
(92, 3, 10, 'DEBYE', '3599965-9633', '2019-11-23', '2019-11-24', 'TURVOLÃ‚NDIA-MG', '01538240696'),
(93, 3, 10, 'JULIANO', '35988460360', '2019-11-22', '2019-11-24', 'SÃƒO BENTO ABADE/MG', '10912829605'),
(94, 3, 10, 'COUTO', '3598851-1745', '2019-11-23', '2019-11-25', 'TRÃŠS CORAÃ‡Ã•ES - MG', '08305965694'),
(95, 3, 10, 'ELINES', '3599259-4313', '2019-11-22', '2019-11-24', 'VALENÃ‡A- RJ', '04367684610'),
(96, 1, 5, 'CONTI', '3199339-3672', '2019-11-22', '2019-11-25', 'BELO HORIZONTE', '07523677657'),
(97, 3, 5, 'PAULO', '35991257786', '2019-11-22', '2019-11-24', 'BARBACENA - MG', '10649568664'),
(98, 3, 4, 'SOUSA', '31992912248', '2019-11-22', '2019-11-24', 'RESENDE - RJ', '10649568664'),
(99, 3, 9, 'MARCOS VICENTE', '32988150209', '2019-11-22', '2019-11-24', 'CAMPOS JORDÃƒO - MG', '09718148647'),
(100, 1, 5, 'KELVIN', '35988516521', '2019-11-23', '2019-11-24', 'UBÃ - MG', '38765555821'),
(101, 1, 5, 'JONES', '3899988-2656', '2019-11-21', '2019-11-24', 'CONSELHEIRO LAFAIETE - MG', '05819775643'),
(102, 3, 10, 'PETERSON', '3599210-5474', '2019-11-23', '2019-11-24', 'TRÃŠS CORAÃ‡Ã•ES ', '03615558650'),
(103, 5, 10, 'ELIELTON', '35999770241', '2019-11-24', '2019-11-24', 'SÃƒO JOSÃ‰ DOS CAMPOS-SP', '09569105640'),
(104, 4, 10, 'FROES', '3599746-1909', '2019-11-27', '2019-11-28', 'INCONFIDENTES-MG', '11661829678'),
(105, 1, 5, 'JUAREZ', '3599119-4530', '2019-11-27', '2019-11-28', 'ITAJUBÃ/MG (CONSULTA MÃ‰DICA)', '35735490206'),
(106, 1, 4, 'PETERNELLA', '3599134-2258', '2019-11-30', '2019-12-01', 'LINDÃ“IA - SP', '07744207823'),
(107, 3, 10, 'JULIANO', '35988460360', '2019-11-30', '2019-12-02', 'SÃƒO BENTO ABADE - MG', '10912829605'),
(108, 3, 9, 'FABIO HENRIQUE', '3598821-0527', '2019-11-29', '2019-12-01', 'UBATUBA - SP', '86034065615'),
(109, 3, 10, 'DIEGO', '35991518204', '2019-11-29', '2019-12-01', 'ANDRADAS - MG', '10831111674'),
(110, 3, 9, 'ANDRE', '35998778194', '2019-11-29', '2019-12-01', 'DUQUE DE CAXIAS - RJ', '12573619702'),
(111, 3, 12, 'DIAS', '35991756283', '2019-11-30', '2019-12-01', 'CAMPANHA - MG', '10831111674'),
(112, 3, 10, 'COUTO', '35988511745', '2019-11-30', '2019-12-02', 'TRÃŠS CORAÃ‡Ã•ES/MG', '08305965694'),
(113, 3, 9, 'MARCOS VICENTE', '32988150209', '2019-11-29', '2019-12-01', 'SÃƒO JOÃƒO DEL REI - MG', '09718148647'),
(114, 3, 9, 'BUENO', '35992528484', '2019-11-29', '2019-12-01', 'CAMANDUCAIA MA', '81778376649'),
(115, 1, 5, 'JUAREZ', '3599119-4530', '2019-11-29', '2019-12-02', 'ITAJUBÃ - MG', '35735490206'),
(116, 5, 9, 'SANTIAGO', '3599940-5882', '2019-12-01', '2019-12-01', 'PEDRALVA-MG', '05861230676'),
(117, 3, 10, 'PETERSON', '3599210-5474', '2019-11-30', '2019-12-01', 'TRÃŠS CORAÃ‡Ã•ES MG', '03615558650'),
(118, 3, 10, 'JULIANO', '35988460360', '2019-12-07', '2019-12-09', 'SÃƒO BENTO ABADE - MG', '10912829605'),
(119, 3, 9, 'MARCOS VICENTE', '32988150209', '2019-12-05', '2019-12-20', 'CHAPADA DOS GUIMARAáº¼S - MT', '09718148647'),
(120, 3, 8, 'ADMIR', '3599201-1850', '2019-12-06', '2019-12-08', 'SÃƒO JOÃƒO DEL REI - MG', '05354288630'),
(121, 3, 7, 'EDUARDO', '35988099021', '2019-12-07', '2019-12-08', 'MONTE VERDE - MG', '92859364668'),
(122, 1, 5, 'KELVIN', '35988516521', '2019-12-07', '2019-12-10', 'SÃƒO PAULO - SP.', '38765555821'),
(123, 5, 10, 'ELIELTON', '35999770241', '2019-12-07', '2019-12-08', 'CAREAÃ‡U-MG', '09569105640'),
(124, 4, 5, 'BEZERRA', '35991408262', '2019-12-06', '2019-12-08', 'TRÃŠS CORAÃ‡Ã•E-MG', '12459687699'),
(125, 1, 5, 'CONTI', '3199339-3672', '2019-12-06', '2019-12-09', 'BELO HORIZONTE', '07523677657'),
(126, 1, 6, 'SANDYA CURTY', '3298414-3050', '2019-12-06', '2019-12-08', 'JUIZ DE FORA, MG', '08625194621'),
(127, 3, 10, 'MOLITERNO', '32988484713', '2019-12-06', '2019-12-08', 'JUIZ DE FORA-MG', '05516989698'),
(128, 3, 9, 'FABIO HENRIQUE', '35988210527', '2019-12-06', '2019-12-08', 'EXTREMA - MG', '86034065615'),
(129, 5, 5, 'NANDES', '35991601776', '2019-12-06', '2019-12-08', 'JUIZ DE FORA - MG', '07732052684'),
(130, 3, 10, 'DHIONE', '35991391343', '2019-12-07', '2019-12-08', 'SÃƒO BERNARDO DO CAMPO-SP', '09611864612'),
(131, 3, 10, 'DHIONE', '35991391343', '2019-12-08', '2019-12-09', 'POÃ‡OS DE CALDAS-MG', '09611864612'),
(132, 1, 4, 'JUAREZ', '35991194530', '2019-12-06', '2019-12-09', 'ITAJUBÃ', '35735490206'),
(133, 1, 2, 'HUDDSON', '992066172', '2019-12-13', '2019-12-15', 'POÃ‡OS DE CALDAS - MG', '16861854808'),
(134, 3, 10, 'RENATO', '35998964011', '2019-12-05', '2019-12-15', 'MONTEVIDÃ‰U - URU', '11812259654'),
(135, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-10', '2019-12-11', 'ITAJUBÃ - MG', '35735490206'),
(136, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-11', '2019-12-12', 'ITAJUBÃ - MG', '35735490206'),
(137, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-12', '2019-12-13', 'ITAJUBÃ - MG', '35735490206'),
(138, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-13', '2019-12-16', 'ITAJUBÃ - MG', '35735490206'),
(139, 1, 2, 'MÃRCIO NEVES', '35988050847', '2019-12-14', '2019-12-16', 'NITERÃ“I/RJ', '04186388709'),
(140, 3, 8, 'ADMIR', '3599201-1850', '2019-12-12', '2019-12-15', 'SÃƒO JOÃƒO DEL REI - MG', '05354288630'),
(141, 3, 8, 'NEVES', '35998676879', '2019-12-13', '2019-12-15', 'NOVA SERRANA-MG', '06304080689'),
(142, 3, 10, 'MOLITERNO', '32988484713', '2019-12-13', '2019-12-15', 'JUIZ DE FORA-MG', '05516989698'),
(143, 3, 10, 'DIEGO', '35991518204', '2019-12-13', '2020-01-15', 'ANDRADAS - MG', '10831111674'),
(144, 1, 4, 'PETERNELLA', '35-99134-2258', '2019-12-16', '2019-12-16', 'INDAIATUBA - SP', '07744207823'),
(145, 3, 10, 'JULIANO', '35988460360', '2019-12-13', '2019-12-16', 'SÃƒO BENTO ABADE - MG', '10912829605'),
(146, 3, 4, 'SOUSA', '31992912248', '2019-12-13', '2019-12-16', 'BELO HORIZONTE - MG', '07654246650'),
(147, 3, 10, 'DHIONE', '35991391343', '2019-12-13', '2019-12-16', 'PASSOS-MG', '09611864612'),
(148, 0, 0, 'DHIONE', '35991391343', '2019-12-14', '2019-12-15', 'RIBEIRÃƒO PRETO-SP', '09611864612'),
(149, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-17', '2019-12-18', 'ITAJUBÃ - MG', '35735490206'),
(150, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-18', '2019-12-19', 'ITAJUBÃ - MG', '35735490206'),
(151, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-19', '2019-12-20', 'ITAJUBÃ - MG', '35735490206'),
(152, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-20', '2019-12-27', 'ITAJUBÃ - MG', '35735490206'),
(153, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-27', '2019-12-30', 'ITAJUBÃ - MG', '35735490206'),
(154, 3, 10, 'JULIANO', '35988460360', '2019-12-18', '2020-01-20', 'SÃƒO BENTO ABADE - MG', '10912829605'),
(155, 3, 10, 'MARIANA', '35991499042', '2019-12-20', '2019-12-26', 'JUIZ DE FORA', '10190610654'),
(156, 3, 8, 'NEVES', '35998676879', '2019-12-20', '2019-12-22', 'JUIZ DE FORA-MG', '06304080689'),
(157, 1, 5, 'GIOVANI', '1299643-3946', '2019-12-20', '2019-12-26', 'BORDA DA MATA-MG // CLÃUDIO-MG', '83482466653'),
(158, 3, 10, 'BRAGA', '32991274640', '2019-12-20', '2019-12-26', 'NITEROI - RJ', '11752956630'),
(159, 3, 9, 'MARCOS VICENTE', '32988150209', '2019-12-20', '2019-12-27', 'RIBEIRÃƒO PRETO - SP', '09718148647'),
(160, 3, 10, 'PETERSON', '3599210-5474', '2019-12-21', '2019-12-22', 'TRÃŠS CORAÃ‡Ã•ES MG', '03615558650'),
(161, 4, 9, 'HUMBERTO', '35-992041136', '2019-12-20', '2019-12-27', 'JUIZ DE FORA-MG E CARANDAÃ-MG', '01341741605'),
(162, 5, 7, 'BESSA', '35991149047', '2019-12-21', '2019-12-26', 'TRÃŠS CORAÃ‡Ã•ES', '78075521404'),
(163, 0, 4, 'FABIAN', '35988065953', '2019-12-21', '2019-12-26', 'APUCARANA -  PR', '97327522700'),
(164, 3, 5, 'PAULO', '35991257786', '2019-12-20', '2019-12-26', 'BARBACENA - MG', '07654246650'),
(165, 3, 4, 'SOUSA', '31992912248', '2019-12-20', '2019-12-23', 'BELO HORIZONTE - MG', '07654246650'),
(166, 3, 10, 'MICHELLE', '32991340627', '2019-12-20', '2019-12-27', 'JUIZ DE FORA', '06457933610'),
(167, 3, 8, 'FABIO', '3598823-0101373322-3600', '2019-12-20', '2019-12-26', 'FORMIGA - MG', '03534437608'),
(168, 3, 10, 'COUTO', '35988511745', '2019-12-21', '2019-12-26', 'TRÃŠS CORAÃ‡Ã•ES - MG', '08305965694'),
(169, 1, 4, 'PETERNELLA', '35-99134-2258', '2019-12-28', '2019-12-29', 'LINDÃ“IA - SP', '07744207823'),
(170, 3, 8, 'ADMIR', '3599201-1850', '2019-12-27', '2020-01-02', 'SÃƒO JOÃƒO DEL REI - MG', '05354288630'),
(171, 3, 9, 'SCOBAR', '35992648000', '2019-12-24', '2019-12-26', 'SÃƒO LOURENÃ‡O', '09539991650'),
(172, 3, 4, 'SOUSA', '31992912248', '2019-12-26', '2020-01-15', 'MANAUS, PRES FIGUEIREDO - AM / SANT', '07654246650'),
(173, 3, 10, 'DHIONE', '35991391343', '2019-12-27', '2020-01-03', 'PASSOS-MG', '09611864612'),
(174, 3, 10, 'MOLITERNO', '32988484713', '2019-12-27', '2020-01-02', 'JUIZ DE FORA-MG', '05516989698'),
(175, 3, 10, 'COUTO', '3598851-1745', '2019-12-27', '2019-12-29', 'TRÃŠS CORAÃ‡Ã•ES - MG', '08305965694'),
(176, 5, 10, 'GRECO', '35991789140', '2019-12-28', '2019-01-02', 'BUZIOS - RJ', '03508466000'),
(177, 3, 10, 'DEBYE', '3599965-9633', '2019-12-29', '2020-01-02', 'TURVOLÃ‚NDIA-MG / CONGONHAL-MG', '01538240696'),
(178, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-30', '2019-12-31', 'ITAJUBÃ - MG', '35735490206'),
(179, 1, 4, 'JUAREZ', '3599119-4530', '2019-12-31', '2020-01-02', 'ITAJUBÃ - MG', '35735490206'),
(180, 1, 4, 'JUAREZ', '3599119-4530', '2020-01-02', '2020-01-03', 'ITAJUBÃ - MG', '35735490206'),
(181, 1, 4, 'JUAREZ', '3599119-4530', '2020-01-03', '2020-01-06', 'ITAJUBÃ - MG', '35735490206'),
(182, 3, 7, 'EDUARDO', '35988099021', '2019-12-30', '2020-01-15', 'FLORIANÃ“POLIS - SC', '92859364668'),
(183, 3, 7, 'COSTA', '35984494051', '2019-12-31', '2020-01-16', 'PEQUERI-MG E CABO FRIO-RJ', '94015686691'),
(184, 3, 10, 'PETERSON', '3599210-5474', '2020-01-04', '2020-01-05', 'TRÃŠS CORAÃ‡Ã•ES MG', '03615558650'),
(185, 1, 4, 'PETERNELLA', '35-99134-2258', '2020-01-04', '2020-01-05', 'LINDÃ“IA - SP', '07744207823'),
(186, 4, 5, 'BEZERRA', '35991408262', '2020-01-03', '2020-01-06', 'TRÃŠS CORAÃ‡Ã•E-MG', '12459687699'),
(187, 3, 10, 'BRAGA', '32991274640', '2020-01-03', '2020-01-06', 'NITEROI /RJ', '11752956630'),
(188, 3, 8, 'OLIVEIRA LEITE', '35991364999', '2020-01-03', '2020-01-06', 'JUIZ DE FORA - MG', '01459320603'),
(189, 3, 5, 'PAULO', '35991257786', '2020-01-03', '2020-01-05', 'BARBACENA - MG', '10649568664'),
(190, 3, 10, 'DHIONE', '35-991391343', '2020-01-03', '2020-01-06', 'PASSOS-MG', '09611864612'),
(191, 3, 10, 'COUTO', '35988511745', '2020-01-04', '2020-01-06', 'TRÃŠS CORAÃ‡Ã•ES - MG', '08305965694'),
(192, 1, 4, 'JUAREZ', '3599119-4530', '2020-01-06', '2020-01-07', 'ITAJUBÃ - MG', '35735490206'),
(193, 1, 4, 'JUAREZ', '3599119-4530', '2020-01-07', '2020-01-08', 'ITAJUBÃ - MG', '35735490206'),
(194, 1, 4, 'JUAREZ', '3599119-4530', '2020-01-08', '2020-01-09', 'ITAJUBÃ - MG', '35735490206'),
(195, 1, 4, 'JUAREZ', '3599119-4530', '2020-01-09', '2020-01-10', 'ITAJUBÃ - MG', '35735490206'),
(196, 1, 4, 'JUAREZ', '3599119-4530', '2020-01-10', '2020-01-13', 'ITAJUBÃ - MG', '35735490206'),
(197, 3, 8, 'ADMIR', '3599201-1850', '2020-01-10', '2020-01-13', 'SÃƒO JOÃƒO DEL REI - MG', '05354288630'),
(198, 4, 5, 'BEZERRA', '35991408262', '2020-01-10', '2020-01-13', 'TRÃŠS CORAÃ‡Ã•E-MG', '12459687699'),
(199, 3, 8, 'OLIVEIRA LEITE', '35991364999', '2020-01-10', '2020-01-13', 'JUIZ DE FORA - MG', '01459320603'),
(200, 3, 10, 'PETERSON', '3599210-5474', '2020-01-12', '2020-01-12', 'ITAJUBA', '03615558650'),
(201, 3, 10, 'MOLITERNO', '032988484113', '2020-01-10', '2020-01-12', 'JUIZ DE FORA- MG', '05516989698'),
(202, 4, 9, 'HUMBERTO', '35992041136', '2020-01-15', '2020-01-19', 'GUARUJÃ-SP', '01341741605'),
(203, 1, 5, 'SANDYA CURTY', '3298414-3050', '2020-01-17', '2020-01-19', 'JUIZ DE FORA, MG', '08625194621'),
(204, 3, 7, 'MIOTTO', '3599850-0009', '2020-01-17', '2020-01-19', 'JUIZ DE FORA-MG', '94912599620'),
(205, 5, 4, 'DAVID BAKSYS', '3598438-5325', '2020-01-18', '2020-01-19', 'RESENDE - RJ', '03050026197'),
(206, 3, 8, 'ADMIR', '3599201-1850', '2020-01-24', '2020-01-26', 'SÃƒO JOÃƒO DEL REI - MG / BELO HORI', '05354288630'),
(207, 3, 8, 'NEVES', '35998676879', '2020-01-25', '2020-01-26', 'SÃƒO PAULO-SP', '06304080689'),
(208, 1, 1, 'HUDDSON', '992066172', '2020-01-24', '2020-01-25', 'TRÃŠS CORAÃ‡Ã•ES', '16861854808'),
(209, 1, 5, 'YANO', '21967551398', '2020-01-24', '2020-01-26', 'RIO DE JANEIRO', '36882582823'),
(210, 3, 10, 'JULIANO', '35988460360', '2020-01-24', '2020-01-25', 'VARGINHA - MG', '10912829605'),
(211, 3, 10, 'PETERSON', '3599210-5474', '2020-01-26', '2020-01-26', 'TRÃŠS CORAÃ‡Ã•ES MG', '03615558650'),
(212, 3, 10, 'DIEGO', '35991518204', '2020-01-24', '2020-01-26', 'ANDRADAS - MG', '10831111674'),
(213, 3, 5, 'PAULO', '35991257786', '2020-01-24', '2020-01-26', 'BARBACENA - MG', '10649568664'),
(214, 3, 10, 'MOLITERNO', '32988484713', '2020-01-24', '2020-01-26', 'JUIZ DE FORA- MG', '05516989698'),
(215, 3, 8, 'JUAREZ', '3599226-9127', '2020-01-24', '2020-01-26', 'BARBACENA - MG', '03693370699'),
(216, 1, 5, 'SANDYA CURTY', '32984143050', '2020-01-24', '2020-01-26', 'JUIZ DE FORA, MG', '08625194621'),
(217, 1, 5, 'CAROLINA', '35992047978', '2020-01-24', '2020-01-26', 'JUIZ DE FORA, MG', '01483135667'),
(218, 3, 10, 'JULIANO', '35988460360', '2020-01-26', '2020-01-26', 'TRÃŠS CORAÃ‡Ã•ES - MG', '10912829605'),
(219, 3, 10, 'DHIONE', '35991391343', '2020-01-24', '2020-01-26', 'PASSOS-MG', '09611864612'),
(220, 3, 10, 'COUTO', '3598851-1745', '2020-01-26', '2020-01-26', 'POÃ‡OS DE CALDAS/MG', '08305965694'),
(221, 1, 5, 'CARVALHO', '32991450443', '2020-01-24', '2020-01-26', 'JUIZ DE FORA MG', '12596608693'),
(222, 3, 8, 'ADMIR', '3599201-1850', '2020-02-01', '2020-02-02', 'RIBEIRÃƒO VERMELHO - MG', '05354288630'),
(223, 1, 4, 'JUAREZ', '3599119-4530', '2020-01-29', '2020-01-30', 'ITAJUBÃ - MG', '35735490206'),
(224, 1, 4, 'JUAREZ', '3599119-4530', '2020-01-31', '2020-02-03', 'ITAJUBÃ - MG', '35735490206'),
(225, 1, 4, 'PETERNELLA', '35-99134-2258', '2020-01-31', '2020-02-02', 'INDAIATUBA - SP', '07744207823'),
(226, 3, 8, 'NEVES', '35998676879', '2020-02-01', '2020-02-03', 'SÃƒO PAULO-SP', '06304080689'),
(227, 3, 10, 'MARIANA', '3599149-9032', '2020-11-13', '2020-11-15', 'JUIZ DE FORA', '10190610654'),
(228, 3, 10, 'COUTO', '35988511745', '2020-01-31', '2020-02-02', 'TRÃŠS CORAÃ‡Ã•ES - MG', '08305965694'),
(229, 3, 10, 'BRAGA', '32991274640', '2020-01-31', '2020-02-02', 'NITERÃ“I -RJ', '11752956630'),
(230, 1, 5, 'DIAS', '3298837-1256', '2020-01-31', '2020-02-03', 'RIO DE JANEIRO', '00517850729'),
(231, 3, 10, 'MICHELLE', '3299134-0627', '2020-01-31', '2020-02-02', 'JUIZ DE FORA - MG', '06457933610'),
(232, 3, 5, 'ALEXANDRE DESTRO', '11983841302', '2020-01-31', '2020-02-02', 'BUENO BRANDÃƒO - MG', '10787621633'),
(233, 1, 4, 'FABIAN', '35991545931', '2020-02-01', '2020-02-02', 'RIO DE JANEIRO - RJ', '97327522700'),
(234, 3, 10, 'JULIANO', '35988460360', '2020-01-31', '2020-02-03', 'SÃƒO BENTO ABADE - MG', '10912829605'),
(235, 3, 8, 'OLIVEIRA LEITE', '35991364999', '2020-01-31', '2020-02-02', 'JUIZ DE FORA - MG', '01459320603'),
(236, 3, 10, 'MOLITERNO', '32988484713', '2020-02-01', '2020-02-02', 'JUIZ DE FORA-MG', '05516989698'),
(237, 2, 5, 'BEZERRA', '35991408262', '2020-02-07', '2020-02-09', 'TRÃŠS CORAÃ‡Ã•E-MG', '12459687699'),
(238, 3, 8, 'ADMIR', '3599201-1850', '2020-02-07', '2020-02-09', 'SÃƒO JOÃƒO DEL REI - MG', '05354288630'),
(239, 3, 10, 'DHIONE', '35991391343', '2020-02-10', '2020-03-11', 'PASSOS-MG (FÃ‰RIAS)', '09611864612'),
(240, 1, 4, 'JUAREZ', '3599119-4530', '2020-02-05', '2020-02-06', 'ITAJUBÃ - MG', '35735490206'),
(241, 1, 4, 'JUAREZ', '3599119-4530', '2020-02-07', '2020-02-10', 'ITAJUBÃ - MG', '35735490206'),
(242, 3, 10, 'DIEGO', '35-991518204', '2020-02-07', '2020-02-09', 'ANDRADAS - MG', '10831111674'),
(243, 2, 10, 'PAPINI', '35984429880', '2020-02-08', '2020-02-09', 'SÃƒO PAULO - SP', '07001375640'),
(244, 3, 10, 'LETÃCIA', '3599177-4900', '2020-02-07', '2020-02-09', 'TRÃŠS CORAÃ‡Ã•ES', '05488884696'),
(245, 1, 5, 'YANO', '21967551398', '2020-02-07', '2020-02-09', 'VISCONDE DE MAUA/ RJ  E SÃƒO JOSÃ‰ ', '36882582823'),
(246, 3, 10, 'COUTO', '3598851-1745', '2020-02-07', '2020-02-09', 'TRÃŠS CORAÃ‡Ã•ES - MG', '08305965694'),
(247, 3, 10, 'JULIANO', '35988460360', '2020-02-07', '2020-02-10', 'SÃƒO BENTO ABADE - MG', '10912829605'),
(248, 3, 8, 'AISLAN', '11987175229', '2020-02-07', '2020-02-09', 'SÃƒO JOÃƒO DEL REI-MG', '03296552642'),
(249, 3, 9, 'LUCAS', '11987175229', '2020-02-07', '2020-02-09', 'JUNDIAÃ-SP', '07300325661'),
(250, 1, 5, 'TEIXEIRA', '249930-16953', '2020-02-07', '2020-02-09', 'VOLTA REDONDA - RJ', '14400890783'),
(251, 1, 4, 'PETERNELLA', '35-99134-2258', '2020-02-08', '2020-02-09', 'LINDÃ“IA - SP', '07744207823'),
(252, 3, 8, 'ADMIR', '3599201-1850', '2020-02-14', '2020-02-16', 'SÃƒO JOÃƒO DEL REI-MG / BARBACENA-M', '05354288630'),
(253, 1, 4, 'JUAREZ', '3599119-4530', '2020-02-12', '2020-02-13', 'ITAJUBÃ - MG', '35735490206'),
(254, 1, 4, 'JUAREZ', '3599119-4530', '2020-02-14', '2020-02-17', 'ITAJUBÃ - MG', '35735490206'),
(255, 1, 6, 'HENRIQUE BRITO', '11-97156-5151', '2020-02-14', '2020-02-16', 'SÃƒO PAULO - SP', '07966715671'),
(256, 1, 6, 'RODOLFO', '19-99910-8808', '2020-02-24', '2020-02-24', 'SÃƒO SEBASTIÃƒO DA BELA VISTA - MG', '38890391898'),
(257, 1, 6, 'RODOLFO', '19-99910-8808', '2020-02-22', '2020-02-22', 'SANTA RITA DO SAPUCAÃ - MG', '38890391898'),
(258, 1, 6, 'GABRIEL', '35-99218-0709', '2020-02-14', '2020-02-15', 'BORDA DA MATA - MG', '09773211690');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_mil`
--

CREATE TABLE IF NOT EXISTS `tbl_mil` (
  `cod_mil` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `senha` varchar(12) NOT NULL,
  `nivel_acesso` varchar(2) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `nome_guerra` varchar(20) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  PRIMARY KEY (`cod_mil`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=158 ;

--
-- Fazendo dump de dados para tabela `tbl_mil`
--

INSERT INTO `tbl_mil` (`cod_mil`, `senha`, `nivel_acesso`, `nome`, `nome_guerra`, `cpf`) VALUES
(156, '962', '0', 'PATRICIA CRISTINA MACHADO', 'PATRICIA', '96211768672'),
(5, '', '0', 'RODRIGO MEDEIROS DA SILVA', 'RODRIGO', '85205540915'),
(6, '041', '1', 'MARCIO NEVES ASCENCIANO', 'MARCIO NEVES', '04186388709'),
(7, '', '1', 'CELIO ROCHA DA COSTA', 'CELIO ROCHA', '70268290172'),
(152, '079', '0', 'HENRIQUE DE BRITO PIRES CABEÇAS', 'HENRIQUE BRITO', '07966715671'),
(9, '054', '0', 'ANDERSON DE MATTOS MOTTA VELASCO', 'VELASCO', '05462786719'),
(151, '419', '0', 'BRUNO NUNES DOS SANTOS', 'BRUNO SANTOS', '41979855846'),
(11, '321', '0', 'EDUARDO DE MARIO MENDES', 'MENDES', '32106621850'),
(12, '714', '0', 'ELTON VALÉRIO DO NASCIMENTO', 'ELTON', '71456490630'),
(13, '070', '0', 'ALAM MARTINS DE FREITAS', 'ALAM', '07042858603'),
(14, '119', '0', 'ANDRE LUIZ BARBOSA DE SOUZA JUNIOR', 'BARBOSA', '11910029696'),
(15, '644', '0', 'EDUARDO DE RESENDE LACERDA', 'RESENDE', '64423565668'),
(16, '134', '0', 'FABIO BRUNO CONDINO', 'FABIO CONDINO', '13468079737'),
(17, '110', '0', 'FERNANDO CESAR LEMOS DA SILVA', 'CESAR', '11041523637'),
(18, 'comida', '0', 'FLABER VINICIUS SAMPAIO GRIJO', 'FLABER', '00334927781'),
(19, '078', '0', 'FLAVIO MASSAO SAKAI', 'SAKAI', '07828301880'),
(20, '973', '0', 'FABIAN GARCIA DE LIMA', 'FABIAN', '97327522700'),
(21, '083', '0', 'JOSVAN SENA RODRIGUES', 'JOSVAN', '08322607628'),
(22, '357', '0', 'JUAREZ SOUZA DA SILVA', 'JUAREZ', '35735490206'),
(155, '011', '0', 'FERNANDA APARECIDA NASCIMENTO MACHADO', 'FERNANDA MACHADO', '01184114625'),
(24, '722', '0', 'LUIZ ANTONIO CHEREM', 'CHEREM', '72229136615'),
(25, '112', '0', 'RAMON MELO RODRIGUES', 'RAMON', '11231554614'),
(26, '077', '0', 'RENAN DE SOUZA NANDES', 'NANDES', '07732052684'),
(27, '077', '1', 'SAULO PETERNELLA VAZ', 'PETERNELLA', '07744207823'),
(28, '014', '0', 'ANA CAROLINA DE PAULA CASTRO ROSAS', 'ANA CAROLINA', '01483135667'),
(29, '042', '0', 'ANAMARIA CAMPOS DO AMARAL VIANA DIAS', 'ANAMARIA', '04226246675'),
(30, '097', '0', 'ANDRE LUIZ RIOS DOS SANTOS', 'RIOS', '09786868617'),
(31, 'clb12345', '0', 'CRISTIANO LESSA BANDINI', 'BANDINI', '02806605709'),
(32, '119', '0', 'JOAO PAULO SILVA DE AZEVEDO', 'JOAO PAULO', '11985246694'),
(33, '722', '0', 'NAECIO ROCHA DO NASCIMENTO', 'NAECIO', '72218150468'),
(34, '085', '0', 'NUBIA FERREIRA ALVES', 'NUBIA', '08572049630'),
(35, '127', '0', 'PAULO SERGIO FERREIRA DE OLIVEIRA', 'DE OLIVEIRA', '12722036622'),
(36, '118', '0', 'SYLAS OLIVEIRA NOLASCO', 'NOLASCO', '11893174603'),
(37, '125', '0', 'VICTOR HUGO DA SILVA CARVALHO', 'CARVALHO', '12596608693'),
(38, '387', '0', 'KELVIN ALVES DE FREITA', 'KELVIN', '38765555821'),
(39, '136', '0', 'PATRICK DEYVERSON DE SOUZA ARAUJO BAPTISTA FERREIRA', 'DEYVERSON', '13641079705'),
(40, '106', '0', 'PAULO DAMIAO DE ALMEIDA', 'PAULO', '10649568664'),
(41, '780', '0', 'ARILSON BESSA DA SILVA', 'BESSA', '78075521404'),
(42, '2502', '0', 'EDUARDO LOPES DE CASTRO', 'EDUARDO', '92859364668'),
(43, '918', '0', 'GEILSON ALVES LULU', 'GEILSON', '91844860663'),
(44, '692', '0', 'HERDMANN ALVES MOREIRA', 'HERDMANN', '69201242620'),
(45, 'hfvh3vng', '0', 'AISLAN ALVES MOREIRA', 'AISLAN', '03296552642'),
(46, 'cruflu', '0', 'ALEXANDRO COSTA DE SOUZA', 'COSTA', '94015686691'),
(47, '035', '0', 'AMADOR FABIO ARANTES BERALDO', 'FABIO', '03534437608'),
(48, '949', '0', 'CASSIUS KREY MIOTTO', 'MIOTTO', '94912599620'),
(49, '009', '0', 'CLEITON MARTINS DE SOUZA', 'MARTINS', '00996872671'),
(50, '034', '0', 'JOSE KENNED DA SILVA LANDIM', 'KENNED', '03496453613'),
(51, '028', '0', 'MANOEL FERREIRA DIAS JUNIOR', 'DIAS JUNIOR', '02896156666'),
(52, '958', '0', 'MARCELO AUGUSTO DE ALMEIDA', 'ALMEIDA', '95864377600'),
(53, '002', '0', 'MAXSWELL MONTEIRO FARIA', 'MONTEIRO', '00279554605'),
(54, '053', '0', 'ADMIR DOS ANJOS AVILA', 'ADMIR', '05354288630'),
(55, '048', '1', 'ALAN SOUZA SALES', 'SALES', '04882000679'),
(56, '921', '0', 'AMELIO LUIZ DE OLIVEIRA', 'LUIZ', '92168485615'),
(57, '014', '1', 'CLAUDIO DE OLIVEIRA LEITE', 'OLIVEIRA LEITE', '01459320603'),
(58, '045', '0', 'DAUTO DANIEL AMBROSIO', 'DAUTO', '04500456686'),
(59, '012', '0', 'DOMINGOS SAVIO DA SILVA FILHO', 'SAVIO', '01282798693'),
(60, '772', '0', 'EDSON RICARDO MACHADO', 'MACHADO', '77244508620'),
(61, '860', '0', 'FABIO HENRIQUE MACHADO', 'FABIO HENRIQUE', '86034065615'),
(62, 'jasmim18', '0', 'FELIPE NEVES DE ALMEIDA', 'NEVES', '06304080689'),
(63, '054', '0', 'FERNANDO AUGUSTO FAGUNDES MARCAL', 'FAGUNDES', '05490161710'),
(64, '013', '1', 'HUMBERTO ROBSON DA CUNHA', 'HUMBERTO', '01341741605'),
(65, '013', '0', 'IVAN DE OLIVEIRA E SILVA JUNIOR', 'IVAN', '01348859610'),
(66, '886', '0', 'JOSE BENEDITO PEREIRA RODRIGUES', 'RODRIGUES', '88618587672'),
(67, 'j230429c', '0', 'JUAREZ DE CARVALHO', 'JUAREZ', '03693370699'),
(68, '058', '1', 'LEONARDO LEITE SANTIAGO', 'SANTIAGO', '05861230676'),
(69, '705', '0', 'LEONEL DINIZ MOTTA', 'DINIZ', '70580170691'),
(70, '021', '0', 'LOURIVAL DE JESUS FILHO CORREIA', 'LOURIVAL', '02130832563'),
(71, '083', '0', 'LUCAS FERNANDINO CAMPOS', 'LUCAS CAMPOS', '08384440670'),
(72, '730', '0', 'MARCELO CAMILO COSTA', 'MARCELO', '73085731687'),
(73, 'mpca18', '1', 'MICHEL DE PAULA CORDEIRO DE ARRUDA', 'MICHEL', '05890605623'),
(74, '672', '0', 'MARCIO REZENDE CARLOS', 'CARLOS', '67296297620'),
(75, '817', '0', 'MARCIO ROGERIO BUENO', 'BUENO', '81778376649'),
(76, '301005', '0', 'PABLO DE CARVALHO TAVARES DA MATA', 'TAVARES', '05787035720'),
(77, '095', '0', 'PABLO SCOBAR LISBOA CRUZ MELO', 'SCOBAR', '09539991650'),
(78, '069', '0', 'RICARDO FERREIRA BUZATI', 'BUZATI', '06922122640'),
(79, '799', '0', 'WELLISON GEOVANINE DE OLIVEIRA', 'WELLISON', '79949983649'),
(80, '874', '0', 'WILSON ELIAS CIRINO', 'CIRINO', '87467488653'),
(81, '014', '0', 'EVERTON XAVIER', 'XAVIER', '01420450042'),
(82, '074', '0', 'ALEX CORREA', 'CORREA', '07455602618'),
(83, '110', '0', 'ALEX SANDER FELIPE FROGERI', 'SANDER', '11045659606'),
(84, '126', '1', 'ALTIERES DE ABREU', 'ALTIERES', '12646795645'),
(85, '125', '1', 'ANDRE ROLIM DA SILVA', 'ANDRE', '12573619702'),
(86, '111', '0', 'CAIO OTAVIO COIMBRA', 'OTAVIO', '11145166601'),
(87, '015', '0', 'DEBYE BRAGA LOPES', 'DEBYE', '01538240696'),
(88, '096', '0', 'DHIONE HENRIQUE RODRIGUES TEIXEIRA', 'DHIONE', '09611864612'),
(89, '108', '1', 'DIEGO HENRIQUE NOGUEIRA', 'DIEGO', '10831111674'),
(90, '043', '0', 'ELINES DE PAULA COSTA', 'ELINES', '04367684610'),
(91, 'felix213', '0', 'ELIELTON FELIS ROSA DA COSTA', 'ELIELTON', '09569105640'),
(92, '022', '0', 'ENDRIO MINICH FALK', 'ENDRIO', '02239367075'),
(93, '046', '0', 'FABRICIO LAGE LOPES', 'LOPES', '04619008150'),
(94, '115', '1', 'FILIPE DOS SANTOS PAIVA', 'FILIPE SANTOS', '11576116646'),
(96, '035', '0', 'HANDRICK MORAIS DE SOUZA', 'HANDRICK', '03596863031'),
(97, '122', '0', 'JOAO MARCOS CAMPOS', 'JOAO MARCOS', '12213079676'),
(98, '178', '0', 'JOSUE DUARTE DA GRACA', 'DUARTE', '17883317709'),
(99, '070', '0', 'JOSE EDUARDO PAPINI DE OLIVEIRA', 'PAPINI', '07001375640'),
(100, '109', '0', 'JULIANO RIBEIRO DE AZEVEDO', 'JULIANO', '10912829605'),
(101, '054', '0', 'LETICIA VILELA CASTRO', 'LETICIA', '05488884696'),
(102, '021', '0', 'LUCAS GONZALES BAUCE', 'BAUCE', '02186083060'),
(103, '083', '0', 'LUCAS MAGALHAES COUTO', 'COUTO', '08305965694'),
(104, '026', '0', 'LUCAS WILLIG', 'WILLIG', '02606006011'),
(105, '086', '0', 'LUIZ ANTONIO DE AZEVEDO JUNIOR', 'LUIZ JUNIOR', '08676420416'),
(106, '117', '0', 'PEDRO COSTA BRAGA', 'BRAGA', '11752956630'),
(107, '781124', '0', 'PETERSON MARCELO XAVIER', 'PETERSON', '03615558650'),
(108, '142', '0', 'TAMARA CRISTINA DE MIRANDA SILVA', 'TAMARA', '14224161788'),
(109, '070', '0', 'THAIS DE CASSIA MACHADO DE ASSIS', 'THAIS', '07049667609'),
(110, '088', '0', 'THAMIRES LOPES DE SOUZA', 'THAMIRES', '08858159632'),
(111, '30100504', '0', 'THAYS DE BARROS LIMA SARNO', 'THAYS LIMA', '11018979700'),
(112, '035', '0', 'VALDACIR BARANHANO GRECO JUNIOR', 'GRECO', '03508466000'),
(113, '080', '0', 'VIVIANE APARECIDA NUNES FAUSTINO', 'VIVIANE', '08021657618'),
(114, '127', '0', 'WALLACE DAMAS REIS', 'DAMAS', '12731179643'),
(115, '076', '1', 'PAULO RAPHAEL SILVA E SOUSA ', 'SOUSA', '07654246650'),
(116, '2350102', '1', 'DAVID BAKSYS PINTO', 'DAVID BAKSYS', '03050026197'),
(117, '110', '0', 'MATEUS SILVA ALVES FONTES', 'FONTES', '11095257617'),
(118, '014', '0', 'CARLOS FERNANDO DE OLIVEIRA', 'OLIVEIRA', '01413572740'),
(119, '834', '0', 'GIOVANI PRADO DE FARIA', 'GIOVANI', '83482466653'),
(120, 'noeh88', '0', 'ANDRE JUNIOR NOETZOLD', 'NOETZOLD', '93099800953'),
(121, '005', '0', 'EVANDRO DA SILVA DIAS', 'DIAS', '00517850729'),
(122, '124', '0', 'RAFAEL FERREIRA BEZERRA', 'BEZERRA', '12459687699'),
(123, '086', '0', 'THIAGO DOS REIS BALBINO ', 'BALBINO', '08607641689'),
(153, '388', '0', 'RODOLFO FERREIRA FARIA', 'RODOLFO', '38890391898'),
(154, '097', '0', 'GABRIEL CARVALHO DE OLIVEIRA', 'GABRIEL', '09773211690'),
(127, '144', '0', 'MARIA CLARA SPINOLA TEIXEIRA', 'TEIXEIRA', '14400890783'),
(128, '086', '0', 'SANDYA CURTY RODRIGUES', 'SANDYA CURTY', '08625194621'),
(129, '691', '0', 'VALMIR MACHADO JARDIM', 'JARDIM', '69174059068'),
(130, '948', '0', 'MARCELO HENRIQUE PEREIRA', 'PEREIRA', '94803897620'),
(131, '962', '1', 'ROWILSON BATISTA DE OLIVEIRA', 'ROWILSON', '96211245653'),
(132, '045', '0', 'ROMULO PEDROSA RIBEIRO MENDES', 'PEDROSA', '04576086685'),
(133, '097', '0', 'MARCOS VICENTE TELES PEREIRA', 'MARCOS VICENTE', '09718148647'),
(134, '089', '0', 'PAULA YASCARA SILVA', 'PAULA', '08957530657'),
(135, '118', '0', 'RENATO VIEIRA DA SILVA', 'RENATO', '11812259654'),
(136, '116', '0', 'ANTONIO ROBERTO FROES', 'FROES', '11661829678'),
(137, '126', '0', 'JONATHAN DIEGO DA SILVA BERNARDES', 'BERNARDES', '12606926633'),
(138, '022', '0', 'THIAGO LUIZ DE ALMEIDA BARBOSA', 'BARBOSA', '02227581638'),
(139, '113', '0', 'LUCAS BRANDANI VILELA', 'BRANDANI', '11366712692'),
(140, '147', '0', 'HEVERTON COSTA DE CASTRO', 'HEVERTON', '14777522776'),
(141, '134', '0', 'MATHEUS PASSOS DE ASSIS', 'PASSOS', '13487120666'),
(142, '055', '0', 'FRANCIS VANDIRELLI CAMPOS MOLITERNO', 'MOLITERNO', '05516989698'),
(143, '064', '0', 'MICHELLE OLGA ISABEL PEREIRA', 'MICHELLE', '06457933610'),
(144, '101', '0', 'MARIANA DA SILVA OLIVEIRA', 'MARIANA', '10190610654'),
(145, '107', '0', 'ALEXANDRE DESTRO', 'ALEXANDRE DESTRO', '10787621633'),
(146, '073', '0', 'EDUARDO FERNANDO LUCAS DA SILVA', 'LUCAS', '07300325661'),
(147, '073', '1', 'MARCUS PAULO RIBEIRO DE SOUZA', 'MARCUS', '07314895600'),
(148, '201', '1', 'MARCEL MADEIRA DE JESUS', 'MADEIRA', '20171853881'),
(149, '038', '0', 'HELIAS MIGUEL DE OLIVEIRA MERLIM', 'MIGUEL', '03817929609'),
(150, '368', '0', 'RENATA NINNI YANO', 'YANO', '36882582823'),
(157, '109', '0', 'DRYELLE DE LIMA MORAES COSTA', 'DRYELLE MORAES', '10956464785');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
