-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 25-Fev-2016 às 14:56
-- Versão do servidor: 5.6.27
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `mensagem` text,
  `datahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `nome`, `mensagem`, `datahora`) VALUES
(18, 'j', 'ss', '2016-02-25 04:18:40'),
(19, 'Junior Mollo', 'l', '2016-02-25 09:42:52'),
(20, 'Junior Mollo', 'bom dia', '2016-02-25 09:54:20'),
(21, 'wandry', 'bom dia msm', '2016-02-25 09:56:00'),
(22, 'Junior Mollo', 'la', '2016-02-25 09:58:43'),
(23, 'wandry', 'oi', '2016-02-25 09:59:06'),
(24, 'Junior Mollo', 'q', '2016-02-25 09:59:15'),
(25, 'wandry', 'bb', '2016-02-25 10:00:25'),
(26, 'Junior Mollo', 'rr', '2016-02-25 10:00:38'),
(27, 'Junior Mollo', 'oi wan', '2016-02-25 10:02:58'),
(28, 'wandry', 'oi', '2016-02-25 10:03:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
