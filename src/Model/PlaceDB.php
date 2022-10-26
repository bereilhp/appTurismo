<?php

namespace App\Model;

require_once __DIR__ ."/../../src/Model/Database.php";
//require_once '../Model/Database.php';

/**This classs handles the user queries against the database */
class PlaceDB
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

	public function insertPlaceData($description_place, $schedule, $id_icon, $latitude, $longitude)
	{
		try{
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO place (description_place, schedule, id_icon, latitude, longitude) VALUES ('$description_place', '$schedule', '$id_icon', '$latitude', '$longitude')";
			$this->connection->exec($sql);
			return true;
		}
		catch (\PDOException $e) {
			$this->exceptionSQL = $sql;
			$this->exceptionPDO = $e->getMessage();
			return false;
		}
	}

	public function getDescriptionPlace(){
		try{
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT description_place from place";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll(\PDO::FETCH_COLUMN);
			return $result;

		}
		catch (\PDOException $e) {
			$this->exceptionSQL = $sql;
			$this->exceptionPDO = $e->getMessage();
			return null;
		}
	}

	public function getSchedule(){
		try{
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT schedule from place";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll(\PDO::FETCH_COLUMN);
			return $result;

		}
		catch (\PDOException $e) {
			$this->exceptionSQL = $sql;
			$this->exceptionPDO = $e->getMessage();
			return null;
		}
	}

    /*
    public function GetDataTag($name, $description_place)
	{

    $sql = "SELECT * FROM place";
    $result = $conn->query($sql);

    try
    {
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br> id: ". $row["id_place"]. " - Desccription: ". $row["description_place"]. " Schedule: " . $row["schedule"]. " Icon_ID " . $row["id_icon"]. " Coordinates: " . $row["coordinates"]. "<br>";
            }   
        } else {
            echo "0 results";
        }
            
			
	}catch (\PDOException $e) {
			$this->exceptionSQL = $sql;
			$this->exceptionPDO = $e->getMessage();
			return false;
		}
	}*/


	
	
}
