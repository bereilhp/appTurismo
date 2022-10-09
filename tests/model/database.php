<?php 

require_once 'config.php';

/**This class handles sets the database properties*/
class Database {

	private $host;
	private $db;
	private $user;
	private $pass;
	public $conection;

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
           $this->conection = new PDO('mysql:host='.$this->host.'; dbname='.$this->db, $this->user, $this->pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }

	}

}

?>