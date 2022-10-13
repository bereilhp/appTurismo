<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

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
        $id_icon = "3";
        $coordinate = "POINT(40.43633 -3.59948)";

        $obj = new App\Model\PlaceDB("madwayTest");
        $obj->insertPlaceData($description_place, $schedule, $id_icon, $coordinate);
         
	    $stmt = $obj->getConnection()->prepare("SELECT description_place, schedule, id_icon, asText(coordinate) FROM place WHERE id_icon = $id_icon");
		$stmt->execute();

		$row = $stmt->fetch();

        assertEquals($description_place, $row["description_place"], "Inserted description place does not match the specified one");
        assertEquals($schedule,          $row["schedule"],          "Inserted place schedule does not match the specified one");
        assertEquals($id_icon,           $row["id_icon"],           "Inserted place id_icon does not match the specified one");
        assertEquals($coordinate,        $row["asText(coordinate)"],        "Inserted place coordinate does not match the specified one");
    }

}
