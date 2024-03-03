DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `usuarioNombre` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;