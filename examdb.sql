-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: examdb
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `answer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `is_true` tinyint NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `question` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_answer_question_idx` (`question`),
  CONSTRAINT `fk_answer_question` FOREIGN KEY (`question`) REFERENCES `question` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer`
--

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
INSERT INTO `answer` VALUES (94,'Câu trả lời 1',0,'2022-01-05 21:07:06','2022-01-05 21:07:06',41),(95,'Câu trả lời 2',0,'2022-01-05 21:07:06','2022-01-05 21:07:06',41),(96,'Câu trả lời 3',0,'2022-01-05 21:07:06','2022-01-05 21:07:06',41),(97,'Câu trả lời 4',1,'2022-01-05 21:07:06','2022-01-05 21:07:06',41),(98,'Câu trả lời 5',0,'2022-01-05 21:14:46','2022-01-05 21:14:46',42),(99,'Câu trả lời 6',1,'2022-01-05 21:14:46','2022-01-05 21:14:46',42),(100,'Câu trả lời 7',0,'2022-01-05 21:14:46','2022-01-05 21:14:46',42),(101,'Câu trả lời 8',0,'2022-01-05 21:14:46','2022-01-05 21:14:46',42),(102,'Câu trả lời 9',0,'2022-02-15 22:46:45','2022-02-15 22:46:45',43),(103,'Câu trả lời 10',0,'2022-02-15 22:46:45','2022-02-15 22:46:45',43),(104,'Câu trả lời 11',1,'2022-02-15 22:46:45','2022-02-15 22:46:45',43),(105,'Câu trả lời 12',0,'2022-02-15 22:46:45','2022-02-15 22:46:45',43),(106,'Câu trả lời 13',1,'2022-02-16 22:46:38','2022-02-16 22:46:38',44),(107,'Câu trả lời 14',0,'2022-02-16 22:46:38','2022-02-16 22:46:38',44),(108,'Câu trả lời 15',0,'2022-02-16 22:46:38','2022-02-16 22:46:38',44),(109,'Câu trả lời 16',0,'2022-02-16 22:46:38','2022-02-16 22:46:38',44),(110,'Câu trả lời 17',1,'2022-02-16 23:09:36','2022-02-16 23:09:36',45),(111,'Câu trả lời 18',0,'2022-02-16 23:09:36','2022-02-16 23:09:36',45),(112,'Câu trả lời 19',0,'2022-02-16 23:09:36','2022-02-16 23:09:36',45),(113,'Câu trả lời 20',0,'2022-02-16 23:09:36','2022-02-16 23:09:36',45),(114,'Câu trả lời 21',1,'2022-02-17 21:36:55','2022-02-17 21:36:55',46),(115,'Câu trả lời 22',0,'2022-02-17 21:36:55','2022-02-17 21:36:55',46),(116,'Câu trả lời 23',0,'2022-02-17 21:36:55','2022-02-17 21:36:55',46),(117,'Câu trả lời 24',0,'2022-02-17 21:36:55','2022-02-17 21:36:55',46),(118,'Câu trả lời 25',1,'2022-02-17 21:36:59','2022-02-17 21:36:59',47),(119,'Câu trả lời 26',0,'2022-02-17 21:36:59','2022-02-17 21:36:59',47),(120,'Câu trả lời 27',0,'2022-02-17 21:36:59','2022-02-17 21:36:59',47),(121,'Câu trả lời 28',0,'2022-02-17 21:36:59','2022-02-17 21:36:59',47),(122,'Câu trả lời 29',1,'2022-02-17 21:37:04','2022-02-17 21:37:04',48),(123,'Câu trả lời 30',0,'2022-02-17 21:37:04','2022-02-17 21:37:04',48),(124,'Câu trả lời 31',0,'2022-02-17 21:37:04','2022-02-17 21:37:04',48),(125,'Câu trả lời 32',0,'2022-02-17 21:37:04','2022-02-17 21:37:04',48),(126,'Câu trả lời 33',1,'2022-02-17 21:37:10','2022-02-17 21:37:10',49),(127,'Câu trả lời 34',0,'2022-02-17 21:37:10','2022-02-17 21:37:10',49),(128,'Câu trả lời 35',0,'2022-02-17 21:37:10','2022-02-17 21:37:10',49),(129,'Câu trả lời 36',0,'2022-02-17 21:37:10','2022-02-17 21:37:10',49);
/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exam` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `execution_time` int NOT NULL,
  `start_time` datetime NOT NULL,
  `expire_time` datetime NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `subject` int NOT NULL,
  `user` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_exam_subject_idx` (`subject`),
  KEY `fk_exam_user_idx` (`user`),
  CONSTRAINT `fk_exam_subject` FOREIGN KEY (`subject`) REFERENCES `subject` (`id`),
  CONSTRAINT `fk_exam_user` FOREIGN KEY (`user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam`
--

LOCK TABLES `exam` WRITE;
/*!40000 ALTER TABLE `exam` DISABLE KEYS */;
INSERT INTO `exam` VALUES (1,'Thi giữ kì',45,'2021-12-27 12:39:14','2021-12-31 14:51:45',NULL,1,'2021-12-27 12:39:14','2021-12-27 12:39:14',1,2),(2,'Bài thi giữa kì',60,'2021-12-29 18:30:00','2021-12-31 11:00:00','12345678',1,'2021-12-28 08:23:46','2021-12-28 08:23:46',2,2),(3,'Bài thi cuối kì',90,'2021-12-29 08:30:00','2021-12-31 08:30:00','12345678',0,'2021-12-28 15:28:10','2021-12-28 15:28:11',1,2);
/*!40000 ALTER TABLE `exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `question` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `exam` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_question_exam_idx` (`exam`),
  CONSTRAINT `fk_question_exam` FOREIGN KEY (`exam`) REFERENCES `exam` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,'Câu hỏi 1','2021-12-28 10:14:38','2021-12-28 10:14:38',3),(2,'Câu hỏi 2','2021-12-28 16:36:26','2021-12-28 16:36:26',3),(3,'Câu hỏi 3','2021-12-28 16:38:29','2021-12-28 16:38:29',3),(4,'Câu hỏi 4','2021-12-28 16:39:02','2021-12-28 16:39:02',3),(5,'Câu hỏi 5','2021-12-28 16:41:20','2021-12-28 16:41:20',3),(41,'Câu hỏi 8','2022-01-05 21:07:05','2022-01-05 21:07:05',2),(42,'Câu hỏi 9','2022-01-05 21:14:46','2022-01-05 21:14:46',2),(43,'Câu hỏi 10','2022-02-15 22:46:45','2022-02-15 22:46:45',3),(44,'Câu hỏi 11','2022-02-16 22:46:38','2022-02-16 22:46:38',2),(45,'Câu hỏi 12','2022-02-16 23:09:36','2022-02-16 23:09:36',1),(46,'Câu hỏi 13','2022-02-17 21:36:55','2022-02-17 21:36:55',1),(47,'Câu hỏi 14','2022-02-17 21:36:59','2022-02-17 21:36:59',1),(48,'Câu hỏi 15','2022-02-17 21:37:04','2022-02-17 21:37:04',1),(49,'Câu hỏi 16','2022-02-17 21:37:10','2022-02-17 21:37:10',1);
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `scores` (
  `user` int NOT NULL,
  `exam` int NOT NULL,
  `scores` double NOT NULL,
  `submited_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user`,`exam`),
  KEY `fk_scores_exam_idx` (`exam`),
  CONSTRAINT `fk_scores_exam` FOREIGN KEY (`exam`) REFERENCES `exam` (`id`),
  CONSTRAINT `fk_scores_user` FOREIGN KEY (`user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scores`
--

LOCK TABLES `scores` WRITE;
/*!40000 ALTER TABLE `scores` DISABLE KEYS */;
/*!40000 ALTER TABLE `scores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subject` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES (1,'Lập Trình Web'),(2,'Chuyên Đề');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `first_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mail` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `gender` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `student_number` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `avatar` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `role` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `active` tinyint NOT NULL,
  `last_login` datetime NOT NULL,
  `is_login` tinyint NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'user1','12345678','Tường','Nguyễn','nct682000@gmail.com','0948822116','2000-08-06 10:20:25','Nam','1851050178',NULL,'User',1,'2021-12-27 10:20:25',1,NULL,NULL),(3,'user2','12345678','Cường','Nguyễn','qwe123@gmail.com','0123456789','2021-12-27 13:30:07','Nam','1851050014',NULL,'User',1,'2021-12-27 13:30:07',1,NULL,NULL),(4,'user3','12345678','Thành','Châu','asd123@gmail.com','0123456789','2021-12-27 13:31:58','Giới tính khác','1851050130',NULL,'User',1,'2021-12-27 13:31:58',1,NULL,NULL),(5,'user4','12345678','Tựu','Châu','zxc123@gmail.com','0123456789','2021-12-27 13:33:50','Nữ','1851050179',NULL,'User',1,'2021-12-27 13:33:50',1,NULL,NULL),(6,'usertest','$2y$10$vAWClOauFgm9U5/rQ2vCGO5LJ6TOoBKeI43P7hxLS4RofDdlIg6LK','Thưởng','Nguyễn','abcde@ou.edu.vn','0123456789','2000-01-01 00:00:00','Nam','0123912841274','images (11).jpg','User',1,'2021-12-29 15:28:35',0,'2021-12-29 15:28:35','2021-12-29 15:28:35'),(7,'thienthanh','$2y$10$svYSyn4EEfkCxuD60YBqF.NRgpkmz1xoXhlnZcdS9G9jlJLLUYN0a','Thành','Thiên','ctthanh2911@gmail.com','+84969700703','2022-01-11 00:00:00','Nam','123456789','4B95ED1E08400900001.jpg','User',1,'2022-01-28 21:26:56',0,'2022-01-28 21:26:56','2022-01-28 21:26:56');
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

-- Dump completed on 2022-02-18  0:10:31
