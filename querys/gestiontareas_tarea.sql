USE 'gestiontareas';
CREATE TABLE `tarea` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `horario` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `completada` int(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;