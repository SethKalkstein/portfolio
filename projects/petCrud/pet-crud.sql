-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: name
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Human`
--

DROP TABLE IF EXISTS `Human`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Human` (
  `humanID` int(11) NOT NULL AUTO_INCREMENT,
  `humanWeight` decimal(3,1) DEFAULT NULL,
  `humanName` varchar(40) NOT NULL,
  PRIMARY KEY (`humanID`),
  UNIQUE KEY `humanID` (`humanID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Human`
--

LOCK TABLES `Human` WRITE;
/*!40000 ALTER TABLE `Human` DISABLE KEYS */;
INSERT INTO `Human` VALUES (1,1.1,'Data'),(2,12.5,'Troy'),(3,45.2,'Riker'),(4,34.9,'Crusher'),(5,55.3,'Janeway'),(6,85.3,'Dax'),(7,40.1,'Sisko'),(10,21.6,'Worf'),(11,77.1,'Picard'),(12,10.5,'Spok'),(13,45.6,'Guinan'),(14,15.6,'Uhuru'),(15,74.2,'Kim'),(16,11.2,'McCoy'),(17,51.2,'Archer'),(18,98.4,'T\'Pol'),(19,62.0,'Grayson'),(20,39.7,'Mercer');
/*!40000 ALTER TABLE `Human` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pet`
--

DROP TABLE IF EXISTS `Pet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pet` (
  `petID` int(11) NOT NULL AUTO_INCREMENT,
  `petAge` smallint(6) NOT NULL,
  `petSpecies` varchar(50) NOT NULL,
  `petName` varchar(75) NOT NULL,
  `humanID` int(11) NOT NULL,
  PRIMARY KEY (`petID`),
  KEY `Human_Key` (`humanID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pet`
--

LOCK TABLES `Pet` WRITE;
/*!40000 ALTER TABLE `Pet` DISABLE KEYS */;
INSERT INTO `Pet` VALUES (1,13,'Cat','Spot',1),(2,5,'Otter','Motter',1),(3,10,'Dog','Rover',2),(4,7,'cat','Meow Man',1),(5,13,'Cat','Slayer',3),(6,2,'Cat','Nougat',3),(7,5,'Dog','Happy Pup',4),(8,85,'turtle','Gurtle',7),(9,54,'elephant','mumbo',4),(10,89,'Whale','Dale',2),(11,24,'Tiger','Mr. Zoro - the 3rd',4),(12,8,'cat','shady',5),(18,43,'Hare','Garmouth',5),(19,43,'Bison','Barth Mann',3),(20,405,'Zebra','Beautack',4),(21,34,'Bison','Borth',3),(22,501,'Cow','Foro',4),(23,175,'Great White Shark','Agnonosis',3),(24,335,'Deer','Aaron Almighty-Great',11),(25,100,'steer','Alouishiousnessed',7),(28,59,'Iguana','Jon',3),(29,2,'Racoon','Jonathan',2),(30,56,'slug','Sewtuger',4),(31,65,'Cricket','Yumnur',11),(32,342,'Targ','Respo',18),(33,8,'Ferret','Slerret',13),(34,37,'Star Fish','Coral',20);
/*!40000 ALTER TABLE `Pet` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-23 22:01:41
