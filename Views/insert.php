<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link
      rel="icon"
      href="../Views/image/tabicon.png"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro persona natural</title>
    <link rel="stylesheet" href="../Views/Css/NavBar.css" />
    <link rel="stylesheet" href="../Views/Css/Register.css">
    <link rel="stylesheet" href="../Views/Css/Footer.css" />
    <script
      src="https://kit.fontawesome.com/10e19edffc.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/10e19edffc.js" crossorigin="anonymous"></script>
    <script defer src="../Views/Js/toggle.js"></script>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<header class="header">
      <nav class="nav">
        <img class="logo" src="../Views/image/Logo.png" />
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li class="nav-menu-item">
            <a href="../Views/Home.php" class="nav-menu-link nav-link">Inicio</a>
          </li>
          <li class="nav-menu-item">
            <a href="../Views/Servicios.php"  class="nav-menu-link nav-link">Servicio</a>
          </li>
          <li class="nav-menu-item">
            <a href="../Views/Oficinas.php" class="nav-menu-link nav-link">Oficinas</a>
          </li>
          <li class="nav-menu-item">
            <a href="../Views/Cartelera.php" class="nav-menu-link nav-link">Carteleras</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="contend">
    <div class="contend-image">
      <img src="../Views/image/logo_formulario.png" alt="Logo">
    </div>
  <form  action="UsuarioController.php" method="POST" enctype="multipart/form-data" class="form-register" id="formUser">
      <h4>Registro Usuario</h4>
      <input class="controls" type="hidden" name="action" value="insert">
      <input class="controls" type="text" name="usuario" placeholder="Usuario" required/>
      <input class="controls" type="text" name="email"  placeholder="Email" required/>
      <input class="controls" type="number" name="documento" placeholder="Documento" required/>
      <input class="controls" type="password" name="contrasena"  placeholder="Password" required/>
      <input class="controls" type="file" name="imagen"  accept=".jpg, .png, .gif"/>
      <div class="cont-checkbox">
        <input class="checkbox" type="checkbox" required>
        <h1 class="text-checkbox">Estoy de acuerdo con </h1>
        <a href="#">"Terminos y Condiciones"</a>
      </div>
      <input class="botons" type="submit" value="Registarme">
      <div class="text-ini">
        <a href="http://localhost:8080/EmplimaxMVC/Controller/UsuarioController.php?action=login">¿Ya tiene una cuenta?</a>
        <a href="../Views/Home.php"> Volver al inicio </a></div>
    </form>
    </div>
<footer class="pie-pagina">
      <div class="grupo-1">
        <div class="box">
          <figure>
            <a href="#">
              <img src="../Views/image/LogoOscuro.png" alt="Logo Emplimax" />
            </a>
          </figure>
        </div>
        <div class="box">
          <h2>SOBRE NOSOTROS</h2>
          <p class="parrafo2">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias,
            quos?
          </p>
          <p class="parrafo2">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias,
            quos?
          </p>
        </div>
        <div class="box">
          <h2>SIGUENOS</h2>
          <div class="red-social">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
          </div>
        </div>
      </div>
      <div class="grupo-2">
        <small>&copy; 2022 <b>Emplimax</b> - Todos los Derechos Reservados</small>
      </div>
    </footer>
</body>
</html>

