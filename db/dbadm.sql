-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Dez-2019 às 20:24
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
  `CEP` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `COD_PAGAMENTO` int(11) NOT NULL,
  `COD_ALUNO` int(11) NOT NULL,
  `DATA_CRIADA` varchar(60) DEFAULT NULL,
  `DATA_VENCIMENTO` varchar(60) DEFAULT NULL,
  `STATUS` varchar(60) DEFAULT NULL,
  `TIPO_PAGAMENTO` varchar(60) DEFAULT NULL,
  `VALOR` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `TIPO_PLANO` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`COD_PLANO`, `TIPO_PLANO`) VALUES
(1, '2x aulas por semana'),
(2, '3x aulas por semana'),
(3, '5x aulas por semana'),
(4, 'Plano semestral 2x semana (R$ 480,00)');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`COD_ALUNO`);

--
-- Índices para tabela `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`COD_CONTRATO`),
  ADD KEY `COD_PLANO` (`COD_PLANO`),
  ADD KEY `COD_ALUNO` (`COD_ALUNO`);

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
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `COD_ALUNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `COD_CONTRATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `COD_PAGAMENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `personal`
--
ALTER TABLE `personal`
  MODIFY `COD_PERSONAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
