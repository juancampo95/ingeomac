<?php 
	header('Access-Control-Allow-Origin: *');
	session_start();
	require("conexion.php");

	class Login extends conexion {

		public function __construct($tabla){

			parent::__construct();
			$data = json_decode(file_get_contents("php://input"));

			if(count($data)>0){
				$username = mysqli_real_escape_string($this->conexion,$data->username);
				$pass = mysqli_real_escape_string($this->conexion,$data->pass);
				
				$query = "SELECT * FROM $tabla WHERE username = '$username' and contrasena = '$pass'";
				$result = mysqli_query($this->conexion,$query);

				if(mysqli_num_rows($result)>0){
					$row = mysqli_fetch_array($result);
					
					$_SESSION['userw'] = $row['username'];
					$_SESSION['passw'] = $row['contrasena'];			
					echo "correcto";
				}else{	
					echo "Los datos son incorrectos";
				}
			}
		}

	}

	$login = new Login('users');
 ?>