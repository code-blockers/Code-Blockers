-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2023 às 18:38
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `7ssoqueedaora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_usuarios` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id_cliente` int(11) NOT NULL,
  `in_produto` int(11) DEFAULT NULL,
  `quantidade` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_fornecedor` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `preço` int(30) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `modelo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `marca`, `preço`, `imagem`, `modelo`) VALUES
(3, 'AIR FORCE BRANCO', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.dE8ePEoXPFaVjLugh6IRswHaHa&pid=Api&P=0&h=180', 'air force'),
(4, 'AIR FORCE BRANCO AZUL BEBÊ', 'nike', 259, 'https://tse4.mm.bing.net/th?id=OIP.lZ3ow0VUBmSohKf4-wIPzgHaEQ&pid=Api&P=0&h=180', 'air force'),
(5, 'AIR FORCE VIOLETA', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.DDqZc_hH0cRogQ8LPu7TTAHaHa&pid=Api&P=0&h=180', 'air force'),
(6, 'AIR FORCE 1 WHITE GREEN', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.6rKWvoOcOeTayH17apmXRwHaFM&pid=Api&P=0&h=180', 'air force'),
(7, 'AIR FORCE 1 WHITE ROSE', 'nike', 259, 'https://tse3.mm.bing.net/th?id=OIP.Yx-ixXHzGIgl3KRgrf7-JgHaFM&pid=Api&P=0&h=180', 'air force'),
(8, 'AIR FORCE LARANJA', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.-5zI880i-HxP4B1J8k9sdwHaFS&pid=Api&P=0&h=180', 'air force'),
(15, 'JORDAN 1 LOW ALT INFANTIL VERMELHO E PRETO', 'nike', 259, 'https://tse2.mm.bing.net/th?id=OIP.6WIwjJA7ZwIjZBWhgD8bPAHaEw&pid=Api&P=0&h=180', 'infantil'),
(16, 'TÊNIS NIKE PICO 5 INFANTIL', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.FgZOVfZr9k1hAykWJwZjcgHaHa&pid=Api&P=0&h=180', 'infantil'),
(17, 'TÊNIS JORDAN 1 LOW ALT VERMELHO E PRETO', 'nike', 259, 'https://tse3.mm.bing.net/th?id=OIP.l57-B4bRZBceb_kG0nBo8AHaHa&pid=Api&P=0&h=180', 'infantil'),
(18, 'BOTA CANO ALTO AIR BLACK', 'nike', 259, 'https://tse4.mm.bing.net/th?id=OIP.zPZVy-0GcyAUtlHMwGqgBwHaHa&pid=Api&P=0&h=180', 'infantil'),
(19, 'BOTA CANO ALTO AIR ROSA', 'nike', 259, 'https://tse4.mm.bing.net/th?id=OIP.lhZyfq8djFOwLOmHn1PChQHaE8&pid=Api&P=0&h=180', 'infantil'),
(20, 'JORDAN 1 LOW ALT INFANTIL VIOLETA', 'nike', 259, 'https://tse2.mm.bing.net/th?id=OIP.SkTXRGV5iCys_qsFT6m4FwHaHa&pid=Api&P=0&h=180', 'infantil'),
(21, 'NIKE AIR JORDAN MID AZUL', 'nike', 259, 'https://tse4.mm.bing.net/th?id=OIP.H1IrDSJm0biz-uW0um8HwAHaEc&pid=Api&P=0&h=180', 'air jordan'),
(22, 'NIKE AIR JORDAN VERMELHO', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.RNR3RU1TvIRhO12H4EHzXQHaHa&pid=Api&P=0&h=180', 'air jordan'),
(23, 'NIKE AIR JORDAN CINZA', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.ay8wdROJNE7s5C3YR6aD1wHaE8&pid=Api&P=0&h=180', 'air jordan'),
(24, 'NIKE AIR JORDAN PRETO', 'nike', 259, 'https://tse4.mm.bing.net/th?id=OIP._zZzjmV-_qkaja356S0XtQHaEe&pid=Api&P=0&h=180', 'air jordan'),
(25, 'NIKE AIR JORDAN BRANCO', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.Yn1vRxci2kloheH0TmKV1wHaFL&pid=Api&P=0&h=180', 'air jordan'),
(26, 'NIKE AIR JORDAN PSG', 'nike', 259, 'https://tse2.mm.bing.net/th?id=OIP.WzrkW3iEvb0wxLecn0gkVAHaEo&pid=Api&P=0&h=180', 'air jordan'),
(27, 'NIKE AIR JORDAN MID AZUL', 'nike', 259, 'https://tse4.mm.bing.net/th?id=OIP.H1IrDSJm0biz-uW0um8HwAHaEc&pid=Api&P=0&h=180', 'mais vendidos'),
(33, 'NIKE DUNK LOW TRAVIS SCOTT', 'nike', 259, 'https://tse3.mm.bing.net/th?id=OIP.3x6E3-r0gXx_EWL_YxFHqAHaF7&pid=Api&P=0&h=180', 'mais vendidos'),
(34, 'AIR FORCE VIOLETA', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.DDqZc_hH0cRogQ8LPu7TTAHaHa&pid=Api&P=0&h=180', 'mais vendidos'),
(35, 'BOTA CANO ALTO AIR ROSA', 'nike', 259, 'https://tse4.mm.bing.net/th?id=OIP.lhZyfq8djFOwLOmHn1PChQHaE8&pid=Api&P=0&h=180', 'mais vendidos'),
(36, 'NIKE AIR JORDAN BRANCO', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.Yn1vRxci2kloheH0TmKV1wHaFL&pid=Api&P=0&h=180', 'mais vendidos'),
(37, 'NIKE AIR JORDAN CINZA', 'nike', 259, 'https://tse1.mm.bing.net/th?id=OIP.ay8wdROJNE7s5C3YR6aD1wHaE8&pid=Api&P=0&h=180', 'mais vendidos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cpf` int(20) DEFAULT NULL,
  `senha` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `cpf`, `senha`) VALUES
(20, '', 0, ''),
(21, '', 0, ''),
(22, '', 0, ''),
(23, '', 0, ''),
(24, '', 0, ''),
(25, '', 0, ''),
(26, '', 0, ''),
(27, '', 0, ''),
(28, 'fernando.g.albanez@gmail.com', 2147483647, '12345'),
(29, 'leonardoroccio@gmail.com', 2147483647, 'loli'),
(30, 'rogerio.morandi@gmail.com', 2147483647, 'loli');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
