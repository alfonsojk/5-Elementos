<?php get_header(); ?>


  <!-- INFO -->
  <article class="page-content">
    <div class="row">
      <div class="medium-9 medium-centered columns">
        <h4 class="text-center">Ofrecemos la oportunidad de realizar una inversión familiar en un terreno campestre en
          contacto
          directo con los elementos de la naturaleza: agua, fuego, tierra y aire. Somos una comunidad
          conformada en ochenta y tres lotes, que busca fomentar una sociedad integrada con acceso a
          pabellones de arte, zonas deportivas, caballerizas y un programa permanente de producción de
           composta para la forestación.</h4>
      </div>
    </div>


    <!-- LOTES -->  

    <div class=" text-center bg-light" id="banner" style="height: 1100px;">
      <div class="col-md-6 p-lg-5 mx-auto my-5">
        <h3 class="text-center1">SELECCIONE EL LOTE DISPONIBLE</h3>
        <h5 class="lote2 font-weight-bold">El proyecto consta de 83 lotes y 2,500 m² de área</h5>
    </div>

<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/planos.svg" class="responsive"></div>
    </div>

    <!-- GALERIA -->  
    <div class="form-row2">
      <h1>GALERÍA</h1>
     </div>
<div>
  <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img1.jpg" class="card-img-top" alt="...">
      </div>
    </div>


    <div class="col mb-4">
      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img2.jpg" class="card-img-top" alt="...">
      </div>
    </div>



    <div class="col mb-4">
      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img3.jpg" class="card-img-top" alt="...">
    </div>


  </div>

    <div class="col mb-4">
      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img4.jpg" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img5.jpg" class="card-img-top" alt="...">
      </div>
    </div>
  </div>



 <!-- UBICACION -->  
 <div class="form-row2">





  <h1>UBICACIÓN</h1>
<div >
<img class="location" src="<?php echo get_stylesheet_directory_uri()?>/assets/mapa.png" alt="..." style="margin-top: 5%; margin-bottom:5%";>
</div>
 </div>



 <div class="jumbotron2" style="width: 100%;"> 
 <div class="container themed-container">
  
   <div class="location" id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
     <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
      var setting = {"height":800,"width":1800, "margin-bottom":100, "zoom":14,"queryString":"Refinería Cadereyta, Carr. Libre Monterrey - Reynosa, Sin Nombre de Colonia 3, Cadereyta Jiménez, N.L., México","place_id":"ChIJaec3at7YYoYRrULL6idn5Fs","satellite":false,"centerCoord":[],"cid":"0x5be46727eacb42ad","lang":"es","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"202866"};
      var d = document;
      var s = d.createElement('script');
      s.src = 'https://embedgooglemap.1map.com/js/script-for-user.js?embed_id=202866';
      s.async = true;
      s.onload = function (e) {
        window.OneMap.initMap(setting)
      };
      var to = d.getElementsByTagName('script')[0];
      to.parentNode.insertBefore(s, to);
    })();</script><a href="https://embedgooglemap.1map.com/es"></a></div>
</div>
</div>


 <!-- CONTACTO -->  

  <form method="post" id="contact-form" method="post" action="contact-form-handler.php">

 <div class="form-row1"  >
  <h1>CONTACTO</h1>
 </div>

<div class="jumbotron1" style="padding-bottom: 100px;">
  <div class="jumbotron container themed-container" style="margin-top: 100px;" >
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputName">Nombre</label>
        <input type="text" class="form-control" id="inputName">
      </div>
      <div class="form-group col-md-4">
        <label for="input">Correo</label>
        <input id="text" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label for="inputNumber">Teléfono</label>
        <input type="text" class="form-control" id="inputNumber">
      </div>
    </div>
    <div class="form-group">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Mensaje</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-sm-4">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      <div class="form-group">
        <img class="quote" src="<?php echo get_stylesheet_directory_uri()?>/assets/quotmark.png" alt="">
      </div>
      <div class="form-group col-sm-6">
        <h1 class="text2">Estamos para servirle, en breve alguno de nuestros asesores te atenderá.</h1>
      </div>
      
    </div>
    
    
  </div>
  </div>


  </form>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
      crossorigin="anonymous"></script>
      <?php get_footer(); ?>