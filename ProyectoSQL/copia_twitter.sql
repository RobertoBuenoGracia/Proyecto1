CREATE DATABASE copia_twitter;
CREATE TABLE user (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_names varchar(20) NOT NULL,
    email varchar(320) NULL,
    passwords char(40) NOT NULL,
    'name' varchar(50) NULL,
    surname varchar(75) NULL,
    DNI varchar(9) NULL
);

CREATE TABLE messages (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    msg varchar(250) NOT NULL,
    user_id int,
    FOREIGN KEY (user_id) REFERENCES user(id)
);