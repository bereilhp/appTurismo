CREATE DATABASE madway CHARACTER SET='utf8' COLLATE='utf8_bin';

USE madway;

CREATE TABLE user (id_user INT NOT NULL AUTO_INCREMENT, name VARCHAR(30) NOT NULL, surname VARCHAR(20) NOT NULL, email VARCHAR(50) NOT NULL UNIQUE, password VARCHAR(20) NOT NULL, PRIMARY KEY (id_user));

CREATE TABLE icon (id_icon INT NOT NULL AUTO_INCREMENT, icon_category VARCHAR(50) NOT NULL UNIQUE, image_icon VARCHAR(200) NOT NULL, PRIMARY KEY (id_icon));

CREATE TABLE place (id_place INT NOT NULL AUTO_INCREMENT, name_place VARCHAR(200) NOT NULL UNIQUE, description_place VARCHAR(2000) NOT NULL, schedule VARCHAR(50) NOT NULL, link_place VARCHAR(200) NOT NULL, id_icon INT NOT NULL, latitude decimal(7,5) NOT NULL, longitude decimal(7,5) NOT NULL, PRIMARY KEY (id_place), FOREIGN KEY (id_icon) REFERENCES icon(id_icon));

CREATE TABLE userPlace (id_user INT NOT NULL, id_place INT NOT NULL, PRIMARY KEY (id_user, id_place), FOREIGN KEY (id_user) REFERENCES user(id_user), FOREIGN KEY (id_place) REFERENCES place(id_place));

CREATE TABLE tag (id_tag INT NOT NULL AUTO_INCREMENT, name VARCHAR(40) NOT NULL UNIQUE, description_tag VARCHAR(1000) NOT NULL UNIQUE, PRIMARY KEY (id_tag));

CREATE TABLE placeTag (id_place INT NOT NULL, id_tag INT NOT NULL, PRIMARY KEY (id_tag, id_place), FOREIGN KEY (id_place) REFERENCES place(id_place), FOREIGN KEY (id_tag) REFERENCES tag(id_tag));

/* Latitud y longitud de los lugares, conjuntamente, deberían ser únicos
Las imágenes de los iconos también*/
