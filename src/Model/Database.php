<?php 

namespace App\Model;

require_once __DIR__ ."/../Config/Config.php";

//require_once '../Config/Config.php';

/**This class handles sets the database properties*/
class Database {

	private $host;
	private $db;
	private $user;
	private $pass;
	private $connection;

	public function __construct($test=false) {		

		$this->host = constant('DB_HOST');
		$this->user = constant('DB_USER');
		$this->pass = constant('DB_PASS');

		if (!$test){
			$this->db = constant('DB');
		}
		else {
			$this->db = constant('DBTest');
		}

		try {
           $this->connection = new \PDO('mysql:host='.$this->host.'; dbname='.$this->db, $this->user, $this->pass);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }

	}

	public function getConnection(){
		return $this->connection;
	}

}

?>