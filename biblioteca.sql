-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jul-2021 às 20:20
-- Versão do servidor: 8.0.25
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int NOT NULL,
  `pseudonimo` varchar(45) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE `editora` (
  `id_editora` int NOT NULL,
  `nome` varchar(45) NOT NULL,
  `representante` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exemplar`
--

CREATE TABLE `exemplar` (
  `id_exemplar` int NOT NULL,
  `fk_id_pub` int NOT NULL,
  `disponivel` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ocupacao` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `senha`, `nome`, `ocupacao`) VALUES
('root-user', 'admin', 'admin', 'administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leitor`
--

CREATE TABLE `leitor` (
  `cpf` varchar(11) NOT NULL,
  `matricula` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `aluguel_id` int DEFAULT NULL,
  `aluguel_data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `leitor`
--

INSERT INTO `leitor` (`cpf`, `matricula`, `nome`, `senha`, `aluguel_id`, `aluguel_data`) VALUES
('root-user', 'root-user', 'administrador', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `id_pub` int NOT NULL,
  `exemplares` int NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `fk_id_autor` int NOT NULL,
  `fk_id_editora` int NOT NULL,
  `data_publicacao` date NOT NULL,
  `paginas` int NOT NULL,
  `lingua` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Índices para tabela `editora`
--
ALTER TABLE `editora`
  ADD PRIMARY KEY (`id_editora`);

--
-- Índices para tabela `exemplar`
--
ALTER TABLE `exemplar`
  ADD PRIMARY KEY (`id_exemplar`),
  ADD KEY `id_pub_idx` (`fk_id_pub`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `leitor`
--
ALTER TABLE `leitor`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`id_pub`),
  ADD KEY `id_autor_idx` (`fk_id_autor`),
  ADD KEY `id_editora_idx` (`fk_id_editora`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `editora`
--
ALTER TABLE `editora`
  MODIFY `id_editora` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `exemplar`
--
ALTER TABLE `exemplar`
  MODIFY `id_exemplar` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `id_pub` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `exemplar`
--
ALTER TABLE `exemplar`
  ADD CONSTRAINT `id_pub` FOREIGN KEY (`fk_id_pub`) REFERENCES `publicacao` (`id_pub`);

--
-- Limitadores para a tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD CONSTRAINT `id_autor` FOREIGN KEY (`fk_id_autor`) REFERENCES `autor` (`id_autor`),
  ADD CONSTRAINT `id_editora` FOREIGN KEY (`fk_id_editora`) REFERENCES `editora` (`id_editora`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
