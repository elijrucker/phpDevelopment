-- MySQL dump 10.13  Distrib 8.0.43, for Linux (x86_64)
--
-- Host: localhost    Database: Project1
-- ------------------------------------------------------
-- Server version	8.0.43-0ubuntu0.24.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `madLib`
--

DROP TABLE IF EXISTS `madLib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `madLib` (
  `id` int NOT NULL AUTO_INCREMENT,
  `noun` varchar(20) DEFAULT NULL,
  `verb` varchar(20) DEFAULT NULL,
  `adjective` varchar(20) DEFAULT NULL,
  `adverb` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `madLib_whole` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `madLib`
--

LOCK TABLES `madLib` WRITE;
/*!40000 ALTER TABLE `madLib` DISABLE KEYS */;
INSERT INTO `madLib` VALUES (1,'elephants','dancing','sparkly','mysteriously','2025-10-06 01:29:01','We are going to the zoo today, I hope we see a(n) <strong>sparkly</strong> <strong>elephants</strong>. They are my favorite when they are <strong>dancinging</strong> <strong>mysteriously</strong>.'),(2,'elephants','dancing','sparkly','mysteriously','2025-10-06 01:30:28','We are going to the zoo today, I hope we see  <strong>sparkly</strong> <strong>elephants</strong>. They are my favorite when they are <strong>dancinging</strong> <strong>mysteriously</strong>.'),(3,'crocodiles','sliding','jazzy','slowly','2025-10-06 01:32:58','We are going to the zoo today, I hope we see  <strong>jazzy</strong> <strong>crocodiles</strong>. They are my favorite when they are <strong>slidinging</strong> <strong>slowly</strong>.'),(4,'crocodiles','sliding','jazzy','slowly','2025-10-06 01:34:09','We are going to the zoo today, I hope we see  <strong>jazzy</strong> <strong>crocodiles</strong>. They are my favorite when they are <strong>sliding<strong>slowly</strong>.'),(5,'crocodiles','sliding','jazzy','slowly','2025-10-06 01:34:25','We are going to the zoo today, I hope we see  <strong>jazzy</strong> <strong>crocodiles</strong>. They are my favorite when they are <strong>sliding <strong>slowly</strong>.');
/*!40000 ALTER TABLE `madLib` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-10-05 21:01:11
