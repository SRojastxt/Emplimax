<?php

require 'db.php';

class Usuario{

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

    protected $id;
    protected $usuario;
    protected $email;
    protected $documento;
    protected $contrasena;
    protected $foto;
    protected $foto_url;

    

    protected function InsertUsuario()
    {
        
        $sql = "INSERT INTO users(usuario, email, documento, contrasena, foto, foto_url) VALUES(?, ?, ?, ?, ?, ?)";
        $insertar = $this->pdo->prepare($sql);
        $insertar->bindParam(1,$this->usuario);
        $insertar->bindParam(2,$this->email);
        $insertar->bindParam(3,$this->documento);
        $insertar->bindParam(4,$this->contrasena);
        $insertar->bindParam(5,$this->foto);
        $insertar->bindParam(6,$this->foto_url);
        $insertar->execute();
    }

    protected function SearchUsuarioForName()
    {
    
        $sql = "SELECT * FROM users WHERE usuario = '$this->usuario'";
        $searchuser = $this->pdo->prepare($sql);
        $searchuser->execute();
        $objetoconsulta = $searchuser->fetchall(PDO::FETCH_OBJ);
        return $objetoconsulta;
    }

}