-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jul-2021 às 00:42
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
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `pseudonimo`, `nome`) VALUES
(1, 'Edson Endrigo', 'Edson Endrigo Silva'),
(2, 'Rafael Antunes Dias', 'Rafael Antunes Dias'),
(3, 'J. K. Rowling', 'Joanne Kathleen Rowling'),
(4, 'Marianum', 'Mariano de Caprium');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE `editora` (
  `id_editora` int NOT NULL,
  `nome` varchar(45) NOT NULL,
  `representante` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `editora`
--

INSERT INTO `editora` (`id_editora`, `nome`, `representante`) VALUES
(1, 'Pearson', ' Samuel Pearson'),
(2, 'ThomsonReuters', 'Steve Hasker');

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
  `senha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `leitor`
--

INSERT INTO `leitor` (`cpf`, `matricula`, `nome`, `senha`) VALUES
('1', '2', 'Pedro Silva', '123'),
('root-user', 'root-user', 'administrador', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `id_pub` int NOT NULL,
  `exemplares` int NOT NULL,
  `tipo` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titulo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fk_id_autor` int NOT NULL,
  `fk_id_editora` int NOT NULL,
  `data_publicacao` date NOT NULL,
  `paginas` int NOT NULL,
  `lingua` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `publicacao`
--

INSERT INTO `publicacao` (`id_pub`, `exemplares`, `tipo`, `titulo`, `fk_id_autor`, `fk_id_editora`, `data_publicacao`, `paginas`, `lingua`) VALUES
(1, 3, 'Livro Fantasia', 'Harry Potter e a Pedra Filosofal', 3, 1, '2001-07-05', 250, 'Português'),
(2, 5, 'Programação', 'Código Limpo', 1, 1, '2021-07-06', 500, 'Inglês');

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
  MODIFY `id_autor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `editora`
--
ALTER TABLE `editora`
  MODIFY `id_editora` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `id_pub` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

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
