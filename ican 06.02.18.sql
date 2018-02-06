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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `quiz_choices`;
CREATE TABLE `quiz_choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_question_id` int(11) NOT NULL,
  `choice` varchar(200) NOT NULL,
  `is_right_choice` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quiz_question_id` (`quiz_question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `quiz_choices` (`id`, `quiz_question_id`, `choice`, `is_right_choice`) VALUES
(1,	1,	'Hyperlinks and Text Markup Language',	'0'),
(2,	1,	'Hyper Text Markup Language',	'1'),
(3,	1,	'Hyper Tool Markup Language',	'0'),
(4,	1,	'Home Tool Markup Language',	'0'),
(5,	2,	'Mozilla',	'0'),
(6,	2,	'Microsoft',	'0'),
(7,	2,	'World Wide Web',	'1'),
(8,	2,	'Google',	'0'),
(9,	3,	'<heading>',	'0'),
(10,	3,	'<h1>',	'1'),
(11,	3,	'<h6>',	'0'),
(12,	3,	'<head>',	'0'),
(13,	4,	'<lb>',	'0'),
(14,	4,	'<br>',	'1'),
(15,	4,	'<break>',	'0'),
(16,	4,	'<bl>',	'0'),
(17,	5,	'<body bg=\"yellow\">',	'0'),
(18,	5,	'<background>  Yellow </background>',	'0'),
(19,	5,	'<body style=\"background-color:yellow;\">',	'1'),
(20,	5,	'<body bg-color=\"yellow\">',	'0'),
(21,	6,	'<important>',	'0'),
(22,	6,	'<b>',	'0'),
(23,	6,	'<strong>',	'1'),
(24,	6,	'<li>',	'0'),
(25,	7,	'<em>',	'0'),
(26,	7,	'<i>',	'1'),
(27,	7,	'<italic>',	'0'),
(28,	7,	'<it>',	'0'),
(29,	8,	'<a href=\"www.google.com\"> google </a>',	'1'),
(30,	8,	'<a name=\"www.google.com\"> google </a>',	'0'),
(31,	8,	'<a URL=\"www.google.com\"> google </a>',	'0'),
(32,	8,	'<a> www.google.com </a>',	'0'),
(33,	9,	'<',	'0'),
(34,	9,	'*',	'0'),
(35,	9,	'?',	'0'),
(36,	9,	'/',	'1'),
(37,	10,	'<a href=\"url\" target=\"new\">',	'0'),
(38,	10,	'<a href=\"url\" target=\"_blank\">',	'1'),
(39,	10,	'<a href=\"url\">',	'0'),
(40,	10,	'<a href=\"url\" new>',	'0');

DROP TABLE IF EXISTS `quiz_questions`;
CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_type_id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quiz_type_id` (`quiz_type_id`),
  CONSTRAINT `quiz_questions_ibfk_1` FOREIGN KEY (`id`) REFERENCES `quiz_choices` (`quiz_question_id`),
  CONSTRAINT `quiz_questions_ibfk_2` FOREIGN KEY (`quiz_type_id`) REFERENCES `quiz_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `quiz_questions` (`id`, `quiz_type_id`, `question`) VALUES
(1,	25,	'What does HTML stand for?'),
(2,	25,	'Who makes the Web standards?'),
(3,	25,	'Choose the correct HTML element for the largest heading:'),
(4,	25,	'What is the correct HTML element for inserting a line break?'),
(5,	25,	'What is the correct HTML for adding a background color?'),
(6,	25,	'Choose the correct HTML element to define important text'),
(7,	25,	'Choose the correct HTML element to define emphasized text'),
(8,	25,	'What is the correct HTML for creating a hyperlink?'),
(9,	25,	'Which character is used to indicate an end tag?'),
(10,	25,	'How can you open a link in a new tab/browser window?');

