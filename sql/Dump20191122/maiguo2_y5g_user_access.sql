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
-- Table structure for table `y5g_user_access`
--

DROP TABLE IF EXISTS `y5g_user_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `y5g_user_access` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `node_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '权限节点id',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1有效 2无效',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COMMENT='用户-权限表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `y5g_user_access`
--

LOCK TABLES `y5g_user_access` WRITE;
/*!40000 ALTER TABLE `y5g_user_access` DISABLE KEYS */;
INSERT INTO `y5g_user_access` VALUES (2,1,1,1,1559801852,1559801852),(3,1,2,1,1559801852,1559801852),(4,1,6,1,1559801852,1559801852),(5,1,7,1,1559801852,1559801852),(6,1,9,1,1559801852,1559801852),(7,1,10,1,1559801852,1559801852),(8,1,12,1,1559801852,1559801852),(9,1,14,1,1559801852,1559801852),(10,1,15,1,1559801852,1559801852),(11,1,17,2,1559801852,1562974906),(12,1,18,1,1559801852,1559801852),(13,1,20,1,1559801852,1559801852),(14,1,21,1,1559801852,1559801852),(15,1,22,1,1559801852,1559801852),(16,1,23,1,1559801852,1559801852),(17,1,24,1,1559801852,1559801852),(18,1,25,1,1559801852,1559801852),(19,1,26,1,1559801852,1559801852),(20,1,27,1,1559801852,1559801852),(21,1,29,1,1559801852,1559801852),(22,2,1,1,1559801881,1559801881),(23,2,2,1,1559801881,1559801881),(24,2,3,1,1559801881,1559801881),(25,2,6,1,1559801881,1559801881),(26,2,7,1,1559801881,1559801881),(27,2,9,1,1559801881,1559801881),(28,2,10,1,1559801881,1559801881),(29,2,12,1,1559801881,1559801881),(30,2,14,1,1559801881,1559801881),(31,2,15,1,1559801881,1559801881),(32,2,17,2,1559801881,1562974911),(33,2,18,1,1559801881,1559801881),(34,2,20,1,1559801881,1559801881),(35,2,21,1,1559801881,1559801881),(36,2,22,1,1559801881,1559801881),(37,2,23,1,1559801881,1559801881),(38,2,24,1,1559801881,1559801881),(39,2,25,1,1559801881,1559801881),(40,2,26,1,1559801881,1559801881),(41,2,27,1,1559801881,1559801881),(42,2,29,1,1559801881,1559801881),(43,1,30,1,1562328413,1562378049),(44,2,30,1,1562378463,1562378463),(45,1,31,1,1562974906,1562974906),(46,2,31,1,1562974911,1562974911),(47,4,3,1,1567310628,1567310628);
/*!40000 ALTER TABLE `y5g_user_access` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-22 20:01:40
