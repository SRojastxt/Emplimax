<?php

require 'db.php';

class Empresa{

    private $conection;

    public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

    protected $id;
    protected $nom_emp;
    protected $email;
    protected $nit;
    protected $contrasena;
    protected $foto;
    protected $foto_url;

    

    protected function InsertEmpresa()
    {
        $this->getConection();
        $sql = "INSERT INTO empresas (nom_emp, email, nit, contrasena, foto, foto_url) VALUES(?, ?, ?, ?, ?, ?)";
        $insertar = $this->conection->prepare($sql);
        $insertar->bindParam(1,$this->nom_emp);
        $insertar->bindParam(2,$this->email);
        $insertar->bindParam(3,$this->nit);
        $insertar->bindParam(4,$this->contrasena);
        $insertar->bindParam(5,$this->foto);
        $insertar->bindParam(6,$this->foto_url);
        $insertar->execute();
    }

    protected function SearchEmpresaForName()
    {
        $this->getConection();
        $sql = "SELECT * FROM empresas WHERE nom_emp = '$this->nom_emp'";
        $searchemp = $this->conection->prepare($sql);
        $searchemp->execute();
        $objetoconsulta = $searchemp->fetchall(PDO::FETCH_OBJ);
        return $objetoconsulta;
    }

}