<?php
	require("conexion.php");
	session_start();
	class mostrar extends conexion{

		public function __construct($tabla){
			parent::__construct();

			if(isset($_SESSION['email_service'])){
				$email = $_SESSION['email_service'];
				$obra = $_SESSION['passw_service'];

				$salida = array();
				$query  = "SELECT * FROM $tabla WHERE email = '$email' and obra_id = '$obra'";
				$result = mysqli_query($this->conexion,$query);

				if(mysqli_num_rows($result)>0){
					$row = mysqli_fetch_array($result);

					echo json_encode($row);
				}else{
					echo "alert('no funciono')";
				}
			}else{
				echo "no funcionó" . mysqli_error($this->conexion);
			}
		}
	}

	$mostrarCliente = new mostrar("clients");



?>
