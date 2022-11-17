# MadWay 

Esta aplicación se enfoca en los turistas a corto plazo que visitan nuestra ciudad (Madrid), para proporcionarles una experiencia inolvidable.  
Desde proporcionar itinerarios y rutas en función de los gustos del usuario y su disponibilidad, hasta proporcionarte cualquier tipo de información útil para un viajero.  

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

