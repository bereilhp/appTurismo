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
    
}
