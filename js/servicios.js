  $(document).ready(function(){
    $("#s1").fadeIn();
    mostrar = function(contenedor){
      for (var i = 1; i <= 6; i++) {
        var n = "#s" + parseInt(i);
        $(n).hide();
      }
      $(contenedor).fadeIn();
    }
  });
