<?php
require 'db.php';

class AdminUser
{
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
    
	protected $adm_usu;
	protected $contrasena;


	protected function SearchAdminForName()
    {
        $sql = "SELECT * FROM administradores WHERE adm_usu= '$this->adm_usu'";
        $searchadm = $this->pdo->prepare($sql);
        $searchadm->execute();
        $objetoconsulta = $searchadm->fetchall(PDO::FETCH_OBJ);
        return $objetoconsulta;
    }
}
?>
