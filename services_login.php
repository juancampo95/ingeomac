<?php include("nav_login.php") ?>

<div class="fondo_login_rojo"></div>
<div class="full-container" ng-controller="login_S_controller">
	<h1>Inicio de sesión</h1>
	<div class="container z-depth-1-half">
		<div class="row">
			<div class="col-md-6 foto_left" style="background-image: url('images/firma.jpg')">
				<img width="200" src="images/LogoVeritas.svg" alt="">
			</div>
			<div class="col-md-6 form-container">
				<form>
					<h3>Ingresa tus datos</h3>
					 <div class="md-form inputs-margin">
	                    <i data-feather="user" class="prefix"></i>
	                    <input  type="text" id="username" class="form-control" name="username" ng-model="username">
	                    <label for="username">Usuario</label>
	                 </div>  
					 <div class="md-form inputs-margin">
	                    <i data-feather="user" class="prefix"></i>
	                    <input  type="password" id="contrasena" class="form-control" name="contrasena" ng-model="contrasena">
	                    <label for="contrasena">Contraseña</label>
	                 </div>
	                 <p class="text-center advise" ng-style="advise">{{respuesta}}</p>
	                 <div class="col-xs-12 col-md-12 text-center">
						<input data-dismiss="modal" ng-click="login()" class="btn btn-danger " type="button" value="Ingresar">
	                 </div>	                  
				</form>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php") ?>