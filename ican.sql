-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `quiz`;
CREATE TABLE `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_type_id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer1` varchar(300) NOT NULL,
  `answer2` varchar(300) NOT NULL,
  `answer3` varchar(300) NOT NULL,
  `answer4` varchar(300) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `quiz_types`;
CREATE TABLE `quiz_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_name` varchar(50) NOT NULL,
  `quiz_type` int(11) NOT NULL,
  `quiz_level` int(11) NOT NULL,
  `no_of_questions` int(11) NOT NULL,
  `quiz_image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `student_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `gender` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `student` (`student_id`, `username`, `email_id`, `password`, `DOB`, `gender`, `image`, `phone`) VALUES
(1,	'ritu',	'rits.raghani@gmail.com',	'ritu1993',	'1993-07-06',	1,	'',	'9167731358'),
(2,	'mrunali',	'mrunali.s@gmail.com',	'm123',	'2018-01-31',	1,	'',	'8974563658'),
(3,	'Priya',	'priya@gmail.com',	'priya1993',	'1993-04-23',	1,	'',	'8967458965');

DROP TABLE IF EXISTS `student_quiz`;
CREATE TABLE `student_quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- 2018-01-31 13:33:45
