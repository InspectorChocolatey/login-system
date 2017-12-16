drop DATABASE if exists;

CREATE DATABASE logindb;

CREATE TABLE user (
	id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	first varchar(128) not null,
	last varchar(128) not null,
	uid varchar(128) not null,
	pwd varchar(1000) not null
);
