<?php include("nav.php") ?>
	<header class="container-fluid header" style="background-image: url('images/Inicio.jpg');">
		<div class="container">
			<h1>Calidad y compromiso</h1>
		</div>
	</header>

	<section class="container-fluid">
		<article class="container callToAction botones">
			<h2>Servicios Web</h2>
			<p>Aquí en Ingeomac LTDA siempre pensamos en nuestros clientes y como mejorar la atención y los servicios ofrecidos. Es por esta razón que renovamos nuestro sitio web y aprovechamos la nuevas tecnologías para hacerla dinámica y funcional. Brindando dos la consulta de informes de manera online y la actualización de los datos personales para facilitar el contácto.</p>
			<div>
				<a class="btn btn-danger btn-lg img-after" href="#">Consultar Informes</a>
				<a class="btn btn-grey btn-lg img-after" href="#">Actualizar Datos</a>
			</div>
		</article>
	</section>
	<section class="container-fluid section-rojo">
		<article class="container callToAction ">
			<h2>Servicios Web</h2>
			<div class="row p-container">
				<div class=" col-xs-12 col-sm-12 col-md-4 parrafos">
					<p>Contamos con 15 años de experiencia en el mercado.</p>
				</div>
				<div class=" col-xs-12 col-sm-12 col-md-4 parrafos">
					<p>Le permitimos conocer con exactitud la calidad de sus materiales.</p>
				</div>
				<div class=" col-xs-12 col-sm-12 col-md-4 parrafos">
					<p>Trabajamos con concreto, pavimento, mampostería, entre otros.</p>
				</div>
			</div>
			<a class="btn btn-white btn-lg btn-only" href="#">Ver más</a>
		</article>
	</section>

	<?php	include("components/cards_index.php"); ?>

	<section class="container-fluid section-rojo">
		<article class="container  callToAction">
				<h2>Nuestros Clientes</h2>
				<div class="swiper-container">
		    <div class="swiper-wrapper">
		      <div class="swiper-slide slide-cliente">
		      	<img src="images/clientes/ALPES.png" alt="Logo alpes">
		      </div>
		      <div class="swiper-slide slide-cliente">
						<img src="images/clientes/BARILOCHE.png" alt="Logo alpes">
					</div>
		      <div class="swiper-slide slide-cliente">
						<img src="images/clientes/COMPARTIR.png" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/CONSTRUCTORAALFAGUARA.jpg" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/CONSTRUCTORABOLIVAR.jpg" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/CONSTRUCTORANORMANDIA.png" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/CONSTRUCTORAPREFABRICADOS.png" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/CONSTRUCTORASOLANILLAS.png" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/HABITEK.png" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/LATCO.png" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/MECON.png" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/MORENOTAFUR.jpg" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/PROCON.png" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/SAINC.png" alt="Logo alpes">
					</div>
					<div class="swiper-slide slide-cliente">
						<img src="images/clientes/SKEMA.png" alt="Logo alpes">
					</div>
		    </div>
		    <!-- Add Pagination -->
		    <div class="swiper-pagination"></div>
		    <!-- Add Arrows -->
		    <div class="swiper-button-next"></div>
		    <div class="swiper-button-prev"></div>
	  	</div>
		</article>
	</section>

	<?php	include("footer.php"); ?>
