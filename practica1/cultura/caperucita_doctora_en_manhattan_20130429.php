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
    <div class="main cultura">
	<div id="logo">
          <img  src="../../logo/indep.jpg" alt="indep">
	</div>

        <div id="iniciarSesion">

	</div>

	<ul class="secciones">
           <li class="celda internacional"> <a href="internacional.html">Internacional </a> </li>
	   <li class="celda politica"> <a href="politica.html"> Política </a > </li>
	   <li class="celda cultura"> <a href="cultura.html"> Cultura </a> </li>
           <li class="celda deportes"> <a href="deportes.html"> Deporte </a> </li>
        </ul>
        
        <div > <h1 class="nombre"> Cultura </h1> </div>
        
        <div class="noticia">
        <img class="poscentro" src="../../images/caperucita_doctora_en_manhattan_20130429" alt="hombre abatido">
        <p class="imgfoot" >La escritora Carmen Martín Gaite. / Ana Torralba </p>
         
         <h2 onmouseover="relacionadas()"> Caperucita, doctora en Manhattan </h2>
         
         <p>¡Miranfú! Carmen Martín Gaite dijo la palabra mágica de su Caperucita en Manhattan, se abrió la alcantarilla y una corriente gustosa de aire tibio la ascendió hasta la corona de la estatua de la Libertad. Allí sigue, reinando como si no hubiera muerto. En Estados Unidos, donde aman a los reyes con vehemencia republicana, la han entronizado como el gran clásico de la literatura española contemporánea. El único autor de España presente en 56 universidades al norte del Río Grande.</p>

         <p>Ni Benet, encumbrado entre la élite como el más singular de su generación y amadrinado por la escritora —como evidencia la correspondencia entre ambos editada recientemente por el profesor José Teruel—, ni Sánchez Ferlosio, su exmarido, han permanecido indemnes al paso del tiempo. “Ella es imprescindible. El cuarto de atrás es una novela canónica. Nadie puede doctorarse en Estados Unidos sin haberla leído, sin embargo ya casi nadie enseña a Benet ni El Jarama”, explica la catedrática de la Universidad de Delaware Joan L. Brown.</p>

         <p>Y Brown no le dice por admiración —escribió en los setenta la primera tesis sobre Carmiña de su país— ni nostalgia —lo anterior, desde 1974, las convirtió en grandes amigas—. Esta catedrática ha dedicado dos estudios (1998 y 2008) a fijar el canon académico de la literatura española a partir de la investigación del programa de 56 universidades. Después de un complicado proceso de recopilación de datos, descubrió con placer el lugar que ocupaba su amiga escritora. Ni entre visillos, ni envuelta en nubosidad variable, Carmen Martín Gaite (Salamanca, 1925-Madrid, 2000) presidía el frontispicio, a la cabeza de los programas de estudio.</p>

         <p>Tal vez sea la secuencia lógica al fenómeno que se había fraguado en vida de aquella autora que en sus últimos años tenía aspecto de reina de las nieves. “EE UU le dio antes que España tres cosas muy importantes: la fama, el dinero y un cuarto propio para escribir”, sostiene Joan L. Brown. No solo el mundo académico se rindió a sus pies, también lo hizo la crítica, incluida la del The New York Times, que celebró sin remilgos El cuarto de atrás. “Los norteamericanos aficionados a lo ibérico han desarrollado una pasión excepcional por Carmen Martín Gaite y, quiéralo o no ella, también se ha convertido en una de las figuras más importantes en el terreno de los estudios feministas actuales”, escribió John W. Kronik, de la Universidad de Cornell, dos años antes de la muerte de la autora de Lo raro es vivir. Los trabajos no cesan. Roberta Johnson, de la Universidad de Kansas, se ha sumado recientemente con un estudio sobre los paralelismos entre dos obras que María Zambrano y Carmen Martín Gaite escribieron enfermas.</p>

         
        
        
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
        
        <br /> <br />
  
        <form id="aniadirComentario" method="post" onsubmit="return validar('<?echo $_SESSION['usuario'] ;?>')">
          <textarea cols="85" rows="10" enabled name="nuevoComentario"> </textarea>
	  <input type="submit" value="Enviar" > 
	</form>       


   </div> <!-- fin de .main-->
  </body>
</html>
