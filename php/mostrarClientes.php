<?php
	require("conexion.php");

	class mostrar extends conexion{
		public function __construct($tabla){
			parent::__construct();

			$sale = array();
			$query  = "SELECT * FROM $tabla";
			$result = mysqli_query($this->conexion,$query);

			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_array($result)){
					$sale[] = $row;
					
				}
				echo json_encode($sale);
			}else{
				echo "alert('no funciono')";
			}
		}
	}

	$mostrarCliente = new mostrar("clients");



?>
