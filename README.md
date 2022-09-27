# MadWay 

Esta aplicación se enfoca en los turistas a corto plazo que visitan nuestra ciudad, para proporcionarles una experiencia inolvidable. 
Desde proporcionar itinerarios y rutas en función de los gustos del usuario y su disponibilidad, hasta proporcionarte cualquier tipo de información útil para un viajero.  

## Requisitos funcionales

A continuación se desglosan los requisitos funcionales en los tres grandes bloques que componen la aplicación. 

### Itinerarios

- Clasificación de todos los sitios de interés almacenados en la aplicación, a través de la asignación de una o múltiples etiquetas representativas de dicho lugar. 
    - Criterio de validación: todos los sitios de interés deberán estar asociados, como mínimo, a una etiqueta, siendo nulos los que estén asociados a la etiqueta “sin etiqueta”. 
    
- Definición de una afinidad para cada uno de los sitios de interés almacenados en la aplicación, extraidos a partir de la similitud de etiquetas de los sitios de interés visitados.
    - Criterio de validación: la afinidad establecida tenga una relacion con las etiquetas asociadas a los sitios más visitados, a través de las sugerencias.

- Creación de itinerarios turísticos ajustados a la situación de cada usuario y del clima. Los parámetros para su creación son: los días de la estancia del visitante, sus gustos personales y previsión del tiempo durante los días seleccionados. Resaltar que el único parámetro especificado por el usuario es el número de días disponibles. 
    - Criterio de validación: tras un día de uso de la aplicación, solicitar la creación de un itinerario, en el cual solo se debe especificar los días de visita. Si el usuario considera que el itinerario sugerido lo realizaría teniendo en cuenta la climatología prevista, sus intereses en la ciudad y la duración, será validado.

- La información mostrada en los itinerarios se divide en una composición de actividades y sitios de interés por día, sobre los cuales se muestra: el nombre, una imagen, una breve descripción, la ubicación y los aspectos más importantes de la previsión del tiempo.
    - Criterio de validación: comprobar que en la base de datos no hay valores nulos en estos campos y al generar un itinerario, que se muestra correctamente al usuario. 

- Establecimiento de los gustos personales de un usuario, a través de tres variables: filtros seleccionados, sitios buscados y área geográfica transitada, pudiendo acotarse desde un barrio hasta una ciudad completa.
    -  Criterio de validación: mostrar al usuario el perfil creado por la aplicación, para comprobar si es acertado en sus intereses y zonas sugeridas.  

- Sugerencia de sitios de interés, en función de los gustos del usuario, que queden fuera del itinerario definido. Permite mostrar otros lugares de interés para el usuario, con un nivel de afinidad inferior a los incluidos en la ruta. 
    - Criterio de validación: mostrar las sugerencias de sitios de interés al usuario que este realizaría, solo teniendo en cuenta la afinidad y no el tiempo disponible para realizarla. 

- Elaboración de una lista de eventos y/o actividades clásicas o puntuales que se van a realizar en el próximo mes, mostrando al usuario solo las que coincidan con su estancia, proporcionando: el nombre, la ubicación, una descripción básica y opcionalmente el precio. 
    - Criterio de validación: una lista de eventos y/o actividades almacenados con un horizonte temporal de un mes, que nunca esté vacía. 

### Mapa

- Creación de la ruta de un día concreto del itinerario sobre el mapa, conectando los sitios de interés y/o actividades. El orden de los sitios de la ruta se establece en función de la distancia, siendo de menor a mayor distancia. 
    - Criterios de validación: la ruta trazada debe incluir todos los sitios de interés y/o actividades definidos en el día seleccionado del itinerario, estando ordenados de menor a mayor distancia 

- Creación de rutas personalizadas a cada usuario, en función de su ubicación y duración deseada. Para poder crear la ruta, el usuario solo tendrá que especificar el tiempo del trayecto, acorde a las medidas de tiempo aceptadas (horas y minutos). 
    - Criterio de validación: el comienzo de la ruta trazada debe coincidir con la posición actual del usuario y que su duración sea igual o inferior a la introducida, pero nunca superior.
   
- Localización de los sitios de interés con marcadores distintivos, en función de su temática, sobre el mapa 
    - Criterio de validación: todos los sitios de interés almacenados en la base datos deberán tener asociado un marcador distintivo y representativo de su temática, ubicándose correctamente sobre el mapa. 

