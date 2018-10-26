<?php 
	require("php/validacion_services.php");
	$sesion_service = new Validacion('clients');
?>

<?php include("nav_services.php") ?>

<div class="fondo_absolute" style="background-image: url('images/login.jpg');"></div>

<div class="z-depth-1-half container modal-container">
	<div class="header-modal-services ">
		<div>
			<p>Bienvenido,<br>
			<span><?php echo utf8_encode($sesion_service->empleado); ?></span>			
			</p>
		</div>
		<div>
			<a href="php/sesion_S_destroy.php"><button class="btn btn-white">Cerrar Sesión</button></a>
		</div>
	</div>
	<section ng-init="tab=1" class="pagination-modal-services">
		<button ng-class="{tabActive:tab===1}"  ng-click="tab = 1" class="btn btn-danger">Consulta de informes</button>
		<button ng-class="{tabActive:tab===2}"  ng-click="tab = 2" class="btn btn-danger">Actualización de datos</button>
	</section>
	<div ng-controller="servicios" ng-init="mostrarDocs(<?php echo utf8_encode($sesion_service->obra_id);?>)" class="body-modal-services">
		<div class="d-none" ng-class="display">
			<?php include("components/services_docs.php") ?>
			<?php include("components/services_update_data.php") ?>
		</div>

		<div class="col-md-12" style="height: 400px; display: flex; justify-content: center; align-items: center;" ng-class="loading">
			<h1>CARGANDO DATOS...</h1>
		</div>
	</div>
</div>

<?php include("footer_services.php") ?>