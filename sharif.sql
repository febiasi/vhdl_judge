-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sharif
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `shj_assignments`
--

DROP TABLE IF EXISTS `shj_assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shj_assignments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `problems` smallint(4) NOT NULL,
  `total_submits` int(11) NOT NULL,
  `open` tinyint(1) NOT NULL,
  `scoreboard` tinyint(1) NOT NULL,
  `javaexceptions` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `start_time` datetime NOT NULL,
  `finish_time` datetime NOT NULL,
  `extra_time` int(11) NOT NULL,
  `late_rule` text NOT NULL,
  `participants` text NOT NULL,
  `moss_update` varchar(30) NOT NULL DEFAULT 'Never',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shj_assignments`
--

LOCK TABLES `shj_assignments` WRITE;
/*!40000 ALTER TABLE `shj_assignments` DISABLE KEYS */;
INSERT INTO `shj_assignments` VALUES (1,'Teste 1',1,5,1,0,0,'','2015-08-26 00:00:00','2015-11-26 00:00:00',900,'/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;','ALL','Never'),(4,'VHDL1',1,2,1,0,0,'','2015-10-26 00:00:00','2015-11-26 00:00:00',600,'/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;','ALL','Never');
/*!40000 ALTER TABLE `shj_assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shj_notifications`
--

DROP TABLE IF EXISTS `shj_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shj_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shj_notifications`
--

LOCK TABLES `shj_notifications` WRITE;
/*!40000 ALTER TABLE `shj_notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `shj_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shj_problems`
--

DROP TABLE IF EXISTS `shj_problems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shj_problems` (
  `assignment` smallint(4) NOT NULL,
  `id` smallint(4) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `score` int(11) NOT NULL,
  `is_upload_only` tinyint(1) NOT NULL DEFAULT '0',
  `c_time_limit` int(11) NOT NULL DEFAULT '500',
  `python_time_limit` int(11) NOT NULL DEFAULT '1500',
  `java_time_limit` int(11) NOT NULL DEFAULT '2000',
  `memory_limit` int(11) NOT NULL DEFAULT '50000',
  `allowed_languages` text NOT NULL,
  `diff_cmd` varchar(20) NOT NULL DEFAULT 'diff',
  `diff_arg` varchar(20) NOT NULL DEFAULT '-bB',
  KEY `assignment_id` (`assignment`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shj_problems`
--

LOCK TABLES `shj_problems` WRITE;
/*!40000 ALTER TABLE `shj_problems` DISABLE KEYS */;
INSERT INTO `shj_problems` VALUES (1,1,'Problem ',100,0,500,1500,2000,50000,'C,C++,Python 2,Python 3,Java','diff','-bB'),(4,1,'7400',100,0,500,1500,2000,50000,'VHDL','diff','-bB');
/*!40000 ALTER TABLE `shj_problems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shj_queue`
--

DROP TABLE IF EXISTS `shj_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shj_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `submit_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `assignment` smallint(4) NOT NULL,
  `problem` smallint(4) NOT NULL,
  `type` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `shj_suap_unique` (`submit_id`,`username`,`assignment`,`problem`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shj_queue`
--

LOCK TABLES `shj_queue` WRITE;
/*!40000 ALTER TABLE `shj_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `shj_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shj_scoreboard`
--

DROP TABLE IF EXISTS `shj_scoreboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shj_scoreboard` (
  `assignment` smallint(4) NOT NULL,
  `scoreboard` text NOT NULL,
  KEY `assignment` (`assignment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shj_scoreboard`
--

LOCK TABLES `shj_scoreboard` WRITE;
/*!40000 ALTER TABLE `shj_scoreboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `shj_scoreboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shj_sessions`
--

DROP TABLE IF EXISTS `shj_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shj_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shj_sessions`
--

LOCK TABLES `shj_sessions` WRITE;
/*!40000 ALTER TABLE `shj_sessions` DISABLE KEYS */;
INSERT INTO `shj_sessions` VALUES ('0b1b925f73f7272f499c45cab78e7bd1','192.168.1.107','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/600.8.9 (KHTML, like Gecko) Version/8.0.8 Safari/600.8.9',1441923621,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('119e5348ff9a7e8dac88164ae4d335fc','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36',1444849678,''),('17fbb3aafb9659447602abd193420870','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.71 Safari/537.36',1445889497,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('192bf4cd9b0ce8da6a505bf79fa5247c','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36',1446762245,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('2fc8d871a35e8011993d97aa6b19fc6d','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36',1444849678,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('3e46ffc23d1e38bf1e6fb8f400796464','192.168.1.107','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/600.8.9 (KHTML, like Gecko) Version/8.0.8 Safari/600.8.9',1441143043,'a:2:{s:8:\"username\";s:5:\"bruno\";s:9:\"logged_in\";s:1:\"1\";}'),('4c2367fe15d65bc463e65dc177d1e2c3','192.168.56.1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36',1443475287,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('50b59a8b79d1b6290ed8cac5ef91cc96','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0',1443487647,'a:2:{s:8:\"username\";s:6:\"fbiasi\";s:9:\"logged_in\";s:1:\"1\";}'),('5cd9447c87a5241042985d9935dd69e2','192.168.0.102','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/600.7.12 (KHTML, like Gecko) Version/8.0.7 Safari/600.7.12',1440576467,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('5eb9bd7346b82dc3b859d32ada4a70ab','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0',1443562080,'a:2:{s:8:\"username\";s:6:\"fbiasi\";s:9:\"logged_in\";s:1:\"1\";}'),('5ebb3d5f112febad6dcf49bda0e0597f','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36',1447275160,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('61849931375bcc852f70ead0a8892ebd','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0',1444075663,'a:2:{s:8:\"username\";s:6:\"fbiasi\";s:9:\"logged_in\";s:1:\"1\";}'),('680d17e9adce5bb2622284cb19aa1c63','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36',1443562052,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('7259dc6ff6c607f254f528bd393ecffb','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36',1443741666,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('72b1fee3751261d8dd5687e3df867196','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36',1446589922,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('737da64fe0d1644de4fe4a6c0359378a','172.21.83.155','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/600.8.9 (KHTML, like Gecko) Version/8.0.8 Safari/600.8.9',1440629269,'a:2:{s:8:\"username\";s:5:\"bruno\";s:9:\"logged_in\";s:1:\"1\";}'),('75166ff59ccd835f74252cfa000d4072','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36',1443487613,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('89590c7a86e1ff4f890c378ded418bf9','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36',1443658939,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('9551e0a44402a619938c52a3acc90476','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36',1443744160,''),('99454aab9116ba22b8fdb2d2d6865b9a','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36',1444082191,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('adc09ff7a9d14c6c6fe354750082fe8f','192.168.1.107','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/600.7.12 (KHTML, like Gecko) Version/8.0.7 Safari/600.7.12',1440625398,'a:2:{s:8:\"username\";s:5:\"bruno\";s:9:\"logged_in\";s:1:\"1\";}'),('ce1be80172f7b3d9544152ca2407651d','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36',1446673678,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('e0575e9b013a7193f637a5a299666d16','172.20.5.205','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36',1446592670,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('e3944c5a59503dd89dd3831d65cd83c0','192.168.1.107','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/600.8.9 (KHTML, like Gecko) Version/8.0.8 Safari/600.8.9',1441923318,''),('fa9a704b5598321547d79799b863cebd','172.21.83.155','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.3',1440629606,'a:2:{s:8:\"username\";s:10:\"balbertini\";s:9:\"logged_in\";s:1:\"1\";}'),('ff0a5501b2528411d8f5a10e98050ba2','192.168.56.1','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0',1443475253,'a:2:{s:8:\"username\";s:6:\"fbiasi\";s:9:\"logged_in\";s:1:\"1\";}');
/*!40000 ALTER TABLE `shj_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shj_settings`
--

DROP TABLE IF EXISTS `shj_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shj_settings` (
  `shj_key` varchar(50) NOT NULL,
  `shj_value` text NOT NULL,
  KEY `shj_key` (`shj_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shj_settings`
--

LOCK TABLES `shj_settings` WRITE;
/*!40000 ALTER TABLE `shj_settings` DISABLE KEYS */;
INSERT INTO `shj_settings` VALUES ('timezone','Asia/Tehran'),('tester_path','/home/sharif/tester'),('assignments_root','/home/sharif/assignments'),('file_size_limit','50'),('output_size_limit','1024'),('queue_is_working','0'),('default_late_rule','/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;'),('enable_easysandbox','1'),('enable_c_shield','1'),('enable_cpp_shield','1'),('enable_py2_shield','1'),('enable_py3_shield','1'),('enable_java_policy','1'),('enable_log','1'),('submit_penalty','300'),('enable_registration','0'),('registration_code','0'),('mail_from','shj@example.com'),('mail_from_name','Sharif Judge'),('reset_password_mail','<p>\nSomeone requested a password reset for your Sharif Judge account at {SITE_URL}.\n</p>\n<p>\nTo change your password, visit this link:\n</p>\n<p>\n<a href=\"{RESET_LINK}\">Reset Password</a>\n</p>\n<p>\nThe link is valid for {VALID_TIME}. If you don\'t want to change your password, just ignore this email.\n</p>'),('add_user_mail','<p>\nHello! You are registered in Sharif Judge at {SITE_URL} as {ROLE}.\n</p>\n<p>\nYour username: {USERNAME}\n</p>\n<p>\nYour password: {PASSWORD}\n</p>\n<p>\nYou can log in at <a href=\"{LOGIN_URL}\">{LOGIN_URL}</a>\n</p>'),('moss_userid',''),('results_per_page_all','40'),('results_per_page_final','80'),('week_start','0');
/*!40000 ALTER TABLE `shj_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shj_submissions`
--

DROP TABLE IF EXISTS `shj_submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shj_submissions` (
  `submit_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `assignment` smallint(4) NOT NULL,
  `problem` smallint(4) NOT NULL,
  `is_final` tinyint(1) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  `pre_score` int(11) NOT NULL,
  `coefficient` varchar(6) NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `main_file_name` varchar(30) NOT NULL,
  `file_type` varchar(6) NOT NULL,
  KEY `assignment_submit_id` (`assignment`,`submit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shj_submissions`
--

LOCK TABLES `shj_submissions` WRITE;
/*!40000 ALTER TABLE `shj_submissions` DISABLE KEYS */;
INSERT INTO `shj_submissions` VALUES (3,'balbertini',1,1,0,'2015-08-27 00:20:58','SCORE',10000,'100','1-3','1','c'),(4,'balbertini',1,1,1,'2015-08-27 00:24:16','SCORE',10000,'100','1-4','1','cpp'),(1,'balbertini',4,1,0,'2015-10-26 20:59:26','SCORE',10000,'100','pcs7400-1','pcs7400','vhdl'),(2,'balbertini',4,1,1,'2015-11-11 21:48:52','SCORE',10000,'100','pcs7400-2','pcs7400','vhdl');
/*!40000 ALTER TABLE `shj_submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shj_users`
--

DROP TABLE IF EXISTS `shj_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shj_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `display_name` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(40) NOT NULL,
  `role` varchar(20) NOT NULL,
  `passchange_key` varchar(60) NOT NULL DEFAULT '',
  `passchange_time` datetime DEFAULT NULL,
  `first_login_time` datetime DEFAULT NULL,
  `last_login_time` datetime DEFAULT NULL,
  `selected_assignment` smallint(4) NOT NULL DEFAULT '0',
  `dashboard_widget_positions` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shj_users`
--

LOCK TABLES `shj_users` WRITE;
/*!40000 ALTER TABLE `shj_users` DISABLE KEYS */;
INSERT INTO `shj_users` VALUES (1,'balbertini','$2a$08$ZRWlAwnJpH3.tC8AtWdT..m2s1PH/fKVebqX6P3vul.1GUYO1ntBe','','balbertini@gmail.com','admin','',NULL,'2015-08-26 07:46:52','2015-11-11 21:40:51',4,''),(3,'fbiasi','$2a$08$v0f/0uRQo/sma3WY.wkrz.QfUPf9xAlVSTt/AGddbAF8t0ob5og0S','','febias@gmail.com','student','',NULL,'2015-09-28 21:50:58','2015-10-05 20:32:35',3,'');
/*!40000 ALTER TABLE `shj_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-11 16:59:08
