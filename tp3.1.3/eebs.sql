-- MySQL dump 10.13  Distrib 5.6.30, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ebbs
-- ------------------------------------------------------
-- Server version	5.6.30-0ubuntu0.15.10.1

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
-- Table structure for table `eb_comm`
--

DROP TABLE IF EXISTS `eb_comm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eb_comm` (
  `commid` int(11) NOT NULL AUTO_INCREMENT,
  `eeid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `commcont` varchar(10000) DEFAULT NULL,
  `commtime` varchar(20) DEFAULT NULL,
  `commparentid` int(10) DEFAULT '0',
  PRIMARY KEY (`commid`),
  KEY `eeid` (`eeid`),
  KEY `userid` (`userid`),
  CONSTRAINT `eb_comm_ibfk_1` FOREIGN KEY (`eeid`) REFERENCES `eb_ee` (`eeid`),
  CONSTRAINT `eb_comm_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `eb_user` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eb_comm`
--

LOCK TABLES `eb_comm` WRITE;
/*!40000 ALTER TABLE `eb_comm` DISABLE KEYS */;
INSERT INTO `eb_comm` VALUES (1,4,1,'我每天至少学半个小时的英语单词，真心觉得好','2016-06-24 09:42:04',0),(2,4,1,'我每天至少学半个小时的英语单词，真心觉得好','2016-06-24 09:42:24',0),(3,4,1,'我每天至少学半个小时的英语单词，真心觉得好','2016-06-24 09:43:00',0),(4,4,2,'我是诗诗，我也每天学英语单词，现在英语好了很多了','2016-06-24 09:45:30',0),(5,4,2,'我是诗诗，我也每天学英语单词，现在英语好了很多了','2016-06-24 09:47:15',0),(6,4,1,'我这是第二次评论了，你真棒，每天都坚持','2016-06-24 09:50:15',0);
/*!40000 ALTER TABLE `eb_comm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eb_ee`
--

DROP TABLE IF EXISTS `eb_ee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eb_ee` (
  `eeid` int(11) NOT NULL AUTO_INCREMENT,
  `eetitle` varchar(500) DEFAULT NULL,
  `eecont` varchar(10000) DEFAULT NULL,
  `eetime` varchar(20) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`eeid`),
  KEY `userid` (`userid`),
  CONSTRAINT `eb_ee_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `eb_user` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eb_ee`
--

LOCK TABLES `eb_ee` WRITE;
/*!40000 ALTER TABLE `eb_ee` DISABLE KEYS */;
INSERT INTO `eb_ee` VALUES (1,'you can do it ','you can do everything you want to ,','2016-06-24 08:59:30',1),(2,'some one like you ','everyone should be more care about himself','2016-06-24 09:00:11',1),(3,'坚持学英语 ','如果你每天坚持学英语，那你的英语一定会好起来','2016-06-24 09:02:01',1),(4,'每天学习1个小时的英语单词','每天学习1个小时的英语单词，你的词汇量大了，表达能力就变强了','2016-06-24 09:17:18',1);
/*!40000 ALTER TABLE `eb_ee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eb_ev`
--

DROP TABLE IF EXISTS `eb_ev`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eb_ev` (
  `evid` int(11) NOT NULL AUTO_INCREMENT,
  `evtitle` varchar(500) DEFAULT NULL,
  `evcont` varchar(10000) DEFAULT NULL,
  `evtime` varchar(20) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`evid`),
  KEY `userid` (`userid`),
  CONSTRAINT `eb_ev_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `eb_user` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eb_ev`
--

LOCK TABLES `eb_ev` WRITE;
/*!40000 ALTER TABLE `eb_ev` DISABLE KEYS */;
INSERT INTO `eb_ev` VALUES (2,'2freindship','2freindship is good','2016-06-23 19:44:04',2),(4,'??????????1','','2016-06-23 22:06:36',NULL),(5,'movie communicate by manager','','2016-06-23 22:08:32',NULL),(8,'Friends is my favorite',' I like Freinds ,I have finished it three more time ','2016-06-24 09:33:40',1);
/*!40000 ALTER TABLE `eb_ev` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eb_evcomm`
--

DROP TABLE IF EXISTS `eb_evcomm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eb_evcomm` (
  `evcommid` int(11) NOT NULL AUTO_INCREMENT,
  `evid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `evcommcont` varchar(10000) DEFAULT NULL,
  `evcommtime` varchar(20) DEFAULT NULL,
  `evcommparentid` int(10) DEFAULT '0',
  PRIMARY KEY (`evcommid`),
  KEY `evid` (`evid`),
  KEY `userid` (`userid`),
  CONSTRAINT `eb_evcomm_ibfk_1` FOREIGN KEY (`evid`) REFERENCES `eb_ev` (`evid`),
  CONSTRAINT `eb_evcomm_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `eb_user` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eb_evcomm`
--

LOCK TABLES `eb_evcomm` WRITE;
/*!40000 ALTER TABLE `eb_evcomm` DISABLE KEYS */;
INSERT INTO `eb_evcomm` VALUES (61,2,1,'1','2016-06-23 19:37:16',0),(62,2,1,'2','2016-06-23 19:37:16',0),(67,2,2,'yes','2016-06-23 19:37:16',0),(72,2,1,'11','2016-06-23 19:37:16',0);
/*!40000 ALTER TABLE `eb_evcomm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eb_notice`
--

DROP TABLE IF EXISTS `eb_notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eb_notice` (
  `noid` int(11) NOT NULL AUTO_INCREMENT,
  `notitle` varchar(500) DEFAULT NULL,
  `nocont` varchar(10000) DEFAULT NULL,
  `notime` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`noid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eb_notice`
--

LOCK TABLES `eb_notice` WRITE;
/*!40000 ALTER TABLE `eb_notice` DISABLE KEYS */;
INSERT INTO `eb_notice` VALUES (6,'英语0基础进阶 新概念一二综合英语口语今日特价 直达四六级','各位注意各位注意啦！特价特价特价!原价800元  今天购买99元！明天恢复原价啦！快购买 ！绝对超值！ 音标+新概念一二+口语+语法','2016-06-23 19:43:19'),(11,'每天坚持学英语','如果你每天坚持学英语，那你的英语水平一定会日渐增长，如果你每天坚持学英语，那你的英语水平一定会日渐增长，如果你每天坚持学英语，那你的英语水平一定会日渐增长，如果你每天坚持学英语，那你的英语水平一定会日渐增长，如果你每天坚持学英语，那你的英语水平一定会日渐增长，如果你每天坚持学英语，那你的英语水平一定会日渐增长，如果你每天坚持学英语，那你的英语水平一定会日渐增长，','2016-06-24 09:01:13'),(12,'Notice--关于英语网络公开课的通知','英语公开课与2016-6-19日在QQ课堂上与大家见面，敬请期待','2016-06-24 09:08:02');
/*!40000 ALTER TABLE `eb_notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eb_user`
--

DROP TABLE IF EXISTS `eb_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eb_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `userpass` varchar(32) DEFAULT NULL,
  `userimage` blob,
  `type` varchar(1) DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eb_user`
--

LOCK TABLES `eb_user` WRITE;
/*!40000 ALTER TABLE `eb_user` DISABLE KEYS */;
INSERT INTO `eb_user` VALUES (1,'menglichen','123','324352525','0'),(2,'luminshi','123','324352525','0'),(3,'chenmengli','123','1111','1');
/*!40000 ALTER TABLE `eb_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-24 11:10:36
