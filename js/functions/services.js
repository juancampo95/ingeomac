var app = angular.module("services_app",[]);

app.controller('servicios', function($scope,$http){

	$scope.mostrarDocs = function(obra){
		$http({
			method:'GET',
			url: '../ingeomac/php/mostrarDocsServices.php'
		}).then(function successCallback(respuesta){
			var data = respuesta.data;

				for (var name in data) {

				    if (data.hasOwnProperty(name)) {
				    	var type = data[name].type_doc;

				    	if(type == "densidades"){
				    		$scope.dens_if = true;
				    	}else if(type == "proctor_mod"){
				    		$scope.proctor = true;
				    	}
				    }
				    else {
				        alert(name);
				    }
				}

			$scope.docs = respuesta.data;
			console.log(respuesta.data);

		}, function errorCallback(respuesta){
			console.log("failed" + respuesta);
		});
	}

	$scope.mostrar_S_Datos = function(){
		$http({
			method:'GET',
			url:'../ingeomac/php/mostrarClientesServices.php'
		}).then(function successCallback(respuesta){
			console.log(respuesta);
			$scope.dCliente = respuesta.data;

			$scope.id= $scope.dCliente.id;
			$scope.obra_id = parseInt($scope.dCliente.obra_id);
			$scope.obra = $scope.dCliente.obra;
			$scope.constructora = $scope.dCliente.company;
			$scope.encargado = $scope.dCliente.fullname;
			$scope.phone = parseInt($scope.dCliente.phone);
			$scope.cellphone = parseInt($scope.dCliente.cellphone);
			$scope.correo = $scope.dCliente.email;
			$scope.username = $scope.dCliente.username;

			

		}, function errorCallback(respuesta){
			console.log("failed" + respuesta);
		});
	}

	$scope.actualizarDatos = function(){
		var data ={
			"id" : $scope.id,
			"obra_id" : $scope.obra_id,
			"phone" : $scope.phone,
			"fullname" : $scope.encargado,
			"cellphone" : $scope.cellphone,
			"correo" : $scope.correo,
			"username" : $scope.username,
			"fecha_actual" : new Date()
		};
		$http({
			method:'POST',
			url :'../ingeomac/php/actualizar_S_datos.php',
			data: data
		}).then(function successCallback(respuesta){
			console.log(respuesta);
			alert("El dato fue actualizado correctamente.");
			mostrar_S_Datos();

		},function errorCallback(respuesta){
			console.log(respuesta);

		});
	}

});