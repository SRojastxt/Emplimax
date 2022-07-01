<?php
require '../Models/Empresa.php';

class EmpresaController extends Empresa{

    public function LoginView()
    {
        
        require '../Views/loginemp.php';
        
    }

    public function InsertView()
    {
        require '../Views/insertemp.php';
    }

    public function SaveInfoForModel($nom_emp, $email, $nit, $password, $foto, $foto_url)
    {
        $this->nom_emp = $nom_emp;
        $this->email = $email;
        $this->nit = $nit;
        $this->contrasena = $password;
        $this->foto = $foto;
        $this->foto_url = $foto_url;
        $this->InsertEmpresa();
        
    }

    public function VerifyLogin($nom_emp, $password)
    {
        $this->nom_emp = $nom_emp;
        $this->contrasena = $password; 
        $infoemp = $this->SearchEmpresaForName();
        foreach($infoemp as $nom_emp){}
        if(password_verify($password,$nom_emp->contrasena)){
            echo "Felicidades nueva empresa"; $_SESSION['nom_emp'] = $nom_emp->nom_emp;
            $_SESSION['foto_url'] = $nom_emp->foto_url;
            $_SESSION['email'] = $nom_emp->email;
        }
        else
        {
            echo "La contraseña es incorrecta";
        }
    }

}

if(isset($_GET['action']) && $_GET['action']=='loginemp'){
    $instanciacontrolador = new EmpresaController();
    $instanciacontrolador->LoginView();
}

if(isset($_GET['action']) && $_GET['action']=='insertemp'){
    $instanciacontrolador = new EmpresaController();
    $instanciacontrolador->InsertView();
}

if(isset($_POST['action']) && $_POST['action']=='insertemp'){

    $instanciacontrolador = new EmpresaController();
    $password = password_hash($_POST['contrasena'],PASSWORD_BCRYPT);
    if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
    $foto = $_FILES['imagen']['name'];
    $fototemporal = $_FILES['imagen']['tmp_name'];
    $foto_url = "../Views/ImagesEmp/" . $foto;
    copy($fototemporal,$foto_url);

    $instanciacontrolador->SaveInfoForModel(
        $_POST['nom_emp'],
        $_POST['email'],
        $_POST['nit'],
        $password,
        $foto,
        $foto_url
        );
    }
}

if(isset($_POST['action']) && $_POST['action']=='loginemp'){
    $instanciacontrolador = new EmpresaController();
    $instanciacontrolador->VerifyLogin($_POST['nom_emp'],$_POST['contrasena']);
}
?>