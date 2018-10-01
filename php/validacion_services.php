<?php 

/**Para validar la sesion del usuario
* 
*/
require("conexion.php");
session_start();
class Validacion extends conexion{
	public $empleado;
	public $obra_id;
	
	function __construct($tabla){
		parent::__construct();
		if(isset($_SESSION["username_service"])){
			$usuario_login = $_SESSION["username_service"];
			$pass_login = $_SESSION["passw_service"];
			
			

			$sql = "SELECT * FROM $tabla WHERE username = '$usuario_login' and obra_id = '$pass_login'";
			$result=$this->conexion->query($sql);

			if($result-> num_rows>0){
				$row = $result-> fetch_assoc();
				$this->empleado = $row["fullname"];
				$this->obra_id = $row["obra_id"];
			}else{
				echo "<script>location=('../ingeomac/services_login.php');</script> ";
			}
		}else{	
				echo "<script>location=('../ingeomac/services_login.php');</script> ";
		}
	}	
}

 ?>