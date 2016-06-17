create table userinfo
(
	userid int unsigned NOT NULL auto_increment primary key,
	username varchar(20) NOT NULL ,
	gender set('male','female','secret') not null ,
	birthdate DATE NOT NULL  default '1949-01-01',
	pwd varchar(20) not null,
	question varchar(30) not null ,
	answer varchar(30) not null,
	email varchar(50) not null ,
	photopath varchar(50) ,
	intro varchar(300) ,
	role enum('0','1') not null default '0' ,
	regtime datetime not null
)
;
