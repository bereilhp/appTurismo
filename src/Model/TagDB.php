<?php

namespace App\Model;

require_once __DIR__ ."/../../src/Model/Database.php";
//require_once '../Model/Database.php';

/**This classs handles the user queries against the database */
class MapDB
{

	private $connection;
	private $exceptionSQL;
	private $exceptionPDO;
	

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

	
    public function insertTagData($name, $description_place)
	{
		try{
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO tag (name, description_place) VALUES ('$name', '$description_place')";
			$this->connection->exec($sql);
			return true;
		}
		catch (\PDOException $e) {
			$this->exceptionSQL = $sql;
			$this->exceptionPDO = $e->getMessage();
			return false;
		}
	}

    	
}
