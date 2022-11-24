<?php 

namespace App\Controller;


session_start();

$_SESSION['ID_USER']=0;
$_SESSION['ERROR_NAME']="";
$_SESSION['ERROR_SURNAME']="";
$_SESSION['ERROR_EMAIL']="";
$_SESSION['ERROR_DUPLICATE']="";
//$_SESSION['WRONG_INPUT']="";

require_once '../Model/UserDB.php';

/**This class handles the requests from the view, returning or modifying information from the model*/
class Controller{

	private $wrongInput;

	public function __construct() {
		$this->userObj = new \App\Model\UserDB();
	}

	public function getWrongInput(){
		return $this->wrongInput;
	}

	public function setWrongInput($array){
		$this->wrongInput = $array;
	}

	public function receiveUserData(){
		/* User information sent by the sign up form */
		if(isset($_POST["name"], $_POST["surname"], $_POST["email"], $_POST["password"])){
			$name = $_POST["name"];
			$surname = $_POST["surname"];
			$email = strtolower($_POST["email"]);
			$password = $_POST["password"];
			return $this->userObj->insertUserData($name, $surname, $email, $password);
		}
	}

	public function checkUserData(){
		/* User information sent by the sign in form */
		if(isset($_POST["email"], $_POST["password"])){
			$email = strtolower($_POST["email"]);
			$password = $_POST["password"];
			return $this->userObj->checkUserExists($email, $password);
		} 
	}

	public function displayMessage($message) {
		/** Display an error message */
		echo "<script>alert('$message');</script>";
	}

	public function redirect($page){
		/** Redirect to another page */
		$script = "<script>
		window.location = '$page';</script>";
		echo $script;
	}
}

$controlador = new Controller();

?>