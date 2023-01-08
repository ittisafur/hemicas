-- MySQL dump 10.13  Distrib 5.6.51, for Linux (x86_64)
--
-- Host: localhost    Database: hemicas_angels
-- ------------------------------------------------------
-- Server version	5.6.51-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `causes`
--

DROP TABLE IF EXISTS `causes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `causes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cause` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `causes`
--

LOCK TABLES `causes` WRITE;
/*!40000 ALTER TABLE `causes` DISABLE KEYS */;
INSERT INTO `causes` (`id`, `cause`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES (1,'Safer sanitation and hygiene','Safer sanitation and hygiene','Safer sanitation and hygiene','5fc4c7a120c33_5fc4c71092b65_6-causes-sanitation-1.png','active','2020-11-16 17:31:42','2020-11-30 17:21:22'),(2,'Better access to safe drinking water','Better access to safe drinking water','Better access to safe drinking water','5fc4c60330ebe_6-causes-water-1.png','active','2020-11-30 17:14:27','2020-11-30 17:14:27'),(3,'Saving newborn lives','Saving newborn lives','Saving newborn lives','5fc4c852091ac_6-causes-newborn1.png','active','2020-11-30 17:24:18','2020-11-30 17:24:18'),(4,'Improving health of adolescents','Improving health of adolescents','Improving health of adolescents','5fc4c8700c092_6-causes-nutrition-1.png','active','2020-11-30 17:24:48','2020-11-30 17:24:48'),(5,'Improving health of adolescents','Improving health of adolescents','Improving health of adolescents','5fc4c96e1b349_5fc4c87388c85_6-causes-nutrition-1.png','inactive','2020-11-30 17:24:51','2020-11-30 17:29:02'),(6,'Maximizing the growth of children','Maximizing the growth of children','Maximizing the growth of children','5fc62f5987042_5fc625026ea7f_5fc620659c63d_6-causes-nutrition-3.png','active','2020-11-30 17:25:47','2020-12-01 18:56:09'),(7,'Nutrition during pregnancy','Nutrition during pregnancy','Nutrition during pregnancy','5fc4c8f728001_6-causes-pregnancy-1.png','active','2020-11-30 17:27:03','2020-11-30 17:27:03');
/*!40000 ALTER TABLE `causes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloths`
--

DROP TABLE IF EXISTS `cloths`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloths` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickupDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloths`
--

LOCK TABLES `cloths` WRITE;
/*!40000 ALTER TABLE `cloths` DISABLE KEYS */;
INSERT INTO `cloths` (`id`, `name`, `email`, `phone`, `address`, `location`, `pickupDate`, `items`, `comment`, `created_at`, `updated_at`) VALUES (10,'Mahmudur Rahman','mahmudur.rahman@one-ict.com','01704164923','BD','test','2021-01-28','[\"Clothes\",\"Shoes\",\"Food\"]','testee','2021-01-24 19:42:01','2021-01-24 19:42:01');
/*!40000 ALTER TABLE `cloths` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `phoneNumber`, `message`, `created_at`, `updated_at`) VALUES (1,'Dr. Nemai Chandra Mondal','nemai.mondal@bracu.ac.bd','+880 1711356770','Excuse me. I want to speak with Pushpita Roy regarding Recitation History. I read a nice small article written by Pushpita on `The Daily Star\' in Bangladesh. I completted PhD on Recitation. You can provide me her email address also. Sorry for disturb.','2021-04-14 22:34:43','2021-04-14 22:34:43'),(2,'Terry D.','adi@ndmails.com','8102440753','Just wanted to ask if you would be interested in getting external help with graphic design? We do all design work like banners, advertisements, photo edits, logos, flyers, etc. for a fixed monthly fee. \n\nWe don\'t charge for each task. What kind of work do you need on a regular basis? Let me know and I\'ll share my portfolio with you.','2021-06-12 17:08:48','2021-06-12 17:08:48'),(3,'Terry D.','adi@ndmails.com','8102440753','Just wanted to ask if you would be interested in getting external help with graphic design? We do all design work like banners, advertisements, photo edits, logos, flyers, etc. for a fixed monthly fee. \n\nWe don\'t charge for each task. What kind of work do you need on a regular basis? Let me know and I\'ll share my portfolio with you.','2021-06-12 17:12:31','2021-06-12 17:12:31'),(4,'Sarah Green','GreenJT67@gmail.com','802-893-5421','It looks like you have a couple spelling errors on your website such as the word \"thoes\".  Check out a service like SpellAce.com to help.  We\'ve used it in the past and liked it.','2021-10-06 17:05:32','2021-10-06 17:05:32'),(5,'Fred Walker','walker8294@gmail.com','502-863-0094','Hi There,\n\nJust a heads-up that I believe the word \"thoes\" is spelled wrong on your website.  I had a couple of errors on my site before I started using a service to monitor for them.  There are a few sites that do this but we like SpellingReport.com and ErrorSearch.com.\n\n-Fred','2021-12-31 17:23:48','2021-12-31 17:23:48'),(6,'Immanuel Casey','immanuelcasey@gmail.com','9545138224','My name is Immanuel Casey and my bank account was recently under attack by scammers. My account now has a balance of -$2,800 which means even if I found a way to pay to go to work, I would still earn nothing at the end of the week. Could you connect me to anyone who has any gigs/chores available and is willing to pay cash, I would really appreciate it.','2022-04-17 18:53:28','2022-04-17 18:53:28'),(7,'Steve Nelson','nelson3928@hotmail.com','413-787-6432','In case you didn\'t realize, the word \"thoes\" on your site is spelled incorrectly.  I had similar issues on my website which hurt my credibility until someone pointed it out and I discovered some of the services like SpellHelper.com or SpellingCheck.com which help with these type of issues.','2022-04-27 16:16:17','2022-04-27 16:16:17'),(8,'Gary Boylan','garyboylan44@gmail.com','941-284-4167','Do you help  fund other non profits that are try ing to feed the rural children in Rajshahi area','2022-08-23 14:58:16','2022-08-23 14:58:16'),(9,'ashley benoit','ashleybenoit2020@gmail.com','8609619506','hello  i am looking for help for clothes for my family please let me know thank you','2022-11-25 05:52:28','2022-11-25 05:52:28');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donates`
--

DROP TABLE IF EXISTS `donates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donates`
--

LOCK TABLES `donates` WRITE;
/*!40000 ALTER TABLE `donates` DISABLE KEYS */;
INSERT INTO `donates` (`id`, `userId`, `paymentId`, `currency`, `amount`, `type`, `created_at`, `updated_at`) VALUES (18,'12','pi_1HubOnAJ6KJIo1JnTNTLdORL','usd','1','once','2020-12-04 17:21:42','2020-12-04 17:21:42'),(19,'8','pi_1HufcQAJ6KJIo1JnA5dqM0Vb','usd','15','once','2020-12-04 21:51:48','2020-12-04 21:51:48'),(20,'20','cs_live_a1w2guBNTRsyFXamokTwBJCPAQ0HjBLH5Lr3f2r7D8ZqYhCP4YjUtiw99R','usd','15','monthly','2020-12-08 08:49:52','2020-12-08 08:49:52'),(21,'28','pi_1I0bCmAJ6KJIo1Jncd2dJM0l','usd','50','once','2020-12-21 06:21:52','2020-12-21 06:21:52'),(22,'31','pi_1IAomIAJ6KJIo1JnYxpNCasb','usd','100','once','2021-01-18 10:52:33','2021-01-18 10:52:33'),(23,'32','pi_1ISPWYAJ6KJIo1JnwrWO3o7z','usd','50','once','2021-03-07 23:34:15','2021-03-07 23:34:15'),(24,'33','pi_1Ie1J1AJ6KJIo1Jn7rC8kTAx','usd','1','once','2021-04-09 00:07:10','2021-04-09 00:07:10'),(25,'34','cs_live_a1iIDryJMKL8Tb6uwJXXlAyOgJ5cVG8OvgZrqx5LGad1ZBAQawWkzAj33B','usd','15','monthly','2021-04-23 23:28:57','2021-04-23 23:28:57'),(26,'36','pi_1J856bAJ6KJIo1JnYPKD2AzR','usd','50','once','2021-06-30 22:14:16','2021-06-30 22:14:16'),(27,'32','pi_3Kn4xVAJ6KJIo1Jn0eOSkGy4','usd','100','once','2022-04-11 00:58:06','2022-04-11 00:58:06'),(28,'47','pi_3LDEeLAJ6KJIo1Jn2VWHyQcP','usd','100','once','2022-06-22 04:30:57','2022-06-22 04:30:57'),(29,'46','pi_3LDOdzAJ6KJIo1Jn3KAKa86Y','usd','20','once','2022-06-22 15:10:48','2022-06-22 15:10:48'),(30,'46','pi_3LDOikAJ6KJIo1Jn0B3jQhb3','usd','100','once','2022-06-22 15:16:04','2022-06-22 15:16:04'),(31,'46','pi_3LDOlOAJ6KJIo1Jn06sD29h3','usd','100','once','2022-06-22 15:19:49','2022-06-22 15:19:49'),(32,'46','pi_3LDPGLAJ6KJIo1Jn1wDbEgSP','usd','50','once','2022-06-22 15:50:59','2022-06-22 15:50:59'),(33,'46','pi_3LDPHeAJ6KJIo1Jn3mMfXI2D','usd','100','once','2022-06-22 15:53:08','2022-06-22 15:53:08'),(34,'46','pi_3LDPPlAJ6KJIo1Jn0vt2sfjH','usd','50000','once','2022-06-22 16:00:19','2022-06-22 16:00:19'),(35,'46','pi_3LDPSsAJ6KJIo1Jn2j99Nq7P','usd','100','once','2022-06-22 16:03:50','2022-06-22 16:03:50'),(36,'48','pi_3LDk41AJ6KJIo1Jn1OWiObLY','usd','10','once','2022-06-23 14:20:21','2022-06-23 14:20:21');
/*!40000 ALTER TABLE `donates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sorting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` (`id`, `section`, `question`, `answer`, `sorting`, `status`, `created_at`, `updated_at`) VALUES (2,'1','<p><font color=\"#222222\" size=\"4\" face=\"times new roman\"><span style=\"letter-spacing: 0.4px;\"><b style=\"\">Q. What is your organization’s mission?</b></span></font><br></p>','<p><font color=\"#222222\" size=\"4\" face=\"times new roman\"><span style=\"letter-spacing: 0.133333px;\">Hemica’s Angels for Humanity’s mission is to combat hunger and malnutrition and provide sustainable healthcare, educational resources for underprivileged women and children in Bangladesh in order to facilitate their growth, development and livelihood.</span></font><br></p>','','active','2020-11-29 17:24:27','2020-12-02 17:13:52'),(3,'1','<p><strong style=\"color: rgb(34, 34, 34);\"><span style=\"letter-spacing: 0.3pt;\"><font size=\"4\" style=\"\" face=\"times new roman\">Q. What can your organization offer donors in exchange for a donation?</font></span></strong></p>','<p><span style=\"color: rgb(34, 34, 34); letter-spacing: 0.1pt; border: 1pt none windowtext; padding: 0in;\"><span style=\"color: rgb(34, 34, 34); letter-spacing: 0.133333px;\"><font size=\"4\" style=\"\" face=\"times new roman\">We share regular project updates, recognition in an annual report with our donors. Besides, donors can directly communicate with the sponsored child.</font></span></span></p>','','active','2020-11-29 17:26:23','2020-12-02 17:19:21'),(4,'1','<p><strong style=\"color: rgb(34, 34, 34);\"><span style=\"letter-spacing: 0.3pt;\"><font size=\"4\" style=\"\" face=\"times new roman\">Q. What has your organization accomplished to date?</font></span></strong></p>','<p><font size=\"4\" face=\"times new roman\"><span style=\"color: rgb(34, 34, 34); letter-spacing: 0.1pt; border: 1pt none windowtext; padding: 0in;\"> We are a newly established non-profit organization. Right now, we are providing weekly food donations, free healthcare to 50 families.</span><span style=\"color: rgb(34, 34, 34); letter-spacing: 0.1pt;\"> The number of families is growing quickly.</span></font></p>','','active','2020-11-29 17:32:10','2020-12-02 17:19:56'),(5,'1','<p><strong style=\"color: rgb(34, 34, 34);\"><span style=\"letter-spacing: 0.3pt;\"><font size=\"4\" style=\"\" face=\"times new roman\">Q. Can you share one or two stories of individuals whose lives have been changed because of your organization?</font></span></strong></p>','<p><font size=\"4\" face=\"times new roman\"><span style=\"color: rgb(34, 34, 34); letter-spacing: 0.1pt; border: 1pt none windowtext; padding: 0in;\">Our free of cost prenatal care has&nbsp;</span><em style=\"color: rgb(34, 34, 34);\"><span style=\"color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-origin: initial; background-clip: initial; font-style: normal;\">helped 10 pregnant women</span></em><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-origin: initial; background-clip: initial;\">&nbsp;during their pregnancy and to&nbsp;<em style=\"\"><span style=\"font-style: normal;\">deliver healthy</span></em> babies.</span></font><span style=\"color: #222222; font-size: 14pt; font-family: \'Times New Roman\', serif; letter-spacing: 0.1pt;\"><br></span></p>','','active','2020-11-29 17:32:58','2020-12-02 17:20:27'),(6,'1','<p><strong style=\"color: rgb(34, 34, 34);\"><span style=\"letter-spacing: 0.3pt;\"><font size=\"4\" style=\"\" face=\"times new roman\">Q. What are your organization’s goals this year?</font></span></strong></p>','<p><span style=\"color: rgb(34, 34, 34); letter-spacing: 0.1pt; border: 1pt none windowtext; padding: 0in;\"><span style=\"letter-spacing: 0.3pt;\"><font size=\"4\" style=\"\" face=\"times new roman\">As a newly formed organization, we have started our work in a small village of Bangladesh. We want to see no women or children in the entire village go to bed hungry or remain impoverished.</font></span></span></p>\r\n<p><span style=\"font-size: 14pt; font-family: \'Times New Roman\', serif; letter-spacing: 0.3pt;\">&nbsp;</span></p>','','active','2020-11-29 17:33:50','2020-12-02 17:20:57'),(7,'1','<p><strong style=\"color: rgb(34, 34, 34);\"><span style=\"letter-spacing: 0.3pt;\"><font size=\"4\" style=\"\" face=\"times new roman\">Q. How much money do you need from donors to accomplish your goals?</font></span></strong></p>','<p><font size=\"4\" face=\"times new roman\"><span style=\"color: rgb(34, 34, 34); letter-spacing: 0.1pt; border: 1pt none windowtext; padding: 0in;\">Any donation will be appreciable.&nbsp;</span><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-origin: initial; background-clip: initial;\">A small $15 donation will feed a child for 20 days.</span></font></p>\r\n<p><span style=\"font-size: 14pt; font-family: \'Times New Roman\', serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-origin: initial; background-clip: initial;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 6pt; color: #222222; line-height: normal; vertical-align: baseline; font-size: 11pt; font-family: Calibri, sans-serif;\">&nbsp;</p>','','active','2020-11-29 17:34:20','2020-12-02 17:21:35'),(8,'1','<p><strong style=\"color: rgb(34, 34, 34);\"><span style=\"line-height: 19.9733px; letter-spacing: 0.3pt;\"><font size=\"4\" style=\"\" face=\"times new roman\">Q. How does a donor get confirmation that the donation is received?</font></span></strong></p>','<p><span style=\"color: rgb(34, 34, 34); letter-spacing: 0.1pt; border: 1pt none windowtext; padding: 0in;\"><font size=\"4\" style=\"\" face=\"times new roman\">When you make a gift, you will instantly receive an email with a profile of a child/ family whose lives are being transformed by our programs</font></span></p>\r\n<p><span style=\"line-height: 19.9733px; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-origin: initial; background-clip: initial;\"><font size=\"4\" style=\"\" face=\"times new roman\">&nbsp;</font></span></p>','','active','2020-11-29 17:34:45','2020-12-02 17:21:59'),(9,'1','<p><strong style=\"color: rgb(34, 34, 34);\"><span style=\"line-height: 19.9733px; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-origin: initial; background-clip: initial;\"><font size=\"4\" style=\"\" face=\"times new roman\">Q. How much of my money is going to the actual cause versus to things like administrative or fundraising costs?</font></span></strong></p>','<p><font size=\"4\" face=\"times new roman\"><span style=\"color: rgb(34, 34, 34); letter-spacing: 0.1pt; border: 1pt none windowtext; padding: 0in;\"> We give 99 percent of the money we raise to the cause.</span>\r\n</font></p><p><span style=\"font-size: 14pt; line-height: 19.9733px; font-family: \'Times New Roman\', serif; color: black;\">&nbsp;</span></p>','','active','2020-11-29 17:35:22','2020-12-02 17:22:31');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs_sections`
--

