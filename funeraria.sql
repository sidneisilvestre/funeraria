-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jan-2020 às 21:00
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `funeraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas`
--

CREATE TABLE `despesas` (
  `id` int(3) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `km` int(7) NOT NULL,
  `despesa` int(7) NOT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `evento_id` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `despesas`
--

INSERT INTO `despesas` (`id`, `nome`, `km`, `despesa`, `obs`, `evento_id`) VALUES
(1, 'zé ninguém', 50, 90, 'gasolina', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(9) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cpf` int(14) NOT NULL,
  `telefone1` int(20) NOT NULL,
  `telefone2` int(20) NOT NULL,
  `email` varchar(90) NOT NULL,
  `produto_id` varchar(100) DEFAULT NULL,
  `receita` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `cpf`, `telefone1`, `telefone2`, `email`, `produto_id`, `receita`) VALUES
(1, 'mario silveira', 2147483647, 2147483647, 2147483647, 'mario@ce.gov.br', '0', NULL),
(2, 'augustinho', 2147483647, 2147483647, 2147483647, 'guto@gel.com', '0', NULL),
(3, 'Gerson Canhota', 2147483647, 2147483647, 2147483647, 'guto@gel.com', '0', NULL),
(4, 'Dércio Vilares', 2147483647, 2147483647, 2147483647, 'guto@gel.com', 'Array', NULL),
(5, 'mírio silva', 43, 4322, 4322, 'mirio@te.com', 'Array', NULL),
(6, 'karla silva', 3049380, 2147483647, 0, 'carla@teste.com', 'Array', NULL),
(7, 'edson silveira', 2147483647, 2147483647, 2147483647, 'edson/@silv.com', 'Array', NULL),
(8, 'edson silveira', 2147483647, 2147483647, 2147483647, 'edson/@silv.com', 'Array', NULL),
(9, 'ester  vizinha', 43, 4333, 43, 'ddssss@paul.com', 'Array', NULL),
(10, 'zé ninguém', 343, 443333321, 44445, 't344@vail.com', 'caixão, caixãozinho', 12000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(3) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(1, ' Véu de luxo específico para ornamentação de urna', '800'),
(2, ' Ornamentação de urna com flores ou edredom de cetim', '1500'),
(3, ' Registro de óbito junto ao cartório, bem como toda a documentação necessária para o sepultamento', '4500'),
(4, ' Atendimento humano e profissionalizado', '1300'),
(5, ' Necromaquiagem', '1200'),
(6, 'urna mortuária de madeira', '0'),
(7, 'caixão madeira', '0'),
(8, 'maquiagem', '0'),
(9, 'choreadeira', '0'),
(10, 'teste', '0'),
(11, 'texto', ''),
(12, 'texto3', ''),
(13, 'caixão infantil', ''),
(14, 'teste no banco', '550'),
(15, 'utf8 arrumado', ''),
(16, 'caixãogordão', '500,95');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `despesas`
--
ALTER TABLE `despesas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `despesas`
--
ALTER TABLE `despesas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
