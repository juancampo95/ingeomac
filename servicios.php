<?php include("nav.php") ?>

<header class="container-fluid header us-header" style="background-image: url('images/Servicios.jpg');">
  <div class="container callToAction section-rojo flotante margin_servicios">
    <h2>Servicios</h2>
    <div class="row us-inicio img_servicios">
      <h3>En Ingeomac Ltda.</h3>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 parrafo-servicios">
        <p>Estamos comprometidos con entregar resultados oportunos, idóneos y confiables,
          dando cumplimiento a la normatividad vigente, con equipos e infraestructura de
          la mejor calidad, talento humano competente y comprometido con el mejoramiento
          continuo y la satisfacción de nuestros clientes.</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <img src="images/ServiciosFlotante.jpg" alt="">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <img src="images/LogoVeritas.svg" alt="">
      </div>
    </div>
  </div>
</header>
<div class="white-space-services"></div>
<div class="container info-nosotros margin_info">
  <h2 class="mb-5">Nuestros Servicios</h2>
</div>

<section class="container-fluid">
  <div class="row">
    <aside class="col-lg-2 servicios_links">
      <ul>
        <a href="#anclaServices"><li class="waves-effect" onclick="mostrar(s1)" >Concreto y mortero</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="mostrar(s2)" >Mampostería estructural</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="mostrar(s3)" >Mezcla Asfáltica</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="mostrar(s4)" >Suelos</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="mostrar(s5)" >Ensayos Químicos</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="mostrar(s6)" >Patología de Estructuras</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="" >Mampostería estructural</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="" >Mampostería estructural</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="" >Mampostería estructural</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="" >Mampostería estructural</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="" >Mampostería estructural</li></a>
        <a href="#anclaServices"><li class="waves-effect" onclick="" >Mampostería estructural</li></a>
      </ul>
    </aside>
    <article id="anclaServices" class="col-lg-10 descripcion_article">
      <?php include ("servicios_info.php") ?>
    </article>
  </div>
</section>
<article class="container-fluid text-center callto">
  <h2>Contáctanos para más información</h2>
  <a class="btn btn-danger btn-lg" href="#">Envíanos un mail</a>
</article>
<script src="js/servicios.js"></script>
<?php include("footer.php") ?>

<script name="animación de desplazamiento de flecha">
	$(function(){
	 $('a[href*=#anclaServices]').click(function() {
	 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
			 && location.hostname == this.hostname) {
					 var $target = $(this.hash);
					 $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
					 if ($target.length) {
							 var targetOffset = $target.offset().top;
							 $('html,body').animate({scrollTop: targetOffset}, 1000);
							 return false;
					}
		 }
 });
});
</script>
