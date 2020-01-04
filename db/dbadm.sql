-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: mysql873.umbler.com
-- Generation Time: 03-Jan-2020 às 20:58
-- Versão do servidor: 5.6.40
-- PHP Version: 5.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbadm-sales`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `COD_ALUNO` int(11) NOT NULL,
  `NOME` varchar(155) NOT NULL,
  `TELEFONE` varchar(15) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `RESPONSAVEL` varchar(155) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `RG` varchar(60) NOT NULL,
  `DATA` varchar(10) NOT NULL,
  `ENDERECO` varchar(60) NOT NULL,
  `CIDADE` varchar(60) NOT NULL,
  `ESTADO` varchar(60) NOT NULL,
  `NIVEL` varchar(60) NOT NULL,
  `STATUS` varchar(60) NOT NULL,
  `BAIRRO` varchar(60) DEFAULT NULL,
  `CEP` varchar(11) DEFAULT NULL,
  `DATA_REGISTRO` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`COD_ALUNO`, `NOME`, `TELEFONE`, `EMAIL`, `RESPONSAVEL`, `CPF`, `RG`, `DATA`, `ENDERECO`, `CIDADE`, `ESTADO`, `NIVEL`, `STATUS`, `BAIRRO`, `CEP`, `DATA_REGISTRO`) VALUES
(9, 'Ana Carolina Oliveira Resende', '(31) 99541-2060', 'marcia@wctransportes.com.br', 'Marcia de Oliveira Santos', '046.944.766-45', 'M8253443', '31/05/2007', 'RUA GAVIÃƒO 190', 'BELO HORIZONTE', 'MINAS GERAIS', '2Â° AMARELO', 'Ativo', 'FLAVIO MARQUES LISBOA', '30624-380', NULL),
(10, 'ALINE ANTUNES PEIXOTO', '(31) 99431-4654', 'alinekimica@hotmail.com', ' prÃ³prio aluno', '014.386.506-47', 'M7244934', '02/05/1983', 'RUA ITAPETININGA 640', 'BELO HORIZONTE', 'MINAS GERAIS', '1Âº  BRANCO', 'Inativo', 'CARDOSO', '30626-470', NULL),
(11, 'ALEXANDRE FREESZ FELICIANO', '(31)986673-185', 'FALTA@hotmail.com', 'GRAZIELLE', 'fal.ta', 'falta', '26/05/2006', 'RUA C 166', 'BELO HORIZONTE', 'MINAS GERAIS', '2Â° AMARELO', 'Ativo', 'falta', 'falta', NULL),
(12, 'ANDRÃ‰  CREPALDI SANTOS', '(31) 98639-8073', 'ANDRECREPALDI@ICLLOUD.COM', ' prÃ³prio aluno', '989.120.466-91', 'M6413485', '06/11/1973', 'RUA GERALDO LÃšCIO VASCONCELOS 785 AP402/01', 'BELO HORIZONTE', 'MINAS GERAIS', '2Â° AMARELO', 'Ativo', 'BURITIS', '30575-859', NULL),
(13, 'BRUNO MOREIRA', '(31) 98456-5440', 'CONTATOEPEC@GMAIL.COM', ' prÃ³prio aluno', '105.000.186-93', 'MG15310510', '07/07/1991', 'SANTA MARIA GORETTI 455 AP102', 'BELO HORIZONTE', 'MINAS GERAIS', '2Â° AMARELO', 'Ativo', 'BARREIRO', '30642-020', NULL),
(14, 'BRUNO RESENDE DA SILVA', '(31) 99681-6505', 'BRUNORESENDE46@YAHOO.COM.BR', ' prÃ³prio aluno', '012.012.596-00', 'MG10664605', '20/03/1980', 'RUA DOS AMERICANOS ,204', 'BELO HORIZONTE', 'MINAS GERAIS', '1Âº  BRANCO', 'Inativo', 'MILIONARIOS', 'FALTA', NULL),
(15, 'CRISTYELLE BARBOSA DA SILVA PATRICIO', '(31) 98801-1509', 'CRISTYELLE.PATRICIO@GMAIL.COM', ' prÃ³prio aluno', '125.471.136-86', '18438597', '02/02/1995', 'RUA NOSSA SENHORA AP 36', 'BELO HORIZONTE', 'MINAS GERAIS', '2Â° AMARELO', 'Ativo', 'FALTA', '30628-610', NULL),
(16, 'CRISTIANE PESSOA', '(31) 99918-1285', 'CRISZUKI@GMAIL.COM', ' prÃ³prio aluno', '030.297.396-60', 'MG7472535', '16/11/1976', 'RUAW4, 466', 'BELO HORIZONTE', 'MINAS GERAIS', '1Âº  BRANCO', 'Inativo', 'PONGELUPE', '30628-020', NULL),
(17, 'CAMILA DIAS DUARTE SILVA', '(31) 99997-0618', 'DUARTE.CAMILA29@GMAIL.COM', ' prÃ³prio aluno', '078.968.396-28', 'MG13981128', '23/01/1988', 'RUA ALPHA 46', 'IBIRITE', 'MINAS GERAIS', '4Âº  VERDE', 'Inativo', 'LOS ANGELES', '32400-000', NULL),
(18, 'CAIQUE VIANA DA SILVA', '(31) 98921-0435', 'FALTA@GMAIL.COM', ' prÃ³prio aluno', '135.712.426-02', 'M616902902', '14/05/1995', 'RUA PÃ‰ROLA  25', 'BELO HORIZONTE', 'MINAS GERAIS', '2Â° AMARELO', 'Ativo', 'NOVO SANTA CECÃLIA', '30626-690', NULL),
(19, 'CAROLINE CRISTINA MELO', '(98) 93432-46', 'CAROLINECRMELO@YAHOO.COM.BR', ' prÃ³prio aluno', '123.403.076-43', 'MG17241652', '13/11/1996', 'RUA PÃ‰ROLA  25', 'BELO HORIZONTE', 'MINAS GERAIS', '2Â° AMARELO', 'Ativo', 'NOVO SANTA CECÃLIA', '30626-690', NULL),
(21, 'CLÃUDIO FONSECA DE REZENDE', '(31) 99612-8155', 'CLAUDIO@WCTRANSPORTES.COM.BR', ' prÃ³prio aluno', '040.845.806-27', 'M4346168', '28/03/1980', 'RUA GAVIÃƒO 190', 'BELO HORIZONTE', 'MINAS GERAIS', '6Âº AZUL', 'Ativo', 'FLAVIO MARQUES LISBOA', '30624-380', NULL),
(22, 'CAUAN FREESZ FELICIANO', '(31) 98667-3185', 'FALTA@GMAIL.COM', 'GRAZIELLE', 'fal.ta', 'falta', '30/01/2008', 'RUA C 166', 'BELO HORIZONTE', 'MINAS GERAIS', '2Â° AMARELO', 'Ativo', 'falta', 'FALTA', NULL),
(23, 'Daniela Maria Teixeira Dias', '31988432076', 'danimariadias@yahoo.com.br', ' prÃ³prio aluno', '039.058.056-26', 'MG8093645', '17/10/77', 'RUA GERALDO LÃšCIO VASCONCELOS 785 AP402/01', 'BELO HORIZONTE', 'MINAS GERAIS', '2Âº Amarelo(A)', 'Ativo', 'BURITIS', '30575-859', '2020-01-02'),
(24, 'DÃ©bora de Almeida Silva', '31988807658', 'deboraediego2103@gmail.com', ' prÃ³prio aluno', '105.598.216-70', 'MG17095872', '22/04/1991', 'RUA MIGUEL LOPES ,71', 'BELO HORIZONTE', 'MINAS GERAIS', '2Âº Amarelo(A)', 'Ativo', 'DIAMANTE', '30626-004', '2020-01-02'),
(25, 'Diego Rodrigo Pereira', '(31) 98536-3784', 'pudimdrp@gmail.com', ' prÃ³prio aluno', '078.830.696-08', 'mg14378222', '07/11/1987', 'RUA MIGUEL LOPES ,71', 'BELO HORIZONTE', 'MINAS GERAIS', '2Âº Amarelo(A)', 'Ativo', 'DIAMANTE', '30626-004', '2020-01-02'),
(26, 'FÃ¡bio Anderson Fernandes', '(31) 98256-6977', 'fabiofernandesvendas@hotmail.com', ' prÃ³prio aluno', '834.965.996-34', 'mg5382254', '10/06/1973', 'rua domingos mancini,71', 'belo horizonte', 'minas gerais', '2Âº Amarelo(A)', 'Inativo', 'brasil industrial', '30626-170', '2020-01-02'),
(27, 'giovanna luiza de miranda rodrigues fraga', '(31) 99299-2737', 'tiaclenilda@yahoo.com.br', 'Clenilda Aparecida Rodrigues', '030.034.966-11', 'mg8059829', '09/06/2008', 'rua joaquim teixeira dias,746', 'belo horizonte', 'minas gerais', '2Âº Amarelo(A)', 'Inativo', 'cardoso', '30626-620', '2020-01-02'),
(28, 'Gabriel Eduardo LobÃ£o Iammeni', '(31) 98801-8428', 'deniseeduos@gmail.com', 'denise', '034.070.146-35', 'mg9086499', '25/01/2005', 'rua joao de deus tavares,95', 'belo horizonte', 'minas gerais', '1Âº Branco(A)', 'Ativo', 'cardoso', '30626-390', '2020-01-02'),
(29, 'Gabriela Gobbi Ferreira Fernandes', '(31) 99803-4748', 'ninegobbi@hotmail.com', 'jones garcia fernandes dos santos', '022.369.656-05', 'mg20632435', '01/10/11', 'rua Ã¡guia,198 ap 101', 'belo horizonte ', 'minas gerais', '2Âº Cinza(K)', 'Ativo', 'miramar', '30642-510', '2020-01-02'),
(30, 'Guilherme Eduardo LobÃ£o iammini', '31988018428', 'deniseeduos@gmail.com', 'denise', '034.070.146-35', 'mg9886499', '25/01/2005', 'rua joao de deus tavares,95', 'belo horizonte', 'minas gerais', '1Âº Branco(A)', 'Inativo', 'cardoso', '30626-390', '2020-01-02'),
(31, 'Edilaine Barbosa dos Santos', '(31) 98743-6817', 'dilainedo23@hotmail.com', ' prÃ³prio aluno', '038.159.346-05', 'mg8818739', '03/05/1979', 'rua carnela aluoto,507', 'belo horizonte', 'minas gerais', '1Âº Branco(A)', 'Inativo', 'araguaia', '30622-320', '2020-01-02'),
(32, 'Ã­ris antunes de queiroz', '(31) 933830-406', 'denise.faq32@gmail.com', 'denise', '048.024.856-70', 'mg244907', '17/04/2005', 'RUA ITAPETININGA 640', 'BELO HORIZONTE', 'MINAS GERAIS', '6Âº Azul(A)', 'Inativo', 'cardoso', '30626-710', '2020-01-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
  `COD_CONTRATO` int(11) NOT NULL,
  `COD_PLANO` int(11) NOT NULL,
  `COD_ALUNO` int(11) NOT NULL,
  `STATUS_CONTRATO` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`COD_CONTRATO`, `COD_PLANO`, `COD_ALUNO`, `STATUS_CONTRATO`) VALUES
(10, 2, 18, 'Ativo'),
(12, 1, 15, 'Ativo'),
(13, 1, 12, 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `COD_FUNCIONARIO` int(11) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `USUARIO` varchar(60) NOT NULL,
  `SENHA` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`COD_FUNCIONARIO`, `NOME`, `USUARIO`, `SENHA`) VALUES
(1, 'Lucas Evangelista de Oliveira', 'lucasoliveira', '221e525ceac82833311a8e67ed7948b7'),
(2, 'Thales Gomes de Miranda', 'thales', 'f95a0d4b9ab1ce049cb4dbde1d145f1b'),
(3, 'Sandro Sales Miranda', 'sandro', 'a374b122234e3f802e848bfd8853989f'),
(4, 'Maria Aparecida Gomes de Miranda', 'maria', '6a61d423d02a1c56250dc23ae7ff12f3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE IF NOT EXISTS `pagamento` (
  `COD_PAGAMENTO` int(11) NOT NULL,
  `COD_ALUNO` int(11) NOT NULL,
  `DATA_CRIADA` varchar(60) DEFAULT NULL,
  `DATA_VENCIMENTO` varchar(60) DEFAULT NULL,
  `STATUS` varchar(60) DEFAULT NULL,
  `TIPO_PAGAMENTO` varchar(60) DEFAULT NULL,
  `VALOR` decimal(10,2) DEFAULT NULL,
  `DATA_REGISTRO` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `COD_PERSONAL` int(11) NOT NULL,
  `COD_ALUNO` int(11) NOT NULL,
  `NUMERO_AULA` int(11) DEFAULT NULL,
  `STATUS_AULA` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE IF NOT EXISTS `planos` (
  `COD_PLANO` int(11) NOT NULL,
  `TIPO_PLANO` varchar(60) NOT NULL,
  `VALOR_PLANO` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`COD_PLANO`, `TIPO_PLANO`, `VALOR_PLANO`) VALUES
(1, '2x aulas por semana', '90.00'),
(2, '3x aulas por semana', '110.00'),
(3, '5x aulas por semana', '160.00'),
(4, 'Plano semestral 2x semana (R$ 480,00)', '480.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`COD_ALUNO`);

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`COD_CONTRATO`),
  ADD KEY `COD_PLANO` (`COD_PLANO`),
  ADD KEY `COD_ALUNO` (`COD_ALUNO`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`COD_FUNCIONARIO`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`COD_PAGAMENTO`),
  ADD KEY `COD_ALUNO` (`COD_ALUNO`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`COD_PERSONAL`),
  ADD KEY `COD_ALUNO` (`COD_ALUNO`);

--
-- Indexes for table `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`COD_PLANO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `COD_ALUNO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `contrato`
--
ALTER TABLE `contrato`
  MODIFY `COD_CONTRATO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `COD_FUNCIONARIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `COD_PAGAMENTO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `COD_PERSONAL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`COD_PLANO`) REFERENCES `planos` (`COD_PLANO`),
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`COD_ALUNO`) REFERENCES `aluno` (`COD_ALUNO`);

--
-- Limitadores para a tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pagamento_ibfk_1` FOREIGN KEY (`COD_ALUNO`) REFERENCES `aluno` (`COD_ALUNO`);

--
-- Limitadores para a tabela `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`COD_ALUNO`) REFERENCES `aluno` (`COD_ALUNO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
