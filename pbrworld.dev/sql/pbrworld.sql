CREATE DATABASE  IF NOT EXISTS `symfony` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `symfony`;
-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: symfony
-- ------------------------------------------------------
-- Server version	5.6.28

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
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `blog` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tags` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (153,'South Africa Mothballs Pebble Bed Reactor','south-africa-mothballs-pebble-bed-reactor','admin','Source: http://www.southafrica.info/news/pbmr-mothballed.htm#.VoyCifkrLBQ','Modular.jpg','South Africa, PBR World, Pebble Bed Reactor','2016-02-22 15:34:18','2016-02-22 15:34:18'),(154,'German Experimental Pebble Bed Reactor Decommissioned','julich-pebble-bed-reactor-decommisioned','admin','Source: http://www.world-nuclear-news.org/WR-Julich-pilot-reactor-vessel-removed-10021501.html','German_PBR.jpg','Germany, Pebble Bed Reactor','2016-02-23 06:12:33','2016-02-23 06:12:33'),(155,'X-Energy Developing Pebble Bed Reactor','xe-developing-pebble-bed-reactor','admin','Source: http://nextbigfuture.com/2015/05/us-startup-x-energy-developing.html','Xe_Reactor_1.png','United States, Pebble Bed Reactor','2016-02-24 16:14:06','2016-02-24 16:14:06'),(156,'X-Energy Completes Pebble Bed Reactor Integration Study','xe-completes-study','admin','Source: http://nuclearstreet.com/nuclear_power_industry_news/b/nuclear_power_news/archive/2015/10/29/x_2d00_energy-and-sce_2600_g-complete-integration-study-for-xe_2d00_100-pebble_2d00_bed-reactor-102801.aspx#.Voir1vkrLBQ','Xe_Pebble.png','United States, Pebble Bed Reactor, Pebbles','2016-02-25 18:54:12','2016-02-25 18:54:12'),(157,'China Starts Construction Of Semi-Commercial Pebble Bed Reactor','china-htr-starts-contruction','admin','Source: http://nextbigfuture.com/2011/03/china-210-mwe-pebble-bed-reactor-starts.html','PBR_1.jpg','HTR-PM, Pebble Bed Reactor, China','2016-02-26 15:34:18','2016-02-26 15:34:18'),(158,'China Construction Progresses on 210 MWE Pebble Bed Reactor','china-htr-continues-construction','admin','Source: http://nextbigfuture.com/2011/07/china-well-underway-building-210-mwe.html','PBR_Construction.png','HTR-PM, Pebble Bed Reactor, China','2016-02-29 15:34:18','2016-02-29 15:34:18'),(159,'China Constructs Nuclear Pebble Manufacturing Facility','china-builds-pebble-manufacturing-plant','admin','Source: http://nextbigfuture.com/2015/01/production-of-300000-fuel-pebbles-per.html','Pebbles.png','Pebble Production, Pebble Bed Reactor, China','2016-03-01 15:34:18','2016-03-01 15:34:18'),(160,'Helium Circulator Ready For Chain 210 MWE','helium-circulator-fan','admin','Source: http://www.world-nuclear-news.org/NN-Helium-fan-produced-for-Chinese-HTR-PM-1908144.html','Circulator.jpg','HTR-PM, Pebble Bed Reactor, China, Circulator Fan','2016-03-02 15:34:18','2016-03-02 15:34:18'),(161,'First Commercial Pebble Bed Reactor Plant','first-commercial-pebble-bed-reactor-plant','admin','Source: http://www.globalconstructionreview.com/news/china-set-build-worlds-8f0i6r4s8t0-6f4o2u4r6t8h/','Generation.jpg','HTR Commercialization, Pebble Bed Reactor, China','2016-03-03 15:34:18','2016-03-03 15:34:18');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9474526CDAE07E97` (`blog_id`),
  CONSTRAINT `FK_9474526CDAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'symfony'
--

--
-- Dumping routines for database 'symfony'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-12 22:10:03
