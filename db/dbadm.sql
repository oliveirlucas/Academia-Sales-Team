-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jan-2020 às 21:43
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbadm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
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
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`COD_ALUNO`, `NOM_ALUNO`, `TELEFONE`, `EMAIL`, `CPF`, `RG`, `DATA`, `ENDERECO`, `CIDADE`, `ESTADO`, `NIVEL`, `STATUS`, `BAIRRO`, `CEP`, `DATA_REGISTRO`, `IND_RESPONSAVEL`, `COD_RESPONSAVEL`) VALUES
(58, 'ANDRÉ  CREPALDI SANTOS', NULL, NULL, '11111111111', NULL, '1111-11-11', NULL, NULL, NULL, '6º AZUL(A)', 'Ativo', NULL, NULL, '2020-01-04', 'S', 2),
(59, 'Bárbara Eller', NULL, NULL, '78658567758', NULL, '5775-07-04', NULL, NULL, NULL, '6º AZUL(A)', 'Ativo', NULL, NULL, '2020-01-04', 'S', 2),
(60, 'Lucas Evangelista de Oliveira', '(31) 991418777', 'luquinha207@hotmail.com', '02086709655', 'mg16876859', '1997-07-12', 'Rua Água Boa Nº47', 'Belo Horizonte', 'MG', '4º VERDE(A)', 'Ativo', 'Araguaia', '30620360', '2020-01-04', 'N', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `COD_CONTRATO` int(11) NOT NULL,
  `COD_PLANO` int(11) NOT NULL,
  `COD_ALUNO` int(11) NOT NULL,
  `STATUS_CONTRATO` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`COD_CONTRATO`, `COD_PLANO`, `COD_ALUNO`, `STATUS_CONTRATO`) VALUES
(15, 1, 58, 'Ativo'),
(16, 1, 60, 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `COD_FUNCIONARIO` int(11) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `USUARIO` varchar(60) NOT NULL,
  `SENHA` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`COD_PAGAMENTO`, `COD_ALUNO`, `DATA_CRIADA`, `DATA_VENCIMENTO`, `STATUS`, `TIPO_PAGAMENTO`, `VALOR`, `DATA_REGISTRO`) VALUES
(25, 58, '2020-01-01', '2020-01-10', 'Aberto', 'Mensalidade', '90.00', '2020-01-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal`
--

CREATE TABLE `personal` (
  `COD_PERSONAL` int(11) NOT NULL,
  `COD_ALUNO` int(11) NOT NULL,
  `NUMERO_AULA` int(11) DEFAULT NULL,
  `STATUS_AULA` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE `planos` (
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
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
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`COD_RESPONSAVEL`, `NOM_RESPONSAVEL`, `TELEFONE`, `CPF`, `RG`, `DATA_NASCIMENTO`, `EMAIL`, `CEP`, `ENDERECO`, `BAIRRO`, `CIDADE`, `ESTADO`, `DATA_REGISTRO`) VALUES
(2, 'Lucas Evangelista de Oliveira', '(31) 991418777', '02086709633', 'mg16876859', '1111-11-11', 'luquinha207@hotmail.com', '30620360', 'Rua Água Boa Nº47', 'Araguaia', 'Belo Horizonte', 'MG', '2020-01-04');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`COD_ALUNO`),
  ADD KEY `responsavel_fk` (`COD_RESPONSAVEL`);

--
-- Índices para tabela `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`COD_CONTRATO`),
  ADD KEY `COD_PLANO` (`COD_PLANO`),
  ADD KEY `COD_ALUNO` (`COD_ALUNO`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`COD_FUNCIONARIO`);

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`COD_PAGAMENTO`),
  ADD KEY `COD_ALUNO` (`COD_ALUNO`);

--
-- Índices para tabela `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`COD_PERSONAL`),
  ADD KEY `COD_ALUNO` (`COD_ALUNO`);

--
-- Índices para tabela `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`COD_PLANO`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`COD_RESPONSAVEL`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `COD_ALUNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `COD_CONTRATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `COD_FUNCIONARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `COD_PAGAMENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `personal`
--
ALTER TABLE `personal`
  MODIFY `COD_PERSONAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `COD_RESPONSAVEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `responsavel_fk` FOREIGN KEY (`COD_RESPONSAVEL`) REFERENCES `responsavel` (`COD_RESPONSAVEL`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
