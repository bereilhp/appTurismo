CREATE DATABASE madway;

ALTER DATABASE madway CHARACTER SET='utf8' COLLATE='utf8_bin';

CREATE TABLE user (name VARCHAR(30) NOT NULL, surname VARCHAR(20) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(20) NOT NULL, PRIMARY KEY (email));

CREATE TABLE place (id_place int NOT NULL AUTO_INCREMENT, description_place VARCHAR(200) NOT NULL, tag VARCHAR(100) NOT NULL, time_place VARCHAR(50) NOT NULL, icon_category VARCHAR(50) NOT NULL, coordinate POINT NOT NULL, PRIMARY KEY (id_place), FOREIGN KEY (icon_category) REFERENCES icon(icon_category));

CREATE TABLE icon (icon_category VARCHAR(50) NOT NULL, image_icon LONGBLOB NOT NULL, PRIMARY KEY (icon_category));

CREATE TABLE userPlace (email VARCHAR(50) NOT NULL, id_place int NOT NULL AUTO_INCREMENT, PRIMARY KEY (email), PRIMARY KEY (id_place), FOREIGN KEY (email) REFERENCES user, FOREIGN KEY (id_place) REFERENCES place(id_place));

CREATE TABLE tag (id_tag int NOT NULL AUTO_INCREMENT, name VARCHAR(40) NOT NULL, description_tag VARCHAR(100) NOT NULL);

CREATE TABLE placeTag (id_place int NOT NULL AUTO_INCREMENT, id_tag int NOT NULL AUTO_INCREMENT, PRIMARY KEY (id_place), PRIMARY KEY (id_tag), FOREIGN KEY (id_place) REFERENCES place(id_place), FOREIGN KEY (id_tag) REFERENCES tag(id_tag));