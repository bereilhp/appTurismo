CREATE DATABASE madwayTest;

ALTER DATABASE madwayTest CHARACTER SET='utf8' COLLATE='utf8_bin';

CREATE TABLE user (name VARCHAR(30) NOT NULL, surname VARCHAR(20) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(20) NOT NULL, PRIMARY KEY (email));

CREATE TABLE icon (id_icon INT NOT NULL AUTO_INCREMENT, icon_category VARCHAR(50) NOT NULL, image_icon BLOB, PRIMARY KEY (id_icon));

CREATE TABLE tag (id_tag INT NOT NULL AUTO_INCREMENT, name VARCHAR(40) NOT NULL, description_tag VARCHAR(1000) NOT NULL, PRIMARY KEY (id_tag));

CREATE TABLE place (id_place INT NOT NULL AUTO_INCREMENT, description_place VARCHAR(200) NOT NULL, schedule VARCHAR(50) NOT NULL, id_icon INT NOT NULL, latitude decimal(7,5) NOT NULL, longitude decimal(7,5) NOT NULL, PRIMARY KEY (id_place), FOREIGN KEY (id_icon) REFERENCES icon(id_icon));

CREATE TABLE placeTag (id_place INT NOT NULL, id_tag int NOT NULL, PRIMARY KEY (id_tag, id_place), FOREIGN KEY (id_place) REFERENCES place(id_place), FOREIGN KEY (id_tag) REFERENCES tag(id_tag));

CREATE TABLE userPlace (email VARCHAR(50) NOT NULL, id_place INT NOT NULL, PRIMARY KEY (email, id_place), FOREIGN KEY (email) REFERENCES user(email), FOREIGN KEY (id_place) REFERENCES place(id_place));

/*Para realizar los Test de la tabla Place dependemos de la tabla Icon para que los Test funcionen correctamente*/
INSERT INTO icon (icon_category, image_icon)
VALUES
    ("IconoMonumento", LOAD_FILE('./Images/IconoMonumento.png')),
    ("IconoVerde",LOAD_FILE('./Images/IconoVerde.png')),
    ("IconoDeportes",LOAD_FILE('./Images/IconoDeportes.png')),
    ("IconoParqueAtracciones",LOAD_FILE('./Images/IconoParqueAtracciones.png')),
    ("IconoWifi",LOAD_FILE('./Images/IconoWifi.png')),
    ("IconoMusica",LOAD_FILE('./Images/IconoMusica.png')),
    ("IconoBar",LOAD_FILE('./Images/IconoBar.png')),
    ("IconoComida",LOAD_FILE('./Images/IconoComida.png')),
    ("IconoFarmacias",LOAD_FILE('./Images/IconoFarmacia.png')),
    ("IconoBancos",LOAD_FILE('./Images/IconoBanco.png')),
    ("IconoCine",LOAD_FILE('./Images/IconoCine.png')),
    ("IconoEmpresa",LOAD_FILE('./Images/IconoEmpresa.png')),
    ("IconoIglesia",LOAD_FILE('./Images/IconoIglesia.png')),
    ("IconoSuper",LOAD_FILE('./Images/IconoSuper.png'));
