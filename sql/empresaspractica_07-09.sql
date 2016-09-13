-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.9 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para empresaspractica
CREATE DATABASE IF NOT EXISTS `empresaspractica` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `empresaspractica`;


-- Volcando estructura para tabla empresaspractica.company
CREATE TABLE IF NOT EXISTS `company` (
  `idCom` int(11) NOT NULL AUTO_INCREMENT,
  `nameCom` varchar(80) DEFAULT NULL,
  `addressCom` varchar(100) DEFAULT NULL,
  `phoneCom` varchar(20) DEFAULT NULL,
  `emailCom` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idCom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Se almacenaran todas las empresas a las que los estudiantes podrian aplicar su practica supervisada';

-- Volcando datos para la tabla empresaspractica.company: 0 rows
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;


-- Volcando estructura para tabla empresaspractica.company_student
CREATE TABLE IF NOT EXISTS `company_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carnet` varchar(50) DEFAULT NULL,
  `idCom` varchar(50) DEFAULT NULL,
  `id_user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla empresaspractica.company_student: 0 rows
/*!40000 ALTER TABLE `company_student` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_student` ENABLE KEYS */;


-- Volcando estructura para tabla empresaspractica.student
CREATE TABLE IF NOT EXISTS `student` (
  `carnet` int(11) NOT NULL,
  `nameStu` varchar(50) DEFAULT NULL,
  `lnameStu` varchar(70) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `carrera` varchar(70) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`carnet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla empresaspractica.student: 0 rows
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;


-- Volcando estructura para tabla empresaspractica.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cellphone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla empresaspractica.users: 0 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
