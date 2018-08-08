<?php
	require("conexion.php");

	class insertarDocs extends conexion{


		public function __construct($tabla){
			parent::__construct();
			
			if(!empty($_FILES)){

				$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
				$formato;
				if($ext == "pdf"){
					$formato = "pdf.svg";
				}else if($ext == "xlsx" || $ext == "xlt" || $ext == "xls"){
					$formato = "excel.svg";
				}else if($ext == "docx" || $ext == "doc" || $ext == "dotx"){
					$formato = "word.svg";
				}else{
					$formato = "archivo.svg";
				}
				$obra_id =  $_POST['obra_id_docs'];
				$type =  $_POST['type_doc'];
				$fecha_subida =  new DateTime();
				$stringDate = $fecha_subida->format("Y-m-d\TH:i:sP");
				$path = 'upload/' . $_FILES['file']['name'];
				
				if(move_uploaded_file($_FILES['file']['tmp_name'], $path)){
					$query = "INSERT INTO $tabla (obra_id_docs,name_docs,create_date_docs,formato_docs,type_doc) VALUES 
					('$obra_id' ,'".$_FILES['file']['name']."','$stringDate','$formato','$type')";
					if(mysqli_query($this->conexion,$query)){
						echo "Archivo subido";
					}else{
						echo "Archivo subido pero no guardado";
					}
				}
			}else{
				echo "some error";
			}
		}
	}

	$insertarDocs = new insertarDocs("reportes");
 ?>