var app = angular.module("login_app",['ngRoute']);

app.config(function($routeProvider) {
	$routeProvider.when('/',{
		templateUrl: '../ingeomac/php/login.php',
		controller:'login_controller'
	}).otherwise({
		template:'404'
	})
});

app.controller('login_controller', function($scope,$http,$window){


	$scope.login = function(){
		
		$http({
			method:'POST',
			url:'../ingeomac/php/login.php',
			headers: {
				'ContentType' : 'application/x-www-form-urlencoded'
			},
			data: {
				'username' : $scope.username,
				'pass' : $scope.contrasena
			}
		}).then(function(response){
			if(response.data =='correcto'){
				$scope.respuesta = 'Ingresó sesión correctamente.';
				$scope.advise = {display:"block",color:"#00C900"}
				for(i=0;i<11;i++){
					if(i==10){$window.location.href = '../ingeomac/admin_dash.php';}
				}
			}else{
				$scope.respuesta = 'Datos incorrectos, por favor intente nuevamente.';
				$scope.advise = {display:"block",color:"red"}
			}
		});
	}
});