- Establecimiento de filtros sobre el mapa: deportivo, musical, restaurantes típicos, cines, alojamientos, ocio nocturno.
    - Criterio de validación: al seleccionar un filtro, comprobar que las etiquetas de los sitios de interés, establecimientos y/o actividades recuperadas de la base de datos se asocian a dicho filtro.

- Filtrar restaurantes en función del tipo de comida 
    - Criterio de validación: comprobar que todos los restaurantes recuperados de la base de datos, tras aplicar el filtro, están asociados a ese tipo de comida. 

- Filtrar discotecas en función de tipo de música, precio y popularidad
    -  Criterio de validación: comprobar que todos las discotecas recuperadas de la base de datos, tras aplicar el filtro, están asociados a cualquiera de esos criterios, permitiendo la libre combinación o uso de los mismos.

- Establecer un semáforo de colores (rojo, ámbar y verde), en función de la seguridad de los barrios, sobre el mapa. Complementarlo con una descripción, indicando que: el color rojo indica que en ese barrio no se debería entrar, el color ámbar que hay que tener cuidado y el color verde que es medianamente seguro. 
    - Criterio de validación: el mapa debe mostrar en todo momento los barrios coloreados de la ciudad, atendiendo a un semáforo de colores y poder visualizar una leyenda al pulsar sobre el barrio coloreado. 

- Localización de los establecimientos y/o lugares en el mapa que tienen wifi gratis, que anuncian este servicio en su página web.  
    - Criterio de validación: resaltar sobre el mapa las zonas de alcance de los lugares que tienen wifi gratis. 

- Recomendaciones para comer situadas en la ruta turística o en las proximidades, siendo un máximo de 200 metros. Si lo realiza podrá continuar con la ruta, desde el momento en el que la dejó. 
    - Criterio de validación: los restaurantes recomendados deben estar en la propia ruta o a menos de 200 metros de distancia de la posición en la que el usuario solicita este servicio. 
    
- Recomendaciones de actividades culturales y turísticas en la ruta turística o en las proximidades, siendo un máximo de 500 metros. Si la realiza podrá continuar con la ruta, desde el momento en el que la dejó. 
    - Criterio de validación: los actividades recomendadas deben estar en la propia ruta o a menos de 500 metros de distancia de algún punto del trazado de la ruta. 
  
- Recomendar rutas alternativas dependiendo de cambios drásticos en el clima o previsiones incorrectas.
    - Criterio de validación: por cambio bruscos en el clima o fallo en la previsión inicial, la aplicación deberá sugerir una ruta más acorde a la climatología actual y desde la posición actual del usuario.
   
- Suministrar información de un sitio de interés, en función de la geolocalización del usuario, a través de un icono que le proporcionará una descripción en mediante formato audio.
    - Criterio de validación: Dar la posibilidad al usuario de acceder a información a través de la aplicación en formato audio para entender donde está ubicado y sobre el sitio de interés. 

- Generación de rutas eficientes combinando opciones de transporte público y privado.
    - Criterio de validación: muestra las rutas más óptimas de forma gráfica sobre el mapa, utilizando transporte público, privado o combinaciones de ambas.

- Notificaciones en tiempo real al utilizar el transporte público y privado.
    - Criterio de validación: envío de una notificación al usuario en el momento que está a una distancia inferior a 200 metros del destino y una vez en el destino. 

- Mostrar sobre el mapa los puntos en los que se sitúan patinetes y motos de nuestra empresa, complementado con opciones de car-sharing en la zona
    - Criterio de validación: visualizar en tiempo real y sobre el mapa, los coches de car-sharing disponibles en la zona y los puntos de alquiler patinetes y motos
    
- Comprobar disponibilidad o reservar plazas de parking en la ciudad en tiempo real
    - Criterio de validación: resaltar sobre el mapa los distintos parkings y devolver el número de plazas que hay disponibles en cada una de ellas

### Información turística

- Registro de los usuarios con la información básica a través de un formulario y creación de una cuenta en la aplicación
    - Criterio de validación: tener un formulario funcional de registro el cual permita al usuario ingresar información para crear una cuenta y que la cuenta sea registrada correctamente en la base de datos.
    
- Inicio de sesión del usuario a traves de un login para el uso de la aplicación
    - Criterio de validación: tener un formulario funcional de login donde el usuario escriba su usuario y contraseña y acceda correctamente a la aplicación
   


