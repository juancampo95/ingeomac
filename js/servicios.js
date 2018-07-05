  $(document).ready(function(){

    mostrar = function(contenedor){
      console.log("funciona");
      for (var i = 1; i <= 2; i++) {
        var n = "#s" + parseInt(i);
        $(n).fadeOut();
        console.log(n);
      }
      $(contenedor).fadeIn();
    }

  });
