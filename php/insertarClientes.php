<?php 
	require("conexion.php");

	class insertar extends conexion{
		public function __construct($tabla){
			parent::__construct();

			$cliente = json_decode(file_get_contents("php://input"));

			if(count($cliente)>0){
				$ful = mysqli_real_escape_string($this->conexion,$cliente->fullname);
				$com = mysqli_real_escape_string($this->conexion,$cliente->constructora);
				$ph = mysqli_real_escape_string($this->conexion,$cliente->phone);
				$cel = mysqli_real_escape_string($this->conexion,$cliente->cellphone);
				$cor = mysqli_real_escape_string($this->conexion,$cliente->correo);
				$ob = mysqli_real_escape_string($this->conexion,$cliente->obra);
				$obid = mysqli_real_escape_string($this->conexion,$cliente->obra_id);
				$fechaActual = mysqli_real_escape_string($this->conexion,$cliente->fecha_actual);
				$btn_name = $cliente->btnName;
				
				if($btn_name == "Crear Obra"){
					$query = "INSERT INTO $tabla (fullname,company,phone,cellphone,email,obra_id,obra,fecha_creacion) 
					VALUES 	('$ful','$com','$ph','$cel','$cor','$obid','$ob','$fechaActual')";
					if(mysqli_query($this->conexion,$query)){
						echo "Data insertada correctamente ->" . uniqid("HHA",TRUE);
					}else{
						 echo("Error description: " . mysqli_error($this->conexion));
					}
				}
				if($btn_name == "Actualizar Datos"){
					$id = $cliente->id;
					$query = "UPDATE $tabla SET 
					fullname = '$ful',
					company = '$com',
					phone = '$ph',
					cellphone = '$cel',
					email = '$cor',
					obra_id = '$obid',
					obra = '$ob',
					fecha_modificacion = '$fechaActual' WHERE id = '$id'";

					if(mysqli_query($this->conexion,$query)){
						echo "Dato actualizado";
					}else{
						echo "falló la actualización";
					}
				}
			}



		}
	}

	$clienteNuevo = new insertar("clients");
 ?>