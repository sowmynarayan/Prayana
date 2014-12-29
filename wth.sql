-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2010 at 02:24 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6-1+lenny2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `wth`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `qid` int(3) default NULL,
  `answer` varchar(25) default NULL,
  `near` varchar(30) NOT NULL COMMENT 'nearest answer',
  `desc` varchar(200) NOT NULL COMMENT 'description'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `answer`, `near`, `desc`) VALUES
(1, 'notprayana', 'prayana', 'We told you it is not Prayana!'),
(2, 'upisdown', 'antarctica', 'Why?'),
(3, 'elevation', 'placeholder', 'placeholder'),
(4, 'partsofspeech', 'martinlutherking', 'Not the whole thing!'),
(5, 'nagini', 'snake', 'Give us the proper noun.'),
(6, 'edisonbulb', 'edison', 'And?'),
(8, 'wordpress', 'volkswagen', 'Ha ha ha!Never that easy!'),
(9, 'onthemove', 'oscarmike', 'What do you mean?'),
(11, 'stephenking', 'theshining', 'We need a more novel answer!'),
(12, 'thesandsoftime', 'thetwothrones', 'Start from the beginning'),
(14, 'exor', 'logicgate', 'Think deeper ^_^'),
(15, 'norelation', 'placeholder', 'placeholder'),
(29, 'liberabaci', 'fibonacci', 'Name the math bible (We are not talking about BS Grewal here)'),
(19, 'mariecurie', 'yes', 'Genius!!'),
(16, 'manchesterunited', 'newton', 'Not the scientist!'),
(17, 'vjd', 'duckworthlewis', 'Try again!'),
(18, 'slice', 'placeholder', 'placeholder'),
(21, 'wireless', 'internet', 'Ha, nice :) But you need to go by our protocol.'),
(22, 'habell', 'ahbell', 'You almost got it. Shuffle it!!'),
(24, 'rosetta', 'napoleonbonaparte', 'Yeah.. He is a great French Conqueror..!'),
(34, 'gryllusbimaculatus', 'gryllusassimilis', 'So near yet So far....'),
(25, 'michaelchall', 'dexter', 'The man behind the mask '),
(32, '77', '16', 'Then why the retinal perspective..!'),
(27, 'starsandstripes', 'cake', 'how can i differentiate you from others...?'),
(28, 'googleplex', 'googol', 'Do not ever come here..!!'),
(23, 'tbone', 'razor', 'The bike mate ;)'),
(31, 'janeausten', 'becomingjane', 'That is a good movie. But I expect someone..!!!'),
(30, 'johnfroelich', 'gasoline', 'You have miles to cross..!!'),
(33, 'mario', 'scamper', 'Who let the dogs out..!! Woof Woof!'),
(26, 'kingsofcards', 'cards', 'Very close. Wanna Deal????'),
(20, 'reservoirdogs', 'quentintarantino', 'What color was he again?'),
(35, 'vercingetorix', 'pascal', 'Are you just looking me..?'),
(36, 'altavista', 'google', 'Seems you didn''t listen to us..');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `college` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `count` int(5) NOT NULL,
  `start_date` varchar(30) NOT NULL default '0',
  `finish_date` varchar(30) NOT NULL default '0',
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `college`, `contact`, `count`, `start_date`, `finish_date`) VALUES
('admin', '****', 'TCE', 0, 2, 'February 5, 2010, 2:13 am', 'February 5, 2010, 2:13 am'),
('test', '****', 'sdf', 0, 14, 'February 5, 2010, 12:44 am', 'February 5, 2010, 1:00 am');

