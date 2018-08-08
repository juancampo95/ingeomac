app.directive("fileDropzone",function(){
	return{
		restrict : 'A',
		scope : {
			filesToUpload : "="
		},
		link : function(scope,element,attributes){
			element.bind('dragover',function(e){
				if(e != null){
					e.preventDefault();
				}
				e.dataTransfer.effectAllowed = 'copy';
				element.attr('class','dragged-zone-over');
			});
			element.bind('dragenter',function(e){
				if(e != null){
					e.preventDefault();
				}
				e.dataTransfer.effectAllowed = 'copy';
				element.attr('class','dragged-zone-over');
			});

			element.bind('drop',function(e){
				element.attr('class','dragged-zone');
				if(e != null){
					e.preventDefault();
				}

				var fileObjectsArray = [];
				angular.forEach(e.dataTransfer,files,function(file){

					var reader = new FileReader();
					reader.onload = function(e){
						scope.$apply(function(){
							var newFilePreview = e.target.result;
							var newFileName = file.name;
							var newFileSize = file.size;

							var fileObject = {
								file : file,
								name : newFileName,
								size : newFileSize,
								preview : newFilePreview
							}

							fileObjectsArray.push(fileObject);
						});
					}
					reader.readAsDataURL(file);
				});
				scope.filesToUpload = fileObjectsArray;
			})
		}

	}
}).call(this);