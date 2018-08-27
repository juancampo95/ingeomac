// Creando directiva para subir archivos
app.directive("fileInput",function($parse){
	return{
		link: function($scope,element,attrs){
			element.on("change",function(event){
				var files = event.target.files;
				$parse(attrs.fileInput).assign($scope,element[0].files);
				$scope.$apply();
			});
		}
	}
});
