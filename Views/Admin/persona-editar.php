<h1 class="page-header">    
    Editar usuario
</h1>

<ol class="breadcrumb">
  <li><a href="http://localhost:8080/EmplimaxMVC/Controller/persona.controller.php?action=CrudView">Personas</a></li>
</ol>

<form action="../Controller/persona.controller.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="Editar" />
    
    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="adm_usu"  class="form-control" placeholder="Ingrese su usuario" required />
    </div>
    
   
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="contrasena" class="form-control" placeholder="Ingrese su contraseña" required />
    </div>
    
   
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>
