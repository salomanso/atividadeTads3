-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/07/2025 às 04:30
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hdtur`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `idUsuario` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `dataCompra` date NOT NULL,
  `horaCompra` date NOT NULL,
  `valorCompra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `compras`
--

INSERT INTO `compras` (`idUsuario`, `idProduto`, `dataCompra`, `horaCompra`, `valorCompra`) VALUES
(2, 1, '2025-07-07', '0000-00-00', 400),
(4, 1, '2025-07-07', '0000-00-00', 400);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL,
  `fotoProduto` varchar(150) NOT NULL,
  `nomeProduto` varchar(40) NOT NULL,
  `descricaoProduto` varchar(80) NOT NULL,
  `valorProduto` int(11) NOT NULL,
  `statusProduto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `fotoProduto`, `nomeProduto`, `descricaoProduto`, `valorProduto`, `statusProduto`) VALUES
(1, 'img/kaue.jpg', 'Viagem para', 'vfiagem', 100, 'esgotado'),
(2, 'img/istockphoto-164414495-612x612.jpg', 'Viagem para', 'viagemdmdfe', 111, 'disponivel'),
(3, 'img/28186832-dinheiro-desenho-animado-ilustracao-voo-dolar-plano-icone-esboco-vetor.jpg', 'Sp', 'Viagem legal!', 222, 'disponivel');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `fotoUsuario` varchar(255) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `dataNascimentoUsuario` date NOT NULL,
  `cidadeUsuario` varchar(30) NOT NULL,
  `telefoneUsuario` varchar(20) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL,
  `tipoUsuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `fotoUsuario`, `nomeUsuario`, `dataNascimentoUsuario`, `cidadeUsuario`, `telefoneUsuario`, `emailUsuario`, `senhaUsuario`, `tipoUsuario`) VALUES
(1, 'img/cafeteiraoo.jpg', 'Salo', '1111-11-11', 'telemacoBorba', '(11) 11111-1111', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 'administrador'),
(2, 'img/cavalo2.jpg', 'salo', '1111-11-11', 'telemacoBorba', '(11) 11111-1111', 'test1@gmail.com', '698d51a19d8a121ce581499d7b701668', 'cliente'),
(3, 'img/Te9kLU8iLiMrKCEi8cs3a24foSgi_6lYJfpmrEPKGs64yWktqHy46lwxwcQobPMT-vYCaxCo57NVwAnE-flvtQ.webp', 'salos', '1111-11-11', 'telemacoBorba', '(11) 11111-1111', 'test3@gmail.com', '202cb962ac59075b964b07152d234b70', 'cliente'),
(4, 'img/istockphoto-164414495-612x612.jpg', 'saloss', '1111-11-11', 'telemacoBorba', '(11) 11111-1111', 'teste1@gmail.com', '698d51a19d8a121ce581499d7b701668', 'cliente'),
(5, 'img/istockphoto-164414495-612x612.jpg', 'teste', '1111-11-11', 'telemacoBorba', '(11) 11111-1111', 'teste4@gmail.com', '698d51a19d8a121ce581499d7b701668', 'cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
