<?php include("header_admin.php"); ?>

<div ng-controller="general_admin" style="margin-top:55px;" class="container-fluid">
	<div class="row">
		<nav class="col-md-3 col-lg-2 d-none d-md-block bg-dark sidebar-admin">
			<div class="sidebar-sticky z-depth-4">
				<div class="logos_admin">
					<a class="navbar-brand" href="#"><img src="images/LogoIngeomac1.jpg" alt="logo"> </a>
					<a class="navbar-brand" href="#"><img src="images/LogoVeritas.svg" alt="logo"> </a>
				</div>
				<hr>
				<ul ng-init="tab=2" class="nav flex-column">
					<li ng-class="{tabActive:tab===1}" ng-click="tab = 1" class="list-items-admin"><i data-feather="user"></i>Clientes</li>
					<li ng-class="{tabActive:tab===2}" ng-click="tab = 2" class="list-items-admin"><i data-feather="file-text"></i>Informes</li>
				</ul>
			</div>
		</nav>
		<main  role="main" class="col-md-9 col-lg-10 ml-sm-auto  px-4">
<!-- CIERRE DIV DE ENCABEZADO -->
				<?php include("components/admin_clientes.php") ?>
				<?php include("components/admin_docs.php") ?>

        </main>
      </div>
    </div>


<?php include("footer_admin.php"); ?>
