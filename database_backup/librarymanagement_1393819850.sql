DROP TABLE IF EXISTS admininfo;

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO admininfo VALUES("1","admin@gmail.com","ashraful","ashraful");
INSERT INTO admininfo VALUES("2","admin@gmail.com","a","a");



DROP TABLE IF EXISTS backup_info;

CREATE TABLE `backup_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sql_file_name` varchar(200) NOT NULL,
  `date_taken` double NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO backup_info VALUES("1","librarymanagement_1393789609","1393789609","0");
INSERT INTO backup_info VALUES("2","librarymanagement_1393790325","1393790325","0");
INSERT INTO backup_info VALUES("3","librarymanagement_1393790929","1393790929","0");
INSERT INTO backup_info VALUES("4","librarymanagement_1393791353","1393791353","0");
INSERT INTO backup_info VALUES("5","librarymanagement_1393791414","1393791414","0");
INSERT INTO backup_info VALUES("6","librarymanagement_1393815614","1393815614","0");
INSERT INTO backup_info VALUES("7","librarymanagement_1393817634","1393817634","0");
INSERT INTO backup_info VALUES("8","librarymanagement_1393819507","1393819507","0");
INSERT INTO backup_info VALUES("9","librarymanagement_1393819563","1393819563","0");
INSERT INTO backup_info VALUES("10","librarymanagement_1393819689","1393819689","0");
INSERT INTO backup_info VALUES("11","librarymanagement_1393819777","1393819777","0");
INSERT INTO backup_info VALUES("12","librarymanagement_1393819850","1393819850","0");



DROP TABLE IF EXISTS book_issue;

CREATE TABLE `book_issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `group_id` varchar(250) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `author_name` varchar(250) NOT NULL,
  `issue_date` date NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO book_issue VALUES("26","11","CSE0920293258","Introduction to algorithms","CORMAN LEISERSON RIVEST STEIN","2014-02-27","1");
INSERT INTO book_issue VALUES("23","6","CSE1020","Programming with C","Schaum","2014-02-27","1");
INSERT INTO book_issue VALUES("14","12","CE0920","Compilers","AHO LAM SETHI ULLMAN","2014-02-27","1");
INSERT INTO book_issue VALUES("15","10","CSE1020","Formal language and automata","Peter linz","2014-02-27","1");
INSERT INTO book_issue VALUES("13","7","CSE1020","Database System Concept ","Silberschatz  Korth  Sudarshan","2014-02-27","1");
INSERT INTO book_issue VALUES("10","7","CSE0920293258","Database System Concept ","Silberschatz  Korth  Sudarshan","2014-02-27","1");
INSERT INTO book_issue VALUES("21","4","CSE0920293258","Civil basic ","Ashraful","2014-02-27","1");
INSERT INTO book_issue VALUES("20","7","CE0920","Database System Concept ","Silberschatz  Korth  Sudarshan","2014-02-27","1");
INSERT INTO book_issue VALUES("24","6","CE0920","Programming with C","Schaum","2014-02-27","1");
INSERT INTO book_issue VALUES("25","11","CE0920","Introduction to algorithms","CORMAN LEISERSON RIVEST STEIN","2014-02-27","1");



DROP TABLE IF EXISTS bookself;

CREATE TABLE `bookself` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept` varchar(20) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `author_name` varchar(250) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `active` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO bookself VALUES("4","CE","Civil basic ","Ashraful","86","1");
INSERT INTO bookself VALUES("12","CSE","Compilers","AHO LAM SETHI ULLMAN","40","1");
INSERT INTO bookself VALUES("16","CE","sad","dsad","122","1");
INSERT INTO bookself VALUES("6","CSE","Programming with C","Schaum\'s outline","26","1");
INSERT INTO bookself VALUES("7","CSE","Database System Concept ","Silberschatz  Korth  Sudarshan","17","1");
INSERT INTO bookself VALUES("17","CE","sad","dsad","123","1");
INSERT INTO bookself VALUES("15","CE","sdsad","sddsf","20","1");
INSERT INTO bookself VALUES("10","CSE","Formal language and automata","Peter linz","39","1");
INSERT INTO bookself VALUES("11","CSE","Introduction to algorithms","CORMAN LEISERSON RIVEST STEIN","48","1");
INSERT INTO bookself VALUES("13","CSE","Numerical methods for engineers","Steven C. chapra  Raymond P. canale","56","1");
INSERT INTO bookself VALUES("14","CSE","sdsad","sdsa","0","1");
INSERT INTO bookself VALUES("18","CSE","fgdfg","dfgdfg","dfgdfg","1");
INSERT INTO bookself VALUES("19","EEE","asdsdfs","sdf","dsfsdf","1");
INSERT INTO bookself VALUES("20","CE","sdsad","sdfsdf","fdfsd","1");
INSERT INTO bookself VALUES("21","ME","dsfdsf","dsfsdfds","fs","1");
INSERT INTO bookself VALUES("22","CSE","sdfsd","hj","kjhk","1");
INSERT INTO bookself VALUES("23","CSE","kl","dg","13","1");
INSERT INTO bookself VALUES("24","ME","jhkh","hjk","13","1");
INSERT INTO bookself VALUES("25","EEE","yhjkh","kjhkhkj","jhk","1");
INSERT INTO bookself VALUES("26","CSE","hjjkhjk","hjkhjk","hkjhjk","1");
INSERT INTO bookself VALUES("27","EEE","hjkhjk","hjkhkhjkhjkhjk",".0241","1");



DROP TABLE IF EXISTS departments;

CREATE TABLE `departments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO departments VALUES("1","CSE");
INSERT INTO departments VALUES("2","EEE");
INSERT INTO departments VALUES("3","CE");
INSERT INTO departments VALUES("4","ME");



DROP TABLE IF EXISTS studentinfo;

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` varchar(100) NOT NULL,
  `name1` varchar(200) NOT NULL,
  `regno1` varchar(50) NOT NULL,
  `name2` varchar(200) NOT NULL,
  `regno2` varchar(50) NOT NULL,
  `name3` varchar(200) NOT NULL,
  `regno3` varchar(50) NOT NULL,
  `name4` varchar(200) NOT NULL,
  `regno4` varchar(50) NOT NULL,
  `session` varchar(30) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `active` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO studentinfo VALUES("1","CSE0920293258","Md. Ashraful alam","2009331520","Mizanur rahman","2009331529","Supan ahmed","2009331532","Mubassher ali","2009331558","2009-2010","CSE","ashraful.sec01@gmail.com","01673712003","1");
INSERT INTO studentinfo VALUES("14","CSE1020","Md. Ashraful alam","2009331520","","","","","","","2010-2011","CSE","ashraful.sec01@gmail.com","01673712003","1");
INSERT INTO studentinfo VALUES("15","CE0920","Md. Ashraful alam","2009331520","","","","","","","2009-2010","CE","ashraful.sec01@gmail.com","01673712003","1");



