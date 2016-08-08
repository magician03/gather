-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: gather
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Table structure for table `att`
--

DROP TABLE IF EXISTS `att`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `att` (
  `event_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`event_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `att`
--

LOCK TABLES `att` WRITE;
/*!40000 ALTER TABLE `att` DISABLE KEYS */;
INSERT INTO `att` VALUES (1,1),(2,1);
/*!40000 ALTER TABLE `att` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(50) NOT NULL,
  `timestamp_e` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount_ph` int(100) NOT NULL,
  `duration` text NOT NULL,
  `admin` varchar(50) NOT NULL,
  `min_mem` int(1) NOT NULL,
  `max_mem` int(254) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Janatha Garage','2016-08-07 06:16:54',250,'3Hr','diwakar',2,20,'Movie show for the latest movie','movie',4,''),(2,'star trek','2016-08-07 06:52:34',500,'3Hr','diwakar',10,20,'Movie show at PVR','sport',2,'Visakhapatnam');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'diwakar','$2y$10$I./RWoDz41rMMsu3.0BWU.VqOA1pXycmYiV9OKvIPIM',1234567890,'hello@123.com'),(2,'Apple Inc','$2y$10$HfvX7Mvzyy69g/jg.jRy2eelOjjm.n7CtNLxNWKvPRn',9451432748,'diw.1@rajni.com'),(3,'Fruit','$2y$10$L0.8XujNP3ax/t9RWyR71.ldd58Mu2H5ZCQCa4rM1PN',9513245356,'diw.2@rajni.com'),(4,'Diw maya gadu','$2y$10$RL..kfe65XaNyTz9Cst2Vua5VuYghDGRrLayBP0fkAe',8421532509,'diw.3@rajni.com'),(5,'Diw maya 2','$2y$10$BgU16jECtmLE3GC0B5qQOO2D/tqY/Vm3wDh5iuWq./K',7414203804,'diw.4@rajni.com'),(6,'Dinesh roomie diw','$2y$10$T0x/kaXmOvT4dmeVIIl17u1KKj1xNnKx34CzsZ5xA8P',9472634839,'diw.5@rajni.com'),(7,'B\'day boy roomie diw gadu','$2y$10$7q0u2eyMwp6ukoLNvQZp6ujl2YFHCD/HAmA1tbOltDP',9418474928,'diw.6@rajni.com'),(8,'gather','$2y$10$srI.x/CMWmxWZdxDCSt8yuiRlKQt8A7QA8ApoH50QL0',9242482371,'diw.maya013@diwakar.com'),(11,'test1','$2y$10$rHvqC4Gl/FXf5DIEGEf74eEJKe54w9UnGv/ZrNXNQ.g',1236547899,'hello@123.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-08  7:52:09
