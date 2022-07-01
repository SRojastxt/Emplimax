<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link
      rel="icon"
      href="../Views/image/tabicon.png"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../Views/Css/NavBar.css" />
    <link rel="stylesheet" href="../Views/Css/Login.css">
    <link rel="stylesheet" href="../Views/Css/Footer.css" />
    <script
      src="https://kit.fontawesome.com/10e19edffc.js"
      crossorigin="anonymous"
    ></script>
    <script defer src="../Views/Js/toggle.js"></script>
</head>

<body>
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
<form action="../Controller/UsuarioController.php" method="POST">
<input type="hidden" name="action" value="login">        
<div class="form-cont">
            <div class="titulo">
                <h4>Iniciar sesión</h4>
            </div>
            <div class="cont-image">
                <img src="../Views/image/logo_formulario.png" alt="Logo" />
            </div>
            <section class="cont-init">
                <div class="campos">
                    <div class="camp">
                        <label for="User"> Documento </label>
                        <input type="text" name="usuario" placeholder="Usuario" required />
                    </div>
                    <div class="camp-2">
                        <label for="pass"> Contraseña </label>
                        <input type="password" name="contrasena" placeholder="Contraseña" required />
                    </div>
                </div>
            </section>
            <div class="cont-button">
            <button class="btnsubmit" type="submit" id="validar">Ingresar</button>
            </div>
            <div class="cont-btn-botton">
                <div class="btn-register">
                    <a href="../Views/regiscard.php">Registrarse</a>
                </div>
                <div class="btn-pass">
                    <a href="../Olvido_contraseña/OlvidoSuContraseña.php">¿Olvido su contraseña?</a>
                </div>
            </div>
        </div>
    </form>
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

