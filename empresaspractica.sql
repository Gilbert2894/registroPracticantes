-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2016 a las 17:55:26
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `empresaspractica`
--
CREATE DATABASE IF NOT EXISTS `empresaspractica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `empresaspractica`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_consultaCompany`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultaCompany`(IN `p_idCom` INT(11))
BEGIN

SELECT * FROM company WHERE idCom = p_idCom;

END$$

DROP PROCEDURE IF EXISTS `sp_consultasCompany`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultasCompany`()
BEGIN

SELECT * FROM company;

END$$

DROP PROCEDURE IF EXISTS `sp_consultasStudent`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultasStudent`()
BEGIN

SELECT * FROM student ;

END$$

DROP PROCEDURE IF EXISTS `sp_consultaStudent`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultaStudent`(IN `p_carnet` INT(11))
BEGIN

SELECT * FROM student WHERE carnet = p_carnet;

END$$

DROP PROCEDURE IF EXISTS `sp_consultasUsers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultasUsers`()
BEGIN

SELECT * FROM users;

END$$

DROP PROCEDURE IF EXISTS `sp_consultaUsers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultaUsers`(IN `p_id` INT(11))
BEGIN

SELECT * FROM users WHERE id = p_id;

END$$

DROP PROCEDURE IF EXISTS `sp_EliminarCompany`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_EliminarCompany`(IN `p_idCom` INT(11))
BEGIN

DELETE FROM company WHERE idCom= p_idCom;

END$$

DROP PROCEDURE IF EXISTS `sp_eliminarStudent`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminarStudent`(IN `p_carnet` INT(11))
BEGIN

DELETE FROM student WHERE carnet= p_carnet;


END$$

DROP PROCEDURE IF EXISTS `sp_eliminarUsers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminarUsers`(IN `p_id` INT(11))
BEGIN

DELETE FROM users WHERE id= p_id;

END$$

DROP PROCEDURE IF EXISTS `sp_insertarCompany`$$
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

End$$

DROP PROCEDURE IF EXISTS `sp_insertarStudent`$$
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

END$$

DROP PROCEDURE IF EXISTS `sp_insertarUsers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertarUsers`(IN `p_username` VARCHAR(20), IN `p_password` VARCHAR(50), IN `p_fname` VARCHAR(50), IN `p_lname` VARCHAR(50), IN `p_phone` VARCHAR(20), IN `p_cellphone` VARCHAR(20), IN `p_email` VARCHAR(50))
BEGIN

INSERT INTO users(username, password, fname, lname, phone, cellphone, email)VALUES (p_username,
			   p_password,
			   p_fname,
			   p_lname, 
			   p_phone,
			   p_cellphone,
			   p_email);

END$$

DROP PROCEDURE IF EXISTS `sp_modificarCompany`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_modificarCompany`(IN `p_idCom` INT(11), IN `p_nameCom` VARCHAR(80), IN `p_addressCom` VARCHAR(100), IN `p_phoneCom` VARCHAR(20), IN `p_emailCom` VARCHAR(20))
BEGIN

UPDATE company SET
			nameCom = @nameCom,
			addressCom= p_addressCom,
			phoneCom= p_phoneCom,
			emailCom= p_emailCom
			WHERE idCom = p_idCom;


END$$

DROP PROCEDURE IF EXISTS `sp_modificarStudent`$$
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
            
END$$

DROP PROCEDURE IF EXISTS `sp_modificarUsers`$$
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

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `idCom` int(11) NOT NULL AUTO_INCREMENT,
  `nameCom` varchar(80) DEFAULT NULL,
  `addressCom` varchar(100) DEFAULT NULL,
  `phoneCom` varchar(20) DEFAULT NULL,
  `emailCom` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idCom`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Se almacenaran todas las empresas a las que los estudiantes podrian aplicar su practica supervisada' AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`idCom`, `nameCom`, `addressCom`, `phoneCom`, `emailCom`) VALUES
(19, NULL, '7', 'U', 'H'),
(18, 'karina', 'j', 'j', 'j'),
(17, NULL, '7', 'U', 'Y');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company_student`
--

DROP TABLE IF EXISTS `company_student`;
CREATE TABLE IF NOT EXISTS `company_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carnet` varchar(50) DEFAULT NULL,
  `idCom` varchar(50) DEFAULT NULL,
  `id_user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `company_student`
--

INSERT INTO `company_student` (`id`, `carnet`, `idCom`, `id_user`) VALUES
(1, '1', '1', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

DROP TABLE IF EXISTS `student`;
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

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`carnet`, `nameStu`, `lnameStu`, `cedula`, `carrera`, `phone`, `dob`) VALUES
(875, 'JD', 'JD', 'JS', 'DO', 'J', '0000-00-00'),
(7777, 'K', 'K', 'K', 'K', 'J', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `phone`, `cellphone`, `email`) VALUES
(1, '702290750', '1d1664e24f590873a3d84e6671596f74dfed9f61', 'Gilbert', 'Mora', '86670842', NULL, 'gilbert0894@hotmail.com'),
(2, 'O', 'c2c53d66948214258a26ca9ca845d7ac0c17f8e7', 'O', 'O', 'O', 'U', 'O');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
