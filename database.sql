CREATE DATABASE `ajaxpweb`;

CREATE TABLE  `ajaxpweb`.`user` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(200) NOT NULL default '',
  `email` varchar(200) NOT NULL default '' unique,
  `password` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;