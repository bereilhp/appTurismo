<?php 

namespace App\Controller;

session_start();

$_SESSION['ID_USER']=0;

require_once '../Model/UserDB.php';

/**This class handles the requests from the view, returning or modifying information from the model*/
class Controller{

	public function __construct() {
		$this->userObj = new \App\Model\UserDB();
	}

	public function receiveUserData(){
		/* User information sent by the sign up form */
		if(isset($_POST["name"], $_POST["surname"], $_POST["email"], $_POST["password"])){
			$name = $_POST["name"];
			$surname = $_POST["surname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			return $this->userObj->insertUserData($name, $surname, $email, $password);
		} 
		
	}

	public function checkUserData(){
		/* User information sent by the sign in form */
		if(isset($_POST["email"], $_POST["password"])){
			$email = $_POST["email"];
			$password = $_POST["password"];
			return $this->userObj->checkUserExists($email, $password);
		} 
	}

	public function displayMessage($message) {
		/** Display an error message */
		echo "<script>alert('$message');</script>";
	}
}

$controlador = new Controller();

?>