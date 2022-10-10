CREATE DATABASE madway;
ALTER DATABASE madway CHARACTER SET='utf8' COLLATE='utf8_bin';
CREATE TABLE user (name VARCHAR(30) NOT NULL, surname VARCHAR(20) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(20) NOT NULL, PRIMARY KEY (email));

CREATE TABLE place (id_place int NOT NULL AUTO_INCREMENT, description_place VARCHAR(200) NOT NULL, tag VARCHAR(100) NOT NULL, time_place VARCHAR(50) NOT NULL, icon_category VARCHAR(50) NOT NULL, coordinate POINT NOT NULL, PRIMARY KEY (id_place), FOREIGN KEY (icon_category) REFERENCES icons(icon_category));

CREATE TABLE icon (icon_category VARCHAR(50) NOT NULL, image_icon LONGBLOB NOT NULL, PRIMARY KEY (icon_category));