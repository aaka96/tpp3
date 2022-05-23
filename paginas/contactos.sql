

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
CREATE DATABASE contactos;
USE contactos;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `mensaje`) VALUES
(1, 'Guido', 'mail@mail.com', 'BsAs', 'bla bla bla bla bla bla bla bla '),
(2, 'Guido', 'yanosvamos@chau.com', 'BS AS', 'falta menos');