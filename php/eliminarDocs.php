<?php 	
	require("conexion.php");

	class eliminar extends conexion{
		public function __construct($tabla){
			parent::__construct();

			$data = json_decode(file_get_contents("php://input"));
			if(count($data)>0){
				echo "hola " .  $data->id . " hola" ;
				$id = $data->id;
				$query = "DELETE FROM $tabla WHERE id_docs = '$id'";
				if(mysqli_query($this->conexion,$query)){
					echo "Datos eliminados correctamente";
				}else{

					echo "No se eliminaron los datos, existe un falló";
				}

			}
		}
	}
	$eliminarObra = new eliminar("reportes");

 ?>