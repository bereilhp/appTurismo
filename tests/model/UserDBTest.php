<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

/**This class checks all methods regarding the user management */

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
         
	    $stmt = $obj->getConnection()->prepare("SELECT * FROM user WHERE email='$email'");
		$stmt->execute();

		$row = $stmt->fetch();

        assertEquals($name,     $row["name"],       "Inserted user name does not match the specified one");
        assertEquals($surname,  $row["surname"],    "Inserted user surname does not match the specified one");
        assertEquals($email,    $row["email"],      "Inserted user email does not match the specified one");
        assertEquals($password, $row["password"],   "Inserted user password does not match the specified one");

        $sql = "DELETE FROM user WHERE email='$email'";
        $obj->getConnection()->exec($sql);
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
		
        $sql = "DELETE FROM user WHERE email='$email'";
        $obj->getConnection()->exec($sql);
    }

    /** Case sensitive 
    public function testInsertUserDataCaseSensitive():void
    {
        
    }*/

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

        $sql = "DELETE FROM user";
        $obj->getConnection()->exec($sql);

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

        //¿Comprobar que este usuarios se ha registrado?, aunque lo haga otro test

        $name = "José María";
        $surname = "Gómez";
        $email = "joségómez@gmail.com";
        $password = "josé2";

        $obj->insertUserData($name, $surname, $email, $password);
        
        $exceptionRealSQL = $obj->getExceptionSQL();
        $exceptionExpectedSQL = "INSERT INTO user (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
    
        assertEquals($exceptionExpectedSQL, $exceptionRealSQL, "Not throwing the right SQL exception");

        $exceptionRealPDO = $obj->getExceptionPDO();
        $exceptionExpectedPDO = "SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '$email' for key 'PRIMARY'";
         
	    assertEquals($exceptionExpectedPDO, $exceptionRealPDO, "Not throwing the right PDO exception");

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();

		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
        
        $sql = "DELETE FROM user";
        $obj->getConnection()->exec($sql);
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

        $existance = $obj->checkUserExists($email, $password);

        assertTrue($existance, "The user does not exist in the database");

        $sql = "DELETE FROM user";
        $obj->getConnection()->exec($sql);
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
}
