<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

//require_once "userDB.php";
//require_once __DIR__ . '/../../vendor/autoload.php';

//require_once __DIR__ ."config.php";

//require_once __DIR__ ."/../../src/model/database.php";

//require_once __DIR__ ."/../../src/model/userDB.php";


class UserDBTest extends TestCase
{
    /** This test checks if a user data insertion can be performed against the database */
    public function testInsertUserData():void
    {
        $name = "jaime";
        $surname = "ruiz";
        $email = "jaimeruiz@gmail.com";
        $password = "jaime";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);
         
	    $stmt = $obj->getConection()->prepare("SELECT * FROM user WHERE email='$email'");
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $row = $stmt->fetch();

        assertEquals($row["name"]    , $name    , "Name does not match");
        assertEquals($row["surname"] , $surname , "Surname does not match");
        assertEquals($row["email"]   , $email   , "Email does not match");
        assertEquals($row["password"], $password, "Password does not match");
		
        $sql = "DELETE FROM user WHERE email='$email'";
        $obj->getConection()->exec($sql);
    }

    /** This test checks if a user data insertion (spanish charset) can be performed against the database */
    public function testInsertUserDataSpanish():void
    {
        $name = "josé";
        $surname = "gómez";
        $email = "joségómez@gmail.com";
        $password = "josé";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);
         
	    $stmt = $obj->getConection()->prepare("SELECT * FROM user WHERE email='$email'");
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $row = $stmt->fetch();

        assertEquals($row["name"]    , $name    , "Name does not match");
        assertEquals($row["surname"] , $surname , "Surname does not match");
        assertEquals($row["email"]   , $email   , "Email does not match");
        assertEquals($row["password"], $password, "Password does not match");
		
        $sql = "DELETE FROM user WHERE email='$email'";
        $obj->getConection()->exec($sql);
    }

    /** This test checks that a user can be register with same values except the email (primary key) */
    public function testNotInsertUserDataEmail():void
    {
        $name = "paula";
        $surname = "gutiérrez";
        $email = "pg@gmail.com";
        $password = "pau!123";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $name = "paula";
        $surname = "gutiérrez";
        $email = "paugutierrez@yahoo.es";
        $password = "pau!123";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);
         
	    $stmt = $obj->getConection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals($numberRow, 2, "Number of rows does not match");

        $sql = "DELETE FROM user";
        $obj->getConection()->exec($sql);

    }

    /** This test checks that a user can not be register if their email is early used */
    /**public function testNotInsertUserDataEmail():void
    {
        $name = "josé";
        $surname = "gómez";
        $email = "joségómez@gmail.com";
        $password = "josé1";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $name = "josé maría";
        $surname = "gómez";
        $email = "joségómez@gmail.com";
        $password = "josé2";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);
         
	    $stmt = $obj->getConection()->prepare("SELECT * FROM user WHERE email='$email'");
		$stmt->execute();

		$numberRow = $stmt->rowCount();

		assertEquals($numberRow, 1, "Number of rows does not match");
    }
    */

    /** This test checks if a user data insertion with missing values can not be performed against the database */
    /**public function testNotInsertUserData():void
    {
        $name = "josé";
        $surname = "gómez";
        $email = null;
        $password = "josé";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);
         
	    $stmt = $obj->getConection()->prepare("SELECT * FROM user WHERE email='$email'");
		$stmt->execute();

		$numberRow = $stmt->rowCount();

		assertEquals($numberRow, 0, "Number of rows does not match");
    }
    */
    
}
