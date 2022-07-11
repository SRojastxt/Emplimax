<?php 

class Principal {
	private $pdo;
    

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	/* example Get all  */
	public function getNotes(){

		$sql = "SELECT * FROM users";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}
}

?>