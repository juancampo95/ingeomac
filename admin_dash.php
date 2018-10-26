<?php 
	require("php/validacion_admin.php");
	$sesion_admin = new Validacion('users');
	
	include("header_admin.php");
?>


<div ng-controller="general_admin" style="margin-top:55px;" class="container-fluid">
	<div class="row">
		<nav class="col-md-3 col-lg-2 d-none d-md-block bg-dark sidebar-admin">
			<div class="sidebar-sticky z-depth-4">
				<div class="logos_admin">
					<a class="navbar-brand" href="#"><img src="images/logo_ingeomac_w.png" alt="logo ingeomac"> </a>
					<a class="navbar-brand" href="#"><img src="images/LogoVeritas.svg" alt="logo veritas"> </a>
				</div>
				<hr>
				<ul ng-init="tab=1" class="nav flex-column">
					<li ng-class="{tabActive:tab===1}" ng-click="tab = 1" class="list-items-admin"><i data-feather="user"></i>Obras</li>
					<li ng-class="{tabActive:tab===2}" ng-click="tab = 2" class="list-items-admin"><i data-feather="file-text"></i>Informes</li>
				</ul>
			</div>
		</nav>
		<main  role="main" class="col-md-9 col-lg-10 ml-sm-auto px-4">
<!-- CIERRE DIV DE ENCABEZADO -->
				<div class="d-none" ng-class="display">
				<?php include("components/admin_clientes.php") ?>
				<?php include("components/admin_docs.php") ?>
				</div>


        </main>
		<div class="col-md-9 col-lg-10 ml-sm-auto px-4" style="height: 100vh; display: flex; justify-content: center; align-items: center;"  ng-class="loading">
			<h1>CARGANDO DATOS...</h1>
		</div>
        
        <main  role="main" class="col-md-12 col-lg-10 ml-sm-auto  px-4" > 
	        <div class="row">
	            <div class="col-12 text-md-right text-xs-center mt-4 " style="font-size: 14px;">
	                <p>Todos los derechos reservados ®copyright 2019 Ingeomac.
	                </p>
	                <hr style="border-top: 2px solid rgba(0, 0, 0, 0.8);">
	                <p>Desarrollo y Diseño web 2018 Multiractiva Agencia de Diseño Digitalbr<br>Contacto: ceo@multiractiva.com </p>
	                <img width="200" src="images/logomultir_negro.png" alt="">
	            </div>
	        </div>
        </main>
      </div>
    </div>


<?php include("footer_admin.php"); ?>
