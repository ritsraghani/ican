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


DROP TABLE IF EXISTS `quiz_choices`;
CREATE TABLE `quiz_choices` (
  `id` int(11) NOT NULL,
  `quiz_question_id` int(11) NOT NULL,
  `choice` int(11) NOT NULL,
  `is_right_choice` enum('(''1'',''0'')') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `quiz_questions`;
CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_type_id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
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

INSERT INTO `quiz_types` (`id`, `quiz_name`, `quiz_type`, `quiz_level`, `no_of_questions`, `quiz_image`) VALUES
(1,	'Android',	1,	1,	10,	'androidlogo.png'),
(2,	'Java',	1,	1,	10,	'javalogo.png'),
(4,	'SQL Database',	1,	1,	10,	'datbaselogo.png'),
(6,	'Web Tech',	1,	1,	10,	'weblogo.png'),
(8,	'Web Tech',	1,	1,	10,	'weblogo.png'),
(9,	'SQL Database',	1,	1,	10,	'datbaselogo.png'),
(10,	'Java',	1,	1,	10,	'javalogo.png'),
(11,	'Android',	1,	1,	10,	'androidlogo.png'),
(12,	'Java',	3,	1,	15,	'javalogo.png'),
(16,	'Git Hub',	6,	2,	10,	'github-512.png'),
(15,	'Python',	3,	2,	12,	'python.png'),
(17,	'General',	0,	1,	10,	'images.png');

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `student_id` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `gender` int(11) NOT NULL,
  `image` longtext NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `username`, `email_id`, `password`, `DOB`, `gender`, `image`, `phone`) VALUES
(1,	'Khalid',	'Ali',	'ka123',	'ka@gmail.com',	'ka123',	'1988-05-20',	0,	'khalid.jpg',	'4578963215'),
(2,	'yrtyret',	'ertert',	'ertetr',	'ertte',	'ertetr',	'1987-06-05',	0,	'0339616.jpg',	'ertert'),
(3,	'ffff',	'ff',	'dsf',	'aaaaaaa',	'aaaaaaaa',	'1998-02-03',	1,	'BRO_ResponsiveDesign_Main2.png',	'54654654654'),
(4,	'ffff',	'ff',	'dsf',	'aaaaaaa',	'aaaaaaaa',	'1998-02-03',	1,	'BRO_ResponsiveDesign_Main2.png',	'54654654654'),
(5,	'aa',	'aa',	'aa',	'aa@gmail.com',	'aa',	'1993-07-06',	0,	'chat.png',	'458963217'),
(6,	'aa',	'aa',	'aa',	'aa@gmail.com',	'aa',	'1993-07-06',	0,	'chat.png',	'458963217'),
(7,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(8,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(9,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(10,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(11,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(12,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(13,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(14,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(15,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(16,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(17,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(18,	'Ritu',	'Raghani',	'rits.raghani',	'rits.raghani@gmail.com',	'ritu123',	'1993-07-06',	1,	'10511184_686912181381712_2511078281845367562_n.jpg',	'9167731358'),
(19,	'muzammil',	'shaikh',	'ms',	'ms@gmail.com',	'ms123',	'1993-04-23',	0,	'operator.png',	'91677'),
(20,	'Saloni',	'Jain',	'saloni',	'saloni@gmail.com',	's123',	'1993-07-06',	1,	'DSC06443.JPG',	'9087654321');

DROP TABLE IF EXISTS `student_quiz`;
CREATE TABLE `student_quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `quiz_type_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `choice_id` int(11) NOT NULL,
  `is_right` enum('(''1'',''0'')') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- 2018-02-04 19:27:50
