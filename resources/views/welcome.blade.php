<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Cover Template · Bootstrap v5.2</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">




  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:focus {
      color: #333;
      text-shadow: none;
      /* Prevent inheritance from `body` */
    }

    * {
      margin: 0;
      padding: 0;

    }

    h1 {
      color: red;
    }

    header {
      background-color: black;

    }

    /*
 * Base structure
 */

    body {
      text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
      box-shadow: inset 0 0 0rem rgba(0, 0, 0, .5);
      background-image: url("https://i.pinimg.com/564x/62/a3/05/62a305787ce95199d567a7b99d8bec4c.jpg");
      /* Full height */
      height: 100%;
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      overflow: hidden;
    }

    .cover-container {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    nav {
      position: sticky;
      top: 0;
      left: 0;
      z-index: 1;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.5rem 3.5rem;
      background-color: black;
      box-shadow: 0 3px 5px rgba(212, 8, 8, 0.1);
      margin: auto;
    }

    /*
 * Header
 */

    .nav-masthead .nav-link {
      color: rgba(255, 255, 255, .5);
      border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .peliculas-recomendadas {
      margin-bottom: 70px;
    }

    /* ---- ----- ----- Contenedor Titulo y Controles ----- ----- ----- */
    .contenedor-titulo-controles {
      display: flex;
      justify-content: space-between;
      align-items: end;
    }

    .contenedor-titulo-controles h3 {
      color: #fff;
      font-size: 30px;
    }

    .contenedor-titulo-controles .indicadores button {
      background: #fff;
      height: 3px;
      width: 10px;
      cursor: pointer;
      border: none;
      margin-right: 2px;
    }

    .contenedor-titulo-controles .indicadores button:hover,
    .contenedor-titulo-controles .indicadores button.activo {
      background: red;
    }

    /* ---- ----- ----- Contenedor Principal y Flechas ----- ----- ----- */
    .peliculas-recomendadas {
      margin-bottom: 70px;
    }

    .peliculas-recomendadas .contenedor-principal {
      display: flex;
      align-items: center;
      position: relative;
    }

    .peliculas-recomendadas .contenedor-principal .flecha-izquierda,
    .peliculas-recomendadas .contenedor-principal .flecha-derecha {
      position: absolute;
      border: none;
      background: rgba(0, 0, 0, 0.3);
      font-size: 40px;
      height: 50%;
      top: calc(50% - 25%);
      line-height: 40px;
      width: 50px;
      color: #fff;
      cursor: pointer;
      z-index: 500;
      transition: .2s ease all;
    }

    .peliculas-recomendadas .contenedor-principal .flecha-izquierda:hover,
    .peliculas-recomendadas .contenedor-principal .flecha-derecha:hover {
      background: rgba(0, 0, 0, .9);
    }

    .peliculas-recomendadas .contenedor-principal .flecha-izquierda {
      left: 0;
    }

    .peliculas-recomendadas .contenedor-principal .flecha-derecha {
      right: 0;
    }

    /* ---- ----- ----- Carousel ----- ----- ----- */
    .peliculas-recomendadas .contenedor-carousel {
      width: 100%;
      padding: 15px 0;
      overflow: hidden;
      scroll-behavior: smooth;
      background-color: black;
    }

    .peliculas-recomendadas .contenedor-carousel .carousel {
      display: flex;
      flex-wrap: nowrap;
    }

    .peliculas-recomendadas .contenedor-carousel .carousel .pelicula {
      min-width: 20%;
      transition: .3s ease all;
      box-shadow: 5px 5px 10px rgba(0, 0, 0, .3);
    }

    .peliculas-recomendadas .contenedor-carousel .carousel .pelicula.hover {
      transform: scale(1.2);
      transform-origin: center;
    }

    .peliculas-recomendadas .contenedor-carousel .carousel .pelicula img {
      width: 75%;
      vertical-align: top;
    }

    /* ---- ----- ----- Media Queries ----- ----- ----- */
    @media screen and (max-width: 800px) {
      header .logotipo {
        margin-bottom: 10px;
        font-size: 30px;
      }

      header .contenedor {
        flex-direction: column;
        text-align: center;
      }

      .pelicula-principal {
        font-size: 14px;
      }

      .pelicula-principal .descripcion {
        max-width: 100%;
      }

      .peliculas-recomendadas .contenedor-carousel {
        overflow: visible;
      }

      .peliculas-recomendadas .contenedor-carousel .carousel {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
      }

      .peliculas-recomendadas .indicadores,
      .peliculas-recomendadas .flecha-izquierda,
      .peliculas-recomendadas .flecha-derecha {
        display: none;
      }
    }

    /* --------------titulo--------------*/
    /* Main styles */
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:800);

    .text {
      fill: none;
      stroke-width: 6;
      stroke-linejoin: round;
      stroke-dasharray: 70 330;
      stroke-dashoffset: 0;
      -webkit-animation: stroke 6s infinite linear;
      animation: stroke 6s infinite linear;
    }

    .text:nth-child(5n + 1) {
      stroke: #F2385A;
      -webkit-animation-delay: -1.2s;
      animation-delay: -1.2s;
    }

    .text:nth-child(5n + 2) {
      stroke: #F5A503;
      -webkit-animation-delay: -2.4s;
      animation-delay: -2.4s;
    }

    .text:nth-child(5n + 3) {
      stroke: #E9F1DF;
      -webkit-animation-delay: -3.6s;
      animation-delay: -3.6s;
    }

    .text:nth-child(5n + 4) {
      stroke: #56D9CD;
      -webkit-animation-delay: -4.8s;
      animation-delay: -4.8s;
    }

    .text:nth-child(5n + 5) {
      stroke: #3AA1BF;
      -webkit-animation-delay: -6s;
      animation-delay: -6s;
    }

    @-webkit-keyframes stroke {
      100% {
        stroke-dashoffset: -400;
      }
    }

    @keyframes stroke {
      100% {
        stroke-dashoffset: -400;
      }
    }

    /* Other styles */
    html,
    body {
      height: 50%;
    }

    body {
      background: #212121;
      background-size: .2em 50%;
      font: 14.5em/1 Open Sans, Impact;
      text-transform: uppercase;
      margin: 0;
    }
  </style>



  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-bg-dark">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0">Galeria</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          @if (Route::has('login'))
          @auth
          <a href="{{ route('home') }}" class="nav-link fw-bold py-1 px-0" href="#">Home</a>
          @else
          <a href="{{ route('login') }}" class="nav-link fw-bold py-1 px-0 fs-4" href="#">Log in</a>
          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="nav-link fw-bold py-1 px-0 fs-4" href="#">Registrar</a>
          @endif
          @endauth
          @endif
        </nav>
      </div>
    </header>

    <main class="px-3">
      <svg viewBox="0 0 1320 300">

        <!-- Symbol -->
        <symbol id="s-text">
          <text text-anchor="middle" x="50%" y="50%" dy=".35em">
            Musgrove
          </text>
        </symbol>

        <!-- Duplicate symbols -->
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>

      </svg>
    </main>
    <div>
      <footer class="mt-auto text-white-50">
        <div class="contenedor-principal">
          <div class="peliculas-recomendadas contenedor">
            <div class="contenedor-titulo-controles">
              <div class="indicadores"></div>
            </div>

            <div class="contenedor-principal">
              <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
              <div class="contenedor-carousel">
                <h3>Exitos Mundiales</h3>
                <div class="carousel">
                  <div class="pelicula">
                    <a href="#"><img src="https://linkstorage.linkfire.com/medialinks/images/fdd80046-7167-4a37-921d-d9eb8544175c/artwork-640x640.jpg" alt=""></a>
                  </div>
                  <div class="pelicula">
                    <a href="#"><img src="https://http2.mlstatic.com/D_NQ_NP_659842-MLM28577001729_112018-W.jpg" alt=""></a>
                  </div>
                  <div class="pelicula">
                    <a href="#"><img src="https://m.media-amazon.com/images/I/71shxYmewhL._SL1050_.jpg" alt=""></a>
                  </div>
                  <div class="pelicula">
                    <a href="#"><img src="https://www.buenamusica.com/media/fotos/discos/r/ricardo-arjona/ricardo-arjona_arjona-grandes-exitos.jpg" alt=""></a>
                  </div>
                  <div class="pelicula">
                    <a href="#"><img src="https://i.pinimg.com/originals/03/e6/f3/03e6f3730c76e798167bf764d40782c2.jpg" alt=""></a>
                  </div>
                  <div class="pelicula">
                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5c/T%C3%BA_y_Yo_cover.jpg/220px-T%C3%BA_y_Yo_cover.jpg" alt=""></a>
                  </div>
                  <div class="pelicula">
                    <a href="#"><img src="https://www.lahiguera.net/musicalia/artistas/dvicio/disco/8296/dvicio_que_tienes_tu-portada.jpg" alt=""></a>
                  </div>
                </div>
              </div>
              <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
            </div>
          </div>
        </div>
      </footer>
    </div>
</body>

</html>