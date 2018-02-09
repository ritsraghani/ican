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
  `choice_id` int(11) NOT NULL,
  `choice` varchar(200) NOT NULL,
  `is_right_choice` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quiz_question_id` (`quiz_question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `quiz_choices` (`id`, `quiz_question_id`, `choice_id`, `choice`, `is_right_choice`) VALUES
(1,	1,	1,	'Hyperlinks and Text Markup Language',	'0'),
(2,	1,	2,	'Hyper Text Markup Language',	'1'),
(3,	1,	3,	'Hyper Tool Markup Language',	'0'),
(4,	1,	4,	'Home Tool Markup Language',	'0'),
(5,	2,	1,	'Mozilla',	'0'),
(6,	2,	2,	'Microsoft',	'0'),
(7,	2,	3,	'World Wide Web',	'1'),
(8,	2,	4,	'Google',	'0'),
(9,	3,	1,	'&lt;heading&gt;',	'0'),
(10,	3,	2,	'&lt;h1&gt;',	'1'),
(11,	3,	3,	'&lt;h6&gt;',	'0'),
(12,	3,	4,	'&lt;head&gt;',	'0'),
(13,	4,	1,	'&lt;lb&gt;',	'0'),
(14,	4,	2,	'&lt;br&gt;',	'1'),
(15,	4,	3,	'&lt;break&gt;',	'0'),
(16,	4,	4,	'&lt;bl&gt;',	'0'),
(17,	5,	1,	'&lt;body bg=\"yellow\"&gt;',	'0'),
(18,	5,	2,	'&lt;background&gt;  Yellow &lt;/background&gt;',	'0'),
(19,	5,	3,	'&lt;body style=\"background-color:yellow;\"&gt;',	'1'),
(20,	5,	4,	'&lt;body bg-color=\"yellow\"&gt;',	'0'),
(21,	6,	1,	'&lt;important&gt;',	'0'),
(22,	6,	2,	'&lt;b&gt;',	'0'),
(23,	6,	3,	'&lt;strong&gt;',	'1'),
(24,	6,	4,	'&lt;li&gt;',	'0'),
(25,	7,	1,	'&lt;em&gt;',	'0'),
(26,	7,	2,	'&lt;i&gt;',	'1'),
(27,	7,	3,	'&lt;italic&gt;',	'0'),
(28,	7,	4,	'&lt;it&gt;',	'0'),
(29,	8,	1,	'&lt;a href=\"www.google.com\"&gt; google &lt;/a&gt;',	'1'),
(30,	8,	2,	'&lt;a name=\"www.google.com\"&gt; google &lt;/a&gt;',	'0'),
(31,	8,	3,	'&lt;a URL=\"www.google.com\"&gt; google &lt;/a&gt;',	'0'),
(32,	8,	4,	'&lt;a&gt; www.google.com &lt;/a&gt;',	'0'),
(33,	9,	1,	'&lt;',	'0'),
(34,	9,	2,	'*',	'0'),
(35,	9,	3,	'?',	'0'),
(36,	9,	4,	'/',	'1'),
(37,	10,	1,	'&lt;a href=\"url\" target=\"new\"&gt;',	'0'),
(38,	10,	2,	'&lt;a href=\"url\" target=\"_blank\"&gt;',	'1'),
(39,	10,	3,	'&lt;a href=\"url\"&gt;',	'0'),
(40,	10,	4,	'&lt;a href=\"url\" new&gt;',	'0'),
(41,	13,	1,	'It is a kind of an intent',	'0'),
(42,	13,	2,	'It is used to pass the data between activities',	'0'),
(43,	13,	3,	'It will fire at a future point of time',	'1'),
(44,	13,	4,	'None of the Above',	'0'),
(45,	14,	1,	'Services always work in Foreground only',	'0'),
(46,	14,	2,	'No,We can\'t do this query',	'0'),
(47,	14,	3,	'Using startService(Intent intent)',	'0'),
(48,	14,	4,	'startFordgroud(int id, Notification notification).',	'1'),
(49,	15,	1,	'finish()',	'0'),
(50,	15,	2,	'system.exit().',	'0'),
(51,	15,	3,	'By manually',	'0'),
(52,	15,	4,	'stopSelf() and stopService()',	'1'),
(53,	16,	1,	'sendIntent()',	'0'),
(54,	16,	2,	'onRecieve()',	'0'),
(55,	16,	3,	'implicitBroadcast()',	'0'),
(56,	16,	4,	'sendBroadcast(),sendOrderBroadcast(),and sendStickyBroadcast().',	'1'),
(57,	17,	1,	'Using with GPRS',	'0'),
(58,	17,	2,	'Using location provider',	'0'),
(59,	17,	3,	'A & B',	'1'),
(60,	17,	4,	'SQLite',	'0'),
(61,	18,	1,	'Image tool',	'0'),
(62,	18,	2,	'Development tool',	'0'),
(63,	18,	3,	'Android Debug Bridge',	'1'),
(64,	18,	4,	'None of the Above',	'0'),
(65,	19,	1,	'Connection management',	'0'),
(66,	19,	2,	'Cookies management',	'0'),
(67,	19,	3,	'Authentication management',	'0'),
(68,	19,	4,	'All of the above',	'1'),
(69,	20,	1,	'count',	'0'),
(70,	20,	2,	'sum',	'0'),
(71,	20,	3,	'add',	'0'),
(72,	20,	4,	'length',	'1'),
(73,	21,	1,	'App level security and kernel level security',	'1'),
(74,	21,	2,	'Android level security',	'0'),
(75,	21,	3,	'Java level security',	'0'),
(76,	21,	4,	'None of the Above',	'0'),
(77,	22,	1,	'onCreate()  - onStart() - onResume() - onStop() - onRestart',	'0'),
(78,	22,	2,	'onCreate() - onStart() - onResume() - onStop()',	'0'),
(79,	22,	3,	'onCreate() - onStart() - onResume()',	'1'),
(80,	22,	4,	'None of the Above',	'0');

DROP TABLE IF EXISTS `quiz_questions`;
CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_type_id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quiz_type_id` (`quiz_type_id`)
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
(10,	25,	'How can you open a link in a new tab/browser window?'),
(13,	1,	'What is Pending Intent in android?'),
(14,	1,	'How to move services to foreground in android?'),
(15,	1,	'How to stop the services in android?'),
(16,	1,	'How many broadcast receivers are available in android?'),
(17,	1,	'How to get current location in android?'),
(18,	1,	'What is ADB in android?'),
(19,	1,	'What are the functionalities of HTTP Client interface in android?'),
(20,	1,	'How to find the JSON element length in android JSON?'),
(21,	1,	'How many levels of securities are there in android?'),
(22,	1,	'What is the life cycle of foreground activity in android?');

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


-- 2018-02-09 08:57:14
