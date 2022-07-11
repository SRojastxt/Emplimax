<?php
require '../Models/Usuario.php';

class UsuarioController extends Usuario{

    public function LoginView()
    {
        
        require '../Views/login.php';
        
    }


    public function InsertView()
    {
        require '../Views/insert.php';
    }

    public function SaveInfoForModel($usuario, $email, $documento, $password, $foto, $foto_url)
    {
        $this->usuario = $usuario;
        $this->email = $email;
        $this->documento = $documento;
        $this->contrasena = $password;
        $this->foto = $foto;
        $this->foto_url = $foto_url;
        $this->InsertUsuario();
        
    }

    public function VerifyLogin($usuario, $password)
    {
        $this->usuario = $usuario;
        $this->contrasena = $password; 
        $infousuario = $this->SearchUsuarioForName();
        foreach($infousuario as $usuario){}
        if(password_verify($password,$usuario->contrasena)){
        {
            header("Location: http://localhost:8080/EmplimaxMVC/Views/perfil.php");
            exit();
        }
        }
        else
        {
            echo "La contraseña es incorrecta";
        }
    }

}

if(isset($_GET['action']) && $_GET['action']=='login'){
    $instanciacontrolador = new UsuarioController();
    $instanciacontrolador->LoginView();
}


if(isset($_GET['action']) && $_GET['action']=='insert'){
    $instanciacontrolador = new UsuarioController();
    $instanciacontrolador->InsertView();
}

if(isset($_POST['action']) && $_POST['action']=='insert'){

    $instanciacontrolador = new UsuarioController();
    $password = password_hash($_POST['contrasena'],PASSWORD_BCRYPT);
    if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
    $foto = $_FILES['imagen']['name'];
    $fototemporal = $_FILES['imagen']['tmp_name'];
    $foto_url = "../Views/Images/" . $foto;
    copy($fototemporal,$foto_url);

    $instanciacontrolador->SaveInfoForModel(
        $_POST['usuario'],
        $_POST['email'],
        $_POST['documento'],
        $password,
        $foto,
        $foto_url
        );
    }
}

if(isset($_POST['action']) && $_POST['action']=='login'){
    $instanciacontrolador = new UsuarioController();
    $instanciacontrolador->VerifyLogin($_POST['usuario'],$_POST['contrasena']);
}
?>