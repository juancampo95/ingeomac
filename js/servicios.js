  $(document).ready(function(){
    $("#s1").fadeIn();
    mostrar = function(contenedor){
      for (var i = 1; i <= 2; i++) {
        var n = "#s" + parseInt(i);
        $(n).hide();
      }
      $(contenedor).fadeIn();
    }
  });
