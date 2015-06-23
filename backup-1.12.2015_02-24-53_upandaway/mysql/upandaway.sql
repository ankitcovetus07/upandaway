-- MySQL dump 10.13  Distrib 5.5.36, for Linux (x86_64)
--
-- Host: localhost    Database: upandaway
-- ------------------------------------------------------
-- Server version	5.5.36-cll-lve

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
-- Table structure for table `flightcategory`
--

DROP TABLE IF EXISTS `flightcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flightcategory` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flightcategory`
--

LOCK TABLES `flightcategory` WRITE;
/*!40000 ALTER TABLE `flightcategory` DISABLE KEYS */;
INSERT INTO `flightcategory` (`id`, `category_name`) VALUES (2,'Economy'),(3,'Premium'),(4,'Business');
/*!40000 ALTER TABLE `flightcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flightdetail`
--

DROP TABLE IF EXISTS `flightdetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flightdetail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cate_id` int(10) NOT NULL,
  `cate_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `flightfrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `flightto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flightdetail`
--

LOCK TABLES `flightdetail` WRITE;
/*!40000 ALTER TABLE `flightdetail` DISABLE KEYS */;
INSERT INTO `flightdetail` (`id`, `cate_id`, `cate_name`, `flightfrom`, `flightto`, `price`) VALUES (51,4,'Business','Indore','mhow',70),(32,2,'Economy','Bombay','Goa',520),(33,3,'Premium','Washington ','Canada',632),(34,2,'Economy','Delhi','Cochi',250),(35,2,'Economy','Goa','Bombay',120),(36,2,'Economy','Indore','Bhopal',150),(50,4,'Business','Indore','Dewas',10),(39,2,'Economy','Cochin ','Goa',20),(40,2,'Economy','Delhi','Goa',18),(47,3,'Premium','Indore','Bhopal',250),(48,4,'Business','Indore','Bhopal',200),(49,4,'Business','Indore','Ujjain',10);
/*!40000 ALTER TABLE `flightdetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hometitle`
--

DROP TABLE IF EXISTS `hometitle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hometitle` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `maintitle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `main_titile_descr` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hometitle`
--

LOCK TABLES `hometitle` WRITE;
/*!40000 ALTER TABLE `hometitle` DISABLE KEYS */;
INSERT INTO `hometitle` (`id`, `maintitle`, `main_titile_descr`) VALUES (1,'Top Of The Top','A Quick Glance At This Weeks Best Offering ');
/*!40000 ALTER TABLE `hometitle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_user`
--

DROP TABLE IF EXISTS `login_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_user`
--

LOCK TABLES `login_user` WRITE;
/*!40000 ALTER TABLE `login_user` DISABLE KEYS */;
INSERT INTO `login_user` (`id`, `username`, `password`) VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `login_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mailsubscrib`
--

DROP TABLE IF EXISTS `mailsubscrib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mailsubscrib` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mailid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateofsubs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mailsubscrib`
--

LOCK TABLES `mailsubscrib` WRITE;
/*!40000 ALTER TABLE `mailsubscrib` DISABLE KEYS */;
INSERT INTO `mailsubscrib` (`id`, `mailid`, `dateofsubs`) VALUES (29,'ayush.covetus@gmail.com','Thursday January 8, 2015, 2:13 pm'),(39,'rajendra@gmail.com','Friday January 9, 2015, 3:52 pm'),(45,'alfred.dmello14@gmail.com','Saturday January 10, 2015, 10:38 am');
/*!40000 ALTER TABLE `mailsubscrib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topoftop`
--

DROP TABLE IF EXISTS `topoftop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topoftop` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8_unicode_ci NOT NULL,
  `descriptioin` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topoftop`
--

LOCK TABLES `topoftop` WRITE;
/*!40000 ALTER TABLE `topoftop` DISABLE KEYS */;
INSERT INTO `topoftop` (`id`, `image`, `subtitle`, `descriptioin`) VALUES (1,'groupTP.png','Special Group Offering 11+','we reduce our fares by 11% \r\n'),(2,'cruise.jpg','Cruise Pricing ','book our airfare book your cruise\r\n'),(3,'amexrewards.jpg','Pay with Points and Fly','Pay with Points\r\nand Fly\r\n');
/*!40000 ALTER TABLE `topoftop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `whatshottitle`
--

DROP TABLE IF EXISTS `whatshottitle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `whatshottitle` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `maintitle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `main_titile_descr` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `whatshottitle`
--

LOCK TABLES `whatshottitle` WRITE;
/*!40000 ALTER TABLE `whatshottitle` DISABLE KEYS */;
INSERT INTO `whatshottitle` (`id`, `maintitle`, `main_titile_descr`) VALUES (1,'What\'s Hot','Our Airfare, Are Super Hot Today !');
/*!40000 ALTER TABLE `whatshottitle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'upandaway'
--

--
-- Dumping routines for database 'upandaway'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-12  2:24:55
