-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Jul-2023 às 23:58
-- Versão do servidor: 8.0.31
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemadeventas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_almacen`
--

DROP TABLE IF EXISTS `tb_almacen`;
CREATE TABLE IF NOT EXISTS `tb_almacen` (
  `id_producto` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci,
  `stock` int NOT NULL,
  `stock_minimo` int DEFAULT NULL,
  `stock_maximo` int DEFAULT NULL,
  `precio_compra` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio_venta` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci,
  `id_usuario` int NOT NULL,
  `id_categoria` int NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Extraindo dados da tabela `tb_almacen`
--

INSERT INTO `tb_almacen` (`id_producto`, `codigo`, `nombre`, `descripcion`, `stock`, `stock_minimo`, `stock_maximo`, `precio_compra`, `precio_venta`, `fecha_ingreso`, `imagen`, `id_usuario`, `id_categoria`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'P-00001', 'BUDWEISER', 'cerveja puro malte de 380ml', 570, 50, 1500, '5', '15', '2023-07-05', '2023-07-05-10-12-09__comida3.png', 1, 1, '2023-07-05 09:48:04', '2023-07-05 22:12:09'),
(2, 'P-00002', 'ANTARTICA', 'cerveja brasileira', 750, 50, 1500, '7', '18', '2023-07-05', '2023-07-05-07-43-17__cerveja1.png', 1, 2, '2023-07-05 19:43:17', '0000-00-00 00:00:00'),
(3, 'P-00003', 'Coca-Cola', 'refrigerante de 3 litros', 350, 15, 800, '6', '15', '2023-07-05', '2023-07-05-07-44-34__refri3.jpg', 1, 4, '2023-07-05 19:44:34', '2023-07-05 21:38:49'),
(4, 'P-00004', 'FANTA LARANJA', 'em lata ', 150, 15, 100, '3', '8', '2023-07-06', '2023-07-06-06-56-14__refri1.jpg', 1, 4, '2023-07-06 18:56:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categorias`
--

DROP TABLE IF EXISTS `tb_categorias`;
CREATE TABLE IF NOT EXISTS `tb_categorias` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Extraindo dados da tabela `tb_categorias`
--

INSERT INTO `tb_categorias` (`id_categoria`, `nombre_categoria`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'LIQUIDOS', '2023-07-02 14:16:52', '2023-07-02 14:16:52'),
(2, 'BEBIDAS', '2023-07-02 12:08:32', '0000-00-00 00:00:00'),
(3, 'FRUTAS', '2023-07-02 12:09:44', '2023-07-02 16:33:37'),
(4, 'DIVERSOS', '2023-07-02 12:11:44', '0000-00-00 00:00:00'),
(5, 'VERDURAS', '2023-07-02 12:15:13', '0000-00-00 00:00:00'),
(6, 'CHOCOLATES', '2023-07-02 12:15:50', '0000-00-00 00:00:00'),
(7, 'ELETRÔNICOS', '2023-07-03 07:17:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_compras`
--

DROP TABLE IF EXISTS `tb_compras`;
CREATE TABLE IF NOT EXISTS `tb_compras` (
  `id_compra` int NOT NULL AUTO_INCREMENT,
  `id_producto` int NOT NULL,
  `nro_compra` int NOT NULL,
  `fecha_compra` datetime NOT NULL,
  `id_proveedor` int NOT NULL,
  `comprobante` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_usuario` int NOT NULL,
  `precio_compra` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cantidad` int NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `id_producto` (`id_producto`),
  KEY `id_proveedor` (`id_proveedor`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Extraindo dados da tabela `tb_compras`
--

INSERT INTO `tb_compras` (`id_compra`, `id_producto`, `nro_compra`, `fecha_compra`, `id_proveedor`, `comprobante`, `id_usuario`, `precio_compra`, `cantidad`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 1, 1, '2023-07-05 13:35:48', 5, 'FATURA', 1, '200', 50, '2023-07-05 13:35:48', '2023-07-05 13:35:48'),
(2, 1, 2, '2023-07-06 00:00:00', 6, 'FATURA 2525', 1, '6200', 120, '2023-07-06 16:41:07', '0000-00-00 00:00:00'),
(3, 3, 3, '2023-07-06 00:00:00', 5, 'NF 6633', 1, '7200', 50, '2023-07-06 16:45:29', '0000-00-00 00:00:00'),
(4, 1, 4, '2023-07-06 00:00:00', 6, 'FATURA 25251515', 1, '7500', 70, '2023-07-06 18:47:23', '0000-00-00 00:00:00'),
(5, 1, 4, '2023-07-06 00:00:00', 6, 'FATURA 25251515', 1, '7500', 70, '2023-07-06 18:47:26', '0000-00-00 00:00:00'),
(6, 1, 4, '2023-07-06 00:00:00', 6, 'FATURA 25251515', 1, '7500', 70, '2023-07-06 18:47:30', '0000-00-00 00:00:00'),
(7, 3, 7, '2023-07-06 00:00:00', 5, 'DATURA 484848', 1, '6800', 50, '2023-07-06 18:49:53', '0000-00-00 00:00:00'),
(8, 2, 8, '2023-07-06 00:00:00', 6, 'FATURA 363636', 1, '7500', 250, '2023-07-06 18:53:15', '0000-00-00 00:00:00'),
(9, 4, 9, '2023-07-06 00:00:00', 6, 'NF 362514', 1, '300', 100, '2023-07-06 18:57:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_proveedores`
--

DROP TABLE IF EXISTS `tb_proveedores`;
CREATE TABLE IF NOT EXISTS `tb_proveedores` (
  `id_proveedor` int NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `celular` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `empresa` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Extraindo dados da tabela `tb_proveedores`
--

INSERT INTO `tb_proveedores` (`id_proveedor`, `nombre_proveedor`, `celular`, `telefono`, `empresa`, `email`, `direccion`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(5, 'Shelton Oliveira', '991954715', '35381515', 'Tecsys', 'shelton.oliveira.barbosa@gmail.com', 'RUA PROJETADA, S/Nº', '2023-07-05 10:17:16', '2023-07-06 09:32:11'),
(6, 'Gilson Gomes', '991995858', '35381515', 'GGT Comercio', 'gilson.ggt@gmail.com', 'Centro, Vila Ildemar', '2023-07-06 09:30:49', '2023-07-06 09:32:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_roles`
--

DROP TABLE IF EXISTS `tb_roles`;
CREATE TABLE IF NOT EXISTS `tb_roles` (
  `id_rol` int NOT NULL AUTO_INCREMENT,
  `rol` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Extraindo dados da tabela `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `rol`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'ADMINISTRADOR', '2023-07-01 17:36:02', '2023-07-01 17:36:02'),
(2, 'VENDEDOR', '2023-07-01 17:12:34', '2023-07-01 17:48:47'),
(3, 'CONTADOR', '2023-07-01 18:23:47', '0000-00-00 00:00:00'),
(4, 'ENCARREGADO', '2023-07-01 22:01:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password_user` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_rol` int NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombres`, `email`, `password_user`, `token`, `id_rol`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'Shelton Oliveira', 'shelton@shelton.com', '$2y$10$6/I4YdR4fiG3kmLyBvnTYudFPSChDRr5nQg4hU2ukaPgnsNxoAv12', '', 1, '2023-07-02 13:54:48', '2023-07-03 20:43:20');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_almacen`
--
ALTER TABLE `tb_almacen`
  ADD CONSTRAINT `tb_almacen_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categorias` (`id_categoria`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_almacen_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_compras`
--
ALTER TABLE `tb_compras`
  ADD CONSTRAINT `tb_compras_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `tb_proveedores` (`id_proveedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_compras_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `tb_almacen` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_compras_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
