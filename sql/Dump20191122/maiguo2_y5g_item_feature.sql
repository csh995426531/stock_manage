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
-- Table structure for table `y5g_item_feature`
--

DROP TABLE IF EXISTS `y5g_item_feature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `y5g_item_feature` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '类别id',
  `name_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '名称id',
  `data` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '名称',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1正常 2失效',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='配置表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `y5g_item_feature`
--

LOCK TABLES `y5g_item_feature` WRITE;
/*!40000 ALTER TABLE `y5g_item_feature` DISABLE KEYS */;
INSERT INTO `y5g_item_feature` VALUES (2,1,2,'256GB1',1,1560247158,1571555667),(3,1,1,'32GB',1,1560309725,1561728052),(4,1,1,'128GB',1,1560309740,1561728011),(5,1,2,'32GB',1,1561728070,1561728070),(6,1,2,'128GB',1,1561728098,1561728098),(7,1,6,'16GB',1,1561728121,1561728121),(8,1,6,'32GB',1,1561728141,1561728141),(9,1,6,'64GB',1,1561728155,1561728155),(10,1,6,'128GB',1,1561728170,1561728170),(11,1,7,'16GB',1,1562382051,1562382051),(12,1,7,'32GB',1,1562382066,1562382066),(13,1,7,'64GB',1,1562382078,1562382078),(14,1,4,'64GB',1,1562382397,1562382397),(15,1,4,'256GB',1,1562382465,1562382465),(16,1,3,'32G',1,1562382502,1562382502),(17,1,3,'128GB',1,1562382517,1562382517),(18,1,3,'64GB',1,1562382535,1562382535),(19,1,3,'16GB',1,1562382688,1562382688),(20,1,14,'32GB',1,1562382794,1562382794),(21,1,14,'128GB',1,1562382819,1562382819),(22,1,14,'256GB',1,1562382844,1562382844),(23,1,13,'64GB',1,1562382903,1562382903),(24,1,13,'256GB',1,1562382916,1562382916),(25,1,13,'512GB',1,1562382928,1562382928),(26,1,12,'64GB',1,1562383131,1562383131),(27,1,12,'256GB',1,1562383153,1562383153),(28,1,12,'512GB',1,1562383166,1562383166),(29,1,12,'1TB',1,1562383182,1562383182),(30,1,10,'64GB',1,1562383211,1562383211),(31,1,10,'256GB',1,1562383222,1562383222),(32,1,10,'512GB',1,1562383236,1562383236),(33,1,10,'1TB',1,1562383247,1562383247),(34,1,9,'64GB',1,1562383279,1562383279),(35,1,9,'256GB',1,1562383344,1562383344),(36,1,9,'512GB',1,1562383353,1562383353),(37,1,8,'32GB',1,1562383370,1562383370),(38,1,8,'128GB',1,1562383383,1562383383),(39,1,14,'1铝金属',1,1567352173,1571555647),(40,3,16,'铝金属外壳',1,1567352839,1567352839),(41,3,16,'不锈钢外壳',1,1567352858,1567352858),(42,3,17,'铝金属外壳',1,1567353614,1567353614),(43,3,17,'不锈钢外壳',1,1567353625,1567353625),(44,3,18,'铝金属外壳',1,1567353652,1567353652),(45,3,18,'不锈钢外壳',1,1567353671,1567353671);
/*!40000 ALTER TABLE `y5g_item_feature` ENABLE KEYS */;
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
