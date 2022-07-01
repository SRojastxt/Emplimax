<?php 

require_once 'Models/principal.php';

class principalController{
	public $page_title;
	public $Views;

	public function __construct() {
		$this->Views = 'Inicio';
		$this->page_title = '';
		$this->noteObj = new Principal();
	}

	/* example */
	public function login(){
		
	}

}

?>