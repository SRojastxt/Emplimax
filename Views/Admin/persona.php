<h1 class="page-header">Personas</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="http://localhost:8080/EmplimaxMVC/Controller/persona.controller.php?action=Registrar">Agregar Persona</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Usuario</th>
            
            <th >Contraseña</th>
           
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->adm_usu; ?></td>
            
            <td><?php echo $r->contrasena; ?></td>
            
            <td>
                <i class="glyphicon glyphicon-edit"><a href=http://localhost:8080/EmplimaxMVC/Controller/persona.controller.php?action=Edit&id=<?php echo $r->id; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="http://localhost:8080/EmplimaxMVC/Controller/persona.controller.php?action=Eliminar&id=<?php echo $r->id; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
