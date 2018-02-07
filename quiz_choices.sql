-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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
(9,	3,	'&lt;heading&gt;',	'0'),
(10,	3,	'&lt;h1&gt;',	'1'),
(11,	3,	'&lt;h6&gt;',	'0'),
(12,	3,	'&lt;head&gt;',	'0'),
(13,	4,	'&lt;lb&gt;',	'0'),
(14,	4,	'&lt;br&gt;',	'1'),
(15,	4,	'&lt;break&gt;',	'0'),
(16,	4,	'&lt;bl&gt;',	'0'),
(17,	5,	'&lt;body bg=\"yellow\"&gt;',	'0'),
(18,	5,	'&lt;background&gt;  Yellow &lt;/background&gt;',	'0'),
(19,	5,	'&lt;body style=\"background-color:yellow;\"&gt;',	'1'),
(20,	5,	'&lt;body bg-color=\"yellow\"&gt;',	'0'),
(21,	6,	'&lt;important&gt;',	'0'),
(22,	6,	'&lt;b&gt;',	'0'),
(23,	6,	'&lt;strong&gt;',	'1'),
(24,	6,	'&lt;li&gt;',	'0'),
(25,	7,	'&lt;em&gt;',	'0'),
(26,	7,	'&lt;i&gt;',	'1'),
(27,	7,	'&lt;italic&gt;',	'0'),
(28,	7,	'&lt;it&gt;',	'0'),
(29,	8,	'&lt;a href=\"www.google.com\"&gt; google &lt;/a&gt;',	'1'),
(30,	8,	'&lt;a name=\"www.google.com\"&gt; google &lt;/a&gt;',	'0'),
(31,	8,	'&lt;a URL=\"www.google.com\"&gt; google &lt;/a&gt;',	'0'),
(32,	8,	'&lt;a&gt; www.google.com &lt;/a&gt;',	'0'),
(33,	9,	'&lt;',	'0'),
(34,	9,	'*',	'0'),
(35,	9,	'?',	'0'),
(36,	9,	'/',	'1'),
(37,	10,	'&lt;a href=\"url\" target=\"new\"&gt;',	'0'),
(38,	10,	'&lt;a href=\"url\" target=\"_blank\"&gt;',	'1'),
(39,	10,	'&lt;a href=\"url\"&gt;',	'0'),
(40,	10,	'&lt;a href=\"url\" new&gt;',	'0');

-- 2018-02-07 17:21:14
