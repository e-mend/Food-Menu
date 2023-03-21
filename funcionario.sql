-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 09:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ponto`
--

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `ID` int(2) NOT NULL,
  `CODIGO` int(4) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `FUNCAO` varchar(100) DEFAULT NULL,
  `EMPRESA` varchar(100) DEFAULT NULL,
  `TIPO_FUNCIONARIO` varchar(100) DEFAULT NULL,
  `TURNO` varchar(1) DEFAULT NULL,
  `Comida` varchar(255) DEFAULT NULL,
  `ATIVO` tinyint(1) DEFAULT NULL,
  `ITENS` varchar(255) DEFAULT NULL,
  `TIPO` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`ID`, `CODIGO`, `NOME`, `FUNCAO`, `EMPRESA`, `TIPO_FUNCIONARIO`, `TURNO`, `Comida`, `ATIVO`, `ITENS`, `TIPO`) VALUES
(5, 1607, 'gustavo mender', 'ESPECIALISTA', 'IMAH', 'CONTRATADO', 'I', '', 1, 'ARROZ', 'ITEM'),
(6, 1397, 'thiago cesar', 'ASSISTENTE', 'IMAH', 'CONTRATADO', 'I', '', 1, 'MACARRÃO', 'ITEM'),
(7, 131, 'euriudes oloiveia', 'ASSISTENTE', 'IMAH', 'CONTRATADO', 'I', '', 1, 'FAROFA', 'ITEM'),
(8, 1314, 'maick dos santyos', 'MEDIADOR', 'IMAH', 'CONTRATADO', 'I', 'MARMITA COMPLETA TAMANHO P, BISTECA.', 1, 'SALADA', 'ITEM'),
(9, 2463, 'julia prestes', 'MEDIADOR', 'IMAH', 'CONTRATADO', 'I', '', 1, 'FILE DE FRANGO', 'CARNE'),
(10, 1313, 'elizabeth hernandez', 'DIARISTA', 'IMAH', 'CONTRATADO', 'I', 'MARMITA COMPLETA TAMANHO P, CARNE DE PANELA.', 1, 'CARNE DE PANELA', 'CARNE'),
(11, 11256, 'felicio de souza', 'ATACANTE', 'IMAH', 'CONTRATADO', 'I', '', 1, 'TAMANHO P', 'TAMANHO'),
(12, 51, 'roberta mendes', 'ESPECIALISTA', 'IMAH', 'CONTRATADO', 'I', '', 1, 'TAMANHO M', 'TAMANHO'),
(13, 1456, 'lieth nogueira', 'ESPECIALISTA', 'IMAH', 'CONTRATADO', 'I', '', 1, 'TAMANHO G', 'TAMANHO'),
(14, 13531, 'maria bianca', 'GERENTE', 'IMAH', 'CONTRATADO', 'I', '', 1, 'FEIJOADA', 'CARNE'),
(15, 12541, 'julio cézar', 'ASSISTENTE', 'IMAH', 'CONTRATADO', 'I', '', 1, 'FEIJAO', 'ITEM'),
(16, 2145, 'en mppé', 'DIRETOR GERAL', 'IMAH', 'CONTRATADO', 'I', '', 1, '', 'CARNE'),
(17, 3763, 'DDD', '', '', 'DEMITIDO', '', '', 1, '', 'ITEM'),
(18, 46917, '', '', '', '', '', '', 1, '', 'CARNE'),
(19, 76097, '', '', '', '', '', '', 1, '', 'CARNE'),
(20, 65181, '', '', '', '', '', '', 1, '', 'CARNE'),
(21, 73340, '', '', '', '', '', '', 1, '', 'CARNE'),
(22, 38977, '', '', '', '', '', '', 1, '', 'ITEM'),
(23, 41038, '', '', '', '', '', '', 1, '', 'CARNE'),
(30, 30909, '', '', '', '', '', '', 1, '', 'CARNE'),
(31, 18749, '', '', '', '', '', '', 1, '', 'CARNE'),
(32, 12465, '', '', '', '', '', '', 1, '', 'CARNE'),
(33, 57615, '', '', '', '', '', '', 1, '', 'CARNE'),
(34, 83512, '', '', '', '', '', '', 1, '', 'CARNE'),
(35, 72282, '', '', '', '', '', '', 1, '', 'CARNE'),
(36, 99584, '', '', '', '', '', '', 1, '', 'CARNE'),
(37, 86140, '', '', '', '', '', '', 1, '', 'CARNE'),
(38, 83993, '', '', '', '', '', '', 1, 'BISTECA', 'CARNE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
