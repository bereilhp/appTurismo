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
        $name = "Jaime";
        $surname = "Ruiz";
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
        $name = "José";
        $surname = "Gómez";
        $email = "josegomez@gmail.com";
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
        $name = "Paula";
        $surname = "Gutiérrez";
        $email = "pg@gmail.com";
        $password = "pau!123";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $name = "Paula";
        $surname = "Gutiérrez";
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
        $name = "José";
        $surname = "Gómez";
        $email = "josegomez@gmail.com";
        $password = "josé1";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        
        $name = "José María";
        $surname = "Gómez";
        $email = "josegomez@gmail.com";
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
    
    /** This test checks that a user can log in when it's already registered */
    public function testcheckUserExists():void
    {
        $name = "Antonio";
        $surname = "Pérez";
        $email = "aperez123@gmail.com";
        $password = "antonio";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password); 

        $idExpected = $obj->checkUserExists($email, $password);

        assertTrue ($idExpected > 0, "The user's id is in the right range");
        //users that are not logged in, their id is 0.  
    }

    /** This test checks that a user can not log in when it's not registered  */
    public function testcheckNotUserExists():void
    {
        $email = "anaramos@gmail.com";
        $password = "anaRamos";
        
        $obj = new App\Model\UserDB("madwayTest");
        $existance = $obj->checkUserExists($email, $password);

        assertEquals($existance, 0, "The user does  exist in the database");
    }

    /**This test checks the ID_USER for the session at the beginning*/
    public function testcheckSessionBeginning():void
    {
        assertEquals($_SESSION['ID_USER'], 0, "The initial session ID_USER value is wrong");
    }

    /**This test checks the ID_USER for the session at the beginning*/
    public function testcheckSessionAfterInsert():void
    {
        $name = "John";
        $surname = "Smith";
        $email = "john@gmail.com";
        $password = "johnsmith";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $obj->checkUserExists($email, $password);

        assertEquals($_SESSION['ID_USER'], 1, "The session ID_USER value is wrong after insert");
    }

    /**This test checks the user's first name, surname and email are correct according to the form pattern*/
    public function testcheckNameSurnameEmailPatternCorrect():void
    {
        $name = "Anna";
        $surname = "Johnson";
        $email = "anjohnson34@hotmail.com";
        $password = "An%naJohn/son34";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first and middle name, surname and email are correct according to the form pattern*/
    public function testcheckName2SurnameEmailPatternCorrect():void
    {
        $name = "Anna Katherine";
        $surname = "Johnson";
        $email = "anjohnson34@hotmail.com";
        $password = "An%naJohn/son34";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first and middle name, surnames and email are correct according to the form pattern*/
    public function testcheckNameSurname2EmailPatternCorrect():void
    {
        $name = "Anna Katherine";
        $surname = "Johnson Sánchez";
        $email = "anjohnson34@hotmail.com";
        $password = "An%naJohn/son34";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first name, double-barrelled surnames and email are correct according to the form pattern*/
    public function testcheckNameSurname3EmailPatternCorrect():void
    {
        $name = "Lucía";
        $surname = "López-Marín Estecha";
        $email = "luci_lm@hotmail.com";
        $password = "luciaLopezMarin";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first name, surnames and email are correct according to the form pattern (polish)*/
    public function testcheckNameSurnameEmailPatternCorrectPolish():void
    {
        $name = "Żóbr";
        $surname = "Jaź-Gęś";
        $email = "zobrjaz@gmail.com";
        $password = "12345";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first name, surnames and email are correct according to the form pattern (german)*/
    public function testcheckNameSurnameEmailPatternCorrectGerman():void
    {
        $name = "Trißtan";
        $surname = "Müller";
        $email = "gunter_muller@gmail.com";
        $password = "12345ASDF";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first name, surnames and email are correct according to the form pattern (french)*/
    public function testcheckNameSurnameEmailPatternCorrectFrench():void
    {
        $name = "Adèle";
        $surname = "Coûteaux";
        $email = "ad.couteau@gmail.com";
        $password = "adel1234";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first name, surnames and email are correct according to the form pattern (swedish)*/
    public function testcheckNameSurnameEmailPatternCorrectSwedish():void
    {
        $name = "Åsa";
        $surname = "Åström";
        $email = "asaastrom@gmail.com";
        $password = "asaastrom";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first name, surnames and email are not correct according to the form pattern (chinese)*/
    public function testcheckNameSurnameEmailPatternCorrectChinese():void
    {
        $name = "香";
        $surname = "黄";
        $email = "xianghuang@gmail.com";
        $password = "xiang";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(0, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first name is not correct according to the form pattern (starts with lowercase)*/
    public function testcheckNamePatternIncorrectLowercase():void
    {
        $name = "anna";
        $surname = "johnson";
        $email = "anjohnson34@hotmail.com";
        $password = "An%naJohn/son34";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(0, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first name is not correct according to the form pattern (contains numbers)*/
    public function testcheckNamePatternIncorrectNumbers():void
    {
        $name = "anna23";
        $surname = "34Johnson";
        $email = "anjohnson34@hotmail.com";
        $password = "An%naJohn/son34";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(0, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's first name is not correct according to the form pattern (contains invalid characters)*/
    public function testcheckNamePatternIncorrectInvalidCharacters():void
    {
        $name = "anna%";
        $surname = "!Johnson";
        $email = "anjohnson34@hotmail.com";
        $password = "An%naJohn/son34";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(0, $numberRow, "The number of rows in the database does not match the number of insertions");
    }

    /**This test checks the user's email is correct according to the form pattern*/
    public function testcheckEmailPatternCorrect():void
    {
        $name = "Anna";
        $surname = "Johnson";
        $email = "anna.johnson34@info.company.com";
        $password = "An%naJohn/son34";

        $obj = new App\Model\UserDB("madwayTest");
        $obj->insertUserData($name, $surname, $email, $password);

        $stmt = $obj->getConnection()->prepare("SELECT * FROM user");
		$stmt->execute();

		$numberRow = $stmt->rowCount();
        
		assertEquals(1, $numberRow, "The number of rows in the database does not match the number of insertions");
    }
}
