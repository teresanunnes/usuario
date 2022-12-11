-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 08-Nov-2018 às 00:14
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `foto`)  VALUES
(1, 'Teresa', 'teresa@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 'http://localhost/usuarios/uploads/teresa.jpg');
(2, 'Simone', 'simone@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', 'http://localhost/usuarios/uploads/simone.jpg');
(3, 'Gustavo', 'gustavo@gmail.com', 'b7bc2a2f5bb6d521e64c8974c143e9a0', 'http://localhost/usuarios/uploads/gustavo.jpg');
(4, 'Gabriel', 'gabriel@gmail.com', '79b7cdcd14db14e9cb498f1793817d69', 'http://localhost/usuarios/uploads/gabriel.jpg');
(5, 'Felipe', 'felipe@gmail.com', 'c5fe25896e49ddfe996db7508cf00534', 'http://localhost/usuarios/uploads/felipe.jpg');
(6, 'Jeferson', 'jeferson@gmail.com', 'ae8b5aa26a3ae31612eec1d1f6ffbce9', 'http://localhost/usuarios/uploads/jeferson.jpg');
(7, 'Antonio', 'antonio@gmail.com', '22a4d9b04fe95c9893b41e2fde83a427', 'http://localhost/usuarios/uploads/antonio.jpg');

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `veiculo`
