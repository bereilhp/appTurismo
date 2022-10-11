CREATE DATABASE madway;

ALTER DATABASE madway CHARACTER SET='utf8' COLLATE='utf8_bin';

CREATE TABLE user (name VARCHAR(30) NOT NULL, surname VARCHAR(20) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(20) NOT NULL, PRIMARY KEY (email));

CREATE TABLE place (id_place int NOT NULL AUTO_INCREMENT, description_place VARCHAR(200) NOT NULL, tag VARCHAR(100) NOT NULL, time_place VARCHAR(50) NOT NULL, icon_category VARCHAR(50) NOT NULL, coordinate POINT NOT NULL, PRIMARY KEY (id_place), FOREIGN KEY (icon_category) REFERENCES icon(icon_category));

CREATE TABLE icon (icon_category VARCHAR(50) NOT NULL, image_icon LONGBLOB NOT NULL, PRIMARY KEY (icon_category));

CREATE TABLE userPlace (email VARCHAR(50) NOT NULL, id_place int NOT NULL AUTO_INCREMENT, PRIMARY KEY (email), PRIMARY KEY (id_place), FOREIGN KEY (email) REFERENCES user, FOREIGN KEY (id_place) REFERENCES place(id_place));

CREATE TABLE tag (id_tag int NOT NULL AUTO_INCREMENT, name VARCHAR(40) NOT NULL, description_tag VARCHAR(100) NOT NULL);

CREATE TABLE placeTag (id_place int NOT NULL AUTO_INCREMENT, id_tag int NOT NULL AUTO_INCREMENT, PRIMARY KEY (id_place), PRIMARY KEY (id_tag), FOREIGN KEY (id_place) REFERENCES place(id_place), FOREIGN KEY (id_tag) REFERENCES tag(id_tag));


INSERT INTO place (description_place, tag, time_place, icon_category, coordinate)
VALUES 
    ("Museo del prado", "Museo", "10:00 - 19:00", "IconoMonumento", geomfromtext('point(40.41395, -3.69215))')),
    ("Museo Thyssen", "Museo", "10:00 - 19:00", "IconoMonumento", geomfromtext('point(40.41618, -3.69490))')),
    ("Caixa Forum", "Museo", "10:00 - 20:00", "IconoMonumento", geomfromtext('point(40.41122, -3.69358))')),
    ("Museo Reina Sofia", "Museo", "10:00 - 21:00", "IconoMonumento", geomfromtext('point(40.40805, -3.69460))')),
    ("Teatro Real", "Teatro", "10:00 - 18:30", "IconoMonumento", geomfromtext('point(40.41847, -3.71055))')),
    ("Jardines Sabatini", "Jardin", "9:00 - 22:00", "IconoVerde", geomfromtext('point(40.42048, -3.71405))')),
    ("Palacio Real", "Museo", "10:00 - 18:00", "IconoMonumento", geomfromtext('point(40.41803, -3.71438))')),
    ("Catedral Almudena", "Iglesia", "10:00 - 20:30", "IconoMonumento", geomfromtext('point(40.41596, -3.71455))')),
    ("Parque del Retiro", "Jardin", "18:00 - 21:00", "IconoVerde", geomfromtext('point(40.41317, -3.68307))')),
    ("Puerta de Alcala", "Monumento", "24h", "IconoMonumento", geomfromtext('point(40.42028, -3.68880))')),
    ("Plaza Mayor", "Monumento", "24h", "IconoMonumento", geomfromtext('point(40.41583, -3.70738))')),
    ("Museo Sorolla", "Museo", "9:30 - 20:00", "IconoMonumento", geomfromtext('point(40.43548, -3.69247))')),
    "Estadio Santiago Bernabeu", "Deporte", "9:30 - 19:00", "IconoVerde", geomfromtext('point(40.45316, -3.68832))'),
    ("Las Cuatro Torres", "Torres", "24h", "IconoMonumento", geomfromtext('point(40.47729, -3.68798))')),
    ("Museo del prado", "Museo", "10:00 - 19:00", "IconMonumento", geomfromtext('point(40.41395, -3.69215))')),
    ("Estadio Civitas Metropolitano", "Deporte", "10:00 - 19:00", "IconoDeportes", geomfromtext('point(40.43633, -3.59948))')),
    ("Parque de atracciones Warner", "Parque-Atracciones", "10:00 - 19:00", "IconoParqueAtracciones", geomfromtext('point(40.44566, -3.65693))')),
    ("Centro comercial ABC Serrano", "Centro-Comercial", "10:00 - 19:00", "IconoWifi", geomfromtext('point(40.43256, -3.68720))')),
    ("Parque de Atracciones de Madrid", "Parque-Atracciones", "10:00 - 19:00", "IconoParqueAtracciones", geomfromtext('point(40.41203, -3.7500))')),
    ("Wizink Center", "Conciertos", "10:00 - 19:00", "IconoMusica", geomfromtext('point(40.42400, -3.67173))')),
    ("Palacio Vistalegre Arena", "Conciertos", "10:00 - 19:00", "IconoMusica", geomfromtext('point(40.38614, -3.738))')),
    ("Ojala Bar", "Bar", "10:00 - 19:00", "IconoBar", geomfromtext('point(40.42556, -3.70394))')),
    ("Cherry Pecas Bar", "Bar", "10:00 - 19:00", "IconoBar", geomfromtext('point(40.44120, -3.71532))')),
    ("Oven Restaurante", "Bar", "10:00 - 19:00", "IconoComida", geomfromtext('point(40.42526, -3.70073))')),
    ("Steak Burger Restaurante", "Bar", "10:00 - 19:00", "IconoComida", geomfromtext('point(40.41990, -3.69937))')),
    ("Banco de España", "Bar", "10:00 - 19:00", "IconoBancos", geomfromtext('point(40.41872, -3.69443))')),
    ("Hospital Gregorio Marañon", "10:00 - 19:00", "IconoFarmacias", geomfromtext('point(40.41966, -3.67130))')),
    ("Carrefour", "Bar", "10:00 - 19:00", "IconoSuper", geomfromtext('point(40.41793, -3.67321))')),
    ("Universidad CEU San Pablo Monteprincipe", "Bar", "10:00 - 19:00", "IconoMonumento", geomfromtext('point(40.39801, -3.83492))'));


