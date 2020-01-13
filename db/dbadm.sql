-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 09/01/2020 às 12:42
-- Versão do servidor: 5.7.28
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

INSERT INTO `aluno` (`COD_ALUNO`, `NOM_ALUNO`, `TELEFONE`, `EMAIL`, `CPF`, `RG`, `DATA`, `ENDERECO`, `CIDADE`, `ESTADO`, `NIVEL`, `STATUS`, `BAIRRO`, `CEP`, `DATA_REGISTRO`, `IND_RESPONSAVEL`, `COD_RESPONSAVEL`) VALUES
(62, 'ANA CAROLINA OLIVEIRA REZENDE', NULL, NULL, '04694476645', NULL, '2007-05-31', NULL, NULL, NULL, '2Âº AMARELO(A)', 'Ativo', NULL, NULL, '2020-01-06', 'S', 3),
(63, 'CLAUDIO FONSECA DE REZENDE', '(31) 966128155', 'CLAUDIO@WCTRANSPORTES.COM.BR', '04084580627', 'MG4346168', '1980-03-28', 'Rua GaviÃ£o NÂº190', 'Belo Horizonte', 'MG', '6Âº AZUL(A)', 'Ativo', 'FlÃ¡vio Marques Lisboa (Barreiro)', '30624380', '2020-01-06', 'N', NULL),
(64, 'CAROLINE CRISTINA MELO', '(31) 989343246', 'CAROLINECRMELO@YAHOO.COM.BR', '12340307643', 'MG17241652', '1996-11-13', 'Rua PÃ©rola NÂº25', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Inativo', 'Novo Santa CecÃ­lia (Barreiro)', '30626690', '2020-01-06', 'N', NULL),
(65, 'CRISTIANE PESSOA', '(31) 993189926', 'CRISZUKI@GMAIL.COM', '03029739660', 'MG7472535', '1976-11-16', 'Rua W Quatro NÂº466', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Pongelupe (Barreiro)', '30628020', '2020-01-06', 'N', NULL),
(66, 'BRUNO MOREIRA', '(31) 984565440', 'CONTATOEPEC@GMAIL.COM', '10500018693', 'MG15310510', '1991-07-07', 'Rua Santa Maria Goretti NÂº455', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Ativo', 'Barreiro', '30642020', '2020-01-06', 'N', NULL),
(67, 'ANDRÃ‰ CREPALOI SANTOS', '(31) 986398073', 'ANDRECREPALOI@ICLOUD.COM', '98912046691', 'MG6413485', '1973-11-06', 'Rua Geraldo LÃºcio Vasconcelos NÂº785', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Ativo', 'Buritis', '30575859', '2020-01-06', 'N', NULL),
(68, 'ALINE ANTUNES PEIXOTO', '(31) 994314654', 'ALINEKIMICA@HOTMAIL.COM', '01438650647', 'MG7244934', '1983-05-02', 'Rua Itapetininga NÂº640', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Cardoso (Barreiro)', '30626470', '2020-01-06', 'N', NULL),
(69, 'ALEXANDRA MARIA DE JESUS RODRIGUES', '(31) 991119876', 'ALEXANDRATIAGOLUCAS@GMAIL.COM', '04129336673', 'MG10468967', '1980-05-12', 'Avenida do Farol NÂº269', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Ativo', 'Brasil Industrial (Barreiro)', '30626460', '2020-01-06', 'N', NULL),
(70, 'JACKSON SILVA LIMA', '(31) 983971140', 'JACKSON.LIMA.TM@GMAIL.COM', '01567264670', 'MG13718359', '1986-07-22', 'Rua Dois NÂº266', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Novo Santa CecÃ­lia (Barreiro)', '30626497', '2020-01-06', 'N', NULL),
(71, 'RICARDO DIAS BONIFÃCIO', '(31) 991622982', 'NAOTEM@GMAIL.COM', '10270392602', 'MG16121729', '1989-11-13', 'Rua Carlos Lamarca NÂº168', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Ativo', 'Corumbiara (Barreiro)', '30628600', '2020-01-06', 'N', NULL),
(72, 'DANIELA APARECIDA DE ALCÃ‚NTARA', '(31) 996580965', 'DANNYELABH@HOTMAIL.COM', '08704273699', 'MG13376208', '1987-03-07', 'Rua Eriberto Crivellari NÂº000', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Diamante (Barreiro)', '30660190', '2020-01-06', 'N', NULL),
(73, 'GABRAIEL PONGELUPE FREITAS SILVA', '(31) 998804756', 'GABRIEL.PONGELUPE@HOTMAIL.COM', '13501549628', 'MG00000000', '1998-01-09', 'Rua Itapetininga NÂº65', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Ativo', 'Cardoso (Barreiro)', '30626470', '2020-01-06', 'N', NULL),
(74, 'AMANDA ALVES SOUSA DE OLIVEIRA', '(31) 986126130', 'AMANDALABORAT@GMAIL.COM', '05580643616', 'MG11667381', '0083-11-09', 'Rua Ulisses Surette NÂº328', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Ativo', 'Solar do Barreiro (Barreiro)', '30628270', '2020-01-06', 'N', NULL),
(75, 'JÃ‰SSICA GOMES MOURA DE OLIVEIRA', '(31) 985695933', 'JESSICA.MOURA@LIVE.COM', '09463876649', 'MG14539547', '1990-12-13', 'Rua Nossa Senhora Aparecida NÂº36', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Ativo', 'Corumbiara (Barreiro)', '30628610', '2020-01-06', 'N', NULL),
(76, 'KELLEN PEREIRA BRAGANÃ‡A', '(31) 991492633', 'KELLENPBRAGANCA@GMAIL.COM', '11452180679', 'MH16772152', '1993-08-28', 'Rua Domingos Mancini NÂº10', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Brasil Industrial (Barreiro)', '30626170', '2020-01-06', 'N', NULL),
(77, 'JOVEANE COSTA DE CUNHA FERNANDES', '(31) 996090019', 'JOVEANEFERNANDES@GMAIL.COM', '06708995697', 'MG11635837', '1984-02-02', 'Rua Aleixo LourenÃ§o de Gouveia NÂº132', 'Belo Horizonte', 'MG', '4Âº VERDE(A)', 'Ativo', 'Cardoso (Barreiro)', '30626710', '2020-01-06', 'N', NULL),
(78, 'MATHEUS DE OLIVEIRA ARAUJO', '(31) 989917695', 'MATHEUSARAUJOOLI25@GMAIL.COM', '12503831613', 'MG15297434', '1995-10-17', 'PraÃ§a Garibaldi NÂº204', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Centro', '30180020', '2020-01-06', 'N', NULL),
(79, 'CLAYTON MENEZES DA SILVA', '(31) 983084066', 'claytonslu@gmail.com', '03815103606', 'MG7538774', '1977-05-01', 'Rua Daniel JosÃ© de Carvalho NÂº340', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Novo das IndÃºstrias (Barreiro)', '30610770', '2020-01-06', 'N', NULL),
(80, 'ANNE CAROLYNE MADEIROS DE SOUZA', '(31) 999429327', 'ANNE.CAROL2000@GMAIL.COM', '14634890690', 'MG18501221', '2000-04-10', 'Avenida Deputado AntÃ´nio Lunardi NÂº449', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Ativo', 'Brasil Industrial (Barreiro)', '30626110', '2020-01-06', 'N', NULL),
(81, 'GABRIEL ALVES MARÃ‡AL', '(31) 975264459', 'GA9505947@GMAIL.COM', '02915943647', 'MG00000000', '1999-04-20', ' NÂº27', '', '', '1Âº BRANCO(A)', 'Inativo', '', '30626020', '2020-01-06', 'N', NULL),
(82, 'JONES GARCIA FERNANDES DOS SANTOS', '(31) 998293748', 'NAOTEM@MG.COM', '01540117626', 'MG14262370', '1986-02-15', 'Rua Ãguia NÂº198', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Ativo', 'Miramar (Barreiro)', '30642510', '2020-01-06', 'N', NULL),
(83, 'JULIANA ALVES MARÃ‡AL', '(31) 973456359', 'JULIANAMARCALALVES@GMAIL.COM', '01956201602', 'MG16377682', '1997-05-06', 'Rua F NÂº27', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Brasil Industrial (Barreiro)', '30626020', '2020-01-06', 'N', NULL),
(84, 'VANESSA ALVES FERNANDES', '(31) 984733102', 'NESSAFEER@HOTMAIL.COM', '08531503620', 'MG15659288', '1995-01-05', 'Rua F NÂº27', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Brasil Industrial (Barreiro)', '30626020', '2020-01-06', 'N', NULL),
(85, 'JUSSARA TALITA FRANCO', '(31) 991622982', 'JUSSARATALITA23@GMAIL.COM', '11836453680', 'MG13109848', '1994-05-16', 'Rua LÃªnin NÂº39', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Inativo', 'Corumbiara (Barreiro)', '30628615', '2020-01-06', 'N', NULL),
(86, 'JESSICA CAROLLINE CAMARGOS AGONETTI', '(31) 999445994', 'JESSICAAGONETTI@GMAIL.COM', '12039579630', '17746564', '1994-06-03', 'Rua Joaquim Teixeira Dias NÂº17', 'Belo Horizonte', 'MG', '4Âº VERDE(A)', 'Ativo', 'Cardoso (Barreiro)', '30626620', '2020-01-06', 'N', NULL),
(87, 'MARCELO MENDES RODRIGUES', '(31) 999388872', 'MARCELO.MENDES@OUTLOOK.COM', '03642985610', 'MG00000000', '1977-12-20', 'Rua Costa Prado NÂº239', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Brasil Industrial (Barreiro)', '30626180', '2020-01-06', 'N', NULL),
(88, 'GABRIEL MENDES RODRIGUES DOS SANTOS', '(31) 997901807', 'GBCRW@OUTLOOK.COM', '11473796610', 'MG00000000', '2000-03-21', 'Rua Costa Prado NÂº239', 'Belo Horizonte', 'MG', '8Âº MARROM(A)', 'Inativo', 'Brasil Industrial (Barreiro)', '30626180', '2020-01-06', 'N', NULL),
(89, 'DANIELA MARIA TEXEIRA DIAS', '(31) 986398073', 'DANIMARIADIAS@YAHOO.COM.BR', '03905805626', 'MG8093645', '1977-10-17', 'Rua Geraldo LÃºcio Vasconcelos NÂº785', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Ativo', 'Buritis', '30575859', '2020-01-06', 'N', NULL),
(90, 'DÃ‰BORA DE ALMEIDA SILVA', '(31) 988807658', 'DEBORAEDIEGO2013@GMAIL.COM', '10559872', 'MG17095872', '1991-04-22', 'Rua Miguel Lopes NÂº76', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Ativo', 'Diamante (Barreiro)', '30626004', '2020-01-06', 'N', NULL),
(91, 'DIEGO RODRIGO PEREIRA', '(31) 985363784', 'PUDIMDRP@GMAIL.COM', '07883069608', 'MG14378222', '1987-11-07', 'Rua Miguel Lopes NÂº76', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Ativo', 'Diamante (Barreiro)', '30626004', '2020-01-06', 'N', NULL),
(92, 'FÃBIO ANDERSON FERNANDES', '(31) 982566977', 'FABIOFERNANDESVENDAS@HOTMAIL.COM', '83496599634', 'MG5382254', '1973-06-10', 'Rua Domingos Mancini NÂº17', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Inativo', 'Brasil Industrial (Barreiro)', '30626170', '2020-01-06', 'N', NULL),
(93, 'EDILAINE BARBOSA DOS SANTOS', '(31) 987436817', 'DILAINEDOS23@HOTMAIL.COM', '03815934605', 'MG8818739', '1979-05-03', 'Rua Carmela Aluotto NÂº507', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Araguaia', '30622320', '2020-01-06', 'N', NULL),
(94, 'LUCAS ELIAS DUTRA', '(31) 991167862', 'LUCAS.EDUTRA@GMAIL.COM', '08385581600', 'MG15281310', '1989-08-13', 'Rua Augusto Muniz NÂº771', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'Cardoso (Barreiro)', '30626380', '2020-01-06', 'N', NULL),
(95, 'LUCAS MOREIRA LUIZ', '(31) 994301009', 'LUCASMLUIZ@HOTMAIL.COM', '08581060609', 'MG15124009', '1989-02-10', 'Rua Padre FeijÃ³ NÂº130', 'Contagem', 'MG', '6Âº AZUL(A)', 'Ativo', 'Jardim Industrial', '32220160', '2020-01-06', 'N', NULL),
(96, 'MORIO VELOZO', '(31) 989391285', 'MORIOEVIVIANE@GMAIL.COM', '74067672187', 'MG16441570', '1983-05-03', 'Rua Cleusa Maria da Silva NÂº68', 'Belo Horizonte', 'MG', '3Âº AMARELO/BRANCO(A)', 'Inativo', 'Novo Santa CecÃ­lia (Barreiro)', '30626505', '2020-01-06', 'N', NULL),
(97, 'MARIA APARECIDA PEREIRA', '(31) 989696867', 'CIDAHTHA@HOTMAIL.COM', '03103389647', 'MG6609317', '0073-07-15', 'Rua Domingos Mancini NÂº15', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Inativo', 'Brasil Industrial (Barreiro)', '30626170', '2020-01-06', 'N', NULL),
(98, 'SHAYENE D.DUARTE ASSUNÃ‡ÃƒO', '(31) 975400983', 'SHAYENE.DUARTE@HOTMAIL.COM', '12117280641', 'MG18071212', '1993-11-17', 'Rua Quatro NÂº73', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Ativo', 'Solar do Barreiro (Barreiro)', '30628186', '2020-01-06', 'N', NULL),
(99, 'CRISTYELLE BARBOSA DA SILVA PATRICIO', '(31) 988011509', 'CRISTYELLE.PATRICIO@GMAIL.COM', '12547113686', 'MG18438597', '1995-02-02', 'Rua Nossa Senhora Aparecida NÂº36', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Ativo', 'Corumbiara (Barreiro)', '30628610', '2020-01-06', 'N', NULL),
(100, 'BRUNO RESENDE DA SILVA', '(31) 996816505', 'BRUNORESENDE46@YAHOO.COM.BR', '01201259606', 'MG10664605', '1980-03-20', 'Rua dos Americanos NÂº204', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Inativo', 'MilionÃ¡rios (Barreiro)', '30620050', '2020-01-06', 'N', NULL),
(101, 'CAIQUE VIANA DA SILVA', '(31) 989210435', 'FALTA@GMAIL.COM', '13571242602', 'MG16902902', '1995-05-14', 'Rua PÃ©rola NÂº25', 'Belo Horizonte', 'MG', '2Âº AMARELO(A)', 'Inativo', 'Novo Santa CecÃ­lia (Barreiro)', '30626-690', '2020-01-06', 'N', NULL),
(104, 'JÃ‰SSICA GOMES MOURA DE OLIVEIRA', '(31) 985695933', 'JESSICA.MOURA@LIVE.COM', '09463876642', 'MG14539547', '1990-12-13', 'Rua Nossa Senhora Aparecida NÂº36', 'Belo Horizonte', 'MG', '1Âº BRANCO(A)', 'Ativo', 'Corumbiara (Barreiro)', '30628-610', '2020-01-07', 'N', NULL),
(105, 'GABRIELA GOBBI FERREIRA FERNANDES', NULL, NULL, '02236965605', NULL, '2011-10-01', NULL, NULL, NULL, '2Âº CINZA(K)', 'Ativo', NULL, NULL, '2020-01-07', 'S', 6),
(109, 'ESTHER EMANUELLE M.DE OLIVEIRA', NULL, NULL, '', 'MG20515189', '2011-09-12', NULL, NULL, NULL, '1Âº BRANCO(A)', 'Ativo', NULL, NULL, '2020-01-07', 'S', 10),
(110, 'PEDRO SOUSA DE OLIVEIRA', NULL, NULL, '11997190648', 'MG20942989', '2008-07-24', NULL, NULL, NULL, '1Âº BRANCO(A)', 'Ativo', NULL, NULL, '2020-01-09', 'S', 11),
(111, 'MATHEUS HENRIQUE DA SILVA SANTOS', NULL, NULL, '02179581688', 'MG20472535', '2012-01-30', NULL, NULL, NULL, '2Âº CINZA(K)', 'Ativo', NULL, NULL, '2020-01-09', 'S', 12);

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
  `DATA_REGISTRO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`COD_PAGAMENTO`, `COD_ALUNO`, `DATA_CRIADA`, `DATA_VENCIMENTO`, `STATUS`, `TIPO_PAGAMENTO`, `VALOR`, `DATA_REGISTRO`) VALUES
(27, 95, '2020-01-06', '2020-01-06', 'Pago', 'Personal', 160.00, '2020-01-06'),
(28, 99, '2019-12-16', '2019-12-16', 'Pago', 'Personal', 150.00, '2020-01-06'),
(29, 99, '2020-01-02', '2020-01-10', 'Pago', 'Mensalidade', 82.50, '2020-01-07'),
(30, 69, '2020-01-06', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-07'),
(31, 109, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-07'),
(33, 110, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-09'),
(34, 111, '2020-01-01', '2020-01-10', 'Pago', 'Mensalidade', 90.00, '2020-01-09');

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal`
--

CREATE TABLE `personal` (
  `COD_PERSONAL` int(11) NOT NULL,
  `COD_ALUNO` int(11) NOT NULL,
  `NUMERO_AULA` int(11) DEFAULT NULL,
  `STATUS_AULA` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `personal`
--

INSERT INTO `personal` (`COD_PERSONAL`, `COD_ALUNO`, `NUMERO_AULA`, `STATUS_AULA`) VALUES
(4, 95, 1, 'Aberto'),
(5, 95, 2, 'Aberto'),
(6, 95, 3, 'Aberto'),
(7, 95, 4, 'Aberto'),
(8, 95, 5, 'Aberto'),
(9, 95, 6, 'Aberto'),
(10, 95, 7, 'Aberto'),
(11, 95, 8, 'Aberto'),
(12, 99, 1, 'Presente'),
(13, 99, 2, 'Presente'),
(14, 99, 3, 'Presente'),
(15, 99, 4, 'Presente'),
(16, 99, 5, 'Aberto');

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
(1, 'Mensal 2x por semana', 90.00),
(2, 'Mensal 3x por semana', 110.00),
(3, 'Mensal 4x por semana', 145.00),
(4, 'Mensal 5x por semana', 160.00),
(5, 'Semestral 2x por semana', 503.94),
(6, 'Semestral 3x por semana', 629.94);

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
(12, 'CRISTYELLE BARBOSA DA SILVA PATRICIO', '(31) 988011509', '12547113686', 'MG18438597', '1995-02-02', 'CRISTYELLE.PATRICIO@GMAIL.COM', '30628-610', 'Rua Nossa Senhora Aparecida NÂº36', 'Corumbiara (Barreiro)', 'Belo Horizonte', 'MG', '2020-01-09');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`COD_ALUNO`),
  ADD KEY `responsavel_fk` (`COD_RESPONSAVEL`);

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
  MODIFY `COD_ALUNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `COD_CONTRATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `COD_FUNCIONARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `COD_PAGAMENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `personal`
--
ALTER TABLE `personal`
  MODIFY `COD_PERSONAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `COD_RESPONSAVEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
