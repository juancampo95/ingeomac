<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Ingeomac Ltda</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mdb.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand navbar-light">
    <div class="container">
			<div class="logo_pagina">
				<a class="navbar-brand" href="#"><img src="images/LogoIngeomac1.jpg" alt="logo"> </a>
	      <a class="navbar-brand" href="#"><img src="images/LogoVeritasColor.jpg" alt="logo"> </a>
			</div>

      <div class="collapse navbar-collapse toggle-lines" id="basicExampleNav">
				<div class="nav-contact">
					<h4>Contácto</h4>
					<h5>373 3707</h5>
				</div>
        <a href="javascript:void(0)" class="closebtn" onclick="openNav()"><span class="navbar-toggler-icon"></span></a>
      </div>
    </div>

			<div id="myNav" class="overlayNav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<div class="overlay-content">
					<a class="navbar-brand logo_menu" href="#"><img src="images/LogoIngeomac1.jpg" alt="logo"> </a>
					<div class="redes_menu">
						<a target="_blank" href="https://www.facebook.com/ranchoylicoresla85/"><img src="images/rrss/facebookwhite.svg"></a>
						<a target="_blank" href="https://www.instagram.com/licores85cali/"><img src="images/rrss/instagramwhite.svg"></a>
						<a target="_blank" href="https://api.whatsapp.com/send?phone=573164050464"><img src="images/rrss/whatsappwhite.svg"></a>
					</div>
					<a class="links" href="#">Servicios Web</a>
					<a class="links" href="#">Nosotros</a>
					<a class="links" href="#">Servicios</a>
					<a class="links" href="#">Contacto</a>
					<a class="navbar-brand logo_menu2" href="#"><img src="images/LogoVeritas.svg" alt="logo"> </a>
				</div>
			</div>
			<div onclick="closeNav()" id="fondonegro"></div>
  </nav>
  <!--/.Navbar-->

  <script>
	var slidesNumber = 3;
	var tamaño = window.innerWidth;
	var porcentaje = "500px";
	if(tamaño <= 790){
		porcentaje = "100%";
	  slidesNumber = 1;
	}else{
		porcentaje = "500px";
		slidesNumber = 3;
	}
  function openNav() {
      document.getElementById("myNav").style.width = porcentaje;
      document.getElementById("fondonegro").style.display = "block";
  }
  function closeNav() {
      document.getElementById("myNav").style.width = "0%";
			document.getElementById("fondonegro").style.display = "none";
  }
  </script>
