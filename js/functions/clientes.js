var app = angular.module("ingeo_app",[]);


app.controller('general_admin', function($scope,$http){
 

// SCRIPTS DE CLIENTES
	$scope.mostrar = {display:"none"}
	$scope.DeleteIcon = {display:"flex"}
	$scope.btnName= "Crear Obra";
	$scope.display = "d-none";
	// $scope.loading = "d-block";
	
	$scope.btnToCrear = function(){
		$scope.obra_id = null;
		$scope.obra = null;
		$scope.constructora = null;
		$scope.encargado = null;
		$scope.phone = null;
		$scope.cellphone = null;
		$scope.correo = null;
		$scope.username = null;
		$scope.fecha_creacion = "Aun no se ha creado";
		$scope.fecha_modificacion = "Aun no se ha modificado";
		$scope.modalTitle ="Nueva Obra Ingeomac";
		$scope.btnName= "Crear Obra";
		$scope.mostrar.display = "flex";
		$scope.DeleteIcon.display = 'none';
	}

	$scope.crearCliente = function(){
		if($scope.obra_id == null){
			alert("Ingrese el id de la obra");	
		}else if($scope.obra == null){
			alert("Ingrese el nombre de la obra");
		}else if($scope.constructora == null){
			alert("Ingrese el nombre de la constructora");
		}else if($scope.encargado == null){
			alert("Ingrese el nombre de la persona responsable de la obra");
		}else if($scope.username == null){
			alert("Ingrese el username de la obra");
		}else if($scope.correo == null){
			alert("Ingrese el correo electrónico el responsable de la obra");
		}else{
			console.log($scope.constructora);
			$http({
				method:"POST",
				url:"../ingeomac/php/insertarClientes.php",
				data: 
				{
					'obra_id' : $scope.obra_id,
					'obra' : $scope.obra,
					'constructora' : $scope.constructora,
					'fullname' : $scope.encargado,
					'phone' : $scope.phone,
					'cellphone' : $scope.cellphone,
					'correo' : $scope.correo,
					'username' : $scope.username,
					'btnName' : $scope.btnName,
					'fecha_actual' : $scope.fechaActual = new Date(),
					'id' : $scope.id
				}
			}).then(function successCallback(respuesta){
				console.log(respuesta.data);

				$scope.obra_id = null;
				$scope.obra = null;
				$scope.constructora = null;
				$scope.encargado = null;
				$scope.phone = null;
				$scope.cellphone = null;
				$scope.correo = null;
				$scope.username = null;
				$scope.mostrarClientes();
			});
		}
	}
	$scope.mostrarClientes = function(){
		
			$http({
				method:'GET',
				url: '../ingeomac/php/mostrarClientes.php'
			}).then(function successCallback(response){
				$scope.clientes = response.data;
				console.log(response.data);

			}, function errorCallback(response){
				console.log("failed" + response);
			});
			$scope.loading = "d-none";
			$scope.display = "d-block";
		

	}
	$scope.actualizarCliente = function(id,fullname,company,phone,cellphone,email,username,obra_id,obra,fecha_creacion,fecha_modificacion){
		$scope.id = id;
		$scope.encargado = fullname;
		$scope.constructora = company;
		$scope.phone = parseInt(phone);
		$scope.cellphone = parseInt(cellphone);
		$scope.correo = email;
		$scope.username = username;
		$scope.obra_id = parseInt(obra_id);
		$scope.obra = obra;
		$scope.fecha_creacion = fecha_creacion;
		$scope.fecha_modificacion = fecha_modificacion;
		$scope.mostrarClientes();
		$scope.btnName = "Actualizar Datos";
		$scope.modalTitle ="Actualizar Obra Ingeomac";
		$scope.mostrar.display = "none";
		$scope.DeleteIcon.display = 'inline-block';
	}
	$scope.eliminar = function(){
		if(confirm("estas seguro de eliminar el cliente?")){
			$http({
				method:'POST',
				url:'../ingeomac/php/eliminarObra.php',
				data :{'id':$scope.id}
			}).then (function successCallback(response){
				$scope.mostrarClientes();
				console.log(response);
			},function errorCallback(response){
				alert("vuelve a intentar");
			});
		}else{
			return false;
		}
	}
// SCRIPTS DE CLIENTES CIERRE

// SCRIPTS DE DOCS
	
	$scope.files = [];

	$scope.btnNameDoc = "Cargar reporte";
	$scope.mostrarDocs = function(){
		$http({
			method:'GET',
			url: '../ingeomac/php/mostrarDocs.php'
		}).then(function successCallback(respuesta){
			var data = respuesta.data;
				// Sirve para cultar toda la tabla sino existe ese tipo de documento
				for (var name in data) {
				    if (data.hasOwnProperty(name)) {
				    	var type = data[name].type_doc;
				    	if(type == "alquiler_e"){$scope.alquiler_e_if = true;}
				    	else if(type == "adoquines"){$scope.adoquines_if = true;}
				    	else if(type == "agregados"){$scope.agregados_if = true;}
				    	else if(type == "analisis_e"){$scope.analisis_e_if = true;}
				    	else if(type == "agua"){$scope.agua_if = true;}
				    	else if(type == "baldosas"){$scope.baldosas_if = true;}
				    	else if(type == "baldosin"){$scope.baldosin_if = true;}
				    	else if(type == "concreto"){$scope.concreto_if = true;}
				    	else if(type == "mamposteria"){$scope.mamposteria_if = true;}
				    	else if(type == "mortero"){$scope.mortero_if = true;}
				    	else if(type == "mezcla_a"){$scope.mezcla_a_if = true;}
				    	else if(type == "nucleos"){$scope.nucleos_if = true;}
				    	else if(type == "suelos"){$scope.suelos_if = true;}
				    	else if(type == "losetas"){$scope.losetas_if = true;}
				    	else if(type == "otros"){$scope.otros_if = true;}
				    }
				    else {
				        alert(name);
				    }
				}



			$scope.docs = respuesta.data;
			console.log(respuesta);

		}, function errorCallback(respuesta){
			console.log("failed" + respuesta);
		});
	}


	$scope.crearDoc = function(){

		if($scope.obra_doc == null || $scope.type_doc == null){
			alert("Ingrese el los datos requeridos");	
		}else{

			var form_data = new FormData();
		 	angular.forEach($scope.files,function(file){
		 		form_data.append('file',file);
		 	});

		 	form_data.append('obra_id_docs',$scope.obra_doc);
		 	form_data.append('type_doc',$scope.type_doc);
		 	
		 	$http({
		 		method : 'POST',
		 		url : '../ingeomac/php/insertarDocs.php',
		 		data : form_data,
		 		transformRequest : angular.identity,
		 		headers:{
		 			'Content-Type' : undefined,
		 			'Process-Data' : false
		 		}
		 	}).then(function successCallback(response){
		 		console.log("successfully" + response.data);
		 		$scope.file_input = null;
		 		$scope.obra_doc = null;
		 		$scope.type_doc = null;
		 		$scope.mostrarDocs();
		 	});

			
		}

	 	
	}
	$scope.eliminarDocs = function(i){
		
		console.log(i);
		if(confirm("estas seguro de eliminar el cliente?")){
			$http({
				method:'POST',
				url:'../ingeomac/php/eliminarDocs.php',
				data :{'id':i}
			}).then (function successCallback(response){
				$scope.mostrarClientes();
				console.log(response);
				$scope.mostrarDocs();
			},function errorCallback(response){
				alert("vuelve a intentar");
			});
		}else{
			return false;
		}
	}
	// SCRIPTS DE DOCS CIERRE
});


