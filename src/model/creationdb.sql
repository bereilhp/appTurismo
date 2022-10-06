CREATE DATABASE madway;
CREATE TABLE user (name VARCHAR(30) NOT NULL, surname VARCHAR(20) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(20) NOT NULL, PRIMARY KEY (email));
ALTER DATABASE madway CHARACTER SET='utf8' COLLATE='utf8_bin';
INSERT INTO user VALUES ('Patricia', 'Herrera', 'gp.herrera@ceu.es', 'contraseña');s