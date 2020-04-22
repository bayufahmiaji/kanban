-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: stp
-- ------------------------------------------------------
-- Server version	8.0.17

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
-- Table structure for table `listteam`
--

DROP TABLE IF EXISTS `listteam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `listteam` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_project` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listteam`
--

LOCK TABLES `listteam` WRITE;
/*!40000 ALTER TABLE `listteam` DISABLE KEYS */;
INSERT INTO `listteam` VALUES (1,1,'to do','2019-11-22 19:01:07','2019-11-22 19:01:07'),(2,1,'doing','2019-11-22 19:48:11','2019-11-22 19:48:11'),(3,1,'done','2019-11-22 19:48:26','2019-11-22 19:48:26'),(4,2,'Resource','2019-11-26 23:35:42','2019-11-26 23:35:42'),(5,2,'doing','2019-11-26 23:35:54','2019-11-26 23:35:54'),(6,4,'to do','2019-11-27 01:26:17','2019-11-27 01:26:17'),(7,4,'doing','2019-11-27 01:26:39','2019-11-27 01:26:39'),(8,4,'done','2019-11-27 01:27:21','2019-11-27 01:27:21'),(9,3,'To Do','2019-11-28 20:55:29','2019-11-28 20:55:29'),(10,5,'Resource','2020-02-06 01:18:58','2020-02-06 01:18:58'),(11,5,'To Do','2020-02-06 01:19:12','2020-02-06 01:19:12'),(12,5,'Doing','2020-02-06 01:19:26','2020-02-06 01:19:26'),(13,5,'On Hold','2020-02-06 01:19:38','2020-02-06 01:19:38'),(14,5,'Done','2020-02-06 01:19:52','2020-02-06 01:19:52');
/*!40000 ALTER TABLE `listteam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_team` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,4,'Aldy Hysam','0899719203','Bandung',1,'2019-11-20 20:02:33','2019-11-20 20:02:33','aldy@gmail.com'),(2,2,'Fauzan','08901641423','Bandung',1,'2019-11-20 20:02:58','2019-11-20 20:02:58','fauzan@gmail.com'),(4,7,'Acenx','0899719710','Bandung',1,'2019-11-27 00:56:56','2019-11-27 00:56:56','acenx@gmail.com'),(5,5,'Noval','08983103742','Bandung',1,'2019-11-27 00:57:17','2019-11-27 00:57:17','noval@gmail.com');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (9,'2014_10_12_000000_create_users_table',1),(10,'2014_10_12_100000_create_password_resets_table',1),(11,'2019_08_25_155932_create_list_table',1),(12,'2019_08_27_095131_create_task_table',1),(13,'2019_10_04_123351_create_projects_table',1),(14,'2019_10_05_142404_create_teams_table',1),(15,'2019_10_05_145518_create_members_table',1),(16,'2019_10_13_161917_create_projectteams_table',1),(17,'2019_11_21_023928_add_email_to_user',2),(18,'2019_11_23_004529_create_listteam_table',3),(19,'2019_11_23_005057_create_tasksteam_table',4),(20,'2019_11_23_020243_add_status_to_task_team',5),(21,'2019_11_25_143101_create_taskhandles_table',6),(22,'2019_11_25_144023_add_idtask_to_taskhandle',7),(24,'2019_11_27_083808_add_data_to_taskhandles',8),(25,'2019_11_29_025707_create_taskhandles_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'pkl',1,'2019-10-24 19:22:24','2019-10-24 19:22:24'),(2,'pkl 3',1,'2019-10-24 19:58:55','2019-10-24 19:58:55'),(3,'aaaaa',1,'2019-11-17 07:48:24','2019-11-17 07:48:24');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projectteams`
--

DROP TABLE IF EXISTS `projectteams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projectteams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_tim` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projectteams`
--

LOCK TABLES `projectteams` WRITE;
/*!40000 ALTER TABLE `projectteams` DISABLE KEYS */;
INSERT INTO `projectteams` VALUES (1,1,'Project Baru','2019-10-13 10:13:34','2019-10-13 10:13:34'),(2,1,'Project Terbaru','2019-10-28 00:00:40','2019-10-28 00:00:40'),(3,1,'coba','2019-11-17 07:04:55','2019-11-17 07:04:55'),(4,1,'ngabobodo','2019-11-27 01:25:29','2019-11-27 01:25:29'),(5,1,'kamis','2020-02-06 01:17:33','2020-02-06 01:17:33');
/*!40000 ALTER TABLE `projectteams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `task` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_list` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taskstart` date DEFAULT NULL,
  `taskend` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` VALUES (1,5,'Membuat UML','membuat uml mulai dari Use Case sampai Sequen',NULL,NULL,'2020-02-13 07:05:03','2020-02-13 07:05:03');
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taskhandles`
--

