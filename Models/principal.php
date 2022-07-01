<?php 

class Principal {
	private $conection;

	public function __construct() {
		
	}

	/* Set conection */
	public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

	/* example Get all  */
	public function getNotes(){
		$this->getConection();
		$sql = "SELECT * FROM users";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}
}

?>