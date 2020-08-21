-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 20/08/2020 às 14:35
-- Versão do servidor: 5.7.31
-- Versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loyusgyp_salesteam`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE `aluno` (
  `COD_ALUNO` int(11) NOT NULL,
  `NOM_ALUNO` varchar(155) NOT NULL,
  `TELEFONE` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(60) DEFAULT NULL,
  `CPF` varchar(14) NOT NULL,
  `RG` varchar(60) DEFAULT NULL,
  `DATA` date NOT NULL,
  `ENDERECO` varchar(60) DEFAULT NULL,
  `CIDADE` varchar(60) DEFAULT NULL,
  `ESTADO` varchar(4) DEFAULT NULL,
  `NIVEL` varchar(60) NOT NULL,
  `COD_MODALIDADE` int(11) NOT NULL,
  `STATUS` varchar(60) NOT NULL,
  `BAIRRO` varchar(60) DEFAULT NULL,
  `CEP` varchar(11) DEFAULT NULL,
  `DATA_REGISTRO` date NOT NULL,
  `IND_RESPONSAVEL` varchar(2) NOT NULL,
  `COD_RESPONSAVEL` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`COD_ALUNO`, `NOM_ALUNO`, `TELEFONE`, `EMAIL`, `CPF`, `RG`, `DATA`, `ENDERECO`, `CIDADE`, `ESTADO`, `NIVEL`, `COD_MODALIDADE`, `STATUS`, `BAIRRO`, `CEP`, `DATA_REGISTRO`, `IND_RESPONSAVEL`, `COD_RESPONSAVEL`) VALUES
(62, 'ANA CAROLINA OLIVEIRA REZENDE', NULL, NULL, '04694476645', NULL, '2007-05-31', NULL, NULL, NULL, '2Âº AMARELO(A)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 3),
(63, 'CLAUDIO FONSECA DE REZENDE', '(31) 966128155', 'CLAUDIO@WCTRANSPORTES.COM.BR', '04084580627', 'MG4346168', '1980-03-28', 'Rua GaviÃ£o NÂº190', 'Belo Horizonte', 'MG', '6Âº AZUL(A)', 1, 'Ativo', 'FlÃ¡vio Marques Lisboa (Barreiro)', '30624380', '2020-01-01', 'N', NULL),
(64, 'CAROLINE CRISTINA MELO', '(31) 989343246', 'CAROLINECRMELO@YAHOO.COM.BR', '12340307643', 'MG17241652', '1996-11-13', 'Rua PÃ©rola NÂº25', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 1, 'Ativo', 'Novo Santa CecÃ­lia (Barreiro)', '30626-690', '2020-01-01', 'N', NULL),
(65, 'CRISTIANE PESSOA', '(31) 993189926', 'CRISZUKI@GMAIL.COM', '03029739660', 'MG7472535', '1976-11-16', 'Rua W Quatro NÂº466', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Pongelupe (Barreiro)', '30628020', '2020-01-01', 'N', NULL),
(66, 'BRUNO MOREIRA', '(31) 984565440', 'CONTATOEPEC@GMAIL.COM', '10500018693', 'MG15310510', '1991-07-07', 'Rua Santa Maria Goretti NÂº455', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 1, 'Inativo', 'Barreiro', '30642-020', '2020-01-01', 'N', NULL),
(67, 'ANDRÃ‰ CREPALOI SANTOS', '(31) 986398073', 'ANDRECREPALOI@ICLOUD.COM', '98912046691', 'MG6413485', '1973-11-06', 'Rua Geraldo LÃºcio Vasconcelos NÂº785', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 2, 'Ativo', 'Buritis', '30575859', '2020-01-01', 'N', NULL),
(68, 'ALINE ANTUNES PEIXOTO', '(31) 994314654', 'ALINEKIMICA@HOTMAIL.COM', '01438650647', 'MG7244934', '1983-05-02', 'Rua Itapetininga NÂº640', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Cardoso (Barreiro)', '30626470', '2020-01-01', 'N', NULL),
(69, 'ALEXANDRA MARIA DE JESUS RODRIGUES', '(31) 991119876', 'ALEXANDRATIAGOLUCAS@GMAIL.COM', '04129336673', 'MG10468967', '1980-05-12', 'Avenida do Farol NÂº269', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Ativo', 'Brasil Industrial (Barreiro)', '30626460', '2020-01-01', 'N', NULL),
(70, 'JACKSON SILVA LIMA', '(31) 983971140', 'JACKSON.LIMA.TM@GMAIL.COM', '01567264670', 'MG13718359', '1986-07-22', 'Rua Dois NÂº266', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Novo Santa CecÃ­lia (Barreiro)', '30626497', '2020-01-01', 'N', NULL),
(71, 'RICARDO DIAS BONIFÃCIO', '(31) 991622982', 'NAOTEM@GMAIL.COM', '10270392602', 'MG16121729', '1989-11-13', 'Rua Carlos Lamarca NÂº168', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Ativo', 'Corumbiara (Barreiro)', '30628600', '2020-01-01', 'N', NULL),
(72, 'DANIELA APARECIDA DE ALCÃ‚NTARA', '(31) 996580965', 'DANNYELABH@HOTMAIL.COM', '08704273699', 'MG13376208', '1987-03-07', 'Rua Eriberto Crivellari NÂº000', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Diamante (Barreiro)', '30660190', '2020-01-01', 'N', NULL),
(73, 'GABRAIEL PONGELUPE FREITAS SILVA', '(31) 998804756', 'GABRIEL.PONGELUPE@HOTMAIL.COM', '13501549628', 'MG00000000', '1998-01-09', 'Rua Itapetininga NÂº65', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Cardoso (Barreiro)', '30626-470', '2020-01-01', 'N', NULL),
(74, 'AMANDA ALVES SOUSA DE OLIVEIRA', '(31) 986126130', 'AMANDALABORAT@GMAIL.COM', '05580643616', 'MG11667381', '0083-11-09', 'Rua Ulisses Surette NÂº328', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Ativo', 'Solar do Barreiro (Barreiro)', '30628270', '2020-01-01', 'N', NULL),
(76, 'KELLEN PEREIRA BRAGANÃ‡A', '(31) 991492633', 'KELLENPBRAGANCA@GMAIL.COM', '11452180679', 'MH16772152', '1993-08-28', 'Rua Domingos Mancini NÂº10', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Brasil Industrial (Barreiro)', '30626170', '2020-01-01', 'N', NULL),
(77, 'JOVEANE COSTA DE CUNHA FERNANDES', '(31) 996090019', 'JOVEANEFERNANDES@GMAIL.COM', '06708995697', 'MG11635837', '1984-02-02', 'Rua Aleixo LourenÃ§o de Gouveia NÂº132', 'Belo Horizonte', 'MG', '4Âº VERDE(A)', 1, 'Ativo', 'Cardoso (Barreiro)', '30626710', '2020-01-01', 'N', NULL),
(78, 'MATHEUS DE OLIVEIRA ARAUJO', '(31) 989917695', 'MATHEUSARAUJOOLI25@GMAIL.COM', '12503831613', 'MG15297434', '1995-10-17', 'PraÃ§a Garibaldi NÂº204', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Centro', '30180020', '2020-01-01', 'N', NULL),
(79, 'CLAYTON MENEZES DA SILVA', '(31) 983084066', 'claytonslu@gmail.com', '03815103606', 'MG7538774', '1977-05-01', 'Rua Daniel JosÃ© de Carvalho NÂº340', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Novo das IndÃºstrias (Barreiro)', '30610770', '2020-01-01', 'N', NULL),
(80, 'ANNE CAROLYNE MADEIROS DE SOUZA', '(31) 999429327', 'ANNE.CAROL2000@GMAIL.COM', '14634890690', 'MG18501221', '2000-04-10', 'Avenida Deputado AntÃ´nio Lunardi NÂº449', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Brasil Industrial (Barreiro)', '30626-110', '2020-01-01', 'N', NULL),
(81, 'GABRIEL ALVES MARÃ‡AL', '(31) 975264459', 'GA9505947@GMAIL.COM', '02915943647', 'MG00000000', '1999-04-20', 'Rua F NÂº27', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Ativo', 'Brasil Industrial (Barreiro)', '30626020', '2020-01-01', 'N', NULL),
(82, 'JONES GARCIA FERNANDES DOS SANTOS', '(31) 998293748', 'NAOTEM@MG.COM', '01540117626', 'MG14262370', '1986-02-15', 'Rua Ãguia NÂº198', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Ativo', 'Miramar (Barreiro)', '30642510', '2020-01-01', 'N', NULL),
(83, 'JULIANA ALVES MARÃ‡AL', '(31) 973456359', 'JULIANAMARCALALVES@GMAIL.COM', '01956201602', 'MG16377682', '1997-05-06', 'Rua F NÂº27', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Ativo', 'Brasil Industrial (Barreiro)', '30626020', '2020-01-01', 'N', NULL),
(84, 'VANESSA ALVES FERNANDES', '(31) 984733102', 'NESSAFEER@HOTMAIL.COM', '08531503620', 'MG15659288', '1995-01-05', 'Rua F NÂº27', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Brasil Industrial (Barreiro)', '30626020', '2020-01-01', 'N', NULL),
(85, 'JUSSARA TALITA FRANCO', '(31) 991622982', 'JUSSARATALITA23@GMAIL.COM', '11836453680', 'MG13109848', '1994-05-16', 'Rua LÃªnin NÂº39', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 1, 'Inativo', 'Corumbiara (Barreiro)', '30628615', '2020-01-01', 'N', NULL),
(86, 'JESSICA CAROLLINE CAMARGOS AGONETTI', '(31) 999445994', 'JESSICAAGONETTI@GMAIL.COM', '12039579630', '17746564', '1994-06-03', 'Rua Joaquim Teixeira Dias NÂº17', 'Belo Horizonte', 'MG', '4Âº VERDE(A)', 1, 'Inativo', 'Cardoso (Barreiro)', '30626-620', '2020-01-01', 'N', NULL),
(87, 'MARCELO MENDES RODRIGUES', '(31) 999388872', 'MARCELO.MENDES@OUTLOOK.COM', '03642985610', 'MG00000000', '1977-12-20', 'Rua Costa Prado NÂº239', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Brasil Industrial (Barreiro)', '30626180', '2020-01-01', 'N', NULL),
(88, 'GABRIEL MENDES RODRIGUES DOS SANTOS', '(31) 997901807', 'GBCRW@OUTLOOK.COM', '11473796610', 'MG00000000', '2000-03-21', 'Rua Costa Prado NÂº239', 'Belo Horizonte', 'MG', '8Âº MARROM(A)', 1, 'Inativo', 'Brasil Industrial (Barreiro)', '30626180', '2020-01-01', 'N', NULL),
(89, 'DANIELA MARIA TEXEIRA DIAS', '(31) 986398073', 'DANIMARIADIAS@YAHOO.COM.BR', '03905805626', 'MG8093645', '1977-10-17', 'Rua Geraldo LÃºcio Vasconcelos NÂº785', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 2, 'Ativo', 'Buritis', '30575859', '2020-01-01', 'N', NULL),
(90, 'DÃ‰BORA DE ALMEIDA SILVA', '(31) 988807658', 'DEBORAEDIEGO2103@GMAIL.COM', '10559872', 'MG17095872', '1991-04-22', 'Rua Miguel Lopes NÂº76', 'Belo horizonte', 'MG', '3Âº AMARELO/BRANCO(A)', 1, 'Ativo', 'Diamante', '30626004', '2020-01-01', 'N', NULL),
(91, 'DIEGO RODRIGO PEREIRA', '(31) 985363784', 'PUDIMDRP@GMAIL.COM', '07883069608', 'MG14378222', '1987-11-07', 'Rua Miguel Lopes NÂº76', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 1, 'Ativo', 'Diamante (Barreiro)', '30626004', '2020-01-01', 'N', NULL),
(92, 'FÃBIO ANDERSON FERNANDES', '(31) 982566977', 'FABIOFERNANDESVENDAS@HOTMAIL.COM', '83496599634', 'MG5382254', '1973-06-10', 'Rua Domingos Mancini NÂº17', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 1, 'Inativo', 'Brasil Industrial (Barreiro)', '30626170', '2020-01-01', 'N', NULL),
(93, 'EDILAINE BARBOSA DOS SANTOS', '(31) 987436817', 'DILAINEDOS23@HOTMAIL.COM', '03815934605', 'MG8818739', '1979-05-03', 'Rua Carmela Aluotto NÂº507', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Araguaia', '30622320', '2020-01-01', 'N', NULL),
(94, 'LUCAS ELIAS DUTRA', '(31) 991167862', 'LUCAS.EDUTRA@GMAIL.COM', '08385581600', 'MG15281310', '1989-08-13', 'Rua Augusto Muniz NÂº771', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'Cardoso (Barreiro)', '30626380', '2020-01-01', 'N', NULL),
(95, 'LUCAS MOREIRA LUIZ', '(31) 994301009', 'LUCASMLUIZ@HOTMAIL.COM', '08581060609', 'MG15124009', '1989-02-10', 'Rua Padre FeijÃ³ NÂº130', 'Contagem', 'MG', '6Âº AZUL(A)', 2, 'Ativo', 'Jardim Industrial', '32220160', '2020-01-01', 'N', NULL),
(96, 'MORIO VELOZO', '(31) 989391285', 'MORIOEVIVIANE@GMAIL.COM', '74067672187', 'MG16441570', '1983-05-03', 'Rua Cleusa Maria da Silva NÂº68', 'Belo Horizonte', 'MG', '3Âº AMARELO/BRANCO(A)', 1, 'Inativo', 'Novo Santa CecÃ­lia (Barreiro)', '30626505', '2020-01-01', 'N', NULL),
(97, 'MARIA APARECIDA PEREIRA', '(31) 989696867', 'CIDAHTHA@HOTMAIL.COM', '03103389647', 'MG6609317', '0073-07-15', 'Rua Domingos Mancini NÂº15', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 1, 'Inativo', 'Brasil Industrial (Barreiro)', '30626170', '2020-01-01', 'N', NULL),
(98, 'SHAYENE D.DUARTE ASSUNÃ‡ÃƒO', '(31) 975400983', 'SHAYENE.DUARTE@HOTMAIL.COM', '12117280641', 'MG18071212', '1993-11-17', 'Rua Quatro NÂº73', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 1, 'Inativo', 'Solar do Barreiro (Barreiro)', '30628-186', '2020-01-01', 'N', NULL),
(99, 'CRISTYELLE BARBOSA DA SILVA PATRICIO', '(31) 988011509', 'CRISTYELLE.PATRICIO@GMAIL.COM', '12547113686', 'MG18438597', '1995-02-02', 'Rua Nossa Senhora Aparecida NÂº36', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 1, 'Ativo', 'Corumbiara (Barreiro)', '30628610', '2020-01-01', 'N', NULL),
(100, 'BRUNO RESENDE DA SILVA', '(31) 996816505', 'BRUNORESENDE46@YAHOO.COM.BR', '01201259606', 'MG10664605', '1980-03-20', 'Rua dos Americanos NÂº204', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Inativo', 'MilionÃ¡rios (Barreiro)', '30620050', '2020-01-01', 'N', NULL),
(101, 'CAIQUE VIANA DA SILVA', '(31) 989210435', 'FALTA@GMAIL.COM', '13571242602', 'MG16902902', '1995-05-14', 'Rua PÃ©rola NÂº25', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 1, 'Inativo', 'Novo Santa CecÃ­lia (Barreiro)', '30626-690', '2020-01-01', 'N', NULL),
(104, 'JÃ‰SSICA GOMES MOURA DE OLIVEIRA', '(31) 985695933', 'JESSICA.MOURA@LIVE.COM', '09463876642', 'MG14539547', '1990-12-13', 'Rua Nossa Senhora Aparecida NÂº36', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 1, 'Ativo', 'Corumbiara (Barreiro)', '30628-610', '2020-01-01', 'N', NULL),
(105, 'GABRIELA GOBBI FERREIRA FERNANDES', NULL, NULL, '02236965605', NULL, '2011-10-01', NULL, NULL, NULL, '2Âº CINZA(K)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 6),
(109, 'ESTHER EMANUELLE M.DE OLIVEIRA', NULL, NULL, '', 'MG20515189', '2011-09-12', NULL, NULL, NULL, '1Âº BRANCO(A)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 10),
(110, 'PEDRO SOUSA DE OLIVEIRA', NULL, NULL, '11997190648', 'MG20942989', '2008-07-24', NULL, NULL, NULL, '1Âº BRANCO(A)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 11),
(111, 'MATHEUS HENRIQUE DA SILVA SANTOS', NULL, NULL, '02179581688', 'MG20472535', '2012-01-30', NULL, NULL, NULL, '2Âº CINZA(K)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 12),
(112, 'NAYARA THAMIRES ROCHA', '(31) 988439487', 'NAYTR989@GMAIL.COM', '12379926646', 'MG17625231', '1999-05-10', 'Rua Augusto Muniz NÂº1160', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 2, 'Ativo', 'Cardoso (Barreiro)', '30626380', '2020-01-01', 'N', NULL),
(113, 'GUILHERME DELLARETT MORAIS', '(31) 988860580', 'GUILHERMEDELLARETT@GMAIL.COM', '01522597670', 'MG12086574', '1986-02-20', 'Rua Iracema Gomes Pereira NÂº191', 'Belo Horizonte', 'MG', '10Âº VERMELHO(A)', 2, 'Ativo', 'Brasil Industrial (Barreiro)', '30626240', '2020-01-01', 'N', NULL),
(114, 'LUIZ CLAUDIO DE CARVALHO', '(31) 983341720', 'LUIZCLAUDIOCARVALHO.LC@GMAIL.COM', '00649849663', 'MG5390594', '1973-08-17', 'Rua Joaquim Teixeira Dias NÂº853', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 2, 'Ativo', 'Cardoso (Barreiro)', '30626620', '2020-01-01', 'N', NULL),
(115, 'LUCAS BARCELOS LIMA', NULL, NULL, '04324926662', 'MG10537088', '2010-05-30', NULL, NULL, NULL, '2Âº CINZA(K)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 13),
(116, 'BERNARDO COSTA CABRAL', NULL, NULL, '13670640665', 'MG21701968', '2012-08-15', NULL, NULL, NULL, '2Âº CINZA(K)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 14),
(117, 'LUCA DE SOUZA TAVARES NETTO', NULL, NULL, '17410211628', 'MG2023089', '2008-11-04', NULL, NULL, NULL, '4Âº VERDE(A)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 15),
(118, 'VITÃ³RIA MEIRELES SANTOS DE JESUS', NULL, NULL, '15641537624', 'MG00000000', '2012-04-25', NULL, NULL, NULL, '2Âº CINZA(K)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 16),
(119, 'DAVI CUNHA FERNANDES', NULL, NULL, '17376536647', 'MG00000000', '2010-11-30', NULL, NULL, NULL, '9Âº ROXO(K)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 17),
(120, 'MATEUS CUNHA FERNANDES', NULL, NULL, '00000000000', 'MG00000000', '2014-07-10', NULL, NULL, NULL, '4Âº LARANJA(K)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 17),
(121, 'LUCAS HENRIQUE ALVARENGA ROCHA', NULL, NULL, '12379995613', 'MG20507430', '2010-03-16', NULL, NULL, NULL, '1Âº BRANCO(A)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 18),
(122, 'BENTO GUIMARÃƒES DE MORAIS', NULL, NULL, '13336034604', 'MG20606261', '2012-03-06', NULL, NULL, NULL, '5Âº LARANJA/BRANCO(K)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 19),
(123, 'DAVI GUIMARÃƒES DE MORAIS', NULL, NULL, '14442605610', 'MG21812258', '2014-05-12', NULL, NULL, NULL, '4Âº LARANJA(K)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 19),
(124, 'KÃŠNIA NEPONUCENO SILVA', '(31) 991001376', 'KENIANEPO@HOTMAIL.COM', '03146463610', 'MG10007806', '1978-04-27', 'Rua SÃ£o Felipe NÂº42', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 2, 'Ativo', 'Brasil Industrial (Barreiro)', '30626-140', '2020-01-01', 'N', NULL),
(125, 'NICOLY YUKI PESSOA GIBO', NULL, NULL, '14867732656', 'MG17535629', '2005-11-03', NULL, NULL, NULL, '2Âº AMARELO(A)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 20),
(126, 'JOÃƒO VITOR DE JESUS QUADROS', NULL, NULL, '73294241615', 'MG5488552', '2005-01-04', NULL, NULL, NULL, '2Âº AMARELO(A)', 1, 'Ativo', NULL, NULL, '2020-01-01', 'S', 21),
(127, 'SAMUEL BRAGA REIS', NULL, NULL, '02865691675', 'MG21862730', '2010-09-24', NULL, NULL, NULL, '1Âº BRANCO(K)', 1, 'Ativo', NULL, NULL, '2020-02-07', 'S', 22),
(128, 'ALINE DE OLIVEIRA GOMES SOBRINHO MARRA', '(31) 986366567', 'ALINEOGSM@GMAIL.COM', '05902903637', 'MG11306270', '1982-12-21', 'Rua JosÃ© Guilherme da Silva NÂº65', 'Belo Horizonte', 'MG', '-- ADULTO --', 2, 'Ativo', 'Tirol (Barreiro)', '30662-170', '2020-02-07', 'N', NULL),
(129, 'GEOVANA GABRIELA SILVA FERNANDES', NULL, NULL, '14907181680', 'MG19842550', '2007-03-17', NULL, NULL, NULL, '2Âº AMARELO(A)', 1, 'Ativo', NULL, NULL, '2020-02-11', 'S', 23),
(130, 'PEDRO DE PAULO LOPES', NULL, NULL, '15589024650', 'MG00000000', '2011-11-07', NULL, NULL, NULL, '2Âº CINZA(K)', 1, 'Ativo', NULL, NULL, '2020-02-11', 'S', 24);

-- --------------------------------------------------------

--
-- Estrutura para tabela `contrato`
--

CREATE TABLE `contrato` (
  `COD_CONTRATO` int(11) NOT NULL,
  `COD_PLANO` int(11) NOT NULL,
  `COD_ALUNO` int(11) NOT NULL,
  `STATUS_CONTRATO` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `contrato`
--

INSERT INTO `contrato` (`COD_CONTRATO`, `COD_PLANO`, `COD_ALUNO`, `STATUS_CONTRATO`) VALUES
(21, 1, 62, 'Ativo'),
(23, 1, 63, 'Ativo'),
(25, 4, 91, 'Ativo'),
(28, 1, 69, 'Ativo'),
(33, 1, 110, 'Ativo'),
(34, 4, 71, 'Ativo'),
(37, 1, 74, 'Ativo'),
(38, 1, 121, 'Ativo'),
(39, 1, 77, 'Ativo'),
(40, 2, 81, 'Ativo'),
(41, 5, 82, 'Ativo'),
(42, 2, 83, 'Ativo'),
(43, 1, 99, 'Ativo'),
(44, 6, 105, 'Ativo'),
(47, 4, 90, 'Ativo'),
(48, 1, 111, 'Ativo'),
(49, 1, 115, 'Ativo'),
(50, 1, 116, 'Ativo'),
(51, 1, 119, 'Ativo'),
(52, 1, 120, 'Ativo'),
(53, 2, 64, 'Ativo'),
(54, 1, 117, 'Ativo'),
(55, 1, 122, 'Ativo'),
(56, 1, 123, 'Ativo'),
(57, 1, 125, 'Ativo'),
(58, 1, 104, 'Ativo'),
(59, 1, 109, 'Ativo'),
(60, 1, 126, 'Ativo'),
(61, 1, 127, 'Ativo'),
(62, 1, 127, 'Ativo'),
(63, 7, 128, 'Ativo'),
(64, 1, 129, 'Ativo'),
(65, 1, 130, 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `COD_FUNCIONARIO` int(11) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `USUARIO` varchar(60) NOT NULL,
  `SENHA` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`COD_FUNCIONARIO`, `NOME`, `USUARIO`, `SENHA`) VALUES
(1, 'Lucas Evangelista de Oliveira', 'lucasoliveira', '221e525ceac82833311a8e67ed7948b7'),
(2, 'Thales Gomes de Miranda', 'thales', 'f95a0d4b9ab1ce049cb4dbde1d145f1b'),
(3, 'Sandro Sales Miranda', 'sandro', 'a374b122234e3f802e848bfd8853989f'),
(4, 'Maria Aparecida Gomes de Miranda', 'maria', '6a61d423d02a1c56250dc23ae7ff12f3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `modalidade`
--

CREATE TABLE `modalidade` (
  `COD_MODALIDADE` int(11) NOT NULL,
  `DSC_MODALIDADE` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `modalidade`
--

INSERT INTO `modalidade` (`COD_MODALIDADE`, `DSC_MODALIDADE`) VALUES
(1, 'Muay Thai'),
(2, 'Funcional');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `COD_PAGAMENTO` int(11) NOT NULL,
  `COD_ALUNO` int(11) NOT NULL,
  `DATA_CRIADA` date NOT NULL,
  `DATA_VENCIMENTO` date NOT NULL,
  `STATUS` varchar(60) NOT NULL,
  `TIPO_PAGAMENTO` varchar(60) NOT NULL,
  `VALOR` decimal(10,2) NOT NULL,
  `DATA_REGISTRO` date NOT NULL,
  `DAT_OPERACAO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`COD_PAGAMENTO`, `COD_ALUNO`, `DATA_CRIADA`, `DATA_VENCIMENTO`, `STATUS`, `TIPO_PAGAMENTO`, `VALOR`, `DATA_REGISTRO`, `DAT_OPERACAO`) VALUES
