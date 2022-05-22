drop schema IF EXISTS companymanager;
create schema companymanager;
use companymanager;

CREATE TABLE customer (
	customerID int not null auto_increment,
	companyID int null,
    firstName varchar(25) not null,
    lastName varchar(25) not null,
    country varchar(25) not null,
    streetName varchar(25) not null,
    streetNumber varchar(5) not null,
    email varchar(50) not null,
    password varchar(50) not null,
    constraint PK_customer primary key (customerID)
);
INSERT INTO customer (firstName, lastName, country, streetName, streetNumber, email, password, companyID) 
VALUES
("Thomas","Malecki","Belgium","Bremstraat", "18","thomas","admin",1),
("Bert","Sandt","Belgium","Bremstraat", "18","bert","admin",1),
("Gert","Deckers","Belgium","Bremstraat", "18","gert","admin",1),
("Rob","Bastijns","Belgium","Bremstraat", "18","rob@rob.be","admin",2);

CREATE TABLE company (
	companyID int not null auto_increment,
	customerID varchar(25) not null,
    companyName varchar(25) not null,
	constraint PK_company primary key (companyID)
);
INSERT INTO company (customerID, companyname) 
VALUES
(1,"Bedrijfs Naam"),
(4,"Bedrijfs Naam2");

CREATE TABLE company_employees (
	companyID int not null,
	customerID int not null,
    login varchar(30) not null,
    position varchar(30) not null
);
INSERT INTO company_employees (companyID, customerID, login, position) 
VALUES
(1,1, current_timestamp(),"CEO"),
(1,2, current_timestamp(), "Manager"),
(1,3, current_timestamp(), "Employee"),
(2,4, current_timestamp(), "CEO");

CREATE TABLE clients (
	clientID int not null auto_increment,
	companyID int not null,
	firstName varchar(25) not null,
    lastName varchar(25) not null,
    country varchar(25) not null,
    streetName varchar(25) not null,
    streetNumber varchar(5) not null,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    active tinyint not null,
    email varchar(50) not null,
    description varchar(255) null,
	constraint PK_client primary key (clientID)
);
INSERT INTO clients (firstName, lastName, country, streetName, streetNumber, email, description,active,companyID) 
VALUES
("Frieda","Vanderbeek","Belgium","Bremstraat", "18","thomas.malecki@hotmail.be","Deze persoon is de eigenaar van....",1,1),
("Tom","Bulen","Belgium","ratstraat", "18","nick.bulen@hotmail.be","Deze persoon is de eigenaar van....",0,1);

CREATE TABLE activity (
	activityID int not null auto_increment,
	customerID int not null,
    companyID int not null,
    message varchar(255) not null,
	date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	constraint PK_activity primary key (activityID)
);
INSERT INTO activity (customerID, companyID, message) 
VALUES
(1,1,"heeft een nieuwe klant toegevoegd.");
CREATE TABLE messages (
	messageID int not null auto_increment,
    FromcustomerID int not null,
	TocustomerID int not null,
    message varchar(255) not null,
	constraint PK_message primary key (messageID)
);
