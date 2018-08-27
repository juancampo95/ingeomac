<?php include("nav.php") ?>

<div class="fondo_absolute" style="background-image: url('images/Contacto.jpg');"></div>
  <div class="container callToAction section-blanco flotante barra margin_contacto">
    <h2 class="textobarra">Contáctenos</h2>
    <div class="row us-inicio">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <form class="pd-form">
          <!-- Material input text -->
          <div class="md-form">
              <i class="fa fa-user prefix grey-text"></i>
              <input type="text" id="materialFormContactNameEx" class="form-control">
              <label for="materialFormContactNameEx">Nombre</label>
          </div>

          <!-- Material input email -->
          <div class="md-form">
              <i class="fa fa-envelope prefix grey-text"></i>
              <input type="email" id="materialFormContactEmailEx" class="form-control">
              <label for="materialFormContactEmailEx">E-Mail</label>
          </div>

          <!-- Material input subject -->
          <div class="md-form">
              <i class="fa fa-tag prefix grey-text"></i>
              <input type="text" id="materialFormContactSubjectEx" class="form-control">
              <label for="materialFormContactSubjectEx">Teléfono</label>
          </div>

          <!-- Material textarea message -->
          <div class="md-form">
              <i class="fa fa-pencil prefix grey-text"></i>
              <textarea type="text" id="materialFormContactMessageEx" class="form-control md-textarea" rows="3"></textarea>
              <label for="materialFormContactMessageEx">Comentarios</label>
          </div>

          <div class="text-center mt-4">
              <a class="btn btn-danger btn-lg" href="#">Enviar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
<div class="container-fluid section-rojo">
  <div class="container section-rojo info-contacto">
    <h2>Datos de Contácto</h2><br>
    <p class="text-center">En INGEOMAC LTDA estamos comprometidos con la prestación de un servicio de calidad, es por eso que estamos siempre atentos a cualquier tipo de comunicación que nuestros clientes quieran tener con nosotros, debido a eso tenemos distintos canales y medios por los cuales nos podemos  comunicar.</p>
  </div>
  <article class="container callToAction section-rojo ">
    <div class="row p-container">
      <div class=" col-xs-12 col-sm-12 col-md-4 parrafos-contacto parrafosrojo-contacto">
        <img src="images/direccionblanco.svg"></a>
        <h2>Dirección</h2>
        <p class="datos-contacto"><a href="https://goo.gl/maps/Lu5MKM8Gh8r" target="_blank">Cl. 19 #35 - 33, Cali, Valle del Cauca</a></p>
      </div>
      <div class=" col-xs-12 col-sm-12 col-md-4 parrafos-contacto parrafosrojo-contacto">
        <img src="images/telefonoblanco.svg"></a>
        <h2>Teléfono</h2>
        <p class="datos-contacto"><a href="tel:+5723733707" target="_blank">+57 (2) 373 3707</a></p>
        <p class="datos-contacto"><a href="https://api.whatsapp.com/send?phone=573155275724" target="_blank">+57 315 527 5724</a></p class="datos-contacto">
      </div>
      <div class=" col-xs-12 col-sm-12 col-md-4 parrafos-contacto parrafosrojo-contacto">
        <img src="images/emailblanco.svg"></a>
        <h2>Email</h2>
        <p>Escríbenos</p>
        <p class="datos-contacto"><a href="mailto:gerencia@ingeomac.com">gerencia@ingeomac.com</a></p>
      </div>
    </div>
  </article>
</div>







<?php include("footer.php") ?>
