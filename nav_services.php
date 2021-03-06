<!DOCTYPE html>
<html lang="es" ng-app="services_app">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Ingeomac Ltda</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<link rel="stylesheet" href="css/mdb.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/services.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/functions/services.js"></script>

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
					<a href="tel:+5723733707" target="_blank"><h5>(2) 373 3707</h5></a>
				</div>
        <a href="javascript:void(0)" class="closebtn" onclick="openNav()"><span class="navbar-toggler-icon"></span></a>
      </div>
    </div>

			<div id="myNav" class="overlayNav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<div class="overlay-content">
					<a class="navbar-brand logo_menu" href="index.php"><img src="images/logo_ingeomac_w.png" alt="logo"> </a>
					<div class="redes_menu">
						<a target="_blank" href="https://www.facebook.com/ingeomac/"><img src="images/rrss/facebooknew.svg"></a>
						<a target="_blank" href="https://www.instagram.com/licores85cali/"><img src="images/rrss/instagramnew.svg"></a>
						<a target="_blank" href="https://api.whatsapp.com/send?phone=573155275724"><img src="images/rrss/whatsappnew.svg"></a>
					</div>
					<a class="links waves-effect" href="index.php">Inicio</a>
					<a class="links waves-effect" href="web_services.php">Servicios web</a>
					<a class="links waves-effect" href="nosotros.php">Nosotros</a>
					<a class="links waves-effect" href="servicios.php">Servicios</a>
					<a class="links waves-effect" href="contacto.php">Contácto</a>
					<a class="links waves-effect" href="admin_dash.php">Aministración</a>
					<a class="navbar-brand logo_menu2" href="index.php"><img src="images/LogoVeritas.svg" alt="logo"> </a>
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
	}else{
		porcentaje = "500px";
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
