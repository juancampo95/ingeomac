var app = angular.module("ingeo_app",[]);


app.controller('general_admin', function($scope,$http){


// SCRIPTS DE CLIENTES
	$scope.mostrar = {display:"none"}
	$scope.DeleteIcon = {display:"flex"}
	$scope.btnName= "Crear Obra";
	
	$scope.btnToCrear = function(){
		$scope.obra_id = null;
		$scope.obra = null;
		$scope.constructora = null;
		$scope.encargado = null;
		$scope.phone = null;
		$scope.cellphone = null;
		$scope.correo = null;
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
	}
	$scope.actualizarCliente = function(id,fullname,company,phone,cellphone,email,obra_id,obra,fecha_creacion,fecha_modificacion){
		$scope.id = id;
		$scope.encargado = fullname;
		$scope.constructora = company;
		$scope.phone = parseInt(phone);
		$scope.cellphone = parseInt(cellphone);
		$scope.correo = email;
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
	$scope.eliminar = function(i){
		var url_Datos;
		if(i=='reportes'){
			var url_Datos = '../ingeomac/php/eliminarDocs.php';
		}else{
			var url_Datos = '../ingeomac/php/eliminarObra.php';
		}
		if(confirm("estas seguro de eliminar el cliente?")){
			$http({
				method:'POST',
				url:url_Datos,
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
			$scope.docs = respuesta.data;
			console.log(respuesta);

		}, function errorCallback(respuesta){
			console.log("failed" + respuesta);
		});
	}


	$scope.crearDoc = function(){
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
	 		$scope.mostrarDocs();
	 	});

	}
	// SCRIPTS DE DOCS CIERRE
});