DROP TABLE IF EXISTS `quiz_types`;
CREATE TABLE `quiz_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_name` varchar(50) NOT NULL,
  `quiz_type` int(11) NOT NULL,
  `quiz_level` int(11) NOT NULL,
  `no_of_questions` int(11) NOT NULL,
  `quiz_image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `quiz_types` (`id`, `quiz_name`, `quiz_type`, `quiz_level`, `no_of_questions`, `quiz_image`) VALUES
(1,	'Android',	1,	1,	10,	'androidlogo.png'),
(2,	'Java',	1,	1,	10,	'javalogo.png'),
(4,	'SQL Database',	1,	1,	10,	'datbaselogo.png'),
(6,	'Web Tech',	1,	1,	10,	'weblogo.png'),
(15,	'Python',	3,	2,	12,	'python.png'),
(16,	'Git Hub',	6,	2,	10,	'github-512.png'),
(17,	'General',	0,	1,	10,	'images.png'),
(18,	'Windows 10',	6,	1,	5,	'windows-8-icon.png'),
(19,	'IOS app',	5,	0,	10,	'apple-2-icon.png'),
(20,	'Microsoft Excel 2017',	0,	1,	12,	'excel.png'),
(21,	'Bootstrap',	2,	2,	10,	'download.jpg'),
(22,	'General',	0,	2,	5,	'synergy-arch-linux.png'),
(23,	'Linux',	6,	1,	10,	'linux-icon.png'),
(24,	'Microsoft Word 2017',	0,	2,	10,	'word.png'),
(25,	'HTML5',	2,	1,	10,	'html.png'),
(26,	'JS 5',	6,	0,	10,	'js5.png'),
(27,	'Angular 4',	1,	1,	10,	'angular.png');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `username`, `email_id`, `password`, `DOB`, `gender`, `image`, `phone`) VALUES
(1,	'Khalid',	'Ali',	'ka123',	'ka@gmail.com',	'ka123',	'1988-05-20',	0,	'khalid.jpg',	'4578963215'),
(2,	'yrtyret',	'ertert',	'ertetr',	'ertte',	'ertetr',	'1987-06-05',	0,	'0339616.jpg',	'ertert'),
(3,	'ffff',	'ff',	'dsf',	'aaaaaaa',	'aaaaaaaa',	'1998-02-03',	1,	'BRO_ResponsiveDesign_Main2.png',	'54654654654'),
(4,	'ffff',	'ff',	'dsf',	'aaaaaaa',	'aaaaaaaa',	'1998-02-03',	1,	'BRO_ResponsiveDesign_Main2.png',	'54654654654'),
(5,	'aa',	'aa',	'aa',	'aa@gmail.com',	'aa',	'1993-07-06',	0,	'chat.png',	'458963217'),
(6,	'aa',	'aa',	'aa',	'aa@gmail.com',	'aa',	'1993-07-06',	0,	'chat.png',	'458963217'),
(17,	'ww',	'ww',	'ww',	'ww',	'ww',	'1988-05-20',	0,	'004-teamwork-1.png',	'785496321'),
(18,	'Ritu',	'Raghani',	'rits.raghani',	'rits.raghani@gmail.com',	'ritu123',	'1993-07-06',	1,	'10511184_686912181381712_2511078281845367562_n.jpg',	'9167731358'),
(19,	'muzammil',	'shaikh',	'ms',	'ms@gmail.com',	'ms123',	'1993-04-23',	0,	'operator.png',	'91677'),
(20,	'Saloni',	'Jain',	'saloni',	'saloni@gmail.com',	's123',	'1993-07-06',	1,	'DSC06443.JPG',	'9087654321'),
(21,	'Ansh',	'Thadani',	'ansh.d',	'ansh@gmail.com',	'ansh123',	'1999-07-20',	1,	'IMG-20170630-WA0010.jpeg',	'9080706050');

DROP TABLE IF EXISTS `student_quiz`;
CREATE TABLE `student_quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `quiz_type_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `choice_id` int(11) NOT NULL,
  `is_right` enum('(''1'',''0'')') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2018-02-06 03:39:15
