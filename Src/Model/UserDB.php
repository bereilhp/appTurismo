<?php

namespace App\Model\UserDB;

require_once '../Model/Database.php';

/**This classs handles the user queries against the database */
class UserDB
{

	//private $table;
	private $conection;
	//private $sql;

	public function __construct($test=false)
	{
		$dbObj = new \App\Model\Database($test);
		$this->conection = $dbObj->conection;
	}

	public function __destruct()
	{
		$this->conection = null;
	}

	public function getConection(){
		return $this->conection;
	}

	public function insertUserData($name, $surname, $email, $password)
	{
		try{
			$this->conection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO user (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
			$this->conection->exec($sql);
		}
		catch (\PDOException $e) {
			echo $sql . "<br>" . $e->getMessage();
			exit;
		}
	}

	public function checkUserExits($email, $password)
	{

		try {
			$this->conection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$stmt = $this->conection->prepare("SELECT email, password FROM user WHERE email='$email' AND password='$password'");
			$stmt->execute();

			
		} catch (\PDOException $e) {
			echo "Error: " . $e->getMessage();
			exit;
		}
		
		$numberRow = $stmt->rowCount();

		if ($numberRow == 1) {
			return true;
		}
		return false;
	}
}
