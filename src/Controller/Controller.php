<?php 

namespace App\Controller;

session_start();

$_SESSION['ID_USER']=0;
$_SESSION['ERROR_NAME']="";
$_SESSION['ERROR_SURNAME']="";
$_SESSION['ERROR_EMAIL']="";
$_SESSION['ERROR_DUPLICATE']="";

require_once '../Model/UserDB.php';

/**This class handles the requests from the view, returning or modifying information from the model*/
class Controller{

	public function __construct() {
		$this->userObj = new \App\Model\UserDB();
	}

	public function receiveUserData(){
		/* User information sent by the sign up form */
		if($this->checkPatterns()){
			$name = ucwords(strtolower($_POST["name"]));
			$surname = ucwords(strtolower($_POST["surname"]));
			$email = strtolower($_POST["email"]);
			$password = $_POST["password"];
			return $this->userObj->insertUserData($name, $surname, $email, $password);
		}
		
	}

	public function checkPatterns(){
		/** Checks that the input matches the patterns */
		$patternNameSurname= "/^[\p{Lu}\p{Lt}][\p{Ll}\p{Lm}\p{Lo}]+([ -][\p{Lu}\p{Lt}][\p{Ll}\p{Lm}\p{Lo}]+)*$/u";
		$patternEmail= "/^[\w\.]+@([\w-]+\.)+[\w-]{2,4}$/i";
		$conditions=true;
		
		if(isset($_POST["name"], $_POST["surname"], $_POST["email"], $_POST["password"])){
			if (!preg_match($patternNameSurname, $_POST["name"])){
				$_SESSION['ERROR_NAME']="Name not following the pattern";
				$conditions = false;
			}
			if (!preg_match($patternNameSurname, $_POST["surname"])){
				$_SESSION['ERROR_SURNAME']="Surname not following the pattern";
				$conditions = false;
			}
			if (!preg_match($patternEmail, $_POST["email"])){
				$_SESSION['ERROR_EMAIL']="Email not following the pattern";
				$conditions = false;
			}
			if ($conditions) return true;
			else return false;
			
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