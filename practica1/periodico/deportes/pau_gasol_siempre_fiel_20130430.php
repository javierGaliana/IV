<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" media="screen and (min-width:800px)" href="../../styles/noticia.css">
    <link rel="stylesheet" media="screen and (max-width:800px)" href="../../styles/secciones-small.css">
    <title> Diario INDEP, información veraz. </title>
  </head>


  <body>
    <?php
          include_once("../../php/barraUsuario.php");
     ?>   


    <div class="leftad" >
       <div class="der">
         <img  src="../../publicidad/fairyizq.jpg" alt="fairy">
       </div> 
    </div>
    
    
    
    <div class="upad"> 
          <img src="../../publicidad/fairyup.jpg" alt="fairy"> 
    </div>
    
    <div class="rightad">
       <div class="izq">  <img src="../../publicidad/fairyizq.jpg" alt="fairy"> </div> 
    </div>

    

    <!-- A partir de aquí está contenido de la noticia. -->
    <div class="main deportes">
	<div id="logo">
          <img  src="../../logo/indep.jpg" alt="indep">
	</div>

        <div id="iniciarSesion">

	</div>

	<ul class="secciones">
           <li class="celda internacional"> <a href="../internacional.html">Internacional </a> </li>
	   <li class="celda politica"> <a href="../politica.html"> Política </a > </li>
	   <li class="celda cultura"> <a href="../cultura.html"> Cultura </a> </li>
           <li class="celda deportes"> <a href="../deportes.html"> Deporte </a> </li>
        </ul>
        
        <div > <h1 class="nombre"> Deportes </h1> </div>
        
        <div class="noticia">
        <img class="poscentro" src="../../images/pau_gasol_siempre_fiel_20130430" alt="hombre abatido">
        <p class="imgfoot" > Pau Gasol en un partido de la temporada. </p>
         
         <h2 onmouseover="relacionadas()"> Pau Gasol: “Siempre he sido un tipo leal”</h2>
         
        <p>Este martes, Pau Gasol su última rueda de prensa de la temporada como jugador de los Lakers de Los Ángeles, eliminados en la primera ronda de los playoffs de la NBA por los Spurs. "El futuro es incierto, sin duda. No es una situación ideal pero lo acepto. Siento que pertenezco aquí, siempre he sido un tipo leal y prefiero quedarme, pero estoy preparado si no sucede así". Además, expresó que aún no puede confirmar si estará  disponible o no para el próximo Eurobasket que se disputará este año en Eslovenia. "Tendré que hacer pruebas físicas en las rodillas y en el pie, que los tengo tocados. Mis rodillas han sido un problema desde el principio de temporada hasta el final. Luego tendré que seguir un proceso de recuperación y evaluar si eso me permite ir o no. Todo eso será determinado por las pruebas médicas, a partir de ahí decidiremos",</p>

        <p>Gasol ha sufrido varias lesiones esta temporada, una tendinitis en las rodillas, una conmoción cerebral que le dejó fuera del equipo durante varios partidos y también una fascitis plantar. D’Antoni le dejó fuera del equipo titular durante siete partidos en enero. Uno de los objetivos inmediatos de Pau será recuperarse físicamente al 100%. En base a todos los problemas físicos que ha sufrido es probable que no compita con la selección española que defenderá el título en el Campeonato de Europa que se celebrará en Eslovenia del 4 al 22 de septiembre. Los interrogantes sobre el futuro de Pau en el equipo de Los Ángeles, con el que cumple su sexta campaña y tiene un año más de contrato, son numerosos. Podría continuar otra temporada, entrar en un intercambio de jugadores o bien recibir la cláusula de amnistía. Si así fuera, podría escuchar ofertas de otros equipos y los Lakers se harían cargo del pago de la diferencia entre la oferta que aceptara y su contrato para la próxima temporada, que asciende a 19,28 millones de dólares, 14,77 millones de euros.</p>

        <p>“No tengo ni idea de qué va a suceder en el futuro. Está fuera de mi control”, confesó Pau, que en julio cumple 33 años, tras la eliminación de su equipo. “Me sorprendería que no hubiera cambios. Ha sido una temporada muy difícil en muchos sentidos. Hemos intentado dar el máximo a pesar de todo ello y hemos llegado a los playoffs. Debemos estar orgullosos porque el equipo, pese a los múltiples problemas y adversidades, no ha abandonado y ha luchado hasta el final”.<p>

        <p>Preguntado sobre los pormenores de esa trayectoria tan adversa esta temporada, explicó: “Podríamos estar horas hablando de eso. Ha habido de todo. Espero no volver a estar involucrado en una temporada como esta en cuanto a lesiones y situaciones difíciles y duras. Espero que la próxima temporada sea un poco más favorable y fácil para el equipo”.</p> 

        
        
        </div> <!-- fin .noticia -->
   
        <div id="relacionadas">
        <h4> Noticias Relacionadas </h4>
        </div> <!-- Fin de noticias relacionadas-->
        
        <div id="comentarios">
           <br/> <br/><br/>
           <h3> Comentarios </h3>
           <div class="comentario">
              
              <div class="usuario"> peppere </div>
              <div class="texto">
                Verguenza de política exterior española, meterse en casa ajena cuando la propia está 
                descoyuntada. 
              </div>
              <div class="fecha"> 1 de mayo de 2013 </div>
              
        </div> <!-- fin del comentario 1-->
        
        <br /> <br/>
        
        <div class="comentario">
              
              <div class="usuario"> merm </div>
              <div class="texto">
                A mí me parece que Margallo no tiene ni idea de diplomacia, después de meterse con 
                Chaves y el chavismo todo y más, ahora quiere ser intermediario. Desde luego más 
                torpe no se puede ser. A mí particularmente me parece que Chaves no lo ha hecho 
                bien, pero vamos ni locos aceptarían la propuesta de Margallo.  
              </div>
              <div class="fecha"> 1 de mayo de 2013 </div>
              
        </div> <!-- fin del comentario 2-->
           
        </div> <!-- Fin de comentarios-->
        
        <br/> <br/>

      <form id="aniadirComentario" method="post" onsubmit="return validar('<?echo $_SESSION['usuario'] ;?>')">
          <textarea cols="85" rows="10" enabled name="nuevoComentario"> </textarea>
	  <input type="submit" value="Enviar" > 
	</form>
   
   </div> <!-- fin de .main-->
  </body>
</html>
