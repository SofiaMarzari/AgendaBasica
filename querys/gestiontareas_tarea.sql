DROP TABLE IF EXISTS `tarea`;
CREATE TABLE `tarea` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `completada` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;