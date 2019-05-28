Create database escola;
use escola;

CREATE USER 'lescola'@'localhost' IDENTIFIED BY 'lescola';
GRANT ALL PRIVILEGES ON escola.* TO 'lescola'@'localhost';

create table account (
	accountId int(7) NOT NULL AUTO_INCREMENT,
	accountEmail varchar(20) NOT NULL,
	accountPassword varchar(20) NOT NULL,
	primary key (accountId)
);
