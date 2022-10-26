/*Añadimos manualmente mediante PHPAdmin las imagenes de esta tabla*/
/* system pwd desde MySQL para lanzar la petición*/
INSERT INTO icon (icon_category, image_icon)
VALUES
    ("IconoMonumento","https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/344/external-location-banking-and-financial-xnimrodx-lineal-color-xnimrodx.png"),
    ("IconoVerde","https://img.icons8.com/doodle/344/spinach.png"),
    ("IconoDeportes", "https://img.icons8.com/fluency/344/stadium-.png"),
    ("IconoParqueAtracciones", "https://img.icons8.com/external-flaticons-lineal-color-flat-icons/344/external-theme-park-summer-travel-flaticons-lineal-color-flat-icons-2.png"),
    ("IconoWifi","https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/344/external-location-internet-of-things-flatart-icons-lineal-color-flatarticons.png"),
    ("IconoMusica", "https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/344/external-location-music-icongeek26-linear-colour-icongeek26.png"),
    ("IconoBar", "https://img.icons8.com/external-flatarticons-blue-flatarticons/344/external-location-coffee-shop-flatart-icons-lineal-color-flatarticons-1.png"),
    ("IconoComida", "https://img.icons8.com/external-nawicon-outline-color-nawicon/344/external-location-food-delivery-nawicon-outline-color-nawicon.png"),
    ("IconoFarmacias", "https://img.icons8.com/color-glass/452/find-clinic.png"),
    ("IconoBancos", "https://img.icons8.com/external-anggara-filled-outline-anggara-putra/344/external-location-ecommerce-anggara-filled-outline-anggara-putra.png"),
    ("IconoCine", "https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/344/external-location-news-flatart-icons-lineal-color-flatarticons.png"),
    ("IconoEmpresa", "https://img.icons8.com/external-linector-lineal-color-linector/2x/external-location-hotel-service-linector-lineal-color-linector.png"),
    ("IconoIglesia", "https://img.icons8.com/external-flatarticons-blue-flatarticons/344/external-location-easter-flatarticons-blue-flatarticons.png"),
    ("IconoSuper", "https://img.icons8.com/external-flat-zulfa-mahendra/344/external-location-ecommerce-flat-zulfa-mahendra.png"),
    ("IconoSombra", "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png");




INSERT INTO place (description_place, schedule, id_icon, latitude, longitude)
VALUES 
    ("Museo del prado", "10:00 - 19:00", 1, 40.41395, -3.69215),
    ("Museo Thyssen", "10:00 - 19:00", 1, 40.41618, -3.69490),
    ("Caixa Forum",  "10:00 - 20:00", 1, 40.41122, -3.69358),
    ("Museo Reina Sofia", "10:00 - 21:00", 1, 40.40805, -3.69460),
    ("Teatro Real", "10:00 - 18:30", 1, 40.41847, -3.71055),
    ("Jardines Sabatini", "9:00 - 22:00", 2, 40.42048, -3.71405),
    ("Palacio Real", "10:00 - 18:00", 1, 40.41803, -3.71438),
    ("Catedral Almudena", "10:00 - 20:30", 1, 40.41596, -3.71455),
    ("Parque del Retiro", "18:00 - 21:00", 2, 40.41317, -3.68307),
    ("Puerta de Alcala", "24h", 1, 40.42028, -3.68880),
    ("Plaza Mayor", "24h", 1, 40.41583, -3.70738),
    ("Museo Sorolla", "9:30 - 20:00", 1, 40.43548, -3.69247),
    ("Estadio Santiago Bernabeu", "9:30 - 19:00", 2, 40.45316, -3.68832),
    ("Las Cuatro Torres", "24h", 1, 40.47729, -3.68798),
    ("Museo del prado", "10:00 - 19:00", 1, 40.41395, -3.69215),
    ("Estadio Civitas Metropolitano","10:00 - 19:00", 3, 40.43633, -3.59948),
    ("Parque de atracciones Warner", "10:00 - 19:00", 4, 40.44566, -3.65693),
    ("Centro comercial ABC Serrano", "10:00 - 19:00", 5, 40.43256, -3.68720),
    ("Parque de Atracciones de Madrid",  "10:00 - 19:00", 4, 40.41203, -3.7500),
    ("Wizink Center",  "10:00 - 19:00", 6, 40.42400, -3.67173),
    ("Palacio Vistalegre Arena", "10:00 - 19:00", 6, 40.38614, -3.738),
    ("Ojala Bar", "10:00 - 19:00", 7, 40.42556, -3.70394),
    ("Cherry Pecas Bar", "10:00 - 19:00", 7, 40.44120, -3.71532),
    ("Oven Restaurante",  "10:00 - 19:00", 8, 40.42526, -3.70073),
    ("Steak Burger Restaurante", "10:00 - 19:00", 8, 40.41990, -3.69937),
    ("Banco de España", "10:00 - 19:00", 10, 40.41872, -3.69443),
    ("Hospital Gregorio Marañon", "10:00 - 19:00", 9, 40.41966, -3.67130),
    ("Carrefour", "10:00 - 19:00", 14, 40.41793, -3.67321),
    ("Universidad CEU San Pablo Monteprincipe", "10:00 - 19:00", 1, 40.39801, -3.83492);  

