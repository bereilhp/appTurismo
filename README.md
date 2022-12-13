# MadWay 

Esta aplicación se enfoca en los turistas a corto plazo que visitan nuestra ciudad (Madrid), para proporcionarles una experiencia inolvidable.  

Desde proporcionar itinerarios y rutas en función de los gustos del usuario y su disponibilidad, hasta proporcionarte cualquier tipo de información útil para un viajero.  

Link aplicación: https://appwebmadway.000webhostapp.com/src/View/login.html

## Dependencias

### XAMPP para Linux
Los pasos para instalar XAMPP, en SO Ubuntu, han sido: 
1. Descargar XAMPP para Linux [aquí](https://www.apachefriends.org/download.html)  
2. Dar al instalador permisos de ejecución: `sudo chmod +x xampp-linux-x64-...-installer.run`  
3. Ejecutar el instalador: `sudo ./xampp-linux-x64-...-installer.run`. Se instala en el directorio `opt/lampp`  
4. Ir a `Manage Servers`, para activar `MySQL Database` y `Apache Web Server`. Simplemente hay que seleccionar el servidor y pulsar el botón de `Start`.  
5. En el navegador, escribir `localhost` y debería salir la página de bienvenida de XAMPP.   
6. Para iniciar todos los servicios desde el terminal: `sudo /opt/lampp/lampp start`. Equivalentemente para pararlos: `sudo /opt/lampp/lampp stop`.  
7. Los contenidos que se quieran visualizar en el navegador, deberán estar en el directorio `/opt/lampp/htdocs` y con permisos de ejecución `sudo chmod 755` al archivo o carpeta.

### Leaflet

[Leaflet](https://leafletjs.com/) es la principal biblioteca JavaScript de código abierto para mapas interactivos. Está diseñada teniendo en cuenta la simplicidad, el rendimiento y la facilidad de uso. Funciona de manera eficiente en todas las principales plataformas móviles y de escritorio, se puede ampliar con muchos plugins, tiene una API, fácil de usar y bien documentada y un código fuente simple y legible al que es un placer contribuir.

En nuestro caso usamos varios plugins para hacer leaflet más funcional como por ejemplo:
- [Geolet](https://github.com/rhlt/leaflet-geolet): Un complemento de geolocalización simple pero altamente personalizable para Leaflet
- [Legend](https://github.com/ptma/Leaflet.Legend): Mostrar símbolos de leyenda y alternar superposiciones.


Usamos también una API de routing llamada [Leaflet Routing Machine API](https://www.liedman.net/leaflet-routing-machine/api/) para ayudarnos a implementar la creación de rutas. 

Para añadir leaflet a nuetra aplicación añadimos a nuestro código scripts y links css que nos deja utilizar toda la funcionanlidad de leaflet. 

> Nota: Para mas información mirar este [tutorial](https://leafletjs.com/examples/quick-start/)

Añadimos estas dos conexiones a map.html para que funcione correctamente.

Conexión a página de estilos de leaflet:
```
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
````

Conexión a todo la funcionalidad del mapa:
```
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
```


## ¿Cómo replicar el entorno de pruebas?
El entorno de pruebas, llamado PHPUnit, se ha instalado a través del uso de Composer (sistema de gestión de paquetes de PHP).  
Para instalar y configurar el entorno de pruebas es necesario ejecutar los siguientes comandos (SO Ubuntu):
1. Instalar PHPUnit: `sudo apt-get install phpunit`. Se debería haber instalado en la ruta `/usr/share/php/`  
2. Instalarlo como una dependencia del proyecto a través de composer: `composer require --dev phpunit/phpunit ^9`
3. Probar que se ha instalado correctamente: `./vendor/bin/phpunit --version`
4. Crear un archivo composer.json con las siguientes directivas (o incluir la relativa a psr-4):		
~~~
{
	"require-dev": {
		"phpunit/phpunit": "^9.5"  
	}, 

   	"autoload-dev": {
		"psr-4": {
			"App\\": "src/"
		}
	}
}
~~~   
Para que funcione psr-4 es necesario que **todos los nombres de los archivos estén en mayúsculas**. 
Nota: tener claro que ahora se van a tener que usar las directivas `namespace` en las clases que se van a querer instanciar en el entorno de pruebas y las relacionadas con estas (ej: `namespace App\Model`), para las cuales habrá que especificar todo el namespace completo (ej: `new App\Model\UserDB("madwayTest")`)       
5. Crear el archivo vendor/autoload.php: `composer dump-autoload`  
6. Las clases de tests tienen que tener la directiva `use PHPUnit\Framework\TestCase;` y heredar de la clase TestCase (ej: `class UserDBTest extends TestCase`)    
7. Ejecutar los test: `./vendor/bin/phpunit tests`  

