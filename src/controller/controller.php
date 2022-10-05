<?php 

require_once '../model/userDB.php';

/**This class handles the requests from the view, returning or modifying information from the model*/
class Controller{
	public $page_title;
	public $view;

	public function __construct() {
		$this->view = '';
		$this->page_title = '';
		$this->userObj = new UserDB();
	}

	public function receiveUserData(){
		$this->page_title = 'Editar nota';
		$this->view = 'edit_note';

		/* User information sent by the form */
		if(isset($_POST["name"])){
			$name = $_POST["name"];
			$surname = $_POST["surname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
		} 
		$this->userObj->insertUserData($name, $surname, $email, $password);
	}

	public function checkUserData(){
		$this->page_title = 'Editar nota';
		$this->view = 'edit_note';

		/* User information sent by the form */
		if(isset($_POST["email"])){
			$email = $_POST["email"];
			$password = $_POST["password"];
		} 
		echo "Voy a chequear el usuario";
		
		return $this->userObj->checkUserExits($email, $password);
	}
}

/* Simular main*/
$controlador = new Controller();


?>