/*INSERT INTO place (description_place, schedule, icon_category, coordinate)
VALUES 
    ("Museo del prado", "10:00 - 19:00", 1, (40.41395, -3.69215)),
    ("Museo Thyssen", "10:00 - 19:00", 1, (40.41618, -3.69490)),
    ("Caixa Forum",  "10:00 - 20:00", 1, (40.41122, -3.69358)),
    ("Museo Reina Sofia", "10:00 - 21:00", 1, (40.40805, -3.69460)),
    ("Teatro Real", "10:00 - 18:30", 1, (40.41847, -3.71055)),
    ("Jardines Sabatini", "9:00 - 22:00", 2, (40.42048, -3.71405)),
    ("Palacio Real", "10:00 - 18:00", 1, (40.41803, -3.71438)),
    ("Catedral Almudena", "10:00 - 20:30", 1, (40.41596, -3.71455)),
    ("Parque del Retiro", "18:00 - 21:00", 2, (40.41317, -3.68307)),
    ("Puerta de Alcala", "24h", 1, (40.42028, -3.68880)),
    ("Plaza Mayor", "24h", 1, (40.41583, -3.70738)),
    ("Museo Sorolla", "9:30 - 20:00", 1, (40.43548, -3.69247)),
    ("Estadio Santiago Bernabeu", "9:30 - 19:00", 2, (40.45316, -3.68832)),
    ("Las Cuatro Torres", "24h", 1, (40.47729, -3.68798)),
    ("Museo del prado", "10:00 - 19:00", "IconMonumento", (40.41395, -3.69215)),
    ("Estadio Civitas Metropolitano","10:00 - 19:00", "IconoDeportes", (40.43633, -3.59948)),
    ("Parque de atracciones Warner", "10:00 - 19:00", 4, (40.44566, -3.65693)),
    ("Centro comercial ABC Serrano", "10:00 - 19:00", "IconoWifi", (40.43256, -3.68720)),
    ("Parque de Atracciones de Madrid",  "10:00 - 19:00", 4, (40.41203, -3.7500)),
    ("Wizink Center",  "10:00 - 19:00", 6, (40.42400, -3.67173)),
    ("Palacio Vistalegre Arena", "10:00 - 19:00", 6, (40.38614, -3.738)),
    ("Ojala Bar", "10:00 - 19:00", 7, (40.42556, -3.70394)),
    ("Cherry Pecas Bar", "10:00 - 19:00", 7, (40.44120, -3.71532)),
    ("Oven Restaurante",  "10:00 - 19:00", 8, (40.42526, -3.70073)),
    ("Steak Burger Restaurante", "10:00 - 19:00", 8, (40.41990, -3.69937)),
    ("Banco de España", "10:00 - 19:00", "IconoBancos", (40.41872, -3.69443)),
    ("Hospital Gregorio Marañon", "10:00 - 19:00", "IconoFarmacias", (40.41966, -3.67130)),
    ("Carrefour", "10:00 - 19:00", "IconoSuper", (40.41793, -3.67321)),
    ("Universidad CEU San Pablo Monteprincipe", "10:00 - 19:00", 1, (40.39801, -3.83492));*/


INSERT INTO tag (name, description_tag)
VALUES 
    ("Museo", "institución sin ánimo de lucro, permanente y al servicio de la sociedad, que investiga, colecciona, conserva, interpreta y exhibe el patrimonio material e inmaterial."),
    ("Teatro", "El teatro es la rama de las artes escénicas relacionada con la actuación. Representa historias actuadas frente a los espectadores o frente a una cámara usando una combinación de discurso, gestos, escenografía, música, sonido y espectáculo."),
    ("Jardin", "Un jardín, es una zona del terreno donde se cultivan especies vegetales,  con posible añadidura de otros elementos como fuentes o esculturas, para el placer de los sentidos."),
    ("Iglesia", "Una iglesia refiere tanto a una comunidad local como a una institución religiosa que agrupa a cristianos de una misma confesión."),
    ("Monumento", "Construcción arquitectónica o escultórica, generalmente de grandes dimensiones, que se erige en recuerdo de una persona o hecho memorables."),
    ("Deporte", "Actividad o ejercicio físico, sujeto a determinadas normas, en que se hace prueba, con o sin competición, de habilidad, destreza o fuerza física."),
    ("Torres", "Construcción de grandes dimensiones fabricada con piedras, ladrillos y materiales resistentes que está destinada a servir de vivienda o de espacio para el desarrollo de una actividad humana."),
    ("Parque-Atracciones", "Un parque de atracciones o parque de diversiones es un grupo de atracciones de entretenimiento, para montarse y otros acontecimientos en un sitio para el disfrute de un gran número de personas."),
    ("Centro-Comercial", "Un centro comercial, es una construcción que consta de uno o varios edificios, por lo general de gran tamaño, que albergan servicios, locales y oficinas comerciales aglutinados en un espacio determinado concentrando mayor cantidad de clientes potenciales dentro del recinto."),
    ("Conciertos", "Un concierto es una expresión cultural musical en que se ejecutan composiciones sueltas."),
    ("Bar", "Establecimiento en el que hay un mostrador alargado para servir bebidas y algunas comidas."),
    ("Restaurante", "Establecimiento en el que se preparan y sirven comidas."),
    ("Hospital", "Establecimiento destinado a proporcionar todo tipo de asistencia médica, incluidas operaciones quirúrgicas y estancia durante la recuperación o tratamiento, y en el que también se practican la investigación y la enseñanza médica.");