DROP TABLE IF EXISTS `taskhandles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taskhandles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_task` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `nama_user` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama_project` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taskhandles`
--

LOCK TABLES `taskhandles` WRITE;
/*!40000 ALTER TABLE `taskhandles` DISABLE KEYS */;
INSERT INTO `taskhandles` VALUES (1,4,4,1,'Aldy Hysam','Project Baru','2019-11-28 20:24:35','2019-11-28 20:24:35'),(2,5,8,5,'Noval','kamis','2020-02-06 01:24:58','2020-02-06 01:24:58');
/*!40000 ALTER TABLE `taskhandles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasksteam`
--

DROP TABLE IF EXISTS `tasksteam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tasksteam` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_list` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taskhandle` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taskstart` date DEFAULT NULL,
  `taskend` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasksteam`
--

LOCK TABLES `tasksteam` WRITE;
/*!40000 ALTER TABLE `tasksteam` DISABLE KEYS */;
INSERT INTO `tasksteam` VALUES (1,2,'Membuat UMLL','Aing Maung',NULL,'2019-11-06','2019-11-18','2019-11-24 06:47:55','2019-11-26 19:34:16','doing'),(2,3,'Menyusun Database',NULL,NULL,NULL,NULL,'2019-11-26 07:10:25','2019-11-26 07:49:42','done'),(3,4,'Membuat UML',NULL,NULL,NULL,NULL,'2019-11-26 23:36:32','2019-11-26 23:36:32','Resource'),(4,1,'design database',NULL,NULL,NULL,NULL,'2019-11-27 00:58:38','2019-11-27 00:58:38','to do'),(5,1,'coding',NULL,NULL,NULL,NULL,'2019-11-27 00:58:51','2019-11-27 00:58:51','to do'),(6,1,'Mendesign Database',NULL,NULL,NULL,NULL,'2019-11-27 00:59:13','2019-11-27 00:59:13','to do'),(7,6,'Penetapan',NULL,NULL,NULL,NULL,'2019-11-27 01:28:10','2019-11-27 01:28:10','to do'),(8,12,'Membuat UML','membuat uml mulai dari Use Case sampai Sequen',NULL,NULL,NULL,'2020-02-06 01:20:50','2020-02-06 01:26:01','Doing');
/*!40000 ALTER TABLE `tasksteam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_list`
--

DROP TABLE IF EXISTS `tb_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_list` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_project` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_list`
--

LOCK TABLES `tb_list` WRITE;
/*!40000 ALTER TABLE `tb_list` DISABLE KEYS */;
INSERT INTO `tb_list` VALUES (1,1,'to do','2019-10-24 19:23:22','2019-10-24 19:23:22'),(2,1,'doing','2019-10-24 19:23:39','2019-10-24 19:23:39'),(3,2,'pkl','2019-11-17 07:22:43','2019-11-17 07:22:43'),(4,2,'done','2019-11-17 07:23:11','2019-11-17 07:23:11'),(5,3,'To Do','2020-02-13 07:02:25','2020-02-13 07:02:25'),(6,3,'Doing','2020-02-13 07:34:43','2020-02-13 07:34:43'),(7,3,'Done','2020-02-13 07:34:56','2020-02-13 07:34:56');
/*!40000 ALTER TABLE `tb_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name_user` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,1,'Bayu Fahmiaji','pkl','2019-10-13 09:52:58','2019-10-13 09:52:58'),(2,1,'Bayu Fahmiaji','pkl2','2019-10-13 09:53:20','2019-10-13 09:53:20'),(3,1,'Bayu Fahmiaji','PKL 2019','2019-11-17 07:47:20','2019-11-17 07:47:20'),(4,1,'Bayu Fahmiaji','LPKIA','2019-11-28 22:27:09','2019-11-28 22:27:09');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Bayu Fahmiaji','bayufahmiaji1@gmail.com',NULL,'$2y$10$RI2esH/pRQ1cVofJD0ZrAO0koobPfcAl9m3AM5WEFMjkpwVvS26Gi',NULL,NULL,NULL,'2019-10-13 09:49:25','2019-10-13 09:49:25'),(2,'Fauzan','fauzan@gmail.com',NULL,'$2y$10$novQgTutIASadls0io30/uwUlWLw74Kk2H4IhcWWsvzfGvI2.xoYa','08901641423','Bandung',NULL,'2019-10-13 09:49:52','2019-11-20 19:30:12'),(3,'Ramdan','Ramdan@gmail.com',NULL,'$2y$10$AQJPVIFvDY1FAOA4XgAGQu0QU0ujcYOQjbelfOoKX5pfweba9MNDW','0882222209','Bandung',NULL,'2019-10-13 09:50:20','2019-11-26 23:12:05'),(4,'Aldy Hysam','aldy@gmail.com',NULL,'$2y$10$JwNi4t5YugFIM.8XWiVVdu6xbxpD35YFJXCXmTct87i43Oc8mbT7S','0899719203','Bandung',NULL,'2019-10-13 09:50:43','2019-10-28 00:02:31'),(5,'Noval','noval@gmail.com',NULL,'$2y$10$BZ6B2VOpVJr96JV7Tf7aOe50j/XmUnE3SmM4uBAX9n00BTuOxj246','08983103742','Bandung',NULL,'2019-11-20 18:55:04','2019-11-26 23:14:49'),(6,'rizki','rizki@gmail.com',NULL,'$2y$10$rvUD0vjD51/XHFgy0YT4FevhVFSSbm4TCFoboraASmCKw/Oe6fUkK','08997192012','Bandung',NULL,'2019-11-26 23:16:12','2019-11-26 23:17:43'),(7,'Acenx','acenx@gmail.com',NULL,'$2y$10$BTq8b0tUGSMWSkw.buZ.3.2Xvd9ueBdkGD7TbD2GbPz9MZNxKALcu','0899719710','Bandung',NULL,'2019-11-26 23:20:57','2019-11-26 23:29:17'),(8,'hilman','hilman@gmail.com',NULL,'$2y$10$g3vQLus9Ou5dsvzYyd8SXeH825nhNjggg3Bu9qZEmHdYSIhTp3swy',NULL,NULL,NULL,'2019-11-26 23:21:39','2019-11-26 23:21:39'),(9,'bangkit','bangkit@gmail.com',NULL,'$2y$10$OWwPq/QOegxfYAQ56CrRYuhm0ZwV9rtmy1yB.yTlId2NUgCOS5GGa',NULL,NULL,NULL,'2019-11-26 23:22:10','2019-11-26 23:22:10'),(10,'agi','agi@gmail.com',NULL,'$2y$10$jw/APqHxw7QmzAKA4PsQVu5bVbtFQnyktx1ite5zs.oV5l7vI.hLS',NULL,NULL,NULL,'2019-11-26 23:23:03','2019-11-26 23:23:03'),(11,'rizky','rizky@gmail.com',NULL,'$2y$10$h89UgEyjKyVHKJjDnPEv8.HAuNr2zt70OU61oy20jJD6F6P/WOW4C',NULL,NULL,NULL,'2019-11-26 23:23:39','2019-11-26 23:23:39'),(12,'rahmat','rahmat@gmail.com',NULL,'$2y$10$pY2W.PKYhlQAIzQOz4puDOimE4fKlIpfy6ZocctidhuBrUrgz.ecu',NULL,NULL,NULL,'2019-11-26 23:24:52','2019-11-26 23:24:52'),(13,'ryan','ryan@gmail.com',NULL,'$2y$10$o1Ns/P9CE36ptjq8Oq3t7uWJwr9vh2h76HB4Yh470qfpJ5lquRJf6',NULL,NULL,NULL,'2019-11-26 23:25:58','2019-11-26 23:25:58'),(14,'tubagus','tubagus@gmail.com',NULL,'$2y$10$SEapmPDNf62JuPr.F9iLJu66B3r754O71WY9QAkavaOxRwyPUR9bS',NULL,NULL,NULL,'2019-11-26 23:26:48','2019-11-26 23:26:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-22  7:18:30
