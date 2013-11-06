
function aniadirFunc(){
   
   var pestania = document.getElementById("nombre");
   pestania.setAttribute("name","nombreAniadir");
   pestania = document.getElementById("et");
   pestania.innerHTML="Nombre";
   var box = document.getElementById("adm");   
   box.style.backgroundColor='#B0E0E6';
   
}


function eliminarFunc(){
   
   var pestania = document.getElementById("nombre");
   pestania.setAttribute("name","idBorrar");
   pestania = document.getElementById("et");
   pestania.innerHTML="Numero";
   var box = document.getElementById("adm");
   box.style.backgroundColor='#F0E68C';
   
}

function modificarFunc(){
   
   var pestania = document.getElementById("nombre");
   pestania.setAttribute("name","idModificar");
   pestania = document.getElementById("et");
   pestania.innerHTML="Numero";
   var box = document.getElementById("adm");
   box.style.backgroundColor='#98FB98';
   
}


function mostrarTexto(obj){
   if(document.getElementById("nombre").getAttribute("name") == "idBorrar" ||
      document.getElementById("nombre").getAttribute("name") == "idModificar"){

      if(obj.value != ""){
          return obj.value;

      }
   }

}

