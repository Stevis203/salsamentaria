-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para salsamentaria1
CREATE DATABASE IF NOT EXISTS `salsamentaria1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `salsamentaria1`;

-- Volcando estructura para tabla salsamentaria1.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `codigoAdministrador` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `documento` varchar(40) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correoElectronico` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoAdministrador`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.administrador: ~0 rows (aproximadamente)
INSERT INTO `administrador` (`codigoAdministrador`, `nombre`, `documento`, `telefono`, `correoElectronico`, `created_at`, `updated_at`) VALUES
	(50, 'Andres', '1057185987', '3214982343', 'andresl@gmail.com', NULL, NULL),
	(51, 'Julian', '1005676546', '3203087654', 'julian@gmail.com', NULL, NULL),
	(52, 'Paula', '1057186546', '3214986543', 'paula@gmail.com', NULL, NULL),
	(53, 'Andrea', '1057654345', '310987654', 'andrea@gmail.com', NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `codigoCategoria` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagen` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.categoria: ~0 rows (aproximadamente)
INSERT INTO `categoria` (`codigoCategoria`, `nombre`, `imagen`, `update_at`, `create_at`) VALUES
	(70, 'Quesos', 'queso.jpg', NULL, NULL),
	(71, 'Chorizos', 'chori.jpg', NULL, NULL),
	(72, 'Jamon', 'jamon.jpg', NULL, NULL),
	(73, 'Panes', 'panes.jpg', NULL, NULL),
	(74, 'Mortadela', 'mortadela.jpg', NULL, NULL),
	(75, 'Huevos', 'huevos.jpg', NULL, NULL),
	(76, 'Carnes', 'carne.jpg', NULL, NULL),
	(77, 'Pollo', 'pollo.jpg', NULL, NULL),
	(78, 'Salsas', 'salsa.jpg', NULL, NULL),
	(79, 'Obleas', 'obleas.jpg', NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.cierrecajas
CREATE TABLE IF NOT EXISTS `cierrecajas` (
  `codigoCierre` int NOT NULL AUTO_INCREMENT,
  `codigoAdministrador` int NOT NULL,
  `codigoProducto` int NOT NULL,
  `fechaHora` datetime NOT NULL,
  `cantidadEntrada` int NOT NULL,
  `cantidadSalida` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoCierre`),
  KEY `fk_cierrecajas_administrador` (`codigoAdministrador`),
  KEY `fk_cierrecajas_productos` (`codigoProducto`),
  CONSTRAINT `fk_cierrecajas_administrador` FOREIGN KEY (`codigoAdministrador`) REFERENCES `administrador` (`codigoAdministrador`),
  CONSTRAINT `fk_cierrecajas_productos` FOREIGN KEY (`codigoProducto`) REFERENCES `productos` (`codigoProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=502 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.cierrecajas: ~0 rows (aproximadamente)
INSERT INTO `cierrecajas` (`codigoCierre`, `codigoAdministrador`, `codigoProducto`, `fechaHora`, `cantidadEntrada`, `cantidadSalida`, `created_at`, `updated_at`) VALUES
	(500, 51, 101, '2023-08-17 21:25:07', 2000, 200000, NULL, NULL),
	(501, 52, 101, '2023-08-17 21:47:03', 300, 30000, NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `codigoCliente` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL DEFAULT '',
  `documento` varchar(50) NOT NULL DEFAULT '',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.clientes: ~0 rows (aproximadamente)
INSERT INTO `clientes` (`codigoCliente`, `nombre`, `apellido`, `direccion`, `telefono`, `documento`, `updated_at`, `created_at`) VALUES
	(1000, 'Daniela', 'Forero', 'Cra 10 N 0-08', '3217896578', '1057185897', NULL, NULL),
	(1001, 'Yeimy', 'Diaz', 'Cra 11 N 45 -78', '3234567889', '40025678', NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.detallefacturas
CREATE TABLE IF NOT EXISTS `detallefacturas` (
  `codigoDetalle` int NOT NULL AUTO_INCREMENT,
  `codigoFactura` int NOT NULL,
  `refencia` varchar(50) NOT NULL,
  `cantidadProducto` int NOT NULL,
  `valorProducto` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoDetalle`),
  KEY `fk_detallefacturas_factura` (`codigoFactura`),
  CONSTRAINT `detallefacturas_ibfk_1` FOREIGN KEY (`codigoFactura`) REFERENCES `facturas` (`codigoFactura`),
  CONSTRAINT `fk_detallefacturas_factura` FOREIGN KEY (`codigoFactura`) REFERENCES `facturas` (`codigoFactura`)
) ENGINE=InnoDB AUTO_INCREMENT=6002 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.detallefacturas: ~0 rows (aproximadamente)
INSERT INTO `detallefacturas` (`codigoDetalle`, `codigoFactura`, `refencia`, `cantidadProducto`, `valorProducto`, `created_at`, `updated_at`) VALUES
	(6000, 5000, 'D56', 20, 15000.00, NULL, NULL),
	(6001, 5001, 'D57', 10, 2300.00, NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.domiciliarios
CREATE TABLE IF NOT EXISTS `domiciliarios` (
  `codigodomiciliario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigodomiciliario`)
) ENGINE=InnoDB AUTO_INCREMENT=2002 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.domiciliarios: ~0 rows (aproximadamente)
INSERT INTO `domiciliarios` (`codigodomiciliario`, `nombre`, `apellido`, `documento`, `telefono`, `direccion`, `created_at`, `updated_at`) VALUES
	(2000, 'Luis', 'Pedraza', '1057185789', '321987654', 'Cra 19 N 3-78', NULL, NULL),
	(2001, 'Sergio', 'Velandia', '40027567', '3132345678', 'Cra 17 N 34-54', NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.entradaproductos
CREATE TABLE IF NOT EXISTS `entradaproductos` (
  `codigoEntrada` int NOT NULL AUTO_INCREMENT,
  `codigoProducto` int DEFAULT NULL,
  `fechaHora` datetime NOT NULL,
  `cantidadProducto` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoEntrada`),
  KEY `fk_entradaproducto_productos` (`codigoProducto`),
  CONSTRAINT `fk_entradaproducto_productos` FOREIGN KEY (`codigoProducto`) REFERENCES `productos` (`codigoProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=402 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.entradaproductos: ~0 rows (aproximadamente)
INSERT INTO `entradaproductos` (`codigoEntrada`, `codigoProducto`, `fechaHora`, `cantidadProducto`, `created_at`, `updated_at`) VALUES
	(400, NULL, '2023-08-17 21:30:44', 200, NULL, NULL),
	(401, NULL, '2023-08-17 21:49:57', 23, NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.facturas
CREATE TABLE IF NOT EXISTS `facturas` (
  `codigoFactura` int NOT NULL AUTO_INCREMENT,
  `codigoVendedor` int NOT NULL,
  `codigoCliente` int NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `fechaHora` datetime NOT NULL,
  `valorFactura` decimal(10,2) NOT NULL,
  `totalValor` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoFactura`),
  KEY `codigoVendedor` (`codigoVendedor`),
  KEY `codigoCliente` (`codigoCliente`),
  CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`codigoVendedor`) REFERENCES `vendedores` (`codigoVendedor`),
  CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`codigoCliente`) REFERENCES `clientes` (`codigoCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5002 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.facturas: ~0 rows (aproximadamente)
INSERT INTO `facturas` (`codigoFactura`, `codigoVendedor`, `codigoCliente`, `referencia`, `fechaHora`, `valorFactura`, `totalValor`, `created_at`, `updated_at`) VALUES
	(5000, 1, 1000, 'C001', '2023-08-17 21:44:06', 25000.00, 25000.00, NULL, NULL),
	(5001, 2, 1000, 'C002', '2023-08-17 21:49:34', 32000.00, 32500.00, NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla salsamentaria1.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla salsamentaria1.metodosdepagos
CREATE TABLE IF NOT EXISTS `metodosdepagos` (
  `codigoMetodopago` int NOT NULL AUTO_INCREMENT,
  `tipoPago` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoMetodopago`)
) ENGINE=InnoDB AUTO_INCREMENT=905 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.metodosdepagos: ~0 rows (aproximadamente)
INSERT INTO `metodosdepagos` (`codigoMetodopago`, `tipoPago`, `created_at`, `updated_at`) VALUES
	(900, 'Efectivo', NULL, NULL),
	(901, 'Efectivo', NULL, NULL),
	(902, 'Nequi', NULL, NULL),
	(903, 'Daviplata', NULL, NULL),
	(904, 'BBVA', NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla salsamentaria1.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- Volcando estructura para tabla salsamentaria1.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla salsamentaria1.password_resets: ~0 rows (aproximadamente)

-- Volcando estructura para tabla salsamentaria1.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla salsamentaria1.password_reset_tokens: ~0 rows (aproximadamente)
INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
	('julialll@gmail.com', '$2y$10$vHa79IUyY98oW93.hSxZ5ORYyAkyO6oeUlZjodthRu3dEF6yfhkri', '2023-08-25 03:08:00');

-- Volcando estructura para tabla salsamentaria1.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `codigoPedido` int NOT NULL AUTO_INCREMENT,
  `codigoProveedor` int NOT NULL,
  `fechaHora` datetime NOT NULL,
  `adjuntarFactura` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoPedido`),
  KEY `fk_pedidos_proveedores` (`codigoProveedor`),
  CONSTRAINT `fk_pedidos_proveedores` FOREIGN KEY (`codigoProveedor`) REFERENCES `proveedores` (`codigoProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.pedidos: ~0 rows (aproximadamente)
INSERT INTO `pedidos` (`codigoPedido`, `codigoProveedor`, `fechaHora`, `adjuntarFactura`, `created_at`, `updated_at`) VALUES
	(30, 300, '2023-08-17 21:34:19', 'Si', NULL, NULL),
	(31, 301, '2023-08-17 21:34:48', 'No', NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla salsamentaria1.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla salsamentaria1.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `codigoProducto` int NOT NULL AUTO_INCREMENT,
  `codigoCategoria` int NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `precio` decimal(12,2) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoProducto`),
  KEY `fk_productos_categoria` (`codigoCategoria`),
  CONSTRAINT `fk_productos_categoria` FOREIGN KEY (`codigoCategoria`) REFERENCES `categoria` (`codigoCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.productos: ~6 rows (aproximadamente)
INSERT INTO `productos` (`codigoProducto`, `codigoCategoria`, `nombre`, `marca`, `estado`, `precio`, `descripcion`, `imagen`, `updated_at`, `created_at`) VALUES
	(200, 71, 'Chorizo', 'Porteño', 'Disponible', 14000.00, '12 unidades', 'chorizo.png', NULL, NULL),
	(201, 70, 'Queso', 'Similac', 'Disponible', 12000.00, '1 libra de dobble crema', 'chorizo.png', NULL, NULL),
	(202, 72, 'Jamon', 'Zenú', 'Disponible', 10000.00, '1 libra de jamon', 'chorizo.png', NULL, NULL),
	(203, 73, 'Panes', 'SantaMaría', 'Disponible', 8000.00, '13 Unidades', 'chorizo.png', NULL, NULL),
	(204, 74, 'Mortadela', 'Zenu', 'Disponible', 12000.00, '1000gr', 'chorizo.png', NULL, NULL),
	(205, 70, 'Queso', 'Doble Crema', 'Disponible', 11000.00, '1 libra tajado', 'chorizo.png', NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.proveedores
CREATE TABLE IF NOT EXISTS `proveedores` (
  `codigoProveedor` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=305 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.proveedores: ~0 rows (aproximadamente)
INSERT INTO `proveedores` (`codigoProveedor`, `nombre`, `Apellido`, `created_at`, `updated_at`) VALUES
	(300, 'Felipe', 'Lopez', NULL, NULL),
	(301, 'Juliana', 'Acuña', NULL, NULL),
	(302, 'Luciana', 'Avila', NULL, NULL),
	(303, 'Adriana', 'Saenz', NULL, NULL),
	(304, 'Marcela', 'Forero', NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.transacciones
CREATE TABLE IF NOT EXISTS `transacciones` (
  `codigoTransaccion` int NOT NULL AUTO_INCREMENT,
  `codigoMetodopago` int NOT NULL,
  `codigoCliente` int NOT NULL,
  `codigoFactura` int NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoTransaccion`),
  KEY `fk_transacciones_metodopago` (`codigoMetodopago`),
  KEY `fk_transacciones_cliente` (`codigoCliente`),
  KEY `fk_transacciones_factura` (`codigoFactura`),
  CONSTRAINT `fk_transacciones_cliente` FOREIGN KEY (`codigoCliente`) REFERENCES `clientes` (`codigoCliente`),
  CONSTRAINT `fk_transacciones_factura` FOREIGN KEY (`codigoFactura`) REFERENCES `facturas` (`codigoFactura`),
  CONSTRAINT `fk_transacciones_metodopago` FOREIGN KEY (`codigoMetodopago`) REFERENCES `metodosdepagos` (`codigoMetodopago`),
  CONSTRAINT `transacciones_ibfk_1` FOREIGN KEY (`codigoMetodopago`) REFERENCES `metodosdepagos` (`codigoMetodopago`),
  CONSTRAINT `transacciones_ibfk_2` FOREIGN KEY (`codigoCliente`) REFERENCES `clientes` (`codigoCliente`),
  CONSTRAINT `transacciones_ibfk_3` FOREIGN KEY (`codigoFactura`) REFERENCES `facturas` (`codigoFactura`)
) ENGINE=InnoDB AUTO_INCREMENT=9002 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.transacciones: ~0 rows (aproximadamente)
INSERT INTO `transacciones` (`codigoTransaccion`, `codigoMetodopago`, `codigoCliente`, `codigoFactura`, `valor`, `referencia`, `created_at`, `updated_at`) VALUES
	(9000, 902, 1000, 5000, 500000.00, 'h32', NULL, NULL),
	(9001, 904, 1001, 5001, 30000.00, 'h24', NULL, NULL);

-- Volcando estructura para tabla salsamentaria1.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla salsamentaria1.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `rol`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(9, 'Vendedor', 'Julian', 'julialll@gmail.com', NULL, '$2y$10$LQQ554tTy2RLkqRCpT6phugO9Xz1ZyN80BRwOr.VJLCpiSBAdR9M2', NULL, '2023-08-28 23:46:03', '2023-08-28 23:46:03'),
	(10, 'Cliente', 'Jhonathan', 'jhonathan@gmail.com', NULL, '$2y$10$cYcCZgV5/R6STyrtOuKUKuZ2ERxCt888mLbF7Hyie6Sb8jba.uoxW', NULL, '2023-08-28 23:50:46', '2023-08-28 23:50:46'),
	(11, 'Administrador', 'Jheicol', 'jheicoll@gmail.com', NULL, '$2y$10$FEXvcKG/ciaPqoVT/YI44uxbAj3nZb3YaFEXOeuY/ri6h9.pcgKDi', NULL, '2023-08-31 08:17:45', '2023-08-31 08:17:45');

-- Volcando estructura para tabla salsamentaria1.vendedores
CREATE TABLE IF NOT EXISTS `vendedores` (
  `codigoVendedor` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `documento` int NOT NULL,
  `telefono` varchar(50) NOT NULL DEFAULT '',
  `direccion` varchar(100) NOT NULL,
  `correoElectronico` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigoVendedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla salsamentaria1.vendedores: ~0 rows (aproximadamente)
INSERT INTO `vendedores` (`codigoVendedor`, `nombre`, `documento`, `telefono`, `direccion`, `correoElectronico`, `created_at`, `updated_at`) VALUES
	(1, 'María', 1057184088, '3203057527', 'Cra 10 N 5-09', 'maria@gmiail.com', NULL, NULL),
	(2, 'Jeshua', 10576578, '3203678653', 'Cra 12 N 8-87', 'jeshua@gmail.com', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
