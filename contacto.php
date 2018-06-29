<?php include("nav.php") ?>

<header class="container-fluid header us-header" style="background-image: url('images/Contacto.jpg');">
  <div class="container callToAction section-blanco flotante barra">
    <h2 class="textobarra">Contactenos</h2>
    <div class="row us-inicio">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <form>
          <!-- Material input text -->
          <div class="md-form">
              <i class="fa fa-user prefix grey-text"></i>
              <input type="text" id="materialFormContactNameEx" class="form-control">
              <label for="materialFormContactNameEx">Your name</label>
          </div>

          <!-- Material input email -->
          <div class="md-form">
              <i class="fa fa-envelope prefix grey-text"></i>
              <input type="email" id="materialFormContactEmailEx" class="form-control">
              <label for="materialFormContactEmailEx">Your email</label>
          </div>

          <!-- Material input subject -->
          <div class="md-form">
              <i class="fa fa-tag prefix grey-text"></i>
              <input type="text" id="materialFormContactSubjectEx" class="form-control">
              <label for="materialFormContactSubjectEx">Subject</label>
          </div>

          <!-- Material textarea message -->
          <div class="md-form">
              <i class="fa fa-pencil prefix grey-text"></i>
              <textarea type="text" id="materialFormContactMessageEx" class="form-control md-textarea" rows="3"></textarea>
              <label for="materialFormContactMessageEx">Your message</label>
          </div>

          <div class="text-center mt-4">
              <button class="btn btn-outline-secondary" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
          </div>
        </form>

      </div>
    </div>
  </div>
</header>
<div class="red-space"></div>
<div class="container-fluid section-rojo">
  <div class="container section-rojo info-contacto">
    <h2>Datos de Contacto</h2>
    <p>En INGEOMAC LTDA estamos comprometidos con la prestación de un servicio de calidad, es por eso que estamos siempre atentos a cualquier tipo de comunicación que nuestros clientes quieran tener con nosotros, debido a eso tenemos distintos canales y medios por los cuales nos podemos  comunicar.</p>
  </div>
  <article class="container callToAction section-rojo ">
    <div class="row p-container">
      <div class=" col-xs-12 col-sm-12 col-md-4 parrafos-contacto parrafosrojo-contacto">
        <img src="images/direccionblanco.svg"></a>
        <h2>Dirección</h2>
        <p>Cl. 19 #35 - 33, Cali, Valle del Cauca</p>
      </div>
      <div class=" col-xs-12 col-sm-12 col-md-4 parrafos-contacto parrafosrojo-contacto">
        <img src="images/telefonoblanco.svg"></a>
        <h2>Teléfono</h2>
        <p>+57 (2) 373 3707</p>
        <p>+57 315 527 5724</p>
      </div>
      <div class=" col-xs-12 col-sm-12 col-md-4 parrafos-contacto parrafosrojo-contacto">
        <img src="images/emailblanco.svg"></a>
        <h2>Email</h2>
        <p>Escríbenos</p>
        <p>gerencia@ingeomac.com</p>
      </div>
    </div>
  </article>
</div>






<?php include("footer.php") ?>
