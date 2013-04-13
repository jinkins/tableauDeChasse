# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Hôte: localhost (MySQL 5.5.29)
# Base de données: tableau
# Temps de génération: 2013-04-13 10:35:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table conquetes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `conquetes`;

CREATE TABLE `conquetes` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL DEFAULT '',
  `Prenom` varchar(50) NOT NULL DEFAULT '',
  `DateNaissance` date NOT NULL,
  `DateRencontre` date NOT NULL,
  `Teint` varchar(11) NOT NULL DEFAULT '',
  `Cheveux` varchar(11) NOT NULL DEFAULT '',
  `Charme` int(11) NOT NULL,
  `Chaleur` int(11) NOT NULL,
  `Futur` int(1) NOT NULL,
  `Approche` text NOT NULL,
  `Relation` varchar(50) NOT NULL DEFAULT '',
  `Visage` int(5) NOT NULL,
  `SParfait` int(5) NOT NULL,
  `Avant` int(5) NOT NULL,
  `Arriere` int(5) NOT NULL,
  `TDT` int(5) NOT NULL,
  `Taille` int(7) NOT NULL,
  `Couple` int(1) NOT NULL,
  `Conquerant` int(11) NOT NULL,
  `Public` int(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Nom` (`Nom`),
  KEY `Prenom` (`Prenom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `conquetes` WRITE;
/*!40000 ALTER TABLE `conquetes` DISABLE KEYS */;

INSERT INTO `conquetes` (`ID`, `Nom`, `Prenom`, `DateNaissance`, `DateRencontre`, `Teint`, `Cheveux`, `Charme`, `Chaleur`, `Futur`, `Approche`, `Relation`, `Visage`, `SParfait`, `Avant`, `Arriere`, `TDT`, `Taille`, `Couple`, `Conquerant`, `Public`)
VALUES
	(1,'Kools','Laurent','1992-07-02','2010-10-07','Blanc','Noir',2,2,1,'Un travail de néerlandais','PQ',1,1,1,1,90,90,1,2,1),
	(2,'Huet','Geoffrey','0000-00-00','2009-10-25','Blanc','Chatain',2,2,0,'Cela fait tellement longtemps...','LT',3,2,3,2,70,70,1,1,1);

/*!40000 ALTER TABLE `conquetes` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `MDP` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`ID`, `Nom`, `Prenom`, `MDP`)
VALUES
	(1,'Huet','Geoffrey','25031991'),
	(2,'Kools','Laurent','21071992');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;