<?php
	require("conexion.php");

	class mostrar extends conexion{

		public function __construct($tabla){
			parent::__construct();

			
		}
	}

	$mostrarCliente = new mostrar("clients");



?>
