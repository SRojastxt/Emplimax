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
    <title>Oficinas</title>
    <link rel="stylesheet" href="../Views/Css/NavBar.css" />
    <link rel="stylesheet" href="../Views/Css/Oficinas.css">
    <link rel="stylesheet" href="../Views/Css/Footer.css" />
    <script src="https://kit.fontawesome.com/10e19edffc.js" crossorigin="anonymous"></script>
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
    <h1 class="titulo-encuentranos">Encuentranos en nuestras oficinas presenciales</h1>
    <hr />
    <div class="map-container">
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3215.9387295580404!2d-76.29882073258803!3d3.536544173423072!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a04eb621c76ff%3A0xe794cd7bf8b74bdb!2sSENA%20-%20Centro%20de%20Biotecnologia%20Industrial%20Palmira!5e0!3m2!1ses!2sco!4v1646328046812!5m2!1ses!2sco"
          class="mapa"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        >
        </iframe>
      </div>
      <div class="wapper-container">
        <div class="wapper">
          <div class="lista-item">
              <label for="faq-titulo-1">
                <h2 class="faq-titulo">SENA - Centro de Biotecnologia Industrial Palmira</h2>
              </label>
              <hr>
              <p class="faq-contenido">
                <ul class="ubi-ul">
                    <li class="ubi-li"><a class="" href="#"><i class="fa-solid fa-location-dot"></i>Palmira, Valle del Cauca</a></li>
                    <li class="ubi-li"><a href="#"><i class="fa fa-phone"></i>(2) 2750968</a></li>
                    <li class="ubi-li"><a href="#"><i class="fa-solid fa-clock"></i>Abierto ahora: 8:00 a 18:00</a></li>
                    <li class="ubi-li"><a href="#"><i class="fa-solid fa-globe"></i>cbisenapalmira.blogspot.com/</a></li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
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