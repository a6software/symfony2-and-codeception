# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 192.168.1.126 (MySQL 5.5.37-0ubuntu0.14.04.1)
# Database: codecept_test_db
# Generation Time: 2014-09-22 15:52:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table fos_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fos_user`;

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`)
VALUES
	(1,'timmy','timmy','timmy@timson.net','timmy@timson.net',0,'9u5oas81yccg8k8sscwc48cwok0c000','1MiNzADO3XpGp2bzK1Bex7HNLSbprNEPFRrGpe0Wk7IlDM+enhLEXOpNlgFlg0QytTYMraJTNY9lf+BpDP0Bzg==',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),
	(2,'billy','billy','billy@bluehat.org','billy@bluehat.org',0,'kzmd2ydl81wk0w4g0sg8cwo484g88ko','f+2smQ3m/3PeYN5z3t9NC/SpXaYxkIu6MpdYfHnwbpqg5gymPX/Yd+zfSSdLAc6DyuojnDcXCHHJYtSn3RCqrg==',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),
	(3,'donald','donald','donald@duck.co.uk','donald@duck.co.uk',0,'1pbv8xd245q80wckgscgc4ckc4sgs4k','DDWXl1/MLuSGdMy4/hLrCypDFFi3ZVJVYYSpve2dgvmvlMZG33sAM/rw/YJLOf5MgZQ1A/fSsvncNTDz88ggoA==',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL);

/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_profile
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_profile`;

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `receive_mailing` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D95AB405A76ED395` (`user_id`),
  CONSTRAINT `FK_D95AB405A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `user_profile` WRITE;
/*!40000 ALTER TABLE `user_profile` DISABLE KEYS */;

INSERT INTO `user_profile` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `job_title`, `salary`, `receive_mailing`)
VALUES
	(1,1,'Tim','tee','Timson','Sales guy',30000,1),
	(2,2,'Bill','lee','Blueshoes','Programmer',60000,1),
	(3,3,'Donald','Walt','Duck','Chief Duck',120000,0);

/*!40000 ALTER TABLE `user_profile` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
