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
    <title>Emplimax</title>
    <link rel="stylesheet" href="../Views/Css/NavBar.css" />
    <link rel="stylesheet" href="../Views/Css/Banner.css" />
    <link rel="stylesheet" href="../Views/Css/Mv.css" />
    <link rel="stylesheet" href="../Views/Css/Footer.css" />
    <script defer src="../Views/Js/toggle.js"></script>
    <script
      src="https://kit.fontawesome.com/10e19edffc.js"
      crossorigin="anonymous"
    ></script>

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
            <a href="http://localhost:8080/EmplimaxMVC/Controller/UsuarioController.php?action=Inicio" class="nav-menu-link nav-link">Inicio</a>
          </li>
          <li class="nav-menu-item">
            <a href="./Servicios.html"  class="nav-menu-link nav-link">Servicio</a>
          </li>
          <li class="nav-menu-item">
            <a href="./Oficinas.html" class="nav-menu-link nav-link">Oficinas</a>
          </li>
          <li class="nav-menu-item">
            <a href="Cartelera.html" class="nav-menu-link nav-link">Carteleras</a>
          </li>
        </ul>
      </nav>
    </header>
    <section class="banner">
      <div class="banner-content">
        <h1>Bienvenido a Emplimax</h1>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus
          soluta saepe quo labore magnam laboriosam eligendi? Dolores, nemo
          similique? Consequatur deleniti aliquam obcaecati odio dignissimos?
        </p>
        <a href="http://localhost:8080/EmplimaxMVC/Controller/UsuarioController.php?action=login">Iniciar sesión</a>
        <a href="http://localhost:8080/EmplimaxMVC/Controller/UsuarioController.php?action=insert">Registrarse</a>
      </div>
    </section>
    <section class="mv">
      <div class="info3">
        <h1 class="titulos">¿Quiénes somos?​</h1>
        <p class="parrafo">
          Somos una plataforma que ayuda a la vinculación laboral entre las
          empresas y los nuevos profesionales, sin barreras como la experiencia
          laboral. Creemos en el potencial que tienen las personas para
          desempeñarse en lo que durante años se hayan orientado.
        </p>
      </div>
      <div class="info1-2">
        <img src="../Views/image/Quienes somos.png" alt="" class="mision" />
      </div>
      <div class="info1">
        <h1 class="titulos">Misión​</h1>
        <p class="parrafo">
          Emplimax se encarga de cumplir una función correspondiente a la
          vinculación de los nuevos profesionales a un ambiente empresarial en
          la vacante deseada además de brindarle a a las empresas la posibilidad
          de tener a los mejores nuevos profesionales dentro del mismo ambiente
          asegurando y velando que cada persona que solicite una vacante sea
          competente para la misma.
        </p>
      </div>
      <div class="info1-1">
        <img
          src="https://th.bing.com/th/id/OIP.HeY93qOrkhcKTm7Bfc3fvQHaHa?pid=ImgDet&rs=1"
          alt=""
          class="mision1"
        />
      </div>
      <div class="info2">
        <h1 class="titulos">Visión​</h1>
        <p class="parrafo">
          Queremos que Emplimax para el 2025 sea el sitio para buscar empleo más
          concurrido de Colombia, brindando así la oportunidad de que tanto los
          nuevos profesionales como las personas que necesiten un empleo puedan
          encontrarlo de una manera satisfactoria dentro de nuestro sitio web.
        </p>
      </div>
      <div class="info1-3">
        <img src="../Views/image/Vision.png" alt="" class="mision" />
      </div>
    </section>
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