<?php
require '../Models/Admin.php';

class AdminController extends AdminUser{
   
    public function LoginView()
    {
        
        require '../Views/Admin/LoginAdm.php';
        
    }

    public function InsertView()
    {
        
        require '../Views/Admin/persona-editar.php';
        
    }
    

    public function VerifyLogin($adm_usu, $password)
    {
        $this->adm_usu= $adm_usu;
        $this->contrasena = $password; 
        $infoadm= $this->SearchAdminForName();
        foreach($infoadm as $adm_usu){}
        if(password_verify($password,$adm_usu->contrasena)){
            header("Location: http://localhost:8080/EmplimaxMVC/Views/Admin/iniadm.php");
            exit();
        }
        else
        {
            echo "La contraseña es incorrecta";
        }
    }

}

if(isset($_GET['action']) && $_GET['action']=='loginadm'){
    $instanciacontrolador = new AdminController();
    $instanciacontrolador->LoginView();
}

if(isset($_GET['action']) && $_GET['action']=='insertadm'){
    $instanciacontrolador = new AdminController();
    $instanciacontrolador->InsertView();
}

if(isset($_POST['action']) && $_POST['action']=='loginadm'){
    $instanciacontrolador = new AdminController();
    $instanciacontrolador->VerifyLogin($_POST['adm_usu'],$_POST['contrasena']);
}
?>