-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/02/2026 às 11:19
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
-- Banco de dados: `copa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificacao`
--

CREATE TABLE `classificacao` (
  
  `id` int(11) NOT NULL,
  `selecao_id` int(11) DEFAULT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  `pontos` int(11) DEFAULT 0,
  `vitorias` int(11) DEFAULT 0,
  `empates` int(11) DEFAULT 0,
  `derrotas` int(11) DEFAULT 0,
  `gols_marcados` int(11) DEFAULT 0,
  `gols_sofridos` int(11) DEFAULT 0,
  `saldo_gols` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `classificacao`
--

INSERT INTO `classificacao` (`id`, `selecao_id`, `grupo_id`, `pontos`, `vitorias`, `empates`, `derrotas`, `gols_marcados`, `gols_sofridos`, `saldo_gols`) VALUES
(8, 14, 1, 0, 0, 0, 0, 0, 0, 0),
(9, 15, 1, 0, 0, 0, 0, 0, 0, 0),
(10, 16, 1, 0, 0, 0, 0, 0, 0, 0),
(11, 17, 1, 0, 0, 0, 0, 0, 0, 0),
(12, 18, 2, 3, 1, 0, 0, 6, 2, 4),
(13, 19, 2, 0, 0, 0, 1, 2, 6, -4),
(14, 20, 2, 3, 1, 0, 0, 2, 1, 1),
(15, 21, 2, 0, 0, 0, 1, 1, 2, -1),
(16, 22, 3, 0, 0, 0, 1, 1, 2, -1),
(17, 23, 3, 3, 1, 0, 0, 2, 1, 1),
(18, 24, 3, 1, 0, 1, 0, 0, 0, 0),
(19, 25, 3, 1, 0, 1, 0, 0, 0, 0),
(20, 26, 4, 3, 1, 0, 0, 4, 2, 2),
(21, 27, 4, 0, 0, 0, 1, 2, 4, -2),
(22, 28, 4, 1, 0, 1, 0, 0, 0, 0),
(23, 29, 4, 1, 0, 1, 0, 0, 0, 0),
(24, 30, 5, 3, 1, 0, 0, 7, 0, 7),
(25, 31, 5, 0, 0, 0, 1, 0, 7, -7),
(26, 32, 5, 6, 2, 0, 1, 11, 4, 7),
(27, 33, 5, 3, 1, 0, 2, 4, 11, -7),
(28, 34, 6, 3, 1, 0, 0, 1, 0, 1),
(29, 35, 6, 0, 0, 0, 1, 0, 1, -1),
(30, 36, 6, 1, 0, 1, 0, 0, 0, 0),
(31, 37, 6, 1, 0, 1, 0, 0, 0, 0),
(32, 38, 7, 3, 1, 0, 0, 2, 1, 1),
(33, 39, 7, 0, 0, 0, 1, 1, 2, -1),
(34, 40, 7, 0, 0, 0, 1, 0, 1, -1),
(35, 41, 8, 3, 1, 0, 0, 3, 2, 1),
(36, 42, 8, 0, 0, 0, 1, 2, 3, -1),
(37, 43, 8, 1, 0, 1, 0, 0, 0, 0),
(38, 44, 8, 1, 0, 1, 0, 0, 0, 0),
(39, 45, 7, 3, 1, 0, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `nome` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `grupos`
--

INSERT INTO `grupos` (`id`, `nome`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(8, 'H');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `mandante` int(11) DEFAULT NULL,
  `visitante` int(11) DEFAULT NULL,
  `gols_mandante` int(11) DEFAULT NULL,
  `gols_visitante` int(11) DEFAULT NULL,
  `estadio` varchar(100) DEFAULT NULL,
  `data_jogo` datetime DEFAULT NULL,
  `grupo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogos`
--

INSERT INTO `jogos` (`id`, `mandante`, `visitante`, `gols_mandante`, `gols_visitante`, `estadio`, `data_jogo`, `grupo`) VALUES
(8, 14, 15, 0, 2, 'Al Bayt Stadium', '2022-11-20 13:00:00', 'A'),
(9, 16, 17, 0, 2, 'Al Thumama', '2022-11-21 07:00:00', 'A'),
(10, 18, 19, 6, 2, 'Khalifa', '2022-11-21 10:00:00', 'B'),
(11, 20, 21, 1, 1, ' Ahmad Bin Ali (Al Rayyan)', '2022-11-21 16:00:00', 'B'),
(12, 22, 23, 1, 2, 'Lusail', '2022-11-22 07:00:00', 'C'),
(13, 24, 25, 0, 0, 'Education City', '2022-11-22 10:00:00', 'C'),
(14, 28, 29, 0, 0, ' 974 (Porto de Doha)', '2022-11-22 13:00:00', 'D'),
(15, 26, 27, 4, 1, 'Al Janoub (Al Wakrah)', '2022-11-22 16:00:00', 'D'),
(16, 36, 37, 0, 0, 'Al Bayt', '2022-11-23 07:00:00', 'F'),
(17, 32, 33, 1, 2, 'Khalifa', '2022-11-23 10:00:00', 'E'),
(18, 30, 31, 7, 0, 'Al Thumama', '2022-11-23 13:00:00', 'E'),
(19, 34, 35, 1, 0, 'Ahmad Bin Ali (Al Rayyan)', '2022-11-23 16:00:00', 'F'),
(20, 45, 40, 1, 0, 'Lusail', '2022-11-24 07:00:00', 'G'),
(21, 43, 44, 0, 0, 'Education City', '2022-11-24 10:00:00', 'H'),
(22, 41, 42, 3, 2, '974 (Porto de Doha)', '2022-11-24 13:00:00', 'H'),
(23, 38, 39, 2, 0, 'Lusail', '2022-11-24 16:00:00', 'G'),
(24, 32, 33, 5, 1, 'Al Bayt Stadium', '2020-02-22 15:00:00', 'A');

-- --------------------------------------------------------

--
-- Estrutura para tabela `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `jogo_id` int(11) DEFAULT NULL,
  `gols_mandante` int(11) DEFAULT NULL,
  `gols_visitante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `resultados`
--

INSERT INTO `resultados` (`id`, `jogo_id`, `gols_mandante`, `gols_visitante`) VALUES
(1, 8, 0, 2),
(4, 9, 0, 2),
(11, 10, 6, 2),
(12, 11, 2, 1),
(13, 12, 1, 2),
(14, 13, 0, 0),
(15, 14, 0, 0),
(16, 15, 4, 2),
(17, 16, 0, 0),
(18, 17, 1, 2),
(19, 18, 7, 0),
(20, 19, 1, 0),
(21, 20, 1, 0),
(22, 21, 0, 0),
(23, 22, 3, 2),
(24, 23, 2, 1),
(25, 24, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `selecoes`
--

CREATE TABLE `selecoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `continente` varchar(50) DEFAULT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  `pontos` int(11) DEFAULT 0,
  `vitorias` int(11) DEFAULT 0,
  `empates` int(11) DEFAULT 0,
  `derrotas` int(11) DEFAULT 0,
  `saldo_gols` int(11) DEFAULT 0,
  `gols_marcados` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `selecoes`
--

INSERT INTO `selecoes` (`id`, `nome`, `continente`, `grupo_id`, `pontos`, `vitorias`, `empates`, `derrotas`, `saldo_gols`, `gols_marcados`) VALUES
(14, 'Qatar', 'Asía', 1, 0, 0, 0, 0, 0, 0),
(15, 'Equador', 'America', 1, 0, 0, 0, 0, 0, 0),
(16, 'Senegal', 'África', 1, 0, 0, 0, 0, 0, 0),
(17, 'Holanda', 'Europa', 1, 0, 0, 0, 0, 0, 0),
(18, 'Inglaterra', 'Europa', 2, 0, 0, 0, 0, 0, 0),
(19, 'Irã', 'Asía', 2, 0, 0, 0, 0, 0, 0),
(20, 'Estados Unidos', 'America', 2, 0, 0, 0, 0, 0, 0),
(21, 'País de Gales', 'Europa', 2, 0, 0, 0, 0, 0, 0),
(22, 'Argentina', 'America', 3, 0, 0, 0, 0, 0, 0),
(23, 'Arábia Saudita', 'Asía', 3, 0, 0, 0, 0, 0, 0),
(24, 'México', 'America', 3, 0, 0, 0, 0, 0, 0),
(25, 'Polônia', 'Europa', 3, 0, 0, 0, 0, 0, 0),
(26, 'França', 'Europa', 4, 0, 0, 0, 0, 0, 0),
(27, 'Austrália', 'Oceania', 4, 0, 0, 0, 0, 0, 0),
(28, 'Dinamarca', 'Europa', 4, 0, 0, 0, 0, 0, 0),
(29, 'Tunísia', 'Europa', 4, 0, 0, 0, 0, 0, 0),
(30, 'Espanha', 'Europa', 5, 0, 0, 0, 0, 0, 0),
(31, 'Costa Rica', 'America', 5, 0, 0, 0, 0, 0, 0),
(32, 'Alemanha', 'Europa', 5, 0, 0, 0, 0, 0, 0),
(33, 'Japão', 'Asía', 5, 0, 0, 0, 0, 0, 0),
(34, 'Bélgica', 'Europa', 6, 0, 0, 0, 0, 0, 0),
(35, 'Canadá', 'America', 6, 0, 0, 0, 0, 0, 0),
(36, 'Marrocos', 'África', 6, 0, 0, 0, 0, 0, 0),
(37, 'Croácia', 'Europa', 6, 0, 0, 0, 0, 0, 0),
(38, 'Brasil', 'America', 7, 0, 0, 0, 0, 0, 0),
(39, 'Sérvia', 'Europa', 7, 0, 0, 0, 0, 0, 0),
(40, 'Camarões', 'África', 7, 0, 0, 0, 0, 0, 0),
(41, 'Portugal', 'Europa', 8, 0, 0, 0, 0, 0, 0),
(42, 'Gana', 'África', 8, 0, 0, 0, 0, 0, 0),
(43, 'Uruguai', 'America', 8, 0, 0, 0, 0, 0, 0),
(44, 'Coreia do Sul', 'Asía', 8, 0, 0, 0, 0, 0, 0),
(45, 'Suiça', 'Europa', 7, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `selecao_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `idade`, `cargo`, `selecao_id`) VALUES
(1, 'Lucas Paquetá', 24, 'Meia', 38),
(2, 'Vini Jr', 22, 'Atacante', 38),
(3, 'Cristiano Ronaldo', 37, 'Atacante', 41),
(4, 'Neymar Jr', 34, 'Atacante', 38),
(5, 'Marquinhos', 28, 'Zagueiro', 38);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `classificacao`
--
ALTER TABLE `classificacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `selecao_id` (`selecao_id`),
  ADD KEY `grupo_id` (`grupo_id`);

--
-- Índices de tabela `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mandante` (`mandante`),
  ADD KEY `visitante` (`visitante`);

--
-- Índices de tabela `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jogo_id` (`jogo_id`);

--
-- Índices de tabela `selecoes`
--
ALTER TABLE `selecoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupo_id` (`grupo_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `selecao_id` (`selecao_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `classificacao`
--
ALTER TABLE `classificacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `selecoes`
--
ALTER TABLE `selecoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `classificacao`
--
ALTER TABLE `classificacao`
  ADD CONSTRAINT `classificacao_ibfk_1` FOREIGN KEY (`selecao_id`) REFERENCES `selecoes` (`id`),
  ADD CONSTRAINT `classificacao_ibfk_2` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`);

--
-- Restrições para tabelas `jogos`
--
ALTER TABLE `jogos`
  ADD CONSTRAINT `jogos_ibfk_1` FOREIGN KEY (`mandante`) REFERENCES `selecoes` (`id`),
  ADD CONSTRAINT `jogos_ibfk_2` FOREIGN KEY (`visitante`) REFERENCES `selecoes` (`id`);

--
-- Restrições para tabelas `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`jogo_id`) REFERENCES `jogos` (`id`);

--
-- Restrições para tabelas `selecoes`
--
ALTER TABLE `selecoes`
  ADD CONSTRAINT `selecoes_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`);

--
-- Restrições para tabelas `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`selecao_id`) REFERENCES `selecoes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
