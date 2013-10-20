function cambiarPagina(num){      
     
      var nuevaPag = document.getElementById("pag");
      nuevaPag.setAttribute("value",num);    
      
      document.forms["pagina"].submit();
      

}

