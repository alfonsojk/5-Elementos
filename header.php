<!doctype html>
<html lang="en">

<head>
  
  <meta charset="<?php bloginfo('charset'); ?>">
  <script src="https://kit.fontawesome.com/9d1ab14e2d.js" crossorigin="anonymous"></script>

  <title>5 Elementos</title>

  <!-- BOOTSTRAP CORE PHP -->
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

  <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">           

  <link href="<?php bloginfo('tempate_url'); ?>/css/fontawesome.css" rel="stylesheet">

  <link href="<?php bloginfo('template_url'); ?>/js/fontawesome.js" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.php">


  <!-- STYLES/FONTS -->
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap');

         @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');

         @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

        .bd-placeholder-img {
             font-size: 1.125rem;
             text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }


        @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
            }
        }
  </style>
  <?php wp_head();?>
</head>

<!-- CUSTOM TEMPLATE -->
<body>
  <nav class="site-header sticky-top py-1">
    <div class="container3 d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="#" aria-label="Product">


        <div class="bg-overlay-primary">

           
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/logo-blanco.png" width="600" height="55" fill="none" stroke="currentColor"
          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img"
          viewBox="0 0 24 24" focusable="false">
        <circle cx="12" cy="12" r="10" />
        <path
          d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
        </img>


        </div>
      </a>
      <a class="py-2 d-none d-md-inline-block" href="#" style="margin-top: 25px;">CONTACTO</a>

    </div>
  
  </nav>

  <!-- BANNER -->

  <header>
  <div class="home" style="background: url('<?php bloginfo("template_directory");?>/assets/bg-img.jpg');  background-position: center;
  position: relative;
  background-size: cover;
  font-size:34px;
  min-width: 43.75rem;
  display: flex;">
      <div class="home-carousel">
          <div id="home-hero">
            <div class="hero-content">
            <h1 class="hero-main-header" style="color: white;">El mejor lugar</h1>
            <h2 class="hero-main-header" style="color: white;">fuera de tu ciudad</h2>
            <h3  style="color: white; margin-top:0px">Rodeado de la naturaleza y de todo lo que necesitas para vivir cómodamente con la mejor ubicación.</h3>
            <p class="large button sites-button hide-for-small-only" download>Contacta con nosotros</p>
          </div>
      </div>
    </div>
</header>
</body>

</html>