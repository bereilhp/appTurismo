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

//WARNING: This method is not following the pattern in getPlaceData() method
	public function insertPlaceData($name_place, $schedule, $id_icon, $latitude, $longitude)
	{
		try{
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO place (name_place, schedule, id_icon, latitude, longitude) VALUES ('$name_place', '$schedule', '$id_icon', '$latitude', '$longitude')";
			$this->connection->exec($sql);
			return true;
		}
		catch (\PDOException $e) {
			$this->exceptionSQL = $sql;
			$this->exceptionPDO = $e->getMessage();
			return false;
		}
	}



	//super consulta
	public function getPlaceData(){
		try{
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * from place";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $result;

		}
		catch (\PDOException $e) {
			$this->exceptionSQL = $sql;
			$this->exceptionPDO = $e->getMessage();
			return null;
		}
	}



	public function getImage_Icon(){
		try{
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT image_icon from icon";
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
    public function GetDataTag($name, $name_place)
	{

    $sql = "SELECT * FROM place";
    $result = $conn->query($sql);

    try
    {
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br> id: ". $row["id_place"]. " - Desccription: ". $row["name_place"]. " Schedule: " . $row["schedule"]. " Icon_ID " . $row["id_icon"]. " Coordinates: " . $row["coordinates"]. "<br>";
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
