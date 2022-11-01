-- MySQL dump 10.10
--
-- Host: p3nld50mysql9.secureserver.net    Database: tayloramt
-- ------------------------------------------------------
-- Server version	5.0.67-log

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
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE `forum` (
  `username` varchar(20) default NULL,
  `number` int(20) default NULL,
  `date` varchar(50) default NULL,
  `room` varchar(20) default NULL,
  `topic` varchar(50) default NULL,
  `threadcount` int(10) default NULL,
  `message` varchar(5000) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum`
--


/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
LOCK TABLES `forum` WRITE;
INSERT INTO `forum` VALUES ('Alicia',1236174979,'2009/03/04 6:56am','General Discussion','Dear Abba',1,'Instead of writing a diary or journal, I\\\'ve decided to start writing letters to you. I never knew how to address a diary entry or who I intended on reading it. I probably don\\\'t want anyone reading some of it, but then why do I write? I guess I just need a good friend, and you are the best friend I could ask for. \r\n\r\nI\\\'m not sure how this is going to work out. I don\\\'t know if maybe the server might go down and I might lose a lot of writing and work, or someone might hack my site and read my personal stuff. I leave that up to you. I never had much luck getting people to notice me when I tried to be public, why should anyone want to now? At least this is something I can access from any internet capable device anywhere, and if my computer goes down, this place will still be here.\r\n\r\nI know this isn\\\'t much of a beginning letter, but I don\\\'t even know if the database will work yet.\r\n\r\nAlicia'),('Alicia',1236175406,'2009/03/04 7:03am','General Discussion','Test for Slashes',1,'Testing for slash bug don\\\'t show yourself you\\\'re awful!');
UNLOCK TABLES;
/*!40000 ALTER TABLE `forum` ENABLE KEYS */;

--
-- Table structure for table `guestbook`
--

DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `name` varchar(20) default NULL,
  `location` varchar(20) default NULL,
  `comments` varchar(5000) default NULL,
  `date` int(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guestbook`
--


/*!40000 ALTER TABLE `guestbook` DISABLE KEYS */;
LOCK TABLES `guestbook` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `guestbook` ENABLE KEYS */;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `name` varchar(20) default NULL,
  `location` varchar(20) default NULL,
  `email` varchar(30) default NULL,
  `password` varchar(16) default NULL,
  `age` varchar(20) default NULL,
  `date` int(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--


/*!40000 ALTER TABLE `members` DISABLE KEYS */;
LOCK TABLES `members` WRITE;
INSERT INTO `members` VALUES ('Alicia','Wonderland','MiriamAMT@gmail.com','taylor','3/26',1236174248);
UNLOCK TABLES;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

