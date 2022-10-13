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

	
    public function insertIconData($icon_category, $image_icon)
	{
		try{
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO icon (icon_category, image_icon) VALUES ('$icon_category', '$image_icon')";
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
