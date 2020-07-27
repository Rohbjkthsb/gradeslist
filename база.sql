-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.41 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных schoolreg
CREATE DATABASE IF NOT EXISTS `schoolreg` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `schoolreg`;

-- Дамп структуры для таблица schoolreg.classes
CREATE TABLE IF NOT EXISTS `classes` (
  `class_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class` int(11) NOT NULL DEFAULT '1',
  `letter` char(2) NOT NULL DEFAULT 'А',
  `school_year` int(4) NOT NULL,
  `teacher_id` int(11) NOT NULL DEFAULT '0',
  `school_year_id` bigint(20) NOT NULL,
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `class` (`class`,`letter`,`school_year`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.classes: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` (`class_id`, `class`, `letter`, `school_year`, `teacher_id`, `school_year_id`) VALUES
	(1, 5, 'Б', 0, 1, 1);
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.disciplines
CREATE TABLE IF NOT EXISTS `disciplines` (
  `discipline_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `discipline` varchar(50) NOT NULL,
  PRIMARY KEY (`discipline_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.disciplines: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `disciplines` DISABLE KEYS */;
INSERT INTO `disciplines` (`discipline_id`, `discipline`) VALUES
	(1, 'Физика'),
	(2, 'Математика'),
	(3, 'Русский Язык');
/*!40000 ALTER TABLE `disciplines` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.lessons
CREATE TABLE IF NOT EXISTS `lessons` (
  `lesson_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lesson_date` date NOT NULL,
  `subject_id` int(10) unsigned NOT NULL,
  `topic` varchar(255) NOT NULL,
  `active` bigint(20) NOT NULL DEFAULT '0',
  `lesson_type_id` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`lesson_id`),
  KEY `lesson_date` (`lesson_date`),
  KEY `lesson_type_id` (`lesson_type_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.lessons: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `lessons` DISABLE KEYS */;
INSERT INTO `lessons` (`lesson_id`, `lesson_date`, `subject_id`, `topic`, `active`, `lesson_type_id`) VALUES
	(1, '2019-04-26', 1, '', 0, 1),
	(2, '2019-04-22', 1, 'sds', 0, 1),
	(3, '2019-04-10', 1, '', 1556088441, 1),
	(4, '2019-04-22', 1, '', 0, 1),
	(5, '2019-04-23', 1, '', 1556088467, 2),
	(6, '2019-04-23', 1, 'j,heitybt cdzptq', 1556088481, 2),
	(7, '2019-05-08', 1, 'Изи', 1557196282, 1),
	(8, '2019-05-05', 1, 'Изи', 0, 2);
/*!40000 ALTER TABLE `lessons` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.lesson_types
CREATE TABLE IF NOT EXISTS `lesson_types` (
  `lesson_type_id` int(5) NOT NULL AUTO_INCREMENT,
  `lesson_type_name` varchar(100) NOT NULL,
  `lesson_weight` int(10) DEFAULT NULL,
  PRIMARY KEY (`lesson_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.lesson_types: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `lesson_types` DISABLE KEYS */;
INSERT INTO `lesson_types` (`lesson_type_id`, `lesson_type_name`, `lesson_weight`) VALUES
	(1, 'Обычный урок', 1),
	(2, 'Контрольная', 3),
	(3, 'Домашняя Работа', 1);
/*!40000 ALTER TABLE `lesson_types` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.quarters
CREATE TABLE IF NOT EXISTS `quarters` (
  `quarter_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `school_year_id` bigint(20) unsigned NOT NULL,
  `quarter_name` varchar(50) NOT NULL,
  `quarter_type` int(11) NOT NULL DEFAULT '1',
  `current` int(11) NOT NULL DEFAULT '0',
  `started` date NOT NULL,
  `finished` date NOT NULL,
  PRIMARY KEY (`quarter_id`),
  KEY `current` (`current`),
  KEY `school_year_id` (`school_year_id`),
  KEY `type_quarter` (`quarter_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.quarters: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `quarters` DISABLE KEYS */;
/*!40000 ALTER TABLE `quarters` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.schedules
CREATE TABLE IF NOT EXISTS `schedules` (
  `schedule_id` int(10) NOT NULL AUTO_INCREMENT,
  `quater_ref` int(10) NOT NULL,
  `class_ref` int(10) NOT NULL,
  `discipline_ref` int(10) NOT NULL,
  `day_of_week` int(2) NOT NULL,
  `num` int(3) DEFAULT '1',
  PRIMARY KEY (`schedule_id`),
  KEY `quater_class_discipline_refs` (`quater_ref`,`class_ref`,`discipline_ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.schedules: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `schedules` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedules` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.school_years
CREATE TABLE IF NOT EXISTS `school_years` (
  `school_year_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name_year` varchar(50) NOT NULL,
  `current` int(11) NOT NULL DEFAULT '0',
  `started` date NOT NULL,
  `finished` date NOT NULL,
  PRIMARY KEY (`school_year_id`),
  KEY `current` (`current`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.school_years: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `school_years` DISABLE KEYS */;
INSERT INTO `school_years` (`school_year_id`, `name_year`, `current`, `started`, `finished`) VALUES
	(1, 'Лол', 0, '2018-11-22', '2019-06-07');
/*!40000 ALTER TABLE `school_years` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.students
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `last_name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `address` varchar(255) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `mother_fio` varchar(50) NOT NULL,
  `mother_work_phone` varchar(25) NOT NULL,
  `mother_cell_phone` varchar(25) NOT NULL,
  `father_fio` varchar(50) NOT NULL,
  `father_work_phone` varchar(25) NOT NULL,
  `father_cell_phone` varchar(25) NOT NULL,
  `pin_code` int(6) NOT NULL DEFAULT '0',
  `email` varchar(25) NOT NULL,
  `smsphone` varchar(11) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `pin_code` (`pin_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.students: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` (`student_id`, `last_name`, `first_name`, `middle_name`, `birthday`, `address`, `phone`, `mother_fio`, `mother_work_phone`, `mother_cell_phone`, `father_fio`, `father_work_phone`, `father_cell_phone`, `pin_code`, `email`, `smsphone`) VALUES
	(1, 'Габышев', 'Лехаэль', 'Тимофеевич', '1999-11-22', 'fsfer', '(232) 323-23-23', 'ssss', '', '', '', '', '', 666235, '', '89246629014');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.students_in_class
CREATE TABLE IF NOT EXISTS `students_in_class` (
  `class_id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `expeled` int(1) NOT NULL DEFAULT '0',
  KEY `class_id` (`class_id`,`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.students_in_class: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `students_in_class` DISABLE KEYS */;
INSERT INTO `students_in_class` (`class_id`, `student_id`, `expeled`) VALUES
	(1, 1, 0);
/*!40000 ALTER TABLE `students_in_class` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.students_on_lesson
CREATE TABLE IF NOT EXISTS `students_on_lesson` (
  `student_id` int(10) unsigned NOT NULL,
  `lesson_id` int(10) unsigned NOT NULL,
  `grade` char(2) NOT NULL,
  UNIQUE KEY `student_id` (`student_id`,`lesson_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.students_on_lesson: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `students_on_lesson` DISABLE KEYS */;
INSERT INTO `students_on_lesson` (`student_id`, `lesson_id`, `grade`) VALUES
	(1, 1, '4'),
	(1, 2, '4'),
	(1, 4, '3'),
	(1, 8, '4');
/*!40000 ALTER TABLE `students_on_lesson` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.subjects
CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `discipline_id` int(10) unsigned NOT NULL,
  `teacher_id` int(10) unsigned NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.subjects: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` (`subject_id`, `discipline_id`, `teacher_id`, `class_id`) VALUES
	(1, 1, 1, 1);
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.teachers
CREATE TABLE IF NOT EXISTS `teachers` (
  `teacher_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `passwd` varchar(32) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.teachers: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` (`teacher_id`, `login`, `passwd`, `first_name`, `middle_name`, `last_name`) VALUES
	(1, 'antimus_teacher', 'c4ca4238a0b923820dcc509a6f75849b', 'Антон', 'Тимофеевич', 'Габышев');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;

-- Дамп структуры для таблица schoolreg.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `login` char(25) NOT NULL,
  `passwd` char(35) NOT NULL,
  `first_name` char(25) NOT NULL,
  `middle_name` char(25) NOT NULL,
  `last_name` char(25) NOT NULL,
  `access` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы schoolreg.users: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `login`, `passwd`, `first_name`, `middle_name`, `last_name`, `access`) VALUES
	(1, 'antimus', 'c4ca4238a0b923820dcc509a6f75849b', 'Антон', 'Габышев', 'Тимофеевич', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
