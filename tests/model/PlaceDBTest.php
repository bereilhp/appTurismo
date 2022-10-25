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
    /** This test checks if a user data insertion can be performed against the database */
    public function testInsertPlaceData():void
    {
       
        $description_place = "Estadio Civitas Metropolitano";
        $schedule = "10:00 - 19:00";
        $id_icon = 3;
        $latitude = 40.43633;
        $longitude =  -3.59948;

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($description_place, $schedule, $id_icon, $latitude, $longitude);
         
	    $stmt = $obj->getConnection()->prepare("SELECT * FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

		$row = $stmt->fetch();

        
        assertEquals($description_place, $row["description_place"], "Inserted place description does not match the specified one");
        assertEquals($schedule,          $row["schedule"],          "Inserted place schedule does not match the specified one");
        assertEquals($id_icon,           $row["id_icon"],           "Inserted place id_icon does not match the specified one");
        assertEquals($latitude,          $row["latitude"],          "Inserted place latitude does not match the specified one");
        assertEquals($longitude,         $row["longitude"],         "Inserted place longitude does not match the specified one");
        
        //$sql = "DELETE FROM place";
        //$obj->getConnection()->exec($sql);
    }

    public function testGetDescriptionPlace():void{
        $obj = new App\Model\PlaceDB("madwayTest");
        $expected = $obj->getDescriptionPlace();

        assertEquals("Estadio Civitas Metropolitano", $expected[0],"no funciona");
    }

}
