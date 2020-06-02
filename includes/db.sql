-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla bprofin.crearuser
CREATE TABLE IF NOT EXISTS `crearuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bprofin.crearuser: ~0 rows (aproximadamente)
DELETE FROM `crearuser`;
/*!40000 ALTER TABLE `crearuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `crearuser` ENABLE KEYS */;

-- Volcando estructura para tabla bprofin.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bprofin.producto: ~0 rows (aproximadamente)
DELETE FROM `producto`;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla bprofin.sesion
CREATE TABLE IF NOT EXISTS `sesion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bprofin.sesion: ~0 rows (aproximadamente)
DELETE FROM `sesion`;
/*!40000 ALTER TABLE `sesion` DISABLE KEYS */;
INSERT INTO `sesion` (`id`, `correo`, `password`) VALUES
	(1, 'diana.en@hotmail.com', '123');
/*!40000 ALTER TABLE `sesion` ENABLE KEYS */;

-- Volcando estructura para tabla bprofin.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bprofin.usuarios: ~9 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`, `telefono`, `ciudad`, `direccion`) VALUES
	(1, '0', 'carlos', '1234', '3122302446', 'Valle de Sibundoy', 'San Francisco'),
	(2, '0', 'Duvan', '1234', '22', 'Mocoa', 'Ssndkanals'),
	(3, '0', 'catalina', 'diaz', '328', 'mocoa', 'b am'),
	(4, 'angie', 'diana.en@outlook.com', '12', '12', '12', '23'),
	(5, 'diana', 'J.JHONATAN@GMAILCOM', 'yela', '1234566', 'mocoa', '878'),
	(6, 'matias', 'bnjjn@hotmail.com', '1234', '222222222222222', 'mocoa', 'b am'),
	(7, 'jennifer', 'maeaco1515@hotmail.com', '123456', '12345852', 'mocoa', 'b am'),
	(8, 'daniela3', 'daniela3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '184', 'mocoa', 'b am'),
	(9, 'Catalina', 'matias@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '5421', 'mocoa', 'b am');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
