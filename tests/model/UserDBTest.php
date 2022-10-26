<?php

session_start();

$_SESSION['ID_USER']=0;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

/**This class checks all methods regarding the user management */

class UserDBTest extends TestCase
{
    
    /** Create a database and tables required for the tests */
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

            $sqlUser = "CREATE TABLE user (id_user INT NOT NULL AUTO_INCREMENT, name VARCHAR(30) NOT NULL, surname VARCHAR(20) NOT NULL, email VARCHAR(50) UNIQUE, password VARCHAR(20) NOT NULL, PRIMARY KEY (id_user))"; 
            $conn->exec($sqlUser);
            
            //$sql = file_get_contents("prueba.txt");
            //$db->exec($sql);
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

            $_SESSION['ID_USER']=0;
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    
    /** This test checks if a user data insertion can be performed against the database */
    public function testInsertUserData():void
    {
        $name = "jaime";
        $surname = "ruiz";
        $email = "jaimeruiz@gmail.com";
        $password = "jaime";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);
         
	    $stmt = $obj->getConnection()->prepare("SELECT * FROM user WHERE email='$email'");
		$stmt->execute();

		$row = $stmt->fetch();

        assertEquals($name,     $row["name"],       "Inserted user name does not match the specified one");
        assertEquals($surname,  $row["surname"],    "Inserted user surname does not match the specified one");
        assertEquals($email,    $row["email"],      "Inserted user email does not match the specified one");
        assertEquals($password, $row["password"],   "Inserted user password does not match the specified one");
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
         
	    $stmt = $obj->getConnection()->prepare("SELECT * FROM user WHERE email='$email'");
		$stmt->execute();

		$row = $stmt->fetch();

        assertEquals($name,     $row["name"],       "Inserted user name does not match the specified one");
        assertEquals($surname,  $row["surname"],    "Inserted user surname does not match the specified one");
        assertEquals($email,    $row["email"],      "Inserted user email does not match the specified one");
        assertEquals($password, $row["password"],   "Inserted user password does not match the specified one");
    }

    /** This test checks that a user can be registered with same values, except the email (primary key) */
    public function testInsertUserDataDifferentEmail():void
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

        $obj->insertUserData($name, $surname, $email, $password);
         
	    $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(2, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /** This test checks that a user can not be registered if their email is early used */
    public function testInsertUserDataSameEmail():void
    {
        $name = "josé";
        $surname = "gómez";
        $email = "joségómez@gmail.com";
        $password = "josé1";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        
        $name = "José María";
        $surname = "Gómez";
        $email = "joségómez@gmail.com";
        $password = "josé2";

        $obj->insertUserData($name, $surname, $email, $password);
        
        $exceptionRealSQL = $obj->getExceptionSQL();
        $exceptionExpectedSQL = "INSERT INTO user (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
    
        assertEquals($exceptionExpectedSQL, $exceptionRealSQL, "Not throwing the right SQL exception");

        $exceptionRealPDO = $obj->getExceptionPDO();
        $exceptionExpectedPDO = "SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '$email' for key 'email'";
         
	    assertEquals($exceptionExpectedPDO, $exceptionRealPDO, "Not throwing the right PDO exception");

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();

		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
    }
    
    /** This test checks that a user can login when it's already registered */
    public function testcheckUserExists():void
    {
        $name = "antonio";
        $surname = "pérez";
        $email = "aperez123@gmail.com";
        $password = "antonio";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        //$idCurrent = SELECT id_user... 

        $idExpected = $obj->checkUserExists($email, $password);

        assertTrue ($idExpected > 0, "The user's id is in the right range");
        //assertEquals(1, $idExpected, "The ID of the user does not match");
    }

    /** This test checks that a user can not login when it's already registered  */
    public function testcheckNotUserExists():void
    {
        $email = "anaramos@gmail.com";
        $password = "anaRamos";
        
        $obj = new App\Model\UserDB("madwayTest");
        $existance = $obj->checkUserExists($email, $password);

        assertFalse($existance, "The user does  exist in the database");
    }

    /**This test checks the ID_USER for the session at the beginning*/
    public function testcheckSessionBeginning():void
    {
        assertEquals($_SESSION['ID_USER'], 0, "The initial session ID_USER value is wrong");
    }

    /**This test checks the ID_USER for the session at the beginning*/
    public function testcheckSessionAfterInsert():void
    {
        $name = "john";
        $surname = "smith";
        $email = "john@gmail.com";
        $password = "johnsmith";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $obj->checkUserExists($email, $password);

        assertEquals($_SESSION['ID_USER'], 1, "The session ID_USER value is wrong after insert");
    }
}
