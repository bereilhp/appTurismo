<?php

namespace App\Model;

if(!isset($_SESSION)) 
{ 
	session_start(); 
}

require_once __DIR__ ."/../../src/Model/Database.php";
//require_once '../Model/Database.php';

/**This classs handles the user queries against the database */
class UserDB
{

	private $connection;
	private $exceptionSQL;
	private $exceptionPDO;
	private $id;
	

	public function __construct($test=false)
	{
		$dbObj = new \App\Model\Database($test);
		$this->connection = $dbObj->getConnection();
	}

	public function __destruct()
	{
		$this->connection = null;
	}

	public function getConnection(){
		return $this->connection;
	}

	public function getExceptionSQL(){
		return $this->exceptionSQL;
	}

	public function getExceptionPDO(){
		return $this->exceptionPDO;
	}

	public function getIdUser(){
		return $this->id;
	}

	public function insertUserData($name, $surname, $email, $password)
	{
		try{
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO user (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
			$this->connection->exec($sql);
			return true;
		}
		catch (\PDOException $e) {
			$this->exceptionSQL = $sql;
			$this->exceptionPDO = $e->getMessage();
			return false;
		}
	}

	public function checkUserExists($email, $password)
	{
		try {
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$stmt = $this->connection->prepare("SELECT id_user FROM user WHERE email='$email' AND password='$password'");
			$stmt->execute();	
		} catch (\PDOException $e) {
			echo "Error: " . $e->getMessage();
			$this->excepcionPDO = $e->getMessage();
		}
		
		$numberRow = $stmt->rowCount();

		if ($numberRow == 1) {
			$result = $stmt->fetch(\PDO::FETCH_ASSOC);
			$_SESSION['ID_USER']=$result['id_user'];
			return $result['id_user'];
		}
		return false;
	}

}
