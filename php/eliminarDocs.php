<?php 	
	require("conexion.php");

	class eliminar extends conexion{
		public function __construct($tabla){
			parent::__construct();

			$data = json_decode(file_get_contents("php://input"));
			if(count($data)>0){
				$id = $data->id;
				/*aqui selecciono el nombre del documento para eliminarlo*/
				$fichero = array();
				$query  = "SELECT name_docs FROM $tabla WHERE id_docs ='$id'";
				$result = mysqli_query($this->conexion,$query);

				if(mysqli_num_rows($result)>0){
					$row = mysqli_fetch_array($result);
					unlink("upload/$row[0]");
					$query  = "DELETE FROM $tabla WHERE id_docs ='$id'";
				}else{
					echo "alert('no funciono')";
				}
				if(mysqli_query($this->conexion,$query)){
					echo "Datos eliminados correctamente";
				}else{
					echo "No se eliminaron los datos, existe un falló";
				}
				// $query = "DELETE FROM $tabla WHERE id_docs = '$id'";
			}
		}
	}
	$eliminarObra = new eliminar("reportes");

 ?>