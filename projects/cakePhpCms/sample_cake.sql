-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: sample_cake
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `body` text,
  `published` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `user_key` (`user_id`),
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'First Post','first post','This is the first post',1,'2020-01-14 15:28:13','2020-01-14 15:28:13'),(2,1,'Second Post Cool','sdfsdf','Here is some real words instead of just jibber jabber;\r\nsdfsdfsdf\r\nsdfsdf\r\nsdf',0,'2020-01-15 19:05:24','2020-01-15 19:31:25'),(3,1,'The Third One','The-Third','This is the third one',0,'2020-01-16 21:03:22','2020-01-20 18:37:40'),(4,1,'Cats are Cats','Cats-are-Cats','They say meow mostly, but also purr, and sometimes hiss.',0,'2020-01-17 03:21:53','2020-01-21 21:48:02'),(5,1,'Hello Article','Hello-Article','My name is Article, nice to meet you.',0,'2020-01-17 22:00:49','2020-01-17 22:00:49'),(6,1,'Yet Another','Yet-Another','Something is here and that is good.',0,'2020-01-19 04:23:22','2020-01-19 04:23:22'),(7,1,'I am an Article Title','I-am-an-Article-Title','But my tags aren\'t being associated with me :-(\r\n\r\nProblem fixed. Association is working. Yay!!!',0,'2020-01-21 20:59:42','2020-01-21 21:03:52'),(8,1,'Is Tagging complete','Is-Tagging-complete','Lets hope that it is because its time to move on',0,'2020-01-21 21:49:01','2020-01-21 21:49:01'),(10,2,'I am a cat named Slayer','I-am-a-cat-named-Slayer','I have many stripes and I purr a whole lot. Isn\'t that cool!? Yes it is!',0,'2020-01-23 21:15:13','2020-01-23 21:15:27'),(13,4,'How are you doing today','How-are-you-doing-today','I\'m doing quite well don\'t you know',0,'2020-01-24 19:13:59','2020-01-24 19:14:27');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles_tags`
--

DROP TABLE IF EXISTS `articles_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles_tags` (
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`tag_id`),
  KEY `tag_key` (`tag_id`),
  CONSTRAINT `articles_tags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  CONSTRAINT `articles_tags_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles_tags`
--

LOCK TABLES `articles_tags` WRITE;
/*!40000 ALTER TABLE `articles_tags` DISABLE KEYS */;
INSERT INTO `articles_tags` VALUES (4,1),(7,1),(10,1),(13,1),(1,2),(4,2),(7,2),(10,2),(7,3),(7,4),(7,5),(8,5),(7,7),(4,8),(10,8),(8,9),(10,12);
/*!40000 ALTER TABLE `articles_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Cats','2020-01-17 20:46:29','2020-01-17 20:46:29'),(2,'Dogs','2020-01-17 20:46:38','2020-01-17 20:46:38'),(3,'Koalas','2020-01-17 20:46:47','2020-01-17 20:46:47'),(4,'Rabbits','2020-01-17 20:46:58','2020-01-17 20:46:58'),(5,'Otters','2020-01-17 20:47:05','2020-01-17 20:47:05'),(7,'Starlings','2020-01-17 20:47:52','2020-01-17 20:47:52'),(8,'Foxes','2020-01-21 21:48:02','2020-01-21 21:48:02'),(9,'Onward','2020-01-21 21:49:01','2020-01-21 21:49:01'),(10,'Auth','2020-01-23 19:59:58','2020-01-23 19:59:58'),(11,'New','2020-01-23 19:59:58','2020-01-23 19:59:58'),(12,'Danger','2020-01-23 21:15:13','2020-01-23 21:15:13'),(13,'Hello','2020-01-23 21:16:47','2020-01-23 21:16:47'),(14,'Goodbye','2020-01-23 21:16:47','2020-01-23 21:16:47');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'cakephp@example.com','$2y$10$yVZA/VTwjp5mdJBZ3s9F8uRDufTCsO/uFl9S5T5tHkwhQf4i9moYC','2020-01-14 15:24:30','2020-01-23 19:31:41'),(2,'slayer@meow.pur','$2y$10$CB7fRamP0QN2OQAwXgzQSu3A9glyECueEM6BYGBQZLPWIukD28FWS','2020-01-17 03:19:39','2020-01-23 19:29:40'),(3,'Nougat@Meow.purr','$2y$10$IvhGGkL/bwxI92617DiCVuMOk4Xtyu3HXjw8h1EU/WvPJOwqNsAxi','2020-01-17 03:20:26','2020-01-23 19:31:54'),(4,'mrSeth@seth.seth','$2y$10$vonDUz45R3fSLscH1XwSk.RHNLeKLjrosZPRjP76e7cls0nB6o0IO','2020-01-24 19:09:23','2020-01-24 19:09:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-24 17:00:14
