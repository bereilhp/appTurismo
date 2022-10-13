CREATE DATABASE madwayTest;

ALTER DATABASE madwayTest CHARACTER SET='utf8' COLLATE='utf8_bin';

CREATE TABLE user (name VARCHAR(30) NOT NULL, surname VARCHAR(20) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(20) NOT NULL, PRIMARY KEY (email));

CREATE TABLE icon (id_icon INT NOT NULL AUTO_INCREMENT, icon_category VARCHAR(50) NOT NULL, image_icon BLOB, PRIMARY KEY (id_icon));

CREATE TABLE place (id_place INT NOT NULL AUTO_INCREMENT, description_place VARCHAR(200) NOT NULL, schedule VARCHAR(50) NOT NULL, id_icon INT NOT NULL, coordinate POINT NOT NULL, PRIMARY KEY (id_place), FOREIGN KEY (id_icon) REFERENCES icon(id_icon));

CREATE TABLE userPlace (email VARCHAR(50) NOT NULL, id_place INT NOT NULL, PRIMARY KEY (email, id_place), FOREIGN KEY (email) REFERENCES user(email), FOREIGN KEY (id_place) REFERENCES place(id_place));

CREATE TABLE tag (id_tag INT NOT NULL AUTO_INCREMENT, name VARCHAR(40) NOT NULL, description_tag VARCHAR(1000) NOT NULL, PRIMARY KEY (id_tag));

CREATE TABLE placeTag (id_place INT NOT NULL, id_tag int NOT NULL, PRIMARY KEY (id_tag, id_place), FOREIGN KEY (id_place) REFERENCES place(id_place), FOREIGN KEY (id_tag) REFERENCES tag(id_tag));