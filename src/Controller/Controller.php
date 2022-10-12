<?php 

namespace App\Controller;

require_once '../Model/UserDB.php';

/**This class handles the requests from the view, returning or modifying information from the model*/
class Controller{

	public function __construct() {
		$this->userObj = new \App\Model\UserDB();
	}

	public function receiveUserData(){
		/* User information sent by the form */
		if(isset($_POST["name"], $_POST["surname"], $_POST["email"], $_POST["password"])){
			$name = $_POST["name"];
			$surname = $_POST["surname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$this->userObj->insertUserData($name, $surname, $email, $password);
		} 
		
	}

	public function checkUserData(){
		/* User information sent by the form */
		if(isset($_POST["email"])){
			$email = $_POST["email"];
			$password = $_POST["password"];
		} 
		
		return $this->userObj->checkUserExits($email, $password);
	}
}

$controlador = new Controller();


?>