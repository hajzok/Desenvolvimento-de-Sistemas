# Host: localhost  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2024-08-28 22:34:38
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "cursos"
#

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos` (
  `cod` varchar(11) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `curso` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `vagas` int(11) NOT NULL,
  `periodo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

#
# Data for table "cursos"
#

INSERT INTO `cursos` VALUES ('1','Informática',40,'Noite'),('2','Jurídico',40,'Tarde'),('3','Médio',35,'Manhã'),('4','Enfermagem',35,'Manhã'),('5','Logística',40,'Noite');

#
# Structure for table "livros"
#

DROP TABLE IF EXISTS `livros`;
CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `edicao` varchar(255) DEFAULT NULL,
  `total_pagina` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_livro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "livros"
#


#
# Structure for table "prof"
#

DROP TABLE IF EXISTS `prof`;
CREATE TABLE `prof` (
  `cod` varchar(11) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nome` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

#
# Data for table "prof"
#

INSERT INTO `prof` VALUES ('1','Matheus'),('2','Vitor'),('3','Pedro');

#
# Structure for table "profcurso"
#

DROP TABLE IF EXISTS `profcurso`;
CREATE TABLE `profcurso` (
  `cod` varchar(11) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `cod_curso` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `cod_prof` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`cod`),
  KEY `cod_curso` (`cod_curso`),
  KEY `cod_prof` (`cod_prof`),
  CONSTRAINT `profcurso_ibfk_1` FOREIGN KEY (`cod_curso`) REFERENCES `cursos` (`cod`),
  CONSTRAINT `profcurso_ibfk_2` FOREIGN KEY (`cod_prof`) REFERENCES `prof` (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

#
# Data for table "profcurso"
#

INSERT INTO `profcurso` VALUES ('1','2','3'),('2','1','2'),('3','3','1'),('4','4','3'),('5','5','1');
