-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for task-student
CREATE DATABASE IF NOT EXISTS `task-student` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `task-student`;

-- Dumping structure for table task-student.english_level
CREATE TABLE IF NOT EXISTS `english_level` (
  `english_level_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `english_level_name` varchar(50) NOT NULL,
  PRIMARY KEY (`english_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table task-student.students
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `student_firstname` varchar(100) NOT NULL,
  `student_lastname` varchar(100) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_age` tinyint(2) unsigned NOT NULL,
  `student_phone` varchar(20) NOT NULL,
  `preferred_comunication` varchar(50) DEFAULT NULL,
  `english_level_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `student_start_date` date NOT NULL,
  `student_skills` text NOT NULL,
  `student_presentation` text NOT NULL,
  `study_from_home` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_email` (`student_email`),
  KEY `english_level_english_level_id` (`english_level_id`),
  CONSTRAINT `FK_students_english_level` FOREIGN KEY (`english_level_id`) REFERENCES `english_level` (`english_level_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
