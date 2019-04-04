CREATE DATABASE defuse;
CREATE user 'defuse'@'localhost' identified by 'Defuse@123';
GRANT ALL ON defuse.* to 'defuse'@'localhost';

CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY AUTO INCREMENT NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `college` varchar(25) NOT NULL,
  `level` int(11) NOT NULL,
  `cleared_time` datetime DEFAULT NULL,
  `status` enum('ACTIVE','SUSPECTED','TERMINATED','') NOT NULL,
  `role` enum('REGULAR','ADMIN','SUPERADMIN','') NOT NULL,
  `regd_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `trials` (
  `id` int(11) PRIMARY KEY AUTO INCREMENT NOT NULL,
  `user_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `input` text NOT NULL,
  `time` datetime DEFAULT NULL,
  `malicious` tinyint(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `qa` (
  `id` int(11) PRIMARY KEY AUTO INCREMENT NOT NULL,
  `title` text NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `level` int(11) NOT NULL,
  `active` tinyint(11) NOT NULL,
  `author` int(11),
  `editor` int(11),
  `added_on` datetime NOT NULL,
  `last_edit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
