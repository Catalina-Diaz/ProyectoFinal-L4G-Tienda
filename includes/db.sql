-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando datos para la tabla tienda.crearuser: ~0 rows (aproximadamente)
DELETE FROM `crearuser`;
/*!40000 ALTER TABLE `crearuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `crearuser` ENABLE KEYS */;

-- Volcando datos para la tabla tienda.productos: ~2 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `categoria`, `imagen`) VALUES
	(7, 'vskos', '6466', 'hdkis', 'bdudu', NULL),
	(10, 'bslsod', '9767', 'jdjdo', 'bdixzk', NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando datos para la tabla tienda.sesion: ~1 rows (aproximadamente)
DELETE FROM `sesion`;
/*!40000 ALTER TABLE `sesion` DISABLE KEYS */;
INSERT INTO `sesion` (`id`, `correo`, `passwor`) VALUES
	(1, 'diana.en@hotmail.com', '123');
/*!40000 ALTER TABLE `sesion` ENABLE KEYS */;

-- Volcando datos para la tabla tienda.usuarios: ~5 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`, `telefono`, `ciudad`, `direccion`) VALUES
	(1, '0', 'carlos', '1234', '3122302446', 'Valle de Sibundoy', 'San Francisco'),
	(2, '0', 'Duvan', '1234', '22', 'Mocoa', 'Ssndkanals'),
	(3, '0', 'catalina', 'diaz', '328', 'mocoa', 'b am'),
	(4, 'angie', 'diana.en@outlook.com', '12', '12', '12', '23'),
	(5, 'diana', 'J.JHONATAN@GMAILCOM', 'yela', '1234566', 'mocoa', '878');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
