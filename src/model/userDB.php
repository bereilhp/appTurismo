<?php

require_once '../model/database.php';

/**This classs handles the queries against the database */
class UserDB
{

	private $table;
	private $conection;
	private $sql;

	public function __construct()
	{
		$dbObj = new Database();
		$this->conection = $dbObj->conection;
	}

	public function __destruct()
	{
		$this->conection = null;
	}

	public function insertUserData($name, $surname, $email, $password)
	{
		$sql = "INSERT INTO user (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
		/** */
		if ($this->conection->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $this->conection->error;
		}
	}

	public function checkUserExits($email, $password)
	{
		/*$sql = "SELECT email, password FROM user WHERE email='$email' AND password='$password'";
		$result = $this->connection->query($sql);
		*/
		try {
			$this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $this->conection->prepare("SELECT email, password FROM user WHERE email='$email' AND password='$password'");
			$stmt->execute();

			
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		echo "Modelo";
		$numberRow = $stmt->rowCount();

		if ($numberRow == 1) {
			echo "Existe";
			return true;
		}
		return false;
	}
}