DROP TABLE IF EXISTS `faqs_sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs_sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs_sections`
--

LOCK TABLES `faqs_sections` WRITE;
/*!40000 ALTER TABLE `faqs_sections` DISABLE KEYS */;
INSERT INTO `faqs_sections` (`id`, `name`, `created_at`, `updated_at`) VALUES (1,'General',NULL,NULL),(2,'Advance',NULL,NULL);
/*!40000 ALTER TABLE `faqs_sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ideas`
--

DROP TABLE IF EXISTS `ideas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ideas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ideaFile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ideas`
--

LOCK TABLES `ideas` WRITE;
/*!40000 ALTER TABLE `ideas` DISABLE KEYS */;
INSERT INTO `ideas` (`id`, `name`, `email`, `location`, `age`, `profession`, `ideaFile`, `message`, `created_at`, `updated_at`) VALUES (7,'Md. Arifeen Billah Badal','arifeenbillahbadal@gmail.com','Dhunat, Bogura, Bangladesh.','20 to 30','Student & Social Worker.','67812064.Md. Arifeen Billah Badal CV.pdf','I want to attach with you & serve the country.','2020-12-23 12:37:39','2020-12-23 12:37:39');
/*!40000 ALTER TABLE `ideas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_10_07_043834_create_volunteers_table',1),(5,'2020_10_08_110709_create_contacts_table',1),(6,'2020_10_12_112704_create_faqs_table',1),(7,'2020_10_15_042618_create_causes_table',1),(8,'2020_10_19_114705_create_donates_table',1),(9,'2020_10_20_083746_create_faqs_sections_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES ('mahmudur.rahman@one-ict.com','$2y$10$UW1W2gxuYKWcziDr1uEeXeSfagJuE61LWoXRsZt/pnepJg/PYSKWu','2021-10-05 15:48:44'),('minar.rahaman@yahoo.com','$2y$10$u1npcwgZ5QjzDRUryFcDG.GTzzrxzNIqB/hfv1d/I3r7i7P1Gl97K','2021-10-05 15:54:36');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programs`
--

LOCK TABLES `programs` WRITE;
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES (1,'.','.','62945b69922d4_62945b31865b4_IMG_20220524_180146-min.jpg','inactive','2022-05-30 12:50:41','2022-05-30 12:51:37');
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponsor_donates`
--

DROP TABLE IF EXISTS `sponsor_donates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sponsor_donates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsor_donates`
--

LOCK TABLES `sponsor_donates` WRITE;
/*!40000 ALTER TABLE `sponsor_donates` DISABLE KEYS */;
INSERT INTO `sponsor_donates` (`id`, `userId`, `paymentId`, `sponsor_details`, `currency`, `amount`, `type`, `created_at`, `updated_at`) VALUES (1,'27','pi_1I0appAJ6KJIo1JnId8lvn78','[{\"id\":\"12\",\"name\":\"Ritu\",\"type\":\"6_month\",\"monthName\":\"6 Month\",\"netAmount\":\"20\",\"img\":\"5fd88ed458608_5fd7330e13cb7_5fd71df5ebee3_5fd6eba83c90a_5fd6eb9cf2cdf_5fd61bc57248f_5fd616d082a96_Ritu-Rozina.png\",\"price\":\"120\",\"count\":\"1\",\"total\":\"120.00\"}]','usd','120','sponsorChild','2020-12-21 05:57:47','2020-12-21 05:57:47'),(2,'30','pi_1I9jLLAJ6KJIo1JnxFpUa03y','[{\"id\":\"4\",\"name\":\"Maisha\",\"type\":\"6_month\",\"monthName\":\"6 Month\",\"netAmount\":\"20\",\"img\":\"5fd88e99eba37_5fd71dae5eddb_5fd6093de97c5_5fd608d43d42e_5fd60821e90e7_Maisha-Monika.png\",\"price\":\"120\",\"count\":\"1\",\"total\":\"120.00\"}]','usd','120','sponsorChild','2021-01-15 10:51:59','2021-01-15 10:51:59'),(3,'32','pi_3L2SLxAJ6KJIo1Jn35uUe5Yo','[{\"id\":\"14\",\"name\":\"Ruhi\",\"type\":\"1_month\",\"monthName\":\"1 Month\",\"netAmount\":\"20\",\"img\":\"60d9a66bb743a_5fd88ee543ffc_5fd733256cc0a_5fd71e02a220d_5fd705976f567_5fd7052d3048b_Ruhi.jpeg\",\"price\":\"20\",\"count\":\"1\",\"total\":\"20.00\"}]','usd','20','sponsorChild','2022-05-23 10:56:27','2022-05-23 10:56:27'),(4,'27','pi_3L77tSAJ6KJIo1Jn00d64s0k','[{\"id\":\"40\",\"name\":\"Ritu\",\"type\":\"12_month\",\"monthName\":\"12 Month\",\"netAmount\":\"20\",\"img\":\"6295e22cb544c_for-web.jpg\",\"price\":\"240\",\"count\":\"1\",\"total\":\"240.00\"}]','usd','240','sponsorChild','2022-06-05 08:05:26','2022-06-05 08:05:26'),(5,'46','pi_3LDOdEAJ6KJIo1Jn3hQopuWb','[{\"id\":\"37\",\"name\":\"Sadhin Islam\",\"type\":\"1_month\",\"monthName\":\"1 Month\",\"netAmount\":\"20\",\"img\":\"6294a26380ed8_IMG_20220525_1637111.jpg\",\"price\":\"20\",\"count\":\"1\",\"total\":\"20.00\"}]','usd','20','sponsorChild','2022-06-22 15:10:04','2022-06-22 15:10:04'),(6,'46','pi_3LDPKnAJ6KJIo1Jn1cEf9rHJ','[{\"id\":\"39\",\"name\":\"Tasmia Akter\",\"type\":\"1_month\",\"monthName\":\"1 Month\",\"netAmount\":\"20\",\"img\":\"62949fd3d1591_IMG_20220524_183546.jpg\",\"price\":\"20\",\"count\":\"1\",\"total\":\"20.00\"}]','usd','20','sponsorChild','2022-06-22 15:55:19','2022-06-22 15:55:19'),(7,'32','pi_3LHa0cAJ6KJIo1Jn0zjGV8lI','[{\"id\":\"41\",\"name\":\"Ruhi\",\"type\":\"1_month\",\"monthName\":\"1 Month\",\"netAmount\":\"20\",\"img\":\"62b975a730ba6_ruhi.png\",\"price\":\"20\",\"count\":\"1\",\"total\":\"20.00\"}]','usd','20','sponsorChild','2022-07-04 04:08:55','2022-07-04 04:08:55'),(8,'32','pi_3Loc3zAJ6KJIo1Jn15ePuGjv','[{\"id\":\"41\",\"name\":\"Ruhi\",\"type\":\"1_month\",\"monthName\":\"1 Month\",\"netAmount\":\"20\",\"img\":\"62b975a730ba6_ruhi.png\",\"price\":\"20\",\"count\":\"1\",\"total\":\"20.00\"}]','usd','20','sponsorChild','2022-10-03 07:03:22','2022-10-03 07:03:22');
/*!40000 ALTER TABLE `sponsor_donates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sponsors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projectArea` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noOfSiblings` text COLLATE utf8mb4_unicode_ci,
  `hobbies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aimInLife` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favouriteSubject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` text COLLATE utf8mb4_unicode_ci,
  `favouriteSports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monhtlyProtein` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `householdIncome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `dreams` text COLLATE utf8mb4_unicode_ci,
  `goesToSchool` text COLLATE utf8mb4_unicode_ci,
  `sourceOfEnergy` text COLLATE utf8mb4_unicode_ci,
  `guardianEmployment` text COLLATE utf8mb4_unicode_ci,
  `ageRange` text COLLATE utf8mb4_unicode_ci,
  `noOfFamilyMembers` text COLLATE utf8mb4_unicode_ci,
  `professionOfMembers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kidsAges` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highestMonthlyIncome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lowestMonthlyIncome` text COLLATE utf8mb4_unicode_ci,
  `isSidebar` tinyint(1) NOT NULL,
  `serialNumber` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsors`
--

LOCK TABLES `sponsors` WRITE;
/*!40000 ALTER TABLE `sponsors` DISABLE KEYS */;
INSERT INTO `sponsors` (`id`, `name`, `age`, `amount`, `gender`, `dob`, `projectArea`, `noOfSiblings`, `hobbies`, `aimInLife`, `favouriteSubject`, `grade`, `favouriteSports`, `monhtlyProtein`, `householdIncome`, `image`, `dreams`, `goesToSchool`, `sourceOfEnergy`, `guardianEmployment`, `ageRange`, `noOfFamilyMembers`, `professionOfMembers`, `kidsAges`, `highestMonthlyIncome`, `lowestMonthlyIncome`, `isSidebar`, `serialNumber`, `type`, `status`, `created_at`, `updated_at`) VALUES (1,'Abdullah','11 months old','20','Male','','Bogra, Bangladesh','01','','','','','','07 to 10 days only','$35/Month','62946df8a1f2e_62946df351bc2_62946d96188ed_62946d8b9a5bc_62945f90b83a5_62945f7b54ba2_60d9a21fbaaff_6020f844dc534_Abdullah-2.png','','','Breastmilk, Rice, Lentils','Mother is a home maker; Father works as a farmer.','2',NULL,NULL,NULL,NULL,NULL,1,16,'child','active','2020-12-13 18:39:03','2022-06-27 16:17:46'),(2,'Ibrahim','9 months old','20','Male','','Bogra, Bangladesh','02','','','','','','06 to 09 days only','$50/month','60d9a3a6c8acf_60d9a37538d88_5fd88e813441f_5fd71d9201cba_5fd609564bf71_5fd6002a7ef8b_5fd5ffc890121_Ibrahim-jhorna.png','','','Breastmilk, Rice, Lentils','Mother is a home maker; Father works as a carpenter.','2',NULL,NULL,NULL,NULL,NULL,1,15,'child','active','2020-12-13 18:49:28','2022-06-27 16:17:46'),(3,'Jui','6 years old','20','Female','','Bogra, Bangladesh','03','She loves to do gardening','Doctor','Bangla','2','','08 or 09 days only','$50/month','60d9a3c8dbe2f_5fd88e8c7429a_5fd71d9f05c66_5fd6183d80d90_5fd6094a11cd6_5fd603d23f026_5fd6035356084_Jui-Rozina.png','She wants to be a doctor','Yes','Rice, bread, Veggies','Father works as a day labor.','4',NULL,NULL,NULL,NULL,NULL,1,17,'child','active','2020-12-13 19:04:35','2022-06-27 16:17:46'),(4,'Maisha','3.5 Years old','20','Female','','Bogra, Bangladesh','03','','','','','','10-12 days only','$45/month','60d9a51fad633_60224189deb43_5fd88e99eba37_5fd71dae5eddb_5fd6093de97c5_5fd608d43d42e_5fd60821e90e7_Maisha-Monika.png','','','Rice, Veggies, Cow milk','Mother is a housewife; Father works as a carpenter.','3',NULL,NULL,NULL,NULL,NULL,1,18,'child','inactive','2020-12-13 19:25:05','2022-06-27 16:17:46'),(5,'Nahid','5 years old','20','Male','','Bogra, Bangladesh','02','He loves to play football','','English','1','','Rice, Bread, Veggies','$40/month','60d9a5cb89704_6020f918735b6_6020f8f25fea8_Nahid-6.png','He wants to be a football player','Yes','8 or 9 days only','Mother is a home maker; Father works as a farmer.','4',NULL,NULL,NULL,NULL,NULL,1,19,'child','active','2020-12-13 19:38:11','2022-06-27 16:17:46'),(6,'Nirob','4 years old','20','Male','','Bogra, Bangladesh','01','','','','','','7-9 days only','$50/month','60d9a5ebefdc0_6020f97992b65_Nirob-2.png','','','Rice, Veggies, Cow milk','Father works as a farmer.','3',NULL,NULL,NULL,NULL,NULL,1,20,'child','active','2020-12-13 20:00:31','2022-06-27 16:17:46'),(7,'Safayat','7 months old','20','Male','','Bogra, Bangladesh','02','','','','','','7 to 10 days only','$40/month','60d9a6a44ee75_5fd88efbd81c0_5fd7335aa2833_5fd71e107c673_5fd6121b99723_Safayat-Mahfila.png','','','Breastmilk, Rice','Father works as a farmer.','2',NULL,NULL,NULL,NULL,NULL,1,22,'child','active','2020-12-13 20:07:39','2022-06-27 16:17:46'),(8,'Misti','10 months old','20','Female','','Bogra, Bangladesh','02','','','','','','5 to 7 days only','$40/month','60d9a5b23a04e_6020f8943ec52_Misti-3.png','','','Breastmilk, Rice','Father works as a farmer.','2',NULL,NULL,NULL,NULL,NULL,1,21,'child','active','2020-12-13 20:15:03','2022-06-27 16:17:46'),(9,'Sumaiya','2.5 years old','20','Female','','Bogra, Bangladesh','02','','','','','','10-12 days only','$40/month','60d9a8f4299a0_6020f93e17f91_Sumaia-3.png','','','Rice, Veggies, Cow milk, Bread','Father works as a farmer.','3',NULL,NULL,NULL,NULL,NULL,1,23,'child','active','2020-12-13 20:18:58','2022-06-27 16:17:46'),(10,'Tamanna','6 years old','20','Female','','Bogra, Bangladesh','02','She loves to play kanamachi','','English','2','','8 or 10 days only','$35/month','60d9ab8a17019_601fd28d57872_601fd04fb9b66_5fd88f369ab03_5fd7338925b6d_5fd71e4557966_5fd6ed6c0299c_5fd615bdbdb8d_Tamanna-Mahofila.png','She wants to become teacher','Yes','Rice, Lentils, Veggies','Mother is a home maker; Father works as a farmer.','4',NULL,NULL,NULL,NULL,NULL,1,24,'child','active','2020-12-13 20:23:09','2022-06-27 16:17:46'),(11,'Nirob','1 years old','20','Male','','Bogra, Bangladesh','01','','','','','','7 to 10 days only','$40/month','60d9a60198a4b_5fd88ec4baf33_5fd7333dea718_5fd71de94088e_5fd61656bd617_Nirob-Liva.png','','','Breastmilk, Rice, Lentils','Mother is a home maker; Father works as a farmer','2',NULL,NULL,NULL,NULL,NULL,1,25,'child','active','2020-12-13 20:25:42','2022-06-27 16:17:46'),(12,'Ritu','3 years old','20','Female','','Bogra, Bangladesh','02','','','','','','8-10 days only','$30/month','60d9a64364680_5fe4424eee27f_5fd88ed458608_5fd7330e13cb7_5fd71df5ebee3_5fd6eba83c90a_5fd6eb9cf2cdf_5fd61bc57248f_5fd616d082a96_Ritu-Rozina.png','','','Rice, Veggies, Cow milk','Father works as a day labor.','3',NULL,NULL,NULL,NULL,NULL,1,26,'child','inactive','2020-12-13 20:27:44','2022-06-27 16:17:46'),(13,'Shahara','6 months old','20','Female','','Bogra, Bangladesh','02','','','','','','7 to 10 days only','$50/month','60d9a6c008a80_5fd88f0f8e66f_5fd73367eb6f2_5fd71e1ec407e_5fd706a6dbf9e_5fd706044dc3d_5fd7058901f91_WhatsAppImage2020-12-08at3.52.17AM.jpeg','','','Breastmilk, Lentils','Father works as a farmer.','2',NULL,NULL,NULL,NULL,NULL,1,14,'child','active','2020-12-14 13:13:47','2022-06-27 16:17:46'),(14,'Ruhi','04 months old','20','Female','','Bogra, Bangladesh','02','','','','','','7 to 10 days only','$35/month','628b3a879fdda_60d9a66bb743a_5fd88ee543ffc_5fd733256cc0a_5fd71e02a220d_5fd705976f567_5fd7052d3048b_Ruhi.jpeg','','','Breastmilk','Father works as a day labor.','2',NULL,NULL,NULL,NULL,NULL,1,13,'child','inactive','2020-12-14 13:24:45','2022-06-27 16:17:46'),(15,'salma','6 Years Old','20','Female','','Bogra, Bangladesh','02','She loves playing','','Bangla','1','','8 or 9 days only','$55/Month','60d9a465c3680_5ff69ed296b25_5ff2ec00d6cb3_5ff2e96d15c82_5ff2e909586ea_5ff2e8b8a3868_Mabia.png','She wants to be a teacher','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a farmer.','4',NULL,NULL,NULL,NULL,NULL,1,27,'child','inactive','2021-01-04 13:53:18','2022-06-27 16:17:46'),(16,'salam','7 years old','20','Male','','Bogra, Bangladesh','02','He loves playing','','English','2','','8 or 9 days only','$45/month','60d9a6788509c_5ff2fe5537224_sadhin-1.png','He wants to be a teacher','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a small business.','4',NULL,NULL,NULL,NULL,NULL,1,28,'child','inactive','2021-01-04 14:02:55','2022-06-27 16:17:46'),(17,'prova','6 Years Old','20','Female','','Bogra, Bangladesh','04','She loves playing','','Bangla','1','','7 or 8 days only','$50/month','60d9a5769a901_602241a1d16ff_5ff2ebe411d8b_Mishu-3.png','She wants to be a doctor','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a day labor','4',NULL,NULL,NULL,NULL,NULL,1,29,'child','inactive','2021-01-04 14:19:49','2022-06-27 16:17:46'),(18,'rahim','7 Years Old','20','Male','','Bogra, Bangladesh','02','He loves playing','','Bangla','2','','8 or 9 days only','$55','60d9a617c0056_5ff2f95107a91_Rabbi.png','He wants to be an engineer','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a van driver.','4',NULL,NULL,NULL,NULL,NULL,1,30,'child','inactive','2021-01-04 18:17:37','2022-06-27 16:17:46'),(19,'rahima','7 Years Old','20','Female','','Bogra, Bangladesh','02','She loves to do drawing','','Bangla','2','','8 or 9 days only','$55/month','60d9a2e7a1c6a_5ff69ead8dfe1_5ff3033dc2493_Bina-2.png','She wants to be a doctor','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a day labor.','4',NULL,NULL,NULL,NULL,NULL,1,31,'child','inactive','2021-01-04 18:59:57','2022-06-27 16:17:46'),(20,'lemon','10 years old','20','Male','','Bogra, Bangladesh','03','He loves playing','','Bangla','3','','8 or 9 days only','$45/month','60d9a696d46fd_5ff3081c1aaa1_Safat-Hasan-2.png','He wants to be a teacher','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a van driver.','4',NULL,NULL,NULL,NULL,NULL,1,32,'child','inactive','2021-01-04 19:20:44','2022-06-27 16:17:46'),(21,'suriya','9 Years Old','20','Female','','Bogra, Bangladesh','02','She loves playing','','Bangla','3','','8 or 9 days only','$45/month','60d9a56411f63_602259b5c7f91_602241b29064e_5ff309233109c_Mamisha-5.png','She wants to be a doctor','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a farmer.','4',NULL,NULL,NULL,NULL,NULL,1,33,'child','inactive','2021-01-04 19:25:07','2022-06-27 16:17:46'),(22,'potol','8 Years Old','20','Female','','Bogra, Bangladesh','3','She loves playing','Doctor','Bangla','2','','8 or 9 days only','$47/Month','60d9a736756a0_5ff590a60f082_5ff58a19dd1cf_Suchi-moni-2.png','She wants to be a  Doctor','Yes','Rice, Lentils, Veggies','Mother is a Farmer; Father is no more.','4',NULL,NULL,NULL,NULL,NULL,1,34,'child','inactive','2021-01-06 16:59:53','2022-06-27 16:17:46'),(23,'bokul','7 Years Old','20','Female','','Bogra, Bangladesh','3','She loves playing and dancing.','Doctor','Bangla','2','','8 or 9 days only','$54/Month','60d9a972b5412_5ff59087b3c05_5ff58cf5adf84_Sumaia-2.png','She wants to be a  Doctor','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a farmer.','4',NULL,NULL,NULL,NULL,NULL,1,35,'child','inactive','2021-01-06 17:12:05','2022-06-27 16:17:46'),(24,'emu','8 Years Old','20','Male','','Bogra, Bangladesh','2','He loves playing','Engineer','Bangla','2','','8 or 9 days only','$59/Month','60d9a71c8817b_5ff594b55dfe5_5ff590a0bb04a_5ff5902d9e6e2_Shohid-2.png','She wants to be a  Engineer.','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a rickshaw puller.','4',NULL,NULL,NULL,NULL,NULL,1,36,'child','inactive','2021-01-06 17:25:50','2022-06-27 16:17:46'),(25,'tarek','10 Years Old','20','Male','','Bogra, Bangladesh','3','He loves playing','Doctor','Bangla','4','','8 or 9 days only','$59/Month','60d9a71244368_5ff6984532079_5ff591cf08f67_Shanto-2.png','He wants to be a  Doctor','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a day labor.','4',NULL,NULL,NULL,NULL,NULL,1,37,'child','inactive','2021-01-06 17:32:47','2022-06-27 16:17:46'),(26,'mou','11 Years Old','20','Female','','Bogra, Bangladesh','2','She loves playing','Doctor','Bangla','4','','8 or 9 days only','$59/Month','60d9a277dc8c9_5ff592a9a229f_Arfina-4.png','She wants to be a  Doctor','Yes','Rice, Lentils, Veggies','Mother is a housewife; Father works as a farmer.','4',NULL,NULL,NULL,NULL,NULL,1,38,'child','active','2021-01-06 17:36:25','2022-06-27 16:17:46'),(27,'Dalia','9 Years Old','20','Female','','Bogra, Bangladesh','2','She loves playing','Doctor','Bangla','3','','8 or 9 days only','$47/Month','6294a370c4978_60d9abb54bf86_5ff595ccbd29b_Tisha.png','She wants to be a  Doctor','Yes','Rice, Lentils, Veggies','Mother is no more; Father works as a day labor.','4',NULL,NULL,NULL,NULL,NULL,1,39,'child','active','2021-01-06 17:49:48','2022-06-27 16:17:46'),(28,'naznin','9 Years Old','20','Female','','Bogra, Bangladesh','2','She loves playing and dancing.','Teacher','Bangla','3','','8 or 9 days only','$47/Month','60d9a31569d79_5ff5997e4eb46_IMG_20201220_132136.png','She wants to be a  teacher','Yes','Rice, Lentils, Veggies','Mother is a tailor; Father is no more.','4',NULL,NULL,NULL,NULL,NULL,1,40,'child','active','2021-01-06 18:05:34','2022-06-27 16:17:46'),(30,'Abdul Al Bishal','7 Years Old','20','Male','2012-05-30','Bogra, Bangladesh','','','Engineer','English','1','','8 or 9 days only','$150/Month','6294a2e32f200_IMG_20220524_180124.jpg','He wants to become an engineer','Yes','Rice, Veggies','','4',NULL,NULL,NULL,NULL,NULL,1,11,'child','active','2022-05-30 14:17:06','2022-06-27 16:17:46'),(31,'Fazle Rabbi','9 Years Old','20','Male','','Bogra, Bangladesh','','','Doctor','Bangla','3','','8 or 9 days only','$150/Month','6294a2cf82afc_IMG_20220525_1150461.jpg','He wants to become a doctor','Yes','Rice, Veggies','','4',NULL,NULL,NULL,NULL,NULL,1,10,'child','active','2022-05-30 17:10:51','2022-06-27 16:17:46'),(32,'Md. Rafi','4 Years Old','20','Male','','Bogra, Bangladesh','','','','','','','7-9 days only','$150/Month','6294a2bd86c57_IMG_20220525_1149271.jpg','','','Rice, Veggies','','3',NULL,NULL,NULL,NULL,NULL,1,9,'child','active','2022-05-30 17:16:39','2022-06-27 16:17:46'),(33,'Mitu Akter','2 Years Old','20','Female','','Bogra, Bangladesh','','','','','','','8 or 9 days only','$150/Month','6294a293f420d_IMG_20220524_1800151.jpg','','','Rice, Veggies','','3',NULL,NULL,NULL,NULL,NULL,1,7,'child','active','2022-05-30 17:18:27','2022-06-27 16:17:46'),(34,'Mst. Roza','6 months old','20','Female','','','','','','','','','','$130/Month','62949a7bc41a1_62949a5da2a47_IMG_20220525_121403.jpg','','','Milk','','2',NULL,NULL,NULL,NULL,NULL,1,6,'child','active','2022-05-30 17:20:13','2022-06-27 16:17:46'),(35,'Nafiul Islam Tamim','5 Years Old','20','Male','','Bogra, Bangladesh','','','Service holder','Bangla','1','','8 or 9 days only','$130/Month','6294a27d1c2ec_IMG_20220525_1158191.jpg','He wants to become a service holder','Yes','Rice, Veggies','','2',NULL,NULL,NULL,NULL,NULL,1,5,'child','active','2022-05-30 17:23:50','2022-06-27 16:17:46'),(36,'Rafia Khatun','7 Years Old','20','Female','','Bogra, Bangladesh','','','','','','','8 or 9 days only','$130/Month','6294a2f852d54_IMG_20220525_1208371.jpg','','','Rice, Veggies','','2',NULL,NULL,NULL,NULL,NULL,1,12,'child','active','2022-05-30 17:26:00','2022-06-27 16:17:46'),(37,'Sadhin Islam','1 Years Old','20','Male','','Bogra, Bangladesh','','','','','','','','$130/Month','6294a26380ed8_IMG_20220525_1637111.jpg','','','Milk, Rice','','2',NULL,NULL,NULL,NULL,NULL,1,3,'child','active','2022-05-30 17:27:02','2022-06-27 16:17:46'),(38,'Tasfia Tabassum','1 Years Old','20','Female','','Bogra, Bangladesh','','','','','','','','$130/Month','6294a2a8d08cd_IMG_20220525_11592212.jpg','','','Milk, Rice','','2',NULL,NULL,NULL,NULL,NULL,1,8,'child','active','2022-05-30 17:28:59','2022-06-27 16:17:46'),(39,'Tasmia Akter','3 Years Old','20','Female','','Bogra, Bangladesh','','','','','','','8 or 9 days only','$100/Month','62949fd3d1591_IMG_20220524_183546.jpg','','','Rice, Veggies','','3',NULL,NULL,NULL,NULL,NULL,1,4,'child','active','2022-05-30 17:30:15','2022-06-27 16:17:46'),(40,'Ritu','5 Years Old','20','Female','','Bogra, Bangladesh','02','','','','','','8 or 9 days only','$100/Month','6295e22cb544c_for-web.jpg','','','Rice, Veggies','','4',NULL,NULL,NULL,NULL,NULL,1,1,'child','active','2022-05-31 16:38:52','2022-06-27 16:17:46'),(41,'Ruhi','2 Years Old','20','Female','','Bogra, Bangladesh','02','','','','','','7-9 days only','$100/Month','62b975a730ba6_ruhi.png','','','Rice, Veggies','Her father is an autism affected man. He can\'t earn money. They get some foods from their land.','2',NULL,NULL,NULL,NULL,NULL,1,2,'child','active','2022-06-27 16:17:27','2022-06-27 16:17:46'),(42,'Tutul','4','20','Male','2010-10-21','Bogura','1','','','','','','','20','6353e93731795_6353e87d7c614_demo.png','','No','Rice','','3',NULL,NULL,NULL,NULL,NULL,1,42,'child','inactive','2022-10-22 19:56:29','2022-10-22 19:59:35'),(43,'Asif','4','20','Male','2018-10-22','Bogura','1','','','','','','','100','6353eb0a52345_6353ead4b2902_demo.png','','','Rice','','3',NULL,NULL,NULL,NULL,NULL,1,43,'child','inactive','2022-10-22 20:06:28','2022-10-22 20:07:22');
/*!40000 ALTER TABLE `sponsors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `success_stories`
--

DROP TABLE IF EXISTS `success_stories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `success_stories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `storyDate` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `success_stories`
--

LOCK TABLES `success_stories` WRITE;
/*!40000 ALTER TABLE `success_stories` DISABLE KEYS */;
INSERT INTO `success_stories` (`id`, `title`, `image`, `video`, `description`, `storyDate`, `status`, `created_at`, `updated_at`) VALUES (1,'One Pharma Ltd. donates USD 11700 to Hemica\'s Angels for Humanity.','61c0311b1f1ee_61af26ba2ac31_6193756ad2e86_6180cd227b53a_donate.png','https://www.youtube.com/embed/Rmq-2WeR-wI','<p>One Pharma Limited extends a helping hand to Hemica&#39;s Angels for Humanity&#39;s efforts to end the deprivation of nutrition and health care to disadvantaged women and children. Hemica&#39;s Angels for Humanity has been providing protein based food and healthcare to disadvantaged mothers and children. The strong support of One Pharma in this great initiative and the grant of USD 11700. Many thanks to One Pharma for its solidarity with this great initiative.</p>','2021-12-19','active','2021-10-28 22:27:11','2021-12-20 14:30:35'),(2,'Our food donation program','6180cc65dc632_6180cc5d4003d_617a5f4d39733_617a5f0b5db5e_6162d618eb3d3_6162d605ef4d4_600d560fcac41_success-stories-1.png','','<p>Our food donation program is about more than simply providing food. It&rsquo;s about providing wellness, nourishment and strength.</p>\r\n\r\n<p>That&rsquo;s why it&rsquo;s our mission to provide the most nutritious food possible to improve underprivileged children and their mother&rsquo;s health and well-being. Sourcing and distributing nutritious food that is essential to a healthy diet helps us best meet the needs of the people we serve.</p>\r\n\r\n<p>We provide weekly supply of freshly produced protein and vitamin-based food packages to children and mothers in need. Regular follow up and progress monitoring activities are done by our health care providers every month.</p>','2020-12-07','active','2021-01-24 18:12:15','2021-11-02 12:28:05'),(3,'Nutrition and Wellness for Unprivileged Women and Children','food-donate.jpg','','Our food donation program is about more than simply providing food. It’s about providing wellness, nourishment and strength. That’s why it’s our mission to provide the most nutritious food possible to improve underprivileged children and their mother’s health and well-being. Sourcing and distributing nutritious food that is essential to a healthy diet helps us best meet the needs of the people we serve. We provide weekly supply of freshly produced protein and vitamin-based food packages to children and mothers in need. Regular follow up and progress monitoring activities are done by our health care providers every month. <br>\r\nSource: \r\n<a href=\"https://www.facebook.com/100712908527898/posts/118419860090536/\"> https://www.facebook.com/100712908527898/posts/118419860090536/</a> \r\n','2020-12-06','active',NULL,NULL),(4,'Preparation for the weekly food donation program.','food-donate5.jpg','','Our food donation program is about more than simply providing food. It’s about providing wellness, nourishment and strength. That’s why it’s our mission to provide the most nutritious food possible to improve underprivileged children and their mother’s health and well-being. \r\n<br Source: \r\n<a href=\"https://www.facebook.com/100712908527898/posts/120422169890305/\"> https://www.facebook.com/100712908527898/posts/120422169890305/</a>','2021-01-23','active',NULL,NULL),(5,'Promoting Women Empowerment','cloth.jpg','','Hemica\'s Angels for Humanity is not stopping with only nutrition and healthcare concerns of our underprivileged women but also making ways for the livelihood of many rural individuals. We are going to launch another promising platform, promoting women empowerment. Our talented and hard working females from villages will be contributing to rural economy as Hemica\'s Weavers for Humanity.\r\n<br >Source:  <a href=\"https://www.facebook.com/100712908527898/posts/125701109362411/\">https://www.facebook.com/100712908527898/posts/125701109362411/</a>','2020-12-21','active',NULL,NULL),(6,'Preparation for the Weekly Food Donation Program','food-donate4.jpg','',' We provide weekly supply of freshly produced protein and vitamin-based food packages to children and mothers in need. Regular follow up and progress monitoring activities are done by our health care providers every month.\r\n<br>Source:  <a href=\"https://www.facebook.com/100712908527898/posts/126468042619051/\">https://www.facebook.com/100712908527898/posts/126468042619051/</a>\r\n','2020-12-23','active',NULL,NULL),(7,'Meet Ritu, a three year old beautiful girl, who has been sponsored by Christine Amerosa from New York.','sponsor.jpg','','Meet Ritu, a three year old beautiful girl, who has been sponsored by Christine Amerosa from New York. \r\nRitu is growing up in a small village in Bogra, Bangladesh. Her father was electrocuted by the power lines at work. Her mother is struggling to raise two young daughters with a monthly wage of $30. \r\nThanks to Christine for being an angel in Ritu\'s life. This sponsorship will enable her to live the life she deserves by providing her with nutritious meals, clothes and protecting her health with regular medical check-ups. Ritu\'s mother expressed her heartfelt thanks to Christine for choosing her daughter!\r\n<br>Source:  <a href=\"https://www.facebook.com/100712908527898/posts/126796132586242/\">https://www.facebook.com/100712908527898/posts/126796132586242/</a>\r\n','2020-12-24','active',NULL,NULL),(8,'Warmest congratulations to Asma Begum on the birth of her beautiful healthy baby girl last month.','sponsor2.jpg','','Warmest congratulations to Asma Begum on the birth of her beautiful healthy baby girl last month. We, Hemica\'s Angels for Humanity, are happy to be a part of Asma\'s journey of welcoming a new life into this world. Asma has received prenatal care during her pregnancy, labor and delivery. The regular visits to our OB-GYN allowed her to identify the complications and treat them as soon as possible, which promoted the birth of this beautiful angel with perfect birth weight 7.5 lb (3.5 kg). \r\nHemica\'s Angels for Humanity will ensure personalized postnatal care to meet the needs of Asma and her baby following childbirth for the next 1000 days.\r\nThanks to the donors and our sponsors to support Hemica\'s Angels  for Humanity. ','2020-12-28','active',NULL,NULL),(9,'Blanket Distribution Program','6180cdb73607c_cloth2.jpg','','<p>Blanket Distribution Program : Hemica&#39;s Angels for Humanity has started distributing blankets to the unfortunate older men and women to keep them warm and survive the winter season. So far we have provided 400 pieces of warm clothing/ blankets and hoping to support many more.<br />\r\nSource: <a href=\"https://www.facebook.com/100712908527898/posts/133023021963553/\">https://www.facebook.com/100712908527898/posts/133023021963553/</a></p>','2021-01-03','active',NULL,'2021-11-02 12:33:43'),(10,'The health care provider at Hemica\'s Angels for Huminity','health.jpg','','The health care provider at Hemica\'s Angels  encourage the expecting mothers to schedule prenatal care appointments during their third trimester about every 2 or 4 weeks, depending on their health and pregnancy history. Starting at 36 weeks, we provide them with weekly checkups until they deliver.\r\n <br> Source: <a href=\"https://www.facebook.com/100712908527898/posts/141825121083343/\">https://www.facebook.com/100712908527898/posts/141825121083343/</a>\r\n','2021-01-15','active',NULL,NULL),(11,'Our Nutrition and Health Education Program','discuss.jpg','','Our Nutrition and Health Education Program helps families on a limited budget make healthier and nutritious food choices by acquiring the knowledge, skills, attitudes, and behavior changes necessary to improve their health. Our primary approach to coaching includes group coaching sessions to guide the low-income families to find balance in their diet. The learning programs are designed to facilitate the voluntary adoption of eating and other nutrition-related behaviors conducive to health and well-being.\r\n <br> Source: <a href=\"https://www.facebook.com/100712908527898/posts/179091470690041/\">https://www.facebook.com/100712908527898/posts/179091470690041/</a>\r\n','2021-03-14','active',NULL,NULL),(12,'\"Project Hasimukh\" is an initiative of Hemica\'s Angels for Humanity.','donate.jpg','','\"Project Hasimukh\" is an initiative of Hemica\'s Angels for Humanity.\r\nFood distribution program among thousands of people in different parts of Bogra and Dhaka under \"Project Hasimukh\" with the aim of making the underprivileged people happiness.\r\n <br> Source: <a href=\"https://www.facebook.com/100712908527898/posts/311317077467479/\">https://www.facebook.com/100712908527898/posts/311317077467479/</a>\r\n','2021-04-12','active',NULL,NULL),(13,'Hemica\'s Angels for Humanity initiated \"Project Hashimukh\" intending to bring smiles to unprivileged people in Bangladesh. ','donate2.jpg','','Hemica\'s Angels for Humanity initiated \"Project Hashimukh\" intending to bring smiles to unprivileged people in Bangladesh.\r\n <br> Source: <a href=\"https://www.facebook.com/100712908527898/posts/327872672478586/\">https://www.facebook.com/100712908527898/posts/327872672478586/</a>\r\n','2021-06-05','active',NULL,NULL),(14,'Free health check-up campaign','61811305b34a2_WhatsAppImage2021-11-02at4.27.27PM.jpeg','','<p>The activities of the every month-long free health check-up campaign organized by &quot;Project Hasimukh&quot; at the initiative of Himicas Angels for Humanity.<br />\r\nSource: <a href=\"https://www.facebook.com/100712908527898/posts/316235740308946/\">https://www.facebook.com/100712908527898/posts/316235740308946/</a></p>','2021-07-17','active',NULL,'2021-11-02 17:29:25'),(18,'Monthly Free Health Check-up Campaign under Hemica\'s Angels for Humanity\'s \"Project  Hasimukh\"','61810832473a9_Screenshot16-min.jpg','https://www.youtube.com/embed/QovAsN14_vM','<p>A month-long free health check-up campaign has been launched under &quot;Project Hasimukh&quot; organized by Hemica&#39;s Angels for Humanity with the aim of providing free health check-up to thousands of people in different parts of Dhaka every week. &quot;Project Hasimukh&quot; has already been providing protein based food and health services in different districts and upazilas including Dhaka with the aim of bringing smiles on the faces of disadvantaged mothers and children.&nbsp;</p>\r\n\r\n<p>Source:&nbsp;<a href=\"https://www.facebook.com/100712908527898/posts/319500009982519/\">https://www.facebook.com/100712908527898/posts/319500009982519/</a></p>','2021-09-25','active','2021-11-02 16:43:14','2021-11-02 16:43:14'),(20,'Free food distribution program for disadvantaged mothers and children \"Project Hasimukh\"','61810f786ec96_61810e635fab4_test-min.jpg','https://www.youtube.com/embed/hYB9nyYEO3c','<p>In the current Corona situation, providing safe food with health is an extreme challenge. To address this challenge, Hemica&#39;s Angels for Humanity has launched Project Hasimukh in several upazilas of Bogra district through which the Foundation is distributing free nutritious food among the underprivileged.One Pharma Limited, one of the leading pharmaceutical companies in Bangladesh, has extended a helping hand to make this great initiative a success. The purpose of this project is to bring laughter among at least a few lakh disadvantaged people.</p>\r\n\r\n<p>Source:&nbsp;<a href=\"https://www.facebook.com/HemicasAngelsForHumanity/videos/277460650450017/\">https://www.facebook.com/HemicasAngelsForHumanity/videos/277460650450017/</a></p>','2021-06-16','active','2021-11-02 17:09:39','2021-11-02 17:14:16'),(21,'Food distribution program under Project Hasimukh.','618115225d0eb_WhatsAppImage2021-11-02at4.34.08PM.jpeg','https://www.youtube.com/embed/mAwDRZjeyJo','<p>Rahman Avanti Hemica, a successful woman entrepreneur from Bangladesh, is working to eradicate the vicious cycle of poverty and malnutrition from her society through her foundation called Hemica&#39;s Angels for Humanity. In the meantime, the Foundation has been working tirelessly for the last one year to provide protein based food to 100 disadvantaged families in Bogra district on a regular basis as well as to empower and train women.In the current Corona situation, providing safe food with health is an extreme challenge. To address this challenge, Hemica&#39;s Angels for Humanity has launched Project Hasimukh in several upazilas of Bogra district through which the Foundation is distributing free nutritious food among the underprivileged.&nbsp;One Pharma Limited, one of the leading pharmaceutical companies in Bangladesh, has extended a helping hand to make this great initiative a success. The purpose of this project is to bring laughter among at least a few lakh disadvantaged people.</p>\r\n\r\n<p>&nbsp;</p>','2021-05-05','active','2021-11-02 17:38:26','2021-11-02 17:38:26'),(22,'\"Project Hasimukh\" is a food distribution program aimed at putting smiles on the faces of disadvantaged mothers and children.','618160169e013_kkkkkk.jpeg','https://www.youtube.com/embed/sIDE8H7jEjI','<p>&quot;Project Hasimukh&quot; is a food distribution program aimed at putting smiles on the faces of disadvantaged mothers and children.</p>\r\n\r\n<p>Source:&nbsp;<a href=\"https://m.facebook.com/story.php?story_fbid=288599149739272&amp;id=100712908527898\">https://m.facebook.com/story.php?story_fbid=288599149739272&amp;id=100712908527898</a></p>','2021-08-25','active','2021-11-02 19:05:11','2021-11-02 22:58:14'),(23,'Food distribution program under \"Project Hasimukh\"','61824ba62a922_WhatsAppImage2021-11-03at2.23.27PM.jpeg','https://www.youtube.com/embed/2OMxtEeCUCk','<p>Food distribution program under &quot;Project Hasimukh&quot; aims to put a smile on the faces of disadvantaged mothers and children.&nbsp;On this day we distribute 300 food packets.</p>\r\n\r\n<p>Source:&nbsp;<a href=\"https://m.facebook.com/story.php?story_fbid=295744812358039&amp;id=100712908527898\">https://m.facebook.com/story.php?story_fbid=295744812358039&amp;id=100712908527898</a></p>','2021-09-04','active','2021-11-03 15:43:18','2021-11-03 15:43:18'),(24,'Hemica\'s Angels for Humanity is working to ensure nutrition and health care for disadvantaged women and children.','618a52ecdd421_WhatsAppImage2021-11-09at4.39.07PM.jpeg','','<p>The importance of feeding age-appropriate nutritious food to growing children is immense. Hemica&#39;s Angels for Humanity is working to ensure nutrition and health care for disadvantaged women and children.</p>\r\n\r\n<p>Some memorable moments from the activities of &quot;Project Hasimukh&quot; organized by Hemica&#39;s Angels for Humanity and One Pharma Limited. Under this program free food is distributed among the disadvantaged.</p>\r\n\r\n<p>Source:<a href=\"https://www.facebook.com/100712908527898/posts/332118945387292/\">&nbsp;https://www.facebook.com/100712908527898/posts/332118945387292/</a></p>','2021-09-16','active','2021-11-09 17:52:28','2021-11-09 17:52:28'),(25,'Project Hasimukh Monthly Free Health Check-up Gulshan Campaign','619374379f35c_grouppic.jpg','','<p>Some memorable moments in the third installment of the month-long free health check-up campaign organized by &quot;Project Hashimukh&quot; organized by Hemica&#39;s Angels for Humanity, One Pharma Limited and NAC No-Chinta Limited.Under this project, thousands of people will be given the facility of free health check-up in different parts of Dhaka every week.</p>\r\n\r\n<p>Source:<a href=\"https://www.facebook.com/100712908527898/posts/336557544943432/\"> https://www.facebook.com/100712908527898/posts/336557544943432/</a></p>','2021-11-13','active','2021-11-16 16:04:55','2021-11-16 16:04:55'),(26,'As part of this humanitarian program, Project Hashimukh  has been distributing nutritious food among the underprivileged .','sisisisi.jpg','','<p>On behalf of Hemica&#39;s Angels for Humanity - working for maternal health, balanced nutrition and child development among disadvantaged people in Bangladesh. To this end, we have been providing protein and healthy food and healthcare to disadvantaged mothers and children. As part of this humanitarian program, Project Hashimukh has been distributing nutritious food among the underprivileged .</p>\r\n\r\n<p>Source: https://www.facebook.com/100712908527898/posts/349416250324228/</p>','2021-12-04','active','2021-12-07 16:24:17','2021-12-07 16:24:17'),(27,'Activities of \"Project Hasimukh\" initiated by Hemica\'s Angels for Humanity and One Pharma Limited.','61b1a8dd12d59_WhatsAppImage2021-12-09at12.22.18PM.jpeg','','<p>Hemica&#39;s Angels for Humanity has been working on maternal health, balanced nutrition and child development in the vulnerable communities of Bangladesh. To take a holistic approach we started providing protein based food and free health check, medications among underprivileged mothers and children since 2019.</p>\r\n\r\n<p>One of our successful interventions is a Food distribution program among thousands of people in different parts of Dhaka, named &quot;Project Hasimukh&quot; which is aimed to bringing smiles on the faces of the people in need.</p>\r\n\r\n<p>Facebook:&nbsp;<a href=\"https://www.facebook.com/100712908527898/posts/351154336817086/\">https://www.facebook.com/100712908527898/posts/351154336817086/</a></p>\r\n\r\n<p>Twitter:&nbsp;<a href=\"https://twitter.com/ForHemicas/status/1468832552488095744\">https://twitter.com/ForHemicas/status/1468832552488095744</a></p>','2021-12-01','active','2021-12-09 13:55:29','2021-12-09 13:57:33'),(28,'Distribution of free nutritious food among the disadvantaged in Mirpur area under \"Project Hasimukh\".','61c02d0400416_61b2151d566ad_61b2146ce676b_263.jpg','https://www.youtube.com/embed/dQe5_NGVn_M','<p>In the current Corona situation, providing safe and healthy food is an extreme challenge. To address this challenge, Hemica&rsquo;s Angels for Humanity has launched &ldquo;Project Hasimukh&rdquo; in several places in Dhaka, including Bogra district and upazila, through which the foundation is distributing free nutritious food among the underprivileged. One Pharma Limited, one of the leading pharmaceutical companies in Bangladesh, has extended its helping hand to make this great initiative a success. The purpose of this &ldquo;Project Hasimukh&rdquo; &nbsp;&nbsp;is to bring laughter among at least a few lakh disadvantaged people.In the current Corona situation, providing safe and healthy food is an extreme challenge. To address this challenge, Hemica&rsquo;s Angels for Humanity has launched &ldquo;Project Hasimukh&rdquo; in several places in Dhaka, including Bogra district and upazila, through which the foundation is distributing free nutritious food among the underprivileged. One Pharma Limited, one of the leading pharmaceutical companies in Bangladesh, has extended its helping hand to make this great initiative a success. The purpose of this &ldquo;Project Hasimukh&rdquo; &nbsp;&nbsp;is to bring laughter among at least a few lakh disadvantaged people.</p>','2021-12-04','active','2021-12-09 21:28:02','2021-12-20 14:13:08'),(29,'\"Hemica\'s Angels for Humanity\" and \"No Chinta\" at the \"Mujib 100 Industrial Exhibition\"','event.jpg','','<p>We were overwhelmed by the spontaneous participation of everyone in the booths of &quot;Hemica&#39;s Angels for Humanity&quot; and &quot;No Chinta&quot; at the &quot;Mujib 100 Industrial Exhibition&quot; held at the Bangabandhu International Conference Center on 10th and 11th. In these two days we have been able to provide free healthcare to over 200 visitors. Thank you all very much for joining us and donating to the exhibition. Your participation inspires us to move forward.</p>\r\n\r\n<p>Facebook:&nbsp;<a href=\"https://www.facebook.com/100712908527898/posts/357270286205491/\">https://www.facebook.com/100712908527898/posts/357270286205491/</a></p>\r\n\r\n<p>Twitter :&nbsp;<a href=\"https://twitter.com/ForHemicas\">https://twitter.com/ForHemicas</a></p>','2021-12-11','active','2021-12-20 14:30:11','2021-12-20 14:30:11'),(30,'May the New Year give us new hope, opportunity, strength, and courage to do good for humanity. Wishing everyone a very Happy New Year!','newyear.jpeg','https://www.youtube.com/embed/BqFZGvH_YcI','<p>May the New Year give us new hope, opportunity, strength, and courage to do good for humanity. Wishing everyone a very Happy New Year!</p>\r\n\r\n<p>Facebook:&nbsp;<a href=\"http:// https://fb.watch/afFshWlw5P/\">https://fb.watch/afFshWlw5P/</a></p>\r\n\r\n<p>Twitter:<a href=\"http:// https://twitter.com/ForHemicas/status/1477153202051059712\">&nbsp;https://twitter.com/ForHemicas/status/1477153202051059712</a></p>','2021-12-31','active','2022-01-02 13:33:50','2022-01-02 13:33:50'),(31,'Our Food Distribution Program in Bogra','fd_dis.jpg','','<p>Hemica&#39;s Angels for Humanity&#39;s food distribution program under project &quot;Hashimukh&quot; is strengthening the nutrition safety net by distributing protein-based meals to children, low-income families, the elderly, etc. Our initiative goes beyond protein-based meal distribution. We work to create health awareness among pregnant women, new mothers, children, the elderly, etc., and provide free checkups. Our holistic approach covers a broad spectrum of societal issues and we hope our initiative will create awareness among communities.</p>','2022-01-29','active','2022-02-02 17:25:42','2022-02-02 17:26:15'),(32,'Free Health Checkup','62b3085fa52c7_277576923_420315166567669_7523566429857527578_n.jpg','','<p>As part of the commitment to societies, Hemica&#39;s Angels for Humanity recently organized a Free Health Checkup Campaign at Shere Bangla Krishi University. Besides providing Free checkups, we spread awareness among service recipients about the poor health condition of Children and Mothers of unprivileged communities. We are delighted to hear many concerned voices and share our experiences with them.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Source:&nbsp;https://www.facebook.com/HemicasAngelsForHumanity/posts/pfbid0J6pAF9mHmhZtoKbXJNdUzKthwoo9poNki3evGW7yKh3Vaa9GHmYaM1CYQ2SnyXvzl</p>','2022-03-30','active','2022-06-22 19:17:35','2022-06-22 19:17:35'),(33,'Hemica\'s Angels for Humanity for Children','','https://www.youtube.com/embed/5D4ful-_WpY','<p>Hemica&#39;s Angels for Humanity operates in Dhaka and other territories in Bangladesh and helps keep mothers and children healthy through initiatives to provide protein-based meals, hygiene, nutrition, healthcare, and sustainable basic needs. Our organization aims at ending hunger and malnutrition in Bangladesh.</p>\r\n\r\n<p>In addition to helping feed starving children, Hemica&#39;s Angels for Humanity helps underprivileged communities regardless of gender/religion.</p>\r\n\r\n<p>Donate a meal, volunteer, or become an advocate and start helping today.</p>','2022-04-06','inactive','2022-06-22 19:23:19','2022-07-07 18:47:37'),(34,'Medical Checkups Among Pregnant Women','62b30a1d22a26_278913315_433092658623253_6518578104598836496_n.jpg','','<p>To improve children&#39;s nutrition and cognitive development, Hemica&#39;s Angels for Humanity regularly provides aid and holds educational activities among mothers and pregnant women in unprivileged communities. We recently offered medical checkups among pregnant women in the Bogra district to raise health-related awareness. Our program includes educational activities to raise awareness and provide prenatal care on how these pregnant women can better take care of their infants.</p>\r\n\r\n<p>source:&nbsp;https://www.facebook.com/HemicasAngelsForHumanity/posts/pfbid0LKTqBtqoPj5ZgkdfyB4nNK11yjDjYWUGe7TZTCYE91B1kRTFqZAFvXjDwbdPbRabl</p>','2022-04-19','active','2022-06-22 19:25:01','2022-06-22 19:25:01'),(35,'Hemica\'s Angels for Humanity\'s Journey!','','https://www.youtube.com/embed/PPy7rDp3Fs4','<p>Hemica&#39;s Angels for Humanity has expanded its helping hands to many unprivileged communities by providing humanitarian aid, such as, nutritious food, winter clothes, medical checkups, and essential medicines in many parts of Bangladesh. Ensuring maternal care and protein-based healthy food for mother and child is a significant part of our broader work. Many volunteers and well-wishers have joined us in this activity.</p>\r\n\r\n<p>We wish the best for everyone associated with Hemica&#39;s Angels for Humanity for their unwavering support and highlighting our activities at every level of society.</p>','2022-04-22','inactive','2022-06-22 19:27:32','2022-07-07 18:47:00'),(36,'Hemica\'s Angels for Humanity\'s needle training program','62b30af8aec9e_283006662_452738256658693_1047997284653249300_n.jpg','','<p>Poverty alleviation has no alternative but to create employment for women and make them self-reliant. A self-sufficient woman can survive in a hostile environment. Many women have already been supported by Hemica&#39;s Angels for Humanity&#39;s needle training program and have been able to stand by their families.</p>\r\n\r\n<p>source:&nbsp;https://www.facebook.com/HemicasAngelsForHumanity/posts/pfbid0qcE5HA72LkRWpVvSxYboJkJsWQz6kruNJNwqLeP8WbM8ECfs3SiNBDDQ9k3fPDenl</p>','2022-05-19','active','2022-06-22 19:28:40','2022-06-22 19:28:40'),(37,'Health and Nutrition Program for Disadvantaged Mothers and Children','62b30b4d9546c_283596669_456986339567218_2556574136280992371_n.jpg','','<p>Hemica&#39;s Angels for Humanity has launched various programs to ensure the health and nutrition of disadvantaged mothers and children. We are working tirelessly to highlight these societal issues at every level of society. We hope that our efforts will ensure a safe and healthy community for vulnerable mothers and children.</p>\r\n\r\n<p>source:&nbsp;https://www.facebook.com/HemicasAngelsForHumanity/posts/pfbid02fdrBuqmY75JoYisSY4v8XGYgjiqxZpNA9JBkbkLu5xdNgjpFFRb3aoqmi7o94nJBl</p>','2022-05-25','active','2022-06-22 19:30:05','2022-06-22 19:30:05'),(38,'\"Sponsor a Child\" program','','https://www.youtube.com/embed/5V6_byW2xoo','<p>Hemica&#39;s Angels for Humanity is continuously working to ensure a safe future for children. Through our &quot;Sponsor a Child&quot; program, we stand by disadvantaged children and their families. Many like Mr. Ujjal have extended a helping hand to the children in this program. Thank you, Mr. Ujjal, for sponsoring Ruhi. Hemica&#39;s Angels for Humanity&#39;s team and her family are grateful. We are also very thankful to those whose help is changing the fate of a child.</p>','2022-05-30','inactive','2022-06-22 19:31:19','2022-07-07 18:46:32'),(39,'Our heartiest wishes to all those who have worked together with us tirelessly','','https://www.youtube.com/embed/PPy7rDp3Fs4','<p>Hemica&#39;s Angels for Humanity&#39;s journey begins with the expectation of a bright future for thousands of underprivileged people. We have extended a helping hand to many disadvantaged communities on our broad path. Throughout the year, we have carried out various activities, including distributing protein-based meals, health checkups, essential medicines, clothing, and arranging aesthetic art competitions among children. Many well-wishers have helped us, and many volunteers have worked tirelessly. Our heartiest wishes to all those who have worked together with us on this journey.</p>','2022-06-06','inactive','2022-06-22 19:32:48','2022-06-27 16:38:20'),(40,'Hemica\'s Angels for Humanity for Children!','62e7a094887ca_maxresdefault2.jpg','https://www.youtube.com/embed/Wdt-1LEIjU8','<p>Hemica&#39;s Angels for Humanity shared the joy of the Pahela Baishakh with the talented little ones participating in the aesthetic drawing competition in Mohammadpur Government Primary School. We started the first day of Bengali New Year by distributing protein-based food among the children. Our team is relentlessly working to distribute nutritious food and bring health awareness among mothers and children, and glad to be part of this event. Thanks to the media partner Asian TV, BTV, and Special guest Chef Tony Khan for your sincere participation.</p>','2022-05-08','active','2022-08-01 16:44:52','2022-08-01 16:44:52'),(41,'Hemica\'s Angels for Humanity\'s Program For Children','62e7a2120bf7d_maxresdefault3.jpg','https://www.youtube.com/embed/5D4ful-_WpY','<p>Hemica&#39;s Angels for Humanity operates in Dhaka and other territories in Bangladesh and helps keep mothers and children healthy through initiatives to provide protein-based meals, hygiene, nutrition, healthcare, and sustainable basic needs. Our organization aims at ending hunger and malnutrition in Bangladesh. In addition to helping feed starving children, Hemica&#39;s Angels for Humanity helps underprivileged communities regardless of gender/religion. Donate a meal, volunteer, or become an advocate and start helping today.</p>','2022-06-08','active','2022-08-01 16:51:14','2022-08-01 16:51:14'),(42,'Thank Your For Your Unwavering Support!','62e7a2ea7ac59_maxresdefault4.jpg','https://www.youtube.com/embed/PPy7rDp3Fs4','<p>Hemica&#39;s Angels for Humanity has expanded its helping hands to many unprivileged communities by providing humanitarian aid, such as, nutritious food, winter clothes, medical checkups, and essential medicines in many parts of Bangladesh. Ensuring maternal care and protein-based healthy food for mother and child is a significant part of our broader work. Many volunteers and well-wishers have joined us in this activity. We wish the best for everyone associated with Hemica&#39;s Angels for Humanity for their unwavering support and highlighting our activities at every level of society.</p>','2022-06-08','active','2022-08-01 16:54:50','2022-08-01 16:54:50'),(43,'Thank You For Your Support','62e7a34d8f7cb_maxresdefault5.jpg','https://www.youtube.com/embed/5V6_byW2xoo','<p>Hemica&#39;s Angels for Humanity is continuously working to ensure a safe future for children. Through our &quot;Sponsor a Child&quot; program, we stand by disadvantaged children and their families. Many like Mr. Ujjal have extended a helping hand to the children in this program. Thank you, Mr. Ujjal, for sponsoring Ruhi. Hemica&#39;s Angels for Humanity&#39;s team and her family are grateful. We are also very thankful to those whose help is changing the fate of a child.</p>','2022-06-08','active','2022-08-01 16:56:29','2022-08-01 16:56:29'),(44,'Food Distribution Among Indigent People','62f099e801239_maxresdefault6.jpg','https://www.youtube.com/embed/uX8goxhJTyA','<p>As part of our ongoing efforts to distribute protein-rich food to underprivileged people, we went to Hatirjheel a few days back. On this day, we have given food to many mothers and children. We hope our efforts have brought a smile to the faces of many indigent people.</p>','2022-08-08','active','2022-08-08 12:06:48','2022-08-08 12:06:48'),(45,'Free Medical Checkup Campaign','62f7536299343_health-checkup.jpg','','<p>In addition to raising health awareness among the people, Hemica&#39;s Angels for Humanity has organized free health campaigns at different times to highlight the wretched condition of the underprivileged people of Bangladesh. Many well-wishers are working with us to ensure that the disadvantaged receive one of the basic core needs, healthcare. Thanks to No Chinta Ltd. and all the kind volunteers working with us.</p>\r\n\r\n<p>Source:&nbsp;https://www.facebook.com/HemicasAngelsForHumanity/posts/pfbid0HrKPvBt7PVs4rMtBWhk2LpvYfmsLQqgSfkyGuGfuvYUvYZjMMyxgEDtgtG5H2ndml</p>','2022-06-01','active','2022-08-13 14:31:46','2022-08-13 14:31:46'),(46,'We stand firmly on the side of the underprivileged people','62f75ce674e62_mother-and-children.jpg','','<p>Underprivileged people are at the heart of all activities of Hemica&#39;s Angels for Humanity. In serving humanity, we stand firmly on the side of the disadvantaged, providing basic food and health care. Our activities are expanding and hopefully, we can make a difference in the lives of vulnerable people in this country.</p>\r\n\r\n<p>Source:&nbsp;https://www.facebook.com/HemicasAngelsForHumanity/posts/pfbid022ErbceUWquowyHzZbyPfvUNSN4yTgT23e1Fm7mqxA19AswCLscar6iGfbbeXAWjkl</p>','2022-07-25','active','2022-08-13 15:12:22','2022-08-13 15:12:22'),(47,'Providing protein-based food to the indigent','62f75e8526aba_new-photo.jpg','','<p>Food is one of the basic human needs, but due to poverty and lack of awareness, large numbers of people around the world are deprived of it. We make serious efforts to provide protein-based food to the indigent in Bangladesh. We have implemented programs in different parts of Bangladesh and our efforts will accelerate in the future.</p>\r\n\r\n<p>Source:&nbsp;https://www.facebook.com/HemicasAngelsForHumanity/posts/pfbid0zzLisJyGFNSS9kov3TkFfb9sW8utJkiYFB3LhshxgD4stG6epUJLcribtSWrp1Ugl</p>','2022-08-12','active','2022-08-13 15:19:17','2022-08-13 15:19:17');
/*!40000 ALTER TABLE `success_stories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billingAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `billingAddress`, `postalCode`, `image`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES (1,'admin','admin@global.com',NULL,'$2y$10$NcR.TsEUKE.PfYRI44vA2ur8rqA9AJlsqORPpyjyNOpzj8ui5RKk2',NULL,NULL,NULL,'admin','One-Ict','a3qhARpCSWZGAF0kAVNGxqp0aiVPxSyRqmE28txAPsx7jRi5EVzloD5Sy4pF','2020-11-16 13:48:58','2021-10-05 15:55:52'),(6,'Md Sirajus','sirajus.salekin@one-ict.com',NULL,'e10adc3949ba59abbe56e057f20f883e','Mirpur-1','1216','','web','1638153576',NULL,'2020-11-17 11:26:22','2020-12-10 20:44:10'),(8,'Sean McReynolds','seanmcreynolds025@gmail.com',NULL,'73bdf6ec4fb48951e5712886800e873c','325 Russellwood Ct. Schaumburg IL','60193','','web','1871459456',NULL,'2020-12-02 05:34:39','2020-12-02 05:34:39'),(10,'test test','habibullah.himel@gmail.com',NULL,'$2y$10$8l9dOYVFPBlzwax740nMdu9rcNsYRF8xvy2aFlqN0Kqk.sniLXm.m','sadasddas','123123','','web','696959444',NULL,'2020-12-02 20:20:49','2020-12-02 20:20:49'),(12,'Himel Habibullah','habibullah.balaly@one-ict.com',NULL,'25d55ad283aa400af464c76d713c07ad','Assd','123','','web','1593773816',NULL,'2020-12-04 17:19:29','2020-12-04 17:19:29'),(13,'Hemica Rahman','hemica.rahman@one-ict.com',NULL,'e10adc3949ba59abbe56e057f20f883e','1744 n 75th ct','60707','','web','1384486511',NULL,'2020-12-05 15:02:50','2020-12-05 15:02:50'),(20,'kaniz fatima','kanizfatima44@yahoo.com',NULL,'fda17aa24e9b63740829cdeeaf60d750','168-42 88th ave, apt 1F','11432','','web','829222535',NULL,'2020-12-08 08:45:26','2020-12-08 08:45:26'),(21,'test test3','minar.rahaman@yahoo.com',NULL,'25d55ad283aa400af464c76d713c07ad','test','test','','web','1305426538',NULL,'2020-12-10 20:22:50','2020-12-10 20:40:52'),(22,'Md Ripon','hossainskrill891@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','farmget','1216','','web','296492124',NULL,'2020-12-10 20:45:34','2020-12-10 20:45:34'),(24,'Manik Sarder','sarder.manik91@gmail.com',NULL,'59433c37ae6f14621934250b451ed452','Dhaka, Bangladesh','1212','','web','521892225',NULL,'2020-12-13 15:17:49','2020-12-13 15:17:49'),(27,'Christine Amerosa','christine.amerosa@gmail.com',NULL,'413c6cf87f82746cceffb4f5563cc2c1','213 Bennett Ave 6D',NULL,'','web','699046148',NULL,'2020-12-21 05:56:52','2020-12-21 05:56:52'),(28,'Samira Mawla','sam.m8747@gmail.com',NULL,'3e4d104a054242939d5aeaabbd88faad','2900 East North Street',NULL,'','web','300615819',NULL,'2020-12-21 06:19:10','2020-12-21 06:19:10'),(29,'Mir Farid','mirfarid7160@icloud.com',NULL,'2afa9f029bc7e4bfba7dad0221a29403','168-42 88th Ave',NULL,'','web','1559646818',NULL,'2020-12-21 09:57:56','2020-12-21 09:57:56'),(30,'Parveen Huq','nazmul.haque@regeneron.com',NULL,'2672a092c627ccaf8597c7235f402cbe','20 Triangle Street, Unit A12',NULL,'','web','1037299801',NULL,'2021-01-15 10:51:04','2021-01-15 10:51:04'),(31,'Mohammad Azim','moazim1993@gmail.com',NULL,'4481e7728991afedb76ea14ff4dcce39','837 Jersey Ave',NULL,'','web','1247474506',NULL,'2021-01-18 10:50:07','2021-01-18 10:50:07'),(32,'Mohammad Hassan','uzzal.pallabi@yahoo.com',NULL,'2b0e99ddcbada5ac9df524e50418bc05','21734 Hempstead Avenue',NULL,'','web','204270058',NULL,'2021-03-07 23:27:05','2021-03-07 23:27:05'),(33,'soniya sneha','sonia.sneha2014@gmail.com',NULL,'25d55ad283aa400af464c76d713c07ad','CGDL Sonargaon Tower8,9 & 10/3 Free',NULL,'','web','1810903903',NULL,'2021-04-09 00:05:33','2021-04-09 00:05:33'),(34,'sabine millauriaux','smillaur@gmail.com',NULL,'d2ca962a14f900312afffb7a0e17eb76','213 Bennett Avenue, apt 4B',NULL,'','web','1607354291',NULL,'2021-04-23 23:24:39','2021-04-23 23:24:39'),(35,'SMR Hossain','rafu@rafusoft.com1',NULL,'25d55ad283aa400af464c76d713c07ad1','rozendaal, 146',NULL,'','web','2025428179',NULL,'2021-06-28 12:28:41','2021-06-28 12:28:41'),(36,'Naj Robbani','nrobbani@hotmail.com',NULL,'6d73c53394c0bd1260e7625912e84d70','Huxley Road',NULL,'','web','1369309520',NULL,'2021-06-30 22:12:34','2021-06-30 22:14:58'),(37,'Sm. Rashedul','sm.rashedul@gmai.com',NULL,'5a4432a5fa436ba66dc111f2bd5f6371','Dhaka 1205',NULL,'','web','1941792723',NULL,'2021-10-28 15:07:44','2021-10-28 15:07:44'),(38,'Founder','founder@hemicasangels.org',NULL,'$2y$10$4MACKSssxlViGioYtylAEOl9l5llCRARplULd.oN9vHj/3uK7ibfa',NULL,NULL,NULL,'admin','One-Ict','dhkrmmD5seUWmggVWceZAdn8gcak58mnLTr87kf5pwBagmz9aZSXHsar97Fl','2020-11-16 13:48:58','2021-10-05 15:55:52'),(39,'Sean McReynolds','seanmc@wowway.com',NULL,'a0aa0c62cbd003e8b3a8113c19b14c55','325 Russellwood Ct.',NULL,'','web','358579563',NULL,'2021-12-01 10:25:42','2021-12-01 10:25:42'),(40,'ignore ignore','testing@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','Dhaka',NULL,'','web','1201037122',NULL,'2021-12-07 13:40:16','2021-12-07 13:40:16'),(41,'Rahman Hemica','Hemica311@gmail.com',NULL,'0f58d7fca8d0a51179132e305e6f88d6','213 Bennett Avenue',NULL,'','web','178381685',NULL,'2021-12-08 15:41:02','2021-12-08 15:41:02'),(42,'Shahriar Iqbal','shahriar.iqbal.dev@gmail.com',NULL,'25d55ad283aa400af464c76d713c07ad','Jahangir Gate',NULL,'','web','2129122804',NULL,'2022-02-03 12:42:41','2022-02-03 12:42:41'),(43,'Tonni Akter Mou','tonumou46@gmail.com',NULL,'fc32011725187ff6367cde8e7a3df729','Uttara Dhaka',NULL,'','web','1340191272',NULL,'2022-03-15 17:03:23','2022-03-15 17:03:23'),(44,'Redwan Ahamad','redwan.ahamad506@gmail.com',NULL,'d4e91aaa2234f170068cccbe14e87873','Fatullah Railway Station Road, Dapa Idrakpur',NULL,'','web','1486387912',NULL,'2022-04-24 14:48:20','2022-04-24 14:48:20'),(45,'limon sagg','limon@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','dhak',NULL,'','web','1012941499',NULL,'2022-04-27 15:39:44','2022-04-27 15:39:44'),(46,'Limon Safayet','limon6531@gmail.com',NULL,'b5a86b4490fa0816e5caa861d91c65c9','6/2 S. S Alam Road, Masdair',NULL,'','web','339371494',NULL,'2022-05-18 12:25:42','2022-05-18 12:25:42'),(47,'Yalid Rahman','yalid.rahman@gmail.com',NULL,'f5e5bf7e43b631818fa5835832d339be','1016 Washington Ave SE',NULL,'','web','169896624',NULL,'2022-06-22 04:13:58','2022-06-22 04:13:58'),(48,'Jannatun Akhund','jannatun.akhund@gmail.com',NULL,'bfccfb7fe871f055831d757b912050fe','2839 Valentine Ave Apt 2B',NULL,'','web','268902981',NULL,'2022-06-22 04:28:17','2022-06-22 04:28:17'),(49,'jhkh jlhjh','foxtrot.buyxb1@bumpmail.io',NULL,'631aff811da632f27dad1ea610169cab','jhkjhj777',NULL,'','web','549852506',NULL,'2022-07-01 07:02:21','2022-07-01 07:02:21'),(50,'Asif Ferdous','asifferdous8@gmail.com',NULL,'18cef0f23bc49e8a2d5ef30575c5f293','Mirpur 1, Dhaka',NULL,'','web','1272925998',NULL,'2022-11-10 09:12:51','2022-11-10 09:12:51'),(51,'Hello World! https://m8jhe1.com?hs=3bc3029ed038080e618db402fcd37045& t0g5l0','x01mp3rx0z@mailto.plus',NULL,'72a73bdcef67c7c06fadcc38e350e4b4','1qdq2m','71552','','web','2026332933',NULL,'2022-11-23 02:53:24','2022-11-23 02:53:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `volunteers_email_unique` (`email`),
  UNIQUE KEY `volunteers_phonenumber_unique` (`phoneNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteers`
--

LOCK TABLES `volunteers` WRITE;
/*!40000 ALTER TABLE `volunteers` DISABLE KEYS */;
INSERT INTO `volunteers` (`id`, `name`, `email`, `branch`, `position`, `phoneNumber`, `cv`, `message`, `created_at`, `updated_at`) VALUES (35,'Md. Arifeen Billah Badal','arifeenbillahbadal@gmail.com','New york','Branding the organization','01716209958','18618899.Md. Arifeen Billah Badal CV.pdf','Dear sir, Please see my cv and my work experience, for any kind of job with your kindness.','2020-12-23 12:35:25','2020-12-23 12:35:25'),(36,'Sree Shuvendu kumar mahato','mahatosk5663@gmail.com','New york','Special Events Volunteer Coordinator','01777589334','','Interest in voluntary','2021-02-15 16:18:21','2021-02-15 16:18:21');
/*!40000 ALTER TABLE `volunteers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zakats`
--

DROP TABLE IF EXISTS `zakats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zakats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zakats`
--

LOCK TABLES `zakats` WRITE;
/*!40000 ALTER TABLE `zakats` DISABLE KEYS */;
INSERT INTO `zakats` (`id`, `userId`, `paymentId`, `currency`, `amount`, `type`, `created_at`, `updated_at`) VALUES (1,'46','pi_3LDPNbAJ6KJIo1Jn2Plo0Eer','usd','20','zakat','2022-06-22 15:58:13','2022-06-22 15:58:13');
/*!40000 ALTER TABLE `zakats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'hemicas_angels'
--

--
-- Dumping routines for database 'hemicas_angels'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-14 21:28:36
