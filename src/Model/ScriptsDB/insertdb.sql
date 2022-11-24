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



/*TODOS LOS NOMBRES TIENEN QUE SER ÚNICOS*/
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
    ("Restaurante Gloria Bendita Madrid", "restaurnat", "11:00 - 24:00", "https://restaurante.covermanager.com/gloria-bendita-madrid/", 8, 40.41692334893603, -3.709958079106618), 
    ("McDonald's", "Fast Food", "24h", "https://www.mcdonalds-mcdelivery.es/mc-delivery/home?utm_source=madrid&utm_medium=mybusiness&utm_campaign=madrid", 7, 40.41303322073356, -3.708161362955339), 
    ("McDonald's1", "Fast Food", "24h", "https://www.mcdonalds-mcdelivery.es/mc-delivery/home?utm_source=madrid&utm_medium=mybusiness&utm_campaign=madrid", 7, 40.41878383661649, -3.698891649019737), 
    ("McDonald's2", "Fast Food", "24h", "https://www.mcdonalds-mcdelivery.es/mc-delivery/home?utm_source=madrid&utm_medium=mybusiness&utm_campaign=madrid", 7, 40.43442127989187, -3.672823729221636), 
    ("McDonald's3", "Fast Food", "24h", "https://www.mcdonalds-mcdelivery.es/mc-delivery/home?utm_source=madrid&utm_medium=mybusiness&utm_campaign=madrid", 7, 40.399722141532166, -3.6687038566373915), 
    ("McDonald's4", "Fast Food", "24h", "https://www.mcdonalds-mcdelivery.es/mc-delivery/home?utm_source=madrid&utm_medium=mybusiness&utm_campaign=madrid", 7, 40.399722141532166, -3.6687038566373915), 
    ("Burguer King", "Fast Food", "24h", "https://www.burgerking.es/", 7, 40.43947592622751, -3.717761637354845), 
    ("Burguer King1", "Fast Food", "24h", "https://www.burgerking.es/", 7, 40.429349786474404, -3.667979838151149), 
    ("Burguer King2", "Fast Food", "24h", "https://www.burgerking.es/", 7, 40.41288338822543, -3.6933857216330876), 
    ("Burguer King3", "Fast Food", "24h", "https://www.burgerking.es/", 7, 40.44633580042253, -3.6666848951544684), 
    ("Burguer King4", "Fast Food", "24h", "https://www.burgerking.es/", 7, 40.45107754453927, -3.711278044951719), 
    ("Banco Santander", "Bank", "24h", "http://www.bancosantander.es/", 10, 40.46071712519201, -3.6890883467524995), 
    ("Banco Santander1", "Bank", "24h", "http://www.bancosantander.es/", 10, 40.431585063104535, -3.7206740386812185), 
    ("CaixaBank", "Bank", "24h", "https://www.caixabank.es/?Origen=GMB", 10, 40.46211091439578, -3.6983803485434295), 
    ("CaixaBank1", "Bank", "24h", "https://www.caixabank.es/?Origen=GMB", 10, 40.414422800509996, -3.6976937030667174), 
    ("Farmacia Goya 12", "Farmacia", "10:00 - 19:00", "https://www.farmaciashyg.es/", 9, 40.426038044617265, -3.6853175733749484),
    ("Farmacia Recoletos", "Farmacia", "10:00 - 19:00", "https://www.farmaciashyg.es/", 9, 40.42250969636057, -3.689694938391637),
    ("Farmacia Molina 58", "Farmacia", "10:00 - 19:00", "https://www.farmaciashyg.es/", 9, 40.43845113202247, -3.6787944411932174),
    ("Farmacia Intercontinental", "Farmacia", "10:00 - 19:00", "https://www.farmaciashyg.es/", 9, 40.430415552767876, -3.665919838202958),
    ("Farmacia Narvaez", "Farmacia", "10:00 - 19:00", "https://www.farmaciashyg.es/", 9, 40.425253983221396, -3.675876197848758),
    ("Farmacia Sol", "Farmacia", "10:00 - 19:00", "https://www.farmaciashyg.es/", 9, 40.418393056158685, -3.702054557534137),
    ("Hospital La Princesa", "Hospitales", "10:00 - 19:00", "http://www.madrid.org", 9, 40.434724805833305, -3.675532880258475),
    ("Hospital Universitario Santa Cristina", "Hospitales", "10:00 - 19:00", "http://www.madrid.org", 9, 40.422899103168206, -3.670726361808778),
    ("Hospital Universitario San Francisco de Asís", "Hospitales", "10:00 - 19:00", "http://www.madrid.org", 9, 40.44419693499059, -3.6838584573837956),
    ("Hospital General Universitario Gregorio Marañón", "Hospitales", "10:00 - 19:00", "http://www.madrid.org", 9, 40.42080815501913, -3.6715846689297726),
    ("Dia", "Supermarket", "10:00 - 19:00", "https://www.carrefour.es/", 14, 40.423612568849066, -3.6862617263894935),
    ("La sirena", "Supermarket", "10:00 - 19:00", "https://www.carrefour.es/", 14, 40.42674883612803, -3.6752753985044726),
    ("Mercado de la Paz", "Supermarket", "10:00 - 19:00", "https://www.carrefour.es/", 14, 40.42617651169036, -3.7020540237541177),
    ("Mercado de san Miguel", "Supermarket", "10:00 - 19:00", "https://www.carrefour.es/", 14, 40.44171485952008, -3.6789404341520386),
    ("Sanchez Romero", "Supermarket", "10:00 - 19:00", "https://www.carrefour.es/", 14, 40.428832114361796, -3.7065296516447104),
    ("Mercadona", "Supermarket", "10:00 - 19:00", "https://www.carrefour.es/", 14, 40.43463353522741, -3.7168810824955303),
    ("Parque Ríos Rosas", "Parque", "10:00 - 20:00", "https://www.chamberi30dias.es/noticias/abre-el-parque-de-rios-rosas-el-primero-de-los-tres-prometidos-por-el-canal", 2, 40.44040067712061, -3.7009683245510394),
    ("Parque de Santander", "Parque", "8:00 - 23:00", "http://www.esmadrid.com/", 2, 40.444287349580115, -3.709680139721373),
    ("Dehesa de la Villa", "Parque", "24h", "http://www.esmadrid.com/", 2, 40.45951066888686, -3.720154172877343),
    ("Real Jardín Botánico Alfonso XIII", "Parque", "24h", "http://www.esmadrid.com/", 2, 40.447329488658255, -3.726195234330417),
    ("Parque del Oeste", "Parque", "24h", "http://www.esmadrid.com/", 2, 40.43578406961277, -3.7226467927680686),
    ("Campo del moro", "Parque", "24h", "http://www.esmadrid.com/", 2, 40.41713707905363, -3.718375079648447),
    ("Casa Campo", "Parque", "24h", "http://www.esmadrid.com/", 2, 40.420534491781645, -3.727210636362153),
    ("Parque de San Isidro", "Parque", "24h", "http://www.esmadrid.com/", 2,  40.397303727450264, -3.7255876288902856),
    ("Caja Mágica", "Caja Mágica", "9:30 - 19:00", "https://www.esmadrid.com/informacion-turistica/madrid-caja-magica", 4, 40.36899556319067, -3.684483617339239),
    ("Ciudad Deportiva del Real Madrid, Camino de Sintra, Valdebebas", "Real madrid", "9:30 - 19:00", "https://www.realmadrid.com/estadio-santiago-bernabeu", 4,     40.48012300768005, -3.6127078308265768),
    ("Bichopalo Restaurante", "Restaurante de carne", "10:00 - 19:00", "http://www.madrid.org", 8, 40.44368777968586, -3.6975892726965753),
    ("Restaurante Barrera", "Restaurante de pasta", "10:00 - 19:00", "http://www.madrid.org", 8, 40.43810231607572, -3.698096355638388),
    ("El Picaporte", "Restaurante de mexicano", "10:00 - 19:00", "http://www.madrid.org", 8, 40.43746260944251, -3.694051493369608),
    ("Restaurante El Viso", "Restaurante de pasta", "10:00 - 19:00", "http://www.madrid.org", 8, 40.4457383439822, -3.684963685934556),
    ("Restaurante El Yate", "Restaurante de carne", "10:00 - 19:00", "http://www.madrid.org", 8, 40.4364230731818, -3.6913198980712107),
    ("Leña Madrid. Las brasas x Dani García", "Restaurante de carne brasas", "10:00 - 19:00", "https://grupodanigarcia.com/es/", 8, 40.43982149749217, -3.6911623060347645),
    ("Restaurante Mutis", "Restaurante de atún", "10:00 - 19:00", "http://www.madrid.org", 8, 40.43726269987138, -3.6882731186999216),
    ("La Madreña Castellana", "Restaurante de pasta", "10:00 - 19:00", "https://lamadrena.com/", 8, 40.43968410613542, -3.69017319841583),
    ("BiBo Madrid by Dani García", "Restaurante de pescado", "10:00 - 19:00", "https://www.grupodanigarcia.com/es/restaurantes-bibo/bibo-madrid/?utm_source=GBUSINESS", 8, 40.43604680490821, -3.6882053979202327),
    ("Restaurante Torrenostra", "Restaurante de pasta", "10:00 - 19:00", "http://www.madrid.org", 8, 40.444613950605685, -3.695859993924038),
    ("Le Coq", "Restaurante de pollo", "10:00 - 19:00", "http://www.madrid.org", 8, 40.44207201452997, -3.714240713200948),
    ("Taberna la Daniela", "Restaurante de pasta", "10:00 - 19:00", "http://www.madrid.org", 8, 40.45083080228535, -3.6886467772949607),
    ("Restaurante El Cardeño", "Restaurante de tapas", "10:00 - 19:00", "http://www.madrid.org", 8, 40.4504849620634, -3.6849334360281345),
    ("Ochenta Grados Castellana", "Restaurante de pizza", "10:00 - 19:00", "http://www.madrid.org", 8, 40.4502077626746, -3.6901640735563612),
    ("Restaurante Masterchef", "Restaurante de masterchef", "10:00 - 19:00", "http://www.madrid.org", 8, 40.44342968371789, -3.6821538826788687),
    ("Carbón", "Restaurante de carne", "10:00 - 19:00", "http://www.madrid.org", 8, 40.43303914535197, -3.6781995633883198),
    ("Bendita Locura Coffee & Dreams", "Restaurante de pasta", "10:00 - 19:00", "http://www.madrid.org", 8, 40.43552384629874, -3.679509120060144),
    ("Marieta", "Restaurante chic que ofrece un menú extenso y creativo de gastronomía internacional, brunches y cócteles, con sesiones de DJs.", "10:00 - 19:00", "http://www.madrid.org", 8, 40.43417826714633, -3.6874878821016117),

    
    
    
    
    
    
    
    
    
    ("Universidad CEU San Pablo Monteprincipe", "Universidad CEU San Pablo Monteprincipe - campus of the University CEU San Pablo, part of the largest and most traditional private education institution in Spain, CEU, founded in 1933 by the Catholic Association of Propagandists (ACdP). Here we can find faculties: pharmacy, medicine and an institute of technology.", "10:00 - 19:00", "https://www.uspceu.com/", 1, 40.39801, -3.83492);



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
