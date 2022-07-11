<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Crud administradores</title>
    <link rel="stylesheet" href="../Views/Css/AdmTable.css" />
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>
<div class="table-title">
<h3>Administradores CRUD</h3>
<a href="http://localhost:8080/EmplimaxMVC/Controller/persona.controller.php?action=Registrar">Agregar Persona</a>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Usuario</th>
<th class="text-left">Contraseña</th>
<th class="text-left">Editar usuarios</th>
<th class="text-left">Elminar usuarios</th>
</tr>
</thead>
<tbody class="table-hover">
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td class="text-left"><?php echo $r->adm_usu; ?></td>
            
            <td class="text-left"><?php echo $r->contrasena; ?></td>
            
            <td class="text-left">
                <i class="glyphicon glyphicon-edit"><a href=http://localhost:8080/EmplimaxMVC/Controller/persona.controller.php?action=Edit&id=<?php echo $r->id; ?>"> Editar</a></i>
            </td>
            <td class="text-left">
                <i class="glyphicon glyphicon-remove"><a href="http://localhost:8080/EmplimaxMVC/Controller/persona.controller.php?action=Eliminar&id=<?php echo $r->id; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
  </body>
