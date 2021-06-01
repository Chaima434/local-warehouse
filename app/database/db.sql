CREATE TABLE Category
(
    id int PRIMARY Key AUTO_INCREMENT,
    label varchar(50),
    description text
);

CREATE TABLE Admin
(
    login varchar(80) PRIMARY key,
    first_name varchar(50),
    last_name varchar(80),
    email varchar(35) UNIQUE,
    address varchar(105),
    password text
);

CREATE TABLE Provider
(
    id int PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(50),
    last_name varchar(80),
    email varchar(35) UNIQUE,
    address varchar(105),
    telephone varchar(11)
);

CREATE TABLE Product
(
    id int PRIMARY KEY AUTO_INCREMENT,
    label varchar(35),
    number int,
    price double,
    description text,
    photo BINARY,
    idCat int,
    login varchar(80),
    idProvider int,
    FOREIGN KEY (idCat) 
        REFERENCES Category(id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (login) 
        REFERENCES Admin(login)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (idProvider) 
        REFERENCES Provider(id)
        ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Client
(
    login varchar(80) PRIMARY key,
    first_name varchar(50),
    last_name varchar(80),
    email varchar(35) UNIQUE,
    address varchar(105),
    password text
);

ALTER TABLE Product
MODIFY photo text;

ALTER TABLE Product
MODIFY photo longtext;

Create table Contact
(
	id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(50),
    email varchar(70),
    message text,
    date_message date
);