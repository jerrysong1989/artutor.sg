-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.24-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4435
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `test`;


-- Dumping structure for table test.tbl_skill
CREATE TABLE IF NOT EXISTS `tbl_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table test.tbl_skill: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_skill` DISABLE KEYS */;
INSERT INTO `tbl_skill` (`id`, `name`, `category`) VALUES
(1, 'Piano', 'Instrument'),
(2, 'Guitar', 'Instrument'),
(3, 'Violin', 'Instrument'),
(4, 'Singing', 'Singing'),
(5, 'Dancing', 'Dancing');
/*!40000 ALTER TABLE `tbl_skill` ENABLE KEYS */;


-- Dumping structure for table test.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `refNumber` varchar(5) DEFAULT NULL,
  `type` varchar(10) DEFAULT 'user',
  `displayName` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table test.tbl_user: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`id`, `username`, `password`, `mobile`, `refNumber`, `type`, `displayName`, `gender`) VALUES
(1, 'huze0001@gmail.com', '870222', '88552958', 'A0001', 'tutor', 'HU Ze', NULL),
(2, 'admin8978boy@gmail.com', 'mimayo', '81983160', '', 'tutor', 'TAN Chen', NULL),
(4, 'abc@ishu.sg', '1234', '', NULL, 'user', 'TAN Xiao Chen', NULL);
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;


-- Dumping structure for table test.tbl_user_skill
CREATE TABLE IF NOT EXISTS `tbl_user_skill` (
  `tutor_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  PRIMARY KEY (`tutor_id`,`skill_id`),
  KEY `FK_SKILL` (`skill_id`),
  CONSTRAINT `FK_SKILL` FOREIGN KEY (`skill_id`) REFERENCES `tbl_skill` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_TUTOR` FOREIGN KEY (`tutor_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table test.tbl_user_skill: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_user_skill` DISABLE KEYS */;
INSERT INTO `tbl_user_skill` (`tutor_id`, `skill_id`) VALUES
(1, 1),
(1, 2),
(1, 3);
/*!40000 ALTER TABLE `tbl_user_skill` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;