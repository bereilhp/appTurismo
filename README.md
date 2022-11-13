# MadWay 

Esta aplicación se enfoca en los turistas a corto plazo que visitan nuestra ciudad (Madrid), para proporcionarles una experiencia inolvidable.  
Desde proporcionar itinerarios y rutas en función de los gustos del usuario y su disponibilidad, hasta proporcionarte cualquier tipo de información útil para un viajero.  

## ¿Cómo replicar el entorno de pruebas?
El entorno de pruebas, llamado PHPUnit, se ha instalado a través del uso de Composer (sistema de gestión de paquetes de PHP).  
Para instalar y configurar el entorno de pruebas es necesario ejecutar los siguientes comandos (SO Ubuntu):  
1. Instalar a través de composer: composer require --dev phpunit/phpunit ^9
2. Probar que se ha instalado correctamente: ./vendor/bin/phpunit --version
3. Crear un archivo composer.json con las siguientes directivas:  
		
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
  
Nota: tener claro que ahora se van a tener que usar las directivas namespace en las clases que se van a querer instanciar en el entorno de pruebas. Ej: namespace App\Controller.  
4. Crear el archivo vendor/autoload.php: composer dump-autoload  
5. Ejecutar los test: ./vendor/bin/phpunit tests

