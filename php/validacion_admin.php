<?php 

/**Para validar la sesion del usuario
* 
*/
require("conexion.php");
session_start();
class Validacion extends conexion{
	public $empleado;
	
	function __construct($tabla){
		parent::__construct();
		if(isset($_SESSION["userw"])){
			$usuario_login = $_SESSION["userw"];
			$pass_login = $_SESSION["passw"];
			

			$sql = "SELECT * FROM $tabla WHERE username = '$usuario_login' and contrasena = '$pass_login'";
			$result=$this->conexion->query($sql);

			if($result-> num_rows>0){
				$row = $result-> fetch_assoc();
				$this->empleado = $row["empleado"];
			}else{
				echo "<script>location=('../ingeomac/admin_login.php');</script> ";
			}
		}else{	
				echo "<script>location=('../ingeomac/admin_login.php');</script> ";
		}
	}	
}

 ?>