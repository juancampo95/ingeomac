<!DOCTYPE html>
<html lang="es" ng-app="login_app">
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
	<script src="js/angular-route.js"></script>
	<script src="js/functions/login_functions.js"></script>
</head>
<body class="body_login" ng-controller="login_controller">
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark black z-depth-4">
	    <a class="navbar-brand" href="#">Administración Ingeomac</a>
	</nav>

	<section class="form-big-container">

			<div class="container_form z-depth-1-half">
				<div class="modal-header">
		          <h4 align="center" class="modal-title w-100" id="myModalLabel">Bienvenido</h4>
		        </div>
		        <div class="modal-body row">
		        	<form class="row">
			        	<div class="col-xs-12 col-md-12">
	                        <div class="md-form">
	                            <i data-feather="user" class="prefix"></i>
	                            <input placeholder=" " type="text" id="username" class="form-control" name="username" ng-model="username">
	                            <label for="username">Nombre de Usuario</label>
	                        </div>                    
	                    </div>
	                    <div class="col-xs-12 col-md-12">
	                        <div class="md-form">
	                            <i data-feather="lock" class="prefix"></i>
	                            <input placeholder=" " type="password" id="contraseña" class="form-control" ng-model="contrasena">
	                            <label for="contraseña">Contraseña</label>
	                        </div>
	                    </div>    
						<p class="text-center advise" ng-style="advise">{{respuesta}}</p>

	                    <div class="col-xs-12 col-md-12 text-center">
							<input data-dismiss="modal" ng-click="login()" class="btn btn-danger " type="button" value="Iniciar Sesión">
	                    </div>
                    </form>
		        </div>
			</div>
	</section>
	<section class="row main_login_container">
		<div class="bg-rojo col-md-12"></div>
		<div class="bg-dow col-md-12">
			<div class="row">
	            <div class="col-12 text-md-right text-xs-center mt-4 " style="font-size: 14px;">
	                <p>Todos los derechos reservados ®copyright 2019 Ingeomac.
	                </p>
	                <hr style="border-top: 2px solid rgba(0, 0, 0, 0.8);">
	            </div>	            
	            <div class="col-4 text-md-right text-xs-center mt-4 " style="font-size: 14px;">
	            </div>	            
	            <div class="col-4  mt-4 login_logos_center" style="font-size: 14px;">
	                <img width="200" src="images/LogoVeritasColor.jpg" alt="">
	                <img width="130" src="images/LogoIngeomac1.jpg" alt="">
	            </div>	            
	            <div class="col-4 text-md-right text-xs-center mt-4 " style="font-size: 14px;">
	                <p>Desarrollo y Diseño web 2018 Multiractiva Agencia de Diseño Digital<br>Contacto: ceo@multiractiva.com </p>
	                <img width="200" src="images/logomultir_negro.png" alt="">
	            </div>
	        </div>
		</div>
	</section>
</body>
</html>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>
