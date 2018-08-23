<?php
	require("conexion.php");
	session_start();

	class mostrar extends conexion{

		public function __construct($tabla){
			parent::__construct();

			if(isset($_SESSION["email_service"])){
				$obra = $_SESSION['passw_service'];
				$sale = array();
				$query  = "SELECT * FROM $tabla WHERE obra_id_docs ='$obra'";
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
	}

	$mostrarDocs = new mostrar("reportes");



?>
