<?php
require_once '../Models/persona.php';

class PersonaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Persona();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/persona.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new Persona();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->getting($_REQUEST['id']);
        }
        
        require_once '../Views/Admin/persona-editar.php';
        
    }

    public function CrudView(){
    
        require '../Views/Admin/persona.php';
        
    }

    public function RegisterAdmView(){
    
        require '../Views/Admin/persona-guardar.php';
        
    }
    
    public function EditAdmView(){
    
        require '../Views/Admin/persona-editar.php';
        
    }

    public function Edit(){
        $alm = new Persona();
        
        $alm->id= $_REQUEST['id'];
        $alm->adm_usu = $_REQUEST['adm_usu'];
        
        $alm->contrasena = password_hash($_POST['contrasena'],PASSWORD_BCRYPT);
          
        $this->model->Actualizar($alm);
       
        header('Location: ../Views/Admin/iniadm.php');
    }

    public function Register(){
        $alm = new Persona();
        
        $alm->adm_usu = $_POST['adm_usu'];
        
        $alm->contrasena = password_hash($_POST['contrasena'],PASSWORD_BCRYPT);
        
        $this->model->Registrar($alm); 
        
        header('Location: ../Views/Admin/iniadm.php');
    }

    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: ../Views/Admin/iniadm.php');
    }

}

if(isset($_GET['action']) && $_GET['action']=='Crud'){
    $instanciacontrolador = new PersonaController();
    $instanciacontrolador->Crud();
}

if(isset($_GET['action']) && $_GET['action']=='Eliminar'){
    $instanciacontrolador = new PersonaController();
    $instanciacontrolador->Eliminar();
}

if(isset($_GET['action']) && $_GET['action']=='CrudView'){
    $instanciacontrolador = new PersonaController();
    $instanciacontrolador->CrudView();
}

if(isset($_POST['action']) && $_POST['action']=='Registrar'){
    $instanciacontrolador = new PersonaController();
    $instanciacontrolador->Register();
}

if(isset($_GET['action']) && $_GET['action']=='Registrar'){
    $instanciacontrolador = new PersonaController();
    $instanciacontrolador->RegisterAdmView();
}

if(isset($_POST['action']) && $_POST['action']=='Editar'){
    $instanciacontrolador = new PersonaController();
    $instanciacontrolador->Edit();
}

if(isset($_GET['action']) && $_GET['action']=='Edit'){
    $instanciacontrolador = new PersonaController();
    $instanciacontrolador->EditAdmView();
}

