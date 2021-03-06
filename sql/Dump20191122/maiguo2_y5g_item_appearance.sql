-- MySQL dump 10.13  Distrib 8.0.16, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: maiguo2
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `y5g_item_appearance`
--

DROP TABLE IF EXISTS `y5g_item_appearance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `y5g_item_appearance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '类别id',
  `name_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '名称id',
  `data` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '名称',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1正常 2失效',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COMMENT='外观表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `y5g_item_appearance`
--

LOCK TABLES `y5g_item_appearance` WRITE;
/*!40000 ALTER TABLE `y5g_item_appearance` DISABLE KEYS */;
INSERT INTO `y5g_item_appearance` VALUES (2,1,1,'深空灰',1,1560310529,1560310529),(3,1,1,'玫瑰金',1,1560310537,1560310537),(4,1,3,'银白色1',1,1566822168,1571557031),(5,1,2,'深空灰',1,1566822191,1566822191),(6,1,2,'土豪金',1,1566822211,1566822211),(7,1,3,'银白色',1,1566822456,1566822456),(8,1,3,'深空灰',1,1566822475,1566822475),(9,1,3,'土豪金',1,1566822493,1566822493),(10,1,4,'银白色',1,1566822586,1566822586),(11,1,4,'土豪金',1,1566822597,1566822597),(12,1,4,'深空灰',1,1566822642,1566822642),(13,1,5,'银白色',1,1566822689,1566822689),(14,1,5,'深空灰',1,1566822705,1566822705),(15,1,5,'土豪金',1,1566822716,1566822716),(16,1,6,'银白色',1,1566822748,1566822748),(17,1,6,'深空灰',1,1566822759,1566822759),(18,1,6,'土豪金',1,1566822773,1566822773),(19,1,7,'银白色',1,1566822826,1566822826),(20,1,7,'深空灰',1,1566822834,1566822834),(21,1,8,'银白色',1,1566822867,1566822867),(22,1,8,'深空灰',1,1566822874,1566822874),(23,1,8,'土豪金',1,1566822882,1566822882),(24,1,9,'银白色',1,1566822890,1566822890),(25,1,9,'深空灰',1,1566822898,1566822898),(26,1,9,'土豪金',1,1566822906,1566822906),(27,1,10,'银白色',1,1566822913,1566822913),(28,1,10,'深空灰',1,1566822922,1566822922),(29,1,12,'银白色',1,1566823007,1566823007),(30,1,12,'深空灰',1,1566823015,1566823015),(31,1,13,'银白色',1,1566823049,1566823049),(32,1,13,'深空灰',1,1566823058,1566823058),(33,1,13,'土豪金',1,1566823067,1566823067),(34,1,13,'玫瑰金',1,1566823076,1566823076),(35,1,14,'银白色',1,1566823118,1566823118),(36,1,14,'深空灰',1,1566823125,1566823125),(37,1,14,'土豪金',1,1566823138,1566823138),(38,3,15,'深空灰色',1,1567352444,1567352444),(39,3,15,'金色',1,1567352461,1567352461),(40,3,15,'玫瑰金色',1,1567352479,1567352479),(41,3,15,'银色',1,1567352497,1567352497),(42,3,16,'深空灰色',1,1567353079,1567353079),(43,3,16,'金色',1,1567353090,1567353090),(44,3,16,'玫瑰金色',1,1567353099,1567353099),(45,3,16,'银色',1,1567353112,1567353112),(46,3,17,'深空灰色',1,1567355332,1567355332),(47,3,17,'金色',1,1567355347,1567355347),(48,3,17,'银色',1,1567355374,1567355374),(49,3,18,'深空灰色',1,1567355392,1567355392),(50,3,18,'金色',1,1567355440,1567355440),(51,3,18,'银色',1,1567355450,1567355450),(52,1,2,'樱花粉',1,1571555828,1571555828);
/*!40000 ALTER TABLE `y5g_item_appearance` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-22 20:01:39
