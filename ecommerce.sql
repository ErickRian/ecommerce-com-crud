-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11/12/2022 às 20:46
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cadastro` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `CEP` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produtos` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `promocao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `nome`, `descricao`, `imagem`, `preco`, `promocao`) VALUES
(1, 'Placa de vídeo', 'placa de vídeo', 'placadevideo.jpg', 500, 0),
(3, 'cooler', 'cooler foda', 'cooler.jpg', 12, 1),
(5, 'cabo ethernet', 'cabo ethernet clássico', 'ethernet.jpg', 20, 0),
(7, 'gabinete', 'gabinete gamer', 'gabinete.jpg', 800, 0),
(9, 'monitor', 'monitor gamer', 'monitor.png', 2000, 1),
(11, 'mouse', 'mouse gamer', 'mouse.jpg', 200, 1),
(13, 'Playstation 5', 'aquele que parece ar-condicionado', 'ps5.png', 4000, 0),
(15, 'ryzen', 'só perde pro celeron', 'ryzen.jpg', 900, 1),
(17, 'xbox', 'microsoft fazendo fama', 'xbox.jpg', 4000, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cadastro`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produtos`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produtos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

