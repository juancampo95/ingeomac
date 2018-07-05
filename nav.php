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
	<script src="js/jquery-1.11.3.min.js"></script>
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
					<a class="navbar-brand logo_menu" href="index.php"><img src="images/LogoIngeomac1.jpg" alt="logo"> </a>
					<div class="redes_menu">
						<a target="_blank" href="https://www.facebook.com/ranchoylicoresla85/"><img src="images/rrss/facebookwhite.svg"></a>
						<a target="_blank" href="https://www.instagram.com/licores85cali/"><img src="images/rrss/instagramwhite.svg"></a>
						<a target="_blank" href="https://api.whatsapp.com/send?phone=573164050464"><img src="images/rrss/whatsappwhite.svg"></a>
					</div>
					<a class="links waves-effect" href="index.php">Inicio</a>
					<a class="links waves-effect nav-link linksDrop" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios Web</a>
						<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
							<a class="links waves-effect linksDropinner" href="#">Consulta de informes</a>
							<a class="links waves-effect linksDropinner" href="#">Actualización de datos</a>
						</div>
					<a class="links waves-effect" href="nosotros.php">Nosotros</a>
					<a class="links waves-effect" href="#">Servicios</a>
					<a class="links waves-effect" href="contacto.php">Contacto</a>
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
		document.getElementById("img_mapa").src ="images/MapaProcesosNuevoCel.svg";
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