(27, 95, '2020-01-06', '2020-01-06', 'Pago', 'Personal', 160.00, '2020-01-06', NULL),
(28, 99, '2019-12-16', '2019-12-16', 'Pago', 'Personal', 150.00, '2020-01-06', NULL),
(29, 99, '2020-01-02', '2020-01-10', 'Pago', 'Mensalidade', 82.50, '2020-01-07', NULL),
(30, 69, '2020-01-06', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-07', NULL),
(31, 109, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-07', NULL),
(33, 110, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-09', NULL),
(34, 111, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-09', NULL),
(35, 74, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-09', NULL),
(38, 105, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 110.00, '2020-01-09', NULL),
(39, 105, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 104.99, '2020-01-09', NULL),
(40, 105, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 104.99, '2020-01-09', NULL),
(41, 105, '2020-04-01', '2020-04-10', 'Pago', 'Mensalidade', 104.99, '2020-01-09', NULL),
(42, 105, '2020-05-01', '2020-05-10', 'Pago', 'Mensalidade', 104.99, '2020-01-09', NULL),
(43, 105, '2020-06-01', '2020-06-10', 'Pago', 'Mensalidade', 104.99, '2020-01-09', NULL),
(44, 105, '2020-07-01', '2020-07-10', 'Pago', 'Mensalidade', 104.99, '2020-01-09', NULL),
(45, 82, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-09', NULL),
(46, 82, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 83.99, '2020-01-09', NULL),
(47, 82, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 83.99, '2020-01-09', NULL),
(48, 82, '2020-04-01', '2020-04-10', 'Pago', 'Mensalidade', 83.99, '2020-01-09', NULL),
(49, 82, '2020-05-01', '2020-05-10', 'Pago', 'Mensalidade', 83.99, '2020-01-09', NULL),
(50, 82, '2020-06-01', '2020-06-10', 'Pago', 'Mensalidade', 83.99, '2020-01-09', NULL),
(51, 82, '2020-07-01', '2020-07-10', 'Pago', 'Mensalidade', 83.99, '2020-01-09', NULL),
(53, 81, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 110.00, '2020-01-09', NULL),
(54, 112, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-09', NULL),
(55, 113, '2020-01-01', '2020-01-10', 'Pago', 'Personal', 120.00, '2020-01-11', NULL),
(56, 114, '2020-01-01', '2020-01-10', 'Pago', 'Personal', 280.00, '2020-01-13', NULL),
(57, 99, '2020-01-01', '2020-01-10', 'Pago', 'Personal', 300.00, '2020-01-13', NULL),
(58, 91, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 160.00, '2020-01-13', '2020-02-07'),
(59, 90, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 177.94, '2020-01-13', '2020-02-07'),
(60, 77, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 80.00, '2020-01-13', NULL),
(61, 83, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 110.00, '2020-01-14', NULL),
(62, 83, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 110.00, '2020-01-14', NULL),
(63, 115, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-14', NULL),
(64, 116, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-14', NULL),
(65, 117, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-14', NULL),
(68, 67, '2020-01-01', '2020-01-10', 'Pago', 'Personal', 240.00, '2020-01-14', NULL),
(69, 89, '2020-01-01', '2020-01-10', 'Pago', 'Personal', 240.00, '2020-01-14', NULL),
(70, 119, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 80.00, '2020-01-14', NULL),
(71, 120, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 80.00, '2020-01-14', NULL),
(72, 121, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-31', NULL),
(75, 64, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 110.00, '2020-02-03', NULL),
(76, 122, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-02-03', NULL),
(77, 123, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-02-03', NULL),
(78, 122, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-03', NULL),
(79, 123, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-03', NULL),
(80, 122, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(81, 122, '2020-04-01', '2020-04-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(82, 122, '2020-05-01', '2020-05-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(83, 122, '2020-06-01', '2020-06-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(84, 122, '2020-07-01', '2020-07-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(85, 122, '2020-08-01', '2020-08-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(86, 123, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(87, 123, '2020-04-01', '2020-04-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(88, 123, '2020-05-01', '2020-05-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(89, 123, '2020-06-01', '2020-06-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(90, 123, '2020-07-01', '2020-07-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(91, 123, '2020-08-01', '2020-08-10', 'Pago', 'Mensalidade', 84.99, '2020-02-03', NULL),
(92, 62, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-27'),
(93, 63, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-27'),
(94, 91, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 150.00, '2020-02-06', '2020-02-10'),
(95, 69, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-27'),
(96, 110, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', NULL),
(97, 71, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 160.00, '2020-02-06', NULL),
(98, 74, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-27'),
(99, 121, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', NULL),
(100, 77, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-10'),
(101, 81, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 110.00, '2020-02-06', '2020-02-27'),
(102, 99, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-21'),
(103, 90, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 150.00, '2020-02-06', '2020-02-10'),
(104, 111, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', NULL),
(105, 115, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-27'),
(106, 116, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-27'),
(107, 119, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-10'),
(108, 120, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-27'),
(109, 117, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-13'),
(110, 125, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', NULL),
(111, 104, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-11'),
(112, 109, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', '2020-02-11'),
(113, 126, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-06', NULL),
(114, 127, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-07', NULL),
(115, 128, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 70.00, '2020-02-07', NULL),
(116, 118, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 110.00, '2020-02-10', NULL),
(117, 129, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-02-11', NULL),
(118, 129, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-11', NULL),
(119, 130, '2020-02-01', '2020-02-10', 'Pago', 'Mensalidade', 90.00, '2020-02-11', NULL),
(120, 95, '2020-02-01', '2020-02-10', 'Pago', 'Personal', 125.00, '2020-02-18', NULL),
(121, 124, '2020-02-01', '2020-02-10', 'Pago', 'Personal', 150.00, '2020-02-18', NULL),
(122, 99, '2020-02-18', '2020-02-19', 'Pago', 'Personal', 300.00, '2020-02-21', NULL),
(123, 62, '2020-03-01', '2020-03-10', 'Aberto', 'Mensalidade', 161.01, '2020-03-01', '2020-08-20'),
(124, 63, '2020-03-01', '2020-03-10', 'Aberto', 'Mensalidade', 161.01, '2020-03-01', '2020-08-20'),
(125, 91, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 160.00, '2020-03-01', '2020-03-15'),
(126, 69, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(127, 110, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(128, 71, '2020-03-01', '2020-03-10', 'Aberto', 'Mensalidade', 265.24, '2020-03-01', '2020-08-20'),
(129, 74, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(130, 121, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(131, 77, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(132, 81, '2020-03-01', '2020-03-10', 'Aberto', 'Mensalidade', 190.79, '2020-03-01', '2020-08-20'),
(133, 83, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 160.00, '2020-03-01', '2020-03-15'),
(134, 99, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(135, 90, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 160.00, '2020-03-01', '2020-03-15'),
(136, 111, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(137, 115, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(138, 116, '2020-03-01', '2020-03-10', 'Aberto', 'Mensalidade', 161.01, '2020-03-01', '2020-08-20'),
(139, 119, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(140, 120, '2020-03-01', '2020-03-10', 'Aberto', 'Mensalidade', 161.01, '2020-03-01', '2020-08-20'),
(141, 64, '2020-03-01', '2020-03-10', 'Aberto', 'Mensalidade', 190.79, '2020-03-01', '2020-08-20'),
(142, 117, '2020-03-01', '2020-03-10', 'Aberto', 'Mensalidade', 161.01, '2020-03-01', '2020-08-20'),
(143, 125, '2020-03-01', '2020-03-10', 'Aberto', 'Mensalidade', 161.01, '2020-03-01', '2020-08-20'),
(144, 104, '2020-03-01', '2020-03-10', 'Aberto', 'Mensalidade', 161.01, '2020-03-01', '2020-08-20'),
(145, 109, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(146, 126, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-01', '2020-03-15'),
(147, 95, '2020-03-04', '2020-03-10', 'Pago', 'Personal', 250.00, '2020-03-05', NULL),
(148, 129, '2020-03-01', '2020-03-10', 'Pago', 'Mensalidade', 90.00, '2020-03-15', NULL),
(149, 62, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(150, 63, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(151, 91, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 245.86, '2020-04-01', '2020-08-20'),
(152, 69, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(153, 110, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(154, 71, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 245.86, '2020-04-01', '2020-08-20'),
(155, 74, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(156, 121, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(157, 77, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(158, 81, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 176.06, '2020-04-01', '2020-08-20'),
(159, 83, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 176.06, '2020-04-01', '2020-08-20'),
(160, 99, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(161, 90, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 245.86, '2020-04-01', '2020-08-20'),
(162, 111, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(163, 115, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(164, 116, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(165, 119, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(166, 120, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(167, 64, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 176.06, '2020-04-01', '2020-08-20'),
(168, 117, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(169, 125, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(170, 104, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(171, 109, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(172, 126, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(173, 127, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(174, 129, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(175, 130, '2020-04-01', '2020-04-10', 'Aberto', 'Mensalidade', 148.14, '2020-04-01', '2020-08-20'),
(176, 62, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(177, 63, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(178, 91, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 226.96, '2020-05-01', '2020-08-20'),
(179, 69, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(180, 110, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(181, 71, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 226.96, '2020-05-01', '2020-08-20'),
(182, 74, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(183, 121, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(184, 77, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(185, 81, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 161.66, '2020-05-01', '2020-08-20'),
(186, 83, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 161.66, '2020-05-01', '2020-08-20'),
(187, 99, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(188, 90, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 226.96, '2020-05-01', '2020-08-20'),
(189, 111, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(190, 115, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(191, 116, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(192, 119, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(193, 120, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(194, 64, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 161.66, '2020-05-01', '2020-08-20'),
(195, 117, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(196, 125, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(197, 104, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(198, 109, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(199, 126, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(200, 127, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(201, 129, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(202, 130, '2020-05-01', '2020-05-10', 'Aberto', 'Mensalidade', 135.54, '2020-05-01', '2020-08-20'),
(203, 62, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(204, 63, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(205, 91, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 207.58, '2020-06-01', '2020-08-20'),
(206, 69, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(207, 110, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(208, 71, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 207.58, '2020-06-01', '2020-08-20'),
(209, 74, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(210, 121, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(211, 77, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(212, 81, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 146.93, '2020-06-01', '2020-08-20'),
(213, 83, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 146.93, '2020-06-01', '2020-08-20'),
(214, 99, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(215, 90, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 207.58, '2020-06-01', '2020-08-20'),
(216, 111, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(217, 115, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(218, 116, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(219, 119, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(220, 120, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(221, 64, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 146.93, '2020-06-01', '2020-08-20'),
(222, 117, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(223, 125, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(224, 104, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(225, 109, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(226, 126, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(227, 127, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(228, 129, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(229, 130, '2020-06-01', '2020-06-10', 'Aberto', 'Mensalidade', 122.67, '2020-06-01', '2020-08-20'),
(230, 124, '2020-06-01', '2020-06-10', 'Pago', 'Pessoal', 250.00, '2020-06-08', NULL),
(231, 95, '2020-06-01', '2020-06-10', 'Pago', 'Personal', 225.00, '2020-06-08', NULL),
(232, 62, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(233, 63, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(234, 91, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 188.68, '2020-07-01', '2020-08-20'),
(235, 69, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(236, 110, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(237, 71, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 188.68, '2020-07-01', '2020-08-20'),
(238, 74, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(239, 121, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(240, 77, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(241, 81, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 132.53, '2020-07-01', '2020-08-20'),
(242, 83, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 132.53, '2020-07-01', '2020-08-20'),
(243, 99, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(244, 90, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 188.68, '2020-07-01', '2020-08-20'),
(245, 111, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(246, 115, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(247, 116, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(248, 119, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(249, 120, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(250, 64, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 132.53, '2020-07-01', '2020-08-20'),
(251, 117, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(252, 125, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(253, 104, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(254, 109, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(255, 126, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(256, 127, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(257, 129, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(258, 130, '2020-07-01', '2020-07-10', 'Aberto', 'Mensalidade', 110.07, '2020-07-01', '2020-08-20'),
(259, 62, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(260, 63, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(261, 91, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 169.30, '2020-08-01', '2020-08-20'),
(262, 69, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(263, 110, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(264, 71, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 169.30, '2020-08-01', '2020-08-20'),
(265, 74, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(266, 121, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(267, 77, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(268, 81, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 117.80, '2020-08-01', '2020-08-20'),
(269, 83, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 117.80, '2020-08-01', '2020-08-20'),
(270, 99, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(271, 90, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 169.30, '2020-08-01', '2020-08-20'),
(272, 111, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(273, 115, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(274, 116, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(275, 119, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(276, 120, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(277, 64, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 117.80, '2020-08-01', '2020-08-20'),
(278, 117, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(279, 125, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(280, 104, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(281, 109, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(282, 126, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(283, 127, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(284, 129, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20'),
(285, 130, '2020-08-01', '2020-08-10', 'Aberto', 'Mensalidade', 97.20, '2020-08-01', '2020-08-20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal`
--

CREATE TABLE `personal` (
  `COD_PERSONAL` int(11) NOT NULL,
  `COD_ALUNO` int(11) NOT NULL,
  `NUMERO_AULA` int(11) DEFAULT NULL,
  `DATA_AULA` date DEFAULT NULL,
  `STATUS_AULA` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `personal`
--

INSERT INTO `personal` (`COD_PERSONAL`, `COD_ALUNO`, `NUMERO_AULA`, `DATA_AULA`, `STATUS_AULA`) VALUES
(4, 95, 1, '2020-01-11', 'Presente'),
(5, 95, 2, '2020-01-13', 'Presente'),
(6, 95, 3, '2021-01-18', 'Presente'),
(7, 95, 4, '2020-01-20', 'Presente'),
(8, 95, 5, '2020-01-25', 'Presente'),
(9, 95, 6, '2020-01-29', 'Presente'),
(10, 95, 7, '2020-02-01', 'Presente'),
(11, 95, 8, '2020-02-03', 'Presente'),
(12, 99, 1, '2020-02-01', 'Presente'),
(13, 99, 2, '2020-02-01', 'Presente'),
(14, 99, 3, '2020-02-01', 'Presente'),
(15, 99, 4, '2020-02-01', 'Presente'),
(16, 99, 5, '2020-02-01', 'Presente'),
(17, 113, 1, '2020-01-18', 'Presente'),
(18, 113, 2, '2020-01-25', 'Presente'),
(19, 113, 3, '2020-02-01', 'Presente'),
(20, 113, 4, '2020-02-29', 'Presente'),
(21, 87, 1, '2020-02-01', 'Aberto'),
(22, 87, 2, '2020-02-01', 'Aberto'),
(23, 89, 1, '2020-02-01', 'Presente'),
(24, 89, 2, '2020-02-01', 'Presente'),
(25, 67, 1, '2020-02-01', 'Presente'),
(26, 67, 2, '2020-02-01', 'Presente'),
(27, 99, 1, '2020-01-15', 'Presente'),
(28, 99, 2, '2020-01-22', 'Presente'),
(29, 99, 3, '2020-01-24', 'Presente'),
(30, 99, 4, '2020-01-30', 'Presente'),
(31, 99, 5, '2020-01-31', 'Presente'),
(33, 99, 6, '2020-02-03', 'Presente'),
(34, 99, 7, '2020-02-05', 'Presente'),
(35, 99, 8, '2020-02-10', 'Presente'),
(36, 99, 9, '2020-02-12', 'Presente'),
(37, 99, 10, '2020-02-17', 'Presente'),
(38, 114, 1, NULL, 'Presente'),
(39, 114, 2, NULL, 'Presente'),
(40, 114, 3, NULL, 'Presente'),
(41, 114, 4, NULL, 'Aberto'),
(42, 114, 5, NULL, 'Aberto'),
(43, 114, 6, NULL, 'Aberto'),
(44, 114, 7, NULL, 'Aberto'),
(45, 114, 8, NULL, 'Aberto'),
(46, 67, 1, NULL, 'Presente'),
(47, 67, 2, NULL, 'Presente'),
(48, 67, 3, NULL, 'Presente'),
(49, 67, 4, NULL, 'Presente'),
(50, 67, 5, '2020-02-04', 'Presente'),
(51, 67, 6, NULL, 'Aberto'),
(52, 67, 8, NULL, 'Aberto'),
(53, 67, 7, NULL, 'Aberto'),
(54, 89, 1, NULL, 'Presente'),
(55, 89, 2, NULL, 'Presente'),
(56, 89, 3, NULL, 'Presente'),
(57, 89, 4, NULL, 'Presente'),
(58, 89, 5, NULL, 'Aberto'),
(59, 89, 6, NULL, 'Aberto'),
(60, 89, 7, NULL, 'Aberto'),
(61, 89, 8, NULL, 'Aberto'),
(62, 63, 1, NULL, 'Presente'),
(63, 124, 1, '2020-02-04', 'Presente'),
(64, 124, 2, '2020-02-05', 'Presente'),
(65, 71, 1, '2020-01-22', 'Presente'),
(66, 71, 2, '2020-02-08', 'Aberto'),
(67, 95, 1, '2020-02-15', 'Presente'),
(68, 95, 2, '2020-02-17', 'Presente'),
(69, 95, 3, '2020-02-22', 'Presente'),
(70, 95, 4, '2020-02-26', 'Presente'),
(71, 95, 5, '2020-02-29', 'Presente'),
(72, 124, 1, '2020-02-14', 'Presente'),
(73, 124, 2, '2020-02-15', 'Presente'),
(74, 124, 3, '2020-03-09', 'Presente'),
(75, 124, 4, '2020-03-10', 'Presente'),
(76, 124, 5, '2020-03-12', 'Presente'),
(77, 126, 6, '2020-03-04', 'Aberto'),
(78, 99, 1, '2020-02-19', 'Presente'),
(79, 99, 2, '2020-02-26', 'Presente'),
(80, 99, 3, '2020-02-28', 'Presente'),
(81, 99, 4, '2020-03-06', 'Presente'),
(82, 99, 5, '2020-03-11', 'Presente'),
(83, 99, 6, '2020-03-13', 'Presente'),
(84, 99, 7, '2020-03-16', 'Presente'),
(85, 99, 8, '2020-02-16', 'Aberto'),
(86, 99, 9, '2020-02-18', 'Aberto'),
(87, 99, 10, '2020-02-23', 'Aberto'),
(88, 95, 1, '2020-03-04', 'Presente'),
(89, 95, 2, '2020-03-07', 'Presente'),
(90, 95, 3, '2020-03-09', 'Presente'),
(91, 95, 4, '2020-03-16', 'Presente'),
(92, 95, 5, '2020-05-30', 'Presente'),
(93, 95, 6, '2020-03-21', 'Aberto'),
(94, 95, 7, '2020-02-23', 'Aberto'),
(95, 95, 8, '2020-03-28', 'Aberto'),
(96, 95, 9, '2020-03-30', 'Aberto'),
(97, 113, 1, '2020-03-07', 'Presente'),
(98, 113, 2, '2020-03-14', 'Presente'),
(99, 113, 3, '2020-03-21', 'Aberto'),
(100, 113, 4, '2020-03-28', 'Aberto'),
(101, 124, 1, '2020-03-13', 'Presente'),
(102, 124, 2, '2020-03-24', 'Aberto'),
(103, 124, 3, '2020-03-25', 'Aberto'),
(104, 124, 4, '2020-03-31', 'Aberto'),
(105, 124, 1, '2020-06-02', 'Presente'),
(106, 124, 2, '2020-06-03', 'Presente'),
(107, 124, 3, '2020-06-09', 'Aberto'),
(108, 124, 4, '2020-06-10', 'Aberto'),
(109, 124, 5, '2020-06-16', 'Aberto'),
(110, 124, 6, '2020-06-17', 'Aberto'),
(111, 124, 7, '2020-06-23', 'Aberto'),
(112, 124, 8, '2020-06-24', 'Aberto'),
(113, 124, 9, '2020-06-30', 'Aberto'),
(114, 124, 10, '2020-06-30', 'Aberto'),
(115, 95, 1, '2020-06-02', 'Presente'),
(116, 95, 2, '2020-06-05', 'Presente'),
(117, 95, 3, '2020-06-09', 'Aberto'),
(118, 95, 4, '2020-06-13', 'Aberto'),
(119, 95, 5, '2020-06-16', 'Aberto'),
(120, 95, 6, '2020-06-20', 'Aberto'),
(121, 95, 7, '2020-06-23', 'Aberto'),
(122, 95, 8, '2020-06-27', 'Aberto'),
(123, 95, 9, '2020-06-30', 'Aberto');

-- --------------------------------------------------------

--
-- Estrutura para tabela `planos`
--

CREATE TABLE `planos` (
  `COD_PLANO` int(11) NOT NULL,
  `TIPO_PLANO` varchar(60) NOT NULL,
  `VALOR_PLANO` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `planos`
--

INSERT INTO `planos` (`COD_PLANO`, `TIPO_PLANO`, `VALOR_PLANO`) VALUES
(1, 'Muay Thai 2x por semana', 90.00),
(2, 'Muay Thai 3x por semana', 110.00),
(3, 'Muay Thai 4x por semana', 145.00),
(4, 'Muay Thai 5x por semana', 160.00),
(5, 'Muay Thai semestral 2x por semana', 503.94),
(6, 'Muay Thai semestral 3x por semana', 629.94),
(7, 'Funcional 2x por semana', 70.00),
(8, 'Personal', 0.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `COD_RESPONSAVEL` int(11) NOT NULL,
  `NOM_RESPONSAVEL` varchar(60) DEFAULT NULL,
  `TELEFONE` varchar(20) DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `RG` varchar(15) DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `EMAIL` varchar(60) DEFAULT NULL,
  `CEP` varchar(9) DEFAULT NULL,
  `ENDERECO` varchar(60) DEFAULT NULL,
  `BAIRRO` varchar(60) DEFAULT NULL,
  `CIDADE` varchar(60) DEFAULT NULL,
  `ESTADO` varchar(2) DEFAULT NULL,
  `DATA_REGISTRO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `responsavel`
--

INSERT INTO `responsavel` (`COD_RESPONSAVEL`, `NOM_RESPONSAVEL`, `TELEFONE`, `CPF`, `RG`, `DATA_NASCIMENTO`, `EMAIL`, `CEP`, `ENDERECO`, `BAIRRO`, `CIDADE`, `ESTADO`, `DATA_REGISTRO`) VALUES
(3, 'CLAUDIO FONSECA DE REZENDE', '(31) 996128155', '04084580627', 'MG4346168', '1980-03-28', 'CLAUDIO@WCTRANSPORTES.COM.BR', '30624-380', 'Rua GaviÃ£o NÂº190', 'FlÃ¡vio Marques Lisboa (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-06'),
(6, 'JONES GABRIM FERNANDES DOS SANTOS', '(31) 998293748', '01540117626', 'MG14262370', '1986-02-15', 'NINEGOBBI@HOTMAIL.COM', '30642-510', 'Rua Ãguia NÂº198', 'Miramar (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-07'),
(10, 'JÃ‰SSICA GOMES MOURA DE OLIVEIRA', '(31) 385695933', '09463876642', 'MG14539547', '1990-12-13', 'JESSICA.MOURA@LIVE.COM', '30628-610', 'Rua Nossa Senhora Aparecida NÂº36', 'Corumbiara (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-07'),
(11, 'AMANDA ALVES SOUSA DE OLIVEIRA', '(31) 986515540', '05580643616', 'MG11667381', '1983-11-09', 'AMANDALABORAT@GMAIL.COM', '30628-270', 'Rua Ulisses Surette NÂº328', 'Solar do Barreiro (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-09'),
(12, 'CRISTYELLE BARBOSA DA SILVA PATRICIO', '(31) 988011509', '12547113686', 'MG18438597', '1995-02-02', 'CRISTYELLE.PATRICIO@GMAIL.COM', '30628-610', 'Rua Nossa Senhora Aparecida NÂº36', 'Corumbiara (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-09'),
(13, 'ELAINE CRISTINA BARCELOS', '(31) 992322570', '15245044676', 'MG21609355', '1978-01-06', 'ELAINECBARCELOS@YAHOO.COM', '30626-720', 'Rua UruÃ§anga NÂº180', 'Cardoso (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-14'),
(14, 'ALBERTO LUIZ FREITAS CABRAL', '(31) 999285999', '04438020689', 'MG10073541', '1980-07-15', 'ALINEFC@MSN.COM', '30692-610', 'Rua TaboÃ£o da Serra NÂº(337)', 'Itaipu (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-14'),
(15, 'TÃ‚MARA CAROLINA DE SOUZA GOMES', '(31) 994073878', '08268677660', 'MG2023089', '1987-10-07', 'TAMARALEKULO@GMAIL.COM', '30626-710', 'Rua Aleixo LourenÃ§o de Gouveia NÂº(365)', 'Cardoso (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-14'),
(16, 'FABIANE MEIRELES', '(31) 987860265', '04346407609', 'MG10168764', '2012-04-25', 'FABIANEMEIRELES35@GMAIL.COM', '30626-110', 'Avenida Deputado AntÃ´nio Lunardi NÂº(325)', 'Brasil Industrial (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-14'),
(17, 'JOVEANE COSTA DE CUNHA FERNANDES', '(31) 986682384', '06708995697', 'MG11635837', '1984-02-02', 'JOVEANEGERNANDES@GMAIL.COM', '30626-710', 'Rua Aleixo LourenÃ§o de Gouveia NÂº132', 'Cardoso (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-14'),
(18, 'JONE ROCHA', '(31) 988439487', '00071436642', 'MG6645513', '1985-10-30', 'JONEROCHA@YAHOO.COM.BR', '30626-380', 'Rua Augusto Muniz NÂº1160', 'Cardoso (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-31'),
(19, 'LUCILIA COELHO GUIMARÃƒES', '(31) 988932812', '06979588680', 'MG11787680', '1984-12-28', 'LUCILIAMED@YAHOO.COM.BR', '30575-847', 'Avenida Senador JosÃ© Augusto NÂº260', 'Buritis', 'Belo Horizonte', 'MG', '2020-02-03'),
(20, 'CRISTIANE PESSOA', '(31) 984661501', '03029739660', 'MG7472535', '1976-11-16', 'NICOLINHAYUK@GMAIL.COM', '30628-020', 'Rua W Quatro NÂº466', 'Pongelupe (Barreiro)', 'Belo Horizonte', 'MG', '2020-02-05'),
(21, 'VIVIANI CISTINA DE AGUIAR VELOZO', '(31) 999181285', '73294241615', 'MG5488552', '1971-03-31', 'jv259717@gmail.com', '30626-505', 'Rua Cleusa Maria da Silva NÂº68', 'Novo Santa CecÃ­lia (Barreiro)', 'Belo Horizonte', 'MG', '2020-02-06'),
(22, 'VALÃ‰RIA REIS SEVERINO', '(31) 991614023', '05090663645', 'MG11556582', '1979-11-16', 'VALERIAREIS@BOL.COM.BR', '30660-020', 'Rua JosÃ© Alves Maia NÂº328', 'Diamante (Barreiro)', 'Belo Horizonte', 'MG', '2020-02-07'),
(23, 'FÃBIO ANDERSON FERNANDES', '(31) 982566977', '83496599634', 'MG5382254', '1973-06-10', 'FABIOFERNANDESVENDAS@HOTMAIL.COM', '30626-170', 'Rua Domingos Mancini NÂº17', 'Brasil Industrial (Barreiro)', 'Belo Horizonte', 'MG', '2020-02-11'),
(24, 'RUBIA ALINE DE PAULO LOPES', '(31) 975260887', '03930562600', 'MG10591503', '1978-11-29', 'RUBIALINELOPES@GMAIL.COM', '30370-670', 'AVENIDA WARLEY APARECIDO MARTINS NÂº566', 'VILA PINHO,JATOBÃ', 'Belo Horizonte', 'MG', '2020-02-11');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`COD_ALUNO`),
  ADD KEY `responsavel_fk` (`COD_RESPONSAVEL`),
  ADD KEY `fk_modalidade` (`COD_MODALIDADE`);

--
-- Índices de tabela `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`COD_CONTRATO`),
  ADD KEY `COD_PLANO` (`COD_PLANO`),
  ADD KEY `COD_ALUNO` (`COD_ALUNO`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`COD_FUNCIONARIO`);

--
-- Índices de tabela `modalidade`
--
ALTER TABLE `modalidade`
  ADD PRIMARY KEY (`COD_MODALIDADE`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`COD_PAGAMENTO`),
  ADD KEY `COD_ALUNO` (`COD_ALUNO`);

--
-- Índices de tabela `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`COD_PERSONAL`),
  ADD KEY `COD_ALUNO` (`COD_ALUNO`);

--
-- Índices de tabela `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`COD_PLANO`);

--
-- Índices de tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`COD_RESPONSAVEL`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `COD_ALUNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `COD_CONTRATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `COD_FUNCIONARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `COD_PAGAMENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT de tabela `personal`
--
ALTER TABLE `personal`
  MODIFY `COD_PERSONAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `COD_RESPONSAVEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `responsavel_fk` FOREIGN KEY (`COD_RESPONSAVEL`) REFERENCES `responsavel` (`COD_RESPONSAVEL`);

--
-- Restrições para tabelas `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`COD_PLANO`) REFERENCES `planos` (`COD_PLANO`),
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`COD_ALUNO`) REFERENCES `aluno` (`COD_ALUNO`);

--
-- Restrições para tabelas `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pagamento_ibfk_1` FOREIGN KEY (`COD_ALUNO`) REFERENCES `aluno` (`COD_ALUNO`);

--
-- Restrições para tabelas `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`COD_ALUNO`) REFERENCES `aluno` (`COD_ALUNO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
