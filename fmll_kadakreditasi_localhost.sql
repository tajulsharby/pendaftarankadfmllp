-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: fmllp_kadakreditasi
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jersey_number` int(11) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `is_archived` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NO',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (1,1,'TJ Sharby',3,'43243242342',7,1,6,20,'tajulsharby@gmail.com','0192207870','profile_photo.png',2,'423432545345','DRAFT','NO','2017-10-23 06:18:36','2017-10-23 06:18:36'),(2,1,'Shukry Sharby',3,'45345346',11,3,6,20,'shukrysharby91@gmail.com','0127477855','/home/tjsharby/projects/footballmalaysia/pendaftaran/public/images/1508776394.png',1,'5345345345345','DRAFT','NO','2017-10-23 08:33:14','2017-10-23 08:33:14');
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banks`
--

LOCK TABLES `banks` WRITE;
/*!40000 ALTER TABLE `banks` DISABLE KEYS */;
INSERT INTO `banks` VALUES (1,'CIMB','CIMB','ACTIVE','2017-10-21 12:37:12','2017-10-21 12:37:12'),(2,'Maybank','Maybank','ACTIVE','2017-10-21 12:37:12','2017-10-21 12:37:12'),(3,'Public Bank','Public Bank','ACTIVE','2017-10-21 12:37:12','2017-10-21 12:37:12'),(4,'BSN','BSN','ACTIVE','2017-10-21 12:37:12','2017-10-21 12:37:12');
/*!40000 ALTER TABLE `banks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaigns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_html` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaigns`
--

LOCK TABLES `campaigns` WRITE;
/*!40000 ALTER TABLE `campaigns` DISABLE KEYS */;
INSERT INTO `campaigns` VALUES (1,'Perlawanan Akhir TM Piala Malaysia 2017','Perlawanan Akhir TM Piala Malaysia 2017 untuk staff dan pemain pasukan','','ACTIVE','2017-10-21 06:38:41','2017-10-21 06:38:41');
/*!40000 ALTER TABLE `campaigns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'FMLLP','FMLLP','Football Malaysia LLP','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(2,'FAM','FAM','Football Association Malaysia','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(3,'Penaja','PENAJA','Penaja','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(4,'Pegawai','PEGAWAI','Pegawai','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(5,'LOC','LOC','LOC','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(6,'Pasukan','PASUKAN','Pasukan','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(7,'Sukarelawan','SUKARELAWAN','Sukarelawan','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(8,'Press','PRE','Press','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(9,'Photographer','PHO','Photographer','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(10,'Non-Right Host','NRH','Non-Right Host','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(11,'Host Broadcaster','HB','Host Broadcaster','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04'),(12,'Official Broadcaster','OB','Official Broadcaster','ACTIVE','2017-10-21 11:48:04','2017-10-21 11:48:04');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colourcodes`
--

DROP TABLE IF EXISTS `colourcodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colourcodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) NOT NULL,
  `attribute_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `colour_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colourcodes`
--

LOCK TABLES `colourcodes` WRITE;
/*!40000 ALTER TABLE `colourcodes` DISABLE KEYS */;
/*!40000 ALTER TABLE `colourcodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idtypes`
--

DROP TABLE IF EXISTS `idtypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `idtypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idtypes`
--

LOCK TABLES `idtypes` WRITE;
/*!40000 ALTER TABLE `idtypes` DISABLE KEYS */;
INSERT INTO `idtypes` VALUES (1,'Nombor Kad Pengenalan','Nombor Kad Pengenalan','ACTIVE','2017-10-21 12:35:23','2017-10-21 12:35:23'),(2,'Nombor Passport','Nombor Passport','ACTIVE','2017-10-21 12:35:23','2017-10-21 12:35:23'),(3,'FIFA ID','FIFA ID','ACTIVE','2017-10-21 12:35:23','2017-10-21 12:35:23');
/*!40000 ALTER TABLE `idtypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_10_21_042231_create_categories_table',1),(4,'2017_10_21_044045_create_subcategories_table',1),(5,'2017_10_21_044522_create_applications_table',1),(6,'2017_10_21_044725_create_campaigns_table',1),(7,'2017_10_21_050502_create_idtypes_table',1),(8,'2017_10_21_051354_create_organizations_table',1),(9,'2017_10_21_053225_create_colourcodes_table',1),(10,'2017_10_21_054639_create_banks_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `logo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizations`
--

LOCK TABLES `organizations` WRITE;
/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
INSERT INTO `organizations` VALUES (1,'Johor Darul Takzim','Johor Darul Takzim','logo.png','ACTIVE','2017-10-21 12:41:09','2017-10-21 12:41:09'),(2,'Felda United FC','Felda United FC','logo.png','ACTIVE','2017-10-21 12:41:09','2017-10-21 12:41:09'),(3,'Kedah FA','Kedah FA','logo.png','ACTIVE','2017-10-21 12:41:09','2017-10-21 12:41:09'),(4,'Perak FA','Perak FA','logo.png','ACTIVE','2017-10-21 12:41:09','2017-10-21 12:41:09');
/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

LOCK TABLES `subcategories` WRITE;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` VALUES (1,1,'Staf','Staf','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(2,1,'Ahli Lembaga Pengarah','Ahli Lembaga Pengarah','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(3,2,'Staf','Staf','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(4,2,'Ahli Jawatankuasa Eksekutif','Ahli Jawatankuasa Eksekutif','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(5,3,'TM','TM','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(6,3,'Nike','Nike','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(7,3,'100Plus','100Plus','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(8,3,'Ticket Hotline','Ticket Hotline','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(9,4,'Pengadil','Pengadil','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(10,4,'Penilai Pengadil','Penilai Pengadil','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(11,4,'Komisioner Perlawanan','Komisioner Perlawanan','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(12,4,'Koordinator Perlawanan','Koordinator Perlawanan','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(13,4,'Perubatan','Perubatan','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(14,4,'Ball Boys','Ball Boys','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(15,5,'PDRM','Polis Diraja Malaysia','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(16,5,'Bomba','Bomba','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(17,5,'MBSA','Majlis Bandaraya Shah Alam','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(18,5,'LOC','LOC','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(19,5,'Protokol','Protokol','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(20,6,'Pemain','Pemain','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(21,6,'Ketua Jurulatih','Ketua Jurulatih','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(22,6,'Penolong Ketua Jurulatih','Penolong Ketua Jurulatih','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(23,6,'Pengurus Pasukan','Pengurus Pasukan','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(24,6,'Penolong Pengurus Pasukan','Penolong Pengurus Pasukan','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(25,6,'Jurulatih Penjaga Gol','Jurulatih Penjaga Gol','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(26,6,'Jurulatih Kecergasan','Jurulatih Kecergasan','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(27,6,'Fisioterapis','Fisioterapis','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(28,6,'Doktor','Doktor','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(29,6,'Pegawai Media','Pegawai Media','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(30,7,'Sukarelawan','Sukarelawan','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(31,8,'Press','Press','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(32,9,'Photographer','Photographer','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(33,10,'Non-Right Host','Non-Right Host','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(34,11,'Host Broadcaster','Host Broadcaster','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36'),(35,12,'Official Photographer','Official Photographer','ACTIVE','2017-10-21 12:29:36','2017-10-21 12:29:36');
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2017-10-24 16:47:55
