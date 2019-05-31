/*
XMLHttpRequest:  manda solicitudes HTTP. Sólo crea una instancia del objeto, 
abre una URL, y envia la solicitud.

 */

      function XMLHttp(){
        var Object;
          if(typeof XMLHttpRequest == "undefined"){
            if(navigator.userAgent.indexOf("MSIE") >= 0){
              Object = new ActiveXObject("Microsoft.XMLHTTP");
            }else{
              Object = new ActiveXObject("Msxml.XMLHTTP");
                  }
          }else{
              Object = new XMLHttpRequest();
                }
                return Object;
      }
/*
Función AJAX importante para la busqueda dinamica y conecta el formulario con el controlador.

 */
      function BusquedaDinamicaAJAX(val) {
        var ajx = new XMLHttp();
        var bus = document.getElementById("buscar");
            with(ajx){
                open("POST","?c=buscar&a=BuscarAJAX",true);
                setRequestHeader("Content-type","application/x-www-form-urlencoded");
                send("buscar="+bus.value);
        onreadystatechange = function(){
            if((readyState == 4) && (status == 200)){
                var resp = responseText;
                document.getElementById("resultadoBusqueda").innerHTML = resp;
                  }
                }
              }
      }


