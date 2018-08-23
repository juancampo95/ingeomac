<?php 
	header('Access-Control-Allow-Origin: *');
	session_start();
	require("conexion.php");

	class Login extends conexion {

		public function __construct($tabla){

			parent::__construct();
			$data = json_decode(file_get_contents("php://input"));

			if(count($data)>0){
				$email = mysqli_real_escape_string($this->conexion,$data->email);
				$pass = mysqli_real_escape_string($this->conexion,$data->obra_id);
				
				$query = "SELECT * FROM $tabla WHERE email = '$email' and obra_id = '$pass'";
				$result = mysqli_query($this->conexion,$query);

				if(mysqli_num_rows($result)>0){
					$row = mysqli_fetch_array($result);
					
					$_SESSION['email_service'] = $row['email'];
					$_SESSION['passw_service'] = $row['obra_id'];
					$_SESSION['fullname_service'] = $row['fullname'];				
					echo "correcto";
				}else{	
					echo "Los datos son incorrectos";
				}
			}
		}

	}

	$login_services = new Login('clients');
 ?>