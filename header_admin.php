

<!DOCTYPE html>
<html lang="es" ng-app="ingeo_app">
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Administración Ingeomac</title>
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mdb.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/admin.css">
	<script src="js/angular.min.js"></script>
	<script src="js/functions/clientes.js"></script>
	<script src="js/functions/docs.js"></script>
</head>
<body >
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark black z-depth-4">
	    <a class="navbar-brand" href="#">Administración Ingeomac  </a>


	    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	        <ul class="navbar-nav ml-auto mt-lg-0">
	        	<li>
	        	<i style="color: white;" data-feather="user"></i> <a class="navbar-brand" href="#"><?php echo utf8_encode($sesion_admin->empleado); ?></a>
	        	</li>
	            <li class="nav-item active ">
	                <a class="nav-link" href="php/sesion_destroy.php"><i data-feather="log-out"></i>	Cerrar sesión <span class="sr-only" >(current)</span></a>
	            </li>
	        </ul>
	    </div>
	</nav>

