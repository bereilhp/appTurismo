<?php 

/**This classs handles the queries against the database */
class UserDB {

	private $table;
	private $conection;
	private $sql;

	public function __construct() {
		$dbObj = new Database();
		$this->conection = $dbObj->conection;
	}

	public function __destruct()
	{
		$this->conection = null;
	}

	/* Set conection ¿Otra vez la conexión?*/
	public function getConection(){

	}

	public function insertUserData($name, $surname, $email, $password){
		$sql = "INSERT INTO User (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
		if ($this->conection->query($sql) === TRUE) {
			echo "New record created successfully";
		  } else {
			echo "Error: " . $sql . "<br>" . $this->conection->error;
		  }
	}

}
