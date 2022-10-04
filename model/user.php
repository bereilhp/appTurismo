<?php 

/**This classs handles the queries against the database */
class User {

	private $table = 'user';
	private $conection;

	public function __construct() {
		
	}

	/* Set conection */
	public function getConection(){
		$dbObj = new Database();
		$this->conection = $dbObj->conection;
	}

}

?>