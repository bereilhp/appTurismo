<?php

use App\Model\UserDB;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

/**This class checks all methods regarding the user management */
/*
composer dump-autoload
./vendor/bin/phpunit tests --color
*/


class PlaceDBTest extends TestCase
{
        /** Create a database and tables required for the tests */
        /** Note that for testing table place, table icon must have data */
        protected function setUp():void
        {
            $servername = "localhost";
            $dbname = "madwayTest";
            $username = "root";
            $password = "";
    
            $db = new PDO("mysql:host=$servername", $username, $password);
    
            try {
                $sqlDatabase = "CREATE DATABASE madwayTest CHARACTER SET='utf8' COLLATE='utf8_bin'";
                $db->exec($sqlDatabase);
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $sqlIcon = "CREATE TABLE icon (id_icon INT NOT NULL AUTO_INCREMENT, icon_category VARCHAR(50) NOT NULL UNIQUE, image_icon VARCHAR(200) NOT NULL, PRIMARY KEY (id_icon))"; 
                $conn->exec($sqlIcon);

                $sqlDataIcon= "INSERT INTO icon (icon_category, image_icon) VALUES ('IconoDeportes', 'https://img.icons8.com/fluency/344/stadium-.png')";
                $conn->exec($sqlDataIcon);

                $sqlPlace = "CREATE TABLE place (id_place INT NOT NULL AUTO_INCREMENT, name_place VARCHAR(200) NOT NULL UNIQUE, schedule VARCHAR(50) NOT NULL, id_icon INT NOT NULL, latitude decimal(7,5) NOT NULL, longitude decimal(7,5) NOT NULL, PRIMARY KEY (id_place), FOREIGN KEY (id_icon) REFERENCES icon(id_icon))"; 
                $conn->exec($sqlPlace);
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
    
        /** Delete all tables and the database created */
        protected function tearDown(): void
        {
            $servername = "localhost";
            $dbname = "madwayTest";
            $username = "root";
            $password = "";
    
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            try {
                $sqlUser = "DROP DATABASE madwayTest";
                $conn->exec($sqlUser);
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
            
        }
    
    /** This test checks if a user data insertion can be performed against the database */
    public function testInsertPlaceDescription():void
    {
        $name_place = "Museo del prado";
        $schedule = "10:00 - 19:00";
        $id_icon = 1;
        $latitude = 40.41395;
        $longitude =  -3.69215;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT name_place FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

		$row = $stmt->fetch();

        assertEquals($name_place, $row["name_place"], "Inserted place description does not match the specified one");       
    }

    public function testInsertPlaceId_Icon():void
    {
        $name_place = "Museo del prado";
        $schedule = "10:00 - 19:00";
        $id_icon = 1;
        $latitude = 40.41395;
        $longitude =  -3.69215;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT id_icon FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

		$row = $stmt->fetch();

        assertEquals($id_icon, $row["id_icon"], "Inserted id_icon does not match the specified one");       
    }

    public function testInsertPlaceSchedule():void
    {
        $name_place = "Museo del prado";
        $schedule = "10:00 - 19:00";
        $id_icon = 1;
        $latitude = 40.41395;
        $longitude =  -3.69215;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT schedule FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

		$row = $stmt->fetch();

        assertEquals($schedule, $row["schedule"], "Inserted place schedule does not match the specified one");
               
    }

    public function testInsertPlaceLatitude():void
    {
        $name_place = "Museo del prado";
        $schedule = "10:00 - 19:00";
        $id_icon = 1;
        $latitude = 40.41395;
        $longitude =  -3.69215;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT latitude FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

		$row = $stmt->fetch();

        assertEquals($latitude, $row["latitude"], "Inserted latitude does not match the specified one");
               
    }

    public function testInsertPlaceLongitude():void
    {
        $name_place = "Museo del prado";
        $schedule = "10:00 - 19:00";
        $id_icon = 1;
        $latitude = 40.41395;
        $longitude =  -3.69215;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT longitude FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

		$row = $stmt->fetch();

        assertEquals($longitude, $row["longitude"], "Inserted longitude does not match the specified one");
               
    }


    public function testGetDescriptionPlace():void
    {
        $name_place = "Museo del prado";
        $schedule = "10:00 - 19:00";
        $id_icon = 1;
        $latitude = 40.41395;
        $longitude =  -3.69215;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT * FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

        $obj = new App\Model\PlaceDB("madwayTest");
        $expected = $obj->getDescriptionPlace();

        assertEquals("Museo del prado", $expected[0],"no funciona");
    }

    public function testGetSchedule():void
    {
        $name_place = "Museo del prado";
        $schedule = "10:00 - 19:00";
        $id_icon = 1;
        $latitude = 40.41395;
        $longitude =  -3.69215;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT * FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

        $obj = new App\Model\PlaceDB("madwayTest");
        $expected = $obj->getSchedule();

        assertEquals("10:00 - 19:00", $expected[0],"no funciona");
    }

    public function testGetIdIcon():void
    {
        $name_place = "Museo del prado";
        $schedule = "10:00 - 19:00";
        $id_icon = 1;
        $latitude = 40.41395;
        $longitude =  -3.69215;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT * FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

        $obj = new App\Model\PlaceDB("madwayTest");
        $expected = $obj->getId_Icon();

        assertEquals(1, $expected[0],"no funciona");
    }

    public function testGetLatitude():void
    {
        $name_place = "Museo del prado";
        $schedule = "10:00 - 19:00";
        $id_icon = 1;
        $latitude = 40.41395;
        $longitude =  -3.69215;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT * FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

        $obj = new App\Model\PlaceDB("madwayTest");
        $expected = $obj->getLatitude();

        assertEquals(40.41395, $expected[0],"no funciona");
    }

    public function testGetLongitude():void
    {
        $name_place = "Museo del prado";
        $schedule = "10:00 - 19:00";
        $id_icon = 1;
        $latitude = 40.41395;
        $longitude =  -3.69215;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT * FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

        $obj = new App\Model\PlaceDB("madwayTest");
        $expected = $obj->getLongitude();

        assertEquals(-3.69215, $expected[0],"no funciona");
    }


}
