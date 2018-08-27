<?php 
	require("conexion.php");

	class insertar extends conexion{
		public function __construct($tabla){
			parent::__construct();

			$cliente = json_decode(file_get_contents("php://input"));

			if(count($cliente)>0){
				$ful = mysqli_real_escape_string($this->conexion,$cliente->fullname);
				$ph = mysqli_real_escape_string($this->conexion,$cliente->phone);
				$cel = mysqli_real_escape_string($this->conexion,$cliente->cellphone);
				$cor = mysqli_real_escape_string($this->conexion,$cliente->correo);
				$username = mysqli_real_escape_string($this->conexion,$cliente->username);
				$obid = mysqli_real_escape_string($this->conexion,$cliente->obra_id);
				$fechaActual = mysqli_real_escape_string($this->conexion,$cliente->fecha_actual);
				

				$id = $cliente->id;
				$query = "UPDATE $tabla SET 
				fullname = '$ful',
				phone = '$ph',
				cellphone = '$cel',
				email = '$cor',
				username = '$username',
				obra_id = '$obid',
				fecha_modificacion = '$fechaActual' WHERE id = '$id'";

				if(mysqli_query($this->conexion,$query)){
					session_start();
					$_SESSION["username_service"] = $username;
					echo "Dato actualizado";

				}else{
					echo "falló la actualización";
				}
			}
		}
	}

	$clienteNuevo = new insertar("clients");
 ?>