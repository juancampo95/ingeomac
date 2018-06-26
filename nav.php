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
      <a class="navbar-brand logo_pagina" href="#"><img src="images/LogoIngeomac1.jpg" alt="logo"> </a>
      <div class="collapse navbar-collapse toggle-lines" id="basicExampleNav">
        <a href="javascript:void(0)" class="closebtn" onclick="openNav()"><span class="navbar-toggler-icon"></span></a>
      </div>
    </div>
    <div id="myNav" class="overlayNav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
      </div>
    </div>
  </nav>
  <!--/.Navbar-->

  <script>
	var tamaño = window.innerWidth;
	var porcentaje = "50%";
	if(tamaño <= 790){
		porcentaje = "100%";
	}else{
		porcentaje = "50%";
	}
  function openNav() {
      document.getElementById("myNav").style.width = porcentaje;
  }
  function closeNav() {
      document.getElementById("myNav").style.width = "0%";
  }
  </script>
