# MadWay 

Esta aplicación se enfoca en los turistas a corto plazo que visitan nuestra ciudad, para proporcionarles una experiencia inolvidable. 
Desde proporcionar itinerarios y rutas en función de los gustos del usuario y su disponibilidad, hasta proporcionarte cualquier tipo de información útil para un viajero.  

## Requisitos funcionales

A continuación se desglosan los requisitos funcionales en los tres grandes bloques que componen la aplicación. 

### Itinerarios

- Clasificación de todos los sitios de interés almacenados en la aplicación, a través de la asignación de una o múltiples etiquetas representativas de dicho lugar. 
    - Criterio de validación:  todos los sitios de interés deberán estar asociados, como mínimo, a una etiqueta, siendo nulos los que estén asociados a la etiqueta “sin etiqueta”. 

- Creación de itinerarios turísticos ajustados a la situación de cada usuario y del clima. Los parámetros para su creación son: los días de la estancia del visitante, sus gustos personales y previsión del tiempo durante los días seleccionados. Resaltar que el único parámetro especificado por el usuario es el número de días disponibles. 
    - Criterio de validación: tras un día de uso de la aplicación, solicitar la creación de un itinerario, en el cual solo se debe especificar los días de visita. Si el usuario considera que el itinerario sugerido lo realizaría teniendo en cuenta la climatología prevista, sus intereses en la ciudad y la duración, será validado.

- La información mostrada en los itinerarios se divide en una composición de actividades y sitios de interés por día, sobre los cuales se muestra: el nombre, una imagen, una breve descripción, la ubicación y los aspectos más importantes de la previsión del tiempo.
    - Criterio de validación: comprobar que en la base de datos no hay valores nulos en estos campos y al generar un itinerario, que se muestra correctamente al usuario. 

- Establecimiento de los gustos personales de un usuario, a través de tres variables: filtros seleccionados, sitios buscados y área geográfica transitada, pudiendo acotarse desde un barrio hasta una ciudad completa.
    -  Criterio de validación: mostrar al usuario el perfil creado por la aplicación, para comprobar si es acertado en sus intereses y zonas sugeridas.  

- Sugerencia de sitios de interés, en función de los gustos del usuario, que queden fuera del itinerario definido. Permite mostrar otros lugares de interés para el usuario, con un nivel de afinidad inferior a los incluidos en la ruta. 
    - Criterio de validación: mostrar las sugerencias de sitios de interés al usuario y confirmar si realizaría al menos la mitad de ellas, solo teniendo en cuenta la afinidad y no el tiempo disponible para realizarla. 

- Elaboración de una lista de eventos y/o actividades clásicas o puntuales que se van a realizar en el próximo mes, mostrando al usuario solo las que coincidan con su estancia, proporcionando: el nombre, la ubicación, una descripción básica y opcionalmente el precio. 
    - Criterio de validación: una lista de eventos y/o actividades almacenados con un horizonte temporal de un mes, que nunca esté vacía. 

### Mapa

- Creación de los itinerarios del punto anterior en el mapa
    - Criterios de validación:     

- Creación de rutas ajustadas al usuario por su geolocalización y duración deseada
    - Criterio de validación: mostrar las rutas al usuario y comprobar que el comienzo de la ruta coincida con la localización del usuario y que su duración sea la establecida.
   
- Localización de los sitios de interés con marcadores distintivos en función de la temática sobre el mapa 
    - Criterios de validación: mostrar al usuario todos los sitios de interés en el mapa y comprobar que cada sitio muestre el distintivo en función de su temática.

- Establecimiento de filtros sobre el mapa: deportivo, musical, restaurantes típicos, cines, alojamientos, ocio nocturno.
    - Criterios de validación: mostrar al usuario los establecimientos y comprobar que solo aparezcan los establecimeintos de la temática escogida.

- Filtrar restaurantes en función de sus platos estrella/típicos 
    - Criterios de validación: mostrar al usuario en el mapa todos los restaurantes, para comprobar si reservaría al menos en la mitad. 

- Filtrar discotecas en función de tipo de música, precio, popularidad
    -  Criterios de validación: mostrar al usuario en el mapa todos las discotecas y comprobar si coincide con sus gustos.

- Establecer un semáforo de colores, en función de la seguridad de los barrios, sobre el mapa 
    - Criterios de validación: mostrar en el mapa el color del semaforo por cada barrio y comprobar que el color de un determinado barrio coincide con el grado de seguridad del mismo. 

- Establecer las zonas sobre el mapa que tienen wifi gratis 
    - Criterios de validación: mostrar al usuario las zonas que tienen wifi y comprobar si en esa zona tiene acceso a internet. 

- Recomendaciones para comer situadas en la ruta turística 

- Recomendaciones de actividades culturales y turisticas en el mismo camino de la ruta 

- Recomendar rutas alternativas dependiendo del clima o imprevistos 

- Suministrar información al usuario con geolocalización en formato audio  

- Generación de rutas eficientes combinando opciones de transporte público y privado

- Notificaciones en tiempo real sobre transporte público y privado

- Alquiler de car sharing, patinetes y motos de nuestra empresa

- Comprobar disponibilidad o reservar parking en la ciudad

### Información turística

- Registro de los usuarios con la información básica y creación de una cuenta en la aplicación a través de un formulario de registro
    - Criterios de validación: tener un formulario funcional de registro el cual permita al usuario ingresar información para crear una cuenta y que la cuenta sea registrada correctamente en la base de datos.
    
- Inicio de sesión del usuario a traves de un login para el uso de la aplicación
    - Criterios de validación: tener un formulario funcional de login donde el usuario escriba la información de su cuenta y acceda correctamente a la aplicación
   
- Contar con las bases de datos necesarias para almacenar la información turística y que la información de los usuarios sea almacenada de forma segura y este encriptada.
    - Criterios de validación: confirmar que la información ha sido guardada de forma segura y que coincide con la que se introdujo en registro, y que las información confidencial este encriptada correctamente.

- Contar con un menú para la selección del idioma principal al cual la aplicación va a ser traducida, teniendo distintos idiomas como opción.
    - Criterios de validación: tener un menú dentro de la aplicación el cual permita cambiar de idioma, en el cual al seleccionar un idioma, que toda la aplicación sea traducida a este.

- Establecer alertas si el usuario se encuentra en una zona peligrosa en la que debería tener cuidado, alteraciones en el clima que puedan afectar al usuario y modificaciones o cancelaciones de transportes los cuales generen un inconveniente en los planes del usuario.
    - Criterios de validación: al estar en una zona o barrio peligroso que el usuario reciba alertas para tener cuidado, si el clima no va a favorecer la ruta entonces que el usuario reciba una alerta sobre esto, y si sucede algo con algún transporte que el usuario puede utilizar, que reciba una alerta explicando la situación.

- Noticias que pueden impactar en la estancia del turista, adaptadas a la ciudad en la que se encuentra

- Proporcionar los datos de contacto e información básica de alojamientos y restaurantes para reservar. En el caso de los restaurantes, pedir comida a domicilio

- Acompañar los sitios de interés de una descripción básica, junto con reseñas y valoraciones de otros usuarios

- Tener un conversor de moneda automático a la divisa que elija el usuario al visualizar cualquier tipo de precio en la aplicación
    - Criterios de validación: que la aplicación cuente con un menú donde puedas elegir la divisa a la cual los precios van a ser automáticamente convertidas y que los precios sean mostrados en la divisa elegida y en la local de el lugar donde se encuentra el usuario.

## Requisitos no funcionales
