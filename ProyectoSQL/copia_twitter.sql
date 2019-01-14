CREATE DATABASE copia_twitter;
CREATE TABLE information (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user varchar(35) NOT NULL,
    msg varchar(250) NOT NULL
);