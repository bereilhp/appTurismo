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




INSERT INTO place (name_place, description_place, schedule, link_place, id_icon, latitude, longitude)
VALUES
    ("Museo del prado", "Museo Nacional del Prado - The Prado Museum is the main Spanish museum national art museum. It is widely considered to house one of the world's finest collections of Europe art, dating from the 12th century to the early 20th century, based on the former Spanish royal collection. We can find there the numerous works by Francisco Goya, Diego Velázquel or Peter Paul Rubens.", "10:00 - 19:00", "https://www.museodelprado.es/", 1, 40.41395, -3.69215),
    ("Museo Thyssen", "Museo Nacional Thyssen-Bornemisza - The Thyssen-Bornemisza National Museum, in this museum we can find about thousand of works created by artists such as Duccio, Caravaggio, Rembrandt, Monet, Van Gogh and many more.","10:00 - 19:00", "https://www.museothyssen.org/", 1, 40.41618, -3.69490),
    ("Caixa Forum",  "CaixaForum Madrid is a cultural center opened from 2008. It hosts temporary art exhibitions and cultural events. The structure of building is really interesting, becouse combines the architectural style of the early industrial era of 20th century with the contemporary avant-garde.","10:00 - 20:00", "https://caixaforum.org/es/madrid/", 1, 40.41122, -3.69358),
    ("Museo Reina Sofia", "Museo Nacional Centro de Arte Reina Sofía - The Queen Sofia National Museum Art Centre is spanish national museum of 20th-century art. It is mainly dedicated to spanish art. The highlights collections include artworks of masters Pablo Picasso and Salvador Dalí.","10:00 - 21:00", "https://www.museoreinasofia.es/", 1, 40.40805, -3.69460),
    ("Teatro Real", "Teatro Real - The Royal Theatre is an opera house is considered the top institution of the performing and musical arts in the country and one of the most prestigious opera houses in Europe.","10:00 - 18:30", "https://www.teatroreal.es/es", 1, 40.41847, -3.71055),
    ("Jardines Sabatini", "Jardines de Sabadini - The Sabatini Gardens are part of the Royal Palace in Madrid. The gardens have a formal Neoclassic style, consisting of well-sheared hedges, in symmetric geometrical patterns, adorned with a pool, statues and fountains, with trees also disposed in a symmetrical geometric shape. There are located too the statues are those of Spanish kings which initially adorned the palace.","9:00 - 22:00", "https://www.esmadrid.com/informacion-turistica/jardines-de-sabatini", 2, 40.42048, -3.71405),
    ("Palacio Real", "El Palacio Real de Madrid - Royal Palace of Madrid is the official residence of the Spanish royal family. It's the largest royal palace in Europe and it is the one of numerless official residences of heads of state opened for public.","10:00 - 18:00", "https://www.patrimonionacional.es/visita/palacio-real-de-madrid", 1, 40.41803, -3.71438),
    ("Catedral Almudena", "Catedral de Santa María la Real de La Almudena - Almudena Cathedral is a Catholic church and seat of the Roman Catholic Archdiocese of Madrid. First plans of building cathedral were in 1561 when the capital od Spain was transfered from Toledo to Madrid, but becouse of desire of making the cathedral the largest that the worl had ever seen caused postponing construction for years. Finaly where Francisco de Cudas designed and directed the constuction in the Gothic revival style, the works were interrupted by the Spanish Civil War. The cathedral was completed in 1993 and it was consecrated by Pope John Paul II.", "10:00 - 20:30", "https://catedraldelaalmudena.es/", 1, 40.41596, -3.71455),
    ("Parque del Retiro", "Parque del Buen Retiro is one of the largest parks of the city. The park belonged to the Spanish Monarchy until the late 19th century, when became a public park. From 2021 became part od a combined UNESCO World Heritage Site with Paseo del Prado.Exept walks along charming alleys it is offering many atractiones such as rowing on Estanque Grande, art exhibitions in Museo Reina Sofía or exposition of exotic plants in romantic Palacio de Cristal.", "18:00 - 21:00", "https://www.esmadrid.com/informacion-turistica/parque-del-retiro", 2, 40.41317, -3.68307),
    ("Puerta de Alcala", "Puerta de Alcalá is a Neo-classical gate in the Plaza de la Independencia in Madrid. The name of this gate comes from the road that had to be taken in the past to get to Alcalá de Henares.", "24h", "https://www.esmadrid.com/informacion-turistica/puerta-de-alcala", 1, 40.42028, -3.68880),
    ("Plaza Mayor", "Plaza Mayor - Town square is a major public space in the heart of Madrid. It was once the centre of Old Madrid. It was first built (1580–1619) during the reign of Philip III. ", "24h", "https://www.esmadrid.com/informacion-turistica/plaza-mayor-madrid", 1, 40.41583, -3.70738),
    ("Museo Sorolla", "Museo Sorolla - Museum Sorolla is a museum features work by the artist Joaquín Sorolla, as well aw members of his family such as his daughter Elena. ", "9:30 - 20:00", "https://museosorolla.sacatuentrada.es/", 1, 40.43548, -3.69247),
    ("Estadio Santiago Bernabeu", "Estadio Santiago Bernabéu -  Santiago Bernabéu Stadium is a football stadium of Madrid. With a current seating capacity of 81,044, it has been the home stadium of Real Madrid since its completion in 1947. It is the second-largest stadium in Spain and third-largest home to a top-flight European club after Camp Nou and Westfalenstadion. ", "9:30 - 19:00", "https://www.realmadrid.com/estadio-santiago-bernabeu", 2, 40.45316, -3.68832),
    ("Las Cuatro Torres", "Cuatro Torres Business Area (CTBA) - Four Towers Business Area is a business district located in the Paseo de la Castellana. The area contains the four tallest skyscrapers in Spain, and four of the ten tallest in the European Union: the Torre Emperador, Torre de Cristal, Torre PwC and Torre Cepsa. Construction of the buildings finished in 2008. Now, a fifth tower, Caleido, is under construction. ", "24h", "https://www.disfrutamadrid.com/cuatro-torres", 1, 40.47729, -3.68798),
    ("Estadio Civitas Metropolitano", "Estadio Metropolitano - Metropolitano Stadium is a stadium in Madrid also called Wanda Metropolitano. It was opend in 1994 and has been the home stadium of football club Atlético Madrid since the 2017–18 season. The stadium is in the Rosas neighbourhood in the San Blas-Canillejas district. Wanda Metropolitano has a seating capacity of 67,829.  ", "10:00 - 19:00", "https://www.atleticodemadrid.com/civitasmetropolitano", 3, 40.43633, -3.59948),
    ("Parque de atracciones Warner", "Parque Warner Madrid is a theme park opened as Warner Bros. Movie World Madrid/Warner Bros. Park Madrid on 6 April 2002. Among its roller coasters, highlights include Superman: La Atracción de Acero, a first in Europe with its floorless trains, Batman: Arkham Asylum, an inverted roller coaster, Coaster-Express, a wooden coaster and Stunt Fall and Stunt Fall, a giant inverted boomerang offering guests a vertical drop of 54.4 m. There are many attractiones for every adrenaline lover.", "10:00 - 19:00", "https://www.parquewarner.com/", 4, 40.44566, -3.65693),
    ("Centro comercial ABC Serrano", "Centro Comercial ABC Serrano is a shopping center which offers a lot of shops with the latest trends in fashion, beauty and gastronomy in the heart of Madrid.", "10:00 - 19:00", "https://www.abcserrano.com/", 5, 40.43256, -3.68720),
    ("Parque de Atracciones de Madrid", "Parque de Atracciones de Madrid is a 20-hectare amusement park located in the Casa de Campo in Madrid, Spain. Opened in 1969, it is the third-oldest operating amusement park in Spain. ", "10:00 - 19:00", "https://www.parquedeatracciones.es/", 4, 40.41203, -3.7500),
    ("Wizink Center", "Palacio de Deportes de la Comunidad de Madrid - Sports Palace of the Regional Community of Madrid, officially WiZink Center, is an indoor sporting arena. The former building, which was built in 1960, was destroyed by a fire in 2001. New arena was built in style High-Tech at the same location between 2002 and 2005. The arena hosted many major international basketball events.", "10:00 - 19:00", "https://www.wizinkcenter.es/", 6, 40.42400, -3.67173),
    ("Palacio Vistalegre Arena", "Palacio Vistalegre Area is a multipurpose arena located on the site of the former bullring, \"Plaza de toros de Vista Alegre\". The venue is composed of three main spaces: The Arena, The Centre and the Sala San Miguel (formerly known as The Box).", "10:00 - 19:00", "https://www.palaciovistalegre.es/", 6, 40.38614, -3.738),
    ("Ojala Bar", "Restaurant Ojalá has been opened in december 2004. Except good food it is offering a hanging garden, shared tables, fluorescent tones of the wood, fairground lights and a beach with a beach bar.", "10:00 - 19:00", "https://grupolamusa.com/restaurante-ojala/", 7, 40.42556, -3.70394),
    ("Cherry Pecas Bar", "Cherry Pecas is a restaurant with traditional mexican food. We can find there dishes for everyone - they are having vegan friendly and gluten free options in their menu. ", "10:00 - 19:00", "https://cherrypecas.com/", 7, 40.44120, -3.71532),
    ("Oven Restaurante", "Oven Mozzarella Bar is one of the famous italian restaurant in Madrid. You can eat their dishes like pizza, tortellini or taste tiramisu. There is possible to booked the table before the visit. ", "10:00 - 19:00", "https://www.oven.es/", 8, 40.42526, -3.70073),
    ("Steak Burger Restaurante", "Steak Burger is the restaurant with the best burgers in Madrid and Murcia, not forgetting sandwiches, salads and the best meat of happiness made on charcoal grill. Exept of the great diner you can eat there a lot of mouthwaitering desserts.", "10:00 - 19:00", "https://www.steakburger.es/en/", 8, 40.41990, -3.69937),
    ("Banco de España", "Banco de España is the central bank of Spain. Established in Madrid in 1782 by Charles III, today the bank is a member of the European System of Central Banks and is also Spain's national competent authority for banking supervision within the Single Supervisory Mechanism. ", "10:00 - 19:00", "https://www.bde.es/bde/es/", 10, 40.41872, -3.69443),
    ("Hospital Gregorio Marañon", "Hospital Gregorio Marañon - The Hospital General Universitario Gregorio Marañón is a public general hospital located at the neighborhood of Ibiza in Madrid, Spain, part of the hospital network of the Servicio Madrileño de Salud (SERMAS). It is one of the healthcare institutions associated to the Complutense University of Madrid (UCM) for the purpose of clinical internship.", "10:00 - 19:00", "https://www.comunidad.madrid/hospital/gregoriomaranon/", 9, 40.41966, -3.67130),
    ("Carrefour", "Carrefour - hypermarket of a French multinational retail and wholesaling corporation headquartered in Massy, France.", "10:00 - 19:00", "https://www.carrefour.es/", 14, 40.41793, -3.67321),
    ("Universidad CEU San Pablo Monteprincipe", "Universidad CEU San Pablo Monteprincipe - campus of the University CEU San Pablo, part of the largest and most traditional private education institution in Spain, CEU, founded in 1933 by the Catholic Association of Propagandists (ACdP). Here we can find faculties: pharmacy, medicine and an institute of technology.", "10:00 - 19:00", "https://www.uspceu.com/", 1, 40.39801, -3.83492);

/*INSERT INTO place (name_place, schedule, icon_category, coordinate)
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
