-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Maio-2021 às 15:03
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `intranet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `empresa_id` int(11) NOT NULL,
  `empresa_razao` varchar(100) NOT NULL,
  `empresa_email` varchar(100) NOT NULL,
  `empresa_nome` varchar(100) NOT NULL,
  `empresa_cnpj` varchar(18) NOT NULL,
  `empresa_celular` varchar(15) NOT NULL,
  `empresa_telefone` varchar(15) NOT NULL,
  `empresa_whatsap` varchar(15) NOT NULL,
  `empresa_cep` int(9) NOT NULL,
  `empresa_uf` varchar(2) NOT NULL,
  `empresa_cidade` varchar(100) NOT NULL,
  `empresa_logradouro` varchar(100) NOT NULL,
  `empresa_bairro` varchar(100) NOT NULL,
  `empresa_complemento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`empresa_id`, `empresa_razao`, `empresa_email`, `empresa_nome`, `empresa_cnpj`, `empresa_celular`, `empresa_telefone`, `empresa_whatsap`, `empresa_cep`, `empresa_uf`, `empresa_cidade`, `empresa_logradouro`, `empresa_bairro`, `empresa_complemento`) VALUES
(1, 'progride', '2', '3', '4', '5', '6', '7', 69093, 'AM', 'Manaus', 'Rua Pio IX', 'Monte das Oliveiras', '8');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE `funcao` (
  `funcao_id` int(11) NOT NULL,
  `funcao_nome` varchar(100) NOT NULL,
  `funcao_descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`funcao_id`, `funcao_nome`, `funcao_descricao`) VALUES
(1, 'funcao', '2222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `grupo_id` int(11) NOT NULL,
  `grupo_nome` varchar(100) NOT NULL,
  `grupo_descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`grupo_id`, `grupo_nome`, `grupo_descricao`) VALUES
(1, 'grupo', '111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `setor_id` int(11) NOT NULL,
  `setor_nome` varchar(100) NOT NULL,
  `setor_descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`setor_id`, `setor_nome`, `setor_descricao`) VALUES
(1, 'setor', '01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subgrupo`
--

CREATE TABLE `subgrupo` (
  `subgrupo_id` int(11) NOT NULL,
  `subgrupo_nome` varchar(100) NOT NULL,
  `subgrupo_descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `subgrupo`
--

INSERT INTO `subgrupo` (`subgrupo_id`, `subgrupo_nome`, `subgrupo_descricao`) VALUES
(1, '111', '22222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(100) NOT NULL,
  `usuario_email` varchar(100) NOT NULL,
  `usuario_nascimento` date NOT NULL,
  `usuario_empresa` int(11) NOT NULL,
  `usuario_setor` int(11) NOT NULL,
  `usuario_funcao` int(11) NOT NULL,
  `usuario_grupo` int(11) NOT NULL,
  `usuario_login` varchar(100) NOT NULL,
  `usuario_senha` varchar(100) NOT NULL,
  `usuario_confirmesenha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_nascimento`, `usuario_empresa`, `usuario_setor`, `usuario_funcao`, `usuario_grupo`, `usuario_login`, `usuario_senha`, `usuario_confirmesenha`) VALUES
(1, 'LUIZ FERNANDO PINAGÃ‰ COUTINHO', 'luiz.c@progride.com.br', '2021-05-17', 0, 0, 0, 0, 'luiz', 'root', 'root'),
(2, '', '', '0000-00-00', 0, 0, 0, 0, '', '', ''),
(3, '', '', '0000-00-00', 0, 0, 0, 0, '', '', ''),
(4, '', '', '0000-00-00', 0, 0, 0, 0, '', '', ''),
(5, '', '', '0000-00-00', 0, 0, 0, 0, '', '', ''),
(6, '', '', '0000-00-00', 0, 0, 0, 0, '', '', ''),
(7, '', '', '0000-00-00', 0, 0, 0, 0, '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresa_id`);

--
-- Índices para tabela `funcao`
--
ALTER TABLE `funcao`
  ADD PRIMARY KEY (`funcao_id`);

--
-- Índices para tabela `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`grupo_id`);

--
-- Índices para tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`setor_id`);

--
-- Índices para tabela `subgrupo`
--
ALTER TABLE `subgrupo`
  ADD PRIMARY KEY (`subgrupo_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcao`
--
ALTER TABLE `funcao`
  MODIFY `funcao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `grupo`
--
ALTER TABLE `grupo`
  MODIFY `grupo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `setor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `subgrupo`
--
ALTER TABLE `subgrupo`
  MODIFY `subgrupo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