- Contar con un menú para la selección del idioma principal al cual la aplicación va a ser traducida, teniendo distintos idiomas como opción.
    - Criterio de validación: tener un menú dentro de la aplicación el cual permita cambiar de idioma, en el cual al seleccionar un idioma, que toda la aplicación sea traducida a este.

- Establecer alertas si el usuario se encuentra en una zona peligrosa en la que debería tener cuidado, alteraciones en el clima que puedan afectar al usuario y modificaciones o cancelaciones de transportes los cuales generen un inconveniente en los planes del usuario.
    - Criterio de validación: al estar en una zona o barrio peligroso que el usuario reciba alertas para tener cuidado, si el clima no va a favorecer la ruta entonces que el usuario reciba una alerta sobre esto, y si sucede algo con algún transporte que el usuario puede utilizar, que reciba una alerta explicando la situación.

- Informar sobre noticias o alertas que pueden impactar en la estancia del turista. Estan adaptadas a la ciudad en la que se encuentra dicho turista y ayudan a mantenerle informado y al día.
    - Criterio de validación: Mantener al usuario informado en todo momento sobre noticias que han o están ocurriendo en esa ciudad y que pueden afectar a la estancia del usuario, a través de la applicación usando notificaciones o solamente dentro de la app. 

- Proporcionar los datos de contacto e información básica de alojamientos y restaurantes para reservar o pedir comida a domicilio.
    - Criterio de validación: Usuario tiene la posibilidad de obtener datos de contacto ya sea teléfonicamente o mediante email de alojamientos o restaurantes. 

- Permitir que el usuario pueda añadir reseñas y valoraciones en los sitios visitados       
    - Criterio de validación: el usuario pueda añadir comentarios y valorarlo con un puntaje. 

- Acompañar los sitios de interés de una descripción básica pero completa, junto con reseñas y valoraciones de otros usuarios.
    - Criterio de validación: Usuario obtiene una explicación del sitio de interés y al mismo tiempo puede ver las valoraciones de otros usuarios que le pueden ayudar a saber si le interesa. 

- Implementar un desplegable de un conversor de moneda automático a la divisa que elija el usuario al visualizar cualquier tipo de precio en la aplicación
    - Criterio de validación: que la aplicación cuente con un menú donde puedas elegir la divisa a la cual los precios van a ser automáticamente convertidos y que los precios sean mostrados en la divisa elegida y en la local de el lugar donde se encuentra el usuario.


## Requisitos no funcionales

- Aplicación Web que pueda ser visualizada en la versión actual de Safari.
    - Criterio de validación: visualizar la aplicación en el navegador Safari y comprobar que todos los elementos se cargan correctamente.
    
- Aplicación Web que pueda ser visualizada en la versión actual de Chrome.
    - Criterio de validación: visualizar la aplicación en el navegador Chrome y comprobar que todos los elementos se cargan correctamente.

- Aplicación Web que pueda ser visualizada en la versión actual de Firefox.
    - Criterio de validación: visualizar la aplicación en el navegador Firefox y comprobar que todos los elementos se cargan correctamente.

- Aplicacion con *Web Responsive Design* para el tamaño de pantalla pequeño (móvil).
    - Criterio de validación: visualizar la aplicación desde un móvil y comprobar que los elementos se ajustan al tamaño de la pantalla.

- Aplicacion con *Web Responsive Design* para el tamaño de pantalla mediano (tablet).
    - Criterio de validación: visualizar la aplicación desde una tablet y comprobar que los elementos se ajustan al tamaño de la pantalla.

- Aplicacion con *Web Responsive Design* para el tamaño de pantalla grande (ordenador).
    - Criterio de validación: visualizar la aplicación desde un ordenador y comprobar que los elementos se ajustan al tamaño de la pantalla.
    
- Tiempo de respuesta inferior a dos segundos.
    - Criterio de validación: medir el tiempo desde que se lanza una petición hasta que el cliente obtiene una respuesta y comprobar que es inferior a dos segundos.

- Soportar una carga de cien solicitudes por minuto. 
    - Criterio de validación: hacer una prueba de estrés de cien solicitudes durante una hora, para asegurar que la aplicación es capaz de soportar esa carga. 

- La información sensible de los usuarios tiene que ser encriptada, para ser almacenada en la base de datos, utilizando mecanismos de encriptación seguros.
    - Criterios de validación: al devolver la información sensible de los usuarios almacenada en la base de datos, esta tiene que estar encriptada y no ser legible.
