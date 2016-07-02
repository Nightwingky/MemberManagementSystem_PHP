create table userinfo
(
	userid varchar(40) NOT NULL primary key,
	username varchar(20) NOT NULL ,
	gender set('male','female','secret') not null default 'secret',
	birthdate DATE NOT NULL default '1949-01-01',
	pwd varchar(20) not null,
	question varchar(30) ,
	answer varchar(30) ,
	email varchar(50) ,
	photopath varchar(50) ,
	intro varchar(300) ,
	role enum('0','1') not null default '0' ,
	regtime timestamp not null DEFAULT CURRENT_TIMESTAMP() 
)
;
