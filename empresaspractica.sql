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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COMMENT='Se almacenaran todas las empresas a las que los estudiantes podrian aplicar su practica supervisada';

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla empresaspractica.company_student: 1 rows
/*!40000 ALTER TABLE `company_student` DISABLE KEYS */;
INSERT IGNORE INTO `company_student` (`id`, `carnet`, `idCom`, `id_user`) VALUES
	(1, '1', '1', '3');
/*!40000 ALTER TABLE `company_student` ENABLE KEYS */;


-- Volcando estructura para procedimiento empresaspractica.sp_consultaCompany
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultaCompany`(IN `p_idCom` INT(11))
BEGIN

SELECT * FROM company WHERE idCom = p_idCom;

END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_consultasCompany
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultasCompany`()
BEGIN

SELECT * FROM company;

END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_consultasStudent
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultasStudent`()
BEGIN

SELECT * FROM student ;

END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_consultaStudent
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultaStudent`(IN `p_carnet` INT(11))
BEGIN

SELECT * FROM student WHERE carnet = p_carnet;

END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_consultasUsers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultasUsers`()
BEGIN

SELECT * FROM users;

END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_consultaUsers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultaUsers`(IN `p_id` INT(11))
BEGIN

SELECT * FROM users WHERE id = p_id;

END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_EliminarCompany
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_EliminarCompany`(IN `p_idCom` INT(11))
BEGIN

DELETE FROM company WHERE idCom= p_idCom;

END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_eliminarStudent
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminarStudent`(IN `p_carnet` INT(11))
BEGIN

DELETE FROM student WHERE carnet= p_carnet;


END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_eliminarUsers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminarUsers`(IN `p_id` INT(11))
BEGIN

DELETE FROM users WHERE id= p_id;

END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_insertarCompany
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertarCompany`(IN `p_nameCom` VARCHAR(80), IN `p_addressCom` VARCHAR(100), IN `p_phoneCom` VARCHAR(20), IN `p_emailCom` VARCHAR(20))
BEGIN

INSERT INTO company(
                    nameCom,
                    addressCom,
                    phoneCom, 
                    emailCom)
					VALUES (
                        p_nameCom,
                        p_addressCom,
                        p_phoneCom,
                        p_emailCom
                            );

End//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_insertarStudent
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertarStudent`(IN `p_carnet` INT(11), IN `p_nameStu` VARCHAR(50), IN `p_lnameStu` VARCHAR(70), IN `p_cedula` VARCHAR(20), IN `p_carrera` VARCHAR(70), IN `p_phone` VARCHAR(20), IN `p_dob` DATE)
BEGIN

INSERT INTO student(carnet, nameStu, lnameStu, cedula, carrera, phone, dob)
					VALUES (
                           p_carnet,
						   p_nameStu,
						   p_lnameStu,
						   p_cedula,
						   p_carrera, 
						   p_phone,
						   p_dob) ;

END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_insertarUsers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertarUsers`(IN `p_username` VARCHAR(20), IN `p_password` VARCHAR(50), IN `p_fname` VARCHAR(50), IN `p_lname` VARCHAR(50), IN `p_phone` VARCHAR(20), IN `p_cellphone` VARCHAR(20), IN `p_email` VARCHAR(50))
BEGIN

INSERT INTO users(username, password, fname, lname, phone, cellphone, email)VALUES (p_username,
			   p_password,
			   p_fname,
			   p_lname, 
			   p_phone,
			   p_cellphone,
			   p_email);

END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_modificarCompany
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_modificarCompany`(IN `p_idCom` INT(11), IN `p_nameCom` VARCHAR(80), IN `p_addressCom` VARCHAR(100), IN `p_phoneCom` VARCHAR(20), IN `p_emailCom` VARCHAR(20))
BEGIN

UPDATE company SET
			nameCom = @nameCom,
			addressCom= p_addressCom,
			phoneCom= p_phoneCom,
			emailCom= p_emailCom
			WHERE idCom = p_idCom;


END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_modificarStudent
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_modificarStudent`(IN `p_carnet` INT(11), IN `p_nameStu` VARCHAR(50), IN `p_lnameStu` VARCHAR(70), IN `p_cedula` VARCHAR(20), IN `p_carrera` VARCHAR(70), IN `p_phone` VARCHAR(20), IN `p_dob` DATE)
BEGIN

UPDATE student SET
			nameStu =p_nameStu,
			lnameStu=p_lnameStu,
			cedula= p_cedula,
			carrera= p_carrera,
			phone= p_phone,
			dob= p_dob
			WHERE carnet = p_carnet;
            
END//
DELIMITER ;


-- Volcando estructura para procedimiento empresaspractica.sp_modificarUsers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_modificarUsers`(IN `p_id` INT(11), IN `p_username` VARCHAR(20), IN `p_password` VARCHAR(50), IN `p_fname` VARCHAR(50), IN `p_lname` VARCHAR(50), IN `p_phone` VARCHAR(20), IN `p_cellphone` VARCHAR(20), IN `p_email` VARCHAR(50))
BEGIN

UPDATE users SET
			username = p_username,
			password= p_password,
			fname= p_fname,
			lname= p_lname,
			phone= p_phone,
			cellphone= p_cellphone,
			email= p_email
			WHERE id = p_id;

END//
DELIMITER ;


-- Volcando estructura para tabla empresaspractica.student
CREATE TABLE IF NOT EXISTS `student` (
  `carnet` int(11) NOT NULL,
  `nameStu` varchar(50) DEFAULT NULL,
  `lnameStu` varchar(70) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `carrera` varchar(70) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`carnet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla empresaspractica.student: 2 rows
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT IGNORE INTO `student` (`carnet`, `nameStu`, `lnameStu`, `cedula`, `carrera`, `phone`, `dob`) VALUES
	(875, 'JD', 'JD', 'JS', 'DO', 'J', '0000-00-00'),
	(7777, 'K', 'K', 'K', 'K', 'J', '0000-00-00');
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla empresaspractica.users: 3 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `phone`, `cellphone`, `email`) VALUES
	(1, '702290750', '1d1664e24f590873a3d84e6671596f74dfed9f61', 'Gilbert', 'Mora', '86670842', NULL, 'gilbert0894@hotmail.com'),
	(2, 'O', 'c2c53d66948214258a26ca9ca845d7ac0c17f8e7', 'O', 'O', 'O', 'U', 'O'),
	(4, '702260077', '786582176a0ebb07cc6fe17888b513ce2d4b8787', 'asdasdas', 'asdas', '78979', '789798', 'asdas@hlrodr');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
