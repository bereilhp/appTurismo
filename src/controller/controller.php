<?php 

require_once 'model/note.php';

/**This class handles the requests from the view, returning or modifying information from the model*/
class Controller{
	public $page_title;
	public $view;

	public function __construct() {
		$this->view = '';
		$this->page_title = '';
		$this->noteObj = new User();
	}

}

?>